# The Teacher Guidesite

## Project Overview
This project is a web application built using PHP, MySQL, HTML, CSS, and JavaScript. It includes essential features such as user login, email handling, responsive layouts, and interactive navigation using third-party libraries like PHPMailer and SlimMenu.

---

## Table of Contents
- [Project Overview](#project-overview)
- [Features](#features)
- [File Structure](#file-structure)
- [Getting Started](#getting-started)
- [Third-Party Libraries](#third-party-libraries)
- [Acknowledgments](#acknowledgments)

---

## Features
### Core Functionality
- **User Authentication**:
  - `login.php` and `login_responses.php` handle secure user login functionality.
  - Credentials are securely stored in the `new_table` database table.
- **Email Services**:
  - `mail.php` and `mail_responses.php` manage email sending using PHPMailer.
- **Responsive Layouts**:
  - Unified layout and styling provided by `ttg_layouts.css` and `ttg_styles.css`.
  - Responsive design elements enabled by `responsiveslides.min.js`.
- **Interactive Navigation**:
  - SlimMenu jQuery plugin powers a dynamic, interactive menu available across all pages.
- **User Cookies**:
  - User information stored in cookies is displayed during subsequent visits.
- **Data Management**:
  - Dynamic forms with dropdowns pulling values from the database.
  - Data validation before saving to the `contact` database table.
- **Database-Driven Pages**:
  - `links.php` displays preloaded database information.

---

## File Structure

```
TTG_PHP_PROJ/
|-- homepage.php       # Home page with slideshow
|-- links.php          # Displays database information (restricted access)
|-- mail.php           # Contact form page
|-- mail_responses.php # Processes email submissions
|-- login.php          # Login page
|-- login_responses.php # Processes login details
|-- header.php         # Common header file
|-- footer.php         # Common footer file
|-- ttg_layouts.css    # Layout CSS
|-- ttg_styles.css     # Styling CSS
|-- responsiveslides.min.js # jQuery plugin for responsiveness
|-- PHPMailer-master/  # PHPMailer library
|-- adnantopal-slimmenu-c264256/ # SlimMenu library
|-- img/               # Contains images for the project
```

---

## Getting Started

### Prerequisites
Ensure you have the following installed:
- A local server environment (e.g., XAMPP, WAMP, or MAMP).
- PHP (version 7.4 or higher).
- MySQL database.
- A web browser.

### Installation
1. Clone or download the repository.
   ```bash
   git clone https://github.com/your-username/TTG_PHP_PROJ.git
   ```
2. Extract the contents of the project folder.
3. Place the project directory (`TTG_PHP_PROJ`) into your server's root directory (e.g., `htdocs` for XAMPP).
4. Set up the database:
   - Import the provided SQL file to create the `sora` database.
   - Ensure the following tables are present:
     - `links`
     - `contact`
     - `new_table`
5. Update database connection settings in `config.php`.
6. Start your local server.
7. Open your browser and navigate to `http://localhost/TTG_PHP_PROJ/homepage.php`.

---

## Third-Party Libraries
- **PHPMailer**:
  Used for email functionality. Refer to the [PHPMailer documentation](https://github.com/PHPMailer/PHPMailer) for details.
- **SlimMenu**:
  Lightweight navigation menu. Source: `adnantopal-slimmenu-c264256`.

---

## Acknowledgments
- Thanks to the creators of PHPMailer and SlimMenu for their libraries.

---
