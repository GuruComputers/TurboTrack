var mongoose = require('mongoose'),
Trucker = mongoose.model('Trucker');

exports.findAll = function(req, res) {
	Trucker.find({}, function(err, results) {
		return res.send(results);
	});
};
exports.findById = function() {};
exports.add = function() {};
exports.update = function() {};
exports.delete = function() {};
exports.import = function(req, res){
	Trucker.create(
		{ "id": "1", "Name": "Robotix", "steamID": "robotix31337" },
		{ "id": "2", "Name": "RJ31337", "steamID": "revdave31337" },
		{ "id": "3", "Name": "Astr0neo", "steamID": "Astr0neogaming"}
		, function (err) {
			if (err) return console.log(err);
			return res.send(202);
		});
};