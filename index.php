<?php
    require_once('ViewMenu.php');

    $read = ViewMenu::instance();
    $data = $read->readMenu();

?>
    

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Menu Makanan</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col">
                    <table class="table table-bordered mt-5">
                        <thead>
                            <tr>
                                <h2>Menu Makanan</h2>
                                <th scope="col">Id</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Deskripsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;?>
                            <?php foreach ($data as $key => $value) : ?>
                            <tr>
                                    <th scope="row"><?= $i++ ?></th>
                                    <td><?= $value['nama'] ?></td>
                                    <td><?= $value['harga'] ?></td>
                                    <td><?= $value['deskripsi'] ?></td>
                                </tr>
                                <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
    </div>
    
    
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>