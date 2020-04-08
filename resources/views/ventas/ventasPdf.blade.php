
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
    <div class="main">

        <div>
            <h1 class="welcome">CleanRabbit</h1>
            <address>Cll 69a # 4-12</address>
            <span>www.cleanrabbit.com.co, <strong>info@cleanrabbit.com.co</strong></span>
            <p>5440588</p>
        </div>

        {{-- <figure>
            <img src="" alt="Trulli" style="width:100%">
            <figcaption>Logo</figcaption>
        </figure> --}}

        <div class="informacion">
           
                <div class="empresa">
    
                    <table >
                        <thead>
                            <tr>
                                <th >Establecimiento</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Mark</td>
                            </tr>
                            <tr>
                                <td>otto</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
    
    
    
       
                
                <div class="cliente">
                    
                    <table>
                        <thead>
                            <tr>
                                <th>Enviar A:</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ventausers as $ventauser)
                                <tr>
                                    <td>{{$ventauser->fullname}}</td>
                                </tr>
                            @endforeach
                          
                            
                        </tbody>
                    </table>
                </div>
          

        </div>
    </div>
    

    
</body>
</html>