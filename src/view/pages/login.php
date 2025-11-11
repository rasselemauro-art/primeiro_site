<?php $this->layout("layouts::default");?>

<?php $this->start('main_c');?>
<h1>olá <?= $this->e($nome_usuario)?></h1>
<p><cfoutput>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
</head>
<body>
    <div class="login">
        <h2>Login</h2>
        <form action="login.php" method="POST">
            <input type="text" class="input" name="usuario" placeholder="Usuário" required>
            <input type="password" class="input" name="senha" placeholder="Senha" required>

           <a href="">
            <button type="submit">Entrar</button>
        </a>
        
        </form>
    </div>
</body>
</html>
</cfoutput></p>
<?php $this->stop();?>

<?php $this->start('footer_c');?>
<P>Breno.com</P>
<?php $this->stop(); ?>

<?php $this->start('style');?>
<link href="<?= $this->asset('css/login.css'); ?>" rel="stylesheet">
<?php $this->stop();?>

<?php $this->start('scripts');?>
<script>
    function Breno(){
        alert('Olá mundo!');
    }
</script>
<?php $this->stop(); ?>


