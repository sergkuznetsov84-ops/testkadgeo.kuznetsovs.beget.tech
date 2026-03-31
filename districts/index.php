<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", " Геодезические и кадастровые услуги во всех районах Москвы и Московской области. Топосъемка, межевание, технический план, вынос границ и лазерное сканирование. Выезд инженера в день обращения.");
$APPLICATION->SetPageProperty("title", "География работ — Геодезия и кадастр во всех районах Москвы и МО | Геореспект");
$APPLICATION->SetTitle("География геодезических и кадастровых работ: Москва и МО");
?>

<script src="https://unpkg.com/lucide@latest"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
        <style>
        /* =========================================
           БАЗОВЫЕ СБРОСЫ И КОНТЕЙНЕР
           ========================================= */
      

        /* =========================================
           СЕКЦИИ
           ========================================= */
     
        .section-header {
            margin-bottom: 2.5rem;
        }

        .section-title {
            font-size: 2rem;
            font-weight: 700;
            letter-spacing: -0.02em;
            margin-bottom: 0.5rem;
        }

        .

        /* =========================================
           1. ГЛАВНЫЙ ЭКРАН (HERO)
           ========================================= */
        

        .hero-highlight {
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
            font-size: 1rem;
            font-weight: 600;
            color: #10b981; /* Изумрудный акцент для выгоды (бесплатный выезд) */
            background: rgba(16, 185, 129, 0.1);
            padding: 0.75rem 1.25rem;
            border-radius: 9999px;
            border: 1px solid rgba(16, 185, 129, 0.2);
        }

        .hero-highlight svg {
            flex-shrink: 0;
        }

        /* =========================================
           2. БЛОК С КАРТОЙ
           ========================================= */
        .map-wrapper {
            width: 100%;
            height: 400px;
            background-color: #18181b;
            border: 1px solid #27272a;
            border-radius: 1.5rem;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            color: #52525b;
            position: relative;
        }

        @media (min-width: 768px) {
            .map-wrapper { height: 500px; }
        }

        /* Заглушка (пока нет реальной карты) */
        .map-placeholder-content {
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1rem;
        }

        .map-placeholder-content svg {
            width: 4rem;
            height: 4rem;
            color: #3b82f6;
            opacity: 0.5;
        }

        .map-placeholder-content span {
            font-size: 1.125rem;
            font-weight: 500;
        }

        /* =========================================
           3. КАРТОЧКИ ПРЕИМУЩЕСТВ (СЕТКА)
           ========================================= */
        .features-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }

        @media (min-width: 768px) {
            .features-grid { grid-template-columns: repeat(3, 1fr); }
        }


    
     

        .feature-text {
            color: #a1a1aa;
            font-size: 1rem;
            line-height: 1.6;
            margin: 0;
        }

    </style>
<div class="about-page-wrapper">

    <!-- 1. ГЛАВНЫЙ ЭКРАН -->
    <section class="hero-section">
        <div class="about-container">
            <p class="hero-lead">
                Геодезисты и кадастровые инженеры «Геореспект» ежедневно работают во всех округах Москвы, выезжают в любую точку Подмосковья и соседние области. Оперативный выезд за 24 часа. 
            </p>
            <div class="hero-highlight">
                <i data-lucide="car"></i>
                <span>Транспортные расходы уже включены в стоимость</span>
            </div>
        </div>
    </section>

    <!-- 2. ИНТЕРАКТИВНАЯ КАРТА -->
    <section class="about-section">

    </section>

    <!-- 3. НАШИ ПРЕИМУЩЕСТВА ПО РЕГИОНУ -->
    <section class="about-section">
        <div class="about-container">
            <div class="section-header">
                <h2 class="section-title">Работаем по всему региону</h2>
                <p class="section-desc">Независимо от того, в каком районе или городе находится ваш объект — мы приедем и выполним работы в кратчайшие сроки.</p>
            </div>
            
            <div class="features-grid">
                
                <div class="feature-card">
                    <div class="feature-icon"><i data-lucide="landmark"></i></div>
                    <h3 class="feature-title">Знание местной специфики</h3>
                    <p class="feature-text">Имеем большой опыт согласований с местными Архитектурами и балансодержателями инженерных сетей.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon"><i data-lucide="crosshair"></i></div>
                    <h3 class="feature-title">Локализация исходных данных</h3>
                    <p class="feature-text">Точное определение координат от местных геодезических пунктов по всему Подмосковью и Москве.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon"><i data-lucide="truck"></i></div>
                    <h3 class="feature-title">Логистика и оперативность</h3>
                    <p class="feature-text">4 дежурные бригады на разных направлениях (Север, Юг, Запад, Восток) снижают время выезда до 24 часов.</p>
                </div>

            </div>
        </div>
    </section>

</div> <!-- Конец .about-page-wrapper -->


 <!-- 4. FAQ -->
        <section>
            <div>
                <h3>Ответы на частые вопросы</h3>
            </div>

            <?$APPLICATION->IncludeComponent(
	"bitrix:news", 
	"faq", 
	[
		"IBLOCK_TYPE" => "aspro_allcorp3_content",
		"IBLOCK_ID" => "26",
		"NEWS_COUNT" => "20",
		"USE_SEARCH" => "N",
		"USE_RSS" => "N",
		"USE_RATING" => "N",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "N",
		"SORT_BY1" => "ID",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "NAME",
		"SORT_ORDER2" => "ASC",
		"CHECK_DATES" => "Y",
		"SEF_MODE" => "Y",
		"SEF_FOLDER" => "/company/faq/",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "100000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "N",
		"SET_TITLE" => "N",
		"SET_STATUS_404" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"USE_PERMISSIONS" => "N",
		"PREVIEW_TRUNCATE_LEN" => "",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => [
			0 => "PREVIEW_TEXT",
			1 => "PREVIEW_PICTURE",
			2 => "",
		],
		"LIST_PROPERTY_CODE" => [
			0 => "TITLE_BUTTON",
			1 => "LINK_BUTTON",
			2 => "",
		],
		"HIDE_LINK_WHEN_NO_DETAIL" => "Y",
		"DISPLAY_NAME" => "Y",
		"META_KEYWORDS" => "-",
		"META_DESCRIPTION" => "-",
		"BROWSER_TITLE" => "-",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_FIELD_CODE" => [
			0 => "",
			1 => "",
		],
		"DETAIL_PROPERTY_CODE" => [
			0 => "TITLE_BUTTON",
			1 => "LINK_BUTTON",
			2 => "",
		],
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"VIEW_TYPE" => "accordion",
		"SHOW_TABS" => "Y",
		"SHOW_SECTION_PREVIEW_DESCRIPTION" => "Y",
		"SHOW_SECTION_NAME" => "N",
		"USE_SHARE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"USE_REVIEW" => "N",
		"ADD_ELEMENT_CHAIN" => "N",
		"SHOW_DETAIL_LINK" => "Y",
		"COUNT_IN_LINE" => "3",
		"IMAGE_POSITION" => "left",
		"COMPONENT_TEMPLATE" => "faq",
		"SECTION_ELEMENTS_TYPE_VIEW" => "list_elements_1",
		"SET_LAST_MODIFIED" => "N",
		"STRICT_SECTION_CHECK" => "N",
		"SHOW_ASK_QUESTION_BLOCK" => "Y",
		"S_ASK_QUESTION" => "",
		"DETAIL_SET_CANONICAL_URL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => "",
		"SEF_URL_TEMPLATES" => [
			"news" => "",
			"section" => "",
			"detail" => "",
		]
	],
	false
);?><script>
    lucide.createIcons();
</script>
        </section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>