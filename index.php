<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My PHP Project</title>
</head>
<body>
<div>

    <?php
    //sets quiz id for randomized questions
    $quizID = rand(1,3);
    echo $quizID;

    //insert html header here

    if ($quizID == 1) {
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
</html>