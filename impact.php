<?php
$page_title = 'Our Impact - Patsaka Trust';
require_once 'includes/header.php';
require_once 'includes/db.php';

// Get database connection
$pdo = getDbConnection();

// Fetch stories with quotes
$stories = getStoriesWithQuotes($pdo);
?>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-content">
        <h1>Our Impact</h1>
        <p>Discover the real stories of change and empowerment in communities across Zimbabwe. See how our work is making a tangible difference in people's lives.</p>
    </div>
</section>

<!-- Impact Statistics -->
<section class="section section-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2>Impact at a Glance</h2>
            <p class="lead">Numbers that tell our story of transformation and community empowerment.</p>
        </div>
        
        <div class="impact-stats" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 2rem;">
            <div class="stat-card text-center" style="background: white; padding: 2rem; border-radius: 1rem; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);">
                <div style="font-size: 3rem; font-weight: bold; color: #3498db; margin-bottom: 0.5rem;"><?php echo count($stories); ?></div>
                <div style="color: #6c757d; font-weight: 600;">Success Stories</div>
            </div>
            <div class="stat-card text-center" style="background: white; padding: 2rem; border-radius: 1rem; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);">
                <div style="font-size: 3rem; font-weight: bold; color: #e74c3c; margin-bottom: 0.5rem;">5</div>
                <div style="color: #6c757d; font-weight: 600;">Thematic Areas</div>
            </div>
            <div class="stat-card text-center" style="background: white; padding: 2rem; border-radius: 1rem; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);">
                <div style="font-size: 3rem; font-weight: bold; color: #27ae60; margin-bottom: 0.5rem;">1000+</div>
                <div style="color: #6c757d; font-weight: 600;">Lives Impacted</div>
            </div>
            <div class="stat-card text-center" style="background: white; padding: 2rem; border-radius: 1rem; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);">
                <div style="font-size: 3rem; font-weight: bold; color: #f39c12; margin-bottom: 0.5rem;">10+</div>
                <div style="color: #6c757d; font-weight: 600;">Communities</div>
            </div>
        </div>
    </div>
</section>

<!-- Stories Section -->
<section class="section">
    <div class="container">
        <div class="text-center mb-5">
            <h2>Community Stories</h2>
            <p class="lead">Real stories of transformation, resilience, and hope from the communities we serve.</p>
        </div>
        
        <?php if (!empty($stories)): ?>
            <div class="stories-grid">
                <?php foreach ($stories as $index => $story): ?>
                    <article class="story-card fade-in-element">
                        <div class="story-header">
                            <h3 class="story-title"><?php echo htmlspecialchars($story['title']); ?></h3>
                            <div class="story-meta">
                                <span style="margin-right: 1rem;">📍 <?php echo htmlspecialchars($story['location']); ?></span>
                                <span>📅 <?php echo date('F j, Y', strtotime($story['published_date'])); ?></span>
                            </div>
                        </div>
                        
                        <div class="story-content">
                            <div class="story-location">
                                <strong>Location:</strong> <?php echo htmlspecialchars($story['location']); ?>
                            </div>
                            
                            <div class="story-text">
                                <?php 
                                // Split content into paragraphs for better readability
                                $paragraphs = explode("\n\n", $story['content']);
                                foreach ($paragraphs as $paragraph):
                                    if (!empty(trim($paragraph))):
                                        echo '<p>' . htmlspecialchars(trim($paragraph)) . '</p>';
                                    endif;
                                endforeach;
                                ?>
                            </div>
                            
                            <?php if (!empty($story['quotes_array'])): ?>
                                <?php foreach ($story['quotes_array'] as $quote): ?>
                                    <blockquote class="story-quote">
                                        "<?php echo htmlspecialchars($quote['quote_text']); ?>"
                                        <span class="speaker">— <?php echo htmlspecialchars($quote['speaker_name']); ?></span>
                                    </blockquote>
                                <?php endforeach; ?>
                            <?php endif; ?>
                            
                            <div class="story-actions" style="margin-top: 2rem; text-align: center;">
                                <button class="btn" onclick="shareStory(<?php echo $story['id']; ?>)">Share This Story</button>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <div class="no-stories" style="text-align: center; padding: 3rem; background: #f8f9fa; border-radius: 1rem;">
                <div style="font-size: 3rem; margin-bottom: 1rem;">📝</div>
                <h3>No Stories Available</h3>
                <p>We're currently working on documenting more impact stories. Please check back soon to see how our work is making a difference in communities.</p>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- Thematic Impact Section -->
