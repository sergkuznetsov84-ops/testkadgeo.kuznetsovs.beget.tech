<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "ООО «Геореспект» — лицензированная геодезическая компания. Работаем по Москве и МО. Свои инженеры, допуски СРО, оборудование Leica. Гарантия прохождения Росреестра!");
$APPLICATION->SetPageProperty("title", "О компании «Геореспект» | Геодезия и кадастр в Москве с гарантией");
$APPLICATION->SetTitle("О компании");?>


    <!-- Подключаем иконки Lucide -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">


    <!-- 1. ГЛАВНЫЙ ЭКРАН -->
    <section class="hero-section">
        <div class="about-container">
           
            <p class="hero-lead">
                Группа компаний, специализирующаяся на оказании услуг в сфере инженерно-геодезических изысканий, межевания и кадастра в Москве и Московской области.
            </p>
            <div class="hero-highlight">
                <i data-lucide="award"></i>
                <span>Мы — кадастровые инженеры и геодезисты с аттестатами Росреестра и допуском СРО.</span>
            </div>
        </div>
    </section>

    <!-- 2. ДЛЯ КОГО МЫ РАБОТАЕМ -->
    <section class="about-section">
        <div class="about-container">
            <div class="section-header">
                <h3 class="section-title">Для кого мы работаем</h3>
            </div>
            
            <div class="simple-grid">
                <div class="grid-item">
                    <div class="grid-item-header">
                        <div class="grid-item-icon"><i data-lucide="user"></i></div>
                        <h3 class="grid-item-title">Физические лица</h3>
                    </div>
                    <p class="grid-item-text">Собственники индивидуальных земельных участков, частных домов и квартир.</p>
                </div>

                <div class="grid-item">
                    <div class="grid-item-header">
                        <div class="grid-item-icon"><i data-lucide="building-2"></i></div>
                        <h3 class="grid-item-title">Юридические лица</h3>
                    </div>
                    <p class="grid-item-text">Компании, организации и предприятия различных форм собственности.</p>
                </div>

                <div class="grid-item">
                    <div class="grid-item-header">
                        <div class="grid-item-icon"><i data-lucide="hard-hat"></i></div>
                        <h3 class="grid-item-title">Профессионалы</h3>
                    </div>
                    <p class="grid-item-text">Проектировщики, архитекторы, строители, кадастровые инженеры, агентства недвижимости.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. ГДЕ МЫ РАБОТАЕМ -->
    <section class="about-section">
        <div class="about-container">
            <div class="section-header">
                <h4 class="section-title">Где мы работаем</h4>
            </div>
            <div class="text-block">
                <p>Основной объем работ выполняется на объектах недвижимости Москвы и Московской области. Для близости к нашим клиентам и партнерам открыты представительства на наиболее актуальных направлениях.
                <br>Возможность выполнения изысканий за пределами региона уточняется через запрос коммерческого предложения.</p>
            </div>
        </div>
    </section>

    <!-- 4. НАШИ ПРИНЦИПЫ -->
    <section class="about-section">
        <div class="about-container">
            <div class="section-header">
                <h3 class="section-title">Наши принципы</h3>
            </div>
            
            <div class="simple-grid">
                <div class="grid-item">
                    <div class="grid-item-header">
                        <div class="grid-item-icon"><i data-lucide="clock"></i></div>
                        <h3 class="grid-item-title">Качество и сроки</h3>
                    </div>
                    <p class="grid-item-text">Беремся только за ту работу, которую можем выполнить максимально качественно и строго в оговоренные сроки.</p>
                </div>

                <div class="grid-item">
                    <div class="grid-item-header">
                        <div class="grid-item-icon"><i data-lucide="target"></i></div>
                        <h3 class="grid-item-title">Оптимальные решения</h3>
                    </div>
                    <p class="grid-item-text">Помогаем клиенту решить его задачу наиболее оптимальным и выгодным способом в удобное для него время.</p>
                </div>

                <div class="grid-item">
                    <div class="grid-item-header">
                        <div class="grid-item-icon"><i data-lucide="cpu"></i></div>
                        <h3 class="grid-item-title">Передовые технологии</h3>
                    </div>
                    <p class="grid-item-text">Применяем современные технологии и актуальное оборудование для достижения максимальной точности результатов.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. ФАКТЫ О НАС -->
    <section class="about-section">
        <div class="about-container">
            <div class="section-header">
                <h2 class="section-title">Факты о нас</h2>
            </div>
        
        <ul class="advantages-list">
            <li class="advantage-item">
                <div class="advantage-icon"><i data-lucide="check-circle-2"></i></div>
                <p class="advantage-text"><strong>Более 1000</strong> успешно сданных объектов за 2025 год в Москве и МО</p>
            </li>
            <li class="advantage-item">
                <div class="advantage-icon"><i data-lucide="check-circle-2"></i></div>
                <p class="advantage-text">Большинство клиентов <strong>возвращаются или рекомендуют нас</strong></p>
            </li>
            <li class="advantage-item">
                <div class="advantage-icon"><i data-lucide="check-circle-2"></i></div>
                <p class="advantage-text"><strong>Выезд инженера в день обращения</strong> (даже в выходные)</p>
            </li>
            <li class="advantage-item">
                <div class="advantage-icon"><i data-lucide="check-circle-2"></i></div>
                <p class="advantage-text">Все специалисты — <strong>аттестованные кадастровые инженеры и геодезисты</strong> со средним стажем более 15 лет</p>
            </li>
            <li class="advantage-item">
                <div class="advantage-icon"><i data-lucide="check-circle-2"></i></div>
                <p class="advantage-text"><strong>Собственный парк самого современного оборудования</strong> (тахеометры, GNSS приёмники, сканеры Trimble, Leica, CHCNAV) выпущенного не позднее 3х лет назад</p>
            </li>
            <li class="advantage-item">
                <div class="advantage-icon"><i data-lucide="check-circle-2"></i></div>
                <p class="advantage-text"><strong>Действующие СРО:</strong> Члены Ассоциации инженерных изысканий</p>
            </li>
            <li class="advantage-item">
                <div class="advantage-icon"><i data-lucide="check-circle-2"></i></div>
                <p class="advantage-text"><strong>Прямой документооборот с Росреестром:</strong> работаем через личный кабинет кадастрового инженера</p>
            </li>
        </ul>
    </div>
    </section>

    <!-- 6. ЧЕМ МЫ ЗАНИМАЕМСЯ (Bitrix Component) -->
    <section class="about-section">
        <div class="about-container">
            <div class="section-header">
                <h3 class="section-title">Чем мы занимаемся</h3>
            </div>
            
            <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"services-list", 
	[
		"IBLOCK_TYPE" => "aspro_allcorp3_content",
		"IBLOCK_ID" => "42",
		"NEWS_COUNT" => "20",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "ACTIVE_FROM",
		"SORT_ORDER2" => "DESC",
		"FIELD_CODE" => [
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "",
		],
		"PROPERTY_CODE" => [
			0 => "PRICE",
			1 => "ICON",
			2 => "TRANSPARENT_PICTURE",
			3 => "",
		],
		"SET_TITLE" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"STRICT_SECTION_CHECK" => "N",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"IMAGE_POSITION" => "LEFT",
		"ITEMS_OFFSET" => "Y",
		"ELEMENTS_ROW" => "3",
		"BORDER" => "Y",
		"ITEM_HOVER_SHADOW" => "Y",
		"DARK_HOVER" => "N",
		"SHOW_DETAIL_LINK" => "Y",
		"COMPONENT_TEMPLATE" => "services-list",
		"FILTER_NAME" => "",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_LAST_MODIFIED" => "N",
		"TITLE" => "Спецпредложения",
		"SUBTITLE" => "",
		"RIGHT_TITLE" => "Все акции",
		"RIGHT_LINK" => "/services/",
		"SHOW_PREVIEW_TEXT" => "Y",
		"SHOW_SECTION" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => ""
	],
	false
);?>
        </div>
    </section>

    <!-- 7. НАШЕ ОБОРУДОВАНИЕ -->
    <section class="about-section">
        <div class="about-container">
            <div class="section-header">
                <h3 class="section-title">Наше оборудование</h3>
            </div>
            <div class="text-block">
                <p>Наш парк включает самое передовое оборудование марок <strong>Trimble, Leica, CHCNAV, ПРИН.</strong></p>
                <p>Все приборы в обязательном порядке проходят государственную поверку согласно Приказу Минпромторга №1815, что гарантирует абсолютную точность всех проводимых нами измерений.</p>
            </div>
        </div>
    </section>

    <!-- 8. НАША КОМАНДА (Bitrix Component) -->
    <section class="about-section">
        <div class="about-container">
            <div class="section-header">
                <h3 class="section-title">Наша команда</h3>
                <p class="section-desc">Сотрудники, ответственные за направления в Москве и Московской области.</p>
            </div>
            
            <?$APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "staff-list",
                Array(
                    "IBLOCK_TYPE" => "aspro_allcorp3_content",
                    "IBLOCK_ID" => "40", // Укажите ID вашего инфоблока сотрудников
                    "NEWS_COUNT" => "20",
                    "SORT_BY1" => "SORT",
                    "SORT_ORDER1" => "ASC",
                    "SORT_BY2" => "ACTIVE_FROM",
                    "SORT_ORDER2" => "DESC",
                    "FIELD_CODE" => array("NAME", "PREVIEW_TEXT", "PREVIEW_PICTURE", ""),
                    "PROPERTY_CODE" => array("POST", "PHONE", "EMAIL", "SOCIAL_INFO", "SEND_MESS", ""),
                    "SET_TITLE" => "N",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "INCLUDE_SUBSECTIONS" => "Y",
                    "STRICT_SECTION_CHECK" => "N",
                    "PAGER_TEMPLATE" => ".default",
                    "DISPLAY_TOP_PAGER" => "N",
                    "DISPLAY_BOTTOM_PAGER" => "Y",
                    "TYPE_VIEW" => "VIEW1", 
                    "ELEMENT_IN_ROW" => "4",
                    "ITEMS_OFFSET" => "Y",
                    "BORDER" => "Y",
                    "ITEM_HOVER_SHADOW" => "Y",
                    "DOTS_1200" => "Y",
                    "DOTS_768" => "Y",
                    "DOTS_380" => "Y",
                    "DOTS_0" => "Y"
                )
            );?>
        </div>
    </section>
    <section class="about-section">
        <div class="about-container">
        
            <?$APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "reviews-list", // Или "reviews-list", в зависимости от названия шаблона в вашем решении Аспро
                Array(
                    "IBLOCK_TYPE" => "aspro_allcorp3_content",
                    "IBLOCK_ID" => "34", // Укажите ID вашего инфоблока с отзывами
                    "NEWS_COUNT" => "10",
                    "SORT_BY1" => "SORT",
                    "SORT_ORDER1" => "ASC",
                    "SORT_BY2" => "ACTIVE_FROM",
                    "SORT_ORDER2" => "DESC",
                    "FIELD_CODE" => array("NAME", "PREVIEW_TEXT", "PREVIEW_PICTURE", "DETAIL_PICTURE", ""),
                    "PROPERTY_CODE" => array("POST", "RATING", ""), // Выводим должность и рейтинг (звездочки)
                    "SET_TITLE" => "N",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "INCLUDE_SUBSECTIONS" => "Y",
                    "STRICT_SECTION_CHECK" => "N",
                    "PAGER_TEMPLATE" => ".default",
                    "DISPLAY_TOP_PAGER" => "N",
                    "DISPLAY_BOTTOM_PAGER" => "Y",
                    "ELEMENT_IN_ROW" => "3",
                    "ITEMS_OFFSET" => "Y",
                    "BORDER" => "Y",
                    "TEXT_CENTER" => "N",
                    "NARROW" => "Y",
                    "SHOW_NEXT" => "Y",
                    "DOTS_1200" => "Y",
                    "DOTS_768" => "Y",
                    "DOTS_380" => "Y",
                    "DOTS_0" => "Y"
                )
            );?>
        </div>
    </section>
    <script>
        lucide.createIcons();
    </script>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>