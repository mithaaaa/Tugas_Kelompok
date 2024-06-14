<div class="container-fluid">
   <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="btn btn-sm btn-success">
            <?php 
            $grand_total =0;
            if ($keranjang = $this->cart->contents())
            {
                foreach ($keranjang as $items)
                {
                    $grand_total = $grand_total + $items['subtotal'];
                }
            echo "<h6>Total Belanja Anda: Rp. " .number_format($grand_total,0,',','.');
             ?>
        </div><br><br>

        <h4>Input Alamat Pengiriman dan Pembayaran</h4>

        <form method="post" action="<?php echo base_url() ?>index.php/dashboard/proses_pesanan">

            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control"> 
            </div>

            <div class="form-group">
                <label>Alamat Lengkap</label>
                <input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control"> 
            </div>

            <div class="form-group">
                <label>No. Telepon</label>
                <input type="text" name="no_telepon" placeholder="No Telepon Anda" class="form-control"> 
            </div>

            <div class="form-group">
                <label>Jasa Pengiriman</label>
                <select class="form-control">
                    <option>JNE</option>
                    <option>TIKI</option>
                    <option>Gojek</option>
                    <option>Grab</option>
                </select>
            </div>

            <div class="form-group">
                <label>Pilih Bank</label>
                <select class="form-control">
                    <option>BCA - 17678728</option>
                    <option>BNI - 36528791</option>
                    <option>BRI - 29829357</option>
                    <option>MANDIRI - 24537266</option>
                </select>
            </div>

            <button type="submit" class="btn btn-sm btn-primary mb-3">Pesan</button>

        </form>

        <?php
        } else
        {
            echo "<h4>Keranjang Belanja Anda Masih Kosong";
        } 
        ?>

    </div><br><br>

    
    <div class="col-md-2"></div>
   </div>
</div