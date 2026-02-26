<?php
$page_title = 'Home - Patsaka Trust';
require_once 'includes/header.php';
?>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-content">
        <h1>Empowering Marginalized Communities for Sustainable Development</h1>
        <p>Patsaka Trust promotes the active and meaningful participation of marginalized people in sustainable development through advocacy, education, and community empowerment.</p>
        <div class="hero-actions">
            <a href="impact.php" class="btn">Our Impact</a>
            <a href="about.php" class="btn btn-secondary">Learn More</a>
        </div>
    </div>
</section>

<!-- Image Carousel Section -->
<section class="section">
    <div class="container">
        <div class="text-center mb-5">
            <h2>Our Community in Action</h2>
            <p class="lead">Witness the vibrant community life and the transformative impact of our work through these powerful moments captured in the field.</p>
        </div>
        
        <div class="carousel-container" style="position: relative; max-width: 1000px; margin: 0 auto; background: #000; border-radius: 1rem; overflow: hidden; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);">
            <!-- Carousel Slides -->
            <div class="carousel-slides" style="position: relative; height: 500px;">
                <!-- Slide 1: Community Children Gathering -->
                <div class="carousel-slide active" style="position: absolute; width: 100%; height: 100%; opacity: 1; transition: opacity 1s ease-in-out;">
                    <img src="assets/images/community-children-gathering.jpg" alt="Community Children Gathering" style="width: 100%; height: 100%; object-fit: cover;">
                    <div class="carousel-caption" style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(to top, rgba(0,0,0,0.8), transparent); color: white; padding: 2rem;">
                        <h3 style="font-size: 1.5rem; margin-bottom: 0.5rem;">Community Children Gathering</h3>
                        <p style="margin: 0; opacity: 0.9;">"The joyful energy of our youth represents the future we're building together. These gatherings foster unity, cultural pride, and the seeds of leadership that will grow into tomorrow's change-makers."</p>
                    </div>
                </div>
                
                <!-- Slide 2: Community Dancing -->
                <div class="carousel-slide" style="position: absolute; width: 100%; height: 100%; opacity: 0; transition: opacity 1s ease-in-out;">
                    <img src="assets/images/community-dancing.jpg" alt="Community Dancing" style="width: 100%; height: 100%; object-fit: cover;">
                    <div class="carousel-caption" style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(to top, rgba(0,0,0,0.8), transparent); color: white; padding: 2rem;">
                        <h3 style="font-size: 1.5rem; margin-bottom: 0.5rem;">Cultural Dance Celebration</h3>
                        <p style="margin: 0; opacity: 0.9;">"Through the rhythm of traditional dance, we preserve our heritage while strengthening community bonds. Each movement tells a story of resilience, identity, and collective joy that transcends generations."</p>
                    </div>
                </div>
                
                <!-- Slide 3: Community Meeting -->
                <div class="carousel-slide" style="position: absolute; width: 100%; height: 100%; opacity: 0; transition: opacity 1s ease-in-out;">
                    <img src="assets/images/community-meeting.jpg" alt="Community Meeting" style="width: 100%; height: 100%; object-fit: cover;">
                    <div class="carousel-caption" style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(to top, rgba(0,0,0,0.8), transparent); color: white; padding: 2rem;">
                        <h3 style="font-size: 1.5rem; margin-bottom: 0.5rem;">Community Dialogue Circle</h3>
                        <p style="margin: 0; opacity: 0.9;">"In these sacred circles of dialogue, every voice matters. We create spaces where community members can speak truth to power, share concerns, and collectively shape solutions that transform their lives."</p>
                    </div>
                </div>
                
                <!-- Slide 4: Women Art Session -->
                <div class="carousel-slide" style="position: absolute; width: 100%; height: 100%; opacity: 0; transition: opacity 1s ease-in-out;">
                    <img src="assets/images/women-art-session.jpg" alt="Women Art Session" style="width: 100%; height: 100%; object-fit: cover;">
                    <div class="carousel-caption" style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(to top, rgba(0,0,0,0.8), transparent); color: white; padding: 2rem;">
                        <h3 style="font-size: 1.5rem; margin-bottom: 0.5rem;">Women's Art Therapy Session</h3>
                        <p style="margin: 0; opacity: 0.9;">"Through creative expression, our women find healing, voice, and empowerment. These art sessions become powerful tools for processing trauma, building confidence, and imagining new possibilities for themselves and their communities."</p>
                    </div>
                </div>
                
                <!-- Slide 5: Women Meeting Indoors -->
                <div class="carousel-slide" style="position: absolute; width: 100%; height: 100%; opacity: 0; transition: opacity 1s ease-in-out;">
                    <img src="assets/images/women-meeting-indoors.jpg" alt="Women Meeting Indoors" style="width: 100%; height: 100%; object-fit: cover;">
                    <div class="carousel-caption" style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(to top, rgba(0,0,0,0.8), transparent); color: white; padding: 2rem;">
                        <h3 style="font-size: 1.5rem; margin-bottom: 0.5rem;">Women's Leadership Circle</h3>
                        <p style="margin: 0; opacity: 0.9;">"In these intimate gatherings, women forge alliances, share wisdom, and plan collective action. Here, the seeds of emancipation are nurtured, and the power of sisterhood transforms into community-wide change."</p>
                    </div>
                </div>
            </div>
            
            <!-- Carousel Controls -->
            <button class="carousel-prev" style="position: absolute; top: 50%; left: 1rem; transform: translateY(-50%); background: rgba(255,255,255,0.2); color: white; border: none; width: 50px; height: 50px; border-radius: 50%; font-size: 1.5rem; cursor: pointer; transition: background 0.3s; z-index: 10;">‹</button>
            <button class="carousel-next" style="position: absolute; top: 50%; right: 1rem; transform: translateY(-50%); background: rgba(255,255,255,0.2); color: white; border: none; width: 50px; height: 50px; border-radius: 50%; font-size: 1.5rem; cursor: pointer; transition: background 0.3s; z-index: 10;">›</button>
            
            <!-- Carousel Indicators -->
            <div class="carousel-indicators" style="position: absolute; bottom: 1rem; left: 50%; transform: translateX(-50%); display: flex; gap: 0.5rem; z-index: 10;">
                <button class="indicator active" style="width: 12px; height: 12px; border-radius: 50%; border: none; background: white; cursor: pointer; transition: opacity 0.3s;" data-slide="0"></button>
                <button class="indicator" style="width: 12px; height: 12px; border-radius: 50%; border: none; background: rgba(255,255,255,0.5); cursor: pointer; transition: opacity 0.3s;" data-slide="1"></button>
                <button class="indicator" style="width: 12px; height: 12px; border-radius: 50%; border: none; background: rgba(255,255,255,0.5); cursor: pointer; transition: opacity 0.3s;" data-slide="2"></button>
                <button class="indicator" style="width: 12px; height: 12px; border-radius: 50%; border: none; background: rgba(255,255,255,0.5); cursor: pointer; transition: opacity 0.3s;" data-slide="3"></button>
                <button class="indicator" style="width: 12px; height: 12px; border-radius: 50%; border: none; background: rgba(255,255,255,0.5); cursor: pointer; transition: opacity 0.3s;" data-slide="4"></button>
            </div>
        </div>
    </div>
