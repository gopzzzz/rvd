
 @extends('layouts.weblayout')

@section('content')

  
<!-- PAGE HERO -->
<section class="page-hero" style="background-color: var(--crimson); color: white; padding: 100px 0 60px; text-align: center;">
  <div class="container reveal">
    <div class="breadcrumb" style="font-size: 14px; margin-bottom: 20px; text-transform: uppercase; letter-spacing: 2px;">
      <a href="index.html" style="color: var(--gold); text-decoration: none;">Home</a> <span style="margin: 0 10px;">></span> About Us
    </div>
    <h1 style="font-family: var(--font-cinzel); font-size: 48px; margin-bottom: 20px;">About <span style="color: var(--gold);">RVD College</span></h1>
    <p style="font-size: 18px; max-width: 700px; margin: 0 auto; opacity: 0.9; line-height: 1.6;">Learn about our story, vision, and the people who make RVD a premier institution in Bengaluru.</p>
  </div>
</section>

<!-- ABOUT INTRO -->
<section class="bg-white section-pad" style="padding: 80px 0;">
  <div class="container reveal">
    <div class="row" style="display: flex; flex-wrap: wrap; gap: 40px; align-items: center;">
      <div class="col-6" style="flex: 1; min-width: 300px;">
        <span class="section-tag" style="display: inline-block; padding: 5px 15px; background: rgba(139,0,0,0.1); color: var(--crimson); font-weight: 600; border-radius: 20px; margin-bottom: 15px;">Our Story</span>
        <h2 style="font-family: var(--font-cinzel); font-size: 36px; margin-bottom: 25px; color: #222;">Shaping Leaders Since <span style="color: var(--crimson);">2018</span></h2>
        <p style="font-size: 16px; color: #555; line-height: 1.8; margin-bottom: 20px;">Founded in 2018, RVD College of Management & Information Technology is a premier institution located in the heart of Bengaluru. We are dedicated to providing excellence in higher education with a distinct focus on Management and Commerce. Affiliated to the esteemed Bengaluru City University, RVD College is built upon a philosophy of holistic education.</p>
        <p style="font-size: 16px; color: #555; line-height: 1.8; margin-bottom: 30px;">We believe in nurturing minds that are not only academically proficient but also industry-ready and socially responsible. Our curriculum is designed to bridge the gap between theoretical knowledge and practical application, equipping our students with the skills required to excel in the competitive global landscape.</p>
        
        <ul style="list-style: none; padding: 0; display: grid; grid-template-columns: 1fr 1fr; gap: 15px;">
          <li style="display: flex; align-items: center; gap: 10px; font-weight: 500; color: #333;">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--crimson)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg> Established 2018
          </li>
          <li style="display: flex; align-items: center; gap: 10px; font-weight: 500; color: #333;">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--crimson)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg> BCU Affiliated
          </li>
          <li style="display: flex; align-items: center; gap: 10px; font-weight: 500; color: #333;">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--crimson)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg> NAAC Preparing
          </li>
          <li style="display: flex; align-items: center; gap: 10px; font-weight: 500; color: #333;">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--crimson)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg> 500+ Students
          </li>
        </ul>
      </div>
      <div class="col-6" style="flex: 1; min-width: 300px;">
        <div style="position: relative; padding: 20px;">
          <div style="position: absolute; top: 0; left: 0; right: 20px; bottom: 20px; border: 3px solid var(--gold); border-radius: 20px;"></div>
          <img src="{{asset('web/images/students_classroom.jpg')}}" alt="RVD College Students" style="width: 100%; height: auto; border-radius: 20px; position: relative; z-index: 1; box-shadow: 0 10px 30px rgba(0,0,0,0.1); object-fit: cover; aspect-ratio: 4/3;">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- VISION & MISSION -->
