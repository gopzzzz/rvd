
 @extends('layouts.weblayout')

@section('content')

  <!-- HERO SECTION -->
  <section class="hero reveal" style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.6)), url('images/hero_campus.jpg'); min-height: 100vh; display: flex; align-items: center; justify-content: center; position: relative;">
    <div class="hero-particles" style="position: absolute; top:0; left:0; width:100%; height:100%; pointer-events:none;"></div>
    <div class="hero-content container" style="text-align: center; color: white; z-index: 2; padding-bottom: 160px;">
      <span class="badge" style="background-color: var(--gold); color: var(--crimson); padding: 6px 18px; border-radius: 2px; font-weight: 700; font-size: 11px; letter-spacing: 3px; margin-bottom: 20px; display: inline-block; font-family: 'Cinzel', serif;">ADMISSIONS OPEN </span>
      <h1 style="font-family: 'Cinzel', serif; font-size: 4rem; margin-bottom: 10px; line-height: 1.1;"><span class="accent" style="color: var(--gold-muted);">RVD</span><br>College of Management</h1>
      <h2 style="font-family: 'Playfair Display', serif; font-style: italic; font-weight: 400; font-size: 2rem; margin-bottom: 20px; color: rgba(255,255,255,0.88);">Empowering Futures, Shaping Leaders</h2>
      <p style="font-size: 1.1rem; max-width: 600px; margin: 0 auto 30px auto; color: rgba(255,255,255,0.78);">Providing unparalleled quality education in Management and Commerce in Bengaluru since 2018. Discover a campus where excellence meets opportunity.</p>
      <div class="hero-btns" style="display: flex; justify-content: center; gap: 15px; flex-wrap: wrap;">
        <a href="{{url('admission_index')}}" class="btn btn-primary">Apply Now →</a>
        <a href="{{url('programs')}}" class="btn btn-outline-white">Explore Programs</a>
      </div>
    </div>
    
    <div class="hero-stats" style="position: absolute; bottom: 0; left: 0; width: 100%; background: rgba(0, 0, 0, 0.8); border-top: 1px solid rgba(255, 255, 255, 0.1);">
      <div class="container">
        <div style="display: flex; justify-content: space-between; padding: 20px 0; color: white; flex-wrap: wrap;">
          <div style="text-align: center; flex: 1; min-width: 150px;">
            <h3 style="font-size: 2rem; color: var(--gold); margin-bottom: 5px; font-family: 'Cinzel', serif;" class="counter" data-target="500" data-suffix="+">0</h3>
            <p style="font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px;">Students</p>
          </div>
          <div style="text-align: center; flex: 1; min-width: 150px;">
            <h3 style="font-size: 2rem; color: var(--gold); margin-bottom: 5px; font-family: 'Cinzel', serif;" class="counter" data-target="98" data-suffix="%">0</h3>
            <p style="font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px;">Placement</p>
          </div>
          <div style="text-align: center; flex: 1; min-width: 150px;">
            <h3 style="font-size: 2rem; color: var(--gold); margin-bottom: 5px; font-family: 'Cinzel', serif;" class="counter" data-target="25" data-suffix="+">0</h3>
            <p style="font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px;">Faculty</p>
          </div>
          <div style="text-align: center; flex: 1; min-width: 150px;">
            <h3 style="font-size: 2rem; color: var(--gold); margin-bottom: 5px; font-family: 'Cinzel', serif;" class="counter" data-target="6" data-suffix="+">0</h3>
            <p style="font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px;">Years</p>
          </div>
        </div>
      </div>
    </div>
    
    <div class="scroll-indicator" style="position: absolute; bottom: 120px; left: 50%; transform: translateX(-50%); animation: bounce 2s infinite;">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" style="width:30px; height:30px;"><rect x="7" y="4" width="10" height="16" rx="5" ry="5"/><path d="M12 8v4"/></svg>
    </div>
  </section>

  <!-- ADMISSION ALERT BANNER -->
  <div class="admission-banner reveal" style="background-color: var(--crimson); color: white; padding: 15px 0;">
    <div class="container" style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 15px;">
      <div style="display: flex; align-items: center; gap: 15px;">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="var(--gold-bright)" stroke-width="2" style="width:24px; height:24px;"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
        <div>
          <h4 style="margin:0; font-size: 1.1rem;">Admissions Open  | BBA & B.Com</h4>
          <p style="margin:0; font-size: 0.9rem; opacity: 0.8;">Limited seats available. Secure your future with BCU affiliated programs.</p>
        </div>
      </div>
      <a href="{{url('admission_index')}}" class="btn btn-gold" style="white-space: nowrap;">Apply Now</a>
    </div>
  </div>

  <!-- WHY CHOOSE US -->
  <section class="why-us section reveal">
    <div class="container">
      <div class="section-header text-center" style="margin-bottom: 50px;">
        <span class="tag" style="color: var(--crimson); font-weight: bold; text-transform: uppercase; letter-spacing: 2px;">Why RVD?</span>
        <h2 style="font-family: 'Cinzel', serif; font-size: 2.5rem; margin-top: 10px;">Excellence in <span style="color: var(--crimson);">Education</span></h2>
        <p style="max-width: 600px; margin: 15px auto 0; color: #555;">We provide a conducive environment for learning, innovating, and growing into responsible professionals.</p>
      </div>
      
      <div class="features-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
        <!-- Card 1 -->
        <div class="feature-card reveal-left" style="background: white; padding: 30px; border-radius: 8px; box-shadow: 0 5px 20px rgba(0,0,0,0.05); text-align: center; border-bottom: 3px solid var(--crimson); transition: transform 0.3s;">
          <div style="background: rgba(139, 0, 0, 0.1); width: 70px; height: 70px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="var(--crimson)" stroke-width="2" style="width:30px; height:30px;"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
          </div>
          <h3 style="font-family: 'Playfair Display', serif; margin-bottom: 15px; font-size: 1.3rem;">Industry-Aligned Curriculum</h3>
          <p style="color: #666; font-size: 0.95rem;">Our syllabus is frequently updated to meet modern industry demands, ensuring you are job-ready from day one.</p>
        </div>
        <!-- Card 2 -->
        <div class="feature-card reveal-left" style="background: white; padding: 30px; border-radius: 8px; box-shadow: 0 5px 20px rgba(0,0,0,0.05); text-align: center; border-bottom: 3px solid var(--crimson); transition: transform 0.3s; transition-delay: 0.1s;">
          <div style="background: rgba(139, 0, 0, 0.1); width: 70px; height: 70px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="var(--crimson)" stroke-width="2" style="width:30px; height:30px;"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
          </div>
          <h3 style="font-family: 'Playfair Display', serif; margin-bottom: 15px; font-size: 1.3rem;">Expert Faculty</h3>
          <p style="color: #666; font-size: 0.95rem;">Learn from experienced academicians and industry veterans dedicated to nurturing your potential.</p>
        </div>
        <!-- Card 3 -->
        <div class="feature-card reveal-right" style="background: white; padding: 30px; border-radius: 8px; box-shadow: 0 5px 20px rgba(0,0,0,0.05); text-align: center; border-bottom: 3px solid var(--crimson); transition: transform 0.3s; transition-delay: 0.2s;">
          <div style="background: rgba(139, 0, 0, 0.1); width: 70px; height: 70px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="var(--crimson)" stroke-width="2" style="width:30px; height:30px;"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
          </div>
          <h3 style="font-family: 'Playfair Display', serif; margin-bottom: 15px; font-size: 1.3rem;">100% Placement Support</h3>
          <p style="color: #666; font-size: 0.95rem;">A dedicated placement cell working tirelessly to connect you with top-tier companies and secure your career.</p>
        </div>
        <!-- Card 4 -->
        <div class="feature-card reveal-left" style="background: white; padding: 30px; border-radius: 8px; box-shadow: 0 5px 20px rgba(0,0,0,0.05); text-align: center; border-bottom: 3px solid var(--crimson); transition: transform 0.3s;">
          <div style="background: rgba(139, 0, 0, 0.1); width: 70px; height: 70px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="var(--crimson)" stroke-width="2" style="width:30px; height:30px;"><rect x="4" y="2" width="16" height="20" rx="2" ry="2"></rect><path d="M9 22v-4h6v4"></path><path d="M8 6h.01"></path><path d="M16 6h.01"></path><path d="M12 6h.01"></path><path d="M12 10h.01"></path><path d="M12 14h.01"></path><path d="M16 10h.01"></path><path d="M16 14h.01"></path><path d="M8 10h.01"></path><path d="M8 14h.01"></path></svg>
          </div>
          <h3 style="font-family: 'Playfair Display', serif; margin-bottom: 15px; font-size: 1.3rem;">Modern Infrastructure</h3>
          <p style="color: #666; font-size: 0.95rem;">Smart classrooms, digital libraries, and high-tech computer labs designed for an optimal learning experience.</p>
        </div>
        <!-- Card 5 -->
        <div class="feature-card reveal-right" style="background: white; padding: 30px; border-radius: 8px; box-shadow: 0 5px 20px rgba(0,0,0,0.05); text-align: center; border-bottom: 3px solid var(--crimson); transition: transform 0.3s; transition-delay: 0.1s;">
          <div style="background: rgba(139, 0, 0, 0.1); width: 70px; height: 70px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="var(--crimson)" stroke-width="2" style="width:30px; height:30px;"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg>
          </div>
          <h3 style="font-family: 'Playfair Display', serif; margin-bottom: 15px; font-size: 1.3rem;">BCU Affiliated</h3>
          <p style="color: #666; font-size: 0.95rem;">Proudly affiliated with Bengaluru City University, offering globally recognized and accredited degrees.</p>
        </div>
        <!-- Card 6 -->
        <div class="feature-card reveal-right" style="background: white; padding: 30px; border-radius: 8px; box-shadow: 0 5px 20px rgba(0,0,0,0.05); text-align: center; border-bottom: 3px solid var(--crimson); transition: transform 0.3s; transition-delay: 0.2s;">
          <div style="background: rgba(139, 0, 0, 0.1); width: 70px; height: 70px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="var(--crimson)" stroke-width="2" style="width:30px; height:30px;"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
          </div>
          <h3 style="font-family: 'Playfair Display', serif; margin-bottom: 15px; font-size: 1.3rem;">Holistic Development</h3>
          <p style="color: #666; font-size: 0.95rem;">Beyond academics, we focus on personality development, sports, clubs, and extracurricular activities.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- PROGRAMS SECTION -->
  <section class="programs-section section reveal" style="background: #f9f9f9;">
    <div class="container">
      <div class="section-header text-center" style="margin-bottom: 50px;">
        <span class="tag" style="color: var(--crimson); font-weight: bold; text-transform: uppercase; letter-spacing: 2px;">Academic Excellence</span>
        <h2 style="font-family: 'Cinzel', serif; font-size: 2.5rem; margin-top: 10px;">Our Programs</h2>
        <p style="max-width: 600px; margin: 15px auto 0; color: #555;">Explore our comprehensive undergraduate programs designed to forge the business leaders of tomorrow.</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 40px;">
        <!-- BBA Card -->
         @if($course != null)
         @foreach($course as $courSe)
        <div class="program-card reveal-left" style="background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.08);">
          <div style="background: linear-gradient(135deg, var(--crimson), #c41e3a); padding: 40px 30px; color: white; position: relative;">
            <h3 style="font-family: 'Cinzel', serif; font-size: 2rem; margin-bottom: 10px;">{{$courSe->coursename}}</h3>
            <p style="font-family: 'Playfair Display', serif; font-size: 1.2rem; opacity: 0.9;">{{$courSe->fullname}}</p>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" style="position: absolute; right: 20px; top: 30px; width: 80px; height: 80px; opacity: 0.2;"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>
          </div>
          <div style="padding: 30px;">
            <p style="color: #555; margin-bottom: 20px; line-height: 1.6;">{{$courSe->overview}}</p>
            <ul style="list-style: none; padding: 0; margin-bottom: 30px;">
              <li style="display: flex; align-items: center; margin-bottom: 10px; color: #444;">
                <svg style="width:20px; height:20px; color:var(--crimson); margin-right:10px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                <strong>Duration:</strong> &nbsp; {{$courSe->duration}} Years 
              </li>
              <li style="display: flex; align-items: center; margin-bottom: 10px; color: #444;">
                <svg style="width:20px; height:20px; color:var(--crimson); margin-right:10px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                <strong>Intake:</strong> &nbsp;  {{$courSe->values}}   Seats
              </li>
              <li style="display: flex; align-items: center; margin-bottom: 10px; color: #444;">
                <svg style="width:20px; height:20px; color:var(--crimson); margin-right:10px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                <strong>Highlights:</strong> &nbsp; {{$courSe->certifications}}
              </li>
            </ul>
            <a href="{{url('programs')}}#bba" class="btn btn-outline" style="width: 100%; text-align: center; display: block; border: 2px solid var(--crimson); color: var(--crimson); padding: 12px; border-radius: 6px; text-decoration: none; font-weight: bold; transition: all 0.3s;">Learn More</a>
          </div>
        </div>
        @endforeach
        @endif

        <!-- B.Com Card -->
       
      </div>
    </div>
  </section>

  <!-- STATS SECTION -->
  <section class="stats-section section reveal" style="background: linear-gradient(rgba(139, 0, 0, 0.9), rgba(139, 0, 0, 0.9)), url('images/hero_campus.jpg'); background-attachment: fixed; background-size: cover; color: white;">
    <div class="container">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 30px; text-align: center;">
        <div>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="var(--gold)" stroke-width="2" style="width:50px; height:50px; margin-bottom:15px;"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
          <h2 style="font-family: 'Cinzel', serif; font-size: 3rem; margin-bottom: 5px;" class="counter" data-target="500" data-suffix="+">0</h2>
          <p style="font-size: 1.1rem; text-transform: uppercase; letter-spacing: 1px; color: var(--gold-bright);">Enrolled Students</p>
        </div>
        <div>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="var(--gold)" stroke-width="2" style="width:50px; height:50px; margin-bottom:15px;"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
          <h2 style="font-family: 'Cinzel', serif; font-size: 3rem; margin-bottom: 5px;" class="counter" data-target="98" data-suffix="%">0</h2>
          <p style="font-size: 1.1rem; text-transform: uppercase; letter-spacing: 1px; color: var(--gold-bright);">Placement Rate</p>
        </div>
        <div>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="var(--gold)" stroke-width="2" style="width:50px; height:50px; margin-bottom:15px;"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
          <h2 style="font-family: 'Cinzel', serif; font-size: 3rem; margin-bottom: 5px;" class="counter" data-target="25" data-suffix="+">0</h2>
          <p style="font-size: 1.1rem; text-transform: uppercase; letter-spacing: 1px; color: var(--gold-bright);">Expert Faculty</p>
        </div>
        <div>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="var(--gold)" stroke-width="2" style="width:50px; height:50px; margin-bottom:15px;"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
          <h2 style="font-family: 'Cinzel', serif; font-size: 3rem; margin-bottom: 5px;" class="counter" data-target="6" data-suffix="+">0</h2>
          <p style="font-size: 1.1rem; text-transform: uppercase; letter-spacing: 1px; color: var(--gold-bright);">Years of Excellence</p>
        </div>
      </div>
    </div>
  </section>

  <!-- TESTIMONIALS -->
  <section class="testimonials section reveal">
    <div class="container">
      <div class="section-header text-center" style="margin-bottom: 50px;">
        <span class="tag" style="color: var(--crimson); font-weight: bold; text-transform: uppercase; letter-spacing: 2px;">Student Voices</span>
        <h2 style="font-family: 'Cinzel', serif; font-size: 2.5rem; margin-top: 10px;">Hear From Our Alumni</h2>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
        <!-- Testimonial 1 -->
        <div class="testimonial-card reveal-left" style="background: white; padding: 30px; border-radius: 8px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); position: relative;">
          <div style="color: var(--gold); margin-bottom: 15px;">
            ★★★★★
          </div>
          <p style="font-style: italic; color: #555; margin-bottom: 20px;">"The BBA program at RVD College completely transformed my perspective on business management. The faculty were incredibly supportive and the placement cell helped me secure a fantastic role at a top firm right after graduation."</p>
          <div style="display: flex; align-items: center; gap: 15px;">
            <div style="width: 50px; height: 50px; background: var(--crimson); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 1.2rem;">PS</div>
            <div>
              <h4 style="margin: 0; font-size: 1.1rem; color: #333;">Priya Sharma</h4>
              <p style="margin: 0; font-size: 0.9rem; color: #777;">BBA, Batch of 2023</p>
            </div>
          </div>
        </div>
        <!-- Testimonial 2 -->
        <div class="testimonial-card reveal" style="background: white; padding: 30px; border-radius: 8px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); position: relative;">
          <div style="color: var(--gold); margin-bottom: 15px;">
            ★★★★★
          </div>
          <p style="font-style: italic; color: #555; margin-bottom: 20px;">"Studying B.Com here was the best decision. The infrastructure is top-notch, and the curriculum is very practical. The workshops and industry visits gave us real-world insights that textbooks simply cannot provide."</p>
          <div style="display: flex; align-items: center; gap: 15px;">
            <div style="width: 50px; height: 50px; background: #333; color: var(--gold); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 1.2rem;">RN</div>
            <div>
              <h4 style="margin: 0; font-size: 1.1rem; color: #333;">Rahul Nair</h4>
              <p style="margin: 0; font-size: 0.9rem; color: #777;">B.Com, Batch of 2024</p>
            </div>
          </div>
        </div>
        <!-- Testimonial 3 -->
        <div class="testimonial-card reveal-right" style="background: white; padding: 30px; border-radius: 8px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); position: relative;">
          <div style="color: var(--gold); margin-bottom: 15px;">
            ★★★★★
          </div>
          <p style="font-style: italic; color: #555; margin-bottom: 20px;">"RVD College focuses deeply on holistic development. Alongside rigorous academics, the clubs and extracurricular activities helped me build leadership and communication skills crucial for the corporate world."</p>
          <div style="display: flex; align-items: center; gap: 15px;">
            <div style="width: 50px; height: 50px; background: var(--crimson); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 1.2rem;">SK</div>
            <div>
              <h4 style="margin: 0; font-size: 1.1rem; color: #333;">Sneha Krishnamurthy</h4>
              <p style="margin: 0; font-size: 0.9rem; color: #777;">BBA, Batch of 2025</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  @if($events->isNotEmpty())

  <!-- EVENTS SECTION -->
  <section class="events-section section reveal" style="background: #f9f9f9;">
    <div class="container">
      <div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 40px; flex-wrap: wrap; gap: 20px;">
        <div>
          <span class="tag" style="color: var(--crimson); font-weight: bold; text-transform: uppercase; letter-spacing: 2px;">Campus Happenings</span>
          <h2 style="font-family: 'Cinzel', serif; font-size: 2.5rem; margin-top: 10px;">Upcoming Events</h2>
        </div>
        <a href="{{url('news_index')}}" class="btn btn-outline" style="border: 2px solid var(--crimson); color: var(--crimson); padding: 8px 20px; border-radius: 4px; text-decoration: none; font-weight: 600;">View All Events</a>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
        <!-- Event 1 -->
         @foreach($events as $evEnts)
        <div class="event-card reveal-left" style="background: white; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.05); display: flex;">
          <div class="event-date-bar" style="background: var(--crimson); color: white; padding: 20px 15px; text-align: center; min-width: 80px; display: flex; flex-direction: column; justify-content: center;">
            <span style="font-size: 1.8rem; font-weight: bold; line-height: 1;">
    {{ \Carbon\Carbon::parse($evEnts->date)->format('d') }}
