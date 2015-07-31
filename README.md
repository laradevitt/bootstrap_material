# Bootstrap Material Design Theme for Drupal

A [Bootstrap](https://www.drupal.org/project/bootstrap) subtheme that brings the [Material Design guidelines by Google](http://www.google.com/design/spec/material-design/introduction.html) into Drupal. Uses Fez Vrasta's [Material Design for Bootstrap](https://fezvrasta.github.io/bootstrap-material-design) theme.

## Install

1. Clone this project into your Drupal installation's themes directory.

## Customize 

[Node.js](https://nodejs.org/), Grunt and Bower are required to manage CSS and JavaScript assets. 

1. Go to the project folder: 

    `cd bootstrap_material`

2. Install dependencies: 

    `npm install`

3. Initial set-up: 

    `grunt build`

4. To watch for changes: 

    `grunt`

Alternatively, since the CSS and JS is precompiled you can do some basic tweaks by simply adding a custom CSS file to the *.info file.

## Enable the subtheme

After clearing the Drupal caches, navigate to *admin/appearance* in your Drupal installation and enable the subtheme.
