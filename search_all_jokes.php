<body style="background:#82b2e8;">
<?php
//$sql = "SELECT * FROM jokesdb.jokes";

$sql = "SELECT JokeID, Joke_Question, Joke_Answer FROM jokesdb.jokes";
$result = $conn->query($sql);

//Access the jokes from the db
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Joke Question: " . $row["Joke_Question"]. " " . $row["Joke_Answer"]. "<br>";
  }
} else {
  echo "0 results";
}
?>