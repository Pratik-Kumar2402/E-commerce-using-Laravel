# E-commerce using Laravel

<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

## Description

This is a simple E-commerce web application built with Laravel. It demonstrates core features such as user authentication, product browsing, cart management, and order placement. The project is intended for learning and demonstration purposes.

## Features

- User registration and login
- Product listing and search
- Add to cart and cart management
- Order placement and order history
- Session-based authentication

## Getting Started

### Prerequisites

- PHP >= 8.1
- Composer
- Node.js & npm
- MySQL or compatible database

### Installation

1. **Clone the repository**
   ```sh
   git clone <your-repo-url>
   cd E-commerce-using-Laravel
   ```

2. **Install PHP dependencies**
   ```sh
   composer install
   ```

3. **Install Node.js dependencies**
   ```sh
   npm install
   ```

4. **Copy the example environment file and configure**
   ```sh
   cp .env.example .env
   ```
   Update `.env` with your database credentials.

5. **Generate application key**
   ```sh
   php artisan key:generate
   ```

6. **Run database migrations**
   ```sh
   php artisan migrate
   ```

7. **(Optional) Seed the database**
   ```sh
   php artisan db:seed
   ```

8. **Build frontend assets**
   ```sh
   npm run dev
   ```

9. **Start the development server**
   ```sh
   php artisan serve
   ```
   Visit [http://localhost:8000](http://localhost:8000) in your browser.

## Project Structure

- `app/` - Application logic (Controllers, Models, etc.)
- `resources/views/` - Blade templates for frontend
- `routes/web.php` - Web routes
- `database/migrations/` - Database schema
- `public/` - Publicly accessible files

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
