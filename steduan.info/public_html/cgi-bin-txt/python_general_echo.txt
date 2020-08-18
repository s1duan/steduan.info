#!/usr/bin/python3
import os
import sys

print("Cache-Control: no-cache")
print("Content-type: text/html\n\n")

# print HTML file top
print(
    """
    <!DOCTYPE html>
    <html><head><title>General Request Echo</title>
    </head><body><h1 align="center">General Request Echo</h1>
    <hr>
    """
)

# HTTP Protocol, HTTP Method, and the Query String are all environment variables
print("<p><b>HTTP Protocol:</b> {}</p>".format(os.environ["SERVER_PROTOCOL"]))
print("<p><b>HTTP Method:</b> {}</p>".format(os.environ["REQUEST_METHOD"]))
print("<p><b>Query String:</b> {}</p>".format(os.environ["QUERY_STRING"]))


# NOTE: Although the Query String is an environment variable, the Message Body
# must be read in from the Standard Input with any language using CGI.
# Credit for this code to read in STDIN in Python comes from:
# https://stackoverflow.com/questions/464040/how-are-post-and-get-variables-handled-in-python
 
form_data = sys.stdin.read()

print("<p><b>Message Body:</b> {}</p>".format(form_data))

# Print the HTML file bottom
print("</body></html>\n")
