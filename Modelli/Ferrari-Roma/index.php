<?php

    //avvia la sessione quindi ricorda se loggato oppure no
    session_start() ;

?>

<html>
    <head>

        <title>Ferrari Roma </title>

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
                                            <li><a class="dropdown-item" href="index.php" >Ferrari Roma</a></li>
                                            <li><a class="dropdown-item" href="../SF90-Spyder/index.php" >SF90 Spyder</a></li>
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
                
                <source src="../../Vari/Ferrari Roma.mp4" type="video/mp4">
                
            </video>

            <!-- Sezione Testo -->
            <div class="box0"> FERRARI ROMA: LA NUOVA DOLCE VITA</div>


            <!--Sezione Testo e Immagini-->
            <div class="row " style="background-image: URL(../../Vari/FerrariRoma1.jpg);  width: 100%; margin-left:0 ">

                <!--Viene creata una tabella e popolata con le colonne ci sono testo e immagini in esse-->
                <div class="col-sm-12 col-md-4 " style="color: red; font-size: 25px;">

                    <br/>
                    <br/>

                    <Strong>ELEGANZA SENZA TEMPO</Strong>

                    <br/>
                    <br/>
                    

                    <p style="font-size: 22px; color: white; word-wrap: break-word;">

                        La Ferrari Roma, nuova coupé 2+ a motore centrale-anteriore della Casa di Maranello, è caratterizzata da un design senza tempo, da una spiccata raffinatezza e 
                        da guidabilità e prestazioni di assoluta eccellenza. Grazie al suo stile inconfondibile, la vettura reinterpreta in chiave contemporanea il lifestyle della 
                        città di Roma tipico degli anni ‘50-‘60, caratterizzato dalla leggerezza e dal piacere di vivere.
                        <br/>
                        <br/>
                        I valori dei consumi di carburante e delle emissioni di CO2 indicati sono stati calcolati in conformità al regolamento europeo (CE) 715/2007 nella versione in vigore
                        al momento dell’omologazione. I valori dei consumi di carburante e delle emissioni di CO2 si riferiscono al ciclo WLTP.
                        
                            
                    </p>
                
                </div>

                <div class="col-sm-12 col-md-4 offset-md-2 " style="color: red; font-size: 25px;">

                    
                    <br/>
                    <br/>

                    <strong>EMISSIONI DI CO2</strong>   

                    <br/>

                    <p style="font-size: 18px; color: white; word-wrap: break-word;">

                                                                        
                        LOW: 404 G/KM                                            
                        <br/>
                        MID: 246 G/KM                                       
                        <br/>
                        HIGH: 220 G/KM
                        <br/>
                        EXTRA HIGH: 235 G/KM
                        <br/>
                        COMBINED: 255 G/KM
                        <br/>
                        <br/>
                        
                            
                    </p>
                
                </div>

                
                <div class="col-sm-12 col-md-2 " style="color: red; font-size: 25px; height: 1000px;">

                    <br/>
                    <br/>

                    <strong>CONSUMI</strong>

                    <br/>

                    <p style="font-size: 18px; color: white; word-wrap: break-word;">
                        
                        
                        LOW: 17,8 L/100 KM
                        <br/>
                        MID: 10,8 L/100 KM
                        <br/>
                        HIGH: 9,7 L/100 KM
                        <br/>
                        EXTRA HIGH: 10,3 L/100 KM
                        <br/>
                        COMBINED: 11,2 L/100 KM
                        
                            
                    </p>
                
                </div>
            
            
            </div>

            <div class="row " style="background-image: URL(../../Vari/FerrariRoma2.jpg); width: 100%; margin-left:0  ">

                <div class="col-sm-12 col-md-4 offset-md-4 text-center" style="color: red; font-size: 25px;  ">

                    <br/>
                    <br/>


                    <Strong>DESIGN PURO ED ELEGANTE</Strong>

                    
                    <p style="font-size: 18px; color: white; word-wrap: break-word; ">

                        La Ferrari Roma, progettata dal Centro Stile Ferrari, si distingue per un approccio stilistico basato sulla pulizia e sulla sintesi assoluta degli elementi, 
                        nonché su proporzioni armoniche e volumi puri ed eleganti. Per esaltare il minimalismo formale sono stati rimossi ogni decorazione o sfogo superflui.
                    
                            
                    </p>
                
                </div>

                <div class="col-sm-12 col-md-5" style="color: red; font-size: 25px;  ">

                    <br/>
                    <br/>

                    <strong>GT nell'animo</strong>

                    <br/>
                    <br/>

                    <p style="font-size: 18px; color: white; word-wrap: break-word; ">

                        Il progetto della Ferrari Roma trae spunto dal concetto di eleganza sportiva celebrata dalle più famose berlinette Granturismo degli anni ’60 del Cavallino Rampante,
                        vetture caratterizzate generalmente da una linea coupé fastback 2+ a motore anteriore e dalla forma sobria ed elegante. 
                        <br/>
                        La Ferrari Roma, che nasce sotto queste premesse, esprime uno stile puro e raffinato con un linguaggio estremamente moderno; la sua linea essenziale, dalle 
                        proporzioni perfette, non rinuncia tuttavia alla vocazione sportiva tipica di ogni Ferrari.
                    
                    </p>
                
                </div>

                <div class="col-sm-12 col-md-6 offset-md-1" style="color: red; font-size: 25px;  ">

                    <br/>
                    <br/>
            

                    <br/>
                    <br/>

                    <p style="font-size: 18px; color: white; word-wrap: break-word; ">

                        Il volume “a sbalzo” del frontale, sobrio ed essenziale, genera un effetto a “naso di squalo”. L’ampio cofano anteriore e i sinuosi parafanghi si compenetrano 
                        perfettamente, in armonia con gli stilemi della tradizione Ferrari. Per esaltare il minimalismo formale è stato rimosso ogni decorazione o sfogo superflui: il 
                        raffreddamento è garantito da una superficie traforata solo dove necessario, reinterpretando così il concetto stesso di calandra.
                    
                    </p>
                
                </div>

                <div class="col-sm-12 col-md-5" style="color: red; font-size: 25px;  ">


                    <br/>
                    <br/>

                    <p style="font-size: 18px; color: white; word-wrap: break-word; ">

                        I due proiettori lineari full LED, in perfetta continuità formale con le estremità della griglia anteriore, sono attraversati da una barra luminosa orizzontale che 
                        suggerisce un elemento di tensione intorno alla vettura, accennando un family feeling con le Ferrari SP Monza.
                    
                    </p>
                
                </div>

                <div class="col-sm-12 col-md-6 offset-md-1" style="color: red; font-size: 25px;  height: 400px;">

                    
                    <br/>
                    <br/>

                    <p style="font-size: 18px; color: white; word-wrap: break-word; ">

                        Il lunotto, di dimensioni contenute ed estremamente avvolgente, integra una soluzione di aerodinamica attiva finalizzata a preservare la purezza delle forme, 
                        leitmotiv degli esterni della Ferrari Roma. Il design del posteriore della vettura è caratterizzato dalla sua impostazione moderna; lo sviluppo tecnologico ha 
                        infatti reso possibile una riduzione delle dimensioni dei gruppi ottici e il conseguente tratteggio di fonti luminose minimaliste. 
                    
                    </p>
                
                </div>
            
            </div>


            <div class="row " style="background-image: URL(../../Vari/FerrariRoma3.jpg); width: 100%; margin-left:0  ">

                <div class="col-sm-12 col-md-4 offset-md-4 text-center" style="color: red; font-size: 25px;  ">

                    
                    <br/>
                    <br/>

                    <strong>POTENZA E RAFFINATEZZA</strong>

                    <p style="font-size: 18px; color: white; word-wrap: break-word; ">

                        La Ferrari Roma è in grado di garantire prestazioni al vertice della categoria grazie al suo motore V8 turbo appartenente alla famiglia vincitrice del premio 
                        Engine of the Year per 4 anni consecutivi. Il motore da 620 cv a 7.500 giri/min. è abbinato al nuovo cambio dual-clutch a 8 rapporti, introdotto per la prima 
                        volta sulla SF90 Stradale.
                    
                    </p>
                
                </div>

                <div class="col-sm-12 col-md-4 offset-md-4 text-center" style="color: red; font-size: 25px;  ">

                    
                    <br/>
                    <br/>

                    <strong>V8 MOTORE</strong>

                    <p style="font-size: 18px; color: white; word-wrap: break-word; ">

                        
                        <strong>3855cc CILINDRATA TOTALE</strong>
                        <br/>
                        <strong>620cv POTENZA MASSIMA</strong>
                        <br/>
                        <strong>3,4 sec 0-100 KM/H</strong>
                        <br/>
                        <br/>
                        
                        
                    
                    </p>
                
                </div>

                <div class="col-sm-12 col-md-5" style="color: red; font-size: 25px;  ">

                    <br/>
                    <br/>

                    
                    <strong>TECNOLOGIA ALL'AVANGUARDIA</strong>

                    <br/>
                    <br/>
                
                    
                    <p style="font-size: 18px; color: white; word-wrap: break-word; ">

                        
                        La Ferrari Roma monta un motore V8 turbo ai vertici della categoria da 620 cv, appartenente alla famiglia vincitrice del premio Engine of the Year per 4 anni
                        consecutivi. Le principali innovazioni di questa versione del propulsore V8 Ferrari sono nuovi profili dell’albero a camme, un sensore di velocità che misura la
                        rotazione della turbina consentendo di aumentarne di oltre 5000 giri/min. il regime massimo e l’introduzione del Gasoline Particulate Filter, volto ad assicurare 
                        il rispetto dei restrittivi vincoli sulle emissioni. Il filtro a matrice chiusa, che cattura il particolato prodotto dalla combustione, è stato sottoposto a 
                        un’attenta ottimizzazione per garantire che la sua applicazione non compromettesse il piacere di guida.

                    
                    </p>
                
                </div>

                <div class="col-sm-12 col-md-4 offset-md-2" style="color: red; font-size: 25px;  ">

                    <br/>
                    <br/>

                    
                    <strong>CAMBIO</strong>

                    <br/>
                    <br/>
                
                    
                    <p style="font-size: 18px; color: white; word-wrap: break-word; ">

                        L’introduzione dell’ottava marcia garantisce una riduzione dei consumi e un miglioramento delle prestazioni avvertibile anche durante l’utilizzo sportivo. 
                        Il cambio con architettura a doppia frizione in bagno d’olio deriva dalla nuova trasmissione a 8 rapporti introdotta sulla SF90 Stradale; in questa versione 
                        può però contare su una rapportatura più lunga e sulla retromarcia, che nella SF90 Stradale si esegue tramite motore elettrico. Gli ingombri del nuovo gruppo 
                        frizione sono stati ridotti del 20% e la coppia trasmessa è aumentata del 35%. Le strategie del software di trasmissione sono state migliorate grazie a una centralina 
                        di controllo più potente e alla maggiore integrazione con il software di controllo motore. I cambi marcia sono così stati resi più rapidi, ma soprattutto più fluidi 
                        e omogenei.
                            
                    
                    </p>
                
                </div>
            
            </div>

            <div class="row " style="background-image: URL(../../Vari/FerrariRoma4.jpg); width: 100%; margin-left:0  ">

                <div class="col-sm-12 col-md-4 offset-md-4 text-center" style="color: red; font-size: 25px;  ">

                    
                    <br/>
                    <br/>

                    <strong>RADICI E ALI</strong>

                    <p style="font-size: 18px; color: white; word-wrap: break-word; ">

                        Per garantire prestazioni al vertice della categoria e mantenere al contempo la purezza stilistica della sua “linea ereditaria” sono state studiate varie soluzioni 
                        tecnologiche all’avanguardia, su tutte l’adozione dell’ala mobile posteriore integrata nel lunotto che mira a conservare l’eleganza delle linee ad ala chiusa e a 
                        garantire, grazie alla sua apertura automatica alle alte velocità, il livello di carico aerodinamico indispensabile per una vettura dalle prestazioni straordinarie 
                        come la Ferrari Roma.
                        <br>
                        L’incremento di carico anteriore è affidato principalmente a una coppia di generatori di vortici che agiscono in effetto suolo introducendo una vorticità 
                        concentrata e coerente, oltre a gestire la scia della ruota anteriore con lo scopo di garantire la generazione efficiente di carico.
                    
                    </p>
                
                </div>
            
            </div>

            <div class="row " style="background-image: URL(../../Vari/FerrariRoma5.jpg); width: 100%; margin-left:0  ">

                <div class="col-sm-12 col-md-4 offset-md-4 text-center" style="color: red; font-size: 25px;  ">

                    
                    <br/>
                    <br/>

                    <strong>MOTORE-ZERO TURBO LAG</strong>

                    <p style="font-size: 18px; color: black; word-wrap: break-word; ">

                        Al pari di tutte le altre auto di gamma, anche la Ferrari Roma gode di una risposta pressoché immediata del motore agli input dell’acceleratore grazie al suo 
                        albero piatto, che garantisce maggiore compattezza e contenimento delle masse migliorando così la fluidodinamica; alle dimensioni contenute delle turbine, 
                        meno soggette alle forze inerziali; alla tecnologia twin scroll, che riduce il livello di interferenza tra i cilindri; e al collettore di scarico monoblocco 
                        dotato di condotti di eguale misura per ottimizzare le onde di pressione nella turbina e ridurre le perdite di carico.
                        
                    </p>
                
                </div>

                <div class="col-sm-12 col-md-5" style="color: red; font-size: 25px;  ">

                    <br/>
                    <br/>

                    
                    <strong>MOTORE-VARIABLE BOOST MANAGEMENT</strong>

                    <br/>
                    <br/>
                
                    
                    <p style="font-size: 18px; color: black; word-wrap: break-word; ">

                        
                        La Ferrari Roma è dotata di Variable Boost Management, software di controllo motore sviluppato internamente che varia la coppia erogata in funzione della marcia 
                        utilizzata. Grazie a questa tecnologia la vettura gode di una spinta sempre crescente ottimizzando i consumi. All’aumentare dei rapporti viene accresciuta la 
                        quantità di coppia disponibile fino a raggiungere i 760 Nm in 7° e 8° marcia: ciò ha permesso di utilizzare rapporti più lunghi alle marce alte, utili al 
                        contenimento di consumi ed emissioni, e al contempo di adottare curve di coppia sempre crescenti alle marce basse per garantire una propulsione costante.

                    
                    </p>
                
                </div>

                <div class="col-sm-12 col-md-5 offset-md-1" style="color: red; font-size: 25px;  ">

                    <br/>
                    <br/>

                    
                    <strong>IMPIANTO DI SCARICO</strong>

                    <br/>
                    <br/>
                
                    
                    <p style="font-size: 18px; color: black; word-wrap: break-word;  ">

                        Anche la Ferrari Roma, come tutte le auto del Cavallino Rampante che l’hanno preceduta, è caratterizzata da un sound unico e inconfondibile. A tale scopo è stata 
                        realizzata una nuova geometria della linea di scarico tramite l’eliminazione dei due silenziatori posteriori, che ha permesso di ridurre sensibilmente la 
                        contropressione sulle code; una nuova geometria delle valvole di by-pass, che hanno ora una forma ovale per ridurre notevolmente la contropressione allo scarico e 
                        ottenere un miglioramento della qualità sonora; e il controllo delle valvole di by-pass di tipo “proporzionale” effettuato in modo continuo e progressivo a seconda 
                        della situazione di guida.
                            
                    
                    </p>
                
                </div>
            
            </div>

            <div class="row " style="background-image: URL(../../Vari/FerrariRoma6.jpg); width: 100%; margin-left:0 ">

                <div class="col-sm-12 col-md-5 offset-md-4 text-center" style="color: red; font-size: 25px;  ">

                    
                    <br/>
                    <br/>

                    <strong>PIACERE DI GUIDA AI MASSIMI LIVELLI</strong>

                    <p style="font-size: 18px; color: white; word-wrap: break-word; ">

                        Scocca e telaio della Ferrari Roma sono stati riprogettati applicando le più recenti metodologie di alleggerimento e le più avanzate tecnologie produttive: 
                        la percentuale di componenti totalmente nuova ha raggiunto così il 70%. La Ferrari Roma è la vettura a motore anteriore-centrale 2+ con il miglior rapporto 
                        peso/potenza del segmento (2,37 kg/cv), aspetto che contribuisce a rendere l’auto estremamente facile da guidare, dinamica e reattiva.
                        
                    </p>
                
                </div>

                <div class="col-sm-12 col-md-4" style="color: red; font-size: 25px;  ">

                    <br/>
                    <br/>

                    
                    <strong>Semplicità di guida</strong>

                    <br/>
                    <br/>
                
                    
                    <p style="font-size: 18px; color: white; word-wrap: break-word; ">

                        
                        Lo sviluppo dinamico della Ferrari Roma si è concentrato sulla massimizzazione del fun to drive e della semplicità di guida grazie alla notevole riduzione di 
                        massa e all’introduzione dell’ultima versione del concept di controllo Side Slip Control che include, tra gli altri, i sistemi F1-Traction Control, 
                        Electronic-Differential 3 e Ferrari Dynamic Enhancer. 
                        <br/>
                        La Ferrari Roma propone un notevole contenimento della massa associato a una riduzione dell’altezza del baricentro e, nonostante il passo resti invariato, 
                        anche delle inerzie rispetto ai precedenti modelli GT del marchio. Si è mirato a ottenere un rapporto peso-potenza di 2,37 kg/CV, best-in-class per una V8 2+ a 
                        motore centrale-anteriore, al fine di regalare emozioni di guida mai provate prima. In particolare, la vettura adotta una scocca e un telaio con il 70% di nuovi 
                        componenti che hanno permesso di aumentare la rigidezza torsionale, migliorando l’assorbimento delle asperità stradali e fornendo una sensazione di robustezza 
                        durante la guida.
                    
                    </p>
                
                </div>

                <div class="col-sm-12 col-md-4" style="color: red; font-size: 25px;  ">

                    <br/>
                    <br/>

                    <strong>ELETTRONICA DI BORDO E MANETTINO A 5 POSIZIONI</strong>
                    

                    <br/>
                    <br/>
                
                    
                    <p style="font-size: 18px; color: white; word-wrap: break-word; ">

                        La Ferrari Roma è dotata del concept Side Slip Control 6.0 che coordina gli interventi dei sistemi di controllo del veicolo grazie all’adozione di un algoritmo 
                        di stima dell’angolo di assetto in tempo reale. SSC 6.0 comprende i sistemi E-Diff, F1-Trax, SCM-E Frs e Ferrari Dynamic Enhancer, quest’ultimo in associazione 
                        alla posizione Race del manettino a 5 posizioni (novità assoluta su una vettura GT Ferrari). 
                        
                    
                    </p>
                
                </div>

                <div class="col-sm-12 col-md-4" style="color: red; font-size: 25px;  ">

                    <br/>
                    <br/>

                    
                    <strong>FERRARI DYNAMIC ENHANCER</strong>

                    <br/>
                    <br/>
                
                    
                    <p style="font-size: 18px; color: white; word-wrap: break-word;  height: 550px;">

                        
                        Il sistema Ferrari Dynamic Enhancer, attivo nella sola posizione Race del manettino, controlla la dinamica laterale tramite l’attuazione di una pressione 
                        idraulica puntuale e coerente con la situazione dinamica all’impianto frenante di ciascuna delle quattro ruote. Obiettivo dell’FDE è quello di prevedere la 
                        dinamica laterale del veicolo in percorrenza e uscita curva, semplificando e rendendo più coinvolgente l’azione del pilota su volante e acceleratore.
                    
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