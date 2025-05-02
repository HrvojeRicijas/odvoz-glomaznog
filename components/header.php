<div class="header_bottom">
    <div class="container-fluid" style="width:80%">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="index.html">
                <span>
                (IKONA) - Šarić usluge
                </span>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav  ">
                    <li class="nav-item <?php if ($currPage=="index") echo 'active'; ?>">
                        <a class="nav-link" href="index.php">Početna <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item <?php if ($currPage=="services") echo 'active'; ?>">
                        <a class="nav-link" href="services.php">Usluge</a>
                    </li>
                    <li class="nav-item <?php if ($currPage=="about") echo 'active'; ?>">
                        <a class="nav-link" href="about.php">O nama</a>
                    </li>
                    <li class="nav-item <?php if ($currPage=="contact") echo 'active'; ?>">
                        <a class="nav-link" href="contact.php">Kontakt</a>
                    </li>
                    <!--li class="nav-item <?php if ($currPage=="login") echo 'active'; ?>">
                        <a class="nav-link" href="#"> <i class="fa fa-user" aria-hidden="true"></i> Login</a>
                    </!--li-->
                    <!--form class="form-inline">
                        <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </!--form-->
                </ul>
            </div>
        </nav>
    </div>
</div>
