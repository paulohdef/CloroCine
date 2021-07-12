<?php
include 'cabecalho.php';
?>

<body>

<nav class="nav-extended purple lighten-3">

    <div class="nav-wrapper">

      <ul id="nav-mobile" class="right">

          <li><a href="/">Galeria</a></li>

          <li class="active"><a href="/novo">Cadastrar</a></li>

      </ul>

    </div>

    <div class="nav-header center">

      <h1>CLOROCINE</h1>

    </div>      
      
    <div class="nav-content">
      <ul class="tabs tabs-transparent  purple darken-1">
        <li class="tab"><a class="active" href="/galeria">Todos</a></li>
        <li class="tab"><a  href="#test2">Assistidos</a></li>
        <li class="tab "><a href="/favoritos">Favoritos</a></li>
      
      </ul>
    </div>

  </nav>
  
  <div class="row">
  <form  method="POST" enctype="multipart/form-data">
    <div class="col s6 offset-s3">
        <div class="card">
            <div class="card-content">

                <span class="card-title">Cadastrar Filme</span>

                <!-- input titulo -->

                <div class="row">
                    <div class="input-field col s12">
                        <input id="titulo" type="text" class="validate" name="titulo" required>
                        <label for="titulo">Título do Filme</label>
                    </div>
                </div>

                <!-- input sinopse -->

                <div class="row">
                    
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea name="sinopse" id="sinopse" class="materialize-textarea"></textarea>
                                <label for="sinopse">Sinopse</label>
                            </div>
                        </div>
                   
                </div>

                <!-- input nota -->

                <div class="row">
                    <div class="input-field col s4">
                        <input id="nota" name="nota" type="number" step=".1" min=0 max=10 class="validate" required>
                        <label for="nota">Nota</label>
                    </div>
                </div>

                 <!-- input capa -->
                
                <form action="#">
                    <div class="file-field input-field">
                        <div class="btn purple lighten-2">
                            <span>Capa</span>
                            <input class="col s1"  type="file" name="poster_file">
                            <br>
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" name="poster">
                        </div>
                    </div>
                </form>
            

            </div>
            <div class="card-action">
                <a class="btn waves-effect waves-light grey" href="/">Cancelar</a>
                <button type="submit" class="waves-effect waves-light btn purple">Confirmar</button>
            </div>
        </div>
    </div>
  </form>
  </div>

    
</body>
</html>