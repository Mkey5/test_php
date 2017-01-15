 <!-- If test  -->

<!DOCTYPE html>
<html>
<head>
    <meta charset"utf-8" />    
</head>

<body>
    <?php 
        $town = "Sofia";
        $distance=600;
    ?>
    
        <div id="info">
      <?php if (($town == "Sofia") && ($distance > 400)) { ?>
            <p> I will travel to <?=$town ?></p> <!--  <?=$town ?> is the same as <?php echo $town ?>  -->
            <p> I'm going tomorrow. </p>
      <?php 
        }elseif ($distance > 500){ 
      ?>
        <p>It is too far. I can't go!</p>
        <?php }else{  ?>
        <p>I will not travel to <?= $town ?></p>
      <?php }  ?>
    </div>
    
      <!-- The second part is with the simpler syntax  -->
    
    <div id="info_2">
      <?php if (($town == "Sofia") && ($distance > 400)) : ?> <!-- ":" as "{}" -->
            <p> I will travel to <?=$town ?></p> <!--  <?=$town ?> is the same as <?php echo $town ?>  -->
            <p> I'm going tomorrow. </p>
      <?php 
        elseif ($distance > 500): 
      ?>
        <p>It is too far. I can't go!</p>
        <?php else:  ?>
        <p>I will not travel to <?= $town ?></p>
    <?php endif  ?>
    </div>
</html>
</body>