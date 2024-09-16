**CHURCH/MINISTRY WEB APPLICATION**

**Project Overview**


This web application is developed to serve primarily individuals of the Christian faith. Its goal is to increase membership by offering an online registration form, integrated M-Pesa STK Push for donations, spiritual e-book resources, and a platform to submit prayer requests. The application is built with a user-friendly front-end and a powerful back-end to manage data and transactions efficiently.

**Core Features**


Member Registration
Prospective members can fill out an online registration form, and their details are stored in the MySQL database.

M-Pesa Express Donations
The application integrates Safaricom's Daraja API for M-Pesa STK Push functionality, allowing users to easily make donations via their mobile phones.

Prayer Request Submission
Users can submit prayer requests, which will be sent to the ministry’s official email for follow-up and support.

Resource Centre
Users have access to a library of spiritual e-books to help them grow spiritually and cultivate a reading culture.

**Technical Requirements**


Frontend: Built using HTML, CSS, and JavaScript to create interactive and user-friendly web pages.
Backend: Powered by PHP to handle form submissions and other server-side logic.
Database: MySQL is used for managing and storing user data.
Server: The application runs on an Apache server, supported via XAMPP.
API Integration: Safaricom Daraja API is used to process M-Pesa payments via STK Push.
Architecture
The application follows a client-server model where users interact with the front-end, and the back-end handles database operations and API integrations.

**API Routes:**


Access Token Generation
URL: https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials
HTTP Method: POST
Description: Used to obtain an access token for authenticating M-Pesa API requests.

STK Push Payment Request
URL: https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest
HTTP Method: POST
Description: Initiates a payment request by sending an STK Push to the user's phone, allowing them to authorize payment.

**User Stories**


Member Registration
As a prospective member, I want to fill out an online registration form so that my details are stored in the database and I can become a registered member of the ministry.

M-Pesa Payment
As a user wishing to donate, I want to receive an M-Pesa payment prompt on my phone so that I can easily authorize and complete my donation.

Prayer Request Submission
As a member, I want to submit my prayer requests through the application so that they can be sent to the ministry’s official email and prayed for.

Accessing E-books
As a user interested in spiritual growth, I want to access a variety of spiritual e-books from the resource center so that I can read and deepen my knowledge and faith.

Error Handling
As a user, I want to receive clear error messages if I submit invalid information so that I can correct mistakes and successfully register.


**Installation**


Clone the repository.


Install XAMPP or another server that supports PHP and MySQL.


Import the database schema.


Set up Safaricom Daraja API credentials.


Run the project on localhost using XAMPP.

**Contribution**
Feel free to submit pull requests or raise issues to improve the project.

**License**
This project is licensed under.

All rights reserved @2024

