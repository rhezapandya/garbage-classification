@extends('layout.base-layout')

@section('title', '- About Model')

@section('content')
<div class="flex justify-center items-center min-h-screen bg-dots-darker bg-center bg-white-100 dark:bg-dots-lighter dark:bg-white-900">
    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        <div class="grid gap-6 lg:gap-8 mb-16 mt-40">
            <h1 class="fw-bold text-center text-3xl sm:text-3xl md:text-4xl lg:text-4xl xl:text-4xl 2xl:text-4xl" style="color:black; font-family: 'Monsterrat', sans-serif;">About our AI Model</h1>
            <div class="card text-center justify-content-center align-items-center px-10">
                <div class="card-body">
                    <h1 class="card-title fw-bold text-center text-lg sm:text-lg md:text-xl lg:text-xl xl:text-xl 2xl:text-xl mb-4">Model</h1>
                    <p class="card-text fw-light text-center text-md sm:text-md md:text-lg lg:text-lg xl:text-lg 2xl:text-lg" style="color:black; font-family: 'Monsterrat', sans-serif;">
                        The model is developed using the Convolutional Neural Network method, implementing transfer learning with the ResNet50 architecture. This approach optimizes the utilization of ResNet50's pre-trained features, enhancing the model's capacity for accurate image classification. <br><br>The model also incorporates several hyperparameters :
                    </p>
                    <div class="card border-0 text-center justify-content-center align-items-center mt-2">
                        <table class="table w-50" style="border: 1px solid black;">
                            <thead>
                                <tr>
                                    <th scope="col" style="border: 1px solid black;">Hyperparameter</th>
                                    <th scope="col">Value</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row" style="border: 1px solid black;">Architecture</td>
                                    <td>ResNet50</td>
                                </tr>
                                <tr>
                                    <td scope="row" style="border: 1px solid black;">Optimizer</td>
                                    <td>Adam</td>
                                </tr>
                                <tr>
                                    <td scope="row" style="border: 1px solid black;">Learning Rate</td>
                                    <td>0.0001</td>
                                </tr>
                                <tr>
                                    <td scope="row" style="border: 1px solid black;">Training Epochs</td>
                                    <td>50</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card text-center justify-content-center align-items-center px-10">
                <div class="card-body">
                    <h1 class="card-title fw-bold text-center text-lg sm:text-lg md:text-xl lg:text-xl xl:text-xl 2xl:text-xl mb-4">Dataset Sample</h1>
                    <div class="row justify-content-center">
                        <div class="col-lg-2">
                            <div class="card text-center">
                                <div class="card-body">
                                    <img src="{{ asset('/cardboard-sample.jpg') }}" width="200" height="200" class="" alt="">
                                    <h5 class="card-title fw-bold mt-2">Cardboard</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="card text-center">
                                <div class="card-body">
                                    <img src="{{ asset('/glass-sample.jpg') }}" width="200" height="200" class="" alt="">
                                    <h5 class="card-title fw-bold mt-2">Glass</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="card text-center">
                                <div class="card-body">
                                    <img src="{{ asset('/metal-sample.jpg') }}" width="200" height="200" class="" alt="">
                                    <h5 class="card-title fw-bold mt-2">Metal</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="card text-center">
                                <div class="card-body">
                                    <img src="{{ asset('/paper-sample.jpg') }}" width="200" height="200" class="" alt="">
                                    <h5 class="card-title fw-bold mt-2">Paper</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="card text-center">
                                <div class="card-body">
                                    <img src="{{ asset('/plastic-sample.jpg') }}" width="200" height="200" class="" alt="">
                                    <h5 class="card-title fw-bold mt-2">Plastic</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="card text-center">
                                <div class="card-body">
                                    <img src="{{ asset('/trash-sample.jpg') }}" width="200" height="200" class="" alt="">
                                    <h5 class="card-title fw-bold mt-2">Trash</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card text-center justify-content-center align-items-center px-10">
                <div class="card-body">
                    <h1 class="card-title fw-bold text-center text-lg sm:text-lg md:text-xl lg:text-xl xl:text-xl 2xl:text-xl mb-4">Result</h1>
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="card text-center">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold mb-4 mt-2 text-xl">Confusion Matrix</h5>
                                    <img src="{{ asset('/confusion-matrix.png') }}" width="900" height="900" class="" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card text-center align-items-center justify-content-center h-100">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold mb-4 mt-2 text-xl">Classification Report</h5>
                                    <table class="table w-100 mt-5" style="border: 1px solid black;">
                                        <thead>
                                            <tr>
                                                <th scope="col" style="border: 1px solid black;">Class</th>
                                                <th scope="col" style="border: 1px solid black;">Precision</th>
                                                <th scope="col" style="border: 1px solid black;">Recall</th>
                                                <th scope="col" style="border: 1px solid black;">F1 Score</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td scope="row" style="border: 1px solid black;">Cardboard</td>
                                                <td scope="row" style="border: 1px solid black;">97.76%</td>
                                                <td scope="row" style="border: 1px solid black;">97.52%</td>
                                                <td scope="row" style="border: 1px solid black;">97.64%</td>
                                            </tr>
                                            <tr>
                                                <td scope="row" style="border: 1px solid black;">Glass</td>
                                                <td scope="row" style="border: 1px solid black;">95.04%</td>
                                                <td scope="row" style="border: 1px solid black;">97.61%</td>
                                                <td scope="row" style="border: 1px solid black;">95.32%</td>
                                            </tr>
                                            <tr>
                                                <td scope="row" style="border: 1px solid black;">Metal</td>
                                                <td scope="row" style="border: 1px solid black;">94.00%</td>
                                                <td scope="row" style="border: 1px solid black;">95.61%</td>
                                                <td scope="row" style="border: 1px solid black;">94.80%</td>
                                            </tr>
                                            <tr>
                                                <td scope="row" style="border: 1px solid black;">Paper</td>
                                                <td scope="row" style="border: 1px solid black;">97.31%</td>
                                                <td scope="row" style="border: 1px solid black;">97.31%</td>
                                                <td scope="row" style="border: 1px solid black;">97.31%</td>
                                            </tr>
                                            <tr>
                                                <td scope="row" style="border: 1px solid black;">Plastic</td>
                                                <td scope="row" style="border: 1px solid black;">95.57%</td>
                                                <td scope="row" style="border: 1px solid black;">93.98%</td>
                                                <td scope="row" style="border: 1px solid black;">94.77%</td>
                                            </tr>
                                            <tr>
                                                <td scope="row" style="border: 1px solid black;">Trash</td>
                                                <td scope="row" style="border: 1px solid black;">91.18%</td>
                                                <td scope="row" style="border: 1px solid black;">95.01%</td>
                                                <td scope="row" style="border: 1px solid black;">90.84%</td>
                                            </tr>
                                            <tr>
                                                <td scope="row" style="border: 1px solid black;">Average</td>
                                                <td scope="row" style="border: 1px solid black;">95.14%</td>
                                                <td scope="row" style="border: 1px solid black;">95.09%</td>
                                                <td scope="row" style="border: 1px solid black;">95.11%</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center justify-content-center align-items-center">
                <a class="btn bg-[#97D729] w-max p-2 mx-2 text-lg sm:text-lg md:text-xl lg:text-xl xl:text-xl 2xl:text-xl fw-bold btn-outline-dark hover:bg-[#97D729]" style="color:black; font-family: 'Montserrat', sans-serif; transition: opacity 0.2s ease;" onmouseover="this.style.opacity='0.8'" onmouseout="this.style.opacity='1'" href="/about">Back</a>

            </div>
            <div class="text-center justify-content-center align-items-center">
            </div>
        </div>
    </div>
</div>
@endsection