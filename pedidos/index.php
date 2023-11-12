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


        <form action="">
            <div class="row justify-content-between">
                <div class="col text-center my-3" style="border: solid 1px red;">
                    <label for="imageUpload">Escolha uma imagem de exemplo:</label><br />
                    <input type="file" name="image" id="imageUpload" accept="image/*">
                    <img src="#" alt="Preview" id="preview" style="display: none;">
                </div>


                <div class="col text-center my-3" style="border: solid 1px blue;">
                    <label for="">
                        <input type="text" name="" id="tituto" placeholder="Titulo" style="width: 500px; font-weight: bold;" ><br>
                        <textarea name="" name="" id="descricao" placeholder="Descrição"  style="width: 500px;" rows="3"></textarea>
                    </label><br><br>

                    <div class="form-floating mb-2 myRow">
                        <p>Nome do Curso:</p>
                        <select class="selectpicker" data-live-search="true" id="major">
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
                            <select class="selectpicker" multiple data-live-search="true" id="select_ti">
                                <option>Programação Front-End</option>
                                <option>Programação Back-End</option>
                                <option>Programação Mobile</option>
                                <option>Programação de Software</option>
                                <option>Analista de Banco de Dados</option>
                                <option>Desenvolvedor de Jogos</option>
                            </select>
                        </div>

                        <div style="display:none" id="design">

                            <select class="selectpicker" multiple data-live-search="true" id="select_design">
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

                            <select class="selectpicker" multiple data-live-search="true" id="select_marketing">
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

                            <select class="selectpicker" multiple data-live-search="true" id="select_nutricao">
                                <option>Nutrição Clínica</option>
                                <option>Nutrição Esportiva</option>
                                <option>Nutrição Infantil</option>
                                <option>Nutrição Vegana/Vegetariana</option>
                                <option>Nutrição para Emagrecimento</option>
                                <option>Nutrição para Idosos</option>
                            </select>
                        </div>



                        <div style="display:none" id="audiovisuais">
                            <select style="display:none" id="select_audiovisuais" class="selectpicker" multiple
                                data-live-search="true">
                                <option>Produção de Vídeos</option>
                                <option>Edição de Vídeos</option>
                                <option>Produção de Áudio</option>
                                <option>Animação</option>
                                <option>Fotografia</option>
                                <option>Pós-Produção</option>
                            </select>
                        </div>


                        <div style="display:none" id="publicidade">
                            <select class="selectpicker" multiple data-live-search="true" id="select_publicidade">
                                <option>Publicidade Tradicional</option>
                                <option>Planejamento de Campanhas</option>
                                <option>Estratégia de Anúncios</option>
                                <option>Criatividade Publicitária</option>
                                <option>Marketing Promocional</option>
                                <option>Outdoor e Mídia Impressa</option>
                            </select>
                        </div>


                        <div style="display:none" id="jornalismo">
                            <select class="selectpicker" multiple data-live-search="true" id="select_jornalismo">
                                <option>Jornalismo de Investigação</option>
                                <option>Jornalismo de Dados</option>
                                <option>Jornalismo Esportivo</option>
                                <option>Jornalismo de Moda</option>
                                <option>Reportagem Política</option>
                                <option>Jornalismo Cultural</option>
                            </select>
                        </div>



                    </div>
                    
                    <label for="">Insira um preço:
                        <input type="number" name="" id="">
                    </label><br><br>

                    <label for="">Data limite:
                        <input type="date" name="" id="">
                    </label><br><br>

                    <button type="button" class="btn btn-warning mx-3">Cancelar</button>
                    <button type="button" class="btn btn-success mx-3">Confirmar</button>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="./pedidos.js"></script>
</body>
</html>

<?php ?>