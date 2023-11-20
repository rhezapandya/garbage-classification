@extends('layout.base-layout')

@section('title', '- Home')

@section('content')
<div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-white-100 dark:bg-dots-lighter dark:bg-white-900">
    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        <div class="grid gap-6 lg:gap-8">
            <h1 class="fw-bold fs-1 text-center" style="color:black; font-family: 'Monsterrat', sans-serif;">Garbage Classification</h1>
            <h2 class="fw-light fs-3 text-center" style="color:black; font-family: 'Monsterrat', sans-serif;">Classify your garbage with an easy-to-use platform</h2>
            <div class="text-center justify-content-center align-items-center">
                <a class="btn bg-[#97D729] w-max p-3 fs-4 fw-bold btn-outline-dark hover:bg-[#97D729]" style="color:black; font-family: 'Montserrat', sans-serif; transition: opacity 0.2s ease;" onmouseover="this.style.opacity='0.8'" onmouseout="this.style.opacity='1'" href="/classification">Classify Image!</a>
            </div>
        </div>
    </div>
</div>
@endsection