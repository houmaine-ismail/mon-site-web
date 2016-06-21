<?php include('db/database.php');?>
<?php include('header.php'); ?>
<body>
<div class="container">
   <!-- <div class="slides">
        <img src="img/img1.jpg"/>
        <img src="img/img2.jpg"/>
        <img src="img/img3.jpg"/>
    </div>-->
    
  <?php   
      $dsn = "mysql:dbname=" .DB_NAME . ";host=" .DB_HOST . ";charset=utf8;";
      $bdd = new PDO($dsn, DB_USER, DB_PASS);

      //$bdd-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      //$bdd-> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
      
      $query = $bdd->query('SELECT * FROM articles ORDER BY date_ajou DESC ');
      while ($data = $query->fetch()) :
      
  ?>
<div id="mm">
  <div class="row">  
      <div class="col-md-2"><b>Titre :</b></div><div class="col-md-4"><?php echo $data[1]; ?></div><div class="ddd"><?php echo $data[4];?></div><br/><br/>
      <div class="col-md-2"><b>Contenu :</b></div><div class="col-md-6"><?php echo $data[3]; ?></div><br/><br/>
      <div class="dddd">
      <div class="col-md-6"><img  class = "nor"  alt = "image Responsive" id= "iimg" src="upload/<?php echo $data[2];?>"/></div>
      <div class="col-md-6"><img  class = "zoom"  alt = "image Responsive" id= "iimg" src="upload/<?php echo $data[2];?>"/></div>
      </div><br/><br/>
  </div>
</div>
</body>
  <?php endwhile?>
</html>