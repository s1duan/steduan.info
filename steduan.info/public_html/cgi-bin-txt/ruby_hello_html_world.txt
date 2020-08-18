#!/usr/bin/ruby

puts "Cache-Control: no-cache\n";
puts "Content-type: text/html\n\n"
puts "<html>"
puts "<head>"
puts "<title>Hello, Perl!</title>"
puts "</head>"
puts "<body>"

puts "<h1>Duolan was here - Hello, Ruby!</h1>"
puts "<p>This page was generated with the Perl programming langauge</p>"

date = Time.new
puts "<p>Current Time: %s</p>" % [date]

# IP Address is an environment variable when using CGI
address = ENV["REMOTE_ADDR"]
puts "<p>Your IP Address: %s</p>" % [address]

puts "</body>"
puts "</html>"