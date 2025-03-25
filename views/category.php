<div class="container">
    <h1 class="mb-4"><?=$category?></h1>

    <?php if (!empty($children)): ?>
        <ul class="list-group mb-4">
            <?php foreach ($children as $child): ?>
                <li class="list-group-item">
                    <a href="<?=url('category/'.$child['id'])?>"><?=$child['name']?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

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
