# GRH website

This repository is the development repository for grh-hamburg.de. The GRH website is based on **Kirby version 3.2**.

## Requirements

Kirby runs on PHP 7.1+, Apache or Nginx.

## Getting started

To start with the development, do the following steps:

1. Download a local Apache / NGinX server software: [XAMPP](https://www.apachefriends.org/index.html) or [MAMP (recommended)](https://www.mamp.info/en/downloads/)
2. Clone this repository and point the server software to the repository folder. **Please make sure you're also initialize the submodules!**
   Use

```bash
git clone https://github.com/Gustav-Radbruch-Haus/grh-website.git
cd grh-website
git submodule update --init --recursive
```

3. Start the apache server
4. Go to your browser and enter [http://localhost:8080](http://localhost:8080) (or any other port you have set up)

**In case you have copied the files to the home folder of your software, please check if the invisible .htaccess file has been copied to your server correctly**

### Changing styles

We are using SCSS/SASS for specifying our CSS files. With SASS, we can use nested definitions, mixins, variables and separation of the files for structuring the styles of the website furthermore. You can find the source files in `assets/scss`. When making a change, use a SASS compiler to get your changes into effect. Please make sure to set up the compiler so it compiles every file into `assets/css`.

If you want to make a change, please **DO NOT** change the css files located in `assets/css`, because these will be overwritten by default when the SASS files will be compiled.

Depending on your workflow and available software, do the following:

If you use _CodeKit_:

1. Load the project file in `assets` into your app

If you're not using anything:

1. Download a GUI SASS compiler: [KOALA](http://koala-app.com) or [Scout-App](https://scout-app.io)
2. Add `assets` folder as project folder
3. Set up the output folder so it uses the output-folder `assets/css` (either by setting it directly or by setting a setting that replaces `css` with `scss`, like it's given in CodeKit)

In the usual way, these programs are now listening to any change in the SASS files and will compile them automagically 🧙‍. Nice, huh?

## About Kirby

Kirby is a file-based content manangement system based on PHP. Thanks to the underlying framework, it is easy to use, packed with tons of features and easily extensible.

Kirby separates pages into _Templates_. Each template consists of a _Blueprint_ (model of the page) and a PHP / HTML template (view of the page).

When you add a page through the panel, you will see the list of available templates you can choose. After selecting, you will see the dedicated page using the template's blueprint to display the fields you can fill. Publicly will be the PHP / HTML template used to display the content to the end users.

If this sounds confusing, have a look into the [quick start guide with Kirby](https://getkirby.com/docs/guide/quickstart).

In our project, we have the following folders:

-   `assets`: CSS, JS and images for the design of the website
-   `content`: the database of Kirby
-   `kirby`: the neccessary Kirby framework
-   **`site`: All plugins, templates, blueprints are found here**
    -   `accounts`: Store of user accounts of the website, created via the panel
    -   `blueprints`: blueprints
    -   `cache`: cache files, ignore
    -   `config`: The config files, as well as the folder where you will find the license key stored (which should never be pushed to this repo!)
    -   `controllers`: Aditional logic for each template
    -   `models`: Additional functions for each template (so you could call e.g. `$page->cover()`)
    -   `plugins`: currently installed plugins
    -   `sessions`: login session objects, ignore
    -   `snippets`: Smaller parts of template code, might be used in multiple templates
    -   `templates`: The PHP / HTML template files
-   `media`: Automagically produced thumbnails

### The Panel

The Kirby admin page is called `Panel`. You can find the login for Kirby's admin interface at
[http://localhost:8080/panel](http://localhost:8080/panel). You will be guided through the signup process for your first user, when you visit the panel for the first time.

## Useful links

-   [Quick start with Kirby](https://getkirby.com/docs/guide/quickstart)
-   [References](https://getkirby.com/docs/reference)
-   [SASS introduction](https://sass-lang.com/guide)

## Issues

If you have found any issues, please open up an issue in our [Git repository](https://github.com/Gustav-Radbruch-Haus/grh-website/issues).

## Ideas & Feature Requests

If you have ideas for new features, please submit a ticket in our repository: <https://github.com/Gustav-Radbruch-Haus/grh-website/issues>

## Copyright

© 2019 Student Housing Council of Gustav-Radbruch-Haus.
<https://grh-hamburg.de>
