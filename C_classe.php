<!DOCTYPE html>
<html lang="fr">
<?php
include_once 'header.php';
?>

<body>

    <div class="container" style=" border-left: solid 2px rgb(132, 211, 213);border-right:solid 2px rgb(132, 211, 213);">
        <div class="container" id="bbg">
            <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                    <img src="files/img/Gtr.png" alt="logo" width="32px" height="32px">
                    <span class="fs-4">roupe-4</span>
                </a>

                <ul class="nav nav-pills">
                    <li class="nav-item"><a href="./index.php" class="nav-link" aria-current="page" id="conv">Accueil</a></li>
                    <li class="nav-item act"><a href="./index.php#trouver" class="nav-link" id="conv">Concept</a></li>
                    <li class="nav-item"><a href="./A_propoS.php" class="nav-link" id="conv">A propos de Groupe-4</a></li>
                </ul>
            </header>
        </div>

        <div style="text-align:center;margin-top:20px;margin-bottom:20px;">
            <h5 id="ta" class="obj">CONCEPT DE CLASSE</h5>
        </div>
        <div class="container">
            <div class="lead" id="fg" style="text-align: justify;">
                On appelle classe la structure d'un objet, c'est-à-dire la déclaration de
                l'ensemble des entités qui composeront un objet. Un objet est donc
                "issu" d'une classe, c'est le produit qui sort d'un moule. En réalité on
                dit qu'un objet est une instanciation d'une classe, c'est la raison pour
                laquelle on pourra parler indifféremment d'objet ou d'instance
                (éventuellement d'occurrence). <br>
                Une classe est composée de deux parties : <br>
                • Les attributs (parfois appelés données membres): il s'agit des
                données représentant l'état de l'objet <br>
                • Les méthodes (parfois appelées fonctions membres): il s'agit
                des opérations applicables aux objets
                déclaration d'une classe <br>
                Pour pouvoir manipuler des objets, il est essentiel de définir des
                classes, c'est-à-dire définir la structure d'un objet. Avec PHP, cette
                définition se fait de la manière suivante : <br>
                <div class="card" style="width: 50rem;background-color: rgb(132, 211, 213);">
                    <div class="card-body">
                        <p class="card-text">
                            class Nom_de_la_classe { <br>
                            // Déclarations des données membres <br>
                            $Donnee_Membre_1; <br>
                            $Donnee_Membre_2; <br>
                            var $... <br>
                            // Déclarations des méthodes <br>
                            function Nom_de_la_fonction(parametres) { <br>
                            liste d'instructions;<br>
                            }<br>
                            }<br>
                        </p>
                    </div>
                </div>
                <h5 class="lead" style="font-weight: 400;text-decoration:underline;font-family:'Poppins';color:#004aad;">Instanciation de la classe</h5>
                Après avoir déclaré une classe, il faut instancier des objets pour
                pouvoir l'exploiter. Cette opération se fait à l'aide du mot clé new
                permettant de faire des objets découlant d'une classe. La syntaxe du
                mot clé new est la suivante : <br>
                <div class="card" style="width: 50rem;background-color: rgb(132, 211, 213);">
                    <div class="card-body">
                        <p class="card-text">
                            $Nom_de_l_objet = new Nom_de_la_classe;<br>
                        </p>
                    </div>
                </div>
                A partir du moment où l'objet est instancié, il possède des propriétés
                qui lui sont propres, cela signifie que si vous instanciez un nouvel
                objet, la modification des propriétés de l'un n'influera aucunement sur
                celles de l'autre. <br>
                Il existe une méthode spéciale (portant le même nom que la classe)
                s'exécutant automatiquement lors de l'instanciation de l'objet. Cette
                méthode, appelée constructeur est très utile pour initialiser les
                données membres lors de l'instanciation. <br>
                <h5 class="lead" style="font-weight: 400;text-decoration:underline;font-family:'Poppins';color:#004aad;">Accéder aux propriétés d'un objet</h5>
                L'accès aux propriétés d'un objet se fait grâce au nom de l'objet, suivi
                d'une flêche (<span class="ch">-></span>) représentée par un moins (<span class="ch">-</span>) et un signe supérieur
                (<span class="ch">></span>), puis du nom de la donnée membre (sans le signe <span class="ch">$</span>). Par
                exemple : <br>
                <div class="card" style="width: 50rem;background-color: rgb(132, 211, 213);">
                    <div class="card-body">
                        <p class="card-text">
                            $Nom_de_l_objet<span class="ch">-></span>Nom_de_la_donnee = Valeur; <br>
                        </p>
                    </div>
                </div>
                <h5 class="lead" style="font-weight: 400;text-decoration:underline;font-family:'Poppins';color:#004aad;">Accéder aux méthodes d'un objet</h5>
                L'accès aux méthodes d'un objet se fait comme pour l'accès aux
                propriétés, c'est-à-dire par le nom de l'objet, suivi d'une flêche et du
                nom de la méthode. La méthode est suivie de parenthèses, contenant
                les paramètres, si il y en a. L'accès à une méthode se fait donc de la
                façon suivante : <br>
                <div class="card" style="width: 50rem; background-color: rgb(132, 211, 213);">
                    <div class="card-body">
                        <p class="card-text">
                            $Nom_de_l_objet<span class="ch">-></span>Nom_de_la_fonction(parametre1,parametre2,...); <br>
                        </p>
                    </div>
                </div>
                <h5 class="lead" style="font-weight: 400;text-decoration:underline;font-family:'Poppins';color:#004aad;">La variable courante $this </h5>
                Le mot clé $this permet de désigner l'objet dans lequel on se trouve,
                c'est-à-dire que lorsque l'on désire faire référence dans une fonction
                membre à l'objet dans lequel elle se trouve, on utilise this.
                Grâce à cette variable spéciale, il est possible dans une fonction
                membre de faire référence aux propriétés situées dans le même objet
                que la fonction membre. <br>
                Ainsi, lorsque l'on désire accéder à une propriété d'un objet à partir
                d'une méthode du même objet, il suffit de faire précéder le nom de la
                donnée membre par <span class="ch"><span class="ch">$this-></span></span>.par exemple : <br>
                <div class="card" style="width: 50rem; background-color: rgb(132, 211, 213);">
                    <div class="card-body">
                        <p class="card-text">
                            class Toto{<br>
                            $age;<br>
                            $sexe;<br>
                            $adresse;<br>
                            function DefineTotoAge($Age){<br><br>
                            <span class="ch">$this-></span>age = $Age;<br>
                            }<br>
                            }<br>
                            $toto_test = new Toto;<br>
                            $toto_test->DefineTotoAge(10);<br>
                            echo "L'age de TOTO : " . $toto_test->age;<br>
                        </p>
                    </div>
                </div>
                <h5 class="lead" style="font-weight: 400;text-decoration:underline;font-family:'Poppins';color:#004aad;"> La méthodes PHP constructeur </h5>
                La méthode constructeur ou plus simplement le constructeur d’une
                classe est une méthode qui va être appelée (exécutée)
                automatiquement à chaque fois qu’on va instancier une classe. <br>
                <div class="card" style="width: 50rem; background-color: rgb(132, 211, 213);">
                    <div class="card-body">
                        <p class="card-text">
                            class Toto{<br>
                            $age;<br>
                            $sexe;<br>
                            $adresse;<br>
                            function DefineTotoAge($Age){<br>
                            <span class="ch">$this-></span>age = $Age;<br>
                            }<br>
                            }<br>
                            $toto_test = new Toto;<br>
                            $toto_test->DefineTotoAge(10);<br>
                            echo "L'age de TOTO : " . $toto_test->age;<br>
                        </p>
                    </div>
                </div>
                Le constructeur va ainsi nous permettre d’initialiser des propriétés
                dès la création d’un objet, ce qui va pouvoir être très intéressant dans
                de nombreuses situations.
                Pour illustrer l’intérêt du constructeur, reprenons notre class toto
                créée précédemment.
                <div class="card" style="width: 50rem;  background-color: rgb(132, 211, 213);">
                    <div class="card-body">
                        <p class="card-text">
                            class Toto{ <br>
                            $age; <br>
                            $sexe; <br>
                            $adresse; <br>
                            public function __construct($age, $sexe){ <br>
                            <span class="ch"><span class="ch">$this-></span></span>age = $age; <br>
                            <span class="ch"><span class="ch">$this-></span></span>sexe = $sexe; <br>
                            } <br>
                            function DefineTotoAge($Age){ <br>
                            <span class="ch"><span class="ch">$this-></span></span>age = $Age; <br>
                            } <br>
                            } <br>
                        </p>
                    </div>
                </div>
                On déclare un constructeur de classe en utilisant la syntaxe
                function <span class="ch">__construct</span>. Il faut bien comprendre ici que le
                PHP va rechercher cette méthode lors de la création d’un nouvel
                objet et va automatiquement l’exécuter si elle est trouvée.
                Nous allons utiliser notre constructeur pour initialiser certaines
                propriétés de nos objets dont nous pouvons avoir besoin
                immédiatement ou pour lesquelles il fait du sens de les initialiser
                immédiatement.<br>
                <h5 class="lead" style="font-weight: 400;text-decoration:underline;font-family:'Poppins';color:#004aad;">La méthodes PHP destructeur</h5>
                De la même façon, on va également pouvoir définir une méthode
                destructeur ou plus simplement un destructeur de classe.
                La méthode destructeur va permettre de nettoyer les ressources
                avant que PHP ne libère l’objet de la mémoire.
                Ici, vous devez bien comprendre que les variables-objets, comme
                n’importe quelle autre variable « classique », ne sont actives que
                durant le temps d’exécution du script puis sont ensuite détruites.
                Cependant, dans certains cas, on voudra pouvoir effectuer
                certaines actions juste avant que nos objets ne soient détruits
                comme par exemple sauvegarder des valeurs de propriétés mises
                à jour ou fermer des connexions à une base de donnée.
                Dans ces cas-là, on va pouvoir effectuer ces opérations dans le
                destructeur puisque la méthode destructeur va être appelée
                automatiquement par le PHP juste avant qu’un objet ne soit
                détruit.
                Il est difficile d’expliquer concrètement l’intérêt d’un destructeur
                ici à des personnes qui n’ont pas une connaissance poussée du
                PHP. Pas d’inquiétude donc si vous ne comprenez pas
                immédiatement l’intérêt d’une telle méthode, on pourra illustrer
                cela de manière plus concrète lorsqu’on parlera des bases de
                données. <br>
                On va utiliser la syntaxe function <span class="ch">__destruct </span>pour
                créer un destructeur. Notez qu’à la différence du constructeur, il
                est interdit de définir des paramètres dans un destructeur. <br>
                <div class="card" style="width: 50rem; background-color: rgb(132, 211, 213);">
                    <div class="card-body">
                        <p class="card-text">
                            class Toto{ <br>
                            $age; <br>
                            $sexe; <br>
                            $adresse; <br>
                            public function <span class="ch">__construct</span>($age, $sexe){ <br>
                            <span class="ch"><span class="ch">$this-></span></span>age = $age; <br>
                            <span class="ch"><span class="ch">$this-></span></span>sexe = $sexe; <br>
                            } <br>
                            function DefineTotoAge($Age){ <br>
                            <span class="ch"><span class="ch">$this-></span></span> = $Age; <br>
                            } <br>
                            } <br>
                        </p>
                    </div>
                </div>
            </div>
        </div>


        <div class="container" id="fg">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <h5 id="ta" class="obj">EXERCICE</h5>
                    <p class="lead" id="fg">
                        Fabriquons maintenant un objet simple en PHP. Ecrivons un
                        objet représentant un étudiant avec
                        ses données : <br>
                        — identifiant<br>
                        — nom<br>
                        — date de naissance<br>
                        et des méthodes pour opérer sur ces données : <br>
                        — constructeur <br>
                        — getters et setters <br>
                        — equals() <br>
                        — toString() pour affichage</p>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <h5 id="ta" class="obj">RESULTAT</h5>
                    <div class="card" style="width: 50rem;background-color: rgb(132, 211, 213);">
                        <div class="card-body" id="fg">
                            <p class="card-text lead">
                                /** Classe Etudiant en PHP */ <br>
                                class Etudiant{<br>
                                /** Identification unique d'un etudiant */<br>
                                protected $etudiant_id;<br>
                                /** Nom de l'etudiant */<br>
                                protected $nom;<br>
                                /** Date de naissance de l'etudiant */<br>
                                protected $naissance;<br>
                                public function __construct($id, $nom,$naissance){<br>
                                <span class="ch">$this-></span>etudiant_id = (int)$id; // cast vers integer<br>
                                <span class="ch">$this-></span>nom = (string)$nom;<br>
                                // cast vers string<br>
                                <span class="ch">$this-></span>naissance= (int)$naissance; // cast vers date(timestamp)<br>
                                }<br>
                                /**<br>
                                * Fonction de comparaison simplifiee entre etudiants<br>
                                * == comparera id, nom et naissance<br>
                                */<br>
                                public function equals(etudiant $etudiant){<br>
                                return (<span class="ch">$this-></span>getId() == $etudiant->getId());<br>
                                }<br>
                                public function getId(){<br>
                                return <span class="ch">$this-></span>etudiant_id;<br>
                                }<br>
                                public function getNom(){<br>
                                return <span class="ch">$this-></span>nom;<br>
                                }
                                public function getNaissance(){<br>
                                return <span class="ch">$this-></span>naissance;<br>
                                }<br>
                                public function __toString(){<br>
                                setlocale(LC_TIME, "fr_FR");<br>
                                $ne=strftime('%A %d %B %Y',<span class="ch">$this-></span>naissance);<br>
                                return 'etudiant: id=' . <span class="ch"><span class="ch">$this-></span></span>getId().', nom='.<span class="ch"><span class="ch">$this-></span></span>
                                ˓ → getNom()." $ne";<br>
                                }<br>
                                }<br>
                                /* Test : */<br>
                                date_default_timezone_set('Europe/Paris');<br>
                                $etu=new Etudiant(234,"Talon",time());<br>
                                var_dump($etu);<br>
                                echo $etu;<br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div style="margin-top:20px;margin-bottom:20px;">
            <div class="container" id="fg">
                <h5 id="ta" class="obj">OUTPUT DU RESULTAT</h5>
                <div class="card" style="width: 50rem;background-color: rgb(132, 211, 213);">
                    <div class="card-body">
                        <p class="card-text lead">
                            object(Etudiant)#1 (3) { <br>
                            ["etudiant_id":protected]=> <br>
                            int(234)<br>
                            ["nom":protected]=><br>
                            string(5) "Talon"<br>
                            ["naissance":protected]=><br>
                            int(1632322729)<br>
                            }<br>
                            etudiant: id=234, nom=Talon Mercredi 22 septembre 2021<br>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container" id="bg">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                <p class="col-md-4 mb-0 text-muted">&copy; 2021 Groupe-4</p>

                <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                    <img src="files/img/Gtr.png" alt="logo" width="32px" height="32px">
                </a>

                <ul class="nav col-md-4 justify-content-end">
                    <li class="nav-item"><a href="./index.php" class="nav-link" id="conv2" aria-current="page">Accueil</a></li>
                    <li class="nav-item"><a href="./index.php#trouver" class="nav-link" id="conv2">Concept</a></li>
                    <li class="nav-item"><a href="./A_propoS.php" class="nav-link" id="conv2">A propos de Groupe-4</a></li>
                </ul>
            </footer>
        </div>
    </div>
    <?php
    include_once 'header.php';
    ?>
</body>

</html>