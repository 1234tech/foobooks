@extends('layouts.master')

@section('title')
    {{ $title }}
@endsection

@push('head')
    {{-- Page specific CSS includes should be defined here; this .css file does not exist yet, but we can create it --}}
    <link href='/css/books/show.css' rel='stylesheet'>
@endpush

@section('content')
    <h1>{{ $title }}</h1>

    <p>
        Details about this book will go here...
    </p>
@endsection




<!-- Old Code

<!doctype html>
<html lang='en'>
<head>
    <title>{{ $title }}</title>
    <meta charset='utf-8'>
    <link href='/css/foobooks.css' type='text/css' rel='stylesheet'>
</head>
<body>

<header>
    <a href='/'><img src='/images/foobooks-logo@2x.png' id='logo' alt='Foobooks Logo'></a>
</header>

<section>
    @if(isset($title))
        <h1>{{ $title }}</h1>

        <p>
            Details about this book will go here...
        </p>
    @else
        <p>
            Book not found
        </p>
    @endif
</section>


<footer>
    &copy; {{ date('Y') }}
</footer>

</body>
</html>




<section>
    <h1>{{ $title }}</h1>

    <p>
        Details about this book will go here...
    </p>
</section>




<!DOCTYPE html>
<html lang="en">
<head>

        <title>Show book: <?= $title ?></title>
        <meta charset="utf-8">

</head>
<body>

<p>You are viewing the book: <?= $title ?></p>


</body>
</html>

-->

