# Project Overview
This project was designed to create a blog web application. It aimed to utilize modern web development techniques and tools to deliver a robust and user-friendly application.
Made with Codeigniter4, PHP, MySQL. User will have to specify database in Database.php to blog information, currently no database is given, but the query to complete the database is below. 
Consists of:
- A home page with the current top 5 blogs
- Ability to create a new blog post with title, description, image and any tags, and a
- Pagination view of blogs

# Motivation
The primary motivation behind this project was to deepen my understanding of web development frameworks and technologies. Specifically, I wanted to gain hands-on experience with the CodeIgniter 4 framework, enhance my knowledge of the MVC (Model-View-Controller) architecture, and improve my skills in PHP and MySQL.

# What I Learned
Throughout the development of this project, I gained valuable insights and experience in several key areas:

- CodeIgniter 4 Framework: I learned how to set up and configure a project using CodeIgniter 4, understanding its structure, and utilizing its features to streamline development.
- MVC Model: The project reinforced the principles of the MVC architecture, helping me appreciate the separation of concerns and how to implement it effectively in a web application.
- PHP: I expanded my knowledge of PHP, learning more about its advanced features, and how to use it effectively in conjunction with CodeIgniter.
- SQL: I enhanced my skills in MySQL, learning how to design, implement, and manage a database to support the application's requirements.

# Current Status
As of now, the project has been put on hold. While it provided significant learning opportunities and helped me achieve my initial goals, other priorities have required my attention. Consequently, active development has been paused.

# Query
CREATE TABLE Blogs (id INT AUTO_INCREMENT PRIMARY KEY,  title VARCHAR(255),  description TEXT,  image_url VARCHAR(255),  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP);
CREATE TABLE Tags (tag_name VARCHAR(50) PRIMARY KEY);
CREATE TABLE BlogTags (blog_id INT,  tag_name VARCHAR(50),  FOREIGN KEY (blog_id) REFERENCES Blogs(id),  FOREIGN KEY (tag_name) REFERENCES Tags(tag_name),  PRIMARY KEY (blog_id, tag_name));
