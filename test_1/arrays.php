<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Data</title>
</head>
<body>

<form id="form" name="form" method="post">
    <section>
        <input type="text" name="name" id="name" placeholder="Name..."/>
    </section>
    <section>
        <input type="text" name="age" id="age" placeholder="Age..."/>
    </section>
    <section>
        <input type="radio" name="gender" id="male" value="male" checked/>
        <label for="male">Male</label>
    </section>
    <section>
        <input type="radio" name="gender" id="female" value="female"/>
        <label for="female">Female</label>
    </section>
    <section>
        <input type="password" name="pass" id="pass" value="" placeholder="Password"/>
    </section>
    <section>
        <input type="submit" name="submit" id="submit" value="Submit"/>
    </section>
    
</form>
    <section>
        <?php
            if(isset($_POST["submit"])) {
                $name = htmlentities($_POST["name"]);
                $age = htmlentities($_POST["age"]);
                $gender = htmlentities($_POST["gender"]);
                $pass = htmlentities($_POST["pass"]);
                echo "My name is $name. I am $age years old. I am $gender. This is my pass: $pass" ;
            }
        ?>
    </section>

</body>
</html>