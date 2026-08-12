
 @extends('layouts.weblayout')

@section('content')

<!-- PAGE HERO -->
<header class="page-hero">
  <div class="container text-center reveal">
    <h1><span>Contact</span> Us</h1>
    <p class="hero-desc">We'd love to hear from you. Reach out to us for admissions, queries, or any assistance.</p>
  </div>
</header>

<!-- CONTACT MAIN -->
<section class="bg-white section-pad">
  <div class="container">
    <div class="contact-grid reveal" style="display: grid; grid-template-columns: 1fr 1.5fr; gap: 40px; align-items: start;">
      
      <!-- LEFT: Contact Info -->
      <div class="contact-info-card dark-bg" style="background: #111; color: white; padding: 40px; border-radius: 8px;">
        <h3 style="color: var(--gold); margin-bottom: 5px;">Get In Touch</h3>
        <p class="subtitle" style="color: #aaa; margin-bottom: 25px;">We respond within 24 hours</p>
        <ul class="contact-info-list" role="list" style="list-style: none; padding: 0;">
          <li style="display: flex; gap: 15px; margin-bottom: 20px; align-items: flex-start;">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="var(--gold)" stroke-width="2" style="width: 24px; height: 24px; flex-shrink: 0;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
            <span style="color: #ddd; font-size: 15px; line-height: 1.6;">#11 & 12, Srinivas Nagar, 2nd Phase, Kathreguppe, Banashankari 3rd Stage, Bengaluru, Karnataka 560050</span>
          </li>
          <li style="display: flex; gap: 15px; margin-bottom: 20px; align-items: flex-start;">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="var(--gold)" stroke-width="2" style="width: 24px; height: 24px; flex-shrink: 0;"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 10.8a19.79 19.79 0 01-3.07-8.64A2 2 0 012 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 14.92z"/></svg>
            <span style="color: #ddd; font-size: 15px; line-height: 1.6;"><a href="tel:+918026691234" style="color: inherit; text-decoration: none;">+91 80 2669 1234</a> <br> <a href="tel:+919880012345" style="color: inherit; text-decoration: none;">+91 98800 12345</a></span>
          </li>
          <li style="display: flex; gap: 15px; margin-bottom: 20px; align-items: flex-start;">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="var(--gold)" stroke-width="2" style="width: 24px; height: 24px; flex-shrink: 0;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            <span style="color: #ddd; font-size: 15px; line-height: 1.6;"><a href="mailto:info@rvdcollege.com" style="color: inherit; text-decoration: none;">info@rvdcollege.com</a><br><a href="mailto:admissions@rvdcollege.com" style="color: inherit; text-decoration: none;">admissions@rvdcollege.com</a></span>
          </li>
          <li style="display: flex; gap: 15px; margin-bottom: 20px; align-items: flex-start;">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="var(--gold)" stroke-width="2" style="width: 24px; height: 24px; flex-shrink: 0;"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
            <span style="color: #ddd; font-size: 15px; line-height: 1.6;">Monday – Saturday: 9:00 AM – 5:00 PM</span>
          </li>
          <li style="display: flex; gap: 15px; margin-bottom: 20px; align-items: flex-start;">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="var(--gold)" style="width: 24px; height: 24px; flex-shrink: 0;"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
            <span style="color: #ddd; font-size: 15px; line-height: 1.6;"><a href="https://wa.me/919880012345" target="_blank" style="color: inherit; text-decoration: none;">+91 98800 12345 (Click to chat)</a></span>
          </li>
        </ul>
        <div class="footer-socials" style="margin-top: 2rem; justify-content: flex-start;">
          <a href="#" class="footer-social" aria-label="Facebook">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg>
          </a>
          <a href="#" class="footer-social" aria-label="Instagram">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
          </a>
          <a href="#" class="footer-social" aria-label="YouTube">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M22.54 6.42a2.78 2.78 0 00-1.95-1.95C18.88 4 12 4 12 4s-6.88 0-8.59.47a2.78 2.78 0 00-1.95 1.95A29 29 0 001 12a29 29 0 00.46 5.58A2.78 2.78 0 003.41 19.5C5.12 20 12 20 12 20s6.88 0 8.59-.46a2.78 2.78 0 001.95-1.95A29 29 0 0023 12a29 29 0 00-.46-5.58z"/><polygon points="9.75 15.02 15.5 12 9.75 8.98 9.75 15.02" fill="white"/></svg>
          </a>
          <a href="#" class="footer-social" aria-label="LinkedIn">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"/><circle cx="4" cy="4" r="2"/></svg>
          </a>
        </div>
      </div>

      <!-- RIGHT: Contact Form -->
      <div class="contact-form-card" style="background: white; padding: 40px; border-radius: 8px; box-shadow: 0 5px 20px rgba(0,0,0,0.05);">
        <h3 style="color: var(--crimson); margin-bottom: 5px;">Send Us a Message</h3>
        <p class="subtitle" style="color: #666; margin-bottom: 25px;">Fill the form and we'll get back to you</p>
        <form class="contact-form" action="#" method="POST" data-validate="true">
          <div class="form-group" style="margin-bottom: 20px;">
            <label for="fullName" style="display: block; margin-bottom: 8px; font-weight: 500; font-size: 14px;">Full Name <span class="required" style="color: red;">*</span></label>
            <input type="text" id="fullName" name="fullName" class="form-control" required placeholder="Enter your full name" style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 4px; font-family: inherit;">
          </div>
          
          <div class="form-group" style="margin-bottom: 20px;">
            <label for="email" style="display: block; margin-bottom: 8px; font-weight: 500; font-size: 14px;">Email Address <span class="required" style="color: red;">*</span></label>
            <input type="email" id="email" name="email" class="form-control" required placeholder="Enter your email address" style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 4px; font-family: inherit;">
          </div>
          
          <div class="form-group" style="margin-bottom: 20px;">
            <label for="phone" style="display: block; margin-bottom: 8px; font-weight: 500; font-size: 14px;">Phone Number</label>
            <input type="tel" id="phone" name="phone" class="form-control" placeholder="Enter your phone number" style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 4px; font-family: inherit;">
          </div>
          
          <div class="form-group" style="margin-bottom: 20px;">
            <label for="subject" style="display: block; margin-bottom: 8px; font-weight: 500; font-size: 14px;">Subject</label>
            <select id="subject" name="subject" class="form-control" style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 4px; font-family: inherit; background: white;">
              <option value="General Enquiry">General Enquiry</option>
              <option value="Admissions">Admissions</option>
              <option value="Fee Structure">Fee Structure</option>
              <option value="Scholarship">Scholarship</option>
              <option value="Other">Other</option>
            </select>
          </div>

          <div class="form-group" style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 500; font-size: 14px;">Program Interest</label>
            <div class="radio-group" style="display: flex; gap: 20px; flex-wrap: wrap;">
              <label class="radio-label" style="display: flex; align-items: center; gap: 5px; cursor: pointer;"><input type="radio" name="program" value="BBA"> BBA</label>
              <label class="radio-label" style="display: flex; align-items: center; gap: 5px; cursor: pointer;"><input type="radio" name="program" value="B.Com"> B.Com</label>
              <label class="radio-label" style="display: flex; align-items: center; gap: 5px; cursor: pointer;"><input type="radio" name="program" value="Both"> Both</label>
              <label class="radio-label" style="display: flex; align-items: center; gap: 5px; cursor: pointer;"><input type="radio" name="program" value="Other"> Other</label>
            </div>
          </div>
          
          <div class="form-group" style="margin-bottom: 25px;">
            <label for="message" style="display: block; margin-bottom: 8px; font-weight: 500; font-size: 14px;">Message <span class="required" style="color: red;">*</span></label>
            <textarea id="message" name="message" class="form-control" rows="5" required placeholder="Write your message here..." style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 4px; font-family: inherit; resize: vertical;"></textarea>
          </div>
          
          <button type="submit" class="btn btn-primary" style="width: 100%; padding: 14px; font-size: 16px; justify-content: center;">Send Message</button>
        </form>
      </div>

    </div>
  </div>
