@extends('layout')

@section('content')
<table>
    <tr>
        <th>ID</th>
        <th>TITLE</th>
        <th>OPTIONS</th>
    </tr>
    @foreach($pages as $page)
    <tr>
        <td>{{ $page->id}}</td>
        <td>{{ $page->title}}</td>
        <td><a href="#" class="btn btn-danger">Edit</a> <a href="#" class="btn btn-info">Delete</a></td>
    </tr>
    @endforeach
</table>
{{ $pages->links() }}
@endsection