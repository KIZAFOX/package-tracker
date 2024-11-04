<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    <h1>Package Tracker</h1>
    <img src="./images/box.png" width="200" alt="Box Image">
    <p>Welcome to Package Tracker. Leader of delivery tracking!</p>
    @if ($packageCount == 0)
        <p>There is actually no package in pending.</p>
    @else
        <p>There {{ $packageCount <= 1 ? "is" : "are" }} currently {{ $packageCount  }} {{ $packageCount <= 1 ? "package" : "packages" }} pending</p>
    @endif
</body>
</html>
