<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use GuzzleHttp\Client; 

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function busca(Request $request){
        $data = array();
        if($request->input('regiao1') == 1){
            $data[] = 1;
            $json1 = json_decode(file_get_contents('https://servicodados.ibge.gov.br/api/v1/projecoes/populacao/1'), true);

        }
        if($request->input('regiao2') == 2){
            $data[] = 2;
            $json2 = json_decode(file_get_contents('https://servicodados.ibge.gov.br/api/v1/projecoes/populacao/2'), true);

        }
        if($request->input('regiao3') == 3){
            $data[] = 3;    
            $json3 = json_decode(file_get_contents('https://servicodados.ibge.gov.br/api/v1/projecoes/populacao/3'), true);

        }
        if($request->input('regiao4') == 4){
            $data[] = 4;
            $json4 = json_decode(file_get_contents('https://servicodados.ibge.gov.br/api/v1/projecoes/populacao/4'), true);

        }
        if($request->input('regiao5') == 5){
            $data[] = 5;       
            $json5 = json_decode(file_get_contents('https://servicodados.ibge.gov.br/api/v1/projecoes/populacao/5'), true);

        }
        if($request->input('regiao5') == 6){
            $data[] = 6;       
            $json6 = json_decode(file_get_contents('https://servicodados.ibge.gov.br/api/v1/projecoes/populacao/0'), true);

        }
        
        foreach($data as $regiao){
            switch($regiao){
                case 1: 
                    echo "A população da regiao norte é: ";print_r($json1['projecao']['populacao']);
                break;
                case 2: 
                    echo "A população da regiao nordeste é: ";print_r($json2['projecao']['populacao']);
                break;
                case 3: 
                    echo "A população da regiao Suldeste é: ";print_r($json3['projecao']['populacao']);
                break;
                case 4: 
                    echo "A população da regiao Sul é: ";print_r($json4['projecao']['populacao']);
                break;
                case 5: 
                    echo "A população da regiao Centro-Oeste é: ";print_r($json5['projecao']['populacao']);
                break;
                case 6: 
                    echo "A população de todo o Brasil é: ";print_r($json6['projecao']['populacao']);
                break;

            }
        }


     }
}
