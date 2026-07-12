# Online Diagnostic Lab Management System

An open-source web application built with **PHP** and **MySQL** for managing
diagnostic-lab operations. It provides separate panels for administrators, lab
employees, and clients to handle tests, samples, appointments, billing, and
reporting.

## Features

- **User roles** — administrator, lab employee, and client, each with their own
  panel and permissions.
- **Test management** — add, edit, and delete diagnostic tests with details and
  pricing.
- **Sample management** — sample collection, tracking, and test assignment.
- **Appointment scheduling** — book appointments for sample collection.
- **Billing & invoicing** — generate bills and invoices per client.
- **Reporting** — reports on results, transactions, and lab operations.

## Requirements

- PHP 7.0 or higher (PDO MySQL extension enabled)
- MySQL / MariaDB
- A web server (Apache, Nginx, or the bundled server in XAMPP/WAMP/MAMP)

## Project structure

```
.
├── index.php          # Public landing page
├── config.example.php # DB config template (copy to config.php)
├── admin/             # Administrator panel
├── employee/          # Lab-employee panel
├── user/              # Client panel
├── css/  js/  fonts/  images/   # Shared front-end assets
└── */includes/dbconnection.php   # Shared DB connection (reads config.php)
```

## Installation

1. **Clone the repository** into your web-server root:

   ```shell
   git clone https://github.com/<your-username>/Online-Diagnostic-Lab-Management.git
   cd Online-Diagnostic-Lab-Management
   ```

2. **Create the configuration file** from the template and edit your DB
   credentials:

   ```shell
   cp config.example.php config.php
   ```

   Then edit `config.php` (or set the `DB_HOST`, `DB_USER`, `DB_PASS`,
   `DB_NAME` environment variables). `config.php` is git-ignored, so your
   credentials are never committed.

3. **Create the database.** Create a MySQL database named `odlmsdb` (or whatever
   you set in `config.php`) and import the schema:

   ```shell
   mysql -u root -p odlmsdb < database/odlmsdb.sql
   ```

   > **Note:** the SQL dump is not included in this archive. Export it from your
   > working database and place it at `database/odlmsdb.sql` so others can set
   > the project up.

4. **Serve the app** — point your web server at the project folder, or run PHP's
   built-in server for local testing:

   ```shell
   php -S localhost:8000
   ```

5. Open `http://localhost:8000/` in your browser.

## Default credentials

For security, default login credentials are **not** stored in this repository.
Set up your admin/employee/client accounts directly in the database after
importing the schema, or through the app's registration flow where available.

## Security notes

- Never commit `config.php`, `.env`, or any file containing real passwords.
- User-uploaded files under `admin/images/` and `employee/images/` are
  git-ignored and treated as runtime data, not source.
- Consider hashing stored passwords (e.g. `password_hash()`) and using prepared
  statements throughout before deploying to production.

## License

Add a license of your choice (for example, MIT) as a `LICENSE` file.
