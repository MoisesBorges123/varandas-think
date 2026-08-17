<x-layouts.guest>
    <livewire:auth.reset-password :token="$request->route('token')" :email="$request->query('email', '')" />
</x-layouts.guest>
