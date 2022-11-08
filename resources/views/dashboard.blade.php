<x-app-layout>
    <x-slot name="header">
    <x-nav-link :href="route('index')">
                        {{ __('На главную ') }}
                    </x-nav-link>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Вы вошли в систему как АДМИНИСТРАТОР!
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
