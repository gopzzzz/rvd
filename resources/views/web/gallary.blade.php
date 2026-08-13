
 @extends('layouts.weblayout')

@section('content')

<style>
  .gallery-full {
    columns: 3 300px;
    column-gap: 15px;
}

.gallery-full-item {
    break-inside: avoid;
    margin-bottom: 15px;
}

.gallery-full-item.wide {
    grid-column: auto !important;
}

.gallery-full-item img {
    width: 100%;
    height: auto;
    display: block;
}
  </style>

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
      @foreach($gallery_type as $type)
      <button data-filter="{{$type->id}}" class="gallery-filter-btn btn btn-outline">{{$type->type_name}}</button>
      @endforeach
     
    </div>

    <!-- Gallery Grid (16 items) -->
    <div class="gallery-full-grid reveal" style="display:grid;grid-template-columns:repeat(auto-fill, minmax(250px, 1fr));gap:20px;grid-auto-flow:dense;">
      
@foreach($uploads as $ups)
    <div class="gallery-full-item wide"
         data-category="{{ $ups->type_id }}"
         data-lightbox="{{ asset('/' . $ups->photo) }}"
         style="position:relative;overflow:hidden;border-radius:8px;cursor:pointer;grid-column:span 2;">

        <img src="{{ asset('/' . $ups->photo) }}"
             alt="{{ $ups->type_name }}"
             loading="lazy"
             style="width:100%;height:auto;display:block;transition:transform 0.3s ease;">

        <div class="gallery-item-info"
             style="position:absolute;bottom:0;left:0;right:0;padding:20px;background:linear-gradient(transparent,rgba(0,0,0,0.8));color:white;">

            <h5 style="margin:0;font-size:18px;">
                {{ $ups->type_name }}
            </h5>

        </div>
    </div>
@endforeach
      <!-- 2 -->
      

    </div>
  </div>
</section>

   @php
    

    preg_match(
        '/(?:youtube\.com\/watch\?v=|youtu\.be\/)([^&\s]+)/',
        $youtubeUrl,
        $matches
    );

    $videoId = $matches[1] ?? null;
@endphp

<!-- VIDEO SECTION -->
<section class="bg-light section-pad">
  <div class="container">
    <div class="section-header center reveal">
      <h2>Campus <span> Video</span></h2>
      <p class="section-subtitle">Take a virtual walk through our modern campus.</p>
    </div>
    <div class="video-container reveal" style="max-width:800px;margin:0 auto;text-align:center;">
    <div class="video-placeholder" 
     style="position:relative;background:#1a1a1a;border-radius:12px;overflow:hidden;aspect-ratio:16/9;margin-bottom:30px;">

    <iframe
        src="https://www.youtube.com/embed/{{$videoId}}"
        title="Campus Tour Video"
        style="position:absolute;top:0;left:0;width:100%;height:100%;border:0;"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        allowfullscreen>
    </iframe>

</div>
      <p style="margin-bottom:20px;font-size:16px;">Experience the vibrant learning environment, modern infrastructure, and student life at RVD College of Management & Information Technology before you even step foot on campus.</p>
      <a href="{{$downloads}}" class="btn btn-primary" download>Download Brochure</a>
    </div>
  </div>
</section>

<!-- STATS SECTION -->
<!-- <section class="stats-section section-pad reveal" style="background:var(--primary);color:white;">
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
</section> -->
  
 @endsection

