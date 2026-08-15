# Verve Creative Studio

A custom full-stack web platform for a creative studio, built with **PHP, MySQL, JavaScript and CSS**.

Verve Creative Studio brings together the studio's public website, portfolio, exhibitions, artwork gallery, services, e-commerce workflows, booking processes, client management and administrative operations within a single web application.

---

## Project Overview

Verve Creative Studio was developed as a custom web application rather than using a pre-built framework or CMS.

The platform is designed around a modular PHP/MySQL architecture with dynamic content, user accounts, administrative functionality, payment processing, file uploads and transactional email.

The application is designed for deployment on standard web hosting without requiring a frontend build process.

---

## Key Features

### Public Website

- Home page
- About
- Contact
- Services
- Portfolio
- Exhibitions
- Artwork gallery
- Installations
- Journal

### E-commerce

- Product listings
- Product details
- Multi-item shopping cart
- Checkout workflow
- Single-item enquiry workflow
- Stripe payment integration

### Booking & Enquiries

- Service selection
- Online payment flow
- Multi-step booking workflow
- Creative project brief
- Training and consultation enrolment
- Confirmation workflow

### Client Dashboard

- Client account system
- Client-specific dashboard
- Account and session management
- Client-related workflows

### Administration

- Administrative dashboard
- Content and operational management
- Feature-specific administrative modules
- Authentication and access control

### Media & File Management

- Artwork and project images
- User-uploaded files
- Image processing using PHP GD
- Protected upload directories
- Prevention of PHP execution within upload directories

---

## My Contribution

**Lead Developer / Software Engineer**

I designed and developed the application's core structure and implemented the major application workflows.

My responsibilities include:

- PHP application development
- MySQL database design and integration
- Application architecture
- Dynamic page and content implementation
- Authentication and user management
- Client dashboard development
- Administrative functionality
- Booking and enquiry workflows
- E-commerce functionality
- Stripe payment integration
- Stripe webhook implementation
- File upload handling
- Transactional email integration
- Frontend integration using HTML, CSS and JavaScript
- Production deployment and server configuration

The project is developed as a custom application without relying on a PHP framework.

---

## Technology Stack

| Layer | Technology |
|---|---|
| Backend | PHP |
| Database | MySQL |
| Frontend | HTML, CSS, JavaScript |
| Payments | Stripe |
| Email | SMTP |
| Image Processing | PHP GD |
| Local Development | XAMPP |
| Production | Web hosting environment |
| Deployment | FTP |

---

## Application Architecture

The application follows a modular PHP structure:

```text
                        VER﻿VE CREATIVE STUDIO
                                  │
             ┌────────────────────┼────────────────────┐
             │                    │                    │
          Frontend           PHP Application         MySQL
       HTML / CSS / JS              │               Database
                                   │
                 ┌─────────────────┼─────────────────┐
                 │                 │                 │
            Public Site       Client Dashboard    Admin Area
                 │                 │                 │
                 └─────────────────┼─────────────────┘
                                   │
                         External Integrations
                         ┌─────────┼─────────┐
                         │         │         │
                       Stripe     SMTP    File Uploads
