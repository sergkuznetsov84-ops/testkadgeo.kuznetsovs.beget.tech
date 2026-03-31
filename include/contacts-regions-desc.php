<!-- Подключаем иконки Lucide -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">



<div class="about-page-wrapper">

    <!-- 1. ГЛАВНЫЙ ЭКРАН -->
    <section class="hero-section">
        <div class="about-container">
            <h3 class="hero-title">Как добраться до офиса</h3>
            
            <!-- Навигация по городам (Вкладки) -->
            <div class="city-nav">
                <button data-target="office-moscow" class="city-nav-btn active">Москва</button>
                <button data-target="office-odintsovo" class="city-nav-btn">Одинцово</button>
                <button data-target="office-podolsk" class="city-nav-btn">Подольск</button>
                <button data-target="office-khimki" class="city-nav-btn">Химки</button>
                <button data-target="office-ramenskoye" class="city-nav-btn">Раменское</button>
            </div>

            <!-- СПИСОК ОФИСОВ -->
            
            <!-- МОСКВА -->
            <div id="office-moscow" class="office-card active">
                <div class="office-card-title">
                    <i data-lucide="map-pin"></i>
                    Офис в Москве (ул. Барклая, д. 18/19)
                </div>
                <div class="office-grid">
                    <div class="route-block">
                        <h4><i data-lucide="footprints"></i> Пешком</h4>
                        <p>Выход из станции метро «Багратионовская» (последний вагон из центра). Идите прямо по улице Барклая около 5 минут 440 м в сторону Большой Филёвской улицы. Здание будет находиться по правой стороне.</p>
                    </div>
                    <div class="route-block">
                        <h4><i data-lucide="car-front"></i> На автомобиле</h4>
                        <p>Заезд с ул. Барклая.<br>Координаты для навигатора:<br><span style="color: #e4e4e7;">55.746988, 37.496542</span></p>
                    </div>
                    <div class="route-block">
                        <h4><i data-lucide="circle-parking"></i> Парковка</h4>
                        <div class="parking-item">
                            <span class="parking-badge">P</span>
                            <p><strong>Гостевая:</strong> На территории бизнес-центра (для въезда необходимо заранее заказать пропуск по нашему телефону).</p>
                        </div>
                        <div class="parking-item">
                            <span class="parking-badge">P</span>
                            <p><strong>Городская:</strong> Платная муниципальная парковка вдоль улицы Барклая (Парковочная зона № 4236 80 руб./час).</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ОДИНЦОВО -->
            <div id="office-odintsovo" class="office-card">
                <div class="office-card-title">
                    <i data-lucide="map-pin"></i>
                    Офис в Одинцово (Можайское ш., д. 18)
                </div>
                <div class="office-grid">
                    <div class="route-block">
                        <h4><i data-lucide="footprints"></i> Пешком</h4>
                        <p>От станции МЦД-1 «Одинцово» около 7 минут пешком 630 м до Можайского шоссе. Здание расположено на первой линии шоссе, вход с противоположной стороны главной улицы.</p>
                    </div>
                    <div class="route-block">
                        <h4><i data-lucide="car-front"></i> На автомобиле</h4>
                        <p>Заезд с Можайского шоссе.<br>Координаты для навигатора:<br><span style="color: #e4e4e7;">55.673275, 37.275727</span></p>
                    </div>
                    <div class="route-block">
                        <h4><i data-lucide="circle-parking"></i> Парковка</h4>
                        <div class="parking-item">
                            <span class="parking-badge">P</span>
                            <p><strong>Гостевая:</strong> Бесплатная парковка непосредственно перед входом в офис (количество мест ограничено).</p>
                        </div>
                        <div class="parking-item">
                            <span class="parking-badge">P</span>
                            <p><strong>Городская:</strong> Платная парковка рядом со зданием.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ПОДОЛЬСК -->
            <div id="office-podolsk" class="office-card">
                <div class="office-card-title">
                    <i data-lucide="map-pin"></i>
                    Офис в Подольске (ул. Комсомольская, д. 59)
                </div>
                <div class="office-grid">
                    <div class="route-block">
                        <h4><i data-lucide="footprints"></i> Пешком</h4>
                        <p>От автобусной остановки «Площадь Ленина» 3 минуты пешком через парк.</p>
                    </div>
                    <div class="route-block">
                        <h4><i data-lucide="car-front"></i> На автомобиле</h4>
                        <p>Заезд с Комсомольской улицы.<br>Координаты для навигатора:<br><span style="color: #e4e4e7;">55.432168, 37.543228</span></p>
                    </div>
                    <div class="route-block">
                        <h4><i data-lucide="circle-parking"></i> Парковка</h4>
                        <div class="parking-item">
                            <span class="parking-badge">P</span>
                            <p><strong>Городская:</strong> Платная муниципальная парковка вдоль улицы Барклая (Парковочная зона № 39207 50 руб./час).</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ХИМКИ -->
            <div id="office-khimki" class="office-card">
                <div class="office-card-title">
                    <i data-lucide="map-pin"></i>
                    Офис в Химках (ул. Горшина, д. 1)
                </div>
                <div class="office-grid">
                    <div class="route-block">
                        <h4><i data-lucide="footprints"></i> Пешком</h4>
                        <p>От автобусной остановки «Юбилейный проспект» 2 минуты пешком.</p>
                    </div>
                    <div class="route-block">
                        <h4><i data-lucide="car-front"></i> На автомобиле</h4>
                        <p>Заезд с ул. Горшина.<br>Координаты для навигатора:<br><span style="color: #e4e4e7;">55.887892, 37.429932</span></p>
                    </div>
                    <div class="route-block">
                        <h4><i data-lucide="circle-parking"></i> Парковка</h4>
                        <div class="parking-item">
                            <span class="parking-badge">P</span>
                            <p><strong>Гостевая:</strong> Бесплатная парковочная зона непосредственно возле здания.</p>
                        </div>
                        <div class="parking-item">
                            <span class="parking-badge">P</span>
                            <p><strong>Городская:</strong> Бесплатная стихийная парковка вдоль улицы Горшина и на дублерах.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- РАМЕНСКОЕ -->
            <div id="office-ramenskoye" class="office-card">
                <div class="office-card-title">
                    <i data-lucide="map-pin"></i>
                    Офис в Раменском (ул. Карла Маркса, д. 5)
                </div>
                <div class="office-grid">
                    <div class="route-block">
                        <h4><i data-lucide="footprints"></i> Пешком</h4>
                        <p>От станции МЦД-3 «Раменское» 10 минут 780 м пешком вдоль ул. Ногина до ул. Карла Маркса.</p>
                    </div>
                    <div class="route-block">
                        <h4><i data-lucide="car-front"></i> На автомобиле</h4>
                        <p>Заезд с ул. Карла Маркса.<br>Координаты для навигатора:<br><span style="color: #e4e4e7;">55.570278, 38.220054</span></p>
                    </div>
                    <div class="route-block">
                        <h4><i data-lucide="circle-parking"></i> Парковка</h4>
                        <div class="parking-item">
                            <span class="parking-badge">P</span>
                            <p><strong>Городская:</strong> Бесплатная парковка вдоль улицы.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- 2. РЕКВИЗИТЫ -->
    <section class="about-section">
        <div class="about-container">
            <div class="section-header">
                <h2 class="section-title">Реквизиты для договоров</h2>
                <p class="section-desc">ОБЩЕСТВО С ОГРАНИЧЕННОЙ ОТВЕТСТВЕННОСТЬЮ «ГЕОРЕСПЕКТ»</p>
            </div>
            
            <div class="req-grid">
                
                <!-- Юридическая информация -->
                <div class="req-box">
                    <h3>Юридическая информация</h3>
                    
                    <div class="req-row">
                        <span class="req-label">Юридический адрес</span>
                        <span class="req-value">143007, МОСКОВСКАЯ ОБЛАСТЬ, Г.О. ОДИНЦОВСКИЙ, Г ОДИНЦОВО, Ш МОЖАЙСКОЕ, Д. 18, ОФИС 29</span>
                    </div>
                    <div class="req-row">
                        <span class="req-label">ИНН</span>
                        <span class="req-value">5032380700</span>
                    </div>
                    <div class="req-row">
                        <span class="req-label">КПП</span>
                        <span class="req-value">503201001</span>
                    </div>
                    <div class="req-row">
                        <span class="req-label">ОГРН</span>
                        <span class="req-value">1245000070028</span>
                    </div>
                </div>

                <!-- Банковские реквизиты -->
                <div class="req-box">
                    <h3>Банковские реквизиты</h3>
                    
                    <div class="req-row">
                        <span class="req-label">Расчетный счет</span>
                        <span class="req-value">40702810910001627989</span>
                    </div>
                    <div class="req-row">
                        <span class="req-label">Банк</span>
                        <span class="req-value">АО «ТБанк»</span>
                    </div>
                    <div class="req-row">
                        <span class="req-label">ИНН банка</span>
                        <span class="req-value">7710140679</span>
                    </div>
                    <div class="req-row">
                        <span class="req-label">БИК банка</span>
                        <span class="req-value">044525974</span>
                    </div>
                    <div class="req-row">
                        <span class="req-label">Корр. счет</span>
                        <span class="req-value">30101810145250000974</span>
                    </div>
                    <div class="req-row">
                        <span class="req-label">Адрес банка</span>
                        <span class="req-value">127287, г. Москва, ул. Хуторская 2-я, д. 38А, стр. 26</span>
                    </div>
                </div>

            </div>

            <a href="/contacts/card.pdf" target="_blank" class="btn-download">
                <i data-lucide="file-down"></i>
                Скачать карточку партнера (PDF)
            </a>

        </div>
    </section>

</div> <!-- Конец .about-page-wrapper -->



<script>
    lucide.createIcons();
    
    // Логика переключения вкладок (городов)
    document.addEventListener('DOMContentLoaded', function() {
        const buttons = document.querySelectorAll('.city-nav-btn');
        const cards = document.querySelectorAll('.office-card');

        buttons.forEach(button => {
            button.addEventListener('click', function() {
                // Удаляем класс active у всех кнопок и карточек
                buttons.forEach(btn => btn.classList.remove('active'));
                cards.forEach(card => card.classList.remove('active'));

                // Добавляем класс active нажатой кнопке
                this.classList.add('active');

                // Находим нужную карточку по data-target и показываем её
                const targetId = this.getAttribute('data-target');
                const targetCard = document.getElementById(targetId);
                if(targetCard) {
                    targetCard.classList.add('active');
                }
            });
        });
    });
</script>