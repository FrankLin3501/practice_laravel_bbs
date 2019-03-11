@extends('layout')

@section('title', 'Home')

@section('content')
    <div>
        <table>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Poster</th>
                <th>Post date</th>
                <th>Latest update</th>
            </tr>
            @foreach ($posts as $post)            
            <tr>
                <td>{{ $post->id }}</td>
                <td><a href="post/{{$post->id}}">{{ $post->title }}</a></td>
                <td>{{ $post->username }}</td>
                <td>{{ $post->created_at }}</td>
                <td>{{ $post->updated_at }}</td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection