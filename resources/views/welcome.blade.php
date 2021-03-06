<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>IA</title>
        <style>
        </style>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>

            <div class="content">
                <div align="center">
                    <h1>Inteligencia Artificial</h1>
                </div>

                <div align="center">
                        <label style="color:black;">Ingrese palabra</label><br/>
                       <input type="text" id="sea" class="form-control"><div id="resp2" class="text-muted"></div><br/>
                       <div id="resp" class="text-muted"></div>
                </div>
                <script type="text/javascript">
                    
                    $("#sea").on("keyup", function(e) {
                                   $.ajaxSetup({
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        }
                                    });
                                 var sea = document.getElementById('sea').value;
                                 if(sea == ''){
                                    document.getElementById("resp").innerHTML = " ";
                                    document.getElementById("resp2").innerHTML = " ";
                                 }else{
                                           $.ajax({     
                                             type: "POST",                 
                                             url: "{{ url('search/SearchString') }}",  
                                              data: { "search" : sea.toUpperCase() }, 
                                              dataType: 'json',                
                                             success: function(data)             
                                             {
                                             if(data.length == 0){
                                                document.getElementById("resp").innerHTML = "No existe palabra";
                                                document.getElementById("resp2").innerHTML = " ";
                                             }else{
                                              document.getElementById("resp").innerHTML = "Coincidencias: ";
                                             for(var i= 0; i < data.length; i++){
                                            $('#resp').append('<div align="center"><b>'+ data[i]['palabra'] +'</b></div>');
                                                    }
                                                 document.getElementById("resp2").innerHTML = "Probabilidad: " + 100 /data.length +"%";
                                                } 
                                            }
                                            
                                         });
                                       }

                          });
                </script>

        </div>
    </body>
</html>
