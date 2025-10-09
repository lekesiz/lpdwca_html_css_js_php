# SP - Situations Professionnelles

## 📚 Formation LP DWCA 2025
**Auteur:** Mikail Lekesiz  
**Université:** Strasbourg

---

## 📋 Description

Ce dossier contient les exercices et travaux pratiques de **Situations Professionnelles (SP)** pour la formation LP DWCA.

Chaque étape est organisée dans un sous-dossier dédié avec les fichiers JSON et HTML correspondants.

---

## 📁 Structure du Projet

```
SP/
└── Etape1/                    # Etape 1: JSON To-Do-List
    ├── Etape1A/               # Structure d'une tâche
    │   └── etapa1A.json
    ├── Etape1B/               # Paramètre Priorité
    │   └── etapa1B.json
    ├── Etape1C/               # Autres paramètres
    │   ├── etapa1C_complexite.json
    │   ├── etapa1C_categorie.json
    │   └── etapa1C_duree.json
    ├── Etape1D/               # Tâches complètes
    │   └── etapa1D.json
    └── Etape1E/               # Page HTML d'affichage
        └── etapa1E.html
```

---

## 🎯 Etape 1: JSON To-Do-List

### Objectifs

Comprendre et manipuler le format **JSON** (JavaScript Object Notation) en créant une structure de données pour une application To-Do-List.

### Etape 1A: Structure d'une Tâche

**Fichier:** `Etape1/Etape1A/etapa1A.json`

Création de la structure JSON d'une tâche avec les propriétés suivantes:
- `idTache` - Identifiant unique
- `libelle` - Titre de la tâche
- `description` - Description détaillée
- `dateCreation` - Date de création
- `dateFinalisation` - Date de fin prévue
- `statut` - État de la tâche (Planifiée, En cours, Terminée)
- `auteur` - Créateur de la tâche

**Format:** JSON compacté (une seule ligne)

### Etape 1B: Paramètre Priorité

**Fichier:** `Etape1/Etape1B/etapa1B.json`

Création d'un paramètre "Priorité" sous forme d'array JSON avec 6 niveaux:
1. Critique
2. Très important
3. Important
4. Moyen
5. Peu important
6. Non urgent

Chaque priorité possède:
- `idPriorite` - Identifiant unique
- `priorite` - Libellé de la priorité

**Format:** JSON compacté (une seule ligne)

### Etape 1C: Autres Paramètres

**Fichiers:**
- `Etape1/Etape1C/etapa1C_complexite.json`
- `Etape1/Etape1C/etapa1C_categorie.json`
- `Etape1/Etape1C/etapa1C_duree.json`

Création de 3 paramètres supplémentaires:

**1. Complexité** (5 niveaux)
- Très simple
- Simple
- Moyenne
- Complexe
- Très complexe

**2. Catégorie** (7 types)
- Développement Web
- DevOps & Cloud
- Intelligence Artificielle
- Formation
- Documentation
- Réunion
- Personnel

**3. Durée estimée** (7 plages)
- Moins de 30 minutes
- 30 minutes à 1 heure
- 1 à 2 heures
- 2 à 4 heures
- 4 à 8 heures
- Plus d'une journée
- Plusieurs jours

**Format:** JSON compacté (une seule ligne)

### Etape 1D: Tâches Complètes

**Fichier:** `Etape1/Etape1D/etapa1D.json`

Création d'un array de 4 tâches complètes avec toutes les propriétés de l'Etape 1A **plus** les références aux paramètres:
- `idPriorite` - Référence vers la priorité (Foreign Key)
- `idComplexite` - Référence vers la complexité
- `idCategorie` - Référence vers la catégorie
- `idDuree` - Référence vers la durée

**Important:** Les tâches ne contiennent que les **ID** des paramètres, pas les valeurs complètes. Cela permet de maintenir la cohérence des données et d'éviter la duplication.

**Format:** JSON compacté (une seule ligne)

### Etape 1E: Page HTML d'Affichage

**Fichier:** `Etape1/Etape1E/etapa1E.html`

Page HTML complète qui:
- Charge toutes les données JSON des étapes précédentes
- Affiche les données de manière structurée
- Présente les JSON en format compacté dans des `<pre>`
- Crée des tableaux HTML pour une meilleure lisibilité
- Résout les références (ID → valeur) pour l'affichage des tâches
- Affiche des logs détaillés dans la console (F12)

**Fonctionnalités:**
- Design moderne et responsive
- Tableaux avec hover effects
- Badges colorés selon la priorité et le statut
- Sections organisées par étape
- Console logs pour le debugging

---

## 💻 Utilisation

### Visualiser les Données

1. Ouvrez `Etape1/Etape1E/etapa1E.html` dans un navigateur
2. Les données JSON s'affichent automatiquement
3. Consultez la console (F12) pour voir les données brutes

### Consulter les Fichiers JSON

Chaque fichier JSON peut être ouvert dans un éditeur de texte ou un IDE.

**Format compacté:** Une seule ligne, optimisé pour le stockage
```json
{"idTache":"1","libelle":"Exemple",...}
```

**Format formaté:** Pour une meilleure lisibilité, utilisez un formateur JSON en ligne ou dans votre IDE.

---

## 🎓 Concepts Démontrés

### JSON
- Structure d'objets (`{}`)
- Structure d'arrays (`[]`)
- Paires clé/valeur
- Types de données (string, number)
- Format compacté vs formaté

### Relations de Données
- Primary Key (clé primaire) - `idTache`, `idPriorite`, etc.
- Foreign Key (clé étrangère) - Références entre tâches et paramètres
- Normalisation des données
- Éviter la duplication

### JavaScript
- Chargement de données JSON
- `JSON.stringify()` - Conversion objet → string
- `JSON.parse()` - Conversion string → objet
- Manipulation d'arrays (`find`, `forEach`)
- Génération dynamique de HTML

---

## 📊 Statistiques

**Etape 1:**
- 7 fichiers JSON
- 1 fichier HTML
- 4 tâches d'exemple
- 6 niveaux de priorité
- 5 niveaux de complexité
- 7 catégories
- 7 plages de durée

---

## 🔗 Liens

**Repository GitHub:**  
https://github.com/lekesiz/lpdwca_html_css_js_php

**Chemin:**  
`/js/SP/`

---

## 👨‍💻 Auteur

**Nom:** Mikail Lekesiz  
**Email:** mikail.lekesiz@etu.unistra.fr  
**Formation:** LP DWCA - Université de Strasbourg  
**Entreprise:** Netz Informatique (CEO)

**Liens:**
- Portfolio: https://portfolio.lekesiz.fr
- Entreprise: https://netz-informatique.fr
- GitHub: https://github.com/lekesiz

---

**© 2025 Mikail Lekesiz - Tous droits réservés**  
Formation LP DWCA - Université de Strasbourg

