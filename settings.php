<?php
include 'model.php';
?>
<body>
<?php
?>

<div class="container mt-5">
    <div class="row justify-content-center">

        <div class="col-md-4">
            <div class="border rounded bg-<?=$maincol?> p-2">
                <div class="row">
                <div class="col-md-6 text-start"><a href="index.php"><button type="button" class="btn btn-<?=$maincol?> p-2 border text-pal">Discounter</button></a></div>
                <div class="col-md-6 text-end"><h2 class="text-end">Settings</h2></div>
                </div>
            </div>

            <!--Tampilkan Input-->
            <form method="POST" action="cookie.php" class="border rounded bg-<?=$maincol?> p-2 mt-2">
                <select name="theme" id="" class="form-select">
                    <option value="0" <?php if ($theme == 0){?>selected<?php }?>>Bright Ocean</option>
                    <option value="1" <?php if ($theme == 1){?>selected<?php }?>>Night Ghosts</option>
                    <option value="2" <?php if ($theme == 2){?>selected<?php }?>>Neon City</option>
                </select>
                
                <div class="form-check mt-2 align-text-center">
                <input type="checkbox" name="persist" value="1" id="persist" class="form-check-input" <?php if ($persist == 1){?> checked <?php }?>>
                <label for="persist" class="form-check-label">Keep Input After Calculate</label>
                </div>

                <!--Simpan aturan, Hapus perubahan, dan Reset ke aturan default-->
                <div class="row">
                    <div class="col-md-6"><button type="submit" class="btn btn-<?=$submitcol?> w-100 p-2 mt-2" name="calc">Save</button></div>
                    <div class="col-md-3"><button type="reset" class="btn btn-<?=$resetcol?> w-100 p-2 mt-2">Reset</button></div>
                    <div class="col-md-3"><a href="reset.php"><button type="button" class="btn btn-<?=$clearcol?> w-100 p-2 mt-2">Default</button></a></div>
                </div>
            </form>
            <a href="https://www.youtube.com/@Rzra" target="_blank" class="text-center mt-2"><p class="mb-0">&copy; Andhika Putra | XII RPL</p></a>
            <p class="text-center"><a href="<?=$gamecred?>" target="_blank">Game source</a> | 
            <a href="<?=$imgcred?>" target="_blank">Wallpaper source </a></p>
        </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  
</body>
</html>