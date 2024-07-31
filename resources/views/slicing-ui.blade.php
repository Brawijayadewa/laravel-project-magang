<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <style>
        body{
            padding: 1em;
        }
    </style>
</head>
<body>
    <div class="container p-5 my-5 text-white rounded-4" style="background-color:#233446;max-width: 680px;width:100% !important">
        <div class="row mb-3">
            <div class="col">
                <div>
                    <img src="{{asset('img/avatar.jpg')}}" alt="" class="rounded-circle w-100">
                </div>
            </div>
            <div class="col-8">
                <div>
                    <span class="fs-5 fw-bold">orlando</span>
                </div>
                <div>
                    <span class="text-secondary">@orlando</span>
                </div>
            </div>
            <div class="col d-flex justify-content-center align-items-center">
                <div class="text-end">
                    <img src="{{asset('img/twitter.png')}}" alt="" class="w-75">
                </div>
            </div>
        </div>
        <div>
            <p>Why do they call it 'debugging' when it feels more like 'wildly guessing and hoping for the best'? <span class="text-primary">#programming #coding #debugging</span></p>
        </div>
        <div class="d-flex gap-4">
            <div class="d-flex align-items-center gap-2">
                <img src="{{asset('img/love.png')}}" alt="" style="width: 2em">
                <span class="text-secondary fw-bolder">650</span>
            </div>
            <div class="d-flex align-items-center">
                <span class="text-secondary fw-bolder">3:40 PM - Feb 24, 2022</span>
            </div>
        </div>
    </div>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>