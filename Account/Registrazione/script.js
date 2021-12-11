/*
La funzione controlla che le email coincidano serve per non far inviare al form informazioni sbagliate verso db
*/
function controllaEmail()
{
    //prelevo email
    var email = document.formRegistrazione.Email ;
    
    //prelevo conferma email
    var confEmail  = document.formRegistrazione.confEmail ;

    //controllo se sono diverse
    if(email.value != confEmail.value)
    {
        return false;
    }

    return true; 
}

/*
La funzione controlla che le password inserite coincidano e rispettino vincoli su essa serve per non far inviare al form informazioni sbagliate verso db
 */
function controllaPassword()
{
    //prelevo password
    var password = document.formRegistrazione.Password ;

    //prelevo conferma password
    var confPassword  = document.formRegistrazione.confPassword ;

    //controllo se sono diverse
    if(password.value != confPassword.value)
    {
        return false;
    }

    return true;
    
}

/*
 La funzione controlla se il cap ha lunghezza 5 ed è un cap valido serve per non far inviare al form informazioni sbagliate verso db
 */
function controllaCap()
{
    //controllo se la lunghezza del cap è diversa da 5 oppure non è numerico
    if(document.formRegistrazione.Cap.value.length != 5 || isNaN(parseInt(document.formRegistrazione.Cap.value)))
    {
        return false;
    }

    return true;
    
    
}


