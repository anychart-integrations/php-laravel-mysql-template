[<img src="https://cdn.anychart.com/images/logo-transparent-segoe.png?2" width="234px" alt="AnyChart - Robust JavaScript/HTML5 Chart library for any project">](https://www.anychart.com)
# PHP basic template
This example shows how to use Anychart library with the PHP programming language, Laravel framework and MySQL database.

## Running

To use this sample you must have PHP installed, if not, please, install it as described [here](http://php.net/manual/en/faq.installation.php);
MySQL installed and running, if not, please, check out [MySQL download page](https://dev.mysql.com/downloads/installer/) and follow [these instructions](http://dev.mysql.com/doc/refman/5.7/en/installing.html);
and Composer, if not, please, check out [Composer installation guide](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx).

To check your installations, run the following command in the command line:
```
$ php -v
PHP 5.6.27-1+deb.sury.org~trusty+1 (cli)  # sample output
Copyright (c) 1997-2016 The PHP Group
Zend Engine v2.6.0, Copyright (c) 1998-2016 Zend Technologies
    with Zend OPcache v7.0.6-dev, Copyright (c) 1999-2016, by Zend Technologies

$ mysql --version
mysql  Ver 14.14 Distrib 5.5.52, for debian-linux-gnu (x86_64) using readline 6. # sample output

$ composer -V
Composer version 1.2.1 2016-09-12 11:27:19 # sample output
```

To start this example run commands listed below.

Clone the repository from github.com:
```
$ git clone git@github.com:anychart-integrations/php-laravel-mysql-template.git
```

Navigate to the repository folder:
```
$ cd php-laravel-mysql-template
```

Install dependencies:
```
$ composer install
```

Ensure you have php-mysql, php-mbstring, php-xml being installed, run:
```
$ php -m
```
If there isn't 'mysql', 'xml' or 'mbstring' in the list, install it:
```
# to install php-mysql, run:
$ sudo apt-get install php{your_php_version}-mysql # e.g. sudo apt-get install php5.6-mysql

# to install php-mbstring, run:
$ sudo apt-get install php{your_php_version}-mbstring # e.g. sudo apt-get install php5.6-mbstring

# to install php-xml, run:
$ sudo apt-get install php{your_php_version}-xml # e.g. sudo apt-get install php5.6-xml
```

Set up MySQL database, use -u -p flags to provide username and password:
```
$  mysql < database_backup.sql
```

Run example:
```
$ php artisan serve
```

Open browser at http://localhost:8000/

## Workspace
Your workspace should look like:
```
php-laravel-mysql-template/
    app/               
        ...
        Http/
            ...
            Controllers/
                ...
                ChartController.php     # Main controller to render chart
    bootstrap/
    config/
    database/
    public/
        ...
        css/
            ...
            style.css       # css style
    resources/
        ...
        views
            ...
            chart.blade.php     # html template
    routes/
        ...
        web.php             # routes
    storage/
    tests/
    ...
    .env                    # main project settings, MySQL settings here
    .env.example
    .gitattributes
    .gitignore
    artisan
    composer.json           # composer project settings
    composer.lock
    database_backup.sql     # MySQL database dump
    gulpfile.js
    LICENSE
    package.json
    phpunit.xml
    README.md
    server.php
    yarn.lock
```
More about Laravel directory structure you can read here: https://laravel.com/docs/5.3/structure

## Technologies
Language - [PHP](http://php.net)<br />
Database - [MySQL](https://www.mysql.com/)<br />
Web framework - [Laravel](https://laravel.com)<br />

## Further Learning
* [Documentation](https://docs.anychart.com)
* [JavaScript API Reference](https://api.anychart.com)
* [Code Playground](https://playground.anychart.com)
* [Technical Support](https://www.anychart.com/support)

## License
AnyChart PHP/Laravel/MySQL integration sample includes two parts:
- Code of the integration sample that allows to use Javascript library (in this case, AnyChart) with Laravel framework, PHP language and MySQL database. You can use, edit, modify it, use it with other Javascript libraries without any restrictions. It is released under [Apache 2.0 License](https://github.com/anychart-integrations/php-laravel-mysql-template/blob/master/LICENSE).
- AnyChart JavaScript library. It is released under Commercial license. You can test this plugin with the trial version of AnyChart. Our trial version is not limited by time and doesn't contain any feature limitations. Check details [here](https://www.anychart.com/buy/).

If you have any questions regarding licensing - please contact us. <sales@anychart.com>

[![Analytics](https://ga-beacon.appspot.com/UA-228820-4/Integrations/php-laravel-mysql-template?pixel&useReferer)](https://github.com/igrigorik/ga-beacon)
