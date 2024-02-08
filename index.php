<html>

<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style="background:#82b2e8;">
<style>
  *{
    font-family: "Monaco";
  }

  .heading {
    color: white; /* Change text color to blue */
    font-size: 55px; /* Change font size to 24 pixels */
    font-family: Luminari, fantasy; /* Change font family */
    text-align: center;
  }

  #position {
    color: white; /* Change text color to blue */
    font-size: 20px; /* Change font size to 24 pixels */
    position:absolute;
    text-align: center;
  }
  legend{
    font-size: 25px; 
  }

  a{
    color: black;
    position:absolute;
    top: 700px;
    left: 700px;
    text-align: center;
  }
</style>

<body>

<h1 class= 'heading'>HumorHaven</h1>
<h5 style= 'font-family: Monaco; color:#005c99; font-size: 16px; text-align: center;'>Never be a BORING person ever again!</h5>
<a style= 'text-align: center;' href="https://linktr.ee/shamanthi.s">By: Shamanthi Rajagopal</a>
<?php

//other php files included
include "db_jokes_conn.php";
//nclude "search_all_jokes.php";
?>

<form style='padding-left: 200px' class="form-horizontal" action="search_keyword_jokes.php">
<legend  style='width: 180px;'>Search for a Joke</legend>  
<label class="" for="fname">Enter a key word:</label><br>
<div class="">
  <input style='width: 1100px' type="text" name="keyword" required="" class="form-control input-md">
  <span style='color:#005c99; 'class="help-block">Enter a keyword to search the Joke DB</span>
    <button id="search" name="search" class="btn btn-inverse">Search</button>
  </div>
</div>

</form>


<form style='padding-left: 200px' action="add_jokes.php">
<br><br>
<legend style='width: 125px;'>Add a Joke</legend>  
<label class="" for="fname" >Enter your joke:</label><br>
  <div class="">
  <input style='width: 1100px' placeholder="e.x. knock knock" class="form-control input-md" required="" type="text" name="newJoke" size="10">
  <span style='color:#005c99;' class="help-block">Only the first half of the joke</span>  
  <br>
  <label for="fname" >Enter the punchline:</label><br>
  <input style='width: 1100px' type="text" placeholder="e.x to get to the other side" class="form-control input-md" name="newAnswer" required="">
  <span style='color:#005c99;' class="help-block">Make sure it's actually funny :P</span>  
  <input class="btn btn-inverse" type="submit" value="Add Joke">
</div>
</form> 


<?php
$conn->close();
?>

</body>

</html>