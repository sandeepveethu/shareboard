<div class="panel panel-default register-panel">
  <div class="panel-heading">
  <h3>Login User</h3>
  </div>
  <div class="panel-body">
    <form method="post" action="<?php $_SERVER['PHP_SELF'] ;?>">
      <div class="form-group">
        <label for="userEmail">Email</label>
        <input type="text" class="form-control" id="userEmail" name="email" placeholder="Email">
      </div>

      <div class="form-group">
        <label for="userPassword">Password</label>
        <input type="password" class="form-control" id="userPassword" name="password" placeholder="Password">
      </div>

      <input class="btn btn-primary" name="login" type="submit" value="Login">
    </form>
  </div>
</div>