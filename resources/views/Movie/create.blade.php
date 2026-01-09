<h1>Create Movie</h1>

<form action="/movies" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Title">
    <input type="text" name="director" placeholder="Director">
    <input type="number" name="years" placeholder="Years">
    <button type="submit">Save</button>
</form>

<a href="/movies">Back to List</a>