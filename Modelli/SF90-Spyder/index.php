<?php

    //avvia la sessione quindi ricorda se loggato oppure no
    session_start() ;

?>

<html>
    <head>

        <title>SF90 Spyder </title>

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

        <!--contenitore elementi Nav Bar-->
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
                                    <li class="nav-item dropdown mx-5" >

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
                                    <li class="nav-item dropdown mx-5" >

                                        <a class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Modelli</a>

                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown" >

                                            <li><a class="dropdown-item" href="../SF21/index.php" >SF21</a></li>
                                            <li><a class="dropdown-item" href="../Ferrari-Roma/index.php" >Ferrari Roma</a></li>
                                            <li><a class="dropdown-item" href="index.php" >SF90 Spyder</a></li>
                                            <li><a class="dropdown-item" href="../SF90-Stradale/index.php" >SF90 Stradale</a></li>

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
                
                <source src="../../Vari/SF90Spyder.mp4" type="video/mp4">
                
            </video>

            <!-- Sezione Testo -->
            <div class="box1-1"> BEYOND IMAGINATION</div>

            <!--Sezione Testo e Immagini-->
            <div class="row " style="background-image: URL(../../Vari/SF90Spyder1.jpg); width: 100%; margin-left:0; background-size: cover; ">

                <!--Viene creata una tabella e popolata con le colonne ci sono testo e immagini in esse-->
                <div class="col-sm-12 col-md-5 offset-md-4 text-center " style="color: red; font-size: 25px;">

                    <br/>
                    <br/>

                    <Strong>ELEGANZA SENZA TEMPO</Strong>

                    <br/>
                    <br/>
                    

                    <p style="font-size: 18px; color: white;">

                        La SF90 Spider, prima spider PHEV di serie del Cavallino Rampante, si pone come nuovo riferimento in termini di performance e innovazione rispetto alla gamma Ferrari 
                        e alla produzione dell’intero settore automotive. La vettura eredita dalla SF90 Stradale la sua impostazione estrema e le sue prestazioni da primato, riuscendo 
                        nell’impresa di incrementarne il piacere di guida e la fruibilità grazie all’ultima versione del tetto rigido ripiegabile RHT. La SF90 Spider è quindi l’auto ideale 
                        per tutti coloro che aspirano al massimo livello di tecnologia senza rinunciare alla versatilità e alle emozioni di guida en plein air.
                            
                            
                    </p>
                
                </div>

                <div class="col-sm-12 col-md-4 offset-md-2 " style="color: red; font-size: 25px;">

                    
                    <br/>
                    <br/>

                    <strong>Assetto base</strong>    

                    <br/>

                    <p style="font-size: 18px; color: white;">

                                                                        
                        EMISSIONI DI CO2: 149 G/KM                                                      
                        <br/>
                        CONSUMO CARBURANTE: 6,1 L/100 KM                                                
                        <br/>
                        CONSUMO ENERGIA ELETTRICA: 136 WH/KM   
                    
                     
                    </p>
                
                </div>

                <div class="col-sm-12 col-md-4 offset-md-2 " style="color: red; font-size: 25px; height: 650px;">

                    <br/>
                    <br/>

                    <strong>Fiorano</strong> 

                    <br/>

                    <p style="font-size: 18px; color: white;">
                        
                        
                        162 G/KM
                        <br/>
                        6,4 L/100 KM
                        <br/>
                        123 WH/KM
                        
                            
                    </p>
                
                </div>
            
            </div>

            <div class="row " style="background-image: URL(../../Vari/SF90Spyder2.jpg); width: 100%; margin-left:0; background-size: cover; ">

                <div class="col-sm-12 col-md-6 offset-md-4 text-center " style="color: red; font-size: 25px;">

                    <br/>
                    <br/>

                    <Strong>SISTEMA IBRIDO  PLUG-IN  DA 1000 CV</Strong>

                    <br/>
                    <br/>
                    

                    <p style="font-size: 18px; color: white;">

                        Grazie ai suoi 780 cv (e 195 cv/l di potenza specifica), il motore termico della SF90 Spider si colloca al vertice della gamma Ferrari. Per ottenere questo risultato,
                        i tecnici si sono concentrati sulla riprogettazione dell’impianto di aspirazione e scarico. Nella nuova configurazione tutti i condotti sono quasi allineati in 
                        orizzontale all’altezza delle teste motore, il gruppo turbocompressore è stato abbassato e la linea di scarico è stata portata più in alto. Tale razionalizzazione 
                        ha portato all’abbassamento del baricentro e al contenimento del peso complessivo, grazie anche all’utilizzo di Inconel® nel condotto di scarico.
                        <br/>
                        Nella SF90 Spider il tradizionale Manettino viene affiancato da un selettore per la gestione dei flussi energetici del sistema ibrido denominato eManettino e dotato 
                        di quattro modalità selezionabili:
                                
                            
                    </p>
                
                </div>

                <div class="col-sm-12 col-md-3  " style="color: red; font-size: 25px;">

                    
                    <br/>
                    <br/>

                    <strong>EDRIVE</strong>    

                    <br/>

                    <p style="font-size: 18px; color: white;">

                                                                        
                        Il motore termico è spento e la trazione è affidata all’assale anteriore elettrico; in questa modalità è possibile percorrere fino a 25 km
                    
                        
                            
                    </p>
                
                </div>

                <div class="col-sm-12 col-md-3  " style="color: red; font-size: 25px;">

                    
                    <br/>
                    <br/>

                    <strong>HYBRID</strong>    

                    <br/>

                    <p style="font-size: 18px; color: white;">

                                                                        
                        La logica di controllo decide se accendere o spegnere il motore termico. La potenza dei motori elettrici viene limitata per ridurre il 
                        consumo di batteria
                        
                            
                    </p>
                
                </div>

                <div class="col-sm-12 col-md-3  " style="color: red; font-size: 25px;">

                    
                    <br/>
                    <br/>

                    <strong>PERFORMANCE</strong>    

                    <br/>

                    <p style="font-size: 18px; color: white;">

                                                                        
                        Il motore termico è sempre acceso e viene privilegiato il mantenimento della carica della batteria rispetto all’efficienza, così da 
                        garantire piena disponibilità di potenza
                        
                            
                    </p>
                
                </div>

                <div class="col-sm-12 col-md-3" style="color: red; font-size: 25px; height: 600px;">

                    <br/>
                    <br/>

                    <strong>QUALIFY</strong> 

                    <br/>

                    <p style="font-size: 18px; color: white;">
                        
                        
                        Permette l'erogazione di 1000 cv, in quanto anche ai motori elettrici viene consentito di lavorare al massimo della loro potenza

                        
                            
                    </p>
                
                </div>
            
            </div>

            <div class="row " style="background-image: URL(../../Vari/SF90Spyder3.jpg); width: 100%; margin-left:0; background-size: cover; ">

                <div class="col-sm-12 col-md-6 offset-md-4 text-center " style="color: red; font-size: 25px;">

                    <br/>
                    <br/>

                    <Strong>FUCINA DI INNOVAZIONI A CIELO APERTO</Strong>

                    <br/>
                    <br/>
                    

                    <p style="font-size: 18px; color: white;">

                        La SF90 Spider propone un’architettura ibrida plug-in in cui il motore endotermico è integrato a due motori elettrici all’anteriore, che costituiscono il sistema RAC-e
                        (Regolatore Assetto Curva Elettrico), e uno al posteriore, derivante dall’esperienza maturata dal Cavallino Rampante in Formula 1 e che ne eredita il nome MGUK 
                        (Motor Generator Unit, Kinetic). La sinergia tra motore endotermico e motori elettrici permette di raggiungere la potenza massima di 1000 cv e di posizionare la SF90
                        Spider al vertice della categoria e della gamma della Casa di Maranello.
                                    
                            
                    </p>
                
                </div>

                <div class="col-sm-12 col-md-6 offset-md-4 text-center " style="color: red; font-size: 25px;">

                    <br/>
                    <br/>

                    <strong>V8 MOTORE</strong>

                    <br/>
                    

                    <p style="font-size: 18px; color: white; height: 550px;">

                        <strong>2,5 sec 0-100 KM/H</strong>
                        <br/>
                        <strong>162 kW POTENZA HYBRID</strong>
                        <br/>
                        <strong>1000 cv POTENZA MASSIMA @ 7500 GIRI/MIN</strong>
                            
                    </p>
                
                </div>
            
            </div>

            <div class="row " style="background-image: URL(../../Vari/SF90Spyder4.jpg); width: 100%; margin-left:0; background-size: cover;  ">

                <div class="col-sm-12 col-md-6 offset-md-4 text-center " style="color: red; font-size: 25px;">

                    <br/>
                    <br/>

                    <Strong>TRAZIONE INTELLIGENTE</Strong>

                    <br/>
                    <br/>
                    

                    <p style="font-size: 18px; color: black; height: 810px;">

                        La logica di gestione del controllo dinamico della vettura è stata ulteriormente potenziata ed è ora chiamata electronic Side Slip Control (eSSC): il sistema 
                        verifica istante per istante le condizioni dinamiche del veicolo e ne controlla stabilità di marcia e motori elettrici anteriori al fine di gestire indipendentemente
                        le coppie applicate alla ruota interna ed esterna (Torque Vectoring), migliorando notevolmente la trazione in uscita di curva e consentendo al pilota di raggiungere il limite in
                        tutta semplicità e sicurezza.
                        
                                    
                            
                    </p>
                
                </div>

                
            
            </div>

            <div class="row " style="background-image: URL(../../Vari/SF90Spyder5.jpg); width: 100%; margin-left:0; background-size: cover;  ">

                <div class="col-sm-12 col-md-6 offset-md-4 text-center " style="color: red; font-size: 25px;">

                    <br/>
                    <br/>

                    <Strong>PRESTAZIONI AL VERTICE DELLA CATEGORIA</Strong>

                    <br/>
                    <br/>
                    

                    <p style="font-size: 18px; color: black; height: 810px;">

                        La filosofia derivata dall’esperienza nelle competizioni 'Occhi sulla strada, mani sul volante' , che ha indirizzato la definizione di ergonomia e stile degli 
                        interni, ha dato origine a un nuovo concetto di interfaccia uomo-macchina (HMI) ricco di innovazioni, tra cui il volante munito di controlli touch che permettono 
                        di controllare ogni aspetto della vettura senza mai staccare le mani dal volante e il cluster centrale, completamente digitale nonché dotato di schermo curvo ad 
                        alta definizione da 16’’ configurabile attraverso i comandi al volante. Nel tunnel centrale, la selezione e gestione del cambio automatico è affidata a un elemento 
                        a griglia che rievoca il glorioso cancelletto di selezione delle marce, vera icona delle Ferrari a cambio manuale.
                            
                                    
                            
                    </p>
                
                </div>

            </div>

            <div class="row " style="background-image: URL(../../Vari/SF90Spyder6.jpg); width: 100%; margin-left:0; background-size: cover;  ">

                <div class="col-sm-12 col-md-6 offset-md-4 text-center " style="color: red; font-size: 25px;">

                    <br/>
                    <br/>

                    <Strong>ALLESTIMENTO RACING</Strong>

                    <br/>
                    <br/>
                    

                    <p style="font-size: 18px; color: white; height: 810px;">

                        Per la prima volta su una Ferrari, viene proposto un allestimento specifico per quei clienti che vogliono accentuare ulteriormente l’impostazione racing della 
                        propria vettura.
                        <br/>
                        L’Assetto Fiorano è un allestimento specifico della SF90 Spider, disponibile su richiesta e volto ad accentuare ulteriormente la già spiccata vocazione racing 
                        della vettura. Scegliendo questo allestimento si accede a una serie di contenuti esclusivi, tra cui ammortizzatori Multimatic derivati dall’esperienza del 
                        Cavallino Rampante nelle competizioni GT con regolazione ottimizzata per l’utilizzo in pista, materiali ad alte prestazioni (come fibra di carbonio e titanio) 
                        che alleggeriscono la vettura di 21 kg, spoiler posteriore in fibra di carbonio, pneumatici Michelin Pilot Sport Cup 2 omologati per l’uso stradale e studiati
                        per migliorare la performance in pista nonché una livrea bicolore dedicata*.
                                
                                    
                            
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