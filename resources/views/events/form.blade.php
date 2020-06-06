<div class="form-group">
    <label for="name">Event name</label>
    <input id="name" class="form-control" type="text" name="name" value="{{ old('name') ?? '' }}">
</div>

{{-- image preview --}}
@if (isset($event))
    <img class="img-thumbnail" src="{{ asset('images/') . $event->flyer }}" alt="Event flyer image">
@endif

<div class="custom-file">
    <input id="flyer" class="custom-file-input" type="file" name="flyer" value="{{ old('flyer') ?? '' }}">
    <label for="flyer" class="custom-file-label">Upload event flyer</label>
</div>

<div class="form-group">
    <label for="description">Event description</label>
    <textarea id="description" class="form-control" name="description" rows="3">{{ old('description') ?? '' }}</textarea>
</div>