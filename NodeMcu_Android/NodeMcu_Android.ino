/////////////////////////////////
// Generated with a lot of love//
// with TUNIOT FOR ESP8266     //
// Website: Easycoding.tn      //
/////////////////////////////////
#include <ESP8266WiFi.h>

String  i;
WiFiServer server(80);

void setup()
{
  i = "";

  Serial.begin(9600);
  pinMode(16, OUTPUT);
    WiFi.disconnect();
  delay(3000);
   WiFi.begin("mm","2702152767");
  Serial.println("Connecting.....");
  while ((!(WiFi.status() == WL_CONNECTED))){
    delay(300);
    Serial.print("...");

  }
  Serial.println("Connected!!");
  Serial.println((WiFi.localIP()));
  server.begin();

}


void loop()
{

    WiFiClient client = server.available();
    if (!client) { return; }
    while(!client.available()){  delay(1); }
    i = (client.readStringUntil('\r'));
    i.remove(0, 5);
    i.remove(i.length()-9,9);
    if (i == "ON") {
      digitalWrite(16,HIGH);
      client.println("HTTP/1.1 200 OK");
      client.println("Content-Type: text/html");
      client.println("");
      client.println("<!DOCTYPE HTML>");
      client.println("<html>");
      client.println("LED is ON");
      client.println("</html>");
      client.stop();
      delay(1);

    }
    if (i == "OFF") {
      digitalWrite(16,LOW);
      client.println("HTTP/1.1 200 OK");
      client.println("Content-Type: text/html");
      client.println("");
      client.println("<!DOCTYPE HTML>");
      client.println("<html>");
      client.println("LED is OFF");
      client.println("</html>");
      client.stop();
      delay(1);

    }

}