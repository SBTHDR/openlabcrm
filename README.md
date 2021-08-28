# Openlabcrm

## About Repository

Openlabcrm is a micro module task management system based on Laravel 8. 
Backend system provide a complete management of Task CRUD, 
with full role and permission based authentication and authorization.

## Tech Specification

- Laravel 8
- jQuery 3
- Bootstrap 4
- Font Awesome 5
- sweetalert

## Features

- Role based Authentication
- Role Authorization
- Show, update, edit, and delete user as admin

## Installation

- `git clone https://github.com/SBTHDR/openlabcrm.git`
- `cd openlabcrm/`
- `cp .env.example .env`
- `composer install`
- Run `php artisan key:generate`
- Update `.env` and set your database credentials
- `php artisan migrate --seed`
- `npm install`
- `npm run dev`
- `php artisan serve`

## License

[MIT license](https://opensource.org/licenses/MIT).
