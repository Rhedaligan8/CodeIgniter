<!DOCTYPE html> 
<html lang="en"> 
    <head>
     <meta charset="UTF-8"> 
     <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
         <title>Log-in</title> 
    </head> 
<body> 
    <div> 
        <form action=""> 
    <div> 
        <label for="email">Email Address:</label> 
            <input type="email" id="email" name="email" required placeholder="Enter username"> </div>
    <div> 
        <label for="password">Password:</label> 
            <input type="password" id="password" name="password" required placeholder="Enter password"> 
    </div> 
    
<div> 
    <button type="submit name=login" id="login">Login</button> 
</div> 
        </form> 
</div> 
     <?php 
     if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    
        $email ="rhedaligan.02@gmail.com";
        $password = "admin123";

        $username = $_POST['username'];
        $pass = $_POST['password'];

        if($username === $email || $password === $pass){
            echo "The Login is Successful". $username;
        }
        else {
            echo "Invalid username or password";
        }

     }

     ?> 
</body>
</html>