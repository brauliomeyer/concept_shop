 <?php
    
    $conn = mysqli_connect("localhost","user","user","ks_shop") or die("Error " . mysqli_error($conn));

	if(!$conn)	
    {
		echo 'Connection Error' . mysqli_get_host_info($conn) . "\n";
        exit();
    }
    else
    {
        echo 'Success... ' . mysqli_get_host_info($conn) . "\n";
    }
    
   ?>