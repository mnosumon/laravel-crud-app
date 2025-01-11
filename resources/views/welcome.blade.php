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
            <div class="text-5xl font-bold border-b-4 border-[#000] py-3">
                <h1>This is welcome page</h1>
            </div>

            <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                <div class="overflow-hidden">
                    <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr>
                        <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">id</th>
                        <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Name</th>
                        <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Age</th>
                        <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">email</th>
                        <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">image</th>
                        <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach($datas as $post)
                        <tr class="hover:bg-gray-100">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">{{$post->id}}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">{{$post->name}}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{$post->age}}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{$post->email}}</td>
                            <td class="w-32 h-40 overflow-hidden"> 

                               <img class="w-full h-full object-contain" src="images/{{$post->image}}" alt="images for porduct"> 
                                
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                <a href="{{route('edit', $post->id)}}" type="button" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent  focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none bg-green-600 text-white px-3 py-2">edit</a>
                                <a href="{{route('delete', $post->id)}}" type="button" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none bg-red-600 text-white px-3 py-2">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
                <div class="">
                    {{ $datas->links() }}
                </div>
                </div>
            </div>
        </div>
    </nav>

</body>
</html>