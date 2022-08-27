@props(['name'])

<div class="mb-3">
    <label for="{{$name}}" class="form-label">{{ucfirst($name)}}</label>
    <textarea name="{{$name}}" class="form-control" id="{{$name}}" rows="5" placeholder="Write Here"></textarea>
    <x-error name="{{$name}}" />
</div>
