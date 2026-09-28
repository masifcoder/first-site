<?php
echo "hello;

$name = "<script>alert('Hacked!')</script>";
exit;
/** 
 * complete descripiton about the server
 */

// phpinfo();


// echo "hello", "world";

//////  concatination
// echo "Name is : " . $name . " and age is : " . $age;
// echo "Name is : $name and age is  $age";

// variables
    $day = "Tuesday";
    
    // switch ($day) {
    //     case "Monday" :
    //         echo "today is monday";
    //         break;
    //     case "Sunday" :
    //         echo "today is sunday";
    //         break;
    //     default :
    //         echo "not a day";    

    // }

    // $age = 20;

    // if($age > 20) {
    //     echo "you are eligible";
    // } else {
    //     echo " you are not eligible ";
    // }

    // ternary operator
    // echo ($age < 20) ?  "eligible" : "not eligible";

    $fruits = ["apple", "mango", "sample"];
    $name = "ali";
    $age  = 30;


    // echo $name;
    var_dump($name);

    // echo  print  print_r   var_dump
        // echo "----------";

    echo "<pre>";    
     var_dump($fruits);
    echo "</pre>";




    //  print_r($name);

// echo "---------------------------";


        echo "<pre>";
        var_dump($fruits);
        echo "</pre>";

        

?>