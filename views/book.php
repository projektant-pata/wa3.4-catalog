<div class="book-detail">
    <h1><?=$book['name']?></h1>
    <h2>Autor: <?=$book['author_name']?></h2>
    <p><?=$book['description']?></p>
    <p>Cena: <?=$book['price']?> Kč</p>
    <!-- Další detaily knihy -->
    <a href="<?=url('home')?>">Zpět na seznam knih</a>
</div>