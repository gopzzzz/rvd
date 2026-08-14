
 @extends('layouts.weblayout')

@section('content')

<!-- PAGE HERO -->
<section class="page-hero" style="background-image: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('images/students_classroom.jpg'); background-size: cover; background-position: center; padding: 120px 0 80px; text-align: center; color: white;">
  <div class="container reveal">
    <h1 style="font-family: 'Cinzel', serif; font-size: 3.5rem; margin-bottom: 20px;">Student <span style="color: var(--gold);">Life</span></h1>
    <p style="font-size: 1.2rem; max-width: 800px; margin: 0 auto; line-height: 1.6;">Discover the vibrant campus culture and world-class facilities at RVD College.</p>
  </div>
</section>

<!-- CAMPUS LIFE INTRO -->
<section class="bg-white section-pad">
  <div class="container">
    <div class="section-header text-center reveal">
      <h2>Life Beyond <span style="color: var(--crimson);">Classrooms</span></h2>
      <div class="divider mx-auto"></div>
    </div>
    <div class="row" style="display: flex; flex-wrap: wrap; gap: 40px; align-items: center; margin-top: 40px;">
      <div class="col-md-6 reveal" style="flex: 1; min-width: 300px;">
        <h3 style="margin-bottom: 20px; font-family: 'Playfair Display', serif;">Holistic Development at RVD</h3>
        <p style="margin-bottom: 20px; color: #555; line-height: 1.8;">At RVD College of Management & Information Technology, education extends far beyond the syllabus. We believe in nurturing well-rounded individuals equipped not only with academic prowess but also with essential life skills.</p>
        <p style="margin-bottom: 30px; color: #555; line-height: 1.8;">Our campus culture is designed to encourage students to explore their passions, develop leadership qualities, and foster a spirit of community service through various extracurricular activities and student-led initiatives.</p>
        
        <div style="display: flex; flex-wrap: wrap; gap: 15px;">
          <span style="background-color: var(--gold-light); padding: 8px 16px; border-radius: 20px; font-weight: 500; font-size: 0.9rem; color: #333;">Active Clubs</span>
          <span style="background-color: var(--gold-light); padding: 8px 16px; border-radius: 20px; font-weight: 500; font-size: 0.9rem; color: #333;">Sports Complex</span>
          <span style="background-color: var(--gold-light); padding: 8px 16px; border-radius: 20px; font-weight: 500; font-size: 0.9rem; color: #333;">Social Service</span>
        </div>
      </div>
      <div class="col-md-6 reveal" style="flex: 1; min-width: 300px;">
        <img src="{{asset('web/images/students_classroom.jpg')}}" alt="Students in Classroom" style="width: 100%; border-radius: 8px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
      </div>
    </div>
  </div>
</section>

<!-- FACILITIES -->
<section id="facilities" class="bg-light section-pad">
  <div class="container">
    <div class="section-header text-center reveal">
      <h2>World-Class <span style="color: var(--crimson);">Facilities</span></h2>
      <div class="divider mx-auto"></div>
      <p style="max-width: 700px; margin: 20px auto 0; color: #666;">Our campus is equipped with state-of-the-art infrastructure designed to provide an optimal environment for learning and growth.</p>
    </div>
     @if($facilities != null)
    <div class="facilities-grid reveal" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; margin-top: 50px;">
      <!-- Card 1 -->

       @foreach($facilities as $fac)
      <div class="facility-card" style="background: white; border-radius: 8px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: transform 0.3s ease;">
        <img src="{{asset('/'.$fac->image)}}" alt="Smart Classrooms" style="width: 100%; height: 200px; object-fit: cover;">
        <div style="padding: 25px;">
          <h4 style="margin-bottom: 10px; font-family: 'Playfair Display', serif; color: var(--crimson);">{{$fac->title}}</h4>
          <p style="color: #666; font-size: 0.95rem; line-height: 1.6;">{{$fac->description}}.</p>
        </div>
      </div>

      @endforeach
      
   
    </div>
     @endif
  </div>
</section>

<!-- CLUBS & ACTIVITIES -->
<section id="clubs" class="bg-white section-pad">
  <div class="container">
    <div class="section-header text-center reveal">
      <h2>Clubs & <span style="color: var(--crimson);">Activities</span></h2>
      <div class="divider mx-auto"></div>
      <p style="max-width: 700px; margin: 20px auto 0; color: #666;">Engage, lead, and excel through our diverse range of student clubs and committees.</p>
    </div>

     @if($club != null)
    <div class="facilities-grid reveal" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; margin-top: 50px;">
      <!-- Card 1 -->

       @foreach($club as $clubs)
      <div class="facility-card" style="background: white; border-radius: 8px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: transform 0.3s ease;">
        <img src="{{asset('/'.$clubs->image)}}" alt="Smart Classrooms" style="width: 100%; height: 200px; object-fit: cover;">
        <div style="padding: 25px;">
          <h4 style="margin-bottom: 10px; font-family: 'Playfair Display', serif; color: var(--crimson);">{{$clubs->title}}</h4>
          <p style="color: #666; font-size: 0.95rem; line-height: 1.6;">{{$clubs->description}}.</p>
        </div>
      </div>

      @endforeach
      
    </div>

      @endif
    
    
  </div>
</section>

