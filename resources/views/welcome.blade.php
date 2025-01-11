<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <nav class="w-[1024px] mx-auto">

        <div class=" bg-slate-400 flex items-center justify-between">
            <a class="px-5 py-2 bg-orange-500 text-white" href="#">Home</a>
            <a class="px-5 py-2 bg-orange-500 text-white" href="/about">about</a>
            <a class="px-5 py-2 bg-orange-500 text-white" href="/data">data</a>
        
            </div>
            @if (session('success'))
                <div class="alert alert-success text-green-600">
                    {{ session('success') }}
                </div>
            @endif
            <div class="text-5xl font-bold">
                <h1>This is welcome page</h1>
            </div>
    </nav>

</body>
</html>