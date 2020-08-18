#!/usr/bin/ruby
require "cgi"
puts "Cache-Control: no-cache"
puts "Content-type: text/html\n\n"
puts "<!DOCTYPE html>
<html><head><title>GET Request Echo</title>
</head><body><h1 align=\"center\">Get Request Echo</h1>
<hr>"
# puts "<b>Query String:</b> %s<br />\n" % [ENV["QUERY_STRING"]]
parsed_pairs = CGI::parse(ENV["QUERY_STRING"])
uname = parsed_pairs['username'][0]
puts uname
puts "<br>"
puts "<a href='/cgi-bin/ruby-sessions-2.rb?username=#{uname}'>Session2</a>"
puts "<br>"
puts "<a href='/ruby-cgi-form.html'>Back to main page</a><br>"
puts '<form style="margin-top:30px" action="/cgi-bin/ruby-destroy-session" method="get"><button type="submit">Destroy Session</button></form>'