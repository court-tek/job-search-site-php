<!-- Nav -->
<header class="header">
    <div class="header__container">
        <div class="header__navigationL">
            <h1 class="header__logo">
                <a href="/">
                    endeed
                </a>
            </h1>
            <div class="header__menu">
                <a href="#" class="header__menu-link">Home</a>
                <a href="#" class="header__menu-link">Company reivews</a>
                <a href="#" class="header__menu-link">Find salaries</a>
            </div>
        </div>
        
        <nav class="header__account">
            <a href="login.html" class="header__signin-link">Sign in</a>
            <!-- <a href="register.html" class="">Register</a> -->|
            <a href="/listings/new" class="<?php echo ($_SERVER['REQUEST_URI'] == '/listings/new') ? 'invisible' : '' ?> header__new-post-link">
                Employers / Post Job
            </a>
        </nav>
    </div>
</header>
