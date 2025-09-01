# Diana Home Stay
A fully responsive and user-friendly website developed using HTML, CSS, PHP, and MySQL, designed to showcase a homestay’s services, rooms, and facilities. Visitors can explore room options, submit booking or inquiry forms, and interact with a simple yet effective system.


## Table of Contents
- [Screenshots](#screenshots-)
- [Features](#features)
- [Installation](#installation)
- [Running the Project](#running-the-project)

## Screenshots
<img width="1894" height="788" alt="Screenshot 2025-08-25 122333" src="https://github.com/user-attachments/assets/6990e3e3-b138-4326-9d0b-5758c973aa46" />
<img width="1894" height="917" alt="Screenshot 2025-08-25 122349" src="https://github.com/user-attachments/assets/fa34e7ca-c5c2-4cbf-a301-31f13fdbfcfd" />
<img width="1886" height="634" alt="Screenshot 2025-08-25 123603" src="https://github.com/user-attachments/assets/d397c597-c250-42c9-84cc-ee555a41fde9" />
<img width="1886" height="695" alt="Screenshot 2025-08-25 123617" src="https://github.com/user-attachments/assets/61c1954b-2dc6-4b95-b639-02c516079d44" />
<img width="1899" height="854" alt="Screenshot 2025-08-25 123635" src="https://github.com/user-attachments/assets/6700d6f3-5d6f-4d63-b58b-cdee41fd48df" />


## Features
* Browsable homepage featuring homestay overview and visuals
* Responsive room gallery detailing available options and amenities
* Interactive booking/inquiry form for visitors
* Secure PHP backend for form submissions and data handling
* MySQL database to store booking requests and inquiries

## Installation & Setup

1. **Clone Repository**
```bash
git clone https://github.com/sarikahn/RecruitX.git
cd RecruitX
```

2. **Install Dependencies**
```bash
# Backend setup
cd Backend
npm install

# Frontend setup
cd ../Frontend
npm install
```

3. **Environment Configuration**

Frontend `.env`:
```env
VITE_BASE_URL=http://localhost:4000/api/v1
VITE_FILESTACK_API_KEY=your_filestack_key
```

Backend `.env`:
```env
MONGO_URI=your_mongodb_connection_string
PORT=4000
ACCESS_TOKEN_SECRET=your_access_token_secret
REFRESH_TOKEN_SECRET=your_refresh_token_secret
FILESTACK_API_KEY=your_filestack_key
CORS_ORIGIN=http://localhost:5173
CLOUDINARY_CLOUD_NAME=your_cloudinary_name
CLOUDINARY_API_KEY=your_cloudinary_key
CLOUDINARY_API_SECRET=your_cloudinary_secret
GROQ_API_KEY=your_groq_api_key
```

4. **Start Application**
```bash
# Start backend (http://localhost:4000)
cd Backend
npm run dev

# Start frontend (http://localhost:5173)
cd Frontend
npm run dev
```

## Tech Stack

Frontend:
- HTML
- CSS
- JavaScript

Backend:
- PHP
- MongoDB

Database:
MySQL

## Author
Sarika HN
Full-stack developer passionate about building  user-focused web applications.

                                      Thank you for exploring the Diana Home Stay! Happy coding! 🚀
