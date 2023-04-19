# Usage
```html
<x-laravel-breadcrumbs::breadcrumbs
    title="{{ __('Go dashboard') }}"
    route="dashboard"
>
    {{ __('Edit') }}: <b>#{{ $link->hash }}</b>
</x-laravel-breadcrumbs::breadcrumbs>
```

# Publishing
### Views
```php
php artisan vendor:publish --tag="laravel-components-views"
```