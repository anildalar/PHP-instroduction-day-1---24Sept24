<?php 
    //Server side code
    // I want to store my name inside a variable
    $myname="Anil DOllor"; //String
    $age= 30; //Integer
    $myFavCarBrands = array('Tata','MG','Hundai'); //Outdated way of createing Array
    $myFavFruits = ['Apple','Banana','Graps']; //Latested Standard way of createing Array

    //Assocative Array
    $myStudents = [
        'rollno1'=>[
            'name'=>'Pradeep',
            'age'=>25,
            'course'=>'PHP/Laravel  ',
        ],
        'rollno2'=>[
            'name'=>'Yash',
            'age'=>23,
            'course'=>'PHP',
        ],
        'rollno3'=>[
            'name'=>'Abhishek',
            'age'=>25,
            'course'=>'Wordpress/PHP/Laravel/Strapi',
        ],
    ];


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Welcome to PHP</title>
        <link rel="stylesheet" href="./css/style.css" />
        <style>
            h1{
                color:red;
            }
        </style>
    </head>
    <body>
        <h1>Welcome <?php echo $myname; ?> to PHP</h1>
        <h2>My age is <?php echo $age; ?></h2>
        <?php 
            echo '<pre>';
            var_dump($myFavCarBrands[2]);
            echo '</pre>';
        ?>
        <?php 
            echo '<pre>';
            print_r($myFavCarBrands);
            echo '</pre>';
        ?>
        <?php 
            echo '<pre>';
            var_dump($myFavFruits);
            echo '</pre>';
        ?>
        <?php 
            echo '<pre>';
            print_r($myFavFruits);
            echo '</pre>';
        ?>
        <?php
            echo $myStudents['rollno1']['name'];
        ?>
    </body>
</html>