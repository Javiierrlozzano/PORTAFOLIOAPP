
// Variable para llevar un seguimiento de los productos en el carrito
let cartItems = [];

// Función para agregar un producto al carrito
function addToCart(productId, productName, productPrice) {
    cartItems.push({
        id: productId,
        name: productName,
        price: productPrice
    });

    // Actualizar el contador del carrito en la barra de navegación
    document.getElementById("cartCount").innerText = cartItems.length;
}

// Función para mostrar el contenido del carrito en el modal
function displayCart() {
    let cartContent = document.getElementById("cartContent");
    cartContent.innerHTML = "";

    cartItems.forEach(item => {
        cartContent.innerHTML += `<div>${item.name} - $${item.price}</div>`;
    });
}

// Función para vaciar el carrito
function clearCart() {
    cartItems = [];
    document.getElementById("cartCount").innerText = 0;
    displayCart();
}

