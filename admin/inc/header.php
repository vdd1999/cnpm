<header class="navbar pcoded-header navbar-expand-lg navbar-light headerpos-fixed">
    <div class="m-header">
        <a class="mobile-menu" id="mobile-collapse1" href="#!"><span></span></a>
    </div>
    <a class="mobile-menu" id="mobile-header" href="#!">
        <i class="feather icon-more-horizontal"></i>
    </a>
    <div class="collapse navbar-collapse">
        <a href="#!" class="mob-toggler"></a>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <div class="main-search open">
                    <div class="input-group">
                        <input type="text" id="Input_li" class="form-control" placeholder="Search . . .">
                        <a href="#!" class="input-group-append search-close">
                            <i class="feather icon-x input-group-text"></i>
                        </a>
                        <span class="input-group-append search-btn btn btn-primary">
                            <i class="feather icon-search input-group-text"></i>
                        </span>
                    </div>
                </div>
            </li>
            <script>
                $(document).ready(function() {
                    $("#Input_li").on("keyup", function() {
                        var value = $(this).val().toLowerCase();
                        $("#myList li").filter(function() {
                            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                        });
                    });
                });
            </script>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li style="color: black;">
                <?php echo Session::get('fullname'); ?>
            </li>
            <!-- NOTIFICATION -->
            <li>
                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="icon feather icon-bell"></i></a>
                    <div class="dropdown-menu dropdown-menu-right notification">
                        <div class="noti-head">
                            <h6 class="d-inline-block m-b-0">Notifications</h6>
                            <div class="float-right">
                                <a href="#!" class="m-r-10">mark as read</a>
                                <a href="#!">clear all</a>
                            </div>
                        </div>
                        <div class="noti-footer">
                            <a href="#!">show all</a>
                        </div>
                    </div>
                </div>
            </li>
            <!-- END NOTIFICATION -->
            <li>
                <div class="dropdown drp-user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon feather icon-settings"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-notification">
                        <div class="pro-head">
                            <img src="./assets/images/login.png" class="rounded-circle">
                            <span>
                                <?php echo Session::get('fullname'); ?>
                            </span>
                            <?php
                            if (isset($_GET['q']) && $_GET['q'] == 'logout') {
                                Session::destroy();
                            }
                            ?>
                            <a href="?q=logout" class="dud-logout" title="Logout">
                                <i class="feather icon-log-out"></i>
                            </a>
                        </div>
                        <ul class="pro-body">
                            <li><a href="" type="button" class="dropdown-item" data-toggle="modal" data-target="#lockscreen"><i class="feather icon-lock"></i> Khóa màn hình</a></li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</header>

<!-- Modal -->
<div class="modal fade" id="lockscreen" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="text-center">
                <div class="card-body">
                    <h5 class="card-title">Cảnh báo!</h5>
                    <p class="card-text">Giao diện của bạn đang bị khóa tạm thời, vui lòng mở khóa để tiếp tục sử dụng.</p>
                    <button type="button" class="btn btn-primary mt-auto" data-dismiss="modal">Mở khóa</button>
                </div>
            </div>
        </div>
    </div>
</div>