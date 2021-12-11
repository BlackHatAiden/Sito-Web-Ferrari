<?php

    //avvia la sessione quindi ricorda se loggato oppure no
    session_start() ;


?>

<html>
    <head>

        <title>Store Fisico </title>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">


        <!--Link font-awesome per icone social-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>


        <!--Link e Script Bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>


        <script type="text/javascript" lang="javascript" src="../../js/bootstrap.min.js"></script>

        <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css"/>


        <!--Script JavaScript-->
        <script type="text/javascript" lang="javascript" src="../../main.js"></script>

        <!--Link foglio di stile css-->
        <link rel="stylesheet" type="text/css" href="style.css"/>


        <!--Link e Script per OpenMappa-->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="crossorigin="" />
   
        <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="crossorigin=""></script>

    </head>

    <body>

        <!--Contenitore elementi-->
        <div class="container-fluid" style=" padding-left: 0; padding-right: 0;">

            <!--Nav Bar-->
            <nav class="navbar navbar-expand-xxl navbar-dark bg-dark " style="background-color: rgb(24,24,24) !important;">


                    <!--bottone menu collassabile in base alla grandezza pagina-->
                    <button class="navbar-toggler mx-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                       
                       <!--Icona Bottone collassabile-->
                       <span class="navbar-toggler-icon"></span>

                    </button>

                    
                    <!--elementi menu collassabile in base alla grandezza pagina-->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <!--collezione di elementi nav bar-->
                        <ul class="navbar-nav  mx-auto" >


                                    <!--Sezione Nome-->
                                    <?php

                                        //se utente loggato
                                        if (isset($_SESSION["nome"]))
                                        {
                                            //appare benvenuto nome
                                            echo '<li class="nav-item mx-5 mt-2 " ><p style="color:white;">Benvenuto '.$_SESSION["nome"].'</p></li>';
                                        }
                                        
                                    ?>
                            
                                
                                    
                                    <!--Sezione Account-->
                                    <li class="nav-item dropdown mx-5"  >

                                        <a class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <img src="../../Vari/immagineNera.png"  width="30px" height="30px" >
                                        </a>

                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown" >

                                            <?php

                                                //se utente non loggato
                                                if (!isset($_SESSION["nome"]))
                                                {
                                                    //esistono sezioni login e registrazione
                                                    echo '<li><a class="dropdown-item" href="../../Account/Login/index.php" >Login</a></li>
                                                        <li><a class="dropdown-item" href="../../Account/Registrazione/index.php">Registrazione</a></li>';
                                                }
                                                else
                                                {
                                                    //esiste sezione gestione account
                                                    echo '<li><a class="dropdown-item" href="../../Account/Gestione/index.php">Gestione Account</a></li>';
                                                }

                                            ?>
                                            
                                        </ul>

                                    </li>
                                    
                                
                                    
                                    <!--Sezione Modelli-->
                                    <li class="nav-item dropdown mx-5"  >

                                        <a class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Modelli</a>

                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown" >

                                            <li><a class="dropdown-item" href="../../Modelli/SF21/index.php" >SF21</a></li>
                                            <li><a class="dropdown-item" href="../../Modelli/Ferrari-Roma/index.php" >Ferrari Roma</a></li>
                                            <li><a class="dropdown-item" href="../../Modelli/SF90-Spyder/index.php" >SF90 Spyder</a></li>
                                            <li><a class="dropdown-item" href="../../Modelli/SF90-Stradale/index.php" >SF90 Stradale</a></li>

                                        </ul>

                                    </li>

                                
                                    
                                    <!--Sezione Universe-->
                                    <li class="nav-item dropdown mx-5" >

                                        <a class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Universe</a>

                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown" >

                                            <li><a class="dropdown-item" href="../../Universe/Storia/index.php" >Storia</a></li>

                                        
                                            <!--Sezione Musei-->
                                            <li class="dropdown-submenu">

                                                <a  class="dropdown-item">Musei</a>

                                                <ul class="dropdown-menu">

                                                    <li><a class="dropdown-item" href="../../Universe/Musei/Maranello/index.php" >Maranello</a></li>

                                                    <li><a class="dropdown-item" href="../../Universe/Musei/Modena/index.php" >Modena</a></li>

                                            
                                                </ul>

                                            </li>

                                            <li><a class="dropdown-item" href="https://www.ferrari.com/it-SM/news" >News</a></li>

                                        </ul>

                                    </li>
                                    
                                    <!--Brand-->
                                    <li  onclick="location.href='../../index.php'" style="cursor: pointer; "  >
                                        
                                        <img style="cursor:pointer;" class="navbar-brand mx-5" src="../../Vari/Ferrari1.png"  width="40px" height="55px" >
                                    </li>
                                    
                                
                                    <!--Sezione Store-->
                                    <li class="nav-item dropdown mx-5"   >

                                        <a class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Store</a>

                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown" >

                                            <li><a class="dropdown-item" href="https://store.ferrari.com/it-it/?from=SH" >Online</a></li>
                                            <li><a class="dropdown-item" href="../Fisico/index.php" >Fisico</a></li>
                                            
                                        </ul>

                                    </li>
                                    
                                    <!--Sezione Concessionario-->
                                    <li class="nav-item mx-5"  >
                                        <a class="nav-link" href="../../Concessionario/index.php" >Concessionario</a>
                                    </li>
                                    
                                    
                                    <!--Casella di ricerca-->
                                    <div class="d-flex" >

                                        <input class="form-control me-2" id="ricerca" onchange="sugges" type="search" placeholder="Cerca nel sito" aria-label="Search" style="width:200px;height: 40px;">
                                        
                                        
                                        <button class="btn btn-outline-success" type="button" onclick="searchPage()" style="height: 40px;">Cerca</button>

                                    </div>

                                    <!--Sezione Logout-->
                                    <?php

                                        //se utente loggato
                                        if (isset($_SESSION["nome"]))
                                        {
                                            //percorso logout
                                            $logout = "'../../Account/Login/logout.php'" ;

                                            //appare icona logout
                                            echo '<li onclick="location.href='.$logout.'" class="nav-item mx-5 my-2">
                                                <i style="cursor:pointer; color:white; " class="fas fa-sign-out-alt">Logout</i>
                                                </li>' ;
                                        
                                        } 
                                        
                                    ?>
                         
                        </ul>

                    </div>

            </nav>

            
            <!-- contenitore menu cliccabile -->
            <div class="menuToggle">
                        
                <!-- attiva animazione -->
                <input type="checkbox"/>
                
                
                <!-- 3 linee hamburger -->
                <span></span>
                <span></span>
                <span></span>
                
                
                <!-- Voci dentro hamburger -->
                <ul class="menuBurger">
                    

                    <!--Creo tabella di sezionni-->
                    <div class="row" style="color: white; font-size: 18px; padding: 10px; cursor: pointer;">

                        <!--Creo colonne contenenti link-->
                        <div class="col-sm-12 col-md-12">

                            <li onclick="location.href='../../Innovazione-Eccellenza/index.php'" >Innovazione & Eccellenza</li>


                        </div>

                        <div class="col-sm-12 col-md-12">

                            <br/>
                            
                            <li onclick="location.href='../../MyFerrari/index.php'">MyFerrari App</li>

                        </div>

                        <div class="col-sm-12 col-md-12">

                            <br/>
                            
                            <li onclick="location.href='../../Contatti/index.php'">Contatti</li>

                        </div>
                        
                    </div>
                    

    
                    <!--Creo tabella di Icone Social -->
                    <div class="row" style="font-size: 30px; cursor: pointer; color: white;">

                        <!--Ogni colonna continene un icona-->
                        <div class="col-sm-12 col-md-3" >
                        
                            <br/>
                            
                            <i class="fab fa-facebook" onclick="location.href='https://www.facebook.com/Ferrari'"  ></i>
                            

                        </div>

                        <div class="col-sm-12 col-md-3">
                        
                            <br/>
                            
                            <i class="fab fa-instagram" onclick="location.href='https://www.instagram.com/ferrari/'"  ></i>
                            
                            
                        </div>

                        <div class="col-sm-12 col-md-3">
                        
                            <br/>
                            
                            <i class="fab fa-twitter" onclick="location.href='https://twitter.com/Ferrari'"  ></i>
                            
                            
                        </div>

                        <div class="col-sm-12 col-md-3">
                        
                            
                            <br/>

                            <i class="fab fa-youtube" onclick="location.href='https://www.youtube.com/channel/UCd8iY-kEHtaB8qt8MH--zGw'"  ></i>  
                            
                            
                        </div>

                    </div>
    
                </ul>

            </div>

        </div>


        <!--Cookie-->
        <div id="banner" class="cookiebar" style="display: none; color: white; background: rgb(24,24,24); position: fixed;  left: 0; bottom: 0; right: 0; padding: 2%;  ">

            <p>Questo sito utilizza i cookies, anche di terze parti, per garantirti la migliore esperienza nel nostro sito, analizzare il traffico sul nostro sito, mostrarti 
                annunci personalizzati sui siti internet di terze parti e per fornirti le funzionalità relative ai social media. Potrai modificare le tue preferenze in ogni 
                momento accedendo alle impostazioni sui cookies. Per maggiori informazioni, leggi la nostra
                <a href="https://www.ferrari.com/it-IT/cookie-policy" >Cookie Policy</a>
            </p>

            <div class="cookiebar-buttons" style="text-align: center; ">
                
                <button onclick="choiseCookie(true)" data-accept="cookiebar" class="cookiebar-btn cookiebar-confirm" style="color: white; background: green;">Accetto</button>

                <button onclick="choiseCookie(false)" data-accept="cookiebar" class="cookiebar-btn cookiebar-confirm" style="color: white; background: red;">Rifiuto</button>

            </div>

        </div>



        <!--Contenitore Mappa-->
        <div id='map' style="height: 100%; width: 100%; z-index:0;"></div>

        <!--Script per visulaizzazione mappa e marker-->
        <script>

            //setto il centro e lo zoom mappa
            var map = L.map('map').setView([41.8,12.4],5) ;

            //prelevo open mappa
            L.tileLayer('https://a.tile.openstreetmap.org/{z}/{x}/{y}.png', { attribution: "Map data &copy; <a href='https://www.openstreetmap.org/'>OpenStreetMap</a> contributors"}).addTo(map) ;


            //aggiungo pink alla mappa con popup descrittivo
            var marker1 = L.marker([41.9,12.4]).addTo(map) ;

            marker1.bindPopup("<a style='text-decoration:none;color:red;font-size:15px;' href='https://store.ferrari.com/it-it/store-locator/stores/ferrari-store-roma'>Ferrari Store Roma<a/> <br/>Via Tomacelli, 147-152, 00186 Roma (RM)<br/>Telefono:+39 0683758510") ;


            var marker2 = L.marker([37.5,14.4]).addTo(map) ;

            marker2.bindPopup("<a style='text-decoration:none;color:red;font-size:15px;' href='https://store.ferrari.com/it-it/store-locator/stores/ferrari-store-agira'>Ferrari Store Agira<a/> <br/>Sicilia Outlet Village, Contrada Mandre Bianche - 94011, Agira (EN)<br/>Telefono:+39 09351828022") ;

            var marker3 = L.marker([45.1,7.7]).addTo(map) ;

            marker3.bindPopup("<a style='text-decoration:none;color:red;font-size:15px;' href='https://store.ferrari.com/it-it/store-locator/stores/ferrari-store-torino'>Ferrari Store Torino<a/> <br/>Torino Outlet Village, via Torino, 160, 10036 Settimo Torinese (TO)<br/>Telefono:+39 0110691141") ;


            var marker4 = L.marker([44.9,10]).addTo(map) ;

            marker4.bindPopup("<a style='text-decoration:none;color:red;font-size:15px;' href='https://store.ferrari.com/it-it/store-locator/stores/ferrari-store-fidenza'>Ferrari Store Fidenza<a/> <br/>Fidenza Village, Via Federico Fellini, Loc. Chiusa Ferranda - 43036, Fidenza (PR)<br/>Telefono:+39 0524201202") ;

            var marker5 = L.marker([45.46,9.19]).addTo(map) ;

            marker5.bindPopup("<a style='text-decoration:none;color:red;font-size:15px;' href='https://store.ferrari.com/it-it/store-locator/stores/ferrari-store-milano'>Ferrari Store Milano<a/> <br/>Via Berchet, 2, 20121 Milano (MI)<br/>Telefono:+39 0249490815") ;


            var marker6 = L.marker([44.65,10.93]).addTo(map) ;

            marker6.bindPopup("<a style='text-decoration:none;color:red;font-size:15px;' href='https://store.ferrari.com/it-it/store-locator/stores/ferrari-store-museo-enzo-ferrari'>Ferrari Store Museo Enzo Ferrari<a/> <br/>Via Paolo Ferrari, 85, 41121 Modena (MO)<br/>Telefono:+39 0594397980") ;


            var marker7 = L.marker([41.07,1.14]).addTo(map) ;

            marker7.bindPopup("<a style='text-decoration:none;color:red;font-size:15px;' href='https://store.ferrari.com/it-it/store-locator/stores/ferrari-land-portaventura'>Ferrari Land PortAventura<a/> <br/>Pere Molas Tarragona, Km 2 - Vila-Seca, 43840, Spagna<br/>Telefono:+34 977779058") ;


            var marker8 = L.marker([24.46,54.59]).addTo(map) ;

            marker8.bindPopup("<a style='text-decoration:none;color:red;font-size:15px;' href='https://store.ferrari.com/it-it/store-locator/stores/ferrari-world-abu-dhabi'>Ferrari World Abu Dhabi<a/> <br/>Yas Island - Abu Dhabi, 128717, Emirati Arabi Uniti<br/>Telefono:+971 024968001") ;


            var marker9 = L.marker([41.31,-74.12]).addTo(map) ;

            marker9.bindPopup("<a style='text-decoration:none;color:red;font-size:15px;' href='https://store.ferrari.com/it-it/store-locator/stores/ferrari-store-woodbury'>Ferrari Store Woodbury<a/> <br/>218 Red Apple Court, Central Valley, New York, NY, 10917, U.S.A.<br/>Telefono:+1 8458270099") ;


            var marker10 = L.marker([34.05,-118.24]).addTo(map) ;

            marker10.bindPopup("<a style='text-decoration:none;color:red;font-size:15px;' href='https://store.ferrari.com/it-it/store-locator/stores/ferrari-store-los-angeles'>Ferrari Store Los Angeles<a/> <br/>8500 Beverly Boulevard (Beverly Center) - Los Angeles, CA, 90048, Stati Uniti<br/>Telefono:+1 3106579800") ;


            var marker11 = L.marker([25.77,-80.19]).addTo(map) ;

            marker11.bindPopup("<a style='text-decoration:none;color:red;font-size:15px;' href='https://store.ferrari.com/it-it/store-locator/stores/ferrari-store-miami'>Ferrari Store Miami<a/><br/>19501 Biscayne Boulevard, Aventura (Aventura Mall) - Miami, FL, 33180, Stati Uniti<br/>Telefono:+1 3056925280") ;




            //cerchio sulla mappa indica piu punti vicini
            var circle1 = L.circle([41.81,12.26], {color:"red", fillColor:'#f03',fillOpacity:0.5,radius:10,weight:15}).addTo(map) ;

            circle1.bindPopup("<a style='text-decoration:none;color:red;font-size:15px;' href='https://store.ferrari.com/it-it/store-locator/stores/ferrari-store-fiumicino-apt-area-e'>Ferrari Store Aeroporto Fiumicino - Area E<a/><br/>Aeroporto Leonardo Da Vinci, Terminal 3 - Area E, 00054 Fiumicino (RM)<br/>Telefono:+39 06659556070<br/><a style='text-decoration:none;color:red;font-size:15px;' href='https://store.ferrari.com/it-it/store-locator/stores/ferrari-store-fiumicino-apt-molo-d'>Ferrari Store Fiumicino APT - Molo D<a/><br/>Aeroporto Leonardo Da Vinci, Terminal 3 - Molo D - 00054, Fiumicino (RM)<br/>Telefono:+39 06659532319") ;


            var circle2 = L.circle([44.49,11.34], {color:"red", fillColor:'#f03',fillOpacity:0.5,radius:10,weight:15}).addTo(map) ;

            circle2.bindPopup("<a style='text-decoration:none;color:red;font-size:15px;' href='https://store.ferrari.com/it-it/store-locator/stores/ferrari-store-maranello'>Ferrari Store Maranello<a/><br/>Via Abetone Inferiore, 19, 41053 Maranello (MO)<br/>Telefono:+39 0536949888<br/><a style='text-decoration:none;color:red;font-size:15px;' href='https://store.ferrari.com/it-it/store-locator/stores/ferrari-store-museo-ferrari'>Ferrari Store Museo Ferrari<a/><br/>Via Dino Ferrari, 43, 41053 Maranello (MO)<br/>Telefono:+39 0536949893") ;

   

        </script>


    </body>

</html>