#!/usr/bin/python3
import cgi, cgitb
import os

if 'HTTP_COOKIE' in os.environ:
    for cookie in os.environ['HTTP_COOKIE'].split(";"):
        key = cookie.split("=")[0].strip()
        value = cookie.split("=")[1]
        if key == "username":
            try:
                os.remove("usernameCookies/" + value)
            except:
                pass

print("Set-Cookie:username=;")
print("Content-type: text/html\n\n")

print("<html>")
print("<head>")
print("<title>Python Session Destroyed</title>")
print("</head>")
print("<body>")
print("<h1>Session Destroyed</h1>")
print("<a href=\"../python-cgiform.html\">Back to the Python CGI Form</a><br />")
print("<a href=\"python-sessions-1.py\">Back to Page 1</a><br />")
print("<a href=\"python-sessions-2.py\">Back to Page 2</a>")
print("</body>")
print("</html>")