# CSS Grid vs Flexbox
## Guide Comparatif et Pratique

**Mini-Projet - Université de Strasbourg**  
**Cours : Langages HTML et CSS**  
**Novembre 2025**

---

## 📋 Plan de la Présentation

1. Introduction et Contexte
2. Flexbox : Le Système 1D
3. CSS Grid : Le Système 2D
4. Comparaison Détaillée
5. Cas d'Usage Pratiques
6. Démonstrations
7. Recommandations
8. Conclusion

---

## 🎯 Objectifs

Cette présentation vise à :

- Comprendre les différences fondamentales entre Flexbox et Grid
- Identifier les cas d'usage optimaux pour chaque technologie
- Apprendre à combiner les deux systèmes efficacement
- Maîtriser les meilleures pratiques de mise en page moderne

---

## 📚 Contexte Historique

### Avant Flexbox et Grid

Les développeurs utilisaient des méthodes détournées pour créer des layouts :

- **Tableaux HTML** : Mélange de contenu et présentation
- **Floats CSS** : Non conçus pour la mise en page
- **Positionnement absolu** : Difficile à maintenir

### L'Évolution

- **2009** : Première proposition de Flexbox
- **2012** : Flexbox devient recommandation candidate W3C
- **2011** : Première proposition de CSS Grid
- **2017** : CSS Grid devient recommandation W3C
- **2017** : Support simultané dans tous les navigateurs majeurs

---

## 🔷 Flexbox : Le Système Unidimensionnel

### Principe Fondamental

Flexbox organise les éléments dans **une seule direction** :
- Soit en **ligne** (horizontalement)
- Soit en **colonne** (verticalement)

### Concepts Clés

| Concept | Description |
|---------|-------------|
| **Axe principal** | Direction principale du flux (row ou column) |
| **Axe transversal** | Direction perpendiculaire à l'axe principal |
| **Flex container** | Parent avec `display: flex` |
| **Flex items** | Enfants directs du container |

### Propriétés Principales

**Sur le conteneur :**
- `flex-direction` : Direction du flux
- `justify-content` : Alignement sur l'axe principal
- `align-items` : Alignement sur l'axe transversal
- `flex-wrap` : Passage à la ligne
- `gap` : Espacement entre éléments

**Sur les éléments :**
- `flex-grow` : Capacité à grandir
- `flex-shrink` : Capacité à rétrécir
- `flex-basis` : Taille de base
- `align-self` : Alignement individuel

---

## 🔶 CSS Grid : Le Système Bidimensionnel

### Principe Fondamental

CSS Grid contrôle **deux dimensions simultanément** :
- **Lignes** (rows) ET **colonnes** (columns)
- Placement précis dans une grille

### Concepts Clés

| Concept | Description |
|---------|-------------|
| **Grid container** | Parent avec `display: grid` |
| **Grid items** | Enfants directs du container |
| **Grid lines** | Lignes délimitant la grille (numérotées) |
| **Grid cells** | Intersection d'une ligne et d'une colonne |
| **Grid areas** | Zones nommées de la grille |

### Propriétés Principales

**Sur le conteneur :**
- `grid-template-columns` : Définition des colonnes
- `grid-template-rows` : Définition des lignes
- `grid-template-areas` : Zones nommées
- `gap` : Espacement entre cellules
- `justify-items` / `align-items` : Alignement des éléments

**Sur les éléments :**
- `grid-column` : Position en colonnes
- `grid-row` : Position en lignes
- `grid-area` : Zone nommée ou position complète

---

## ⚖️ Comparaison Détaillée

### Tableau Comparatif

| Critère | Flexbox | CSS Grid |
|---------|---------|----------|
| **Dimensions** | 1D (ligne OU colonne) | 2D (lignes ET colonnes) |
| **Contrôle** | Les enfants influencent | Le parent contrôle |
| **Cas d'usage** | Composants, navigation | Layouts de page, grilles |
| **Alignement** | Excellent en 1D | Excellent en 2D |
| **Complexité** | Plus simple | Plus de propriétés |
| **Responsive** | Naturellement fluide | Structuré avec media queries |

### Modèle Mental

**Flexbox** : Pensez "flux de contenu"
- Les éléments s'adaptent à l'espace disponible
- Direction unique
- Flexible et adaptatif

