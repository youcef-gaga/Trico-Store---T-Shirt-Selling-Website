# Trico Store - T-Shirt Selling Website

## Description
**Trico Store** is my first project web-based e-commerce platform for selling t-shirts. Users can browse through the available t-shirt products, check details, and purchase items online. The system includes a front-end interface built with **Laravel Blade**, and a back-end powered by **Laravel**, **PHP**, and **MySQL**. This is not a complete site but a base to start with.

---

## Prerequisites
Before running the project, ensure the following are installed:
- **PHP 7.3 or higher**
- **MySQL 5.7 or higher**
- **Composer** for PHP dependency management
- **Node.js & npm** for managing frontend assets
- **Laravel CLI** (optional but recommended)

---

## Installation Guide

### Step 1: Clone the Repository
Clone this repository to your local machine:

```
git clone <repository-url>
```
## Step 2: Install Dependencies
Navigate to the project directory and install the necessary PHP and Node.js dependencies.`
```
cd <project-directory>
composer install
npm install
```
## Step 3: Configure the Environment
Copy the example .env file and modify it to match your database setup
## Step 4: Generate Application Key
Generate the Laravel application key:
```
php artisan key:generate
```
## Step 5: Migrate the Database and Seed Data
Run the migrations to set up the database structure, then seed the database with initial data (if available):
```
php artisan migrate
php artisan db:seed
```
## Step 6: Run the Application
Serve the Laravel application locally:
```
php artisan serve
```
You should be able to view the website at http://127.0.0.1:8000/.
---
# Features
## Home Page
- Displays a list of available t-shirts.
- Each product includes a description, price, and image.
## Product Details
- Shows detailed information about each t-shirt.
- Allows users to add products to the cart.
## Shopping Cart & Checkout
- Users can view their selected items and proceed to checkout.
- Integrates a basic payment system (optional).
## Admin Panel
- A basic admin panel for managing products (available in future versions).
---
# Future Enhancements
- Implement user authentication (login, register).
- Add payment gateway integration for online purchases.
- Enhance the admin panel for better inventory management.
---
# Troubleshooting
- Database Connection Issues: Ensure the database credentials in .env are correct.
- Missing Migrations: If migrations fail, ensure the database is correctly set up and run php artisan migrate:fresh.
---
## License
 - This project is open-source and free to use under the MIT license.