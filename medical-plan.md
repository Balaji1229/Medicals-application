# Medical Store Management System

## Overview
A Laravel-based web application for managing a medical store / pharmacy. It tracks medicines, categories, suppliers, customers, stock levels, and sales.

## Tech Stack
- **Backend:** Laravel 11 (PHP 8.2+)
- **Frontend:** Blade + Laravel Breeze (Tailwind CSS + Alpine.js)
- **Database:** SQLite (default for local development)
- **Authentication:** Laravel Breeze

## Features

### 1. Authentication
- User login / registration
- Password reset
- Dashboard accessible after login

### 2. Dashboard
- Summary cards: total medicines, low stock count, today's sales, total customers
- Recent sales table
- Low stock alerts

### 3. Medicine Management
- CRUD for medicines
- Fields: name, generic name, category, supplier, unit, price, stock quantity, expiry date, description
- Search and filter by category / supplier
- Low stock indicator

### 4. Category Management
- CRUD for medicine categories

### 5. Supplier Management
- CRUD for suppliers
- Fields: name, phone, email, address, company

### 6. Customer Management
- CRUD for customers
- Fields: name, phone, email, address

### 7. Sales / Invoicing
- Create sale with multiple items
- Auto-decrement stock
- View invoice / sales history
- Calculate total, discount, grand total

### 8. Stock Management
- View stock levels
- Low stock alerts (< 10 units)

## Database Schema

### users
- id, name, email, email_verified_at, password, remember_token, timestamps

### categories
- id, name, description, timestamps

### suppliers
- id, name, company, phone, email, address, timestamps

### customers
- id, name, phone, email, address, timestamps

### medicines
- id, name, generic_name, category_id, supplier_id, unit, price, stock_quantity, expiry_date, description, timestamps

### sales
- id, invoice_no, customer_id, user_id, total_amount, discount, grand_total, sale_date, timestamps

### sale_items
- id, sale_id, medicine_id, quantity, unit_price, total_price, timestamps

## Routes
- `/dashboard` - Dashboard
- `/medicines` - Medicine CRUD
- `/categories` - Category CRUD
- `/suppliers` - Supplier CRUD
- `/customers` - Customer CRUD
- `/sales` - Sales list
- `/sales/create` - Create sale
- `/sales/{sale}` - Sale invoice view

## Implementation Steps
1. Install Laravel with Breeze
2. Configure SQLite database
3. Create migrations and models
4. Create factories and seeders
5. Implement controllers and routes
6. Build Blade views
7. Add dashboard widgets
8. Run migrations and seeders
9. Test the application
