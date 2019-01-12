<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script defer src="https://use.fontawesome.com/releases/v5.6.3/js/all.js" integrity="sha384-EIHISlAOj4zgYieurP0SdoiBYfGJKkgWedPHH4jCzpCXLmzVsw1ouK59MuUtP4a1" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Hello, world!</title>
  </head>

  <body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal">Sistema Simples para Bibliotecas</h5>
        <a class="btn btn-outline-primary mr-1" href="#">Cadastrar</a>
        <a class="btn btn-outline-primary" href="#">Login</a>
    </div>

    <div class="search">
        <div class="input-group input-group-lg">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-lg"><i class="fas fa-search"></i></span>
        </div>
        <input type="text" id="myInput" placeholder="Procure por categorias, livros, autores, ou disponibilidade." class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
    </div>

    <br>

    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Categoria</th>
            <th scope="col">Titulo</th>
            <th scope="col">Autor</th>
            <th scope="col">Informações</th>
            <th scope="col">Status</th>
      </tr>
    </thead>
    <tbody id="myTable">
      <tr>
        <th scope="row">Java</th>
            <td>Java 8 Prático</td>
            <td>Paulo Silveira, Rodrigo Turini</td>
            <td><center><button type="button" class="btn btn-dark" data-toggle="modal" data-target=".infos"><i class="fas fa-book"></i></center></button></td>
            <td><center><button type="button" class="btn btn-outline-success">Disponivel</center></button></td>
      </tr>
      <tr>
            <th scope="row">C#</th>
            <td>Orientação a Objetos em C#</td>
            <td>Everton Coimbra de Araújo</td>
            <td><center><button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-book"></i></center></button></td>
            <td><center><button type="button" class="btn btn-outline-success">Disponivel</center></button></td>
      </tr>
      <tr>
            <th scope="row">UX</th>
            <td>User Experience Design</td>
            <td>Rogério Pereira</td>
            <td><center><button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-book"></i></center></button></td>
            <td><center><button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target=".waitingList">Alugado</center></button></td>
      </tr>
    </tbody>
  </table>
</div>
</div>

<div class="modal fade infos" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Informacoes sobre o livro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
          <div class="container">
            <div class="row">
            <div class="col">
            <div class="col"><img src="imgs/livro1.png" alt="Livro" class="img-thumbnail"></div>
            </div>
            <div class="col">
            <table class="table table-bordered">
              <tbody>
              <tr>
              <tr>
              <th>Titulo</th>
              <td>Java 8 Prático</td>
              </tr>
              <tr>
              <th>Autor</th>
              <td>Paulo Silveira, Rodrigo Turini</td>
              </tr>
              <tr>
            <th>Descrição</th>
            <td><p align="justify">Você é um programador com boa fluência em Java? Está na hora de dar mais um passo.
              Quase 20 anos após sua primeira versão, um novo Java surge com novidades importantes. Entre os principais recursos, a linguagem recebe default methods, method references e lambdas. São conceitos simples, mas que trazem importantes possibilidades. Durante o livro, exploraremos esses e outros avanços. Sempre com exemplos práticos e apresentando onde utilizá-los, migrando o código legado do dia a dia para o novo paradigma funcional do Java 8.<br>
              Com esse tripé de conceitos, a API conseguiu evoluir de uma maneira interessante. Os pacotes java.util.stream e java.util.function serão explorados com profundidade, apresentando formas sucintas para trabalhar com coleções e outros tipos de dados. Streams e Collectors farão parte da sua rotina e serão tão essenciais nas suas aplicações quanto já são as Collections e o java.io.<br>
              Por último, veremos como a nova API de java.time vem mudar da água pro vinho a forma de trabalhar com datas e horários.</p></td>
            </tr>
            <tr>
            <th>Paginas</th>
            <td>151</td>
            </tr>
            <th>Categoria</th>
            <td>Java</td>
            </tr>
            </tbody>
            </table>
      
            </div>
            </div>
            </div>
            </div>
  </div>
  </div>
</div>



<div class="modal fade waitingList" id="modalWaitingList" tabindex="-1" role="dialog" aria-labelledby="waitingListLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="waitingListLabel">Lista de Espera</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        No momento há 10 pessoas na lista de espera deste livro.
        <br>
        Você deseja entrar na lista de espera?
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-success">Sim</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Não</button>
      </div>

    </div>
  </div>
</div>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

  </body>

</html>