#!/usr/bin/node
console.log('Cache-Control: no-cache');
console.log("Content-type: text/html\n\n");
console.log('<h1>Shinuo was here - Hello, JavaScript!</h1>')
console.log('<p>This page was generated with the javascript programming langauge</p>')

var d = new Date();
var dateString = d.toDateString()
var date = dateString.split(" ");
var printDate = date[0] + " " + date[1] + " " + date[2];
var printTime = d.toLocaleTimeString('en-US', { hour: 'numeric', minute: 'numeric', second: 'numeric', hour12: false });
var printYear = date[3];
var time = printDate + " " + printTime + " " + printYear;
console.log(`<p>Current Time: ${time}</p>`);

var ipAddress = process.env.REMOTE_ADDR
console.log(`<p>Your IP address : ${ipAddress}</p>`)
