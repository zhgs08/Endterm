var express = require('express');
var mysql = require('mysql');

var connection = mysql.createConnection({
	host: 'localhost',
	user: 'gaukhar',
	password: 'password',
	database: 'v'
});

connection.connect();

connection.query('SELECT * Register', function(err, rows, fields) {

});

var app = express();

app.get('/', function(req, res){
	res.send('Hello world!!!!');
});

app.get('/students', function(req, res){
	res.send('all students');
});

app.listen(5000);