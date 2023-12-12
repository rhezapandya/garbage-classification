@extends('layout.base-layout')

@section('title', '- Classification')

@section('content')
<div class="flex justify-center items-center min-h-screen bg-dots-darker bg-center bg-white-100 dark:bg-dots-lighter dark:bg-white-900">
    <div class="mx-auto px-auto">
        <div class="grid gap-6 lg:gap-8">
            <h1 class="fw-bold text-center text-3xl sm:text-3xl md:text-4xl lg:text-4xl xl:text-4xl 2xl:text-4xl" style="color:black; font-family: 'Montserrat', sans-serif;">Classify Garbage</h1>
            <h2 class="fw-light text-center mx-4 text-xl sm:text-xl md:text-2xl lg:text-2xl xl:text-2xl 2xl:text-2xl{{ Request::is('classification') ? 'sm:break-all md:break-all lg:break-all' : '' }}" style="color:black; font-family: 'Montserrat', sans-serif;">
                Classify your garbage's image to these class.
                @if(Request::is('classification'))
                <br class="hidden sm:block md:block lg:block" />
                @else
                <br />
                @endif
                Cardboard, Glass, Metal, Paper, Plastic, or Trash
            </h2>

            <form method="POST" action="{{ route('make-prediction') }}" enctype="multipart/form-data" class="text-center align-items-center justify-content-center">
                @csrf
                <div class="text-center justify-content-center align-items-center mb-4">
                    <input type="file" name="image" accept="image/*" style="color:black;" class="ml-20" required>
                </div>
                <div class="text-center justify-content-center align-items-center mt-4">
                    <button type="submit" class="btn bg-[#97D729] w-max p-3 text-md sm:text-xl md:text-2xl lg:text-2xl xl:text-2xl 2xl:text-2xl fw-bold btn-outline-dark hover:bg-[#97D729]" style="color:black; font-family: 'Montserrat', sans-serif; transition: opacity 0.2s ease;" onmouseover="this.style.opacity='0.8'" onmouseout="this.style.opacity='1'" href="/classification">Classify Image</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection