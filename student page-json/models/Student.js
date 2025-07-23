const mongoose = require("mongoose");

const studentSchema = new mongoose.Schema({
  name: String,
  age: Number,
  sex: String,
  email: { type: String, unique: true },
  profile: String // path to uploaded image
});

module.exports = mongoose.model("Student", studentSchema);