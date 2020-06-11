<div class="form-group">
    <label for="title">Album title</label>
<input id="title" class="form-control" type="text" name="title" value="{{ $album->title ?? old('title') ?? '' }}">
</div>
<div class="form-group">
    <label for="released_on">Release date</label>
    <input id="released_on" class="form-control" type="date" name="released_on" value="{{ $album->released_on ?? old('released_on') ?? '' }}">
</div>

@if (isset($album->cover)) 
    <div class="card">
        <img class="card-img-top" src="#" alt="album cover image">
    </div>
@endif

<div class="form-group">
    <label for="cover">Album cover photo</label>
    <input id="cover" class="form-control-file" type="file" name="cover">
</div>