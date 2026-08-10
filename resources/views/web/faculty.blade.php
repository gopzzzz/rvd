
 @extends('layouts.weblayout')

@section('content')

<!-- PAGE HERO -->
<section class="page-hero">
    <div class="container">
        <div class="page-hero-content reveal">
            <h1>Our <span>Faculty</span></h1>
            <p>Meet our dedicated team of experienced educators and industry professionals.</p>
        </div>
    </div>
</section>

<!-- FACULTY INTRO -->
<section class="bg-white section-pad">
    <div class="container">
        <div class="section-header text-center reveal">
            <h2>Meet Our <span>Expert Faculty</span></h2>
            <p style="max-width: 800px; margin: 0 auto;">At RVD College, we pride ourselves on having a stellar faculty composed of highly qualified academicians and seasoned industry professionals. Our educators are dedicated to fostering a rich learning environment that empowers students with the knowledge and skills needed for success.</p>
        </div>
        
        <div class="stats-grid reveal" style="display: flex; gap: 30px; justify-content: center; margin-top: 40px; flex-wrap: wrap;">
            <div class="stat-box text-center" style="background: var(--light-gray); padding: 30px; border-radius: 8px; flex: 1; min-width: 250px; border-top: 4px solid var(--crimson);">
                <div class="stat-number" style="font-size: 3rem; color: var(--crimson); font-family: var(--font-heading); font-weight: 700;"><span class="counter" data-target="25" data-suffix="+">0</span></div>
                <div class="stat-label" style="font-size: 1.1rem; font-weight: 600; margin-top: 10px;">Faculty Members</div>
            </div>
            <div class="stat-box text-center" style="background: var(--light-gray); padding: 30px; border-radius: 8px; flex: 1; min-width: 250px; border-top: 4px solid var(--gold);">
                <div class="stat-number" style="font-size: 3rem; color: var(--gold); font-family: var(--font-heading); font-weight: 700;"><span class="counter" data-target="15" data-suffix="+">0</span></div>
                <div class="stat-label" style="font-size: 1.1rem; font-weight: 600; margin-top: 10px;">Years Avg Experience</div>
            </div>
            <div class="stat-box text-center" style="background: var(--light-gray); padding: 30px; border-radius: 8px; flex: 1; min-width: 250px; border-top: 4px solid var(--crimson);">
                <div class="stat-number" style="font-size: 3rem; color: var(--crimson); font-family: var(--font-heading); font-weight: 700;"><span class="counter" data-target="10" data-suffix="+">0</span></div>
                <div class="stat-label" style="font-size: 1.1rem; font-weight: 600; margin-top: 10px;">PhDs</div>
            </div>
        </div>
    </div>
</section>

<!-- PRINCIPAL -->
<section class="bg-light section-pad" id="principal">
    <div class="container">
        <div class="section-header text-center reveal">
            <h2>Principal's <span>Profile</span></h2>
        </div>
        
        <div class="principal-card reveal" style="background: #fff; border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); overflow: hidden; display: flex; flex-wrap: wrap; margin: 0 auto; max-width: 900px;">
            <div style="flex: 1; min-width: 300px; background: linear-gradient(135deg, var(--crimson), #5a0000); display: flex; flex-direction: column; align-items: center; justify-content: center; padding: 40px; color: #fff;">
                <div style="width: 150px; height: 150px; border-radius: 50%; background: #fff; color: var(--crimson); font-size: 4rem; font-weight: 700; display: flex; align-items: center; justify-content: center; border: 5px solid var(--gold); margin-bottom: 20px;">
                    RV
                </div>
                <h3 style="font-family: var(--font-heading); font-size: 1.8rem; margin-bottom: 5px; color: #fff;">Dr. R. Venkatesh</h3>
                <p style="color: var(--gold); font-size: 1.1rem; font-weight: 600;">Principal & Professor</p>
            </div>
            <div style="flex: 2; min-width: 300px; padding: 40px;">
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                    <div>
                        <strong style="color: var(--crimson); display: block; margin-bottom: 5px;">Qualifications:</strong>
                        M.Com, Ph.D (Commerce)
                    </div>
                    <div>
                        <strong style="color: var(--crimson); display: block; margin-bottom: 5px;">Experience:</strong>
                        20+ Years
                    </div>
                    <div>
                        <strong style="color: var(--crimson); display: block; margin-bottom: 5px;">Specialization:</strong>
                        Financial Management, Corporate Governance
                    </div>
                    <div>
                        <strong style="color: var(--crimson); display: block; margin-bottom: 5px;">Research:</strong>
                        35+ Publications
                    </div>
                </div>
                <p style="margin-bottom: 15px; line-height: 1.7;">Dr. R. Venkatesh is an acclaimed academician with over two decades of experience in higher education. His visionary leadership has been instrumental in shaping the academic policies at RVD College. He has successfully mentored numerous scholars and students, bridging the gap between theoretical knowledge and practical industry applications.</p>
                <div>
                    <strong style="color: var(--crimson); display: block; margin-bottom: 5px;">Subjects Taught:</strong>
                    <span style="display: inline-block; background: var(--light-gray); padding: 5px 12px; border-radius: 20px; font-size: 0.85rem; margin: 0 5px 5px 0;">Corporate Finance</span>
                    <span style="display: inline-block; background: var(--light-gray); padding: 5px 12px; border-radius: 20px; font-size: 0.85rem; margin: 0 5px 5px 0;">Strategic Management</span>
                    <span style="display: inline-block; background: var(--light-gray); padding: 5px 12px; border-radius: 20px; font-size: 0.85rem; margin: 0 5px 5px 0;">Business Ethics</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- MANAGEMENT DEPARTMENT -->
