#include <SoftwareSerial.h>
SoftwareSerial sim(10, 11);
int _timeout;

int onOffState = 1;
int lastonOffState = 1;
    
int key = 2;
int onOff = 3;

//for smoke sensor
int buzzer = 5;
int smokeA0 = A5;
int check = 0;
int check2 = 0;
// Your threshold value
int sensorThres = 200;
    
String _buffer;
String number = "+8801815463938"; //-> change with your number
void setup() {
  pinMode(key, INPUT);
  pinMode(onOff, INPUT);

  //for smoke sensor
  pinMode(buzzer, OUTPUT);
  pinMode(smokeA0, INPUT);
  delay(7000); //delay for 7 seconds to make sure the modules get the signal
  Serial.begin(9600);
  _buffer.reserve(50);
  Serial.println("Sistem Started...");
  sim.begin(9600);
  delay(1000);
}
void loop(){

  smoke();
  
  // key==1; system ON;
  int keyState = digitalRead(key);

  if(keyState == HIGH){
    Serial.println("System ON!!");
    onOffState = digitalRead(onOff);
    if(onOffState != lastonOffState){
      if(onOffState == LOW){
        Serial.println("Calling first time.");
        callNumber();
        if (sim.available() > 0){
          Serial.write(sim.read());
        }
        delay(90000);
        Serial.println("Calling second time.");
        callNumber();
        if (sim.available() > 0){
          Serial.write(sim.read());
        }
        delay(60000);
        SendMessageO();
        if (sim.available() > 0){
          Serial.write(sim.read());
        }
        Serial.println("SMS sent.");
        delay(20000);     
      }
    }
    lastonOffState = onOffState;
  }
  else{
    Serial.println("System is turned off using key!");
  }  
}

void smoke(){
  int analogSensor = analogRead(smokeA0);

  Serial.print("Pin A0: ");
  Serial.println(analogSensor);
  // Checks if it has reached the threshold value
  if (analogSensor > sensorThres)
  {
    tone(buzzer, 1000, 200);
    check2 = 1;
    if(check2 != check){
      if(check2 == 1){
        Serial.println("Calling first time.");
        callNumber();
        if (sim.available() > 0){
          Serial.write(sim.read());
        }
        delay(60000);
        Serial.println("Calling second time.");
        callNumber();
        if (sim.available() > 0){
          Serial.write(sim.read());
        }
        delay(60000);
        SendMessageF();
        if (sim.available() > 0){
          Serial.write(sim.read());
        }
        Serial.println("SMS sent.");
        delay(20000);    
      }
    }
    check = check2;
  }
  else
  {
    check = 0;
    noTone(buzzer);
  }
  delay(100);
}

//send sms for sutter opening
void SendMessageO(){
  //Serial.println ("Sending Message");
  sim.println("AT+CMGF=1");    //Sets the GSM Module in Text Mode
  delay(1000);
  //Serial.println ("Set SMS Number");
  sim.println("AT+CMGS=\"" + number + "\"\r"); //Mobile phone number to send message
  delay(1000);
  String SMS = "Shutter Opend!!";
  sim.println(SMS);
  delay(100);
  sim.println((char)26);// ASCII code of CTRL+Z
  delay(1000);
  _buffer = _readSerial();
}

//send sms for fire
void SendMessageF(){
  //Serial.println ("Sending Message");
  sim.println("AT+CMGF=1");    //Sets the GSM Module in Text Mode
  delay(1000);
  //Serial.println ("Set SMS Number");
  sim.println("AT+CMGS=\"" + number + "\"\r"); //Mobile phone number to send message
  delay(1000);
  String SMS = "Fire Emergency!!!";
  sim.println(SMS);
  delay(100);
  sim.println((char)26);// ASCII code of CTRL+Z
  delay(1000);
  _buffer = _readSerial();
}

void RecieveMessage(){
  Serial.println ("SIM800L Read an SMS");
  delay (1000);
  sim.println("AT+CNMI=2,2,0,0,0"); // AT Command to receive a live SMS
  delay(1000);
  Serial.write ("Unread Message done");
}

String _readSerial() {
  _timeout = 0;
  while  (!sim.available() && _timeout < 12000  ){
    delay(13);
    _timeout++;
  }
  if (sim.available()) {
    return sim.readString();
  }
}

void callNumber() {
  sim.print (F("ATD"));
  sim.print (number);
  sim.print (F(";\r\n"));
  _buffer = _readSerial();
  Serial.println(_buffer);
}

/*#include <SoftwareSerial.h>
SoftwareSerial Sim800l(10,11);
void setup() {
  // put your setup code here, to run once:
 Serial.begin(9600);
  Sim800l.begin(9600);
}

void loop() {
 
 while(Sim800l.available()){
  Serial.write(Sim800l.read());
 }

  
 while(Serial.available()){
  Sim800l.write(Serial.read());
 }

}*/
