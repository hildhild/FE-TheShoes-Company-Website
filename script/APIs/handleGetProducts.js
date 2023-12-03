function getProducts() {
    const getProductURL = "http://172.16.1.122:8000/product";
    fetch(getProductURL)
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            //console.log(data.data);
            displayProducts(data.data);
        })
        .catch(error => {
            console.error('There was a problem with the fetch operation:', error);
        });
}

getProducts();

function displayProducts(data) {
    const productContainer = document.getElementById("product__container");
    const productCount = data.length;
    const p = document.createElement('p');
    p.textContent = `${productCount} products`;
    productContainer.appendChild(p);
    let html = '';
    data.forEach((value, index) => {
        if (index % 3 === 0) {
            html += '<div class="flex flex-col lg:flex-row lg:gap-[122.5px] mb-[25px]">';
        }
        html += `
        <div class="w-full lg:w-1/3 lg:mb-0 mb-[25px]">
            <a href="./ProductDetail.html?id=${value.product_id}" class="block overflow-hidden">
                <div class="mb-2">
                    <img src="../../images/puma.png" alt="">
                </div>
                <p class="text-base font-semibold">${value.product_name}</p>
                <p class="float-right mt-[10px]">${value.price}</p>
            </a>
        </div>
        `;
        if ((index+1) % 3 === 0) {
            html += '</div>';
        }
    })
    productContainer.innerHTML += html;
}

