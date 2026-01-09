<!-- resources/views/articles/index.blade.php -->

<h1>Articles List</h1>

@dd($articles)  {{-- Debug in Blade view --}}

@foreach($articles as $a)
    <p>{{ $a->title }}</p>
    
@endforeach