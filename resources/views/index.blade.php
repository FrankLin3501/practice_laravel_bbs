@extends('layout')

@section('title', 'Home')

@section('content')
    <div class="container">
        <div class="header"></div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Poster</th>
                    <th scope="col">Post date</th>
                    <th scope="col">Latest update</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($posts as $post)            
            <tr>
                <th scope="row">{{ $post->id }}</th>
                <td><a href="post/{{$post->id}}">{{ $post->title }}</a></td>
                <td>{{ $post->username }}</td>
                <td>{{ $post->created_at }}</td>
                <td>{{ $post->updated_at }}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection