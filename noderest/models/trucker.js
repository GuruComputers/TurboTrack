var mongoose = require('mongoose'),
Schema = mongoose.Schema;

var TruckerSchema = new Schema({
	id: Number,
	name: String,
	steamid: String,
	connected: Boolean,
	GameTime: String,
	GamePaused: Boolean,
	TelemetryPluginVersion: String,
	GameVersion: String,
	TrailerAttached: Boolean,
	TruckSpeed: Number,
	AccelerationX: Number,
	AccelerationY: Number,
	AccelerationZ: Number,
	CoordinateX: Number,
	CoordinateY: Number,
	CoordinateZ: Number,
	RotationX: Number,
	RotationY: Number,
	RotationZ: Number,
	Gear: Number,
	Gears: Number,
	GearRanges: Number,
	GearRangeActive: Number,
	EngineRpm: Number,
	EngineRpmMax: Number,
	Fuel: Number,
	FuelCapacity: Number,
	FuelAverageConsumption: Number,
	UserSteer: Number,
	UserThrottle: Number,
	UserBrake: Number,
	UserClutch: Number,
	GameSteer: Number,
	GameThrottle: Number,
	GameBrake: Number,
	GameClutch: Number,
	TruckMass: Number,
	TruckModelLength: Number,
	TruckModelOffset: Number,
	TrailerMass: Number,
	TrailerId: String,
	TrailerName: String,
	HasJob: Boolean,
	JobIncome: Number,
	JobDeadlineTime: String,
	JobRemainingTime: String,
	SourceCity: String,
	DestinationCity: String,
	SourceCompany: String,
	DestinationCompany: String,
	RetarderBrake: Number,
	ShifterSlot: Number,
	ShifterToggle: Number,
	CruiseControlOn: Boolean,
	WipersOn: Boolean,
	ParkBrakeOn: Boolean,
	MotorBrakeOn: Boolean,
	ElectricOn: Boolean,
	EngineOn: Boolean,
	BlinkerLeftActive: Boolean,
	BlinkerRightActive: Boolean,
	BlinkerLeftOn: Boolean,
	BlinkerRightOn: Boolean,
	LightsParkingOn: Boolean,
	LightsBeamLowOn: Boolean,
	LightsBeamHighOn: Boolean,
	LightsAuxFrontOn: Boolean,
	LightsAuxRoofOn: Boolean,
	LightsBeaconOn: Boolean,
	LightsBrakeOn: Boolean,
	LightsReverseOn: Boolean,
	BatteryVoltageWarning: Boolean,
	AirPressureWarning: Boolean,
	AirPressureEmergency: Boolean,
	AdblueWarning: Boolean,
	OilPressureWarning: Boolean,
	WaterTemperatureWarning: Boolean,
	AirPressure: Number,
	BrakeTemperature: Number,
	FuelWarning: Boolean,
	Adblue: Number,
	AdblueConsumpton: Number,
	OilPressure: Number,
	OilTemperature: Number,
	WaterTemperature: Number,
	BatteryVoltage: Number,
	LightsDashboard: Number,
	WearEngine: Number,
	WearTransmission: Number,
	WearCabin: Number,
	WearChassis: Number,
	WearWheels: Number,
	WearTrailer: Number,
	TruckOdometer: Number,
	CruiseControlSpeed: Number,
	TruckMake: String,
	TruckMakeId: String,
	TruckModel: String,
	LastOdometer: Number,
	TotalDistance: Number
});

truckerSchema.methods.TotalDistance = function() {
	// Create a Company Odometer Value
	this.LastOdometer = this.TruckOdometer;
	this.TotalDistance = this.TruckOdometer - this.LastOdometer;
	
	return this.TotalDistance;
};

mongoose.model('Trucker', TruckerSchema);