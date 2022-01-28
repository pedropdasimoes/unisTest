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
                flex-direction: column;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                width: 100vw;
                border: 0px;
                margin: 0px;
                background-color: #c4e9f8;
            }
            h1{
               margin: 50px 0px;
               background-color: rgba(6, 159, 219, 0.8);
               color: #FFF;
               border-radius: 10px;
               padding: 20px 20px;
               width: 80%;
               text-align: center;
               box-shadow: 0px 10px 20px rgb(70, 70, 70);
            }
            form{
               width: 80%;
               display: flex;
               justify-content: center;
               align-items: center;
               flex-direction: column;
               padding: 30px 0px;
               background-color: rgba(255, 255, 255, 0.8);
               border-radius: 10px;
               margin-bottom: 50px;
               box-shadow: 0px 5px 10px rgb(70, 70, 70);
            }
            .regioes{
               display: flex;
               flex-wrap: wrap;
               justify-content: center;
               align-items: center;
               width: 80%;
               margin: auto;
               border-radius: 5px;
               padding: 10px;
            }
            .regioes label{
               background-color: rgb(255, 255, 255);
               border: solid 1px rgba(99, 99, 99, 0.6);
               padding: 10px 5px;
               border-radius: 10px;
               margin: 10px 5px;
               width: 130px;
               display: flex;
               justify-content: center;
               align-items: center;
               flex-direction: column;
            }
            .regioes label input{
               margin-top: 5px;
            }
            .btn{
               padding: 5px 10px;
               font-size: 1.2em;
               margin-top: 40px;
               background-color: rgba(6, 159, 219, 0.8);
               border-radius: 5px;
               border: 1px solid rgba(0, 112, 156, 0.8);
               box-shadow: 0px 2px 2px #000;
               color: #fff;
            }
        </style>
    </head>
    <body class="antialiased">

      <h1>De qual região você gostaria de saber os dados?</h1>
        
      <form method="POST" action="{{ route('regioes.busca') }}">
         @csrf

         <div class="regioes">
            <label for="regiao1">
               Norte
               <br>
               <input type="checkbox" name="regiao1" id="regiao1" value="1">
            </label>
            <label for="regiao2">
               Nordeste
               <br>
               <input type="checkbox" name="regiao2" id="regiao2" value="2">
            </label>
            <label for="regiao3">
               Sudeste
               <br>
               <input type="checkbox" name="regiao3" id="regiao3" value="3">
            </label>
            <label for="regiao4">
               Sul
               <br>
               <input type="checkbox" name="regiao4" id="regiao4" value="4">
            </label>
            <label for="regiao5">
               Centro-Oeste
               <br>
               <input type="checkbox" name="regiao5" id="regiao5" value="5">
            </label>
            <label for="regiao6">
               Todo Brasil
               <br>
               <input type="checkbox" name="regiao6" id="regiao6" value="6">
            </label>
         </div>
         <button class="btn">Pesquisar</button>
      </form>

    </body>
</html>
