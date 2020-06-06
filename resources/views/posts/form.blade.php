<div class="form-group">
    <label for="title">Post title</label>
    <input id="title" class="form-control" type="text" name="title" value="{{ $post->title ?? old('title') ?? '' }}">
</div>

{{-- image preview --}}
@if (isset($post))
    <img class="img-thumbnail" src="{{ asset('posts/') . $post->image }}" alt="Post image">
@endif

<div class="custom-file">
    <input id="image" class="custom-file-input" type="file" name="image" value="{{ old('image') ?? '' }}">
    <label for="image" class="custom-file-label">Upload post cover image</label>
</div>

<div class="form-group">
    <label for="body">Post content</label>
    <textarea id="body" class="form-control" name="body" rows="3">{{ $post->body ?? old('body') ?? '' }}</textarea>
</div>