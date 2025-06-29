// Language translations
const translations = {
    mk: {
        // Header
        'МобилМаркет': 'МобилМаркет',
        'Најдобрите Смартфони': 'Најдобрите Смартфони',
        'Откријте ги најновите модели на iPhone и Samsung со најдобри цени': 'Откријте ги најновите модели на iPhone и Samsung со најдобри цени',
        'Прегледај Продукти': 'Прегледај Продукти',
        'Нашите Продукти': 'Нашите Продукти',
        'Нарачај Сега': 'Нарачај Сега',
        'Нарачај': 'Нарачај',
        'Испрати Нарачка': 'Испрати Нарачка',
        'Контакт': 'Контакт',
        'Следи Не': 'Следи Не',
        '© 2024 МобилМаркет. Сите права се задржани.': '© 2024 МобилМаркет. Сите права се задржани.',
        
        // Form labels
        'Име': 'Име',
        'Емаил': 'Емаил',
        'Телефон': 'Телефон',
        
        // Messages
        'Нарачката е успешно испратена!': 'Нарачката е успешно испратена!',
        'Ќе ве контактираме наскоро.': 'Ќе ве контактираме наскоро.',
        'Грешка при испраќање на нарачката.': 'Грешка при испраќање на нарачката.',
        'Ве молиме обидете се повторно.': 'Ве молиме обидете се повторно.',
        'Пополнете ги сите полиња.': 'Пополнете ги сите полиња.',
        
        // Product features
        '6.1" A17 Pro чип': '6.1" A17 Pro чип',
        '48MP главна камера': '48MP главна камера',
        'Титаниум дизајн': 'Титаниум дизајн',
        'iOS 17': 'iOS 17',
        '6.2" Dynamic AMOLED': '6.2" Dynamic AMOLED',
        '50MP главна камера': '50MP главна камера',
        'Exynos 2400': 'Exynos 2400',
        'Android 14': 'Android 14',
        '6.6" Super AMOLED': '6.6" Super AMOLED',
        'Exynos 1480': 'Exynos 1480'
    },
    sq: {
        // Header
        'МобилМаркет': 'MobilMarket',
        'Најдобрите Смартфони': 'Telefonat Më të Mirë',
        'Откријте ги најновите модели на iPhone и Samsung со најдобри цени': 'Zbuloni modelet më të reja të iPhone dhe Samsung me çmimet më të mira',
        'Прегледај Продукти': 'Shiko Produktet',
        'Нашите Продукти': 'Produktet Tona',
        'Нарачај Сега': 'Porosit Tani',
        'Нарачај': 'Porosit',
        'Испрати Нарачка': 'Dërgo Porosinë',
        'Контакт': 'Kontakt',
        'Следи Не': 'Na Ndiqni',
        '© 2024 МобилМаркет. Сите права се задржани.': '© 2024 MobilMarket. Të gjitha të drejtat e rezervuara.',
        
        // Form labels
        'Име': 'Emri',
        'Емаил': 'Email',
        'Телефон': 'Telefoni',
        
        // Messages
        'Нарачката е успешно испратена!': 'Porosia u dërgua me sukses!',
        'Ќе ве контактираме наскоро.': 'Do t\'ju kontaktojmë së shpejti.',
        'Грешка при испраќање на нарачката.': 'Gabim gjatë dërgimit të porosisë.',
        'Ве молиме обидете се повторно.': 'Ju lutemi provoni përsëri.',
        'Пополнете ги сите полиња.': 'Ju lutemi plotësoni të gjitha fushat.',
        
        // Product features
        '6.1" A17 Pro чип': '6.1" A17 Pro chip',
        '48MP главна камера': '48MP kamera kryesore',
        'Титаниум дизајн': 'Dizajn titani',
        'iOS 17': 'iOS 17',
        '6.2" Dynamic AMOLED': '6.2" Dynamic AMOLED',
        '50MP главна камера': '50MP kamera kryesore',
        'Exynos 2400': 'Exynos 2400',
        'Android 14': 'Android 14',
        '6.6" Super AMOLED': '6.6" Super AMOLED',
        'Exynos 1480': 'Exynos 1480'
    }
};

