<?php 
	include_once('config.php'); 

	if(empty($_SESSION['username']))
	{
		header('Location: login.php');
	}

  $sql = "SELECT * from users";

  $prep = $con->prepare($sql);
  $prep->execute();
  $datas = $prep->fetchAll();



?>

<?php include("header.php"); ?>
	


<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Welcome, <i> <?php echo $_SESSION['username']; ?> </i></a>

  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="logout.php">Sign out</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="dashboard.php">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="users.php">
              <span data-feather="file"></span>
              Users
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file"></span>
              projects
            </a>
          </li>
    
        </ul>

      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Users</h1>
  
      </div>

      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Id</th>
              <th>Full Name</th>
              <th>Username</th>
              <th>Email</th>
              <th>Edit/Delete</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($datas as $data): ?>
            <tr>
              <td><?= $data['id']; ?></td>
              <td><?= $data['fullname']; ?></td>
              <td><?= $data['username']; ?></td>
              <td><?= $data['email']; ?></td>
              <td><a href="editUser.php?id=<?= $data['id']; ?>">Edit</a> | <a href="delete.php?id=<?=  $data['id']; ?>">Delete</a></td>
            </tr>

          <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>

<?php include("footer.php"); ?>