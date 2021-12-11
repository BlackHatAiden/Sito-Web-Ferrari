<?php

    //avvia la sessione quindi ricorda se loggato oppure no
    session_start() ;

?>

<html>
    <head>

        <title>Innovazione & Eccellenza </title>

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

                                <li onclick="location.href='index.php'" >Innovazione & Eccellenza</li>


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


                
                <!--Sezione Testo e Immagini-->
                <div class="row " style="background-image: URL(../Vari/innovazione0.jpg); width: 100%; margin-left:0; background-size: cover; ">

                    <!--Viene creata una tabella e popolata con le colonne ci sono testo e immagini in esse-->
                    <div class="col-sm-12 col-md-4 offset-md-4 text-center" style="color: red; font-size: 25px;">

                        <Strong>Unici</Strong>

                        <br/>
                        

                        <p style="font-size: 18px; color: white; word-wrap: break-word;">

                            Essere Ferrari significa far parte di una Squadra Unica, proiettata verso il futuro, in cui le Persone sono il Patrimonio più importante.
                            Insieme ci misuriamo nelle competizioni e nei mercati di tutto il mondo.
                            Insieme abbiamo scritto Vision, Mission e Valori che sono l’Essenza del sentirsi Ferrari e che ci guidano nell’affrontare le sfide quotidiane.
                            
                        </p>
                    
                    </div>

                    

                    <div class="col-sm-12 col-md-7" style="color: red; font-size: 25px;  ">

                        <br/>
                        <br/>

                        
                        <Strong>Persona e team</Strong>

                        
                        <p style="font-size: 18px; color: white; word-wrap: break-word; ">

                            Le Persone sono il Nostro Patrimonio più importante e possono raggiungere risultati eccellenti solo lavorando in Team in un'azienda che mette al primo posto 
                            il Merito, la Competenza e la crescita professionale. Viviamo tutti un forte Senso di Appartenenza, amiamo la Sfida e dobbiamo ricercare insieme, 
                            quotidianamente, il Miglioramento Continuo.
                            
                        </p>
                    
                    </div>

                    <!--Sezione immagine a destra testo-->
                    <div class="col-sm-12 col-md-2 offset-md-2" >
                        <img src="../Vari/innovazione1.jpg" class="img-fluid" style="width: 95%;">
                    </div>

                    <div class="col-sm-12 col-md-7" style="color: red; font-size: 25px;  ">

                        <br/>
                        <br/>

                        
                        <Strong>Emozione</Strong>

                        
                        <p style="font-size: 18px; color: white; word-wrap: break-word; ">

                            Ferrari si vive con il cuore, con entusiasmo ed orgoglio.
                            Le sfide di ogni giorno ci ricordano che siamo parte di una realtà unica e straordinaria che suscita in tutti grandi Emozioni.
                            
                        </p>
                    
                    </div>

                    <div class="col-sm-12 col-md-2 offset-md-2" >
                        <br/>
                        <br/>
                        <img src="../Vari/innovazione2.jpg" class="img-fluid" style="width: 95%;">
                    </div>

                    <div class="col-sm-12 col-md-6" style="color: red; font-size: 25px;  height: 300px; ">

                        <br/>
                        <br/>

                        
                        <Strong>Integrità</Strong>

                        
                        <p style="font-size: 18px; color: white; word-wrap: break-word; ">

                            Siamo consapevoli di appartenere ad un'Azienda universalmente conosciuta ed apprezzata e ci impegniamo ad osservare un comportamento rispettoso, onesto, leale
                            e coerente.Ci adoperiamo per garantire un futuro sostenibile.
                            
                        </p>
                    
                    </div>

                    <div class="col-sm-12 col-md-2 offset-md-3" >

                        <br/>
                        <br/>
                        <img src="../Vari/innovazione3.jpg" class="img-fluid" style="width: 95%;">

                    </div>


                </div>

                <div class="row " style="background-image: URL(../Vari/innovazione00.jpg); background-repeat: no-repeat; background-size: cover; width: 100%; margin-left:0   ">

                    
                    <div class="col-sm-12 col-md-7" style="color: red; font-size: 25px;  ">

                        <br/>
                        <br/>

                        
                        <Strong>Tradizione e innovazione</Strong>

                        
                        <p style="font-size: 18px; color: white; word-wrap: break-word; ">

                            Rappresentiamo una realtà dove Tradizione e Innovazione si fondono continuamente per rinnovare il "mito Ferrari".
                            Dalla storia aziendale e da un ambiente internazionale e multiculturale derivano la Nostra ricchezza e la Nostra capacità di coniugare la ricerca di soluzioni 
                            tecnologiche estreme con l'artigianalità a "misura d'uomo".Siamo Innovativi per Vocazione.
                                
                        </p>
                    
                    </div>

                    <div class="col-sm-12 col-md-2 offset-md-2" >

                        <br/>
                        <br/>
                        <img src="../Vari/innovazione4.jpg" class="img-fluid" style="width: 95%;">

                    </div>

                    <div class="col-sm-12 col-md-7" style="color: red; font-size: 25px;  ">

                        <br/>
                        <br/>

                        <Strong>Passione ed eccellenza</Strong>

                        
                        <p style="font-size: 18px; color: white; word-wrap: break-word; ">

                            Siamo animati dalla Passione per il Prodotto e per la Competizione. Porsi obiettivi ambiziosi e garantire la piena soddisfazione dei Clienti sono la nostra 
                            Sfida.Osserviamo con attenzione ed apertura il mondo esterno per accrescere le Nostre Competenze e ci impegniamo a perseguire quotidianamente l'Eccellenza.
                                
                        </p>
                    
                    </div>

                    <div class="col-sm-12 col-md-2 offset-md-2" >
                        <br/>
                        <br/>
                        <img src="../Vari/innovazione5.jpg" class="img-fluid" style="width: 95%;">
                    </div>

                    <div class="col-sm-12 col-md-7" style="color: red; font-size: 25px;  height: 500px; ">

                        <br/>
                        <br/>

                        
                        <Strong>Icona di stile,lusso, velocità</Strong>

                        
                        <p style="font-size: 18px; color: white; word-wrap: break-word; ">

                            Il Cavallino Rampante è ovunque simbolo di lusso, esclusività, performance, design, qualità tutta italiana.
                            <br/>
                            Un mito fondato su decenni di successi sportivi e sullo stile delle nostre auto, fonte di ispirazione per milioni di estimatori.
                            <br/>
                            Noi sosteniamo il mito e il brand Ferrari organizzando numerose iniziative a Maranello e nel mondo per i nostri clienti e fan, ma anche attraverso altre 
                            operazioni, come la stipulazione di accordi di licenza con partner selezionati per lo sviluppo di una linea di prodotti venduti nei negozi Ferrari e 
                            l’allestimento di musei Ferrari e parchi a tema.
                            
                        </p>
                    
                    </div>

                    <div class="col-sm-12 col-md-2 offset-md-2" >

                        <br/>
                        <br/>
                        <img src="../Vari/innovazione6.jpg" class="img-fluid" style="width: 95%;">

                    </div>

                    
                </div>


                <div class="row " style="background-image: URL(../Vari/innovazione000.jpg); background-repeat: no-repeat; background-size: cover; width: 100%; margin-left:0  ">

                    
                    <div class="col-sm-12 col-md-7" style="color: red; font-size: 25px;  ">

                        <br/>
                        <br/>

                        
                        <Strong>RACING</Strong>

                        
                        <p style="font-size: 18px; color: white; word-wrap: break-word; ">

                            <br/>
                            

                            <Strong>Una presenza da record</Strong>
                            <br/>


                            Abbiamo partecipato a oltre 900 Gran Premi e siamo l’unico costruttore di automobili ad aver preso parte a tutte le edizioni del Campionato del Mondo di 
                            Formula 1.

                        </p>
                    
                    </div>

                    <div class="col-sm-12 col-md-2 offset-md-2" >

                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <img src="../Vari/innovazione7.jpg" class="img-fluid" style="width: 95%; height: 60%;">

                    </div>

                    <div class="col-sm-12 col-md-7" style="color: red; font-size: 25px;  ">

                        <br/>
                        <br/>

                        <Strong>Simbolo di eccellenza e di esclusività</Strong>

                        
                        <p style="font-size: 18px; color: white; word-wrap: break-word; ">

                            <br/>
                            <br/>

                            <Strong>Una presenza da record</Strong>


                            Abbiamo partecipato a oltre 900 Gran Premi e siamo l’unico costruttore di automobili ad aver preso parte a tutte le edizioni del Campionato del Mondo di 
                            Formula 1.

                        </p>
                    
                    </div>

                    <div class="col-sm-12 col-md-2 offset-md-2" >

                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <img src="../Vari/innovazione8.jpg" class="img-fluid" style="width: 95%; height: 60%;">

                    </div>

                    <div class="col-sm-12 col-md-6" style="color: red; font-size: 25px;  height: 500px; ">

                        <br/>
                        <br/>

                        
                        <Strong>Sostenibilità</Strong>

                        
                        <p style="font-size: 18px; color: white; word-wrap: break-word; ">

                            Produciamo vetture uniche per prestazioni, innovazioni, tecnologia, piacere di guida e design. Auto che in tutto il mondo rappresentano il più autorevole 
                            esempio di “Made in Italy”.

                            <br/>

                            "IO CREDO CHE LE FABBRICHE SIANO FATTE DI MACCHINE, DI MURI E DI UOMINI.LA FERRARI È FATTA PRIMA DI TUTTO DI UOMINI” ENZO FERRARI</strong>
                            <br/>
                            Dietro i nostri successi ci sono uomini e donne.4.556 persone che rappresentano la nostra risorsa più importante.
                            <br/>
                            Fondiamo la nostra leadership sulla passione, la determinazione, l’impegno, il talento, la competenza e lo spirito di squadra dei nostri manager, 
                            meccanici, designer, ingegneri, piloti.
                                
                        </p>
                    
                    </div>

                    <div class="col-sm-12 col-md-2 offset-md-3" >

                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <img src="../Vari/innovazione9.jpg" class="img-fluid" style="width: 95%; height: 30%;">

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