<section class="bg-white section-pad" id="management">
    <div class="container">
        <div class="section-header text-center reveal">
            <h2>Department of <span>Management Studies</span></h2>
        </div>
        
        <div class="grid-4 reveal" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); gap: 30px;">
            <!-- Faculty 1 -->
            <div class="faculty-card" style="background: var(--light-gray); border-radius: 8px; overflow: hidden; text-align: center; padding-bottom: 20px; transition: transform 0.3s ease; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
                <div class="faculty-initials" style="background: var(--crimson); color: white; height: 180px; display: flex; align-items: center; justify-content: center; font-size: 3rem; font-weight: 700; font-family: var(--font-heading);">PS</div>
                <div class="faculty-info" style="padding: 20px;">
                    <h3 style="font-size: 1.2rem; margin-bottom: 5px; color: var(--crimson);">Dr. Priya Sharma</h3>
                    <p style="color: #666; font-size: 0.95rem; font-weight: 600; margin-bottom: 15px;">Assistant Professor</p>
                    <div style="font-size: 0.85rem; color: #555; margin-bottom: 10px;"><strong>Dept:</strong> BBA</div>
                    <div style="font-size: 0.85rem; color: #555; margin-bottom: 15px;"><strong>Expertise:</strong> Marketing</div>
                    <div class="qual-badges">
                        <span style="display: inline-block; background: var(--gold); color: #000; padding: 4px 10px; border-radius: 4px; font-size: 0.8rem; font-weight: 600; margin: 2px;">MBA</span>
                        <span style="display: inline-block; background: var(--gold); color: #000; padding: 4px 10px; border-radius: 4px; font-size: 0.8rem; font-weight: 600; margin: 2px;">Ph.D</span>
                    </div>
                </div>
            </div>
            
            <!-- Faculty 2 -->
            <div class="faculty-card" style="background: var(--light-gray); border-radius: 8px; overflow: hidden; text-align: center; padding-bottom: 20px; transition: transform 0.3s ease; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
                <div class="faculty-initials" style="background: var(--crimson); color: white; height: 180px; display: flex; align-items: center; justify-content: center; font-size: 3rem; font-weight: 700; font-family: var(--font-heading);">SK</div>
                <div class="faculty-info" style="padding: 20px;">
                    <h3 style="font-size: 1.2rem; margin-bottom: 5px; color: var(--crimson);">Prof. Suresh Kumar</h3>
                    <p style="color: #666; font-size: 0.95rem; font-weight: 600; margin-bottom: 15px;">Associate Professor</p>
                    <div style="font-size: 0.85rem; color: #555; margin-bottom: 10px;"><strong>Dept:</strong> BBA</div>
                    <div style="font-size: 0.85rem; color: #555; margin-bottom: 15px;"><strong>Expertise:</strong> HR Management</div>
                    <div class="qual-badges">
                        <span style="display: inline-block; background: var(--gold); color: #000; padding: 4px 10px; border-radius: 4px; font-size: 0.8rem; font-weight: 600; margin: 2px;">MBA</span>
                        <span style="display: inline-block; background: var(--gold); color: #000; padding: 4px 10px; border-radius: 4px; font-size: 0.8rem; font-weight: 600; margin: 2px;">M.Phil</span>
                    </div>
                </div>
            </div>
            
            <!-- Faculty 3 -->
            <div class="faculty-card" style="background: var(--light-gray); border-radius: 8px; overflow: hidden; text-align: center; padding-bottom: 20px; transition: transform 0.3s ease; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
                <div class="faculty-initials" style="background: var(--crimson); color: white; height: 180px; display: flex; align-items: center; justify-content: center; font-size: 3rem; font-weight: 700; font-family: var(--font-heading);">AR</div>
                <div class="faculty-info" style="padding: 20px;">
                    <h3 style="font-size: 1.2rem; margin-bottom: 5px; color: var(--crimson);">Dr. Anita Rao</h3>
                    <p style="color: #666; font-size: 0.95rem; font-weight: 600; margin-bottom: 15px;">Assistant Professor</p>
                    <div style="font-size: 0.85rem; color: #555; margin-bottom: 10px;"><strong>Dept:</strong> BBA</div>
                    <div style="font-size: 0.85rem; color: #555; margin-bottom: 15px;"><strong>Expertise:</strong> Finance</div>
                    <div class="qual-badges">
                        <span style="display: inline-block; background: var(--gold); color: #000; padding: 4px 10px; border-radius: 4px; font-size: 0.8rem; font-weight: 600; margin: 2px;">MBA</span>
                        <span style="display: inline-block; background: var(--gold); color: #000; padding: 4px 10px; border-radius: 4px; font-size: 0.8rem; font-weight: 600; margin: 2px;">Ph.D</span>
                    </div>
                </div>
            </div>
            
            <!-- Faculty 4 -->
            <div class="faculty-card" style="background: var(--light-gray); border-radius: 8px; overflow: hidden; text-align: center; padding-bottom: 20px; transition: transform 0.3s ease; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
                <div class="faculty-initials" style="background: var(--crimson); color: white; height: 180px; display: flex; align-items: center; justify-content: center; font-size: 3rem; font-weight: 700; font-family: var(--font-heading);">KP</div>
                <div class="faculty-info" style="padding: 20px;">
                    <h3 style="font-size: 1.2rem; margin-bottom: 5px; color: var(--crimson);">Prof. Kiran Patel</h3>
                    <p style="color: #666; font-size: 0.95rem; font-weight: 600; margin-bottom: 15px;">Assistant Professor</p>
                    <div style="font-size: 0.85rem; color: #555; margin-bottom: 10px;"><strong>Dept:</strong> BBA</div>
                    <div style="font-size: 0.85rem; color: #555; margin-bottom: 15px;"><strong>Expertise:</strong> Entrepreneurship</div>
                    <div class="qual-badges">
                        <span style="display: inline-block; background: var(--gold); color: #000; padding: 4px 10px; border-radius: 4px; font-size: 0.8rem; font-weight: 600; margin: 2px;">M.Com</span>
                        <span style="display: inline-block; background: var(--gold); color: #000; padding: 4px 10px; border-radius: 4px; font-size: 0.8rem; font-weight: 600; margin: 2px;">MBA</span>
                    </div>
                </div>
            </div>
            
            <!-- Faculty 5 -->
            <div class="faculty-card" style="background: var(--light-gray); border-radius: 8px; overflow: hidden; text-align: center; padding-bottom: 20px; transition: transform 0.3s ease; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
                <div class="faculty-initials" style="background: var(--crimson); color: white; height: 180px; display: flex; align-items: center; justify-content: center; font-size: 3rem; font-weight: 700; font-family: var(--font-heading);">MR</div>
                <div class="faculty-info" style="padding: 20px;">
                    <h3 style="font-size: 1.2rem; margin-bottom: 5px; color: var(--crimson);">Dr. Meena Reddy</h3>
                    <p style="color: #666; font-size: 0.95rem; font-weight: 600; margin-bottom: 15px;">Associate Professor</p>
                    <div style="font-size: 0.85rem; color: #555; margin-bottom: 10px;"><strong>Dept:</strong> BBA</div>
                    <div style="font-size: 0.85rem; color: #555; margin-bottom: 15px;"><strong>Expertise:</strong> Operations</div>
                    <div class="qual-badges">
                        <span style="display: inline-block; background: var(--gold); color: #000; padding: 4px 10px; border-radius: 4px; font-size: 0.8rem; font-weight: 600; margin: 2px;">MBA</span>
                        <span style="display: inline-block; background: var(--gold); color: #000; padding: 4px 10px; border-radius: 4px; font-size: 0.8rem; font-weight: 600; margin: 2px;">Ph.D</span>
                    </div>
                </div>
            </div>
            
            <!-- Faculty 6 -->
            <div class="faculty-card" style="background: var(--light-gray); border-radius: 8px; overflow: hidden; text-align: center; padding-bottom: 20px; transition: transform 0.3s ease; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
                <div class="faculty-initials" style="background: var(--crimson); color: white; height: 180px; display: flex; align-items: center; justify-content: center; font-size: 3rem; font-weight: 700; font-family: var(--font-heading);">AS</div>
                <div class="faculty-info" style="padding: 20px;">
                    <h3 style="font-size: 1.2rem; margin-bottom: 5px; color: var(--crimson);">Prof. Arjun Singh</h3>
                    <p style="color: #666; font-size: 0.95rem; font-weight: 600; margin-bottom: 15px;">Assistant Professor</p>
                    <div style="font-size: 0.85rem; color: #555; margin-bottom: 10px;"><strong>Dept:</strong> BBA</div>
                    <div style="font-size: 0.85rem; color: #555; margin-bottom: 15px;"><strong>Expertise:</strong> Bus. Communication</div>
                    <div class="qual-badges">
                        <span style="display: inline-block; background: var(--gold); color: #000; padding: 4px 10px; border-radius: 4px; font-size: 0.8rem; font-weight: 600; margin: 2px;">MBA</span>
                    </div>
                </div>
            </div>
            
            <!-- Faculty 7 -->
            <div class="faculty-card" style="background: var(--light-gray); border-radius: 8px; overflow: hidden; text-align: center; padding-bottom: 20px; transition: transform 0.3s ease; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
                <div class="faculty-initials" style="background: var(--crimson); color: white; height: 180px; display: flex; align-items: center; justify-content: center; font-size: 3rem; font-weight: 700; font-family: var(--font-heading);">SN</div>
                <div class="faculty-info" style="padding: 20px;">
                    <h3 style="font-size: 1.2rem; margin-bottom: 5px; color: var(--crimson);">Dr. Sunita Nair</h3>
                    <p style="color: #666; font-size: 0.95rem; font-weight: 600; margin-bottom: 15px;">Associate Professor</p>
                    <div style="font-size: 0.85rem; color: #555; margin-bottom: 10px;"><strong>Dept:</strong> BBA</div>
                    <div style="font-size: 0.85rem; color: #555; margin-bottom: 15px;"><strong>Expertise:</strong> Strategic Mgmt</div>
                    <div class="qual-badges">
                        <span style="display: inline-block; background: var(--gold); color: #000; padding: 4px 10px; border-radius: 4px; font-size: 0.8rem; font-weight: 600; margin: 2px;">Ph.D</span>
                    </div>
                </div>
            </div>
            
            <!-- Faculty 8 -->
            <div class="faculty-card" style="background: var(--light-gray); border-radius: 8px; overflow: hidden; text-align: center; padding-bottom: 20px; transition: transform 0.3s ease; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
                <div class="faculty-initials" style="background: var(--crimson); color: white; height: 180px; display: flex; align-items: center; justify-content: center; font-size: 3rem; font-weight: 700; font-family: var(--font-heading);">RB</div>
                <div class="faculty-info" style="padding: 20px;">
                    <h3 style="font-size: 1.2rem; margin-bottom: 5px; color: var(--crimson);">Prof. Ramesh B.</h3>
                    <p style="color: #666; font-size: 0.95rem; font-weight: 600; margin-bottom: 15px;">Assistant Professor</p>
                    <div style="font-size: 0.85rem; color: #555; margin-bottom: 10px;"><strong>Dept:</strong> BBA</div>
                    <div style="font-size: 0.85rem; color: #555; margin-bottom: 15px;"><strong>Expertise:</strong> Marketing</div>
                    <div class="qual-badges">
                        <span style="display: inline-block; background: var(--gold); color: #000; padding: 4px 10px; border-radius: 4px; font-size: 0.8rem; font-weight: 600; margin: 2px;">MBA</span>
                        <span style="display: inline-block; background: var(--gold); color: #000; padding: 4px 10px; border-radius: 4px; font-size: 0.8rem; font-weight: 600; margin: 2px;">PGDM</span>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- COMMERCE DEPARTMENT -->
