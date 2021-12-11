<?php

    //avvia la sessione quindi ricorda se loggato oppure no
    session_start() ;


?>

<html>
    <head>

        <title>MyFerrari </title>

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



    </head>

    <body>


        <!--Contenitore elementi -->
        <div class="container-fluid" style=" padding-left: 0; padding-right: 0;" >

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
                                            <a class="nav-link" href="../Concessionario/index.php" >Concessionario</a>
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
                                
                                <li onclick="location.href='index.php'">MyFerrari App</li>

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

                
                <!--Sezione Testo e Immagini-->
                <div class="row text-center" style="background-image: URL(../Vari/MyFerrariApp.jpg); background-repeat: no-repeat; background-size: cover; width: 100%; height: 100%; margin-left:0  ">

                    <!--Viene creata una tabella e popolata con le colonne ci sono testo e immagini in esse-->
                    <div class="col-sm-12 col-md-12" style="font-size: 25px; color:white; ">

                        
                        <br/>

                        MY FERRARI APP

                       
                    
                    </div>


                    <!-- Bottoni App store e Google Play -->
                    <div class="col-sm-12 col-md-4 offset-md-2" >

                        <button type="button" id="b1" onclick="location.href='https://play.google.com/store/apps/details?id=ferrari.ccp.mobile'" class="btn btn-outline-secondary mx-2">GOOGLE PLAY</button>

                    </div>

                    <div class="col-sm-12 col-md-4" >

                        <button type="button" id="b2" onclick='location.href="https://apps.apple.com/us/app/myferrari/id1452271470"' class="btn btn-outline-secondary mx-2">APP STORE</button>

                    </div>

                </div>


                <br/>
                <br/> 
                <br/> 

                
                <div class="row" style="width: 100%;">

                    <div class="col-sm-12 col-md-4 offset-md-4" style="font-size: 25px;">

                        <Strong>TUTTO IL MONDO FERRARI A PORTATA DI MANO</Strong>

                        <br/>
                        <br/> 
                        

                        <p style="font-size: 18px; word-wrap: break-word; ">
                            La nuova app MyFerrari, creata appositamente per i clienti Ferrari, è in grado di fornire funzionalità e servizi che si interfacceranno
                            direttamente con  Maranello. In questo modo chi la utilizza, dopo aver ottenuto le proprie credenziali d’accesso, può avere un quadro reale 
                            dei veicoli che possiede, essere informato costantemente sulle attività che ha compiuto o compirà con Ferrari e la sua rete oltre ad avere 
                            l’accesso diretto a tutti i contenuti digitali dei siti Ferrari. 
                            <a class="font-weight-bold" href="../Account/Registrazione/index.php" style="color: red;"><Strong>Registrati a MyFerrari</Strong></a>
                            </p>
                    
                    </div>

                    
                </div>

                <br/>
                <br/> 
                <br/> 
                

                <div class="row " style="width: 100%;">

                    <div class="col-sm-12 col-md-4" style="font-size: 25px;">

                        <Strong>SINCRONIZZATI CON GLI EVENTI PIÙ ESCLUSIVI</Strong>

                        <br/>
                        <br/> 
                        

                        <p style="font-size: 18px; word-wrap: break-word;  ">
                            Visualizza gli eventi Ferrari e sincronizzali con la tua agenda personale con un semplice click
                        </p>
                    
                    </div>

                    <div class="col-sm-12 col-md-4" style="font-size: 25px;">

                        <Strong>GESTISCI IL TUO GARAGE</Strong>

                        <br/>
                        <br/>

                        <p style="font-size: 18px; word-wrap: break-word;  ">
                            Grazie all’app potrai gestire il tuo parco vetture aggiungendo i nuovi modelli, personalizzando le immagini oltre che caricare tutti i tuoi 
                            documenti in una volta.
                        </p>
                    
                    </div>

                    <div class="col-sm-12 col-md-4" style="font-size: 25px;">

                        <Strong>CONFIGURA LA TUA PROSSIMA FERRARI</Strong>

                        <br/>
                        <br/>

                        <p style="font-size: 18px; word-wrap: break-word;  ">
                            Potrai configurare la Ferrari dei tuo sogni e condividerla subito con il tuo concessionario per avere una consulenza dedicata.
                        </p>
                    
                    </div>

                </div>

            
                    <br/>
                    <br/> 
                    <br/> 
                    <br/>
                    

                <div class="row" style="width: 100%;">

                    <div class="col-sm-12 col-md-4" style="font-size: 25px;">

                        <Strong>SEMPRE CONNESSO AL TUO CONCESSIONARIO</Strong>

                        <br/>
                        <br/>

                        <p style="font-size: 18px; word-wrap: break-word;  ">
                            Sarai sempre connesso al tuo concessionario di fiducia oltre a poter localizzare facilmente altri concessionari in qualunque parte del mondo.
                        </p>
                    
                    </div>

                    <div class="col-sm-12 col-md-4" style="font-size: 25px;">

                        <Strong>SCOPRI TUTTO IL MONDO FERRARI</Strong>

                        <br/>
                        <br/>

                        <p style="font-size: 18px; word-wrap: break-word;  ">
                            Potrai immergiti nel mondo Ferrari grazie a tutti gli aggiornamenti sui prodotti, gli eventi, le gare, le notizie, oltre a video e foto esclusivi 
                            sempre a tua disposizione.
                        </p>
                    
                    </div>

                    <div class="col-sm-12 col-md-4" style="font-size: 25px;">

                        <Strong>OFFERTE SPECIALI NELLO STORE ONLINE</Strong>

                        <br/>
                        <br/>

                        <p style="font-size: 18px; word-wrap: break-word;  ">
                            Grazie all’app potrai usufruire del 20% di sconto su tutta la gamma di prodotti dello Scuderia Ferrari Online Store, oltre a ricevere anteprime su 
                            articoli esclusivi per i nostri clienti.
                        </p>
                    
                    </div>


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

    </body>
    
</html>