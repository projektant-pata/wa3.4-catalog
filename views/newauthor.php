<form method="post" action="<?= isset($author_info) ?  url('admin/update_author/' . $author_info['id']) : url('admin/save_author')?>">
    <div class="mb-3">
        <label for="name" class="form-label">Author Name</label>
        <input type="text" class="form-control" name="name" id="name"
               value="<?= isset($author_info) ? htmlspecialchars($author_info['name']) : '' ?>">
    </div>

    <button type="submit" name="submit" class="btn btn-primary"><?= isset($author_info) ? "Update author" : "Add author" ?></button>
</form>
