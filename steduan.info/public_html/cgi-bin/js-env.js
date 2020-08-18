#!/usr/bin/node
console.log('Cache-Control: no-cache');
console.log("Content-type: text/html\n\n");
console.log('<!DOCTYPE html>\
<html><head><title>Environment Variables</title>\
</head><body><h1 align="center">Environment Variables</h1>\
<hr></hr>')
let evar = process.env
for (const k in evar) {
    console.log(`<b>${k}</b>: ${evar[k]}`)
    console.log("<br>")
}
console.log("</body></html>")