var mongoose = require('mongoose'),
Schema = mongoose.Schema;

var TruckerSchema = new Schema({
	id: String,
	name: String,
	steamid64: String,
	telemetryPluginVersion: String,
	gameVersion: String,
	fuelAverageConsumption: String,
	hasJob: Boolean,
	jobRemainingTime: Date,
	sourceCity: String,
	destinationCity: String,
	wearEngine: Number,
	wearTransmission: Number,
	wearCabin: Number,
	wearChassis: Number,
	wearWheels: Number,
	wearTrailer: Number,
	truckOdometer: Number,
	trailerMass: Number,
	trailerName: String
});

mongoose.model('Trucker', TruckerSchema);