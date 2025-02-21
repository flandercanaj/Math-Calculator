<?php 
	include_once('config.php'); 

	if(empty($_SESSION['username']))
	{
		header('Location: login.php');
	}

	$id = $_GET['id'];
	$sql = "SELECT * FROM users WHERE id=:id LIMIT 1";
	$prep = $con->prepare($sql);
	$prep->bindParam(':id',$id);
	$prep->execute();
	$datas = $prep->fetch();
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
        <h1 class="h2">Edit user</h1>
  
      </div>

      <form class="form-signin" action="update.php" method="POST">
		
		<input type="hidden" value="<?= $datas['id']; ?>" name="id">

		<input type="text" id="username" name="username" class="form-control" placeholder="Username"  value="<?= $datas['username']; ?>" required autofocus>

		<input type="text" id="fullname" name="fullname" class="form-control" placeholder="Full Name"  value="<?= $datas['fullname']; ?>" required autofocus>

		<input type="email" id="email" name="email" class="form-control" placeholder="Email"  value="<?= $datas['email']; ?>" required autofocus>

		<input type="password" id="password" name="password" class="form-control" placeholder="Password">

		<button class="button" type="submit" name="update">Update</button>

	</form>

     

      
      </div>
    </main>
  </div>
</div>

<?php include("footer.php"); ?>
	

