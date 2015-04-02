var express = require('express');

var app = express();

require('./routes')(app);

app.listen(1337);
console.log('Listening on port 1337');