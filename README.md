# Bootstrap Material Design Theme for Drupal

A [Bootstrap](https://www.drupal.org/project/bootstrap) subtheme that brings the [Material Design guidelines by Google](http://www.google.com/design/spec/material-design/introduction.html) into Drupal (7.x). Uses Fez Vrasta's [Material Design for Bootstrap](https://fezvrasta.github.io/bootstrap-material-design) theme.

## Use

1. Download and extract the bootstrap_material/ subfolder into your Drupal installation's themes folder (usually sites/themes/*).

2. Go to *admin/appearance* and enable the subtheme.

## Customize 

I use [Node.js](https://nodejs.org/), Grunt and Bower to manage CSS and JavaScript assets. You can, too, but it requires [this patch](https://www.drupal.org/node/619542#comment-9771891)* to prevent the node_modules and bower_components directories from being scanned by Drupal. Otherwise it will crash hard.

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