<section id="vision" class="bg-light section-pad" style="padding: 80px 0; background-color: #f9f9f9;">
  <div class="container reveal">
    <div style="text-align: center; margin-bottom: 50px;">
      <h2 style="font-family: var(--font-cinzel); font-size: 36px; color: #222;">Vision & <span style="color: var(--crimson);">Mission</span></h2>
    </div>

    <div class="vision-mission-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; margin-bottom: 50px;">
      <div class="vision-card" style="background: linear-gradient(135deg, var(--crimson), #5a0000); padding: 40px; border-radius: 15px; color: white; box-shadow: 0 10px 30px rgba(139,0,0,0.2);">
        <h3 style="font-family: var(--font-cinzel); font-size: 28px; margin-bottom: 20px; color: var(--gold);">Our Vision</h3>
        <p style="font-size: 18px; line-height: 1.8;">"To be the most sought-after institution for Management and Commerce education in Karnataka, producing leaders of tomorrow with integrity, innovation, and impact."</p>
      </div>
      <div class="mission-card" style="background: #111; padding: 40px; border-radius: 15px; color: white; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
        <h3 style="font-family: var(--font-cinzel); font-size: 28px; margin-bottom: 20px; color: var(--gold);">Our Mission</h3>
        <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 15px;">
          <li style="display: flex; gap: 15px; align-items: flex-start;"><span style="color: var(--crimson); font-size: 20px;">✦</span> <span style="font-size: 16px; line-height: 1.6; opacity: 0.9;">To impart quality education that meets global standards.</span></li>
          <li style="display: flex; gap: 15px; align-items: flex-start;"><span style="color: var(--crimson); font-size: 20px;">✦</span> <span style="font-size: 16px; line-height: 1.6; opacity: 0.9;">To foster industry-readiness through practical learning and exposure.</span></li>
          <li style="display: flex; gap: 15px; align-items: flex-start;"><span style="color: var(--crimson); font-size: 20px;">✦</span> <span style="font-size: 16px; line-height: 1.6; opacity: 0.9;">To instil strong ethical values and professionalism in our students.</span></li>
          <li style="display: flex; gap: 15px; align-items: flex-start;"><span style="color: var(--crimson); font-size: 20px;">✦</span> <span style="font-size: 16px; line-height: 1.6; opacity: 0.9;">To encourage research, innovation, and entrepreneurial thinking.</span></li>
          <li style="display: flex; gap: 15px; align-items: flex-start;"><span style="color: var(--crimson); font-size: 20px;">✦</span> <span style="font-size: 16px; line-height: 1.6; opacity: 0.9;">To promote holistic development via sports, cultural, and social activities.</span></li>
        </ul>
      </div>
    </div>

    <div class="values-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;">
      <div style="background: white; padding: 25px; border-radius: 10px; text-align: center; border-bottom: 4px solid var(--crimson); box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
        <h4 style="font-family: var(--font-cinzel); font-size: 20px; color: var(--crimson);">Excellence</h4>
      </div>
      <div style="background: white; padding: 25px; border-radius: 10px; text-align: center; border-bottom: 4px solid var(--crimson); box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
        <h4 style="font-family: var(--font-cinzel); font-size: 20px; color: var(--crimson);">Integrity</h4>
      </div>
      <div style="background: white; padding: 25px; border-radius: 10px; text-align: center; border-bottom: 4px solid var(--crimson); box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
        <h4 style="font-family: var(--font-cinzel); font-size: 20px; color: var(--crimson);">Innovation</h4>
      </div>
      <div style="background: white; padding: 25px; border-radius: 10px; text-align: center; border-bottom: 4px solid var(--crimson); box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
        <h4 style="font-family: var(--font-cinzel); font-size: 20px; color: var(--crimson);">Inclusivity</h4>
      </div>
      <div style="background: white; padding: 25px; border-radius: 10px; text-align: center; border-bottom: 4px solid var(--crimson); box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
        <h4 style="font-family: var(--font-cinzel); font-size: 20px; color: var(--crimson);">Industry Readiness</h4>
      </div>
      <div style="background: white; padding: 25px; border-radius: 10px; text-align: center; border-bottom: 4px solid var(--crimson); box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
        <h4 style="font-family: var(--font-cinzel); font-size: 20px; color: var(--crimson);">Social Responsibility</h4>
      </div>
    </div>
  </div>
