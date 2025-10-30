# 🔧 Chapitre 2 : Installation et Configuration

## Méthodes d'Installation

Il existe plusieurs façons d'installer Bootstrap dans votre projet. Nous allons voir les 3 méthodes principales.

---

## 1️⃣ Méthode 1 : CDN (Recommandé pour Débuter)

### Qu'est-ce qu'un CDN ?

Un **CDN** (Content Delivery Network) est un réseau de serveurs qui héberge Bootstrap. C'est la méthode la plus rapide et la plus simple pour commencer.

### Avantages

- ✅ Pas de téléchargement nécessaire
- ✅ Mise en cache automatique
- ✅ Chargement rapide
- ✅ Parfait pour les débutants

### Installation via CDN

**Étape 1:** Créez un fichier HTML

```html
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Premier Site Bootstrap</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <h1>Hello, Bootstrap!</h1>
    <button class="btn btn-primary">Mon Premier Bouton</button>
    
    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
```

**Étape 2:** Ouvrez le fichier dans votre navigateur

Vous devriez voir un titre et un bouton bleu stylisé !

---

## 2️⃣ Méthode 2 : Téléchargement

### Télécharger Bootstrap

1. Allez sur [getbootstrap.com](https://getbootstrap.com/)
2. Cliquez sur "Download"
3. Téléchargez la version "Compiled CSS and JS"
4. Décompressez le fichier ZIP

### Structure du Dossier

```
bootstrap-5.3.0/
├── css/
│   ├── bootstrap.min.css        # CSS minifié (production)
│   ├── bootstrap.css            # CSS non minifié (développement)
│   └── bootstrap.min.css.map    # Source map
└── js/
    ├── bootstrap.bundle.min.js  # JS minifié avec Popper
    ├── bootstrap.bundle.js      # JS non minifié avec Popper
    └── bootstrap.bundle.min.js.map
```

### Utilisation

```html
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Site Bootstrap</title>
    
    <!-- Bootstrap CSS Local -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <h1>Hello, Bootstrap!</h1>
    
    <!-- Bootstrap JavaScript Local -->
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
```

---

## 3️⃣ Méthode 3 : NPM (Pour Projets Avancés)

### Installation via NPM

```bash
# Initialiser un projet Node.js
npm init -y

# Installer Bootstrap
npm install bootstrap

# Installer Sass (optionnel)
npm install sass
```

### Utilisation

```javascript
// Dans votre fichier JavaScript
import 'bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';
```

---

## 🎯 Configuration de Base

### 1. Meta Viewport (OBLIGATOIRE)

Cette balise est **essentielle** pour le responsive design :

```html
<meta name="viewport" content="width=device-width, initial-scale=1.0">
```

**Explication:**
- `width=device-width` : La largeur = largeur de l'appareil
- `initial-scale=1.0` : Zoom initial à 100%

### 2. HTML5 Doctype (OBLIGATOIRE)

Bootstrap nécessite HTML5 :

```html
<!DOCTYPE html>
<html lang="fr">
```

### 3. Box-Sizing

Bootstrap utilise `box-sizing: border-box` pour tous les éléments. C'est automatique, pas besoin de l'ajouter !

---

## 📝 Template de Démarrage Complet

Voici un template HTML complet prêt à l'emploi :

```html
<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Métadonnées Requises -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Description de votre site">
    <meta name="author" content="Votre Nom">
    
    <title>Mon Site Bootstrap</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons (Optionnel) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <!-- CSS Personnalisé (Optionnel) -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    
    <!-- Votre Contenu Ici -->
    <div class="container">
        <h1 class="mt-5">Hello, Bootstrap!</h1>
        <p class="lead">Votre site commence ici.</p>
        <button class="btn btn-primary">Commencer</button>
    </div>
    
    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- JavaScript Personnalisé (Optionnel) -->
    <script src="js/script.js"></script>
</body>
</html>
```

---

## 🔍 Vérification de l'Installation

### Test 1 : Bouton Bootstrap

```html
<button class="btn btn-primary">Test</button>
```

✅ **Si le bouton est bleu et stylisé** → Bootstrap fonctionne !  
❌ **Si le bouton est basique** → Vérifiez le lien CSS

### Test 2 : Grid System

```html
<div class="container">
    <div class="row">
        <div class="col-6 bg-primary text-white">Colonne 1</div>
        <div class="col-6 bg-success text-white">Colonne 2</div>
    </div>
</div>
```

✅ **Si vous voyez 2 colonnes côte à côte** → Grid fonctionne !

### Test 3 : Modal (JavaScript)

```html
<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#testModal">
    Ouvrir Modal
</button>

<div class="modal fade" id="testModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Test Modal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                Bootstrap JavaScript fonctionne !
            </div>
        </div>
    </div>
</div>
```

✅ **Si le modal s'ouvre** → JavaScript fonctionne !

---

## 🛠️ Outils de Développement

### 1. Éditeur de Code

**Recommandé : Visual Studio Code**
- Extension : Bootstrap 5 Quick Snippets
- Extension : Live Server
- Extension : Prettier

### 2. Navigateur

**Recommandé : Chrome ou Firefox**
- DevTools pour inspecter
- Responsive Design Mode

### 3. Outils en Ligne

- [CodePen](https://codepen.io/) - Tester rapidement
- [JSFiddle](https://jsfiddle.net/) - Partager des exemples
- [Bootstrap Builder](https://bootstrap.build/) - Générateur visuel

---

## 🎨 Personnalisation (Optionnel)

### Créer un CSS Personnalisé

```css
/* css/style.css */

/* Surcharger les couleurs Bootstrap */
:root {
    --bs-primary: #ff6b6b;
    --bs-secondary: #4ecdc4;
}

/* Ajouter vos propres styles */
.ma-classe-custom {
    background-color: #f0f0f0;
    padding: 20px;
    border-radius: 10px;
}
```

**Important:** Chargez votre CSS **après** Bootstrap :

```html
<link href="bootstrap.min.css" rel="stylesheet">
<link href="style.css" rel="stylesheet"> <!-- Après Bootstrap -->
```

---

## ⚠️ Erreurs Courantes

### Erreur 1 : Oublier le Meta Viewport

```html
<!-- ❌ MAUVAIS -->
<head>
    <link href="bootstrap.min.css" rel="stylesheet">
</head>

<!-- ✅ BON -->
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap.min.css" rel="stylesheet">
</head>
```

### Erreur 2 : Mauvais Ordre CSS/JS

```html
<!-- ❌ MAUVAIS -->
<script src="bootstrap.bundle.min.js"></script>
<link href="bootstrap.min.css" rel="stylesheet">

<!-- ✅ BON -->
<link href="bootstrap.min.css" rel="stylesheet">
<script src="bootstrap.bundle.min.js"></script>
```

### Erreur 3 : Utiliser bootstrap.js au lieu de bootstrap.bundle.js

```html
<!-- ❌ MAUVAIS (nécessite Popper.js séparément) -->
<script src="bootstrap.js"></script>

<!-- ✅ BON (inclut Popper.js) -->
<script src="bootstrap.bundle.min.js"></script>
```

---

## 🚀 Prochaine Étape

Maintenant que Bootstrap est installé, apprenons le **Grid System** !

**Prochain chapitre:** [03 - Grid System](./03-grid-system.md)

---

## 📚 Ressources

- [Documentation d'Installation](https://getbootstrap.com/docs/5.3/getting-started/introduction/)
- [CDN jsDelivr](https://www.jsdelivr.com/package/npm/bootstrap)
- [NPM Bootstrap](https://www.npmjs.com/package/bootstrap)

---

**Auteurs:** Mikail Lekesiz & Mickael Hoffer  
**Formation:** LP DWCA 2025/2026  
**© 2025 - Université de Strasbourg**
