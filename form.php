<?php
        $conn = mysqli_connect("localhost", "root", "", "query_db");
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)

        $name = $_POST['name'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $message = $_POST['message'];
         
        // here our table name is college
        $sql = "INSERT INTO query  VALUES ('$name',
            '$email','$number','$message')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3 style='text-align:center;margin-top=auto;'>Thank you for submitting the form</h3>";
            // echo nl2br("\n$name\n $email\n "
            //     . "$number\n $message");
            #redirect to main page
            header("Location: index.php");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>