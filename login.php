<?php session_start();
$erreur = "";

if(isset($_POST['submit']))
{
$username = htmlspecialchars(trim($_POST['username']));
$password = htmlspecialchars(trim($_POST['password']));

  if($username&&$password)
  {
    $password=sha1($password);
    include "includes/db-connexion.php";

    // RECUPERATION ET COMPARAISON

            $query = $db->query("SELECT * FROM users WHERE username='$username' AND password='$password'");
            $query = $query->fetchAll();

            if (!empty($query)) {
              $_SESSION['username']=$username;
              $_SESSION['password']=$password;
              header('Location:index-suite.php');

            } else $erreur = "* login ou mot de passe incorrecte"; 

            /*    //METHOD 2 - ELSE DON't WORK
                  $a=0;
                    foreach ($query as $row){
                      $a++;
                      if($a==1){
                        $_SESSION['username']=$username;
                        $_SESSION['password']=$password;
                        echo"Bienvenue $username";
                      } else echo"login ou mot de passe incorrecte";
                        }*/
                        
                        /*    //METHOD 3 
                    $rows = $db->rowCount();
                    //$rows = mysql_num_rows($query);
                    if ($rows==1) {
                      
                      echo "Bienvenue";

                    }else echo"Nom d'utilisateur ou mot de passe incorrect";
                            */

  }else $erreur = "* Veuillez saisir tout les champs";
}

?>


<?php 
$incmap=""; 
$incprofil=""; 
$inctitle = " - Login";

      include "includes/header.php";  
?>

<body class="index">
    
  <div class="logo">
  </div>

  <div id="accordian">
      <form method="POST" action="login.php">
            <ul>
                <li>
                  <h1>Se connecter</h1>
                </li>
                <li>
                  <p class="error"><?php echo $erreur ?></p>
                </li>
                <li>
                  <input type="text" placeholder="Nom d'utilisateur" name="username" class="normal-input"/>
                </li>
                <li>
                  <input type="password" placeholder="Mot de passe" name="password" class="normal-input"/>
                </li>
                <li>
                  <a href="register.php" class="register">Pas de compte? Inscris-toi</a>
                  <input type='submit' value='Connexion' name="submit" class="save-info"/>
                </li>
                <li>
                  <a href="index-suite.php"   class="register">Continue sans te connecter -></a>
                </li>
            </ul>
      </form>
  </div>
    
    
<?php $incmap=""; $incprofil=""; $incfooter = ""; include "includes/footer.php";  ?>