<?php
    echo "<pre>";
    var_dump($_POST); 
    echo "</pre>";
    echo "<br><br>";

    $fullname = $_POST['name'];
    $gender = $_POST ['gender'];
    $country = $_POST ['country'];
?>

<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database ="wait_lang_sir";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
?>

<?php
    $sql = "INSERT INTO student_records (id, full_name, gender, country)
    VALUES (null, '$fullname', '$gender', '$country')";
    
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>