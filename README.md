# Bloggy

Created to demonstrate [Laravel Livewire](https://laravel-livewire.com/) for IT 360T Summer 2022.

## Running

Ensure requirements have been satisfied for installing and running a [Laravel](https://laravel.com) application.

- `composer install`
- `cp .env.example .env`
- `touch database/database.sqlite`
- `php artisan key:generate`
- `php artisan migrate:fresh --seed`
- `php artisan serve`
- Visit [Local Bloggy Login](http://127.0.0.1:8000/login) and enter `test@example.com` with `password` to login.
- Click the `👍` or `👎` to see Livewire in action.

## Notable files

- `app\Http\Livewire\Posts\Like.php`
- `resources\views\livewire\posts\like.blade.php`
- `resources\views\livewire\posts\unlike.blade.php`
- `resources\views\dashboard.blade.php`
