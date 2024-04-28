<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-primary ms-2']) }}>
    {{ $slot }}<span class="fas fa-chevron-right ms-2"></span>
</button>

