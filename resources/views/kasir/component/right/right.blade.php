<div class="card">
    <div class="card-header">Ringkasan Pembayaran</div>
    <div class="card-body">
        <div class="payment-summary">
            <!-- TOTAL ITEM -->
            <div class="summary-row">
                <span>Total Item</span>
                <strong id="totalQty">0</strong>
            </div>

            <!-- SUBTOTAL -->
                <div class="summary-row">
                <span>Subtotal</span>
                <strong id="subtotal">Rp 0</strong>
            </div>

            <!-- DISCOUNT -->
            <div class="summary-row">
                <span>Diskon (%)</span>
                <input type="number" id="discountPercent" value="0" min="0" max="100" onchange="calculateTotal()">
            </div>
            <div class="summary-row">
                <span>Diskon (Rp)</span>
                <input type="number" id="discountAmount" value="0" min="0" onchange="calculateTotal()">
            </div>

            <!-- TAX -->
            <div class="summary-row">
                <span>Pajak / PPN</span>
                <input type="number" id="tax" value="0" min="0" onchange="calculateTotal()">
            </div>

            <!-- OTHER FEE -->
            <div class="summary-row">
                <span>Biaya Lain</span>
                <input type="number" id="otherFee" value="0" min="0" onchange="calculateTotal()">
            </div>

            <!-- TOTAL -->
            <div class="total-box">
                <div class="total-label">TOTAL AKHIR</div>
                <div class="total-value" id="grandTotal">Rp 0</div>
            </div>

            <!-- PAYMENT -->
            <div class="payment-box">
                <div class="payment-label">Uang Dibayar</div>
                <input type="number" id="payment" class="payment-input" placeholder="0" oninput="calculateChange()">

                <!-- PAYMENT METHOD -->
                <div class="payment-label" style="margin-top:15px">Metode Pembayaran</div>
                <div class="payment-method">
                    <button class="active" onclick="selectPayment(this)">Tunai</button>
                    <button onclick="selectPayment(this)">QRIS</button>
                    <button onclick="selectPayment(this)">Debit</button>
                    <button onclick="selectPayment(this)">Kredit</button>
                    <button onclick="selectPayment(this)">E-Wallet</button>
                    <button onclick="selectPayment(this)">Transfer</button>
                </div>
                <!-- CHANGE -->
                <div class="change-box" id="changeBox">
                    <div class="change-label">KEMBALIAN</div>
                    <div class="change-value" id="change">Rp 0</div>
                </div>
            </div>

            <!-- ACTION -->
            <div class="action-area">
                <button class="btn btn-warning" onclick="holdTransaction()">
                    Tahan
                </button>
                <button class="btn btn-danger" onclick="cancelTransaction()">
                    Batal
                </button>
                <button class="btn btn-success btn-pay" onclick="processPayment()">
                    BAYAR & CETAK
                </button>
            </div>
        </div>
    </div>
</div>
