<?php
include 'model.php';
?>
<body>
<?php
    $showresults = false;
    if (isset($_POST['calc'])){
        //Import POST values
        $price = $_POST['price'];
        $discount = $_POST['discount'];

        //Check for errors
        if ($price <= 0){
            // Harga negatif, atau 0
            echo "<script>alert('Price must be higher than 0')</script>')";
        } elseif ($discount < 0 || $discount > 100){
            //Diskon lebih dari 100, atau kurang dari 0
            echo "<script>alert('Discount is out of range')</script>";
        } else {
            //Tidak ada masalah, mulai kalkulasi
            $dcprice = $price * $discount/100;
            $total = $price - $dcprice;
            $showresults = true; //Tampilkan hasil
        }
    }
?>

<div class="container mt-5">
    <div class="row justify-content-center">

        <div class="col-md-4">
            <div class="border rounded bg-<?=$maincol?> p-2">
                <div class="row">
                <div class="col-md-6 text-start"><h2 class="text-start">Discounter</h2></div>
                <div class="col-md-6 text-end"><a href="settings.php"><button type="button" class="btn btn-<?=$maincol?> p-2 border text-pal">Settings</button></a></div>
                </div>
            </div>

            <!--Tampilkan Input-->
            <form method="post" class="border rounded bg-<?=$maincol?> p-2 mt-2">

                <label for="price" class="form-label">Price</label>
                <input type="number" name="price" id="price" class="form-control" step="0.01" min="0.01" autofocus required
                 <?php if ($persist == 1 && $showresults == 1) {?>value="<?=$price?>"<?php }?>
                 onkeypress="return (event.charCode >= 48 && event.charCode <= 57) || event.charCode == 44 || event.charCode == 46" placeholder="Input Price here...">

                <label for="discount" class="form-label">Discount</label>
                <input type="number" name="discount" id="discount" class="form-control" max="100" step="0.01" min="0" autocomplete="off" required
                <?php if ($persist == 1 && $showresults == 1) {?>value="<?=$discount?>"<?php }?>
                 onkeypress="return (event.charCode >= 48 && event.charCode <= 57) || event.charCode == 44 || event.charCode == 46" placeholder="Input Discount here... (0~100)">

                 <!--Submit, Hapus input-->
                <div class="row">
                    <div class="col-md-6"><button type="submit" class="btn btn-<?=$submitcol?> w-100 p-2 mt-2" name="calc">Calculate</button></div>
                    <div class="col-md-6"><button type="button" class="btn btn-<?=$resetcol?> w-100 p-2 mt-2" onclick="resetInput()">Reset</button></div>
                </div>
                <?php if ($showresults){ //Jika sudah ada hasil.. ?>
                    <!--Hapus hasil-->
                    <a href="index.php"><button type="button" class="btn btn-<?=$clearcol?> w-100 p-2 mt-2">Clear</button></a>
                <?php }?>
                 
            </form>
            
            <?php
            //Jika ada input..
            if ($showresults){?>

            <!--Tampilkan hasil-->
            <div class="border rounded bg-<?=$maincol?> p-2 mt-2">
            <table style="table-layout: fixed; width: 100%;">
                <tr><td style="width: 33%;">Price</td><td style="width: 2%;">: </td><td > <?="Rp. ".number_format($price, 2, ',', '.')?></td></tr>
                <tr><td>Discount (<?=$discount?>%)</td><td>: </td><td><?="Rp. ".number_format($dcprice, 2, ',', '.')?></td></tr>
                <tr><td>Total</td><td>: </td><td><?="Rp. ".number_format($total, 2, ',', '.')?></td></tr>
            </table>
            </div>

            <?php }
            ?>
            <a href="https://www.youtube.com/@Rzra" target="_blank" class="text-center mt-2"><p class="mb-0">&copy; Andhika Putra | XII RPL</p></a>
            <p class="text-center"><a href="<?=$gamecred?>" target="_blank">Game source</a> | 
            <a href="<?=$imgcred?>" target="_blank">Wallpaper source </a></p>
        </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  
<script>
    function resetInput(){
        document.getElementById("price").value = "";
        document.getElementById("discount").value = "";
    }
</script>
</body>
</html>