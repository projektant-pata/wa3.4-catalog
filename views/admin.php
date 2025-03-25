<div class="container my-5">
    <h1 class="mb-4">Admin</h1>

    <div class="d-flex gap-3 mb-4">
        <a href="<?=url('admin/new_category')?>" class="btn btn-primary">Vytvořit kategorii</a>
        <a href="<?=url('admin/new_book')?>" class="btn btn-success">Vytvořit knížku</a>
        <a href="<?=url('admin/new_author')?>" class="btn btn-warning">Vytvořit autora</a>
    </div>

    <h3 class="mt-4">Kategorie</h3>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Název</th>
            <th>Rodič</th>
            <th>Upravit</th>
            <th>Smazat</th>
            <th>Otevřít</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($categories as $category) : ?>
            <tr>
                <td><?= $category['id'] ?></td>
                <td><?= $category['name'] ?></td>
                <td><?= $category['parent'] ?></td>
                <td><a href="<?= url('admin/new_category/' . $category['id']) ?>" class="btn btn-info btn-sm">Update</a></td>
                <td><a href="<?= url('admin/delete_category/' . $category['id']) ?>" class="btn btn-danger btn-sm">Delete</a></td>
                <td><a href="<?= url('/category/' . $category['id']) ?>" class="btn btn-secondary btn-sm">Open</a></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    <h3 class="mt-4">Knihy</h3>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Název</th>
            <th>Autor</th>
            <th>Kategorie</th>
            <th>Cena</th>
            <th>Upravit</th>
            <th>Smazat</th>
            <th>Otevřít</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($books as $book) : ?>
            <tr>
                <td><?= $book['id'] ?></td>
                <td><?= $book['name'] ?></td>
                <td><?= $book['author_name'] ?></td>
                <td><?= $book['category'] ?></td>
                <td><?= $book['price'] ?> Kč</td>
                <td><a href="<?= url('admin/new_book/' . $book['id']) ?>" class="btn btn-info btn-sm">Update</a></td>
                <td><a href="<?= url('admin/delete_book/' . $book['id']) ?>" class="btn btn-danger btn-sm">Delete</a></td>
                <td><a href="<?= url('/book/' . $book['id']) ?>" class="btn btn-secondary btn-sm">Open</a></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    <h3 class="mt-4">Autoři</h3>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Jméno</th>
            <th>Upravit</th>
            <th>Smazat</th>
            <th>Otevřít</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($authors as $author) : ?>
            <tr>
                <td><?= $author['id'] ?></td>
                <td><?= $author['name'] ?></td>
                <td><a href="<?= url('admin/new_author/' . $author['id']) ?>" class="btn btn-info btn-sm">Update</a></td>
                <td><a href="<?= url('admin/delete_author/' . $author['id']) ?>" class="btn btn-danger btn-sm">Delete</a></td>
                <td><a href="<?= url('/author/' . $author['id']) ?>" class="btn btn-secondary btn-sm">Open</a></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
