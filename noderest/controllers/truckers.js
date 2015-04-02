var mongoose = require('mongoose'),
fs = require('fs'),
Trucker = mongoose.model('Trucker');

exports.findAll = function(req, res) {
	Trucker.find({}, function(err, results) {
		return res.send(results);
	});
};

exports.findById = function(req, res) {
	var id = req.params.id;
	Trucker.findOne({'_id':id}, function(err, result) {
		return res.send(result)
	});
};

exports.add = function(req, res) {
	Trucker.create(req.body, function (err, trucker) {
		var stream = fs.createWriteStream("test.txt");
		stream.once('open', function(fd) {
			stream.write(JSON.stringify(req.body));
			stream.end();
		});
		if (err) return console.log(err);
		return res.send(trucker);
	});
};

exports.update = function(req, res) {
	var id = req.params.id;
	var updates = req.body;

	Trucker.update({"_id":id}, req.body,
		function (err, numberAffected) {
			if (err) return console.log(err);
			console.log('Updated %d truckers', numberAffected);
			return res.send(202);
		});
};

exports.delete = function(req, res) {
	var id = req.params.id;
	Trucker.remove({'_id':id}, function(result) {
		return res.send(result);
	});
};

exports.import = function(req, res){
	Trucker.create(
		{ "id": "3", "name": "RJ31337", "steamid": "revdave31337" }
		, function (err) {
			if (err) return console.log(err);
			return res.send(202);
			console.log("Yay!");
		});
};