<?php

// This script is created by JELMER HALFF

session_start();

if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
    header("location: index.php");
    exit;
}

require_once 'config.php';

$id = $_GET['q'];

$sql = "SELECT * FROM questions where id=$id";

$result = mysqli_query($link, $sql);

$queryResult = mysqli_num_rows($result);

if ($queryResult > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id_y = $row['id_yes'];
        $id_n = $row['id_no'];
        $id_idk = $row['id_idk'];
        $question = $row['question'];
        echo "<div class=\"container\">";
        echo "<br><h3><b>$question</b></h3><br>";
        echo "<a href=\"quiz.php?q=$id_y\"><button class=\"btn\">Yes</button></a>";
        echo "<a href=\"quiz.php?q=$id_n\"><button class=\"btn\">No</button></a>";
        echo "<a href=\"quiz.php?q=$id_idk\"><button class=\"btn\">I Don't Know</button></a>";
        echo "<br><br><a href=\"home.php\">Go back to homepage</a>";
        echo "</div>";
    }
} else {

}

if ($_GET['q'] == -1) {
    echo "<div class=\"container\">";
    echo "<br><h3><b>Conclusion:</b></h3>";
    $conclusion = "<h3><b>You are not addicted to videogames!</b></h3><br>";
    echo "$conclusion";
    echo "<i class=\"fa fa-thumbs-up\" aria-hidden=\"true\" style=\"font-size: 60px\"></i><br><br><br>";
    echo "<a href=\"quiz.php?q=1\">Try again</a><br><br>";
    echo "<a href=\"home.php\">Go back to homepage</a>";
    echo "</div>";
}

if ($_GET['q'] == -2) {
    echo "<div class=\"container\">";
    echo "<br><h3><b>Conclusion:</b></h3>";
    $conclusion = "<h3><b>You are probably not addicted to video games.</b></h3><br>";
    echo "$conclusion";
    echo "<i class=\"fa fa-thumbs-up\" aria-hidden=\"true\" style=\"font-size: 60px\"></i><br><br><br>";
    echo "<a href=\"quiz.php?q=1\">Try again</a><br><br>";
    echo "<a href=\"home.php\">Go back to homepage</a>";
    echo "</div>";
}

if ($_GET['q'] == -3) {
    echo "<div class=\"container\">";
    echo "<br><h3><b>Conclusion:</b></h3>";
    $conclusion = "<h3><b>You are addicted to video games.</b></h3><br>";
    echo "$conclusion";
    echo "<i class=\"fa fa-thumbs-down\" aria-hidden=\"true\" style=\"font-size: 60px\"></i><br><br><br>";
    echo "<a href=\"quiz.php?q=1\">Try again</a><br><br>";
    echo "<a href=\"home.php\">Go back to homepage</a>";
    echo "</div>";
}

if ($_GET['q'] == -4) {
    echo "<div class=\"container\">";
    echo "<br><h3><b>Conclusion:</b></h3>";
    $conclusion = "<h3><b>You are probably addicted to video games.</b></h3><br>";
    echo "$conclusion";
    echo "<i class=\"fa fa-thumbs-down\" aria-hidden=\"true\" style=\"font-size: 60px\"></i><br><br><br>";
    echo "<a href=\"quiz.php?q=1\">Try again</a><br><br>";
    echo "<a href=\"home.php\">Go back to homepage</a>";
    echo "</div>";
}

if ($_GET['q'] == -5) {
    echo "<div class=\"container\">";
    echo "<br><h3><b>Conclusion:</b></h3>";
    $conclusion = "<h3><b>I have no clue if you are addicted or not..</b></h3><br>";
    echo "$conclusion";
    echo "<i class=\"fa fa-thumbs-down\" aria-hidden=\"true\" style=\"font-size: 60px\"></i><br><br><br>";
    echo "<a href=\"quiz.php?q=1\">Try again</a><br><br>";
    echo "<a href=\"home.php\">Go back to homepage</a>";
    echo "</div>";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Quiz test</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
          integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://use.fontawesome.com/releases/v5.0.2/css/all.css" rel="stylesheet">
</head>
<body>

</body>
</html>