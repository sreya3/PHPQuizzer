<?php include "database.php"?>
<?php session_start(); ?>
<?php
    $q_no = (int)$_GET['n'];
    $query = "SELECT * FROM questions WHERE question_number = $q_no";
    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
    
    $question = $result->fetch_assoc();
    
    $query = "SELECT * FROM choices WHERE question_number = $q_no";
    $choices = $mysqli->query($query) or die($mysqli->error.__LINE__);
    
    $query = "SELECT * FROM questions";
    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
    $total = $result->num_rows;
    
    
    
?>
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
                <div class="current"><?php echo 'Question '.$q_no.' of '.$total;?></div>
                <p class="question">
                    <?php echo $question['text'];?>
                    
                </p>
                <form method="post" action="process.php">
                    <ul class="choices">
                        <?php while($row = $choices->fetch_assoc()):?>
                        <li><input name="choice" type="radio" value="<?php echo $row['id'];?>"/><?php echo $row['text'];?></li>
                        <?php endwhile; ?>
                    </ul>
                    <input type ="hidden" name="number" value="<?php echo $q_no;?>"/>
                    <input type="submit" value="Submit"/>
                    
                </form>
            </div>
        </main>
        <footer>
            <div class="container">
                Copyright &copy; 2018; Quizzer
            </div>
        </footer>
    </body>
</html>
