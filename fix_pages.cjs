const fs = require('fs');

const files = [
    'resources/views/certifications.blade.php',
    'resources/views/projects.blade.php',
    'resources/views/interests.blade.php',
    'resources/views/skills.blade.php'
];

const newNavbarCss = `
        .ftco-navbar-light {
            background: #fff !important;
            box-shadow: 0 5px 20px -5px rgba(0,0,0,0.1) !important;
            top: 0 !important;
        }
        .ftco-navbar-light .navbar-nav > li > a { color: #000 !important; font-weight: 600; }
        .ftco-navbar-light .navbar-nav > li > a:hover,
        .ftco-navbar-light .navbar-nav > li.active > a { color: #b1b493 !important; }
        .ftco-navbar-light .navbar-brand { color: #000 !important; }
        .ftco-navbar-light .navbar-brand span { color: #b1b493 !important; }
        .ftco-navbar-light .navbar-toggler { color: #000 !important; border-color: rgba(0,0,0,0.1) !important; }
        .ftco-navbar-light .navbar-toggler span { color: #000 !important; }

        @media (min-width: 992px) {
            .ftco-navbar-light .navbar-nav > .nav-item > .nav-link {
                padding-left: 10px !important;
                padding-right: 10px !important;
                font-size: 14px !important;
            }
        }
`;

files.forEach(file => {
    if (!fs.existsSync(file)) {
        console.log("Missing " + file);
        return;
    }
    let content = fs.readFileSync(file, 'utf8');

    // 1. Remove hero-wrap CSS and circles CSS
    content = content.replace(/\.hero-wrap[\s\S]*?@keyframes animate[\s\S]*?\}/, '');

    // 2. Replace ftco-navbar-light original css
    content = content.replace(/\.ftco-navbar-light:not\(\.scrolled\)[\s\S]*?\.ftco-navbar-light\.scrolled \.navbar-brand \{ color: #000 !important; \}/, newNavbarCss);

    // 3. Remove the hero-wrap section HTML
    content = content.replace(/<section class="hero-wrap[\s\S]*?<\/section>/, '');

    // 4. Update the section padding to avoid navbar overlap
    content = content.replace(/<section class="ftco-section bg-light">/, '<section class="ftco-section bg-light" style="padding-top: 120px;">');
    content = content.replace(/<section class="ftco-section(?! bg-light)">/, '<section class="ftco-section" style="padding-top: 120px;">');

    // 5. Change the oi-menu to fa-bars to match home
    content = content.replace(/<span class="oi oi-menu"><\/span>/g, '<i class="fa fa-bars"></i>');

    fs.writeFileSync(file, content);
    console.log("Fixed " + file);
});
