<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>IA</title>
        <style>
        </style>
    </head>
    <body>

            <div class="content">
                <div align="center">
                    <h1>Inteligencia Artificial</h1>
                </div>

                <div align="center">
                    <form method="post" action="{{ url('search/index') }}">
                        <label style="color:black;">Ingrese hechos... (separe con comas)</label><br/>
                       <input type="text" name="search" id="search" class="form-control"><br/>
                       <input type="submit" name="submit" value="Buscar">
                    </form>
                </div>

        </div>
    </body>
</html>
