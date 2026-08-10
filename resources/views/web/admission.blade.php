
 @extends('layouts.weblayout')

@section('content')

 <!-- PAGE HERO -->
  <header class="page-hero">
    <div class="container hero-content text-center">
      <h1 class="reveal fade-up">Admissions <span>2026-27</span></h1>
      <p class="hero-desc reveal fade-up" style="max-width: 600px; margin: 0 auto; color: #f0f0f0; margin-bottom: 30px;">
        Join RVD College for the academic year 2026-27. Applications open for BBA and B.Com programs. Shape your future with quality education and practical exposure.
      </p>
      <div class="hero-actions reveal fade-up" style="display: flex; gap: 15px; justify-content: center;">
        <a href="#online-form" class="btn btn-primary">Apply Online</a>
        <a href="#" class="btn btn-outline" style="color: white; border-color: white;">Download Brochure</a>
      </div>
    </div>
  </header>

  <!-- ADMISSION OVERVIEW -->
  <section class="section-pad bg-white">
    <div class="container">
      <h2 class="section-title text-center reveal fade-up">Begin Your <span>Journey</span></h2>
      <div class="grid grid-2" style="align-items: center; gap: 40px; margin-top: 40px;">
        <div class="reveal fade-right">
          <h3 style="font-family: 'Playfair Display', serif; color: var(--crimson); margin-bottom: 20px;">Welcome to RVD College</h3>
          <p style="margin-bottom: 15px; line-height: 1.6; color: #444;">
            Choosing the right college is the first step towards a successful career. At RVD College of Management & Information Technology, we simplify the admission process to ensure you can focus on what matters most—your education.
          </p>
          <p style="margin-bottom: 15px; line-height: 1.6; color: #444;">
            Our dedicated admissions counseling team is here to guide you through every step, from selecting the right program (BBA or B.Com) to submitting your documentation and answering any queries you may have about campus life, placements, and curriculum.
          </p>
          <p style="margin-bottom: 20px; line-height: 1.6; color: #444;">
            Take the leap and become part of a vibrant learning community dedicated to academic excellence and holistic development.
          </p>
        </div>
        <div class="reveal fade-left">
          <div style="background: var(--dark); border-left: 5px solid var(--gold); padding: 30px; border-radius: 8px; color: white;">
            <h3 style="color: var(--gold-bright); margin-bottom: 20px; border-bottom: 1px solid rgba(255,255,255,0.1); padding-bottom: 10px;">Admission Highlights 2026</h3>
            <ul style="list-style: none; padding: 0;">
              <li style="margin-bottom: 12px; display: flex; justify-content: space-between;"><strong style="color: #ccc;">Last Date to Apply:</strong> <span>September 30, 2026</span></li>
              <li style="margin-bottom: 12px; display: flex; justify-content: space-between;"><strong style="color: #ccc;">Programs:</strong> <span>BBA & B.Com</span></li>
              <li style="margin-bottom: 12px; display: flex; justify-content: space-between;"><strong style="color: #ccc;">Seats Available:</strong> <span>60 per program</span></li>
              <li style="margin-bottom: 12px; display: flex; justify-content: space-between;"><strong style="color: #ccc;">Eligibility:</strong> <span>10+2 / PUC Pass</span></li>
              <li style="margin-bottom: 12px; display: flex; justify-content: space-between;"><strong style="color: #ccc;">Medium of Instruction:</strong> <span>English</span></li>
              <li style="margin-bottom: 12px; display: flex; justify-content: space-between;"><strong style="color: #ccc;">Contact:</strong> <a href="tel:+919880012345" style="color: var(--gold-bright);">+91 98800 12345</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ADMISSION STEPS -->
  <section class="section-pad bg-light">
    <div class="container">
      <h2 class="section-title text-center reveal fade-up">How to <span>Apply</span></h2>
      <div class="admission-steps grid grid-4 reveal fade-up" style="margin-top: 50px; gap: 30px;">
        <div class="step-card" style="background: white; padding: 30px 20px; text-align: center; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); position: relative;">
          <div class="step-number" style="width: 50px; height: 50px; background: var(--crimson); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 24px; font-weight: bold; margin: -55px auto 20px auto; border: 4px solid var(--bg-light);">1</div>
          <h4 style="margin-bottom: 15px; color: var(--dark);">Fill Online Form</h4>
          <p style="font-size: 14px; color: #666;">Complete the online application form with accurate personal and academic details.</p>
        </div>
        <div class="step-card" style="background: white; padding: 30px 20px; text-align: center; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); position: relative;">
          <div class="step-number" style="width: 50px; height: 50px; background: var(--crimson); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 24px; font-weight: bold; margin: -55px auto 20px auto; border: 4px solid var(--bg-light);">2</div>
          <h4 style="margin-bottom: 15px; color: var(--dark);">Submit Documents</h4>
          <p style="font-size: 14px; color: #666;">Upload or physically submit required academic certificates and ID proofs.</p>
        </div>
        <div class="step-card" style="background: white; padding: 30px 20px; text-align: center; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); position: relative;">
          <div class="step-number" style="width: 50px; height: 50px; background: var(--crimson); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 24px; font-weight: bold; margin: -55px auto 20px auto; border: 4px solid var(--bg-light);">3</div>
          <h4 style="margin-bottom: 15px; color: var(--dark);">Merit List</h4>
          <p style="font-size: 14px; color: #666;">Check the merit list on our website or await confirmation email from admissions.</p>
        </div>
        <div class="step-card" style="background: white; padding: 30px 20px; text-align: center; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); position: relative;">
          <div class="step-number" style="width: 50px; height: 50px; background: var(--crimson); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 24px; font-weight: bold; margin: -55px auto 20px auto; border: 4px solid var(--bg-light);">4</div>
          <h4 style="margin-bottom: 15px; color: var(--dark);">Pay Fees & Confirm</h4>
          <p style="font-size: 14px; color: #666;">Complete enrollment by paying the admission fees and collecting your welcome kit.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ELIGIBILITY -->
  <section class="section-pad bg-white">
    <div class="container">
      <h2 class="section-title text-center reveal fade-up">Eligibility <span>Criteria</span></h2>
      <div class="grid grid-2 reveal fade-up" style="gap: 30px; margin-top: 40px;">
        <div class="card" style="border: 1px solid #eee; padding: 30px; border-radius: 8px; transition: transform 0.3s; box-shadow: 0 2px 10px rgba(0,0,0,0.02);">
          <h3 style="color: var(--crimson); font-family: 'Playfair Display', serif; border-bottom: 2px solid var(--gold); padding-bottom: 15px; margin-bottom: 20px;">BBA Eligibility</h3>
          <ul style="list-style-type: none; padding-left: 0;">
            <li style="margin-bottom: 15px; display: flex; align-items: flex-start;"><span style="color: var(--gold); margin-right: 10px; font-size: 18px;">✓</span> <span>Must have passed 10+2 / PUC or equivalent examination from a recognized board.</span></li>
            <li style="margin-bottom: 15px; display: flex; align-items: flex-start;"><span style="color: var(--gold); margin-right: 10px; font-size: 18px;">✓</span> <span>Minimum 45% aggregate marks in the qualifying examination.</span></li>
            <li style="margin-bottom: 15px; display: flex; align-items: flex-start;"><span style="color: var(--gold); margin-right: 10px; font-size: 18px;">✓</span> <span>Students from any stream (Science, Commerce, Arts) are eligible to apply.</span></li>
            <li style="margin-bottom: 15px; display: flex; align-items: flex-start;"><span style="color: var(--gold); margin-right: 10px; font-size: 18px;">✓</span> <span>Age limit: Below 22 years at the time of admission.</span></li>
            <li style="margin-bottom: 15px; display: flex; align-items: flex-start;"><span style="color: var(--gold); margin-right: 10px; font-size: 18px;">✓</span> <span>Admission via Karnataka CET scores or Direct Management quota.</span></li>
          </ul>
        </div>
        <div class="card" style="border: 1px solid #eee; padding: 30px; border-radius: 8px; transition: transform 0.3s; box-shadow: 0 2px 10px rgba(0,0,0,0.02);">
          <h3 style="color: var(--crimson); font-family: 'Playfair Display', serif; border-bottom: 2px solid var(--gold); padding-bottom: 15px; margin-bottom: 20px;">B.Com Eligibility</h3>
          <ul style="list-style-type: none; padding-left: 0;">
            <li style="margin-bottom: 15px; display: flex; align-items: flex-start;"><span style="color: var(--gold); margin-right: 10px; font-size: 18px;">✓</span> <span>Must have passed 10+2 / PUC or equivalent from a recognized board.</span></li>
            <li style="margin-bottom: 15px; display: flex; align-items: flex-start;"><span style="color: var(--gold); margin-right: 10px; font-size: 18px;">✓</span> <span>Minimum 45% aggregate marks in the qualifying examination.</span></li>
            <li style="margin-bottom: 15px; display: flex; align-items: flex-start;"><span style="color: var(--gold); margin-right: 10px; font-size: 18px;">✓</span> <span>Candidates from Commerce stream are preferred.</span></li>
            <li style="margin-bottom: 15px; display: flex; align-items: flex-start;"><span style="color: var(--gold); margin-right: 10px; font-size: 18px;">✓</span> <span>Age limit: Below 22 years at the time of admission.</span></li>
            <li style="margin-bottom: 15px; display: flex; align-items: flex-start;"><span style="color: var(--gold); margin-right: 10px; font-size: 18px;">✓</span> <span>Relaxation of 5% marks for SC/ST/OBC category candidates as per norms.</span></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- DOCUMENTS REQUIRED -->
  <section class="section-pad bg-light">
    <div class="container">
      <h2 class="section-title text-center reveal fade-up">Required <span>Documents</span></h2>
      <div style="background: white; padding: 40px; border-radius: 8px; box-shadow: 0 5px 20px rgba(0,0,0,0.05); margin-top: 40px;" class="reveal fade-up">
        <p style="text-align: center; margin-bottom: 30px; color: #555;">Please bring original and 3 sets of photocopies of the following documents at the time of admission.</p>
        <div class="grid grid-2" style="gap: 20px;">
          <ul style="list-style: none; padding: 0;">
            <li style="padding: 12px 15px; border-bottom: 1px solid #eee; display: flex; align-items: center;"><span style="color: var(--crimson); font-weight: bold; margin-right: 15px;">•</span> 10th Marks Card / SSLC Certificate</li>
            <li style="padding: 12px 15px; border-bottom: 1px solid #eee; display: flex; align-items: center;"><span style="color: var(--crimson); font-weight: bold; margin-right: 15px;">•</span> 12th / PUC Marks Card</li>
            <li style="padding: 12px 15px; border-bottom: 1px solid #eee; display: flex; align-items: center;"><span style="color: var(--crimson); font-weight: bold; margin-right: 15px;">•</span> Transfer Certificate (TC)</li>
            <li style="padding: 12px 15px; border-bottom: 1px solid #eee; display: flex; align-items: center;"><span style="color: var(--crimson); font-weight: bold; margin-right: 15px;">•</span> Migration Certificate (if applicable)</li>
            <li style="padding: 12px 15px; border-bottom: 1px solid #eee; display: flex; align-items: center;"><span style="color: var(--crimson); font-weight: bold; margin-right: 15px;">•</span> Caste Certificate (if applicable)</li>
          </ul>
          <ul style="list-style: none; padding: 0;">
            <li style="padding: 12px 15px; border-bottom: 1px solid #eee; display: flex; align-items: center;"><span style="color: var(--crimson); font-weight: bold; margin-right: 15px;">•</span> Income Certificate (for scholarship applicants)</li>
            <li style="padding: 12px 15px; border-bottom: 1px solid #eee; display: flex; align-items: center;"><span style="color: var(--crimson); font-weight: bold; margin-right: 15px;">•</span> Aadhar Card Copy</li>
            <li style="padding: 12px 15px; border-bottom: 1px solid #eee; display: flex; align-items: center;"><span style="color: var(--crimson); font-weight: bold; margin-right: 15px;">•</span> Passport Size Photographs (4 Copies)</li>
            <li style="padding: 12px 15px; border-bottom: 1px solid #eee; display: flex; align-items: center;"><span style="color: var(--crimson); font-weight: bold; margin-right: 15px;">•</span> Student Bank Account Details (Passbook Copy)</li>
            <li style="padding: 12px 15px; border-bottom: 1px solid #eee; display: flex; align-items: center;"><span style="color: var(--crimson); font-weight: bold; margin-right: 15px;">•</span> Character Certificate from previous institution</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- FEE STRUCTURE -->
  <section class="section-pad bg-white">
    <div class="container">
      <h2 class="section-title text-center reveal fade-up">Fee <span>Structure</span></h2>
      <div class="reveal fade-up" style="margin-top: 40px; overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px; box-shadow: 0 0 10px rgba(0,0,0,0.05);">
          <thead>
            <tr style="background: var(--crimson); color: white; text-align: left;">
              <th style="padding: 15px; border: 1px solid #ddd;">Program</th>
              <th style="padding: 15px; border: 1px solid #ddd;">Duration</th>
              <th style="padding: 15px; border: 1px solid #ddd;">Admission Fee (One time)</th>
              <th style="padding: 15px; border: 1px solid #ddd;">Tuition Fee (Per Year)</th>
              <th style="padding: 15px; border: 1px solid #ddd;">Exam & Misc (Per Year)</th>
            </tr>
          </thead>
          <tbody>
            <tr style="background: #f9f9f9;">
              <td style="padding: 15px; border: 1px solid #ddd; font-weight: bold;">BBA</td>
              <td style="padding: 15px; border: 1px solid #ddd;">3 Years (6 Semesters)</td>
              <td style="padding: 15px; border: 1px solid #ddd;">₹ 10,000</td>
              <td style="padding: 15px; border: 1px solid #ddd;">₹ 45,000</td>
              <td style="padding: 15px; border: 1px solid #ddd;">₹ 8,000</td>
            </tr>
            <tr>
              <td style="padding: 15px; border: 1px solid #ddd; font-weight: bold;">B.Com</td>
              <td style="padding: 15px; border: 1px solid #ddd;">3 Years (6 Semesters)</td>
              <td style="padding: 15px; border: 1px solid #ddd;">₹ 10,000</td>
              <td style="padding: 15px; border: 1px solid #ddd;">₹ 35,000</td>
              <td style="padding: 15px; border: 1px solid #ddd;">₹ 8,000</td>
            </tr>
          </tbody>
        </table>
        <div style="background: #fff8e1; border-left: 4px solid var(--gold); padding: 15px; border-radius: 4px;">
          <strong>Note:</strong> Fees can be paid in installments. Special concessions are available for meritorious and economically weaker students. University examination fees will be extra as prescribed by Bengaluru City University.
        </div>
      </div>
    </div>
  </section>

  <!-- SCHOLARSHIP -->
  <section class="section-pad bg-dark" style="color: white;">
    <div class="container">
      <h2 class="section-title text-center reveal fade-up" style="color: white;">Scholarship <span>Opportunities</span></h2>
      <div class="grid grid-4 reveal fade-up" style="margin-top: 40px; gap: 20px;">
        <div style="background: rgba(255,255,255,0.05); padding: 25px; border-radius: 8px; border-top: 3px solid var(--gold); text-align: center;">
          <h4 style="color: var(--gold-bright); margin-bottom: 15px; font-family: 'Playfair Display', serif;">Merit Scholarship</h4>
          <p style="font-size: 14px; color: #ccc;">Top 5 students in academic performance receive up to a 50% tuition fee waiver for the first year.</p>
        </div>
        <div style="background: rgba(255,255,255,0.05); padding: 25px; border-radius: 8px; border-top: 3px solid var(--gold); text-align: center;">
          <h4 style="color: var(--gold-bright); margin-bottom: 15px; font-family: 'Playfair Display', serif;">Sports Scholarship</h4>
          <p style="font-size: 14px; color: #ccc;">State and National level sports players get special fee concessions and attendance relaxation.</p>
        </div>
        <div style="background: rgba(255,255,255,0.05); padding: 25px; border-radius: 8px; border-top: 3px solid var(--gold); text-align: center;">
          <h4 style="color: var(--gold-bright); margin-bottom: 15px; font-family: 'Playfair Display', serif;">SC/ST Scholarship</h4>
          <p style="font-size: 14px; color: #ccc;">Government-sponsored full scholarship for eligible SC/ST category candidates as per state norms.</p>
        </div>
        <div style="background: rgba(255,255,255,0.05); padding: 25px; border-radius: 8px; border-top: 3px solid var(--gold); text-align: center;">
          <h4 style="color: var(--gold-bright); margin-bottom: 15px; font-family: 'Playfair Display', serif;">Management Scholarship</h4>
          <p style="font-size: 14px; color: #ccc;">Need-based assistance provided by college management based on verified family income details.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ONLINE APPLICATION FORM -->
  <section id="online-form" class="section-pad bg-light">
    <div class="container">
      <h2 class="section-title text-center reveal fade-up">Online <span>Application Form</span></h2>
      <div class="reveal fade-up" style="max-width: 800px; margin: 40px auto 0; background: white; padding: 40px; border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
        <form action="#" method="POST" data-validate="true">
          
          <h4 style="color: var(--crimson); border-bottom: 1px solid #eee; padding-bottom: 10px; margin-bottom: 20px;">Personal Details</h4>
          <div class="grid grid-2" style="gap: 20px; margin-bottom: 20px;">
            <div>
              <label style="display: block; margin-bottom: 5px; font-weight: 500; font-size: 14px;">Full Name *</label>
              <input type="text" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; font-family: 'Inter', sans-serif;">
            </div>
            <div>
              <label style="display: block; margin-bottom: 5px; font-weight: 500; font-size: 14px;">Date of Birth *</label>
              <input type="date" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; font-family: 'Inter', sans-serif;">
            </div>
            <div>
              <label style="display: block; margin-bottom: 5px; font-weight: 500; font-size: 14px;">Gender *</label>
              <select required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; font-family: 'Inter', sans-serif;">
                <option value="">Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
              </select>
            </div>
            <div>
              <label style="display: block; margin-bottom: 5px; font-weight: 500; font-size: 14px;">Aadhar Number *</label>
              <input type="text" required pattern="[0-9]{12}" title="12 digit Aadhar number" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; font-family: 'Inter', sans-serif;">
            </div>
            <div>
              <label style="display: block; margin-bottom: 5px; font-weight: 500; font-size: 14px;">Email Address *</label>
              <input type="email" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; font-family: 'Inter', sans-serif;">
            </div>
            <div>
              <label style="display: block; margin-bottom: 5px; font-weight: 500; font-size: 14px;">Phone Number *</label>
              <input type="tel" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; font-family: 'Inter', sans-serif;">
            </div>
          </div>

          <h4 style="color: var(--crimson); border-bottom: 1px solid #eee; padding-bottom: 10px; margin-bottom: 20px; margin-top: 30px;">Academic Details</h4>
          <div class="grid grid-2" style="gap: 20px; margin-bottom: 20px;">
            <div>
              <label style="display: block; margin-bottom: 5px; font-weight: 500; font-size: 14px;">10th School Name *</label>
              <input type="text" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; font-family: 'Inter', sans-serif;">
            </div>
            <div>
              <label style="display: block; margin-bottom: 5px; font-weight: 500; font-size: 14px;">10th Percentage / CGPA *</label>
              <input type="text" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; font-family: 'Inter', sans-serif;">
            </div>
            <div>
              <label style="display: block; margin-bottom: 5px; font-weight: 500; font-size: 14px;">12th/PUC College Name</label>
              <input type="text" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; font-family: 'Inter', sans-serif;">
            </div>
            <div>
              <label style="display: block; margin-bottom: 5px; font-weight: 500; font-size: 14px;">12th/PUC Percentage</label>
              <input type="text" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; font-family: 'Inter', sans-serif;" placeholder="Leave blank if awaiting results">
            </div>
            <div style="grid-column: span 2;">
              <label style="display: block; margin-bottom: 5px; font-weight: 500; font-size: 14px;">Stream (12th/PUC) *</label>
              <select required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; font-family: 'Inter', sans-serif;">
                <option value="">Select Stream</option>
                <option value="Commerce">Commerce</option>
                <option value="Science">Science</option>
                <option value="Arts">Arts</option>
                <option value="Other">Other</option>
              </select>
            </div>
          </div>

          <h4 style="color: var(--crimson); border-bottom: 1px solid #eee; padding-bottom: 10px; margin-bottom: 20px; margin-top: 30px;">Program Selection</h4>
          <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 10px; font-weight: 500; font-size: 14px;">Program Choice *</label>
            <div style="display: flex; gap: 30px;">
              <label style="display: flex; align-items: center; gap: 8px; cursor: pointer;">
                <input type="radio" name="program" value="BBA" required> BBA
              </label>
              <label style="display: flex; align-items: center; gap: 8px; cursor: pointer;">
                <input type="radio" name="program" value="B.Com" required> B.Com
              </label>
            </div>
          </div>
          <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 5px; font-weight: 500; font-size: 14px;">How did you hear about us?</label>
            <select style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; font-family: 'Inter', sans-serif;">
              <option value="">Select Option</option>
              <option value="Internet Search">Internet Search</option>
              <option value="Social Media">Social Media</option>
              <option value="Friends/Family">Friends / Family</option>
              <option value="Newspaper">Newspaper Advertisement</option>
              <option value="Other">Other</option>
            </select>
          </div>

          <h4 style="color: var(--crimson); border-bottom: 1px solid #eee; padding-bottom: 10px; margin-bottom: 20px; margin-top: 30px;">Address</h4>
          <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 5px; font-weight: 500; font-size: 14px;">Full Address *</label>
            <textarea required rows="3" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; font-family: 'Inter', sans-serif; resize: vertical;"></textarea>
          </div>
          <div class="grid grid-2" style="gap: 20px; margin-bottom: 20px;">
            <div>
              <label style="display: block; margin-bottom: 5px; font-weight: 500; font-size: 14px;">City / District *</label>
              <input type="text" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; font-family: 'Inter', sans-serif;">
            </div>
            <div>
              <label style="display: block; margin-bottom: 5px; font-weight: 500; font-size: 14px;">State *</label>
              <input type="text" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; font-family: 'Inter', sans-serif;">
            </div>
            <div>
              <label style="display: block; margin-bottom: 5px; font-weight: 500; font-size: 14px;">PIN Code *</label>
              <input type="text" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; font-family: 'Inter', sans-serif;">
            </div>
          </div>

          <div style="margin-top: 30px; margin-bottom: 30px;">
            <label style="display: flex; align-items: flex-start; gap: 10px; font-size: 14px; color: #555; cursor: pointer;">
              <input type="checkbox" required style="margin-top: 3px;">
              <span>I hereby declare that all information provided above is true to the best of my knowledge. I understand that admission is subject to verification of original documents and meeting eligibility criteria.</span>
            </label>
          </div>

          <button type="submit" class="btn btn-primary" style="width: 100%; padding: 15px; font-size: 16px;">Submit Application</button>

        </form>
      </div>
    </div>
  </section>
  
 @endsection

