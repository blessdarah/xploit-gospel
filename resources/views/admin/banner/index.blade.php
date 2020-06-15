@extends('layouts.dashboard')

@section('content')
    <header class="mb-3 text-right">
        <a href="{{ route('banner.create') }}" class="btn btn-sm btn-success">+ add banner</a>
    </header> 
    @if ($banners->count() > 0 )
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
            @foreach ($banners as $banner)
                <tr class="small">
                    <td>1</td>
                    <td>{{ $banner->title }}</td>
                    <td>{{ $banner->short_text }}</td>
                    <td>{{ $banner->button ?? 'learn more' }}</td>
                    <td>
                        <a href="{{ route('banner.show', $banner->id) }}" class="badge badge-info">edit</a>

                        {{-- delete form --}}
                        <form  method="post" action="{{ route('banner.destroy', $banner->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="badge badge-danger">delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach  
        </tbody>
    </table>
    @else
        <div class="alert alert-warning alert-dismissible" role="alert">
            No banner has been created
        </div>
    @endif
@endsection 