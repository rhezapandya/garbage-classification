@extends('layout.base-layout')

@section('title', '- Prediction')

@section('content')
<div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-white-100 dark:bg-dots-lighter dark:bg-white-900">
    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        <div class="grid gap-4 lg:gap-6">
            <h1 class="fw-bold fs-1 text-center" style="color:black; font-family: 'Monsterrat', sans-serif;">Classification Result</h1>

            @if(isset($imagePath))
            <div class="justify-content-center align-items-center d-flex">
                <img src="{{ asset('/storage/images/' . basename($imagePath)) }}" alt="Uploaded Image" style="height: 250px; width: 250px; border-radius:10px" class="border border-dark">
            </div>
            @else
            <p>Image Corrupted.</p>
            @endif

            @if(isset($predictions))
            <div class="justify-content-center align-items-center d-flex">
                <p class="fs-5 fw-bolder">Prediction : <span class="fw-normal">{{ $predictions }}</span></p>
            </div>
            @else
            <p>No Prediction Found.</p>
            @endif

            <div class="text-center justify-content-center align-items-center">
                <a class="btn bg-[#97D729] w-max p-1s fs-5 fw-bold btn-outline-dark hover:bg-[#97D729]" style="color:black; font-family: 'Montserrat', sans-serif; transition: opacity 0.2s ease;" onmouseover="this.style.opacity='0.8'" onmouseout="this.style.opacity='1'" href="/classification">Change Image</a>
            </div>

        </div>
    </div>
</div>
@endsection