</section>

<!-- MANAGEMENT SECTION -->
<section id="management" class="bg-white section-pad" style="padding: 80px 0;">
  <div class="container reveal">
    <div style="text-align: center; margin-bottom: 50px;">
      <h2 style="font-family: var(--font-cinzel); font-size: 36px; color: #222;">Our <span style="color: var(--crimson);">Leadership</span></h2>
      <p style="color: #666; max-width: 600px; margin: 15px auto 0;">Guided by visionaries dedicated to shaping the future of education and empowering the next generation of leaders.</p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 40px;">
      <!-- Chairman -->
      <div style="text-align: center; background: #fff; padding: 40px 20px; border-radius: 15px; box-shadow: 0 5px 25px rgba(0,0,0,0.08); transition: transform 0.3s ease;">
        <div style="width: 120px; height: 120px; background: var(--crimson); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 40px; font-weight: bold; margin: 0 auto 20px; font-family: var(--font-cinzel); border: 4px solid #fff; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
          DR
        </div>
        <h3 style="font-size: 22px; margin-bottom: 5px; color: #222;">Shri. D. Ravi Kumar</h3>
        <h4 style="color: var(--crimson); font-size: 16px; margin-bottom: 10px; font-weight: 600; text-transform: uppercase;">Chairman</h4>
        <p style="font-size: 14px; color: #777; margin-bottom: 15px;">Visionary Leader & Educationist</p>
        <p style="font-size: 15px; color: #555; line-height: 1.6;">"Our goal is to build an ecosystem where young minds are nurtured with knowledge, values, and the courage to lead in a dynamic world."</p>
      </div>

      <!-- Principal -->
      <div style="text-align: center; background: #fff; padding: 40px 20px; border-radius: 15px; box-shadow: 0 5px 25px rgba(0,0,0,0.08); transition: transform 0.3s ease;">
        <div style="width: 120px; height: 120px; background: var(--gold); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 40px; font-weight: bold; margin: 0 auto 20px; font-family: var(--font-cinzel); border: 4px solid #fff; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
          RV
        </div>
        <h3 style="font-size: 22px; margin-bottom: 5px; color: #222;">Dr. R. Venkatesh</h3>
        <h4 style="color: var(--crimson); font-size: 16px; margin-bottom: 10px; font-weight: 600; text-transform: uppercase;">Principal</h4>
        <p style="font-size: 14px; color: #777; margin-bottom: 15px;">M.Com, Ph.D. | 20+ Yrs Experience</p>
        <p style="font-size: 15px; color: #555; line-height: 1.6;">"We focus on academic rigor combined with experiential learning to ensure our students excel in every sphere of life."</p>
      </div>

      <!-- Director -->
      <div style="text-align: center; background: #fff; padding: 40px 20px; border-radius: 15px; box-shadow: 0 5px 25px rgba(0,0,0,0.08); transition: transform 0.3s ease;">
        <div style="width: 120px; height: 120px; background: #333; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 40px; font-weight: bold; margin: 0 auto 20px; font-family: var(--font-cinzel); border: 4px solid #fff; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
          MS
        </div>
        <h3 style="font-size: 22px; margin-bottom: 5px; color: #222;">Dr. M. Savitha</h3>
        <h4 style="color: var(--crimson); font-size: 16px; margin-bottom: 10px; font-weight: 600; text-transform: uppercase;">Director</h4>
        <p style="font-size: 14px; color: #777; margin-bottom: 15px;">MBA, Ph.D. | Industry Expert</p>
        <p style="font-size: 15px; color: #555; line-height: 1.6;">"Bridging academia and industry is our core strength, giving students a competitive edge for successful careers globally."</p>
      </div>
    </div>
  </div>
</section>

