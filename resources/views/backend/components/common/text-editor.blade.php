@props([
    'label' => '',
    'name' => '',
    'value' => '',
    'column' => '12',
    'required' => false,
    'id' => ''
])
<div class="col-md-{{$column}} mb-4">
    @if($label)
        <label for="{{ $name }}" class="form-label"><strong>{{$label}}</strong> <span class='text-danger'>{{$required ? "*" : ''}} </span></label>
    @endif
    <textarea rows="10" name="{{ $name }}" id="{{ $id }}">{!! $value !!}</textarea>
</div>

@push('scripts')
    <script>
        textEditor($('#{{ $id }}'), 250);
    </script>
@endpush
