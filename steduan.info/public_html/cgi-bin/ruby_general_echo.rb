#!/usr/bin/ruby
require "cgi"

puts "Cache-Control: no-cache\n"
puts "Content-type: text/html \n\n"

# puts HTML file top
puts "<!DOCTYPE html>
<html><head><title>General Request Echo</title>
</head><body><h1 align=\"center\">General Request Echo</h1>
<hr>"

# HTTP Protocol, HTTP Method, and the Query String are all environment variables
puts "<p><b>HTTP Protocol:</b> %s</p>" % [ENV["SERVER_PROTOCOL"]]
puts "<p><b>HTTP Method:</b> %s</p>" % [ENV["REQUEST_METHOD"]]
puts "<p><b>Query String:</b> %s</p>" % [ENV["QUERY_STRING"]]

# NOTE: Although the Query String is an environment variable, the Message Body
# must be read in from the Standard Input with any language using CGI.
# Credit for this code to read in STDIN in Perl comes from:
form_data = STDIN.read

puts "<p><b>Message Body:</b> %s</p>" % [form_data]

# puts the HTML file bottom
puts "</body></html>\n"
