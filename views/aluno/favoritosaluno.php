
<?php
    require_once '../templates/head.php';
    include_once '../templates/menuinterno.php';
    require_once '../../models/conexao.php';
?>  
<div class="voltar" style="margin-top: 10%;">
  <div class="meu_perfil">
  <ul>
    <li>
    <i class="fa-solid fa-arrow-left" style="margin-top: 0px; display: inline-block;"></i>
    <a href="areaaluno.php" style="display: inline-block; vertical-align: top;">Voltar</a>
  </ul>
  </div>
  </div>
  <br>
<div class="container">
 <div class="group">
  <i class="fa-solid fa-magnifying-glass" id="search"></i>
  <input placeholder="Busque aqui seus cursos salvos." type="search" class="input">
  </div>
  </div>
<div class="container">
    <div id="pagina1" class="page">
      <img src="../../img/oratoria.png">
      <div class="card-content">
        <div class="card-title">teste</div>
        <div class="card-price">Tipo de Curso</div>
      </div>
      <div class="card-description">
        <p>Área do Curso</p>
      </div>
     <br>
      <div class="progress">
        <div class="item">
      <i class="fa-regular fa-bookmark"></i>
      <progress value="50" max="100" id="progress1"></progress>
      </div>
      <div class="item">
      <i class="fa-regular fa-thumbs-up"></i>
      <progress value="50" max="100" id="progress1"></progress>
      </div>
      <div class="item">
      <i class="fa-regular fa-comment-dots"></i>
      <progress value="50" max="100" id="progress1"></progress>
      </div>
      </div>
  </div>
  <div id="pagina1" class="page">
      <img src="../../img/oratoria.png">
      <div class="card-content">
        <div class="card-title">Nome do Curso</div>
        <div class="card-price">Tipo de Curso</div>
      </div>
      <div class="card-description">
        <p>Área do Curso</p>
      </div>
     <br>
      <div class="progress">
        <div class="item">
      <i class="fa-regular fa-bookmark"></i>
      <progress value="50" max="100" id="progress1"></progress>
      </div>
      <div class="item">
      <i class="fa-regular fa-thumbs-up"></i>
      <progress value="50" max="100" id="progress1"></progress>
      </div>
      <div class="item">
      <i class="fa-regular fa-comment-dots"></i>
      <progress value="50" max="100" id="progress1"></progress>
      </div>
      </div>
  </div>
  <div id="pagina1" class="page">
      <img src="../../img/oratoria.png">
      <div class="card-content">
        <div class="card-title">Nome do Curso</div>
        <div class="card-price">Tipo de Curso</div>
      </div>
      <div class="card-description">
        <p>Área do Curso</p>
      </div>
     <br>
      <div class="progress">
        <div class="item">
      <i class="fa-regular fa-bookmark"></i>
      <progress value="50" max="100" id="progress1"></progress>
      </div>
      <div class="item">
      <i class="fa-regular fa-thumbs-up"></i>
      <progress value="50" max="100" id="progress1"></progress>
      </div>
      <div class="item">
      <i class="fa-regular fa-comment-dots"></i>
      <progress value="50" max="100" id="progress1"></progress>
      </div>
      </div>
  </div>
  
  <!--pag 2-->
  <div id="pagina2" class="page">
      <img src="../../img/oratoria.png">
      <div class="card-content">
        <div class="card-title">Nome do Curso</div>
        <div class="card-price">Tipo de Curso</div>
      </div>
      <div class="card-description">
        <p>Área do Curso</p>
      </div>
     <br>
      <div class="progress">
        <div class="item">
      <i class="fa-regular fa-bookmark"></i>
      <progress value="50" max="100" id="progress1"></progress>
      </div>
      <div class="item">
      <i class="fa-regular fa-thumbs-up"></i>
      <progress value="50" max="100" id="progress1"></progress>
      </div>
      <div class="item">
      <i class="fa-regular fa-comment-dots"></i>
      <progress value="50" max="100" id="progress1"></progress>
      </div>
      </div>
  </div>
  <div id="pagina2" class="page">
      <img src="../../img/oratoria.png">
      <div class="card-content">
        <div class="card-title">Nome do Curso</div>
        <div class="card-price">Tipo de Curso</div>
      </div>
      <div class="card-description">
        <p>Área do Curso</p>
      </div>
     <br>
      <div class="progress">
        <div class="item">
      <i class="fa-regular fa-bookmark"></i>
      <progress value="50" max="100" id="progress1"></progress>
      </div>
      <div class="item">
      <i class="fa-regular fa-thumbs-up"></i>
      <progress value="50" max="100" id="progress1"></progress>
      </div>
      <div class="item">
      <i class="fa-regular fa-comment-dots"></i>
      <progress value="50" max="100" id="progress1"></progress>
      </div>
      </div>
  </div>
  <div id="pagina2" class="page">
      <img src="../../img/oratoria.png">
      <div class="card-content">
        <div class="card-title">Nome do Curso</div>
        <div class="card-price">Tipo de Curso</div>
      </div>
      <div class="card-description">
        <p>Área do Curso</p>
      </div>
     <br>
      <div class="progress">
        <div class="item">
      <i class="fa-regular fa-bookmark"></i>
      <progress value="50" max="100" id="progress1"></progress>
      </div>
      <div class="item">
      <i class="fa-regular fa-thumbs-up"></i>
      <progress value="50" max="100" id="progress1"></progress>
      </div>
      <div class="item">
      <i class="fa-regular fa-comment-dots"></i>
      <progress value="50" max="100" id="progress1"></progress>
      </div>
      </div>
  </div>

  </div>
  <!--TESTE--
  <button id="mostrarPagina1" class="showPageButton">Mostrar Página 1</button>
  <button id="mostrarPagina2" class="showPageButton">Mostrar Página 2</button>
  <script>
