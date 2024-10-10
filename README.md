# Laravel Inertia.js Todo App

This is a simple **Todo List Application** built with **Laravel**, **Vue.js**, **Inertia.js**, and **Tailwind CSS**. The project uses **Laravel Breeze** for authentication and features a CRUD interface for managing todo items.

## Features

-   User authentication (login, register, password reset) using **Laravel Breeze**
-   **CRUD** operations (Create, Read, Update, Delete) for todo items
-   **Inertia.js** for seamless client-side navigation
-   **Vue.js** as the frontend framework
-   **Tailwind CSS** for responsive and modern design
-   CSRF protection to prevent unauthorized requests

## Prerequisites

Make sure you have the following tools installed:

-   PHP `>= 8.x`
-   Composer `>= 2.x`
-   Node.js `>= 16.x`
-   NPM or Yarn package manager
-   MySQL or another database supported by Laravel

## Getting Started

### 1. Clone the repository

```bash
git clone https://github.com/your-username/laravel-inertia-todo-app.git
cd laravel-inertia-todo-app
```

### 2. Install dependencies

Run the following command to install the PHP and Node.js dependencies:

```bash
composer install
npm install
```

### 3. Set up environment variables

Copy the `.env.example` file to `.env` and configure your environment:

```bash
cp .env.example .env
```

Update your `.env` file to set the database connection and other settings:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### 4. Generate application key

Generate the application key to secure your Laravel application:

```bash
php artisan key:generate
```

### 5. Run migrations

Run the following command to create the required database tables:

```bash
php artisan migrate
```

### 6. Compile assets

Run the following command to compile the frontend assets:

```bash
npm run dev
```

### 7. Start the development server

Run the Laravel development server:

```bash
php artisan serve
```

Your application will be available at `http://localhost:8000`.

## Usage

### Todo CRUD

-   **Create a Todo**: Navigate to the todos list page and click on **Create New Todo**. Enter the title and description to create a new todo item.
-   **Read Todos**: The todo list page shows all the todos in descending order of creation time.
-   **Update a Todo**: Click on **Edit** next to a todo to update its details.
-   **Delete a Todo**: Click on **Delete** next to a todo to remove it from the list.

### Authentication

-   Register a new user or login with an existing account using Laravel Breeze.
-   Once logged in, the user can manage their own todo list.

## Code Structure

### Backend (Laravel)

-   **Routes**: The routes for the application are defined in `routes/web.php`.
-   **Controllers**: The main controller handling todo logic is `App\Http\Controllers\TodoController`.
-   **Models**: The `App\Models\Todo` model represents the todo items.
-   **Views**: No traditional Blade views are used. Instead, Vue components are used for the front end via Inertia.js.

### Frontend (Vue.js + Inertia.js)

-   **Vue Components**: The Vue components for the frontend are located in `resources/js/Pages`.
-   **Inertia.js**: Inertia.js is used to handle routing between Vue components, providing a seamless SPA-like experience.

### Styling (Tailwind CSS)

-   **Tailwind CSS**: All the UI components are styled using Tailwind CSS. You can modify the Tailwind configuration in `tailwind.config.js` to customize the design.

## How to Contribute

If you'd like to contribute to the project, follow these steps:

1. Fork the repository.
2. Create a new branch for your feature or bugfix.
3. Make your changes.
4. Submit a pull request.

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
