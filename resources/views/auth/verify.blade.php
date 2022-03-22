@extends('layouts.app1')

@section('content')
<div class="container w3-animate-zoom">
    <div class="row justify-content-center">
        <div class="col-md-8 mb-5 mt-5">
            <div class="card">
                <div class="card-header">{{ __(' Iltimos elektron pochta manzilingizni tasdiqlang') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            'Tasdiqlash havolasi ushbu {{ Auth::user()->email }} elekron pochta manziliga  yuborildi.'
                        </div>
                    @endif

                    {{ __('Iltimos elektron pochta maziligizni tekshiring.') }} Tasdiqlash havolasi ushbu <a class="text-success" href="">{{ Auth::user()->email }}</a>  elekron pochta manziliga  yuborildi.
                    {{ __("Agar havola yuborilmagan bo'lsa") }}, <a href="{{ route('verification.resend') }}" class="text-success">{{ __(' qayta olish uchun bu yerni bosing') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('register')
@endsection