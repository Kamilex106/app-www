# Website Project with Online Store Functionality

## Overview

This project is a multifunctional web application built with PHP that combines content management system (CMS) features with a fully operational online store. The core concept is to enable dynamic content management through database-stored subpages while providing comprehensive e-commerce capabilities for customers.

## Main Components

### Content Management System

- **Dynamic Pages**: All website content is stored in the database (`moja_strona.sql`)
- **Admin Panel**: Allows adding, editing, and removing pages without code modification
- **Page Listing**: Administrators can view all existing pages

### Online Store

- **Category System**: Hierarchical category structure (main categories and subcategories)
- **Product Management**: Adding, editing, and assigning products to categories
- **Shopping Cart**: Complete cart functionality (adding, removing, changing product quantities)
- **Order Summary**: Calculation of net and gross order values

### User System

- **Customer Registration**: Ability to create an account in the store
- **Authentication**: Separate login systems for customers and administrators
- **Password Recovery**: Account access recovery function

### Communication Features

- **Contact Form**: Ability to send messages to the site administrator
- **Email Notification System**: Using the PHPMailer library for sending messages

## Technical Structure

### Core Files

- **index.php**: Main application controller, manages page display and handles requests
- **koszyk.php**: Contains class for shopping cart functionality
- **sklep_klient.php**: Handles customer-related functions (category display, login)
- **sklep_admin.php**: Contains administrative functions for managing store structure
- **contact.php**: Handles contact forms and password recovery functions
- **cfg.php**: Database connection configuration

### Database

The database structure (`moja_strona.sql`) contains tables for storing:

- Page content
- User data
- Categories in a tree structure
- Products
- Shopping cart contents

### External Dependencies

The project uses the PHPMailer library for handling email transmission (defined in `composer.json`).

## Example Functionalities

- Dynamic display of categories and subcategories in a tree structure
- Adding products to cart and modifying its contents
- Managing subpages from the administration panel
- Contact form with password recovery function
- Separate login system for customers and administrators

# Setup Instructions with XAMPP

### Step 1: Install XAMPP

1. Download XAMPP from the official website (https://www.apachefriends.org/)
2. Run the installer and follow the installation instructions
3. Start the Apache and MySQL services using the XAMPP Control Panel

### Step 2: Database Setup

1. Open your browser and navigate to `http://localhost/phpmyadmin`
2. Create a new database by clicking on "New" in the left sidebar
3. Enter a database name (e.g., `moja_strona`) and select "utf8_general_ci" as the collation
4. Click "Create" to establish the database

### Step 3: Import Database Structure

1. Select your newly created database from the left sidebar in phpMyAdmin
2. Click on the "Import" tab at the top of the page
3. Click "Choose File" and locate the `moja_strona.sql` file from the project
4. Leave the default settings and click "Go" to import the database structure and content

### Step 4: Configure the Project

1. Place all project files in the `htdocs` directory of your XAMPP installation (typically `C:\xampp\htdocs\your_project_folder`)
2. Open the `cfg.php` file and ensure the database connection parameters match your setup:

   ```php
   $dbhost = 'localhost';
   $dbuser = 'root'; // default XAMPP username
   $dbpass = ''; // default XAMPP password is empty
   $baza = 'moja_strona'; // the database name you created\
   // Administrator credentials for admin panel login
   $login = 'login';
   $pass = 'haslo';
   // Email password for sending notifications and password recovery
   $email_pass= 'your_email_password';
   ```

### Step 5: Install Dependencies

1. Open a command prompt or terminal
2. Navigate to your project directory
3. Run `composer install` to install the required PHP dependencies (PHPMailer)

### Step 6: Launch the Website

1. Ensure Apache and MySQL services are running in XAMPP Control Panel
2. Open your browser and navigate to `http://localhost/your_project_folder`
3. The website should now be operational with all functionality available
