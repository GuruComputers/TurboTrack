var mongoose = require('mongoose'),
Schema = mongoose.Schema;

var TruckerSchema = new Schema({
	id: String,
	name: String,
	steamid: String
});

mongoose.model('Truker', TruckerSchema);