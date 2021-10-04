<?php
 
        $conn = mysqli_connect("localhost", "root", "", "contact");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        // Taking all 5 values from the form data(input)
        $name = $_REQUEST['name'];
        $date_of_birth = date('Y-m-d', strtotime($_REQUEST['date_of_birth']));
        $address = $_REQUEST['address'];
        $postcode = $_REQUEST['postcode'];
        $state_id = $_REQUEST['state_id'];
          
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO user (`name`, `date_of_birth`, `address`, `postcode`, `state_id`) VALUES ('$name', 
            '$date_of_birth',' $address','$postcode','$state_id')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
  
            echo nl2br("\n$name\n $date_of_birth\n "
                . "$address\n $postcode\n $state_id");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
?>