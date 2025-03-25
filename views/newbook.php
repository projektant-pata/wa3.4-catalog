<form method="post" action="<?= isset($book_info) ? url('admin/update_book/' . $book_info['id']) : url('admin/save_book')?>">
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" id="name"
               value="<?= isset($book_info) ? htmlspecialchars($book_info['name']) : '' ?>">
    </div>
    <div class="mb-3">
        <label for="author" class="form-label">Author</label>
        <select class="form-control" name="author" id="author">
            <option value="">Select an author</option>
            <?php foreach ($authors as $author): ?>
                <option value="<?= $author['id'] ?>"
                    <?= (isset($book_info) && $book_info['id_author'] == $author['id']) ? 'selected' : '' ?>>
                    <?= htmlspecialchars($author['name']) ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="number" class="form-control" name="price" id="price"
               value="<?= isset($book_info) ? htmlspecialchars($book_info['price']) : '' ?>">
    </div>
    <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <select class="form-control" name="category" id="category">
            <option value="">Select category</option>
            <?php foreach ($categories as $category) : ?>
                <option value="<?= $category['id'] ?>"
                    <?= (isset($book_info) && $book_info['id_category'] == $category['id']) ? 'selected' : '' ?>>
                    <?= htmlspecialchars($category['name']) ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" name="description" id="description" rows="4"><?= isset($book_info) ? htmlspecialchars($book_info['description']) : '' ?></textarea>
    </div>
    <button type="submit" name="submit" class="btn btn-primary"><?= isset($book_info) ? "Update book" : "Add book" ?></button>
</form>