<aside>
    <div id="sidebar"  class="nav-collapse ">
      <!-- sidebar menu start-->
      <ul class="sidebar-menu" id="nav-accordion">
          <li>
              <a href="<?= site_url(); ?>">
                  <i class="fa fa-dashboard"></i>
                  <span>Dashboard</span>
              </a>
          </li>

          <li>
              <a href="<?= site_url('events'); ?>">
                  <i class="fa fa-calendar"></i>
                  <span>Events</span>
              </a>
          </li>
          
          <li>
              <a href="<?= site_url('programs'); ?>">
                  <i class="fa fa-calendar"></i>
                  <span>Programs</span>
              </a>
          </li>
          
          <li class="sub-menu">
              <a href="javascript:;" >
                  <i class="fa fa-tags"></i>
                  <span>Gallery</span>
              </a>
              <ul class="sub">
                  <li><a  href="<?= site_url('gallery'); ?>">Images</a></li>
                  <li><a  href="<?= site_url('gallery/videos'); ?>">Videos</a></li>
              </ul>
          </li>
          <!--<li class="sub-menu">
              <a href="javascript:;" >
                  <i class="fa fa-code"></i>
                  <span>Pages management</span>
              </a>
              <ul class="sub">
                  <li><a  href="<?= site_url('pages'); ?>">Seo Content</a></li>
                  <li><a  href="<?= site_url('pages/banners'); ?>">Banners</a></li>
              </ul>
          </li>-->
          
          <li>
              <a href="<?= site_url('enquiry'); ?>">
                  <i class="fa fa-envelope"></i>
                  <span>Enquiries</span>
              </a>
          </li>
          <li>
              <a href="<?= site_url('members'); ?>">
                  <i class="fa fa-users"></i>
                  <span>Members</span>
              </a>
          </li>
          
        
          <!--multi level menu end-->

      </ul>
      <!-- sidebar menu end-->
    </div>
    </aside>