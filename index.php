<!DOCTYPE html>
<html lang="mk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title data-lang-mk="Мобилни Телефони - Најдобри Цени" data-lang-sq="Telefona Celularë - Çmimet Më të Mira">Мобилни Телефони - Најдобри Цени</title>
    
    <!-- External Libraries -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body class="dark-mode">
    <!-- Header -->
    <header class="header" style="position: relative;">
        <div class="video-header-wrapper" style="position: relative; width: 100%; aspect-ratio: 16/9; overflow: hidden;">
            <video autoplay loop muted playsinline style="width: 100%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0; z-index: 1;">
                <source src="Images/mob.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="container" style="position: relative; z-index: 2;">
                <div class="header-content">
                    <div class="logo">
                        <img src="Images/logo.png" alt="Logo" style="height: 60px; vertical-align: middle;">
                    </div>
                    
                    <div class="language-toggle">
                        <button class="lang-btn active" data-lang="mk">
                            <img src="https://flagcdn.com/w20/mk.png" alt="Macedonian">
                            <span>МК</span>
                        </button>
                        <button class="lang-btn" data-lang="sq">
                            <img src="https://flagcdn.com/w20/al.png" alt="Albanian">
                            <span>SQ</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1 data-lang-mk="Најдобрите Смартфони" data-lang-sq="Telefonat Më të Mirë">Најдобрите Смартфони</h1>
                <p data-lang-mk="Откријте ги најновите модели на iPhone и Samsung со најдобри цени" data-lang-sq="Zbuloni modelet më të reja të iPhone dhe Samsung me çmimet më të mira">Откријте ги најновите модели на iPhone и Samsung со најдобри цени</p>
                <a href="#products" class="cta-btn" data-lang-mk="Прегледај Продукти" data-lang-sq="Shiko Produktet">Прегледај Продукти</a>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section id="products" class="products">
        <div class="container">
            <h2 class="section-title" data-lang-mk="Нашите Продукти" data-lang-sq="Produktet Tona">Нашите Продукти</h2>
            
            <!-- iPhone 16 Pro Max -->
            <div class="product-card">
                <div class="product-images">
                    <div class="image-gallery">
                        <a href="Images/i1.jpg" data-lightbox="iphone" class="main-image">
                            <img src="Images/i1.jpg" alt="iPhone 16 Pro Max" loading="lazy">
                        </a>
                        <div class="thumbnail-images">
                            <a href="Images/i2.jpg" data-lightbox="iphone">
                                <img src="Images/i2.jpg" alt="iPhone 16 Pro Max" loading="lazy">
                            </a>
                            <a href="Images/i3.jpg" data-lightbox="iphone">
                                <img src="Images/i3.jpg" alt="iPhone 16 Pro Max" loading="lazy">
                            </a>
                            <a href="Images/i4.jpg" data-lightbox="iphone">
                                <img src="Images/i4.jpg" alt="iPhone 16 Pro Max" loading="lazy">
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="product-info">
                    <h3>iPhone 16 Pro Max Desert Gold</h3>
                    <div class="price">
                        <span class="currency">€</span>
                        <span class="amount">198</span>
                    </div>
                    <div class="product-description">
                        <p data-lang-mk="Премиум iPhone, прва имитација, со висок квалитет и изглед идентичен со оригиналот!" data-lang-sq="Një iPhone premium, kopje e dorës së parë, me cilësi shumë të lartë dhe pamje identike me origjinalin!">Një iPhone premium, kopje e dorës së parë, me cilësi shumë të lartë dhe pamje identike me origjinalin!</p>
                        <p data-lang-mk="Прва имитација, full box пакет, бесплатна достава!" data-lang-sq="Kopje e dorës së parë, paketim full box, transport falas!">Kopje e dorës së parë, paketim full box, transport falas!</p>
                        <p data-lang-mk="Пакетот full box – доаѓа со полнач и кабел." data-lang-sq="Paketim fullbox – vjen me karikues dhe kabllo.">Paketim fullbox – vjen me karikues dhe kabllo.</p>
                        <p data-lang-mk="Овој телефон е прва имитација (копија од прва класа)." data-lang-sq="Ky telefon është kopje e dorës së parë (first imitation).">Ky telefon është kopje e dorës së parë (first imitation).</p>
                    </div>
                    <ul class="features">
                        <li data-lang-mk="512GB меморија" data-lang-sq="512GB memorija">512GB меморија</li>
                        <li data-lang-mk="8GB RAM процесор" data-lang-sq="8GB RAM procesor">8GB RAM процесор</li>
                        <li data-lang-mk="6.9" екран" data-lang-sq="6.9" ekran">6.9" екран</li>
                        <li data-lang-mk="Полна пакетна содржина" data-lang-sq="Fullbox paketim">Полна пакетна содржина</li>
                        <li data-lang-mk="Потекло: Шведска" data-lang-sq="Origjine: Suedi (Malmo)">Потекло: Шведска</li>
                        <li data-lang-mk="Desert Gold / Black" data-lang-sq="Desert Gold / Black">Desert Gold / Black</li>
                    </ul>
                    <button class="order-btn" data-product="iPhone 16 Pro Max Desert Gold" data-price="198" data-image="Images/i1.jpg">
                        <i class="fas fa-shopping-cart"></i>
                        <span data-lang-mk="Нарачај Сега" data-lang-sq="Porosit Tani">Нарачај Сега</span>
                    </button>
                </div>
            </div>

            <!-- iPhone 16 Pro Max Black -->
            <div class="product-card">
                <div class="product-images">
                    <div class="image-gallery">
                        <a href="Images/ib1.jpg" data-lightbox="iphone-black" class="main-image">
                            <img src="Images/ib1.jpg" alt="iPhone 16 Pro Max Black" loading="lazy">
                        </a>
                        <div class="thumbnail-images">
                            <a href="Images/ib2.jpg" data-lightbox="iphone-black">
                                <img src="Images/ib2.jpg" alt="iPhone 16 Pro Max Black" loading="lazy">
                            </a>
                            <a href="Images/ib3.jpg" data-lightbox="iphone-black">
                                <img src="Images/ib3.jpg" alt="iPhone 16 Pro Max Black" loading="lazy">
                            </a>
                            <a href="Images/ib4.jpg" data-lightbox="iphone-black">
                                <img src="Images/ib4.jpg" alt="iPhone 16 Pro Max Black" loading="lazy">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="product-info">
                    <h3>iPhone 16 Pro Max Black</h3>
                    <div class="price">
                        <span class="currency">€</span>
                        <span class="amount">198</span>
                    </div>
                    <div class="product-description">
                        <p data-lang-mk="Премиум iPhone, прва имитација, со висок квалитет и изглед идентичен со оригиналот!" data-lang-sq="Një iPhone premium, kopje e dorës së parë, me cilësi shumë të lartë dhe pamje identike me origjinalin!">Një iPhone premium, kopje e dorës së parë, me cilësi shumë të lartë dhe pamje identike me origjinalin!</p>
                        <p data-lang-mk="Прва имитација, full box пакет, бесплатна достава!" data-lang-sq="Kopje e dorës së parë, paketim full box, transport falas!">Kopje e dorës së parë, paketim full box, transport falas!</p>
                        <p data-lang-mk="Пакетот full box – доаѓа со полнач и кабел." data-lang-sq="Paketim fullbox – vjen me karikues dhe kabllo.">Paketim fullbox – vjen me karikues dhe kabllo.</p>
                        <p data-lang-mk="Овој телефон е прва имитација (копија од прва класа)." data-lang-sq="Ky telefon është kopje e dorës së parë (first imitation).">Ky telefon është kopje e dorës së parë (first imitation).</p>
                    </div>
                    <ul class="features">
                        <li data-lang-mk="512GB меморија" data-lang-sq="512GB memorija">512GB меморија</li>
                        <li data-lang-mk="8GB RAM процесор" data-lang-sq="8GB RAM procesor">8GB RAM процесор</li>
                        <li data-lang-mk="6.9&quot; екран" data-lang-sq="6.9&quot; ekran">6.9" екран</li>
                        <li data-lang-mk="Полна пакетна содржина" data-lang-sq="Fullbox paketim">Полна пакетна содржина</li>
                        <li data-lang-mk="Потекло: Шведска" data-lang-sq="Origjine: Suedi (Malmo)">Потекло: Шведска</li>
                        <li data-lang-mk="Black" data-lang-sq="Black">Black</li>
                    </ul>
                    <button class="order-btn" data-product="iPhone 16 Pro Max Black" data-price="198" data-image="Images/ib1.jpg">
                        <i class="fas fa-shopping-cart"></i>
                        <span data-lang-mk="Нарачај Сега" data-lang-sq="Porosit Tani">Нарачај Сега</span>
                    </button>
                </div>
            </div>

            <!-- iPhone 16 Pro Max Gray -->
            <div class="product-card">
                <div class="product-images">
                    <div class="image-gallery">
                        <a href="Images/ig1.jpg" data-lightbox="iphone-gray" class="main-image">
                            <img src="Images/ig1.jpg" alt="iPhone 16 Pro Max Gray" loading="lazy">
                        </a>
                        <div class="thumbnail-images">
                            <a href="Images/ig2.jpg" data-lightbox="iphone-gray">
                                <img src="Images/ig2.jpg" alt="iPhone 16 Pro Max Gray" loading="lazy">
                            </a>
                            <a href="Images/ig3.jpg" data-lightbox="iphone-gray">
                                <img src="Images/ig3.jpg" alt="iPhone 16 Pro Max Gray" loading="lazy">
                            </a>
                            <a href="Images/ig4.jpg" data-lightbox="iphone-gray">
                                <img src="Images/ig4.jpg" alt="iPhone 16 Pro Max Gray" loading="lazy">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="product-info">
                    <h3>iPhone 16 Pro Max Desert Titanium</h3>
                    <div class="price">
                        <span class="currency">€</span>
                        <span class="amount">198</span>
                    </div>
                    <div class="product-description">
                        <p data-lang-mk="Премиум iPhone, прва имитација, со висок квалитет и изглед идентичен со оригиналот!" data-lang-sq="Një iPhone premium, kopje e dorës së parë, me cilësi shumë të lartë dhe pamje identike me origjinalin!">Një iPhone premium, kopje e dorës së parë, me cilësi shumë të lartë dhe pamje identike me origjinalin!</p>
                        <p data-lang-mk="Прва имитација, full box пакет, бесплатна достава!" data-lang-sq="Kopje e dorës së parë, paketim full box, transport falas!">Kopje e dorës së parë, paketim full box, transport falas!</p>
                        <p data-lang-mk="Пакетот full box – доаѓа со полнач и кабел." data-lang-sq="Paketim fullbox – vjen me karikues dhe kabllo.">Paketim fullbox – vjen me karikues dhe kabllo.</p>
                        <p data-lang-mk="Овој телефон е прва имитација (копија од прва класа)." data-lang-sq="Ky telefon është kopje e dorës së parë (first imitation).">Ky telefon është kopje e dorës së parë (first imitation).</p>
                    </div>
                    <ul class="features">
                        <li data-lang-mk="512GB меморија" data-lang-sq="512GB memorija">512GB меморија</li>
                        <li data-lang-mk="8GB RAM процесор" data-lang-sq="8GB RAM procesor">8GB RAM процесор</li>
                        <li data-lang-mk="6.9&quot; екран" data-lang-sq="6.9&quot; ekran">6.9" екран</li>
                        <li data-lang-mk="Полна пакетна содржина" data-lang-sq="Fullbox paketim">Полна пакетна содржина</li>
                        <li data-lang-mk="Потекло: Шведска" data-lang-sq="Origjine: Suedi (Malmo)">Потекло: Шведска</li>
                        <li data-lang-mk="Gray" data-lang-sq="Gray">Gray</li>
                    </ul>
                    <button class="order-btn" data-product="iPhone 16 Pro Max Gray" data-price="198" data-image="Images/ig1.jpg">
                        <i class="fas fa-shopping-cart"></i>
                        <span data-lang-mk="Нарачај Сега" data-lang-sq="Porosit Tani">Нарачај Сега</span>
                    </button>
                </div>
            </div>

            <!-- Samsung S25 Ultra 5G -->
            <div class="product-card">
                <div class="product-images">
                    <div class="image-gallery">
                        <a href="Images/s1.jpg" data-lightbox="samsung-s25" class="main-image">
                            <img src="Images/s1.jpg" alt="Samsung S25 Ultra 5G" loading="lazy">
                        </a>
                        <div class="thumbnail-images">
                            <a href="Images/s2.jpg" data-lightbox="samsung-s25">
                                <img src="Images/s2.jpg" alt="Samsung S25 Ultra 5G" loading="lazy">
                            </a>
                            <a href="Images/s3.jpg" data-lightbox="samsung-s25">
                                <img src="Images/s3.jpg" alt="Samsung S25 Ultra 5G" loading="lazy">
                            </a>
                            <a href="Images/s4.jpg" data-lightbox="samsung-s25">
                                <img src="Images/s4.jpg" alt="Samsung S25 Ultra 5G" loading="lazy">
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="product-info">
                    <h3>Samsung S25 Ultra 5G</h3>
                    <div class="price">
                        <span class="currency">€</span>
                        <span class="amount">149</span>
                    </div>
                    <div class="product-description">
                        <p data-lang-mk="Премиум Samsung, прва имитација, со висок квалитет и изглед идентичен со оригиналот!" data-lang-sq="Një Samsung premium, kopje e dorës së parë, me cilësi shumë të lartë dhe pamje identike me origjinalin!">Një Samsung premium, kopje e dorës së parë, me cilësi shumë të lartë dhe pamje identike me origjinalin!</p>
                        <p data-lang-mk="Прва имитација, full box пакет, бесплатна достава!" data-lang-sq="Kopje e dorës së parë, paketim full box, transport falas!">Kopje e dorës së parë, paketim full box, transport falas!</p>
                        <p data-lang-mk="Пакетот full box – доаѓа со полнач и кабел." data-lang-sq="Paketim fullbox – vjen me karikues dhe kabllo.">Paketim fullbox – vjen me karikues dhe kabllo.</p>
                        <p data-lang-mk="Овој телефон е прва имитација (копија од прва класа)." data-lang-sq="Ky telefon është kopje e dorës së parë (first imitation).">Ky telefon është kopje e dorës së parë (first imitation).</p>
                    </div>
                    <ul class="features">
                        <li data-lang-mk="512GB меморија" data-lang-sq="512GB memorija">512GB меморија</li>
                        <li data-lang-mk="8GB RAM" data-lang-sq="8GB RAM">8GB RAM</li>
                        <li data-lang-mk="6.8" екран" data-lang-sq="6.8" ekran">6.8" екран</li>
                        <li data-lang-mk="Pencil во кутија" data-lang-sq="Pencil ne kuti">Pencil во кутија</li>
                        <li data-lang-mk="Полна пакетна содржина" data-lang-sq="Fullbox paketim">Полна пакетна содржина</li>
                        <li data-lang-mk="Потекло: Шведска" data-lang-sq="Origjine: Suedi (Malmo)">Потекло: Шведска</li>
                        <li data-lang-mk="Phantom Black" data-lang-sq="Phantom Black">Phantom Black</li>
                    </ul>
                    <button class="order-btn" data-product="Samsung S25 Ultra 5G" data-price="149" data-image="Images/s1.jpg">
                        <i class="fas fa-shopping-cart"></i>
                        <span data-lang-mk="Нарачај Сега" data-lang-sq="Porosit Tani">Нарачај Сега</span>
                    </button>
                </div>
            </div>

            <!-- Samsung Galaxy A56 5G -->
            <div class="product-card">
                <div class="product-images">
                    <div class="image-gallery">
                        <a href="Images/s11.jpg" data-lightbox="samsung-a56" class="main-image">
                            <img src="Images/s11.jpg" alt="Samsung Galaxy A56 5G" loading="lazy">
                        </a>
                        <div class="thumbnail-images">
                            <a href="Images/s12.jpg" data-lightbox="samsung-a56">
                                <img src="Images/s12.jpg" alt="Samsung Galaxy A56 5G" loading="lazy">
                            </a>
                            <a href="Images/s13.jpg" data-lightbox="samsung-a56">
                                <img src="Images/s13.jpg" alt="Samsung Galaxy A56 5G" loading="lazy">
                            </a>
                            <a href="Images/s14.jpg" data-lightbox="samsung-a56">
                                <img src="Images/s14.jpg" alt="Samsung Galaxy A56 5G" loading="lazy">
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="product-info">
                    <h3>Samsung Galaxy A56 5G Black</h3>
                    <div class="price">
                        <span class="currency">€</span>
                        <span class="amount">99</span>
                    </div>
                    <div class="product-description">
                        <p data-lang-mk="Премиум Samsung, прва имитација, со висок квалитет и изглед идентичен со оригиналот!" data-lang-sq="Një Samsung premium, kopje e dorës së parë, me cilësi shumë të lartë dhe pamje identike me origjinalin!">Një Samsung premium, kopje e dorës së parë, me cilësi shumë të lartë dhe pamje identike me origjinalin!</p>
                        <p data-lang-mk="Прва имитација, full box пакет, бесплатна достава!" data-lang-sq="Kopje e dorës së parë, paketim full box, transport falas!">Kopje e dorës së parë, paketim full box, transport falas!</p>
                        <p data-lang-mk="Пакетот full box – доаѓа со полнач и кабел." data-lang-sq="Paketim fullbox – vjen me karikues dhe kabllo.">Paketim fullbox – vjen me karikues dhe kabllo.</p>
                        <p data-lang-mk="Овој телефон е прва имитација (копија од прва класа)." data-lang-sq="Ky telefon është kopje e dorës së parë (first imitation).">Ky telefon është kopje e dorës së parë (first imitation).</p>
                    </div>
                    <ul class="features">
                        <li data-lang-mk="256GB меморија" data-lang-sq="256GB memorija">256GB меморија</li>
                        <li data-lang-mk="6GB RAM" data-lang-sq="6GB RAM">6GB RAM</li>
                        <li data-lang-mk="6.7" екран" data-lang-sq="6.7" ekran">6.7" екран</li>
                        <li data-lang-mk="5G технологија" data-lang-sq="5G teknologji">5G технологија</li>
                        <li data-lang-mk="Полна пакетна содржина" data-lang-sq="Paketim fullbox">Полна пакетна содржина</li>
                        <li data-lang-mk="Модерен дизајн" data-lang-sq="Pamje moderne dhe dizajn i bukur">Модерен дизајн</li>
                        <li data-lang-mk="Производство од Шведска" data-lang-sq="Prodhim nga Suedia">Производство од Шведска</li>
                    </ul>
                    <button class="order-btn" data-product="Samsung Galaxy A56 5G Black" data-price="99" data-image="Images/s11.jpg">
                        <i class="fas fa-shopping-cart"></i>
                        <span data-lang-mk="Нарачај Сега" data-lang-sq="Porosit Tani">Нарачај Сега</span>
                    </button>
                </div>
            </div>

            <!-- Samsung Galaxy A56 5G Green -->
            <div class="product-card">
                <div class="product-images">
                    <div class="image-gallery">
                        <a href="Images/sg1.jpg" data-lightbox="samsung-a56-green" class="main-image">
                            <img src="Images/sg1.jpg" alt="Samsung Galaxy A56 5G Green" loading="lazy">
                        </a>
                        <div class="thumbnail-images">
                            <a href="Images/sg2.jpg" data-lightbox="samsung-a56-green">
                                <img src="Images/sg2.jpg" alt="Samsung Galaxy A56 5G Green" loading="lazy">
                            </a>
                            <a href="Images/sg3.jpg" data-lightbox="samsung-a56-green">
                                <img src="Images/sg3.jpg" alt="Samsung Galaxy A56 5G Green" loading="lazy">
                            </a>
                            <a href="Images/sg4.jpg" data-lightbox="samsung-a56-green">
                                <img src="Images/sg4.jpg" alt="Samsung Galaxy A56 5G Green" loading="lazy">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="product-info">
                    <h3>Samsung Galaxy A56 5G Green</h3>
                    <div class="price">
                        <span class="currency">€</span>
                        <span class="amount">99</span>
                    </div>
                    <div class="product-description">
                        <p data-lang-mk="Премиум Samsung, прва имитација, со висок квалитет и изглед идентичен со оригиналот!" data-lang-sq="Një Samsung premium, kopje e dorës së parë, me cilësi shumë të lartë dhe pamje identike me origjinalin!">Një Samsung premium, kopje e dorës së parë, me cilësi shumë të lartë dhe pamje identike me origjinalin!</p>
                        <p data-lang-mk="Прва имитација, full box пакет, бесплатна достава!" data-lang-sq="Kopje e dorës së parë, paketim full box, transport falas!">Kopje e dorës së parë, paketim full box, transport falas!</p>
                        <p data-lang-mk="Пакетот full box – доаѓа со полнач и кабел." data-lang-sq="Paketim fullbox – vjen me karikues dhe kabllo.">Paketim fullbox – vjen me karikues dhe kabllo.</p>
                        <p data-lang-mk="Овој телефон е прва имитација (копија од прва класа)." data-lang-sq="Ky telefon është kopje e dorës së parë (first imitation).">Ky telefon është kopje e dorës së parë (first imitation).</p>
                    </div>
                    <ul class="features">
                        <li data-lang-mk="256GB меморија" data-lang-sq="256GB memorija">256GB меморија</li>
                        <li data-lang-mk="6GB RAM" data-lang-sq="6GB RAM">6GB RAM</li>
                        <li data-lang-mk="6.7&quot; екран" data-lang-sq="6.7&quot; ekran">6.7" екран</li>
                        <li data-lang-mk="5G технологија" data-lang-sq="5G teknologji">5G технологија</li>
                        <li data-lang-mk="Полна пакетна содржина" data-lang-sq="Paketim fullbox">Полна пакетна содржина</li>
                        <li data-lang-mk="Модерен дизајн" data-lang-sq="Pamje moderne dhe dizajn i bukur">Модерен дизајн</li>
                        <li data-lang-mk="Производство од Шведска" data-lang-sq="Prodhim nga Suedia">Производство од Шведска</li>
                        <li data-lang-mk="Green" data-lang-sq="Green">Green</li>
                    </ul>
                    <button class="order-btn" data-product="Samsung Galaxy A56 5G Green" data-price="99" data-image="Images/sg1.jpg">
                        <i class="fas fa-shopping-cart"></i>
                        <span data-lang-mk="Нарачај Сега" data-lang-sq="Porosit Tani">Нарачај Сега</span>
                    </button>
                </div>
            </div>

            <!-- AirPods First Copy -->
            <div class="product-card">
                <div class="product-images">
                    <div class="image-gallery">
                        <a href="Images/ai.jpg" data-lightbox="airpods" class="main-image">
                            <img src="Images/ai.jpg" alt="AirPods First Copy" loading="lazy">
                        </a>
                    </div>
                </div>
                <div class="product-info">
                    <h3>AirPods (First Copy)</h3>
                    <div class="price">
                        <span class="currency">€</span>
                        <span class="amount">50</span>
                    </div>
                    <div class="product-description">
                        <p data-lang-mk="Најнова верзија AirPods, прва копија со одличен квалитет и идентичен изглед како оригиналот!" data-lang-sq="AirPods versioni më i ri, kopje e dorës së parë me cilësi të shkëlqyer dhe pamje identike me origjinalin!">AirPods versioni më i ri, kopje e dorës së parë me cilësi të shkëlqyer dhe pamje identike me origjinalin!</p>
                        <p data-lang-mk="Совршен звук, удобност и долготрајна батерија. Ограничени количини!" data-lang-sq="Tingull i përsosur, rehati dhe bateri që zgjat. Sasi të kufizuara!">Tingull i përsosur, rehati dhe bateri që zgjat. Sasi të kufizuara!</p>
                    </div>
                    <button class="order-btn" data-product="AirPods First Copy" data-price="50" data-image="Images/ai.jpg">
                        <i class="fas fa-shopping-cart"></i>
                        <span data-lang-mk="Нарачај Сега" data-lang-sq="Porosit Tani">Нарачај Сега</span>
                    </button>
                </div>
            </div>

            <!-- Apple AirPods Max - 2 First Copy -->
            <div class="product-card">
                <div class="product-images">
                    <div class="image-gallery">
                        <a href="Images/ai2.jpg" data-lightbox="airpods-max-2" class="main-image">
                            <img src="Images/ai2.jpg" alt="Apple AirPods Max - 2 First Copy" loading="lazy">
                        </a>
                    </div>
                </div>
                <div class="product-info">
                    <h3>Apple AirPods Max - 2 (First Copy)</h3>
                    <div class="price">
                        <span class="currency">€</span>
                        <span class="amount">50</span>
                    </div>
                    <div class="product-description">
                        <p data-lang-mk="Apple AirPods Max - 2, прва копија со одличен квалитет и идентичен изглед како оригиналот!" data-lang-sq="Apple AirPods Max - 2, kopje e dorës së parë me cilësi të shkëlqyer dhe pamje identike me origjinalin!">Apple AirPods Max - 2, kopje e dorës së parë me cilësi të shkëlqyer dhe pamje identike me origjinalin!</p>
                        <p data-lang-mk="Совршен звук, удобност и долготрајна батерија. Ограничени количини!" data-lang-sq="Tingull i përsosur, rehati dhe bateri që zgjat. Sasi të kufizuara!">Tingull i përsosur, rehati dhe bateri që zgjat. Sasi të kufizuara!</p>
                    </div>
                    <button class="order-btn" data-product="Apple AirPods Max - 2 First Copy" data-price="50" data-image="Images/ai2.jpg">
                        <i class="fas fa-shopping-cart"></i>
                        <span data-lang-mk="Нарачај Сега" data-lang-sq="Porosit Tani">Нарачај Сега</span>
                    </button>
                </div>
            </div>

            <!-- Smart Watch First Copy -->
            <div class="product-card">
                <div class="product-images">
                    <div class="image-gallery">
                        <a href="Images/ai3.jpg" data-lightbox="smartwatch" class="main-image">
                            <img src="Images/ai3.jpg" alt="Smart Watch First Copy" loading="lazy">
                        </a>
                    </div>
                </div>
                <div class="product-info">
                    <h3>Smart Watch (First Copy)</h3>
                    <div class="price">
                        <span class="currency">€</span>
                        <span class="amount">80</span>
                    </div>
                    <div class="product-description">
                        <p data-lang-mk="Најнова верзија паметен часовник, прва копија со одличен квалитет и идентичен изглед како оригиналот!" data-lang-sq="Ora më e re smart, kopje e dorës së parë me cilësi të shkëlqyer dhe pamje identike me origjinalin!">Ora më e re smart, kopje e dorës së parë me cilësi të shkëlqyer dhe pamje identike me origjinalin!</p>
                        <p data-lang-mk="Многу функции, удобност и долготрајна батерија. Ограничени количини!" data-lang-sq="Shumë funksione, rehati dhe bateri që zgjat. Sasi të kufizuara!">Shumë funksione, rehati dhe bateri që zgjat. Sasi të kufizuara!</p>
                    </div>
                    <button class="order-btn" data-product="Smart Watch First Copy" data-price="80" data-image="Images/ai3.jpg">
                        <i class="fas fa-shopping-cart"></i>
                        <span data-lang-mk="Нарачај Сега" data-lang-sq="Porosit Tani">Нарачај Сега</span>
                    </button>
                </div>
            </div>
        </div>
    </section>
