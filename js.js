var nomverif = document.getElementById("nom"); 

nomverif.addEventListener("blur", verifNom);

     function verifNom()
{
   
 if(document.getElementById("nom").value == "")  
      {
   document.getElementById("nom").style.backgroundColor ="#F35C3F";
            alert("Champ obligatoire");
    return false;
   }
   else
   {
      document.getElementById("nom").style.backgroundColor = "#48b31f";
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
            alert("Champ obligatoire");
    return false;
   }
   else
   {
     prenomverif.style.backgroundColor = "#48b31f";
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
   alert("Champ obligatoire");
    return false;
   }
   else
   {
     codepostalverif.style.backgroundColor = "#48b31f";
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
    else if(mp2verif.value == ""){
         mp2verif.style.backgroundColor ="#F35C3F";
         alert("Champ obligatoire"); 
         return false;
    }
    
   else if(mp2verif.value != "" && mp2verif.value == mpverif.value && mpverif.value != "") 
   {
     mp2verif.style.backgroundColor = "#48b31f";
       mpverif.style.backgroundColor = "#48b31f";
        return true;
      
   }  
}



mpverif.addEventListener("blur", verifMp);

     function verifMp()
{

  if (mpverif.value.length < 4 || mpverif.value.length > 10){
      alert("Votre mot de passe doit contenir entre 4 et 10 caractères");
      mpverif.style.backgroundColor ="#F35C3F";
       return false;
  
  }
   
          
    else if(mpverif.value != "" && mpverif.value.length >= 4 && mpverif.value.length <= 10 ){
        mpverif.style.backgroundColor = "#48b31f";
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


var boutonverif = document.getElementById("formuinscription");
boutonverif.addEventListener("submit", verifForm); 
function verifForm()

{

   var nomOk = verifNom(nomverif);

   var prenomOk = verifPrenom(prenomverif);

   var codepostalOk = verifCodePostal(codepostalverif);
    
   var pseudoOk = verifPseudo(pseudoverif);
    
   var mp2Ok = verifMp2(mp2verif);
    
   var mpOk = verifMp(mpverif);
    
   var mailOk = verifMail2(mailverif);

   

   if(pseudoOk && mailOk && nomOk && prenomOk && codepostalOk && mp2Ok && mpOk){

      return true;
   }

   else

   {

      alert("Veuillez remplir correctement tous les champs");

      return false;

   }

}




 


