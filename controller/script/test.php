 <?php
include 'connection.php';

 //$conn = mysqli_connect("localhost","user","user","ks_shop") or die("Error " . mysqli_error($conn));
 
       echo $name = htmlspecialchars($_POST["name"]);
       echo $email = htmlspecialchars($_POST['email']);
       echo $password = htmlspecialchars($_POST['password']);

      $sql = "select * from users where email = '$email' ";
      $run = mysqli_query($conn, $sql);
      $check_email = mysqli_num_rows($run);

        if($check_email == $email){
            echo "<h2>This email is already registered, please try another!</h2>";
            //exit();
        }   else 
            {       
                $insert = "insert into users(name,email,password) values('$name','$email','$password')";
                $run_insert = mysqli_query($con,$insert);
            
                if($run_insert)
                {
                    echo "<h2>Registration Successful, Thanks!</h2>";
                }


            }
?>