<section class="bg-light section-pad" id="commerce">
    <div class="container">
        <div class="section-header text-center reveal">
            <h2>Department of <span>Commerce</span></h2>
        </div>
        
        <div class="grid-4 reveal" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); gap: 30px;">
            <!-- Faculty 1 -->
            <div class="faculty-card" style="background: #fff; border-radius: 8px; overflow: hidden; text-align: center; padding-bottom: 20px; transition: transform 0.3s ease; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
                <div class="faculty-initials" style="background: var(--crimson); color: white; height: 180px; display: flex; align-items: center; justify-content: center; font-size: 3rem; font-weight: 700; font-family: var(--font-heading);">LS</div>
                <div class="faculty-info" style="padding: 20px;">
                    <h3 style="font-size: 1.2rem; margin-bottom: 5px; color: var(--crimson);">Dr. Lakshmi S.</h3>
                    <p style="color: #666; font-size: 0.95rem; font-weight: 600; margin-bottom: 15px;">Associate Professor</p>
                    <div style="font-size: 0.85rem; color: #555; margin-bottom: 10px;"><strong>Dept:</strong> B.Com</div>
                    <div style="font-size: 0.85rem; color: #555; margin-bottom: 15px;"><strong>Expertise:</strong> Accountancy</div>
                    <div class="qual-badges">
                        <span style="display: inline-block; background: var(--gold); color: #000; padding: 4px 10px; border-radius: 4px; font-size: 0.8rem; font-weight: 600; margin: 2px;">M.Com</span>
                        <span style="display: inline-block; background: var(--gold); color: #000; padding: 4px 10px; border-radius: 4px; font-size: 0.8rem; font-weight: 600; margin: 2px;">Ph.D</span>
                    </div>
                </div>
            </div>
            
            <!-- Faculty 2 -->
            <div class="faculty-card" style="background: #fff; border-radius: 8px; overflow: hidden; text-align: center; padding-bottom: 20px; transition: transform 0.3s ease; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
                <div class="faculty-initials" style="background: var(--crimson); color: white; height: 180px; display: flex; align-items: center; justify-content: center; font-size: 3rem; font-weight: 700; font-family: var(--font-heading);">VR</div>
                <div class="faculty-info" style="padding: 20px;">
                    <h3 style="font-size: 1.2rem; margin-bottom: 5px; color: var(--crimson);">Prof. Venkat Rao</h3>
                    <p style="color: #666; font-size: 0.95rem; font-weight: 600; margin-bottom: 15px;">Assistant Professor</p>
                    <div style="font-size: 0.85rem; color: #555; margin-bottom: 10px;"><strong>Dept:</strong> B.Com</div>
                    <div style="font-size: 0.85rem; color: #555; margin-bottom: 15px;"><strong>Expertise:</strong> Business Law</div>
                    <div class="qual-badges">
                        <span style="display: inline-block; background: var(--gold); color: #000; padding: 4px 10px; border-radius: 4px; font-size: 0.8rem; font-weight: 600; margin: 2px;">M.Com</span>
                        <span style="display: inline-block; background: var(--gold); color: #000; padding: 4px 10px; border-radius: 4px; font-size: 0.8rem; font-weight: 600; margin: 2px;">LLB</span>
                    </div>
                </div>
            </div>
            
            <!-- Faculty 3 -->
            <div class="faculty-card" style="background: #fff; border-radius: 8px; overflow: hidden; text-align: center; padding-bottom: 20px; transition: transform 0.3s ease; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
                <div class="faculty-initials" style="background: var(--crimson); color: white; height: 180px; display: flex; align-items: center; justify-content: center; font-size: 3rem; font-weight: 700; font-family: var(--font-heading);">DK</div>
                <div class="faculty-info" style="padding: 20px;">
                    <h3 style="font-size: 1.2rem; margin-bottom: 5px; color: var(--crimson);">Dr. Divya K.</h3>
                    <p style="color: #666; font-size: 0.95rem; font-weight: 600; margin-bottom: 15px;">Assistant Professor</p>
                    <div style="font-size: 0.85rem; color: #555; margin-bottom: 10px;"><strong>Dept:</strong> B.Com</div>
                    <div style="font-size: 0.85rem; color: #555; margin-bottom: 15px;"><strong>Expertise:</strong> Cost Accounting</div>
                    <div class="qual-badges">
                        <span style="display: inline-block; background: var(--gold); color: #000; padding: 4px 10px; border-radius: 4px; font-size: 0.8rem; font-weight: 600; margin: 2px;">M.Com</span>
                        <span style="display: inline-block; background: var(--gold); color: #000; padding: 4px 10px; border-radius: 4px; font-size: 0.8rem; font-weight: 600; margin: 2px;">Ph.D</span>
                    </div>
                </div>
            </div>
            
            <!-- Faculty 4 -->
            <div class="faculty-card" style="background: #fff; border-radius: 8px; overflow: hidden; text-align: center; padding-bottom: 20px; transition: transform 0.3s ease; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
                <div class="faculty-initials" style="background: var(--crimson); color: white; height: 180px; display: flex; align-items: center; justify-content: center; font-size: 3rem; font-weight: 700; font-family: var(--font-heading);">AM</div>
                <div class="faculty-info" style="padding: 20px;">
                    <h3 style="font-size: 1.2rem; margin-bottom: 5px; color: var(--crimson);">Prof. Arun M.</h3>
                    <p style="color: #666; font-size: 0.95rem; font-weight: 600; margin-bottom: 15px;">Assistant Professor</p>
                    <div style="font-size: 0.85rem; color: #555; margin-bottom: 10px;"><strong>Dept:</strong> B.Com</div>
                    <div style="font-size: 0.85rem; color: #555; margin-bottom: 15px;"><strong>Expertise:</strong> Banking & Finance</div>
                    <div class="qual-badges">
                        <span style="display: inline-block; background: var(--gold); color: #000; padding: 4px 10px; border-radius: 4px; font-size: 0.8rem; font-weight: 600; margin: 2px;">M.Com</span>
                        <span style="display: inline-block; background: var(--gold); color: #000; padding: 4px 10px; border-radius: 4px; font-size: 0.8rem; font-weight: 600; margin: 2px;">MBA</span>
                    </div>
                </div>
            </div>
            
            <!-- Faculty 5 -->
            <div class="faculty-card" style="background: #fff; border-radius: 8px; overflow: hidden; text-align: center; padding-bottom: 20px; transition: transform 0.3s ease; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
                <div class="faculty-initials" style="background: var(--crimson); color: white; height: 180px; display: flex; align-items: center; justify-content: center; font-size: 3rem; font-weight: 700; font-family: var(--font-heading);">RT</div>
                <div class="faculty-info" style="padding: 20px;">
                    <h3 style="font-size: 1.2rem; margin-bottom: 5px; color: var(--crimson);">Dr. Rekha T.</h3>
                    <p style="color: #666; font-size: 0.95rem; font-weight: 600; margin-bottom: 15px;">Associate Professor</p>
                    <div style="font-size: 0.85rem; color: #555; margin-bottom: 10px;"><strong>Dept:</strong> B.Com</div>
                    <div style="font-size: 0.85rem; color: #555; margin-bottom: 15px;"><strong>Expertise:</strong> Income Tax</div>
                    <div class="qual-badges">
                        <span style="display: inline-block; background: var(--gold); color: #000; padding: 4px 10px; border-radius: 4px; font-size: 0.8rem; font-weight: 600; margin: 2px;">M.Com</span>
                        <span style="display: inline-block; background: var(--gold); color: #000; padding: 4px 10px; border-radius: 4px; font-size: 0.8rem; font-weight: 600; margin: 2px;">Ph.D</span>
                    </div>
                </div>
            </div>
            
            <!-- Faculty 6 -->
            <div class="faculty-card" style="background: #fff; border-radius: 8px; overflow: hidden; text-align: center; padding-bottom: 20px; transition: transform 0.3s ease; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
                <div class="faculty-initials" style="background: var(--crimson); color: white; height: 180px; display: flex; align-items: center; justify-content: center; font-size: 3rem; font-weight: 700; font-family: var(--font-heading);">GP</div>
                <div class="faculty-info" style="padding: 20px;">
                    <h3 style="font-size: 1.2rem; margin-bottom: 5px; color: var(--crimson);">Prof. Ganesh P.</h3>
                    <p style="color: #666; font-size: 0.95rem; font-weight: 600; margin-bottom: 15px;">Assistant Professor</p>
                    <div style="font-size: 0.85rem; color: #555; margin-bottom: 10px;"><strong>Dept:</strong> B.Com</div>
                    <div style="font-size: 0.85rem; color: #555; margin-bottom: 15px;"><strong>Expertise:</strong> Statistics</div>
                    <div class="qual-badges">
                        <span style="display: inline-block; background: var(--gold); color: #000; padding: 4px 10px; border-radius: 4px; font-size: 0.8rem; font-weight: 600; margin: 2px;">M.Com</span>
                        <span style="display: inline-block; background: var(--gold); color: #000; padding: 4px 10px; border-radius: 4px; font-size: 0.8rem; font-weight: 600; margin: 2px;">M.Phil</span>
                    </div>
                </div>
            </div>
            
            <!-- Faculty 7 -->
            <div class="faculty-card" style="background: #fff; border-radius: 8px; overflow: hidden; text-align: center; padding-bottom: 20px; transition: transform 0.3s ease; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
                <div class="faculty-initials" style="background: var(--crimson); color: white; height: 180px; display: flex; align-items: center; justify-content: center; font-size: 3rem; font-weight: 700; font-family: var(--font-heading);">HR</div>
                <div class="faculty-info" style="padding: 20px;">
                    <h3 style="font-size: 1.2rem; margin-bottom: 5px; color: var(--crimson);">Dr. Hema R.</h3>
                    <p style="color: #666; font-size: 0.95rem; font-weight: 600; margin-bottom: 15px;">Assistant Professor</p>
                    <div style="font-size: 0.85rem; color: #555; margin-bottom: 10px;"><strong>Dept:</strong> B.Com</div>
                    <div style="font-size: 0.85rem; color: #555; margin-bottom: 15px;"><strong>Expertise:</strong> Auditing</div>
                    <div class="qual-badges">
                        <span style="display: inline-block; background: var(--gold); color: #000; padding: 4px 10px; border-radius: 4px; font-size: 0.8rem; font-weight: 600; margin: 2px;">M.Com</span>
                        <span style="display: inline-block; background: var(--gold); color: #000; padding: 4px 10px; border-radius: 4px; font-size: 0.8rem; font-weight: 600; margin: 2px;">Ph.D</span>
                    </div>
                </div>
            </div>
            
            <!-- Faculty 8 -->
            <div class="faculty-card" style="background: #fff; border-radius: 8px; overflow: hidden; text-align: center; padding-bottom: 20px; transition: transform 0.3s ease; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
                <div class="faculty-initials" style="background: var(--crimson); color: white; height: 180px; display: flex; align-items: center; justify-content: center; font-size: 3rem; font-weight: 700; font-family: var(--font-heading);">BL</div>
                <div class="faculty-info" style="padding: 20px;">
                    <h3 style="font-size: 1.2rem; margin-bottom: 5px; color: var(--crimson);">Prof. Bharat L.</h3>
                    <p style="color: #666; font-size: 0.95rem; font-weight: 600; margin-bottom: 15px;">Assistant Professor</p>
                    <div style="font-size: 0.85rem; color: #555; margin-bottom: 10px;"><strong>Dept:</strong> B.Com</div>
                    <div style="font-size: 0.85rem; color: #555; margin-bottom: 15px;"><strong>Expertise:</strong> Computer Applications</div>
                    <div class="qual-badges">
                        <span style="display: inline-block; background: var(--gold); color: #000; padding: 4px 10px; border-radius: 4px; font-size: 0.8rem; font-weight: 600; margin: 2px;">M.Com</span>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- TEACHING METHODOLOGY -->
