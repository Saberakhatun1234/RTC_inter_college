# RTC Inter College Website

A modern, responsive website for RTC Inter College built with PHP, Tailwind CSS, and JavaScript.

## Features

### 🎨 Modern Design
- Responsive design that works on all devices
- Modern UI with smooth animations and transitions
- Professional color scheme and typography

### 📱 Mobile-First Navigation
- Hamburger menu for mobile devices
- Dropdown navigation with touch support
- Smooth transitions and hover effects
- Proper mobile responsiveness

### 🎠 Interactive Components
- Image carousel with auto-play functionality
- Student testimonials slider
- Smooth scrolling navigation
- Animated scrolling text banner

### 📋 Navigation Sections
- **Home**: Welcome page with carousel and information
- **About**: Vision, Mission, Infrastructure, Facilities, Location
- **Admission**: Online admission, eligibility, documents, fee structure
- **Faculty Members**: Science, Commerce, Arts, and Other faculty
- **Syllabus**: Subject-wise syllabus for different streams
- **Sports**: Annual sports, achievements, sports club
- **Gallery**: Photos, videos, and events
- **Notices**: Exam notices, holiday notices, circulars
- **Contact**: Call, email, and map location

## Project Structure

```
rtcIntercol/
├── dist/                    # Production files
│   ├── *.php               # PHP pages
│   ├── *.js                # JavaScript files
│   ├── output.css          # Compiled CSS
│   └── images/             # Image assets
├── src/
│   └── input.css           # Tailwind CSS source
├── package.json            # Dependencies and scripts
├── tailwind.config.js      # Tailwind configuration
└── README.md              # This file
```

## Installation & Setup

1. **Clone or download the project**
2. **Install dependencies:**
   ```bash
   npm install
   ```

3. **Build CSS:**
   ```bash
   npm run build
   ```

4. **For development with auto-rebuild:**
   ```bash
   npm run watch
   ```

## Usage

### Development
- Run `npm run watch` to automatically rebuild CSS on changes
- Edit files in the `dist/` directory
- CSS changes should be made in `src/input.css`

### Production
- Run `npm run build` to compile CSS
- Upload all files from `dist/` to your web server

## Navigation Features

### Desktop Navigation
- Hover over menu items to see dropdown options
- Smooth transitions and professional styling
- All sections have relevant sub-sections

### Mobile Navigation
- Tap the hamburger menu to open/close navigation
- Tap on menu items with dropdowns to expand them
- Automatic closing of other dropdowns when opening a new one
- Touch-friendly interface

## Technical Details

### Technologies Used
- **PHP**: Server-side scripting
- **Tailwind CSS**: Utility-first CSS framework
- **JavaScript**: Interactive functionality
- **Font Awesome**: Icons

### Browser Support
- Modern browsers (Chrome, Firefox, Safari, Edge)
- Mobile browsers (iOS Safari, Chrome Mobile)
- Responsive design for all screen sizes

### Performance
- Optimized CSS with Tailwind's purge
- Minified output for production
- Fast loading times
- SEO-friendly structure

## Customization

### Colors
The website uses a blue color scheme:
- Primary: `#003366` (Dark Blue)
- Secondary: `#004080` (Medium Blue)
- Accent: `#005599` (Light Blue)

### Adding New Pages
1. Create a new PHP file in the `dist/` directory
2. Include `header.php` at the top
3. Add your content
4. Update navigation in `header.php` if needed

### Modifying Styles
1. Edit `src/input.css` for custom styles
2. Run `npm run build` to compile
3. For development, use `npm run watch`

## Issues Fixed

✅ **Navigation Dropdowns**: Improved mobile support and touch functionality
✅ **JavaScript Errors**: Added proper error handling and null checks
✅ **Build Process**: Added proper npm scripts for CSS compilation
✅ **Responsive Design**: Enhanced mobile navigation experience
✅ **Performance**: Optimized CSS and JavaScript loading

## Support

For any issues or questions:
- Check the browser console for JavaScript errors
- Ensure all dependencies are installed
- Verify that the build process completed successfully
- Test on different devices and browsers

---

**RTC Inter College** - Empowering Education, Building Futures