<!-- MESSAGES SECTION -->
<section id="messages" class="bg-light section-pad" style="padding: 80px 0; background-color: #f0f4f8;">
  <div class="container reveal">
    <div style="text-align: center; margin-bottom: 50px;">
      <h2 style="font-family: var(--font-cinzel); font-size: 36px; color: #222;">Message from <span style="color: var(--crimson);">Leadership</span></h2>
    </div>

    <div style="display: flex; flex-direction: column; gap: 40px; max-width: 900px; margin: 0 auto;">
      <!-- Message 1 -->
      <div style="background: white; padding: 40px; border-radius: 20px; display: flex; gap: 30px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); align-items: center; flex-wrap: wrap;">
        <div style="flex-shrink: 0; width: 100px; height: 100px; background: var(--crimson); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 32px; font-weight: bold; font-family: var(--font-cinzel);">DR</div>
        <div style="flex: 1; min-width: 300px;">
          <h3 style="font-size: 24px; color: #222; margin-bottom: 5px;">Shri. D. Ravi Kumar</h3>
          <span style="display: inline-block; background: rgba(212,175,55,0.2); color: #8c7322; padding: 4px 12px; border-radius: 12px; font-size: 12px; font-weight: 600; text-transform: uppercase; margin-bottom: 15px;">Chairman</span>
          <p style="font-size: 16px; color: #555; line-height: 1.7; font-style: italic; margin-bottom: 15px;">"Education is the most powerful tool to transform society. At RVD College, we are committed to providing an environment where intellectual curiosity thrives. We don't just create graduates; we forge leaders who will define the future of business and technology."</p>
          <div style="font-family: var(--font-playfair); font-size: 20px; font-style: italic; color: var(--crimson);">- D. Ravi Kumar</div>
        </div>
      </div>

      <!-- Message 2 -->
      <div style="background: white; padding: 40px; border-radius: 20px; display: flex; gap: 30px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); align-items: center; flex-wrap: wrap; flex-direction: row-reverse;">
        <div style="flex-shrink: 0; width: 100px; height: 100px; background: var(--gold); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 32px; font-weight: bold; font-family: var(--font-cinzel);">RV</div>
        <div style="flex: 1; min-width: 300px; text-align: right;">
          <h3 style="font-size: 24px; color: #222; margin-bottom: 5px;">Dr. R. Venkatesh</h3>
          <span style="display: inline-block; background: rgba(212,175,55,0.2); color: #8c7322; padding: 4px 12px; border-radius: 12px; font-size: 12px; font-weight: 600; text-transform: uppercase; margin-bottom: 15px;">Principal</span>
          <p style="font-size: 16px; color: #555; line-height: 1.7; font-style: italic; margin-bottom: 15px;">"Welcome to RVD College. Our institution stands on the pillars of academic excellence, discipline, and holistic growth. We strive to provide our students with robust academic foundations coupled with the practical insights needed to excel in modern corporate environments."</p>
          <div style="font-family: var(--font-playfair); font-size: 20px; font-style: italic; color: var(--crimson);">- Dr. R. Venkatesh</div>
        </div>
      </div>

      <!-- Message 3 -->
      <div style="background: white; padding: 40px; border-radius: 20px; display: flex; gap: 30px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); align-items: center; flex-wrap: wrap;">
        <div style="flex-shrink: 0; width: 100px; height: 100px; background: #333; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 32px; font-weight: bold; font-family: var(--font-cinzel);">MS</div>
        <div style="flex: 1; min-width: 300px;">
          <h3 style="font-size: 24px; color: #222; margin-bottom: 5px;">Dr. M. Savitha</h3>
          <span style="display: inline-block; background: rgba(212,175,55,0.2); color: #8c7322; padding: 4px 12px; border-radius: 12px; font-size: 12px; font-weight: 600; text-transform: uppercase; margin-bottom: 15px;">Director</span>
          <p style="font-size: 16px; color: #555; line-height: 1.7; font-style: italic; margin-bottom: 15px;">"In today's fast-paced world, agility and continuous learning are paramount. RVD College is designed to foster innovation and critical thinking. Our focus remains steadfast on industry integration, ensuring every student is placement-ready from day one."</p>
          <div style="font-family: var(--font-playfair); font-size: 20px; font-style: italic; color: var(--crimson);">- Dr. M. Savitha</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- INFRASTRUCTURE -->
