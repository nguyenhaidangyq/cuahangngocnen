<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User Profile-->
        <div class="user-profile">
            <div class="user-pro-body">
                <div><img src="{{ asset('admin/assets/images/users/2.jpg') }}" alt="user-img" class="img-circle"></div>
                <div class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu"
                        data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                        <span class="caret"></span></a>
                    <div class="dropdown-menu animated flipInY">
                        <!-- text-->
                        <a href="javascript:void(0)" class="dropdown-item"><i class="ti-user"></i> My
                            Profile</a>
                        <!-- text-->
                        <a href="javascript:void(0)" class="dropdown-item"><i class="ti-wallet"></i> My
                            Balance</a>
                        <!-- text-->
                        <a href="javascript:void(0)" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
                        <!-- text-->
                        <div class="dropdown-divider"></div>
                        <!-- text-->
                        <a href="javascript:void(0)" class="dropdown-item"><i class="ti-settings"></i> Account
                            Setting</a>
                        <!-- text-->
                        <div class="dropdown-divider"></div>
                        <!-- text-->
                        <a href="pages-login.html" class="dropdown-item"><i class="fas fa-power-off"></i>
                            Logout</a>
                        <!-- text-->
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-small-cap">--- Danh m???c ---</li>
                <li>
                    <a class="waves-effect waves-dark" href="{{ route('dashboard') }}" aria-expanded="false">
                        <i class="fa-solid fa-gauge"></i>
                        <span class="hide-menu">T???ng quan</span>
                    </a>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="{{ route('customer.index') }}"
                        aria-expanded="false"> <i class="fa-sharp fa-solid fa-users"></i><span class="hide-menu">Kh??ch
                            h??ng</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('customer.index') }}">T???t c??? kh??ch h??ng</a></li>
                        <li><a href="{{ route('customer.create') }}">T???o m???i</a></li>
                        <li><a href="{{ route('customer.trashed') }}">Th??ng r??c
                            </a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="{{ route('debit.index') }}"
                        aria-expanded="false"> <i class="fa-solid fa-credit-card"></i></i><span class="hide-menu">Ghi
                            n???</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('debit.index') }}">Danh s??ch ghi n???</a></li>
                        <li><a href="{{ route('debit.trashed') }}">Th??ng r??c
                            </a></li>
                    </ul>
                </li>
                <li>
                    <a class="waves-effect waves-dark" href="{{ route('report.index') }}" aria-expanded="false">
                        <i class="fa-solid fa-gauge"></i>
                        <span class="hide-menu">Th???ng k??</span>
                    </a>
                </li>
                <li>
                    <a class="waves-effect waves-dark" href="https://docs.google.com/document/d/1qbl-TQg2TJwN2RH5mJ3BL7lItI6oQVrycxty_S2PDoo/edit?usp=sharing" target="_blank" aria-expanded="false">
                        <i class="fa-solid fa-gauge"></i>
                        <span class="hide-menu">H?????ng d???n s??? d???ng</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->