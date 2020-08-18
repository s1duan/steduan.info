#!/usr/bin/python3
import cgi, cgitb
import os

username = -1

if 'HTTP_COOKIE' in os.environ:
    for cookie in os.environ['HTTP_COOKIE'].split(";"):
        key = cookie.split("=")[0].strip()
        value = cookie.split("=")[1]
        if key == "username":
            try:
                f = open("usernameCookies/" + value)
                username = f.read()
                f.close()
            except:
                pass

print("Content-Type: text/html\n\n")

print("<html>")
print("<head>")
print("<title>Python Sessions</title>")
print("</head>")
print("<body>")

print("<h1>Python Sessions Page 2</h1>")


if (username != -1 and username != ''):
    print("<p><b>Name:</b> {}".format(username))
else:
    print("<p><b>Name:</b> You do not have a name set</p>")

print("<br/><br/>")
print("<a href=\"python-sessions-1.py\">Session Page 1</a><br/>")
print("<a href=\"../python-cgiform.html\">Python CGI Form</a><br />")
print("<form style=\"margin-top:30px\" action=\"python-destroy-session.py\" method=\"get\">")
print("<button type=\"submit\">Destroy Session</button>")
print("</form>")

print("</body>")
print("</html>")
