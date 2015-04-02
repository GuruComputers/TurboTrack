var express = require('express');
var stormpath = require('express-stormpath');

var app = express();

app.set('views', './views');
app.set('view engine', 'jade');

var stormpathMiddleware = stormpath.init(app, {
	apiKeyFile: '/var/turbo/apiKey-3WQZETQ0NZMIZRIJCYMIPF0EV.properties',
	application: 'https://api.stormpath.com/v1/applications/48CpDpSeDrz0q1IXoEcuRU',
	secretKey: '1071816TuRbO',
	expandCustomData: true,
	enableForgotPassword: true
});

app.use(stormpathMiddleware);

app.get('/', function(req res) {
	res.render('home', {
		title: 'Welcome'
	});
});

app.listen(3000);