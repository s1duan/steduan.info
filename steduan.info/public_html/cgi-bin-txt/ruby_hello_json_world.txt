#!/usr/bin/ruby
# In Perl, you must first install the JSON package from CPAN (the Perl equivalent to npm)u
require 'json'

puts "Cache-Control: no-cache\n"
puts "Content-type: application/json\n\n"

date = Time.new
address = ENV["REMOTE_ADDR"]

message = {
    "title" => 'Hello, Ruby',
    'heading'=> 'Hello, Ruby!',
    'message'=> 'This page was generated with the Ruby programming language',
}

puts message.to_json