<section id="infrastructure" class="bg-white section-pad" style="padding: 80px 0;">
  <div class="container reveal">
    <div style="text-align: center; margin-bottom: 50px;">
      <h2 style="font-family: var(--font-cinzel); font-size: 36px; color: #222;">World-Class <span style="color: var(--crimson);">Infrastructure</span></h2>
      <p style="color: #666; max-width: 600px; margin: 15px auto 0;">State-of-the-art facilities designed to provide an optimal learning environment for our students.</p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
      <!-- Facility 1 -->
      <div style="border: 1px solid #eee; border-radius: 10px; padding: 30px; text-align: center; transition: all 0.3s ease;">
        <div style="width: 70px; height: 70px; background: rgba(139,0,0,0.1); color: var(--crimson); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
          <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
        </div>
        <h3 style="font-size: 20px; margin-bottom: 15px; color: #222;">Smart Classrooms</h3>
        <p style="color: #666; font-size: 15px; line-height: 1.6;">20+ modern classrooms equipped with smart boards, projectors, and air conditioning to facilitate interactive learning.</p>
      </div>

      <!-- Facility 2 -->
      <div style="border: 1px solid #eee; border-radius: 10px; padding: 30px; text-align: center; transition: all 0.3s ease;">
        <div style="width: 70px; height: 70px; background: rgba(139,0,0,0.1); color: var(--crimson); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
          <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>
        </div>
        <h3 style="font-size: 20px; margin-bottom: 15px; color: #222;">Computer Lab</h3>
        <p style="color: #666; font-size: 15px; line-height: 1.6;">Advanced lab with 50+ high-end systems, latest software, and seamless high-speed internet connectivity.</p>
      </div>

      <!-- Facility 3 -->
      <div style="border: 1px solid #eee; border-radius: 10px; padding: 30px; text-align: center; transition: all 0.3s ease;">
        <div style="width: 70px; height: 70px; background: rgba(139,0,0,0.1); color: var(--crimson); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
          <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path></svg>
        </div>
        <h3 style="font-size: 20px; margin-bottom: 15px; color: #222;">Central Library</h3>
        <p style="color: #666; font-size: 15px; line-height: 1.6;">A vast collection of 5000+ books, national/international journals, and digital e-resources for comprehensive research.</p>
      </div>

      <!-- Facility 4 -->
      <div style="border: 1px solid #eee; border-radius: 10px; padding: 30px; text-align: center; transition: all 0.3s ease;">
        <div style="width: 70px; height: 70px; background: rgba(139,0,0,0.1); color: var(--crimson); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
          <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
        </div>
        <h3 style="font-size: 20px; margin-bottom: 15px; color: #222;">Seminar Hall</h3>
        <p style="color: #666; font-size: 15px; line-height: 1.6;">Spacious 300-capacity fully air-conditioned auditorium for guest lectures, workshops, and cultural events.</p>
      </div>

      <!-- Facility 5 -->
      <div style="border: 1px solid #eee; border-radius: 10px; padding: 30px; text-align: center; transition: all 0.3s ease;">
        <div style="width: 70px; height: 70px; background: rgba(139,0,0,0.1); color: var(--crimson); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
          <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 8h1a4 4 0 0 1 0 8h-1"></path><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path><line x1="6" y1="1" x2="6" y2="4"></line><line x1="10" y1="1" x2="10" y2="4"></line><line x1="14" y1="1" x2="14" y2="4"></line></svg>
        </div>
        <h3 style="font-size: 20px; margin-bottom: 15px; color: #222;">Cafeteria</h3>
        <p style="color: #666; font-size: 15px; line-height: 1.6;">Hygienic, multi-cuisine canteen offering nutritious meals and snacks in a vibrant, relaxed atmosphere.</p>
      </div>

      <!-- Facility 6 -->
      <div style="border: 1px solid #eee; border-radius: 10px; padding: 30px; text-align: center; transition: all 0.3s ease;">
        <div style="width: 70px; height: 70px; background: rgba(139,0,0,0.1); color: var(--crimson); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
          <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path><path d="M2 12h20"></path></svg>
        </div>
        <h3 style="font-size: 20px; margin-bottom: 15px; color: #222;">Sports Facilities</h3>
        <p style="color: #666; font-size: 15px; line-height: 1.6;">Dedicated spaces for both indoor and outdoor sports, promoting physical well-being and team spirit among students.</p>
      </div>
    </div>
  </div>
