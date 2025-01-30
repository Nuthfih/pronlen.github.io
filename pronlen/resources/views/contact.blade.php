<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css"  rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <link rel="shortcut icon" href="https://github.com/Nuthfih/asset/blob/main/logo.png?raw=true" type="image/x-icon">
</head>
<body class="bg-gray-900 text-white flex flex-col items-center justify-center min-h-screen p-4">
<nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
  <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
  <img src="https://github.com/Nuthfih/asset/blob/main/logo.png?raw=true" class="h-8" alt="Pronlen Logo">
      <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white dark:hover:text-[#32cd32]">Pronlen</span>
  </a>
  <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
    <a href="{{url('/programmer')}}" class="text-white font-semibold py-1 px-4">Kamu Programmer?</a>
    <a href="{{url('/login')}}"><button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login</button></a>
      <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
  </div>
  <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
    <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
      <li>
        <a href="{{url('/')}}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Home</a>
      </li>
      <li>
        <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
      </li>
      <li>
        <a href="#" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">Contact</a>
      </li>
    </ul>
  </div>
  </div>
</nav>
    <h1 class="text-3xl font-bold text-green-400 mb-4">Contact Us</h1>
    
    <p>Email: <a href="mailto:{{ $contactInfo['email'] }}" class="text-blue-400 hover:underline">{{ $contactInfo['email'] }}</a></p>
    <p>Instagram: <a href="{{ $contactInfo['instagram'] }}" target="_blank" class="text-blue-400 hover:underline">Instagram</a></p>
    <p>WhatsApp: <a href="{{ $contactInfo['whatsapp'] }}" target="_blank" class="text-blue-400 hover:underline">WhatsApp</a></p>
    
    <h2 class="text-2xl font-semibold mt-6">Send us a message</h2>
    @if(session('success'))
        <p class="text-green-400">{{ session('success') }}</p>
    @endif
    
    <form action="{{ route('contact') }}" method="POST" class="bg-gray-800 p-6 rounded-lg shadow-md w-full max-w-md mt-4">
        @csrf
        <label for="name" class="block text-sm font-medium">Name:</label>
        <input type="text" name="name" required class="w-full p-2 mt-1 bg-gray-700 border border-gray-600 rounded focus:outline-none focus:ring-2 focus:ring-yellow-400">

        <label for="email" class="block text-sm font-medium mt-4">Email:</label>
        <input type="email" name="email" required class="w-full p-2 mt-1 bg-gray-700 border border-gray-600 rounded focus:outline-none focus:ring-2 focus:ring-yellow-400">

        <label for="message" class="block text-sm font-medium mt-4">Message:</label>
        <textarea name="message" required class="w-full p-2 mt-1 bg-gray-700 border border-gray-600 rounded focus:outline-none focus:ring-2 focus:ring-yellow-400"></textarea>

        <button type="submit" class="mt-4 w-full bg-green-400 text-gray-900 py-2 px-4 rounded font-bold hover:bg-yellow-500 transition">Send</button>
    </form>
</body>
</html>
