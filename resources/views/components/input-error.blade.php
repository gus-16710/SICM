@props(['messages'])

@if ($messages)
    <div {{ $attributes->merge(['class' => 'text-danger space-y-1']) }}>
        @foreach ((array) $messages as $message)
            <span class="d-block invalid-feedback">{{ $message }}</span>
        @endforeach
    </div>
@endif
