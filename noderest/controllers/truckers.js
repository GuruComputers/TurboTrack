var mongoose = require('mongoose'),
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
exports.add = function() {};
exports.update = function() {};
exports.delete = function() {};
exports.import = function(req, res){
	Trucker.create(
		{ "id": "1", "name": "Robotix", "steamid": "robotix31337" },
		{ "id": "2", "name": "RJ31337", "steamid": "revdave31337" },
		{ "id": "3", "name": "Astr0neo", "steamid": "Astr0neogaming"}
		, function (err) {
			if (err) return console.log(err);
			return res.send(202);
		});
};