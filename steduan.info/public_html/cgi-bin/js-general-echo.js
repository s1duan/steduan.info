#!/usr/bin/node
console.log('Cache-Control: no-cache');
console.log("Content-type: text/html\n\n");
console.log('<!DOCTYPE html>\
<html><head><title>POST Request Echo</title>\
</head><body><h1 align="center">General Request Echo</h1>\
<hr>')
console.log(`<p><b>HTTP Protocol:</b> ${process.env.SERVER_PROTOCOL}</p>`)
console.log(`<p><b>HTTP Method:</b> ${process.env.REQUEST_METHOD}</p>`)
// console.log(`<p><b>Query String:</b> ${process.env.QUERY_STRING}</p>`)
var readline = require('readline');
var RL_Interface = readline.createInterface({
    input: process.stdin,
    output: process.stdout,
});
console.log(`<b>Message Body:</b>`)
RL_Interface.on('line', function (line) {
    console.log(`${line}`)
    const queryString = require('query-string');
    const parsed = queryString.parse(line);
    console.log('<br>')
    for (const k in parsed) {
        console.log(`${k}=${parsed[k]}`)
        console.log('<br>')
    }
    console.log("</body></html>")
})