function getAllOrders() {
    const getOrdersURL = `http://localhost:8000/order/order-list`; 

    fetch(getOrdersURL, {
        method: 'GET'
    })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            console.log(data.data);
            displayMyOrders(data.data);
        })
        .catch(error => {
            console.error('There was a problem with the fetch operation:', error);
        });
}

getAllOrders();
function displayMyOrders(orders) {
    const myOrdersContainer = document.getElementById('my-orders-container');
    const totalOrders = document.getElementById("total-orders");
    const shippingOrders = document.getElementById("shipping-orders");
    const rejectedOrders = document.getElementById("rejected-orders");
    const orderedOrders = document.getElementById("ordered-orders");
    var countTotalOrders = 0;
    var countShippingOrders = 0;
    var countRejectedOrders = 0;
    var countOrderedOrders = 0;
    let html = "";
    orders.forEach((value) => {
        var subtotal = 0;
        value.items.forEach((value) => {
            subtotal += value.total_money*value.quantity;
        });
        if (subtotal > 200) value.total_money  = subtotal;
        else value.total_money = subtotal + 30;
        countTotalOrders ++;
        if (value.order_status == 'shipping') {
            countShippingOrders ++;
        }
        else if (value.order_status == 'rejected') {
            countRejectedOrders ++;
        }
        else {
            countOrderedOrders ++;
        }
        console.log(value.items[0])
        html += `
            <div class="flex flex-row text-base text-black bg-white p-[20px] border border-[#d1d1d1] rounded-lg mt-2.5 items-center">
                <div class="min-w-[10%]">${value.order_id}</div>
                <div class="min-w-[30%]">${value.created_at}</div>
                <div class="min-w-[20%]">$${value.total_money}</div>
                <select
                  class="inline-block bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5"
                >
                  <option value="ordered" selected>Ordered</option>
                  <option value="shipping">Shipping</option>
                  <option value="rejected">Rejected</option>
                </select>
                <div class="min-w-[20%] flex flex-row justify-start items-center text-xl gap-4">
                    <a href="./OrderDetail.html?id=${value.order_id}" class="block">
                        <i class="fa-solid fa-circle-info cursor-pointer"></i>
                    </a>
                </div>
            </div>
            <div
              class="flex flex-row text-base text-black bg-white p-[20px] border border-[#d1d1d1] rounded-lg mt-2.5 items-center"
            >
              <div class="min-w-[15%]">LA-0234</div>
              <div class="min-w-[17%]">Victoria Perez</div>
              <div class="min-w-[13%]">LA-0234</div>
              <div class="min-w-[15%]">21 Aug, 2019</div>
              <div class="min-w-[15%]">$99.99</div>
              <div class="min-w-[15%] pr-[24px]">
                <select
                  class="inline-block bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5"
                >
                  <option value="ordered" selected>Ordered</option>
                  <option value="shipping">Shipping</option>
                  <option value="rejected">Rejected</option>
                </select>
              </div>
              <div
                class="min-w-[10%] flex flex-row justify-start items-center text-xl gap-4"
              >
                <i class="fa-solid fa-circle-info cursor-pointer"></i>
              </div>
            </div>
            `
    })
    totalOrders.innerText = countTotalOrders;
    shippingOrders.innerText = countShippingOrders;
    rejectedOrders.innerText = countRejectedOrders;
    orderedOrders.innerText = countOrderedOrders;
    console.log(html);
    console.log(myOrdersContainer);
    if (html != "") myOrdersContainer.innerHTML = html;

}