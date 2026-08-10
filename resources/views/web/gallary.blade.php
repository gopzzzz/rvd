
 @extends('layouts.weblayout')

@section('content')

<!-- PAGE HERO -->
<section class="page-hero">
  <div class="container">
    <div class="page-hero-content reveal">
      <h1>Our <span>Gallery</span></h1>
      <p>Explore the vibrant life at RVD College through our photo gallery.</p>
    </div>
  </div>
</section>

<!-- GALLERY SECTION -->
<section class="bg-white section-pad">
  <div class="container">
    <div class="section-header center reveal">
      <h2>Campus <span>Moments</span></h2>
      <p class="section-subtitle">A visual journey through our academic and extracurricular activities.</p>
    </div>

    <!-- Gallery Filters -->
    <div class="gallery-filter reveal" style="display:flex;justify-content:center;flex-wrap:wrap;gap:10px;margin-bottom:40px;">
      <button data-filter="all" class="gallery-filter-btn active btn btn-outline">All Photos</button>
      <button data-filter="campus" class="gallery-filter-btn btn btn-outline">Campus</button>
      <button data-filter="events" class="gallery-filter-btn btn btn-outline">Events</button>
      <button data-filter="sports" class="gallery-filter-btn btn btn-outline">Sports</button>
      <button data-filter="convocation" class="gallery-filter-btn btn btn-outline">Convocation</button>
      <button data-filter="industrial" class="gallery-filter-btn btn btn-outline">Industrial Visits</button>
    </div>

    <!-- Gallery Grid (16 items) -->
    <div class="gallery-full-grid reveal" style="display:grid;grid-template-columns:repeat(auto-fill, minmax(250px, 1fr));gap:20px;grid-auto-flow:dense;">
      
      <!-- 1 -->
      <div class="gallery-full-item wide" data-category="campus" data-lightbox="images/hero_campus.jpg" style="position:relative;overflow:hidden;border-radius:8px;cursor:pointer;grid-column: span 2;">
        <img src="{{asset('web/images/hero_campus.jpg')}}" alt="Campus View" loading="lazy" style="width:100%;height:100%;object-fit:cover;transition:transform 0.3s ease;">
        <div class="gallery-item-info" style="position:absolute;bottom:0;left:0;right:0;padding:20px;background:linear-gradient(transparent, rgba(0,0,0,0.8));color:white;">
          <h5 style="margin:0;font-size:18px;">Campus View</h5>
          <span style="font-size:14px;color:var(--gold-bright);">Campus</span>
        </div>
      </div>

      <!-- 2 -->
      <div class="gallery-full-item" data-category="events" data-lightbox="images/students_classroom.jpg" style="position:relative;overflow:hidden;border-radius:8px;cursor:pointer;">
        <img src="{{asset('web/images/students_classroom.jpg')}}" alt="Cultural Event" loading="lazy" style="width:100%;height:100%;object-fit:cover;transition:transform 0.3s ease;aspect-ratio:1;">
        <div class="gallery-item-info" style="position:absolute;bottom:0;left:0;right:0;padding:20px;background:linear-gradient(transparent, rgba(0,0,0,0.8));color:white;">
          <h5 style="margin:0;font-size:18px;">Cultural Fest</h5>
          <span style="font-size:14px;color:var(--gold-bright);">Events</span>
        </div>
      </div>

      <!-- 3 -->
      <div class="gallery-full-item tall" data-category="campus" data-lightbox="images/college_library.jpg" style="position:relative;overflow:hidden;border-radius:8px;cursor:pointer;grid-row: span 2;">
        <img src="{{asset('web/images/college_library.jpg')}}" alt="College Library" loading="lazy" style="width:100%;height:100%;object-fit:cover;transition:transform 0.3s ease;">
        <div class="gallery-item-info" style="position:absolute;bottom:0;left:0;right:0;padding:20px;background:linear-gradient(transparent, rgba(0,0,0,0.8));color:white;">
          <h5 style="margin:0;font-size:18px;">Knowledge Hub</h5>
          <span style="font-size:14px;color:var(--gold-bright);">Campus</span>
        </div>
      </div>

      <!-- 4 -->
      <div class="gallery-full-item" data-category="convocation" data-lightbox="images/convocation.jpg" style="position:relative;overflow:hidden;border-radius:8px;cursor:pointer;">
        <img src="{{asset('web/images/convocation.jpg')}}" alt="Graduation Day" loading="lazy" style="width:100%;height:100%;object-fit:cover;transition:transform 0.3s ease;aspect-ratio:1;">
        <div class="gallery-item-info" style="position:absolute;bottom:0;left:0;right:0;padding:20px;background:linear-gradient(transparent, rgba(0,0,0,0.8));color:white;">
          <h5 style="margin:0;font-size:18px;">Graduation Day</h5>
          <span style="font-size:14px;color:var(--gold-bright);">Convocation</span>
        </div>
      </div>

      <!-- 5 -->
      <div class="gallery-full-item" data-category="sports" data-lightbox="images/hero_campus.jpg" style="position:relative;overflow:hidden;border-radius:8px;cursor:pointer;">
        <img src="{{asset('web/images/hero_campus.jpg')}}" alt="Sports Meet" loading="lazy" style="width:100%;height:100%;object-fit:cover;transition:transform 0.3s ease;aspect-ratio:1;">
        <div class="gallery-item-info" style="position:absolute;bottom:0;left:0;right:0;padding:20px;background:linear-gradient(transparent, rgba(0,0,0,0.8));color:white;">
          <h5 style="margin:0;font-size:18px;">Annual Sports Meet</h5>
          <span style="font-size:14px;color:var(--gold-bright);">Sports</span>
        </div>
      </div>

      <!-- 6 -->
      <div class="gallery-full-item wide" data-category="industrial" data-lightbox="images/students_classroom.jpg" style="position:relative;overflow:hidden;border-radius:8px;cursor:pointer;grid-column: span 2;">
        <img src="{{asset('web/images/students_classroom.jpg')}}" alt="Industry Visit" loading="lazy" style="width:100%;height:100%;object-fit:cover;transition:transform 0.3s ease;aspect-ratio:2/1;">
        <div class="gallery-item-info" style="position:absolute;bottom:0;left:0;right:0;padding:20px;background:linear-gradient(transparent, rgba(0,0,0,0.8));color:white;">
          <h5 style="margin:0;font-size:18px;">Tech Park Visit</h5>
          <span style="font-size:14px;color:var(--gold-bright);">Industrial Visits</span>
        </div>
      </div>

      <!-- 7 -->
      <div class="gallery-full-item" data-category="events" data-lightbox="images/convocation.jpg" style="position:relative;overflow:hidden;border-radius:8px;cursor:pointer;">
        <img src="{{asset('web/images/convocation.jpg')}}" alt="Seminar" loading="lazy" style="width:100%;height:100%;object-fit:cover;transition:transform 0.3s ease;aspect-ratio:1;">
        <div class="gallery-item-info" style="position:absolute;bottom:0;left:0;right:0;padding:20px;background:linear-gradient(transparent, rgba(0,0,0,0.8));color:white;">
          <h5 style="margin:0;font-size:18px;">Guest Lecture</h5>
          <span style="font-size:14px;color:var(--gold-bright);">Events</span>
        </div>
      </div>

      <!-- 8 -->
      <div class="gallery-full-item" data-category="campus" data-lightbox="images/college_library.jpg" style="position:relative;overflow:hidden;border-radius:8px;cursor:pointer;">
        <img src="{{asset('web/images/college_library.jpg')}}" alt="Study Area" loading="lazy" style="width:100%;height:100%;object-fit:cover;transition:transform 0.3s ease;aspect-ratio:1;">
        <div class="gallery-item-info" style="position:absolute;bottom:0;left:0;right:0;padding:20px;background:linear-gradient(transparent, rgba(0,0,0,0.8));color:white;">
          <h5 style="margin:0;font-size:18px;">Quiet Study Zone</h5>
          <span style="font-size:14px;color:var(--gold-bright);">Campus</span>
        </div>
      </div>
      
      <!-- 9 -->
      <div class="gallery-full-item" data-category="sports" data-lightbox="images/students_classroom.jpg" style="position:relative;overflow:hidden;border-radius:8px;cursor:pointer;">
        <img src="{{asset('web/images/students_classroom.jpg')}}" alt="Cricket Match" loading="lazy" style="width:100%;height:100%;object-fit:cover;transition:transform 0.3s ease;aspect-ratio:1;">
        <div class="gallery-item-info" style="position:absolute;bottom:0;left:0;right:0;padding:20px;background:linear-gradient(transparent, rgba(0,0,0,0.8));color:white;">
          <h5 style="margin:0;font-size:18px;">Inter-College Cricket</h5>
          <span style="font-size:14px;color:var(--gold-bright);">Sports</span>
        </div>
      </div>

      <!-- 10 -->
      <div class="gallery-full-item" data-category="convocation" data-lightbox="images/hero_campus.jpg" style="position:relative;overflow:hidden;border-radius:8px;cursor:pointer;">
        <img src="{{asset('web/images/hero_campus.jpg')}}" alt="Alumni Meet" loading="lazy" style="width:100%;height:100%;object-fit:cover;transition:transform 0.3s ease;aspect-ratio:1;">
        <div class="gallery-item-info" style="position:absolute;bottom:0;left:0;right:0;padding:20px;background:linear-gradient(transparent, rgba(0,0,0,0.8));color:white;">
          <h5 style="margin:0;font-size:18px;">Alumni Gathering</h5>
          <span style="font-size:14px;color:var(--gold-bright);">Convocation</span>
        </div>
      </div>

      <!-- 11 -->
      <div class="gallery-full-item" data-category="industrial" data-lightbox="images/convocation.jpg" style="position:relative;overflow:hidden;border-radius:8px;cursor:pointer;">
        <img src="{{asset('web/images/convocation.jpg')}}" alt="Factory Tour" loading="lazy" style="width:100%;height:100%;object-fit:cover;transition:transform 0.3s ease;aspect-ratio:1;">
        <div class="gallery-item-info" style="position:absolute;bottom:0;left:0;right:0;padding:20px;background:linear-gradient(transparent, rgba(0,0,0,0.8));color:white;">
          <h5 style="margin:0;font-size:18px;">Manufacturing Plant Tour</h5>
          <span style="font-size:14px;color:var(--gold-bright);">Industrial Visits</span>
        </div>
      </div>

      <!-- 12 -->
      <div class="gallery-full-item" data-category="events" data-lightbox="images/college_library.jpg" style="position:relative;overflow:hidden;border-radius:8px;cursor:pointer;">
        <img src="{{asset('web/images/college_library.jpg')}}" alt="Hackathon" loading="lazy" style="width:100%;height:100%;object-fit:cover;transition:transform 0.3s ease;aspect-ratio:1;">
        <div class="gallery-item-info" style="position:absolute;bottom:0;left:0;right:0;padding:20px;background:linear-gradient(transparent, rgba(0,0,0,0.8));color:white;">
          <h5 style="margin:0;font-size:18px;">24hr Hackathon</h5>
          <span style="font-size:14px;color:var(--gold-bright);">Events</span>
        </div>
      </div>

      <!-- 13 -->
      <div class="gallery-full-item" data-category="campus" data-lightbox="images/students_classroom.jpg" style="position:relative;overflow:hidden;border-radius:8px;cursor:pointer;">
        <img src="{{asset('web/images/students_classroom.jpg')}}" alt="Computer Lab" loading="lazy" style="width:100%;height:100%;object-fit:cover;transition:transform 0.3s ease;aspect-ratio:1;">
        <div class="gallery-item-info" style="position:absolute;bottom:0;left:0;right:0;padding:20px;background:linear-gradient(transparent, rgba(0,0,0,0.8));color:white;">
          <h5 style="margin:0;font-size:18px;">IT Lab</h5>
          <span style="font-size:14px;color:var(--gold-bright);">Campus</span>
        </div>
      </div>

      <!-- 14 -->
      <div class="gallery-full-item" data-category="sports" data-lightbox="images/hero_campus.jpg" style="position:relative;overflow:hidden;border-radius:8px;cursor:pointer;">
        <img src="{{asset('web/images/hero_campus.jpg')}}" alt="Badminton" loading="lazy" style="width:100%;height:100%;object-fit:cover;transition:transform 0.3s ease;aspect-ratio:1;">
        <div class="gallery-item-info" style="position:absolute;bottom:0;left:0;right:0;padding:20px;background:linear-gradient(transparent, rgba(0,0,0,0.8));color:white;">
          <h5 style="margin:0;font-size:18px;">Badminton Tournament</h5>
          <span style="font-size:14px;color:var(--gold-bright);">Sports</span>
        </div>
      </div>

      <!-- 15 -->
      <div class="gallery-full-item" data-category="industrial" data-lightbox="images/college_library.jpg" style="position:relative;overflow:hidden;border-radius:8px;cursor:pointer;">
        <img src="{{asset('web/images/college_library.jpg')}}" alt="Corporate Connect" loading="lazy" style="width:100%;height:100%;object-fit:cover;transition:transform 0.3s ease;aspect-ratio:1;">
        <div class="gallery-item-info" style="position:absolute;bottom:0;left:0;right:0;padding:20px;background:linear-gradient(transparent, rgba(0,0,0,0.8));color:white;">
          <h5 style="margin:0;font-size:18px;">Corporate Connect</h5>
          <span style="font-size:14px;color:var(--gold-bright);">Industrial Visits</span>
        </div>
      </div>

      <!-- 16 -->
      <div class="gallery-full-item" data-category="events" data-lightbox="images/convocation.jpg" style="position:relative;overflow:hidden;border-radius:8px;cursor:pointer;">
        <img src="{{asset('web/images/convocation.jpg')}}" alt="Orientation" loading="lazy" style="width:100%;height:100%;object-fit:cover;transition:transform 0.3s ease;aspect-ratio:1;">
        <div class="gallery-item-info" style="position:absolute;bottom:0;left:0;right:0;padding:20px;background:linear-gradient(transparent, rgba(0,0,0,0.8));color:white;">
          <h5 style="margin:0;font-size:18px;">Freshers Orientation</h5>
          <span style="font-size:14px;color:var(--gold-bright);">Events</span>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- VIDEO SECTION -->
