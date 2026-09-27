document.addEventListener("DOMContentLoaded", function () {

    const container = document.getElementById("order-list-container");
    const searchInput = document.getElementById("search-input");

    // Ambil pesanan terakhir
    const pesanan = JSON.parse(
        localStorage.getItem("pesananTerakhir")
    );

    function renderOrder(order) {

        if (!order) {
            container.innerHTML = `
                <div class="empty-state">
                    <i class="fa-solid fa-receipt"></i>
                    <h3>Belum Ada Pesanan</h3>
                    <p>Pesanan yang telah Anda bayar akan muncul di halaman ini.</p>
                </div>
            `;
            return;
        }

        const produk = order.produk || [];

        if (produk.length === 0) {
            container.innerHTML = `
                <div class="empty-state">
                    <i class="fa-solid fa-receipt"></i>
                    <h3>Belum Ada Pesanan</h3>
                    <p>Pesanan yang telah Anda bayar akan muncul di halaman ini.</p>
                </div>
            `;
            return;
        }

        let produkHTML = "";

        produk.forEach(function (item) {

            const hargaTotal = item.price * item.quantity;

            produkHTML += `
                <div class="order-body">

                    <div class="product-img">
                        <i class="fa-solid fa-pills"
                           style="font-size: 28px; color: #08749a;">
                        </i>
                    </div>

                    <div class="product-details">

                        <h4 class="product-title">
                            ${item.name}
                        </h4>

                        <div class="product-meta">
                            x${item.quantity}
                        </div>

                    </div>

                    <div class="product-price">
                        Rp ${hargaTotal.toLocaleString("id-ID")}
                    </div>

                </div>
            `;
        });

        let statusIcon = "fa-truck-arrow-right";
        let badgeClass = "sedang-dikirim";

        if (order.status === "SELESAI") {
            statusIcon = "fa-box-archive";
            badgeClass = "selesai";
        }

        container.innerHTML = `
            <div class="order-card">

                <div class="order-header">

                    <div class="status-info">
                        <i class="fa-solid ${statusIcon}"></i>
                        <span>
                            ${order.statusNote || "Pesanan Anda sedang diproses"}
                        </span>
                    </div>

                    <span class="status-badge ${badgeClass}">
                        ${order.status || "SEDANG DIKIRIM"}
                    </span>

                </div>

                ${produkHTML}

                <div class="order-footer">

                    <span class="total-label">
                        Total Pesanan:
                    </span>

                    <span class="total-price">
                        Rp ${Number(order.total).toLocaleString("id-ID")}
                    </span>

                    <a href="/pesanan" class="btn-rincian">
                        Rincian Pesanan
                    </a>

                </div>

            </div>
        `;
    }

    // Tampilkan pesanan
    renderOrder(pesanan);


    // ================= PENCARIAN =================

    if (searchInput) {

        searchInput.addEventListener("input", function () {

            const keyword = this.value.toLowerCase().trim();

            if (!pesanan) {
                return;
            }

            const cocokID =
                pesanan.idPesanan &&
                pesanan.idPesanan.toLowerCase().includes(keyword);

            const cocokProduk =
                pesanan.produk &&
                pesanan.produk.some(function (item) {
                    return item.name &&
                        item.name.toLowerCase().includes(keyword);
                });

            if (cocokID || cocokProduk || keyword === "") {
                renderOrder(pesanan);
            } else {
                container.innerHTML = `
                    <div class="empty-state">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <h3>Pesanan Tidak Ditemukan</h3>
                        <p>Nomor pesanan atau nama obat tidak sesuai.</p>
                    </div>
                `;
            }

        });

    }

});