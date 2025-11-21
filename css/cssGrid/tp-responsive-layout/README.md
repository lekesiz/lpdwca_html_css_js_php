# TP CSS Grid - Layout Responsive

## Description

Ce travail pratique démontre l'utilisation de **CSS Grid** pour créer une mise en page responsive qui s'adapte automatiquement aux différentes tailles d'écran (Desktop, Tablet, Mobile).

## Objectifs Pédagogiques

- Maîtriser les propriétés CSS Grid (`display: grid`, `grid-template-areas`, `grid-template-columns`, etc.)
- Comprendre et implémenter un design responsive avec media queries
- Créer une structure de page moderne avec header, navigation, sidebar, contenu principal, aside et footer
- Utiliser `grid-template-areas` pour une organisation claire et maintenable du code

## Structure du Layout

### Desktop (≥ 1024px)
- **3 colonnes** : Sidebar (200px) | Main (flexible) | Aside (250px)
- Disposition complète avec tous les éléments visibles côte à côte

### Tablet (768px - 1023px)
- **2 colonnes** : Main | Aside
- Sidebar s'affiche en pleine largeur au-dessus du contenu principal

### Mobile (< 768px)
- **1 colonne** : Tous les éléments empilés verticalement
- Ordre optimisé pour la lecture mobile

## Propriétés CSS Grid Utilisées

```css
.grid-container {
  display: grid;
  grid-template-columns: 200px 1fr 250px;
  grid-template-rows: auto auto 1fr auto;
  grid-template-areas:
    "header header header"
    "nav nav nav"
    "sidebar main aside"
    "footer footer footer";
  gap: 1rem;
}
```

## Zones de Grille (Grid Areas)

- **header** : En-tête de la page
- **nav** : Menu de navigation
- **sidebar** : Barre latérale gauche (catégories)
- **main** : Contenu principal
- **aside** : Barre latérale droite (informations complémentaires)
- **footer** : Pied de page

## Fichiers

- `index.html` : Page HTML complète avec CSS intégré
- `README.md` : Ce fichier de documentation

## Visualisation

Ouvrez `index.html` dans votre navigateur et redimensionnez la fenêtre pour observer les différentes dispositions responsive.

## Technologies

- HTML5
- CSS3 (Grid Layout)
- Media Queries pour le responsive design

## Auteur

Projet réalisé dans le cadre du cours "Langages HTML et CSS" - Université de Strasbourg

## Date

Novembre 2025
