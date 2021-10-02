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
            <h5 id="ta" class="obj">CONCEPT D'ABSTRACTION</h5>
        </div>

        <div class="container" id="fg">
            <div class="lead" style="text-align: justify;" id="fg">
                <h4 class="lead" style="font-weight: 400;text-decoration:underline;text-align:center;font-family:'Major Mono Display';">Présentation et déclaration des classes abstraites</h4>
                <h5 class="lead" style="font-weight: 400;text-decoration:underline;font-family:'Poppins';color:#004aad;">Définition des classes abstraites</h5>
                Les classes abstraites s'inscrivent davantage dans la sûreté de la programmation
                orientée objet. La première particularité d'une classe abstraite, c'est qu'elle ne
                peut être instanciée (et donc créer un objet). De cette affirmation, on en déduit
                logiquement qu'une classe abstraite est déclarée afin d'être dérivée par des
                classes concrètes.
                Une classe abstraite se comporte comme une classe concrète typique. C'est-à-dire qu'elle peut déclarer des attributs et des méthodes traditionnels qui seront
                accessibles dans les classes dérivées. En fonction bien sûr de la visibilité choisie
                (<span class="ch">public, private et protected</span>) pour chacun des attributs et méthodes.<br>
                Jusque là, il n'y a aucun changement par rapport aux classes concrètes si ce n'est
                le fait que l'on ne puisse pas instancier les classes abstraites. C'est là
                qu'interviennent les méthodes abstraites. Nous verrons par la suite qu'une classe
                déclarée abstraire peut aussi définir des méthodes abstraites. Ces dernières
                devront obligatoirement être redéfinies dans les classes dérivées. C'est un
                moyen de s'assurer que la classe dérivée adoptera le comportement désiré.<br>
                <h5 class="lead" style="font-weight: 400;text-decoration:underline;font-family:'Poppins';color:#004aad;">Déclaration d'une classe abstraite</h5>
                La déclaration d'une classe abstraite se réalise au moyen du mot-clé « abstract
                ». Prenons l'exemple d'une classe abstraite « EtreHumain » qui sera, par <br>
                <div class="card" style="width: 50rem; background-color: rgb(132, 211, 213);">
                    <div class="card-body">
                        <p class="card-text lead" id="fg">
                            abstract class EtreHumain <br>
                            {<br>
                            protected $sexe;<br>
                            protected $nom;<br>
                            public function setNom($nom)<br>
                            {<br>
                            <span class="ch">$this-></span>nom = $nom;<br>
                            }<br>
                            public function getNom()<br>
                            {<br>
                            return <span class="ch">$this-></span>nom;<br>
                            }<br>
                            public function getSexe()<br>
                            {<br>
                            return <span class="ch">$this-></span>sexe;<br>
                            }<br>
                            }<br>
                        </p>
                    </div>
                </div>
                <h5 class="lead" style="font-weight: 400;text-decoration:underline;font-family:'Poppins';color:#004aad;">Déclaration et redéfinition des méthodes abstraites</h5>
                Une méthode abstraite est aussi déclarée au moyen du mot-clé « <span class="ch">abstract</span> ».
                C'est une méthode partiellement définie dans la classe. En effet, lorsque l'on
                déclare une méthode abstraite, on ne définit que son prototype (sa signature).
                Les classes dérivées devront obligatoirement redéfinir entièrement (prototype +
                corps) toutes les méthodes abstraites de la classe parente. <br>
                Reprenons notre exemple précédent et ajoutons quelques méthodes abstraites à
                notre classe abstraite « EtreHumain ». <br>
                <div class="card" style="width: 50rem; background-color: rgb(132, 211, 213);">
                    <div class="card-body">
                        <p class="card-text lead" id="fg">
                            abstract class EtreHumain<br>
                            {<br>
                            protected $sexe;<br>
                            protected $nom;<br>
                            abstract function faireDuSport();<br>
                            abstract function seDivertir();<br>
                            public function setNom($nom)<br>
                            {<br>
                            <span class="ch">$this-></span>nom = $nom;<br>
                            }<br>
                            public function getNom()<br>
                            {<br>
                            return <span class="ch">$this-></span>nom;<br>
                            }<br>
                            public function getSexe()<br>
                            {<br>
                            return <span class="ch">$this-></span>sexe;<br>
                            }<br>
                            }<br>
                        </p>
                    </div>
                </div>
                Notre classe dispose à présent de deux nouvelles méthodes abstraites
                <span class="ch">faireDuSport()</span> et <span class="ch">seDivertir()</span>. Comme nous pouvons le constater, le corps de
                ces deux méthodes n'est pas défini. Nous devrons les définir dans les classes
                dérivées. <br>
                <strong class="lead" style="text-decoration:underline;">Remarque :</strong> toute classe qui définit une ou plusieurs méthodes abstraites doit
                obligatoirement être déclarées abstraite elle aussi. <br>
                C'est pourquoi nous allons à présent définir deux classes « Homme » et «
                Femme » qui hériteront toutes les deux des propriétés et méthodes de notre
                classe abstraite. Commençons simplement par les déclarer et tenter de les
                instancier. <br>
                <h5 class="lead" style="font-weight: 400;text-decoration:underline;font-family:'Poppins';color:#004aad;">Déclaration des classes dérivées</h5>
                <div class="card" style="width: 50rem;background-color: rgb(132, 211, 213);">
                    <div class="card-body">
                        <p class="card-text lead" id="fg">
                            class Homme extends EtreHumain<br>
                            {<br>
                            public function <span class="ch">__construct</span>($nom)<br>
                            {<br>
                            <span class="ch">$this-></span>nom = $nom;<br>
                            <span class="ch">$this-></span>sexe = 'M';<br>
                            }<br>
                            }<br>
                            class Femme extends EtreHumain<br>
                            {<br>
                            public function <span class="ch">__construct</span>($nom)<br>
                            {<br>
                            <span class="ch">$this-></span>nom = $nom;<br>
                            <span class="ch">$this-></span>sexe = 'F';<br>
                            }<br>
                            }<br>
                        </p>
                    </div>
                </div>
                Tentons à présent d'instancier une des deux classes. <br>
                <div class="card" style="width: 50rem;background-color: rgb(132, 211, 213);">
                    <div class="card-body">
                        <p class="card-text lead" id="fg">
                            $oBob = new Homme('Bobby'); <br>
                            echo $oBob->getNom(); <br>
                        </p>
                    </div>
                </div>
                Bien entendu, nous obtenons l'erreur suivante car nous n'avons pas redéfini les
                méthodes abstraites de la superclasse. <br>
                <div class="card" style="width: 50rem;">
                    <div class="card-body">
                        <p class="card-text lead" id="fg" style="background-color: #FFF3AB;">
                            << Fatal error: Class Homme contains 2 abstract methods and must therefore be declared abstract or implement the remaining methods (EtreHumain::faireDuSport, EtreHumain::seDivertir) in /Users/Emacs/Sites/Demo/Tutoriels/abstract.php on line 74 ” </p>
                    </div>
                </div>
            </div>
            <div class="container" id="fg">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <h5 id="ta" class="obj">EXERCICE</h5>
                        <p class="lead" id="fg">
                            Ce message nous indique que nous devons soit redéfinir explicitement les
                            méthodes abstraites de la superclasse ou bien rendre notre classe Homme
                            abstraite. Comme nous souhaitons pouvoir instancier la classe dérivée, il ne
                            nous reste que la première solution. Redéfinissons donc ces deux classes
                            abstraites dans chacune des classes dérivées.
                        </p>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <h5 id="ta" class="obj">RESULTAT</h5>
                        <div class="card" style="width: 50rem;  background-color: rgb(132, 211, 213);">
                            <div class="card-body">
                                <p class="card-text lead" id="fg">
                                    class Homme extends EtreHumain<br>
                                    {<br>
                                    public function <span class="ch">__construct</span>($nom)<br>
                                    {<br>
                                    <span class="ch">$this-></span>nom = $nom;<br>
                                    <span class="ch">$this-></span>sexe = 'M';<br>
                                    }<br>
                                    public function faireDuSport()<br>
                                    {<br>
                                    echo <span class="ch">$this-></span>nom .' fait de la boxe';<br>
                                    }<br>
                                    public function seDivertir()<br>
                                    {<br>
                                    echo 'Soirée foot et bières';<br>
                                    }<br>
                                    }<br>
                                    class Femme extends EtreHumain<br>
                                    {<br>
                                    */<br>
                                    public function <span class="ch">__construct</span>($nom)<br>
                                    {<br>
                                    <span class="ch">$this-></span>nom = $nom;<br>
                                    <span class="ch">$this-></span>sexe = 'F';<br>
                                    }<br>
                                    public function faireDuSport()<br>
                                    {<br>
                                    echo <span class="ch">$this-></span>nom .' fait du fitness';<br>
                                    } public function seDivertir()<br>
                                    {<br>
                                    echo 'Shopping entre filles';<br>
                                    }<br>
                                    }<br>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div style="margin-top:20px;margin-bottom:20px;">
                        <div class="container" id="fg">
                            <h5 id="ta" class="obj">OUTPUT DU RESULTAT</h5>
                            <div class="card" style="width: 50rem; background-color: rgb(132, 211, 213);">
                                <div class="card-body">
                                    <p class="card-text lead" id="fg">
                                        Alice fait du fitness<br>
                                        Shopping entre filles<br>
                                        Sexe : F<br>
                                        Bobby fait de la boxe<br>
                                        Soirée foot et bières<br>
                                        Sexe : M<br>
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