// Current language
let currentLang = 'mk';

// DOM elements
const modal = document.getElementById('orderModal');
const closeBtn = document.querySelector('.close-btn');
const orderForm = document.getElementById('orderForm');
const langButtons = document.querySelectorAll('.lang-btn');
const orderButtons = document.querySelectorAll('.order-btn');

// Initialize the application
document.addEventListener('DOMContentLoaded', function() {
    // Initialize AOS
    AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true,
        offset: 100
    });
    
    // Initialize Lightbox
    lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true,
        'albumLabel': 'Слика %1 од %2'
    });
    
    // Load saved language preference
    loadLanguagePreference();
    
    // Set up event listeners
    setupEventListeners();
    
    // Apply current language
    applyLanguage(currentLang);
});

// Setup event listeners
function setupEventListeners() {
    // Language toggle
    langButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            const lang = this.dataset.lang;
            switchLanguage(lang);
        });
    });
    
    // Order buttons
    orderButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            const product = this.dataset.product;
            const price = this.dataset.price;
            openOrderModal(product, price);
        });
    });
    
    // Modal close
    closeBtn.addEventListener('click', closeOrderModal);
    
    // Close modal when clicking outside
    window.addEventListener('click', function(event) {
        if (event.target === modal) {
            closeOrderModal();
        }
    });
    
    // Form submission
    orderForm.addEventListener('submit', handleOrderSubmission);
    
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
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
    const emailInput = document.getElementById('email');
    const phoneInput = document.getElementById('phone');
    
    if (lang === 'mk') {
        nameInput.placeholder = 'Внесете го вашето име';
        emailInput.placeholder = 'vash@email.com';
        phoneInput.placeholder = '+389 70 123 456';
    } else {
        nameInput.placeholder = 'Shkruani emrin tuaj';
        emailInput.placeholder = 'juaj@email.com';
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

// Modal management
function openOrderModal(product, price) {
    // Update modal content
    document.getElementById('modalProductName').textContent = product;
    document.getElementById('modalProductPrice').textContent = price;
    
    // Set product image based on product name
    const productImage = document.getElementById('modalProductImage');
    if (product.includes('iPhone 16')) {
        productImage.src = 'Images/i1.jpg';
        productImage.alt = product;
    } else if (product.includes('S25')) {
        productImage.src = 'Images/samsung-a-1.png';
        productImage.alt = product;
    } else if (product.includes('A56')) {
        productImage.src = 'Images/samsung-b-1.png';
        productImage.alt = product;
    }
    
    // Show modal
    modal.style.display = 'block';
    document.body.style.overflow = 'hidden';
    
    // Focus on first input
    setTimeout(() => {
        document.getElementById('name').focus();
    }, 300);
}

function closeOrderModal() {
    modal.style.display = 'none';
    document.body.style.overflow = 'auto';
    orderForm.reset();
}

// Form handling
async function handleOrderSubmission(e) {
    e.preventDefault();
    
    const formData = new FormData(orderForm);
    const name = formData.get('name').trim();
    const email = formData.get('email').trim();
    const phone = formData.get('phone').trim();
    const product = document.getElementById('modalProductName').textContent;
    const price = document.getElementById('modalProductPrice').textContent;
    
    // Validation
    if (!name || !email || !phone) {
        showMessage(
            currentLang === 'mk' ? 'Пополнете ги сите полиња.' : 'Ju lutemi plotësoni të gjitha fushat.',
            'error'
        );
        return;
    }
    
    if (!isValidEmail(email)) {
        showMessage(
            currentLang === 'mk' ? 'Внесете валидна емаил адреса.' : 'Ju lutemi shkruani një adresë email të vlefshme.',
            'error'
        );
        return;
    }
    
    // Disable submit button
    const submitBtn = orderForm.querySelector('.submit-btn');
    const originalText = submitBtn.innerHTML;
    submitBtn.disabled = true;
    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Се испраќа...';
    
    try {
        // Prepare email data
        const emailData = {
            name: name,
            email: email,
            phone: phone,
            product: product,
            price: price,
            language: currentLang
        };
        
        // Send email using selected method
        const response = await sendEmail(emailData);
        
        if (response.ok) {
            showMessage(
                currentLang === 'mk' ? 'Нарачката е успешно испратена!' : 'Porosia u dërgua me sukses!',
                'success'
            );
            closeOrderModal();
        } else {
            throw new Error('Network response was not ok');
        }
    } catch (error) {
        console.error('Error sending order:', error);
        showMessage(
            currentLang === 'mk' ? 'Грешка при испраќање на нарачката.' : 'Gabim gjatë dërgimit të porosisë.',
            'error'
        );
    } finally {
        // Re-enable submit button
        submitBtn.disabled = false;
        submitBtn.innerHTML = originalText;
    }
}

async function sendEmail(data) {
    // Choose your email method:
    // Option 1: FormSubmit (Free, no setup required)
    // Option 2: PHP (requires server with PHP)
    
    const useFormSubmit = true; // Set to false to use PHP
    
    if (useFormSubmit) {
        // Using FormSubmit service (free, no API key needed)
        const formSubmitUrl = 'https://formsubmit.co/your-email@domain.com'; // Replace with your email
        
        const emailBody = `
Нова нарачка:

Продукт: ${data.product}
Цена: €${data.price}
Јазик: ${data.language === 'mk' ? 'Македонски' : 'Shqip'}

Клиент:
Име: ${data.name}
Емаил: ${data.email}
Телефон: ${data.phone}

Датум: ${new Date().toLocaleString()}
        `;
        
        const formData = new FormData();
        formData.append('name', data.name);
        formData.append('email', data.email);
        formData.append('phone', data.phone);
        formData.append('product', data.product);
        formData.append('price', data.price);
        formData.append('language', data.language);
        formData.append('message', emailBody);
        formData.append('_subject', `Нова нарачка - ${data.product}`);
        
        return fetch(formSubmitUrl, {
            method: 'POST',
            body: formData
        });
    } else {
        // Using PHP
        return fetch('send_email.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(data)
        });
    }
}

