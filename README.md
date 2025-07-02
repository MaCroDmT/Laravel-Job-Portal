## Laravel-Job-Portal
[![Laravel](https://img.shields.io/badge/Laravel-9.x-orange)](https://laravel.com/)
[![License](https://img.shields.io/badge/License-MIT-green)](LICENSE)


## A simple Laravel-based Job Portal with admin panel for adding, editing, deleting jobs, and a public view with search and filters. Designed by Prottoy Saha (AIUB) with clean structure, reusable layouts, and external CSS. Easy to maintain and extend.

# Job Portal

A simple Laravel job portal for posting, editing, deleting & viewing jobs.  
Includes admin panel, public job listings, search/filter, and authentication.

---

## 👨‍💻 Developed By
**Prottoy Saha**  
- AIUB  
- 📧 prottoys28@gmail.com  
- 📞 +8801745547578  
-  [![LinkedIn](https://img.shields.io/badge/LinkedIn-0A66C2?logo=linkedin&logoColor=white)](https://www.linkedin.com/in/prottoy-saha-736097357/)  
- [![Portfolio](https://img.shields.io/badge/Portfolio-Google%20Sites-4285F4?logo=google&logoColor=white)](https://sites.google.com/view/prottoy21) 
- [![ResearchGate](https://img.shields.io/badge/ResearchGate-00CCBB?logo=ResearchGate&logoColor=white)](https://www.researchgate.net/profile/Prottoy-Saha-3?ev=hdr_xprf)  
- [![GitHub](https://img.shields.io/badge/GitHub-000000?logo=github&logoColor=white)](https://github.com/MaCroDmT)


---

## ⚙️ Features

- Admin can:
  - Add new jobs
  - Edit jobs
  - Delete jobs
  - View all jobs in dashboard
  - Secure login/logout
- Public can:
  - Browse all published jobs
  - View job details
  - Search jobs by title or location
---
## Tech Stack

- Laravel 9
- PHP 8.x
- Blade templating
- MySQL (or other supported DB)
---

## 📂 Project Structure

```text
job-portal/
├── app/
│   └── Http/
│       └── Controllers/
│           ├── JobController.php
│           ├── PublicJobController.php
│           └── Auth/
│               └── LoginController.php
|        └── Middleware/
|             ├──Authenticate.php
|             ├──EncryptCookies.php
|             ├──PreventRequestsDuringMaintenance.php
|             ├──RedirectIfAuthenticated.php
|             ├──TrimStrings.php
|             ├──TrustHosts.php
|             ├──TrustProxies.php
|             ├──VerifyCsrfToken.php
│   └── Models/
│       └── Job.php
|       └── User.php
│
├── resources/
│   ├── views/
│   │   ├── admin/
│   │   │   ├── jobs/
│   │   │   │   ├── index.blade.php
│   │   │   │   ├── create.blade.php
│   │   │   │   ├── edit.blade.php
│   │   │   ├── dashboard.blade.php
│   │   │
│   │   ├── public/
│   │   │   └── jobs/
│   │   │       ├── index.blade.php
│   │   │       ├── show.blade.php
│   │   │
│   │   ├── auth/
│   │   │   └── login.blade.php
│   │   │
│   │   ├── layouts/
│   │   │   └── app.blade.php
│
├── public/
│   ├── css/
│   │   └── style.css
|   |   └──admin-jobs.css
│   ├── index.php
│
├── routes/
│   └── web.php
│
├── database/
│   ├── migrations/
│       └── xxxx_xx_xx_create_jobs_table.php
│
├── .env.example
├── .gitignore
├── README.md
├── composer.json
└── artisan


---

## 🚀 How to Run Locally

```bash
git clone https://github.com/MaCroDmT/job-portal.git
cd job-portal
composer install
cp .env.example .env
php artisan key:generate
# Setup your DB credentials in .env
php artisan migrate
php artisan serve

Visit http://127.0.0.1:8000 in your browser.

---

## ✅ 2️⃣ Add '.gitignore'

Make sure your `.gitignore` includes:
/vendor
/node_modules
/.env


---

## ✅ 3️⃣ Commit & Push

Open terminal:

```bash
git init
git add .
git commit -m "Initial commit: Job Portal by Prottoy Saha"
git branch -M main
git remote add origin https://github.com/MaCroDmT/job-portal.git
git push -u origin main

📜 License
This project is open-source and available under the MIT License.

