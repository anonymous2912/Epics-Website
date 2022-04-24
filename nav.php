<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="css/homepage.css" rel="stylesheet">
<nav class="navbar navbar-expand-md navbar-light bg-light ">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-toggle="collapse" data-bs-target="#navbarNav" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ol class="navbar-nav">
                    <!-- ms-auto used to right align contents of navbar (idk why) -->
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="homepage.php">Home</a>
                    </li>
                   

                    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false" data-toggle="dropdown">Features</a>
    <ol class="dropdown-menu bg-light">
    <li><a class="dropdown-item" href="test.php">MADRS Test</a></li>
      <li><a class="dropdown-item" href="blog.php">Blogs</a></li>
      <li><a class="dropdown-item" href="video.php">Motivational Videos</a></li>
      <li><a class="dropdown-item" href="task.php">Selfcare Challenges</a></li>
      <li><a class="dropdown-item" href="diary.php">Diary</a></li>
    </ol>
  </li>


                    <li class="nav-item">
                        <a class="nav-link" href="class1.php">Monitor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Help</a>
                    </li>
                </ol>
                <form class="d-flex ms-auto">
                    <a class="btn btn-outline-blue a mb-0" href="login.php">Log in </a>&nbsp;&nbsp;
                    <a class="btn btn-blue b mb-0" href="register.php">Sign up</a>&nbsp;&nbsp;
                    <a class="btn btn-blue b mb-0" href="logout.php">Log out</a>
                </form>
            </div>
        </div>
    </nav>