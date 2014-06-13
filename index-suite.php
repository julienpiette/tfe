<?php session_start();

if (empty($_SESSION['username'])) {
  $username = "Voyageur";
  $linkConnexion = "Connexion";
} else {
  $username = $_SESSION['username']; 
  $linkConnexion = "Déconnexion";
  };

?>
<?php $incmap=""; $incprofil=""; $inctitle = " - Index"; 
 include "includes/header.php";  ?>

  <body class="index-suite">
              <!-- ---------------------------------------------------- -->
    <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
      <a  href="index-suite.php" class="mob" id="showLeft"><h5>SILVA<span class="glyphicon"></span></h5></a>
      <div id="accordian">
          <ul>
              <li>
                  <h3 data-target="#carousel-example-generic">Dormir</h3>
                  <ul>
                      <li><a href="#" class="tentes">Tentes</a></li>
                      <li><a href="#" class="hamac">Hamac</a></li>
                      <li><a href="#" class="bivouac">Bivouac</a></li>
                      <li><a href="#" class="matelas">Matelas</a></li>
                      <li><a href="#" class="couchage">Sac de couchage</a></li>
                  </ul>
              </li>
          
              <li>
                  <h3 data-target="#carousel-example-generic">Transporter</h3>
                  <ul>
                      <li><a href="#" class="sacados">sacs à dos</a></li>
                      <li><a href="#" class="sacados-accessoire">D'autres accessoires</a></li>
                  </ul>
              </li>
              <li>
                  <h3 data-target="#carousel-example-generic">Se vêtir</h3>
                  <ul>
                      <li><a href="#" class="vetements">Vêtements</a></li>
                      <li><a href="#" class="chaussures">Chaussures</a></li>
                      <li><a href="#" class="chaussettes">Chaussettes</a></li>
                  </ul>
              </li>
              <li>
                  <h3 data-target="#carousel-example-generic">Se déplacer</h3>
                  <ul>
                      <li><a href="#" class="orientation">Orientation</a></li>
                      <li><a href="#" class="signal">Signaler sa présence</a></li>
                  </ul>
              </li>
              <li>
                  <h3 data-target="#carousel-example-generic">Cuisiner</h3>
                  <ul>
                      <li><a href="#" class="vaisselle">La vaisselle</a></li>
                      <li><a href="#" class="fours">Les fours</a></li>
                      <li><a href="#" class="rechauds">Les réchauds</a></li>
                  </ul>
              </li>
              <li>
                  <h3 data-target="#carousel-example-generic">S'alimenter</h3>
                  <ul>
                      <li><a href="#" class="traieaux">Traitement des eaux</a></li>
                      <li><a href="#" class="traneaux">Transporter de l'eau</a></li>
                  </ul>
              </li>
              <li>
                  <h3 data-target="#carousel-example-generic">Outils</h3>
                  <ul>
                      <li><a href="#" class="kitsec">Kit de premier secours</a></li>
                      <li><a href="#" class="kitsur">Kit de survie</a></li>
                      <li><a href="#" class="cuts">Couteaux</a></li>
                      <li><a href="#" class="lights">lampes</a></li>
                  </ul>
              </li>
          </ul>
      </div>
    </nav>
              <!-- ---------------------------------------------------- -->


  <!-- ----------------------------------------------------------------------------- -->
  <div id="content-float">


              <!-- ---------------------------------------------------- -->
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
              <li class="active"><a href="index-suite.php">Préparatifs</a></li>
              <li><a href="places.php">Lieux</a></li>
              <li><a href="legislation.php">Législation</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo "Bienvenue ".$username; ?></a>
                <ul class="dropdown-menu">
                  <div class="arrow"></div>
                  <li><a href="profil.php" class="arrow-hover">Profil</a></li>
                  <li><a href="includes/logout.php"><?php echo $linkConnexion; ?></a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
              <!-- ---------------------------------------------------- -->

              <!-- ---------------------------------------------------- -->

    <div class="global">
          
                        <!-- ---------------------------------------------------- -->
          <div class="container tentes-content show">
            <div class="img"><h4><span>1</span><br>La Tente igloo</h4></div>
            <div class="row">
              <div class="col-md-12 article">
                <p class="col-lg-7  col-md-12">Si tu es paresseux et que tout doit aller vite je te conseille fortement celle-ci. Elle est autoportante et polyvalente, tu pourras la transporter sans trop de difficuté partout où tu iras même là où les conditions météorologiques ne sont parfois pas des plus cléméntes.<br>
                De plus, sa forme hémispherique lui procure une grande résistance aux vents et pas besoin d'être un expert pour pouvoir la monter. 
                </p>
                <table class="example-table col-lg-5">
                  <tbody>
                    <tr>
                      <th>Avantages</th>
                      <th>Inconvénients</th>
                    </tr>
                    <tr>
                      <td>Montage rapide</td>
                      <td>Dimensions limitée</td>
                    </tr>
                    <tr>
                      <td>Autoportante</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Résistante au vents</td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>  
              </div>
            </div>
            <div class="img"><h4><span>2</span><br>La Tente Tunnel</h4></div>
            <div class="row">
              <div class="col-md-12 article">
                <p class="col-lg-7  col-md-12">Forme de demi-cylindre, spéciale par sa pente prononcée de l'avant vers l'arrière, malheureusement elle n'est pas très légère et donc pas autoportante.
                </p>
                <table class="example-table col-lg-5">
                  <tbody>
                    <tr>
                      <th>Avantages</th>
                      <th>Inconvénients</th>
                    </tr>
                    <tr>
                      <td>Grande dimensions</td>
                      <td>Pas autoportante</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="img"><h4><span>3</span><br>La Tente canadienne</h4></div>
            <div class="row">
              <div class="col-md-12 article">
                <p class="col-lg-7  col-md-12">Tu n'as pas de l'or en barre et que tu n'es pas très musclé, 
                  et que le terrain est comme un mouchoir de poche, achète" la canadienne" : 
                  légère et de forme triangulaire, moins chère et moins spacieuse, elle n'est pas autoportante</p>
                <table class="example-table col-lg-5">
                  <tbody>
                    <tr>
                      <th>Avantages</th>
                      <th>Inconvénients</th>
                    </tr>
                    <tr>
                      <td>Peu onéreuse</td>
                      <td>Pas autoportante</td>
                    </tr>
                    <tr>
                      <td>Robuste</td>
                      <td>Pas adaptée aux<br> grands vents</td>
                    </tr>
                    <tr>
                      <td>Spacieuse</td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="img"><h4><span>4</span><br>La Tente familiale</h4></div>
            <div class="row">
              <div class="col-md-12 article">
                <p class="col-lg-7  col-md-12">Tu as des enfants et une femme? la "familiale" très spacieuse et dispose donc d'un volume de vie assez agréable.<br>
                Par contre il te faudras un autre moyen que ton dos pour la transporter car elle est très lourde et difficile à porter.
                Son montage reste assez simple mais pas rapide, elle a de grands pans quasi-verticaux et un toit légèrement en pente.</p>
                <table class="example-table col-lg-5">
                  <tbody>
                    <tr>
                      <th>Avantages</th>
                      <th>Inconvénients</th>
                    </tr>
                    <tr>
                      <td>Spacieuse</td>
                      <td>Pas autoportante</td>
                    </tr>
                    <tr>
                      <td>Montage simple</td>
                      <td>Montage lent</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>Prix souvent élevé</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
        </div>
                      <!-- ---------------------------------------------------- -->
        <div class="container hamac-content hide">
              <div class="img"><h4><span>1</span><br>Le hamac</h4>
              </div>
              <div class="row">
                <div class="col-md-12 article">
                  <p class="col-lg-7  col-md-12">Tu veux être le moins possible en contact avec les moustiques, les serpents et rampants?<br>
                    Choisis ce hamac! Il est fait d'un tissu solide muni de moustiquaires sur les côtés et d'un toit imperméable (tarp).<br>
                    Si tu dois dormir dans  la jungle ou la forêt, il convient parfaitement. Il te maintient au-dessus du sol, ce qui est indispensable dans les forêts humides...
                  </p>
                  <table class="example-table col-lg-5">
                    <tbody>
                      <tr>
                        <th>Avantages</th>
                        <th>Inconvénients</th>
                      </tr>
                      <tr>
                        <td>Confortable</td>
                        <td>Il faut s'y habitué et trouver sa position de confort</td>
                      </tr>
                      <tr>
                        <td>Peu onéreux</td>
                        <td>Besoin de deux support verticaux</td>
                      </tr>
                      <tr>
                        <td>Sécurité</td>
                        <td>1 place</td>
                      </tr>
                      <tr>
                        <td>Isolé de l'humidité du sol</td>
                        <td></td>
                      </tr>
                    </tbody>
                  </table>  
                </div>
              </div>
          </div>
                        <!-- ---------------------------------------------------- -->
          <div class="container caca bivouac-content hide">
            <div class="img"><h4><span>1</span><br>Le bivouac</h4>
            </div>
            <div class="row">
              <div class="col-md-12 article">
                <p class="col-lg-7  col-md-12">La nuit tombe et tu ne sais pas où tu vas pouvoir passer la nuit?<br>
                 On te conseille ce sac imperméable léger, muni d'une capuche, dans lequel tu te glisses avec ton sac de couchage. Il est également utile comme abris de secours face aux intempéries.
                </p>
                <table class="example-table col-lg-5">
                  <tbody>
                    <tr>
                      <th>Avantages</th>
                      <th>Inconvénients</th>
                    </tr>
                    <tr>
                      <td>Rapide</td>
                      <td>Exposition aux dangers</td>
                    </tr>
                    <tr>
                      <td>Peu onéreux</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Léger</td>
                      <td></td>
                    </tr>s
                  </tbody>
                </table>  
              </div>
            </div>
          </div>
                        <!-- ---------------------------------------------------- -->
          <div class="container matelas-content hide">
            <div class="img"><h4><span>1</span><br>Le matelas</h4>
            </div>
            <div class="row">
              <div class="col-md-12 article">
                <p class="col-lg-10 margin-left  col-md-12">Un <b class="subtitle">simple matelas</b> de type matelas de gymnastique. C’est-à-dire un fin mousse dense à alvéoles ouvertes retenues par une housse imperméable à l'air. Son prix démocratique n’enlève rien à son confort et il prend peu de place.
                Pour le transport, plus qu'à le rouler!<br><br>
                Par ailleurs, le <b class="subtitle">matelas moelleux</b> autogonflant est suffisant pour que tu sois isolé du sol, mais il est moins isolant que les matelas à alvéoles ouvertes.
                Si tu ne voyage pas à pied, un lit de camp ou un matelas ordinaire n'est pas mal non plus.
                </p>  
              </div>
            </div>
          </div>
                        <!-- ---------------------------------------------------- -->
          <div class="container couchage-content hide">
            <div class="img"><h4><span>1</span><br>Le sac de couchage</h4>
            </div>
            <div class="row">
              <div class="col-md-12 article">
                <p class="col-lg-10 margin-left  col-md-12">Si tu décides de t’acheter un sac, on te conseille de t’assurer que les températures "confort", "limites" ou "extrêmes" soient conformes aux normes européennes EN13537, signe de la garantie de qualité.<br>
                Un sac de couchage léger si tu n’es pas frileux ou un sac adapté à une température de 10 degrés inférieure à la température la + froide prévue si tu as besoin de plus de chaleur. <br><br>
                Quels forme, taille et matériaux choisir ?
                Le sac <b class="subtitle">"sarcophage"</b> est moins lourd et moins volumineux. Il épousera  la forme de ton corps, te tiendra plus chaud mais est plus étroit. (garnis de duvet d'oie)<br>
                le sac <b class="subtitle">"rectangulaire"</b> sera utilisé sur des sites aménagés. Ce sac moins chaud est plus large, plus lourd et plus spacieux. (synthétiques)
                </p>
              </div>
            </div>
          </div>
                        <!-- ---------------------------------------------------- -->
          <div class="container sacados-content hide">
            <div class="img"><h4><span>1</span><br>Sacs à dos à armature interne</h4></div>
            <div class="row">
              <div class="col-md-12 article">
                <p class="col-lg-7  col-md-12">Il possède des supports en métal et leurs ressorts sont à l'intérieur.<br>
                  Si tu fais de la randonnée en montagne et que les chemins sont très difficiles, celui-ci t'aidera à grader ton équilibre et s'adaptera mieux à la forme de ton corps grâce à son tissu souple.<br><br>
                  Par contre, tu dois le remplir par le haut... Bonne chance pour attraper tes chaussettes si elles se trouvent dans le fond du sac. Le vendeur te proposera sans doute le sac à dos à armature interne vu qu'il est assez contemporain.
                </p>
                <table class="example-table col-lg-5">
                  <tbody>
                    <tr>
                      <th>Avantages</th>
                      <th>Inconvénients</th>
                    </tr>
                    <tr>
                      <td>Plus stable</td>
                      <td>Accès difficile au contenu</td>
                    </tr>
                    <tr>
                      <td>Confortable</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Souple</td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>  
              </div>
            </div>
            <div class="img"><h4><span>2</span><br>Sacs à dos à armature externe</h4></div>
            <div class="row">
              <div class="col-md-12 article">
                <p class="col-lg-7  col-md-12">
                Les sacs à armature externe possèdent un cadre métallique auquel le sac est accroché d'un côté.
                L'air circule entre le dos et le sac, tu auras donc moins chaud l'été. 
                De plus, ce sac te permet plus de rangements vu qu'il possède des compartiments séparés.<br>
                Sa taille? En randonnée, on choisi un sac assez grand, même si tu n’as besoin que du nécessaire. 
                Pour les courts séjours, opte pour un sac de 30 ou 50 litres... Par contre, un de 75 litres pour une randonnée de 5 jours. Si tu voyages plusieurs semaines achète un plus sac encore plus grand.
                </p>
                <table class="example-table col-lg-5">
                  <tbody>
                    <tr>
                      <th>Avantages</th>
                      <th>Inconvénients</th>
                    </tr>
                    <tr>
                      <td>Excellente ventillation</td>
                      <td>Plus lourd</td>
                    </tr>
                    <tr>
                      <td>Accès facile au contenu</td>
                      <td>Moin stable</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="container sacados-accessoire-content hide">
            <div class="img"><h4><span>1</span><br>D'autres accessoires</h4></div>
            <div class="row">
              <div class="col-md-12 article">
                <p class="col-lg-10 margin-left  col-md-12">
                D'autres accessoires peuvent être appréciés, comme un <b class="subtitle">sac imperméable</b> intégré à un sac à dos, qui protège de la pluie.<br>
                Un <b class="subtitle">système d'hydratation</b> peut également être utile. C'est un compartiment spécial dans lequel une poche à eau peut être maintenue à la verticale.<br> 
                On y accède par une ouverture dans le sac qui permet de laisser passer une pipette.<br>
                Une <b class="subtitle">sangle ventrale</b> est nécessaire pour la randonnée puisque grâce à elle, le dos et les épaules sont soulagés du poids du sac qui se retrouve, <br> en bonne partie, porté sur les hanches.<br>
                Les <b class="subtitle">bretelles ergonomiques</b> te mettront plus à l'aise pour bouger et seront plus confortables pour les épaules très sollicitées.<br> Les sangles de poitrine maintiendront ces bretelles et effectuent un rappel de charge sur la poitrine.<br>
                N'oublie pas un <b class="subtitle">sac à dos de promenade</b> ou une <b class="subtitle">sacoche ventrale</b> pour les petites expéditions autour du lieu de campement, qui contiendra une veste,<br> un en-cas, de l'eau,.. Bref, les essentiels.<br>
                Attention, ton sac à dos doit être assez grand pour contenir ce qu'il faut, mais pas plus que nécessaire. Un sac de 30 à 50 litres pour les courtes distances, ou un de 75 litres pour les séjours de 5 nuits est plus que suffisant, et il ne devra pas dépasser le 1/3 de ton poids.<br>
                </p>
              </div>
            </div>
          </div>

                        <!-- ---------------------------------------------------- -->

          <div class="container vetements-content hide">
            <div class="img"><h4><span>1</span><br>Vêtements</h4>
            </div>
            <div class="row">
              <div class="col-md-12 article">
                <p class="col-lg-10 margin-left  col-md-12">Il existe un grand choix de vêtements pour les campeurs, ou randonneurs.
                Fais toujours passez le confort avant l’esthétique.
                <br><br>
                Le principale est de rester au sec, ta tenue doit donc être légère, solide et confortable. 
                Idéales, les superpositions de couches te réchauffent par temps froid et te préservent de la chaleur par temps chaud. 
                Porter trois couches est une solution à l’effet sauna que les vêtements de pluie génèrent après avoir transpiré.<br><br>
                <b class="subtitle">La première couche</b> de sous-vêtement est importante. C’est elle qui permettra l’évacuation de la transpiration. Porter deux couches au niveau du torse est essentiel s’il ne fait pas assez chaud, et si la température est vraiment basse, enfile des sous-vêtements sur tes jambes aussi.<br>
                <b class="subtitle">La seconde couche</b> est isolante. Elle permet de se tenir au chaud grâce à sa propre chaleur. Enfile donc un vêtement épais comme un pull en laine, en polyester ou en nylon pour emprisonner l’air et chasser l’humidité.<br>
                Enfin, <b class="subtitle">la dernière couche</b> est un coupe-vent, et une protection contre la pluie. Un vêtement de pluie en vinyle est absolument inutile car il te fera transpirer, mais les tissus en nylon et en polyester avec système d’aération sont mieux. Le meilleur étant un tissus avec membrane microporeuse.
                </p>
              </div>
            </div>
            <div class="img"><h4><span>2</span><br>Autres vêtements</h4>
            </div>
            <div class="row">
              <div class="col-md-12 article">
                <p class="col-lg-10 margin-left  col-md-12">Des <b class="subtitle">gants</b> en laine polaire ou soie, des <b class="subtitle">chemises</b> en coton (temps chaud et sec), un  pantalon en laine ou un <b class="subtitle">legging</b> en nylon (temps frais et humide), 
                un <b class="subtitle">pantalon en polycoton</b> (temps froid), une casquette en laine ou un <b class="subtitle">chapeau</b> à large bord.<br><br>
                Un <b class="subtitle">poncho</b> peut remplacer un vêtement de pluie, et un <b class="subtitle">bandana</b> en coton est utile dans beaucoup de cas.  
                </p>  
              </div>
            </div>
          </div>

                        <!-- ---------------------------------------------------- -->

          <div class="container chaussures-content hide">
            <div class="img"><h4><span>1</span><br>Chaussures randonnée</h4>
            </div>
            <div class="row">
              <div class="col-md-12 article">
                <p class="col-lg-10 margin-left col-md-12">L’achat de bonnes chaussures est indispensable. Elles doivent maintenir le pied, être imperméables et légères.
                <br><br>
                Sur les terrains accidentés, il te faut des <b class="subtitle">chaussures de randonnée</b> montantes légères et solides pour protéger ta cheville.<br>
                Ces chaussures de randonnée existent en différents modèles : légères, moyennes et lourdes. Choisis les chaussures légères par temps chaud, 
                elles sont souples et empêcheront mieux la formation d’ampoules. Les chaussures lourdes, elles, te protègeront et maintiendront mieux lors de randonnées en terrain difficile. 
                </p>
              </div>
            </div>
            <div class="img"><h4><span>2</span><br>Chaussures expédition canoë</h4>
            </div>
            <div class="row">
              <div class="col-md-12 article">
                <p class="col-lg-7  col-md-12">Des <b class="subtitle">sandales de sport</b> sont confortables par temps chaud, et certaines facilitent les déplacements sur rochers humides. 
                  L’inconvénient étant que ce modèle ne protège pas la cheville, et le dessus du pied, Tout comme les <b class="subtitle">bottillons en néoprène</b>. 
                  Ceux-ci, en revanche, permettent de garder ses pieds au chaud, y compris en milieu humide.<br>
                  Enfin, les <b class="subtitle">baskets de pont</b>, qui sont munies d’une semelle antidérapante et sèchent rapidement.<br><br>
                  Attention, les <b class="subtitle">bottes en caoutchouc</b> ne sont pas adaptées. Elles font transpirer le pied et peuvent être un danger puisqu’elles se rempliront d’eau si tu chavires.
                </p>
                <table class="example-table col-lg-5">
                  <tbody>
                    <tr>
                      <th>Avantages</th>
                      <th>Inconvénients</th>
                    </tr>
                    <tr>
                      <td>Sèchage rapide</td>
                      <td>Ne protège pas la cheville</td>
                    </tr>
                    <tr>
                      <td>Souple</td>
                      <td></td>
                    </tr>
                  </tbody>
                </table> 
              </div>
            </div>
          </div>

                        <!-- ---------------------------------------------------- -->

          <div class="container chaussettes-content hide">
            <div class="img"><h4><span>1</span><br>chaussettes</h4>
            </div>
            <div class="row">
              <div class="col-md-12 article">
                <p class="col-lg-7  col-md-12">On te conseille de porter deux paires de chaussettes. 
                  L’une en <b class="subtitle">nylon</b> fin ou autre matière qui évacue la transpiration et l’autre en <b class="subtitle">laine</b> pour le confort et la chaleur. 
                  De cette manière, tu n’auras pas d’ampoules car les chaussettes glisseront l’une sur l’autre.
                <br><br>
                Les chaussettes en <b class="subtitle">coton</b> sont à éviter, car elles ne tiennent pas chaud, même sèches,  et restent humides. Les formations d’ampoules et les frictions  sont donc favorisées.
                </p>
              </div>
            </div>
          </div>

                        <!-- ---------------------------------------------------- -->

          <div class="container orientation-content hide">
            <div class="img"><h4><span>1</span><br>Les cartes</h4>
            </div>
            <div class="row">
              <div class="col-md-12 article">
                <p class="col-lg-10 margin-left  col-md-12">
                La carte est un outil essentiel. Il en existe deux types.<br><br>
                Il y a <b class="subtitle">la carte topographique</b> qui indique l'altitude et permet d'estimer le temps de la randonnée en fonction du parcours ou de modifier un itinéraire. 
                Les cartes à grande échelle sont parfaites pour les terrains accidentés car elles donnent une vision topographique fort détaillée, et indiquent les sources et petits édifices. 
                Les cartes à plus petite échelle suffisent pour les randonnées sur des sentiers balisés. Les très petites échelles sont utiles pour évaluer ce qu’il y a au-delà de la zone de progression. 
                Ces cartes ne seront donc pas adaptées pour une utilisation sur le terrain, mais bien pour la préparation d’un séjour.<br><br>
                Il y a aussi <b class="subtitle">la carte de randonnée</b> et les topo-guides, qui t’informent des aires de camping, de pique-nique, des parcours secondaires et qui décrivent les sentiers. 
                Si tu achètes un guide de randonnées d’un autre pays, assure-toi de bien la comprendre et de vérifie si les indications sont suffisamment précises.
                </p>
              </div>
            </div>
            <div class="img"><h4><span>2</span><br>Les boussoles</h4>
            </div>
            <div class="row">
              <div class="col-md-12 article">
                <p class="col-lg-10 mergin-left col-md-12">
                  Il existe deux  types de boussoles :<br><br>
                  La <b class="subtitle">boussole de visé</b> est très précise car elle prend un élément éloigné du paysage comme point de repère.<br><br>
                  La <b class="subtitle">boussole d'orientation</b> est le modèle le plus utilisé. 
                  Elle est légère, peu coûteuse et permet une orientation plus facile sur une carte topographique. 
                  Le vrai nord est directement différencié du nord magnétique, sans passer par des opérations mathématiques compliquées mais essentielles.
                </p>  
              </div>
            </div>
            <div class="img"><h4><span>2</span><br>Le GPS</h4>
            </div>
            <div class="row">
              <div class="col-md-12 article">
                <p class="col-lg-10 margin-left  col-md-12">
                  Il permet de se géo localiser et de recevoir les signaux satellites. 
                  Il est léger, facile d'utilisation, plus complet et plus efficace. 
                  Par prévention de soucis technique avec le GPS, munis-toi toujours d'une boussole et d'une carte.
                </p>  
              </div>
            </div>
          </div>


                        <!-- ---------------------------------------------------- -->

          <div class="container signal-content hide">
            <div class="img"><h4><span>1</span><br>Signaler sa présence</h4>
            </div>
            <div class="row">
              <div class="col-md-12 article">
                <p class="col-lg-10 margin-left  col-md-12">
                Pour être vu et entendu, le meilleur moyen est l'appareil électronique.<br><br>
                <b class="subtitle">Les communications vocales :</b><br>
                Les téléphones satellites fonctionnent partout, sauf peut-être près des pôles mais sont très onéreux. 
                Les talkies-walkies sont utilisés pour communiquer au sein d'un groupe. Même les moins coûteux ont une portée de plus de 20 km. 
                Mais attention, les reliefs, arbres ou autres réduisent cette portée. 
                Autre inconvénient, ces appareils ne permettent la communication que dans un groupe, et n’est pas un moyen de joindre un garde forestier ou la police.<br><br>
                <b class="subtitle">Les balises de géolocalisation :</b><br>
                Ces balises ne permettent pas de communiquer mais servent à indiquer une position géographique bien précise. 
                Il suffit d’appuyer sur un bouton pour envoyer un signal de détresse. 
                C’est un dispositif coûteux qui n’est  généralement utilisé que pour de longues expéditions dans des lieux reculés.<br><br>
                <b class="subtitle">Les moyens de signalisations basiques :</b><br>
                Deux objets basiques mais utiles pour les campeurs, sont le miroir et le sifflet. 
                Le miroir en acier pour refléter la lumière du soleil et donc signaler sa présence. 
                Et le sifflet, pour se faire entendre à une plus grande distance que par la voix.
                </p>
              </div>
            </div>
          </div>

<!-- ---------------------------------------------------- -->

          <div class="container vaisselle-content hide">
            <div class="img"><h4><span>1</span><br>La vaisselle</h4>
            </div>
            <div class="row">
              <div class="col-md-12 article">
                <p class="col-lg-10 margin-left  col-md-12">
                  La préparation des repas est une tâche principale. Le diner permet de refaire un stock de calories après une longue journée passée à se dépenser.<br><br>
                  Le nombre d’ustensiles de cuisine que tu dois emporter doit être réduit au minimum (une poêle, une casserole) et ils seront choisis pour leur légèreté et leur polyvalence. 
                  Le matériel sera en acier fin, en aluminium ou en titane.<br>
                  Le <b class="subtitle">Titane</b> étant le meilleur choix car, faiblement conducteur, il gardera plus longtemps la chaleur.
                </p>
              </div>
            </div>
          </div>

          <div class="container fours-content hide">
            <div class="img"><h4><span>1</span><br>Les fours</h4>
            </div>
            <div class="row">
              <div class="col-md-12 article">
                <p class="col-lg-10 margin-left  col-md-12">
                  Si tu peux te permettre de prendre plus, pense au <b class="subtitle">four hollandais</b> ! 
                  C’est la copie d'une marmite, munie d'une grande anse et de 3 pieds, qui s’utilise sur un feu de camp.<br><br> 
                  Le <b class="subtitle">four réflecteur</b> fonctionne en concentrant la chaleur d'un feu de camp.<br>
                  L'incontournable appareil croque-monsieur peut également être utile, ainsi qu’une cafetière adaptée. 
                </p>
              </div>
            </div>
          </div>

          <div class="container rechauds-content hide">
            <div class="img"><h4><span>1</span><br>Les réchauds</h4>
            </div>
            <div class="row">
              <div class="col-md-12 article">
                <p class="col-lg-10 margin-left  col-md-12">
                  Contrairement aux idées reçues, on cuisine rarement sur un feu de camp, mais plus souvent avec un réchaud, car c’est beaucoup plus simple. 
                  Il en existe différents types, selon leur taille, la simplicité de leur utilisation et le type de combustible utilisé.<br><br>
                  La taille du réchaud peut avoisiner celle d’une valise. Ceux-là comportent donc plusieurs brûleurs au contraire des petits modèles facilement transportables en randonnée qui n’en ont qu’un. 
                  Pour les combustibles, tu as le choix entre <b class="subtitle">l’essence</b>, <b class="subtitle">le gaz</b> ou <b class="subtitle">le propane</b>. 
                  Il existe aussi des appareils qui fonctionnent avec des pastilles d’alcool, qui offrent peu de chaleur, ou avec du bois, qui rend l’utilisation difficile.
                </p>
              </div>
            </div>
            <div class="img"><h4><span>2</span><br>Le réchaud à gaz</h4>
            </div>
            <div class="row">
              <div class="col-md-12 article">
                <p class="col-lg-7  col-md-12">
                  Les réchauds à gaz sont sans doute les plus utilisés pour la randonnée. 
                  Ils brûlent généralement un mélange de butane/propane contenu dans des cartouches à valves jetables.<br><br>
                  L’avantage de ces réchauds, est qu’ils sont facile d’usage et pas tres lourds, mais ne t'inquiète pas il est relativement peu dangereux comparés à d'autres. 
                  Si tu es en groupe il te sera de grande utilité pour faire chauffer d'un coup de bonnes quantités d'eau.<br><br>
                  Par contre, son usage n’est pas fiable en dessous des -10/-15°C et il ne sera pas moins lourd vidé de son gaz. 
                  De plus, tu le trouvera peut-être un peu encombrant.<br>
                  Finalement, rien de tel que le bruit que le feu qui brûle et crépite !
                </p>
                <table class="example-table col-lg-5">
                  <tbody>
                    <tr>
                      <th>Avantages</th>
                      <th>Inconvénients</th>
                    </tr>
                    <tr>
                      <td>Facile d'usage</td>
                      <td>Pas fiable par temps froid</td>
                    </tr>
                    <tr>
                      <td>Léger</td>
                      <td>Encombrant</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="img"><h4><span>3</span><br>Le réchaud à essence</h4>
            </div>
            <div class="row">
              <div class="col-md-12 article">
                <p class="col-lg-7  col-md-12">
                  Certaines de leurs qualités propres sont indispensables dans certaines situations, mais cet engin est loin d'être aussi légers et compacts que celui à gaz. 
                  Ces réchauds brûlent différents types d'essences pressurisées et vaporisées.<br><br>
                  Le réchaud à essence est l’idéal pour les expéditions, il fonctionne à toutes les altitudes et températures et pas de restriction pour les groupes, 
                  ces réchauds peuvent accueillir de plus grandes casseroles que les réchauds à gaz.<br> 
                  Si tu es minutieux tu vas l’aimé car il te sera possible de n'emporter que la quantité exacte d'essence nécessaire.
                  Au niveau de la sécurité tu dois faire très attention, il est relativement dangereux à l’usage dû au manipulation que tu auras peut-être à faire avec l’essence et lors du préchauffage. 
                  Malheureusement il n’est pas léger et prend de la place.
                </p>
                <table class="example-table col-lg-5">
                  <tbody>
                    <tr>
                      <th>Avantages</th>
                      <th>Inconvénients</th>
                    </tr>
                    <tr>
                      <td>Fiable partout</td>
                      <td>Dangereux à l'usage</td>
                    </tr>
                    <tr>
                      <td>Lourd</td>
                      <td>Encombrant</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- ----------------------------------------------------------------------------- -->
  
          <div class="container traieaux-content hide">
            <div class="img"><h4><span>1</span><br>Traiter l'eau</h4>
            </div>
            <div class="row">
              <div class="col-md-12 article">
                <p class="col-lg-10 margin-left  col-md-12">
                  Si tu comptes partir plus de deux jours en expédition, tu ne pourras pas transporter la quantité nécessaire, 
                  il faudra donc t’en procurer en chemin et la rendre potable. 
                  On te conseille fortement de choisir un endroit proche d’une source d’eau là où tu iras.<br><br>
                  L’eau de source est généralement potable mais l’eau de surface comme les lacs ou ruisseau est la plupart du temps contaminée. 
                  En buvant de l’eau non potable, tu risques d’être contaminé. L’assainir est donc fortement recommandé, 
                  avant même de choisir la façon dont tu assainiras l’eau, <b class="subtitle">filtre la grossièrement</b> à l’aide d’un tissu ou éventuellement d’une chaussette contenant du sable. 
                  Pour cela, 4 méthodes s’offrent à toi :<br><br>
                  La <b class="subtitle">bouillir</b> te prendra du temps et nécessitera l’utilisation d’un combustible, mais cela éliminera tous les agents pathogènes biologiques.<br><br>
                  La traiter <b class="subtitle">chimiquement</b> par chloration est une solution efficace et rapide pour tuer tous les parasites, bactéries et virus. 
                  Tu as juste à prévoir des pastilles de chlore, eau de javel, ... Après un temps d’action de plus ou moins 30 minutes l’eau devient potable et le reste quelques jours en fonction des conditions de stockage. 
                  Par contre ils donnent à l’eau un goût désagréable.<br><br>
                  La <b class="subtitle">stériliser aux UV</b> nécessitera du temps et une bouteille en plastique, c’est une méthode plus que simple. 
                  Il te suffit de laisser l’eau dans une bouteille en plastique transparente six heures au soleil, 
                  les rayons UV A contenus dans la lumière tuent les micro-organismes infectieux.<br><br>
                  La méthode <b class="subtitle">« Lifestraw » ( Paille filtrante )</b> est assez récente et inventée par le Danois Vestergaard Frandsen. 
                  Cette méthode consiste à aspirer de l’eau à travers une paille contenant des filtres désinfectants surtout à base de charbon actif et de produit iodé. 
                  Elle ne coûte que 3€ et te permettra de boire directement dans n’importe quelles sources d’eau.
                </p>
              </div>
            </div>
          </div>

          <div class="container traneaux-content hide">
            <div class="img"><h4><span>1</span><br>Transporter l'eau</h4>
            </div>
            <div class="row">
              <div class="col-md-12 article">
                <p class="col-lg-10 margin-left  col-md-12">
                  Pour le transport de l'eau, une <b class="subtitle">gourde militaire</b> est lourde et donne un mauvais goût à l’eau.<br><br>
                  D’autres solutions sont préférables comme une <b class="subtitle">bouteille en plastique</b>. Bien qu’elle soit encombrante, elle est petite, légère, facile à remplir, on voit la quantité restante, et elle ne prend pas de mauvais goût.<br><br>
                  <b class="subtitle">La poche à eau</b> ( Camelbak ) peut, elle, contenir de 1 à 3 L. Elle se glisse dans le sac à dos et permet de boire à la pipette qui sort du sac. 
                  C’est donc une solution facile pour s'hydrater, 
                  mais la poche à eau est difficile à sécher, à nettoyer et elle favorise la prolifération des bactéries.<br><br>
                  Enfin, une dernière solution est le <b class="subtitle">bidon pliable</b>. Il peut contenir de 4 à 20 litres, il purifie l'eau pour tout un groupe, est léger et solide, mais encombrant.
                </p>
              </div>
            </div>
          </div>
<!-- ----------------------------------------------------------------------------- -->

          <div class="container kitsec-content hide">
            <div class="img"><h4><span>1</span><br>Le kit de premiers secours</h4>
            </div>
            <div class="row">
              <div class="col-md-12 article">
                <p class="col-lg-10 margin-left  col-md-12">
                  Lors d’une expédition il peut t’arriver toutes sortes de problèmes, plaies ouvertes, foulures, intoxication, … 
                  Une trousse de premiers secours est donc nécessaire, elle doit être mise à la disposition de tout le monde dans un groupe. 
                  Toutefois, il est conseillé que chaque personne su munisse d’une trousse individuelle.<br><br>
                  Pour soigner une plaie, le plus important est de bien nettoyer à grande eau car le désinfectant ne sert que sur une plaie propre. 
                  Ensuite recouvre-la avec des compresses stériles à faire tenir avec un bandage et une fois rentré n’oublie pas de consulter un médecin.
                </p>
              </div>
            </div>
          </div>

          <div class="container kitsur-content hide">
            <div class="img"><h4><span>1</span><br>Le kit de survie</h4>
            </div>
            <div class="row">
              <div class="col-md-12 article">
                <p class="col-lg-10 margin-left  col-md-12">
                  Ce kit doit être très compact pour pouvoir l’avoir sur soi en permanence.<br>
                  Il doit contenir de quoi faire du feu, nouer, couper, signaler sa présence, une boussole, un abri, de la lumière, de la nourriture, de quoi pêcher, et un nécessaire de secours.
                  <br><br>
                  Emporte donc, des allumettes qui résistent à l'eau, un briquet, de l’allume-feu et un morceau de combustible solide pour faire du feu.<br>
                  Une aiguille, du fil dentaire ou à coudre, du fil de fer de cerclage ou encore de l’adhésif pour nouer.
                  Des bandages, un antidouleur, de la pommade antibiotique et antiseptique pour te soigner.
                </p>
              </div>
            </div>
          </div>

          <div class="container cuts-content hide">
            <div class="img"><h4><span>1</span><br>Les tranchants</h4>
            </div>
            <div class="row">
              <div class="col-md-12 article">
                <p class="col-lg-10 margin-left  col-md-12">
                  Toujours avoir son propre <b class="subtitle">couteau</b> sur soi est essentiel, que ce soit pour couper le petit bois, les fruits, de la ficelle,… Il en existe des pliants ou à lame fixe. Il y aussi le canif, le couteau suisse, ou le couteau multifonctions.<br>
                  En avoir deux sur soi, est encore mieux, tellement ils sont utiles. Un sur soi et un dans son sac.<br><br>
                  Une <b class="subtitle">hache</b> sert surtout à fendre des bûches. Il faut toujours la transporter dans son étui, par mesure de sécurité.<br>
                  La <b class="subtitle">scie</b> est plus adaptée et plus sûre. Il existe maintenant des modèles pliables très compacts.
                </p>
              </div>
            </div>
          </div>

          <div class="container lights-content hide">
            <div class="img"><h4><span>1</span><br>Les lampes</h4>
            </div>
            <div class="row">
              <div class="col-md-12 article">
                <p class="col-lg-10 margin-left  col-md-12">
                  Tout comme avoir son propre couteau sur soi, avoir une lampe de poche est très important. Vérifie absolument la charge des piles avant de partir et prévois quelques lampes supplémentaires.<br><br>
                  Les <b class="subtitle">lampes à LED</b> frontales te seront utiles pour préparer tes repas, lire ou autre. 
                  Elles sont plus lumineuses et moins fragiles que les ampoules à incandescence.<br><br>
                  Les <b class="subtitle">lanternes</b> (à essence ou propane) sont appréciées pour les rassemblements, 
                  mais si elles sont trop grandes et bruyantes, opte pour les lanternes à LED compactes dont les piles sont plus petites.
                </p>
              </div>
            </div>
          </div>
  <!-- ----------------------------------------------------------------------------- -->
  
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