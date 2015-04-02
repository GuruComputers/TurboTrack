var express = require('express');
var app = express();
app.get('/', function(req, res) {
	res.send('Still Working...\n');
});
app.listen(1337);
console.log('Listening on port 1337');