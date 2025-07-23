const express = require("express");
const router = express.Router();
const Student = require("../models/Student");
const multer = require("multer");

//  profile photo
const storage = multer.diskStorage({
  destination: (req, file, cb) => cb(null, "uploads/"),
  filename: (req, file, cb) => cb(null, Date.now() + "-" + file.originalname)
});

const upload = multer({ storage: storage });

// POST API: Add student
router.post("/", upload.single("profile"), async (req, res) => {
  try {
    const { name, age, sex, email } = req.body;
    const profilePath = req.file ? req.file.path : "";

    const newStudent = new Student({
      name,
      age,
      sex,
      email,
      profile: profilePath
    });

    const saved = await newStudent.save();
    res.status(201).json(saved);
  } catch (err) {
    res.status(500).json({ error: err.message });
  }
});

module.exports = router;