var mongoose = require("mongoose");

var pokeSchema = new mongoose.Schema({
  name: String,
  number: Number,
  description: String,
  picture: String,
  types: [
    {
      type: mongoose.Schema.Types.ObjectId,
      ref: "Type"
    }
  ]
});

var pokemon = mongoose.model("Pokemon", pokeSchema);
module.exports = pokemon;
