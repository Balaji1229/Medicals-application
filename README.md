# Medical Store Management System

A Laravel-based web application featuring a public medical website and a complete medical store / pharmacy management system.

## Public Website

- **Home** — Hero section, features, call-to-action
- **About Us** — Mission, values, statistics
- **Services** — Pharmacy, health checkups, home delivery, consultation
- **Packages** — Basic Care, Family Care, Premium Care plans
- **Contact Us** — Contact form and location details

## Admin System

- Authentication (Laravel Breeze)
- Dashboard with stats and low-stock alerts
- Medicine management with search and filters
- Category, supplier, and customer management
- Sales / invoicing with automatic stock deduction

## Design

- Medical-themed color palette: teal, cyan, emerald green
- Smooth scroll animations using AOS
- Hover effects, floating elements, and gradient accents
- Fully responsive layout with Tailwind CSS

## Requirements

- PHP 8.4+
- Composer
- Node.js 22+
- MySQL 8.0+

## Installation

1. Clone the repository and navigate to the project directory.
2. Create a MySQL database named `medical`.
3. Copy the environment file:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
4. Update `.env` with your database credentials.
5. Install PHP dependencies:
   ```bash
   composer install
   ```
6. Install Node.js dependencies:
   ```bash
   npm install
   npm run build
   ```
7. Run migrations and seeders:
   ```bash
   php artisan migrate:fresh --seed
   ```
8. Start the development server:
   ```bash
   php artisan serve
   ```
9. Open `http://127.0.0.1:8000` in your browser.

## Default Login

- Email: `admin@example.com`
- Password: `password`

## Running Tests

```bash
php artisan test
```
