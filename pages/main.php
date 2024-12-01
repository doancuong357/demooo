<div id="main">
    <?php
    include("sidebar/sidebar.php");
    ?>
            <div class="maincontent">
                <?php
                if(isset($_GET['quanly'])){
                    $tam=$_GET['quanly'];
                } else{
                    $tam='';
                }
                if($tam=='danhmucsp'){
                    include("main/danhmuc.php");
                }elseif($tam=='giohang'){
                    include("main/giohang.php");
                }elseif($tam=='chuyengiatuvan'){
                    include("main/chuyengiatuvan.php");
                }elseif($tam=='lienhe'){
                    include("main/lienhe.php");
                }elseif($tam=='dangky'){
                    include("main/dangky.php");
                }elseif($tam=='dangnhap'){
                    include("main/dangnhap.php");
                }else{
                    include("main/index.php");
                }
                ?>
            </div>

        </div>