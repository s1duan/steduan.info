#!/usr/bin/node
console.log('Cache-Control: no-cache');
console.log("Content-type: text/html\n\n");
console.log('<!DOCTYPE html>\
<html><head><title>GET query string</title>\
</head><body><h1 align="center">Get Request Echo</h1>\
<hr>')
let q = process.env.QUERY_STRING
const queryString = require('query-string');
const parsed = queryString.parse(q);
console.log(`<p>Raw query string: ${q}</p>`)

console.log(`<p>Formatted Query String:</p>`)
for (const k in parwsed) {
    console.log(`<p>${k}:${parsed[k]}</p>`)
}
console.log("</body></html>")