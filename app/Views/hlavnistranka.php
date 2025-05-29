
<?=$this->extend('layout/sablona');?>
<?=$this->section('content');?>
<style>
    .card-img-right {
        width: 150px;
        height: 300px; 
        object-fit: cover;
        border-radius: 8px;
    }
</style>
<div class="container">
    <div class="row">
        <?php foreach ($riders as $rider): ?>
            <div class="col-md-4 mb-4">
                <div class="card d-flex flex-row">
                    <?php 
                        $photoPath = 'fotky/' . $rider->photo;
                        if (!file_exists($photoPath) || empty($rider->photo)) {
                            $photoPath = 'fotky/anonym.png';
                        }
                    ?>
                    <img src="<?= base_url($photoPath) ?>" class="card-img-right" alt="Profilová fotka">
                    <div class="card-body">
                        <p class="card-text">
                            <p><strong>Země:</strong> <span class="fi fi-fr"></span></p>
                            <p><strong>Příjmení:</strong> <?= $rider->last_name ?></p>
                            <p><strong>Jméno:</strong> <?= $rider->first_name ?></p>
                            <p><strong>Datum narození:</strong> <?= date('d.m.Y', strtotime($rider->date_of_birth)) ?></p>
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


