<head>
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <script>
    
  $( function() {
    $( "#accordion" ).accordion();
  } );
  </script>

  <style>
    * {
  font-family: "Fantasy";
}
  </style>



</head>
<body style="background:#82b2e8;">
<?php

include "db_jokes_conn.php";
$keyword = $_GET["keyword"];
//echo $keyword;

//Searches Keywords to find jokes
echo "<h1>Jokes With '<em>$keyword</em>'</h1>";
//Search for jokes with the word chicken
$sql = "SELECT JokeID, Joke_Question, Joke_Answer FROM jokesdb.jokes WHERE Joke_Question LIKE '%". $keyword ."%'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
 ?>   

<div id="accordion">

<?php
  while($row = $result->fetch_assoc()) {
    //echo "id: " . $row["JokeID"]. " - Joke Question: " . $row["Joke_Question"]. " " . $row["Joke_Answer"]. "<br>";
    echo"<h3> <em> $row[Joke_Question] </em> </h3>";
    echo "<div><p> <em> $row[Joke_Answer] </em> </p></div>";


    }
} else {
  echo "No Results Found";
}
?>

</div>