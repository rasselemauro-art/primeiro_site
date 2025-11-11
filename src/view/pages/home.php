
<?php $this->layout('layouts::default'); ?>

<?php $this->start('main_c') ?>
<h1 class="text-center mt-5">Site do: <?= $this->e($nome_usuario) ?></h1>
<p>Sejam bem vindos ao meu primeiro site!</p>
<a href="/about"><button>Sobre nós</button></a>
<a href="/produtos"><button>Produtos</button></a>
<p><img src="<?=$this->asset("img/9.jpg")?>"alt="imagem"> </p>

<?php $this->stop() ?>

<?php $this->start('footer_c') ?>
<p>best potato heads</p>
<?php $this->stop() ?>