</section>

<!-- ACCREDITATION -->
<section id="accreditation" class="bg-dark section-pad" style="background-color: #111; padding: 80px 0; color: white;">
  <div class="container reveal">
    <div style="text-align: center; margin-bottom: 50px;">
      <h2 style="font-family: var(--font-cinzel); font-size: 36px;">Recognitions & <span style="color: var(--gold);">Affiliations</span></h2>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; margin-bottom: 60px;">
      <div style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); padding: 30px 20px; border-radius: 10px; text-align: center;">
        <h4 style="font-family: var(--font-cinzel); font-size: 18px; color: var(--gold); margin-bottom: 10px;">Bengaluru City University</h4>
        <p style="font-size: 14px; opacity: 0.8; margin: 0;">Permanently Affiliated</p>
      </div>
      <div style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); padding: 30px 20px; border-radius: 10px; text-align: center;">
        <h4 style="font-family: var(--font-cinzel); font-size: 18px; color: var(--gold); margin-bottom: 10px;">Karnataka Government</h4>
        <p style="font-size: 14px; opacity: 0.8; margin: 0;">Recognized Institution</p>
      </div>
      <div style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); padding: 30px 20px; border-radius: 10px; text-align: center;">
        <h4 style="font-family: var(--font-cinzel); font-size: 18px; color: var(--gold); margin-bottom: 10px;">NAAC</h4>
        <p style="font-size: 14px; opacity: 0.8; margin: 0;">Preparing for Accreditation</p>
      </div>
      <div style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); padding: 30px 20px; border-radius: 10px; text-align: center;">
        <h4 style="font-family: var(--font-cinzel); font-size: 18px; color: var(--gold); margin-bottom: 10px;">ISO 9001:2015</h4>
        <p style="font-size: 14px; opacity: 0.8; margin: 0;">Quality Management System</p>
      </div>
    </div>

    <!-- Quick Stats -->
    <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 40px; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 40px;">
      <div style="text-align: center;">
        <div class="counter" data-target="2018" data-suffix="" style="font-size: 48px; font-weight: bold; color: var(--crimson); font-family: var(--font-cinzel);">0</div>
        <div style="font-size: 16px; text-transform: uppercase; letter-spacing: 1px; opacity: 0.8; margin-top: 5px;">Year Established</div>
      </div>
      <div style="text-align: center;">
        <div class="counter" data-target="1" data-suffix="" style="font-size: 48px; font-weight: bold; color: var(--crimson); font-family: var(--font-cinzel);">0</div>
        <div style="font-size: 16px; text-transform: uppercase; letter-spacing: 1px; opacity: 0.8; margin-top: 5px;">BCU Affiliation</div>
      </div>
      <div style="text-align: center;">
        <div class="counter" data-target="500" data-suffix="+" style="font-size: 48px; font-weight: bold; color: var(--crimson); font-family: var(--font-cinzel);">0</div>
        <div style="font-size: 16px; text-transform: uppercase; letter-spacing: 1px; opacity: 0.8; margin-top: 5px;">Happy Students</div>
      </div>
      <div style="text-align: center;">
        <div class="counter" data-target="98" data-suffix="%" style="font-size: 48px; font-weight: bold; color: var(--crimson); font-family: var(--font-cinzel);">0</div>
        <div style="font-size: 16px; text-transform: uppercase; letter-spacing: 1px; opacity: 0.8; margin-top: 5px;">Placement Rate</div>
      </div>
    </div>
  </div>
</section>

  <!-- FOOTER -->
  
 @endsection

