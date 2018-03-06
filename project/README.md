# WHAT TO DO?

## Eerste keer (eenmalig)

1. In terminal: `composer install`
2. In terminal: `php artisan key:generate`
3. In terminal: `npm install` als dat niet werkt: `npm install --only=dev`

## Tijdens developen

1. In terminal: `php artisan serve`
  - Dit runt een lokale server op `127.0.0.1:8000`
2. In terminal: `npm run watch`
  - Dit gaat uw scss & js files constant updaten

# HANDIGE INFO

## Templates
- Taal: `Blade`
- Locatie: `resources/views`

Alle templates _extenden_ van `layouts/master.blade.php`.
[Meer info over Blade](https://laravel.com/docs/5.6/blade)

## Styling
- Taal: `sass`
- Locatie: `resources/assets/sass`

In `app.scss` zet ge uw stijltjes.
In `_variables.scss` zet ge variabelen.

Sass is basically geavanceerde, betere css. [Meer info over SASS](https://sass-lang.com/guide).

## Atom
  - [Terminal package](https://atom.io/packages/platformio-ide-terminal)
