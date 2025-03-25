<form method="post" action="<?= isset($category_info) ?  url('admin/update_category/' . $category_info['id']) : url('admin/save_category')?>">
    <div class="mb-3">
        <label for="name" class="form-label">Category Name</label>
        <input type="text" class="form-control" name="name" id="name"
               value="<?= isset($category_info) ? htmlspecialchars($category_info['name']) : '' ?>">
    </div>
    <div class="mb-3">
        <label for="parent" class="form-label">Parent Category</label>
        <select class="form-control" name="parent" id="parent">
            <option value="">No parent</option>
            <?php foreach ($categories as $category) :
                if($category_info['id'] != $category['id']) {?>
                <option value="<?= $category['id'] ?>"
                    <?= (isset($category_info) && $category_info['id_parent'] == $category['id']) ? 'selected' : '' ?>>
                    <?= htmlspecialchars($category['name']) ?>
                </option>
            <?php }endforeach; ?>
        </select>
    </div>
    <button type="submit" name="submit" class="btn btn-primary"><?= isset($category_info) ? "Update category" : "Add category" ?></button>
</form>
