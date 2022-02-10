{{-- Extend app.blade.php --}}
@extends('layouts.app')

{{-- Page Title --}}
@section('page_title')
    Homepage
@endsection

@section('main_classes')
    secondary-color-background
@endsection

{{-- Main --}}
@section('main_content')
    {{-- Movies --}}
    <section class="movies">
        {{-- Container --}}
        <div class="container">
            {{-- Current series --}}
            <div class="current-series">
                <h3>CURRENT SERIES</h3>
            </div>

            {{-- Include movies list --}}
            @include('components.movies-list')

            {{-- Load more --}}
            <div class="load-more">
                <a href="#">LOAD MORE</a>
            </div>
        </div>
    </section>

    @include('partials.pre_footer')
@endsection