</section>

<!-- MAP SECTION -->
<section class="map-section" style="position: relative; line-height: 0;">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.5889012789847!2d77.54700767454858!3d12.929271615741527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae3f7eed0cb15d%3A0x5ea4c63e65c8b8e9!2sBanashankari%203rd%20Stage%2C%20Bengaluru%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1706000000000!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  
  <div class="map-overlay-card" style="position: absolute; bottom: 30px; left: 10%; background: white; padding: 25px; border-radius: 8px; box-shadow: 0 5px 20px rgba(0,0,0,0.15); max-width: 350px;">
    <h4 style="margin-bottom: 12px; color: var(--crimson); font-size: 18px;">RVD College of Management & IT</h4>
    <p style="font-size: 14px; margin-bottom: 15px; line-height: 1.6; color: #555;">#11 & 12, Srinivas Nagar, 2nd Phase, Kathreguppe, Banashankari 3rd Stage, Bengaluru, Karnataka 560050</p>
    <div class="map-badge" style="display: inline-block; background: #f5f5f5; padding: 6px 12px; border-radius: 4px; font-size: 13px; font-weight: 600; color: #333; border: 1px solid #eee;">Open: Mon-Sat, 9 AM-5 PM</div>
  </div>
</section>

<!-- DEPARTMENTS CONTACT -->
<section class="bg-light section-pad" style="background-color: #f9f9f9; padding: 80px 0;">
  <div class="container reveal">
    <div class="section-header text-center">
      <h2>Department <span>Contacts</span></h2>
      <p>Reach out to specific departments for quick assistance.</p>
    </div>
    
    <div class="contact-dept-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; margin-top: 40px;">
      <div class="dept-card" style="background: white; padding: 30px; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); text-align: center; transition: transform 0.3s ease;">
        <h4 style="color: var(--crimson); margin-bottom: 15px; font-size: 18px;">Admissions Office</h4>
        <p style="font-size: 15px; margin-bottom: 8px;"><a href="mailto:admissions@rvdcollege.com" style="color: #555; text-decoration: none;">admissions@rvdcollege.com</a></p>
        <p style="font-size: 16px; font-weight: 600;"><a href="tel:+919880012345" style="color: var(--gold); text-decoration: none;">+91 98800 12345</a></p>
      </div>
      
      <div class="dept-card" style="background: white; padding: 30px; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); text-align: center; transition: transform 0.3s ease;">
        <h4 style="color: var(--crimson); margin-bottom: 15px; font-size: 18px;">Examination Cell</h4>
        <p style="font-size: 15px; margin-bottom: 8px;"><a href="mailto:exams@rvdcollege.com" style="color: #555; text-decoration: none;">exams@rvdcollege.com</a></p>
        <p style="font-size: 16px; font-weight: 600;"><a href="tel:+919880012346" style="color: var(--gold); text-decoration: none;">+91 98800 12346</a></p>
      </div>

      <div class="dept-card" style="background: white; padding: 30px; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); text-align: center; transition: transform 0.3s ease;">
        <h4 style="color: var(--crimson); margin-bottom: 15px; font-size: 18px;">Accounts & Fees</h4>
        <p style="font-size: 15px; margin-bottom: 8px;"><a href="mailto:accounts@rvdcollege.com" style="color: #555; text-decoration: none;">accounts@rvdcollege.com</a></p>
        <p style="font-size: 16px; font-weight: 600;"><a href="tel:+919880012347" style="color: var(--gold); text-decoration: none;">+91 98800 12347</a></p>
      </div>

      <div class="dept-card" style="background: white; padding: 30px; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); text-align: center; transition: transform 0.3s ease;">
        <h4 style="color: var(--crimson); margin-bottom: 15px; font-size: 18px;">Student Welfare</h4>
        <p style="font-size: 15px; margin-bottom: 8px;"><a href="mailto:welfare@rvdcollege.com" style="color: #555; text-decoration: none;">welfare@rvdcollege.com</a></p>
      </div>

      <div class="dept-card" style="background: white; padding: 30px; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); text-align: center; transition: transform 0.3s ease;">
        <h4 style="color: var(--crimson); margin-bottom: 15px; font-size: 18px;">Placement Cell</h4>
        <p style="font-size: 15px; margin-bottom: 8px;"><a href="mailto:placements@rvdcollege.com" style="color: #555; text-decoration: none;">placements@rvdcollege.com</a></p>
      </div>

      <div class="dept-card" style="background: white; padding: 30px; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); text-align: center; transition: transform 0.3s ease;">
        <h4 style="color: var(--crimson); margin-bottom: 15px; font-size: 18px;">Library</h4>
        <p style="font-size: 15px; margin-bottom: 8px;"><a href="mailto:library@rvdcollege.com" style="color: #555; text-decoration: none;">library@rvdcollege.com</a></p>
      </div>
    </div>
  </div>
