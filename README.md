# Symfony 4 - User registration - authentication - routing access

Simply application following the documentation from Symfony related with User registration - authentication - routing access

## Getting Started

Clone the project and execute composer install.

```
composer install
```

### Prerequisites

* PHP 7.2
* Mysql
* Composer

### Installing

Modify .env file with your database information.

Create the database and tables:

```
php bin/console doctrine:database:create
php bin/console make:migration
php bin/console doctrine:migrations:migrate
```

Turn on the dev server:

```
php -S 127.0.0.1:8000 -t public
```

When you register in the application, the user by the default is disabled, you need to change the row "is_active" in the table "app_users" to 1.

The application has one public route /privacy-policy and one private route /private.

## Built With

* [Symfony 4](https://symfony.com/doc/current/index.html)
* [Bootstrap](https://getbootstrap.com/docs/4.1/getting-started/introduction/)

## Authors of this practice

* **VGzsysadm** - *https://sysadm.es* - [@VGzsysadm](https://github.com/VGzsysadm)


