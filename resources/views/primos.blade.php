<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeros Primos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-slm-12">
                <h1>
                    Numeros Primos
                </h1>
                <form action=" {{ route('primos.index') }} " method="get" >
                    {{ csrf_field() }}
                    <div class="mb-3">
                        <div class="row g-3 align-items-center">
                        <div class="col-auto">
                            <label   class="col-form-label">Numero</label>
                        </div>
                        <div class="col-auto">
                            <input type="text" id="inputNumber"  name="inputNumber" >
                        </div>
                           <div class="col-auto">
                           <button type="submit" class="btn btn-primary">Calcular</button>
                        </div>
                    </div>
                    
                </form>
                <div class="row">
                    <div class="col-2 text-truncate">
                       {{ $result_Cal }} </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>