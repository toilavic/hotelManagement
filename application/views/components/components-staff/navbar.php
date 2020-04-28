<!-- // php code to get URL component -->
<?php  
    $directoryURI = $_SERVER['REQUEST_URI'];
    $path = parse_url($directoryURI, PHP_URL_PATH);
    $components = explode('/', $path);
    $third_part = $components[3];
?>

<nav>
                <ul>
                    <div class="sidebar-user">
                        <img src="../img/user.png" style="width: 64px">

                        <div class="font-weight-bold"><?= $this->session->userdata('userSession'); ?>
                        </div>

                        <small><?php echo ($this->session->userdata('type') == '0')? 'Admin': 'Staff'?> </small>
                    </div>  

                    <li class="<?php echo ( $third_part == '' || $third_part == 'check' )? 'active': ''?>">
                        <a href="/group13/Panel_staff/check">
                            <span><i class="far fa-calendar-check"></i></span>
                            <span>Check In/ Check Out</span>
                        </a>
                    </li>

                    <li class="<?php echo ( $third_part == '' || $third_part == 'toDoList' )? 'active': ''?>">
                        <!-- Task of Marianthi -->
                        <a href="/group13/Panel_staff/toDoList">
                            <span><i class="fas fa-clipboard-list"></i></span>
                            <span>To do list</span>
                        </a>
                    </li>

                    <li class="<?php echo ( $third_part == '' || $third_part == 'payment' )? 'active': ''?>">
                         <a href="/group13/Panel_staff/request">
                            <span><i class="fas fa-money-check"></i></span>
                            <span>Requests</span>
                        </a>
                    </li>

                    <li>
                        <a href="/group13/Login/logout">
                            <span><i class="fas fa-sign-out-alt"></i></span>
                            <span>Log-out</span>
                        </a>
                    </li>

                </ul>
            </nav>
</div>