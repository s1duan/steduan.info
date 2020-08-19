#!/usr/bin/python3
import cgi, cgitb
import os
import random

form = cgi.FieldStorage()
# generate a random session id
sessionId = random.getrandbits(128)

#Store Data in that Python Session
if form.getvalue("username") != None and 'HTTP_COOKIE' not in os.environ:
    print("Set-Cookie:username = {};".format(sessionId))
    f = open("usernameCookies/" + str(sessionId), "a")
    f.write(form.getvalue("username"))
    f.close()

print("Content-type:text/html\n\n")

print("<html>")
print("<head>")
print("<title>Python Sessions</title>")
print("</head>")
print("<body>")

print("<h1>Python Sessions Page 1</h1>")

username = -1
#if form.getvalue("username") != None and form.getvalue("username") != '':
    
#else:
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
else:
    username = form.getvalue("username")

if (username != -1 and username != ''):
    print("<p><b>Name:</b> {}".format(username))
else:
    print("<p><b>Name:</b> You do not have a name set</p>")

print("<br/><br/>")
print("<a href=\"python-sessions-2.py\">Session Page 2</a><br/>")
print("<a href=\"../python-cgiform.html\">Python CGI Form</a><br />")
print("<form style=\"margin-top:30px\" action=\"python-destroy-session.py\" method=\"get\">")
print("<button type=\"submit\">Destroy Session</button>")
print("</form>")

print("</body>")
print("</html>")
