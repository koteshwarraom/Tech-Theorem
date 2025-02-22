# Tech-Theorem
Step-by-Step Deployment Guide
🔧 Prerequisites
Before starting, ensure you have these installed:
- Code editor (e.g., VS Code)
- Git
- Node.js & npm (for JavaScript projects)
- PHP & MySQL (for PHP projects)
- Composer (for PHP dependencies)
- Docker (if using containerization)
1. Clone the Repository
Open your terminal and run:
git clone <repository-url>
cd <project-folder>
2. Install Dependencies
For Node.js (JavaScript-based):
npm install
For PHP (Laravel/WordPress-based):
composer install
3. Configure Environment Variables
Duplicate the example environment file and update it:
cp .env.example .env
Then, update database credentials, API keys, and other configuration values inside the `.env` file.
4. Set Up the Database
For MySQL:
•	- Create a database manually (e.g., via phpMyAdmin or CLI).
- Import the SQL file if provided:
mysql -u root -p database_name < database_dump.sql
For Laravel migrations:
php artisan migrate --seed
5. Start the Development Server
For Node.js:
npm run dev
For Laravel:
php artisan serve
For WordPress:
•	- Set up a local server (XAMPP, MAMP, or Docker).
- Place the project folder inside `htdocs` (or equivalent).
- Access via `http://localhost/project-folder`
6. Verify Everything Works
•	- Visit `http://localhost:3000` (or the designated port) for JavaScript projects.
- Visit `http://localhost:8000` for Laravel projects.
- Visit `http://localhost/project-folder` for WordPress.
7. Troubleshooting
•	- Check terminal logs for errors.
- Verify `.env` configuration.
- Ensure required services (MySQL, Apache, etc.) are running.
