
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

  @if($news->isNotEmpty())
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

        @foreach($news as $nw)
          <!-- News 1 -->
          <div class="news-main-card">
            <img src="{{asset('/'.$nw->photo)}}" alt="Annual Convocation Ceremony 2026">
            <div class="news-content">
              <div class="news-meta" style="color: var(--crimson); font-size: 14px; margin-bottom: 10px; font-weight: 500;">
                <span>{{ \Carbon\Carbon::parse($nw->date)->format('F d, Y') }}</span>| <span>News</span>
              </div>
              <h3 style="margin-bottom: 15px; font-family: var(--font-heading); color: var(--crimson); font-size: 24px;">{{$nw->title}}</h3>
              <p style="color: #555; line-height: 1.6; margin-bottom: 20px;">{{$nw->description}}</p>
              <a href="#" class="btn btn-outline" style="padding: 8px 20px; font-size: 14px;">Read More</a>
            </div>
          </div>

          @endforeach

          
         
        </div>

        <!-- RIGHT COLUMN (sidebar) -->
        <div class="news-sidebar">
          <h3 style="margin-bottom: 25px; font-family: var(--font-heading); color: var(--crimson); padding-bottom: 15px; border-bottom: 2px solid var(--gold); font-size: 22px;">Recent News</h3>
         @foreach($news as $nw)
          <div class="news-sidebar-item">
            <div style="font-size: 13px; color: #777; margin-bottom: 5px; font-weight: 500;">{{ \Carbon\Carbon::parse($nw->date)->format('F d, Y') }}</div>
            <a href="#" style="text-decoration: none; color: #222; font-weight: 600; line-height: 1.4; display: block; font-size: 16px;">{{$nw->title}}</a>
          </div>
          @endforeach
          
          
        </div>
      </div>
    </div>
  </section>

  @endif

  @if($events->isNotEmpty())

  <!-- UPCOMING EVENTS -->
  <section class="upcoming-events bg-light section-pad reveal">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title">Upcoming <span>Events</span></h2>
        <div class="title-divider"></div>
      </div>
      
      <div class="events-grid">
        <!-- Event 1 -->
         @foreach($events as $evt)
        <div class="event-card">
          <div class="event-date">
         <div style="font-size: 32px; font-weight: 700; font-family: var(--font-heading);">
    {{ \Carbon\Carbon::parse($evt->date)->format('d') }}
</div>

<div style="font-size: 14px; text-transform: uppercase; letter-spacing: 1px; font-weight: 500;">
    {{ \Carbon\Carbon::parse($evt->date)->format('M Y') }}
</div>
          </div>
          <div class="event-info" style="padding: 25px;">
            <span style="display: inline-block; background: var(--gold); color: var(--crimson); font-size: 12px; padding: 5px 12px; border-radius: 20px; margin-bottom: 15px; font-weight: 600;">National</span>
            <h3 style="font-family: var(--font-heading); color: var(--crimson); margin-bottom: 12px; font-size: 20px;">{{$evt->title}}</h3>
            <p style="color: #666; font-size: 14px; margin-bottom: 20px; line-height: 1.5;">{{$evt->description}}</p>
            <a href="#" style="color: var(--crimson); font-weight: 600; text-decoration: none; font-size: 14px;">Read More &rarr;</a>
          </div>
        </div>
        @endforeach

     
      
      </div>
    </div>
  </section>

  @endif


  @if($downloads->isNotEmpty())
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
            @foreach($downloads as $download)
            <tr>
              <td>{{ \Carbon\Carbon::parse($download->created_at)->format('F d, Y') }}</td>
              <td style="font-weight: 500; color: #333;">{{$download->documentname}}</td>
              <td style="text-align: right;"><a href="{{$download->documents}}" download class="btn btn-outline" style="padding: 6px 14px; font-size: 13px;">Download</a></td>
            </tr>
            @endforeach
           
          </tbody>
        </table>
      </div>
    </div>
  </section>

  @endif



 @endsection

