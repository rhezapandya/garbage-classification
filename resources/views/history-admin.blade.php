@extends('layout.base-layout')

@section('title', '- History Admin')

@section('content')
<div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-white-100 dark:bg-dots-lighter dark:bg-white-900">
    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        <div class="grid mt-16 mb-16">
            <h1 class="fw-bold fs-3 text-center" style="color:black; font-family: 'Monsterrat', sans-serif;">Classification History - Admin</h1>
            @if ($images)
            <table class="table table-hover table-bordered mt-4">
                <thead class="bg-[#f6f6f6]">
                    <tr class="text-center">
                        <th scope="col">No</th>
                        <th scope="col">Image</th>
                        <th scope="col">Prediction</th>
                        <th scope="col">Timestamp</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($images as $data)
                    <tr class="text-center">
                        <td class="align-middle">{{ $data->id }}</td>
                        <td class="align-middle">
                            <img src="{{ asset('/storage/images/' . basename( $data->path )) }}" alt="Uploaded Image" style="height: 100px; width: 100px; border-radius:10px" class="border border-dark m-2">
                        </td>
                        <td class="align-middle">{{ $data->prediction }}</td>
                        <td class="align-middle">{{ $data->created_at }}</td>
                        <td class="align-middle"><a class="btn btn-danger" href="/history/admin/delete/{{ $data->id }}">Delete</a></td>
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