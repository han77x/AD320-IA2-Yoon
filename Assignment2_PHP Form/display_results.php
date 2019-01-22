<?php
    // get the data from the form
   // $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    $name = $_GET['name'];
    $email = $_GET['email'];
    $phone = $_GET['phone'];
    $state = $_GET['state'];
    


?>    


<!DOCTYPE html>
<html>
<head>
    <title>Account Information</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>
<?php 
    echo"
    <main>
        <h1>Account Information</h1><br>
        
        <label>Name: ".$name." </label>
        <span></span><br>

        <label>Email Address:  ".$email."</label>
        <span><?php echo htmlspecialchars($email); ?></span><br>

        <label>Phone Number:  ".$phone."</label>
        <span></span><br> 

        <label>State of Residence: ".$state."</label>
        <span></span><br>
      
    </main>" ?>
<body>
</body>
</html>