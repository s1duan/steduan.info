#!/usr/bin/ruby
require "cgi"
require 'cgi/session'

# Create CGI Object
cgi = CGI::new

# Create a new Session
session = CGI::Session.new(cgi, 'new_session' => true)

# session["username"] = cgi["username"]
# Create a new Cookie from the Session ID
cookie = CGI::Cookie.new("name" => "CGISESSID", "value" => session.session_id)
# puts cgi.header( cookie.cookie )
cgi.cookies = cookie
puts cgi.header

#Store Data in that Perl Session
name = session['username'] || cgi['username']

puts "<html>"
puts "<head>"
puts "<title>Ruby Sessions</title>"
puts "</head>"
puts "<body>"

puts "<h1>Ruby Sessions Page 1</h1>"

if name
    puts "<p><b>Name:</b> %s" % [name]
else
	puts "<p><b>Name:</b> You do not have a name set</p>"
end

puts "<br/><br/>"
puts "<a href=\"/cgi-bin/ruby-sessions-2.rb\">Session Page 2</a><br/>"
puts "<a href=\"/ruby-cgiform.html\">Ruby CGI Form</a><br />"
puts "<form style=\"margin-top:30px\" action=\"/cgi-bin/ruby-destroy-session.rb\" method=\"get\">"
puts "<button type=\"submit\">Destroy Session</button>"
puts "</form>"

puts "</body>"
puts "</html>"

