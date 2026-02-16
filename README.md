Laravel Email System Using Jobs & Queues

A simple Laravel project demonstrating how to send welcome emails asynchronously using Jobs and Queues after user registration.

This project focuses on understanding Laravel’s background processing system and improving application performance by handling email sending in the queue instead of the main request cycle.

📌 Project Overview

When a user registers:

The user is stored in the database.

A Laravel Job is dispatched.

The Job sends a welcome email using Laravel Mail.

The Queue Worker processes the email in the background.

This ensures faster response time and better scalability.

✨ Features

📝 User Registration Form

📧 Professional HTML Welcome Email Template

⚙️ Laravel Mail Configuration

🔄 Job-Based Email Processing

🚀 Queue Worker Setup

📬 Mailtrap SMTP Integration for Testing
