<?php session_start();
$erreur = "";
if(isset($_POST['submit'])) {

  $username = htmlspecialchars(trim($_POST['username']));
  $password = htmlspecialchars(trim($_POST['password']));
  $repeatpassword = htmlspecialchars(trim($_POST['repeatpassword']));
  $name = $_FILES['myimg']['name'];
  $temp = $_FILES['myimg']['tmp_name'];
  $type = $_FILES['myimg']['type'];
  $size = $_FILES['myimg']['size'];

    if ($username&&$password&&$repeatpassword) {
      if ($password==$repeatpassword) {
        if (strlen($password)>4) {

          include "includes/db-connexion.php";
          $query = $db->query("SELECT * FROM users WHERE username='$username'");
          $query = $query->fetchAll();
            
          if (empty($query)) {
            if (($type == "image/jpeg") || ($type == "image/jpg") || ($type == "image/png") || ($type == "image/gif")) {
              if ($size <= 1000000) {
                mkdir('users/images-profil/'.$username);
                $uploaddir = 'users/images-profil/'.$username.'/';
                $file = $uploaddir . basename($name); 
                move_uploaded_file($temp, $file);

                $db->query("INSERT INTO users(username,password,repeatpassword)
                            VALUES ('$username','".SHA1($password)."','".SHA1($repeatpassword)."')");

                  // echo "<img src='users/images-profil/$username/$name'>";

                  // die('inscription terminée');
                header('Location:login.php');

                } else  $erreur ="* la taille de $name est trop lourde <br> la taille est $size et doit etre moin que 100kb";
              } else   $erreur ="* Ce format $type n'est pas autorisé<br>";
            } else  $erreur ="* Ton nom d'utilisateur est deja pris !"; 
        } else  $erreur ="* Le password est trop petit";
      } else  $erreur ="* les passwords ne sont pas identiques";
    } else  $erreur ="* Veuillez saisir tous les champs";
}

?>

<?php 
$incmap=""; 
$incprofil=""; 
$inctitle = " - register";
  include "includes/header.php";  
?>

<body class="index">
  <div class="logo">
  </div>
  <div id="accordian">
      <form method="POST" action="register.php" enctype="multipart/form-data">
            <ul>
                <li>
                  <h1>Inscription</h1>
                </li>
                <li>
                  <p class="error"><?php echo $erreur ?></p>
                </li>
                <li>
                  <input type="text" placeholder="Nom d'utilisateur" name="username" class="normal-input"/>
                </li>
                <li>
                  <div id="upload-file-container">
                    <input type="file" name="myimg">
                  </div>
                </li>
                <li>
                  <input type="password" placeholder="Mot de passe" name="password" class="normal-input"/>
                </li>
                <li>
                  <input type="password" placeholder="Répeter le mot de passe" name="repeatpassword" class="normal-input"/>
                </li>
                <li>
                  <a href="login.php" class="register">Déjà un compte? Connecte-toi</a>
                  <input type='submit' value="S'inscrire" name="submit" class="save-info"/>
                </li>
            </ul>
        </form>
  </div>
<?php $incmap=""; $incprofil="";$incfooter = ""; include "includes/footer.php";  ?>