**Grid** : Pensez "structure de page"
- Grille prédéfinie
- Placement précis
- Structuré et prévisible

---

## 💡 Cas d'Usage Pratiques

### Utilisez FLEXBOX pour :

✅ **Navigation horizontale ou verticale**
```css
.nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
}
```

✅ **Centrage d'éléments**
```css
.center {
    display: flex;
    justify-content: center;
    align-items: center;
}
```

✅ **Barres d'outils et headers**
✅ **Cartes de contenu**
✅ **Formulaires inline**

### Utilisez CSS GRID pour :

✅ **Layout de page complet**
```css
.page {
    display: grid;
    grid-template-areas:
        "header header"
        "sidebar main"
        "footer footer";
}
```

✅ **Galeries d'images**
```css
.gallery {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 1rem;
}
```

✅ **Dashboards**
✅ **Grilles de produits**
✅ **Layouts magazine complexes**

---

## 🎨 Démonstrations

### Démo 1 : Navigation avec Flexbox

**HTML**
```html
<nav class="nav">
    <div class="logo">MonSite</div>
    <ul class="nav-links">
        <li><a href="#">Accueil</a></li>
        <li><a href="#">À propos</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
</nav>
```

**CSS**
```css
.nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem;
}

.nav-links {
    display: flex;
    gap: 2rem;
    list-style: none;
}
```

### Démo 2 : Layout de Page avec Grid

**HTML**
```html
<div class="page">
    <header class="header">Header</header>
    <nav class="nav">Navigation</nav>
    <aside class="sidebar">Sidebar</aside>
    <main class="main">Contenu Principal</main>
    <footer class="footer">Footer</footer>
</div>
```

**CSS**
```css
.page {
    display: grid;
    grid-template-columns: 200px 1fr;
    grid-template-rows: auto auto 1fr auto;
    grid-template-areas:
        "header header"
        "nav nav"
        "sidebar main"
        "footer footer";
    gap: 1rem;
    min-height: 100vh;
}

.header { grid-area: header; }
.nav { grid-area: nav; }
.sidebar { grid-area: sidebar; }
.main { grid-area: main; }
.footer { grid-area: footer; }
```

### Démo 3 : Combinaison Grid + Flexbox

**Stratégie recommandée :**
- **Grid** pour la structure globale
- **Flexbox** pour les composants internes

```css
/* Grid pour la page */
.page {
    display: grid;
    grid-template-columns: 250px 1fr;
}

/* Flexbox pour le header */
.header {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

/* Flexbox pour les cartes */
.card {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}
```

---

## 🎯 Arbre de Décision

### Comment Choisir ?

```
Avez-vous besoin de contrôler 2 dimensions ?
│
├─ OUI → Utilisez CSS GRID
│   ├─ Layout de page complet
│   ├─ Galerie d'images
│   └─ Dashboard complexe
│
└─ NON → Avez-vous besoin d'alignement flexible ?
    │
    ├─ OUI → Utilisez FLEXBOX
    │   ├─ Navigation
    │   ├─ Centrage
    │   └─ Composants UI
    │
    └─ Cas simple → FLEXBOX suffit
```

### Questions à se Poser

1. **Combien de dimensions ?** → 1D = Flex, 2D = Grid
2. **Qui contrôle ?** → Enfants = Flex, Parent = Grid
3. **Quelle complexité ?** → Simple = Flex, Complexe = Grid
4. **Quel niveau ?** → Composant = Flex, Page = Grid

---

## ✨ Meilleures Pratiques

### Principes Généraux

1. **Commencez simple** : N'utilisez pas Grid si Flexbox suffit
2. **Mobile-first** : Concevez d'abord pour mobile
3. **Nommez vos zones** : Utilisez `grid-template-areas` pour la lisibilité
4. **Combinez les deux** : Grid pour la structure, Flexbox pour les composants

### Accessibilité

⚠️ **Attention à l'ordre visuel**
- `order` (Flexbox) et placement Grid changent l'ordre visuel
- Les lecteurs d'écran suivent l'ordre du DOM
- Testez toujours la navigation au clavier

### Performance

✅ **Bonnes pratiques**
- Utilisez `gap` plutôt que des marges
- Préférez `transform` pour les animations
- Évitez les grilles trop complexes (centaines de cellules)