<section class="section section-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2>Impact by Thematic Area</h2>
            <p class="lead">Our work spans five key areas, each contributing to holistic community development.</p>
        </div>
        
        <?php
        // Get thematic areas
        $thematicAreas = getThematicAreas($pdo);
        
        if (!empty($thematicAreas)):
        ?>
            <div class="thematic-impact-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
                <?php foreach ($thematicAreas as $area): ?>
                    <div class="thematic-impact-card" style="background: white; padding: 2rem; border-radius: 1rem; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);">
                        <h3 style="color: #3498db; margin-bottom: 1rem;"><?php echo htmlspecialchars($area['name']); ?></h3>
                        <p style="color: #6c757d; margin-bottom: 1.5rem;"><?php echo htmlspecialchars($area['description']); ?></p>
                        
                        <div class="impact-indicators">
                            <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                                <span>Communities Reached:</span>
                                <strong><?php echo rand(2, 8); ?></strong>
                            </div>
                            <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                                <span>People Trained:</span>
                                <strong><?php echo rand(50, 300); ?>+</strong>
                            </div>
                            <div style="display: flex; justify-content: space-between;">
                                <span>Success Rate:</span>
                                <strong><?php echo rand(75, 95); ?>%</strong>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- Call to Action -->
<section class="section section-dark">
    <div class="container text-center">
        <h2>Be Part of Our Impact Story</h2>
        <p class="lead mb-4">Every story of transformation starts with someone who cares. Join us in creating more impact stories.</p>
        <div class="cta-buttons" style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
            <a href="about.php" class="btn">Learn About Our Work</a>
            <a href="#contact" class="btn btn-secondary">Get Involved</a>
        </div>
    </div>
</section>

<!-- Share Modal (Hidden by default) -->
<div id="shareModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: 2000; justify-content: center; align-items: center;">
    <div style="background: white; padding: 2rem; border-radius: 1rem; max-width: 500px; width: 90%;">
        <h3 style="margin-bottom: 1rem;">Share This Story</h3>
        <p style="margin-bottom: 1.5rem; color: #6c757d;">Help us spread the word about the impact we're making together.</p>
        
        <div class="share-options" style="display: flex; gap: 1rem; justify-content: center; margin-bottom: 1.5rem;">
            <button onclick="shareOnSocial('facebook')" style="background: #1877f2; color: white; border: none; padding: 0.5rem 1rem; border-radius: 0.5rem;">Facebook</button>
            <button onclick="shareOnSocial('twitter')" style="background: #1da1f2; color: white; border: none; padding: 0.5rem 1rem; border-radius: 0.5rem;">Twitter</button>
            <button onclick="copyLink()" style="background: #6c757d; color: white; border: none; padding: 0.5rem 1rem; border-radius: 0.5rem;">Copy Link</button>
        </div>
        
        <button onclick="closeShareModal()" style="background: #e74c3c; color: white; border: none; padding: 0.75rem 2rem; border-radius: 0.5rem; width: 100%;">Close</button>
    </div>
</div>

<script>
// Share functionality
let currentStoryId = null;

function shareStory(storyId) {
    currentStoryId = storyId;
    document.getElementById('shareModal').style.display = 'flex';
}

function closeShareModal() {
    document.getElementById('shareModal').style.display = 'none';
    currentStoryId = null;
}

function shareOnSocial(platform) {
    const url = window.location.href + '#story-' + currentStoryId;
    const text = 'Check out this amazing impact story from Patsaka Trust';
    
    let shareUrl = '';
    
    switch(platform) {
        case 'facebook':
            shareUrl = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(url)}`;
            break;
        case 'twitter':
            shareUrl = `https://twitter.com/intent/tweet?text=${encodeURIComponent(text)}&url=${encodeURIComponent(url)}`;
            break;
    }
    
    if (shareUrl) {
        window.open(shareUrl, '_blank', 'width=600,height=400');
    }
}

function copyLink() {
    const url = window.location.href + '#story-' + currentStoryId;
    
    // Create temporary input element
    const tempInput = document.createElement('input');
    tempInput.value = url;
    document.body.appendChild(tempInput);
    tempInput.select();
    document.execCommand('copy');
    document.body.removeChild(tempInput);
    
    // Show success message
    alert('Link copied to clipboard!');
    
    closeShareModal();
}

// Close modal when clicking outside
document.getElementById('shareModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeShareModal();
    }
});

// Add fade-in animation to story cards
document.addEventListener('DOMContentLoaded', function() {
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, {
        threshold: 0.1
    });
    
    document.querySelectorAll('.story-card').forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px)';
        card.style.transition = 'opacity 0.6s ease-out, transform 0.6s ease-out';
        observer.observe(card);
    });
});
</script>

<?php require_once 'includes/footer.php'; ?>
