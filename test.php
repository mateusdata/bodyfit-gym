<!DOCTYPE html>
<html>
<head>
    <title>Exemplo de Requisição JSON</title>
    <style>
        body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        #result {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin: 20px auto;
            max-width: 800px;
            padding: 20px;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<div id="result"></div>

<script>
fetch('./api/index.php') // Substitua pelo caminho correto para seu script PHP
    .then(response => response.json())
    .then(data => {
        // Trate os dados recebidos
        const resultDiv = document.getElementById('result');
        const ul = document.createElement('ul');
        console.log(data);
        const liId = document.createElement('li');
        liId.textContent = `ID: ${data[0].id}`;
        ul.appendChild(liId);

        const liNome = document.createElement('li');
        liNome.textContent = `Nome: ${data[0].nome}`;
        ul.appendChild(liNome);

        const liCarro = document.createElement('li');
        liCarro.textContent = `Carro: ${data[0].carro}`;
        ul.appendChild(liCarro);

        resultDiv.appendChild(ul);
    })
    .catch(error => console.error('Erro na requisição:', error));
</script>

</body>
</html>
