<div>
    <a class="mx-2 py-2 px-1 {{ $isActive() ? 'overline text-green-500' : '' }}" {{ $attributes }}>
        {{ $slot }}
    </a>
</div>
