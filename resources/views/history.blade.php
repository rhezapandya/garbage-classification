@extends('layout.base-layout')

@section('title', '- History')

@section('content')
<div class="flex justify-center items-center min-h-screen bg-dots-darker bg-center bg-white-100 dark:bg-dots-lighter dark:bg-white-900">
    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        <div class="grid mb-16 mt-8">
            <h1 class="fw-bold text-2xl sm:text-2xl md:text-3xl lg:text-3xl xl:text-3xl 2xl:text-3xl text-center mb-3 mt-20" style="color:black; font-family: 'Monsterrat', sans-serif;">Classification History</h1>
            @if ($images)
            <table class="table table-hover table-bordered mt-3">
                <thead class="bg-[#f6f6f6]">
                    <tr class="text-center text-sm sm:text-sm md:text-md lg:text-md xl:text-lg 2xl:text-lg">
                        <th scope="col">No</th>
                        <th scope="col">Image</th>
                        <th scope="col">Prediction</th>
                        <th scope="col">Probability</th>
                        <th scope="col">Timestamp</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($images as $data)
                    <tr class="text-center text-sm sm:text-sm md:text-md lg:text-md xl:text-lg 2xl:text-lg">
                        <td class="align-middle">{{ $data->id }}</td>
                        <td class="align-middle">
                            <img src="{{ asset('/storage/images/' . basename( $data->path )) }}" alt="Uploaded Image" style="height: 100px; width: 100px;  min-width: 100px; min-height: 100px; border-radius:10px" class="border border-dark m-2">
                        </td>
                        <td class="align-middle">{{ $data->prediction }}</td>
                        <td class="align-middle">{{ $data->probability }}</td>
                        <td class="align-middle">{{ $data->created_at }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <div class="text-center mt-2">
                <p>No images found</p>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection