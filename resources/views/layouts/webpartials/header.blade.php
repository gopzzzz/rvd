
  <!-- TOP BAR -->
  <div class="top-bar">
    <div class="container">
      <div class="top-bar-left">
        <a href="tel:+918026691234" class="top-bar-item">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 10.8a19.79 19.79 0 01-3.07-8.64A2 2 0 012 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 14.92z"/></svg>
          +91 80 2669 1234
        </a>
        <a href="mailto:info@rvdcollege.com" class="top-bar-item">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
          info@rvdcollege.com
        </a>
        <span class="top-bar-item">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
          Mon–Sat: 9:00 AM – 5:00 PM
        </span>
      </div>
      <div class="top-bar-right">
        <div class="social-links">
          <a href="#" class="social-link" aria-label="Facebook">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg>
          </a>
          <a href="#" class="social-link" aria-label="Instagram">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
          </a>
          <a href="#" class="social-link" aria-label="YouTube">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M22.54 6.42a2.78 2.78 0 00-1.95-1.95C18.88 4 12 4 12 4s-6.88 0-8.59.47a2.78 2.78 0 00-1.95 1.95A29 29 0 001 12a29 29 0 00.46 5.58A2.78 2.78 0 003.41 19.5C5.12 20 12 20 12 20s6.88 0 8.59-.46a2.78 2.78 0 001.95-1.95A29 29 0 0023 12a29 29 0 00-.46-5.58z"/><polygon points="9.75 15.02 15.5 12 9.75 8.98 9.75 15.02" fill="white"/></svg>
          </a>
          <a href="#" class="social-link" aria-label="LinkedIn">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"/><circle cx="4" cy="4" r="2"/></svg>
          </a>
        </div>
        <a href="{{url('admission_index')}}" class="btn btn-gold" style="padding:7px 18px;font-size:12px;">Apply Now</a>
      </div>
    </div>
  </div>

  <!-- NAVBAR -->
  <nav class="navbar" role="navigation" aria-label="Main navigation">
    <div class="navbar-inner">
      <a href="{{url('index')}}" class="navbar-logo" aria-label="RVD College Home">
        <img src="{{asset('web/images/logo.png')}}" alt="RVD College Logo" width="64" height="64">
        <div class="navbar-logo-text">
          <span class="navbar-logo-name">RVD</span>
          <span class="navbar-logo-sub">College of Management</span>
          <span class="navbar-logo-tagline">& Information Technology</span>
        </div>
      </a>

      <ul class="navbar-nav" role="list">
        <li class="nav-item"><a href="{{url('index')}}" class="nav-link">Home</a></li>
        <li class="nav-item">
          <a href="{{url('aboutus_index')}}" class="nav-link">About Us <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg></a>
          <div class="dropdown">
            <div class="dropdown-header">About RVD</div>
            <a href="{{url('aboutus_index')}}#vision" class="dropdown-link">Vision & Mission</a>
            <a href="{{url('aboutus_index')}}#management" class="dropdown-link">Management</a>
            <a href="{{url('aboutus_index')}}#messages" class="dropdown-link">Messages</a>
            <a href="{{url('aboutus_index')}}#infrastructure" class="dropdown-link">Infrastructure</a>
            <a href="{{url('aboutus_index')}}#accreditation" class="dropdown-link">Accreditation</a>
          </div>
        </li>
        <li class="nav-item">
          <a href="{{url('programs')}}" class="nav-link">Programs <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg></a>
          <div class="dropdown">
            <div class="dropdown-header">Our Programs</div>
            <a href="{{url('programs')}}#bba" class="dropdown-link">BBA – Business Administration</a>
            <a href="{{url('programs')}}#bba" class="dropdown-link">B.Com – Commerce</a>
            <a href="{{url('programs')}}#curriculum" class="dropdown-link">Curriculum Overview</a>
            <a href="{{url('programs')}}#feestructure" class="dropdown-link">Fee Structure</a>
          </div>
        </li>
        <li class="nav-item"><a href="{{url('admission_index')}}" class="nav-link">Admissions</a></li>
        <li class="nav-item"><a href="{{url('faculty')}}" class="nav-link">Faculty</a></li>
        <li class="nav-item">
          <a href="{{url('studentlife')}}" class="nav-link">Student Life <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg></a>
          <div class="dropdown">
            <div class="dropdown-header">Campus Life</div>
            <a href="{{url('studentlife')}}#facilities" class="dropdown-link">Facilities</a>
            <a href="{{url('studentlife')}}#clubs" class="dropdown-link">Clubs & Activities</a>
            <a href="{{url('studentlife')}}#sports" class="dropdown-link">Sports</a>
            <a href="{{url('studentlife')}}#nss" class="dropdown-link">NSS & Social</a>
          </div>
        </li>
        <li class="nav-item"><a href="{{url('news_index')}}" class="nav-link">News & Events</a></li>
        <li class="nav-item"><a href="{{url('gallery')}}" class="nav-link">Gallery</a></li>
        <li class="nav-item"><a href="{{url('contact')}}" class="nav-link">Contact</a></li>
      </ul>

      <div class="navbar-cta">
        <a href="{{url('admission_index')}}" class="btn btn-primary">Apply Now</a>
      </div>

      <button class="hamburger" id="hamburger" aria-label="Toggle mobile menu" aria-expanded="false">
        <span></span><span></span><span></span>
      </button>
    </div>
  </nav>

  <!-- MOBILE NAV -->
  <div class="mobile-nav" id="mobileNav" role="dialog" aria-modal="true" aria-label="Mobile Navigation">
    <div class="mobile-nav-header">
      <div class="mobile-nav-logo">
        <img src="{{asset('web/images/logo.png')}}" alt="RVD Logo" width="50" height="50">
        <span>RVD College</span>
      </div>
      <button class="mobile-nav-close" id="mobileClose" aria-label="Close menu">✕</button>
    </div>
    <div class="mobile-nav-body">
      <a href="{{url('index')}}" class="mobile-nav-link">Home</a>
      <div class="mobile-nav-link" data-submenu="mobileAbout">About Us <span class="mobile-arrow">▼</span></div>
      <div class="mobile-submenu" id="mobileAbout">
        <a href="{{url('aboutus_index')}}#vision">Vision & Mission</a>
        <a href="{{url('aboutus_index')}}#management">Management</a>
        <a href="{{url('aboutus_index')}}#messages">Messages</a>
        <a href="{{url('aboutus_index')}}#infrastructure">Infrastructure</a>
      </div>
      <div class="mobile-nav-link" data-submenu="mobilePrograms">Programs <span class="mobile-arrow">▼</span></div>
      <div class="mobile-submenu" id="mobilePrograms">
        <a href="{{url('programs')}}#bba">BBA</a>
        <a href="{{url('programs')}}#bcom">B.Com</a>
        <a href="{{url('programs')}}#placements">Placements</a>
      </div>
      <a href="{{url('admission_index')}}" class="mobile-nav-link">Admissions</a>
      <a href="faculty.html" class="mobile-nav-link">Faculty</a>
      <div class="mobile-nav-link" data-submenu="mobileStudent">Student Life <span class="mobile-arrow">▼</span></div>
      <div class="mobile-submenu" id="mobileStudent">
        <a href="{{url('studentlife')}}#facilities">Facilities</a>
        <a href="{{url('studentlife')}}#clubs">Clubs</a>
        <a href="{{url('studentlife')}}#sports">Sports</a>
      </div>
      <a href="{{url('news_index')}}" class="mobile-nav-link">News & Events</a>
      <a href="{{url('gallery')}}" class="mobile-nav-link">Gallery</a>
      <a href="{{url('contact')}}" class="mobile-nav-link">Contact</a>
    </div>
    <div class="mobile-nav-footer">
      <a href="{{url('admission_index')}}" class="btn btn-primary">Apply Now 2026</a>
      <a href="{{url('contact')}}" class="btn btn-outline">Contact Us</a>
    </div>
  </div>
