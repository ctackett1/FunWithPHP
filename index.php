<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div>
    <form action="welcome.php" method="post">
        First Name: <input type="text" name="fname"><br>
        Last Name: <input type="text" name="lname"><br>
        <input type="submit">
    </form>
    <form action="answers.php" method="post">
    <input type="radio" id="Button1"
           name="multi" value="">
    <label for="Button1">Choice 1</label><br>

    <input type="radio" id="Button2"
           name="multi" value="">
    <label for="Button2">Choice 2</label><br>

    <input type="radio" id="Button3"
           name="multi" value="">
    <label for="Button3">Choice 3</label><br>
    <input type="submit" value="Submit">
    </form>
</div>
    <?php
    $name = "Spencer Palmeter";
    $age = 21;

    echo "my name is $name and I am $age years old";
    //$site = "https://www.google.com";
    //fopen($site,"r") or die("unable to connect to $site");
    ?>
</body>
</html>