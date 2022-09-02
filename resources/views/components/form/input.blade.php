@props(['name','value'=>''])

<div class="mb-3">
    <label for="{{$name}}" class="form-label">{{ucfirst($name)}}</label>
    <input name="{{$name}}" type="text" value="{{old($name,$value)}}" class="form-control" id="{{$name}}">
    <x-error name="{{$name}}" />
</div>
