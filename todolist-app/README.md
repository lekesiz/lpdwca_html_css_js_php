# To-Do-List Application

## 📚 Formation LP DWCA 2025
**Auteur:** Mikail Lekesiz  
**Université:** Strasbourg

---

## 📋 Description

Application complète de gestion de tâches (To-Do-List) développée en **HTML, CSS et JavaScript** avec utilisation du **localStorage** pour la persistance des données.

Cette application Front-End pure (sans backend ni base de données) permet de créer, modifier, terminer et supprimer des tâches avec une interface moderne et responsive.

---

## 🎯 Objectifs Pédagogiques

- Comprendre le format **JSON** et sa manipulation en JavaScript
- Maîtriser l'**API localStorage** du navigateur
- Créer des formulaires **dynamiques** avec JavaScript
- Développer une interface **responsive** (mobile-friendly)
- Implémenter un **dashboard** interactif
- Gérer l'état d'une application Front-End

---

## 📁 Structure du Projet

```
todolist-app/
├── index.html                    # Application complète (Etape N4)
├── N2a_form_statique.html       # Formulaire statique (Etape N2a)
├── N2b_form_dynamique.html      # Formulaire dynamique (Etape N2b)
├── N3_localStorage.html         # Avec localStorage (Etape N3)
└── README.md                    # Documentation
```

---

## 🚀 Étapes de Développement

### Etape N1: Données JSON ✅
**Fichiers:** Voir dossier `/js/json/todolist/`

Structure des données au format JSON:
- Tâches avec propriétés (libellé, description, dates, etc.)
- Paramètres: Priorité, Complexité, Catégorie, Durée
- Relations via identifiants (clés primaires et étrangères)

### Etape N2a: Formulaire Statique ✅
**Fichier:** `N2a_form_statique.html`

Formulaire HTML "écrit à la main":
- Tous les champs codés en dur
- Listes déroulantes statiques
- Design responsive (mobile-friendly)
- Validation HTML5

### Etape N2b: Formulaire Dynamique ✅
**Fichier:** `N2b_form_dynamique.html`

Formulaire généré dynamiquement:
- Création des champs via JavaScript
- Listes déroulantes générées depuis les données JSON
- Même design que N2a mais 100% dynamique

### Etape N3: LocalStorage ✅
**Fichier:** `N3_localStorage.html`

Enregistrement des données:
- Lecture du localStorage (`parse()`)
- Génération automatique des ID
- Ajout de nouvelles tâches
- Écriture dans le localStorage (`stringify()`)
- Statistiques en temps réel

### Etape N4: Dashboard Complet ✅
**Fichier:** `index.html` (Application finale)

Gestion complète des tâches:
- **Dashboard** avec statistiques
- **Filtres** par statut
- **Affichage** de toutes les tâches
- **Modification** des tâches (modal)
- **Terminer** une tâche
- **Supprimer** une tâche
- **Archivage** automatique
- Design professionnel et moderne

---

## 💻 Fonctionnalités

### ✨ Gestion des Tâches
- ➕ **Ajouter** une nouvelle tâche
- ✏️ **Modifier** une tâche existante
- ✅ **Marquer** comme terminée
- 🗑️ **Supprimer** une tâche
- 📋 **Filtrer** par statut (Toutes, Planifiées, En cours, Terminées)

### 📊 Dashboard
- Statistiques en temps réel
- Nombre total de tâches
- Tâches en cours
- Tâches terminées

### 🎨 Interface
- Design moderne avec dégradés
- Responsive (mobile, tablette, desktop)
- Animations fluides
- Badges colorés selon priorité
- Modal d'édition

### 💾 Persistance
- Données sauvegardées dans le **localStorage**
- Persistance après fermeture du navigateur
- Pas de backend requis
- Gestion automatique des ID

---

## 🔧 Technologies Utilisées

- **HTML5** - Structure sémantique
- **CSS3** - Styles modernes (Flexbox, Grid, Animations)
- **JavaScript ES6+** - Logique applicative
- **localStorage API** - Persistance des données
- **JSON** - Format de données

---

## 📱 Responsive Design

L'application est entièrement responsive et s'adapte à tous les écrans:

- **Desktop** (> 968px): Layout en 2 colonnes
- **Tablette** (768px - 968px): Layout en 1 colonne
- **Mobile** (< 768px): Interface optimisée tactile

---

## 🎓 Concepts Démontrés

### JavaScript
- Manipulation du DOM
- Événements (submit, click)
- localStorage API (getItem, setItem)
- JSON (parse, stringify)
- Array methods (filter, find, map)
- Template literals
- Arrow functions
- Destructuring

### HTML/CSS
- Formulaires HTML5
- Validation native
- CSS Grid & Flexbox
- Media queries
- Animations CSS
- Modal/Dialog

