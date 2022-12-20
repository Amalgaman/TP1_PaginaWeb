<?php 

require_once('conf/conf.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title> Error </title>
    <?php require('layout/_css.php') ?>
</head>

<body>
    <?php require('layout/_nav.php') ?>
    <div id="layoutSidenav">
        <?php require('layout/_layout_nav.php') ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">

                    <h1 class="mt-4"> Error </h1>

                    <div class="card mb-4">

                        <div class="card-header">
                            <i class="fas fa-list me-1"></i>
                        </div>

                        <div class="card-body">

                            <div class="alert alert-danger"> Ha surgido un error. Por favor intente más tarde. </div>

                        </div>

                    </div>

                </div>
            </main>
            <?php require('layout/_footer.php') ?>
        </div>
    </div>
    <?php require('layout/_js.php') ?>
</body>

</html>