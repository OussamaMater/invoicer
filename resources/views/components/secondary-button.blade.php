@props(['href' => null])

@php
	$classes = 'py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-blue-600 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:text-blue-500';
@endphp

@if ($href)
	<a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
		{{ $slot }}
	</a>
@else
	<button {{ $attributes->merge(['type' => 'submit', 'class' => $classes]) }}>
		{{ $slot }}
	</button>
@endif