@extends('layout.base-layout')

@section('title', '- Home')

@section('content')
<div class="flex justify-center items-center min-h-screen bg-dots-darker bg-center bg-white-100 dark:bg-dots-lighter dark:bg-white-900">
    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        <div class="grid gap-6 lg:gap-8">
            <h1 class="fw-bold text-center text-3xl sm:text-3xl md:text-4xl lg:text-4xl xl:text-4xl 2xl:text-4xl" style="color:black; font-family: 'Monsterrat', sans-serif;">Garbage Classification</h1>
            <h2 class="fw-light text-center text-xl sm:text-xl md:text-2xl lg:text-2xl xl:text-2xl 2xl:text-2xl" style="color:black; font-family: 'Monsterrat', sans-serif;">Classify your garbage with an easy-to-use platform</h2>
            <div class="text-center justify-content-center align-items-center">
                <a class="btn bg-[#97D729] w-max p-3 text-xl sm:text-xl md:text-2xl lg:text-2xl xl:text-2xl 2xl:text-2xl fw-bold btn-outline-dark hover:bg-[#97D729]" style="color:black; font-family: 'Montserrat', sans-serif; transition: opacity 0.2s ease;" onmouseover="this.style.opacity='0.8'" onmouseout="this.style.opacity='1'" href="/classification">Classify Now!</a>
            </div>
        </div>
    </div>
</div>
@endsection