<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blade Directives</title>
</head>

<body>
    <!-- Navigation Bar Comment will be shown here -->
    {{-- Navigation Bar Comment won't be shown here --}}
    {{-- Navigation Bar will included once --}}
    @include('partials.nav-test-directives')
    <h3>Blade Directives Examples</h3>
    @include('partials.nav-test-directives')
    @include('partials.nav-test-directives')
    @include('partials.nav-test-directives')
    @include('partials.nav-test-directives')

    <p>Number of children {{ $children }} +1 </p>
    @php

        $nbrefuturechildren = $children + 1;
        echo 'Number of my children in future: is ' . $nbrefuturechildren;
    @endphp

    @php
        $i = 1;

    @endphp

    <h4>My Skills:</h4>
    @foreach ($skills as $skill)
        <ul>
            <li>Nr:{{ $i++ }} {{ $skill }}</li>

        </ul>
    @endforeach

    @if (count($books) == 0)
        <p>No Books listed.</p>
    @else
        <p>count of books ({{ count($books) }})</p>
    @endif


    @unless (count($books) == 0)
        <p>count of books ({{ count($books) }})</p>
    @endunless

    @switch($color)
        @case('red')
            <p>It is your favourite color</p>
        @break

        @default
            <p>It is not your favourite color</p>
    @endswitch

    @empty($age)
        <p>Age is empty</p>
    @endempty

    @isset($socialstatus)
        <p>Social status is set</p>
    @endisset


</body>

</html>
