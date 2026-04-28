# WP VPCE Side Drawer

Plugin WordPress ajoutant une bande latérale universelle avec recherche, liens rapides, overlay, newsletter et comportement responsive.

## Objectif

Ce plugin permet d’ajouter automatiquement une bande latérale fixe sur toutes les pages d’un site WordPress.

Il a été conçu pour améliorer l’expérience utilisateur en donnant un accès rapide à la recherche interne, aux services principaux, aux catégories de nuisibles, aux pages institutionnelles et à un formulaire newsletter.

## Fonctionnalités

- Bande latérale universelle injectée via `wp_footer`
- Onglet d’ouverture / fermeture
- Overlay de fermeture
- Fermeture avec la touche `ESC`
- Blocage du scroll lorsque le menu est ouvert
- Recherche interne WordPress
- Liens rapides vers services et pages importantes
- Déplacement automatique d’un formulaire newsletter existant
- Responsive mobile
- Code séparé en PHP, CSS et JavaScript

## Stack utilisée

- PHP
- WordPress Hooks
- JavaScript
- CSS responsive

## Installation

1. Copier le dossier du plugin dans :

```bash
wp-content/plugins/wp-vpce-side-drawer/
```

2. Activer le plugin depuis l’administration WordPress :

```text
Extensions > Activer
```

3. Le menu latéral s’affiche automatiquement sur le site.

## Structure du plugin

```text
wp-vpce-side-drawer/
├── wp-vpce-side-drawer.php
├── README.md
└── assets/
    ├── css/
    │   └── side-drawer.css
    └── js/
        └── side-drawer.js
```

## Auteur

Sévérin OGAH