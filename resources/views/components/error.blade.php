@props(['name'])

<div>
    @error($name)
    <small class="text-danger">{{$message}}</small>
    @enderror
</div>
