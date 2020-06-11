{{-- conditional buttons to add --}}

<div class="mb-5">
    <a href="{{ route('posts.create') }}" class="btn btn-info btn-block">add post</a>
    <a href="{{ route('albums.create') }}" class="btn btn-warning btn-block">add album</a>
</div>

<ul class="list-group">
    <a href="#" class="list-group-item list-group-item-action active d-flex justify-content-between align-items-center">albums <span class="badge badge-circle badge-danger">3</span></a>
    <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">lyrics <span class="badge badge-circle badge-success">8</span></a>
    <a href="{{ route('dashboard.list-posts') }}" class="list-group-item list-group-item-action">Posts</a>
    <a href="{{ route('albums.list-albums') }}" class="list-group-item list-group-item-action">albums</a>
    <a href="{{ route('profile.show', Auth::user()->id)}}" class="list-group-item list-group-item-action">profile</a>
</ul>
