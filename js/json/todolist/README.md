# Activité JSON - To-Do-List

## 📚 Formation LP DWCA 2025
**Auteur:** Mikail Lekesiz  
**Université:** Strasbourg

---

## 📋 Description

Ce dossier contient l'ensemble des fichiers JSON et HTML pour l'activité **To-Do-List** demandée dans le cadre de la formation LP DWCA.

L'activité est divisée en 5 étapes (1A à 1E) qui permettent de comprendre la structure des données JSON et leur manipulation en JavaScript.

---

## 📁 Fichiers

### Etape 1A: Structure d'une Tâche
**Fichier:** `JSON_1A_Tache.json`

Structure JSON compacte d'une tâche avec les propriétés essentielles:
- `idTache`: Identifiant unique
- `libelle`: Titre de la tâche
- `description`: Description détaillée
- `dateCreation`: Date de création
- `dateFinalisation`: Date de finalisation souhaitée
- `statut`: État de la tâche (En cours, Terminée, Planifiée)
- `auteur`: Auteur de la tâche

### Etape 1B: Paramètre Priorité
**Fichier:** `JSON_1B_Priorite.json`

Array JSON contenant 6 niveaux de priorité:
1. Critique
2. Très important
3. Important
4. Moyen
5. Peu important
6. Non urgent

### Etape 1C: Autres Paramètres
**Fichiers:**
- `JSON_1C_Complexite.json` - 5 niveaux de complexité
- `JSON_1C_Categorie.json` - 7 catégories de tâches
- `JSON_1C_DureeEstimee.json` - 7 plages de durée estimée

#### Paramètre 1: Complexité
- Très simple
- Simple
- Moyenne
- Complexe
- Très complexe

#### Paramètre 2: Catégorie
- Développement Web
- DevOps & Cloud
- Intelligence Artificielle
- Formation
- Documentation
- Réunion
- Personnel

#### Paramètre 3: Durée Estimée
- Moins de 30 minutes
- 30 minutes à 1 heure
- 1 à 2 heures
- 2 à 4 heures
- 4 à 8 heures
- Plus d'une journée
- Plusieurs jours

### Etape 1D: Tâches Complètes
**Fichier:** `JSON_1D_Taches_Completes.json`

Array JSON de 4 tâches complètes incluant les identifiants des paramètres (et non les valeurs directes).

Chaque tâche contient:
- Toutes les propriétés de base (1A)
- `idPriorite`: Référence vers la priorité
- `idComplexite`: Référence vers la complexité
- `idCategorie`: Référence vers la catégorie
- `idDuree`: Référence vers la durée estimée

### Etape 1E: Page HTML
**Fichier:** `JSON_1E_TodoList.html`

Page HTML complète avec:
- Affichage de toutes les structures JSON
- Variables JavaScript pour chaque ensemble de données
- Console.log() pour afficher les données
- Tableau visuel des tâches avec résolution des références
- Design moderne et responsive

---

## 🚀 Utilisation

### Visualiser la page HTML

Ouvrez le fichier `JSON_1E_TodoList.html` dans un navigateur web.

### Voir les données JSON dans la console

1. Ouvrez la page HTML
2. Appuyez sur F12 pour ouvrir les outils de développement
3. Allez dans l'onglet "Console"
4. Vous verrez toutes les données JSON affichées

### Valider les structures JSON

Tous les fichiers JSON peuvent être validés sur: https://jsoneditoronline.org/

---

## 📊 Structure des Données

### Relation entre les tables

```
Tâches
├── idPriorite → Priorités
├── idComplexite → Complexités
├── idCategorie → Catégories
└── idDuree → Durées
```

Cette structure permet de:
- Éviter la duplication de données
- Faciliter la mise à jour des paramètres
- Optimiser le stockage
- Respecter les principes de normalisation

---

## 💡 Concepts Clés

### JSON (JavaScript Object Notation)
- Format léger d'échange de données
- Facile à lire pour les humains
- Facile à parser pour les machines

### Structures JSON
- **Objet:** `{ "clé": "valeur" }`
- **Array:** `[ élément1, élément2 ]`
- **Paires clé/valeur:** `"propriété": "valeur"`

### Bonnes Pratiques
- Utiliser des identifiants uniques
- Compacter le JSON pour le stockage
- Référencer par ID plutôt que par valeur
- Valider la structure JSON

---

## 🎯 Objectifs Pédagogiques

1. ✅ Comprendre la structure JSON
2. ✅ Créer des objets et arrays JSON
3. ✅ Gérer les relations entre données
4. ✅ Manipuler JSON en JavaScript
5. ✅ Afficher des données JSON dans le HTML

---

## 📝 Notes

- Toutes les structures sont **compactées** (sans espaces ni retours à la ligne)
- Les identifiants sont **incrémentés** (1, 2, 3, ...)
- Les données sont **réalistes** et basées sur des projets réels
- Le code est **commenté** en français
- Le design est **moderne** et **responsive**

---

## 🔗 Liens Utiles

- [JSON Editor Online](https://jsoneditoronline.org/)
- [MDN - Working with JSON](https://developer.mozilla.org/fr/docs/Learn/JavaScript/Objects/JSON)
- [Portfolio Mikail Lekesiz](https://portfolio.lekesiz.fr)
- [Netz Informatique](https://netz-informatique.fr)

---

**© 2025 Mikail Lekesiz - Tous droits réservés**  
Formation LP DWCA - Université de Strasbourg