### Architecture
- Séparation des préoccupations
- Fonctions réutilisables
- Gestion d'état
- CRUD operations
- Event-driven programming

---

## 📖 Utilisation

### Ouvrir l'Application

1. Ouvrez `index.html` dans un navigateur moderne
2. L'application se charge automatiquement

### Ajouter une Tâche

1. Remplissez le formulaire à gauche
2. Champs obligatoires: Libellé et Priorité
3. Cliquez sur "💾 Enregistrer"
4. La tâche apparaît dans le dashboard

### Modifier une Tâche

1. Cliquez sur "✏️ Modifier" sur une tâche
2. Une modal s'ouvre avec les données
3. Modifiez les champs souhaités
4. Cliquez sur "💾 Sauvegarder"

### Terminer une Tâche

1. Cliquez sur "✅ Terminer" sur une tâche
2. Le statut passe à "Terminée"
3. La tâche devient semi-transparente
4. Elle reste visible dans le filtre "Terminées"

### Supprimer une Tâche

1. Cliquez sur "🗑️ Supprimer"
2. Confirmez la suppression
3. La tâche est définitivement supprimée

### Filtrer les Tâches

Utilisez les boutons de filtre:
- **Toutes**: Affiche toutes les tâches
- **📋 Planifiées**: Tâches planifiées uniquement
- **🔄 En cours**: Tâches en cours uniquement
- **✅ Terminées**: Tâches terminées uniquement

---

## 🔍 Console du Navigateur

L'application affiche des logs dans la console (F12):
- Initialisation de l'application
- Ajout de tâches
- Modification de tâches
- Suppression de tâches
- État du localStorage

---

## 💡 Points Techniques

### Gestion des ID

Les ID sont générés automatiquement:
```javascript
const newId = tasks.length + 1;
```

### Persistance

Lecture:
```javascript
const tasks = JSON.parse(localStorage.getItem('todolist_tasks_lpdwca'));
```

Écriture:
```javascript
localStorage.setItem('todolist_tasks_lpdwca', JSON.stringify(tasks));
```

### Relations

Les tâches référencent les paramètres par **ID** (Foreign Key):
```json
{
  "idTache": "1",
  "libelle": "Finaliser le projet",
  "idPriorite": "2",
  "idComplexite": "4"
}
```

---

## 🎨 Palette de Couleurs

- **Primary**: `#667eea` → `#764ba2` (Dégradé violet)
- **Success**: `#2ecc71` (Vert)
- **Danger**: `#e74c3c` (Rouge)
- **Warning**: `#f39c12` (Orange)
- **Info**: `#3498db` (Bleu)
- **Background**: `#f8f9fa` (Gris clair)

---

## 📊 Structure des Données

### Tâche

```json
{
  "idTache": "1",
  "libelle": "Finaliser le projet LP DWCA",
  "description": "Compléter tous les exercices",
  "dateCreation": "2025-10-09",
  "dateFinalisation": "2025-12-15",
  "statut": "En cours",
  "auteur": "Mikail Lekesiz",
  "idPriorite": "2",
  "idComplexite": "4",
  "idCategorie": "1",
  "idDuree": "7"
}
```

### Priorités

6 niveaux: Critique, Très important, Important, Moyen, Peu important, Non urgent

### Statuts

3 états: Planifiée, En cours, Terminée

---

## 🚧 Limitations

- **Pas de backend**: Les données sont stockées localement
- **Pas de synchronisation**: Chaque navigateur a ses propres données
- **Limite de stockage**: localStorage limité à ~5-10 MB
- **Pas d'authentification**: Pas de gestion d'utilisateurs

---

## 🔮 Améliorations Possibles

- Export/Import des tâches (JSON, CSV)
- Recherche et tri avancés
- Notifications (API Notification)
- Mode sombre
- Drag & Drop pour réorganiser
- Sous-tâches (checklist)
- Tags personnalisés
- Statistiques avancées (graphiques)
- PWA (Progressive Web App)
- Synchronisation cloud

---

## 👨‍💻 Auteur

**Nom:** Mikail Lekesiz  
**Titre:** DevOps Engineer & Full Stack Developer  
**Entreprise:** Netz Informatique (CEO)  
**Formation:** LP DWCA - Université de Strasbourg  

**Liens:**
- Portfolio: https://portfolio.lekesiz.fr
- Entreprise: https://netz-informatique.fr
- GitHub: https://github.com/lekesiz

---

## 📄 Licence

Ce projet est développé dans le cadre de la formation LP DWCA 2025.

---

**© 2025 Mikail Lekesiz - Tous droits réservés**  
Formation LP DWCA - Université de Strasbourg

