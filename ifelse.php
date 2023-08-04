<?php
// for the time
echo "for the time<br>";
$time= 6;
if ($time <=12) {
echo "Good Morning <br>";  //Morning for before 12
}
else {
echo "Good Afternoon <br>";  //Afternoon for after 12

}

echo "Check if a number is positive, negative, or zero<br>";

//Check if a number is positive, negative, or zero
$num= 2 ;
if ($num  <0) {
    echo $num." is a negative number <br>";
}
else {
    echo $num." is a positive number<br>";
}

//Determine if a given year is a leap year or not.
echo "Determine if a given year is a leap year or not.<br>";
$year = 2084;
if ($year%400==0) {
    echo $year. " is a leap year <br>";
}
elseif ($year%100==0) {
    echo $year." is not a leap year <br>";
}
elseif ($year%4==0){
    echo $year." is a leap year <br>";    
}
else {
    echo $year." is not a leap year <br>";
}

//Given two numbers, find and display the larger number.
echo "//Given two numbers, find and display the larger number.<br>";
$int1= 324;
$int2= 54;
if ($int1>$int2) {
    echo $int1." is larger than ".$int2 . "<br>";
} 
else {
    echo  $int2. " s larger than " .$int1 . "<br>";
}
//Calculate the grade for a student based on their exam score using the following criteria:
    // 90-100: A
    // 80-89: B
    // 70-79: C
    // 60-69: D
    // Below 60: F
    echo "Calculate the grade for a student based on their exam score using the following criteria:<br>
        90-100: A<br>
         80-89: B<br>
         70-79: C<br>
         60-69: D<br>
         Below 60: F<br>";
    $marks= 16;
       if($marks>100) {
        echo "Enter marks correctly <br>";
    }

    elseif($marks>=90) {
        echo "Grade A <br>";

    }
    elseif ($marks>80) {
        echo "Grade B <br>";
    }
    elseif ($marks>=70){
        echo "Grade C <br>";
    }
    elseif ($marks>=60){
        echo "Grade D<br>";
    }
    elseif ($marks<=60) {
        echo "Fail <br>";
    }
    else {
        echo "Enter marks correctly";
    }
    //Check if a number is even or odd.
    echo "Check if a number is even or odd<br>";
    $num = 34;
    if ($num%2 ==0) {
        echo $num. " is even <br>";
    }
    else {
        echo $num. " is odd<br>";
    }


?>

