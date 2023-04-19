@if (Session::has('error'))
    <div class="bg-red-100 rounded-lg py-5 px-6 mb-8 text-base text-red-700" role="alert">
        <div class="block">{!! Session::get('error') !!}</div>
    </div>
@elseif ($message = session('success'))
    <div class="bg-green-100 rounded-lg py-5 px-6 mb-8 text-base text-green-700" role="alert">
        {!! __('laravel-alert::alert.' . $message) !!}
    </div>
@elseif (count($errors) > 0)
    <div class="bg-red-100 rounded-lg py-5 px-6 mb-8 text-base text-red-700" role="alert">
        @foreach ($errors->all() as $error)
            <div class="block">
                {!! __('laravel-alert::alert.' . $error) !!}
            </div>
        @endforeach
    </div>
@endif
