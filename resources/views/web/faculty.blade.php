
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
                <div class="stat-number" style="font-size: 3rem; color: var(--crimson); font-family: var(--font-heading); font-weight: 700;"><span class="counter" data-target="{{$faculty_count}}" data-suffix="+">0</span></div>
                <div class="stat-label" style="font-size: 1.1rem; font-weight: 600; margin-top: 10px; color:#000;">Faculty Members</div>
            </div>
            <div class="stat-box text-center" style="background: var(--light-gray); padding: 30px; border-radius: 8px; flex: 1; min-width: 250px; border-top: 4px solid var(--gold);">
                <div class="stat-number" style="font-size: 3rem; color: var(--gold); font-family: var(--font-heading); font-weight: 700;"><span class="counter" data-target="{{$experience}}" data-suffix="+">0</span></div>
                <div class="stat-label" style="font-size: 1.1rem; font-weight: 600; margin-top: 10px; color:#000;">Years Avg Experience</div>
            </div>
            <div class="stat-box text-center" style="background: var(--light-gray); padding: 30px; border-radius: 8px; flex: 1; min-width: 250px; border-top: 4px solid var(--crimson);">
                <div class="stat-number" style="font-size: 3rem; color: var(--crimson); font-family: var(--font-heading); font-weight: 700;"><span class="counter" data-target="{{$phd_count}}" data-suffix="+">0</span></div>
                <div class="stat-label" style="font-size: 1.1rem; font-weight: 600; margin-top: 10px; color:#000;">PhDs</div>
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
                <h3 style="font-family: var(--font-heading); font-size: 1.8rem; margin-bottom: 5px; color: #fff;">{{$principal->name}}</h3>
                <p style="color: var(--gold); font-size: 1.1rem; font-weight: 600;">{{$principal->department_name}}</p>
            </div>
            <div style="flex: 2; min-width: 300px; padding: 40px;">
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                    <div>
                        <strong style="color: var(--crimson); display: block; margin-bottom: 5px;">Qualifications:</strong>
                     {{$principal->qualification}}
                    </div>
                    <div>
                        <strong style="color: var(--crimson); display: block; margin-bottom: 5px;">Experience:</strong>
                         {{$principal->experiance}} + years
                    </div>
                    <!-- <div>
                        <strong style="color: var(--crimson); display: block; margin-bottom: 5px;">Specialization:</strong>
                        Financial Management, Corporate Governance
                    </div> -->
                    <!-- <div>
                        <strong style="color: var(--crimson); display: block; margin-bottom: 5px;">Research:</strong>
                        35+ Publications
                    </div> -->
                </div>
                <p style="margin-bottom: 15px; line-height: 1.7;"> {{$principal->bio}}</p>
                <!-- <div>
                    <strong style="color: var(--crimson); display: block; margin-bottom: 5px;">Subjects Taught:</strong>
                    <span style="display: inline-block; background: var(--light-gray); padding: 5px 12px; border-radius: 20px; font-size: 0.85rem; margin: 0 5px 5px 0;">Corporate Finance</span>
                    <span style="display: inline-block; background: var(--light-gray); padding: 5px 12px; border-radius: 20px; font-size: 0.85rem; margin: 0 5px 5px 0;">Strategic Management</span>
                    <span style="display: inline-block; background: var(--light-gray); padding: 5px 12px; border-radius: 20px; font-size: 0.85rem; margin: 0 5px 5px 0;">Business Ethics</span>
                </div> -->
            </div>
        </div>
    </div>
</section>


@foreach($department as $dept)

 @php 
 $faculty=DB::table('faculties')
        ->leftJoin('department', 'faculties.department_id', '=', 'department.id')
        ->where('department_id',$dept->id)
         ->select('faculties.*','department.name as department_name')
        ->get();

 @endphp

<!-- MANAGEMENT DEPARTMENT -->
<section class="bg-white section-pad" id="management">
    <div class="container">
        <div class="section-header text-center reveal">
            <h2>Department of <span>Management Studies</span></h2>
        </div>
        
        <div class="grid-4 reveal" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); gap: 30px;">
            <!-- Faculty 1 -->
             @foreach($faculty as $fac)
            <div class="faculty-card" style="background: var(--light-gray); border-radius: 8px; overflow: hidden; text-align: center; padding-bottom: 20px; transition: transform 0.3s ease; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
                <div class="faculty-initials" style="background: var(--crimson); color: white; height: 180px; display: flex; align-items: center; justify-content: center; font-size: 3rem; font-weight: 700; font-family: var(--font-heading);">PS</div>
                <div class="faculty-info" style="padding: 20px;">
                    <h3 style="font-size: 1.2rem; margin-bottom: 5px; color: var(--crimson);">{{$fac->name}}</h3>
                    <p style="color: #666; font-size: 0.95rem; font-weight: 600; margin-bottom: 15px;">{{$fac->occupation}}</p>
                    <div style="font-size: 0.85rem; color: #555; margin-bottom: 10px;"><strong>Qualification:</strong> {{$fac->qualification}}</div>
                    <div style="font-size: 0.85rem; color: #555; margin-bottom: 15px;"><strong>Expertise:</strong> {{$fac->bio}}</div>
                    <div class="qual-badges">
                        <span style="display: inline-block; background: var(--gold); color: #000; padding: 4px 10px; border-radius: 4px; font-size: 0.8rem; font-weight: 600; margin: 2px;">Experiance : {{$fac->experiance}} + Years</span>
                        
                    </div>
                </div>
            </div>
            @endforeach
            <!-- Faculty 2 -->
            
            
        </div>
    </div>
</section>


@endforeach


<!-- RESEARCH & PUBLICATIONS -->
<!-- <section class="bg-light section-pad">
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
</section> -->

  
 @endsection

