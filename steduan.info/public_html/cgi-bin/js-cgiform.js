#!/usr/bin/node
console.log('Cache-Control: no-cache');
console.log("Content-type: text/html\n\n");
console.log(`<!doctype html>
<html>

<head>
  <title>CGI Form</title>
</head>

<body>
  <h1 align="center">Session Test</h1>
  <hr>
  <label for="cgi-lang">CGI using JavaScript</label>
  <form action="/cgi-bin/js-sessions-1.js" method="get" id="form">
    <label>What is your name? <input type="text" name="jsusername" autocomplete="off"></label>
    <br>
    <input type="submit" value="Test Sessioning">
  </form>
  
  <a href="/" style="display:inline-block;margin-top:20px;">Home</a> 

</body>

</html>
`)