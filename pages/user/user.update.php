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
    <div class="container-fluid" style="width: 500px;">
      <h2>Update Account</h2>
      <form action="#" method="post">
        <div class="row">
          <div class="col">
            <label for="name" class="form-label">Name</label>
            <input type="text" id="name" name="name" class="form-control border-black" />
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label for="user" class="form-label">Username</label>
            <input type="text" id="user" name="user" class="form-control border-black" />
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label for="pass" class="form-label">Password</label>
            <input type="password" id="pass" name="pass" class="form-control border-black" />
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label for="type" class="form-label">Type</label>
            <select name="type" id="type" class="form-control border-black">
              <option value="ADMIN">Admin</option>
              <option value="USER">User</option>
            </select>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col">
            <a href="/accounts" class="btn btn-danger w-100">Cancel</a>
          </div>
          <div class="col">
            <input type="submit" name="UPDATE_ACCOUNT" value="Login" class="btn btn-success w-100" />
          </div>
        </div>
      </form>
    </div>
  </section>