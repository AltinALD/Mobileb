// Simplified version without external dependencies
console.log('Main script loading...');

// Current language
let currentLang = 'mk';

// DOM elements
let modal, closeBtn, orderForm, langButtons, orderButtons;

// Initialize the application
document.addEventListener('DOMContentLoaded', function() {
    console.log('DOM loaded, initializing...');
    
    // Get DOM elements
    modal = document.getElementById('orderModal');
    closeBtn = document.querySelector('.close-btn');
    orderForm = document.getElementById('orderForm');
    langButtons = document.querySelectorAll('.lang-btn');
    orderButtons = document.querySelectorAll('.order-btn');
    
    console.log('Modal element:', modal);
    console.log('Order buttons found:', orderButtons.length);
    
    // Load saved language preference
    loadLanguagePreference();
    
    // Set up event listeners
    setupEventListeners();
    
    // Apply current language
    applyLanguage(currentLang);
    
    console.log('Initialization complete');
});

// Setup event listeners
function setupEventListeners() {
    console.log('Setting up event listeners...');
    
    // Language toggle
    langButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            const lang = this.dataset.lang;
            switchLanguage(lang);
        });
    });
    
    // Order buttons
    orderButtons.forEach(btn => {
        console.log('Adding click listener to button:', btn.dataset.product);
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            console.log('Order button clicked!');
            const product = this.dataset.product;
            const price = this.dataset.price;
            console.log('Product:', product, 'Price:', price);
            openOrderModal(product, price);
        });
    });
    
    // Modal close
    if (closeBtn) {
        closeBtn.addEventListener('click', closeOrderModal);
    }
    
    // Close modal when clicking outside
    window.addEventListener('click', function(event) {
        if (event.target === modal) {
            closeOrderModal();
        }
    });
    
    // Form submission
    if (orderForm) {
        orderForm.addEventListener('submit', handleOrderSubmission);
    }
    
    // Image lightbox functionality
    setupImageLightbox();
}

// Simple lightbox functionality
function setupImageLightbox() {
    // Create lightbox overlay
    const lightbox = document.createElement('div');
    lightbox.id = 'simpleLightbox';
    lightbox.style.cssText = `
        display: none;
        position: fixed;
        z-index: 9999;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0,0,0,0.9);
        cursor: pointer;
    `;
    
    // Create lightbox image
    const lightboxImg = document.createElement('img');
    lightboxImg.style.cssText = `
        max-width: 90%;
        max-height: 90%;
        margin: auto;
        display: block;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        border-radius: 8px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.5);
    `;
    
    // Create close button
    const closeLightbox = document.createElement('span');
    closeLightbox.innerHTML = '&times;';
    closeLightbox.style.cssText = `
        position: absolute;
        top: 15px;
        right: 35px;
        color: #f1f1f1;
        font-size: 40px;
        font-weight: bold;
        cursor: pointer;
        z-index: 10000;
    `;
    
    // Add elements to lightbox
    lightbox.appendChild(lightboxImg);
    lightbox.appendChild(closeLightbox);
    document.body.appendChild(lightbox);
    
    // Add click listeners to all product images
    const productImages = document.querySelectorAll('.image-gallery a');
    productImages.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const imgSrc = this.href;
            lightboxImg.src = imgSrc;
            lightbox.style.display = 'block';
            document.body.style.overflow = 'hidden';
        });
    });
    
    // Close lightbox when clicking overlay or close button
    lightbox.addEventListener('click', function(e) {
        if (e.target === lightbox || e.target === closeLightbox) {
            lightbox.style.display = 'none';
            documhandleOrderSubmissionnt.body.style.overflow = 'auto';
        }
    });
    
    // Close lightbox with Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && lightbox.style.display === 'block') {
            lightbox.style.display = 'none';
            document.body.style.overflow = 'auto';
        }
    });
}

// Language management
function switchLanguage(lang) {
    currentLang = lang;
    applyLanguage(lang);
    saveLanguagePreference(lang);
    
    // Update active button
    langButtons.forEach(btn => {
        btn.classList.toggle('active', btn.dataset.lang === lang);
    });
}

function applyLanguage(lang) {
    const elements = document.querySelectorAll('[data-lang-mk]');
    
    elements.forEach(element => {
        const macedonianText = element.getAttribute('data-lang-mk');
        const albanianText = element.getAttribute('data-lang-sq');
        
        if (lang === 'mk' && macedonianText) {
            element.textContent = macedonianText;
        } else if (lang === 'sq' && albanianText) {
            element.textContent = albanianText;
        }
    });
    
    // Update form placeholders
    updateFormPlaceholders(lang);
}

function updateFormPlaceholders(lang) {
    const nameInput = document.getElementById('name');
    const addressInput = document.getElementById('address'); // ✅ was 'email'
    const phoneInput = document.getElementById('phone');

    if (lang === 'mk') {
        nameInput.placeholder = 'Внесете го вашето име';
        addressInput.placeholder = 'Скопје'; // ✅ Use address
        phoneInput.placeholder = '+389 70 123 456';
    } else {
        nameInput.placeholder = 'Shkruani emrin tuaj';
        addressInput.placeholder = 'Shkup 1000';
        phoneInput.placeholder = '+389 70 123 456';
    }
}


