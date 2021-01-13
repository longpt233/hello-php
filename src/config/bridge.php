<?php


// requirement file 


// Process URL from browser
// dung trong file index call new App
require_once "./src/core/App.php";

// How controllers call Views & Models
// dung trong Home Controller de extend 
require_once "./src/core/Controller.php";

// Connect Database
// dung trong model de su dung db 
require_once "./src/core/Database.php";


?>