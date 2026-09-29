document.querySelectorAll(".btn-tambah").forEach(button => {

    button.addEventListener("click", function () {

        let keranjang = JSON.parse(localStorage.getItem("keranjang")) || [];

       let produk = {
        name: this.dataset.name,
        price: Number(this.dataset.price),
        image: this.dataset.image,
        quantity: 1
};

        let ada = keranjang.find(item => item.name === produk.name);

        if (ada) {
            ada.quantity++;
        } else {
            keranjang.push(produk);
        }

        localStorage.setItem("keranjang", JSON.stringify(keranjang));

        tampilkanNotifikasi("Produk berhasil ditambahkan!");

    });

});


function tampilkanNotifikasi(pesan) {

    const notifikasi = document.createElement("div");

    notifikasi.className = "notifikasi";

    notifikasi.innerHTML = `
        <i class="fa-solid fa-circle-check"></i>
        <span>${pesan}</span>
    `;

    document.body.appendChild(notifikasi);

    setTimeout(() => {

        notifikasi.classList.add("hilang");

        setTimeout(() => {
            notifikasi.remove();
        }, 300);

    }, 2000);

}