<?php 

//Open a new connection to the MySQL server
$mysqli = new mysqli('localhost', 'root', '', 'calmaura');

//Output any connection error
if ($mysqli->connect_error) {
    die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

    // require_once('config.php');

    if(isset($_POST['prediction']))
    {
        $username = mysqli_real_escape_string($mysqli,$_POST['username']);
         $gender = mysqli_real_escape_string($mysqli,$_POST['gender']);
         $score = mysqli_real_escape_string($mysqli,$_POST['score']);
         $education = mysqli_real_escape_string($mysqli,$_POST['education']);
         $rest = mysqli_real_escape_string($mysqli,$_POST['rest']);
        

        if(empty($username) || empty($gender) || empty($score) || empty($education) | empty($rest))
        {
            echo ' Please Fill in the Details ';
        }
        else
        {
            
                $query = "insert into details (username,gender,score,education,rest) values ('$username','$gender','$score' ,'$education' ,'$rest')";
                $result = mysqli_query($mysqli,$query);

                if($result)
                {
                    echo ' Your Record Has Been Saved in the Database ';
                }
                else
                {
                    echo ' Please Check Your Details Again';
                }
            
        }
    }


?>