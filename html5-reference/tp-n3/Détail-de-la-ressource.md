# Détail de la ressource

## TP N3 : Nouveaux éléments HTML5 d'organisation des contenus

### Sujet du TP
Nouveaux éléments HTML5 d'organisation des contenus

### Objectifs

Créer un document web avec un modèle minimaliste HTML5 / CSS3. Le modèle sera basé sur l'utilisation de nouveaux éléments sémantiques HTML5 d'organisation des contenus, c'est-à-dire des éléments de section. La mise en page globale (design) sera contrôlée par une approche CSS simple, soit la propriété `float` pour des éléments de type block, ou de préférence, en utilisant la propriété `display` de valeur `inline-block`, et en fixant la largeur `width` des éléments.

### Finalités de ce travail

Tout d'abord, les éléments de section sont utilisés pour organiser le contenu de la page web, avec notamment les éléments `header`, `footer`, `nav`, `section`, `article`, `aside`. Pour les contenus, les éléments sémantiques vus au 1er chapitre seront repris : `h1`, `h2`, `p`, etc.

À l'intérieur de chacun des éléments de section, vous pouvez ajouter un élément `span`, élément neutre, pour spécifier le nom de l'élément et le mettre en évidence par CSS.

Ensuite, contrôlez la disposition des éléments par CSS pour avoir les éléments `header` et `nav` en haut de la page, puis, côte à côte, le contenu principal et les informations annexes (`aside`), et enfin `footer` tout en bas (voir l'exemple à reproduire en annexe du TP). Le design correspond à un site en 2 colonnes.

En outre, dans chaque nouvel élément HTML5, vous pouvez ajouter une petite description de cet élément.

Le document HTML doit être instructif, façon tutoriel ou fiche pratique, pour comprendre la conception web HTML5 / CSS3.

### Mise en page CSS strictement interdite dans cet exercice

**N'utilisez pas** les propriétés CSS Grid, ni Flexbox, que vous n'avez pas utilisées jusqu'à présent (ce sera le sujet de notre prochain cours).

### Résultats attendus

Une page HTML, à déposer sur la plate-forme (DigitalUni, ou Moodle, suivant le cas).

De plus, téléchargez votre fichier sur votre hébergeur (Alwaysdata par exemple), dans un sous-répertoire du répertoire principal de www, par ex. nommé `pw3`, c'est-à-dire `www/pw3`, et renommez votre document web : `index.html`. L'URL de votre exercice pourrait donc être : `http://youNameAccount.alwaysdata.net/pw3/` (le fichier `index.html` est automatiquement ouvert). 

**Point important :** ne pas supprimer ou modifier le fichier `www/index.html` !

Indiquez dans la section des dépôts de la plate-forme (DigitalUni ou Moodle) l'URL de votre page web.

### Ressources

- **Exemple visuel :** [HTML5_Template_Example.jpg](../HTML5_Template_Example.jpg)
- **Documentation :** [HTMLchapitre3_HTML5ElementsSemantiquesOrganisationContenu.pdf](../HTMLchapitre3_HTML5ElementsSemantiquesOrganisationContenu.pdf)

### Éléments HTML5 à utiliser

- `<header>` : En-tête de la page ou d'une section
- `<nav>` : Navigation principale
- `<main>` : Contenu principal
- `<article>` : Contenu autonome et réutilisable
- `<section>` : Section thématique du document
- `<aside>` : Contenu annexe (sidebar)
- `<footer>` : Pied de page

### Techniques CSS autorisées

- `display: inline-block`
- `float` (left, right)
- `width` et `height`
- `margin` et `padding`
- `border`
- `background-color`
- Propriétés de texte et de police

### Techniques CSS interdites

- **CSS Grid**
- **Flexbox**

