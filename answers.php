<html lang="en">
<head>
    <title>ANSWERS</title>
</head>

<?php
$answer1 = $_POST['answer1'];
$answer2 = $_POST['answer2'];
$answer3 = $_POST['answer3'];
$score = 0;
$formID = $_GET['id'];

if ($formID == 1) {
    if ($answer1 == "B") {
        $score++;
    }
    if ($answer2 == "A") {
        $score++;
    }
    if ($answer3 == "D") {
        $score++;
    }
}

if ($formID == 2) {
    if ($answer1 == "A") {
        $score++;
    }
    if ($answer2 == "C") {
        $score++;
    }
    if ($answer3 == "D") {
        $score++;
    }
}

if ($formID == 3) {
    if ($answer1 == "D") {
        $score++;
    }
    if ($answer2 == "B") {
        $score++;
    }
    if ($answer3 == "C") {
        $score++;
    }
}
echo "Your score is: $score/3";
?>
</html>