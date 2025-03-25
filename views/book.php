<div class="container my-5">
    <div class="card">
        <div class="card-body">
            <h1 class="card-title"><?=$book['name']?></h1>
            <h2 class="card-subtitle text-muted mb-3">Autor: <?=$book['author_name']?></h2>
            <p class="card-text"><?=$book['description']?></p>
            <p class="card-text"><strong>Cena:</strong> <?=$book['price']?> Kč</p>
            <!-- Další detaily knihy mohou být zde -->
            <a href="<?=url('home')?>" class="btn btn-secondary mt-3">Zpět na seznam knih</a>
        </div>
    </div>
</div>
