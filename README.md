## Overview
This project is a website that can be run locally using **XAMPP**. Follow the instructions below to set up the environment and run the project.

## Prerequisites
- [XAMPP](https://www.apachefriends.org/) installed on your local machine.

## Setup Instructions

### Step 1: Install XAMPP
1. Download XAMPP from the [official website](https://www.apachefriends.org/).
2. Install XAMPP on your system.

### Step 2: Copy Project Files
1. Navigate to the download location of XAMPP.
2. Unzip the project code files into the `C:/xampp/htdocs/` directory.

### Step 3: Launch XAMPP and Start Services
1. Open the **XAMPP Control Panel**.
2. Start **Apache** and **MySQL**.
3. Run **MySQL** as admin (this will open a browser tab).

### Step 4: Create a Database
1. In the browser tab, click the **Database** tab at the top.
2. Create a new database (name it whatever you'd like).

### Step 5: Import the SQL File
1. After creating the database, click the **Import** tab.
2. Select the `shop_db.sql` file located in the project directory: `C:/xampp/htdocs/PROJECT/shop_db.sql`.

### Step 6: Run the Website
1. Once the database is imported, open your browser.
2. Type the following URL to access the website:  
   `http://localhost/PROJECT/home.php`.

---

You should now be able to access and run the project locally!
