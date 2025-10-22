<x-core::layouts.base body-class="d-flex flex-column" :body-attributes="['data-bs-theme' => 'dark']">
    <x-slot:title>
        @yield('title')
    </x-slot:title>

    <div class="page page-center">
        <div class="container container-tight py-4">
            <div class="text-center mb-4">
                @include('core/base::partials.logo')
            </div>

            <x-core::card size="md">
                <x-core::card.body>
                    <h2 class="mb-3 text-center">Installation Complete</h2>

                    <p class="text-secondary mb-4">
                        Your platform is ready to use.
                    </p>

                    <div class="my-2">
                        <a href="{{ $redirectUrl ?: route('admin.index') }}" class="btn btn-primary w-100">Go to Admin Dashboard</a>
                    </div>
                </x-core::card.body>
            </x-core::card>
        </div>
    </div>

</x-core::layouts.base>
