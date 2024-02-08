<body style="background:#82b2e8;">
<?php

include "db_jokes_conn.php";
$new_joke_question = $_GET["newJoke"];
$new_joke_answer = $_GET["newAnswer"];

$new_joke_question = addslashes($new_joke_question);
$new_joke_answer =addslashes($new_joke_answer);

//Adding a new joke
echo "<h3>Trying to add a new joke: $new_joke_question and $new_joke_answer</h3>";
?>
<a style ='color: white;' href="index.php"> Return to main page</a>
<br><br>
<?php
//Search for jokes with the word chicken
$sql = "INSERT INTO jokesdb.jokes (JokeID, Joke_Question, Joke_Answer) VALUES (NULL,'$new_joke_question','$new_joke_answer')";

$result = $conn->query($sql);
if (!$result) {
    die("An error has occurred.");
}

include "search_all_jokes.php";


?>
<br>