<section class="bg-light section-pad">
  <div class="container">
    <div class="section-header center reveal">
      <h2>Campus <span>Tour</span></h2>
      <p class="section-subtitle">Take a virtual walk through our modern campus.</p>
    </div>
    <div class="video-container reveal" style="max-width:800px;margin:0 auto;text-align:center;">
      <div class="video-placeholder" style="position:relative;background:#1a1a1a;border-radius:12px;overflow:hidden;aspect-ratio:16/9;display:flex;align-items:center;justify-content:center;cursor:pointer;margin-bottom:30px;">
        <img src="{{asset('web/images/hero_campus.jpg')}}" alt="Campus Tour Video" style="position:absolute;top:0;left:0;width:100%;height:100%;object-fit:cover;opacity:0.6;">
        <div class="play-btn" style="width:80px;height:80px;background:var(--crimson);border-radius:50%;display:flex;align-items:center;justify-content:center;z-index:1;box-shadow:0 10px 20px rgba(139,0,0,0.4);transition:transform 0.3s ease;">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="36" height="36" style="margin-left:5px;"><polygon points="5 3 19 12 5 21 5 3"></polygon></svg>
        </div>
      </div>
      <p style="margin-bottom:20px;font-size:16px;">Experience the vibrant learning environment, modern infrastructure, and student life at RVD College of Management & Information Technology before you even step foot on campus.</p>
      <a href="images/brochure.pdf" class="btn btn-primary" download>Download Brochure</a>
    </div>
  </div>
