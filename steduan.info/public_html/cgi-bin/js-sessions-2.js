#!/usr/bin/node
var cookie = require('cookie-parse');

// see if value are passed in url
let q = process.env.QUERY_STRING
const queryString = require('query-string');
const parsed = queryString.parse(q);
let key
let value
for (const k in parsed) {
    // console.log(`<p>${k}:${parsed[k]}</p>`)
    key = k
    value = parsed[k]
    break
}

let evar = process.env
let name = cookie.parse(evar["HTTP_COOKIE"])['username']

// if passed, value is set to a new val
if (!value) {
    if (!name) {
        value = "No username"
    } else {
        value = name
    }
}

console.log('Cache-Control: no-cache');

if (value) console.log(`Set-Cookie:jsusername=${value}`)
console.log("Content-type: text/html\n\n")
console.log(`<h1>JS Sessions Page 2</h1>`)
console.log(`Your Username is: ${value}<br>`)
console.log(`<a href="/cgi-bin/js-sessions-1.js?${key}=${value}">JavaScript Session Page 1</a><br>`)
console.log(`<a href="/cgi-bin/js-cgiform.js?">JavaScript CGI Form</a><br>`)
console.log(`<form style="margin-top:30px" action="/cgi-bin/js-destroy-session.js" method="get"><button type="submit">Destroy Session</button></form>`)