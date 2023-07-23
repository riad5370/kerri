<nav class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
        Noble<span>UI</span>
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
    <ul class="nav">
  <li class="nav-item nav-category">Main</li>
  <li class="nav-item">
    <a href="{{route('home')}}" class="nav-link">
      <i class="link-icon" data-feather="box"></i>
      <span class="link-title">Home</span>
    </a>
  </li>
  <li class="nav-item nav-category">web apps</li>
  <li class="nav-item">

    <a class="nav-link" data-toggle="collapse" href="#users" role="button" aria-expanded="false" aria-controls="emails">
      <i class="link-icon" data-feather="user"></i>
      <span class="link-title">User</span>
      <i class="link-arrow" data-feather="chevron-down"></i>
    </a>
    <div class="collapse" id="users">
      <ul class="nav sub-menu">
        <li class="nav-item">
          <a href="{{route('user')}}" class="nav-link">User List</a>
        </li>
      </ul>
    </div>
  </li>

  <li class="nav-item">

    <a class="nav-link" data-toggle="collapse" href="#banner" role="button" aria-expanded="false" aria-controls="banner">
      <i class="link-icon" data-feather="calendar"></i>
      <span class="link-title">Banner</span>
      <i class="link-arrow" data-feather="chevron-down"></i>
    </a>
    <div class="collapse" id="banner">
      <ul class="nav sub-menu">
        <li class="nav-item">
          <a href="{{route('banners.create')}}" class="nav-link">Add Banner</a>
        </li>
        <li class="nav-item">
          <a href="{{route('banners.index')}}" class="nav-link">Manage Banner</a>
        </li>
      </ul>
    </div>
  </li>
  <li class="nav-item">

     <a class="nav-link" data-toggle="collapse" href="#abouts" role="button" aria-expanded="false" aria-controls="abouts">
         <i class="link-icon" data-feather="mail"></i>
         <span class="link-title">About</span>
         <i class="link-arrow" data-feather="chevron-down"></i>
     </a>
      <div class="collapse" id="abouts">
          <ul class="nav sub-menu">
              <li class="nav-item">
                  <a href="{{route('about')}}" class="nav-link">Add About</a>
              </li>
              <li class="nav-item">
                <a href="{{route('social.icon')}}" class="nav-link">Social Icon</a>
            </li>
          </ul>
      </div>
  </li>

  <li class="nav-item">

    <a class="nav-link" data-toggle="collapse" href="#services" role="button" aria-expanded="false" aria-controls="services">
        <i class="link-icon" data-feather="mail"></i>
        <span class="link-title">Services</span>
        <i class="link-arrow" data-feather="chevron-down"></i>
    </a>
     <div class="collapse" id="services">
         <ul class="nav sub-menu">
             <li class="nav-item">
                 <a href="{{route('services.create')}}" class="nav-link">Add Service</a>
             </li>
             <li class="nav-item">
                <a href="{{route('services.index')}}" class="nav-link">Manage Service</a>
             </li>
         </ul>
     </div>
 </li>

 <li class="nav-item">
  <a class="nav-link" data-toggle="collapse" href="#skills" role="button" aria-expanded="false" aria-controls="skills">
      <i class="link-icon" data-feather="mail"></i>
      <span class="link-title">Skill</span>
      <i class="link-arrow" data-feather="chevron-down"></i>
  </a>
   <div class="collapse" id="skills">
       <ul class="nav sub-menu">
           <li class="nav-item">
               <a href="{{route('skills.create')}}" class="nav-link">Add Skill</a>
           </li>
           <li class="nav-item">
              <a href="{{route('skills.index')}}" class="nav-link">Manage Skill</a>
           </li>
       </ul>
   </div>
</li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#works" role="button" aria-expanded="false" aria-controls="works">
                <i class="link-icon" data-feather="mail"></i>
                <span class="link-title">Works</span>
                <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="works">
                <ul class="nav sub-menu">
                    <li class="nav-item">
                        <a href="{{route('protfolio.create')}}" class="nav-link">Add Work</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('protfolio.index')}}" class="nav-link">Manage Work</a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#blogs" role="button" aria-expanded="false" aria-controls="blogs">
                <i class="link-icon" data-feather="mail"></i>
                <span class="link-title">Blog</span>
                <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="blogs">
                <ul class="nav sub-menu">
                    <li class="nav-item">
                        <a href="{{route('blogs.create')}}" class="nav-link">Add Blog</a>
                    </li>
                    <li class="nav-item">
                      <a href="{{route('blogs.index')}}" class="nav-link">Manage Blog</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#contacts" role="button" aria-expanded="false" aria-controls="contacts">
                <i class="link-icon" data-feather="mail"></i>
                <span class="link-title">Contact</span>
                <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="contacts">
                <ul class="nav sub-menu">
                    <li class="nav-item">
                        <a href="{{route('edit.contact')}}" class="nav-link">Edit Contact</a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#inboxs" role="button" aria-expanded="false" aria-controls="inboxs">
                <i class="link-icon" data-feather="mail"></i>
                <span class="link-title">Inbox</span>
                <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="inboxs">
                <ul class="nav sub-menu">
                    <li class="nav-item">
                        <a href="{{route('manage.message')}}" class="nav-link">Manage Message</a>
                    </li>
                </ul>
            </div>
        </li>

</ul>
</div>
</nav>

