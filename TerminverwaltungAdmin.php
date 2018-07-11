
<?php
include('header.php');                                                                                        /*hier wird die datei header.php eingebunden, so macht mand das programm �bersichtlicher und muss nicht so viel quelltext kopieren */
include('datenbank_anbindung.php');
?>
<html>
   <body>
      <nav class="nav">																						  <!-- Erstellung einer Navigationsleiste-->
         <ul>                                                                                                 <!-- Auflistung-->
            <li><a href="TerminverwaltungAdmin.php" class="active">TerminverwaltungAdmin</a></li>             <!-- Weiterleitung auf Men�punkt Termine/class=Active=orangene untere linie bleibt wenn man auf dieser seite ist.-->
            <li><a href="DokumentenverwaltungAdmin.php" >DokumentenverwaltungAdmin</a></l>
         </ul>
      </nav>
      <section id="main">                                                                                     <!-- Hauptbereich, also unter �berschrift und navigation-->
         <article>                                                                                            <!-- Artikelaufbau, linke Seite der Website-->
            <h2>Terminkalender</h2>																			  <!-- �berschrift des Artikels-->
            <img src="Kalenderbild.jpg" />                                                                    <!-- Bild unter der �berschrift-->
            <p style="text-indent:30px;">Bitte legen Sie das Vortragsdatum fest hh</p>                           <!-- Hier wird der Text 30px nach rechts einger�ckt damit er genau unter dem Bild liegt -->
           <?php include('index.php')?> </article>
         <?php
            include('seitenleiste.php');
            ?>
      </section>
      
      
   </body>
</html>
