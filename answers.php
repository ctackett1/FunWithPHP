<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Results</title>
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
        <center><h1 class="fun_with_php">FUN WITH PHP</h1></center>

        <center><h5 class="fun_with_php">Missouri Western State University: Quiz</h5></center>
      </div>
      <br>
    </div>
  </header>

  <body>
    <div class="col-md-12">
    <?php
    //assigns user's answers to local variables
    $answer1 = isset($_POST['answer1']);
    $answer2 = isset($_POST['answer2']);
    $answer3 = isset($_POST['answer3']);
    $score = 0;
    $formID = $_GET['id'];

    //checks form id to determine which set of correct answers is appropriate to compare user's submitted answers
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
    ?>
      <div class="row" style="margin-top:150px">
        <div class="col-sm-12">
          <center><h1 style=color:#21889D>
          <?php
          //returns user's score
          echo "Your score is: $score/3";
           ?>
         </h1></center>
        </div>
      </div>
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
