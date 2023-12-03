var proId = window.location.search.slice(4);

function getProductDetail() {
    const getProductURL = "http://localhost:8000/product/";
    fetch(getProductURL + proId)
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            console.log(data.data);
            displayProductDetail(data.data);
            displayComments(data.data);
        })
        .catch(error => {
            console.error('There was a problem with the fetch operation:', error);
        });
}

getProductDetail();

function displayProductDetail(data) {
    const detailContainer = document.getElementById("product-detail-container");
    let html = "";
    html += `<p class="text-2xl font-semibold">${data.product_name}</p>`;
    html += `<p class="text-2xl font-semibold">${data.price}</p>`;
    html += `<p class="text-base"><span class="font-semibold">Colour </span>${data.color}</p>`;
    html += `<p class="text-base font-semibold">Size</p>`;

    html += `<div class="flex flex-row flex-wrap text-base gap-[10px]">`;

    const sizes = data.combined_sizes.split(',');
    sizes.forEach((val, index) => {
        html += `
        <div class="h-[32px] w-[48px] bg-[#d9d9d9] flex justify-center items-center cursor-pointer hover:bg-[#a9a9a9]">${val}</div>
        `
    })
    html += `</div>`;
    detailContainer.innerHTML = html;

    const desc = document.getElementById("product-desc");
    let descHtml = "";

    descHtml + `<h2 class="text-2xl font-semibold mt-[20px]">Product Description</h2>`;
    descHtml += `<p class="text-base font-semibold mt-[20px]">${data.product_name}</p>`;
    descHtml += `<p class="text-sm text-justify mt-[20px]">${data.description}</p>`;
    desc.innerHTML = descHtml;
}

function displayComments(data) {
    const reviews = document.getElementById("reviews");
    let html = "";
    html += `<h2 class="text-2xl font-semibold mt-[20px] flex">Reviews (${data.comments.length})</h2>`;

    html += `
    <div class="my-[20px]">
        <textarea name="review-content" id="review-content" rows="3" class="w-full border-gray border-2 rounded-lg p-[8px]"></textarea>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-1/8">
            Write a Review
        </button>
    </div>
    `;

    data.comments.forEach((val, index) => {
        html += `
        <div class="review-item py-[20px]">
        <div class="review-info flex">
            <p class="review-own text-base font-semibold mt-[5px] mr-[10px]">${val.user_name}</p>
            <p class="review-date text-base font-semibold mt-[5px]"> - ${val.created_at}</p>
        </div>
        <p class="text-sm text-justify mt-[5px]">
            ${val.content}
        </p>
    </div>
        `;
    });
    reviews.innerHTML = html;
}