{{-- Movies List --}}
<div class="movies-list">
    @foreach ($movie_array as $movie)
        {{-- Single movie --}}
        <div class="movie">
            <a href="{{ route('movie-details', ['id' => $movie['id']]) }}">
                <div>
                    <img src="{{ $movie['thumb'] }}" alt="{{ $movie['title'] }}">
                    <h5>{{ $movie['series'] }}</h5>
                </div>
            </a>
        </div>
    @endforeach
</div>