#!/usr/bin/node
console.log('Cache-Control: no-cache');
console.log(`Set-Cookie:jsusername=`)
console.log("Content-type: text/html\n\n");
console.log(`<html><head><title>JS Session Destroyed</title></head><body><h1>Session Destroyed</h1><a href="/cgi-bin/js-cgiform.js">Back to the JS CGI Form</a><br /><a href="/cgi-bin/js-sessions-1.js">Back to Page 1</a><br /><a href="/cgi-bin/js-sessions-2.js">Back to Page 2</a></body></html>`)