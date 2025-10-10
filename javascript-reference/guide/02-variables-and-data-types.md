# Chapitre 2 : Variables et Types de Données

## 2.1 Les Variables : Stocker l'Information

Une **variable** est comme une boîte étiquetée dans laquelle on peut stocker une information (une valeur). En JavaScript, on déclare une variable avec les mots-clés `let`, `const`, ou `var`.

### `let` : La variable moderne

`let` permet de déclarer une variable dont la valeur peut changer.

```javascript
let age = 30;
console.log(age); // Affiche 30

age = 31; // On peut changer la valeur
console.log(age); // Affiche 31
```

### `const` : La constante

`const` permet de déclarer une variable dont la valeur **ne peut pas changer**. C'est une bonne pratique de l'utiliser par défaut pour éviter les modifications accidentelles.

```javascript
const nom = "Alice";
console.log(nom); // Affiche "Alice"

// nom = "Bob"; // Provoquera une erreur : TypeError: Assignment to constant variable.
```

### `var` : L'ancienne méthode

`var` est l'ancienne façon de déclarer des variables. Elle a un comportement parfois déroutant (scoping de fonction). Il est recommandé d'utiliser `let` et `const` à la place.

| Mot-clé | Réassignable | Portée (Scope) | Recommandation |
|---|---|---|---|
| `let` | ✅ Oui | Bloc (`{ }`) | Utiliser quand la valeur doit changer. |
| `const` | ❌ Non | Bloc (`{ }`) | Utiliser par défaut. |
| `var` | ✅ Oui | Fonction | ⚠️ À éviter dans le code moderne. |

## 2.2 Les Types de Données Primitifs

JavaScript possède plusieurs types de données de base, dits "primitifs".

### 1. `string` (Chaîne de caractères)

Représente du texte. On l'écrit avec des guillemets simples (`' '`), doubles (`" "`), ou obliques (`` ` ``).

```javascript
const prenom = 'Jean';
const message = "Bienvenue sur notre site !";
const salutation = `Bonjour, ${prenom}!`; // Template literals
```

### 2. `number` (Nombre)

Représente les nombres, qu'ils soient entiers ou à virgule flottante.

```javascript
const age = 25;
const prix = 19.99;
const temperature = -10;
```

JavaScript gère aussi des valeurs numériques spéciales comme `Infinity`, `-Infinity`, et `NaN` (Not a Number).

### 3. `boolean` (Booléen)

Représente une valeur de vérité : `true` (vrai) ou `false` (faux). Très utilisé pour les conditions.

```javascript
const estMajeur = true;
const aDesEnfants = false;
```

### 4. `undefined`

Une variable qui a été déclarée mais n'a pas encore reçu de valeur.

```javascript
let score;
console.log(score); // Affiche undefined
```

### 5. `null`

Représente l'absence intentionnelle de valeur. C'est une valeur qu'on assigne explicitement.

```javascript
let utilisateur = null; // L'utilisateur n'est pas connecté
```

### 6. `symbol` (ES6)

Représente une valeur unique et non modifiable, souvent utilisée comme clé d'un objet.

### 7. `bigint` (ES2020)

Représente des nombres entiers de très grande taille.

## 2.3 Le Typage Dynamique

JavaScript est un langage à **typage dynamique**. Cela signifie qu'une même variable peut contenir différents types de données au cours de son existence.

```javascript
let maVariable = "du texte";
console.log(typeof maVariable); // Affiche "string"

maVariable = 42;
console.log(typeof maVariable); // Affiche "number"

maVariable = true;
console.log(typeof maVariable); // Affiche "boolean"
```

L'opérateur `typeof` permet de connaître le type d'une variable.

## 2.4 Les Objets : Un Type Complexe

En plus des types primitifs, JavaScript a un type complexe fondamental : l'**objet** (`object`). Un objet est une collection de paires clé-valeur.

```javascript
const personne = {
    nom: "Dupont",
    prenom: "Alice",
    age: 30,
    estEtudiant: false,
    direBonjour: function() {
        console.log("Bonjour !");
    }
};

// Accéder aux propriétés
console.log(personne.nom); // Affiche "Dupont"
console.log(personne['age']); // Affiche 30

// Appeler une méthode
personne.direBonjour(); // Affiche "Bonjour !"
```

Les tableaux (`array`) et les fonctions (`function`) sont aussi des types d'objets spéciaux en JavaScript.

---

Dans le prochain chapitre, nous aborderons les opérateurs pour manipuler ces variables.

