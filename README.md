# File Sharing - InsanityMeetsHH

This git is for [fs.imhh.me](http://fs.insanitymeetshh.net). Take a look at [screenshots](https://github.com/InsanityMeetsHH/file-sharing/tree/master/screenshots).

This application based on [Slim Skeleton 5](https://github.com/InsanityMeetsHH/Slim-Skeleton/tree/5.x) and [Gulp Skeleton 4](https://github.com/InsanityMeetsHH/gulp-templating/tree/4.x).

## Required
* [Node.js](http://nodejs.org/en/download/)
* [npm](http://www.npmjs.com/get-npm) `$ npm i npm@latest -g`
* [gulp-cli](https://www.npmjs.com/package/gulp-cli) `$ npm i gulp-cli@latest -g`
* PHP => 5.5
* MySQL (pdo_mysql)
* [Docker](https://www.docker.com/) ([for installation with Docker](https://github.com/InsanityMeetsHH/file-sharing#installation-with-docker))

## Installation with [Composer](https://getcomposer.org/) (Recommended)

```bash
$ composer create-project insanitymeetshh/file-sharing [app-name]
$ cd [app-name]
$ npm i
$ gulp build
```

## Installation with [Docker](https://www.docker.com/)
This steps works with Windows, macOS and Linux. 
* Get project via `$ git clone https://github.com/InsanityMeetsHH/file-sharing.git` or [zip download](https://github.com/InsanityMeetsHH/file-sharing/archive/master.zip)
* Open a command prompt on your OS (if not already open) and navigate to the project folder
* `$ npm i`
* `$ gulp build`
* Add `"platform": {"php": "7.4.1"}` to `"config"` in [`composer.json`](https://github.com/InsanityMeetsHH/file-sharing/blob/master/composer.json#L46)
* `$ cp config\additional-settings.dist.php config\additional-settings.php`
* Download [`composer.phar`](https://getcomposer.org/download/1.9.2/composer.phar) if not already done
* `$ php composer.phar install`
* `$ docker-compose build`
* `$ docker-compose up -d`
* `$ docker inspect file-sharing-db` search for `IPAddress` from `DIRNAME_default` (at the bottom) and set IP (e.g. 172.20.0.2 often by me) as Doctrine `host` in `config\additional-settings.php`
* Open [localhost:8080](http://localhost:8080) for website or [localhost:9999](http://localhost:9999) for database gui
* Adminer login: user = root, pass = rootdockerpw, host = IP from `IPAddress`
* If you want to remove a container `$ docker rm [container-name] -f` e.g. `$ docker rm file-sharing-db -f`
* If you want to remove a volume `$ docker volume rm [volume-name]` e.g. `$ docker volume rm DIRNAME_db_data` (first remove matching container)
* If you want to remove all container `$ docker rm file-sharing-db file-sharing-webserver file-sharing-adminer -f`
* If you want to remove all volumes `$ docker volume prune` (first remove all container)

## Sources
* [DataTables Translations](https://datatables.net/plug-ins/i18n/)