@extends('layout.app')
@section('title', 'Tool List')
@section('content')
    <h1>Tool List</h1>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>category</th>
                <th>language</th>
                <th>description</th>
                <th>documentation URL</th>
                <th>Image Name</th>
                <th>date created</th>
                <th>date updated</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tools as $item)
                <tr>
                    <td>{{ $item->getId() }}</td>
                    <td>{{ $item->getName() }}</td>
                    <td>{{ $item->getCategory() }}</td>
                    <td>{{ $item->getLanguage() }}</td>
                    <td>{{ $item->getDescription() }}</td>
                    <td>
                        <a href={{ $item->getDocumentationURL() }}>open</a>
                    </td>
                    <td>{{ $item->getImage() }}</td>
                    <td>{{ $item->created() }}</td>
                    <td>{{ $item->updated() }}</td>
                    <td><a href="#">Edit</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
