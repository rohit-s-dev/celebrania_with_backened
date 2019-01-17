<nav class="navbar navbar-inverse navbar-fixed-top menu1" role="navigation">
    <div class="navbar-header">
        <a class="navbar-brand desktop_logo" href="index.php" >
            <img src="images/logo-main.png" alt="Celebrania - Official Logo" title="logo">
        </a>
        <a class="navbar-brand mob_logo" href="index.php">
            <img src="images/logo-main-mob.png" alt="Celebrania - Official Logo" title="logo"></a>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li>
                <a href="" id="index" class="navtgn <?php if($title = 'Celebrania:: Home'){echo 'active';} ?>"  >Home</a>
            </li>
            <li>
                <a href="" id="who_are_we" class="navtgn  <?php if($title = 'Celebrania:: Who are we'){echo 'active';} ?>">who are we</a>
            </li>
            <li>
                <a href="" id="our_work" class="navtgn">Our Works</a>
            </li>
            <li>
                <a href="" id="careers" class="navtgn">Careers</a>
            </li>
            <li>
                <a href="" id="contact" class="navtgn">Contact</a>
            </li>
        </ul>
    </div>
</nav>