@extends('layout.base-layout')

@section('title', '- Classification')

@section('content')
<div class="flex justify-center items-center min-h-screen bg-dots-darker bg-center bg-white-100 dark:bg-dots-lighter dark:bg-white-900">
    <div class="mx-auto px-auto">
        <div class="grid gap-6 lg:gap-8">
            <h1 class="fw-bold text-center text-3xl sm:text-3xl md:text-4xl lg:text-4xl xl:text-4xl 2xl:text-4xl" style="color:black; font-family: 'Montserrat', sans-serif;">Classify Waste</h1>
            <h2 class="fw-light text-center mx-4 text-xl sm:text-xl md:text-2xl lg:text-2xl xl:text-2xl 2xl:text-2xl{{ Request::is('classification') ? 'sm:break-all md:break-all lg:break-all' : '' }}" style="color:black; font-family: 'Montserrat', sans-serif;">
                Classify your waste's image to these class.
                @if(Request::is('classification'))
                <br class="hidden sm:block md:block lg:block" />
                @else
                <br />
                @endif
                Cardboard, Glass, Metal, Paper, Plastic, or Trash
            </h2>

            <form method="POST" id="form" action="{{ route('make-prediction') }}" enctype="multipart/form-data" class="text-center align-items-center justify-content-center">
                @csrf
                <div class="text-center justify-content-center align-items-center mb-4">
                    <input type="text" name="text1" id="text1" style="color:black; display:none; border:1px solid black" class="ml-20">
                    <input type="text" name="text2" id="text2" style="color:black; display:none; border:1px solid black" class="ml-20">
                    <input type="text" name="text3" id="text3" style="color:black; display:none; border:1px solid black" class="ml-20">
                    <input type="file" name="image" id="image" accept="image/*" style="color:black;" class="ml-20" required>
                </div>
            </form>
            <div class="text-center align-items-center justify-content-center">
                <button id="predictBtn" class=" btn bg-[#97D729] w-max p-3 text-md sm:text-xl md:text-2xl lg:text-2xl xl:text-2xl 2xl:text-2xl fw-bold btn-outline-dark hover:bg-[#97D729]" style="color:black; font-family: 'Montserrat', sans-serif; transition: opacity 0.2s ease;" onmouseover="this.style.opacity='0.8'" onmouseout="this.style.opacity='1'">Classify Image</button>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('predictBtn').addEventListener('click', function() {
        var input = document.getElementById('image');
        var imageFile = input.files[0];

        if (imageFile) {
            var formData = new FormData();
            formData.append('image', imageFile);

            fetch('https://143.198.204.170:5000/predict', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    var form = document.getElementById('form');
                    var responseInput = document.createElement('input');
                    responseInput.type = 'hidden';
                    responseInput.name = 'responseData';
                    responseInput.value = JSON.stringify(data);
                    form.appendChild(responseInput);

                    document.getElementById('text1').value = data.Class;
                    document.getElementById('text2').value = data.Prediction;
                    document.getElementById('text3').value = data.ProbabilityPercentage;

                    form.submit();
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        } else {
            console.error('No image selected');
        }
    });
</script>
@endsection