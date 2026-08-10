
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
    
    <div class="facilities-grid reveal" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; margin-top: 50px;">
      <!-- Card 1 -->
      <div class="facility-card" style="background: white; border-radius: 8px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: transform 0.3s ease;">
        <img src="{{asset('web/images/students_classroom.jpg')}}" alt="Smart Classrooms" style="width: 100%; height: 200px; object-fit: cover;">
        <div style="padding: 25px;">
          <h4 style="margin-bottom: 10px; font-family: 'Playfair Display', serif; color: var(--crimson);">Smart Classrooms</h4>
          <p style="color: #666; font-size: 0.95rem; line-height: 1.6;">20 fully air-conditioned classrooms equipped with multimedia projectors, digital interactive boards, and high-speed Wi-Fi connectivity.</p>
        </div>
      </div>
      
      <!-- Card 2 -->
      <div class="facility-card" style="background: white; border-radius: 8px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: transform 0.3s ease;">
        <img src="{{asset('web/images/college_library.jpg')}}" alt="Computer Laboratory" style="width: 100%; height: 200px; object-fit: cover;">
        <div style="padding: 25px;">
          <h4 style="margin-bottom: 10px; font-family: 'Playfair Display', serif; color: var(--crimson);">Computer Laboratory</h4>
          <p style="color: #666; font-size: 0.95rem; line-height: 1.6;">A modern lab featuring 50 high-configuration computer systems, 100 Mbps dedicated internet line, and licensed essential software.</p>
        </div>
      </div>
      
      <!-- Card 3 -->
      <div class="facility-card" style="background: white; border-radius: 8px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: transform 0.3s ease;">
        <img src="{{asset('web/images/college_library.jpg')}}" alt="Library & Resource Center" style="width: 100%; height: 200px; object-fit: cover;">
        <div style="padding: 25px;">
          <h4 style="margin-bottom: 10px; font-family: 'Playfair Display', serif; color: var(--crimson);">Library & Resource Center</h4>
          <p style="color: #666; font-size: 0.95rem; line-height: 1.6;">An extensive collection of over 5000+ books, national/international journals, digital databases, and a dedicated e-library section.</p>
        </div>
      </div>
      
      <!-- Card 4 -->
      <div class="facility-card" style="background: white; border-radius: 8px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: transform 0.3s ease;">
        <div style="background-color: var(--crimson); height: 200px; display: flex; align-items: center; justify-content: center; color: white;">
          <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
        </div>
        <div style="padding: 25px;">
          <h4 style="margin-bottom: 10px; font-family: 'Playfair Display', serif; color: var(--crimson);">Seminar Hall & Auditorium</h4>
          <p style="color: #666; font-size: 0.95rem; line-height: 1.6;">A spacious, acoustically treated 300-seat capacity auditorium with advanced audio-visual systems for guest lectures and cultural events.</p>
        </div>
      </div>
      
      <!-- Card 5 -->
      <div class="facility-card" style="background: white; border-radius: 8px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: transform 0.3s ease;">
        <div style="background-color: #333; height: 200px; display: flex; align-items: center; justify-content: center; color: white;">
          <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path d="M12 2v20M2 12h20M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg>
        </div>
        <div style="padding: 25px;">
          <h4 style="margin-bottom: 10px; font-family: 'Playfair Display', serif; color: var(--crimson);">Sports Complex</h4>
          <p style="color: #666; font-size: 0.95rem; line-height: 1.6;">Excellent sports infrastructure including indoor badminton courts, table tennis arenas, and expansive outdoor cricket and basketball grounds.</p>
        </div>
      </div>
      
      <!-- Card 6 -->
      <div class="facility-card" style="background: white; border-radius: 8px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: transform 0.3s ease;">
         <div style="background-color: var(--gold); height: 200px; display: flex; align-items: center; justify-content: center; color: white;">
          <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M18 8h1a4 4 0 010 8h-1M2 8h16v9a4 4 0 01-4 4H6a4 4 0 01-4-4V8zM6 1v3M10 1v3M14 1v3"/></svg>
        </div>
        <div style="padding: 25px;">
          <h4 style="margin-bottom: 10px; font-family: 'Playfair Display', serif; color: var(--crimson);">Cafeteria</h4>
          <p style="color: #666; font-size: 0.95rem; line-height: 1.6;">A hygienic, spacious multi-cuisine food court offering highly nutritious and affordable meals and snacks in a relaxing environment.</p>
        </div>
      </div>
    </div>
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
    
    <div class="clubs-grid reveal" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; margin-top: 50px;">
      
      <div style="border: 1px solid #eee; padding: 30px; border-radius: 8px; text-align: center; transition: all 0.3s ease; cursor: pointer;" onmouseover="this.style.boxShadow='0 10px 25px rgba(0,0,0,0.1)'; this.style.borderColor='var(--gold)';" onmouseout="this.style.boxShadow='none'; this.style.borderColor='#eee';">
        <h4 style="font-family: 'Playfair Display', serif; margin-bottom: 10px;">Management Club</h4>
        <p style="font-size: 0.9rem; color: #666;">Business competitions, case studies, and corporate workshops.</p>
      </div>
      
      <div style="border: 1px solid #eee; padding: 30px; border-radius: 8px; text-align: center; transition: all 0.3s ease; cursor: pointer;" onmouseover="this.style.boxShadow='0 10px 25px rgba(0,0,0,0.1)'; this.style.borderColor='var(--gold)';" onmouseout="this.style.boxShadow='none'; this.style.borderColor='#eee';">
        <h4 style="font-family: 'Playfair Display', serif; margin-bottom: 10px;">Commerce Club</h4>
        <p style="font-size: 0.9rem; color: #666;">CA awareness sessions, accounting workshops, and financial modeling.</p>
      </div>
      
      <div style="border: 1px solid #eee; padding: 30px; border-radius: 8px; text-align: center; transition: all 0.3s ease; cursor: pointer;" onmouseover="this.style.boxShadow='0 10px 25px rgba(0,0,0,0.1)'; this.style.borderColor='var(--gold)';" onmouseout="this.style.boxShadow='none'; this.style.borderColor='#eee';">
        <h4 style="font-family: 'Playfair Display', serif; margin-bottom: 10px;">Cultural Committee</h4>
        <p style="font-size: 0.9rem; color: #666;">Organizing festivals, dance, music, and drama performances.</p>
      </div>
      
      <div style="border: 1px solid #eee; padding: 30px; border-radius: 8px; text-align: center; transition: all 0.3s ease; cursor: pointer;" onmouseover="this.style.boxShadow='0 10px 25px rgba(0,0,0,0.1)'; this.style.borderColor='var(--gold)';" onmouseout="this.style.boxShadow='none'; this.style.borderColor='#eee';">
        <h4 style="font-family: 'Playfair Display', serif; margin-bottom: 10px;">Literary Club</h4>
        <p style="font-size: 0.9rem; color: #666;">Fostering talent through debates, elocution, creative writing.</p>
      </div>
      
      <div style="border: 1px solid #eee; padding: 30px; border-radius: 8px; text-align: center; transition: all 0.3s ease; cursor: pointer;" onmouseover="this.style.boxShadow='0 10px 25px rgba(0,0,0,0.1)'; this.style.borderColor='var(--gold)';" onmouseout="this.style.boxShadow='none'; this.style.borderColor='#eee';">
        <h4 style="font-family: 'Playfair Display', serif; margin-bottom: 10px;">Tech Club</h4>
        <p style="font-size: 0.9rem; color: #666;">Coding bootcamps, IT workshops, and tech hackathons.</p>
      </div>
      
      <div style="border: 1px solid #eee; padding: 30px; border-radius: 8px; text-align: center; transition: all 0.3s ease; cursor: pointer;" onmouseover="this.style.boxShadow='0 10px 25px rgba(0,0,0,0.1)'; this.style.borderColor='var(--gold)';" onmouseout="this.style.boxShadow='none'; this.style.borderColor='#eee';">
        <h4 style="font-family: 'Playfair Display', serif; margin-bottom: 10px;">Entrepreneurship Cell</h4>
        <p style="font-size: 0.9rem; color: #666;">Incubating startup ideas and hosting successful alumni entrepreneurs.</p>
      </div>
      
      <div style="border: 1px solid #eee; padding: 30px; border-radius: 8px; text-align: center; transition: all 0.3s ease; cursor: pointer;" onmouseover="this.style.boxShadow='0 10px 25px rgba(0,0,0,0.1)'; this.style.borderColor='var(--gold)';" onmouseout="this.style.boxShadow='none'; this.style.borderColor='#eee';">
        <h4 style="font-family: 'Playfair Display', serif; margin-bottom: 10px;">Photography Club</h4>
        <p style="font-size: 0.9rem; color: #666;">Event coverage, photo walks, and digital editing skills.</p>
      </div>
      
      <div style="border: 1px solid #eee; padding: 30px; border-radius: 8px; text-align: center; transition: all 0.3s ease; cursor: pointer;" onmouseover="this.style.boxShadow='0 10px 25px rgba(0,0,0,0.1)'; this.style.borderColor='var(--gold)';" onmouseout="this.style.boxShadow='none'; this.style.borderColor='#eee';">
        <h4 style="font-family: 'Playfair Display', serif; margin-bottom: 10px;">Green Club</h4>
        <p style="font-size: 0.9rem; color: #666;">Environmental awareness campaigns and sustainability projects.</p>
      </div>
      
    </div>
  </div>
