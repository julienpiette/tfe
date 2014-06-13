<?php session_start();
  
if (empty($_SESSION['username'])) {
  $username = "Voyageur";
} else $username = $_SESSION['username'];


/*  if(isset($_POST['submit'])) {

$username = $_SESSION['username'];

$name = $_FILES['photo']['name'];
$temp = $_FILES['photo']['tmp_name'];
$type = $_FILES['photo']['type'];
$size = $_FILES['photo']['size'];


          include "db-connexion.php";

            
          if (empty($query)) {
            if (($type == "image/jpeg") || ($type == "image/jpg") || ($type == "image/png") || ($type == "image/gif")) {
              if ($size <= 10000000000) {


                  mkdir('users/images-map/'.$username);
                  $uploaddir = 'users/images-map/'.$username.'/';
                  $file = $uploaddir . basename($name); 
                  move_uploaded_file($temp, $file);
                  echo "<img src='users/images-map/$username/$name'>";

                  die('inscription terminée');

                } else echo "la taille de $name est trop lourde <br> la taille est $size et doit etre moin que 100kb";
              } else  echo "Ce format $type n'est pas autorisé<br>";
            } else echo "Ton nom d'utilisateur est deja pris !"; 


}*/

?>



<?php
$inctitle = " - Places";
$incprofil = "";
$incmap = "<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=true&libraries=places'></script>
           <script type='text/javascript' src='assets/js/stylemap.js'></script><!--MAP-GOOGLE-->";
      
      include "includes/header.php";
?>

<body class="places" onload="initialize()">

    <nav class="cbp-spmenu cbp-spmenu-vertical" id="cbp-spmenu-s1">
      <a href="index-suite.php"  id="showLeft"><h5>SILVA<span class="glyphicon"></span></h5></a>
      <div id="accordian">
        <form method="POST" action="app-includes/save-places.php" id="mapForm">
          <ul>
              <li class="fieldContainer">
                <h3>Titre</h3>
                <input type="text" name="titre" class="normal-input titre"/>
              </li>
              <li class="fieldContainer">
                <h3>Description</h3>
                <textarea name="description"  class="normal-input content"></textarea>

                <div id="upload-file-container">
                  <input type="file" name="photo" id="imageupload">
                </div>

              </li>
              <li class="fieldContainerloc">
                <h3>Localisation</h3>
                <p class="drag-info">Place ton marqueur en double cliquant sur la map</p>
              </li >
              <li class="fieldContainersub">
              <input type='submit' value='Sauvegarder' name="submit" class="save-info"/>
              </li>
          </ul>
        </form>
      </div>
    </nav>

    <div id="content-float">
        <header class="navigation">
          <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <p>Menu</p>
                </button>
              </div>
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="index-suite.php">Préparatifs</a></li>
                  <li class="active"><a href="places.php">Lieux</a></li>
                  <li><a href="legislation.php">Législation</a></li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo "Bienvenue ".$username; ?></a>
                    <ul class="dropdown-menu">
                      <div class="arrow"></div>
                      <li><a href="profil.php" class="arrow-hover">Profil</a></li>
                      <li><a href="includes/logout.php">Deconnexion</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </header>
    </div><!-- END CONTENT-FLOAT -->
              <!-- ---------------------------------------------------- -->
    <input id="pac-input" class="controls" type="text" placeholder="Enter a location"/>
    <div id="map-canvas">
    </div>

<script type="text/javascript">


  $('#mapForm').on("submit",(function(e){
    e.preventDefault();

// titre = $('.titre').val(),
        // content = $('.content').val(),

    var formData = new FormData(this);
    formData.append("lat", markerpos.position.k);
    formData.append("lng", markerpos.position.A); 
    // var lat = markerpos.position.k;
    // var lng = markerpos.position.A;

    $.ajax({
      type:"POST",
      url:"app-includes/save-places.php",
      // data:"titre="+titre+"&content="+content+"&lat="+lat+"&lng="+lng,
      data: formData,
      contentType:false,
      cache:false,
      processData: false,
      success:function(data){
        location.reload();
        // alert ('Votre article à bien été enregistré, veuillez actualiser la page');
        // console.log(lat);
        // console.log(lng);
        // console.log('lol ok maggle');

        console.log(data);
      }
    });
  }));


</script>

<?php $incmap=""; $incprofil="";
  $incfooter = "";

 include "includes/footer.php";  ?>