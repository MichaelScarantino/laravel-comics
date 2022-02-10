{{-- Extend app.blade.php --}}
@extends('layouts.app')

{{-- Page Title --}}
@section('page_title')
    Movie Details
@endsection

{{-- Main --}}
@section('main_content')
    {{-- Movie details --}}
    <section class="movie-details">
        {{-- Container details --}}
        <div class="container-details">
            {{-- Movie view gallery --}}
            <div class="movie-view-gallery">
                <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX" alt="">
            </div>
            {{-- Movie details content --}}
            <div class="movie-details-content">
                {{-- Movie main info --}}
                <div class="movie-main-info">
                    {{-- Movie title --}}
                    <div class="movie-title">
                        <h2>[titolo]</h2>
                    </div>
                    {{-- Movie price --}}
                    <div class="movie-price">
                        {{-- Movie price and available --}}
                        <div class="movie-price-available">
                            {{-- price --}}
                            <div class="price">
                                <span class="lightgreen">U.S. Price:</span> [Prezzo]
                            </div>
                            {{-- Available --}}
                            <div class="available lightgreen">
                                available
                            </div>
                            {{-- Check availablility --}}
                            <div class="check-availablility">
                                Check Availablility
                            </div>
                        </div>
                    </div>
                    {{-- Movie description --}}
                    <div class="movie-description">
                        [descrizione]
                    </div>
                </div>
                {{-- Movie advertisement --}}
                <div class="movie-advertisement">
                    <span>advertisement</span>
                    <img src="{{ asset('images/adv.jpg') }}" alt="Advertisement image">
                </div>
            </div>
        </div>
    </section>

    {{-- Movie detailed information --}}
    <section class="movie-detailed-information">
        {{-- Container details --}}
        <div class="container-details">
            {{-- Movie information content --}}
            <div class="movie-information-content">
                {{-- Movie talent --}}
                <div class="movie-talent">
                    <h3>Talent</h3>
                    {{-- Talent info --}}
                    <div class="talent-info">
                        {{-- Art by --}}
                        <div class="art-by">
                            <div>Art by:</div> <span>[artists]</span>
                        </div>
                        {{-- Written by --}}
                        <div class="written-by">
                            <div>Written by:</div> <span>[writers]</span>
                        </div>
                    </div>
                </div>
                {{-- Movie specs --}}
                <div class="movie-specs">
                    <h3>Specs</h3>
                    {{-- Specs info --}}
                    <div class="specs-info">
                        {{-- Specs series --}}
                        <div class="specs-series">
                            <div>Series:</div> <span>[series]</span>
                        </div>
                        {{-- Specs price --}}
                        <div class="specs-price">
                            <div>U.S. Price:</div> <span>[writers]</span>
                        </div>
                        {{-- Specs sale date --}}
                        <div class="specs-sale-date">
                            <div>On sale date:</div> <span>[sale_date]</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
