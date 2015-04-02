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