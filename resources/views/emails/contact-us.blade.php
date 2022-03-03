<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Thanks for your opinion</h1>

    <p>
        Hi, we are {{ config('app.name') }}
    </p>
    
    <h1><strong>Name: </strong>{{ $request->name }}</h1>
    <h1><strong>Description: </strong>{{ $request->description }}</h1>
    <h1><strong>Email: </strong>{{ $request->email }}</h1>

</body>
</html>
