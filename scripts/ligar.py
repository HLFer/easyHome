import RPi.GPIO as GPIO
import sys


#param = sys.argv[2:]

#print(param)

GPIO.setmode(GPIO.BCM)
GPIO.setwarnings(False)
GPIO.setup(18,GPIO.OUT)
GPIO.output(18,GPIO.LOW)