// Utility functions
function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

function showMessage(message, type = 'info') {
    const icon = type === 'success' ? 'success' : 'error';
    const title = type === 'success' ? 
        (currentLang === 'mk' ? 'Успешно!' : 'Sukses!') : 
        (currentLang === 'mk' ? 'Грешка!' : 'Gabim!');
    
    Swal.fire({
        title: title,
        text: message,
        icon: icon,
        confirmButtonText: currentLang === 'mk' ? 'Во ред' : 'Në rregull',
        confirmButtonColor: '#2563eb',
        timer: type === 'success' ? 3000 : undefined,
        timerProgressBar: type === 'success'
    });
}

// Touch and mobile optimizations
function setupTouchOptimizations() {
    // Add touch feedback to buttons
    const buttons = document.querySelectorAll('button, .order-btn, .cta-btn');
    
    buttons.forEach(button => {
        button.addEventListener('touchstart', function() {
            this.style.transform = 'scale(0.95)';
        });
        
        button.addEventListener('touchend', function() {
            this.style.transform = '';
        });
    });
}

// Performance optimizations
function setupPerformanceOptimizations() {
    // Lazy load images
    const images = document.querySelectorAll('img[loading="lazy"]');
    
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src || img.src;
                    img.classList.remove('lazy');
                    imageObserver.unobserve(img);
                }
            });
        });
        
        images.forEach(img => imageObserver.observe(img));
    }
}

// Initialize optimizations
document.addEventListener('DOMContentLoaded', function() {
    setupTouchOptimizations();
    setupPerformanceOptimizations();
});

// Handle form validation on input
document.addEventListener('input', function(e) {
    if (e.target.matches('input[type="email"]')) {
        const isValid = isValidEmail(e.target.value);
        e.target.style.borderColor = isValid ? '#10b981' : '#ef4444';
    }
});

// Keyboard navigation for modal
document.addEventListener('keydown', function(e) {
    if (modal.style.display === 'block') {
        if (e.key === 'Escape') {
            closeOrderModal();
        }
    }
}); 