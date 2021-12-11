<?php

    //avvia la sessione quindi ricorda se loggato oppure no
    session_start() ;


?>

<html>
    <head>

        <title>Storia </title>

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
                        <ul class="navbar-nav mx-auto " >

                            
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
                                    <li class="nav-item dropdown mx-5 "  >

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
                                    <li class="nav-item dropdown mx-5"  >

                                        <a class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Universe</a>

                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown" >

                                            <li><a class="dropdown-item" href="index.php" >Storia</a></li>

                                        
                                            <!--Sezione Musei-->
                                            <li class="dropdown-submenu">

                                                <a  class="dropdown-item">Musei</a>

                                                <ul class="dropdown-menu">

                                                    <li><a class="dropdown-item" href="../Musei/Maranello/index.php" >Maranello</a></li>

                                                    <li><a class="dropdown-item" href="../Musei/Modena/index.php" >Modena</a></li>

                                            
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
                                    <li class="nav-item mx-5 " >
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


            <!-- Video sfondo -->
            <video autoplay muted loop style="width: 100%;">

                <source src="../../Vari/Storia.mp4" type="video/mp4">
                
            </video>


            <!--Bottoni-->
            <div class="bottone">
            
                <!-- Bottone -->
                <div class="bottone1">

                    <button class="btn-lg" onclick="showDiscover(1)">1947---1949 <br/>V</button>

                </div>

                <!-- Bottone -->
                <div class="bottone2">

                    <button class="btn-lg" onclick="showDiscover('due')">1950---1959 <br/>V</button>

                </div>

                <!-- Bottone -->
                <div class="bottone3">

                    <button class="btn-lg" onclick="showDiscover(3)">1960---1969<br/>V</button>

                </div>

                <!-- Bottone -->
                <div class="bottone4">

                    <button class="btn-lg" onclick="showDiscover(4)">1970---1979 <br/>V</button>

                </div>

                <!-- Bottone -->
                <div class="bottone5">

                    <button class="btn-lg" onclick="showDiscover(5)">1980---1989 <br/>V</button>

                </div>

                <!-- Bottone -->
                <div class="bottone6">

                    <button class="btn-lg" onclick="showDiscover(6)">1990---1999 <br/>V</button>

                </div>

                <!-- Bottone -->
                <div class="bottone7">

                    <button class="btn-lg" onclick="showDiscover(7)">2000---2009 <br/>V</button>

                </div>

                <!-- Bottone -->
                <div class="bottone8">

                    <button class="btn-lg" onclick="showDiscover(8)">2009---2019 <br/>V</button>

                </div>

                
            </div>


            <!--Sezione a comparsa se si preme il bottone-->
            <div id="discover" style="display:none;">

                <!--Sezione relativa al primo bottone -->
                <div id="anno1">

                    <!--Sezione Testo e Immagini-->
                    <div class="row " style="background-image: URL(../../Vari/Storia1.jpg); width: 100%; margin-left:0   ">

                        <!--Viene creata una tabella e popolata con le colonne ci sono testo e immagini in esse-->
                        <div class="col-sm-12 col-md-12  text-center " style="color: red; font-size: 25px;">

                            <br/>
                            <br/>

                            <Strong>1947 ----- 1949
                                <br/>
                                L'INIZIO DELLA LEGGENDA</Strong>

                            <br/>
                            <br/>
                            

                        </div>

                        <div class="col-sm-12 col-md-4  " style="color: red; font-size: 25px;">

                            
                            <br/>
                            <br/>

                            <strong>LA PRIMA VITTORIA : LA 125 S AL GP DI ROMA</strong> 

                            <br/>

                            <p style="font-size: 18px; color: white;">

                                                                                
                                Come nel caso della Ferrari e della sua prima vittoria datata 1947, e ottenuta con la 125 S. La prima pietra di una storia sportiva senza eguali: quella della 
                                scuderia che vanta il maggior numero di successi nella storia della Formula 1. La genesi di quella prima vittoria affonda le radici a metà del 1945, 
                                quando Enzo Ferrari incarica Gioachino Colombo di progettare una macchina del tutto innovativa. Lo scopo? Battere le Alfa Romeo, che Ferrari conosce 
                                bene visti i trascorsi con la Casa milanese, quando prima come pilota e poi come capo in pista aveva raccolto tanti successi negli anni precedenti la Seconda 
                                Guerra Mondiale. Il cuore della macchina, per Enzo Ferrari, è sempre stato il motore. Da qui l’attenzione massima nella sua definizione già in questo primo 
                                progetto: la scelta cade su un’architettura 12 cilindri, indispensabile per ottenere grandi prestazioni. La sigla indicativa del motore, 125, rappresenta la 
                                cilindrata unitaria: moltiplicando 125 per 12, il risultato è la cilindrata effettiva del motore, ovvero soli 1.500 cm3 
                            
                                 
                            </p>
                        
                        </div>

                        <div class="col-sm-12 col-md-4 offset-md-4 " style="color: red; font-size: 25px; ">

                            <br/>
                            <br/>

                            <strong>Nasce la 166 MM : la barchetta al salone di Torino</strong>

                            <br/>

                            <p style="font-size: 18px; color: white; word-wrap: break-word; ">
                                
                                
                                Il 15 settembre 1948, il marchio Ferrari presenta per la prima volta una sua vettura in un salone automobilistico, nella fattispecie quello di Torino.
                                La 166 MM è la vettura che va a tracciare le linee guida dei futuri modelli stradali della Casa di Maranello: è la capostipite, ed Enzo Ferrari ne è consapevole.
                                Le versatili Sport, capaci di vincere in qualsiasi circuito, permanente, cittadino, sterrato, sono ora pronte ad affermarsi anche in altri contesti, nelle più 
                                prestigiose rassegne internazionali. Infatti i Concorsi d’Eleganza iniziano a prendere piede, e diventano importanti per approcciare nuovi clienti e vendere 
                                diversi esemplari di automobili personalizzate su misura. 
                                
                                    
                            </p>
                        
                        </div>
                    
                    
                    </div>

                </div>

                
                <!--Sezione relativa al secondo bottone -->
                <div id="anno2">

                    <div class="row " style="background-image: URL(../../Vari/Storia2.jpg); width: 100%; margin-left:0   ">

                        
                        <div class="col-sm-12 col-md-12  text-center " style="color: red; font-size: 25px;">

                            <br/>
                            <br/>

                            <Strong>1950 ----- 1959
                                    <br/>
                                    I PRIMI TITOLI MONDIALI</Strong>

                            <br/>
                            <br/>
                            

                        </div>

                        <div class="col-sm-12 col-md-4 " style="color: red; font-size: 25px;">

                            
                            <br/>
                            <br/>

                            <strong>MILLE MIGLIA ROSSA</strong> 

                            <br/>

                            <p style="font-size: 18px; color: white; word-wrap: break-word;">

                                Giannino Marzotto, soprannominato “il Conte volante”, è uno dei più noti gentleman driver di successo, ma il suo vero mestiere è quello di industriale tessile. 
                                Eppure avrebbe la stoffa – è proprio il caso di dirlo – per correre da professionista.Passa alla storia per la sua tenuta da gara: giacca, camicia e cravatta, 
                                ma si tratta del suo abbigliamento di tutti i giorni, ed è normale per lui guidare vestito così. Nel suo palmares trovano posto le vittorie nella Mille Miglia 
                                del 1950 e del ’53 con le Ferrari 195 S e 340 MM. Inoltre, sempre nel 1953, è 5° nella 24 Ore di Le Mans assieme al fratello Paolo, con una 340 MM riconvertita 
                                in 375 MM Berlinetta ma ancora con motore 3 litri.Grazie a questo risultato e a quelli ottenuti nelle altre gare dagli equipaggi con le nuove 375 MM da 4.500 cc,
                                la Ferrari vince nel 1953 il primo Campionato del Mondo Sport. Giannino Marzotto incontra Enzo Ferrari nel 1948, quando si reca in fabbrica per acquistare una 
                                166 Inter Touring 2.0.                                     
                                 
                            </p>
                        
                        </div>

                        <div class="col-sm-12 col-md-4 offset-md-4 " style="color: red; font-size: 25px; ">

                            <br/>
                            <br/>

                            <strong>IL CAMPIONE ELEGANTE</strong>

                            <br/>

                            <p style="font-size: 18px; color: white; word-wrap: break-word; ">
                                
                                
                                Nella graduatoria dei piloti più eccentrici e fuori dal comune, merita un posto di primo piano l’inglese Mike Hawthorn. Anticonformista nei modi e nel vestire,
                                in gara mette sempre una giacca verde corta abbinata al papillon e alla camicia bianca.Inconfondibile anche il suo casco verde con frontino bianco e ampia 
                                visiera trasparente, raramente sostituita da un paio di occhialoni. Alto e magro, con un ciuffo di capelli biondi e un viso da eterno ragazzino, è il pilota 
                                che più di ogni altro dà filo da torcere a Juan Manuel Fangio sulla prestazione pura. Solo lui è in grado di compiere le stesse manovre che riescono al 
                                campione argentino, come tenere completamente giù l’acceleratore nella curva di Gueux, a Reims. Con la Scuderia Ferrari fa proprio il Campionato Mondiale 
                                di F1 nel 1958 e contribuisce alla conquista dei titoli Sport negli anni ’53, ’54, ’57 e ’58. Vince la 24 Ore di Spa-Francorchamps con Farina nel ’53 mentre 
                                nel 1954 conquista il Tourist Trophy a Dundrod ma anche altri piazzamenti.
                                
                                    
                            </p>
                        
                        </div>
                    
                    </div>

                </div>

                <!--Sezione relativa al terzo bottone -->
                <div id="anno3">

                    <div class="row " style="background-image: URL(../../Vari/Storia3.jpg); width: 100%; margin-left:0   ">

                        
                        <div class="col-sm-12 col-md-12 text-center " style="color: red; font-size: 25px;">

                            <br/>
                            <br/>

                            <Strong>1960 ----- 1969
                                    <br/>
                                    IL DOMINIO DELL?ENDURANCE</Strong>

                            <br/>
                            <br/>
                            

                        </div>

                        <div class="col-sm-12 col-md-4  " style="color: red; font-size: 25px;">

                            
                            <br/>
                            <br/>

                            <strong>5 VITTORIE CONSECUTIVE AL TT</strong> 

                            <br/>

                            <p style="font-size: 18px; color: white; word-wrap: break-word;">

                                                                    
                                Enzo Ferrari, Stirling Moss e un matrimonio che in F1 non s’ha da fare. Eppure ci si prova. Nel settembre del 1951 Moss è terzo a Monza nel IV GP 
                                Autodromo riservato alla Formula 2, battuto da Alberto Ascari e Luigi Villoresi.Sembra che quest’ultimo lo segnali a Ferrari, che lo invita a correre in 
                                settembre con una sua monoposto il GP di Formula 1 di Bari, non valido per il Mondiale, con la prospettiva di un contratto per il 1952. Sembra cosa fatta, 
                                invece per un malinteso l’accordo non si concretizza. Ferrari e Moss ci riprovano dieci anni dopo, alla fine del 1961, quando viene raggiunto l’accordo 
                                per affidare al team di Rob Walker una monoposto di Formula 1 e alla British Racing Partnership (BRP) – squadra di Alfred Moss, padre di Stirling – 
                                una 250 GTO.
                                
                                    
                            </p>
                        
                        </div>

                        <div class="col-sm-12 col-md-4 offset-md-4 " style="color: red; font-size: 25px; ">

                            <br/>
                            <br/>

                            <strong>L'OMAGGIO AL TRINFO : PRESENTATA LA 365 GTB4 DAYTONA</strong>

                            <br/>

                            <p style="font-size: 18px; color: white; word-wrap: break-word; ">
                                
                                
                                In occasione del Salone di Parigi 1968, Ferrari presenta un altro dei suoi capolavori più amati dagli appassionati e dai collezionisti. Una vera star, 
                                un’icona, un mito: la cosiddetta Daytona, nome non ufficiale datole dalla stampa, in onore della storica tripletta al 24 Ore di Daytona nel 1967.
                                Il nome vero è Ferrari 365 GTB4, ed è l’ultima Ferrari a essere costruita prima della cessione del 50% a Fiat. E’ l’ultimo frutto della gestione diretta 
                                della produzione da parte di Enzo Ferrari e pertanto è anche l’ultima creatura che nasce secondo il suo credo tecnico: motore davanti all’abitacolo, 
                                così come i buoi davanti al carro…Infatti anche per questa 365GTB4, viene riproposto quel classico schema motore anteriore-trazione dietro, con una 
                                distribuzione dei pesi ottimale grazie al sistema transaxle con cambio posteriore.
                                
                                    
                            </p>
                        
                        </div>
                    
                    </div>

                </div>

                <!--Sezione relativa al quarto bottone -->
                <div id="anno4">

                    <div class="row " style="background-image: URL(../../Vari/Storia4.jpg); width: 100%; margin-left:0   ">

                        
                        <div class="col-sm-12 col-md-12 text-center " style="color: red; font-size: 25px;">

                            <br/>
                            <br/>

                            <Strong>1970 ----- 1979
                                    <br/>
                                    DA NIKI A JODY</Strong>

                            <br/>
                            <br/>
                            
                        
                        </div>

                        <div class="col-sm-12 col-md-4 " style="color: red; font-size: 25px;">

                            
                            <br/>
                            <br/>

                            <strong>IL MIRACOLO 512 S : 3 MESI DI SVILUPPO E 25 ESEMPLARI</strong> 

                            <br/>

                            <p style="font-size: 18px; color: white; word-wrap: break-word;">

                                Nella seconda metà del 1969, dopo il passaggio del 50% alla Fiat, Enzo Ferrari può dare il via al progetto di costruire una nuova Sport per la nuova classe 
                                riservata ai motori 5 litri. Per omologare il modello, occorre costruire 25 esemplari. I tempi sono strettissimi, ma Mauro Forghieri e il suo staff riescono 
                                a progettare e realizzare la macchina in soli tre mesi. Nasce ufficialmente la 512 S per partecipare al Mondiale Marche nel Gruppo 5.La vettura utilizza un 
                                telaio multitubolare semi monoscocca in lega leggera, derivato dalla P4 e dalla 612 CAN AM, e monta in posizione centrale il motore V12 di 4993,53 cc 
                                anch’esso in lega, con quattro valvole per cilindro, in grado di erogare inizialmente 550 CV per una velocità massima di 340 km/h. La carrozzeria 
                                studiata dall’ingegner Giacomo Caliri, per contenere al massimo i pesi viene costruita in poliestere.  
                                
                                
                                    
                            </p>
                        
                        </div>

                        <div class="col-sm-12 col-md-4 offset-md-4 " style="color: red; font-size: 25px; ">

                            <br/>
                            <br/>

                            <strong>PROFETA IN PATRIA : VILLENEUVE SI IMPONE IN CANADA</strong>

                            <br/>

                            <p style="font-size: 18px; color: white; word-wrap: break-word; ">
                                
                                È venerdì 6 ottobre 1978: 28 piloti di Formula 1 scendono in pista per le prove del GP del Canada che per la prima volta si disputa sul nuovo circuito 
                                ricavato sulle strade perimetrali dell͛isola di Notre-Dame, a Montreal, in Quebec. Il tracciato rimpiazza la pista di Mosport Park, celebre per i suoi 
                                saliscendi ma ormai troppo pericolosa.La corsa è l͛ultima della stagione 1978, nei due campionati i giochi sono fatti, con la Lotus che ha vinto il titolo 
                                costruttori con il modello 79 e Mario Andretti che si è imposto tra i piloti. Il team britannico però è fortemente motivato perché vuole dedicare una 
                                vittoria al povero Ronnie Peterson, che ha perso la vita in seguito all͛incidente al GP di Monza. Molti i cambi di pilota in vista del 1979: è l'ultima 
                                gara con la Scuderia per Carlos Reutemann, in procinto di passare alla Lotus, mentre sulla Wolf, Jody Scheckter è ai saluti. Il suo futuro si chiama 
                                Ferrari, dove andrà ad affiancare Gilles Villeneuve. Il canadese è stato confermato nonostante sia stato surclassato da Reutemann. L͛argentino è in 
                                lotta con la Brabham di Niki Lauda per il terzo posto nel mondiale, ha vinto in Brasile, a Long Beach, in Gran Bretagna e a Watkins Glen.
                                
                                
                                    
                            </p>
                        
                        </div>
                    
                    </div>

                </div>

                <!--Sezione relativa al quinto bottone -->
                <div id="anno5">

                    <div class="row " style="background-image: URL(../../Vari/Storia5.jpg); width: 100%; margin-left:0   ">

                        
                        <div class="col-sm-12 col-md-12 text-center " style="color: red; font-size: 25px;">

                            <br/>
                            <br/>

                            <Strong>1980 ----- 1989
                                    <br/>
                                    BELLEZZE INSUPERABILI</Strong>

                            <br/>
                            <br/>
                            

                        </div>

                        <div class="col-sm-12 col-md-4  " style="color: red; font-size: 25px;">

                            
                            <br/>
                            <br/>

                            <strong>4 POSTI MONDIAL 8 : NUOVA INTERPRETAZIONE DEL TEMA 2+2</strong> 

                            <br/>

                            <p style="font-size: 18px; color: white; word-wrap: break-word;">

                                Nel 1980 Ferrari consolida la struttura della sua gamma, con due linee di prodotto ben definite legate ai motori V12 e V8 cilindri.A Ginevra presenta la Mondial 8, 
                                sostituta della Dino 308 GT4, sempre in configurazione a quattro posti e con motore centrale, ovvero montato davanti all’asse posteriore delle ruote. Dopo 
                                l’esperimento con Bertone e la GT4, la Casa di Maranello torna dunque ad affidarsi stabilmente a Pininfarina, che dà continuità al tema della linea a cuneo 
                                con la griglia del radiatore posta sotto il paraurti anteriore. Rispetto al modello che sostituisce, la Mondial 8 allunga il passo di 10 cm e adotta 
                                carreggiate più larghe, dando maggior spazio ai passeggeri. L’abitacolo è molto curato, con una ricca dotazione di serie. Inoltre le dimensioni 
                                tornano ad essere “più importanti”, in linea con le misure dei modelli a 12 cilindri. 
                                
                                
                                    
                            </p>
                        
                        </div>

                        <div class="col-sm-12 col-md-4 offset-md-4 " style="color: red; font-size: 25px; ">

                            <br/>
                            <br/>

                            <strong>IL GIORNO DELL'ADDIO : IL 14 AGOSTO SCOMPARE ENZO FERRARI</strong>

                            <br/>

                            <p style="font-size: 18px; color: white; word-wrap: break-word; ">
                                
                                Enzo Ferrari ama lavorare. Se si esclude qualche gita a Viserba di Rimini, dove possiede una casa, non ha mai fatto ferie. Uno dei giorni che detesta di più 
                                è Ferragosto, quando tutto si ferma. Il fondatore della Casa del Cavallino Rampante muore a 90 anni e 178 giorni lasciando istruzioni precise sulla cerimonia 
                                funebre e le modalità di comunicazione dell’accaduto. Come sempre nella vita, anche in previsione della morte Enzo ferrari non lascia nulla al caso.
                                Il 1988 si apre con ritmi di lavoro molto elevati per Ferrari, come del resto la sua routine gli impone da sempre. Il 14 gennaio, accompagnato dal fido autista 
                                Dino Tagliazucchi, è in comune a Maranello per un appuntamento molto importante. Firma insieme al sindaco di Modena, Alfonsina Rinaldi, le carte per procedere 
                                alla demolizione della vecchia sede della Scuderia in viale Trento e Trieste. Poco più di due settimane dopo si assiste alla sua ultima uscita pubblica, 
                                quando il primo febbraio riceve dall’Università degli Studi di Modena la laurea honoris causa in Fisica. La cerimonia si svolge presso il palazzo comunale e 
                                ciò che balza agli occhi degli osservatori più attenti è l’espressione provata di Ferrari, che inizia ad accusare il peso degli anni. 
                                
                                
                                    
                            </p>
                        
                        </div>
                    
                    </div>

                </div>

                <!--Sezione relativa al sesto bottone -->
                <div id="anno6">

                    <div class="row " style="background-image: URL(../../Vari/Storia6.jpg); width: 100%; margin-left:0   ">

                        
                        <div class="col-sm-12 col-md-12 text-center " style="color: red; font-size: 25px;">

                            <br/>
                            <br/>

                            <Strong>1990 ----- 1999
                                    <br/>
                                    INNOVAZIONE CONTINUA</Strong>

                            <br/>
                            <br/>
                            

                        </div>

                        <div class="col-sm-12 col-md-4  " style="color: red; font-size: 25px;">

                            
                            <br/>
                            <br/>

                            <strong>100 E LODE : 100 VITTORIE IN F1</strong> 

                            <br/>

                            <p style="font-size: 18px; color: white; word-wrap: break-word;">

                                Venerdì 6 luglio 1990: il Circuit Paul Ricard di Le Castellet compie 20 anni e li celebra ospitando per l’ultima volta il GP di Francia di Formula 1. 
                                È la settima gara di una stagione che sta rispettando i pronostici e vede ancora una volta il grande duello tra Ayrton Senna, su McLaren, e il campione del 
                                mondo Alain Prost che durante l’inverno è passato alla Ferrari ed è reduce dalla vittoria in Messico. Il francese si era già imposto in Brasile, a casa del 
                                rivale, mentre Senna ha trionfato a Phoenix, negli USA, a Monaco e in Canada.A San Marino l’ha spuntata Riccardo Patrese con la Williams. Al Paul Ricard la 
                                Ferrari sembra la stessa che ha dominato a Città del Messico. Nigel Mansell conquista la pole position ma tra i piloti soddisfatti dopo le qualifiche c’è 
                                anche Prost che è costretto a cercare la posizione in griglia con il motore da gara dopo che quello dotato di più cavalli era andato in fumo nelle prove libere. 
                            
                                
                                    
                            </p>
                        
                        </div>

                        <div class="col-sm-12 col-md-4 offset-md-4 " style="color: red; font-size: 25px; ">

                            <br/>
                            <br/>

                            <strong>FORMA E VELOCITA : PIANO DISEGNA LA GALLERIA DEL VENTO</strong>

                            <br/>

                            <p style="font-size: 18px; color: white; word-wrap: break-word; ">
                                
                                A partire dal 1996 la Ferrari mette un impulso ancora maggiore alla ristrutturazione della Scuderia di Formula 1 dopo la crisi di inizio anni Novanta. 
                                Nel team è arrivato Michael Schumacher come pilota e nel luglio di quello stesso anno vengono avviati i lavori per la costruzione della nuova galleria 
                                del vento della Scuderia. Si tratta di uno strumento sempre più importante nella Formula 1 moderna, che ai giorni d’oggi, con i test in pista ridotti al 
                                minimo, è diventato addirittura fondamentale.La galleria del vento è un’installazione necessaria a simulare in tutto e per tutto la marcia su strada di una 
                                vettura. Un limite degli impianti, in quei tempi, sono le dimensioni. Spesso si deve infatti lavorare con modelli delle vetture ridotti a un terzo del reale.
                            
                                
                                    
                            </p>
                        
                        </div>
                    
                    </div>

                </div>


                <!--Sezione relativa al settimo bottone -->
                <div id="anno7">

                    <div class="row " style="background-image: URL(../../Vari/Storia7.jpg); width: 100%; margin-left:0  ">

                        
                        <div class="col-sm-12 col-md-12 text-center " style="color: red; font-size: 25px;">

                            <br/>
                            <br/>

                            <Strong>2000 ----- 2009
                                    <br/>
                                    L'EGEMONIA DI SCHUMACHER</Strong>

                            <br/>
                            <br/>
                           
                        </div>

                        <div class="col-sm-12 col-md-4  " style="color: red; font-size: 25px;">

                            
                            <br/>
                            <br/>

                            <strong>21 ANNI DOPO : SCHUMACHER E LA FERRARI DEI CAMPIONI</strong> 

                            <br/>

                            <p style="font-size: 18px; color: white; word-wrap: break-word;">

                                La stagione di Formula 1 2000 vede la Ferrari presentarsi quanto mai agguerrita visto che c’è la piena consapevolezza di avere un pacchetto molto competitivo. 
                                Al fianco del tedesco non c’è più Eddie Irvine, passato alla Jaguar, bensì il brasiliano Rubens Barrichello. L’avvio è travolgente: Schumacher si aggiudica le 
                                prime tre gare della stagione, la McLaren reagisce vincendo in Gran Bretagna e Spagna ma la Ferrari trionfa nei GP d’Europa e Canada. Il vantaggio in classifica 
                                è notevole: Schumacher guida con 56 punti, Coulthard è a 34, Hakkinen.Il calendario prevede un luglio molto intenso, con i GP di Francia, Austria e Germania. 
                                È un mese di sfortuna nera per Schumacher: a Magny-Cours, Michael comanda la corsa fino a due terzi della distanza prima che il motore V10 della sua F1-2000 ceda 
                                di schianto.
                                
                                    
                            </p>
                        
                        </div>

                        <div class="col-sm-12 col-md-4 offset-md-4 " style="color: red; font-size: 25px; ">

                            <br/>
                            <br/>

                            <strong>ANCORA CAMPIONI : SEDICESIMO TITOLO TEAM IN F1</strong>

                            <br/>

                            <p style="font-size: 18px; color: white; word-wrap: break-word; ">
                                
                                La Formula 1 nella stagione 2008 vede ancora l’attesissimo duello Ferrari-Mercedes. Tutti si aspettano una replica della battaglia tra Raikkonen e Hamilton, 
                                che all’interno della McLaren costringe di fatto Fernando Alonso a tornare alla Renault. La Ferrari invece conferma Felipe Massa al fianco del campione del mondo 
                                finlandeseHamilton e Raikkonen si dividono le vittorie in Australia e Malesia, mentre l’inizio di campionato è da dimenticare per Massa, fermo a quota zero. 
                                Il brasiliano si rifà in Bahrain e Turchia mentre in Spagna vince Raikkonen. I Ferraristi dopo cinque corse sono ai primi due posti della classifica ma Hamilton 
                                trionfa a Monaco mentre in Canada va in scena una gara pazza con l’inglese della McLaren che non si avvede del semaforo rosso in fondo alla corsia box e centra 
                                la Ferrari di Kimi ponendo fine alla gara di entrambi. Vince Robert Kubica con la BMW Sauber che passa addirittura in testa al campionato. 
                                
                                
                                    
                            </p>
                        
                        </div>
                    
                    </div>

                </div>


                <!--Sezione relativa al ottavo bottone -->
                <div id="anno8">

                    <div class="row " style="background-image: URL(../../Vari/Storia8.jpg); width: 100%; margin-left:0  ">

                        
                        <div class="col-sm-12 col-md-12 text-center " style="color: red; font-size: 25px;">

                            <br/>
                            <br/>

                            <Strong>2009 ----- 2019
                                    <br/>
                                    VERSO NUOVI TRAGUARDI</Strong>

                            <br/>
                            <br/>
                           
                        </div>

                        <div class="col-sm-12 col-md-4  " style="color: red; font-size: 25px;">

                            
                            <br/>
                            <br/>

                            <strong>DIVERTIMENTO ROSSO : APRE IL FERRARI WORD AD ABU DHABI</strong> 

                            <br/>

                            <p style="font-size: 18px; color: white; word-wrap: break-word;">

                                La Ferrari è da sempre sinonimo di ricerca, innovazione e avanguardia nel mondo dell’automobile. Tuttavia il Cavallino Rampante negli ultimi anni ha saputo 
                                applicare le stesse logiche anche ai comparti non strettamente legati alle auto. È il caso dei prodotti a marchio Ferrari in vendita nei Ferrari Store ma anche 
                                del Ferrari World di Abu Dhabi che segna la prima volta per un parco tematico dedicato a una casa automobilistica.Si inizia a parlare del progetto nel 2005, 
                                quando cominciano i contatti tra la Ferrari e Aldar Properties, una compagnia che si occupa dello sviluppo dell’emirato di Abu Dhabi ancora oggi proprietaria 
                                della struttura. Il 3 novembre 2007 viene posata la prima pietra della struttura che tre anni più tardi è pronta a debuttare. 
                                
                                    
                            </p>
                        
                        </div>

                        <div class="col-sm-12 col-md-4 offset-md-4 " style="color: red; font-size: 25px;  ">

                            <br/>
                            <br/>

                            <strong>ADDIO SERGIO : LA SCOMPARSA PREMATURA DEL PRESIDENTE MARCHIONNE</strong>

                            <br/>

                            <p style="font-size: 18px; color: white; word-wrap: break-word; ">
                                
                                Dopo aver celebrato in maniera indimenticabile il settantesimo anniversario nel 2017, la Casa del Cavallino rampante affronta il 2018 consapevole delle nuove 
                                sfide che la attendono.Nel tradizionale appuntamento del Salone di Ginevra vengono tolti i veli alla Ferrari 488 Pista, equipaggiata con l’evoluzione estrema del 
                                V8 turbo premiato per due anni consecutivi come “International Engine of the Year”, nel 2016 e nel 2017. La nuova nata porta su un’auto stradale il più alto 
                                livello di transfer tecnologico dal mondo delle competizioni dove, con la versione GTE, la 488 ha vinto gli ultimi due titoli costruttori GT del FIA World 
                                Endurance Championship, noto come WEC.
                                
                                    
                            </p>
                        
                        </div>
                    
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