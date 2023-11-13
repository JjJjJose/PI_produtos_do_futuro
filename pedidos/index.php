<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Fjalla+One&family=League+Gothic&family=Nunito:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="icon" type="img/png" href="../assets/logo.png">
    <link rel="stylesheet" href="./pedido.css">
    <link rel="stylesheet" href="../css/default.css">
    <title>Produtos do Futuro</title>
</head>

<body class="d-flex align-items-center justify-content-center" style="height: 100vh;">
    <div class="container bg-secondary">


        <form action="index.php" method="post" enctype="multipart/form-data">
            <div class="row justify-content-between">
                <div class="col text-center my-3">
                    Escolha uma imagem de exemplo:<br />
                    <input type="file" name="image" id="imageUpload" accept="image/*">
                    <img src="#" alt="Preview" id="preview" style="display: none;">
                </div>


                <div class="col text-center my-3">
                    <input type="text" name="titulo" id="title" placeholder="Titulo" style="width: 500px; font-weight: bold;"><br>
                    <textarea  name="description" id="descricao" placeholder="Descrição" style="width: 500px;" rows="3"></textarea>
                    <br><br>

                    <div class="form-floating mb-2 myRow">
                        <p>Nome do Curso:</p>
                        <select class="selectpicker" data-live-search="true" id="major" name="area">
                            <option>Selecione um</option>
                            <option>Análise e Desenvolvimento de Sistemas</option>
                            <option>Ciência da Computação</option>
                            <option>Engenharia de Software</option>
                            <option>Sistemas de Informação</option>
                            <option>Ciência de Dados</option>
                            <option>Segurança da Informação</option>
                            <option>Redes de Computadores</option>
                            <option>Inteligência Artificial</option>
                            <option>Engenharia Eletrônica</option>
                            <option>Engenharia de Redes</option>
                            <option>Engenharia de Computação</option>
                            <!--  -->
                            <option>Design Gráfico</option>
                            <option>Design de Produto</option>
                            <option>Design de Interiores</option>
                            <option>Design de Moda</option>
                            <option>Design de Jogos</option>
                            <option>Design de Comunicação</option>
                            <option>Design de Experiência do Usuário (UX)</option>
                            <option>Design de Interação</option>
                            <option>Design Industrial</option>
                            <!--  -->
                            <option>Marketing Digital</option>
                            <option>Marketing de Conteúdo</option>
                            <option>Marketing de Mídias Sociais</option>
                            <option>Marketing de Influência</option>
                            <option>Marketing Estratégico</option>
                            <option>Publicidade e Propaganda</option>
                            <option>Comunicação Social com ênfase em Marketing</option>
                            <!--  -->
                            <option>Nutrição</option>
                            <!--  -->
                            <option>Produção de Vídeos</option>
                            <option>Edição de Vídeos</option>
                            <option>Produção de Áudio</option>
                            <option>Animação</option>
                            <option>Fotografia</option>
                            <option>Pós-Produção</option>
                            <!--  -->
                            <option>Publicidade Tradicional</option>
                            <option>Planejamento de Campanhas</option>
                            <option>Estratégia de Anúncios</option>
                            <option>Criatividade Publicitária</option>
                            <option>Marketing Promocional</option>
                            <option>Outdoor e Mídia Impressa</option>
                            <!--  -->
                            <option>Jornalismo de Investigação</option>
                            <option>Jornalismo de Dados</option>
                            <option>Jornalismo Esportivo</option>
                            <option>Jornalismo de Moda</option>
                            <option>Reportagem Política</option>
                            <option>Jornalismo Cultural</option>
                            <!--  -->


                        </select>
                    </div>

                    <div class="form-floating mb-2 myRow'">
                        <p>Áreas de competência:</p>
                        <div id="dummy">
                            <select class="selectpicker" multiple data-live-search="true" id="subareaselect">
                            </select>
                        </div>

                        <div style="display:none" id="ti">
                            <select class="selectpicker" multiple data-live-search="true" id="select_ti" name="subArea">
                                <option>Programação Front-End</option>
                                <option>Programação Back-End</option>
                                <option>Programação Mobile</option>
                                <option>Programação de Software</option>
                                <option>Analista de Banco de Dados</option>
                                <option>Desenvolvedor de Jogos</option>
                            </select>
                        </div>

                        <div style="display:none" id="design">

                            <select class="selectpicker" multiple data-live-search="true" id="select_design" name="subArea">
                                <option>Design Gráfico</option>
                                <option>Design de Interface de Usuário (UI)</option>
                                <option>Design de Experiência do Usuário (UX)</option>
                                <option>Design de Produto</option>
                                <option>Design de Interação</option>
                                <option>Design de Ilustração</option>
                                <option>Design de Embalagens</option>
                                <option>Design de Identidade Visual</option>
                                <option>Design de Sites</option>
                                <option>Design de Aplicativos Móveis</option>
                            </select>
                        </div>


                        <div style="display:none" id="marketing">

                            <select class="selectpicker" multiple data-live-search="true" id="select_marketing" name="subArea">
                                <option>Marketing Digital</option>
                                <option>Marketing de Conteúdo</option>
                                <option>Publicidade Online</option>
                                <option>Estratégia de Marketing</option>
                                <option>Marketing de Mídias Sociais</option>
                                <option>SEO (Otimização de Mecanismos de Busca)</option>
                                <option>E-mail Marketing</option>
                                <option>Marketing de Influência</option>
                            </select>
                        </div>

                        <div style="display:none" id="nutricao">

                            <select class="selectpicker" multiple data-live-search="true" id="select_nutricao" name="subArea">
                                <option>Nutrição Clínica</option>
                                <option>Nutrição Esportiva</option>
                                <option>Nutrição Infantil</option>
                                <option>Nutrição Vegana/Vegetariana</option>
                                <option>Nutrição para Emagrecimento</option>
                                <option>Nutrição para Idosos</option>
                            </select>
                        </div>



                        <div style="display:none" id="audiovisuais" name="subArea">
                            <select style="display:none" id="select_audiovisuais" class="selectpicker" multiple data-live-search="true">
                                <option>Produção de Vídeos</option>
                                <option>Edição de Vídeos</option>
                                <option>Produção de Áudio</option>
                                <option>Animação</option>
                                <option>Fotografia</option>
                                <option>Pós-Produção</option>
                            </select>
                        </div>


                        <div style="display:none" id="publicidade">
                            <select class="selectpicker" multiple data-live-search="true" id="select_publicidade" name="subArea">
                                <option>Publicidade Tradicional</option>
                                <option>Planejamento de Campanhas</option>
                                <option>Estratégia de Anúncios</option>
                                <option>Criatividade Publicitária</option>
                                <option>Marketing Promocional</option>
                                <option>Outdoor e Mídia Impressa</option>
                            </select>
                        </div>


                        <div style="display:none" id="jornalismo">
                            <select class="selectpicker" multiple data-live-search="true" id="select_jornalismo" name="subArea">
                                <option>Jornalismo de Investigação</option>
                                <option>Jornalismo de Dados</option>
                                <option>Jornalismo Esportivo</option>
                                <option>Jornalismo de Moda</option>
                                <option>Reportagem Política</option>
                                <option>Jornalismo Cultural</option>
                            </select>
                        </div>



                    </div>

                    Insira um preço:
                    <input type="number" name="preco" id="Preco">
                    <br><br>

                    Data limite:
                    <input type="date" name="data" id="Datas">
                    <br><br>
                    <a href="../shopping/shopping.php">
                        <button type="button" class="btn btn-warning mx-3">Cancelar</button>
                    </a>
                    <button type="submit" class="btn btn-success mx-3" value="Cadastrar" name="gravar">Confirmar</button>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="./pedidos.js"></script>
