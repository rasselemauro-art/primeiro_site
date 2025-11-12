<?php $this->layout('layouts::default'); ?>
<?php $this->start('main_c'); ?>

<div class="container">
<div class="row">
    <?php
    // Definição de Comentários Fictícios (Mock Data)
    // Para um sistema real, essa informação viria do seu banco de dados.
    $comentarios_ficticios = [
        ['Autor' => 'Ana P.', 'Texto' => 'Chegou super rápido e a qualidade é excelente! Recomendo a todos.', 'Nota' => 5],
        ['Autor' => 'João M.', 'Texto' => 'O produto é bom, mas o prazo de entrega poderia ser melhor.', 'Nota' => 4],
    ];
    ?>

    <?php foreach($produto as $item): ?>
        <div class="col-4 card mb-4" style="width: 18rem;">
            <img src="<?= $this->asset($this->e($item['Imagem'])) ?>" class="card-img-top" alt="Produto">

            <div class="card-body">
                <h5 class="card-title"><?= $this->e($item['Nome'])?></h5>
                <p class="card-text"> **Preço:** R$ <?=number_format( $item['Preco'],2,',','.')?></p>

                <a 
                    href="/produto/detalhes/<?= $this->e($item['Id'] ?? 0) ?>" 
                    class="btn btn-primary btn-block" 
                    rel="noopener noreferrer"
                >
                    <i class="fas fa-info-circle"></i> Ver Detalhes
                </a>
                
                <hr>
                
                <a 
                    href="/carrinho/adicionar/<?= $this->e($item['Id'] ?? 0) ?>" 
                    class="btn btn-success btn-sm w-100 mt-2" 
                    target="_blank" 
                    rel="noopener noreferrer"
                >
                    <i class="fas fa-shopping-cart"></i> Comprar (Direto)
                </a>
                
                <hr>

                <h6 class="card-subtitle mb-2 text-muted">Comentários (Fictícios)</h6>
                <div class="comentarios-ficticios" style="max-height: 100px; overflow-y: auto;">
                    <?php foreach($comentarios_ficticios as $comentario): ?>
                        <div class="mb-2 p-2 border rounded">
                            <strong><?= $this->e($comentario['Autor']) ?>:</strong> 
                            <small class="text-warning">
                                <?php echo str_repeat('⭐', $comentario['Nota']); ?>
                            </small>
                            <p class="mb-0 small"><?= $this->e($comentario['Texto']) ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </div>
    <?php endforeach; ?>
</div>
</div>

<?php $this->stop(); ?>