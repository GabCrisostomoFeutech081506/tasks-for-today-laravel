# Tasks for Today

A Laravel 12 application for the IT0049 TSA3 assessment. The Welcome page shows only today's tasks; the Task List shows all tasks by date; Profile shows one seeded user; About identifies the sample developer.

## Setup

Requirements: PHP 8.2 or newer, Composer, and SQLite support.

1. Run `composer install`.
2. Copy `.env.example` to `.env`.
3. Set `DB_CONNECTION=sqlite` in `.env`.
4. Create an empty `database/database.sqlite` file if it does not exist.
5. Run `php artisan key:generate`.
6. Run `php artisan migrate:fresh --seed`.
7. Run `php artisan serve --host=127.0.0.1 --port=8001`.
8. Open `http://127.0.0.1:8001`.

The seeder generates eight tasks on dates relative to the day it runs, including four for that day, and one sample user. Run `php artisan migrate:fresh --seed` again if you want the sample tasks aligned with a later date. Replace the sample profile before submitting as your own work.

Routes: `/`, `/tasks`, `/profile`, `/about`.

