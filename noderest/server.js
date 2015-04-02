var express = require('express'),
mongoose = require('mongoose'),
fs = require('fs');

var mongoUri = 'mongodb://localhost/noderest';
mongoose.connect(mongoUri);
var db = mongoose.connection;
db.on('error', function () {
	throw new Error('Unable to connect to database at ' + mongoUri);
});

var app = express();

app.configure(function(){
	app.use(express.bodyParser());
});

require('./models/trucker');
require('./routes')(app);

app.listen(1337);
console.log('Listening on port 1337');