# laraPortfolio_laravel-project
In this project, I will integrate the backend with my existing frontend site of "Modern Portfolio Website" using Laravel framework. Frontend portfolio website design from scratch using HTML CSS and vanilla JavaScript, which is fully responsive and backend dashboard will be designed with Bootstrap template.

## How to run Laravel project after downloading from github/gitlab:
1. Download or clone project (Clone)
```yaml
git clone "repo url"
```
2. Go to the folder application using cd
 ```yaml
cd folder_name
```
3. Run composer install on your cmd or terminal (To install all dependencies to run the project)
```yaml
composer install
```
4. Copy .env.example file to .env on root folder. You can type copy .env.example .env if using command prompt Windows or cp .env.example .env if using terminal Ubuntu
```yaml
copy .env.example .env
```
5. Open your .env file and change the database name (DB_DATABASE)
6. Run php artisan key:generate
```yaml
php artisan key:generate
```
7. Run php artisan migrate (Create all database tables)
```yaml
php artisan migrate
```
8. Run php artisan serve (Run the Laravel project)
```yaml
php artisan serve
```
