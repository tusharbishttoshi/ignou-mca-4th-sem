<?php
    $pr = $this->mymodel->select_one('admin_name,admin_dp', array('admin_id'=>$this->session->userdata('dida_admin')), 'admin');
    if(!$pr){redirect(base_url('logout'));}
?>
<header class="header white-bg">
    <div class="sidebar-toggle-box">
      <i class="fa fa-bars"></i>
    </div>
    <!--logo start-->
    <a href="<?= site_url(); ?>" class="logo">DFI<span>Admin</span></a>
    <!--logo end-->
    <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
            <!-- settings end -->
            <!-- inbox dropdown start-->
            <li id="header_inbox_bar" class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge badge-danger"><?= $enquery_not = $this->mymodel->count_where('inquiry', array('inquiry_date>'=>date('Y-m-d 0:0:0'), 'inquiry_date<'=>date('Y-m-d 23:59:59'))); ?></span>
                </a>
                <ul class="dropdown-menu extended inbox">
                    <div class="notify-arrow notify-arrow-red"></div>
                    <li>
                        <p class="red">You have <?= $enquery_not; ?> new enquiry</p>
                    </li>
                    <?php 
                        $enq_not = $this->mymodel->selcet_limit('name,inquiry_message,inquiry_date', 'inquiry', array('inquiry_date>'=>date('Y-m-d 0:0:0'), 'inquiry_date<'=>date('Y-m-d 23:59:59')), 'inquiry_id', 3, 0); 
                        foreach($enq_not as $eant){
                    ?>
                    <li>
                        <a href="#">
                           <span class="photo"><img alt="avatar" src="<?= base_url('assets/images/message.png'); ?>"></span>
                            <span class="subject">
                            <span class="from"><?= $eant->name; ?></span>
                            <span class="time"><?= date('h:iA', strtotime($eant->inquiry_date)); ?></span>
                            </span>
                            <span class="message">
                                <?= substr($eant->inquiry_message,0,30); ?>.
                            </span>
                        </a>
                    </li>
                    <?php } ?>
                    
                    <li>
                        <a href="<?= site_url('enquiry'); ?>">See all enquiry</a>
                    </li>
                </ul>
            </li>
            <!-- inbox dropdown end -->
            <!-- notification dropdown start-->
            
            <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
    </div>
    <div class="top-nav ">
        <!--search & user info start-->
        <ul class="nav pull-right top-menu">
            <li>
                <input type="text" class="form-control search" placeholder="Search">
            </li>
            <!-- user login dropdown start-->
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <img alt="" src="<?= base_url('assets/images/profile/'.$pr->admin_dp); ?>" style="width:29px">
                    <span class="username"><?= $pr->admin_name; ?></span>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu extended logout dropdown-menu-right">
                    <div class="log-arrow-up"></div>
                    <li><a href="<?= site_url('profile'); ?>"><i class=" fa fa-suitcase"></i>Profile</a></li>
                    <li><a href="<?= site_url('profile'); ?>"><i class="fa fa-cog"></i> Settings</a></li>
                    <li><a href="<?= site_url('career/applications'); ?>"><i class="fa fa-bell-o"></i> Notification</a></li>
                    <li><a href="<?= site_url('logout'); ?>"><i class="fa fa-key"></i> Log Out</a></li>
                </ul>
            </li>
            <li class="sb-toggle-right">
                <i class="fa  fa-align-right"></i>
            </li>
            <!-- user login dropdown end -->
        </ul>
        <!--search & user info end-->
    </div>
    </header>
<div class="mynotification"></div>
<div class="preloader"></div>