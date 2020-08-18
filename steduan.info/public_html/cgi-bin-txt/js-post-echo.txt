#!/usr/bin/node
console.log('Cache-Control: no-cache');
console.log("Content-type: text/html\n\n");
console.log('<!DOCTYPE html>\
<html><head><title>POST Request Echo</title>\
</head><body><h1 align="center">POST Request Echo</h1>\
<hr>')
var readline = require('readline');
var RL_Interface = readline.createInterface({
    input: process.stdin,
    output: process.stdout,
});
console.log('<b>Message Body: </b>')
RL_Interface.on('line', function (line) {
    const queryString = require('query-string');
    const parsed = queryString.parse(line);
    console.log('<ul>')
    for (const k in parsed) {
        console.log(`<li>${k}=${parsed[k]}</li>`)
    }
    console.log('</ul>')
    console.log("</body></html>")
})