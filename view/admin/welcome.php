<style type="text/css">

    .menu_welcome{
        width: 100%;
        min-height: 150px;
        padding: 10px;
        background-color: rgba(255,249,223,0.62);
        transition: 0.5s;
    }

    .menu_welcome:hover{
        width: 100%;
        min-height: 150px;
        padding: 10px;
        background-color: rgba(60,141,188,0.62);
    }

    #welcome_admin a{
        color: #0c0c0c;
    }
</style>
<section id="welcome_admin" class="content-header">
    <div style="text-align: center">
        <h1 style="margin-bottom: 20px">
            Welcome ADMIN
        </h1>

        <div style="width:50%; margin: 10px auto">
            <hr style="border-top: solid rgba(60,141,188,0.62)">
            <div class="col-lg-4" style="text-align: center">
                <a href="<?php echo ROOT.'/'.$user['rule'];?>/kbr">
                    <div class="menu_welcome" >
                        <strong>Kelola data Perkembangan Kebun Bibit Rakyat (KBR)</strong>
                    </div>
                </a>
            </div>
            <div class="col-lg-4" style="text-align: center">
                <a href="<?php echo ROOT.'/'.$user['rule'];?>/rhl">
                    <div class="menu_welcome">
                        <strong>Kelola data Perkembangan Kegiatan Rehabilitasi Hutan dan Lahan (RHL)</strong>
                    </div>
                </a>
            </div>
            <div class="col-lg-4" style="text-align: center">
                <a href="<?php echo ROOT.'/'.$user['rule'];?>/obit">
                    <div class="menu_welcome">
                        <strong>Kelola data Penanaman Satu Milyar Pohon (OBIT)</strong>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>