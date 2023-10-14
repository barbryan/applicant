<style>
  body {
    height: 100vmin;
    display: flex;
    justify-content: center;
    align-items: center;
  }
</style>
</head>

<body>
  <section>

    <?php

    if (isset($_POST['LOGIN'])) {
      $login = new User();
      $login->login($_POST['user'], $_POST['pass']);
      echo $login->getFname();
    }

    ?>

    <div class="container-fluid" style="width: 500px;">
      <h2>Login</h2>
      <form action="#" method="post">
        <div class="row">
          <div class="col">
            <label for="user" class="form-label">Username</label>
            <input required type="text" id="user" name="user" class="form-control border-black" />
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label for="pass" class="form-label">Password</label>
            <input required type="password" id="pass" name="pass" class="form-control border-black" />
          </div>
        </div>
        <div class="row mt-3">
          <div class="col">
            <input type="submit" name="LOGIN" value="Login" class="btn btn-success w-100" />
          </div>
        </div>
      </form>
    </div>
  </section>