</span>

<span style="font-size: 0.9rem; text-transform: uppercase;">
    {{ \Carbon\Carbon::parse($evEnts->date)->format('M') }}
</span>
          </div>
          <div style="padding: 20px;">
            <h4 style="margin: 0 0 10px 0; font-size: 1.2rem; color: #333;">{{$evEnts->title}}</h4>
            <p style="margin: 0 0 15px 0; color: #666; font-size: 0.9rem;">{{ \Illuminate\Support\Str::words($evEnts->description, 50, '...') }}</p>
            <a href="{{url('news_index')}}" style="color: var(--crimson); font-weight: bold; text-decoration: none; font-size: 0.9rem;">Read More →</a>
          </div>
        </div>
        @endforeach
     
      </div>
    </div>
  </section>

  @endif

  @if($photos->isNotEmpty())

  <!-- GALLERY PREVIEW -->
  <section class="gallery-preview section reveal" style="background: #111; color: white;">
    <div class="container">
      <div class="section-header text-center" style="margin-bottom: 50px;">
        <p style="font-family: 'Cinzel', serif; font-size: 2.5rem; color: #fff;">Glimpse of <span style="color: ;">Campus Life</span></p>
        <p style="max-width: 600px; margin: 15px auto 0; color: #aaa;">Experience the vibrant life at RVD College of Management & Information Technology.</p>
      </div>

      <div class="gallery-grid" style="display: grid; grid-template-columns: 2fr 1fr 1fr; grid-auto-rows: 200px; gap: 15px; margin-bottom: 40px;">
      @foreach($photos as $phoTos)
      <div style="grid-column: span 1; grid-row: span 2; border-radius: 8px; overflow: hidden;">
          <img src="{{asset('/'.$phoTos->photo)}}" alt="Campus" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s; cursor: pointer;" onclick="document.getElementById('lightbox').classList.add('active'); document.getElementById('lightboxImg').src=this.src;">
        </div>

        @endforeach
        
      </div>

      <div style="text-align: center;">
        <a href="{{url('gallery')}}" class="btn btn-gold" style="padding: 12px 30px;">View Full Gallery</a>
      </div>
    </div>
  </section>

  @endif



  <!-- CTA SECTION -->
  <section class="cta-section section reveal" style="background: var(--crimson); color: white; text-align: center; padding: 60px 0;">
    <div class="container">
      <h2 style="font-family: 'Cinzel', serif; font-size: 2.5rem; margin-bottom: 20px;">Begin Your Journey at RVD College</h2>
      <p style="font-size: 1.1rem; max-width: 600px; margin: 0 auto 30px; opacity: 0.9;">Take the first step towards a successful career. Admissions for the batch of 2026-27 are currently ongoing.</p>
      <div style="display: flex; justify-content: center; gap: 15px; flex-wrap: wrap;">
        <a href="{{url('admission_index')}}" class="btn" style="background: white; color: var(--crimson); padding: 12px 30px; border-radius: 4px; font-weight: bold; text-decoration: none;">Apply for Admission</a>
        <a href="#" class="btn" style="border: 2px solid white; color: white; padding: 12px 30px; border-radius: 4px; font-weight: bold; text-decoration: none;">Download Brochure</a>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  
 @endsection

