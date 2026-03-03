<?php
/**
 * Front Page Template
 * @package CollegeTheme
 */
get_header();
?>

<!-- ============================================================
     ANNOUNCEMENTS BAR
     ============================================================ -->
<div class="announcements-bar">
    <div class="container">
        <div class="announcements-inner">
            <span class="announcements-label">
                <i class="fas fa-bullhorn"></i> <?php esc_html_e('News', 'college-theme'); ?>
            </span>
            <div class="announcements-ticker">
                <?php
                $ticker_items = array(
                    '🎓 Admissions Open for Fall 2025 — Apply before March 31st',
                    '🏆 Our Computer Science dept ranked #1 in the state',
                    '📅 Open House scheduled for February 15th — Register now',
                    '🔬 New research lab inaugurated — cutting edge STEM facilities',
                    '💼 Career Fair on March 10th — 100+ companies attending',
                    '🎓 Admissions Open for Fall 2025 — Apply before March 31st',
                    '🏆 Our Computer Science dept ranked #1 in the state',
                );
                echo esc_html( implode('   ·   ', $ticker_items) );
                ?>
            </div>
        </div>
    </div>
</div>

<!-- ============================================================
     HERO SECTION
     ============================================================ -->
<section class="hero" id="hero">
    <div class="hero-pattern"></div>
    <div class="container">
        <div class="hero-content">
            <span class="hero-badge">
                <i class="fas fa-award"></i>
                <?php echo esc_html( college_get('hero_badge', 'Ranked #1 in the Region') ); ?>
            </span>
            <h1><?php echo wp_kses_post( college_get('hero_heading', 'Shaping Tomorrow\'s <span>Leaders</span> Today') ); ?></h1>
            <p><?php echo esc_html( college_get('hero_subheading', 'Join a community of thinkers, innovators, and changemakers. Discover programs designed to unlock your full potential.') ); ?></p>
            <div class="hero-buttons">
                <a href="<?php echo esc_url( college_get('hero_btn1_url', home_url('/apply')) ); ?>" class="btn btn-primary">
                    <i class="fas fa-graduation-cap"></i>
                    <?php echo esc_html( college_get('hero_btn1_text', 'Apply Now') ); ?>
                </a>
                <a href="<?php echo esc_url( college_get('hero_btn2_url', home_url('/programs')) ); ?>" class="btn btn-outline">
                    <i class="fas fa-book-open"></i>
                    <?php echo esc_html( college_get('hero_btn2_text', 'Explore Programs') ); ?>
                </a>
            </div>
            <div class="hero-stats">
                <div class="hero-stat">
                    <div class="hero-stat-value"><?php echo esc_html( college_get('hero_stat1_num', '15,000+') ); ?></div>
                    <div class="hero-stat-label"><?php echo esc_html( college_get('hero_stat1_label', 'Students Enrolled') ); ?></div>
                </div>
                <div class="hero-stat">
                    <div class="hero-stat-value"><?php echo esc_html( college_get('hero_stat2_num', '250+') ); ?></div>
                    <div class="hero-stat-label"><?php echo esc_html( college_get('hero_stat2_label', 'Programs Offered') ); ?></div>
                </div>
                <div class="hero-stat">
                    <div class="hero-stat-value"><?php echo esc_html( college_get('hero_stat3_num', '98%') ); ?></div>
                    <div class="hero-stat-label"><?php echo esc_html( college_get('hero_stat3_label', 'Employment Rate') ); ?></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     QUICK LINKS
     ============================================================ -->
<section class="quick-links">
    <div class="container">
        <div class="quick-links-grid">
            <?php
            $quick_links = array(
                array( 'icon' => '🎓', 'title' => 'Admissions',     'desc' => 'Start your journey',       'url' => '/admissions' ),
                array( 'icon' => '📚', 'title' => 'Programs',        'desc' => '250+ degree programs',    'url' => '/programs' ),
                array( 'icon' => '🔬', 'title' => 'Research',        'desc' => 'Cutting-edge research',   'url' => '/research' ),
                array( 'icon' => '🏫', 'title' => 'Campus Life',     'desc' => 'Experience college life', 'url' => '/campus-life' ),
            );
            foreach ( $quick_links as $link ) : ?>
                <a href="<?php echo esc_url( home_url($link['url']) ); ?>" class="quick-link-card">
                    <div class="quick-link-icon"><?php echo esc_html($link['icon']); ?></div>
                    <h4><?php echo esc_html($link['title']); ?></h4>
                    <p><?php echo esc_html($link['desc']); ?></p>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============================================================
     ABOUT SECTION
     ============================================================ -->
