@extends('layout.base-layout')

@section('title', '- About')

@section('content')
<div class="flex justify-center items-center min-h-screen bg-dots-darker bg-center bg-white-100 dark:bg-dots-lighter dark:bg-white-900">
    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        <div class="grid gap-6 lg:gap-8 mb-16 mt-40">
            <h1 class="fw-bold text-center text-3xl sm:text-3xl md:text-4xl lg:text-4xl xl:text-4xl 2xl:text-4xl" style="color:black; font-family: 'Monsterrat', sans-serif;">About WasteXpert</h1>
            <div class="text-center justify-content-center align-items-center px-10">
                <p class="fw-light text-center text-md sm:text-md md:text-lg lg:text-lg xl:text-lg 2xl:text-lg" style="color:black; font-family: 'Monsterrat', sans-serif;">
                    WasteXpert, an innovative web-based application, is here to tackle the waste problem in Indonesia. By utilizing Artificial Intelligence technology, specifically Deep Learning, WasteXpert uses Convolutional Neural Network to efficiently classify waste images. The goal is to make it easier for people to sort waste. Hopefully, WasteXpert will not only provide practical solutions, but also increase awareness and knowledge about waste management, contributing to the efforts to overcome the waste emergency that Indonesia is facing.
                </p>
            </div>
            <div class="text-center justify-content-center align-items-center">
                <a class="btn bg-[#97D729] w-max p-2 mx-2 text-lg sm:text-lg md:text-xl lg:text-xl xl:text-xl 2xl:text-xl fw-bold btn-outline-dark hover:bg-[#97D729]" style="color:black; font-family: 'Montserrat', sans-serif; transition: opacity 0.2s ease;" onmouseover="this.style.opacity='0.8'" onmouseout="this.style.opacity='1'" href="/about/model">About Model</a>

            </div>
            <div class="text-center justify-content-center align-items-center">
            </div>
        </div>
    </div>
</div>
@endsection