<?php session_start();

if (empty($_SESSION['username'])) {
  $username = "Voyageur";
} else $username = $_SESSION['username'];

?>


<?php $incmap=""; $incprofil=""; $inctitle = " - Législation"; include "includes/header.php";  ?>



  <body class="legislation">
                        <!-- ---------------------------------------------------- -->
    <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
      <a href="index-suite.php"  id="showLeft"><h5>SILVA<span class="glyphicon"></span></h5></a>
      <div id="accordian">
          <ul>
              <li>
                  <h3 class="belgique" data-target="#carousel-example-generic" data-slide-to="0">Belgique</h3>
              </li>
              <li>
                  <h3 class="france" data-target="#carousel-example-generic" data-slide-to="1">France</h3>
              </li>
              <li>
                  <h3 class="suisse" data-target="#carousel-example-generic" data-slide-to="2">Suisse</h3>
              </li>
              <li>
                  <h3 class="norvege" data-target="#carousel-example-generic" data-slide-to="3">Norvège</h3>
              </li>
              <li>
                  <h3 class="hollande" data-target="#carousel-example-generic" data-slide-to="3">Pays-Bas</h3>
              </li>
              <li>
                  <h3 class="royaume" data-target="#carousel-example-generic" data-slide-to="3">Royaume-Uni</h3>
              </li>
              <li>
                  <h3 class="allemagne" data-target="#carousel-example-generic" data-slide-to="3">Allemagne</h3>
              </li>
          </ul>
      </div>
    </nav>
                        <!-- ---------------------------------------------------- -->
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
              <li><a href="places.php">Lieux</a></li>
              <li class="active"><a href="legislation.php">Législation</a></li>
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
                        <!-- ---------------------------------------------------- -->
    <div class="global">


        <div class="container belgique-content show">
            <div class="img"><h4><span>1</span><br>La Belgique</h4>
            </div>
            <div class="row">
              <div class="col-md-12 article">
                <p class="col-lg-10  col-md-12">
                  En Belgique, il est formellement interdit de planter sa tente en pleine nature. Tu risques donc une amende salée.<br>
                  Mais il y a toujours moyen de contourner la chose en contactant le garde forestier ou le propriétaire du terrain sur lequel tu te trouves pour obtenir son approbation.<br><br>
                  Certains parcs naturels acceptent le camping sauvage.<br>
                  L’agence flamande « Agentschap voor Natuur en Bos » se charge d’aménager ces lieux où sont disposées des <b class="subtitle">bornes autorisant le camping sauvage</b>. 
                  Le campeur peut donc y rester au maximum 48 heures et y installer, dans un rayon de 10 mètres, 3 tentes au maximum.
                </p>  
              </div>
            </div>
        </div>
        <div class="container france-content hide">
            <div class="img"><h4><span>1</span><br>La France</h4>
            </div>
            <div class="row">
                <div class="col-md-12 article">
                  <p class="col-lg-10  col-md-12">
                    Tu ne peux pas camper dans les forêts, sur les routes publiques et dans les sites et parcs classés sauf avec autorisation du garde forestier ou du propriétaire du terrain.<br><br>
                    Concernant les différents parcs nationaux de France, renseigne-toi auprès de l'urbanisme, des autorités municipales de la zone souhaitée ou auprès des guides du campeur. Car chaque zone possède ses propres lois sur le camping. La mairie est tenue de signaler l'interdiction par des affiches aux endroits prévus.<br><br>
                    Par exemple, dans le <b class="subtitle">parc national des Pyrénées</b>, le bivouac réglementé est autorisé à plus d’une heure de marche des limites du parc ou d’un accès routier, entre 19h et 9h.<br>
                  </p>  
                </div>
              </div>
        </div>
        <div class="container suisse-content hide">
            <div class="img"><h4><span>1</span><br>La Suisse</h4>
            </div>
            <div class="row">
                <div class="col-md-12 article">
                  <p class="col-lg-10  col-md-12">En Suisse, la législation à propos du camping sauvage <b class="subtitle">diffère d’un canton et d’une commune</b> à l’autre. 
                    En revanche, il est strictement interdit de camper dans les districts francs fédéraux, y compris dans un grand nombre de zones protégées.
                    Par exemple, il est interdit de camper sur tout le territoire du canton d’Obwald.
                  </p>  
                </div>
            </div>
        </div>
        <div class="container norvege-content hide">
            <div class="img"><h4><span>1</span><br>La Norvège</h4>
            </div>
            <div class="row">
                <div class="col-md-12 article">
                  <p class="col-lg-10  col-md-12">
                    En Norvège, il n’y a pas de soucis à se faire. Il existe ce que l’on appelle <b class="subtitle">« l’allemannsretten »</b>, le droit de tout un chacun, un droit qui autorise <b class="subtitle">l’accès pour tous à la nature</b>. Il ne faut cependant pas se trouver sur un terrain clôturé à moins de 150m de l’habitation la plus proche et il faut respecter l’environnement. Un grand nombre de Norvégiens pratique dès leur plus jeune âge cette pratique.<br><br>
                    Les montagnes de <b class="subtitle">Jotunhieimen</b> et les <b class="subtitle">îles Lofoten</b> sont deux zones populaires pour les campeurs les plus aventureux.<br>
                    La législation en <b class="subtitle">Finlande</b> et en <b class="subtitle">Suède</b> est pratiquement similaire.
                  </p>  
                </div>
            </div>
        </div>
        <div class="container hollande-content hide">
            <div class="img"><h4><span>1</span><br>Les Pays-Bas</h4>
            </div>
            <div class="row">
                <div class="col-md-12 article">
                  <p class="col-lg-10  col-md-12">Tu peux camper dans les campings sauvages autorisés. Les "vrij kamperen",
                  ces lieux sont agréés par l'Office national des forêts et tu y trouveras un équipement minimum.
                  </p>  
                </div>
            </div>
        </div>
        <div class="container royaume-content hide">
            <div class="img"><h4><span>1</span><br>Le Royaume-Uni</h4>
            </div>
            <div class="row">
                <div class="col-md-12 article">
                  <p class="col-lg-10  col-md-12">En <b class="subtitle">Angleterre</b> et au <b class="subtitle">Pays de Galles</b>, le Countryside and Rights of Way Act du 30 novembre 2000 instaure un cadre général pour le droit d’accès aux zones sauvages, souhaité vivement par les randonneurs.<br>Ce droit est limité à certaines zones, contrairement à l’allemansrätt qui, lui, s’applique en l’absence de toute prescription particulière, autorisant chacun à profiter d’un accès libre à la nature.<br><br>
                  En <b class="subtitle">Écosse</b>, le Land Reform Act de 2003 reprend la loi précédente et consacre formellement un droit qui n’était jusqu’alors que coutumier.
                  </p>  
                </div>
            </div>
        </div>
        <div class="container allemagne-content hide">
            <div class="img"><h4><span>1</span><br>L'Allemagne</h4>
            </div>
            <div class="row">
                <div class="col-md-12 article">
                  <p class="col-lg-10  col-md-12">
                    Le camping sauvage est généralement interdit en Allemagne, mais il y a des exceptions.<br><br>
                    Depuis 2009, il est légal de camper dans <b class="subtitle">la forêt du Palatinat</b>, qui est loin des huttes et des sentiers libres d’accès pour campeurs. Le Parc Naturel de la forêt du Palatinat offre aventure, faune et nature.
                    Vous pouvez apprécier la vue de falaises de grès fascinantes, d'immenses forêts et de hauts sommets. 
                    Le camping sauvage y est autorisé, mais uniquement aux emplacements prévus, et il faut réserver à l'avance. Ces emplacements sont situés hors des sentiers et ne sont accessibles qu’à pied ou en vélo.<br><br>
                    Dans l'un des plus beaux endroits de l'Allemagne, <b class="subtitle">le parc national de la Suisse saxonne</b> (située en partie en République tchèque), offre une forme particulièrement inhabituelle de la liberté: la boof. C'est une ancienne prépondérance de la tradition des grimpeurs saxons qui sont restés librement dans certaines parties du parc national. C’est donc là qu’il est toujours possible de rester et de dormir dans la nature. 
                  </p>  
                </div>
            </div>
        </div>

        

                        <!-- ---------------------------------------------------- -->


<?php $incmap=""; $incprofil="";
  $incfooter = '<footer>
  <p>Conçu et développé par <a href="http://julienpiette.be">Julien Piette</a><span></span><a href="credits.php">Crédits</a></p>
  <div class="pull-right">
    <a class="icon-footer" href="mailto:julienpiette.web@gmail.com">Mail</a>
    <a class="icon-footer" href="https://twitter.com/webulien">Twitter</a>
  </div>
</footer>
</div> <!-- END GLOBAL -->
</div><!-- END CONTENT-FLOAT -->';

 include "includes/footer.php";  ?>