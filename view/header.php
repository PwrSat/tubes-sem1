<?php if (cek_status2($_SESSION['user'])) { ?>
<div class="header_section">
    <div class="l">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="logo" href="#"><img src="../images/logo.png" alt="" height="20"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">&nbsp;&nbsp;&nbsp;&nbsp; </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                            <a class="nav-link" href="../logout.php">LOG_OUT</a>
                    </li>
                </ul>
            </div>
    </div>
    </nav>
</div>
</div>
<?php }?>