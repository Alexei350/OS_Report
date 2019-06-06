<link href="cover.css" rel="stylesheet">

<div class='row justify-content-md-center'>
    <div class='col-lg-5'>
        <div class='py-5 text-center'>
            <img class='d-block mx-auto mb-4' src='/img/index.png' alt='' width='128' height='128'>
            
            <h1 class='cover-heading'>OS Report</h1>
            <p class='lead'>
                O OS Report é um sistema web de gerenciamento<br>
                de ordens de serviço, geração de relatórios.
            </p>
            
            <?php
                if (isset($_SESSION['Nome'])) 
                {
                    echo "  <p class='lead'>
                                Olá {$_SESSION['Nome']}, bem vindo(a) de volta!
                            </p>";
                } 
                else 
                {
                    echo "  <p class='lead'>
                                Registre-se já para aproveitar os benefícios, ou faça login,<br>caso já seja cadastrado.
                            </p>";
                }
            ?>
        </div> 
    </div>
</div>