#!/usr/bin/python3
import os

print("Cache-Control: no-cache")
print("Content-type: text/html\n\n")

# print HTML file top
print(
    """
    <!DOCTYPE html>
    <html><head><title>Environment Variables</title>
    </head><body><h1 align="center">Environment Variables</h1>
    <hr>
    """
)


# Loop over the environment variables and print each variable and its value
keys = list(os.environ)
keys.sort()

for key in keys:
    print("<b>{0}:</b> {1}<br />\n".format(key, os.environ[key]))


# Print the HTML file bottom
print("</body></html>")