</section>

<!-- Mission Section -->
<section class="section section-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2>Our Mission</h2>
            <p class="lead">To promote the active and meaningful participation of marginalized people in sustainable development through five key thematic areas.</p>
        </div>
        
        <div class="mission-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem; margin-top: 3rem;">
            <div class="mission-item text-center">
                <div style="background: linear-gradient(135deg, #3498db, #2980b9); color: white; width: 80px; height: 80px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; font-size: 2rem;">
                    🎓
                </div>
                <h3>Education</h3>
                <p>Promoting inclusive education for all community members, ensuring equal access to learning opportunities.</p>
            </div>
            
            <div class="mission-item text-center">
                <div style="background: linear-gradient(135deg, #e74c3c, #c0392b); color: white; width: 80px; height: 80px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; font-size: 2rem;">
                    🌱
                </div>
                <h3>Youth Development</h3>
                <p>Empowering young people with skills and opportunities to become active participants in development.</p>
            </div>
            
            <div class="mission-item text-center">
                <div style="background: linear-gradient(135deg, #f39c12, #e67e22); color: white; width: 80px; height: 80px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; font-size: 2rem;">
                    ✊
                </div>
                <h3>Women's Emancipation</h3>
                <p>Advocating for gender equality and empowering women to take leadership roles in their communities.</p>
            </div>
            
            <div class="mission-item text-center">
                <div style="background: linear-gradient(135deg, #27ae60, #229954); color: white; width: 80px; height: 80px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; font-size: 2rem;">
                    🌍
                </div>
                <h3>Climate Action</h3>
                <p>Building climate resilience and promoting environmental sustainability through community initiatives.</p>
            </div>
            
            <div class="mission-item text-center">
                <div style="background: linear-gradient(135deg, #8e44ad, #7d3c98); color: white; width: 80px; height: 80px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; font-size: 2rem;">
                    📢
                </div>
                <h3>Media & Communication</h3>
                <p>Enhancing access to information and strengthening community voices through effective communication.</p>
            </div>
        </div>
    </div>
</section>

