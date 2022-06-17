<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $animal->id ? 'Edit': 'Create' }} an animal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    {{-- @include('common/messages') --}}

    <h1>{{ $animal->id ? 'Edit': 'Create' }} an animal</h1>

    @if ($animal->id)
        {{-- <form action="/animals/{{ $animal->id }}" method="post"> --}}
        <form action="{{ route('animals.update', ['animalId' => $animal->id]) }}" method="post">
            @method('put')
    @else
        <form action="{{ route('animals.store') }}" method="post">
    @endif
        @csrf

            <label>Name:</label>
            <input
                type="text"
                name="name"
                value="{{ old('name', $animal->name) }}"
            >

            <label>Species:</label>
            <input
                type="text"
                name="species"
                value="{{ old('species', $animal->species) }}"
            >
            <label>Breed:</label>
            <input
                type="text"
                name="breed"
                value="{{ old('breed', $animal->breed) }}"
            >
            <label>Age:</label>
            <input
                type="text"
                name="age"
                value="{{ old('age', $animal->age) }}"
            >
            <label>Age:</label>
            <input
                type="text"
                name="weight"
                value="{{ old('weight', $animal->weight) }}"
            >

        <button>Send</button>

    </form>
    <br>
     <a href="http://www.hackathon3.test/index"><button>Back to main</button></a>
</body>
</html>