{{-- Movie List --}}
<div class="movies-list">
    @foreach ($movie_array as $movie)
            {{-- Single movie --}}
            <div class="movie">
                <div>
                    <img src="{{ $movie['thumb'] }}" alt="{{ $movie['title'] }}">
                    <h5>{{ $movie['series'] }}</h5>
                </div>
            </div>
        @endforeach
</div>