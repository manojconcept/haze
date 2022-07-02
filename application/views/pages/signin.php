<form  method="post" action="<?php echo base_url('users/sigeinsubmite');?>">
<!-- username -->
<div class="mb-3 row">
    <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Username</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="siusername" id="exampleFormControlInput1" placeholder="@username">
    </div>
</div>
<!-- password -->
<div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
        <input type="password" class="form-control" id="inputPassword" name="sipassword" placeholder="Enter your password">
    </div>
</div>
<button type="submit" class="btn btn-primary">Login</button>
</form>
