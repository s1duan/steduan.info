#!/usr/bin/node
var cookie = require('cookie-parse');

// see if value are passed in url
let q = process.env.QUERY_STRING
const queryString = require('query-string');
const parsed = queryString.parse(q);
let key
let value
for (const k in parsed) {
    key = k
    value = parsed[k]
    break
}

let evar = process.env
let name = cookie.parse(evar["HTTP_COOKIE"])['username']

// if passed, value is set to a new val
if (!value) {
    if (!name) {
        value = ""
    } else {
        value = name
    }
}
if (value) {
    if (name) {
        value = name
    }
}

console.log('Cache-Control: no-cache');

if (value) console.log(`Set-Cookie:jsusername=${value}`)
console.log("Content-type: text/html\n\n")
console.log(`<h1>JS Sessions Page 1</h1>`)
console.log(`Your Username is: ${value ? value : "You do not have a name set"}<br>`)
console.log(`<a href="/cgi-bin/js-sessions-2.js?${key}=${value}">JavaScript Session Page 2</a><br>`)
console.log(`<a href="/cgi-bin/js-cgiform.js?">JavaScript CGI Form</a><br>`)
console.log(`<form style="margin-top:30px" action="/cgi-bin/js-destroy-session.js" method="get"><button type="submit">Destroy Session</button></form>`)