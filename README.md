# College WordPress Theme

A modern, professional WordPress theme designed for colleges and universities.

## Features

- **Responsive Design** — Mobile-first, works beautifully on all screen sizes
- **Custom Post Types** — Programs, Faculty, Events, Testimonials
- **Custom Taxonomies** — Departments, Event Categories
- **Theme Customizer** — Full control via WordPress Customizer (no coding needed)
- **Hero Section** — Full-screen hero with animated stats
- **Animated Counters** — Auto-animating statistics when scrolled into view
- **Programs Filter** — Filter programs by UG/PG/PhD
- **Events Calendar** — Upcoming events with important deadlines sidebar
- **Faculty Profiles** — Grid with social links
- **Testimonials** — Student/alumni testimonials section
- **News Blog** — Integrated WordPress blog
- **SEO Ready** — Clean semantic HTML5 markup
- **Accessibility** — ARIA labels, skip links, keyboard navigable
- **Font Awesome 6** — Full icon library included
- **Google Fonts** — Playfair Display + Source Sans Pro

## Requirements

- WordPress 5.8+
- PHP 7.4+

## Installation

### Method 1: Via WordPress Admin (Recommended)

1. Download the theme as a ZIP file from GitHub
2. Go to **WordPress Admin → Appearance → Themes → Add New → Upload Theme**
3. Upload the ZIP file and click **Install Now**
4. Click **Activate**

### Method 2: Via FTP/cPanel

1. Clone or download this repo
2. Copy the `wp-content/themes/college-theme` folder to your WordPress installation's `/wp-content/themes/` directory
3. Go to **WordPress Admin → Appearance → Themes** and activate **College Theme**

## GitHub Upload Structure

This repo is structured so that only the theme folder needs to be uploaded. The recommended way to use this with GitHub:

```
your-repo/
└── college-theme/          ← This is what you upload to /wp-content/themes/
    ├── style.css
    ├── functions.php
    ├── header.php
    ├── footer.php
    ├── front-page.php
    ├── index.php
    ├── single.php
    ├── page.php
    ├── archive.php
    ├── sidebar.php
    ├── 404.php
    ├── screenshot.png
    ├── inc/
    ├── js/
    ├── template-parts/
    └── page-templates/
```

## Setup After Activation

1. **Set Homepage** — Go to Settings → Reading → Set "Your homepage displays" to a Static Page. Create a page called "Home" and set it as the homepage.
2. **Navigation Menu** — Go to Appearance → Menus → Create a menu and assign it to "Primary Menu"
3. **Customize Theme** — Go to Appearance → Customize to set your college name, contact info, social links, hero text, etc.
4. **Add Programs** — Go to Programs → Add New to add your academic programs
5. **Add Faculty** — Go to Faculty → Add New to add faculty profiles
6. **Add Events** — Go to Events → Add New to add upcoming events
7. **Upload Logo** — Go to Appearance → Customize → Site Identity to upload your college logo

## Custom Fields (Meta Keys)

### Programs
- `_program_duration` — Duration (e.g., "4 Years")
- `_program_seats` — Number of seats (e.g., "120")
- `_program_level` — Level: `ug`, `pg`, or `phd`

### Faculty
- `_faculty_linkedin` — LinkedIn profile URL
- `_faculty_email` — Contact email

### Events
- `_event_date` — Date in YYYY-MM-DD format
- `_event_time` — Time (e.g., "10:00 AM - 4:00 PM")
- `_event_venue` — Venue name

## Customizer Options

- **College Information** — Phone, email, address, social media URLs
- **Hero Section** — Heading, subheading, button text/URLs, statistics
- **Footer Settings** — About text, copyright notice

## License

GPLv2 or later — https://www.gnu.org/licenses/gpl-2.0.html

## Contributing

Pull requests welcome! Please follow WordPress coding standards.
