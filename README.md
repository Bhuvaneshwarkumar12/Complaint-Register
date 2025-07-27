# Corporate Complaint-Register
Here’s a clean, well-formatted `README.md` tailored for **GitHub** presentation — with badges, Markdown styling, sections, and clarity. Copy this directly into a file named `README.md` in your project folder (`complaint_register/`).

markdown
📝 Complaint Register System

![PHP](https://img.shields.io/badge/PHP-7%2B-blueviolet)
![MySQL](https://img.shields.io/badge/Database-MySQL-lightblue)
![License](https://img.shields.io/badge/License-MIT-green)
![Status](https://img.shields.io/badge/Project-Completed-brightgreen)

A simple CRUD-based **Complaint Register System** built using **PHP and MySQL** for internal use in corporate offices. Employees or staff can register their complaints, and the admin can view, update, or delete them via a user-friendly web interface.

---

📸 Demo

> Coming soon...  
> *(You can include a screenshot of the table here when hosted.)*

---

 📁 Features

✅ Register a complaint with:
- Name  
- Department  
- Email  
- Complaint message  

✅ Admin/user interface:
- View all complaints  
- Edit a complaint  
- Delete a complaint  

✅ Plus:
- Responsive HTML form  
- Basic form validation  
- Timestamped complaints  
- Clean and minimal UI  

---

🔧 Technologies Used

- 🌐 Frontend: HTML + basic CSS
- 🖥️ Backend: PHP (procedural)
- 💾 Database: MySQL
- 🧰 Platform: XAMPP (Apache + MySQL)

---

🚀 How to Run Locally (with XAMPP)

1. Start Services
- Open XAMPP Control Panel
- Start **Apache** and **MySQL**

### 2. Create Database
Open XAMPP Shell or Command Prompt and run:

```sql
mysql -u root
````

Then paste:

```sql
CREATE DATABASE complaints_db;
USE complaints_db;

CREATE TABLE complaints (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    department VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    complaint TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

3. Setup Files

  C:\xampp\htdocs\complaint_register

Done!



🗃️ Folder Structure

complaint_register/
config.php        → Database connection
index.php         → Display complaints
create.php        → Submit complaint
edit.php          → Edit complaint
delete.php        → Delete complaint
README.md         → Project documentation


📦 Future Improvements (Optional)

* [ ] Admin login system
* [ ] Email confirmation on complaint
* [ ] Complaint status (Pending, Resolved)
* [ ] Pagination and search
* [ ] Export to CSV/Excel


🙋‍♂️ Author
Bhuvaneshwar Kumar
Pre-Final year IT student | Passionate about Web Dev & ML
Built with 💙 using PHP & XAMPP



