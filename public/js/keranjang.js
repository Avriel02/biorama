// Initialize the cart array and total price
let cart = [];
let totalPrice = 0;

// Function to add items to the cart
function addToCart(productName, price, imageUrl) {
    // Get the quantity from the input field that is closest to the button clicked
    const quantityInput =
        event.target.parentElement.parentElement.querySelector(
            `input[name="quantity"]`
        );
    const quantity = parseInt(quantityInput.value) || 1; // Default to 1 if input is invalid

    // Find the product in the cart
    const existingProduct = cart.find((item) => item.name === productName);

    if (existingProduct) {
        // If the product already exists, update the quantity
        totalPrice += price * quantity; // Increment total price with the new quantity
        existingProduct.quantity += quantity; // Update existing product quantity
    } else {
        // Otherwise, add the new product to the cart
        cart.push({
            name: productName,
            price: price,
            quantity: quantity,
            imageUrl: imageUrl,
        });
        totalPrice += price * quantity; // Increment total price with the added product
    }

    // Update the cart UI
    updateCartSidebar();
}

// Fungsi untuk memperbarui tampilan keranjang
function updateCartSidebar() {
    const cartItemsContainer = document.getElementById("cart-items");
    cartItemsContainer.innerHTML = ""; // Hapus item sebelumnya

    // Populate item keranjang
    cart.forEach((item) => {
        const listItem = document.createElement("li");
        listItem.className =
            "list-group-item d-flex justify-content-between align-items-center";

        // Gambar produk
        const productImage = `<img src="${item.imageUrl}"  style="width: 50px; height: 50px; object-fit: cover; margin-right: 10px;">`;

        // Detail item (nama dan jumlah)
        const itemDetails = `<div>${productImage} ${item.name} x ${item.quantity}</div>`;

        // Total harga untuk item
        const itemPrice = item.price * item.quantity;
        const itemPriceDisplay = `<span>${itemPrice.toLocaleString("id-ID", {
            style: "currency",
            currency: "IDR",
        })}</span>`;

        listItem.innerHTML = `${itemDetails} ${itemPriceDisplay}`;
        cartItemsContainer.appendChild(listItem);
    });

    // Update the total price display
    document.getElementById("total-price").textContent =
        totalPrice.toLocaleString("id-ID", {
            style: "currency",
            currency: "IDR",
        });
}

function updateCartCount() {
    const cartCount = document.getElementById("cart-count");
    const totalQuantity = cart.reduce((sum, item) => sum + item.quantity, 0);
    cartCount.textContent = totalQuantity;
    cartCount.style.display = totalQuantity > 0 ? "block" : "none"; // Tampilkan atau sembunyikan badge
}

// Optional function for checkout
function checkout() {
    alert("Proceeding to checkout...");
}
