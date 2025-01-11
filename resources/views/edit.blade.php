<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div>
        <div class="">

            <a  class="px-5 py-2 bg-orange-500 text-white" href="/">back to home</a>
        </div>
        <div class="">
            <div class="">edit - {{$dataPost->name}} </div>
            <form method="POST" action="{{route('update', $dataPost->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="my-2">
                    <label class="text-lg" for="name">Name</label>
                    <input class="outline-none border px-3 py-2" name="name" type="text" placeholder="enter your name" value="{{ $dataPost->name }}">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="my-2">
                    <label class="text-lg" for="age">Age</label>
                    <input class="outline-none border px-3 py-2 appearance-none" name="age" type="number" placeholder="enter your age" value="{{ $dataPost->age }}">
                    @error('age')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="my-2">
                    <label class="text-lg" for="email">Email</label>
                    <input class="outline-none border px-3 py-2 " name="email"  type="email" placeholder="enter your email" value="{{ $dataPost->email }}">
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="my-2">
                    <label class="text-lg" for="name">Name</label>
                    <input name="image"  type="file">
                    @error('image')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="my-2">
                    <input name="submit_btn"  class="outline-none border px-3 py-2 bg-orange-500 text-white" type="submit" placeholder="Edit">
                </div>

            </form>
        </div>
    </div>
</body>
</html>