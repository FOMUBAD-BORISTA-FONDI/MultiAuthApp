<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.


# MultiAuthApp

A Laravel application implementing multi-way authentication (Admin and User).

## **Table of Contents**

1. [Prerequisites](#prerequisites)
2. [Installation](#installation)
3. [Configuration](#configuration)
4. [Testing the Application](#testing-the-application)
5. [Usage](#usage)

---

## **Prerequisites**

Before setting up the project, make sure you have the following installed:

- **PHP (>= 8.0)**  
- **Composer**  
- **MySQL / MariaDB**  
- **Node.js** (for frontend assets)  
- **Git**

---

## **Installation**

### 1. **Clone the Repository**

To clone this project to your local machine, open a terminal and run:

git clone https://github.com/YOUR_GITHUB_USERNAME/MultiAuthApp.git
cd MultiAuthApp

### 2. **Install PHP Dependencies**

Run the following command to install Laravel’s PHP dependencies using Composer:

composer install

### 3. **Install Frontend Dependencies**

You will need to install frontend dependencies using **npm** (Node.js package manager):

npm install

---

## **Configuration**

### 1. **Create `.env` File**

Laravel uses an `.env` file to manage environment-specific settings. To create the `.env` file, copy the example file:

cp .env.example .env

### 2. **Generate Application Key**

Laravel requires an application key. Run the following command to generate it:

php artisan key:generate

### 3. **Set Up Database**

Make sure you have MySQL (or MariaDB) running. Update your `.env` file with the correct database configuration:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password

### 4. **Migrate Database**

Run migrations to set up the required tables in your database:

php artisan migrate

### 5. **Seed the Database**

You can seed the database with an admin user by running the following command:

php artisan db:seed --class=AdminSeeder

---

## **Testing the Application**

### 1. **Start the Development Server**

Once everything is set up, you can start the Laravel development server:

php artisan serve

The application should now be available at `http://localhost:8000`.

### 2. **Access the Application**

- **Admin Login:** The admin credentials can be found in the `AdminSeeder.php` file. By default, the admin user is:
  - Email: `admin@example.com`
  - Password: `password`
  
- **User Login:** You can register a user through the registration page or use the default user credentials.

---

## **Usage**

- Admin users will be directed to the admin dashboard, while regular users will be directed to the user dashboard.
- You can customize the user roles or authentication logic based on your needs.

---

## License**

This project is open-source and available under the [MIT License](LICENSE).


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
