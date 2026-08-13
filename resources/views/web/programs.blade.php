
 @extends('layouts.weblayout')

@section('content')

  
<!-- PAGE HERO -->
<section class="page-hero">
  <div class="container text-center reveal">
    <p class="breadcrumb" style="color:var(--gold); font-size:14px; margin-bottom:15px; text-transform:uppercase;"><a href="index.html" style="color:white; text-decoration:none;">Home</a> &gt; Programs</p>
    <h1>Our <span>Academic Programs</span></h1>
    <p class="hero-desc" style="max-width:800px; margin:20px auto 0; font-size:1.1rem; color:#f0f0f0;">Discover our comprehensive undergraduate programs, affiliated to Bengaluru City University, designed to build future-ready professionals.</p>
  </div>
</section>

  @if($course->isNotEmpty())

<!-- PROGRAMS OVERVIEW -->
<section class="bg-white section-pad">
  <div class="container">
    <div class="section-header text-center reveal">
      <h2>Choose Your <span>Career Path</span></h2>
      <div class="divider mx-auto"></div>
    </div>
    
    <div class="programs-detail-grid grid-2 reveal" style="display:grid; grid-template-columns:repeat(auto-fit, minmax(350px, 1fr)); gap:40px;">
      <!-- BBA CARD -->
       
       @foreach($course as $courSe)
      <div class="program-card-large" id="bba" style="background:#fff; border-radius:12px; box-shadow:0 10px 30px rgba(0,0,0,0.08); overflow:hidden;">
        <div class="prog-header grad-red-gold" style="padding:40px 30px; text-align:center; position:relative; background:linear-gradient(135deg, var(--crimson), #c41e3a); color:white; overflow:hidden;">
          <div class="bg-text" style="position:absolute; font-size:150px; font-weight:800; opacity:0.05; top:50%; left:50%; transform:translate(-50%, -50%); line-height:1;">{{$courSe->coursename}}</div>
          <h3 style="font-size:3rem; margin-bottom:10px; position:relative; z-index:1;">{{$courSe->coursename}}</h3>
          <h4 style="font-size:1.2rem; font-weight:400; position:relative; z-index:1;">{{$courSe->fullname}}</h4>
        </div>
        <div class="prog-meta" style="display:flex; justify-content:space-between; padding:20px; background:#f9f9f9; border-bottom:1px solid #eee; font-size:14px;">
          <span><strong>Duration:</strong> {{$courSe->duration}} Years</span>
          <span><strong>Seats:</strong> {{$courSe->values}}</span>
          <span><strong>Medium:</strong> English</span>
        </div>
        <div class="prog-body" style="padding:30px;">
          <p class="prog-about" style="margin-bottom:25px; line-height:1.7; color:#555;">{{$courSe->overview}}</p>
          <h5 style="color:var(--crimson); font-size:1.2rem; margin-bottom:15px; border-bottom:2px solid #eee; padding-bottom:10px;">Core Subjects</h5>
          <ul class="subject-list" style="display:grid; grid-template-columns:1fr 1fr; gap:10px; margin-bottom:30px; list-style:none; padding:0; font-size:14px;">
             @foreach(explode(',', $courSe->curriculum) as $item)
             
               <li style="position:relative; padding-left:20px;"><span style="position:absolute; left:0; color:var(--gold);">•</span> {{ trim($item) }}</li>
         
              @endforeach
            </ul>
          <h5 style="color:var(--crimson); font-size:1.2rem; margin-bottom:15px; border-bottom:2px solid #eee; padding-bottom:10px;">Career Opportunities</h5>
          <div class="career-tags" style="display:flex; flex-wrap:wrap; gap:10px; margin-bottom:30px;">
             @foreach(explode(',', $courSe->curriculum) as $oppertunities)
                <span class="tag" style="background:#f1f1f1; padding:6px 12px; border-radius:20px; font-size:13px; color:#333;">{{ trim($oppertunities) }}</span>
          
             @endforeach
           </div>
          <a href="admissions.html" class="btn btn-primary" style="display:block; text-align:center;">Apply for {{$courSe->coursename}}</a>
        </div>
      </div>

      @endforeach

      <!-- B.COM CARD -->
     
    </div>
  </div>
