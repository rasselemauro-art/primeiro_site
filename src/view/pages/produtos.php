<?php $this->layout('layouts::default'); ?>
<?php $this->start('main_c'); ?>

<div class="container">
<div class="row">
    <?php foreach($produto as $item): ?>
<div class="col-4 card" style="width: 18rem;">
            <img src="<?= $this->asset($this->e($item['Imagem'])) ?>" class="card-img-top" alt="Produto">
            <div class="card-body">
                <h5 class="card-title"><?= $this->e($item['Nome'])?></h5>
                <p class="card-text"> R$ <?=number_format( $item['Preco'],2,',','.')?></p>
                <a href="#" class="btn btn-primary">Comprar</a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<?php $this->stop(); ?>