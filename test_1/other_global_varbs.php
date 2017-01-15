<form>
    <label for="first_name"></label>
    <input type="text" name="first_name" value="" id="first_name"/>
    <input type="submit"  value="submit" />
</form>

<?php 
    
    if(isset($_GET['first_name'])){
        $name = $_GET['first_name'];
        echo "Hello, " . $name . " !";
    }

 ?>