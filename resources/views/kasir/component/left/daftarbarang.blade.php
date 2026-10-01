<!-- CART -->
<div class="card" style="margin-top:15px">
    <div class="card-header">
        <div style="display:flex; justify-content:space-between; alignitems:center;">
            <span>Keranjang Belanja</span>
            <span id="itemCount">0 Item</span>
        </div>
    </div>
    <div class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th width="40">No</th>
                    <th>Barang</th>
                    <th width="100">Harga</th>
                    <th width="120" class="text-center">Qty</th>
                    <th width="120" class="text-right">Subtotal</th>
                    <th width="40"></th>
                </tr>
            </thead>
            <tbody id="cartBody">
                <tr id="emptyRow">
                    <td colspan="6" class="empty-cart">
                    Keranjang masih kosong.
                    <br>
                    Silakan cari atau scan barang.
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
