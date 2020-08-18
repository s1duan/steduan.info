#!/usr/bin/python3
import json
import datetime
import os

print("Cache-Control: no-cache\n")
# print("Content-type: application/json\n\n")

date = datetime.datetime.now()
address = os.environ['REMOTE_ADDR']

message = {
    'title': 'Hello, Python!',
    'heading': 'Hello, Python!',
    'message': 'This page was generated with the Python programming language',
    'time': str(date),
     'IP': address,
}

print(json.dumps(message))
