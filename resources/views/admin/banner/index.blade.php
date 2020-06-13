@extends('layouts.dashboard')

@section('content')
    <header class="mb-3 text-right">
        <a href="{{ route('banner.create') }}" class="btn btn-sm btn-success">+ add banner</a>
    </header>
    <table class="table table-bordered table-condensed rounded">
        <thead class="thead-light">
            <tr>
                <th>Image</th>
                <th>Title</th>
                <th>short text</th>
                <th>action</th>
                <th>option</th>
            </tr>
        </thead>
        <tbody>
            <tr class="small">
                <td>1</td>
                <td>Banner title</td>
                <td>Optional short text</td>
                <td>optional call to action</td>
                <td>
                    <a href="#" class="badge badge-info">edit</a>
                    <a href="#" class="badge badge-danger">delete</a>
                </td>
            </tr>
        </tbody>
    </table>
@endsection 