</section>

<!-- SPORTS -->
<section id="sports" class="section-pad" style="background-color: #1a1a1a; color: white;">
  <div class="container">
    <div class="section-header text-center reveal">
      <h2 style="color: white;">Sports & <span style="color: var(--gold);">Athletics</span></h2>
      <div class="divider mx-auto" style="background-color: var(--gold);"></div>
      <p style="max-width: 700px; margin: 20px auto 0; color: #ccc;">Physical fitness and team spirit are integral to life at RVD College.</p>
    </div>
    
    <div class="reveal" style="display: flex; flex-wrap: wrap; justify-content: center; gap: 15px; margin: 40px 0;">
      <span style="background: rgba(255,255,255,0.1); padding: 10px 20px; border-radius: 30px; font-weight: 500;">Cricket</span>
      <span style="background: rgba(255,255,255,0.1); padding: 10px 20px; border-radius: 30px; font-weight: 500;">Football</span>
      <span style="background: rgba(255,255,255,0.1); padding: 10px 20px; border-radius: 30px; font-weight: 500;">Badminton</span>
      <span style="background: rgba(255,255,255,0.1); padding: 10px 20px; border-radius: 30px; font-weight: 500;">Table Tennis</span>
      <span style="background: rgba(255,255,255,0.1); padding: 10px 20px; border-radius: 30px; font-weight: 500;">Chess</span>
      <span style="background: rgba(255,255,255,0.1); padding: 10px 20px; border-radius: 30px; font-weight: 500;">Volleyball</span>
      <span style="background: rgba(255,255,255,0.1); padding: 10px 20px; border-radius: 30px; font-weight: 500;">Basketball</span>
      <span style="background: rgba(255,255,255,0.1); padding: 10px 20px; border-radius: 30px; font-weight: 500;">Kabaddi</span>
    </div>
    
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
</section>

