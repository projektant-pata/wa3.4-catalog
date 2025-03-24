<div class="container">
<div class="row mt-5">
    <div class="col-md-6 offset-md-3">
      <h2 class="mb-4">User registration</h2>
      <form method="post" action="<?=url('user/save_registered')?>">
      <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" name="name" class="form-control" id="name">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control" name="email" id="email">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" name="password" id="password">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Register</button>
      </form>
    </div>
</div>
</div>