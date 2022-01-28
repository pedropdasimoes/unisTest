<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            
            body {
                font-family: 'Nunito', sans-serif;
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                width: 100%;
                margin: auto;
                border: 0px;
                margin: 0px;
                background-color: #c4e9f8;
            }

            .mostraRegiao{
                margin: 10px 25px;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                padding: 5px 20px;                
                background-color: rgba(255, 255, 255, 0.8);
                border-radius: 10px;
                width: 25%; 
                box-shadow: 0px 5px 10px rgb(70, 70, 70);
            }

            .mostraRegiao h3{
               background-color: rgba(6, 159, 219, 0.8);
               color: #FFF;
               border-radius: 10px;
               padding: 5px 0px;
               width: 80%;
               text-align: center;
               box-shadow: 0px 5px 10px rgb(70, 70, 70);
            }
            .mostraRegiao p{   
                text-align: center;
            }

            @media (max-width: 800px){
                .mostraRegiao{
                    width: 60%;
                }
            }

        </style>


    </head>
    <body class="divBody">
      
            @isset($populacao1)
            <div class="mostraRegiao">
                <h3>Regiao Norte</h3>
                <p>População: {{$populacao1}}</p>                
                <p>Incremento Populacional: {{$incremeto1}}</p>
                <p>Nascimento: {{$nascimento1}}</p>
                <p>Obito: {{$obito1}}</p>
            </div>
            @endisset
            @isset($populacao2)
            <div class="mostraRegiao">
                <h3>Regiao Nordeste</h3>
                <p>População: {{$populacao2}}</p>                
                <p>Incremento Populacional: {{$incremeto2}}</p>
                <p>Nascimento: {{$nascimento2}}</p>
                <p>Obito: {{$obito2}}</p>
            </div>
            @endisset
            @isset($populacao3)
            <div class="mostraRegiao">
                <h3>Regiao Sudeste</h3>
                <p>População: {{$populacao3}}</p>                
                <p>Incremento Populacional: {{$incremeto3}}</p>
                <p>Nascimento: {{$nascimento3}}</p>
                <p>Obito: {{$obito3}}</p>
            </div>
            @endisset
            @isset($populacao4)
            <div class="mostraRegiao">
                <h3>Regiao Sul</h3>
                <p>População: {{$populacao4}}</p>                
                <p>Incremento Populacional: {{$incremeto4}}</p>
                <p>Nascimento: {{$nascimento4}}</p>
                <p>Obito: {{$obito4}}</p>
            </div>
            @endisset
            @isset($populacao5)
            <div class="mostraRegiao">
                <h3>Regiao Centro-Oeste</h3>
                <p>População: {{$populacao5}}</p>                
                <p>Incremento Populacional: {{$incremeto5}}</p>
                <p>Nascimento: {{$nascimento5}}</p>
                <p>Obito: {{$obito5}}</p>
            </div>
            @endisset
            @isset($populacao6)
            <div class="mostraRegiao">
                <h3>Brasil</h3>
                <p>População: {{$populacao6}}</p>                
                <p>Incremento Populacional: {{$incremeto6}}</p>
                <p>Nascimento: {{$nascimento6}}</p>
                <p>Obito: {{$obito6}}</p>
            </div>
            @endisset

    </body>
</html>