<!-- Thematic Areas Section -->
<section class="section" id="thematic-areas">
    <div class="container">
        <div class="text-center mb-5">
            <h2>Our Thematic Areas</h2>
            <p class="lead">We focus on five key areas to create lasting impact in marginalized communities.</p>
        </div>
        
        <div class="thematic-areas">
            <div class="thematic-card">
                <h3>Inclusive Education</h3>
                <p>We promote access to quality education for marginalized communities and ensure equal learning opportunities for all. Our programs focus on eliminating barriers to education and creating inclusive learning environments that cater to diverse needs.</p>
                <ul style="margin-top: 1rem; padding-left: 1.5rem;">
                    <li>Community learning centers</li>
                    <li>Educational material support</li>
                    <li>Teacher training programs</li>
                    <li>Scholarship initiatives</li>
                </ul>
            </div>
            
            <div class="thematic-card">
                <h3>Youth Development</h3>
                <p>We empower young people with skills, knowledge, and opportunities to become active participants in sustainable development. Our youth programs focus on leadership, entrepreneurship, and civic engagement.</p>
                <ul style="margin-top: 1rem; padding-left: 1.5rem;">
                    <li>Leadership training</li>
                    <li>Skills development workshops</li>
                    <li>Mentorship programs</li>
                    <li>Youth advocacy platforms</li>
                </ul>
            </div>
            
            <div class="thematic-card">
                <h3>Women's Emancipation</h3>
                <p>We advocate for gender equality, women's rights, and empower women to take leadership roles in their communities. Our programs address systemic barriers and create spaces for women's voices to be heard.</p>
                <ul style="margin-top: 1rem; padding-left: 1.5rem;">
                    <li>Women's leadership training</li>
                    <li>Gender-based violence prevention</li>
                    <li>Economic empowerment initiatives</li>
                    <li>Policy advocacy</li>
                </ul>
            </div>
            
            <div class="thematic-card">
                <h3>Climate Change</h3>
                <p>We build climate resilience and promote environmental sustainability through community-based initiatives. Our programs focus on adaptation strategies and sustainable resource management.</p>
                <ul style="margin-top: 1rem; padding-left: 1.5rem;">
                    <li>Climate education programs</li>
                    <li>Sustainable agriculture training</li>
                    <li>Water management projects</li>
                    <li>Renewable energy initiatives</li>
                </ul>
            </div>
            
            <div class="thematic-card">
                <h3>Media and Communication</h3>
                <p>We enhance access to information and strengthen community voices through effective communication strategies. Our programs ensure communities can access, create, and share information freely.</p>
                <ul style="margin-top: 1rem; padding-left: 1.5rem;">
                    <li>Community radio programs</li>
                    <li>Digital literacy training</li>
                    <li>Information access initiatives</li>
                    <li>Media advocacy campaigns</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Recent Impact Section -->
<section class="section section-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2>Recent Impact</h2>
            <p class="lead">See how our work is making a difference in communities across Zimbabwe.</p>
        </div>
        
        <div class="impact-preview" style="background: white; border-radius: 1rem; padding: 2rem; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);">
            <h3>ACCESS TO INFORMATION IS KEY TO DEVELOPMENT</h3>
            <div style="color: #e74c3c; font-weight: 600; margin-bottom: 1rem;">
                📍 Kariba's Nyamiminyami Rural District ward 2, Quarry compound
            </div>
            <p>Women in the Quarry compound faced significant challenges due to restricted access to information and inadequate water sources. Following community leadership training by Patsaka Trust and IYWD, they discovered their ward Councilor was the root cause of their struggles and formed a committee to hold him accountable.</p>
            <blockquote style="border-left: 4px solid #3498db; padding-left: 1rem; margin: 1.5rem 0; font-style: italic; color: #6c757d;">
                "We are very angry, this time 'naye nemumvura mese' a Shona phrase meaning we will not leave him until he is accountable. If it was not a community level training by Patsaka Trust we were going to remain in darkness..."
                <footer style="margin-top: 0.5rem; font-weight: 600; color: #2c3e50;">— Florence Nyamaropa</footer>
            </blockquote>
            <div class="text-center mt-4">
                <a href="impact.php" class="btn">Read More Stories</a>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="section section-dark">
    <div class="container text-center">
        <h2>Join Us in Making a Difference</h2>
        <p class="lead mb-4">Together, we can create lasting change in marginalized communities. Your support helps us continue our vital work.</p>
        <div class="cta-buttons" style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
            <a href="about.php" class="btn">Learn About Our Work</a>
            <a href="impact.php" class="btn btn-secondary">See Our Impact</a>
            <a href="#contact" class="btn" style="background-color: #27ae60;">Contact Us</a>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
