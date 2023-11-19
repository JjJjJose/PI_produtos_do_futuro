

document.addEventListener('DOMContentLoaded', () => {
    const productArea = document.getElementById('productArea');

    // Função para criar e adicionar um card na área de produtos
  function addProductCard(product: any) {
    const card = document.createElement('div');
    card.className = 'card mb-3';

    const row = document.createElement('div');
    row.className = 'row g-0';

    const imgCol = document.createElement('div');
    imgCol.className = 'col-md-4';

    const img = document.createElement('img');
    img.src = product.url_prod;
    img.alt = product.titulo;
    img.className = 'img-fluid';

    imgCol.appendChild(img);

    const textCol = document.createElement('div');
    textCol.className = 'col-md-8';

    const cardBody = document.createElement('div');
    cardBody.className = 'card-body';

    const title = document.createElement('h5');
    title.className = 'card-title';
    title.textContent = product.titulo;

    const description = document.createElement('p');
    description.className = 'card-text';
    description.textContent = product.descricao || ''; // Evita que seja nulo

    const price = document.createElement('p');
    price.className = 'card-text';
    price.innerHTML = `<small class="text-muted">Preço: ${product.preco}</small>`;

    cardBody.appendChild(title);
    cardBody.appendChild(description);
    cardBody.appendChild(price);

    textCol.appendChild(cardBody);

    row.appendChild(imgCol);
    row.appendChild(textCol);

    card.appendChild(row);

    productArea?.appendChild(card);
    
    
    card.className = 'card mb-3';
    card.innerHTML = `
        <div class="row g-0">
            <div class="col-md-4">
                <img src="${product.url_prod}" alt="${product.titulo}" class="img-fluid">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">${product.titulo}</h5>
                    ${product.descricao ? `<p class="card-text">${product.descricao}</p>` : ''}
                    <p class="card-text"><small class="text-muted">Preço: ${product.preco}</small></p>
                </div>
            </div>
        </div>
    `;
    productArea?.appendChild(card);
}

    // Função para obter os produtos do servidor e exibi-los
    function fetchAndDisplayProducts() {
        const xhr = new XMLHttpRequest();
        xhr.open('GET', 'get_products.php', true);

        xhr.onreadystatechange = () => {
            
            if (xhr.readyState === 4 && xhr.status === 200) {
                const products = JSON.parse(xhr.responseText);
                
                // Limpe a área de produtos antes de adicionar os novos cards
                productArea!.innerHTML = '';

                // Adicione cada produto como um card
                products.forEach((product: any) => {
                    addProductCard(product);
                });
            }
        };

        xhr.send();
    }

    // Chame a função para obter e exibir os produtos quando a página carregar
    fetchAndDisplayProducts();
});
