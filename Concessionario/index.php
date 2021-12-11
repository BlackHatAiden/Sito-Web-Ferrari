<?php

    //avvia la sessione quindi ricorda se loggato oppure no
    session_start() ;

?>

<html>
    <head>

        <title>Concessionario </title>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">


        <!--Link font-awesome per icone social-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>


        <!--Link e Script Bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>


        <script type="text/javascript" lang="javascript" src="../js/bootstrap.min.js"></script>

        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"/>


        <!--Script JavaScript-->
        <script type="text/javascript" lang="javascript" src="../main.js"></script>

        <!--Link foglio di stile css-->
        <link rel="stylesheet" type="text/css" href="style.css"/>


        <!--Link e Script per OpenMappa-->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="crossorigin="" />
   
        <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="crossorigin=""></script>





    </head>

    <body>

        <!--Contenitore elementi -->
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
                                                <img src="../Vari/immagineNera.png"  width="30px" height="30px" >
                                            </a>

                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" >

                                                <?php

                                                    //se utente non loggato
                                                    if (!isset($_SESSION["nome"]))
                                                    {
                                                        //esistono sezioni login e registrazione
                                                        echo '<li><a class="dropdown-item" href="../Account/Login/index.php" >Login</a></li>
                                                            <li><a class="dropdown-item" href="../Account/Registrazione/index.php">Registrazione</a></li>';
                                                    }
                                                    else
                                                    {
                                                        //esiste sezione gestione account
                                                        echo '<li><a class="dropdown-item" href="../Account/Gestione/index.php">Gestione Account</a></li>';
                                                    }

                                                ?>
                                                
                                            </ul>

                                        </li>
                                    
                                    

                                        
                                        <!--Sezione Modelli-->
                                        <li class="nav-item dropdown mx-5"  >

                                            <a class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Modelli</a>

                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" >

                                                <li><a class="dropdown-item" href="../Modelli/SF21/index.php" >SF21</a></li>
                                                <li><a class="dropdown-item" href="../Modelli/Ferrari-Roma/index.php" >Ferrari Roma</a></li>
                                                <li><a class="dropdown-item" href="../Modelli/SF90-Spyder/index.php" >SF90 Spyder</a></li>
                                                <li><a class="dropdown-item" href="../Modelli/SF90-Stradale/index.php" >SF90 Stradale</a></li>

                                            </ul>

                                        </li>

                                
                                    
                                        <!--Sezione Universe-->
                                        <li class="nav-item dropdown mx-5"  >

                                            <a class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Universe</a>

                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" >

                                                <li><a class="dropdown-item" href="../Universe/Storia/index.php" >Storia</a></li>

                                            
                                                <!--Sezione Musei-->
                                                <li class="dropdown-submenu">

                                                    <a  class="dropdown-item">Musei</a>

                                                    <ul class="dropdown-menu">

                                                        <li><a class="dropdown-item" href="../Universe/Musei/Maranello/index.php" >Maranello</a></li>

                                                        <li><a class="dropdown-item" href="../Universe/Musei/Modena/index.php" >Modena</a></li>

                                                
                                                    </ul>

                                                </li>

                                                <li><a class="dropdown-item" href="https://www.ferrari.com/it-SM/news" >News</a></li>

                                            </ul>

                                        </li>
                                        
                                        <!--Brand-->
                                        <li  onclick="location.href='../index.php'" style="cursor: pointer; "  >
                                            
                                            <img style="cursor:pointer;" class="navbar-brand mx-5" src="../Vari/Ferrari1.png"  width="40px" height="55px" >

                                        </li>
                                        
                                
                                        <!--Sezione Store-->
                                        <li class="nav-item dropdown mx-5"   >

                                            <a class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Store</a>

                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" >

                                                <li><a class="dropdown-item" href="https://store.ferrari.com/it-it/?from=SH" >Online</a></li>
                                                <li><a class="dropdown-item" href="../Store/Fisico/index.php" >Fisico</a></li>
                                                
                                            </ul>

                                        </li>
                                    
                                        <!--Sezione Concessionario-->
                                        <li class="nav-item mx-5"  >
                                            <a class="nav-link" href="index.php" >Concessionario</a>
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
                                                $logout = "'../Account/Login/logout.php'" ;

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

                                <li onclick="location.href='../Innovazione-Eccellenza/index.php'" >Innovazione & Eccellenza</li>


                            </div>

                            <div class="col-sm-12 col-md-12">

                                <br/>
                                
                                <li onclick="location.href='../MyFerrari/index.php'">MyFerrari App</li>

                            </div>

                            <div class="col-sm-12 col-md-12">

                                <br/>
                                
                                <li onclick="location.href='../Contatti/index.php'">Contatti</li>

                            </div>
                            
                        </div>
                        


                        <!--Creo tabella di Icone Social-->
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


                

                //cerchio sulla mappa indica piu punti vicini
                var circle1 = L.circle([41.12,16.86], {color:"red", fillColor:'#f03',fillOpacity:0.5,radius:10,weight:15}).addTo(map) ;

                //PopUp cerchio
                circle1.bindPopup("<a style='text-decoration:none;color:red;font-size:15px;' href='https://www.grupporadicci.it/'>Radicci Automobili S.p.A. Bari<a/><br/>via Stoppelli, 6, BA, 70126, IT<br/>Tel:0805580880<br/>Email:caroli@grupporadicci.it<br/>") ;
                    

                var circle2 = L.circle([40.83,14.24], {color:"red", fillColor:'#f03',fillOpacity:0.5,radius:10,weight:15}).addTo(map) ;

                circle2.bindPopup("<a style='text-decoration:none;color:red;font-size:15px;' href='https://napoli.ferraridealers.com/it_it/'>Sa.Mo.Car S.p.A. Napoli<a/><br/>VIA SCARFOGLIO, 71/73, NA, 80125, IT<br/>Tel:081 2301712<br/>Email:a.napolitano@samocar.it") ;
                    

                var circle3 = L.circle([40.41,15.31], {color:"red", fillColor:'#f03',fillOpacity:0.5,radius:10,weight:15}).addTo(map) ;

                circle3.bindPopup("<a style='text-decoration:none;color:red;font-size:15px;' href='https://roma.ferraridealers.com/it_it/'>Cesarmeccanica Service S.r.l.<a/><br/>via R. Wenner (Zona Industriale), 56, SA, 84131, IT<br/>Tel:089/303040<br/>Email:a.cesareo@cesarmeccanica.com") ;
                    
                
                var circle4 = L.circle([41.93,12.59], {color:"red", fillColor:'#f03',fillOpacity:0.5,radius:10,weight:15}).addTo(map) ;

                circle4.bindPopup("<a style='text-decoration:none;color:red;font-size:15px;' href='https://roma.ferraridealers.com/it_it/'>Sa.Mo.Car S.p.A. Roma<a/><br/>via Smerillo, 20, RM, 00198, IT<br/>Tel:06/880911<br/>Email:info@samocar.it") ;
                    

                var circle5 = L.circle([37.5,15.08], {color:"red", fillColor:'#f03',fillOpacity:0.5,radius:10,weight:15}).addTo(map) ;

                circle5.bindPopup("<a style='text-decoration:none;color:red;font-size:15px;' href='https://ragusa.ferraridealers.com/it_it/'>Cronos S.C.A.R. S.p.A.<a/><br/>via A Grandi, 169, RG, 97100, IT<br/>Tel:+ 39 0932 226560<br/>Email:cronos@grupposcar.it") ;
                    
                
                var circle6 = L.circle([39.21,9.11], {color:"red", fillColor:'#f03',fillOpacity:0.5,radius:10,weight:15}).addTo(map) ;

                circle6.bindPopup("<a style='text-decoration:none;color:red;font-size:15px;' href='https://roma.ferraridealers.com/it_it/'>Special Car Group S.p.A<a/><br/>Via R. Sernagiotto, 16-30, CA, 09067, IT<br/>Tel:070241181<br/>Email:info@specialcargroup.com") ;
                    

                var circle7 = L.circle([43.48,13.21], {color:"red", fillColor:'#f03',fillOpacity:0.5,radius:10,weight:15}).addTo(map) ;

                circle7.bindPopup("<a style='text-decoration:none;color:red;font-size:15px;' href='https://ancona.ferraridealers.com/it_it/'>Radicci Ancona<a/><br/>Via Giorgio Umani, 6, AN, 60131, IT<br/>Tel:0712868608<br/>Email:info@grupporadicci.it") ;

                   
             
                var circle8 = L.circle([45.46,9.19], {color:"red", fillColor:'#f03',fillOpacity:0.5,radius:10,weight:30}).addTo(map) ;

                circle8.bindPopup("<a style='text-decoration:none;color:red;font-size:15px;' href='https://milano.ferraridealers.com/it_it/'>Rossocorsa S.r.l. - Showroom<a/><br/> v.le Di Porta Vercellina, 16, MI, 20123, IT<br/>Tel:02/43995497<br/>Email:servizioclienti@rossocorsa.it<br/><a style='text-decoration:none;color:red;font-size:15px;' href='https://www.gtomotors.it/'>Gto Motors S.r.l.<a/><br/>via Novara, 20, VA, 21047, IT<br/>Tel:02/9606960<br/>Email:apizzi@gtomotors.it<br/><a style='text-decoration:none;color:red;font-size:15px;' href='https://milano.ferraridealers.com/it_it/'>Rosso Monza Di Emilio Gesuita<a/><br/>via Salvo D'Acquisto, 29, MI, 20049, IT<br/>Tel:039/6203066<br/>Email:accettazione@rossomonza.mi.it") ;


                    
                var circle9 = L.circle([49.81,15.47], {color:"red", fillColor:'#f03',fillOpacity:0.5,radius:10,weight:30}).addTo(map) ;

                circle9.bindPopup("<a style='text-decoration:none;color:red;font-size:15px;' href='https://praha.ferraridealers.com/en_gb/'>Scuderia Praha a.s.<a/><br/>Čistovická, 1707/98, 163 00, CZ<br/>Tel:+420 233 311 411<br/>Email:servis@scuderiapraha.cz<br/><a style='text-decoration:none;color:red;font-size:15px;' href='https://katowice.ferraridealers.com/en_gb/'>Ferrari Katowice<a/><br/>Bochenskiego, 109, 40816, PL<br/>Tel:+48327973435<br/>Email:info@ferrarikatowice.pl") ;

                    
                    

                var circle10 = L.circle([40.03,-7.88], {color:"red", fillColor:'#f03',fillOpacity:0.5,radius:10,weight:15}).addTo(map) ;

                circle10.bindPopup("<a style='text-decoration:none;color:red;font-size:15px;' href='https://lisboa.ferraridealers.com/en_gb/'>FBO Motor Sports Lisboa<a/><br/>Rua Artilharia Um, 105A, 1070-012, PT<br/>Tel:00351218298540<br/>Email:jrfilipe@ferrariportugal.pt<br/><a style='text-decoration:none;color:red;font-size:15px;' href='https://lisboa.ferraridealers.com/en_gb/'>Ferrari Porto<a/><br/>Rua Boavista, 880, 4050-106, PT<br/>Tel:+351224107980<br/>Email:fmmagalhaes@ferrariportugal.pt") ;
                    

                
                var circle11 = L.circle([51.50,-0.12], {color:"red", fillColor:'#f03',fillOpacity:0.5,radius:10,weight:30}).addTo(map) ;

                circle11.bindPopup("<a style='text-decoration:none;color:red;font-size:15px;' href='https://london-joemacariservicing.ferraridealers.com/en_gb/'>Joe Macari Servicing<a/><br/>Kimber Road, 54, The Kimber Centre, SW18 4PP, GB<br/>Tel:+44 (0) 2088770157<br/>Email:service@joemacariservice.com<br/><a style='text-decoration:none;color:red;font-size:15px;' href='https://london-hrowen.ferraridealers.com/en_gb/'>H.R. Owen Ferrari Mayfair<a/><br/>Berkeley Square, 15, W1J 6EG, GB<br/>Tel:02035148647<br/>Email:ferrarilondon@hrowen.co.uk<br/><a style='text-decoration:none;color:red;font-size:15px;' href='https://london-maranello.ferraridealers.com/en_gb/'>Maranello Sales<a/><br/>Service Centre, Ten Acre Lane, Surrey, TW20 8RJ, GB<br/>Tel:01784 558422<br/>Email:maranello@sytner.co.uk") ;

                    

                var circle12 = L.circle([51.22,6.77], {color:"red", fillColor:'#f03',fillOpacity:0.5,radius:10,weight:20}).addTo(map) ;

                circle12.bindPopup("<a style='text-decoration:none;color:red;font-size:15px;' href='https://duesseldorf.ferraridealers.com/de_de/'>LUEG Sportivo GmbH<a/><br/>Düsseldorfer Straße, 217, 40667, DE<br/>Tel:+49(0)2132 - 91540<br/>Email:info@ferrari-lueg.de<br/><a style='text-decoration:none;color:red;font-size:15px;' href='https://koeln.ferraridealers.com/de_de/'>Maranello Motors GmbH<a/><br/>Württembergische Allee, 4, 50858, DE<br/>Tel:0049/221/80130-100<br/>Email:info@maranello-motors.de<br/><a style='text-decoration:none;color:red;font-size:15px;' href='https://starnberg.ferraridealers.com/de_de/'>AutoToyStore GmbH<a/><br/>Gautinger Strasse 8, Bavaria, 82319, DE<br/>Tel:+49 8151 446330<br/>Email:info@autotoystore.de") ;

                    

                var circle13 = L.circle([40.41,-3.70], {color:"red", fillColor:'#f03',fillOpacity:0.5,radius:10,weight:20}).addTo(map) ;

                circle13.bindPopup("<a style='text-decoration:none;color:red;font-size:15px;' href='https://madrid.ferraridealers.com/es_es/'>Santogal Automóviles, S.L.U.<a/><br/>Avenida de Burgos, 114, 114, 28050, ES<br/>Tel:+34910488170<br/>Email:fvvillegas@santogal.es<br/><a style='text-decoration:none;color:red;font-size:15px;' href='https://barcelona.ferraridealers.com/es_es/'>Cars Gallery Iberia, S.L.<a/><br/>Pso. de la Zona Franca, 10-12, 08038, ES<br/>Tel:+34 93 289 63 63<br/>Email:info@carsgallery.es") ;

                    
                
                var circle14 = L.circle([33.89,35.47], {color:"red", fillColor:'#f03',fillOpacity:0.5,radius:10,weight:20}).addTo(map) ;

                circle14.bindPopup("<a style='text-decoration:none;color:red;font-size:15px;' href='https://beirut.ferraridealers.com/en_gb/'>Scuderia Lebanon<a/><br/>Dora Seaside Road, na, Consulting Clinics Beirut, NA, LB<br/>Tel:+961 3002954<br/>Email:Showroom@scuderialebanon.com<br/><a style='text-decoration:none;color:red;font-size:15px;' href='https://beirut.ferraridealers.com/en_gb/'>Mediterranean Car Agency Ltd<a/><br/>Avshalom Gissin Street 98, 4922399, Israel, IL<br/>Tel:+97237910002<br/>Email:bennyr@samelet.com") ;

                    

                var circle15 = L.circle([37.98,23.72], {color:"red", fillColor:'#f03',fillOpacity:0.5,radius:10,weight:10}).addTo(map) ;

                circle15.bindPopup("<a style='text-decoration:none;color:red;font-size:15px;' href='https://athina.ferraridealers.com/en_gb/'>Genesis S.A.<a/><br/>Viltanioti, 36, 14564, GR<br/>Tel:+30 2106109121<br/>Email:aftersales@genesisferrari.gr") ;

                    

                var circle16 = L.circle([42.69,23.32], {color:"red", fillColor:'#f03',fillOpacity:0.5,radius:10,weight:10}).addTo(map) ;

                circle16.bindPopup("<a style='text-decoration:none;color:red;font-size:15px;' href='https://sofia.ferraridealers.com/en_gb/'>Auto Italia EAD<a/><br/>Christopher Columbus blvd., 43, Bulgaria, 1592, BG<br/>Tel:+359 899 992 527<br/>Email:ferrari@autoitalia.bg<br/><a style='text-decoration:none;color:red;font-size:15px;' href='https://bucuresti.ferraridealers.com/en_gb/'>Forza Rossa<a/><br/>Calea Bucurestilor, 91 A, ILFOV, 075100, RO<br/>Tel:+40 213 139 296<br/>Email:ferrari@forzarossa.ro") ;


                    

                var circle17 = L.circle([33.57,-7.58], {color:"red", fillColor:'#f03',fillOpacity:0.5,radius:10,weight:10}).addTo(map) ;

                circle17.bindPopup("<a style='text-decoration:none;color:red;font-size:15px;' href='https://casablanca.ferraridealers.com/fr_fr/'>Univers Motors Premium<a/><br/>Bd Moulay Slimane, 112, 20590, MA<br/>Tel:+212660149111<br/>Email:ferrari@universmotors.com") ;

                    

                var circle18 = L.circle([52.23,21], {color:"red", fillColor:'#f03',fillOpacity:0.5,radius:10,weight:10}).addTo(map) ;

                circle18.bindPopup("<a style='text-decoration:none;color:red;font-size:15px;' href='https://warszawa.ferraridealers.com/en_gb/'>Ferrari Warszawa<a/><br/>Wirazowa, 21, 02158, PL<br/>Tel:+48226277670<br/>Email:info@ferrariwarszawa.com") ;


                var circle19 = L.circle([48.85,2.35], {color:"red", fillColor:'#f03',fillOpacity:0.5,radius:10,weight:15}).addTo(map) ;

                circle19.bindPopup("<a style='text-decoration:none;color:red;font-size:15px;' href='https://lecoq-paris.ferraridealers.com/fr_fr/'>Ferrari Lecoq Paris<a/><br/>rue Casimir Perier, 105, 95870, FR<br/>Tel:+33134113411<br/>Email:ferrari@lecoq-paris.com<br/><a style='text-decoration:none;color:red;font-size:15px;' href='https://paris.ferraridealers.com/fr_fr/'>Charles Pozzi Levallois<a/><br/>Rue Aristide Briand, 107, 92300, FR<br/>Tel:+33 (0)1 47 39 96 50<br/>Email:contact@charles-pozzi.fr") ;


                var circle12 = L.circle([41.01,28.94], {color:"red", fillColor:'#f03',fillOpacity:0.5,radius:10,weight:15}).addTo(map) ;

                circle12.bindPopup("<a style='text-decoration:none;color:red;font-size:15px;' href='https://istanbul.ferraridealers.com/en_gb/'><a/>Fer Mas Oto Ticaret A.S.<br/>FSM Mah. Ataturk Cad., 7, Sariyer, 34470, TR<br/>Tel:902123235600<br/>Email:info@fer-mas.com.tr") ;

                    
                    

            </script>

            
    </body>
    
</html>