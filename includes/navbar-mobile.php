<div class="mouse-pos-list-btn no-select"></div>
    <div class="mouse-pos-list-span no-select">
        <p>View</p>
        </div>
        <div class="btn btn-hamburger">
        <div class="btn-click magnetic" data-strength="50" data-strength-text="25">
            <div class="btn-fill"></div>
            <div class="btn-text">
                <div class="btn-bars"></div>
                <span class="btn-text-inner">Menu</span>
            </div>
        </div>
    </div>
<div class="overlay fixed-nav-back"></div>

<div class="fixed-nav theme-dark">
    <div class="fixed-nav-rounded-div">
        <div class="rounded-div-wrap">
            <div class="rounded-div"></div>
        </div>
    </div>
    <div class="fixed-nav-inner">
        <div class="row nav-row">
            <h5>Navigation</h5>
            <div class="stripe"></div>
            <?php
                $url = $_SERVER['PHP_SELF'];
                $isHome = strpos($url,'index') > 0 ? 'active': '';
                $isWork = strpos($url,'work') > 0 ? 'active': '';
                // $isAbout = strpos($url,'about')  > 0 ? 'active': '';
                $isContact = strpos($url,'contact')  > 0 ? 'active': '';
            ?>
            <ul class="links-wrap">
                <li class="btn btn-link <?=$isHome?>">
                <a href="index.php" class="btn-click magnetic" data-strength="24" data-strength-text="12">
                <span class="btn-text">
                <span class="btn-text-inner">Home</span>
                </span>
                </a>
                </li>
                <!-- <li class="btn btn-link <?=$isWork?>">
                <a href="work.php" class="btn-click magnetic" data-strength="24" data-strength-text="12">
                <span class="btn-text">
                <span class="btn-text-inner">Work</span>
                </span>
                </a>
                </li> -->
                <!-- <li class="btn btn-link <?=$isAbout?>">
                <a href="about.php" class="btn-click magnetic" data-strength="24" data-strength-text="12">
                <span class="btn-text">
                <span class="btn-text-inner">About</span>
                </span>
                </a>
                </li> -->
                <li class="btn btn-link <?=$isContact?>">
                <a href="contact.php" class="btn-click magnetic" data-strength="24" data-strength-text="12">
                <span class="btn-text">
                <span class="btn-text-inner">Contact</span>
                </span>
                </a>
                </li>
            </ul>
        </div>
        <div class="row social-row">
            <div class="stripe"></div>
            <div class="socials">
                <h5>Socials</h5>
                <ul>
                <li class="btn btn-link btn-link-external">
                    <a href="https://www.awwwards.com/dennissnellenberg/" target="_blank" class="btn-click magnetic" data-strength="20" data-strength-text="10">
                    <span class="btn-text">
                    <span class="btn-text-inner">Awwwards</span>
                    </span>
                    </a>
                </li>
                <li class="btn btn-link btn-link-external">
                    <a href="https://www.instagram.com/codebydennis/" target="_blank" class="btn-click magnetic" data-strength="20" data-strength-text="10">
                    <span class="btn-text">
                    <span class="btn-text-inner">Instagram</span>
                    </span>
                    </a>
                </li>
                <li class="btn btn-link btn-link-external">
                    <a href="https://dribbble.com/dennissnellenberg" target="_blank" class="btn-click magnetic" data-strength="20" data-strength-text="10">
                    <span class="btn-text">
                    <span class="btn-text-inner">Dribbble</span>
                    </span>
                    </a>
                </li>
                <li class="btn btn-link btn-link-external">
                    <a href="https://www.linkedin.com/in/dennissnellenberg/" target="_blank" class="btn-click magnetic" data-strength="20" data-strength-text="10">
                    <span class="btn-text">
                    <span class="btn-text-inner">LinkedIn</span>
                    </span>
                    </a>
                </li>
                </ul>
            </div>
        </div>
    </div>
</div>