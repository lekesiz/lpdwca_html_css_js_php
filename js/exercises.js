//console.log()
console.log("Hello, MathInfo!");

//variable type String
var nom="Lekesiz";
let prenom="Mikail";

console.log("Identité : "+nom+' '+prenom);

//array
let notes=[14,18,15];

console.log(notes);
console.log(notes[1]);

//OOJS
/*
dot notation :
object.property
object.method()
*/
//sort()
notes.sort();
console.log(notes);

//push()
notes.push(17,14);
console.log(notes);


//opérateurs +,-,*,/,%
let montantHT=1000;
const _TAUX_TVA=0.2;
let TVA=montantHT*_TAUX_TVA;
let montantTTC=montantHT+TVA;

console.log("Montant HT = "+montantHT+" , TVA = "+TVA+" , Montant TTC = "+montantTTC);


//modulo % : reste de la division
console.log("Le reste de la division par 2 de 5 est "+(5%2));


//boucle for
var n=10;
var somme=0;
let produit=1;

for(let i=1;i<=n;i++){
//somme=somme+i;
somme+=i;
produit=produit*i;
}

console.log("Somme = "+somme);
console.log("Produit = "+produit);

//console.log("i déclaré dans la boucle avec let => "+i);//not defined => let a une portée locale dans une boucle

/*
try {


} catch (error) {
//object properties : error.name , error.message
console.error();
console.log(error);
}
*/

try {
console.log("i declared within a for loop = "+i);//not defined => let is block scoped
} catch (error) {
console.error("i is not defined, no fatal error, the script is still running!");
console.log(error);
console.error(error.name+' : '+error.message);
console.log(error.name+' : '+error.message);
}


//exercices : array à 2 dimensions qui sera la table de multiplication complète de 1 à 10

//test conditionnel if
montantHT=1100;
let tauxRemise;


if(montantHT>=2000) {
tauxRemise=0.1;
} else if(montantHT>=1000 ){//&& montantHT<2000
tauxRemise=0.05;
} else {
tauxRemise=0;
}

var remise=montantHT*tauxRemise;
var montantHTremise=montantHT-remise;
console.log("Montant = "+montantHT+", taux de remise = "+tauxRemise+' , remise = '+remise+', montant HT remisé = '+montantHTremise);


//user defined function
//fonction définie par l'utilisateur
montantHT=1000;
var quantite=2;
TVA=calculTVA(quantite);


function calculTVA(qte){
var valeurTVA=montantHT*qte*_TAUX_TVA;	
return valeurTVA;
}


console.log("montant * quantite = "+(montantHT*quantite)+",\n TVA = "+TVA);
try {
console.log("valeurTVA declarée dans la fct avec var : "+valeurTVA);//vatValue declarée dans la fct avec var a une portée locale à la fct, local scope
} catch (error) {
console.error("valeurTVA déclaré dans la function avec var n'est pas défini, pas d'erreur fatale! Le script s'exécute");
console.log(error);
}