<div class="container">
<div class="row mt-5">
    <div class="col-md-6 offset-md-3">
      <h2 class="mb-4">User login</h2>
      
      <?php if($flash = $this->get_flash()) { ?>
        <div class="alert alert-danger" role="alert">
          <?=$flash ?>
        </div>

      <?php } ?>
      <form method="post" action="<?=url('user/login')?>">
        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="text" class="form-control" name="email" id="email">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" name="password" id="password">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Login</button>
      </form>
    </div>
</div>
</div>