<section class="about section-padding" id="about">
    <div class="container">
        <div class="about-grid">
            <div class="about-image">
                <?php if ( get_theme_mod('about_image') ) : ?>
                    <img src="<?php echo esc_url( get_theme_mod('about_image') ); ?>" alt="<?php esc_attr_e('About our college', 'college-theme'); ?>" style="width:100%;border-radius:16px;">
                <?php else : ?>
                    <div style="width:100%;aspect-ratio:4/3;background:linear-gradient(135deg,var(--primary),var(--primary-light));border-radius:16px;display:flex;align-items:center;justify-content:center;">
                        <span style="font-size:8rem;opacity:0.4">🎓</span>
                    </div>
                <?php endif; ?>
                <div class="about-image-badge">
                    <div class="value">58+</div>
                    <div class="label"><?php esc_html_e('Years of Excellence', 'college-theme'); ?></div>
                </div>
            </div>
            <div class="about-content">
                <h2 class="section-title"><?php esc_html_e('A Legacy of Academic Excellence', 'college-theme'); ?></h2>
                <div class="section-divider"></div>
                <p><?php esc_html_e('Founded in 1965, our college has been at the forefront of education, research, and innovation. We are committed to nurturing critical thinkers who go on to make meaningful contributions to society.', 'college-theme'); ?></p>
                <p><?php esc_html_e('Our faculty consists of distinguished scholars, researchers, and industry practitioners who bring real-world expertise into the classroom. With state-of-the-art facilities and a vibrant campus culture, we provide an environment where every student can thrive.', 'college-theme'); ?></p>
                <div class="about-features">
                    <?php
                    $features = array(
                        array('icon' => '🏆', 'title' => 'Accredited Programs',   'desc' => 'All programs NAAC A+ accredited'),
                        array('icon' => '🌍', 'title' => 'Global Network',         'desc' => '100+ international partnerships'),
                        array('icon' => '💡', 'title' => 'Innovation Hub',         'desc' => 'State-of-the-art labs & facilities'),
                        array('icon' => '🤝', 'title' => 'Industry Connect',       'desc' => 'Strong placement record'),
                    );
                    foreach ( $features as $feat ) : ?>
                        <div class="about-feature">
                            <div class="about-feature-icon"><?php echo esc_html($feat['icon']); ?></div>
                            <div>
                                <h5><?php echo esc_html($feat['title']); ?></h5>
                                <p><?php echo esc_html($feat['desc']); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div style="margin-top:32px">
                    <a href="<?php echo esc_url( home_url('/about') ); ?>" class="btn btn-secondary">
                        <?php esc_html_e('Learn More About Us', 'college-theme'); ?>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     PROGRAMS
     ============================================================ -->
