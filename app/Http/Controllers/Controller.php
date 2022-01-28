<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function busca(Request $request){
        $data = array();
        $populacao1=null;
        $populacao2=null;
        $populacao3=null;
        $populacao4=null;
        $populacao5=null;
        $populacao6=null;
        $incremeto1=null;
        $incremeto2=null;
        $incremeto3=null;
        $incremeto4=null;
        $incremeto5=null;
        $incremeto6=null;
        $nascimento1=null;
        $nascimento2=null;
        $nascimento3=null;
        $nascimento4=null;
        $nascimento5=null;
        $nascimento6=null;
        $obito1=null;
        $obito2=null;
        $obito3=null;
        $obito4=null;
        $obito5=null;
        $obito6=null;

        if($request->input('regiao1') == 1){
            $data[] = 1;
            $json1 = json_decode(file_get_contents('https://servicodados.ibge.gov.br/api/v1/projecoes/populacao/1'), true);
            $populacao1 = (isset($json1['projecao']['populacao']) ? $json1['projecao']['populacao']:'Não divulgado os dados.');
            $incremeto1 = (isset($json1['projecao']['periodoMedio']['incrementoPopulacional']) ? $json1['projecao']['periodoMedio']['incrementoPopulacional']:'Não divulgado os dados.');
            $nascimento1 = (isset($json1['projecao']['periodoMedio']['nascimento']) ? $json1['projecao']['periodoMedio']['nascimento']:'Não divulgado os dados.');
            $obito1 = (isset($json1['projecao']['periodoMedio']['obito']) ? $json1['projecao']['periodoMedio']['obito']:'Não divulgado os dados.');
        }
        if($request->input('regiao2') == 2){
            $data[] = 2;
            $json2 = json_decode(file_get_contents('https://servicodados.ibge.gov.br/api/v1/projecoes/populacao/2'), true);
            $populacao2 = (isset($json2['projecao']['populacao']) ? $json2['projecao']['populacao']:'Não divulgado os dados.');
            $incremeto2 = (isset($json2['projecao']['periodoMedio']['incrementoPopulacional']) ? $json2['projecao']['periodoMedio']['incrementoPopulacional']:'Não divulgado os dados.');
            $nascimento2 = (isset($json2['projecao']['periodoMedio']['nascimento']) ? $json2['projecao']['periodoMedio']['nascimento']:'Não divulgado os dados.');
            $obito2 = (isset($json2['projecao']['periodoMedio']['obito']) ? $json2['projecao']['periodoMedio']['obito']:'Não divulgado os dados.');
        }
        if($request->input('regiao3') == 3){
            $data[] = 3;    
            $json3 = json_decode(file_get_contents('https://servicodados.ibge.gov.br/api/v1/projecoes/populacao/3'), true);
            $populacao3 = (isset($json3['projecao']['populacao']) ? $json3['projecao']['populacao']:'Não divulgado os dados.');
            $incremeto3 = (isset($json3['projecao']['periodoMedio']['incrementoPopulacional']) ? $json3['projecao']['periodoMedio']['incrementoPopulacional']:'Não divulgado os dados.');
            $nascimento3 = (isset($json3['projecao']['periodoMedio']['nascimento']) ? $json3['projecao']['periodoMedio']['nascimento']:'Não divulgado os dados.');
            $obito3 = (isset($json3['projecao']['periodoMedio']['obito']) ? $json3['projecao']['periodoMedio']['obito']:'Não divulgado os dados.');
        }
        if($request->input('regiao4') == 4){
            $data[] = 4;
            $json4 = json_decode(file_get_contents('https://servicodados.ibge.gov.br/api/v1/projecoes/populacao/4'), true);
            $populacao4 = (isset($json4['projecao']['populacao']) ? $json4['projecao']['populacao']:'Não divulgado os dados.');
            $incremeto4 = (isset($json4['projecao']['periodoMedio']['incrementoPopulacional']) ? $json4['projecao']['periodoMedio']['incrementoPopulacional']:'Não divulgado os dados.');
            $nascimento4 = (isset($json4['projecao']['periodoMedio']['nascimento']) ? $json4['projecao']['periodoMedio']['nascimento']:'Não divulgado os dados.');
            $obito4 = (isset($json4['projecao']['periodoMedio']['obito']) ? $json4['projecao']['periodoMedio']['obito']:'Não divulgado os dados.');
        }
        if($request->input('regiao5') == 5){
            $data[] = 5;       
            $json5 = json_decode(file_get_contents('https://servicodados.ibge.gov.br/api/v1/projecoes/populacao/5'), true);
            $populacao5 = (isset($json5['projecao']['populacao']) ? $json5['projecao']['populacao']:'Não divulgado os dados.');
            $incremeto5 = (isset($json5['projecao']['periodoMedio']['incrementoPopulacional']) ? $json5['projecao']['periodoMedio']['incrementoPopulacional']:'Não divulgado os dados.');
            $nascimento5 = (isset($json5['projecao']['periodoMedio']['nascimento']) ? $json5['projecao']['periodoMedio']['nascimento']:'Não divulgado os dados.');
            $obito5 = (isset($json5['projecao']['periodoMedio']['obito']) ? $json5['projecao']['periodoMedio']['obito']:'Não divulgado os dados.');
        }
        if($request->input('regiao6') == 6){
            $data[] = 6;       
            $json6 = json_decode(file_get_contents('https://servicodados.ibge.gov.br/api/v1/projecoes/populacao/0'), true);
            $populacao6 = (isset($json6['projecao']['populacao']) ? $json6['projecao']['populacao']:'Não divulgado os dados.');
            $incremeto6 = (isset($json6['projecao']['periodoMedio']['incrementoPopulacional']) ? $json6['projecao']['periodoMedio']['incrementoPopulacional']:'Não divulgado os dados.');
            $nascimento6 = (isset($json6['projecao']['periodoMedio']['nascimento']) ? $json6['projecao']['periodoMedio']['nascimento']:'Não divulgado os dados.');
            $obito6 = (isset($json6['projecao']['periodoMedio']['obito']) ? $json6['projecao']['periodoMedio']['obito']:'Não divulgado os dados.');
        }

        return view("resultado", compact(
            'populacao1',
            'populacao2',
            'populacao3',
            'populacao4',
            'populacao5',
            'populacao6',
            'incremeto1',
            'incremeto2',
            'incremeto3',
            'incremeto4',
            'incremeto5',
            'incremeto6',
            'nascimento1',
            'nascimento2',
            'nascimento3',
            'nascimento4',
            'nascimento5',
            'nascimento6',
            'obito1',
            'obito2',
            'obito3',
            'obito4',
            'obito5',
            'obito6',
        ));
     }
}
