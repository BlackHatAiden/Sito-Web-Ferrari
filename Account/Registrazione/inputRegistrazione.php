</html>

    <head></head>

    </body>

        <?php


            //avvio la sessione
            session_start();
            
            //connessione con database
            $dbconn = pg_connect(" host=localhost port=5432 dbname=Login user=postgres password=Password1" ) or die ("Could not connect :".pg_last_error() ) ;

            

            //controllo esistenza ed premuta bottone evita indirizzamento diretto a registrazione.php
            if ( !(isset($_POST["registrationButton"]))) 
            {
                //reinderizzo alla pagina di registrazione
                header ("Location: index.php") ;
            }
            else 
            {

                //prelevo email
                $email = $_POST["Email"] ;

                //creo query
                $q1 = 'select * from public."Utente" where email=$1' ;

                //effettuo query
                $result = pg_query_params($dbconn, $q1, array($email)) ;

                //controllo se esiste un utente con quell'indirizzo email cioè se è gia registrato
                if ( ($line = pg_fetch_array($result, null, PGSQL_ASSOC)))
                {
                    
                    //salvo contenuto
                    $_SESSION['x'] = 'Email gia Registrata' ;

                    //reinderizzo alla pagina di registrazione aggiornata
                    header ("Location: index.php") ;

                
                }
                //se non è registrato 
                else 
                {

                    //azzero variabile perchè significa che l'email è giusta
                    $_SESSION['x'] = '' ;
                    
                    //prelevo le informazioni
                    $nome = $_POST["Nome"] ;
                    $cognome = $_POST ["Cognome"] ;
                    $sesso = $_POST["Sesso"] ;

                    $giorno= $_POST["Giorno"] ;
                    $mese = $_POST["Mese"] ;
                    $anno = $_POST["Anno"] ;

                    $data = ''.$giorno.'-'.$mese.'-'.$anno ;
                    $lavoro = $_POST["Lavoro"] ;
                    $via = $_POST ["Via"] ;

                    $cap = $_POST ["Cap"] ;
                    $paese = $_POST ["Paese"] ;
                    $password = $_POST["Password"] ;

                    //con crittografia
                    //$password = md5($_POST["Password"] ) ; 

                    //creazione query di inserimento
                    $q2 = 'insert into public."Utente" values($1, $2, $3, $4, $5, $6, $7, $8, $9, $10)' ;

                    //effettua query
                    $queryFinale = pg_query_params($dbconn, $q2, array($email, $nome, $cognome, $sesso, $data, $lavoro, $via, $cap, $paese, $password)) ;

                    //controllo risultato true query
                    if($queryFinale) 
                    {
                        //reinderizzo alla pagina di login
                        header ("Location: ../Login/index.php") ; 
                        
                    }
                        
                }
            }

        ?>
        
    </body>
    
</html>