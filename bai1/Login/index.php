<html>
    <head>
    <style type="text/css">
    .login {
          height:180px; width:230px;
          margin:0;
          padding:10px;
          border:1px #CCC solid;
    }
    .login input {
          padding:5px; margin:5px
    }
    </style>  
       <title>Login</title>
    </head>
    <body>
    <h2> LOGIN </h2>
    <form method="post">
        <div class="login">
        <br>
        <input type="text" name="username" size="20" placeholder="username">
        <br>
        <br>
        <input type="password" name="password"size="20" placeholder="password">
        <br><br>
        <input type="submit" value="submit" >
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"]; 
        $password = $_POST["password"];
            
        if ($username === "admin" && $password === "admin") {	 
                echo "<h2>Welcome <span style='color:red'>" .$username. "</span> to website</h2>";
        } else{
                echo "<h2><span style='color:red'>Login Error</span></h2>";
        }
        }
    ?>

    </body>
</html>
