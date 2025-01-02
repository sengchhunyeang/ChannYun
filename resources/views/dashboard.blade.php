<!doctype html>
<html lang="en">

<head>
    <title>ChannYun</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="{{ asset('images/channyunLogo.svg') }}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('Css/custom.css') }}">
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
<div x-data="{ currentContent: 'default' }" class="flex h-screen">

    <!-- Sidebar -->
    <div class="w-1/6 bg-white shadow-md h-full p-4">
        <div class="mb-4 md:flex md:justify-center">
            <img src="{{ asset('images/channyunLogo.svg') }}" alt="Logo" class="sm:w-1/3 md:w-1/4 lg:w-1/5 mx-auto">

        </div>
        @php
        $menuItems = [
        ['id' => 'content-a', 'icon' => 'home.svg', 'label' => 'សិស្សចុះឈ្មោះថ្មី'],
        [
        'id' => 'content-b',
        'icon' => 'explor.svg',
        'label' => 'ឈ្មោះសិស្សសរុប',
        'submenu' => [
        ['id' => 'branch', 'label' => 'ឈ្មោះសិស្សតាមសាខានីមួយ'],
        ['id' => 'class', 'label' => 'ឈ្មោះសិស្សរៀនតាមថ្នាក់'],
        ['id' => 'monthly', 'label' => 'បញ្ជីឈ្មោះសិស្សឈប់ប្រចាំខែ'],
        ]
        ],
        ['id' => 'content-c', 'icon' => 'order.svg', 'label' => 'C'],
        ['id' => 'content-d', 'icon' => 'add_card.svg', 'label' => 'D'],
        ['id' => 'content-e', 'icon' => 'list_recipe.svg', 'label' => 'E'],
        ['id' => 'content-f', 'icon' => 'recipe.svg', 'label' => 'F'],
        ['id' => 'content-g', 'icon' => 'draft.svg', 'label' => 'G'],
        ['id' => 'content-h', 'icon' => 'favorite.svg', 'label' => 'H'],
        ['id' => 'content-i', 'icon' => 'setting.svg', 'label' => 'I'],
        ];
        @endphp
        <nav class="flex flex-col space-y-2">
            @foreach ($menuItems as $item)
            @if (isset($item['submenu']))
            <div x-data="{ open: false }" class="relative">
                <button @click="open = !open"
                        class="menu-item flex items-center p-2 text-gray-700 hover:bg-gray-200 rounded w-full">
                    <img src="{{ asset('images/sidebar/' . $item['icon']) }}" alt="{{ $item['label'] }}"
                         class="w-6 h-6 mr-2">
                    <span class="hidden md:inline-block flex-1 text-left">{{ $item['label'] }}</span>
                    <svg x-bind:class="{ 'rotate-180': open }" class="w-4 h-4 transform transition-transform"
                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="open" x-cloak class="ml-8 mt-2 space-y-1">
                    @foreach ($item['submenu'] as $submenu)
                    <button @click="currentContent = '{{ $submenu['id'] }}'"
                            class="block px-2 py-1 text-gray-600 hover:text-gray-800 hover:bg-gray-100 rounded">
                        {{ $submenu['label'] }}
                    </button>
                    @endforeach
                </div>
            </div>
            @else
            <button @click="currentContent = '{{ $item['id'] }}'"
                    class="menu-item flex items-center p-2 text-gray-700 hover:bg-gray-200 rounded">
                <img src="{{ asset('images/sidebar/' . $item['icon']) }}" alt="{{ $item['label'] }}"
                     class="w-6 h-6 mr-2">
                <span class="hidden md:inline-block">{{ $item['label'] }}</span>
            </button>
            @endif
            @endforeach
        </nav>
    </div>

    <!-- Main Content -->
    <div class="flex-1 p-4 text-center">
        <div x-show="currentContent === 'content-a'" class="text-red-600">សិស្សចុះឈ្មោះថ្មី</div>
        <div x-show="currentContent === 'content-b'" class="text-red-600">ឈ្មោះសិស្សសរុប</div>
        <div x-show="currentContent === 'branch'" class="text-red-600">ឈ្មោះសិស្សតាមសាខានីមួយ</div>
        <div x-show="currentContent === 'class'" class="text-red-600">ឈ្មោះសិស្សរៀនតាមថ្នាក់</div>
        <div x-show="currentContent === 'monthly'" class="text-red-600">បញ្ជីឈ្មោះសិស្សឈប់ប្រចាំខែ</div>
        <div x-show="currentContent === 'content-c'">
            @include('partials.test') <!-- Ensure this partial exists -->
        </div>
        <div x-show="currentContent === 'content-d'">Content for D</div>
        <div x-show="currentContent === 'content-e'">Content for E</div>
        <div x-show="currentContent === 'content-f'">Content for F</div>
        <div x-show="currentContent === 'content-g'">Content for G</div>
        <div x-show="currentContent === 'content-h'">Content for H</div>
        <div x-show="currentContent === 'content-i'">Content for I</div>
        <div x-show="currentContent === 'default'" class="text-red-600">សិស្សចុះឈ្មោះថ្មី</div>
    </div>
</div>

<script src="//unpkg.com/alpinejs" defer></script>
</body>
</html>