<section class="programs" id="programs">
    <div class="container">
        <h2 class="section-title"><?php esc_html_e('Academic Programs', 'college-theme'); ?></h2>
        <div class="section-divider"></div>
        <p class="section-subtitle"><?php esc_html_e('Choose from over 250 programs across arts, science, technology, commerce, and more.', 'college-theme'); ?></p>

        <div class="programs-filter">
            <button class="filter-btn active" data-filter="all"><?php esc_html_e('All Programs', 'college-theme'); ?></button>
            <button class="filter-btn" data-filter="ug"><?php esc_html_e('Undergraduate', 'college-theme'); ?></button>
            <button class="filter-btn" data-filter="pg"><?php esc_html_e('Postgraduate', 'college-theme'); ?></button>
            <button class="filter-btn" data-filter="phd"><?php esc_html_e('PhD', 'college-theme'); ?></button>
        </div>

        <div class="programs-grid">
            <?php
            $programs_query = new WP_Query( array(
                'post_type'      => 'program',
                'posts_per_page' => 6,
                'post_status'    => 'publish',
            ));

            if ( $programs_query->have_posts() ) :
                while ( $programs_query->have_posts() ) : $programs_query->the_post();
                    get_template_part('template-parts/content', 'program');
                endwhile;
                wp_reset_postdata();
            else :
                // Fallback demo cards
                $demo_programs = array(
                    array('badge' => 'Undergraduate', 'title' => 'B.Tech Computer Science', 'desc' => 'Deep dive into algorithms, data structures, AI/ML, and software engineering.', 'duration' => '4 Years', 'seats' => '120 Seats'),
                    array('badge' => 'Postgraduate',  'title' => 'MBA Business Administration', 'desc' => 'Build leadership skills and strategic thinking for the global business world.', 'duration' => '2 Years', 'seats' => '60 Seats'),
                    array('badge' => 'Undergraduate', 'title' => 'B.Sc. Data Science',       'desc' => 'Master the art of data analysis, machine learning, and statistical modeling.', 'duration' => '3 Years', 'seats' => '80 Seats'),
                    array('badge' => 'PhD',           'title' => 'Ph.D. Artificial Intelligence', 'desc' => 'Conduct groundbreaking research at the frontier of artificial intelligence.', 'duration' => '3-5 Years', 'seats' => '20 Seats'),
                    array('badge' => 'Undergraduate', 'title' => 'B.A. Psychology',          'desc' => 'Explore the human mind, behavior, and mental health from scientific perspectives.', 'duration' => '3 Years', 'seats' => '60 Seats'),
                    array('badge' => 'Postgraduate',  'title' => 'M.Tech Electronics',       'desc' => 'Advanced electronics engineering with focus on VLSI and embedded systems.', 'duration' => '2 Years', 'seats' => '40 Seats'),
                );
                foreach ( $demo_programs as $prog ) : ?>
                    <div class="program-card">
                        <div class="program-card-image" style="background:linear-gradient(135deg,var(--primary),var(--primary-light));">
                            <span class="program-card-badge"><?php echo esc_html($prog['badge']); ?></span>
                        </div>
                        <div class="program-card-body">
                            <h3><?php echo esc_html($prog['title']); ?></h3>
                            <p><?php echo esc_html($prog['desc']); ?></p>
                            <div class="program-card-meta">
                                <span><i class="far fa-clock"></i> <?php echo esc_html($prog['duration']); ?></span>
                                <span><i class="fas fa-users"></i> <?php echo esc_html($prog['seats']); ?></span>
                            </div>
                        </div>
                    </div>
                <?php endforeach;
            endif; ?>
        </div>

        <div style="text-align:center;margin-top:48px">
            <a href="<?php echo esc_url( home_url('/programs') ); ?>" class="btn btn-secondary">
                <?php esc_html_e('View All Programs', 'college-theme'); ?>
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

<!-- ============================================================
     STATS
     ============================================================ -->
<section class="stats">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-item">
                <div class="stat-number" data-target="15000">0</div>
                <div class="stat-label"><?php esc_html_e('Students Enrolled', 'college-theme'); ?></div>
            </div>
            <div class="stat-item">
                <div class="stat-number" data-target="500">0</div>
                <div class="stat-label"><?php esc_html_e('Expert Faculty', 'college-theme'); ?></div>
            </div>
            <div class="stat-item">
                <div class="stat-number" data-target="250">0</div>
                <div class="stat-label"><?php esc_html_e('Academic Programs', 'college-theme'); ?></div>
            </div>
            <div class="stat-item">
                <div class="stat-number" data-target="98">0</div>
                <div class="stat-label"><?php esc_html_e('% Placement Rate', 'college-theme'); ?></div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     FACULTY
     ============================================================ -->
