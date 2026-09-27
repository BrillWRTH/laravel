document.addEventListener("DOMContentLoaded", function () {

    let keranjang = JSON.parse(localStorage.getItem("keranjang")) || [];
    const produkContainer = document.querySelector("#payment-products");
    let subtotal = 0;

    // ================= PRODUK =================

    keranjang.forEach(produk => {

        subtotal += produk.price * produk.quantity;

        const item = document.createElement("div");
        item.className = "payment-product";

        item.innerHTML = `
            <div class="product-icon">
                <i class="fa-solid fa-pills"></i>
            </div>

            <div class="product-detail">
                <strong>${produk.name}</strong>
                <small>
                    Qty: ${produk.quantity} ×
                    Rp ${produk.price.toLocaleString("id-ID")}
                </small>
            </div>

            <span>
                Rp ${(produk.price * produk.quantity).toLocaleString("id-ID")}
            </span>
        `;

        produkContainer.appendChild(item);
    });


    // ================= TOTAL =================

    const ongkir = keranjang.length ? 10000 : 0;

    document.querySelector("#subtotal").textContent =
        "Rp " + subtotal.toLocaleString("id-ID");

    document.querySelector("#ongkir").textContent =
        "Rp " + ongkir.toLocaleString("id-ID");

    document.querySelector("#total").textContent =
        "Rp " + (subtotal + ongkir).toLocaleString("id-ID");


    // ================= ALAMAT =================

    const tampilAlamat = alamat => {

        document.querySelector("#form-alamat").style.display = "none";
        document.querySelector("#alamat-tersimpan").style.display = "block";
        document.querySelector("#judul-alamat").textContent = "Alamat Tersimpan";

        document.querySelector("#alamat-label").textContent =
            alamat.label || "Alamat";

        document.querySelector("#alamat-nama").textContent =
            alamat.nama || "-";

        document.querySelector("#alamat-telepon").textContent =
            alamat.telepon || "-";

        document.querySelector("#alamat-lengkap-tampil").textContent =
            alamat.alamat || "-";

        document.querySelector("#alamat-kota").textContent =
            `${alamat.kota || "-"} ${alamat.kodePos || ""}`;

        document.querySelector("#badge-utama").style.display =
            alamat.utama ? "inline-block" : "none";
    };


    const alamatTersimpan =
        JSON.parse(localStorage.getItem("alamatPembayaran"));

    if (alamatTersimpan) {
        tampilAlamat(alamatTersimpan);
    }


    // SIMPAN ALAMAT

    document.querySelector("#simpan-alamat").addEventListener("click", function () {

        const data = {
            label: document.querySelector("#label-alamat").value.trim(),
            nama: document.querySelector("#nama-penerima").value.trim(),
            telepon: document.querySelector("#nomor-telepon").value.trim(),
            alamat: document.querySelector("#alamat-lengkap").value.trim(),
            kota: document.querySelector("#kota").value.trim(),
            kodePos: document.querySelector("#kode-pos").value.trim(),
            utama: document.querySelector("#alamat-utama").checked
        };

        if (
            !data.label ||
            !data.nama ||
            !data.telepon ||
            !data.alamat ||
            !data.kota ||
            !data.kodePos
        ) {
            tampilkanNotifikasi("Lengkapi semua alamat terlebih dahulu!");
            return;
        }

        localStorage.setItem(
            "alamatPembayaran",
            JSON.stringify(data)
        );

        tampilAlamat(data);
        tampilkanNotifikasi("Alamat berhasil disimpan!");
    });


    // UBAH ALAMAT

    document.querySelector("#ubah-alamat").addEventListener("click", function () {

        const alamat =
            JSON.parse(localStorage.getItem("alamatPembayaran"));

        document.querySelector("#alamat-tersimpan").style.display = "none";
        document.querySelector("#form-alamat").style.display = "block";
        document.querySelector("#judul-alamat").textContent = "Tambah Alamat";

        if (!alamat) return;

        document.querySelector("#label-alamat").value = alamat.label || "";
        document.querySelector("#nama-penerima").value = alamat.nama || "";
        document.querySelector("#nomor-telepon").value = alamat.telepon || "";
        document.querySelector("#alamat-lengkap").value = alamat.alamat || "";
        document.querySelector("#kota").value = alamat.kota || "";
        document.querySelector("#kode-pos").value = alamat.kodePos || "";
        document.querySelector("#alamat-utama").checked = alamat.utama || false;
    });


    // ================= METODE PEMBAYARAN =================

    document.querySelectorAll(".payment-option").forEach(option => {

        option.addEventListener("click", function () {

            document.querySelectorAll(".payment-option")
                .forEach(item => item.classList.remove("active"));

            option.classList.add("active");
            option.querySelector("input").checked = true;
        });

    });


    // ================= BAYAR =================

   document.querySelector("#bayar-sekarang").addEventListener("click", function () {
    const alamat =
        JSON.parse(localStorage.getItem("alamatPembayaran"));

    if (!alamat) {
        tampilkanNotifikasi("Silakan simpan alamat terlebih dahulu.");
        return;
    }

    if (!keranjang.length) {
        tampilkanNotifikasi("Keranjang masih kosong.");
        return;
    }

    const pesanan = {
        idPesanan: "PSN-" + Date.now().toString().slice(-6),
        produk: keranjang,
        alamat: alamat,
        total: subtotal + ongkir,
        status: "SEDANG DIKIRIM",
        statusNote: "Pesanan Anda sedang dikirim"
    };

    localStorage.setItem(
        "pesananTerakhir",
        JSON.stringify(pesanan)
    );

    document.querySelector("#modal-sukses").classList.add("show");
});


    // ================= MODAL =================

    document.querySelector("#tutup-modal").addEventListener("click", function () {
        document.querySelector("#modal-sukses").classList.remove("show");
    });

    document.querySelector("#lihat-pesanan").addEventListener("click", function () {
    window.location.href = this.dataset.url;
});
});


    // ================= HITUNG JARAK =================

    const hasilJarak = document.querySelector("#jarak-apotek");

    if (hasilJarak && navigator.geolocation) {

        navigator.geolocation.getCurrentPosition(function (posisi) {

            const latUser = posisi.coords.latitude;
            const lonUser = posisi.coords.longitude;

            // GANTI DENGAN KOORDINAT APOTEK
            const latApotek = -7.2575;
            const lonApotek = 112.7521;

            const rad = Math.PI / 180;
            const dLat = (latApotek - latUser) * rad;
            const dLon = (lonApotek - lonUser) * rad;

            const a =
                Math.sin(dLat / 2) ** 2 +
                Math.cos(latUser * rad) *
                Math.cos(latApotek * rad) *
                Math.sin(dLon / 2) ** 2;

            const jarak =
                6371 * 2 *
                Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));

            hasilJarak.textContent =
                `Jarak dari Apotek sekitar ${jarak.toFixed(1)} km`;

        }, function () {

            hasilJarak.textContent =
            "Jarak dari apotek akan dihitung otomatis.";
        });

        } else if (hasilJarak) {

        hasilJarak.textContent =
            "Lokasi tidak didukung browser.";

    };


// ================= NOTIFIKASI =================

function tampilkanNotifikasi(pesan) {

    const notifikasi = document.createElement("div");

    notifikasi.className = "notifikasi";
    notifikasi.textContent = pesan;

    document.body.appendChild(notifikasi);

    setTimeout(() => {

        notifikasi.classList.add("hilang");

        setTimeout(() => {
            notifikasi.remove();
        }, 300);

    }, 2000);
}