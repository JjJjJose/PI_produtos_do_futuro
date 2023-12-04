document.addEventListener('DOMContentLoaded', function () {
    var productArea = document.getElementById('productArea');
    // Função para criar e adicionar um card na área de produtos
    function addProductCard(product) {
        var card = document.createElement('div');
        card.className = 'card mb-3';
        var row = document.createElement('div');
        row.className = 'row g-0';
        var imgCol = document.createElement('div');
        imgCol.className = 'col-md-4';
        var img = document.createElement('img');
        img.src = product.url_prod;
        img.alt = product.titulo;
        img.className = 'img-fluid';
        imgCol.appendChild(img);
        var textCol = document.createElement('div');
        textCol.className = 'col-md-8';
        var cardBody = document.createElement('div');
        cardBody.className = 'card-body';
        var title = document.createElement('h5');
        title.className = 'card-title';
        title.textContent = product.titulo;
        var description = document.createElement('p');
        description.className = 'card-text';
        description.textContent = product.descricao || ''; // Evita que seja nulo
        var price = document.createElement('p');
        price.className = 'card-text';
        price.innerHTML = "<small class=\"text-muted\">Pre\u00E7o: ".concat(product.preco, "</small>");
        cardBody.appendChild(title);
        cardBody.appendChild(description);
        cardBody.appendChild(price);
        textCol.appendChild(cardBody);
        row.appendChild(imgCol);
        row.appendChild(textCol);
        card.appendChild(row);
        productArea === null || productArea === void 0 ? void 0 : productArea.appendChild(card);
        card.className = 'card mb-3';
        card.innerHTML = "\n        <div class=\"row g-0\">\n            <div class=\"col-md-4\">\n                <img src=\"".concat(product.url_prod, "\" alt=\"").concat(product.titulo, "\" class=\"img-fluid\">\n            </div>\n            <div class=\"col-md-8\">\n                <div class=\"card-body\">\n                    <h5 class=\"card-title\">").concat(product.titulo, "</h5>\n                    ").concat(product.descricao ? "<p class=\"card-text\">".concat(product.descricao, "</p>") : '', "\n                    <p class=\"card-text\"><small class=\"text-muted\">Pre\u00E7o: ").concat(product.preco, "</small></p>\n                </div>\n            </div>\n        </div>\n    ");
        productArea === null || productArea === void 0 ? void 0 : productArea.appendChild(card);
    }
    // Função para obter os produtos do servidor e exibi-los
    function fetchAndDisplayProducts() {
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'get_products.php', true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var products = JSON.parse(xhr.responseText);
                // Limpe a área de produtos antes de adicionar os novos cards
                productArea.innerHTML = '';
                // Adicione cada produto como um card
                products.forEach(function (product) {
                    addProductCard(product);
                });
            }
        };
        xhr.send();
    }
    // Chame a função para obter e exibir os produtos quando a página carregar
    fetchAndDisplayProducts();
});
