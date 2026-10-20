@props(['name', 'alt', 'sizes' => '(max-width: 767px) 100vw, 60vw', 'eager' => false])
<img src="{{ asset('images/'.$name.'-1274.webp') }}" srcset="{{ asset('images/'.$name.'-640.webp') }} 640w, {{ asset('images/'.$name.'-1274.webp') }} 1274w" sizes="{{ $sizes }}" width="1274" height="315" alt="{{ $alt }}" loading="{{ $eager ? 'eager' : 'lazy' }}" decoding="async" {{ $attributes }}>