<section class="faculty section-padding" id="faculty">
    <div class="container">
        <h2 class="section-title"><?php esc_html_e('Meet Our Faculty', 'college-theme'); ?></h2>
        <div class="section-divider"></div>
        <p class="section-subtitle"><?php esc_html_e('Learn from world-class scholars, researchers, and industry leaders who are passionate about teaching.', 'college-theme'); ?></p>
        <div class="faculty-grid">
            <?php
            $faculty_query = new WP_Query( array(
                'post_type'      => 'faculty',
                'posts_per_page' => 4,
                'post_status'    => 'publish',
            ));
            if ( $faculty_query->have_posts() ) :
                while ( $faculty_query->have_posts() ) : $faculty_query->the_post();
                    get_template_part('template-parts/content', 'faculty');
                endwhile;
                wp_reset_postdata();
            else :
                $demo_faculty = array(
                    array('name' => 'Dr. Priya Sharma',    'dept' => 'Computer Science',  'bio' => 'PhD from MIT | 20+ years in AI research'),
                    array('name' => 'Prof. Amit Patel',    'dept' => 'Business Admin',    'bio' => 'Ex-McKinsey | MBA Harvard Business School'),
                    array('name' => 'Dr. Kavya Reddy',     'dept' => 'Data Science',      'bio' => 'Google Research Alumni | 80+ Publications'),
                    array('name' => 'Prof. Rajesh Kumar',  'dept' => 'Electronics',       'bio' => 'IIT Bombay | IEEE Fellow'),
                );
                foreach ( $demo_faculty as $f ) : ?>
                    <div class="faculty-card">
                        <div class="faculty-image" style="background:linear-gradient(135deg,var(--primary),var(--primary-light));display:flex;align-items:center;justify-content:center;">
                            <span style="font-size:5rem;opacity:0.5">👤</span>
                        </div>
                        <div class="faculty-body">
                            <h4><?php echo esc_html($f['name']); ?></h4>
                            <div class="faculty-dept"><?php echo esc_html($f['dept']); ?></div>
                            <p class="faculty-bio"><?php echo esc_html($f['bio']); ?></p>
                            <div class="faculty-social">
                                <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#" aria-label="Email"><i class="fas fa-envelope"></i></a>
                                <a href="#" aria-label="Profile"><i class="fas fa-user"></i></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach;
            endif; ?>
        </div>
        <div style="text-align:center;margin-top:48px">
            <a href="<?php echo esc_url( home_url('/faculty') ); ?>" class="btn btn-secondary">
                <?php esc_html_e('View All Faculty', 'college-theme'); ?>
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

<!-- ============================================================
     EVENTS
     ============================================================ -->
<section class="events" id="events">
    <div class="container">
        <h2 class="section-title"><?php esc_html_e('Upcoming Events', 'college-theme'); ?></h2>
        <div class="section-divider"></div>
        <p class="section-subtitle"><?php esc_html_e('Stay updated with our latest events, seminars, workshops, and important dates.', 'college-theme'); ?></p>
        <div class="events-grid">
            <div class="events-list">
                <?php
                $events_query = new WP_Query( array(
                    'post_type'      => 'event',
                    'posts_per_page' => 4,
                    'post_status'    => 'publish',
                ));
                if ( $events_query->have_posts() ) :
                    while ( $events_query->have_posts() ) : $events_query->the_post();
                        get_template_part('template-parts/content', 'event');
                    endwhile;
                    wp_reset_postdata();
                else :
                    $demo_events = array(
                        array('day' => '15', 'month' => 'Feb', 'title' => 'Open House & Campus Tour',     'desc' => 'Explore our campus, meet faculty, and learn about admissions for all programs.', 'time' => '9:00 AM - 4:00 PM', 'venue' => 'Main Campus'),
                        array('day' => '22', 'month' => 'Feb', 'title' => 'Tech Symposium 2025',          'desc' => 'Annual technology symposium with talks from industry leaders and researchers.', 'time' => '10:00 AM - 6:00 PM', 'venue' => 'Auditorium'),
                        array('day' => '10', 'month' => 'Mar', 'title' => 'Annual Career Fair',           'desc' => 'Connect with 100+ top companies for internship and placement opportunities.', 'time' => '9:00 AM - 5:00 PM', 'venue' => 'Sports Complex'),
                        array('day' => '21', 'month' => 'Mar', 'title' => 'Research Conference 2025',     'desc' => 'Interdisciplinary research showcase featuring student and faculty presentations.', 'time' => '10:00 AM - 4:00 PM', 'venue' => 'Conference Hall'),
                    );
                    foreach ( $demo_events as $ev ) : ?>
                        <div class="event-card">
                            <div class="event-date">
                                <div class="day"><?php echo esc_html($ev['day']); ?></div>
                                <div class="month"><?php echo esc_html($ev['month']); ?></div>
                            </div>
                            <div class="event-info">
                                <h4><?php echo esc_html($ev['title']); ?></h4>
                                <p><?php echo esc_html($ev['desc']); ?></p>
                                <div class="event-meta">
                                    <span><i class="far fa-clock"></i> <?php echo esc_html($ev['time']); ?></span>
                                    <span><i class="fas fa-map-marker-alt"></i> <?php echo esc_html($ev['venue']); ?></span>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;
                endif; ?>
            </div>

            <!-- Deadlines Sidebar -->
            <div class="upcoming-deadlines">
                <h3><i class="far fa-calendar-check" style="color:var(--accent);margin-right:10px"></i><?php esc_html_e('Important Deadlines', 'college-theme'); ?></h3>
                <?php
                $deadlines = array(
                    array('title' => 'UG Admission Form Deadline', 'date' => 'Mar 31, 2025'),
                    array('title' => 'PG Admission Form Deadline',  'date' => 'Apr 15, 2025'),
                    array('title' => 'Scholarship Applications',    'date' => 'Feb 28, 2025'),
                    array('title' => 'Hostel Registration',         'date' => 'May 01, 2025'),
                    array('title' => 'Fee Payment – Sem 2',         'date' => 'Jan 31, 2025'),
                );
                foreach ( $deadlines as $d ) : ?>
                    <div class="deadline-item">
                        <span class="deadline-title"><?php echo esc_html($d['title']); ?></span>
                        <span class="deadline-date"><?php echo esc_html($d['date']); ?></span>
                    </div>
                <?php endforeach; ?>
                <div style="margin-top:24px">
                    <a href="<?php echo esc_url( home_url('/academic-calendar') ); ?>" class="btn btn-outline" style="width:100%;justify-content:center;border-color:var(--accent);color:var(--accent)">
                        <?php esc_html_e('View Full Calendar', 'college-theme'); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     TESTIMONIALS
     ============================================================ -->
