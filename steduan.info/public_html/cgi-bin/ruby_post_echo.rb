#!/usr/bin/ruby
require "cgi"

puts "Cache-Control: no-cache\n"
puts "Content-type: text/html \n\n"

# puts HTML file top
puts "<!DOCTYPE html>
<html><head><title>POST Request Echo</title>
</head><body><h1 align=\"center\">POST Request Echo</h1>
<hr>
"

# NOTE: Although the Query String is an environment variable, the Message Body
# must be read in from the Standard Input with any language using CGI.
# Credit for this code to read in the Post data comes from:
form_data = STDIN.read

puts "<b>Message Body: </b><br />\n"
puts "<ul>\n"

# parse the Query String:
parsed_pairs = CGI::parse(form_data)

#puts out the Query string
parsed_pairs.keys.each do |key|
    puts "<b>%s</b>= %s<br />\n" % [key, parsed_pairs[key][0]]
end

puts "</ul>\n"
# puts the HTML file bottom
puts "</body></html>\n"
