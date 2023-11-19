<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <div class="col-md-3 mb-2 mb-md-0">
            <a href="#" class="d-inline-flex link-body-emphasis text-decoration-none">
                <svg class="bi" width="40" height="32" role="img" aria-label="logo">
                    <img src="../assets/logo.png" style="width: 40px;" alt="" srcset="">
                </svg>
            </a>
        </div>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="#" class="nav-link px-2">Inicio</a></li>
            <li><a href="#" class="nav-link px-2">Serviços</a></li>
            <li><a href="#" class="nav-link px-2">FAQS</a></li>
            <li><a href="#" class="nav-link px-2">Sobre</a></li>
        </ul>

        <div class="col-md-3 text-end">
            <a href=""><button type="button" class="btn btn-outline-primary me-2">Login</button></a>
            <a href=""><button type="button" class="btn btn-primary">Cadastro</button></a>
        </div>
    </header>

    <!-- barra de pesquisas
    <section>
        <div class="container mt-4">
            <h4>Barra de pesquisas</h4>
            <input type="text" class="form-control" name="searchInput" id="searchInput" placeholder="Procurando algo em especifico?">
            <div id="searchResults" class="mt-3"></div>
        </div>

    </section>-->

    <main class="d-flex">
        <div class="container">
            <div class="row">
                <?php
                include "../config.php";
                $stmt = $conn->prepare("SELECT * FROM produtos");
                $stmt->execute();
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

                // Certifique-se de que $result está definido e não é null
                if (isset($result) && !is_null($result)) {
                    foreach ($result as $produto) :
                ?>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="<?php echo $produto['url_prod']; ?>" class="card-img-top" alt="Imagem do Produto">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $produto['titulo']; ?></h5>
                                    <p class="card-text"><?php echo $produto['descricao']; ?></p>
                                    <p class="card-text">Preço: <?php echo $produto['preco_prod']; ?></p>
                                    <!-- Adicione mais detalhes conforme necessário -->
                                    <a href="#" class="btn btn-primary">Comprar</a>
                                </div>
                            </div>
                        </div>
                <?php
                    endforeach;
                } else {
                    // Exiba uma mensagem ou faça algo apropriado se $result não contiver dados
                    echo '<p>Nenhum produto encontrado.</p>';
                }
                ?>
            </div>
        </div>

    </main>




    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
            <a href="" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
                <svg class="bi" width="30" height="24">
                    <img src="../assets/logo.png" style="width: 40px;">
                </svg>
            </a>
            <span class="mb-3 mb-md-0 text-body-secondary">© 2023 Produtos do Futuro</span>
        </div>
    </footer>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
