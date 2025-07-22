# 🎂 Ganraj Cake and Pastries - E-Commerce Website

A comprehensive e-commerce platform designed specifically for Ganraj Cake and Pastries, offering customers a seamless online shopping experience for cakes, pastries, and bakery items.

## 🌟 Features

### 🔐 User Authentication System
- **User Registration**: New customers can create accounts with email verification
- **Secure Login/Logout**: Protected user sessions with password encryption
- **Password Recovery**: Reset password functionality for forgotten passwords
- **User Profile Management**: Update personal information and preferences

### 🛍️ Product Catalog
- **Dynamic Product Display**: Products loaded dynamically from PHPMyAdmin database
- **Category-wise Browsing**: Organized sections for cakes, pastries, cookies, and custom orders
- **Product Details**: Detailed descriptions, images, prices, and availability status
- **Search Functionality**: Find products quickly with search filters
- **Product Reviews**: Customer ratings and reviews system

### 🛒 Shopping Cart & Orders
- **Add to Cart**: Seamless product addition with quantity selection
- **Cart Management**: Update quantities, remove items, and view total prices
- **Order Processing**: Complete checkout process with order confirmation
- **Order History**: Track previous orders and delivery status
- **Invoice Generation**: Downloadable receipts for completed orders

### 📱 User Experience
- **Responsive Design**: Optimized for desktop, tablet, and mobile devices
- **Interactive UI**: Smooth navigation and user-friendly interface
- **Loading Animations**: Enhanced user experience with dynamic loading
- **Contact Form**: Direct communication channel with the bakery

### 🎨 Custom Features
- **Special Occasion Cakes**: Browse birthday, wedding, and anniversary cakes
- **Cake Customization**: Options for personalized messages and designs
- **Delivery Tracking**: Real-time order status updates
- **Wishlist**: Save favorite items for future purchases

## 🛠️ Technology Stack

### Frontend
- **HTML5**: Semantic markup and structure
- **CSS3**: Modern styling with responsive design
- **JavaScript**: Interactive functionality and dynamic content
- **Bootstrap** (if applicable): Responsive framework components

### Backend
- **PHP**: Server-side scripting and business logic
- **MySQL**: Database management through PHPMyAdmin
- **XAMPP**: Local development environment

### Database
- **User Management**: Customer accounts and authentication
- **Product Catalog**: Items, categories, prices, and inventory
- **Order Management**: Purchase history and order tracking
- **Admin Panel**: Content management and order processing

## 📋 Prerequisites

Before running this project, ensure you have the following installed:

- **XAMPP** (Apache, MySQL, PHP)
- **Web Browser** (Chrome, Firefox, Safari, Edge)
- **Text Editor** (VS Code, Sublime Text, or any preferred editor)

## 🚀 Installation & Setup

### 1. Clone the Repository
```bash
git clone https://github.com/Kunal-Darekar/E-Commerce-Website-For-Ganraj-Cake-and-Pastries-.git
cd E-Commerce-Website-For-Ganraj-Cake-and-Pastries-
```

### 2. Setup XAMPP Environment
1. Download and install [XAMPP](https://www.apachefriends.org/index.html)
2. Start **Apache** and **MySQL** services from XAMPP Control Panel
3. Copy the project folder to `C:\xampp\htdocs\` (Windows) or `/Applications/XAMPP/htdocs/` (Mac)

### 3. Database Configuration
1. Open **PHPMyAdmin** in your browser: `http://localhost/phpmyadmin`
2. Create a new database named `ganraj_bakery` (or as specified in your config)
3. Import the SQL file (if provided) or create tables as needed:
   - `users` - Customer information and authentication
   - `products` - Cake and pastry catalog
   - `orders` - Order management and history
   - `cart` - Shopping cart items
   - `categories` - Product categories

### 4. Configure Database Connection
Update the database connection settings in your PHP configuration file:
```php
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ganraj_bakery";
?>
```

### 5. Run the Application
1. Open your web browser
2. Navigate to: `http://localhost/E-Commerce-Website-For-Ganraj-Cake-and-Pastries-/`
3. The homepage should load successfully

## 📁 Project Structure

```
E-Commerce-Website-For-Ganraj-Cake-and-Pastries-/
├── index.php                 # Homepage
├── login.php                 # User login page
├── register.php              # User registration
├── products.php              # Product catalog
├── cart.php                  # Shopping cart
├── checkout.php              # Order processing
├── contact.php               # Contact form
├── admin/                    # Admin panel (if applicable)
├── css/                      # Stylesheets
│   ├── style.css
│   └── responsive.css
├── js/                       # JavaScript files
│   ├── main.js
│   └── cart.js
├── images
