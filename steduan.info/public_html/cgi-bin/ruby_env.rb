#!/usr/bin/ruby
puts "Cache-Control: no-cache\n"
puts "Content-type: text/html \n\n"

# puts HTML file top
puts "<!DOCTYPE html>
<html><head><title>Environment Variables</title>
</head><body><h1 align=\"center\">Environment Variables</h1>
<hr>"

# Loop over the environment variables and puts each variable and its value
ENV.keys.each do |key|
    puts "<b>%s</b> %s<br />\n" % [key, ENV[key]]
end



# puts the HTML file bottom
puts "</body></html>"
