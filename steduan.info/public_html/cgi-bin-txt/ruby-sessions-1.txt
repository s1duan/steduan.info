#!/usr/bin/ruby
require "cgi"
parsed_pairs = CGI::parse(ENV["QUERY_STRING"])
QueryName = parsed_pairs['username'][0]

cookie_pairs = CGI::parse(ENV["HTTP_COOKIE"])
CookieName = cookie_pairs['username'][0]

if !QueryName 
    #if qeury doensnt pass name
    if !CookieName 
        # if cookie also not have name
        QueryName = "No username"
    else
        QueryName = CookieName
    end
else
    if CookieName != ''
       QueryName = CookieName
    end
end
puts "Cache-Control: no-cache"
puts "Set-Cookie:username=#{QueryName}"
puts "Content-type: text/html\n\n"
puts "<!DOCTYPE html>
<html><head><title>GET Request Echo</title>
</head><body><h1 align=\"center\">Get Request Echo</h1>
<hr>"

puts QueryName
puts "<br>"
puts "<a href='/cgi-bin/ruby-sessions-2.rb?username=#{QueryName}'>Session2</a>"
puts "<br>"
puts "<a href='/ruby-cgi-form.html'>Back to main page</a><br>"
puts '<form style="margin-top:30px" action="/cgi-bin/ruby-destroy-session.rb" method="get"><button type="submit">Destroy Session</button></form>'