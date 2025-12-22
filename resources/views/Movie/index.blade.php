<h1>Movies List</h1>

{{-- @dd($movies) --}} {{-- Commented out so page renders --}}

@foreach($movies as $movie)
    <p>{{ $movie->title }} - {{ $movie->director }} - {{ $movie->years }} pages</p>
    <a href="/movies/{{ $movie->id }}/edit">Edit</a>
    <form action="/movies/{{ $movie->id }}" method="POST" style="display:inline">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endforeach

<a href="/movies/create">Add New Movie</a>