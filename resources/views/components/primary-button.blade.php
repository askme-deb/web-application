<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-primary w-100 mb-3']) }}>
    {{ $slot }}
</button>
