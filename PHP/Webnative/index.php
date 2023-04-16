<?php
//memanggil bagian file atas
include_once 'top.php';
//memanggil bagian file menu
include_once 'menu.php';
// include_once 'dash.php';

//memanggil bagian file buttom

?>

 <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1>Selamat Datang di Website Admin Ida Natalia Br Sinaga</h1>

                        <?php
                        
                        $url = $_GET['url'];
                        if($url == 'dashboard'){
                            include_once 'dashboard.php';
                        } else if (!empty($url)){
                            include_once ''.$url.'';
                        } else {'dashboard.php';
                        }
                        
                        ?>
                    </div>
                </main>
</div>

<?php
include_once 'menu.php';
?>

