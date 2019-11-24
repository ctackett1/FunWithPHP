<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My PHP Project</title>
</head>
<body>
<div>
    <?php
    include 'questions.php';
    include 'answers.php';
    // here document creates an html form within php tags
    print <<<_HTML_
    <form method="post" action="$_SERVER[PHP_SELF]">
        First Name: <input type="text" name="fname"><br>
        Last Name: <input type="text" name="lname"><br>
        <input type="submit">
    </form>
    _HTML_;

    print <<<__HTML__
    <form action="answers.php" method="post">
    <input type="radio" id="Button1"
           name="multi" value="choice1">
    <label for="Button1">Choice 1</label><br>
                
    <input type="radio" id="Button2"
           name="multi" value="">
    <label for="Button2">Choice 2</label><br>
                
    <input type="radio" id="Button3"
           name="multi" value="">
    <label for="Button3">Choice 3</label><br>
    <input type="submit" value="Submit">
    </form>
    __HTML__;

    if ($_POST['fname'] && $_POST['lname']) {
        print "Hello, ";
        print $_POST['fname'];
        print " ";
        print $_POST['lname'];
    } elseif (!$_POST['fname'] || !$_POST['lname']){
        print "Please enter both your first name and last name.";
    }
    ?>

</div>
</body>
</html>