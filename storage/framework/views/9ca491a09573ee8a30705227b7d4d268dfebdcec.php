<aside class="left-sidebar">

        <div class="center-block w-xxl w-auto-xs p-v-md">
            <div class="navbar">
                <div class="m-t-lg text-center">
                    <img class="logo" src="/assets/images/batman-logo.png">
                    <div class="user-detail">
                            <h5><?php echo e(Auth::user()->name); ?></h5>
                            <h5><?php echo e(Auth::user()->email); ?></h5>
                        <br>
                    </div>
                </div>
            </div>
        </div>

    <div class="side-menu dashboard">
        <a href="/user/dashboard">
            <div class="pading-menu">
                <i class="fa fa-tachometer" aria-hidden="true"></i>Dashboard
            </div>
        </a>
    </div>

    <div class="side-menu logout">
        <a href="/user/logout">
            <div class="pading-menu">
                <i class="fa fa-sign-out" aria-hidden="true"></i>Logout
            </div>
        </a>
    </div>

</aside>
<?php /**PATH E:\Image\website\batman\app\Modules/User/resources/views/layouts/sidebar.blade.php ENDPATH**/ ?>