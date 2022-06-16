<div class="nav-bar">
    <div class="credits-top">
        <div class="btn btn-link btn-left-top">
        <a href="" class="btn-click magnetic" data-strength="20" data-strength-text="10">
            <span class="btn-text">
                <div class="credit"><span>©</span></div>
                <div class="cbd"><span class="code-by">Code by </span><span class="dennis"><span class="dennis-span">Dennis</span> <span class="snellenberg">Snellenberg</span></span>
            </span>
            </div>
            </span>
        </a>
        </div>
    </div>
    <?php
        $url = $_SERVER['PHP_SELF'];
        $isWork = strpos($url,'index') > 0 ? 'active': '';
        //$isAbout = strpos($url,'about')  > 0 ? 'active': '';
        $isContact = strpos($url,'contact')  > 0 ? 'active': '';
    ?>
    <ul class="links-wrap">
        <li class="btn btn-link <?=$isWork?>">
        <a href="index.php" class="btn-click magnetic" data-strength="20" data-strength-text="10">
        <span class="btn-text">
        <span class="btn-text-inner">Work</span>
        </span>
        </a>
        </li>
        <!-- <li class="btn btn-link <?=$isAbout?>">
        <a href="about.php" class="btn-click magnetic" data-strength="20" data-strength-text="10">
        <span class="btn-text">
        <span class="btn-text-inner">About</span>
        </span>
        </a>
        </li> -->
        <li class="btn btn-link <?=$isContact?>">
        <a href="contact.php" class="btn-click magnetic" data-strength="20" data-strength-text="10">
        <span class="btn-text">
        <span class="btn-text-inner">Contact</span>
        </span>
        </a>
        </li>
        <li class="btn btn-link btn-menu">
        <div class="btn-click magnetic" data-strength="20" data-strength-text="10">
            <div class="btn-text">
                <span class="btn-text-inner">Menu</span>
            </div>
        </div>
        </li>
    </ul>
</div>