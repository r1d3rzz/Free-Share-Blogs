@props(['name','value'=>''])

<div class="mb-3">
    <label for="{{$name}}" class="form-label">{{ucfirst($name)}}</label>
    <textarea name="{{$name}}"
        {{$attributes->merge(['class'=>'form-control'])}} id="{{$name}}" rows="5" placeholder="Write Here">{!!old($name,$value)!!}</textarea>
    <x-error name="{{$name}}" />
</div>
