var mongoose = require("mongoose");

var TypeSchema = new mongoose.Schema({
  name: String,
  color: {
    type: String,
    default: "red"
  }
});

TypeSchema.virtual('pokemons',{
  ref: "Pokemon",
  localField: "_id",
  foreignField: "types"
});

var Type = mongoose.model("Type", TypeSchema);
module.exports = Type;
