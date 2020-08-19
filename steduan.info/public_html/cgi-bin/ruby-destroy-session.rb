#!/usr/bin/ruby
require "cgi"
puts "Cache-Control: no-cache"
puts "Set-Cookie:username="
puts "Content-type: text/html\n\n"
puts '<html><head><title>Perl Session Destroyed</title></head><body><h1>Session Destroyed</h1><a href="/ruby-cgi-form.html">Back to the Perl CGI Form</a><br /><a href="/cgi-bin/ruby-sessions-1.rb">Back to Page 1</a><br /><a href="/cgi-bin/ruby-sessions-2.rb">Back to Page 2</a></body></html>'