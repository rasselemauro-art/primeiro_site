<?php $this->start('style');?>
<link href="<?= $this->asset('css/sobre_nos.css'); ?>" rel="stylesheet">
<?php $this->stop();?>
<?php $this->start('main_c') ?>
<?php $this->layout("layouts::default");?>
<h1 class="text-center mt-5">sobre nos </h1>
<p></p>
<?php $this->stop() ?>
<?php $this->start('footer_c');?>

<form> 
  <div class="container">
    <h2>Entre em Contato</h2>
    <p class="text-align: center"> seja bem vindo ao nosso formulario!</p>

    <form action="enviar_contato.php" method="POST">
        <div class="form-group">
            <label for="nome">Nome completo</label>
            <input type="text" id="nome" name="nome" placeholder="Seu nome" required>
        </div>

        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" placeholder="seu@email.com" required>
        </div>

        <div class="form-group">
            <label for="assunto">Assunto</label>
            <input type="text" id="assunto" name="assunto" placeholder="Motivo do contato" required>
        </div>

        <div class="form-group">
            <label for="mensagem">Mensagem</label>
            <textarea id="mensagem" name="mensagem" placeholder="Escreva sua mensagem aqui..." required></textarea>
        </div>

        <button type="submit" class="btn">Enviar Mensagem</button>
</form>

<h2>Nosso Endereço</h2>
<p class="text-center mb-3"><strong>Endereço:</strong> Praça Augusto Ruschi, 100 - Centro, Santa Teresa - ES, 29650-000</p>

<iframe 
    width="100%" 
    height="400" 
    style="border:0; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);" 
    src="https://maps.app.goo.gl/ifNUdXCjd4Cr2B7N6" 
    allowfullscreen="" 
    loading="lazy" 
    referrerpolicy="no-referrer-when-downgrade">
</iframe>


<?php $this->stop(); 
?>

