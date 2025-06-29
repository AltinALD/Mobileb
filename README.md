# 📱 МобилМаркет - E-commerce Landing Page

A modern, mobile-first, bilingual e-commerce landing page for selling smartphones. Built with vanilla HTML, CSS, and JavaScript with no frameworks or build tools required.

## 🌟 Features

### 📱 Mobile-First Design
- Optimized for mobile devices first, then desktop
- Touch-friendly buttons and interactions
- Responsive design that works on all screen sizes
- Smooth animations and transitions

### 🌐 Bilingual Support
- **Macedonian (Македонски)** 🇲🇰 - Default language
- **Albanian (Shqip)** 🇦🇱 - Secondary language
- Language toggle with flag buttons
- Persistent language preference (localStorage)
- All UI elements translated

### 🛒 E-commerce Features
- **3 Smartphone Products:**
  - iPhone 15 Pro (€1,199)
  - Samsung Galaxy S24 (€899)
  - Samsung Galaxy A55 (€449)
- Product image galleries with lightbox
- Order modal with form validation
- Email order submission

### 🎨 Modern UI/UX
- Clean, minimal design
- Trust-enhancing visual elements
- Smooth animations (AOS.js)
- Professional color scheme
- Rounded corners and soft shadows

### 📧 Order System
- Modal order form
- Form validation
- Email submission (PHP or FormSubmit)
- Success/error notifications
- No page reload required

## 📁 File Structure

```
/
├── index.html          # Main HTML file
├── style.css           # All styles
├── main.js             # JavaScript functionality
├── send_email.php      # PHP email handler (optional)
├── README.md           # This file
└── Images/             # Product images
    ├── iphone-1.png
    ├── iphone-2.png
    ├── iphone-3.png
    ├── iphone-4.png
    ├── samsung-a-1.png
    ├── samsung-a-2.png
    ├── samsung-a-3.png
    ├── samsung-a-4.png
    ├── samsung-b-1.png
    ├── samsung-b-2.png
    ├── samsung-b-3.png
    └── samsung-b-4.png
```

## 🚀 Quick Start

### Option 1: Static Hosting (Recommended)
1. **Add Product Images:**
   - Place smartphone images in the `Images/` folder
   - Use the exact filenames listed above
   - Recommended size: 800x600px or larger

2. **Configure Email (Choose one):**

   **A) Using FormSubmit (Free, No Setup):**
   - Edit `main.js` line 289
   - Replace `your-email@domain.com` with your email
   - No server setup required

   **B) Using PHP:**
   - Edit `send_email.php` line 35
   - Replace `your-email@domain.com` with your email
   - Upload to a PHP-enabled server

3. **Deploy:**
   - Upload all files to any web hosting service
   - Works with: Netlify, Vercel, GitHub Pages, etc.

### Option 2: Local Development
1. **Clone/Download** the project files
2. **Add images** to the `Images/` folder
3. **Configure email** as described above
4. **Open `index.html`** in a web browser

## ⚙️ Configuration

### Email Setup

#### FormSubmit (Recommended)
```javascript
// In main.js, line 289
const formSubmitUrl = 'https://formsubmit.co/your-email@domain.com';
```

#### PHP Setup
```php
// In send_email.php, line 35
$to = 'your-email@domain.com';
```

### Customization

#### Colors
Edit `style.css` to change the color scheme:
```css
:root {
    --primary-color: #2563eb;
    --secondary-color: #1d4ed8;
    --success-color: #10b981;
    --text-color: #1f2937;
    --background-color: #f8f9fa;
}
```

#### Products
Edit `index.html` to add/remove products:
```html
<div class="product-card">
    <div class="product-images">
        <!-- Product images -->
    </div>
    <div class="product-info">
        <h3>Product Name</h3>
        <div class="price">
            <span class="currency">€</span>
            <span class="amount">999</span>
        </div>
        <!-- Features and order button -->
    </div>
</div>
```

#### Translations
Edit `main.js` to add new languages or modify translations:
```javascript
const translations = {
    mk: {
        'Key': 'Macedonian Text'
    },
    sq: {
        'Key': 'Albanian Text'
    }
};
```

## 📱 Mobile Optimization

### Touch-Friendly Design
- Minimum 44px touch targets
- Smooth touch feedback
- Optimized for thumb navigation

### Performance
- Lazy loading images
- Optimized animations
- Minimal JavaScript footprint

### Accessibility
- Keyboard navigation support
- Screen reader friendly
- High contrast mode support
- Reduced motion support

## 🌐 Browser Support

- ✅ Chrome (latest)
- ✅ Safari (latest)
- ✅ Firefox (latest)
- ✅ Edge (latest)
- ✅ Mobile browsers (iOS Safari, Chrome Mobile)

## 📧 Email Integration

### FormSubmit (Free)
- No setup required
- Spam protection
- Automatic email forwarding
- Works with any hosting

### PHP Mail
- Requires PHP server
- More control over email format
- Order logging capability
- Custom email templates

## 🔧 External Libraries Used

- **Font Awesome 6.4.0** - Icons
- **AOS 2.3.4** - Scroll animations
- **Lightbox2 2.11.4** - Image galleries
- **SweetAlert2 11** - Notifications

All libraries loaded via CDN for simplicity.

## 🚀 Deployment Options

### Free Hosting
- **Netlify** - Drag & drop deployment
- **Vercel** - Git integration
- **GitHub Pages** - Free static hosting
- **Firebase Hosting** - Google's solution

### Paid Hosting
- **Shared hosting** - Traditional web hosting
- **VPS** - More control
- **Cloud hosting** - Scalable solution

## 📞 Support

For questions or issues:
1. Check the browser console for errors
2. Verify all image files are present
3. Test email configuration
4. Ensure proper file permissions

## 📄 License

This project is open source and available under the MIT License.

---

**Built with ❤️ for modern e-commerce** 