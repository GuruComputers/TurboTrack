module.exports = function(app){
	var truckers = require('./controllers/truckers');
	app.get('/truckers',truckers.findAll);
	app.get('/truckers/:id', truckers.findById);
	app.post('/truckers', truckers.add);
	app.put('/truckers/:id', truckers.update);
	app.delete('/truckers/:id', truckers.delete);
}