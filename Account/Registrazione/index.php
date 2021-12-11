<?php

    //avvia la sessione quindi ricorda se loggato oppure no
    session_start() ;

?>

<html>
    <head>

        <title>Registrazione </title>

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

        <script type="text/javascript" lang="javascript" src="../Registrazione/script.js"></script> 

        <!--Link foglio di stile css-->
        <link rel="stylesheet" type="text/css" href="style.css"/>

        <!--Script jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


        
        <!--Script jQuery Email-->
        <script>

            //documento pronto
            $(document).ready(function () 
            {

                //nascondo testo
                $("#emailDiversa").hide() ;

                //al cambiamento input
                $("#emailCForm").keyup(function()
                {
                    //controllo se ha lunghezza giusta ed e numerico
                    if($("#emailForm").val() != $("#emailCForm").val())
                    {
                        //mostro testo
                        $("#emailDiversa").show();
                    }
                    else
                    {
                        //nascondo testo
                        $("#emailDiversa").hide();
                    }
                });

            });


        </script>

        <!--Script jQuery Password-->
        <script>

            //documento pronto
            $(document).ready(function () 
            {

                //nascondo testo
                $("#passwordDiversa").hide() ;

                //al cambiamento input
                $("#passwordCForm").keyup(function()
                {
                    //controllo se ha lunghezza giusta ed e numerico
                    if($("#passwordForm").val() != $("#passwordCForm").val())
                    {
                        //mostro testo
                        $("#passwordDiversa").show();
                    }
                    else
                    {
                        //nascondo testo
                        $("#passwordDiversa").hide();
                    }
                });

            });


        </script>

        <!--Script jQuery Cap-->
        <script>

            //documento pronto
            $(document).ready(function () 
            {

                //nascondo testo
                $("#capLN").hide() ;

                //al cambiamento input
                $("#capForm").keyup(function()
                {
                    //controllo se ha lunghezza giusta ed e numerico
                    if($("#capForm").val().length != 5)
                    {
                        //mostro testo
                        $("#capLN").show();
                    }
                    else
                    {
                        //nascondo testo
                        $("#capLN").hide();
                    }
                });

            });


        </script>

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
                        <ul class="navbar-nav mx-auto   " >

                            

                                    <!--Sezione Account-->
                                    <li class="nav-item dropdown mx-5 " >

                                        <a class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <img src="../../Vari/immagineNera.png"  width="30px" height="30px" >
                                        </a>

                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown" >

                                            <?php

                                                //se utente non loggato
                                                if (!isset($_SESSION["nome"]))
                                                {
                                                    //esistono sezioni login e registrazione
                                                    echo '<li><a class="dropdown-item" href="../Login/index.php" >Login</a></li>
                                                        <li><a class="dropdown-item" href="index.php">Registrazione</a></li>';
                                                }
                                                else
                                                {
                                                    //esiste sezione gestione account
                                                    echo '<li><a class="dropdown-item" href="../Gestione/index.php">Gestione Account</a></li>';
                                                }

                                            ?>
                                            
                                        </ul>

                                    </li>
                                
                                

                                    <!--Sezione Modelli-->
                                    <li class="nav-item dropdown mx-5" >

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
                                    <li  onclick="location.href='../../index.php'" >
                                        
                                        <img style="cursor:pointer;" class="navbar-brand mx-5" src="../../Vari/Ferrari1.png"  width="40px" height="55px" >

                                    </li>
                                    
                            
                                    <!--Sezione Store-->
                                    <li class="nav-item dropdown mx-5"  >

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
                           
                        </ul>

                    </div>

            </nav>

            
            <!-- contenitore menu hamburger -->
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

            


            <!--Form Registrazione-->
            <form action="inputRegistrazione.php" method="POST" name="formRegistrazione" class="form-box px-3"  >

                <!--creo tabella -->
                <div class="row" >

                
                    <div class="col-sm-12 col-md-12 text-center">

                        <p style="font-size: 30px; ">

                            <Strong>Registrazione</Strong>

                            <?php

                                //se l'utente ha inserito una mail gia usata la variabile session sara settata e quindi scriveremo il suo contenuto
                                if (isset($_SESSION['x']))
                                {
                                    //se la variabile è settata e diversa dal vuoto
                                    if($_SESSION['x'] != '')
                                    {
                                        //appare errore email gia usata
                                        echo '<br/><Strong style=color:red;>*'.$_SESSION['x'].'</Strong>' ;
                                    }
                                }
                            ?>


                        </p>

                    </div>



                    <!--Email-->
                    <div class="col-sm-12 col-md-4 offset-md-2">

                        <br/>

                        <p style="color: red;">*</p>

                        <div class="form-input">

                            <input name="Email" id="emailForm" type="email"  placeholder="Email"  required autofocus>

                        </div>

                    </div>

                    <div class="col-sm-12 col-md-4 ">

                        <br/>

                        <p style="color: red;">*</p>

                        <div class="form-input">
                            
                            <input name="confEmail" id="emailCForm" type="email"  placeholder="Conferma Email"  required >

                        </div>

                    </div>

                   
                    <!--sezione a comparsa -->
                    <div class="col-sm-12 col-md-2 text-center " id="emailDiversa" style="display: none;">

                        <br/>
                        <br/>

                        <p style="color: red;">
                            * Le email sono diverse
                            
                            
                        </p>
                        

                    </div>
                   

                    <!--Password-->
                    <div class="col-sm-12 col-md-4 offset-md-2">

                        <p style="color: red;">*</p>

                        <div class="form-input">
                            
                        
                            <input name="Password" id=passwordForm type="password"  placeholder="Password"  required >

                        </div>

                    </div>

                    <div class="col-sm-12 col-md-4 ">

                        <p style="color: red;">*</p>

                        <div class="form-input">
                            
                            <input name="confPassword" id=passwordCForm type="password"  placeholder="Conferma Password"  required >

                        </div>

                    </div>

                    <!--sezione a comparsa -->
                    <div class="col-sm-12 col-md-2 text-center " id="passwordDiversa" style="display: none;">

                        <br/>
                        <br/>

                        <p style="color: red;">
                            * Le password sono diverse
                        </p>
                        

                    </div>

                    

                    <div class="col-sm-12 col-md-12 text-center">

                        
                        <p style="font-size: 25px;">
                            <Strong>Informazioni Personali</Strong>
                        </p>

                    </div>

                    <!--Nome-->
                    <div class="col-sm-12 col-md-8 offset-md-2 ">

                        <p style="color: red;">*</p>

                        <div class="form-input">
                            
                            <input name="Nome" type="text"  placeholder="Nome"  required >
                        </div>

                    </div>

                    

                    <!--Cognome-->
                    <div class="col-sm-12 col-md-8 offset-md-2 ">

                        <p style="color: red;">*</p>

                        <div class="form-input">
                            
                            <input name="Cognome" type="text"  placeholder="Cognome"  required >

                        </div>

                        

                    </div>

                    


                    <div class="col-sm-12 col-md-1 offset-md-2 ">

                        <p><Strong style="color: red;">*</Strong><Strong>Sesso</Strong></p>

                    </div>

                    <!--Sesso-->
                    <div class="col-sm-12 col-md-1 offset-md-2 ">

                        <input type="radio" name="Sesso" id="sesso_m" value="M" required>
                        <label for="sesso_m">Maschio</label><br>
                
                    
                    </div>

                    <div class="col-sm-12 col-md-1  ">

                        
                        <input type="radio" name="Sesso" id="sesso_f" value="F" required>
                        <label for="sesso_f">Femmina</label>
                        

                    </div>

                    <div class="col-sm-12 col-md-4 offset-md-2 ">

                        <label>

                            <br/>
                            <br/>

                            <Strong style="color: red;">*</Strong><Strong>Data di nascita</Strong>

                        </label>

                        <!--menu tendina giorno-->
                        <select name="Giorno" required>

                            <option value=""></option>
    
                            
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                            
                            

                        </select>

                        <!--menu tendina mese-->
                        <select name="Mese" required>

                            <option value=""></option>
    
                            
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            
                            

                        </select>

                        <!--menu tendina anno-->
                        <select name="Anno" required>

                            <option value=""></option>
    
                            
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                            <option value="2016">2016</option>
                            <option value="2015">2015</option>
                            <option value="2014">2014</option>
                            <option value="2013">2013</option>
                            <option value="2012">2012</option>
                            <option value="2011">2011</option>
                            <option value="2010">2010</option>
                            <option value="2009">2009</option>
                            <option value="2008">2008</option>
                            <option value="2007">2007</option>
                            <option value="2006">2006</option>
                            <option value="2005">2005</option>
                            <option value="2004">2004</option>
                            <option value="2003">2003</option>
                            <option value="2002">2002</option>
                            <option value="2001">2001</option>
                            <option value="2000">2000</option>
                            <option value="1999">1999</option>
                            <option value="1998">1998</option>
                            <option value="1997">1997</option>
                            <option value="1996">1996</option>
                            <option value="1995">1995</option>
                            <option value="1994">1994</option>
                            <option value="1993">1993</option>
                            <option value="1992">1992</option>
                            <option value="1991">1991</option>
                            <option value="1990">1990</option>
                            <option value="1989">1989</option>
                            <option value="1988">1988</option>
                            <option value="1987">1987</option>
                            <option value="1986">1986</option>
                            <option value="1985">1985</option>
                            <option value="1984">1984</option>
                            <option value="1983">1983</option>
                            <option value="1982">1982</option>
                            <option value="1981">1981</option>
                            <option value="1980">1980</option>
                            <option value="1979">1979</option>
                            <option value="1978">1978</option>
                            <option value="1977">1977</option>
                            <option value="1976">1976</option>
                            <option value="1975">1975</option>
                            <option value="1974">1974</option>
                            <option value="1973">1973</option>
                            <option value="1972">1972</option>
                            <option value="1971">1971</option>
                            <option value="1970">1970</option>
                            
                            
                        </select>

                    </div>


                    <!--Lavoro-->
                    <div class="col-sm-12 col-md-8 offset-md-2  ">

                        
                        <label>

                            <br/>
                            <br/>
                            <Strong>Lavoro</Strong>

                        </label>

                        <!--menu tendina lavoro-->
                        <select name="Lavoro" >

                            <option value=""></option>
    
                            
                            <option value="Architetto">Architetto</option>
                            <option value="Artista/Personaggio Pubblico">Artista/Personaggio Pubblico</option>
                            <option value="Avvocato">Avvocato</option>
                            <option value="Dottore">Dottore</option>
                            <option value="Ereditiero">Ereditiero</option>
                            <option value="Funzionario Pubblico">Funzionario Pubblico</option>
                            <option value="Giornalista">Giornalista</option>
                            <option value="Impiegato">Impiegato</option>
                            <option value="Imprenditore">Imprenditore</option>
                            <option value="Ingegnere">Ingegnere</option>
                            <option value="Libero Professionista">Libero Professionista</option>
                            <option value="Manager">Manager</option>
                            <option value="Pensionato">Pensionato</option>
                            <option value="Sportivo">Sportivo</option>
                            <option value="Studente">Studente</option>
                            <option value="Altro">Altro</option>
                            
                            

                        </select>
                        

                    </div>

                    <div class="col-sm-12 col-md-12  text-center">

                        
                        <p style="font-size: 25px;">
                            <Strong>Indirizzo</Strong>
                        </p>
                        

                    </div>

                    <!--Via-->
                    <div class="col-sm-12 col-md-8 offset-md-2  ">

                        <p style="color: red;">*</p>

                        <div class="form-input">
                            
                            <input name="Via" type="text"  placeholder="Indirizzo di fatturazione"  required >

                        </div>
                        

                    </div>


                    <!--CAP-->
                    <div class="col-sm-12 col-md-1  ">

                        <p style="color: red;">*</p>

                        <div class="form-input">
                            
                            <input name="Cap" id="capForm" type="text"  placeholder="CAP" required >

                        </div>
                        
                        

                    </div>

                    <!--sezione a comparsa -->
                    <div class="col-sm-12 col-md-2 offset-md-4 text-center " id="capLN" style="display: none;" >

                       
                        <p style="color: red;">
                            * Il CAP deve essere di lunghezza 5 <br/>* Il CAP deve essere numerico
                        </p>
                        

                    </div>

                    
                
                    <div class="col-sm-12 col-md-8 offset-md-2  ">

                        
                        <!-- SELECTBOX -->
                        <label type="text">
                            <Strong style="color: red;">*</Strong><Strong>Nazionalità</Strong>
                        </label>

                        <!--Paesi-->
                        <select name="Paese" required>

                        <option value=""></option>

                        <option value="Afghanistan">Afghanistan</option>
                        <option value="Albania">Albania</option>
                        <option value="Algeria">Algeria</option>
                        <option value="Andorra">Andorra</option>
                        <option value="Angola">Angola</option>
                        <option value="Anquilla">Anquilla</option>
                        <option value="Antigua">Antigua</option>
                        <option value="Antille Olandesi">Antille Olandesi</option>
                        <option value="Arabia saudita">Arabia saudita</option>
                        <option value="Argenitna">Argenitna</option>
                        <option value="Armenia">Armenia</option>
                        <option value="Aruba">Aruba</option>
                        <option value="Australia">Australia</option>
                        <option value="Austria">Austria</option>
                        <option value="Azerbaigian">Azerbaigian</option>

                        <option value="Bahamas">Bahamas</option>
                        <option value="Bahrein">Bahrein</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="Barbados">Barbados</option>
                        <option value="Belgio">Belgio</option>
                        <option value="Belize">Belize</option>
                        <option value="Benin">Benin</option>
                        <option value="Bermuda">Bermuda</option>
                        <option value="Bhutan">Bhutan</option>
                        <option value="Bielorussia">Bielorussia</option>
                        <option value="Birmania">Birmania</option>
                        <option value="Bolivia">Bolivia</option>
                        <option value="Bosnia-Erzegovina">Bosnia-Erzegovina</option>
                        <option value="Botsawana">Botsawana</option>
                        <option value="Brasile">Brasile</option>
                        <option value="Bretagna">Bretagna</option>
                        <option value="Brunei">Brunei</option>
                        <option value="Bulgaria">Bulgaria</option>
                        <option value="Burkina Faso">Burkina Faso</option>
                        <option value="Burundi">Burundi</option>
                        
                        <option value="Cambogia">Cambogia</option>
                        <option value="Cameroun">Cameroun</option>
                        <option value="Cananda">Cananda</option>
                        <option value="Capo Verde">Capo Verde</option>
                        <option value="Cayman">Cayman</option>
                        <option value="Ciad">Ciad</option>
                        <option value="Cile">Cile</option>
                        <option value="Cina">Cina</option>
                        <option value="Cipro">Cipro</option>
                        <option value="Città del Vaticano">Città del Vaticano</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Comore">Comore</option>
                        <option value="Corea del nord">Corea del nord</option>
                        <option value="Corea del Sud">Corea del Sud</option>
                        <option value="Costa d'Avorio">Costa d'Avorio</option>
                        <option value="Costarica">Costarica</option>
                        <option value="Croazia">Croazia</option>
                        <option value="Cuba">Cuba</option>

                        <option value="Danimarca">Danimarca</option>
                        <option value="Dominica">Dominica</option>
                        
                        <option value="Ecuador">Ecuador</option>
                        <option value="Egitto">Egitto</option>
                        <option value="El Salavador">El Salavador</option>
                        <option value="Emirati Arabi Uniti">Emirati Arabi Uniti</option>
                        <option value="Eritrea">Eritrea</option>
                        <option value="Estonia">Estonia</option>
                        
                        <option value="Figi">Figi</option>
                        <option value="Filippine">Filippine</option>
                        <option value="Finlandia">Finlandia</option>
                        <option value="Francia">Francia</option>
                    
                        <option value="Gabon">Gabon</option>
                        <option value="Gambia">Gambia</option>
                        <option value="Georgia">Georgia</option>
                        <option value="Germania">Germania</option>
                        <option value="Ghana">Ghana</option>
                        <option value="Giappone">Giappone</option>
                        <option value="Gibilterra">Gibilterra</option>
                        <option value="Gibuti">Gibuti</option>
                        <option value="Giordania">Giordania</option>
                        <option value="Grecia">Grecia</option>
                        <option value="Grenada">Grenada</option>
                        <option value="Groelandia">Groelandia</option>
                        <option value="Guadalupa">Guadalupa</option>
                        <option value="Guatemala">Guatemala</option>
                        <option value="Guinea">Guinea</option>
                        <option value="Guinea Equatoriale">Guinea Equatoriale</option>
                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                        <option value="Guyana">Guyana</option>
                        
                        <option value="India">India</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="Iran">Iran</option>
                        <option value="Iraq">Iraq</option>
                        <option value="Irlanda">Irlanda</option>
                        <option value="Islanda">Islanda</option>
                        <option value="Isole Vergini">Isole Vergini</option>
                        <option value="Isole Vergini Britanniche">Isole Vergini Britanniche</option>
                        <option value="Israele">Israele</option>
                        <option value="Italia">Italia</option>

                        <option value="JJamaica">Jamaica</option>

                        <option value="Kazakhstan">Kazakhstan</option>
                        <option value="Kenya">Kenya</option>
                        <option value="Kirghizstan">Kirghizstan</option>
                        <option value="Kiribati">Kiribati</option>
                        <option value="Kuwait">Kuwait</option>

                        <option value="Laos">Laos</option>
                        <option value="Lapponia">Lapponia</option>
                        <option value="Lesotho">Lesotho</option>
                        <option value="Lettonia">Lettonia</option>
                        <option value="Libano">Libano</option>
                        <option value="Liberia">Liberia</option>
                        <option value="Libia">Libia</option>
                        <option value="Liechtenstein">Liechtenstein</option>
                        <option value="Lituania">Lituania</option>
                        <option value="Lussemburgo">Lussemburgo</option>

                        <option value="Macedonia">Macedonia</option>
                        <option value="Madagascar">Madagascar</option>
                        <option value="Madeira">Madeira</option>
                        <option value="Malawi">Malawi</option>
                        <option value="Maldive">Maldive</option>
                        <option value="Malesia">Malesia</option>
                        <option value="Mali">Mali</option>
                        <option value="Malta">Malta</option>
                        <option value="Marocco">Marocco</option>
                        <option value="Marshall Islands">Marshall Islands</option>
                        <option value="Martinica">Martinica</option>
                        <option value="Mauritania">Mauritania</option>
                        <option value="Mauritius">Mauritius</option>
                        <option value="Messico">Messico</option>
                        <option value="Micronesia">Micronesia</option>
                        <option value="Moldavia">Moldavia</option>
                        <option value="Mongolia">Mongolia</option>
                        <option value="Montenegro">Montenegro</option>
                        <option value="Montserrat">Montserrat</option>
                        <option value="Mozambico">Mozambico</option>
                        
                        <option value="Namibia">Namibia</option>
                        <option value="Nauru">Nauru</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Nicaragua">Nicaragua</option>
                        <option value="Niger">Niger</option>
                        <option value="Nigeria">Nigeria</option>
                        <option value="Norvegia">Norvegia</option>
                        <option value="Nuova Caledonia">Nuova Caledonia</option>
                        <option value="Nuova Zelanda">Nuova Zelanda</option>

                        <option value="Olanda">Olanda</option>
                        <option value="Oman">Oman</option>

                        <option value="Pakistan">Pakistan</option>
                        <option value="Palau">Palau</option>
                        <option value="Palestina">Palestina</option>
                        <option value="Panama">Panama</option>
                        <option value="Papua Nuova Guinea">Papua Nuova Guinea</option>
                        <option value="Paraguay">Paraguay</option>
                        <option value="Perù">Perù</option>
                        <option value="Polinesia Francese">Polinesia Francese</option>
                        <option value="Polonia">Polonia</option>
                        <option value="Portogallo">Portogallo</option>
                        <option value="Portorico">Portorico</option>
                        <option value="Principato di Monaco">Principato di Monaco</option>

                        <option value="Qatar">Qatar</option>

                        <option value="Regno Unito">Regno Unito</option>
                        <option value="Repubblica">Repubblica</option>
                        <option value="Repubblica Centraficana">Repubblica Centraficana</option>
                        <option value="Repubblica del Congo">Repubblica del Congo</option>
                        <option value="Repubblica Dominicana">Repubblica Dominicana</option>
                        <option value="Romania">Romania</option>
                        <option value="Russia">Russia</option>
                        <option value="Rwanda">Rwanda</option>

                        <option value="Sahara occidentale">Sahara occidentale</option>
                        <option value="Saints Kitts e Nevis">Saints Kitts e Nevis</option>
                        <option value="Saint Vincent e Grenadine">Saint Vincent e Grenadine</option>
                        <option value="Samoa">Samoa</option>
                        <option value="San Marino">San Marino</option>
                        <option value="Santa Lucia">Santa Lucia</option>
                        <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                        <option value="Senegal">Senegal</option>
                        <option value="Serbia">Serbia</option>
                        <option value="Seychelles">Seychelles</option>
                        <option value="Sierra Leone">Sierra Leone</option>
                        <option value="Singapore">Singapore</option>
                        <option value="Siria">Siria</option>
                        <option value="Slovacchia">Slovacchia</option>
                        <option value="Slovenia">Slovenia</option>
                        <option value="Solomon Islands">Solomon Islands</option>
                        <option value="Somalia">Somalia</option>
                        <option value="Spagna">Spagna</option>
                        <option value="Sri Lanka">Sri Lanka</option>
                        <option value="Sudafrica">Sudafrica</option>
                        <option value="Sudan">Sudan</option>
                        <option value="Suriname">Suriname</option>
                        <option value="Svezia">Svezia</option>
                        <option value="Svizzera">Svizzera</option>
                        <option value="Swaziland">Swaziland</option>

                        <option value="Tagikstan">Tagikstan</option>
                        <option value="Tanzania">Tanzania</option>
                        <option value="Thailandia">Thailandia</option>
                        <option value="Tikehau">Tikehau</option>
                        <option value="Timor Est">Timor Est</option>
                        <option value="Togo">Togo</option>
                        <option value="Tonga">Tonga</option>
                        <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                        <option value="Tunisia">Tunisia</option>
                        <option value="Turchia">Turchia</option>
                        <option value="Turkmenistan">Turkmenistan</option>
                        <option value="Turks e Caicos">Turks e Caicos</option>
                        <option value="Tuvalu">Tuvalu</option>

                        <option value="Ucraina">Ucraina</option>
                        <option value="Uganda">Uganda</option>
                        <option value="Ungheria">Ungheria</option>
                        <option value="Uruguay">Uruguay</option>
                        <option value="USA">USA</option>
                        <option value="Uzbekistan">Uzbekistan</option>

                        <option value="Vanuatu">Vanuatu</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Vietnam">Vietnam</option>

                        <option value="Yemen">Yemen</option>

                        <option value="Zambia">Zambia</option>
                        <option value="Zimbabwe">Zimbabwe</option>

                        </select>

                        
                    </div>
                

                    
                    <!--Bottone-->
                    <div class="col-sm-12 col-md-5 offset-md-4 ">

                        <br/>
                        
                        <button name="registrationButton" style="width: 80%;"  type="submit" class="btn btn-block text-uppercase" onsubmit="return controllaEmail() && controllaPassword() && controllaCap();" >
                            Registrati
                        </button>
                        

                    </div>

                    
                </div>

            </form>

            
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