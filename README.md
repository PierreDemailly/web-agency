# Web Agency

Web Agency is a book and user management application to facilitate the
work of a librarian.

- see all books saved, add, delete and edit them
- see all registered users, add them, delete or modify them
- and record borrowing of books by users.

# Requirements

    - PHP 7.1 or higher
    - Composer 1.8 or higher

# Get started

  - Download|Clone the repo
  - Install dependencies with __composer i__ _(composer install)_
  - Edit ./.env file with your MySQL logs
  - [Install database](https://github.com/PierreDemailly/web-agency/#install-database)
  - Run __php bin/console server:run__

# Install database
  
You have 2 options:
#### 1. With terminal
    - php bin/console doctrine:database:create
    - php bin/console doctrine:schema:create
    - Create some categories because Books cannot be created without category

### 2. With SQL
    - Create a database with the same name that in .env file
    - Import ./sql/web-agency.sql

### Tech

The app is powered by [Symfony 4.2](https://symfony.com/)
