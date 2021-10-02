
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
        <h5 id="ta" class="obj">CONCEPT D'ENCAPSULATION</h5>
        <div class="container">
            <div class="lead" style="text-align: justify;" id="fg">
                L’encapsulation désigne le principe de regroupement des données et du code qui les
                utilise au sein d’une même unité.
                On va très souvent utiliser le principe d’encapsulation afin de protéger
                certaines données des interférences extérieures en forçant l’utilisateur à utiliser
                les méthodes définies pour manipuler les données.<br>
                Dans le contexte de la programmation orientée objet en PHP,
                l’encapsulation correspond au groupement des données (propriétés, etc.)
                et des données permettant de les manipuler au sein d’une classe.<br>
                L’encapsulation va ici être très intéressante pour empêcher
                que certaines propriétés ne soient manipulées depuis l’extérieur de la classe.
                Pour définir qui va pouvoir accéder aux différentes propriétés,
                méthodes et constantes de nos classes, nous allons utiliser des limiteurs d’accès
                ou des niveaux de visibilité qui vont être
                représentés par les mots clefs public, private et protected.<br>
                Une bonne implémentation du principe d’encapsulation va nous
                permettre de créer des codes comportant de nombreux avantages.
                Parmi ceux-ci, le plus important est que l’encapsulation va nous
                permettre de garantir l’intégrité de la structure d’une classe en
                forçant l’utilisateur à passer par un chemin prédéfini pour modifier une donnée.<br>
                Le principe d’encapsulation est l’un des piliers de la programmation
                orientée objet et l’un des concepts fondamentaux, avec l’héritage, le l’orienté objet en PHP.<br>
                Le principe d’encapsulation et la définition des niveaux de visibilité
                devra être au centre des préoccupations notamment lors de la création d’une
                interface modulable comme par exemple la création d’un site auquel d’autres développeurs
                vont pouvoir ajouter des fonctionnalités comme WordPress ou PrestaShop (avec les modules) ou lors de
                la création d’un module pour une interface modulable.<br>

                L’immense majorité de ces structures sont construits en orienté objet
                car c’est la façon de coder qui présente la plus grande modularité et
                qui permet la maintenance la plus facile car on va éclater notre code
                selon différentes classes. Il faudra néanmoins bien réfléchir à qui
                peut avoir accès à tel ou tel élément de telle classe afin de garantir
                l’intégrité de la structure et éviter des conflits entre des éléments
                de classes (propriétés, méthodes, etc.).<br><br>
                <h5 class="lead" style="font-weight: 400;text-decoration:underline;font-family:'Poppins';color:#004aad;">Les niveaux de visibilité des propriétés,méthodes et constantes en POO PHP</h5>
                On va pouvoir définir trois niveaux de visibilité ou d’accessibilité
                différents pour nos propriétés, méthodes et constantes (depuis PHP 7.1.0)
                grâce aux mots clefs public, private et protected.
                Les propriétés, méthodes ou constantes définies avec le mot clef public
                vont être accessibles partout, c’est-à-dire depuis l’intérieur ou l’extérieur de la classe.
                Les propriétés, méthodes ou constantes définies avec le mot clef private ne vont
                être accessibles que depuis l’intérieur de la classe qui les a définies.
                Les propriétés, méthodes ou constantes définies avec le mot clef protected ne
                vont être accessibles que depuis l’intérieur de la classe qui les a définies
                ainsi que depuis les classes qui en héritent ou la classe parente. Nous
                reparlerons du concept d’héritage dans la prochaine leçon.
                Lors de la définition de propriétés dans une classe, il faudra
                obligatoirement définir un niveau de visibilité pour chaque propriété.
                Dans le cas contraire, une erreur sera renvoyée.<br>
                Pour les méthodes et constantes, en revanche, nous ne sommes pas
                obligés de définir un niveau de visibilité même si je vous recommande
                fortement de la faire à chaque fois. Les méthodes et constantes pour
                lesquelles nous n’avons défini aucun niveau de visibilité de manière
                explicite seront définies automatiquement comme publiques.<br>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <h5 id="ta" class="obj">EXERCICE</h5>
                <p class="lead" id="fg">
                    -Créer deux classe A et B avec B une classe fille de A;
                    -Créer une méthode AfficherA() et AfficherB() dans chaque classe A et B;
                </p>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <h5 id="ta" class="obj">RESULTAT</h5>
                <div class="card" style="width: 50rem;   background-color: rgb(132, 211, 213);">
                    <div class="card-body">
                        <p class="card-text lead" id="fg">
                         class A{<br>
                                 public attr1 = 1;<br>
                                 protected attr2 = 2;<br>
                                 private attr3 = 3;<br>
                                 public function AfficherA(){<br>
                                     echo this->attr1;<br>
                                     echo this->attr2;<br>
                                     echo this->attr3;<br>
                                 }<br>
                           }<br>
                           class B extends A{<br>
                                 public function AfficherA(){<br>
                                     echo this->attr1;<br>
                                     echo this->attr2;<br>
                                     echo this->attr3;<br>
                                 }<br>
                           }<br>
                           $A1 = new A();<br>
                           $B1 = new B();<br>
                           echo 'Pour la classe A :';
                           $A1.AfficherA();<br>
                           echo 'Pour la classe B :';
                           $B1.AfficherB(); <br>
                        </p>
                    </div>
                </div>
            </div>
            <div style="margin-top:20px;margin-bottom:20px;">
                <div class="container">
                    <h5 id="ta" class="obj">OUTPUT DU RESULTAT</h5>
                    <div class="card" style="width: 50rem;   background-color: rgb(132, 211, 213);">
                        <div class="card-body">
                            <p class="card-text lead" id="fg">
                               Pour la classe A : 1 2 3;
                               Pour la classe B : 1 2 (erreur);
                            </p>
                        </div>
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