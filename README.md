# Bootstrap Material Design Theme for Drupal

A [Bootstrap](https://www.drupal.org/project/bootstrap) subtheme that brings the [Material Design guidelines by Google](http://www.google.com/design/spec/material-design/introduction.html) into Drupal. Uses Fez Vrasta's [Material Design for Bootstrap](https://fezvrasta.github.io/bootstrap-material-design) theme.

## Set-up

[Node.js](https://nodejs.org/), Grunt and Bower are required to manage CSS and JavaScript assets. 

1. Clone this project into your Drupal installation's themes directory.

2. Go to the project folder: 

    `cd bootstrap_material`

3. Install dependencies: 

    `npm install`

4. Initial set-up: 

    `grunt build`

5. To watch for changes: 

    `grunt`

Alternatively, since the CSS and JS is precompiled you can do some basic tweaks by simply adding a custom CSS file to the *.info file.

## Enable the subtheme

After clearing the Drupal caches, navigate to *admin/appearance* in your Drupal installation and enable the subtheme.
