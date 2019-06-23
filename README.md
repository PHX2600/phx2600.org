phx2600.org
===========

The Phoenix, Arizona network of hackers homepage.

Development Requirements
------------------------

  - [PHP](https://secure.php.net/) >= 7.1.3
    - [Composer](https://getcomposer.org/)
  - [Node.js](https://nodejs.org) >= 10.15.3

Local Development
-----------------

## Install PHP dependencies

    composer install

## Install and Compile CSS and JavaScript Assets

    npm install
    npm run dev

> #### ℹ️ Watching for Changes
>
> You can watch for changes to assets and re-compile automatically during
> development by running:
> 
>     npm run watch

## Building the Site

### Local

    vendor/bin/jigsaw build local

### Production

    vendor/bin/jigsaw build prodcution
    
