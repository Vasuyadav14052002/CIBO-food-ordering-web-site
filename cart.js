document.addEventListener("DOMContentLoaded", function () {
    // Retrieve cart from localStorage or initialize as empty array
    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    function updateCartCount() {
        const cartCountElement = document.querySelector('.cart-count');
        if (cartCountElement) {
            cartCountElement.textContent = cart.length;
        }
    }

    function displayCart() {
        const cartContainer = document.getElementById('cart-items');
        const cartTotal = document.getElementById('cart-total');
        const buyNowButton = document.getElementById("buy-now");

        cart = JSON.parse(localStorage.getItem('cart')) || [];
        cartContainer.innerHTML = "";

        if (cart.length === 0) {
            cartContainer.innerHTML = "<p>Your cart is empty</p>";
            cartTotal.textContent = "Total: $0.00";
            buyNowButton.style.display = "none"; // Hide buy button when cart is empty
            updateCartCount();
            return;
        }

        buyNowButton.style.display = "block"; // Show buy button when cart has items
        let total = 0;

        cart.forEach((item, index) => {
            let price = parseFloat(item.price);
            if (!isNaN(price)) {
                total += price;
            }

            const cartItem = document.createElement('div');
            cartItem.classList.add('cart-item');
            cartItem.innerHTML = `
                <p>${item.name} - $${price.toFixed(2)}</p>
                <button onclick="removeFromCart(${index})">Remove</button>
            `;
            cartContainer.appendChild(cartItem);
        });

        total = isNaN(total) ? 0 : total;
        cartTotal.textContent = `Total: $${total.toFixed(2)}`;
        updateCartCount();
    }

    function removeFromCart(index) {
        cart.splice(index, 1);
        localStorage.setItem('cart', JSON.stringify(cart));
        displayCart();
    }

    function buyNow() {
        if (cart.length === 0) {
            alert("Your cart is empty. Add some products first!");
            return;
        }

        alert(`Thank you for your purchase! Your total is $${calculateTotal().toFixed(2)}`);
        localStorage.removeItem('cart');
        cart = [];
        displayCart();
    }

    function calculateTotal() {
        return cart.reduce((sum, item) => sum + parseFloat(item.price), 0);
    }

    updateCartCount();

    if (window.location.pathname.includes('cart.html')) {
        displayCart();
        document.getElementById("buy-now").addEventListener("click", buyNow);
    }
});
