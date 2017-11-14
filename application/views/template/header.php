<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?> - The Louvre Bookstore</title>
    <link rel="icon" href="assets/branding/Favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/bootstrap-4.0.0-beta.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/customize.css">
    <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a href="<?php echo site_url(); ?>" class="navbar-brand mb-0 h-1">
                    <img src="assets/branding/Louvre-Header.png" alt="The Louvre Header Icon" width="80" height="37" class="d-inline-block align-top">
                    The Louvre Bookstore
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item <?php if($title=='Home')echo 'active'; ?>"><a href="<?php echo site_url(); ?>" class="nav-link">Home</a></li>
                        <li class="nav-item <?php if($title=='About')echo 'active'; ?>"><a href="<?php echo site_url('about'); ?>" class="nav-link">About</a></li>
                    </ul>
                    <span style="margin-left: auto;">
                        <?php
                            if(isset($_SESSION['logged'])){
                                echo '<span class="fa fa-user-circle"></span>';
                            }
                            else{
                                echo '<button type="button" class="btn btn-outline-secondary" data-placement="bottom" data-toggle="popover" title="Login" data-content="';
                                    echo '<form action=\'\' method=\'\'>';
                                        echo '<div class=\'input-group\'>';
                                            echo '<span class=\'input-group-addon\' id=\'basic-addon1\'><span class=\'fa fa-envelope\'></span></span>';
                                            echo '<input type=\'text\' class=\'form-control\' placeholder=\'E-Mail\' aria-label=\'E-Mail\' aria-describedby=\'basic-addon1\'>';
                                        echo '</div>';
                                        echo '<div class=\'input-group\'>';
                                            echo '<span class=\'input-group-addon\' id=\'basic-addon2\'><span class=\'fa fa-key\'></span></span>';
                                            echo '<input type=\'password\' class=\'form-control\' placeholder=\'Password\' aria-label=\'Password\' aria-describedby=\'basic-addon2\'>';
                                        echo '</div>';
                                        echo '<button class=\'btn btn-secondary\' type=\'submit\' name=\'submit\'>';
                                            $sp=20;
                                            for($i=0; $i<$sp; $i++)echo '&nbsp;';
                                            echo 'Login';
                                            for($i=0; $i<$sp; $i++)echo '&nbsp;';
                                        echo '</button>';
                                    echo '</form>" id="popover">';
                                echo '<span class="fa fa-sign-in"></span></button>';
                            }
                        ?>
                    </span>
                    &nbsp;&nbsp;
                    <form action="" method="post" class="form-inline">
                        <div class="input-group">
                            <span class="input-group-addon" style="padding: 0 0 0 0;">
                                <select class="form-control" name="searchby">
                                    <option>Title</option>
                                    <option>ISBN</option>
                                    <option>Author</option>
                                    <option>Genre</option>
                                </select>
                            </span>
                            <input type="text" class="form-control" placeholder="Keyword" aria-label="Keyword" aria-describedby="searchby">
                        </div>
                        &nbsp;&nbsp;
                        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit" name="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>