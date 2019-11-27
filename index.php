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
      <center><h1 class="fun_with_php" style=background-color:black>FUN WITH PHP</h1><center>

      <center><h5 class="fun_with_php">Missouri Western State University: Quiz</h5><center>
    </div>
    <br>
    </br>
  </div>


</header>
<body>
<div class="col-md-12">

    <?php
    //sets quiz id for randomized questions
    $quizID = rand(1,3);
    //echo $quizID;

    //insert html header here

    if ($quizID == 1) {
      echo "<h3 style=color:blue>Quiz 1 </h3>";
        $array = array(
            "quizID" => 1,
            "q1" => "question1",
            "answer1A" => "test",
            "answer1B" => "test",
            "answer1C" => "test",
            "answer1D" => "test",
            "q2" => "question2",
            "answer2A" =>"test",
            "answer2B" => "test",
            "answer2C" => "test",
            "answer2D" => "test",
            "q3" => "question3",
            "answer3A" => "test",
            "answer3B" => "test",
            "answer3C" => "test",
            "answer3D" => "test",
    );
        writeQuiz($array);
    }
    if ($quizID == 2) {
        echo "<h3 style=color:blue>Quiz 2 </h3>";
        $array = array(
            "quizID" => 2,
            "q1" => "question1",
            "answer1A" => "test",
            "answer1B" => "test",
            "answer1C" => "test",
            "answer1D" => "test",
            "q2" => "question2",
            "answer2A" =>"test",
            "answer2B" => "test",
            "answer2C" => "test",
            "answer2D" => "test",
            "q3" => "question3",
            "answer3A" => "test",
            "answer3B" => "test",
            "answer3C" => "test",
            "answer3D" => "test",
        );
        writeQuiz($array);
    }
    if ($quizID == 3) {
        echo "<h3 style=color:blue>Quiz 3</h3>";
        $array = array(
            "quizID" => 3,
            "q1" => "question1",
            "answer1A" => "test",
            "answer1B" => "test",
            "answer1C" => "test",
            "answer1D" => "test",
            "q2" => "question2",
            "answer2A" =>"test",
            "answer2B" => "test",
            "answer2C" => "test",
            "answer2D" => "test",
            "q3" => "question3",
            "answer3A" => "test",
            "answer3B" => "test",
            "answer3C" => "test",
            "answer3D" => "test",
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
            </form>
        _HTML_;
    }
    ?>
</div>
</body>
<footer>
  <div class="col-sm-12">
    <center>
      <p class="footer" style=background-color:black>Class: CSC246
        <br>Professor: Dr. Morwick
        <br>###Students###
        <br>Spencer Palemeter
        <br>Patrick Braciano
        <br>Cecilia Tackett
      </p>
    </center>
  </div>
</footer>
</html>
