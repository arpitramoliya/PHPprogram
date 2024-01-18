<?php

    $question = [
        'Who is the father of Php ?' => ['Rasmus Lerdorf', 'Rasmus Luf', 'Zeev Suraski', ' Andi Gutmans'],
        'PHP Full Name ?' => ['Personal Home Page', 'Personal Home Path', 'Personal Home Preporser', 'Peso Home Page'],
        'What is php in new object model ?' => ['Zeev Suraski', 'Rasmus Luf', 'Zend Engine', 'Andi Gutmans'],
        'latest php version ?' => ['7.4', '8.0', '8.2', '8.3'],
        'Which of the following function sorts an array in reverse order ?' => ['short', 'rshort', 'reset', 'shufflr'],
        'The default file extension in PHP are ____' => ['.php', '.css', '.html', '.ph'],
        'How does the name of the variable in PHP starts ?' => ['sing !', 'sing $', 'sing &', 'sing #'],
        'Which of the following is the syntax of comment in PHP ?' => ['//', '#', '//', 'all of the above'],
        'Which of the following is used to display the output in PHP ? ' => ['echo', 'write', 'print', 'both(a)and(c)'],
        'Which of the following PHP function is used to generate unique  id ?' => ['id()', 'mdid()', 'mid()', 'None of the above'],
        'Which of the following function is used to find files in PHP ? ' => ['glob()','fold()', 'file()', 'None of the above'],
        'Which of the following function is used to get the ASCII value of a character in PHP ?' => ['val()', 'asc()', 'ascii()', 'chr()'],
        'Which of the following is used to end a statement in PHP ?' => ['. (dot)', ';(semicolon)', '!(exclamation)', '/ (slash)'],
        'Which of the following variable name is invalid ? ' => ['$newVar', '$new_Var', '$new-var', 'All of the above'],
        'What does SPL stands for in PHP ? ' => ['Standard PHP Library','Simple PHP Library', 'Simple PHP List', 'None of the above'],
        'PHP is Scripting language' => ['Brower side', 'Server side', 'Home side', 'Client side'],
        'PHP is considered a server-side scripting language' => ['true', 'false', 'true as flase','None of the above'],
        'Waht are the two binary numbers ?' => ['1 and 0', '2 and 0', '1 to 9', 'All of the above'],
        'CPU Full Name is____ ' => ['Central processing unit', 'Conteral processing unit', 'Cenetr pross unit', 'Central pross unix'],
        'XAMPP Full Name ____' => ['Operating system Apache Mysql Php Perl', 'Operating Apache Mysql Php Perl', 'Operating system Apache Mysql Php', 'All of the above'],
    ];

    //     if($_SERVER["REQUEST_METHOD"] == "POST"){
    //         $score = 0;
    //         for($i = 0; $i < count($question); $i++){
    //             if (isset($_POST["q$i"]) && $_POST["q$i"] == $correct_answers[$i]) {
    //         $score++;
    //         }
    //     }
    // }
 ?>

    <br />
    <br />

<html>
    <body>
        <form action="quiz_result.php" method="post">
            <?php 
                $i=1;
                foreach($question as $key => $value){
                echo "<h3>".$i.')'.$key."</h3>";

                //values
                foreach($value as $que => $quess){
                    echo "<input type='radio' name='question{$i}' id='question{$i}' value='{$quess}'>{$quess}";
                }
                $i++;
            }

           ?>
	
            <br>
            <br>
            <input type="submit" value="submit" >
        </form>
</body>
</html>