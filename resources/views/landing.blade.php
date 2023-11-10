<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="antialiased">
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="mt-16">
                <div class="grid gap-6 lg:gap-8">
                    <h1 style="color:white">Image Classification</h1>

                    <form method="POST" action="{{ route('make-prediction') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="image" accept="image/*" style="color:white">
                        <button type="submit" style="color:white">Classify Image</button>
                    </form>

                    @if(isset($imagePath))
                    <img src="{{ asset('storage/images/' . basename($imagePath)) }}" alt="Uploaded Image" style="height: 350px; width: 350px">
                    @endif

                    @if(isset($predictions))
                    <p style="color:white">{{ $predictions }}</p>
                    @else
                    <p>No prediction available.</p>
                    @endif

                    @if ($errors->any())
                    <div class="bg-red-100 p-4 rounded-lg mt-4">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li class="text-red-600">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</body>

</html>