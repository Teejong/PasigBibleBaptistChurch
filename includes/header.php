<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $title ?></title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="images/solo1.png" type="image/png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

    <link rel="stylesheet" href="style/style.css" type="text/css">
    <link rel="stylesheet" href="style/index.css" type="text/css">
    <link rel="stylesheet" href="style/about.css" type="text/css">
    <link rel="stylesheet" href="style/liveStream.css" type="text/css">
    <link rel="stylesheet" href="style/allVideos.css" type="text/css">
    <link rel="stylesheet" href="style/ministries.css" type="text/css">
    <link rel="stylesheet" href="style/sermons.css" type="text/css">
    <link rel="stylesheet" href="style/school.css" type="text/css">

</head>

<body>
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="images/combi.svg"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link <?php echo $currentPage == 'index' ? 'active' : '' ?>" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $currentPage == 'about' ? 'active' : '' ?>" href="about.php">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Live
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item <?php echo $currentPage == 'live' ? 'active' : '' ?>" href="liveStream.php">Stream</a></li>
                            <li><a class="dropdown-item <?php echo $currentPage == 'all' ? 'active' : '' ?>" href="allVideos.php">All Videos</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Ministries
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item <?php echo $currentPage == 'mWelcome' ? 'active' : '' ?>" href="ministriesWelcome.php">Welcome Statement</a></li>
                            <li><a class="dropdown-item" href="#">PBBY (Youth Ministry)</a></li>
                            <li><a class="dropdown-item" href="#">Youth Service On-Line</a></li>
                            <li><a class="dropdown-item" href="#">ZOOM Bible Study</a></li>
                            <li><a class="dropdown-item" href="#">Alabaster Box</a></li>
                            <li><a class="dropdown-item" href="#">Discipleship Virtual Class</a></li>
                            <li><a class="dropdown-item" href="#">Kid's Church</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $currentPage == 'sermons' ? 'active' : '' ?>" href="sermons.php">Sermons</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $currentPage == 'bible' ? 'active' : '' ?>" href="bibleSchool.php">Bible School</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>