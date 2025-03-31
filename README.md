# Cyber Cafe Management Portal

A web portal for **Param Computer**, a cyber cafe and online services centre in Ahmednagar. Customers can learn about the services and apply online for government certificates and documents. The cafe owner manages every application from an admin panel.

## Features

### Public website
- Home, About Us and Contact Us pages built on the Mexant Bootstrap template
- Service pages for tahasil (revenue office) work, farmer services, business documents, computer courses, college admissions, entrance exams and sports
- Contact form that saves enquiries to the database

### Online application forms
Each form collects the applicant's personal and address details, uploads the required documents, and stores the application in the database.

| Tahasil certificates | Business and identity documents |
| --- | --- |
| Caste certificate | PAN card |
| Income certificate | Voter ID card |
| Domicile certificate | e-Shram card |
| Nationality certificate | Driving licence |
| Residence certificate (Rahivasi Dakhala) | Passport |
| Non-creamy layer certificate | Shop Act licence |
| EWS certificate | Business Aadhaar |
| Certificate of being a farmer | Character verification |
| Hilly area (Dongari) certificate | |

### Admin panel (`/login`)
- Admin login
- Dashboard listing all submitted applications
- Detail view for each application, with preview and download of the uploaded documents
- Contact enquiries list
- Subscription plans for dashboard access:

| Plan | Price | Access |
| --- | --- | --- |
| 1 Month | ₹79 | Dashboard, contacts, unlimited forms, read-only database |
| 3 Months | ₹199 | Dashboard, contacts, unlimited forms, read-only database |
| 1 Year | ₹799 | Dashboard, contacts, unlimited forms, full database control |

The dashboard checks subscription validity and shows an expiry notice when the plan ends.

## Tech stack

- **Backend:** PHP (mysqli)
- **Database:** MySQL / MariaDB
- **Frontend:** HTML, CSS, Bootstrap, jQuery, Owl Carousel, Swiper, Font Awesome
- **Local server:** XAMPP (Apache + MySQL)

## Project structure

```
├── index.php, about-us.php, contact-us.php   # Public pages
├── contactf.php                              # Contact form handler
├── services/                                 # Service pages
├── forms/
│   ├── connection/connection.php             # DB connection for forms and admin
│   ├── style_js/                             # Shared form styles, state/city list
│   ├── tahasil_certificate/<form>/           # Certificate forms
│   └── business/<form>/                      # Business and identity document forms
├── login/                                    # Admin panel
│   ├── login_index.php, authentication.php   # Login
│   ├── display.php, view.php, contact.php    # Dashboard, application view, enquiries
│   ├── pack.php, payment.php, subscription.php, sub/   # Subscription plans
│   └── database/                             # Uploaded documents (not tracked in git)
├── assets/, vendor/, style/, img/, icon/     # Template assets and images
```

Each form folder contains the form page, a `function.php` handler that saves the application and its uploads, and `success.php` and `failed.php` result pages.

## Running locally

1. Install [XAMPP](https://www.apachefriends.org/) and start **Apache** and **MySQL**.
2. Copy this project into `C:\xampp\htdocs\` (for example `C:\xampp\htdocs\param-computer`).
3. Open phpMyAdmin at `http://localhost/phpmyadmin` and create two databases:
   - `param_users` for applications, enquiries and subscriptions
   - `javatpoint` for admin login
4. Create the tables (see below), then add an admin user to the `login` table.
5. Visit `http://localhost/param-computer/`. The admin panel is at `/login/login_index.php`.

The database credentials are in `forms/connection/connection.php` and `login/connection.php` (default XAMPP user `root` with no password).

### Database tables

```sql
-- Database: javatpoint
CREATE TABLE login (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL,
  password VARCHAR(255) NOT NULL
);

-- Database: param_users
CREATE TABLE contact (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100), phone VARCHAR(20), email VARCHAR(100),
  subject VARCHAR(200), message TEXT, date DATETIME
);

CREATE TABLE subscription (
  id INT AUTO_INCREMENT PRIMARY KEY,
  subscription_date DATETIME, pack VARCHAR(20), validity DATE
);

CREATE TABLE data (
  id INT AUTO_INCREMENT PRIMARY KEY,
  form_type VARCHAR(100),
  first_name VARCHAR(50), middel_name VARCHAR(50), last_name VARCHAR(50),
  gender VARCHAR(10), contact VARCHAR(20), email VARCHAR(100),
  state VARCHAR(50), district VARCHAR(50), city VARCHAR(50), vilage VARCHAR(50), pincode VARCHAR(10),
  -- uploaded document file names (each form fills only the ones it needs)
  adhar_front VARCHAR(100), adhar_back VARCHAR(100), your_photo VARCHAR(100),
  ration_card VARCHAR(100), leaving_certificate VARCHAR(100), bonafide VARCHAR(100),
  pan_card VARCHAR(100), bank_passbook VARCHAR(100), shop_photo VARCHAR(100),
  police_clearance VARCHAR(100), cast_certificate VARCHAR(100),
  talathi_income_certificate VARCHAR(100), tahasil_income_certificate VARCHAR(100),
  talathi_farmer_certificate VARCHAR(100), father_leaving_certificate VARCHAR(100),
  grandfather_leaving_certificate VARCHAR(100), father_photo VARCHAR(100),
  father_voter_id VARCHAR(100), mother_voter_id VARCHAR(100),
  satbara VARCHAR(100), aat_a VARCHAR(100), home_utara VARCHAR(100),
  home_strap VARCHAR(100), circle_ahaval VARCHAR(100),
  date DATETIME
);
```

Uploaded documents are saved in `login/database/`. That folder is excluded from git because it holds customers' personal documents.

## Notes

This project was built for local use at the cafe. Before deploying it publicly, it should get:
- prepared statements instead of string-built SQL queries
- hashed admin passwords
- server-side validation of upload file types and sizes
- access control on the `login/database/` uploads folder

## Author

**Shubham Dighe** ([@ShubhamMaster](https://github.com/ShubhamMaster))
