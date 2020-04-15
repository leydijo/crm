
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/styles.css')}}">  
    <title>Document</title>
</head>
<body>
    <div class="main ">

        <header class="encabezado">
            <div class="line"></div>

            <div class="informacion margen"> 
                <img src="../img/cleanrabbit.png" class="logo" alt="cleanrabbit" >
                {{-- <figcaption>CleanRabbit</figcaption> --}}

                <section class="infoEmpresa" >
                    <div class="">
                        <h1 class="namEmpresa">CLEANRABBIT</h1>
                    </div>
                    <div class="">
                        <p>Cll 69a # 4- 12</p>
                    </div>
                    <div class="d">
                        <p>5440588</p>
                    </div>
                </section> 

                <section class="infofactura" >
                    <div class="">
                        <h2>FACTURA</h2>
                    </div>
                    <div class="fecha">
                        <span>Fecha</span> <br>
                        <div class="linea"></div>
                        <span>
                            <time>20/04/2020</time>
                        </span>
                    </div>
                    <div class="numeroFactura fecha">
                        <span>Nº de factura</span> <br>
                        <div class="linea"></div>
                        <span> 12345 </span>
                    
                </div>
                </section> 
            </div> 

         
        </header>

        <section class="condiciones margen">
            <span>Condiciones de pago</span>
        </section>

        <div class="infoEmpresaCliente margen">
            <section class="empresa">

                <table >
                    <thead>
                        <tr>
                            <th >Cliente</th>
                        </tr>
                
                    </thead>
                    
                    <tbody>
                        <tr>
                            <td><div class="linea"></div></td>
                        </tr>
                        <tr>
                            <td>Cleanrabbit</td>
                        </tr>
                        <tr>
                            <td>Cll 69a # 4-12</td>
                           
                        </tr>
                        <tr></tr>
                    </tbody>
                </table>
               
            </section>


            <section class="cliente">

                <table >
                    <thead>
                        <tr>
                            <th >Enviar a:</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Cleanrabbit</td>
                        </tr>
                        <tr>
                            <td>Cll 69a # 4-12</td>
                        </tr>
                        <tr></tr>
                    </tbody>
                </table>
            </section>


            
        </div>
    </div>
    
    

    
</body>
</html>