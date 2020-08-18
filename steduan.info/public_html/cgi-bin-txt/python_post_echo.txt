#!/usr/bin/python3
import os
import sys


print("Cache-Control: no-cache")
print("Content-type: text/html\n\n")

# print HTML file top
print(
    """
    <!DOCTYPE html>
    <html><head><title>POST Request Echo</title>
    </head><body><h1 align="center">POST Request Echo</h1>
    <hr>
    """
)

# NOTE: Although the Query String is an environment variable, the Message Body
# must be read in from the Standard Input with any language using CGI.
# Credit for this code to read in the Post data comes from:
# https://stackoverflow.com/questions/464040/how-are-post-and-get-variables-handled-in-python
buffer = sys.stdin.read()

query_pairs = {}
if len(buffer) > 0:
    buffer = buffer[buffer.find('?')+1:]
    pairs = buffer.split('&')
    for pair in pairs:
        key = pair.split('=')[0]
        try:
            value = pair.split('=')[1]
        except:
            value = ""
        query_pairs[key] = value

print("<b>Message Body:</b><br />\n")
print("<ul>\n")

#Print out the Query string
for key in query_pairs.keys():
    print("<li>{0} = {1}<li>".format(key, query_pairs[key]))

print("</ul>\n")
# Print the HTML file bottom
print("</body></html>\n")