<section class="testimonials section-padding">
    <div class="container">
        <h2 class="section-title"><?php esc_html_e('What Our Students Say', 'college-theme'); ?></h2>
        <div class="section-divider"></div>
        <p class="section-subtitle"><?php esc_html_e('Hear from our students, alumni, and parents about their transformative experience.', 'college-theme'); ?></p>
        <div class="testimonials-grid">
            <?php
            $demo_testimonials = array(
                array(
                    'text'   => 'The faculty here are incredibly supportive and the curriculum is very industry-aligned. I got placed at Google during campus recruitment thanks to the strong foundation the college built.',
                    'name'   => 'Aditya Nair',
                    'role'   => 'B.Tech CSE Graduate | Software Engineer at Google',
                ),
                array(
                    'text'   => 'The MBA program transformed my perspective on business. The case studies, industry visits, and networking opportunities were unmatched. I secured a 20 LPA package right after graduation.',
                    'name'   => 'Sneha Krishnan',
                    'role'   => 'MBA Graduate | Marketing Manager',
                ),
                array(
                    'text'   => 'As an international student, I was warmly welcomed. The research facilities are world-class and the PhD guidance I received was exceptional. Highly recommend this institution.',
                    'name'   => 'James Mitchell',
                    'role'   => 'PhD Researcher | University of Oxford',
                ),
            );
            foreach ( $demo_testimonials as $t ) : ?>
                <div class="testimonial-card">
                    <div class="testimonial-stars">★★★★★</div>
                    <div class="testimonial-quote">"</div>
                    <p class="testimonial-text"><?php echo esc_html($t['text']); ?></p>
                    <div class="testimonial-author">
                        <div style="width:48px;height:48px;background:var(--primary);border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:1.2rem;color:var(--white)">👤</div>
                        <div>
                            <div class="name"><?php echo esc_html($t['name']); ?></div>
                            <div class="role"><?php echo esc_html($t['role']); ?></div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============================================================
     LATEST NEWS
     ============================================================ -->
