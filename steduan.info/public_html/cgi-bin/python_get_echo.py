#!/usr/bin/python3
import os

print("Cache-Control: no-cache")
print("Content-type: text/html\n\n")

# print HTML file top
print(
    """
    <!DOCTYPE html>
    <html><head><title>GET Request Echo</title>
    </head><body><h1 align="center">Get Request Echo</h1>
    <hr>
    """
)

# The Query String is simply an environment variable
print("<b>Query String: {}</b> <br />\n".format(os.environ["QUERY_STRING"]))

# parse query string
query_pairs = {}
buffer = os.environ["QUERY_STRING"]

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

# Credit for this code to parse the Query string:
# https://www.mediacollege.com/internet/perl/query-string.html


#Print out the Query String
for key in query_pairs.keys():
    print("{0} = {1}<br />\n".format(key, query_pairs[key]))


# Print the HTML file bottom
print("</body></html>")
