#!/usr/bin/node
console.log('Cache-Control: no-cache');
console.log("Content-type: text/html\n\n");
var d = new Date();
var dateString = d.toDateString()
var date = dateString.split(" ");
var printDate = date[0] + " " + date[1] + " " + date[2];
var printTime = d.toLocaleTimeString('en-US', { hour: 'numeric', minute: 'numeric', second: 'numeric', hour12: false });
var printYear = date[3];
var time = printDate + " " + printTime + " " + printYear;

let obj = {
    message: "This page was generated with the JavaScript programming language",
    IP: process.env.REMOTE_ADDR,
    heading: "Hello, JavaScript!",
    title: "Hello, JavaScript!",
    time: time,
}
var str = JSON.stringify(obj, null, 2);
console.log(str)