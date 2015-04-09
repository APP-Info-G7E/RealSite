var nomverif = document.getElementById("nom"); 

nomverif.addEventListener("blur", verifNom);

     function verifNom()
{
   
 if(document.getElementById("nom").value == "")  
      {
   document.getElementById("nom").style.backgroundColor ="#F35C3F";
            alert("Le nom est obligatoire");
    return false;
   }
   else
   {
      document.getElementById("nom").style.backgroundColor = "#48b31f";
       return true;
      
   }  
}


var adresseverif = document.getElementById("adresse"); 

adresseverif.addEventListener("blur", verifAdresse);

     function verifAdresse()
{
   
 if(document.getElementById("adresse").value == "")  
      {
   document.getElementById("adresse").style.backgroundColor ="#F35C3F";
            alert("L' adresse est obligatoire");
    return false;
   }
   else
   {
      document.getElementById("adresse").style.backgroundColor = "#48b31f";
       return true;
      
   }  
}




var villeverif = document.getElementById("ville"); 

villeverif.addEventListener("blur", verifVille);

     function verifVille()
{
   
 if(document.getElementById("ville").value == "")  
      {
   document.getElementById("ville").style.backgroundColor ="#F35C3F";
            alert("La ville est obligatoire");
    return false;
   }
   else
   {
      document.getElementById("ville").style.backgroundColor = "#48b31f";
       return true;
      
   }  
}


var departementverif = document.getElementById("departement"); 

departementverif.addEventListener("blur", verifDepartement);

     function verifDepartement()
{
   
 if(document.getElementById("departement").value == "")  
      {
   document.getElementById("departement").style.backgroundColor ="#F35C3F";
            alert("Le département est obligatoire");
    return false;
   }
   else
   {
      document.getElementById("departement").style.backgroundColor = "#48b31f";
       return true;
      
   }  
}























var prenomverif = document.getElementById("prenom"); 

prenomverif.addEventListener("blur", verifPrenom);

     function verifPrenom()
{
   
 if( prenomverif.value == "")  
      {
   prenomverif.style.backgroundColor ="#F35C3F";
            alert("Le prénom est obligatoire");
    return false;
   }
   else
   {
     prenomverif.style.backgroundColor = "#48b31f";
      return true; 
   }  
}



var pseudoverif = document.getElementById("pseudo"); 

pseudoverif.addEventListener("blur", verifPseudo);

     function verifPseudo()
{
   
 if( pseudoverif.value.length < 4 || pseudoverif.value.length > 10  )  
      {
   pseudoverif.style.backgroundColor ="#F35C3F";
   alert("Votre pseudo doit contenir entre 4 et 10 caractères");
    return false;
   }
 
    else if (pseudoverif.value != "" && pseudoverif.value.length >= 4 && pseudoverif.value.length <= 10 )
    {
        pseudoverif.style.backgroundColor = "#48b31f";
         return true;
    }
}














var codepostalverif = document.getElementById("codepostale"); 

codepostalverif.addEventListener("blur", verifCodePostal);

     function verifCodePostal()
{
   
 if( codepostalverif.value == "")  
      {
   codepostalverif.style.backgroundColor ="#F35C3F";
   alert("Le code postal est obligatoire");
    return false;
   }
   else
   {
     codepostalverif.style.backgroundColor = "#48b31f";
       return true;
   }  
}



var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
var mailverif = document.getElementById("mail");
mailverif.addEventListener("blur", verifMail2);   

function verifMail2()
{
  
   if(!regex.test(mailverif.value) ||  mailverif.value == "" )
   {
        mailverif.style.backgroundColor ="#F35C3F";
      alert("Format du mail incorrect");
      return false;
   }
   else
   {
     mailverif.style.backgroundColor = "#48b31f";
        return true;
   }
}




var mpverif = document.getElementById("mp"); 
var mp2verif = document.getElementById("mp2");

mp2verif.addEventListener("blur", verifMp2);

     function verifMp2()
{
   
 if( mp2verif.value != mpverif.value)  
      {
   mp2verif.style.backgroundColor ="#F35C3F";
   mpverif.style.backgroundColor ="#F35C3F";
   alert("Mots de passe différents");     
    return false;
   }
    else {
         mp2verif.style.backgroundColor ="#48b31f";
   mpverif.style.backgroundColor ="#48b31f";
    }
}






var boutonverif = document.getElementById("formuinscription");
boutonverif.addEventListener("submit", verifForm); 
function verifForm()

{

   var nomOk = verifNom(nomverif);

   var prenomOk = verifPrenom(prenomverif);

   var codepostalOk = verifCodePostal(codepostalverif);
    
   var pseudoOk = verifPseudo(pseudoverif);
    
    
   var adresseOk = verifAdresse(adresseverif);
    
     var villeOk = verifVille(villeverif);
    
     var mailOk = verifMail2(mailverif);

   

   if(pseudoOk && mailOk && nomOk && prenomOk && codepostalOk && adresseOK && villeOK ){
       
alert("Profil mis à jour");
      return true;
   }

   else

   {

      alert("Veuillez remplir correctement tous les champs");

      return false;

   }

}




 









