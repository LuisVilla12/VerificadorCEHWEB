<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <link rel="stylesheet" href="{{ asset('build/assets/app-6bddb628.css') }}">
    @livewireStyles
</head>
<style>
    table {
        border-collapse: collapse;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }
</style>

<body>
    {{-- <livewire:mostrar-producto> --}}
        <livewire:search-products /> 
        @livewireScripts
        @stack('scripts')
        <script src="{{ asset('build/assets/app-02317797.js') }}"></script>
</body>
</html>