// Shopping Cart
let cart = [];

function saveCart() {
    localStorage.setItem('cart', JSON.stringify(cart));
}

function renderCart() {
    const container = document.getElementById('cartItems');
    if (cart.length === 0) {
        container.innerHTML = '<p class="empty-cart-msg">Je winkelwagen is leeg</p>';
    } else {
        container.innerHTML = cart.map(item => `
            <div class="cart-item">
                <div class="cart-item-info">
                    <h4>${item.name}</h4>
                    <p class="cart-item-price">€${item.price.toFixed(2)}</p>
                </div>
                <div class="cart-item-controls">
                    <button class="qty-btn qty-minus" onclick="changeQty(${item.id}, -1)">−</button>
                    <input type="number" class="qty-input" value="${item.quantity}" onchange="changeQty(${item.id}, this.value - ${item.quantity})">
                    <button class="qty-btn qty-plus" onclick="changeQty(${item.id}, 1)">+</button>
                    <button class="remove-btn" onclick="removeItem(${item.id})">×</button>
                </div>
                <div class="cart-item-total">€${(item.price * item.quantity).toFixed(2)}</div>
            </div>
        `).join('');
    }
    // Updates je totalen en hoeveel eten er in de winkelmand zitten
    updateCount();
    updateTotal();
}
//hier kan je eten er in zetten en de hoeveelheid aanpassen zoals meer of minder oftewel toevoegen of verwijderen
function addItem(btn) {
    const product = btn.closest('.product');
    const id = parseInt(product.dataset.id);
    const name = product.dataset.name;
    const price = parseFloat(product.dataset.price);

    const existing = cart.find(i => i.id === id);
    if (existing) {
        existing.quantity++;
    } else {
        cart.push({ id, name, price, quantity: 1 });
    }
    //slaat op in de winkel wagen en laat de winkel wagen zien (render)
    saveCart();
    renderCart();
    btn.textContent = '✓ Toegevoegd!';
    setTimeout(() => btn.textContent = 'Toevoegen', 1500);
}
//hier kan je hoeveel eten je wilt hebben of verwijderen in je winkelwagen
function changeQty(id, change) {
    const item = cart.find(i => i.id === id);
    if (item) {
        item.quantity = Math.max(1, item.quantity + parseInt(change));
        saveCart();
        renderCart();
    }
}
//zoals hier verwijder je eten uit je winkelwagen
function removeItem(id) {
    cart = cart.filter(i => i.id !== id);
    saveCart();
    renderCart();
}
//hier krijg je te zien hoeveel eten er in ziet die automatisch update
function updateCount() {
    document.getElementById('cartCount').textContent = cart.reduce((sum, i) => sum + i.quantity, 0);
}

function updateTotal() {
    document.getElementById('cartTotal').textContent = '€' + cart.reduce((sum, i) => sum + i.price * i.quantity, 0).toFixed(2);
}

document.addEventListener('DOMContentLoaded', () => {
    document.getElementById('openCart').onclick = () => document.querySelector('.cart-panel').classList.add('active');
    document.getElementById('closeCart').onclick = () => document.querySelector('.cart-panel').classList.remove('active');
    document.getElementById('clearCart').onclick = () => {
        if (confirm('reset winkelwagen?')) {
            cart = [];
            saveCart();
            renderCart();
        }
    };
    //betaling en totaal prijs van de winkelwagen
    document.querySelector('.checkout-btn').onclick = () => {
        if (cart.length === 0) {
            alert('je hebt een lege winkelwagen!');
        } else {
            alert('Bedankt! Totaal: €' + cart.reduce((sum, i) => sum + i.price * i.quantity, 0).toFixed(2));
            cart = [];
            saveCart();
            renderCart();
            document.querySelector('.cart-panel').classList.remove('active');
        }
    };

    document.querySelectorAll('.add-btn').forEach(btn => btn.onclick = function () { addItem(this); });
    document.querySelector('.cart-panel').onclick = (e) => {
        if (e.target === e.currentTarget) e.target.classList.remove('active');
    };

    renderCart();
});
