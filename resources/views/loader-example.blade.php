<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A Simple Loader</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.3.0/alpine.js" integrity="sha512-nIwdJlD5/vHj23CbO2iHCXtsqzdTTx3e3uAmpTm4x2Y8xCIFyWu4cSIV8GaGe2UNVq86/1h9EgUZy7tn243qdA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <style>
        .blue-circle{
            animation-delay: 0.1s;
        }
        .green-circle{
            animation-delay: 0.2s;
        }
        .red-circle{
            animation-delay: 0.3s;
        }
    </style>

</head>

<body>
    <div x-data="{isShow: false}">
        <!-- main code -->
        <div class="w-full relative">
            <div class="w-full h-64 bg-blue-100 p-2">
            </div>
            <div x-show="isShow" class="absolute top-0 left-0 w-full h-full flex space-x-2 p-5 justify-center items-center">
                <div class="bg-blue-600 p-2  w-4 h-4 rounded-full animate-bounce blue-circle"></div>
                <div class="bg-green-600 p-2 w-4 h-4 rounded-full animate-bounce green-circle"></div>
                <div class="bg-red-600 p-2  w-4 h-4 rounded-full animate-bounce red-circle"></div>
            </div>
        </div>

        <!-- a button to switch -->
        <div
            @click.prevent="isShow = !isShow"
            class="w-20 h-10 border-gray-100 px-2 py-3 text-sm rounded-md bg-blue-300 text-blue-600 cursor-pointer"
        >Click ME</div>
    </div>
    
    Ref: <a href="https://www.section.io/engineering-education/building-a-loader-using-animations-in-tailwind-css/">Building a Loader Using Animations in Tailwind CSS</a>


    <script>
        function alpineInit() {
            return {
            };
        }
    </script>
</body>


</html>