function saveLanguagePreference(lang) {
    localStorage.setItem('preferredLanguage', lang);
}

function loadLanguagePreference() {
    const savedLang = localStorage.getItem('preferredLanguage');
    if (savedLang && (savedLang === 'mk' || savedLang === 'sq')) {
        currentLang = savedLang;
    }
}

function openOrderModal(product, price) {
    console.log('Opening modal for:', product, price);
    
    if (!modal) {
        console.error('Modal element not found!');
        return;
    }

    // Update modal content
    const productNameElement = document.getElementById('modalProductName');
    const productPriceElement = document.getElementById('modalProductPrice');
    const productImageElement = document.getElementById('modalProductImage');

    if (productNameElement) productNameElement.textContent = product;
    if (productPriceElement) productPriceElement.textContent = price;

    // ✅ Inject hidden input values for sending
    document.getElementById('productInput').value = product;
    document.getElementById('priceInput').value = price;

    // ✅ Your existing image logic below this — KEEP IT UNCHANGED:
    if (productImageElement) {
        if (product.includes('iPhone 16')) {
            productImageElement.src = 'Images/i1.jpg';
            productImageElement.alt = product;
        } else if (product.includes('16 Pro Max Black')) {
            productImageElement.src = 'Images/ib.jpg';
            productImageElement.alt = product;
        } else if (product.includes('iPhone 16 Pro Max Desert')) {
            productImageElement.src = 'Images/ig1.jpg';
            productImageElement.alt = product;
        } else if (product.includes('S25')) {
            productImageElement.src = 'Images/s1.';
            productImageElement.alt = product;
        } else if (product.includes('A56 5G Black')) {
            productImageElement.src = 'Images/s11.jpg';
            productImageElement.alt = product;
        } else if (product.includes('A56 5G Green')) {
            productImageElement.src = 'Images/sg1.jpg';
            productImageElement.alt = product;
        } else if (product.includes('AirPods (First Copy)')) {
            productImageElement.src = 'Images/ai.jpg';
            productImageElement.alt = product;
        } else if (product.includes('AirPods Max')) {
            productImageElement.src = 'Images/ai2.jpg';
            productImageElement.alt = product;
        } else if (product.includes('Smart Watch')) {
            productImageElement.src = 'Images/ai3.jpg';
            productImageElement.alt = product;
        }
    }

    modal.style.display = 'block';
    document.body.style.overflow = 'hidden';

    setTimeout(() => {
        const nameInput = document.getElementById('name');
        if (nameInput) nameInput.focus();
    }, 300);
}

function closeOrderModal() {
    console.log('Closing modal');
    if (modal) {
        modal.style.display = 'none';
        document.body.style.overflow = 'auto';
        if (orderForm) orderForm.reset();
    }
}

// Form handling
async function handleOrderSubmission(e) {
    e.preventDefault();
    console.log('Form submitted');
    
    const formData = new FormData(orderForm);
    const name = formData.get('name').trim();
    const email = formData.get('email').trim();
    const phone = formData.get('phone').trim();
    const address = formData.get('address') ? formData.get('address').trim() : ''; // Make sure address input exists
    const product = document.getElementById('modalProductName').textContent;
    const price = document.getElementById('modalProductPrice').textContent;
    
    console.log('Form data:', { name, email, phone, address, product, price });
    
    // Validation
    if (!name || !email || !phone || !address) {
        alert(currentLang === 'mk' ? 'Пополнете ги сите полиња.' : 'Ju lutemi plotësoni të gjitha fushat.');
        return;
    }
    
    if (!isValidEmail(email)) {
        alert(currentLang === 'mk' ? 'Внесете валидна емаил адреса.' : 'Ju lutemi shkruani një adresë email të vlefshme.');
        return;
    }
    
    // Prepare data for POST
    const data = new URLSearchParams();
    data.append('name', name);
    data.append('email', email);
    data.append('phone', phone);
    data.append('address', address);
    data.append('product', product);
    data.append('price', price);
    data.append('language', currentLang);
    
    try {
        const response = await fetch('send_email.php', {
            method: 'POST',
            body: data
        });
        
        const result = await response.json();
        
        if (response.ok && result.success) {
            alert(result.message);
            closeOrderModal();
            orderForm.reset();
        } else {
            alert(result.error || (currentLang === 'mk' ? 'Грешка при испраќање на нарачката.' : 'Gabim gjatë dërgimit të porosisë.'));
        }
    } catch (error) {
        console.error('Error sending email:', error);
        alert(currentLang === 'mk' ? 'Грешка при испраќање на нарачката.' : 'Gabim gjatë dërgimit të porosisë.');
    }
}


// Utility functions
function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

console.log('Main script loaded'); 