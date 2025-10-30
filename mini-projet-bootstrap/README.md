# 🎨 Mini Projet - Bootstrap Framework

**Auteurs:** Mikail Lekesiz & Mickael Hoffer  
**Formation:** LP DWCA 2025/2026  
**Professeur:** Eric Christoffel  
**Date:** Octobre 2025

---

## 📚 À Propos de ce Projet

Ce projet est un **tutoriel complet et accessible** sur **Bootstrap 5**, le framework CSS le plus populaire au monde. Il est conçu pour les débutants qui souhaitent apprendre Bootstrap de manière progressive et pratique.

### 🎯 Objectifs

- Présenter les principes fondamentaux de Bootstrap
- Créer un tutoriel accessible pour des débutants
- Mettre en valeur l'expérimentation pratique
- Fournir des exemples concrets et fonctionnels

---

## 📂 Structure du Projet

```
mini-projet-bootstrap/
├── README.md                    # Ce fichier
├── tutorial/                    # Tutoriel complet
│   ├── 01-introduction.md       # Qu'est-ce que Bootstrap ?
│   ├── 02-installation.md       # Installation et configuration
│   ├── 03-grid-system.md        # Système de grille
│   ├── 04-components.md         # Composants Bootstrap
│   ├── 05-utilities.md          # Classes utilitaires
│   └── 06-customization.md      # Personnalisation
├── examples/                    # Exemples pratiques
│   ├── 01-basic-layout/         # Mise en page de base
│   ├── 02-navigation/           # Barres de navigation
│   ├── 03-forms/                # Formulaires
│   ├── 04-cards/                # Cartes
│   ├── 05-modals/               # Modals et popups
│   └── 06-carousel/             # Carrousels
├── project/                     # Projet final
│   ├── index.html               # Page d'accueil
│   ├── about.html               # Page À propos
│   ├── contact.html             # Page Contact
│   ├── css/                     # Styles personnalisés
│   ├── js/                      # Scripts JavaScript
│   └── images/                  # Images
└── resources/                   # Ressources
    ├── links.md                 # Liens utiles
    ├── references.md            # Références
    └── cheatsheet.md            # Aide-mémoire
```

---

## 🚀 Démarrage Rapide

### Prérequis

- Navigateur web moderne (Chrome, Firefox, Edge, Safari)
- Éditeur de code (VS Code recommandé)
- Connaissances de base en HTML et CSS

### Installation

1. **Cloner le dépôt**
   ```bash
   git clone https://github.com/lekesiz/lpdwca_html_css_js_php.git
   cd lpdwca_html_css_js_php/mini-projet-bootstrap
   ```

2. **Ouvrir avec un serveur local**
   ```bash
   # Avec Python
   python -m http.server 8000
   
   # Avec Node.js
   npx http-server
   
   # Avec PHP
   php -S localhost:8000
   ```

3. **Accéder au projet**
   - Ouvrir http://localhost:8000 dans votre navigateur

---

## 📖 Tutoriel

### 1️⃣ Introduction à Bootstrap

Bootstrap est un framework CSS open-source développé par Twitter. Il permet de créer rapidement des sites web responsives et modernes.

**Avantages:**
- ✅ Responsive par défaut
- ✅ Composants prêts à l'emploi
- ✅ Grid system puissant
- ✅ Large communauté
- ✅ Documentation complète

**Lire le tutoriel complet:** [tutorial/01-introduction.md](./tutorial/01-introduction.md)

### 2️⃣ Installation

Plusieurs méthodes pour installer Bootstrap :

**Via CDN (recommandé pour débuter):**
```html
<!-- CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
```

**Lire le tutoriel complet:** [tutorial/02-installation.md](./tutorial/02-installation.md)

### 3️⃣ Grid System

Le système de grille Bootstrap utilise Flexbox et permet de créer des mises en page responsives.

**Exemple simple:**
```html
<div class="container">
  <div class="row">
    <div class="col-md-6">Colonne 1</div>
    <div class="col-md-6">Colonne 2</div>
  </div>
</div>
```

**Lire le tutoriel complet:** [tutorial/03-grid-system.md](./tutorial/03-grid-system.md)

### 4️⃣ Composants

Bootstrap offre de nombreux composants prêts à l'emploi :

- **Buttons** - Boutons stylisés
- **Cards** - Cartes de contenu
- **Navbar** - Barres de navigation
- **Forms** - Formulaires
- **Modals** - Fenêtres modales
- **Carousel** - Carrousels d'images
- Et bien plus...

**Lire le tutoriel complet:** [tutorial/04-components.md](./tutorial/04-components.md)

---

## 💡 Exemples Pratiques

### Exemple 1: Mise en Page de Base

Créer une page simple avec header, contenu et footer.

**Voir l'exemple:** [examples/01-basic-layout/](./examples/01-basic-layout/)

### Exemple 2: Barre de Navigation

Créer une navbar responsive avec menu déroulant.

**Voir l'exemple:** [examples/02-navigation/](./examples/02-navigation/)

### Exemple 3: Formulaires

Créer des formulaires stylisés et validés.

**Voir l'exemple:** [examples/03-forms/](./examples/03-forms/)

### Exemple 4: Cartes

Utiliser les cartes Bootstrap pour afficher du contenu.

**Voir l'exemple:** [examples/04-cards/](./examples/04-cards/)

### Exemple 5: Modals

Créer des fenêtres modales interactives.

**Voir l'exemple:** [examples/05-modals/](./examples/05-modals/)

### Exemple 6: Carrousels

Créer un carrousel d'images automatique.

**Voir l'exemple:** [examples/06-carousel/](./examples/06-carousel/)

---

## 🎨 Projet Final

Le projet final est un **site web complet** utilisant Bootstrap :

- **Page d'accueil** - Présentation avec hero section
- **Page À propos** - Informations avec timeline
- **Page Contact** - Formulaire de contact fonctionnel

**Voir le projet:** [project/](./project/)

---

## 📚 Ressources

### Documentation Officielle

- [Bootstrap Documentation](https://getbootstrap.com/docs/5.3/)
- [Bootstrap Examples](https://getbootstrap.com/docs/5.3/examples/)
- [Bootstrap Icons](https://icons.getbootstrap.com/)

### Tutoriels Recommandés

- [W3Schools Bootstrap 5](https://www.w3schools.com/bootstrap5/)
- [MDN Web Docs](https://developer.mozilla.org/)
- [FreeCodeCamp Bootstrap](https://www.freecodecamp.org/)

### Outils Utiles

- [Bootstrap Builder](https://bootstrap.build/)
- [Bootsnipp](https://bootsnipp.com/)
- [Start Bootstrap](https://startbootstrap.com/)

**Voir toutes les ressources:** [resources/](./resources/)

---

## 👥 Auteurs

**Mikail Lekesiz**
- Email: mikail.lekesiz@etu.unistra.fr
- GitHub: [@lekesiz](https://github.com/lekesiz)

**Mickael Hoffer**
- Email: mickael.hoffer@gmail.com
- GitHub: [@mickael-hoffer](https://github.com/mickael-hoffer)

---

## 📝 Licence

Ce projet est créé dans le cadre de la formation LP DWCA à l'Université de Strasbourg.

---

## 🙏 Remerciements

- **Professeur Eric Christoffel** - Pour l'enseignement et l'accompagnement
- **Université de Strasbourg** - Pour la formation LP DWCA
- **Bootstrap Team** - Pour le framework génial

---

**© 2025 - LP DWCA - Université de Strasbourg**
