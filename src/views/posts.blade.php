@extends('admin.layouts.app')
@section('content')
   
    <div class="container">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>title</th>
                    <th>text</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>
                        {{ $post->text }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection