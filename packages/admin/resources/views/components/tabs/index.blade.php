<nav {{ $attributes->class([
    'flex overflow-x-auto items-center p-1 space-x-1 text-sm text-gray-600 bg-gray-500/5 rounded-xl filament-tabs',
    'dark:bg-gray-500/20' => config('filament.dark_mode'),
]) }}>
    {{ $slot }}
</nav>
