<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Iniciaal</title>
</head>
<body>
    <h1>Revisão Javascript</h1>
    <script>
        const name = "Shaden"
        var numero = 10
        let idade = 17
        let meninas = ["Luana", "Maryellen", "Maria Eduarda", "Maria Clara", "Manuela", "Nathally",  
        "Shaden"]
         
        for(let i= 0; i < meninas.length; i++)
    {
        document.write(meninas[i]+"<br/>");
    } 

    let marcelo = {
        "Nome" : "Marcelo",
        "Idade" : "17",
        "Peso" : "62",
        "Altura" : "1.61"
    }

    let pedro = {
        "Nome" : "Pedro",
        "Idade" : "31",
        "Peso" : "70",
        "Altura" : "1.76"
    }
    let yago = {
        "Nome" : "Yago",
        "Idade" : "17",
        "Peso" : "65",
        "Altura" : "1.64"
    }
    let meninos = [marcelo, pedro, yago]
    for (let i = 0; i<meninos.length; i++)
    {
        document.write(meninos[i].Nome+"<br/>");
    } 
        </script>
</body>
</html>