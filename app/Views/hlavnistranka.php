<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.css"></script>
</head>
<body>
    -->
<?=$this->extend('layout/sablona');?>
<?=$this->section('content');?>
<style>
    .card-img-top{
        width: 150px;
        height: 300px; 

        object-fit: cover;
    }
</style>
<div class="container">
    <div class="row">
        <?php foreach ($riders as $rider): ?>
            <div class="col-md-4 d-flex">
                <div class="card mb-4 flex-grow-1">
                <img src="<?= base_url('fotky/' . $rider->photo) ?>" class="card-img-top" ?>
                    <div class="card-body d-flex flex-column">
                        <p class="card-text">
                    <p><strong>Země:</strong> <?= $rider->country ?></p>
                    <p><strong>Příjmení:</strong> <?= $rider->last_name ?></p>
                    <p><strong>Jméno:</strong> <?= $rider->first_name ?></p>
                    <p><strong>Datum narození:</strong> <?= date('d.m.Y', strtotime($rider->date_of_birth))?></p>
                    <p><strong>Váha:</strong> 
                                        <?= $rider->weight 
                                            ? $rider->weight . ' kg' 
                                            : '???';
                                        ?>                                        
                                    </p>
                                    <p><strong>Výška:</strong>
                                        <?= $rider->height 
                                            ? $rider->height . ' cm' 
                                            : '???';
                                        ?>
                                    </p>
                    </p>
                </div>
            </div>
        </div>

    <?php endforeach; ?>

</div>
</div>
<?=$this->endSection();?>