<!-- CULTURAL EVENTS -->
<section class="bg-white section-pad">
  <div class="container">
    <div class="section-header text-center reveal">
      <h2>Fests & <span style="color: var(--crimson);">Cultural Events</span></h2>
      <div class="divider mx-auto"></div>
    </div>
    
    <div class="events-grid reveal" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; margin-top: 40px;">
      <div style="border-radius: 8px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
        <img src="{{asset('web/images/convocation.jpg')}}" alt="RVDIAN FEST" style="width: 100%; height: 220px; object-fit: cover;">
        <div style="padding: 25px; background: white;">
          <h4 style="color: var(--crimson); font-family: 'Playfair Display', serif; margin-bottom: 5px;">RVDIAN FEST</h4>
          <p style="font-weight: 600; color: #888; font-size: 0.9rem; margin-bottom: 15px;">Annual Cultural Festival | October</p>
          <p style="color: #666; font-size: 0.95rem;">Our flagship inter-college cultural extravaganza featuring dance, music, fashion shows, and dramatic performances, drawing crowds from across the city.</p>
        </div>
      </div>
      
      <div style="border-radius: 8px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
        <div style="width: 100%; height: 220px; background-color: #222; display: flex; align-items: center; justify-content: center; color: white;">
           <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
        </div>
        <div style="padding: 25px; background: white;">
          <h4 style="color: var(--crimson); font-family: 'Playfair Display', serif; margin-bottom: 5px;">VYAPAR</h4>
          <p style="font-weight: 600; color: #888; font-size: 0.9rem; margin-bottom: 15px;">Management Business Fest | November</p>
          <p style="color: #666; font-size: 0.95rem;">A platform for aspiring business leaders to showcase their entrepreneurial skills, marketing acumen, and strategic thinking through dynamic competitions.</p>
        </div>
      </div>
      
      <div style="border-radius: 8px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
        <img src="{{asset('web/images/students_classroom.jpg')}}" alt="COMMERCE WEEK" style="width: 100%; height: 220px; object-fit: cover;">
        <div style="padding: 25px; background: white;">
          <h4 style="color: var(--crimson); font-family: 'Playfair Display', serif; margin-bottom: 5px;">COMMERCE WEEK</h4>
          <p style="font-weight: 600; color: #888; font-size: 0.9rem; margin-bottom: 15px;">B.Com Special Event | January</p>
          <p style="color: #666; font-size: 0.95rem;">A week dedicated to the world of commerce, featuring mock stock exchanges, financial quizzes, tax planning seminars, and corporate interactions.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ANTI-RAGGING & COMMITTEES -->
