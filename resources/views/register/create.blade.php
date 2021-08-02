<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register a User</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.1.2/tailwind.min.css">
</head>
<body>

<section class="px-6 py-8">
    <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded">
    <h1 class="text-center font-bold text-xl">Register!</h1>

<form method="POST" action="/register" class="mt-10">
    @csrf

    <x-form.input name="name" />
    <x-form.input name="username" />
    <x-form.input name="email" />
    <x-form.input name="password" type="password" />

    <x-form.button>Submit</x-form.button>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li class="text-red-500 text-xs">{{ $error }}</li>
        @endforeach
    </ul>
@endif

</form>

    </main>
</section>
</body>
</html>

