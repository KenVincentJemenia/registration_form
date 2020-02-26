<?php
include_once ("functions.php");

$fname = $_POST['fname'];
echo $fname;

$lname = $_POST['lname'];
echo $lname;

$midname = $_POST['midname'];
echo $midname;

$addr = $_POST['addr'];
echo $addr;

$POB = $_POST['POB'];
echo $POB;

$dob = $_POST['DOB'];
echo $dob;

$gender = $_POST['gender'];
echo $gender;

$guardian = $_POST['guardian'];
echo $guardian;

$contactnum = $_POST['contactnum'];
echo $contactnum;

$status = $_POST['status'];
echo $status;

$yrlvl = $_POST['yrlvl'];
echo $yrlvl;

$course = $_POST['course'];
echo $course;

$sy = $_POST['sy'];
echo $sy;

$email = $_POST['email'];
echo $email,",<br><br>";



 /* 1 */
 if (notEmp($fname) && notEmp($lname) && notEmp($midname) && notEmp($addr) && notEmp($dob) && notEmp($guardian) && notEmp($status) && notEmp($sy) && notEmp($email)){
    echo "valid", "<br>";
}
else{
    echo "invalid", "<br>";
}

/* 2 */
if (shouldnotNum($fname) && shouldnotNum($lname) && shouldnotNum($midname) &&shouldnotNum($addr) && shouldnotNum($POB) && shouldnotNum($guardian) && shouldnotNum($status) && shouldnotNum($email)){
    echo "valid", "<br>";
}
else{
    echo "invalid", "<br>";
}
/* 3 */
if (notSpecialChar($fname) && notSpecialChar($lname) && notSpecialChar($midname) && notSpecialChar($addr) && notSpecialChar($POB) && notSpecialChar($guardian) && notSpecialChar($status) && notSpecialChar($sy) && notSpecialChar($email)){
    echo "valid", "<br>";
}
else{
    echo "invalid", "<br>";
}
/* 4 */
if (moreThan2($lname) && moreThan2($fname)){
    echo "valid", "<br>";
}
else{
    echo "invalid", "<br>";
}
/* 5 */
if (notags($lname) && notags($fname) && notags($midname) && notags($addr) && notags($POB) && notags($guardian) && notags($status) && notags($sy) && notags($email)){
   echo "valid", "<br>";
}
else{
    echo "invalid", "<br>"; 
}
/* 6 */
if (emailFormat($email)){
    echo "valid", "<br>";
}
else{
    echo "Invalid", "<br>";
}
/* 7 */
if (philpreffix($contactnum)){
    echo "valid";
}
else{
    echo "invalid";
}
?>