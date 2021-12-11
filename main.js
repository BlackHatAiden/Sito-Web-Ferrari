/*
Permette animazione al click sul menu hamburger basato su toggle checkbox
*/
function myFunction(x) 
{
    x.classList.toggle("change") ;
}

/*
Permette comparsa sezioni in base all'anno nella pagina Storia
*/
function showDiscover(anno)
{
  //cambio la proprietà CSS display dell'elemento con id discover
  document.getElementById('discover').style.display = '' ;
  
  
  //switch sul anno passato alla funzione
  switch(anno)
  {
    case 1 :
      location.href = "#anno1" ;
      break ;

    case 2 :
      location.href = "#anno2" ;
      break ;

    case 3 :
      location.href = "#anno3" ;
      break ;

    case 4 :
      location.href = "#anno4" ;
      break ;

    case 5 :
      location.href = "#anno5" ;
      break ;

    case 6 :
      location.href = "#anno6" ;
      break ;

    case 7 :
      location.href = "#anno7" ;
      break ;

    case 8 :
      location.href = "#anno8" ;
      break ;

    

    default :
      location.href = "#discover" ;

  }
}


/*
Permette ricerca e apertura link
*/
function searchPage()
{
  //preleva l'input dell'utente attraverso id
  var input = document.getElementById("ricerca");


  //preleva il valore dell'input dell'utente e lo mette minuscolo
  var valore = input.value.toLowerCase();


  //rende input vuoto
  input.value = "";

  //trovo path e lo divido in una lista per sezioni
  var dir =  location.pathname.split(`/`) ;
  
  //trovo elemento che mi interessa
  var element = dir[dir.length - 2] ;

  
  //mi serve per capire in base al path dove mi trovo e a quale directory andare per torvare le pagine giuste
  posizione = "" ;

  //controllo se elemento è uguale ad uno di questi ed in basa a ciò decido il path in cui mi trovo
  if( element == "Concessionario" || element == "Contatti" || element == "Innovazione-Eccellenza" || element == "MyFerrari" )
  {
    posizione = "../" ;
  }

  else if(element == "Storia" || element == "Fisico" || element == "Ferrari-Roma" || element == "SF21" || element == "SF90-Spyder" || element == "SF90-Stradale" || element == "Login" || element == "Registrazione" || element == "Gestione" )
  {
    posizione = "../../" ;
  }

  else if(element == "Modena" || element == "Maranello")
  {
    posizione = "../../../" ;
  }

  
  
  //switch sezioni possibili in base al testo digitato e al percorso per arrivarci
  switch(valore) 
  {

    case "home" || "homepage" :

      location.href= posizione + "index.php" ;
      break ;

    case "sf21" :

      location.href= posizione + "Modelli/SF21/index.php" ;
      break ;

    case "ferrari roma" :

      location.href= posizione + "Modelli/Ferrari-Roma/index.php" ;
      break ;

    case "sf90 spyder" || "spyder" :

      location.href = posizione + "Modelli/SF90-Spyder/index.php" ;
      break ;

    case "sf90 stradale" || "stradale" :

      location.href = posizione + "Modelli/SF90-Stradale/index.php" ;
      break ;

    case "storia":

      location.href = posizione + "Universe/Storia/index.php" ;
      break ;

    case "maranello" :

      location.href = posizione + "Universe/Musei/Maranello/index.php" ;
      break ;

    case "modena" :

      location.href = posizione + "Universe/Musei/Modena/index.php" ;
      break ;

    case "news" :

      location.href = "https://www.ferrari.com/it-SM/news" ;
      break ;

    case "online" :

      location.href = "https://store.ferrari.com/it-it/?from=SH" ;
      break ;

    case "fisico" :

      location.href = posizione + "Store/Fisico/index.php" ;
      break ;

    case "concessionario" :

      location.href = posizione + "Concessionario/index.php" ;
      break ;

    case "login" :

      location.href = posizione + "Account/Login/index.php" ;
      break ;

    case "registarzione" :

      location.href = posizione + "Account/Registrazione/index.php" ;
      break ;

    case "myferrari" || "myferrari app" :

      location.href = posizione + "MyFerrari/index.html" ;
      break ;

    case "innovazione & eccellenza" || "innovazione e eccellenza" :

      location.href = posizione + "Innovazione-Eccellenza/index.php" ;
      break;

    case "contatti" :

      
        location.href = posizione + "Contatti/index.php" ;
        break ;
    
    case "gestione account" || "account" || "gestione" :

  
      location.href = posizione + "Account/Gestione/index.php" ;
      break ;
        

    default :

      //Alert
      window.alert("Sezione non trovata") ;
      
      break ;
      
  }

    

}

/*
Funzione che imposta i coockie
strategia chiave valore e durata 0 se
si vuole eliminarli alla chiusura del browser
*/ 
function createCookie(name, value, days) 
{
    var expires;

    if (days) 
    {
        var date = new Date();

        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        
        expires = "; expires=" + date.toGMTString();
    }
    else 
    {
        expires = "";
    }

    document.cookie = name + "=" + value + expires + "; path=/";

}


/*
Funzione che legge i cookie
dato una chiave e trova il valore
*/ 
function getCookie(cname) 
{
      var name = cname + "=";

      var ca = document.cookie.split(';');

      for(var i = 0; i < ca.length; i++) 
      {
          var c = ca[i];

          while (c.charAt(0) == ' ') 
          {
            c = c.substring(1);
          }

          if (c.indexOf(name) == 0) 
          {
            return c.substring(name.length, c.length);
          }

      }

      return "";
}


/*
Funzione che in base alla scelta dell'utente
salva o meno i cookie
*/
function choiseCookie(choise)
{
  //cambio la proprietà CSS display dell'elemento con id banner
  document.getElementById('banner').style.display = 'none' ;

  //crea cookie
  if(choise)
  {
    //crea il cookie con nome valore durata
    createCookie("alfa","uno",0) ;
  }
}

/*
Funzione che permette attesa apparizione banner
solo se il cookie non esiste 
*/ 
setTimeout(() => {
  
  
  //se il cookie con il nome chiave non esiste allora visualizzo il banner, se esiste avrà valore diverso da vuoto
  if(getCookie("alfa") == "")
  {
    
    //cambio la proprietà CSS display dell'elemento con id banner
    document.getElementById('banner').style.display = '' ;
  }
  
}, 2000);




