<?php 
session_start();

$questions = array(
    // HTML Questions
    array(
        "question" => "What does HTML stand for?",
        "options" => array(
            "A. HyperText Makeup Language",
            "B. HyperText Markup Language",
            "C. HyperTransfer Markup Language",
            "D. HyperText Model Language"
        ),
        "answer" => "B"
    ),
    array(
        "question" => "How do you create a hyperlink in HTML?",
        "options" => array(
            "A. <a href='link'>Link Text</a>",
            "B. <link href='link'>Link Text</link>",
            "C. <hyperlink>Link Text</hyperlink>",
            "D. <url>Link Text</url>"
        ),
        "answer" => "A"
    ),
    array(
        "question" => "What does CSS stand for?",
        "options" => array(
            "A. Creative Style Sheets",
            "B. Computer Style Sheets",
            "C. Cascading Style Sheets",
            "D. Colorful Style Sheets"
        ),
        "answer" => "C"
    ),
    array(
        "question" => "How do you select an element with the class 'example' in CSS?",
        "options" => array(
            "A. #example",
            "B. .example",
            "C. element.example",
            "D. example.class"
        ),
        "answer" => "B"
    ),

    // JavaScript Questions
    array(
        "question" => "What is JavaScript primarily used for?",
        "options" => array(
            "A. Server-side scripting",
            "B. Database management",
            "C. Client-side scripting",
            "D. Video editing"
        ),
        "answer" => "C"
    ),
    array(
        "question" => "Which keyword is used to declare variables in JavaScript?",
        "options" => array(
            "A. var",
            "B. variable",
            "C. v",
            "D. let"
        ),
        "answer" => "A"
    ),
    array(
        "question" => "What does 'DOM' stand for in JavaScript?",
        "options" => array(
            "A. Document Object Model",
            "B. Data Object Model",
            "C. Display Object Model",
            "D. Document Oriented Model"
        ),
        "answer" => "A"
    ),
    array(
        "question" => "How do you write a comment in JavaScript?",
        "options" => array(
            "A. //This is a comment",
            "B. /<!--This is a comment-->",
            "C. 'This is a comment'",
            "D. /*This is a comment*/"
        ),
        "answer" => "A"
    ),

    // PHP Questions
    array(
        "question" => "What does PHP stand for?",
        "options" => array(
            "A. Personal Home Page",
            "B. PHP: Hypertext Preprocessor",
            "C. Preprocessed Home Page",
            "D. Private Hyperlink Page"
        ),
        "answer" => "B"
    ),
    array(
        "question" => "How do you declare a variable in PHP?",
        "options" => array(
            "A. @variable_name = 'Hello';",
            "B. variable_name = 'Hello';",
            "C. \$variable_name = 'Hello';",
            "D. #variable_name = 'Hello';"
        ),
        "answer" => "C"
    ),
    array(
        "question" => "What is the purpose of the PHP 'echo' statement?",
        "options" => array(
            "A. It is used to declare a variable.",
            "B. It is used to include external PHP files.",
            "C. It is used to output text or variables to the browser.",
            "D. It is used to create a loop in PHP."
        ),
        "answer" => "C"
    ),
    array(
        "question" => "How do you connect to a MySQL database using PHP?",
        "options" => array(
            "A. Use the mysqli_query() function.",
            "B. Use the mysql_connect() function.",
            "C. Use the connect() method.",
            "D. Use the mysqli_connect() function."
        ),
        "answer" => "D"
    )
);

?>