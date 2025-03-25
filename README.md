### 📄 `README.md`
```md
# 🚀 Laravel Lab 10 – CRUD with Eloquent ORM

## 📌 Overview
This Laravel project is a Well Operation Management System built using **Eloquent ORM** and **Blade templates**, supporting full **CRUD operations**:
- Create, Read, Update, Delete well records
- Use of database migration, model, and controller
- Clean UI using Bootstrap (optional)

## 🛠️ Setup Instructions
1. Clone or download the project  
2. Run:
   ```bash
   composer install
   cp .env.example .env
   php artisan key:generate
   ```
3. Create a MySQL database (e.g., `well_management`) and update `.env`:
   ```
   DB_DATABASE=well_management
   DB_USERNAME=root
   DB_PASSWORD=root
   ```
4. Run migrations:
   ```bash
   php artisan migrate
   ```
5. Start the server:
   ```bash
   php artisan serve
   ```

Visit:  
📍 `http://127.0.0.1:8000/wells`

## 🧩 Features
- Eloquent Model: `Well`
- Routes: `Route::resource('wells', WellController::class)`
- Views: index, create, edit, show
- Layout: `layouts.app.blade.php`
- Form validation & database interaction

## ✅ Status
✔️ Fully functional  
✔️ Ready for submission

## Screenshots
-homepage
![image](https://github.com/user-attachments/assets/45d48881-de33-42a0-bea7-24af74d8065b)
-add new well
![image](https://github.com/user-attachments/assets/5642cb65-c474-48f1-9387-e36a6edf4e33)
-after adding
![image](https://github.com/user-attachments/assets/de21c463-ecd9-4f9d-b617-9b7b8098810c)
-view detail
![image](https://github.com/user-attachments/assets/fc6fbbb7-9341-4b2d-b2f5-16f3101d14c5)
## -**edit
![image](https://github.com/user-attachments/assets/3db619f5-278f-4f2d-b42b-a6b1e8722c9e)
-delete
![image](https://github.com/user-attachments/assets/d8380895-5288-4943-86cc-d67d86f44dd1)





