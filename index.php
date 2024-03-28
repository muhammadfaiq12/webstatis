<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web keren|| by Muhammad faiq</title>
    <link rel="alternate" href="images/logo RGI.webp" type="application/atom+xml" title="Atom">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href=".">
                <img src="images/logo RGI.webp" alt="RGI" height="60 px">
                <span class="h2" title="Muhammad Faiq">TKJ 30</span>


            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href=".">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?m=profil">profil</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            tutorial
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="?m=server" >Server</a></li>
                            <li><a class="dropdown-item" href="?m=webdev" title="web developmen">WebDev</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            <li><a class="dropdown-item" href="?m=pi" title="pengenalan internet">PI</a></li>
                            <li><a class="dropdown-item" href="?m=wi" title="web instant">WI</a></li>
                    </li>
                    <li><a class="dropdown-item" href="?m=jarkom">jarkom</a></li>
                </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?m=vidio">vidio</a>
                </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container mt-2">
        <?php include_once('tkj.php'); ?>
    </div>

    <div class="fixed-bottom">
        <div class="card">
            <div class="card-body">
                &copy; 2001-<?= date("Y") ?> - TKJ RGI A 30
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>