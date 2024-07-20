# Laravel CRUD and API Project

## Overview

This Laravel project implements a basic CRUD (Create, Read, Update, Delete) system for managing projects. It includes various models, migrations, controllers, and views to handle CRUD operations. Additionally, the project provides API routes to facilitate interaction with other applications. User authentication is implemented to ensure secure access to the administrative functions.

## Table of Contents

1. [Installation](#installation)
2. [Database Setup](#database-setup)
3. [Migrations](#migrations)
4. [Seeders](#seeders)
5. [Authentication](#authentication)
6. [Routes](#routes)
   - [Web Routes](#web-routes)
   - [API Routes](#api-routes)
7. [Controllers](#controllers)
8. [Views](#views)
9. [Models](#models)
10. [Usage](#usage)
    - [Web Interface](#web-interface)
    - [API Interface](#api-interface)
11. [License](#license)

## Installation

1. **Clone the repository**:
    ```bash
    git clone <repository-url>
    cd <repository-directory>
    ```

2. **Install dependencies**:
    ```bash
    composer install
    npm install
    ```

3. **Copy the example environment file and configure it**:
    ```bash
    cp .env.example .env
    ```

4. **Generate the application key**:
    ```bash
    php artisan key:generate
    ```

## Database Setup

1. **Configure your database settings in the `.env` file**:
    ```plaintext
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_user
    DB_PASSWORD=your_database_password
    ```

2. **Run the migrations** to create the necessary tables:
    ```bash
    php artisan migrate
    ```

## Migrations

The project includes several migration files to set up the database schema:

- `2014_10_12_000000_create_users_table.php`
- `2014_10_12_100000_create_password_reset_tokens_table.php`
- `2019_08_19_000000_create_failed_jobs_table.php`
- `2019_12_14_000001_create_personal_access_tokens_table.php`
- `2024_06_19_130102_create_projects_table.php`
- `2024_06_22_134234_add_image_column_to_projects_table.php`
- `2024_06_24_122843_create_types_table.php`
- `2024_06_24_123327_add_type_id_foreign_key_to_projects_table.php`
- `2024_06_25_123948_create_technologies_table.php`
- `2024_06_25_124114_create_project_technology_table.php`

## Seeders

The seeders included in this project are:

- `DatabaseSeeder.php`
- `ProjectTableSeeder.php`
- `TechnologyTableSeeder.php`
- `TypesTableSeeder.php`

Run the seeders to populate the database with initial data:
```bash
php artisan db:seed
