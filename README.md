# Verve Creative Studio

**Production-oriented creative services platform built with PHP, MySQL, JavaScript and CSS.**

🌐 **Live Website:** https://vervecreativestudio.co.uk/

---

## Overview

Verve Creative Studio is a web platform developed for a creative services
business.

The platform provides the foundation for presenting creative services,
portfolio work, exhibitions, galleries, installations, journal content,
training and consultation services, and commerce-related functionality.

The application is built using plain PHP, MySQL, JavaScript and CSS without
a web application framework.

Development is carried out locally using XAMPP, with the production
application deployed on IONOS Web Hosting Plus.

---

## 🌐 Live Website

**https://vervecreativestudio.co.uk/**

The live website represents the deployed production environment.

---

## 🛠️ Technology Stack

| Area | Technology |
|---|---|
| Backend | PHP |
| Database | MySQL |
| Frontend | HTML, CSS, JavaScript |
| Payment Processing | Stripe |
| Email | IONOS SMTP |
| Image Processing | PHP GD |
| Local Development | XAMPP |
| Production Hosting | IONOS Web Hosting Plus |
| Deployment | FTP |
| Source Control | Git / GitHub |

---

## 🏗️ High-Level Architecture

The application follows a conventional server-rendered PHP architecture.

```text
                         User
                           │
                           ▼
                    Web Application
                           │
                           ▼
                     PHP Application
                           │
                  ┌────────┴────────┐
                  │                 │
                  ▼                 ▼
               MySQL        External Services
                                │
                         ┌──────┴──────┐
                         │             │
                         ▼             ▼
                       Stripe        SMTP