<section class="section-pad reveal" style="background: #111; color: white;">
    <div class="container">
        <div class="section-header text-center">
            <h2 style="color: white;">Our Teaching <span>Methodology</span></h2>
            <p style="color: #ccc; max-width: 800px; margin: 0 auto;">We employ modern, interactive teaching methodologies to ensure our students get the best learning experience, combining theory with practical application.</p>
        </div>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 30px; margin-top: 40px;">
            <div style="background: rgba(255,255,255,0.05); padding: 30px; border-radius: 8px; border-left: 4px solid var(--gold);">
                <h3 style="color: var(--gold); font-size: 1.3rem; margin-bottom: 15px;">Case Study Method</h3>
                <p style="color: #aaa; font-size: 0.95rem; line-height: 1.6;">Real-world business scenarios are analyzed to develop problem-solving and critical thinking skills among students.</p>
            </div>
            <div style="background: rgba(255,255,255,0.05); padding: 30px; border-radius: 8px; border-left: 4px solid var(--crimson);">
                <h3 style="color: var(--crimson); font-size: 1.3rem; margin-bottom: 15px;">Industry Guest Lectures</h3>
                <p style="color: #aaa; font-size: 0.95rem; line-height: 1.6;">Regular interaction with industry experts to bridge the gap between academic curriculum and corporate reality.</p>
            </div>
            <div style="background: rgba(255,255,255,0.05); padding: 30px; border-radius: 8px; border-left: 4px solid var(--gold);">
                <h3 style="color: var(--gold); font-size: 1.3rem; margin-bottom: 15px;">Project-Based Learning</h3>
                <p style="color: #aaa; font-size: 0.95rem; line-height: 1.6;">Hands-on projects and internships that provide practical exposure and develop organizational skills.</p>
            </div>
            <div style="background: rgba(255,255,255,0.05); padding: 30px; border-radius: 8px; border-left: 4px solid var(--crimson);">
                <h3 style="color: var(--crimson); font-size: 1.3rem; margin-bottom: 15px;">Seminars & Workshops</h3>
                <p style="color: #aaa; font-size: 0.95rem; line-height: 1.6;">Interactive sessions that foster confidence, communication skills, and deeper understanding of specialized topics.</p>
            </div>
            <div style="background: rgba(255,255,255,0.05); padding: 30px; border-radius: 8px; border-left: 4px solid var(--gold);">
                <h3 style="color: var(--gold); font-size: 1.3rem; margin-bottom: 15px;">Digital Learning Tools</h3>
                <p style="color: #aaa; font-size: 0.95rem; line-height: 1.6;">Integration of modern technology, LMS, and virtual simulations to enhance the learning process.</p>
            </div>
            <div style="background: rgba(255,255,255,0.05); padding: 30px; border-radius: 8px; border-left: 4px solid var(--crimson);">
                <h3 style="color: var(--crimson); font-size: 1.3rem; margin-bottom: 15px;">Research & Publication</h3>
                <p style="color: #aaa; font-size: 0.95rem; line-height: 1.6;">Encouraging students to participate in research activities, paper presentations, and academic writing.</p>
            </div>
        </div>
    </div>
