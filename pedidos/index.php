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

                    <label for="">Escolha uma área:
                        <select name="area" id="">
                            <option value="">:3</option>
                            <option value="">:3</option>
                            <option value="">:3</option>
                            <option value="">:3</option>
                        </select>
                    </label><br><br>
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
    <script src="./pedidos.js"></script>
</body>

</html>