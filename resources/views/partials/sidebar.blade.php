<!-- [ Sidebar Menu ] start -->
<nav class="pc-sidebar">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="{{ route('me') }}" class="b-brand">
                <!-- ========   Change your logo from here   ============ -->
                <h2 class="logo logo-lg"> Okra</h2>
                <h2 class=" logo logo-sm"> Okra</h2>
            </a>
        </div>
        <div class="tab-container">
            <div class="tab-sidemenu">
                <ul class="pc-tab-link nav flex-column" role="tablist" id="pc-layout-submenus">
                </ul>
            </div>
            <div class="tab-link">
                <div class="navbar-content">
                    <div class="tab-content" id="pc-layout-tab">
                    </div>
                    <ul class="pc-navbar">
                        @livewire('navigation-menu')
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- [ Sidebar Menu ] end -->
