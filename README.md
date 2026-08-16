# Verve Creative Studio

**A production-oriented creative services platform built with PHP, MySQL,
JavaScript and CSS.**

🌐 **Live Website:** https://vervecreativestudio.co.uk/

---

## Overview

Verve Creative Studio is a web platform developed for a creative services
business.

The project provides the foundation for presenting creative services,
portfolio work, exhibitions, galleries, installations, journal content,
training and consultation services, and commerce-related functionality.

The application is built using plain PHP, MySQL, JavaScript and CSS without
a web application framework.

The project is developed locally using XAMPP and deployed to IONOS Web
Hosting Plus.

---

## 🌐 Live Website

**[Visit Verve Creative Studio](https://vervecreativestudio.co.uk/)**

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
| Web Server | IONOS Web Hosting Plus |
| Local Development | XAMPP |
| Database Administration | MySQL |
| Image Processing | PHP GD |
| Deployment | FTP / FileZilla |
| Scheduled Tasks | IONOS Cron |
| Source Control | Git / GitHub |

---

## 🏗️ Architecture

The application follows a conventional server-rendered PHP architecture.

```text
                         User
                           │
                           ▼
                    Verve Web Interface
                           │
                  ┌────────┴────────┐
                  │                 │
                  ▼                 ▼
              PHP Pages        JavaScript
                  │
                  ▼
             Shared Includes
                  │
       ┌──────────┼───────────┐
       │          │           │
       ▼          ▼           ▼
   Database     Stripe      SMTP
    MySQL       Payments     Email
       │
       ▼
   Application Data
