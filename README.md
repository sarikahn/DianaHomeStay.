Diana Home Stay

A fully responsive and user-friendly website developed using HTML, CSS, PHP, and MySQL, designed to showcase a homestay’s services, rooms, and facilities. Visitors can explore room options, submit booking or inquiry forms, and interact with a simple yet effective system.

Table of Contents
Demo
Features
Tech Stack
Screenshots
Installation & Setup
Database Schema
Enhancements
Author

Demo
Insert link to the live deployed site here (optional)
e.g., https://dianahomestay.example.com

Features
Browsable homepage featuring homestay overview and visuals
Responsive room gallery detailing available options and amenities
Interactive booking/inquiry form for visitors
Secure PHP backend for form submissions and data handling
MySQL database to store booking requests and inquiries

Tech Stack
Component : Technologies
Frontend : HTML, CSS
Backend : PHP
Database : MySQL


<img width="1894" height="788" alt="Screenshot 2025-08-25 122333" src="https://github.com/user-attachments/assets/6990e3e3-b138-4326-9d0b-5758c973aa46" />
<img width="1894" height="917" alt="Screenshot 2025-08-25 122349" src="https://github.com/user-attachments/assets/fa34e7ca-c5c2-4cbf-a301-31f13fdbfcfd" />
<img width="1886" height="634" alt="Screenshot 2025-08-25 123603" src="https://github.com/user-attachments/assets/d397c597-c250-42c9-84cc-ee555a41fde9" />
<img width="1886" height="695" alt="Screenshot 2025-08-25 123617" src="https://github.com/user-attachments/assets/61c1954b-2dc6-4b95-b639-02c516079d44" />
<img width="1899" height="854" alt="Screenshot 2025-08-25 123635" src="https://github.com/user-attachments/assets/6700d6f3-5d6f-4d63-b58b-cdee41fd48df" />


Installation & Setup
Follow these steps to run the project locally:

Clone the repository
git clone https://github.com/sarikahn/DianaHomeStay.git
cd DianaHomeStay

Import Database
Open database.sql in your preferred MySQL client and execute it to create the necessary database and tables.
Configure Database Connection

Open db_config.php and update the credentials:
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";


Run Locally
Place the project inside your web server directory (e.g., htdocs for XAMPP), then navigate to http://localhost/DianaHomeStay/.
Submit a Booking or Inquiry
Visit the homepage, browse rooms, and use the contact form to test submissions.

Database Schema
The database.sql file defines the following table structure:

CREATE TABLE bookings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(15),
    check_in DATE,
    check_out DATE,
    message TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

Enhancements (Future Work)
Security: Use prepared statements in PHP to prevent SQL injection attacks.
Admin Dashboard: Allow homestay owners to view/manage incoming bookings.
UX Improvements: Add AJAX-powered form submissions and real-time confirmations.
Email Notifications: Send email alerts when new bookings are submitted.
Modernization: Migrate to a modern stack (e.g., React front-end, Node.js backend, MongoDB) for scalability.

Author
Sarika H N
Full-stack developer passionate about building user-focused web applications.

           
                                Thank you for exploring the Diana Home Stay Repo! Happy coding! 🚀

