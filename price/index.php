<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Актуальный прайс-лист на услуги геодезиста и кадастрового инженера в Москве и МО. Фиксированные цены, смета за 1 час. Скачайте прайс PDF 2026 года!");
$APPLICATION->SetPageProperty("title", "Цены на кадастровые и геодезические работы в Москве 2026 | Прайс");
$APPLICATION->SetTitle("Цены на геодезические и кадастровые работы в Москве и МО — 2026");
?>
	
   
    <!-- Подключаем иконки Lucide -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    


    <div class="content-container">
        
        <!-- 1. ШАПКА -->
        <section>
            
            <p>
                Получите детализированную смету вашего объекта в течение 30 минут. <strong>Работаем по официальному договору. Реальные цены без скрытых доплат.</strong>
            </p>
            <div class="btn-group">
                
				<button type="button" class="btn animate-load btn-default has-ripple" data-event="jqm" data-param-id="7">Рассчитать стоимость онлайн</button>
                <button class="btn btn-outline">
                    <i data-lucide="file-down" style="width: 1.25rem; height: 1.25rem;"></i>
                    Скачать полный прайс PDF
                </button>
            </div>
        </section>

        <!-- 2. БЛОК ТАБЛИЦ -->
        <section style="display: flex; flex-direction: column; align-items: center;">
            <!-- Компактная ссылка на файл с таблицами -->
            <a href="/price/file.xlsx" target="_blank" class="tables-download-block">
                <div class="tables-download-info">
                    <i data-lucide="file-spreadsheet" style="width: 2.5rem; height: 2.5rem; color: #3b82f6; flex-shrink: 0;"></i>
                    <div class="tables-download-text">
                        <span class="tables-download-title">Таблицы Стоимости Геореспект</span>
                        <span class="tables-download-subtitle">Подробный прайс-лист на все виды работ в формате PDF</span>
                    </div>
                </div>
                <div class="tables-download-action">
                    Открыть файл <i data-lucide="arrow-right" style="width: 1.25rem; height: 1.25rem;"></i>
                </div>
            </a>
            
            <div class="discount-badge">
                <i data-lucide="tags" style="width: 1rem; height: 1rem;"></i>
                Скидка до 20% на комплекс
            </div>
        </section>

        <!-- 3. ЧТО ВЛИЯЕТ НА СТОИМОСТЬ -->
        <section>
            <div>
                <h3>Что влияет на итоговую стоимость?</h3>
            </div>
            
            <div class="pricing-grid">
                
                <div class="pricing-factor-card">
                    <div class="pricing-factor-icon"><i data-lucide="map-pin"></i></div>
                    <div class="pricing-factor-content advantage-text">
                        <strong>Сложность ситуации на участке</strong>
                        Плотность застройки, наличие густой растительности, характер рельефа, наличие подземных коммуникаций.
                    </div>
                </div>

                <div class="pricing-factor-card">
                    <div class="pricing-factor-icon"><i data-lucide="home"></i></div>
                    <div class="pricing-factor-content advantage-text">
                        <strong>Площадь и конфигурация</strong>
                        Количество помещений, этажность строений, а также общая площадь и сложность самого объекта.
                    </div>
                </div>

                <div class="pricing-factor-card">
                    <div class="pricing-factor-icon"><i data-lucide="folder-open"></i></div>
                    <div class="pricing-factor-content advantage-text">
                        <strong>Документы</strong>
                        Наличие, полнота и состав исходной документации, предоставляемой заказчиком.
                    </div>
                </div>

                <div class="pricing-factor-card">
                    <div class="pricing-factor-icon"><i data-lucide="timer"></i></div>
                    <div class="pricing-factor-content advantage-text">
                        <strong>Срочность</strong>
                        Необходимость подготовки документов «вчера» (применяется коэффициент за экспресс-выдачу).
                    </div>
                </div>

                <div class="pricing-factor-card">
                    <div class="pricing-factor-icon"><i data-lucide="stamp"></i></div>
                    <div class="pricing-factor-content advantage-text">
                        <strong>Согласования</strong>
                        Необходимость согласований (инженерные сети, Москомархитектура, ИСОГД, Росреестр).
                    </div>
                </div>

                <div class="pricing-factor-card">
                    <div class="pricing-factor-icon"><i data-lucide="layers"></i></div>
                    <div class="pricing-factor-content advantage-text">
                        <strong>Комплексный заказ</strong>
                        Объединение нескольких услуг позволяет получить существенные скидки до 35%.
                    </div>
                </div>

            </div>
        </section>

        <!-- БАННЕР -->
        <div class="trust-banner">
            <i data-lucide="shield-check" style="width: 2rem; height: 2rem;"></i>
            <span>Мы работаем официально</span>
        </div>

        <!-- 4. FAQ -->
        <section>
            <div>
                <h3>Часто задаваемые вопросы о ценах</h3>
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
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "ID",
		"SORT_ORDER2" => "DESC",
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
);?>
        </section>

        <!-- 5. ПОДВАЛ CTA -->
        <section class="footer-cta">
            <h3>Не нашли нужную услугу в прайсе?</h3>
            <p>Напишите нам в мессенджер. Прикрепите кадастровый номер или фото объекта — мы рассчитаем стоимость и пришлем коммерческое предложение в течение 15 минут.</p>
            <button class="btn btn-default btn-lg has-ripple" data-event="jqm" data-param-id="10" data-name="question">
                <i data-lucide="message-square" style="width: 1.25rem; height: 1.25rem;"></i>
                Написать в мессенджер
            </button>
        </section>

    </div>

    <script>
        lucide.createIcons();
    </script>
	<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>