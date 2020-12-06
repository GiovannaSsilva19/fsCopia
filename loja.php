<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gsouza Eletro </title>
    <link rel="stylesheet" href="css/estilo.css">
    <script src="js/funçoes.js"></script>

</head>

<body>

<?php
        require('menu.html');
   ?>

    <header class="lojas">
        <h1>Nossas lojas</h1>
        <hr>
    </header>
    <table class="table table-danger">
  <thead>
    <tr>
      <th scope="col">Rua/Av</th>
      <th scope="col">Número(n°)</th>
      <th scope="col">Bairro</th>
      <th scope="col">Estado</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      
      <td>Av.Baronesa de Muritiba</td>
      <td>9520</td>
      <td>Parque São Rafael</td>
      <td>Ceará</td>
    </tr>
    <tr>
    <td>Rua 25 de março</td>
      <td>584</td>
      <td>Sé</td>
      <td>Roraima</td>
      
    </tr>
    <tr>
      
    <td>Rua Santa Tereza</td>
      <td>752</td>
      <td>Rio Grande da Serra</td>
      <td>Rio de Janeiro</td>
    </tr>
  </tbody>
</table>
    </table>
    <button onclick="getApi()" type="button" class="btn btn-primary btn-lg btn-block" style="height: 50px;">
    Frete com preçinho que cabe no seu bolso! Clique e veja os locais de entrega:
    </button>

    <div class="container" style="width: 35%">
        <ul class="list-group list-group-flush" id="lista"></ul>
    </div>

    <script>
        
        async function getApi()
        {
            const url = "https://servicodados.ibge.gov.br/api/v1/localidades/estados";
            const response = await fetch(url)
            const dados = await response.json()

            let ul = document.getElementById('lista')
            dados.map(element => ul.innerHTML += `<li class="list-group-item list-group-item-info ">${element.nome}</li>`)
           

        }   
              

    </script>
  
    
   

   <!--Cabeçalho-->
   <?php
        require('footer.html');
    ?>

<!--Fim Cabeçalho-->
</body>
</html>

