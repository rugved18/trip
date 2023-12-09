# Trip Website

Welcome to the Trip Website project! This website is a simple platform designed to collect and store user information, including user_name, email, age, gender, and phone_no. Users can submit their details through a form, and the information is stored in a database.

## Table of Contents

- [Features](#features)
- [Requirements](#requirements)
- [Installation](#installation)
- [Configuration](#configuration)
- [Usage](#usage)
- [Contributing](#contributing)

## Features

- User-friendly form to collect user information.
- Database integration to store user details securely.
- Responsive design for a seamless user experience.

## Requirements

- XAMPP or a similar full-stack development environment.
- Web browser with JavaScript enabled.

## Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/your-username/your-repo.git
2 Set up your XAMPP environment and ensure it's running.

3 Import the provided SQL file (database.sql) into your database to create the necessary table.

#Configuration

Configure your database connection in the process_form.php file.
$conn = new mysqli("localhost", "username", "password", "database");

#Usage
http://localhost/your-project-folder/index.php

