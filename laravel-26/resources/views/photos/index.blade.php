@extends('layout')

@section ('content')
<table>
    <tr>
        <th>ID</th>
        <th>MR</th>
        <th>URL</th>        
    </tr>
    @foreach ($photos as $photo)
    <tr>
        <td>{{ $photo->id}}</td>
        <td>{{ $photo->url}}</td>
        <td><a href="#" class="btn btn-danger">Edit</a> <a href="#" class="btn btn-info">Edit</a></td>        
    </tr>
    @endforeach
    <tr>
        <td colspan="3">{{ $photos->links() }}</td>
    </tr>
</table>

@endsection