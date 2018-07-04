<?php session_start();?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Quizzer UI</title>
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
    </head>
    <body>
        <header>
            <div class="container">
                <h1>PHP Quizzer</h1>
            </div>
        </header>
        <main>
            <div class="container">
                <h2>You're Done</h2>
                <p>Congrats! You have completed the test</p>
                <p>Final Score: <?php echo $_SESSION['score'];?></p>
                <a href='question.php?n=1' class='start' >Retake Quiz</a>
            </div>
        </main>
        <footer>
            <div class="container">
                Copyright &copy; 2018; Quizzer
            </div>
        </footer>
    </body>
</html>
<?php session_unset();?>