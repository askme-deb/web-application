{{-- @props(['status'])

@if ($status)
    <div class="alert alert-outline-success" role="alert">{{ $status }}</div>
@endif --}}
@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'font-medium text-sm text-green-600']) }}>
        {{ $status }}
    </div>
@endif
