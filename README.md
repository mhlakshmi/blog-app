<h1>Blog-APP</h1>

<h2>Prerequisites</h2>
Wamp64 , Composer

<h2>Installation</h2>
<h3>Clone the repository:</h3>

git clone https://github.com/mhlakshmi/blog-app.git

<h3>Navigate to the project folder:</h3>

cd blog-app


<h3>Install Composer dependencies:</h3>
composer install


<h3>Generate the application key:</h3>

php artisan key:generate


<h3>Configure your database in the .env file:</h3>

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password
Update the values according to your database setup.

<h3>Run the database migrations:</h3>

php artisan migrate

<h3>Run the application :<h3>

php artisan serve

--------------------------------------------------------------------------------

The application will be accessible at http://localhost:8000

--------------------------------------------------------------------------------
http://localhost:8000

<h3>Index page</h3>
<img src="/asset/images/blog.png" width="50%" height="50%">

--------------------------------------------------------------------------------
http://localhost:8000/admin
<h3>Login page</h3>
<img src="/asset/images/login.png" width="50%" height="50%">

<h3>Registration page</h3>
<img src="/asset/images/register.png" width="50%" height="50%">

<h3>Blogs page</h3>
<img src="/asset/images/crud.png" width="50%" height="50%">