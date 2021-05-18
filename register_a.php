<?php
    // session_start();
    // include("dbcontroller.php");
    // $errors = array();
    // if(isset($_POST['save'])){
    //     $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    //     $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    //     $email = mysqli_real_escape_string($conn, $_POST['email']);
    //     $password1 = mysqli_real_escape_string($conn, $_POST['pass']);
    //     $password2 = mysqli_real_escape_string($conn, $_POST['cpass']);
        
    //     $user_check_query = "SELECT * FROM id&pass WHERE Email = '$email'";
    //     $query = mysqli_query($conn, $user_check_query);
    //     $result = mysqli_fetch_assoc($query);
        
    //     if($result){
    //         if($result['First_name'] === $first_name) {array_push($errors, "First name already exists");}
    //         if($result['Last_name'] === $first_name) {array_push($errors, "Last name already exists");}
    //         if($result['Email'] === $first_name) {array_push($errors, "Email already exists");}
    //     }
    //     if(count($errors) == 0) {
    //         $password = md5($password1);
            
    //         $sql = "INSERT INTO id&pass (First_Name, Last_Name, Email, Password) VALUES ('$first_name', '$last_name', '$email', '$password1')";
    //         mysqli_query($conn, $sql);
            
    //         $_SESSION['username'] = $email;
    //         $_SESSION['success'] = "You are now logged in";
    //         header('location: Signin.php');
    //     }else{
    //         array_push($errors, "Name or Email already exists");
    //             $_SESSION['error'] = "Name or Email already exists";
    //             header("location: register_a.php");
    //     }
    // }
    
    // $strSQL = "INSERT INTO User (`Username`, `Password`, `Faculty`, `Department`, `Program`) VALUES ('".$_POST['txtUsername']."', 
  // '".$_POST["txtPassword"]."','".$_POST["Faculty"]."','".$_POST["Department"]."','".$_POST["Program"]."')";
  // $objQuery = mysqli_query($objConnect,$strSQL);
  // $Username=$_POST['txtUsername'];
  // $sqlCreateStr = "CREATE TABLE ".$Username." (
   // code VARCHAR(8) DEFAULT NULL,
   // subName VARCHAR(300) DEFAULT NULL,
   // weight INT(3) DEFAULT NULL,
   // grade float DEFAULT NULL,
   // PRIMARY KEY (code),
   // UNIQUE (subName)
  // )ENGINE=InnoDB DEFAULT CHARSET=tis620";
  //echo $sqlCreateStr;
  // mysqli_query($objConnect,$sqlCreateStr);
  // echo "<script type='text/javascript'>alert('Register Completed');</script>"; 
  // header("location:home.php");

    
// extract($_POST);
//  include("dbcontroller.php");
// $sql = mysqli_query($conn,"SELECT * FROM id&pass where Email='$email'");
// if(mysqli_num_rows($sql)>0)
// {
//     echo "Email Id Already Exists";
// 	exit;
// }
// else(isset($_POST['save']))
// {
//     $file = rand(1000,100000)."-".$_FILES['file']['name'];
//     $file_loc = $_FILES['file']['tmp_name'];
//     $folder="upload/";
//     $new_file_name = strtolower($file);
//     $final_file=str_replace(' ','-',$new_file_name);
//     if(move_uploaded_file($file_loc,$folder.$final_file))
//     {
//         $query="INSERT INTO id&pass(First_Name, Last_Name, Email, Password, File ) VALUES ('$first_name', '$last_name', '$email', 'md5($pass)', '$final_file')";
//         $sql=mysqli_query($conn,$query)or die("Could Not Perform the Query");
//         header ('Location: Signin.php?status=success');
//     }
//     else 
//     {
// 		echo "Error.Please try again";
// 	}
// }

?>