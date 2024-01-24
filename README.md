Blog-APP

Prerequisites
Wamp64 , Composer

<h2>Installation</h2>
Clone the repository:

git clone https://github.com/mhlakshmi/blog-app.git

Navigate to the project folder:

cd blog-app


Install Composer dependencies:
composer install


Copy the .env.example file to a new .env file:

cp .env.example .env


Generate the application key:

php artisan key:generate


Configure your database in the .env file:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password
Update the values according to your database setup.

Run the database migrations:

php artisan migrate

Run the application :

php artisan serve