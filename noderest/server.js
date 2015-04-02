var http = require('http');
http.createServer(function (req, res) {
	res.writeHead(200, {'Content-Type': 'text/plain'});
	res.end('Hello World!\n');
}).listen(1337);
console.log('Server running at http://hitec4all.co.uk/turboformula:1337');