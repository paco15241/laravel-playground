<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A Simple Form</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.3.0/alpine.js" integrity="sha512-nIwdJlD5/vHj23CbO2iHCXtsqzdTTx3e3uAmpTm4x2Y8xCIFyWu4cSIV8GaGe2UNVq86/1h9EgUZy7tn243qdA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body class="bg-gray-300" style="font-family:Georgia, 'Times New Roman', Times, serif;">
    <div class="h-screen flex items-center justify-center">
        <form class="w-full md:w-1/3 bg-white rounded-lg items-center">
            <div class="flex font-bold justify-center mt-6">
                <img class="h-24 w-24" src="./Images/avatar1.png">
            </div>
            <h2 class="text-3xl text-center text-gray-700 mb-4">Welcome Back!</h2>

            <div class="px-12 pb-10">
                <div class="w-full mb-2">
                    <div class="flex justify-center">
                        <input type='text' placeholder="Username" class="px-8  w-full border rounded py-2 text-gray-700 focus:outline-none items-center" />
                    </div>
                </div>

                <div class="w-full mb-2">
                    <div class="flex justify-center">
                        <input type='password' placeholder="Password" class="px-8 w-full border rounded py-2 text-gray-700 focus:outline-none" />
                    </div>
                </div>

                <button type="submit" class="w-full mt-6 py-2  rounded bg-blue-500 text-gray-100  focus:outline-none ">Log In</button>

                <a href="#" class="text-sm text-opacity-100 float-right mt-6 mb-4 hover:text-blue-600 underline">Forgot Password?</a>
                <a href="#" class="text-sm text-opacity-100 float-left mt-6 mb-8 hover:text-blue-600 underline">Create Account</a>
            </div>

            

        </form>
    </div>
</body>

</html>