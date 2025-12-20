<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary d-flex flex-column">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu"
        aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel">
                Company name
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                        <svg class="bi" aria-hidden="true">
                            <use xlink:href="#house-fill"></use>
                        </svg>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
                        <svg class="bi" aria-hidden="true">
                            <use xlink:href="#file-earmark"></use>
                        </svg>
                        My Posts
                    </a>
                </li>
            </ul>
            <hr class="my-3" />
            <ul class="nav  mb-auto">
                <li class="nav-item d-flex align-items-center">

                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="nav-link ">
                            <svg class="bi" aria-hidden="true">
                                <use xlink:href="#door-closed"></use>
                            </svg> Logout
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>