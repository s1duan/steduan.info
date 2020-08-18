#!/usr/bin/ruby
require "cgi"
require 'cgi/session'

# puts "Cache-Control: no-cache\n"

# Create a new CGI Object
cgi = CGI::new

# Get the Session ID from the Cookie
sid = cgi.cookies["CGISESSID"] || nil
session = CGI::Session.new(cgi, 'new_session' => true)  

# Access Stored Data
name = session["username"]

puts "Content-Type: text/html\n\n"

puts "<html>"
puts "<head>"
puts "<title>Ruby Sessions</title>"
puts "</head>"
puts "<body>"

puts "<h1>Ruby Sessions Page 2</h1>"

if name
    puts "<p><b>Name:</b> %s" % [name]
else
	puts "<p><b>Name:</b> You do not have a name set</p>"
end

puts "<br/><br/>"
puts "<a href=\"/cgi-bin/ruby-sessions-1.rb\">Session Page 1</a><br/>"
puts "<a href=\"/ruby-cgiform.html\">Perl CGI Form</a><br />"
puts "<form style=\"margin-top:30px\" action=\"/cgi-bin/ruby-destroy-session.rb\" method=\"get\">"
puts "<button type=\"submit\">Destroy Session</button>"
puts "</form>"

puts "</body>"
puts "</html>"