<!-- SPORTS -->
<section id="sports" class="section-pad" style="background-color: #1a1a1a; color: white;">
  <div class="container">
    <div class="section-header text-center reveal">
      <h1 style="color: #fff;">Sports & <span style="color: var(--gold);">Athletics</span></h1>
      <div class="divider mx-auto" style="background-color: var(--gold);"></div>
      <p style="max-width: 700px; margin: 20px auto 0; color: #ccc;">Physical fitness and team spirit are integral to life at RVD College.</p>
    </div>

       @if($sports != null)
    <div class="facilities-grid reveal" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; margin-top: 50px;">
      <!-- Card 1 -->

       @foreach($sports as $sport)
      <div class="facility-card" style="background: white; border-radius: 8px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: transform 0.3s ease;">
        <img src="{{asset('/'.$sport->image)}}" alt="Smart Classrooms" style="width: 100%; height: 200px; object-fit: cover;">
        <div style="padding: 25px;">
          <h4 style="margin-bottom: 10px; font-family: 'Playfair Display', serif; color: var(--crimson);">{{$sport->title}}</h4>
          <p style="color: #666; font-size: 0.95rem; line-height: 1.6;">{{$sport->description}}.</p>
        </div>
      </div>

      @endforeach
      
    </div>

      @endif
    
    
   
    
    <div class="stats-grid reveal" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 30px; margin-top: 50px; text-align: center;">
      <div>
        <div style="font-size: 3rem; font-weight: 700; color: var(--gold); font-family: 'Cinzel', serif;" class="counter" data-target="50" data-suffix="+">0</div>
        <p style="text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem; margin-top: 10px;">Inter-college Tournaments</p>
      </div>
      <div>
        <div style="font-size: 3rem; font-weight: 700; color: var(--gold); font-family: 'Cinzel', serif;" class="counter" data-target="20" data-suffix="+">0</div>
        <p style="text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem; margin-top: 10px;">Trophies Won</p>
      </div>
      <div>
        <div style="font-size: 3rem; font-weight: 700; color: var(--gold); font-family: 'Cinzel', serif;" class="counter" data-target="100" data-suffix="+">0</div>
        <p style="text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem; margin-top: 10px;">Sports Participants</p>
      </div>
      <div>
        <div style="font-size: 3rem; font-weight: 700; color: var(--gold); font-family: 'Cinzel', serif;">Annual</div>
        <p style="text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem; margin-top: 10px;">Sports Day Event</p>
      </div>
    </div>
  </div>
</section>

<!-- NSS & SOCIAL SERVICE -->
<section id="nss" class="bg-light section-pad">
  <div class="container">
    <div class="row" style="display: flex; flex-wrap: wrap; gap: 40px; align-items: center;">
      <div class="col-md-5 reveal" style="flex: 1; min-width: 300px;">
        <div style="background-color: var(--crimson); color: white; padding: 40px; border-radius: 8px;">
          <h3 style="font-family: 'Playfair Display', serif; margin-bottom: 20px; font-size: 2rem;">Impact Highlights</h3>
          <ul style="list-style: none; padding: 0; margin: 0;">
            <li style="margin-bottom: 15px; display: flex; align-items: center; font-size: 1.1rem;">
              <span style="font-weight: bold; font-size: 1.5rem; color: var(--gold); margin-right: 15px; width: 50px;" class="counter" data-target="100" data-suffix="+">0</span> NSS Volunteers
            </li>
            <li style="margin-bottom: 15px; display: flex; align-items: center; font-size: 1.1rem;">
              <span style="font-weight: bold; font-size: 1.5rem; color: var(--gold); margin-right: 15px; width: 50px;" class="counter" data-target="50" data-suffix="+">0</span> Events Conducted
            </li>
            <li style="display: flex; align-items: center; font-size: 1.1rem;">
              <span style="font-weight: bold; font-size: 1.5rem; color: var(--gold); margin-right: 15px; width: 50px;" class="counter" data-target="5">0</span> Villages Adopted
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-7 reveal" style="flex: 1.5; min-width: 300px;">
        <h2>NSS & Social <span style="color: var(--crimson);">Responsibility</span></h2>
        <div class="divider" style="margin-left: 0;"></div>
        <p style="color: #555; line-height: 1.8; margin-bottom: 20px;">The National Service Scheme (NSS) unit at RVD College actively promotes social responsibility and community engagement among students. We firmly believe that education should serve society.</p>
        <p style="color: #555; line-height: 1.8; margin-bottom: 20px;">Through various outreach programs, students develop empathy, civic sense, and leadership while making a tangible difference in the community.</p>
        
        <h5 style="margin: 25px 0 15px; font-family: 'Playfair Display', serif;">Key Activities:</h5>
        <ul style="color: #555; line-height: 1.8; padding-left: 20px;">
          <li>Large-scale Tree Plantation Drives</li>
          <li>Regular Blood Donation Camps</li>
          <li>Village Adoption and Rural Development</li>
          <li>Swachh Bharat Abhiyan Cleanliness Drives</li>
          <li>Health, Hygiene, and Civic Awareness Rallies</li>
        </ul>
      </div>
    </div>
  </div>

     @if($nss != null)
    <div class="facilities-grid reveal" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; margin-top: 50px;">
      <!-- Card 1 -->

       @foreach($nss as $ns)
      <div class="facility-card" style="background: white; border-radius: 8px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: transform 0.3s ease;">
        <img src="{{asset('/'.$ns->image)}}" alt="Smart Classrooms" style="width: 100%; height: 200px; object-fit: cover;">
        <div style="padding: 25px;">
          <h4 style="margin-bottom: 10px; font-family: 'Playfair Display', serif; color: var(--crimson);">{{$ns->title}}</h4>
          <p style="color: #666; font-size: 0.95rem; line-height: 1.6;">{{$ns->description}}.</p>
        </div>
      </div>

      @endforeach
      
    </div>

      @endif
    
</section>


  
 @endsection

