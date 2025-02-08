<!doctype html>
<html lang="en">

<head>
    <title>ChannYun</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="{{ asset('images/channyunLogo.svg') }}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('Css/custom.css') }}">
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>

<body class="bg-gray-100">
<div x-data="{ stepCount: 1 }" class="flex h-screen">

    <!-- Sidebar -->
    <div class="w-1/6 bg-white shadow-md h-full p-4">
        <div class="mb-4 md:flex md:justify-center">
            <img src="{{ asset('images/channyunLogo.svg') }}" alt="Logo" class="sm:w-1/3 md:w-1/4 lg:w-1/5 mx-auto">
        </div>

        @php
        $menuItems = [
        ['id' => 1, 'icon' => 'register.png', 'label' => 'ចុះឈ្មោះសិស្ស'],
        ['id' => 2, 'icon' => 'list.png', 'label' => 'បញ្ជីឈ្មោះសិស្ស'],
        ['id' => 3, 'icon' => 'order.svg', 'label' => 'Step 3: Review Data'],
        ['id' => 4, 'icon' => 'add_card.svg', 'label' => 'Step 4: Final Submission'],
        ];
        @endphp

        <nav class="flex flex-col space-y-2">
            @foreach ($menuItems as $item)
            <button @click="stepCount = {{ $item['id'] }}"
                    class="menu-item flex items-center p-2 rounded w-full transition duration-200"
                    :class="stepCount === {{ $item['id'] }} ? 'text-white bg-cyan-600 hover:bg-gray-200' : 'text-black '">
                <img src="{{ asset('images/sidebar/' . $item['icon']) }}" alt="{{ $item['label'] }}"
                     class="w-6 h-6 mr-2">
                <span class="hidden md:inline-block">{{ $item['label'] }}</span>
            </button>
            @endforeach
        </nav>
    </div>

    <!-- Main Content -->
    <div class="flex-1 ">
        <div x-show="stepCount === 1" class="text-center">
            @include('partials.register')
        </div>

        <div x-show="stepCount === 2" class="text-center">
            @include('partials.form_data')
        </div>

        <div x-show="stepCount === 3" class="text-center">
            <h1 class="text-4xl font-bold mb-6">Step 3: Review Data</h1>
            @include('partials.test')
        </div>

        <div x-show="stepCount === 4" class="text-center">
            <h1 class="text-4xl font-bold mb-6">Step 4: Final Submission</h1>
        </div>
    </div>

</div>

</body>
</html>
