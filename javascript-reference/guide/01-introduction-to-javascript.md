# Chapitre 1 : Introduction au JavaScript

## 1.1 Qu'est-ce que le JavaScript ?

Le **JavaScript** (souvent abrégé en "JS") est un langage de programmation de scripts léger, interprété, et orienté objet. Il est surtout connu comme le langage de script des pages web, mais il est également utilisé dans de nombreux environnements hors des navigateurs, comme Node.js.

> "JavaScript est un langage de programmation qui permet de créer du contenu mis à jour de façon dynamique, de contrôler le multimédia, d'animer des images, et tout ce à quoi on peut penser." - [Mozilla Developer Network (MDN)](https://developer.mozilla.org/fr/docs/Web/JavaScript)

C'est l'une des trois technologies fondamentales du World Wide Web, avec HTML et CSS :

| Technologie | Rôle | Description |
|---|---|---|
| **HTML** | Structure | Définit la structure et le contenu de la page web (titres, paragraphes, images). |
| **CSS** | Présentation | Met en forme le contenu HTML (couleurs, polices, mise en page). |
| **JavaScript** | Comportement | Rend la page interactive et dynamique (animations, formulaires, mises à jour). |

## 1.2 Un peu d'histoire

- **1995** : Créé par Brendan Eich chez Netscape en seulement 10 jours. Son nom original était "Mocha", puis "LiveScript", et enfin "JavaScript" pour des raisons marketing, afin de capitaliser sur la popularité de Java.
- **1997** : Standardisé par Ecma International sous le nom de **ECMAScript** (ES). C'est le standard, JavaScript est l'implémentation la plus connue.
- **2009** : Naissance de **Node.js**, qui permet d'exécuter du JavaScript côté serveur.
- **2015** : Sortie de **ECMAScript 6 (ES6)**, une mise à jour majeure qui a modernisé le langage avec de nombreuses nouvelles fonctionnalités (classes, modules, promesses, etc.).

## 1.3 Pourquoi apprendre le JavaScript en 2025 ?

JavaScript est plus pertinent que jamais. Voici pourquoi :

1. **Universalité** : C'est le seul langage qui fonctionne nativement dans tous les navigateurs web.
2. **Polyvalence** : 
   - **Frontend** : React, Angular, Vue.js
   - **Backend** : Node.js, Deno
   - **Mobile** : React Native, NativeScript
   - **Desktop** : Electron
   - **Jeux** : Phaser, Babylon.js
   - **Machine Learning** : TensorFlow.js
3. **Écosystème immense** : Des millions de packages disponibles via **npm** (Node Package Manager).
4. **Communauté active** : Une des plus grandes communautés de développeurs au monde.
5. **Haute performance** : Les moteurs JavaScript modernes (comme V8 de Google) sont extrêmement rapides.

## 1.4 Que peut-on faire avec JavaScript ?

- **Interactivité des sites web** : Menus déroulants, formulaires interactifs, galeries d'images.
- **Applications web complexes (SPA)** : Gmail, Google Maps, Facebook.
- **Serveurs web** : Créer des API RESTful avec Node.js et Express.
- **Jeux vidéo** : Créer des jeux 2D et 3D qui tournent dans le navigateur.
- **Visualisation de données** : Graphiques interactifs avec D3.js ou Chart.js.
- **Et bien plus encore...**

## 1.5 Votre premier code JavaScript

Traditionnellement, le premier programme que l'on écrit est "Hello, World!". Voici comment le faire en JavaScript.

### Dans la console du navigateur

1. Ouvrez votre navigateur (Chrome, Firefox, etc.).
2. Faites un clic droit sur la page et sélectionnez "Inspecter".
3. Allez dans l'onglet "Console".
4. Tapez le code suivant et appuyez sur Entrée :

```javascript
console.log("Hello, World!");
```

### Dans une page HTML

Créez un fichier `index.html` avec le contenu suivant :

```html
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mon premier JS</title>
</head>
<body>

    <script>
        // Affiche une boîte de dialogue
        alert("Hello, World!");
    </script>

</body>
</html>
```

Ouvrez ce fichier dans votre navigateur. Une boîte de dialogue apparaîtra.

---

Dans le prochain chapitre, nous explorerons les variables et les types de données en JavaScript.