</section>

<!-- RESEARCH & PUBLICATIONS -->
<section class="bg-light section-pad">
    <div class="container">
        <div class="reveal" style="background: #fff; padding: 50px; border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.05);">
            <div class="text-center" style="margin-bottom: 40px;">
                <h2 style="font-family: var(--font-heading); font-size: 2.2rem; color: var(--crimson); margin-bottom: 15px;">Research & Publications</h2>
                <p style="max-width: 800px; margin: 0 auto; color: #555; line-height: 1.7;">Our faculty members are actively involved in research, constantly contributing to the academic community through publications in national and international journals, authoring books, and presenting papers at various conferences.</p>
            </div>
            
            <div style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center;">
                <div style="flex: 1; min-width: 200px; text-align: center; padding: 20px;">
                    <div style="font-size: 3rem; color: var(--crimson); font-family: var(--font-heading); font-weight: 700; margin-bottom: 10px;"><span class="counter" data-target="50" data-suffix="+">0</span></div>
                    <div style="font-size: 1.1rem; font-weight: 600;">Research Papers</div>
                </div>
                <div style="flex: 1; min-width: 200px; text-align: center; padding: 20px; border-left: 1px solid #eee;">
                    <div style="font-size: 3rem; color: var(--gold); font-family: var(--font-heading); font-weight: 700; margin-bottom: 10px;"><span class="counter" data-target="10" data-suffix="">0</span></div>
                    <div style="font-size: 1.1rem; font-weight: 600;">Books Published</div>
                </div>
                <div style="flex: 1; min-width: 200px; text-align: center; padding: 20px; border-left: 1px solid #eee;">
                    <div style="font-size: 3rem; color: var(--crimson); font-family: var(--font-heading); font-weight: 700; margin-bottom: 10px;"><span class="counter" data-target="20" data-suffix="+">0</span></div>
                    <div style="font-size: 1.1rem; font-weight: 600;">Seminars Conducted</div>
                </div>
                <div style="flex: 1; min-width: 200px; text-align: center; padding: 20px; border-left: 1px solid #eee;">
                    <div style="font-size: 3rem; color: var(--gold); font-family: var(--font-heading); font-weight: 700; margin-bottom: 10px;"><span class="counter" data-target="5" data-suffix="">0</span></div>
                    <div style="font-size: 1.1rem; font-weight: 600;">Patents Filed</div>
                </div>
            </div>
        </div>
    </div>
</section>

  
 @endsection

