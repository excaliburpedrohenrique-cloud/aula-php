<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cities</title>
</head>
<body>
    <h1>Primeiras Cidades</h1>
    
    
    <table border="1">
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>PAÍS</th>
            <th>POPULAÇÃO</th>
            <th>DISTRITO</th>
        </tr>
        @foreach($cities as $city)
        <tr>
            <td>{{$city->ID}}</td>
            <td>{{$city->NAME}}</td>
            <td>{{$city->COUNTRYCODE}}</td>
            <td>{{$city->POPULATION}}</td>
            <td>{{$city->DISTRICT}}</td>
        </tr>
        @endforeach
    </table>



</body>
</html>