<!-- Order Modal -->
<<form id="orderForm" class="order-form" action="send_email.php" method="POST">
    <input type="hidden" name="product" id="productInput" value="">
    <input type="hidden" name="price" id="priceInput" value="">
    
    <div class="form-group">
        <label for="name" ...>Име</label>
        <input type="text" id="name" name="name" required>
    </div>
    
    <div class="form-group">
        <label for="address" ...>Адреса</label>
        <input type="text" id="address" name="address" required>
    </div>
    
    <div class="form-group">
        <label for="phone" ...>Телефон</label>
        <input type="tel" id="phone" name="phone" required>
    </div>
    
    <button type="submit" ...>Испрати Нарачка</button>
</form>

<!-- Footer -->
<footer class="footer">
    <div class="container">
      <div class="footer-bottom" style="text-align: center;">
        <p data-lang-mk="© 2024 MobileB.online. Сите права се задржани." 
           data-lang-sq="© 2024 MobileB.online. Të gjitha të drejtat e rezervuara.">
           © 2024 MobileB.online. Сите права се задржани.
        </p>
  
        <a href="https://www.instagram.com/mobileb.online/profilecard/?igsh=OTRoaHljZTVmNDFm" 
           target="_blank" aria-label="Instagram" 
           style="display: inline-flex; align-items: center; gap: 6px; text-decoration: none; color: inherit; justify-content: center; margin-top: 8px;">
          <span style="font-weight: bold;">MobileB.online</span>
          <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" 
               alt="Instagram" 
               style="width: 18px; height: 18px;">
        </a>
      </div>
    </div>
  </footer>
  


    <!-- Scripts -->
    <script src="main-simple.js"></script>
</body>
</html> 