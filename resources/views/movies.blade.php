@extends('layout.main')

@section('content')

<div class="container my-5">
    <h1> Movies </h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col"> ID </th>
                <th scope="col"> Title </th>
                <th scope="col"> Original Title </th>
                <th scope="col"> Nationality </th>
                <th scope="col"> Date </th>
                <th scope="col"> Rating </th>
        </thead>

        <tbody>
            @foreach ($movies as $movie)
            <tr>
                <td> {{ $movie->id}} </td>
                <td> {{ $movie->title}} </td>
                <td> {{ $movie->original_title}} </td>
                <td> {{ $movie->nationality}} </td>
                <td> {{ $movie->date}} </td>
                <td> {{ $movie->vote}} </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
