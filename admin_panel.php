<!DOCTYPE html>
<html lang="en" style="height: auto;">
<head>
    <link rel="stylesheet" href="./AdminLTE 3 _ Dashboard_files/adminlte.min.css">
    <link rel="stylesheet" href="./AdminLTE 3 _ Dashboard_files/all.min.css">
</head>
<body class="sidebar-mini layout-fixed" style="height: auto;">
<div class="wrapper">

    <?php include "nav_aside.php";?>

    <div class="content-wrapper" style="min-height: 825px;">

        <div class="content-header"></div>

        <section class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>0</h3>
                                <p>Toplam Hayvan Sayısı</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>0<sup style="font-size: 20px">%</sup></h3>
                                <p>Süt Ortalaması</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>0</h3>
                                <p>xxxxxxxxx</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>0</h3>
                                <p>xxxxxxxx</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <section class="col-lg-12 connectedSortable ui-sortable">
                        <a href="flot_charts.php#"></a>
                    </section>

                </div>

                <div class="row">

                    <section class="col-lg-7 connectedSortable ui-sortable">

                    </section>

                    <section class="col-lg-5 connectedSortable ui-sortable">

                    </section>
                </div>
            </div>
        </section>
    </div>

    <footer class="main-footer">
        <strong>Copyright © 2022 <a href="#">Selda Çetin</a></strong>
    </footer>
</body>
</html>