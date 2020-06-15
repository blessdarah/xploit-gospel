 <div class="custom-file mb-3">
    <input id="image" class="custom-file-input" type="file" name="image">
    <label for="image" class="custom-file-label">Banner image</label>
    @error('image')
        <span class="invalid-feedback" role="alert">
            <strong>You need to provide a banner image</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="title">Banner title</label>
    <input id="title" class="form-control" type="text" name="title" value="{{ $banner->title ?? old('title') ?? '' }}">
    @error('title')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="short_text">Short text <span class="text-muted">(optional)</span></label>
    <input id="short_text" class="form-control" type="text" name="short_text" value="{{ $banner->short_text ?? old('short_text') ?? '' }}">
</div>

<div class="form-group">
    <label for="button">Action button text <span class="text-muted">(optional)</span></label>
    <input id="button" class="form-control" type="text" name="button" value="{{ $banner->button ?? old('button') ?? '' }}">
</div>