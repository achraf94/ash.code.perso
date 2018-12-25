var express = require('express');
var mongoose =  require('mongoose');
var nunjucks = require('nunjucks');
mongoose.connect("mongodb://localhost:3000/eshafs");

var app = express();
require('./models/pokemon');
require('./models/type');

app.use('/css',express.static(__dirname +"/node_modules/bootstrap/dist/css"));

app.use('/',require('./routes/pokemons'));

app.use('/types',require('./routes/types'));


nunjucks.configure('./views',{
    autoscape:true,
    express:app
});



console.log("Apps 3000 lanced")


app.listen(3000);