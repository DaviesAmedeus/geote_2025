<x-panel.layout>

    <div class="dash">
        {{-- Side-navbar --}}
        <x-panel.sidenav />

        <div class="dash-app">
            {{-- Top-navbar --}}
            <x-panel.topnav />
            <main class="dash-content">
                <div class="container-fluid">
                    {{ $breadcrumb ?? '' }}
                    <x-panel.alerts />
                    {{ $slot }}
                </div>
            </main>
        </div>
    </div>
</x-panel.layout>
