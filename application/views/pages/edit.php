<h1>Edit</h1>
<ul class="nav justify-content-center">
  <li class="nav-item">
    <a type="button" class="btn btn-success" href="<?php echo base_url('users/signout') ?>">Signout</a>
  </li>
  <li class="nav-item">
    <a type="button" class="btn btn-primary" href="<?php echo base_url('users/home') ?>">home</a>
  </li>
  <li class="nav-item">
    <a type="button" class="btn btn-primary" href="<?php echo base_url('users/dashboard') ?>">dashboard</a>
  </li>
  <li class="nav-item">
    <a type="button" class="btn btn-danger" href="<?php echo base_url('users/deleted') ?>">Account delete</a>
  </li>
</ul>

<form method="post" action="<?php echo base_url('users/resubmit'); ?>">
  <!-- Name -->
  <div class="mb-3 row">
    <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Name" name="name"  value="<?php echo $name?>">
    </div>
  </div>
  <!-- username -->
  <div class="mb-3 row">
    <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Username</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="@username" name="username" value="<?php echo $username?>">
    </div>
  </div>
  <!-- phone -->
  <div class="mb-3 row">
    <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Phone</label>
    <div class="col-sm-10">
      <input type="tel" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your phone" name="phone" value="<?php echo $phone?>">
    </div>
  </div>

  <!-- password -->
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Enter Password" value="<?php echo $password?>">
    </div>
  </div>


  <button type="submit" class="btn btn-primary">Apply</button>

</form>