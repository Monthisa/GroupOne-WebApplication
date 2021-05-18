<?php
// session_start();
//     include 'dbcontroller.php';
//     $errors = array();
    
//     if(isset($_POST['login'])){
//         $email = mysqli_real_escape_string($conn, $_POST['email']);
//         $password1 = mysqli_real_escape_string($conn, $_POST['pass']);
        
//         if(empty($email)){array_push($errors, "email is required");}
//         if(empty($password1)){array_push($errors, "password is required");}
        
//         if (count($errors) == 0) {
//             $password1 = md5($password);
//             $query = "SELECT * FROM id&pass WHERE Email = '$email' AND password = '$password1' ";
//             $result = mysql_query($conn, $query);
            
//             if(mysqli_num_rows($result) == 1) {
//                 $_SESSION['username'] = $email;
//                 $_SESSION['success'] = "You are now logged in";
//                 header("location: index.php");
//             } else {
//                 array_push($errors, "Wrong username/password");
//                 $_SESSION['error'] = "Wrong username/password";
//                 header("location: index.php");
//             }
//         }
//     }



// if(isset($_POST['save']))
// {
//     extract($_POST);
//     include 'dbcontroller.php';
//     $sql=mysqli_query($conn,"SELECT * FROM id&pass where Email='$email' and Password='$password'");
//     $row  = mysqli_fetch_array($sql);
//     if(is_array($row))
//     {
//         $_SESSION["ID"] = $row['ID'];
//         $_SESSION["Email"]=$row['Email'];
//         $_SESSION["First_Name"]=$row['First_Name'];
//         $_SESSION["Last_Name"]=$row['Last_Name']; 
//         header("Location: index.php"); 
//     }
//     else
//     {
//         echo "Invalid Email ID/Password";
//     }
// }
?>