<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Login Form</title>
  <style>
    body {
      background-color: #f8f9fa;
    }

    .login-container {
      margin-top: 5%;
    }
  </style>
</head>
<body>

<div class="container login-container">
  <div class="row justify-content-center">
    <div class="col-md-6 col-sm-8 col-10">
      <div class="card">
        <div class="card-header text-center">
          <h4>Login</h4>
        </div>
        <div class="card-body">
          <form action="auth.php" method="POST">
            <div class="form-group">
              <label for="inputEmail">Email address</label>
              <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="inputPassword">Password</label>
              <div class="input-group">
                <input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Enter password">
                <div class="input-group-append">
                  <span class="input-group-text" id="showPasswordToggle">
                    <i class="fa fa-eye-slash" aria-hidden="true"></i>
                  </span>
                </div>
              </div>
            </div>
            <button type="submit" name="submit" class="btn btn-primary btn-block">Login</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
  // Script to toggle password visibility
  const passwordInput = document.getElementById('inputPassword');
  const showPasswordToggle = document.getElementById('showPasswordToggle');

  showPasswordToggle.addEventListener('click', () => {
    if (passwordInput.type === 'password') {
      passwordInput.type = 'text';
      showPasswordToggle.innerHTML = '<i class="fa fa-eye" aria-hidden="true"></i>';
    } else {
      passwordInput.type = 'password';
      showPasswordToggle.innerHTML = '<i class="fa fa-eye-slash" aria-hidden="true"></i>';
    }
  });
</script>
</body>
</html>