<section class="bg-light section-pad">
  <div class="container reveal">
    <div class="section-header text-center">
      <h2>Committees & <span style="color: var(--crimson);">Grievance Cells</span></h2>
      <div class="divider mx-auto"></div>
      <p style="max-width: 800px; margin: 20px auto 0; color: #666;">RVD College strictly maintains a zero-tolerance policy towards ragging and discrimination. We have dedicated statutory committees to ensure a safe, inclusive, and supportive campus environment for all.</p>
    </div>
    
    <div style="max-width: 800px; margin: 40px auto 0; background: white; border-radius: 8px; box-shadow: 0 5px 20px rgba(0,0,0,0.05); padding: 30px;">
      <ul style="list-style: none; padding: 0; margin: 0;">
        <li style="padding: 15px 0; border-bottom: 1px solid #eee; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 10px;">
          <strong style="font-size: 1.1rem; color: #333;">Anti-Ragging Committee</strong>
          <a href="tel:+918026691234" style="color: var(--crimson); text-decoration: none; font-weight: 500;">+91 80 2669 1234</a>
        </li>
        <li style="padding: 15px 0; border-bottom: 1px solid #eee; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 10px;">
          <strong style="font-size: 1.1rem; color: #333;">Internal Complaints Committee (ICC)</strong>
          <a href="tel:+918026691234" style="color: var(--crimson); text-decoration: none; font-weight: 500;">+91 80 2669 1234</a>
        </li>
        <li style="padding: 15px 0; border-bottom: 1px solid #eee; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 10px;">
          <strong style="font-size: 1.1rem; color: #333;">Student Welfare Committee</strong>
          <a href="tel:+918026691234" style="color: var(--crimson); text-decoration: none; font-weight: 500;">+91 80 2669 1234</a>
        </li>
        <li style="padding: 15px 0; border-bottom: 1px solid #eee; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 10px;">
          <strong style="font-size: 1.1rem; color: #333;">Grievance Redressal Cell</strong>
          <a href="mailto:grievance@rvdcollege.com" style="color: var(--crimson); text-decoration: none; font-weight: 500;">grievance@rvdcollege.com</a>
        </li>
        <li style="padding: 15px 0; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 10px;">
          <strong style="font-size: 1.1rem; color: #333;">Women's Cell</strong>
          <a href="tel:+918026691234" style="color: var(--crimson); text-decoration: none; font-weight: 500;">+91 80 2669 1234</a>
        </li>
      </ul>
    </div>
  </div>
</section>

  
 @endsection

