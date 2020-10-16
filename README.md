# jobBoard

jobBoard is a project that aim to create a website where companies can put ads to search for employees and people can apply to these ads.

## Installation

### You can follow the install below or use the script [dependencies.sh](dependencies.sh)

You need to install dependencies first

```sudo apt install apache2 php libapache2-mod-php mysql-server php-mysql```

and the most popular php modules

```sudo apt install php-curl php-gd php-intl php-json php-mbstring php-xml php-zip```

Composer for Symfony

[Composer](https://getcomposer.org/download/)

## Usage

### MySQL

Login to MySQL

```sudo mysql -u root -p```

Create the database

```CREATE DATABASE jobBoard;```

Import the already created database

```sudo mysql -u root -p jobBoard < JobBoard.sql```

Choose the database

```USE jobBoard;```

### Symfony

First we need to install symfony's dependencies, go to Symfony directory then

```composer install```

And start the server

```symfony server:start```


## Technologies used

- [Vue.js](https://vuejs.org/)

- [Symfony](https://symfony.com/)

- [MySQL](https://www.mysql.com/)

## License

- [GPL](LICENSE)