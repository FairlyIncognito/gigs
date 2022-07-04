<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="images/favicon.ico" />
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        laravel: "#237bff",
                    },
                },
            },
        };
    </script>
    <title>Smart:Hire</title>
    
</head>
<body class="mb-28">

    <!-- Navigation -->
    @include('partials._nav')

    <!-- Main Content -->
    <main>
        {{ $slot }}
    </main>

    <!-- Footer -->
    @include('partials._footer')

    <!-- Status messages -->
    <x-flash-message />

</body>
</html>