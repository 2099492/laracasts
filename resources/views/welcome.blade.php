<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/app.css">
    <script src="/app.js"></script>
</head>
<body>
    @livewire(\App\Http\Livewire\Counter::class)

    <script>
        document.querySelectorAll('[wire\\:snapshot]').forEach(element => {
            let snapshot = JSON.parse(element.getAttribute('wire:snapshot'));
        });
    </script>
</body>
</html>