var buttons = document.querySelectorAll('.showPageButton');
var pages = document.querySelectorAll('.page');


for (var i = 1; i < pages.length; i++) {
  pages[i].style.display = 'none';
}


for (var i = 0; i < buttons.length; i++) {
  buttons[i].onclick = function(index) {
    return function() {
      
      for (var j = 0; j < pages.length; j++) {
        pages[j].style.display = 'none';
      }
      // Exibe apenas a página correspondente ao botão clicado
      pages[index].style.display = 'block';
    };
  }(i); // Captura o valor atual de 'i' no momento da iteração
}
</script>-->
  <style>
 .meu_perfil ul {
  list-style: none;
  display: flex;
}
.meu_perfil li {
  margin-right: 100px; 
  
}
    .meu_perfil {
  overflow: hidden;
  padding-left: 12%;
  padding-top: 0.5%;
  background-color: #63D7E4;
}
    .voltar {
   justify-content: center; 
}
.voltar a{
  text-decoration: none;
  color: #0d0c22;
}
       .titulo_pag h1{
            text-align: left;
            padding-left: 12%;
        }
    
    .container {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
      padding: 20px;
    }

    .card {
  width: 400px;
  height: 380px;  
  margin-bottom: 20px;
  border: 1px solid #ccc;
  border-radius: 8px;
  overflow: hidden;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}


    .card img {
      border-radius: 20px;
      width: 380px;
      padding: 10px;
      height: 200px;
      height: auto;
    }

    .card-content {
  display: flex;
  justify-content: space-between;
  padding: 10px 30px;
 
}

.card-title,
.card-price {
  flex: 1; 
  margin-right: 10px; 
}
.card-price{
  padding-left: 60px;
}

    .card-description p{
      margin-top: 10px;
      padding-left: 30px;
      color: #ccc;
    }

    /*pesquisar*/
.group {
 display: flex;
 line-height: 28px;
 align-items: center;
 position: relative;
 max-width: 450px;
}

.input {
 width: 320px;
 height: 40px;
 line-height: 28px;
 padding: 0 1rem;
 padding-left: 2.5rem;
 border: 2px solid transparent;
 border-radius: 8px;
 outline: none;
 background-color: #f3f3f4;
 color: #0d0c22;
 transition: .3s ease;
}

.input::placeholder {
 color: #9e9ea7;
}

.input:focus, input:hover {
 outline: none;
 border-color: #63D7E4;
 background-color: #fff;
 
}

#search {
 position: absolute;
 left: 1rem;
 width: 1rem;
 height: 1rem;
}

/*icons pregress*/
.progress{
  padding-left: 30px;
  display: flex;
  flex-wrap: wrap;
  
}
.item {
  display: flex;
  align-items: center;
  margin-right: 20px; 
  margin-bottom: 20px;
 
}

.item i {
  margin-right: 10px; 
}
progress {
  width: 100px;
  height: 10px;
  border-radius: 20px;
  -webkit-appearance: none;
}

progress::-webkit-progress-bar {
  background-color: #f2f2f2;
  border-radius: 20px;
}

progress::-webkit-progress-value {
  background-color: #63D7E4;
  border-radius: 20px;
}

progress:hover::after {
  content: attr(value);
  position: absolute;
  top: -30px;
  left: 50%;
  transform: translateX(-50%);
  background-color: rgba(0, 0, 0, 0.8);
  color: #fff;
  padding: 5px 10px;
  border-radius: 5px;
  font-size: 12px;
}

  </style>

  <?php
  require_once '../templates/footer.php';
  ?>