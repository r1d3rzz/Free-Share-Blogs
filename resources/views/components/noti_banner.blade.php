@props(['name','color'=>'primary'])

@if (session($name))
<div class="container bg-{{$color}} shadow-sm mb-3 rounded text-center text-light p-3">
    <strong>{{ucwords(session($name))}}</strong>
</div>
@endif
