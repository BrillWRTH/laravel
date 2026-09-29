document.addEventListener("DOMContentLoaded", function () {

    let keranjang = JSON.parse(localStorage.getItem("keranjang")) || [];

    const cartSection = document.querySelector(".cart-section");
    const addProduct = document.querySelector(".add-product");

    function tampilkanKeranjang() {

        document.querySelectorAll(".cart-item").forEach(item => {
            item.remove();
        });

        let subtotal = 0;
        let jumlah = 0;

        keranjang.forEach((produk, index) => {

            subtotal += Number(produk.price) * Number(produk.quantity);
            jumlah += Number(produk.quantity);

            const item = document.createElement("div");

            item.className = "cart-item";

                        item.innerHTML = `
                <div class="product-image">
                    <img src="${produk.image}" alt="${produk.name}">
                </div>

                <div class="product-info">
                    <span class="category">Obat Bebas</span>
                    <h3>${produk.name}</h3>
                    <p>Produk pilihan</p>
                </div>

                <strong class="price">
                    Rp ${Number(produk.price).toLocaleString("id-ID")}
                </strong>

                <div class="quantity">
                    <button class="minus">-</button>
                    <span>${produk.quantity}</span>
                    <button class="plus">+</button>
                </div>

                <button type="button" class="delete">
                    <i class="fa-regular fa-trash-can"></i>
                </button>
            `;
            cartSection.insertBefore(item, addProduct);

            item.querySelector(".plus").addEventListener("click", function () {
                keranjang[index].quantity++;
                simpan();
            });

            item.querySelector(".minus").addEventListener("click", function () {

                if (keranjang[index].quantity > 1) {
                    keranjang[index].quantity--;
                    simpan();
                }

            });

            item.querySelector(".delete").addEventListener("click", function () {

                keranjang.splice(index, 1);
                simpan();

            });
        });

        // Jumlah produk
        document.querySelector("#jumlah-produk").textContent =
            `${jumlah} Produk Dipilih`;

        // Ongkir
        const ongkir = keranjang.length > 0 ? 10000 : 0;

        // Subtotal
        document.querySelector("#subtotal").textContent =
            "Rp " + subtotal.toLocaleString("id-ID");

        // Ongkir
        document.querySelector("#ongkir").textContent =
            "Rp " + ongkir.toLocaleString("id-ID");

        // Total
        document.querySelector("#total").textContent =
            "Rp " + (subtotal + ongkir).toLocaleString("id-ID");
    }

    function simpan() {

        localStorage.setItem(
            "keranjang",
            JSON.stringify(keranjang)
        );

        tampilkanKeranjang();
    }

    tampilkanKeranjang();
});