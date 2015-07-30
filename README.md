# Bootstrap Material Design Theme for Drupal

A [Bootstrap](https://www.drupal.org/project/bootstrap) subtheme that brings the [Material Design guidelines by Google](http://www.google.com/design/spec/material-design/introduction.html) into Drupal. Uses Fez Vrasta's [Material Design for Bootstrap](https://fezvrasta.github.io/bootstrap-material-design) theme.

## Easy-peasy install

1. Download and extract the base theme, [Bootstrap Theme](https://www.drupal.org/project/bootstrap), into the themes directory of your Drupal installation. I recommend installing the latest development snapshot of Bootstrap Theme 7.x-3.x until 7.x-3.1 is released.
   
2. Either clone this project or download and extract the subtheme from [Drupal.org](https://www.drupal.org/sandbox/othermachines/2535992), also into your themes directory. Note that cloning the project from Github will give you packaging files and whatnot that you won't need.
   
3. Navigate to admin/appearance in your Drupal installation and enable the subtheme.

## Development install

If you have [Node.js](https://nodejs.org/) installed, customizing this subtheme is easy.

1. Clone this project into your themes directory.

2. Go to project folder: 

    `cd bootstrap_material`

3. Install dependencies: 

    `npm install`

4. Initial set-up: 

    `grunt build`

5. To watch for changes: 

    `grunt`

You can also just grab the less/ folder and compile it manually.
