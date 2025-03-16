# 🛂 Laravel E-commerce CRUD Project

A simple Laravel-based E-commerce system with **CRUD operations** for managing products. This project demonstrates how to create, read, update, and delete products while implementing **pagination, validation, relationships, and flash messages**.

## 🚀 Features
✅ **CRUD Operations** (Create, Read, Update, Delete) for Products  
✅ **Product Management** with Image, Price, and Description  
✅ **One-to-Many Relationship** (Each Product belongs to a Brand)  
✅ **Eager Loading Optimization** (Prevents N+1 queries)  
✅ **Orders System** (Users can place orders for products)  
✅ **Flash Messages** (Success notifications for user actions)  
✅ **Pagination** for Product Listings  
✅ **Database Seeding** using Factories for test data  
✅ **Bootstrap UI** for a clean and responsive design  

---

## 📂 Project Structure
```
laravel-ecommerce/
├── app/
│   ├── Http/Controllers/
│   │   ├── ProductController.php
│   │   ├── BrandController.php
│   │   ├── OrderController.php
│   ├── Models/
│   │   ├── Product.php
│   │   ├── Brand.php
│   │   ├── Order.php
│
├── database/
│   ├── factories/
│   │   ├── BrandFactory.php
│   │   ├── ProductFactory.php
│   │   ├── OrderFactory.php
│   ├── migrations/
│   │   ├── create_products_table.php
│   │   ├── create_brands_table.php
│   │   ├── create_orders_table.php
│   ├── seeders/
│   │   ├── DatabaseSeeder.php
│   │   ├── BrandSeeder.php
│   │   ├── ProductSeeder.php
│   │   ├── OrderSeeder.php
│
├── routes/
│   ├── web.php
│
├── resources/
│   ├── views/
│   │   ├── layouts/
│   │   │   ├── app.blade.php
│   │   ├── products/
│   │   │   ├── index.blade.php
│   │   │   ├── create.blade.php
│   │   │   ├── edit.blade.php
│   │   │   ├── show.blade.php
│
└── public/
    ├── css/app.css
```

---

## 🛠 Technologies Used
- **Laravel 10+**
- **PHP 8+**
- **MySQL / SQLite (For Local Testing)**
- **Bootstrap 5**
- **Faker (For Seeding Fake Data)**
- **Eloquent ORM**

---

## ⚡ Setup Guide

### 1⃣ **Clone the Repository**
```sh
git clone https://github.com/YOUR_GITHUB_USERNAME/laravel-ecommerce-crud.git
cd laravel-ecommerce-crud
```

### 2⃣ **Install Dependencies**
```sh
composer install
npm install
```

### 3⃣ **Create the Environment File**
```sh
cp .env.example .env
```
> **🔹 Configure `.env` with your database credentials**

### 4⃣ **Generate Application Key**
```sh
php artisan key:generate
```

### 5⃣ **Run Migrations & Seed Database**
```sh
php artisan migrate --seed
```

### 6⃣ **Start the Development Server**
```sh
php artisan serve
```
> **🔹 The application will run on:** `http://127.0.0.1:8000`

---

## 📀 CRUD Operations

### 🔹 **1. View All Products**
- **Route:** `GET /products`
- **Description:** Displays a paginated list of products.

### 🔹 **2. Create a New Product**
- **Route:** `GET /products/create`
- **Form Fields:**
  - Name
  - Price
  - Description
  - Image URL
- **Validation:** All fields are required.

### 🔹 **3. Edit a Product**
- **Route:** `GET /products/{id}/edit`
- **Form Fields:** Same as create.

### 🔹 **4. Delete a Product**
- **Route:** `DELETE /products/{id}`
- **Confirmation Prompt:** Ensures the user wants to delete.

### 🔹 **5. Show Product Details**
- **Route:** `GET /products/{id}`
- **Description:** Displays full product information.

---

## 🔥 Database Relationships
| Table | Relation |
|--------|----------|
| Products | Belongs to one Brand |
| Brands | Has many Products |
| Orders | Belongs to one User & Product |

---

## 🎯 API Routes (For Future Enhancements)
| HTTP Method | URI | Action |
|-------------|------------------|----------------|
| GET | /products | List all products |
| POST | /products | Create a new product |
| GET | /products/{id} | Show product details |
| PUT | /products/{id} | Update a product |
| DELETE | /products/{id} | Delete a product |

---

## 🤝 Contributing
1. **Fork the repository**
2. **Create a new branch** (`feature-branch`)
3. **Make your changes and commit** (`git commit -m "Added new feature"`)
4. **Push your changes** (`git push origin feature-branch`)
5. **Create a Pull Request** 🚀

