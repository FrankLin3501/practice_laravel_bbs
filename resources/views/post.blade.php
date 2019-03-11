@extends('layout')

@section('title', 'Page')

@section('content')
    <div>
        <table>
            <tr>
                <th>Title</th>
                <td>{{ $post->title }}</td>
            </tr>
            <tr>
                <th>Created At</th>
                <td>{{ $post->created_at }}</td>
            </tr>
            <tr>
                <th>Poster</th>
                <td>{{ $user->name }}</td>
            </tr>
            <tr>
                <th>Contents</th>
                <td>{{ $post->contents }}</td>
            </tr>
            <tr>
                <th>Message</th>
                <td>
                    @foreach ($messages as $message)
                    <p><b>{{$message->username}}</b>{{ '::'.$message->comment }}</p> 
                    <hr>
                    @endforeach
                </td>
            </tr>
            
        </table>
    </div>
@endsection

