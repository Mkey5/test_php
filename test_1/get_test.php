<!DOCTYPE html>

<head>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
  <title>Get</title>
  
</head>

<body id="">
  
  <section>
      <form  method="get" accept-charset="utf-8">
        <section>
            <input type="text" name="name" value="" id="name" placeholder="Name"/>
        </section>
        <section>
            <input type="text" name="email" value="" id="email" placeholder="@"/>
        </section>
        <p><input type="submit" name="submit" value="submit"/></p>
      </form>
  </section>
  
  <section>
      <?php 
            /* $_GET is global array too  , the url is limited to 255 symbols , so if the values are several and  
             * they are gonna be more than 255 symbols , use $_POST.
             * $_GET is not secured so it is used for direct links , bookmarks and so on, but not for 
             * secure stuff like passwords . . .
             * */         
            if(isset($_GET['submit'])){
                echo "This is my name: " . $_GET["name"]." and this is my password: " . $_GET["email"] . "\n";
            }
            
        
       ?>
  </section>
  
</body>
</html>