@if (session()->has('error'))
    <x-laravel-alert::banner style="danger" :message="session('error')" />
@elseif (session()->has('flash.banner'))
    <x-laravel-alert::banner :style="session('flash.bannerStyle', 'success')" :message="session('flash.banner')" />
@elseif (count($errors) > 0)
    @foreach ($errors->all() as $error)
        <x-laravel-alert::banner style="danger" :message="$error" />
    @endforeach
@endif