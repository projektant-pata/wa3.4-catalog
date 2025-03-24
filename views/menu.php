<ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="<?=url('home')?>">Domů</a>
  </li>
  <?php foreach ($mainCategories as $category):
  ?>
      <li class="nav-item">
          <a class="nav-link" href="<?=url('category/'.$category['id'])?>"><?=$category['name']?></a>
      </li>
  <?php endforeach; ?>
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="<?=url('user')?>">Admin</a>
    </li>


</ul>