<section class="news" id="news">
    <div class="container">
        <h2 class="section-title"><?php esc_html_e('Latest News & Updates', 'college-theme'); ?></h2>
        <div class="section-divider"></div>
        <p class="section-subtitle"><?php esc_html_e('Stay informed with the latest happenings, achievements, and announcements from our campus.', 'college-theme'); ?></p>
        <div class="news-grid">
            <?php
            $news_query = new WP_Query( array(
                'post_type'      => 'post',
                'posts_per_page' => 3,
                'post_status'    => 'publish',
            ));
            if ( $news_query->have_posts() ) :
                while ( $news_query->have_posts() ) : $news_query->the_post(); ?>
                    <article class="news-card">
                        <div class="news-image">
                            <?php if ( has_post_thumbnail() ) :
                                the_post_thumbnail('college-card');
                            else : ?>
                                <div style="width:100%;height:100%;background:linear-gradient(135deg,var(--primary),var(--primary-light));display:flex;align-items:center;justify-content:center;font-size:4rem;opacity:0.4">📰</div>
                            <?php endif; ?>
                        </div>
                        <div class="news-body">
                            <?php $categories = get_the_category(); ?>
                            <div class="news-category"><?php echo esc_html( $categories ? $categories[0]->name : 'News' ); ?></div>
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 20 ) ); ?></p>
                            <div class="news-footer">
                                <span><i class="far fa-calendar"></i> <?php echo esc_html( get_the_date() ); ?></span>
                                <a href="<?php the_permalink(); ?>"><?php esc_html_e('Read More', 'college-theme'); ?> →</a>
                            </div>
                        </div>
                    </article>
                <?php endwhile;
                wp_reset_postdata();
            else :
                $demo_news = array(
                    array('cat' => 'Achievement',  'title' => 'College Ranks #1 in National Engineering Survey', 'date' => 'Jan 20, 2025'),
                    array('cat' => 'Research',     'title' => 'Faculty Research Gets ₹5 Crore Government Grant', 'date' => 'Jan 15, 2025'),
                    array('cat' => 'Campus Life',  'title' => 'New AI Innovation Lab Inaugurated by Governor',   'date' => 'Jan 10, 2025'),
                );
                foreach ( $demo_news as $n ) : ?>
                    <div class="news-card">
                        <div class="news-image" style="height:200px;background:linear-gradient(135deg,var(--primary),var(--primary-light));display:flex;align-items:center;justify-content:center;font-size:4rem;opacity:0.6">📰</div>
                        <div class="news-body">
                            <div class="news-category"><?php echo esc_html($n['cat']); ?></div>
                            <h3><?php echo esc_html($n['title']); ?></h3>
                            <p><?php esc_html_e('Read the full story about this exciting development from our campus...', 'college-theme'); ?></p>
                            <div class="news-footer">
                                <span><i class="far fa-calendar"></i> <?php echo esc_html($n['date']); ?></span>
                                <a href="#"><?php esc_html_e('Read More', 'college-theme'); ?> →</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach;
            endif; ?>
        </div>
        <div style="text-align:center;margin-top:48px">
            <a href="<?php echo esc_url( home_url('/news') ); ?>" class="btn btn-secondary">
                <?php esc_html_e('View All News', 'college-theme'); ?>
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

<!-- ============================================================
     CTA SECTION
     ============================================================ -->
<section class="cta">
    <div class="container">
        <div class="cta-content">
            <h2><?php esc_html_e('Ready to Begin Your Journey?', 'college-theme'); ?></h2>
            <p><?php esc_html_e('Applications for Fall 2025 are now open. Take the first step towards your dream career. Join thousands of students who have transformed their lives here.', 'college-theme'); ?></p>
            <div class="cta-buttons">
                <a href="<?php echo esc_url( home_url('/apply') ); ?>" class="btn btn-primary">
                    <i class="fas fa-graduation-cap"></i>
                    <?php esc_html_e('Apply Now', 'college-theme'); ?>
                </a>
                <a href="<?php echo esc_url( home_url('/contact') ); ?>" class="btn btn-outline">
                    <i class="fas fa-phone"></i>
                    <?php esc_html_e('Contact Admissions', 'college-theme'); ?>
                </a>
                <a href="<?php echo esc_url( home_url('/brochure') ); ?>" class="btn btn-outline">
                    <i class="fas fa-download"></i>
                    <?php esc_html_e('Download Brochure', 'college-theme'); ?>
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
