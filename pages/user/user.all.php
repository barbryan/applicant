<style>
  body {
    position: relative;

    height: 100vh;
    padding: 1rem;
    overflow: hidden;

    display: grid;
    grid-template:
      "nav  main" 1fr /
      auto 1fr;

  }

  nav {
    grid-area: nav;
    background: #F8F6F4;
  }

  main {
    grid-area: main;
  }

  table,
  table>* {
    font-size: 13px;
  }
</style>
</head>

<body>
  <?php include('./pages/nav.pages.php'); ?>
  <main>
    <section style="background-color: #e3f2fd;">
      <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center py-2">
          <h4 class="m-0">Accounts</h4>
          <a href="/accounts/create" style="font-size: 25px;"><i class="fas fa-regular fa-user-plus"></i></a>
        </div>
      </div>
    </section>
    <section class="my-2">
      <div class="container-fluid">
        <table id="myTable" class="table table-striped">
          <thead>
            <th>#</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Address</th>
            <th>Date of Birth</th>
            <th>School</th>
            <th>Course</th>
            <th>Last Update</th>
            <th>Action</th>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Lorem, ipsum dolor.</td>
              <td>Lorem, ipsum dolor.</td>
              <td>Lorem, ipsum dolor.</td>
              <td>Lorem, ipsum dolor.</td>
              <td>Lorem, ipsum dolor.</td>
              <td>Lorem, ipsum dolor.</td>
              <td>Lorem, ipsum dolor.</td>
              <td>Lorem, ipsum dolor.</td>
              <td>
                <div class="btn-group">
                  <a href="/accounts/view" class="btn btn-sm btn-primary"><i class="fas fa-regular fa-eye"></i></a>
                  <a href="/accounts/update" class="btn btn-sm btn-secondary"><i class="fas fa-regular fa-pen-to-square"></i></a>
                  <a href="/accounts/delete" class="btn btn-sm btn-danger"><i class="fas fa-regular fa-trash"></i></a>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

  <script>
    let table = new DataTable('#myTable');
  </script>