function updateCart() {
    var products = document.querySelectorAll('.product');
    var total = 0;
    var totalQuantity = 0;

    products.forEach(function (product) {
        var price = product.getAttribute('data-price');
        var quantity = parseInt(product.querySelector('input').value, 10);

        var cost = price * quantity;
        total += cost;
        totalQuantity += quantity;

        product.querySelector('.cost').innerText = '$' + cost;
    });

    document.getElementById('total').innerText = '$' + total;
    document.getElementById('total-products-quantity').innerText = totalQuantity;

    checkEmptyCart(); // Llamar a la función para verificar si el carrito está vacío
}

function checkEmptyCart() {
    var tbody = document.getElementById('items');
    var products = document.querySelectorAll('.product');

    // Si no hay productos en el carrito, mostrar mensaje
    if (products.length === 0) {
        tbody.innerHTML = '<tr><td style="background-color: #FFCDD4;" colspan="5"><b>El carrito está vacío!</b></td></tr>';
    }
}

function increaseQuantity(button) {
    var input = button.parentNode.querySelector('input');
    input.value = parseInt(input.value, 10) + 1;
    updateCart();
}

function decreaseQuantity(button) {
    var input = button.parentNode.querySelector('input');
    input.value = parseInt(input.value, 10) - 1;
    if (input.value < 1) {
        input.value = 1;
    }
    updateCart();
}

function removeProduct(button) {
    var product = button.parentNode.parentNode;
    product.remove();
    updateCart();
}

document.querySelectorAll('.product input').forEach(function (input) {
    input.addEventListener('input', updateCart);
});

document.getElementById('vaciar-carrito').addEventListener('click', function () {
    var tbody = document.getElementById('items');
    tbody.innerHTML = ''; // Elimina todas las filas de productos
    updateCart(); // Actualiza el carrito después de vaciarlo
});

// Puedes añadir aquí la lógica para agregar productos al carrito

// Llamamos a updateCart al cargar la página
updateCart();
