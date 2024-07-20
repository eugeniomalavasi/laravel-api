# Laravel CRUD and API Project

This Laravel project implements a basic CRUD (Create, Read, Update, Delete) system for managing projects. It includes models, controllers, views, and API routes to handle project management and provide secure user authentication.

## Table of Contents

1. [Overview](#overview)
2. [Installation](#installation)
3. [Database Setup](#database-setup)
4. [Authentication](#authentication)
5. [Routes](#routes)
   - [Web Routes](#web-routes)
   - [API Routes](#api-routes)
6. [Controllers](#controllers)
7. [Views](#views)
8. [Models](#models)
9. [Usage](#usage)
    - [Web Interface](#web-interface)
    - [API Interface](#api-interface)
10. [License](#license)

## Overview

This project allows users to:

- Create, read, update, and delete projects.
- Manage project types and technologies.
- Authenticate users to secure the project management area.
- Interact with projects via a RESTful API.
<img width="1100" alt="image" src="https://github.com/user-attachments/assets/6306ef4b-1d46-4aea-be77-cbf023139751">

<img width="409" alt="image" src="https://github.com/user-attachments/assets/c82feec0-5119-4d0c-b89d-4a357a9f2b09">    

<img width="1092" alt="image" src="https://github.com/user-attachments/assets/076d51fe-e478-478d-9921-a3ee0b80b02b">

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

## Authentication

The project uses Laravel's built-in authentication. To set up authentication:

1. **Run the authentication scaffolding**:
    ```bash
    php artisan ui bootstrap --auth
    npm install && npm run dev
    ```

2. **Run migrations** if you haven't already:
    ```bash
    php artisan migrate
    ```

## Routes

### Web Routes

Located in `routes/web.php`, the web routes handle the CRUD operations and are grouped under the `admin` prefix and `auth` middleware for security.

### API Routes

Located in `routes/api.php`, the API routes provide endpoints for external applications to interact with the projects.

## Controllers

The main controller for managing projects is `ProjectController.php`, which includes methods for:

- `index`: Display a list of projects.
- `create`: Show the form for creating a new project.
- `store`: Store a newly created project.
- `show`: Display a specific project.
- `edit`: Show the form for editing a project.
- `update`: Update a specific project.
- `destroy`: Delete a project.

## Views

The views are located in `resources/views` and include Blade templates for managing projects, types, and authentication.

- `admin/projects`: Views for managing projects (create, edit, index, show).
- `admin/types`: Views for managing types (create, index, dashboard).
- `auth`: Authentication views (login, register, etc.).

## Models

The project includes several models to represent the entities in the application:

- `User`
- `Project`
- `Type`
- `Technology`

## Usage

### Web Interface

Access the project management features through the web interface, where you can create, read, update, and delete projects.

### API Interface

Interact with the projects via the provided RESTful API endpoints for external application integration.
