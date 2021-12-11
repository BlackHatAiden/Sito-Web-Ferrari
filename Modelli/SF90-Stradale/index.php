<?php

    //avvia la sessione quindi ricorda se loggato oppure no
    session_start() ;

?>

<html>
    <head>

        <title>SF90 Stradale </title>

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

                                            <li><a class="dropdown-item" href="../SF21/index.php" >SF21</a></li>
                                            <li><a class="dropdown-item" href="../Ferrari-Roma/index.php" >Ferrari Roma</a></li>
                                            <li><a class="dropdown-item" href="../SF90-Spyder/index.php" >SF90 Spyder</a></li>
                                            <li><a class="dropdown-item" href="index.php" >SF90 Stradale</a></li>

                                        </ul>

                                    </li>

                                
                                    
                                    <!--Sezione Universe-->
                                    <li class="nav-item dropdown mx-5"  >

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
                                            <li><a class="dropdown-item" href="../../Store/Fisico/index.php" >Fisico</a></li>
                                            
                                        </ul>

                                    </li>
                                    
                                    <!--Sezione Concessionario-->
                                    <li class="nav-item mx-5" >
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


            <!-- Video1 sfondo -->
            <video autoplay muted loop style="width: 100%;">

                <source src="../../Vari/SF90Stradale.mp4" type="video/mp4">
                
            </video>


            <!-- Sezione Testo -->
            <div class="box0"> BEYOND IMAGINATION</div>


            <!--Sezione Testo e Immagini-->
            <div class="row " style="background-image: URL(../../Vari/SF90Stradale1.jpg); width: 100%; margin-left:0 ; background-size: cover; ">

                <!--Viene creata una tabella e popolata con le colonne ci sono testo e immagini in esse-->
                <div class="col-sm-12 col-md-5 offset-md-4 text-center " style="color: red; font-size: 25px;">

                    <br/>
                    <br/>

                    <Strong>SF90 STRADALE: LA NUOVA SUPERCAR DI SERIE</Strong>

                    <br/>
                    <br/>
                    

                    <p style="font-size: 18px; color: white;">

                        Il nome stesso raccoglie il vero significato di quanto è stato ottenuto a livello di prestazioni – il richiamo alla vettura di Formula 1 sottolinea lo stretto legame 
                        che è sempre esistito tra il mondo delle corse e le vetture stradali. La SF90 Stradale, espressione più avanzata della tecnologia sviluppata a Maranello, è la 
                        dimostrazione di come le conoscenze acquisite attraverso le competizioni hanno trovato immediata applicazione su di una vettura Ferrari di produzione.
                            
                    </p>
                
                </div>

                <div class="col-sm-12 col-md-6 offset-md-2 " style="color: red; font-size: 25px;">

                    
                    <br/>
                    <br/>

                    <strong>Assetto base</strong>    

                    <br/>

                    <p style="font-size: 18px; color: white;">

                                                                        
                        EMISSIONI DI CO2: 154 G/KM                                                      
                        <br/>
                        CONSUMO CARBURANTE: 6,1 L/100 KM                                                
                        <br/>
                        CONSUMO ENERGIA ELETTRICA: 123 WH/KM  
                    
                        
                            
                    </p>
                
                </div>

                <div class="col-sm-12 col-md-3 offset-md-1 " style="color: red; font-size: 25px; height: 675px;">

                    <br/>
                    <br/>

                    <strong>Fiorano</strong> 

                    <br/>

                    <p style="font-size: 18px; color: white;">
                        
                        
                        160 G/KM
                        <br/>
                        6,0 L/100 KM
                        <br/>
                        120 WH/KM
                        
                            
                    </p>
                
                </div>
            
            </div>

            <div class="row " style="background-image: URL(../../Vari/SF90Stradale2.jpg); background-repeat: no-repeat; background-size: cover; width: 100%; margin-left:0 ">

                <div class="col-sm-12 col-md-6 offset-md-3 text-center " style="color: red; font-size: 25px;">

                    <br/>
                    <br/>

                    <Strong>FBEYOND PERFORMANCE</Strong>

                    <br/>
                    <br/>
                    

                    <p style="font-size: 18px; color: white;">

                        La SF90 Stradale rappresenta una prima assoluta in termini di powertrain: per la prima volta su una Ferrari di gamma, infatti, viene proposta un’architettura ibrida di 
                        tipo PHEV (Plug-in Hybrid Electric Vehicle) in cui il motore endotermico viene integrato a ben tre motori elettrici, due indipendenti sull’assale anteriore ed uno al 
                        posteriore tra motore e cambio.
                                    
                            
                    </p>
                
                </div>

                <div class="col-sm-12 col-md-6 offset-md-3 text-center " style="color: red; font-size: 25px;">

                    <br/>
                    <br/>

                    <strong>V8 MOTORE</strong>

                    <br/>
                    

                    <p style="font-size: 18px; color: white; height: 570px;">

                        2.5 sec 0-100 KM/H
                        <br/>
                        780 cv POTENZA MASSIMA @ 7500 GIRI/MIN
                        <br/>
                        120 kW POTENZA HYBRID
                            
                    </p>
                
                </div>
            
            </div>

            <div class="row " style="background-image: URL(../../Vari/SF90Stradale3.jpg); width: 100%; margin-left:0; background-size: cover;  ">

                <div class="col-sm-12 col-md-6 offset-md-4 text-center " style="color: red; font-size: 25px;">

                    <br/>
                    <br/>

                    <Strong>PERFORMANCE MAI REALIZZATE PRIMA</Strong>

                    <br/>
                    <br/>
                    

                    <p style="font-size: 18px; color: white; height: 810px;">

                        Le necessità di raffreddamento riguardano il motore endotermico, il cambio, l'aria turbocompressa, il pacco batterie insieme ai motori elettrici, 
                        gli inverter e i sistemi di ricarica e, ovviamente, l’impianto frenante. Grande attenzione è stata posta nella progettazione del vano motore, in cui trovano 
                        posto sia consueti sistemi endotermici che sviluppano temperature prossime ai 900°C, sia componenti elettroniche con specifiche molto stringenti sulle temperature 
                        ammesse.
                        
                                    
                            
                    </p>
                
                </div>

            </div>

            <div class="row " style="background-image: URL(../../Vari/SF90Stradale4.jpg); background-repeat: no-repeat; background-size: cover; width: 100%; margin-left:0;  ">

                <div class="col-sm-12 col-md-6 offset-md-4 text-center " style="color: red; font-size: 25px;">

                    <br/>
                    <br/>

                    <Strong>PIACERE DI GUIDA PER OGNI PILOTA</Strong>

                    <br/>
                    <br/>
                    

                    <p style="font-size: 18px; color: black; ">

                        La nuova architettura ibrida ha richiesto un lungo lavoro di integrazione tra le numerose logiche di controllo presenti in vettura. Le tre aree sono: i controlli 
                        del sistema elettrico ad alto voltaggio (batteria, RAC-e, MGUK, inverter), il controllo del motore e cambio e il controllo della dinamica veicolo (trazione, frenata,
                        Torque Vectoring).
                        <br/>
                        Queste logiche sono state racchiuse in un nuovo sistema di controllo veicolo denominato eSSC (electric Side Slip Control). Le principali novità presenti nell’eSSC 
                        sono riassumibili nelle tre innovative strategie di regolazione e distribuzione dinamica della coppia motrice sulle quattro ruote:  
                            
                                    
                            
                    </p>
                
                </div>

                <div class="col-sm-12 col-md-4  " style="color: red; font-size: 25px;">

                    
                    <br/>
                    <br/>

                    <strong>ELECTRONIC TRACTION CONTROL (ETC)</strong>    

                    <br/>

                    <p style="font-size: 18px; color: black; word-wrap: break-word; ">

                                                                        
                        Permette di gestire e ottimizzare la disponibilità di coppia traente - termica ed elettrica -  distribuendola sulle singole ruote
                        in funzione delle condizioni di guida e dell’impegno in aderenza delle stesse
                        
                            
                    </p>
                
                </div>

                <div class="col-sm-12 col-md-4  " style="color: red; font-size: 25px;">

                    
                    <br/>
                    <br/>

                    <strong>CONTROLLO BRAKE-BY-WIRE CON ABS/EBD</strong>    

                    <br/>

                    <p style="font-size: 18px; color: white; word-wrap: break-word; ">

                                                                        
                        Permette di ripartire la coppia frenante tra impianto idraulico e motori elettrici (brake torque blending), consentendo il
                        recupero rigenerativo in frenata senza compromettere - e anzi, migliorando – la performance e feeling di frenata
                        
                            
                    </p>
                
                </div>

                <div class="col-sm-12 col-md-4  " style="color: red; font-size: 25px; word-wrap: break-word; width: 500px; height: 670px;">

                    
                    <br/>
                    <br/>

                    <strong>TORQUE VECTORING</strong>    

                    <br/>

                    <p style="font-size: 18px; color: black;">

                                                                        
                        Disponibile sull’asse anteriore per gestire la trazione elettrica sulla ruota esterna ed interna alla curva, in modo da massimizzare la trazione 
                        in uscita e supportare la facilità di guida prestazionale.
                            
                    </p>
                
                </div>

                <div class="row " style="background-image: URL(../../Vari/SF90Stradale5.jpg); background-repeat: no-repeat; background-size: cover; width: 100%; margin-left:0  ">

                    <div class="col-sm-12 col-md-6 offset-md-4 text-center " style="color: red; font-size: 25px;">
        
                        <br/>
                        <br/>
        
                        <Strong>UNA VETTURA ESTREMA IN OGNI DETTAGLIO</Strong>
        
                        <br/>
                        <br/>
                        
        
                        <p style="font-size: 18px; color: white; height: 810px;">
        
                            Se negli esterni vettura della SF90 Stradale sì è voluta sottolineare l’integrazione tra forma, tecnologia e performance, sugli interni l’effetto è ancora più 
                            dirompente. Si è voluto esplicitamente creare un abitacolo che inaugurasse un corso nuovo nella sua progettazione, in grado di influenzare l’intera futura gamma 
                            Ferrari.
                            
                                        
                                
                        </p>
                    
                    </div>
        
                </div>

                <div class="row " style="background-image: URL(../../Vari/SF90Stradale6.jpg); width: 100%;  margin-left:0; background-size: cover; ">

                    <div class="col-sm-12 col-md-6 offset-md-4 text-center " style="color: red; font-size: 25px;">
        
                        <br/>
                        <br/>
        
                        <Strong>UNA VETTURA ESTREMA IN OGNI DETTAGLIO</Strong>
        
                        <br/>
                        <br/>
                        
        
                        <p style="font-size: 18px; color: white; height: 810px;">
        
                            Per la prima volta su una Ferrari, viene proposto un allestimento specifico per quei clienti che vogliono accentuare ulteriormente l’impostazione racing della 
                            propria vettura.
                            <br/>
                            L’Assetto Fiorano è un allestimento specifico della SF90 Stradale, disponibile su richiesta e volto ad accentuare ulteriormente la già spiccata vocazione racing 
                            della vettura. Scegliendo questo allestimento si accede a una serie di contenuti esclusivi, tra cui ammortizzatori Multimatic derivati dall’esperienza del Cavallino 
                            Rampante nelle competizioni GT con regolazione ottimizzata per l’utilizzo in pista, materiali ad alte prestazioni (come fibra di carbonio e titanio) che 
                            alleggeriscono la vettura di 21 kg, spoiler posteriore in fibra di carbonio, pneumatici Michelin Pilot Sport Cup 2 omologati per l’uso stradale e studiati per 
                            migliorare la performance in pista nonché una livrea bicolore dedicata*.
                            
  
                        </p>
                    
                    </div>
        
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