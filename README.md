## HappyMart
A skeleton of Content Management System (CMS) built with laravel to dive in a new project quickly.
## Installation Guide
- Clone the repository or download and unzip the project in your local environment.
- You can delete the `.git` folder and continue from there if you want to use a different repository.
- Open a terminal window at the root of the project.
- Run `composer install` to install `PHP` dependencies.
- Run `cp .env.example .env` to generate the environment file.
- Run `php artisan key:generate` to generate `APP_KEY`.
- Open the project in your favourite Code Editor or IDE.
- Open `.env` file.
- Add values to these environment variables for database connection.
```bash
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```
- Run `php artisan migrate --seed` to migrate and seed initial data.
- Run `php artisan serve` to start the PHP built in server.
- Visit the link suggested in your terminal to run the application in your browser. Most commonly - `http://127.0.0.1:8000`
- Visit `http://127.0.0.1:8000/admin/login` to access dashboard.

## Login Credentials
- Super Admin
```bash
admin@example.com
admin123
```
