<!DOCTYPE html>
<html>
<head>
    <title>Account Sign Up</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>

<body>
    <main>
    <h1>Account Sign Up</h1>
    <form action="display_results.php" method="post" onsubmit="return validate()" name="form">

    <fieldset> 
    <legend>Account Information</legend>
        
        
        <label>E-Mail:</label>
        <input type="text" name="email" value=""
        placeholder="user@example.com" class="textbox">
        <br>

        <label>Name: </label>
        <input type="text" name="name" value=""
        placeholder="Enter Name"
         class="textbox">
        <br>

        <label>Phone Number:</label>
        <input type="text" name="phone" value=""
        placeholder="555-555-5555" class="textbox">
    </fieldset>

    <fieldset>
    <legend>Settings</legend>

        
    </fieldset>

    <input type="submit" value="Submit">
    <br>

    </form>
    </main>
</body>
</html>