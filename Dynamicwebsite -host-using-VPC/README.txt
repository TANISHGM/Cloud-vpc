Dynamic PHP + MySQL Website (Simple Demo)
----------------------------------------

Files:
- index.php   : Home page with form and list (reads/writes to DB)
- submit.php  : Handles POST form submission using prepared statements
- view.php    : Lists all saved records
- config.php  : DB connection settings (edit host/user/pass/db)
- db.sql      : SQL to create database and table
- style.css   : Minimal styling

Quick usage:
1) On your DB server (private EC2), run:
   mysql -u root -p < db.sql    (or paste statements manually)

2) On your Web server (public EC2):
   - Put all files into /var/www/html/
   - Edit config.php to point to the DB private IP and credentials.
   - Ensure Apache + PHP are installed and running.
   - Visit http://<your-public-ip>/
