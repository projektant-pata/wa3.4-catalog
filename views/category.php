<h1><?=$category?></h1>
<ul>
    <?php foreach ($children as $child): ?>
        <li><a href="<?=url('category/'.$child['id'])?>"><?=$child['name']?></a></li>
    <?php endforeach; ?>
</ul>

<?php foreach($books as $book) { ?>
    <a href="<?=url('book/'.$book['id'])?>" class="book">
        <h2><?=$book['name']?></h2>
        <h3>Autor: <?=$book['author_name']?></h3>
        <p><?=$book['description']?></p>
        <p>Cena: <?=$book['price']?> Kč</p>
    </a>
<?php } ?>