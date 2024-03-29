<?php session_start() ?>
<!--
 FunWithPHP by Spencer Palmeter, Cecilia Tackett, and Patrick Bracciano
 Purpose: To generate a functional quiz application with basic session
 handling and user interaction. The quiz presented is randomly selected from
 three different options.
 This project implements several different functions of PHP such as session handling,
 and function definition and calling.
 -->
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
        <center><h1 class="fun_with_php">Missouri Western State University: Quiz</h1></center>
        <center><h5 class="fun_with_php">FUN WITH PHP</h5></center>
      </div>
      <br>
    </div>
  </header>

  <body>
    <div class="row">
      <!--This row is dedicated to the welcome and login portions of the page.
        checks if user is logged in and welcomes them appropriately
        creates a login/logout button based on current session state.
      -->
      <div class="col-md-11 user-welcome">
        <!--Welcome the user-->
        <center><h3 style="margin-top:20px">
          <?php
            if (isset($_SESSION['Username'])) {
                printf("Welcome ".$_SESSION['Username']."!");
            } else {
                echo "Welcome Guest!";
            }
           ?>
       </h3></center>
      </div>
      <!--Login option-->
      <div class="col-md-1">
        <center><h5 style="margin-right:10px">
        <?php
          if (isset($_SESSION['Username'])) {
              print <<<_HTML_
                  <div>
                      <p style="padding:5px">
                          <form action="logout.php" method="post">
                              <input type="submit" value="Logout">
                          </form>
                      </p>
                  </div>
               _HTML_;
          } else {
              print <<<_HTML_
                  <div>
                      <p style="padding:5px">
                          <form action="login.php" method="post">
                              <input type="submit" value="Login">
                          </form>
                      </p>
                  </div>
               _HTML_;
          }
         ?>
       </h5></center>
      </div>
    </div>
    <div class="col-md-12 question_area">
          <?php
          //sets quiz id for randomized questions
          $quizID = rand(1,3);
          //checks randomly assigned quizID and assigns questions and answer selections to array variable
          if ($quizID == 1) {
            echo "<h3 style=color:#800000>Quiz 1 </h3>";
              $array = array(
                "quizID" => 1,
                 "q1" => "<h5 style=color:#21889D>PHP is what type of language?</h5>",
                 "answer1A" => "Strongly typed",
                 "answer1B" => "Weakly typed",
                 "answer1C" => "Duck typed",
                 "answer1D" => "All of the above",
                 "q2" => "<h5 style=color:#21889D>PHP code is executed on the?</h5>",
                 "answer2A" =>"Server-side",
                 "answer2B" => "Client-side",
                 "answer2C" => "Dark-side",
                 "answer2D" => "Both client and server",
                 "q3" => "<h5 style=color:#21889D>Which statement has a syntax error?</h5>",
                 "answer3A" => "\$var1 = 255;",
                 "answer3B" => "Print (“Hello” . “World)",
                 "answer3C" => "Print (“Hello” + “World”);",
                 "answer3D" => "B and C",
          );
              writeQuiz($array);
          }
          if ($quizID == 2) {
              echo "<h3 style=color:#800000>Quiz 2 </h3>";
              $array = array(
                "quizID" => 2,
                "q1" => "<h5 style=color:#21889D>What 'hidden' variable holds submitted form data?</h5>",
                "answer1A" => "\$_POST",
                "answer1B" => "\$_GET",
                "answer1C" => "\$_SERVER",
                "answer1D" => "\$_VARS",
                "q2" => "<h5 style=color:#21889D>What type of variable is \$_POST?</h5>",
                "answer2A" =>"string",
                "answer2B" => "list",
                "answer2C" => "array",
                "answer2D" => "None of the above",
                "q3" => "<h5 style=color:#21889D>What command can be used to print something?<h5>",
                "answer3A" => "print",
                "answer3B" => "echo",
                "answer3C" => "printf",
                "answer3D" => "All of the above",
              );
              writeQuiz($array);
          }
          if ($quizID == 3) {
              echo "<h3 style=color:#800000>Quiz 3</h3>";
              $array = array(
                "quizID" => 3,
                "q1" => "<h5 style=color:#21889D>Which of the following variable names are ineligible?</h5>",
                "answer1A" => "$1var",
                "answer1B" => "\$helloWorld!",
                "answer1C" => "\$name-1",
                "answer1D" => "All of the above",
                "q2" => "<h5 style=color:#21889D>When was PHP first released?</h5>",
                "answer2A" =>"1998",
                "answer2B" => "1994",
                "answer2C" => "2002",
                "answer2D" => "2003",
                "q3" => "<h5 style=color:#21889D>What does PHP stand for?</h5>",
                "answer3A" => "Private HTML Postprocessing",
                "answer3B" => "Python Hybrid Processing",
                "answer3C" => "PHP: Hypertext Preprocessor",
                "answer3D" => "None of the above",
              );
              writeQuiz($array);
          }
          //WriteQuiz is used to generate a generic quiz form, questions and answers to fill the form are
          //pulled from the $arr variable that is passed to it
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
                      <center>
                      <input type="submit" value="Submit Quiz" />
                      </center>
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
          <br>Professor: Dr. Kendall-Morwick
          <br>###Students###
          <br>Spencer Palmeter
          <br>Patrick Bracciano
          <br>Cecilia Tackett
        </p>
      </center>
    </div>
  </footer>
</html>
