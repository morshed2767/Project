/*******
 
 All the resources for this project:
 https://www.hackster.io/Aritro

*******/
int check = 0;
int check2 = 0;
int redLed = 12;
int greenLed = 11;
int buzzer = 5;
int smokeA0 = A5;
// Your threshold value
int sensorThres = 200;

void setup() {
  pinMode(redLed, OUTPUT);
  pinMode(greenLed, OUTPUT);
  pinMode(buzzer, OUTPUT);
  pinMode(smokeA0, INPUT);
  Serial.begin(9600);
}

void loop() {
  int analogSensor = analogRead(smokeA0);

  Serial.print("Pin A0: ");
  Serial.println(analogSensor);
  // Checks if it has reached the threshold value
  if (analogSensor > sensorThres)
  {
    //tone(buzzer, 1000, 200);
    check2 = 1;
    if(check2 != check){
      if(check2 == 1){
        Serial.println("Call");
        delay(1000);
        Serial.println("Call");
      }
    }
    check = check2;
  }
  else
  {
    check = 0;
    //noTone(buzzer);
  }
  delay(100);
}
