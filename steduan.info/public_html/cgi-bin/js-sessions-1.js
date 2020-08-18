#!/usr/bin/node
console.log('Cache-Control: no-cache');
console.log("Content-type: text/html\n\n");
console.log(`<h1>Perl Sessions Page 1</h1>`)
let q = process.env.QUERY_STRING
const queryString = require('query-string');
const parsed = queryString.parse(q);
let key
let value
for (const k in parsed) {
    console.log(`<p>${k}:${parsed[k]}</p>`)
    key = k
    value = parsed[k]
}

console.log(`<a href="/cgi-bin/js-sessions-2.js?${key}=${value}">Session Page 2</a><br>`)
console.log(`<a href="/cgi-bin/js-cgiform.js">Perl CGI Form</a><br>`)
console.log(`<form style="margin-top:30px" action="/cgi-bin/js-destroy-session.js" method="get"><button type="submit">Destroy Session</button></form>`)