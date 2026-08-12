
 @extends('layouts.weblayout')

@section('content')

<style>
    /* Specific styles for news page */
    .news-layout {
      display: grid;
      grid-template-columns: 2fr 1fr;
      gap: 40px;
    }
    
    .news-main-card {
      margin-bottom: 30px;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
      background: white;
    }
    
    .news-main-card img {
      width: 100%;
      height: 350px;
      object-fit: cover;
      display: block;
    }
    
    .news-main-card .news-content {
      padding: 25px;
    }
    
    .news-sidebar {
      background: var(--light-gray);
      padding: 30px;
      border-radius: 8px;
      align-self: start;
      box-shadow: 0 4px 15px rgba(0,0,0,0.05);
    }
    
    .news-sidebar-item {
      margin-bottom: 20px;
      padding-bottom: 20px;
      border-bottom: 1px solid #ddd;
    }
    
    .news-sidebar-item:last-child {
      margin-bottom: 0;
      padding-bottom: 0;
      border-bottom: none;
    }
    
    .events-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 30px;
    }
    
    .event-card {
      background: white;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 5px 15px rgba(0,0,0,0.08);
      transition: transform 0.3s;
    }
    
    .event-card:hover {
      transform: translateY(-5px);
    }
    
    .event-date {
      background: var(--crimson);
      color: white;
      padding: 15px;
      text-align: center;
    }
    
    .notices-table-wrapper {
      overflow-x: auto;
      background: white;
      border-radius: 8px;
      box-shadow: 0 5px 20px rgba(0,0,0,0.05);
      border: 1px solid #eaeaea;
    }
    
    .notices-table {
      width: 100%;
      border-collapse: collapse;
      text-align: left;
    }
    
    .notices-table th {
      padding: 15px 20px;
      color: var(--crimson);
      font-family: var(--font-heading);
      border-bottom: 2px solid var(--gold);
      background: var(--light-gray);
    }
    
    .notices-table td {
      padding: 15px 20px;
      color: #555;
      border-bottom: 1px solid #eaeaea;
    }
    
    .gallery-mini-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 15px;
    }
    
    .gallery-img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      border-radius: 4px;
      transition: transform 0.3s;
      cursor: pointer;
    }
    
    .gallery-img:hover {
      transform: scale(1.03);
    }
    
    @media (max-width: 991px) {
      .news-layout {
        grid-template-columns: 1fr;
      }
    }
    
    @media (max-width: 768px) {
      .gallery-mini-grid {
        grid-template-columns: repeat(2, 1fr);
      }
      .news-main-card img {
        height: 250px;
      }
    }
  </style>
