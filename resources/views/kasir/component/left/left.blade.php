<!-- SEARCH -->
<div class="card">
    <div class="card-header">Tambah Barang</div>
    <div class="card-body">
        <div class="search-area">
            <div class="search-input">
                <input type="text" id="searchProduct" placeholder="Cari nama barang/ kode / barcode..." autocomplete="off">
                <div class="product-results" id="productResults"></div>
            </div>
            <button class="btn btn-primary" onclick="searchProduct()">Cari</button>
        </div>
        <!-- CUSTOMER -->
        <div class="customer-area">
            <div class="form-group">
                <label>Pelanggan</label>
                <select class="form-control">
                <option>Umum</option>
                <option>Pelanggan Member</option>
                <option>Member VIP</option>
                </select>
            </div>
            <div class="form-group">
                <label>No. Member / HP</label>
                <input type="text" class="form-control" placeholder="Opsional">
            </div>
        </div>
    </div>
</div>
