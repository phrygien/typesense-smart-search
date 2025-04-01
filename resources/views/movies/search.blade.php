<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Movie</title>
</head>
<body>
    <h1>Movie Search</h1>

    <form method="GET" action="search" class="w-full bg-white shadow-md rounded-2xl px-8 pt-6 pb-8 mb-4">
        <div class="flex">
            <input type="text" name="q" placeholder="Search..." class="flex-1 px-4 py-2 border rounded-lg focus:outline-none focus:border-indigo-500" value="{{ request('q', '') }}" />
        </div>

        <button type="submit" class="bg-indigo-500 hover:bg-indigo-600 text-white px-4 py-2 rounded-lg">Search</button>
    </form>
    <ul>
        @foreach ($results as $result)
            <li>{!! $result['highlight'] !!}</li>
        @endforeach
    </ul>
</body>
</html>