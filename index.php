<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My PHP Project</title>
    <!-- main.css-->
    <link rel="stylesheet" href="main.css">
    <!-- google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <!-- font awesome-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Rows and Col cheatsheet -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

</head>
<header>
  <div class="row" style=padding-top:10px;padding-bottom:10px>
    <div class="col-sm-1">
      <div class="logo_mwsu">
        <img src="img/logo.png" width="90px" height="90px" alt="img">
      </div>
    </div>
    <div class="col-sm-11">
      <center><h1 class="fun_with_php">Missouri Western State University: Quiz</h1><center>

      <center><h5 class="fun_with_php">FUN WITH PHP</h5><center>
    </div>
    <br>
    </br>
  </div>


</header>
<body>
<div class="col-md-12 question_area">

    <?php
    //sets quiz id for randomized questions
    $quizID = rand(1,3);
    //echo $quizID;

    if ($quizID == 1) {
      echo "<h4 style=color:blue>Quiz 1 </h4>";
        $array = array(
          "quizID" => 1,
           "q1" => "PHP is what type of language?",
           "answer1A" => "Strongly typed",
           "answer1B" => "Weakly typed",
           "answer1C" => "Duck typed",
           "answer1D" => "All of the above",
           "q2" => "PHP code is executed on the?",
           "answer2A" =>"Server-side",
           "answer2B" => "Client-side",
           "answer2C" => "Dark-side",
           "answer2D" => "Both client and server",
           "q3" => "Which statement has a syntax error?",
           "answer3A" => "\$var1 = 255;",
           "answer3B" => "Print (“Hello” . “World)",
           "answer3C" => "Print (“Hello” + “World”);",
           "answer3D" => "B and C",
    );
        writeQuiz($array);
    }
    if ($quizID == 2) {
        echo "<h3 style=color:blue>Quiz 2 </h3>";
        $array = array(
          "quizID" => 2,
          "q1" => "What 'hidden' variable holds submitted form data?",
          "answer1A" => "\$_POST",
          "answer1B" => "\$_GET",
          "answer1C" => "\$_SERVER",
          "answer1D" => "\$_VARS",
          "q2" => "What type of variable is \$_POST?",
          "answer2A" =>"string",
          "answer2B" => "list",
          "answer2C" => "array",
          "answer2D" => "None of the above",
          "q3" => "what command can be used to print something?",
          "answer3A" => "print",
          "answer3B" => "echo",
          "answer3C" => "printf",
          "answer3D" => "All of the above",
        );
        writeQuiz($array);
    }
    if ($quizID == 3) {
        echo "<h3 style=color:blue>Quiz 3</h3>";
        $array = array(
          "quizID" => 3,
          "q1" => "Which of the following variable names are ineligible?",
          "answer1A" => "$1var",
          "answer1B" => "\$helloWorld!",
          "answer1C" => "\$name-1",
          "answer1D" => "All of the above",
          "q2" => "When was PHP first released?",
          "answer2A" =>"1998",
          "answer2B" => "1994",
          "answer2C" => "2002",
          "answer2D" => "2003",
          "q3" => "What does PHP stand for?",
          "answer3A" => "Private HTML Postprocessing",
          "answer3B" => "Python Hybrid Processing",
          "answer3C" => "PHP: Hypertext Preprocessor",
          "answer3D" => "None of the above",
        );
        writeQuiz($array);
    }

    function writeQuiz($arr) {
        print <<<_HTML_
            <form action='answers.php?id=$arr[quizID]' method='post' id='quizForm' id='$arr[quizID]'>
                <ol>
                    <li>
                    <h3>$arr[q1]</h3>
                    <div>
                      <input type='radio' name="answer1" id="answer1" value="A" >
                      <label for="answer1A">A. $arr[answer1A]</label>
                    </div>
                    <div>
                      <input type='radio' name="answer1" id="answer1" value="B" >
                      <label for="answer1B">B. $arr[answer1B]</label>
                    </div>
                    <div>
                      <input type='radio' name="answer1" id="answer1" value="C" >
                      <label for="answer1C">C. $arr[answer1C]</label>
                    </div>
                    <div>
                      <input type='radio' name="answer1" id="answer1" value="D" >
                      <label for="answer1D">D. $arr[answer1D]</label>
                    </div>
                    </li>
                    <li>
                    <h3>$arr[q2]</h3>
                    <div>
                      <input type='radio' name="answer2" id="answer2" value="A" >
                      <label for="answer2A">A. $arr[answer2A]</label>
                    </div>
                    <div>
                      <input type='radio' name="answer2" id="answer2" value="B" >
                      <label for="answer2B">B. $arr[answer2B]</label>
                    </div>
                    <div>
                      <input type='radio' name="answer2" id="answer2" value="C" >
                      <label for="answer2C">C. $arr[answer2C]</label>
                    </div>
                    <div>
                      <input type='radio' name="answer2" id="answer2" value="D" >
                      <label for="answer2D">D. $arr[answer2D]</label>
                    </div>
                    </li>
                    <li>
                    <h3>$arr[q3]</h3>
                    <div>
                      <input type='radio' name="answer3" id="answer3" value="A" >
                      <label for="answer3A">A. $arr[answer3A]</label>
                    </div>
                    <div>
                      <input type='radio' name="answer3" id="answer3" value="B" >
                      <label for="answer3B">B. $arr[answer3B]</label>
                    </div>
                    <div>
                      <input type='radio' name="answer3" id="answer3" value="C" >
                      <label for="answer3C">C. $arr[answer3C]</label>
                    </div>
                    <div>
                      <input type='radio' name="answer3" id="answer3" value="D" >
                      <label for="answer3D">D. $arr[answer3D]</label>
                    </div>
                    </li>
                </ol>
                <input type="submit" value="Submit Quiz" />
                <input type="hidden" name="submit_check" value="1" />
            </form>
        _HTML_;
    }
    ?>
</div>
</body>
<footer>
  <div class="col-sm-12">
    <center>
      <p class="footer" style=background-color:black;padding:10px>Class: CSC246
        <br>Professor: Dr. Morwick
        <br>###Students###
        <br>Spencer Palmeter
        <br>Patrick Bracciano
        <br>Cecilia Tackett
      </p>
    </center>
  </div>
</footer>
</html>
