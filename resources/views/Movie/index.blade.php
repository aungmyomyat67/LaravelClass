<!DOCTYPE html>
<html>
<head>
    <title>Movies List</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        th { background-color: #f0f0f0; }
    </style>
</head>
<body>


<h1>Available Movies</h1>

<table>
    <tr>
        <th>Title</th>
        <th>Director</th>
        <th>Years</th>
    </tr>
    @foreach ($movies as $movie)
    <tr>
        <td>{{ $movie['title'] }}</td>
        <td>{{ $movie['director'] }}</td>
        <td>{{ $movie['years'] }}</td>
    </tr>
    @endforeach
</table>

</body>
</html>