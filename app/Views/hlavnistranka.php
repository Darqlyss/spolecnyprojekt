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
<div class="container">
    <div class="row">
        <?php foreach ($riders as $rider): ?>
            <div class="col-md-4 d-flex">
                <div class="card mb-4 flex-grow-1">
                    <div class="card-body d-flex flex-column">
                        <p class="card-text">
                    <p><strong>Country:</strong> <?= $rider->country ?></p>
                    <p><strong>Last Name:</strong> <?= $rider->last_name ?></p>
                    <p><strong>First Name:</strong> <?= $rider->first_name ?></p>
                    <p><strong>Age:</strong> <?= $rider->date_of_birth ?></p>
                    </p>
                </div>
            </div>
        </div>

    <?php endforeach; ?>

</div>
</div>
<?=$this->endSection();?>