</section>

@endif

<!-- CURRICULUM SECTION -->
<section class="bg-light section-pad" id="curriculum">
  <div class="container">
    <div class="section-header text-center reveal">
      <h2>Semester-wise <span>Curriculum</span></h2>
      <div class="divider mx-auto"></div>
    </div>
    
    <div class="tabs text-center mb-40 reveal">
     @foreach($course as $courSe)
      <button class="tab-btn" onclick="openTab('curric-{{$courSe->key}}', this)" style="padding:10px 30px; margin:0 5px; border:none; background:white; cursor:pointer; font-size:1.1rem; font-weight:600; color:#555; border-radius:30px; box-shadow:0 2px 10px rgba(0,0,0,0.05);">{{$courSe->coursename}}</button>
      @endforeach
    </div>
    
    <style>
      .tab-btn.active { background: var(--crimson) !important; color: white !important; }
      .semester-card { background: white; padding: 25px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); }
      .semester-card h4 { color: var(--gold); margin-bottom: 15px; font-family: var(--font-heading); font-size: 1.3rem; }
      .semester-card ul { list-style: none; padding: 0; }
      .semester-card ul li { padding: 8px 0; border-bottom: 1px dashed #eee; font-size: 14px; color: #555; }
      .semester-card ul li:last-child { border-bottom: none; }
    </style>

    @foreach($course as $courSe)

    @php 

    $semester=DB::table('semester_details')->where('course_id',$courSe->id)->get();

    @endphp

    <!-- BBA Panel -->
    <div class="tab-content active" id="curric-{{$courSe->key}}">
      <div class="grid-3 reveal" style="display:grid; grid-template-columns:repeat(auto-fit, minmax(280px, 1fr)); gap:25px;">
      @foreach($semester as $sem)

    <div class="semester-card">

        <h4>{{ $sem->semester }}</h4>

        <ul>
            @foreach(explode(',', $sem->subjects) as $subject)
                <li>{{ trim($subject) }}</li>
            @endforeach
        </ul>

    </div>

@endforeach
       
        
      </div>
    </div>

    @endforeach

    <!-- B.Com Panel -->
   
  </div>
</section>

<script>
function openTab(tabId, btn) {
  document.querySelectorAll('.tab-content').forEach(el => el.style.display = 'none');
  document.querySelectorAll('.tab-btn').forEach(el => el.classList.remove('active'));
  document.getElementById(tabId).style.display = 'block';
  btn.classList.add('active');
}
</script>

<!-- VALUE-ADDED COURSES -->
<section class="bg-white section-pad">
  <div class="container">
    <div class="section-header text-center reveal">
      <h2>Value-Added <span>Courses</span></h2>
      <div class="divider mx-auto"></div>
      <p style="max-width:600px; margin:0 auto; color:#666;">Beyond the university curriculum, we offer skill-enhancing courses to make our students industry-ready.</p>
    </div>
    
    <div class="grid-3 reveal" style="display:grid; grid-template-columns:repeat(auto-fit, minmax(300px, 1fr)); gap:30px; margin-top:40px;">
      <div class="card text-center p-20" style="padding:30px; background:#f9f9f9; border-radius:10px; border-bottom:3px solid var(--crimson);">
        <h4 style="color:var(--crimson); margin-bottom:10px; font-size:1.2rem;">Tally ERP 9</h4>
        <p style="font-size:14px; color:#555;">Master the leading accounting software used by businesses worldwide.</p>
      </div>
      <div class="card text-center p-20" style="padding:30px; background:#f9f9f9; border-radius:10px; border-bottom:3px solid var(--crimson);">
        <h4 style="color:var(--crimson); margin-bottom:10px; font-size:1.2rem;">MS Office Advanced</h4>
        <p style="font-size:14px; color:#555;">Gain proficiency in Excel, Word, and PowerPoint for corporate tasks.</p>
      </div>
      <div class="card text-center p-20" style="padding:30px; background:#f9f9f9; border-radius:10px; border-bottom:3px solid var(--crimson);">
        <h4 style="color:var(--crimson); margin-bottom:10px; font-size:1.2rem;">Digital Marketing</h4>
        <p style="font-size:14px; color:#555;">Learn SEO, social media strategies, and content marketing essentials.</p>
      </div>
      <div class="card text-center p-20" style="padding:30px; background:#f9f9f9; border-radius:10px; border-bottom:3px solid var(--crimson);">
        <h4 style="color:var(--crimson); margin-bottom:10px; font-size:1.2rem;">Personality Development</h4>
        <p style="font-size:14px; color:#555;">Build confidence, leadership traits, and professional etiquette.</p>
      </div>
      <div class="card text-center p-20" style="padding:30px; background:#f9f9f9; border-radius:10px; border-bottom:3px solid var(--crimson);">
        <h4 style="color:var(--crimson); margin-bottom:10px; font-size:1.2rem;">Spoken English</h4>
        <p style="font-size:14px; color:#555;">Enhance communication skills for effective professional interactions.</p>
      </div>
      <div class="card text-center p-20" style="padding:30px; background:#f9f9f9; border-radius:10px; border-bottom:3px solid var(--crimson);">
        <h4 style="color:var(--crimson); margin-bottom:10px; font-size:1.2rem;">Business Ethics</h4>
        <p style="font-size:14px; color:#555;">Understand the moral principles shaping corporate governance.</p>
      </div>
    </div>
  </div>
</section>

<!-- PLACEMENTS -->
<section class="section-pad" style="background-color: #111; color: white;" id="placements">
  <div class="container">
    <div class="section-header text-center reveal">
      <h2 style="color:white">Placement <span>Excellence</span></h2>
      <div class="divider mx-auto" style="background:var(--gold)"></div>
    </div>
    
    <div class="stats-grid reveal mb-40" style="display:grid; grid-template-columns:repeat(auto-fit, minmax(200px, 1fr)); gap:30px; text-align:center; margin-bottom:50px;">
      <div class="stat-item" style="padding:20px; background:rgba(255,255,255,0.05); border-radius:10px;">
        <h3 class="counter" data-target="98" data-suffix="%" style="font-size:3rem; color:var(--gold); margin-bottom:5px;">0</h3>
        <p style="font-size:1.1rem; opacity:0.9;">Placement Rate</p>
      </div>
      <div class="stat-item" style="padding:20px; background:rgba(255,255,255,0.05); border-radius:10px;">
        <h3 class="counter" data-target="150" data-suffix="+" style="font-size:3rem; color:var(--gold); margin-bottom:5px;">0</h3>
        <p style="font-size:1.1rem; opacity:0.9;">Recruiters</p>
      </div>
      <div class="stat-item" style="padding:20px; background:rgba(255,255,255,0.05); border-radius:10px;">
        <h3 class="counter" data-target="3.5" data-suffix=" LPA" style="font-size:3rem; color:var(--gold); margin-bottom:5px;">0</h3>
        <p style="font-size:1.1rem; opacity:0.9;">Avg Package</p>
      </div>
      <div class="stat-item" style="padding:20px; background:rgba(255,255,255,0.05); border-radius:10px;">
        <h3 class="counter" data-target="500" data-suffix="+" style="font-size:3rem; color:var(--gold); margin-bottom:5px;">0</h3>
        <p style="font-size:1.1rem; opacity:0.9;">Placed Students</p>
      </div>
    </div>

    <!-- <div class="text-center reveal">
      <h4 class="mb-20" style="color:var(--gold); font-size:1.5rem; margin-bottom:20px;">Top Recruiters</h4>
      <div style="display:flex; flex-wrap:wrap; gap:15px; justify-content:center;">
        <span class="badge" style="background:rgba(255,255,255,0.1); padding:10px 25px; border-radius:30px; font-weight:500;">Infosys</span>
        <span class="badge" style="background:rgba(255,255,255,0.1); padding:10px 25px; border-radius:30px; font-weight:500;">Wipro</span>
        <span class="badge" style="background:rgba(255,255,255,0.1); padding:10px 25px; border-radius:30px; font-weight:500;">TCS</span>
        <span class="badge" style="background:rgba(255,255,255,0.1); padding:10px 25px; border-radius:30px; font-weight:500;">HDFC</span>
        <span class="badge" style="background:rgba(255,255,255,0.1); padding:10px 25px; border-radius:30px; font-weight:500;">Deloitte</span>
        <span class="badge" style="background:rgba(255,255,255,0.1); padding:10px 25px; border-radius:30px; font-weight:500;">Flipkart</span>
        <span class="badge" style="background:rgba(255,255,255,0.1); padding:10px 25px; border-radius:30px; font-weight:500;">Amazon</span>
        <span class="badge" style="background:rgba(255,255,255,0.1); padding:10px 25px; border-radius:30px; font-weight:500;">Bajaj Finance</span>
      </div>
    </div> -->
  </div>
</section>


@if($course->isNotEmpty())

<!-- FEE STRUCTURE -->
<section class="bg-light section-pad" id="feestructure">
  <div class="container">
    <div class="section-header text-center reveal">
      <h2>Fee <span>Structure</span></h2>
      <div class="divider mx-auto"></div>
      <p style="max-width:600px; margin:0 auto; color:#666;">Transparent fee structures for our undergraduate programs. Scholarships available for meritorious students.</p>
    </div>
    @foreach($course as $fees)
    <div class="grid-2 " style="display:grid; grid-template-columns:repeat(auto-fit, minmax(350px, 1fr)); gap:40px; margin-top:40px;">
      <div class="card" style="background:white; padding:30px; border-radius:10px; box-shadow:0 5px 20px rgba(0,0,0,0.05);">
        <h3 class="text-center" style="color:var(--crimson); margin-bottom:20px; font-size:1.5rem;">{{$fees->coursename}} Fee Structure</h3>
      @php
    $semesterFee = (float) $fees->fees;
    $totalFee = $semesterFee * 6;
@endphp

<table style="width:100%; border-collapse:collapse; text-align:left;">
    <tr style="border-bottom:2px solid var(--crimson);">
        <th style="padding:15px 10px; color:#333;">Semester</th>
        <th style="padding:15px 10px; color:#333;">Semester Fee</th>
    </tr>

    @for($i = 1; $i <= 6; $i++)
        <tr style="border-bottom:1px solid #eee;">
            <td style="padding:15px 10px; color:#555;">
                Semester {{ $i }}
            </td>

            <td style="padding:15px 10px; color:#555;">
                ₹{{ number_format($semesterFee, 2) }}
            </td>
        </tr>
    @endfor

    <tr style="font-weight:bold; background:#f9f9f9;">
        <td style="padding:15px 10px; color:var(--crimson);">
            Total
        </td>

        <td style="padding:15px 10px; color:var(--crimson); font-size:1.1rem;">
            ₹{{ number_format($totalFee, 2) }}
        </td>
    </tr>
</table>
      </div>
      @endforeach
    </div>
   
  </div>
</section>


@endif

<!-- CTA -->
<section class="cta-section text-center section-pad" style="background:var(--crimson); color:white; padding:60px 0;">
  <div class="container reveal">
    <h2 style="font-size:2.5rem; margin-bottom:15px;">Ready to Join?</h2>
    <p class="mb-20" style="font-size:1.1rem; opacity:0.9; margin-bottom:30px;">Take the first step towards a successful career with RVD College.</p>
    <a href="{{url('admission_index')}}" class="btn btn-gold" style="font-size:1.1rem; padding:12px 30px;">Apply Now</a>
  </div>
</section>

  <!-- FOOTER -->
  
 @endsection

