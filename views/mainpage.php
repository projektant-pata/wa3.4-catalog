<div class="container">
    <div class="row">
        <?php foreach($books as $book): ?>
            <div class="col-md-4 col-sm-6 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title"><?=$book['name']?></h5>
                        <h6 class="card-subtitle text-muted">Autor: <?=$book['author_name']?></h6>
                        <p class="card-text"><?=$book['description']?></p>
                        <p class="card-text"><strong>Cena:</strong> <?=$book['price']?> Kč</p>
                        <a href="<?=url('book/'.$book['id'])?>" class="btn btn-primary">Detail knihy</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