### Responsive

**Flexbox** : Naturellement responsive avec `flex-wrap`

**Grid** : Utilisez `auto-fit` et `minmax()` pour le responsive automatique

```css
grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
```

---

## 📊 Exemples Réels

### Exemple 1 : Site E-commerce

**Structure globale** : CSS Grid
```css
.shop-layout {
    display: grid;
    grid-template-columns: 250px 1fr;
    grid-template-areas:
        "header header"
        "filters products";
}
```

**Grille de produits** : CSS Grid
```css
.products {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    gap: 2rem;
}
```

**Carte produit** : Flexbox
```css
.product-card {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}
```

### Exemple 2 : Dashboard Admin

**Layout principal** : CSS Grid
```css
.dashboard {
    display: grid;
    grid-template-columns: 200px 1fr 300px;
    grid-template-rows: 60px 1fr;
    grid-template-areas:
        "sidebar header header"
        "sidebar main widgets";
}
```

**Widgets** : CSS Grid
```css
.widgets {
    display: grid;
    grid-template-rows: repeat(auto-fit, minmax(150px, 1fr));
    gap: 1rem;
}
```

**Navigation** : Flexbox
```css
.nav {
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
}
```

---

## 🔧 Outils et Ressources

### Apprentissage Interactif

- **Flexbox Froggy** : https://flexboxfroggy.com/#fr
- **Grid Garden** : https://cssgridgarden.com/#fr

### Documentation

- **MDN Flexbox** : https://developer.mozilla.org/fr/docs/Web/CSS/CSS_Flexible_Box_Layout
- **MDN Grid** : https://developer.mozilla.org/fr/docs/Web/CSS/CSS_Grid_Layout
- **CSS-Tricks Flexbox** : https://css-tricks.com/snippets/css/a-guide-to-flexbox/
- **CSS-Tricks Grid** : https://css-tricks.com/snippets/css/complete-guide-grid/

### Générateurs

- **Grid Generator** : https://grid.layoutit.com/
- **Flexbox Generator** : https://flexbox.help/

---

## 💡 Points Clés à Retenir

### Flexbox

✅ **Unidimensionnel** (1D)  
✅ **Flexible et adaptatif**  
✅ **Parfait pour les composants**  
✅ **Les enfants contrôlent leur taille**  
✅ **Excellent pour l'alignement**

### CSS Grid

✅ **Bidimensionnel** (2D)  
✅ **Structuré et prévisible**  
✅ **Parfait pour les layouts de page**  
✅ **Le parent contrôle la disposition**  
✅ **Placement précis**

### La Combinaison Gagnante

🎯 **Grid pour la structure globale**  
🎯 **Flexbox pour les composants internes**  
🎯 **Choisir selon le contexte**  
🎯 **Maîtriser les deux systèmes**

---

## 🎓 Conclusion

### Ce que nous avons appris

- Flexbox et Grid sont **complémentaires**, pas concurrents
- Chaque système a ses **forces** et ses **cas d'usage optimaux**
- La **combinaison** des deux est la clé du succès
- Le choix dépend du **contexte** et des **besoins**

### Recommandations Finales

1. **Pratiquez** avec les deux systèmes
2. **Expérimentez** différentes approches
3. **Combinez** Grid et Flexbox intelligemment
4. **Testez** toujours le responsive et l'accessibilité

### L'Avenir du Web Design

CSS Grid et Flexbox représentent l'avenir de la mise en page web. Leur maîtrise est essentielle pour tout développeur web moderne. Continuez à apprendre, expérimenter et créer des interfaces web élégantes et performantes.

---

## 📚 Références

1. W3C - CSS Flexible Box Layout Module Level 1
2. W3C - CSS Grid Layout Module Level 1
3. MDN Web Docs - CSS Flexible Box Layout
4. MDN Web Docs - CSS Grid Layout
5. CSS-Tricks - Complete Guide to Flexbox
6. CSS-Tricks - Complete Guide to Grid

---

## 🙏 Merci !

**Questions ?**

---

**Mini-Projet : CSS Grid vs Flexbox**  
**Université de Strasbourg**  
**Cours : Langages HTML et CSS**  
**Novembre 2025**