</section>

<!-- FAQ SECTION -->
<section class="bg-white section-pad" style="padding: 80px 0;">
  <div class="container reveal">
    <div class="section-header text-center">
      <h2>Frequently Asked <span>Questions</span></h2>
      <p>Find answers to common queries regarding admissions and college life.</p>
    </div>
    
    <div class="faq-accordion" style="max-width: 800px; margin: 40px auto 0;">
      <details class="faq-item" style="margin-bottom: 15px; border: 1px solid #eaeaea; border-radius: 8px; padding: 20px; box-shadow: 0 2px 5px rgba(0,0,0,0.02); background: white;">
        <summary style="font-weight: 600; cursor: pointer; color: #333; font-size: 16px; outline: none;">When are admissions open?</summary>
        <p style="margin-top: 15px; color: #666; font-size: 15px; line-height: 1.6; padding-top: 15px; border-top: 1px solid #eee;">Admissions generally open in the month of May after the declaration of 12th standard / PUC results. Please check our Admissions page for exact dates.</p>
      </details>
      
      <details class="faq-item" style="margin-bottom: 15px; border: 1px solid #eaeaea; border-radius: 8px; padding: 20px; box-shadow: 0 2px 5px rgba(0,0,0,0.02); background: white;">
        <summary style="font-weight: 600; cursor: pointer; color: #333; font-size: 16px; outline: none;">What programs does RVD offer?</summary>
        <p style="margin-top: 15px; color: #666; font-size: 15px; line-height: 1.6; padding-top: 15px; border-top: 1px solid #eee;">We currently offer two undergraduate programs: Bachelor of Business Administration (BBA) and Bachelor of Commerce (B.Com). Both are affiliated with Bengaluru City University.</p>
      </details>
      
      <details class="faq-item" style="margin-bottom: 15px; border: 1px solid #eaeaea; border-radius: 8px; padding: 20px; box-shadow: 0 2px 5px rgba(0,0,0,0.02); background: white;">
        <summary style="font-weight: 600; cursor: pointer; color: #333; font-size: 16px; outline: none;">What is the fee structure?</summary>
        <p style="margin-top: 15px; color: #666; font-size: 15px; line-height: 1.6; padding-top: 15px; border-top: 1px solid #eee;">The fee structure varies depending on the program chosen. Please contact the admissions office or fill the enquiry form on this page to receive the detailed fee schedule.</p>
      </details>

      <details class="faq-item" style="margin-bottom: 15px; border: 1px solid #eaeaea; border-radius: 8px; padding: 20px; box-shadow: 0 2px 5px rgba(0,0,0,0.02); background: white;">
        <summary style="font-weight: 600; cursor: pointer; color: #333; font-size: 16px; outline: none;">Is hostel facility available?</summary>
        <p style="margin-top: 15px; color: #666; font-size: 15px; line-height: 1.6; padding-top: 15px; border-top: 1px solid #eee;">Yes, RVD College provides separate hostel facilities for boys and girls with modern amenities, Wi-Fi, and nutritious food within close proximity to the campus.</p>
      </details>

      <details class="faq-item" style="margin-bottom: 15px; border: 1px solid #eaeaea; border-radius: 8px; padding: 20px; box-shadow: 0 2px 5px rgba(0,0,0,0.02); background: white;">
        <summary style="font-weight: 600; cursor: pointer; color: #333; font-size: 16px; outline: none;">How is the placement record?</summary>
        <p style="margin-top: 15px; color: #666; font-size: 15px; line-height: 1.6; padding-top: 15px; border-top: 1px solid #eee;">We have a dedicated Placement Cell with a track record of strong industry connections. Leading companies actively recruit our graduates with competitive packages.</p>
      </details>

      <details class="faq-item" style="margin-bottom: 15px; border: 1px solid #eaeaea; border-radius: 8px; padding: 20px; box-shadow: 0 2px 5px rgba(0,0,0,0.02); background: white;">
        <summary style="font-weight: 600; cursor: pointer; color: #333; font-size: 16px; outline: none;">Is there scholarship?</summary>
        <p style="margin-top: 15px; color: #666; font-size: 15px; line-height: 1.6; padding-top: 15px; border-top: 1px solid #eee;">Yes, we offer merit-based scholarships to deserving students. Government scholarships for SC/ST and OBC candidates are also facilitated by the college.</p>
      </details>
      
      <details class="faq-item" style="margin-bottom: 15px; border: 1px solid #eaeaea; border-radius: 8px; padding: 20px; box-shadow: 0 2px 5px rgba(0,0,0,0.02); background: white;">
        <summary style="font-weight: 600; cursor: pointer; color: #333; font-size: 16px; outline: none;">What is the college timing?</summary>
        <p style="margin-top: 15px; color: #666; font-size: 15px; line-height: 1.6; padding-top: 15px; border-top: 1px solid #eee;">The general college timing is from 9:00 AM to 5:00 PM, Monday to Saturday. Specific class schedules are shared with students during orientation.</p>
      </details>
      
      <details class="faq-item" style="margin-bottom: 15px; border: 1px solid #eaeaea; border-radius: 8px; padding: 20px; box-shadow: 0 2px 5px rgba(0,0,0,0.02); background: white;">
        <summary style="font-weight: 600; cursor: pointer; color: #333; font-size: 16px; outline: none;">How to reach the college?</summary>
        <p style="margin-top: 15px; color: #666; font-size: 15px; line-height: 1.6; padding-top: 15px; border-top: 1px solid #eee;">Our campus is located in Banashankari 3rd Stage, Bengaluru, which is well-connected by BMTC buses and is easily accessible from major parts of the city. Refer to the map section above for exact directions.</p>
      </details>
    </div>
  </div>
</section>

<!-- CTA SECTION -->
<section class="cta-section" style="background: linear-gradient(rgba(139, 0, 0, 0.9), rgba(139, 0, 0, 0.9)), url('images/campus-bg.jpg') center/cover; padding: 60px 0; color: white; text-align: center;">
  <div class="container reveal">
    <h2 style="margin-bottom: 20px; font-family: var(--font-heading);">Ready to take the next step?</h2>
    <p style="margin-bottom: 30px; font-size: 18px; opacity: 0.9;">Join RVD College and build a strong foundation for a successful career.</p>
    <a href="admissions.html" class="btn btn-gold" style="font-size: 16px; padding: 12px 30px;">Apply Now</a>
  </div>
</section>

 @endsection

