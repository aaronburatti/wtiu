<?php

//this brings in the db info from a hidden place
require "db/db.php";



  /****************************Helper functions*********************************/

//this function prevents Xsite scripting by handling html characters safely
function clean($string){

    return htmlentities($string);

  }

//this function will disable SQL injection by not allowing SQL queries into
//the db by user input
  function escape($string){

  global $connection;
  return mysqli_real_escape_string($connection, $string);

  }


//this is to hide all error messages from being displayed
function confirm($result) {

  global $connection;
  if(!$result){
    die("query failed" . mysqli_error($connection));
    }
  }




  ?>
