<?php

namespace App\Http\Controllers;

class UserController extends Controller
{

    public function Usuário ($name, $lastname) 
    {  
    return view('Usuário')->with('name', $name)->with('lastname', $lastname);
    }

    public function Operações ($conta, $a, $b)
    
    {
        switch ($conta)
        {
            case'soma':
            $resultado = $a + $b;
            break;

            case'subtração':
            $resultado = $a - $b;
            break;

            case'multiplicação':
            $resultado = $a * $b;
            break;

            case'divisão':
            $resultado = $b != 0 ? $a / $b: 'Não é possível dividir por zero';
            break;
        }

        return view('Operações')->with ('conta', $conta)->with ('a', $a)->with ('b', $b)->with ('resultado', $resultado);
    }

    public function listadeProdutos(){

        $produtos = [ 

            ['descricao' => 'Whey Protein', 'categoria' => 'Sumplemento', 'preco' => 90], 

            ['descricao' => 'Mochila', 'categoria' => 'Objeto', 'preco' => 130], 

            ['descricao' => 'Creatina', 'categoria' => 'Suplemento', 'preco' => 70], 

            ['descricao' => 'Corda para pular', 'categoria' => 'objeto', 'preco' => 20], 

            ['descricao' => 'Garrafa (500ml)', 'categoria' => 'objeto', 'preco' => 30], 

            ['descricao' => 'Headset com microfone', 'categoria' => 'Aparelho', 'preco' => 55],
            
            ['descricao' => 'Caixa de som para Pc', 'categoria' => 'Aparelho', 'preco' => 135],

            ['descricao' => 'Mouse Gamer', 'categoria' => 'Aparelho', 'preco' => 125],

            ['descricao' => 'Mouse pad', 'categoria' => 'Objeto', 'preco' => 159],

            ['descricao' => 'Creme Hidratante', 'categoria' => 'Produto de beleza', 'preco' => 35],

            ['descricao' => 'Amaciante', 'categoria' => 'Limpeza', 'preco' => 25],

            

        ]; 

 

        return view('picanha', ['produtos' => $produtos]); 

    } 

    public function Estudante($name,$lastaname,$age,$rm,$gender,$address)
    {
        return view('Estudante')->with ('name', $name)->with ('lastname', $lastaname)->with ('age', $age)->with ('rm', $rm)->with('gender', $gender)->with('address', $address);
    }
    
}
