<nav class="navbar navbar-light w-100 align-items-center justify-content-center border border-dark p-0 m-0 pt-2 pb-2 fixed-top bg-white">
    <div class="container-fluid m-0 p-0 justify-content-center">
        <div class="row align-items-center w-100 justify-content-center">
            <div class="col-12 col-md-4 align-items-center justify-content-center p-0 m-0">
                <a class="navbar-brand d-flex p-0 m-0" href="/" style="height: max-content; margin-left: 1rem !important;">
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('/logo.png') }}" width="60" height="60" class="d-inline-block align-item-center" alt="">
                        <h1 class="font-bold" style="margin-left:1rem; font-family: 'Poppins', sans-serif;">
                            WasteXpert
                        </h1>
                    </div>
                </a>
            </div>

            <?php
            function isActive($page)
            {
                return $_SERVER['REQUEST_URI'] === $page;
            }
            ?>

            <div class="col-12 col-md-4 text-center align-items-center justify-content-center">
                <ul class="nav align-items-center justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link hover:text-[#97D729] <?php echo isActive('/') ? 'text-[#97D729] font-bold' : 'text-black font-bolder'; ?>" style="font-family: 'Montserrat', sans-serif;" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hover:text-[#97D729] <?php echo isActive('/classification') ? 'text-[#97D729] font-bold' : 'text-black font-bolder'; ?>" style="font-family: 'Montserrat', sans-serif;" href="/classification">Classification</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hover:text-[#97D729] <?php echo isActive('/history') ? 'text-[#97D729] font-bold' : 'text-black font-bolder'; ?>" style="font-family: 'Montserrat', sans-serif;" href="/history">History</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hover:text-[#97D729] <?php echo isActive('/about') ? 'text-[#97D729] font-bold' : 'text-black font-bolder'; ?>" style="font-family: 'Montserrat', sans-serif;" href="/about">About</a>
                    </li>
                </ul>
            </div>

            <div class="col-12 col-md-4 align-items-center justify-content-center d-none d-md-block"><br></div>
        </div>
    </div>
</nav>