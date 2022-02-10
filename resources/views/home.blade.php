{{-- Extend app.blade.php --}}
@extends('layouts.app')

{{-- Page Title --}}
@section('page_title')
    Homepage
@endsection

{{-- Main --}}
@section('main_content')
    {{-- Movies --}}
    <section class="movies">
        {{-- Container --}}
        <div class="container">
            @include('components.movies-list')
        </div>
    </section>

    @include('partials.pre_footer')
@endsection