<!-- PAGE HERO -->
  <header class="page-hero reveal">
    <div class="page-hero-overlay"></div>
    <div class="container page-hero-content">
      <h1 class="page-hero-title">News & <span>Events</span></h1>
      <p class="page-hero-desc">Stay updated with the latest happenings at RVD College.</p>
    </div>
  </header>

  <!-- FEATURED NEWS -->
  <section class="featured-news bg-white section-pad reveal">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title">Latest <span>Updates</span></h2>
        <div class="title-divider"></div>
      </div>
      
      <div class="news-layout">
        <!-- LEFT COLUMN (main news) -->
        <div class="news-main">
          <!-- News 1 -->
          <div class="news-main-card">
            <img src="{{asset('web/images/convocation.jpg')}}" alt="Annual Convocation Ceremony 2026">
            <div class="news-content">
              <div class="news-meta" style="color: var(--crimson); font-size: 14px; margin-bottom: 10px; font-weight: 500;">
                <span>July 15, 2026</span> | <span>Events</span>
              </div>
              <h3 style="margin-bottom: 15px; font-family: var(--font-heading); color: var(--crimson); font-size: 24px;">Annual Convocation Ceremony 2026</h3>
              <p style="color: #555; line-height: 1.6; margin-bottom: 20px;">The Annual Convocation Ceremony of RVD College saw over 300 proud graduates receive their degrees. The grand event celebrated the academic accomplishments of our students across BBA and B.Com programs. Eminent industry leaders graced the occasion, inspiring the fresh graduates as they embark on their professional journeys.</p>
              <a href="#" class="btn btn-outline" style="padding: 8px 20px; font-size: 14px;">Read More</a>
            </div>
          </div>

          <!-- News 2 -->
          <div class="news-main-card">
            <img src="{{asset('web/images/students_classroom.jpg')}}" alt="VYAPAR Management Fest 2026" style="height: 280px;">
            <div class="news-content">
              <div class="news-meta" style="color: var(--crimson); font-size: 14px; margin-bottom: 10px; font-weight: 500;">
                <span>March 20, 2026</span> | <span>Events</span>
              </div>
              <h3 style="margin-bottom: 15px; font-family: var(--font-heading); color: var(--crimson); font-size: 22px;">VYAPAR Management Fest 2026 - Grand Success</h3>
              <p style="color: #555; line-height: 1.6; margin-bottom: 20px;">Our flagship inter-collegiate management fest 'VYAPAR 2026' was a resounding success with over 20 colleges participating. The event featured intense competitions in business planning, marketing strategies, and finance pitch, rewarding the brightest minds with grand prizes.</p>
              <a href="#" class="btn btn-outline" style="padding: 8px 20px; font-size: 14px;">Read More</a>
            </div>
          </div>

          <!-- News 3 -->
          <div class="news-main-card">
            <img src="{{asset('web/images/hero_campus.jpg')}}" alt="100% Placement Achieved" style="height: 280px;">
            <div class="news-content">
              <div class="news-meta" style="color: var(--crimson); font-size: 14px; margin-bottom: 10px; font-weight: 500;">
                <span>February 10, 2026</span> | <span>Placements</span>
              </div>
              <h3 style="margin-bottom: 15px; font-family: var(--font-heading); color: var(--crimson); font-size: 22px;">100% Placement Achieved for 2025 Batch</h3>
              <p style="color: #555; line-height: 1.6; margin-bottom: 20px;">We are thrilled to announce that the 2025 batch has achieved an outstanding 100% placement record. Top recruiters from the corporate sector offered lucrative roles, reinforcing our commitment to stellar academic and career development.</p>
              <a href="#" class="btn btn-outline" style="padding: 8px 20px; font-size: 14px;">Read More</a>
            </div>
          </div>
        </div>

        <!-- RIGHT COLUMN (sidebar) -->
        <div class="news-sidebar">
          <h3 style="margin-bottom: 25px; font-family: var(--font-heading); color: var(--crimson); padding-bottom: 15px; border-bottom: 2px solid var(--gold); font-size: 22px;">Recent News</h3>
          
          <div class="news-sidebar-item">
            <div style="font-size: 13px; color: #777; margin-bottom: 5px; font-weight: 500;">Aug 2026</div>
            <a href="#" style="text-decoration: none; color: #222; font-weight: 600; line-height: 1.4; display: block; font-size: 16px;">Admission Open 2026-27</a>
          </div>
          
          <div class="news-sidebar-item">
            <div style="font-size: 13px; color: #777; margin-bottom: 5px; font-weight: 500;">Jul 2026</div>
            <a href="#" style="text-decoration: none; color: #222; font-weight: 600; line-height: 1.4; display: block; font-size: 16px;">NSS Blood Donation Camp</a>
          </div>
          
          <div class="news-sidebar-item">
            <div style="font-size: 13px; color: #777; margin-bottom: 5px; font-weight: 500;">Jun 2026</div>
            <a href="#" style="text-decoration: none; color: #222; font-weight: 600; line-height: 1.4; display: block; font-size: 16px;">Industrial Visit to Infosys</a>
          </div>
          
          <div class="news-sidebar-item">
            <div style="font-size: 13px; color: #777; margin-bottom: 5px; font-weight: 500;">May 2026</div>
            <a href="#" style="text-decoration: none; color: #222; font-weight: 600; line-height: 1.4; display: block; font-size: 16px;">Sports Day 2026</a>
          </div>
          
          <div class="news-sidebar-item">
            <div style="font-size: 13px; color: #777; margin-bottom: 5px; font-weight: 500;">Apr 2026</div>
            <a href="#" style="text-decoration: none; color: #222; font-weight: 600; line-height: 1.4; display: block; font-size: 16px;">Guest Lecture: Digital Marketing</a>
          </div>
          
          <div class="news-sidebar-item">
            <div style="font-size: 13px; color: #777; margin-bottom: 5px; font-weight: 500;">Jan 2026</div>
            <a href="#" style="text-decoration: none; color: #222; font-weight: 600; line-height: 1.4; display: block; font-size: 16px;">Commerce Week Celebration</a>
          </div>
          
          <div class="news-sidebar-item">
            <div style="font-size: 13px; color: #777; margin-bottom: 5px; font-weight: 500;">Dec 2025</div>
            <a href="#" style="text-decoration: none; color: #222; font-weight: 600; line-height: 1.4; display: block; font-size: 16px;">Inter-College Debate Competition</a>
          </div>
          
          <div class="news-sidebar-item">
            <div style="font-size: 13px; color: #777; margin-bottom: 5px; font-weight: 500;">Nov 2025</div>
            <a href="#" style="text-decoration: none; color: #222; font-weight: 600; line-height: 1.4; display: block; font-size: 16px;">Tree Plantation Drive</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- UPCOMING EVENTS -->
  <section class="upcoming-events bg-light section-pad reveal">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title">Upcoming <span>Events</span></h2>
        <div class="title-divider"></div>
      </div>
      
      <div class="events-grid">
        <!-- Event 1 -->
        <div class="event-card">
          <div class="event-date">
            <div style="font-size: 32px; font-weight: 700; font-family: var(--font-heading);">15</div>
            <div style="font-size: 14px; text-transform: uppercase; letter-spacing: 1px; font-weight: 500;">Aug 2026</div>
          </div>
          <div class="event-info" style="padding: 25px;">
            <span style="display: inline-block; background: var(--gold); color: var(--crimson); font-size: 12px; padding: 5px 12px; border-radius: 20px; margin-bottom: 15px; font-weight: 600;">National</span>
            <h3 style="font-family: var(--font-heading); color: var(--crimson); margin-bottom: 12px; font-size: 20px;">Independence Day Celebration</h3>
            <p style="color: #666; font-size: 14px; margin-bottom: 20px; line-height: 1.5;">Join us for the grand flag hoisting ceremony and cultural programs honoring our nation's spirit.</p>
            <a href="#" style="color: var(--crimson); font-weight: 600; text-decoration: none; font-size: 14px;">Read More &rarr;</a>
          </div>
        </div>

        <!-- Event 2 -->
        <div class="event-card">
          <div class="event-date">
            <div style="font-size: 32px; font-weight: 700; font-family: var(--font-heading);">20</div>
            <div style="font-size: 14px; text-transform: uppercase; letter-spacing: 1px; font-weight: 500;">Aug 2026</div>
          </div>
          <div class="event-info" style="padding: 25px;">
            <span style="display: inline-block; background: var(--gold); color: var(--crimson); font-size: 12px; padding: 5px 12px; border-radius: 20px; margin-bottom: 15px; font-weight: 600;">Celebration</span>
            <h3 style="font-family: var(--font-heading); color: var(--crimson); margin-bottom: 12px; font-size: 20px;">Freshers Welcome Party</h3>
            <p style="color: #666; font-size: 14px; margin-bottom: 20px; line-height: 1.5;">A memorable welcome to the new batch filled with exciting performances, interaction, and fun.</p>
            <a href="#" style="color: var(--crimson); font-weight: 600; text-decoration: none; font-size: 14px;">Read More &rarr;</a>
          </div>
        </div>

        <!-- Event 3 -->
        <div class="event-card">
          <div class="event-date">
            <div style="font-size: 32px; font-weight: 700; font-family: var(--font-heading);">05</div>
            <div style="font-size: 14px; text-transform: uppercase; letter-spacing: 1px; font-weight: 500;">Sep 2026</div>
          </div>
          <div class="event-info" style="padding: 25px;">
            <span style="display: inline-block; background: var(--gold); color: var(--crimson); font-size: 12px; padding: 5px 12px; border-radius: 20px; margin-bottom: 15px; font-weight: 600;">Industrial</span>
            <h3 style="font-family: var(--font-heading); color: var(--crimson); margin-bottom: 12px; font-size: 20px;">Industry Visit - Google Bengaluru</h3>
            <p style="color: #666; font-size: 14px; margin-bottom: 20px; line-height: 1.5;">An exclusive corporate visit providing students insights into modern tech corporate culture.</p>
            <a href="#" style="color: var(--crimson); font-weight: 600; text-decoration: none; font-size: 14px;">Read More &rarr;</a>
          </div>
        </div>

        <!-- Event 4 -->
        <div class="event-card">
          <div class="event-date">
            <div style="font-size: 32px; font-weight: 700; font-family: var(--font-heading);">20</div>
            <div style="font-size: 14px; text-transform: uppercase; letter-spacing: 1px; font-weight: 500;">Sep 2026</div>
          </div>
          <div class="event-info" style="padding: 25px;">
            <span style="display: inline-block; background: var(--gold); color: var(--crimson); font-size: 12px; padding: 5px 12px; border-radius: 20px; margin-bottom: 15px; font-weight: 600;">Academic</span>
            <h3 style="font-family: var(--font-heading); color: var(--crimson); margin-bottom: 12px; font-size: 20px;">Management Seminar</h3>
            <p style="color: #666; font-size: 14px; margin-bottom: 20px; line-height: 1.5;">In-depth expert talks on the 'Future of FinTech' delivered by leading industry professionals.</p>
            <a href="#" style="color: var(--crimson); font-weight: 600; text-decoration: none; font-size: 14px;">Read More &rarr;</a>
          </div>
        </div>

        <!-- Event 5 -->
        <div class="event-card">
          <div class="event-date">
            <div style="font-size: 32px; font-weight: 700; font-family: var(--font-heading);">10</div>
            <div style="font-size: 14px; text-transform: uppercase; letter-spacing: 1px; font-weight: 500;">Oct 2026</div>
          </div>
          <div class="event-info" style="padding: 25px;">
            <span style="display: inline-block; background: var(--gold); color: var(--crimson); font-size: 12px; padding: 5px 12px; border-radius: 20px; margin-bottom: 15px; font-weight: 600;">Cultural</span>
            <h3 style="font-family: var(--font-heading); color: var(--crimson); margin-bottom: 12px; font-size: 20px;">RVDIAN Cultural Fest</h3>
            <p style="color: #666; font-size: 14px; margin-bottom: 20px; line-height: 1.5;">Our highly anticipated annual inter-college cultural festival featuring music, dance, and creative arts.</p>
            <a href="#" style="color: var(--crimson); font-weight: 600; text-decoration: none; font-size: 14px;">Read More &rarr;</a>
          </div>
        </div>

        <!-- Event 6 -->
        <div class="event-card">
          <div class="event-date">
            <div style="font-size: 32px; font-weight: 700; font-family: var(--font-heading);">15</div>
            <div style="font-size: 14px; text-transform: uppercase; letter-spacing: 1px; font-weight: 500;">Nov 2026</div>
          </div>
          <div class="event-info" style="padding: 25px;">
            <span style="display: inline-block; background: var(--gold); color: var(--crimson); font-size: 12px; padding: 5px 12px; border-radius: 20px; margin-bottom: 15px; font-weight: 600;">Alumni</span>
            <h3 style="font-family: var(--font-heading); color: var(--crimson); margin-bottom: 12px; font-size: 20px;">Alumni Meet 2026</h3>
            <p style="color: #666; font-size: 14px; margin-bottom: 20px; line-height: 1.5;">An evening to reconnect, network, and relive golden campus memories with former batchmates.</p>
            <a href="#" style="color: var(--crimson); font-weight: 600; text-decoration: none; font-size: 14px;">Read More &rarr;</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CIRCULARS & NOTICES -->
  <section class="circulars bg-white section-pad reveal">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title">Circulars & <span>Notices</span></h2>
        <div class="title-divider"></div>
      </div>
      
      <div class="notices-table-wrapper">
        <table class="notices-table">
          <thead>
            <tr>
              <th>Date</th>
              <th>Notice / Circular Title</th>
              <th style="text-align: right;">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>August 01, 2026</td>
              <td style="font-weight: 500; color: #333;">Admission Schedule 2026-27</td>
              <td style="text-align: right;"><a href="#" class="btn btn-outline" style="padding: 6px 14px; font-size: 13px;">Download</a></td>
            </tr>
            <tr>
              <td>July 28, 2026</td>
              <td style="font-weight: 500; color: #333;">Fee Payment Schedule</td>
              <td style="text-align: right;"><a href="#" class="btn btn-outline" style="padding: 6px 14px; font-size: 13px;">Download</a></td>
            </tr>
            <tr>
              <td>July 20, 2026</td>
              <td style="font-weight: 500; color: #333;">Exam Timetable - Semester 1</td>
              <td style="text-align: right;"><a href="#" class="btn btn-outline" style="padding: 6px 14px; font-size: 13px;">Download</a></td>
            </tr>
            <tr>
              <td>July 10, 2026</td>
              <td style="font-weight: 500; color: #333;">Holiday List 2026-27</td>
              <td style="text-align: right;"><a href="#" class="btn btn-outline" style="padding: 6px 14px; font-size: 13px;">Download</a></td>
            </tr>
            <tr>
              <td>July 05, 2026</td>
              <td style="font-weight: 500; color: #333;">Anti-Ragging Policy</td>
              <td style="text-align: right;"><a href="#" class="btn btn-outline" style="padding: 6px 14px; font-size: 13px;">Download</a></td>
            </tr>
            <tr>
              <td>June 20, 2026</td>
              <td style="font-weight: 500; color: #333;">Scholarship Application Form</td>
              <td style="text-align: right;"><a href="#" class="btn btn-outline" style="padding: 6px 14px; font-size: 13px;">Download</a></td>
            </tr>
            <tr>
              <td>June 15, 2026</td>
              <td style="font-weight: 500; color: #333;">NSS Enrollment Form</td>
              <td style="text-align: right;"><a href="#" class="btn btn-outline" style="padding: 6px 14px; font-size: 13px;">Download</a></td>
            </tr>
            <tr>
              <td>June 01, 2026</td>
              <td style="font-weight: 500; color: #333;">Internal Assessment Schedule</td>
              <td style="text-align: right;"><a href="#" class="btn btn-outline" style="padding: 6px 14px; font-size: 13px;">Download</a></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- GALLERY PREVIEW -->
  <section class="gallery-preview reveal" style="background: #151515; padding: 60px 0;">
    <div class="container">
      <div class="gallery-mini-grid">
        <img src="{{asset('web/images/campus1.jpg')}}" alt="Campus View" class="gallery-img">
        <img src="{{asset('web/images/sports.jpg')}}" alt="Sports Day" class="gallery-img">
        <img src="{{asset('web/images/library.jpg')}}" alt="Students in Library" class="gallery-img">
        <img src="{{asset('web/images/convocation.jpg')}}" alt="Convocation Ceremony" class="gallery-img">
      </div>
      <div style="text-align: center; margin-top: 40px;">
        <a href="gallery.html" class="btn btn-outline" style="border-color: var(--gold); color: var(--gold);">View Full Gallery</a>
      </div>
    </div>
  </section>

  <!-- NEWSLETTER SIGNUP -->
  <section class="newsletter-signup bg-light section-pad reveal">
    <div class="container" style="max-width: 600px; margin: 0 auto; text-align: center; padding: 40px; background: white; border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.05);">
      <h2 style="font-family: var(--font-heading); color: var(--crimson); margin-bottom: 15px; font-size: 28px;">Stay <span>Informed</span></h2>
      <p style="color: #666; margin-bottom: 30px; font-size: 15px; line-height: 1.6;">Subscribe to our newsletter to receive the latest news, event updates, and official circulars directly in your inbox.</p>
      <form class="newsletter-form" onsubmit="return false;" style="display: flex; flex-direction: column; gap: 15px;">
        <input type="email" placeholder="Enter your email address" required style="padding: 15px 20px; border: 1px solid #ddd; border-radius: 6px; font-size: 15px; width: 100%; box-sizing: border-box; font-family: var(--font-primary);">
        <button type="submit" class="btn btn-primary" style="padding: 15px; font-size: 16px; width: 100%; border-radius: 6px;">Subscribe Now</button>
      </form>
    </div>
  </section>

 @endsection

