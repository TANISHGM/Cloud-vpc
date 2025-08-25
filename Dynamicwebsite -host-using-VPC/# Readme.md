# Secure Multi-Tier Dynamic Website on AWS VPC

## Description
This project demonstrates a secure dynamic website with a public web server and a private MySQL database in AWS VPC.

Architecture:
        Internet Users
              |
        [Public Subnet]
        ----------------
        |  Public EC2  |  <- Apache + PHP
        ----------------
              |
     Security Group allows only HTTP/HTTPS inbound
              |
        ----------------
        |  Private Subnet |
        ----------------
        |  Private EC2   |  <- MySQL Database
        ----------------
              |
     Security Group allows MySQL inbound only from Public EC2 SG

## Tech Stack
- AWS VPC, EC2
- Apache + PHP
- MySQL
- Ubuntu 24.04

## Setup Instructions
1. Deploy EC2 instances in public/private subnets.
2. Configure security groups:
   - Public EC2: HTTP/HTTPS
   - Private EC2: MySQL 3306 only from public EC2
3. Upload frontend files to `/var/www/html/` on public EC2.
4. Restore database on private EC2 using `db.sql`.
5. Update `config.php` with private DB IP and credentials.
6. Restart Apache: `sudo systemctl restart apache2`.
