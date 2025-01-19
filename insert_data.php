<?php
if(isset($_POST['add_students'])){
    $fname = $_POST['f_name'];
    $lname = $_POST['l_name'];
    $age = $_POST['age'];

    if($fname == "" || empty($fname)){
        header('location:indeex.php?message=you have to fill firstName!');
    }
}
else{
    $query = "insert into `students`(`first_name`,`last_name`,`age`) values ('$fname','$lname','$age')";
    $result =mysqli_query($connection,$query);
   
}
if(!$result){
    die("query failed".mysqli_error());
}
else{
    header('location:indeex.php?insert_sms=your data have been inserted successfuly');
}



?>