</body>

</html>

<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

if (isset($_POST['id_log'])) {
    header("location: ../loginCadastro/index.php");
    exit();
}; 

include "../config.php";
if (isset($_POST['gravar'])) {

    $titulo = $_POST['titulo'];
    $descricao = $_POST['description'];
    $imagem = $_FILES['image'];

    $area = $_POST['area'];
    $subArea = $_POST['subArea'];
    $preco = $_POST['preco'];
    $data = $_POST['data'];


    $_UP['pasta'] = "../assets/";
    $_UP['tamanho'] = 1024 * 1024 * 2; //2mb
    $_UP['extensao'] = ['jpg', 'png', 'jpeg', 'gif'];
    $_UP['renomear'] = true;
   
    $explode = explode('.', $_FILES['image']['name']);
    $aponta = end($explode);
    $extensao = strtolower($aponta);
    if (array_search($extensao, $_UP['extensao']) === false) {
        echo "extensao não aceita";
    };

    if ($_UP['tamanho'] <= $_FILES['image']['size']) {
        echo "arquivo muito grande";
    }
    if ($_UP['renomear'] === true) {
        $nome_final = md5(time()) . ".$extensao";
    } else {
        $nome_final = $_FILES['']['name'];
    }



    if (move_uploaded_file($_FILES['image']['tmp_name'], $_UP['pasta'] . $nome_final)) {
        $url = $_UP['pasta'] . $nome_final;

        $grava = $conn->prepare('INSERT INTO produtos 
                (`id_prod`,`titulo`,`descricao`,`url_prod`,`area_prod`,`subArea_prod`,`preco_prod`,`data_prod`) 
                VALUES (NULL, :titulo, :description, :url_prod, :area, :subArea, :preco, :data_prod )');
        $grava->bindValue(':titulo', $titulo);
        $grava->bindValue(':description', $descricao);
        $grava->bindValue(':url_prod', $url);
        $grava->bindValue(':area', $area);
        $grava->bindValue(':subArea', $subArea);
        $grava->bindValue(':preco', $preco);
        $grava->bindValue(':data_prod', $data);
       
        $grava->execute();
        $errorInfo = $grava->errorInfo();
        if ($errorInfo[0] != '00000') {
            echo "<h1>Erro no banco de dados: " . $errorInfo[2] . "</h1>";
        }
    }
}

?>