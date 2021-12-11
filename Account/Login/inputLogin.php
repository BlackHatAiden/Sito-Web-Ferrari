<html>

    <head></head>

    </body>

        <?php    

            //avvio la sessione
            session_start();
        
            //connessione con database
            $dbconn = pg_connect(" host=localhost port=5432 dbname=Login user=postgres password=Password1" ) or die ("Could not connect :".pg_last_error() ) ;

        
            //controllo esistenza ed premuta bottone evita indirizzamento diretto a registrazione.php
            if ( !(isset($_POST["loginButton"]))) 
            {
                
                //reinderizzo alla pagina di login
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

                //controllo se esiste un utente con quell'indirizzo email
                if ( !($line = pg_fetch_array($result, null, PGSQL_ASSOC)))
                {
                    

                    //salvo contenuto
                    $_SESSION['x'] = 'Email Sbagliata' ;

                    //reinderizzo alla pagina di login aggiornata
                    header ("Location: index.php") ;

                    
                
                }
                //se esiste
                else 
                {
                    //azzero variabile perchè significa che l'email è giusta
                    $_SESSION['x'] = '' ;

                    //prelevo password
                    $password = $_POST["Password"]  ;

                    //creo query
                    $q2 = 'select * from public."Utente" where email=$1 and password=$2' ;

                    //effettuo query
                    $result = pg_query_params($dbconn, $q2, array($email, $password)) ;

                    //controllo se esiste un utente con quell'indirizzo email e quella password
                    if ( !($line = pg_fetch_array($result, null, PGSQL_ASSOC)) )
                    {
                        //salvo contenuto
                        $_SESSION['y'] = 'Password Sbagliata' ;

                        //reinderizzo alla pagina di login
                        header ("Location: index.php") ;
                    }
                    //se esiste
                    else 
                    {
                        
                        //salvo il nome
                        $_SESSION['nome'] = $line['nome'] ;

                        //salvo email
                        $_SESSION['email'] = $line['email'] ;
                        
                        //reinderizzo alla homepage
                        header ("Location: ../../index.php") ;

                        
                    }

                }
            }
            

        ?>
      
    </body>
    
</html>