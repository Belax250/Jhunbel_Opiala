<?php
// Portfolio Configuration
$portfolio = [
    'name' => 'Jhunbel Opiala',
    'title' => 'Portfolio',
    'avatar' => 'https://i.postimg.cc/Y2LBFgY9/12345.jpg', // You can also use local path: 'images/avatar.jpg'
    'roles' => [
        "Hi! I'm Jhunbel Opiala",
        "I'm a Web Developer",
        "Also I'm a Video Editor",
        "And I'm a CapCut Editor"
    ],
    'about' => "I'm a passionate POS Web Developer, specializing in building efficient, secure, and responsive web applications with a focus on inventory, sales, and management systems.",
    'skills' => ['Video Editing', 'CapCut', 'Inshot Music and Video Editor', 'System Design', 'Database Management', 'API Development', 'Responsive Design', 'PHP', 'Laravel', 'JavaScript', 'MySQL', 'HTML', 'CSS', 'Bootstrap', 'jQuery', 'AJAX'],
    'projects' => [
        [
            'name' => 'POS Sales & Inventory System',
            'video' => 'https://drive.google.com/file/d/1jxakw_zgMonWjApmq5FIA7Kfv3xMlP3J/view?usp=sharing',
            'type' => 'video'
        ],
        [
            'name' => 'Inshot Music Video',
            'video' => 'https://drive.google.com/file/d/1AtENHrtAHC6XqSOmz8Cmz2Ew0F67dEuV/view?usp=sharing',
            'type' => 'video'
        ],
        [
            'name' => 'Capcut Music Video',
            'video' => 'https://drive.google.com/file/d/1zDKBtkfyXJzZ0L-ak23QIvXAbhPtxVwF/view?usp=sharing',
            'type' => 'video'
        ],
        [
            'name' => 'Baranggay Health Management',
            'video' => 'https://drive.google.com/file/d/16n75M_Bs9dzJl3rVRp6h1DxK1-eEF9a5/view?usp=sharing',
            'type' => 'video'
        ]
    ],
    'contact' => [
        'email' => 'jhunbelopiala@gmail.com',
        'phone' => '09505689392',
        'facebook' => 'https://www.facebook.com/jhunbel.opiala.11'
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($portfolio['name']); ?> | <?php echo htmlspecialchars($portfolio['title']); ?></title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <!-- Header -->
  <header>
    <h1>My Portfolio</h1>
    <nav>
      <a href="#" onclick="showSection('about'); return false;">About</a>
      <a href="#" onclick="showSection('skills'); return false;">Skills</a>
      <a href="#" onclick="showSection('projects'); return false;">Projects</a>
      <a href="#" onclick="showSection('photos'); return false;">My Photos</a>
      <a href="#" onclick="showSection('contact'); return false;">Contact</a>
      <div class="theme-toggle-container">
        <label class="neumorphic-toggle">
          <input type="checkbox" id="darkModeToggle" onchange="toggleDarkMode()">
          <span class="toggle-slider"></span>
        </label>
      </div>
    </nav>
  </header>

  <!-- Hero -->
  <div class="hero">
    <div class="avatar-container">
      <img src="<?php echo htmlspecialchars($portfolio['avatar']); ?>" 
           alt="<?php echo htmlspecialchars($portfolio['name']); ?>" 
           onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
      <div class="avatar-fallback" style="display: none;">
        <?php echo strtoupper(substr($portfolio['name'], 0, 1)); ?>
      </div>
    </div>
    <h2 class="typing" id="typing"></h2>
  </div>

  <!-- Sections -->
  <section id="about">
    <h2>About Me</h2>
    <p><?php echo htmlspecialchars($portfolio['about']); ?></p>
  </section>

  <section id="skills">
    <h2>My Skills</h2>
    <div class="skills-list">
      <?php foreach ($portfolio['skills'] as $skill): ?>
        <div class="skill-item"><?php echo htmlspecialchars($skill); ?></div>
      <?php endforeach; ?>
    </div>
  </section>

  <section id="projects">
    <h2>Projects</h2>
    <ul class="projects-list">
      <?php foreach ($portfolio['projects'] as $project): ?>
        <li>
          <?php echo htmlspecialchars($project['name']); ?>
          <?php if (isset($project['type']) && $project['type'] === 'video' && !empty($project['video'])): ?>
            <a href="<?php echo htmlspecialchars($project['video']); ?>" target="_blank" class="project-image-link">📹 View Video</a>
          <?php elseif (!empty($project['image'])): ?>
            <a href="<?php echo htmlspecialchars($project['image']); ?>" target="_blank" class="project-image-link">📷 View Images</a>
          <?php endif; ?>
        </li>
      <?php endforeach; ?>
    </ul>
  </section>

  <section id="photos">
    <h2>My Photos</h2>
    <div class="photos-gallery">
      <div class="photo-card">
        <img src="https://lh3.googleusercontent.com/d/1LNdowsZJTPGGudG6j4PeSS1TJm0CZueo" alt="Photo 1" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
        <div style="display: none; width: 100%; height: 100%; align-items: center; justify-content: center; color: #666; text-align: center; padding: 2rem;">Photo 1<br><small>Image not available</small></div>
      </div>
      <div class="photo-card">
        <img src="https://lh3.googleusercontent.com/d/1eMApJnwl9JAw7dkS8Q1OzzzOtbMc45_X" alt="Photo 2" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
        <div style="display: none; width: 100%; height: 100%; align-items: center; justify-content: center; color: #666; text-align: center; padding: 2rem;">Photo 2<br><small>Image not available</small></div>
      </div>
      <div class="photo-card">
        <img src="https://lh3.googleusercontent.com/d/1Z5ZT9f8LRSwbBH3QJM0t2HCjQ5Rnkf3E" alt="Photo 3" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
        <div style="display: none; width: 100%; height: 100%; align-items: center; justify-content: center; color: #666; text-align: center; padding: 2rem;">Photo 3<br><small>Image not available</small></div>
      </div>
      <div class="photo-card">
        <img src="https://lh3.googleusercontent.com/d/1f2q1hUqa-fww7iPXyUi3o6z4gN1W1iSc" alt="Photo 4" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
        <div style="display: none; width: 100%; height: 100%; align-items: center; justify-content: center; color: #666; text-align: center; padding: 2rem;">Photo 4<br><small>Image not available</small></div>
      </div>
      <div class="photo-card">
        <img src="https://lh3.googleusercontent.com/d/1EMZh7ul9jlXKfqeff2iCpQhm90wi1v5q" alt="Photo 5" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
        <div style="display: none; width: 100%; height: 100%; align-items: center; justify-content: center; color: #666; text-align: center; padding: 2rem;">Photo 5<br><small>Image not available</small></div>
      </div>
    </div>
  </section>

  <section id="contact">
    <h2>Contact</h2>
    <div class="contact-info">
      <div class="contact-item">
        Email: <a href="mailto:<?php echo htmlspecialchars($portfolio['contact']['email']); ?>" target="_blank"><?php echo htmlspecialchars($portfolio['contact']['email']); ?></a>
      </div>
      <div class="contact-item">
        Facebook: <a href="<?php echo htmlspecialchars($portfolio['contact']['facebook']); ?>" target="_blank"><?php echo htmlspecialchars($portfolio['name']); ?></a>
      </div>
      <div class="contact-item">
        Phone: <?php echo htmlspecialchars($portfolio['contact']['phone']); ?>
      </div>
    </div>
  </section>

  <footer>
    <p>&copy; 2023 <?php echo htmlspecialchars($portfolio['name']); ?> | All Rights Reserved.</p>
  </footer>

  <!-- Typing + Matrix Scripts -->
  <script>
    // Typing Effect
    const roles = <?php echo json_encode($portfolio['roles']); ?>;
    let currentRole = 0;
    let charIndex = 0;
    const typingElement = document.getElementById("typing");

    function typeEffect() {
      if (charIndex < roles[currentRole].length) {
        typingElement.innerHTML = roles[currentRole].substring(0, charIndex + 1);
        charIndex++;
        setTimeout(typeEffect, 100);
      } else {
        setTimeout(eraseEffect, 2000);
      }
    }

    function eraseEffect() {
      if (charIndex > 0) {
        typingElement.innerHTML = roles[currentRole].substring(0, charIndex - 1);
        charIndex--;
        setTimeout(eraseEffect, 50);
      } else {
        currentRole = (currentRole + 1) % roles.length;
        setTimeout(typeEffect, 500);
      }
    }

    document.addEventListener("DOMContentLoaded", () => {
      setTimeout(typeEffect, 1000);
    });

    // Section Toggle
    function showSection(sectionId) {
      document.querySelectorAll("section").forEach(sec => {
        sec.classList.remove("active");
      });
      const targetSection = document.getElementById(sectionId);
      if (targetSection) {
        targetSection.classList.add("active");
        // Smooth scroll to section
        targetSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    }

    // Dark Mode Toggle
    function toggleDarkMode() {
      const toggle = document.getElementById('darkModeToggle');
      const body = document.body;
      
      if (toggle.checked) {
        body.classList.add('dark-mode');
        localStorage.setItem('darkMode', 'enabled');
      } else {
        body.classList.remove('dark-mode');
        localStorage.setItem('darkMode', 'disabled');
      }
    }

    // Load saved dark mode preference
    document.addEventListener("DOMContentLoaded", () => {
      const savedMode = localStorage.getItem('darkMode');
      const toggle = document.getElementById('darkModeToggle');
      
      if (savedMode === 'enabled') {
        toggle.checked = true;
        document.body.classList.add('dark-mode');
      }
    });
  </script>

</body>
</html>

