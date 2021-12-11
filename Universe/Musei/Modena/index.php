<?php

    //avvia la sessione quindi ricorda se loggato oppure no
    session_start() ;

?>

<html>
    <head>

        <title>Modena </title>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">


        <!--Link font-awesome per icone social-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>


        <!--Link e Script Bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>


        <script type="text/javascript" lang="javascript" src="../../../js/bootstrap.min.js"></script>

        <link rel="stylesheet" type="text/css" href="../../../css/bootstrap.min.css"/>


        <!--Script JavaScript-->
        <script type="text/javascript" lang="javascript" src="../../../main.js"></script>

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
                                                <img src="../../../Vari/immagineNera.png"  width="30px" height="30px" >
                                            </a>

                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" >
                                                
                                                <?php

                                                    //se utente non loggato
                                                    if (!isset($_SESSION["nome"]))
                                                    {
                                                        //esistono sezioni login e registrazione
                                                        echo '<li><a class="dropdown-item" href="../../../Account/Login/index.php" >Login</a></li>
                                                            <li><a class="dropdown-item" href="../../../Account/Registrazione/index.php">Registrazione</a></li>';
                                                    }
                                                    else
                                                    {
                                                        //esiste sezione gestione account
                                                        echo '<li><a class="dropdown-item" href="../../../Account/Gestione/index.php">Gestione Account</a></li>';
                                                    }

                                                ?>
                                                
                                            </ul>

                                        </li>
                                    
                                
                                        
                                        <!--Sezione Modelli-->
                                        <li class="nav-item dropdown mx-5"  >

                                            <a class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Modelli</a>

                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" >

                                                <li><a class="dropdown-item" href="../../../Modelli/SF21/index.php" >SF21</a></li>
                                                <li><a class="dropdown-item" href="../../../Modelli/Ferrari-Roma/index.php" >Ferrari Roma</a></li>
                                                <li><a class="dropdown-item" href="../../../Modelli/SF90-Spyder/index.php" >SF90 Spyder</a></li>
                                                <li><a class="dropdown-item" href="../../../Modelli/SF90-Stradale/index.php" >SF90 Stradale</a></li>

                                            </ul>

                                        </li>

                                
                                    
                                        <!--Sezione Universe-->
                                        <li class="nav-item dropdown mx-5"  >

                                            <a class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Universe</a>

                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" >

                                                <li><a class="dropdown-item" href="../../Storia/index.php" >Storia</a></li>

                                            
                                                <!--Sezione Musei-->
                                                <li class="dropdown-submenu">

                                                    <a  class="dropdown-item">Musei</a>

                                                    <ul class="dropdown-menu">

                                                        <li><a class="dropdown-item" href="../Maranello/index.php" >Maranello</a></li>

                                                        <li><a class="dropdown-item" href="index.php" >Modena</a></li>

                                                
                                                    </ul>

                                                </li>

                                                <li><a class="dropdown-item" href="https://www.ferrari.com/it-SM/news" >News</a></li>

                                            </ul>

                                        </li>
                                        
                                        <!--Brand-->
                                        <li  onclick="location.href='../../../index.php'" style="cursor: pointer; "  >
                                            
                                            <img style="cursor:pointer;" class="navbar-brand mx-5" src="../../../Vari/Ferrari1.png"  width="40px" height="55px" >

                                        </li>
                                        
                                
                                        <!--Sezione Store-->
                                        <li class="nav-item dropdown mx-5"   >

                                            <a class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Store</a>

                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" >

                                                <li><a class="dropdown-item" href="https://store.ferrari.com/it-it/?from=SH" >Online</a></li>
                                                <li><a class="dropdown-item" href="../../../Store/Fisico/index.php" >Fisico</a></li>
                                                
                                            </ul>

                                        </li>
                                    
                                        <!--Sezione Concessionario-->
                                        <li class="nav-item mx-5"  >
                                            <a class="nav-link" href="../../../Concessionario/index.php" >Concessionario</a>
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
                                                $logout = "'../../../Account/Login/logout.php'" ;

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

                                <li onclick="location.href='../../../Innovazione-Eccellenza/index.php'" >Innovazione & Eccellenza</li>


                            </div>

                            <div class="col-sm-12 col-md-12">

                                <br/>
                                
                                <li onclick="location.href='../../../MyFerrari/index.php'">MyFerrari App</li>

                            </div>

                            <div class="col-sm-12 col-md-12">

                                <br/>
                                
                                <li onclick="location.href='../../../Contatti/index.php'">Contatti</li>

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
                <div class="row" style="background-image: URL(../../../Vari/MuseiModena1.jpg); height: 100%; width: 100%; margin-left:0">

                    <!--Viene creata una tabella e popolata con le colonne ci sono testo e immagini in esse-->
                    <div class="col-sm-12 col-md-12 text-center" style="font-size: 25px; color: white; ">

                       
                        <Strong>Dove nasce la leggenda</Strong>

                    </div>

                    <div class="col-sm-12 col-md-12 text-center" style="font-size: 30px; color: white;">

                        <Strong>MUSEO ENZO FERRARI MODENA</Strong>

                    </div>

                </div>

                

                <!--Sezione Testo e Immagini-->
                <div class="row " style="width: 100%; margin-left:0 ">

                    <!--Viene creata una tabella e popolata con le colonne ci sono testo e immagini in esse-->
                    <div class="col-sm-12 col-md-12 " style="color: red; font-size: 25px; background-image: URL(../../../Vari/EnzoFerrari.jpg); background-size: cover;  ">

                        <br/>
                        <br/>

                        
                        <Strong>IL MUSEO NON È SOLO UN MUSEO, MA UNO SPETTACOLO COINVOLGENTE ED EMOZIONANTE</Strong>

                        <p style="font-size: 18px; color: black; word-wrap: break-word; ">

                            Quello dedicato ad Enzo Ferrari non è solo un museo.
                            La Fondazione Casa Natale di Enzo Ferrari – Museo nasce nel 2003 con lo scopo di valorizzare la tradizione motoristica del territorio modenese e realizzare a 
                            Modena un complesso museale dedicato alla figura di Enzo Ferrari, inaugurato il 10 marzo 2012 e ora gestito da Ferrari spa.
                            <br/>
                            La Fondazione è un organismo di partecipazione e come tale viene sostenuta nella sua attività dai soci fondatori (che sono il Comune di Modena, la Provincia
                            di Modena, la Camera di Commercio, Industria e Artigianato di Modena, l’Automobile Club d’Italia e Ferrari spa), dalla Fondazione Cassa di Risparmio di 
                            Modena e dagli aderenti che condividono finalità e obiettivi della Fondazione.
                            <br/>
                            Gli aderenti sono aziende, organismi, enti, associazioni di diversa natura: vi sono operatori specifici del settore turistico, aziende agroalimentari, 
                            meccaniche, manifatturiere, del settore multiutility e delle assicurazioni, studi professionali. Vi sono anche organismi di carattere associativo e 
                            cooperativo con una larghissima base sociale.
                            <br/>
                            La rete di relazioni resa possibile dalla partecipazione degli aderenti congiuntamente alle risorse che gli stessi conferiscono alla Fondazione fa sì che 
                            quest’ultima prosegua nell’attività di valorizzazione del patrimonio motoristico modenese in un’ottica di integrazione con il territorio e le proprie realtà 
                            economiche e sociali.
                            
                            
                        </p>

                    </div>

                    <div class="col-sm-12 col-md-12" style="color: red; font-size: 25px; background-image: URL(../../../Vari/musei3.jpg); background-size: cover;  ">

                        <br/>
                        <br/>

                        
                        <Strong>SERVIZI PER IL VISITATORE</Strong>

                        <p style="font-size: 18px; color: black; word-wrap: break-word; ">

                            Per i più piccoli è disponibile un fasciatoio. Le carrozzine, durante la visita, possono essere lasciate in apposito spazio custodito.
                            <br/>
                            Il Museo è completamente accessibile ai visitatori disabili.
                            <br/>
                            Il Museo mette a disposizione, in affitto, biciclette modello uomo e donna ideali per 
                            visitare il caratteristico centro di Modena (raggiungibile su piste ciclabili in pochi minuti) o spingersi fino a Maranello per visitare l’altro Museo 
                            Ferrari. Per chi arriva in bici è a disposizione una rastrelliera all’interno dell’area museale.
                            <br/>
                            Disponibile per i visitatori un parcheggio riservato e gratuito in via Giuseppe Soli 101.
                            <br/>
                            Il Museo mette gratuitamente a disposizione divertenti cucce a forma di Ferrari, dove lasciare i cani durante la visita. Le cucce sono protette, 
                            all’aperto nel giardino del Museo ed all’ombra, e dotate di ciotola per l’acqua. Tre le dimensioni adatte a cani di tutte le taglie.
                            <br/>
                            All’interno del Museo sono ammesse fotografie e riprese amatoriali per uso personale. Per video e immagini professionali è necessario invece inviare 
                            una richiesta di autorizzazione a <strong>@ferrari.com</strong>
                            <br/>
                            l Museo ha stipulato accordi sul territorio con altre strutture museali, alberghi e ristoranti, in modo da offrire condizioni agevolate di soggiorno a
                            tutti i visitatori e pacchetti speciali per itinerari sul territorio modenese in collaborazione con Modenatur.
                                
                            
                        </p>

                    </div>

                    <div class="col-sm-12 col-md-12" style="color: red; font-size: 25px; background-image: URL(../../../Vari/musei4.jpg); background-size: cover;  ">

                        <br/>
                        <br/>

                        
                        <Strong>IL MUSEO</Strong>

                        <p style="font-size: 18px; color: black; word-wrap: break-word; ">

                            Nell’avveniristico padiglione di oltre 2500 metri quadrati, oltre ad ammirare le automobili esposte, si assiste ad uno spettacolo che racconta, 
                            attraverso un filmato avvincente, la magica storia dei 90 anni di vita di Enzo Ferrari. Dal bambino, che all’inizio del ‘900 scopre le corse, al pilota, 
                            dall’animatore della Scuderia al costruttore e ai suoi trionfi. 
                            A questo tuffo nell’emozione, si affianca, nell’officina del padre di Enzo ora perfettamente restaurata, il Museo dei Motori Ferrari. L’area è divisa in 
                            cinque settori: quello dei motori a basso frazionamento, da 1 a 6 cilindri; quello dei classici 12 cilindri; quello degli 8; quello dei turbo; e, infine, 
                            quello della Formula 1.
                            <br/>
                            Nella struttura sono visitabili anche alcune stanze della casa dove Enzo nacque nel 1898, e a completare l’offerta sono a disposizione una saletta cinema, 
                            un raffinato ristorante e un corner Ferrari Store.
                            <br/>
                            Perché il sogno vissuto possa essere trasmesso a tanti amici, la mostra invita a fotografare e fotografarsi, postando le foto usando 
                            hastag MuseiFerrariExperience o l'account <strong>@MyFerrariApp</strong>.
                                    
                            
                        </p>

                    </div>

                    <div class="col-sm-12 col-md-12" style="color: red; font-size: 25px; background-image: URL(../../../Vari/musei5.jpg); background-size: cover;  ">

                        <br/>
                        <br/>

                        
                        <Strong>UN ESEMPIO MONDIALE DI ARCHITETTURA</Strong>

                        <p style="font-size: 18px; color: black; word-wrap: break-word; ">

                            È l’ultima grande opera del geniale architetto Jan Kaplicky dello studio londinese Future Systems.
                            <br/>
                            Il grande padiglione che adotta  soluzioni innovative nell’ambito del rispetto dell’ambiente, copre senza colonne né ostacoli i 5 mila metri quadrati 
                            di esposizione.
                            <br/>
                            Chi entra ha l’impressione di accedere in un tempio consacrato all’automobile e alla sua storia, con un’architettura ispirata ai cofani delle vetture 
                            da corsa degli anni ‘50. 
                            <br/>
                            Uno spazio unico, totalmente bianco, che ogni 50 minuti, si trasforma in una avvolgente sala di proiezione dove, dal soffitto alle pareti, scorrono le 
                            immagini degli uomini e della storia della Ferrari.
                            
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