</section>

<!-- STATS SECTION -->
<section class="stats-section section-pad reveal" style="background:var(--primary);color:white;">
  <div class="container">
    <div class="stats-grid" style="display:grid;grid-template-columns:repeat(auto-fit, minmax(200px, 1fr));gap:30px;text-align:center;">
      <div class="stat-item">
        <h3 class="counter" data-target="500" data-suffix="+" style="font-size:48px;color:var(--gold-bright);margin-bottom:10px;">0</h3>
        <p style="font-size:18px;font-weight:500;">Students</p>
      </div>
      <div class="stat-item">
        <h3 class="counter" data-target="20" data-suffix="+" style="font-size:48px;color:var(--gold-bright);margin-bottom:10px;">0</h3>
        <p style="font-size:18px;font-weight:500;">Events/Year</p>
      </div>
      <div class="stat-item">
        <h3 class="counter" data-target="50" data-suffix="+" style="font-size:48px;color:var(--gold-bright);margin-bottom:10px;">0</h3>
        <p style="font-size:18px;font-weight:500;">Clubs Activities</p>
      </div>
      <div class="stat-item">
        <h3 class="counter" data-target="6" data-suffix="+" style="font-size:48px;color:var(--gold-bright);margin-bottom:10px;">0</h3>
        <p style="font-size:18px;font-weight:500;">Years of Excellence</p>
      </div>
    </div>
  </div>
</section>
  
 @endsection

