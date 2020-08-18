#!/usr/bin/ruby
require "cgi"

puts "Cache-Control: no-cache\n"
puts "Content-type: text/html \n\n"

# puts HTML file top
puts "<!DOCTYPE html>
<html><head><title>GET Request Echo</title>
</head><body><h1 align=\"center\">Get Request Echo</h1>
<hr>"

# The Query String is simply an environment variable
puts "<b>Query String:</b> %s<br />\n" % [ENV["QUERY_STRING"]]

# parse the Query string:
parsed_pairs = CGI::parse(ENV["QUERY_STRING"])

#puts out the Query String
parsed_pairs.keys.each do |key|
    puts "<b>%s</b>= %s<br />\n" % [key, parsed_pairs[key][0]]
end

# puts the HTML file bottom
puts "</body></html>"
