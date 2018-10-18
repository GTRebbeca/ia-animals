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
                    <!--Aquí enviamos el formulario para guardar nuevas caracteristicas-->
                    <form method="post" action="{{ url('search/save') }}">
                        <label style="color:black;">Respuesta:</label><br/>
                        @if($res == 'nel')
                           No tenemos ninguna de estas caracteristicas resgistradas, ¿podría indicarnos a que tipo pertenece?
                           <br/>
                           <input type="text" name="type" class="form-control"><br>
                           <input type="hidden" name="cars" value="">
                           <input type="submit" value="guardar">
                          <a href="{{ url() }}">Volver</a>
                        @endif   
                        @if($res == 'ok')
                        Coincidencias

                          <a href="{{ url() }}">Volver</a>
                        @endif
                    </form>
                </div>

        </div>
    </body>
</html>
