<!DOCTYPE html> 

<html lang="en"> 

<head> 
    <meta charset="UTF-8"> 
    <meta http-equive="x-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="{{asset('Novocss.css')}}">
    <title>Lista de Produtos</title> 
</head> 

<body> 
    <h1>Lista de Produtos</h1> 

    <table> 
        <tr> 
            <th>Descrição</th> 
            <th>Categoria</th> 
            <th>Preço</th> 
        </tr> 

        @foreach ($produtos as $produto) 
        <tr> 
            @foreach($produto as $produto=>$tabela)
            <td>{{ $tabela }}</td> 
            @endforeach
        </tr> 
        @endforeach 
    </table> 

</body> 

</html> 