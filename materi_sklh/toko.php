<?php
    // penyimpanan sementara
    session_start();
    if (!isset($_SESSION['saldo'])) {
        $_SESSION['saldo'] = 50000000;
    }

?>

<!doctype html>
<html>
    <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    </head>
    <body>

        <?= "saldo anda: " . $_SESSION['saldo'] ?>
        <br><a href="ulangi.php">ulangi</a>

        <div class="container flex justify-center mt-15 flex flex-wrap gap-6">
            <!-- w-5xs = width 16rem -->
            <div class="w-3xs border rounded-sm shadow-lg overflow-hidden sm:w-60 md:w-84 lg:w-72">
                <!-- semakin besar angka bg-slate-..... semakin hitam -->
                <div class="w-full h-[270px] flex justify-center">
                    <img src="ROG.jpg" alt="">
                </div>
                <!-- semakin angka awal text-...x1 besar maka teks semakin besar -->
                <p>⭐⭐⭐⭐⭐</p>
                <h3 class="text-2x1 font-bold py-4 ">ROG Flox X16</h3>
                <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis delectus nostrum asperiores facere labore, praesentium exercitationem quod harum quisquam? Rem.</p>
                <form action="proses.php" method="post" onsubmit="return confirm('Apakah anda yakin ingin membeli ini?');">
                    <input type="hidden" name="produk" value="ROG Flox X16" id="">
                    <input type="hidden" name="harga" value="20000000" id="">
                    <button class="bg-blue-600 px-2 py-2 mx-2 my-2 text-white rounded-lg shadow-lg">Buy</button>
                </form>
            </div>  


            <div class="w-3xs border rounded-sm shadow-lg overflow-hidden sm:w-60 md:w-84 lg:w-72">
                <!-- semakin besar angka bg-slate-..... semakin hitam -->
                <div class="w-full h-[270px] flex justify-center">
                    <img src="ROG gtx 1050.jpg" alt="">
                </div>
                <!-- semakin angka awal text-...x1 besar maka teks semakin besar -->
                <p>⭐⭐⭐⭐⭐</p>
                <h3 class="text-2x1 font-bold py-4 ">ROG GTX 1050</h3>
                <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis delectus nostrum asperiores facere labore, praesentium exercitationem quod harum quisquam? Rem.</p>
                <form action="proses.php" method="post" onsubmit="return confirm('Apakah anda yakin ingin membeli ini?');">
                    <input type="hidden" name="produk" value="ROG GTX 1050" id="">
                    <input type="hidden" name="harga" value="30000000" id="">
                <button class="bg-blue-600 px-2 py-2 mx-2 my-2 text-white rounded-lg shadow-lg">Buy</button>
                </form>
            </div>

            <div class="w-3xs border rounded-sm shadow-lg overflow-hidden sm:w-60 md:w-84 lg:w-72">
                <!-- semakin besar angka bg-slate-..... semakin hitam -->
                <div class="w-full h-[270px] flex justify-center">
                    <img src="ROG Zephyrus G16.jpg" alt="">
                </div>
                <!-- semakin angka awal text-...x1 besar maka teks semakin besar -->
                <p>⭐⭐⭐⭐⭐</p>
                <h3 class="text-2x1 font-bold py-4 ">ROG Zephyrus G16</h3>
                <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis delectus nostrum asperiores facere labore, praesentium exercitationem quod harum quisquam? Rem.</p>
                <form action="proses.php" method="post" onsubmit="return confirm('Apakah anda yakin ingin membeli ini?');">
                    <input type="hidden" name="produk" value="ROG Zephyrus G16" id="">
                    <input type="hidden" name="harga" value="45000000" id="">
                <button class="bg-blue-600 px-2 py-2 mx-2 my-2 text-white rounded-lg shadow-lg">Buy</button>
                </form>
            </div>

            <div class="w-3xs border rounded-sm shadow-lg overflow-hidden sm:w-60 md:w-84 lg:w-72">
                <!-- semakin besar angka bg-slate-..... semakin hitam -->
                <div class="w-full h-[270px] flex justify-center">
                    <img src="ROG Strix G15.jpg" alt="">
                </div>
                <!-- semakin angka awal text-...x1 besar maka teks semakin besar -->
                <p>⭐⭐⭐⭐⭐</p>
                <h3 class="text-2x1 font-bold py-4 ">ROG Strix G15</h3>
                <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis delectus nostrum asperiores facere labore, praesentium exercitationem quod harum quisquam? Rem.</p>
                <form action="proses.php" method="post" onsubmit="return confirm('Apakah anda yakin ingin membeli ini?');">
                    <input type="hidden" name="produk" value="ROG Strix G15" id="">
                    <input type="hidden" name="harga" value="45000000" id="">
                <button class="bg-blue-600 px-2 py-2 mx-2 my-2 text-white rounded-lg shadow-lg">Buy</button>
                </form>
            </div>




            <div class="w-3xs border rounded-sm shadow-lg overflow-hidden sm:w-60 md:w-84 lg:w-72">
                <!-- semakin besar angka bg-slate-..... semakin hitam -->
                <div class="w-full h-[270px] flex justify-center">
                    <img src="ROG.jpg" alt="">
                </div>
                <!-- semakin angka awal text-...x1 besar maka teks semakin besar -->
                <p>⭐⭐⭐⭐⭐</p>
                <h3 class="text-2x1 font-bold py-4 ">ROG Flox X16</h3>
                <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis delectus nostrum asperiores facere labore, praesentium exercitationem quod harum quisquam? Rem.</p>
                <button class="bg-blue-600 px-2 py-2 mx-2 my-2 text-white rounded-lg shadow-lg">Buy</button>
            </div>


            <div class="w-3xs border rounded-sm shadow-lg overflow-hidden sm:w-60 md:w-84 lg:w-72">
                <!-- semakin besar angka bg-slate-..... semakin hitam -->
                <div class="w-full h-[270px] flex justify-center">
                    <img src="ROG.jpg" alt="">
                </div>
                <!-- semakin angka awal text-...x1 besar maka teks semakin besar -->
                <p>⭐⭐⭐⭐⭐</p>
                <h3 class="text-2x1 font-bold py-4 ">ROG Flox X16</h3>
                <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis delectus nostrum asperiores facere labore, praesentium exercitationem quod harum quisquam? Rem.</p>
                <button class="bg-blue-600 px-2 py-2 mx-2 my-2 text-white rounded-lg shadow-lg">Buy</button>
            </div>
        </div>

    </body>
</html>