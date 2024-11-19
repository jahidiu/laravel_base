@props([
    'label' => '',
    'name' => '',
    'value' => '',
    'column' => '12',
    'required' => false,
    'extension' => 'image/png, image/jpeg',
])
<div class="col-md-{{$column}} mb-4">
    @if($label)
        <label class="form-label"><strong>{{$label}}</strong> <span class='text-danger'>{{$required ? "*" : ''}} </span></label>
    @endif
        <input name="{{ $name }}" id="formFile" {{$attributes->class(['form-control'])->merge(['type' => 'file'])}} accept="{{$extension}}" value="{{$value}}">
    @error($name)
        <div class="valid-feedback">{{$message}}</div>
    @enderror
</div>
