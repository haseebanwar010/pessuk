<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        
        <li class="<?php if(isset($page) && $page=="dashboard"){echo 'active'; }?>">
          <a href="<?php echo site_url(); ?>admin">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            
          </a>
        </li>
          
          <li class="treeview <?php if(isset($page) && ($page=="pages" || $page=="addpage" || $page=="editpage") ){echo 'active'; }?>">
          <a href="#">
            <i class="fa fa-file"></i>
            <span>Pages</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if(isset($page) && $page=="pages"){echo 'active'; }?>"><a href="<?php echo site_url('admin/pages'); ?>"><i class="fa fa-circle-o"></i> All Pages</a></li>
<!--            <li class="<?php if(isset($page) && $page=="addpage"){echo 'active'; }?>"><a href="<?php echo site_url('admin/pages/add'); ?>"><i class="fa fa-circle-o"></i> Add New</a></li>-->
            
          </ul>
        </li>
          <li class="treeview <?php if(isset($page) && ($page=="clients" || $page=="addclient" || $page=="editclient") ){echo 'active'; }?>">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Clients</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if(isset($page) && $page=="clients"){echo 'active'; }?>"><a href="<?php echo site_url('admin/clients'); ?>"><i class="fa fa-circle-o"></i> All Clients</a></li>
            <li class="<?php if(isset($page) && $page=="addclient"){echo 'active'; }?>"><a href="<?php echo site_url('admin/clients/add'); ?>"><i class="fa fa-circle-o"></i> Add New</a></li>
            
          </ul>
        </li>
          <li class="treeview <?php if(isset($page) && ($page=="staff" || $page=="addstaff" || $page=="editstaff") ){echo 'active'; }?>">
          <a href="#">
            <i class="fa fa-briefcase"></i>
            <span>Staff</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if(isset($page) && $page=="staff"){echo 'active'; }?>"><a href="<?php echo site_url('admin/staff'); ?>"><i class="fa fa-circle-o"></i> All Staff</a></li>
            <li class="<?php if(isset($page) && $page=="addstaff"){echo 'active'; }?>"><a href="<?php echo site_url('admin/staff/add'); ?>"><i class="fa fa-circle-o"></i> Add New</a></li>
            
          </ul>
        </li>
          <li class="treeview <?php if(isset($page) && ($page=="locations" || $page=="addlocation" || $page=="editlocation") ){echo 'active'; }?>">
          <a href="#">
            <i class="fa fa-map-marker"></i>
            <span>Locations</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if(isset($page) && $page=="locations"){echo 'active'; }?>"><a href="<?php echo site_url('admin/locations'); ?>"><i class="fa fa-circle-o"></i> All Locations</a></li>
            <li class="<?php if(isset($page) && $page=="addstaff"){echo 'active'; }?>"><a href="<?php echo site_url('admin/locations/add'); ?>"><i class="fa fa-circle-o"></i> Add New</a></li>
            
          </ul>
        </li>
        
        
          <li class="treeview <?php if(isset($page) && ($page=="tickets") ){echo 'active'; }?>">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Tickets</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if(isset($page) && $page=="tickets"){echo 'active'; }?>"><a href="<?php echo site_url('admin/tickets'); ?>"><i class="fa fa-circle-o"></i> All Tickets</a></li>
            
          </ul>
        </li>
         
          <li class="treeview <?php if(isset($page) && ($page=="upcoming_news" || $page=="add_upcoming_news" || $page=="edit_upcoming_news") ){echo 'active'; }?>">
          <a href="#">
            <i class="fa fa-newspaper-o"></i>
            <span>Upcoming News</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if(isset($page) && $page=="upcoming_news"){echo 'active'; }?>"><a href="<?php echo site_url('admin/upcoming_news'); ?>"><i class="fa fa-circle-o"></i> All News</a></li>
            <li class="<?php if(isset($page) && $page=="add_upcoming_news"){echo 'active'; }?>"><a href="<?php echo site_url('admin/upcoming_news/add'); ?>"><i class="fa fa-circle-o"></i> Add News</a></li>
            
          </ul>
        </li>
        
          
          <li class="treeview <?php if(isset($page) && ($page=="settings" || $page=="addsetting" || $page=="editsetting") ){echo 'active'; }?>">
          <a href="#">
            <i class="fa fa-gears"></i>
            <span>Settings</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if(isset($page) && $page=="settings"){echo 'active'; }?>"><a href="<?php echo site_url('admin/settings'); ?>"><i class="fa fa-circle-o"></i> Edit Site Settings</a></li>
            
          </ul>
        </li>
         
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
