# Student Event Portal - Laravel

This is a simple Laravel project for the LARAVEL 001 - Student Event Portal assignment.

## Requirements
- PHP 8.2 or newer
- Composer

## Run the project

After extracting the project, open the project folder in Terminal and run:

```bash
composer install
php artisan serve
```

Then open the address shown by Artisan, normally `http://127.0.0.1:8000`.

## Assignment features
- Home page with a welcome message.
- Link from Home page to Events page.
- Three events stored in the Controller.
- Events passed from Controller to Blade View.
- `@foreach` used to display events.
- Reusable Blade Event Component used for each event.
