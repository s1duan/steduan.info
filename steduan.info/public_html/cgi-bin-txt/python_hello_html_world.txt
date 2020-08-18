#!/usr/bin/python3
import datetime
import os

print("Cache-Control: no-cache")
print("Content-type: text/html\n\n")
print("<html>")
print("<head>")
print("<title>Hello, Perl!</title>")
print("</head>")
print("<body>")

print("<h1>Duolan was here - Hello, Python!</h1>")
print("<p>This page was generated with the Python programming langauge</p>")

date = datetime.datetime.now()
print("<p>Current Time: " + str(date) + "</p>")

# IP Address is an environment variable when using CGI
address = os.environ['REMOTE_ADDR']
print("<p>Your IP Address: " + str(address) + "</p>")

print("</body>")
print("</html>")
