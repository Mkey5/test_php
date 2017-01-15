<!DOCTYPE html>
<head>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
  <title>Post</title>
  
</head>
<body id="">
  <form method="post" accept-charset="utf-8">
    <section>
        <input name="name" type="text" placeholder="Name" />
    </section>
     <section>
        <input name="password" type="password" placeholder="Enter Password" />
    </section>
  
    <p><input type="submit" name="submit" value="submit"/></p>
  </form>
  
  <p>
      <?php 
            
            /* $_POST is a global array , it is used for secure information like passwords . . . */
            
            if(isset($_POST["submit"])){
                echo "This is my name: " . $_POST["name"]." and this is my password: " . $_POST["password"] . "\n";
                      
                      
                var_dump($_SERVER);     // returns all the $_SERVER array values           
            }
      
       ?>
  </p>
  
  
</body>
</html>