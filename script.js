// Retrieve cart from localStorage or initialize as empty array
let cart = JSON.parse(localStorage.getItem('cart')) || [];

// Function to update the cart count in the navbar
function updateCartCount() {
    const cartCountElement = document.querySelector('.cart-count');
    if (cartCountElement) {
        cartCountElement.textContent = cart.length;
    }
}

// Function to add product to cart
document.querySelectorAll('.add-to-cart').forEach(button => {
    button.addEventListener('click', (event) => {
        const product = event.target.closest('.product');
        const id = product.dataset.id;
        const name = product.dataset.name;
        const price = parseFloat(product.dataset.price);

        cart.push({ id, name, price });
        localStorage.setItem('cart', JSON.stringify(cart));

        updateCartCount();
        alert(`${name} added to cart!`);
    });
});

// Function to display cart items in cart.html
function displayCart() {
    const cartContainer = document.getElementById('cart-items');
    const cartTotal = document.getElementById('cart-total');

    // Retrieve updated cart from localStorage
    cart = JSON.parse(localStorage.getItem('cart')) || [];

    cartContainer.innerHTML = "";

    if (cart.length === 0) {
        cartContainer.innerHTML = "<p>Your cart is empty</p>";
        cartTotal.textContent = "Total: $0";
        updateCartCount();
        return;
    }

    let total = 0;

    cart.forEach((item, index) => {
        total += item.price;
        const cartItem = document.createElement('div');
        cartItem.classList.add('cart-item');
        cartItem.innerHTML = `
            <p>${item.name} - $${item.price}</p>
            <button onclick="removeFromCart(${index})">Remove</button>
        `;
        cartContainer.appendChild(cartItem);
    });

    cartTotal.textContent = `Total: $${total.toFixed(2)}`;
    updateCartCount();
}

// Function to remove item from cart
function removeFromCart(index) {
    cart.splice(index, 1);
    localStorage.setItem('cart', JSON.stringify(cart));

    displayCart();
}

// Ensure cart count updates on page load
updateCartCount();

// If on cart.html, display cart items
if (window.location.pathname.includes('cart.html')) {
    displayCart();
}
