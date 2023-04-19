# Usage
Include alert component in *resources/views/components/banner*:
```html
<x-laravel-alert::alert />
```

Add alert component to app:
```html
<body class="font-sans antialiased">
    @include('laravel-subscription::subscription.info', ['title' => __('laravel-social-auth::social-auth.Sign in with :social', ['social' => 'Google'])])
    <div class="min-h-screen bg-gray-100">
        @livewire('navigation-menu')
        <x-banner />
        …
```

Display message in alert:
```php
session(['flash.banner' => 'The data has been saved successfully.']);
```

Set danger style to the banner:
```php
session(['flash.bannerStyle' => 'danger']);
// or
session(['flash.bannerStyle' => 'success']);
```

# Publishing
### Localization
```php
php artisan vendor:publish --tag="laravel-alert-lang"
```

### Views
```php
php artisan vendor:publish --tag="laravel-alert-views"
```