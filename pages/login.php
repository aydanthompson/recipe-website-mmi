<div class="container">
  <div class="row">
    <h1 class="mb-4 pb-2">Login or Register</h1>
    <div class="col">
      <form id="registration-form" method="post" action="">
        <div class="form-group">
          <label for="reg_email">Email address</label>
          <input type="email" class="form-control" id="reg_email" name="email">
        </div>
        <div class="form-group">
          <label for="reg_password">Password</label>
          <input type="password" class="form-control" id="reg_password" name="password">
        </div>
        <div class="form-group">
          <label for="reg_password_confirm">Confirm Password</label>
          <input type="password" class="form-control" id="reg_password_confirm" name="password_confirm">
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
      </form>
    </div>
    <div class="col">
      <form id="login-form" method="post" action="">
        <div class="form-group">
          <label for="login_email">Email address</label>
          <input type="email" class="form-control" id="login_email" name="email">
        </div>
        <div class="form-group">
          <label for="login_password">Password</label>
          <input type="password" class="form-control" id="login_password" name="password">
        </div>
        <button type="submit" class="btn btn-studenteat">Login</button>
      </form>
    </div>
  </div>
</div>