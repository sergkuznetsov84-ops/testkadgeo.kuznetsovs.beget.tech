<?
namespace Aspro\Allcorp3;

use Bitrix\Main\Application,
	CAllcorp3 as Solution;

class Basket {
    protected static $instance;

    protected static function getSession() {
        return Application::getInstance()->getSession();
    }
    
    public static function getInstance() {
        if (!static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;


    }

    protected $userId;
    protected $siteId;

    protected function __construct() {
        global $USER;

        $this->siteId = SITE_ID;
        $this->userId = intval($USER->GetID());
    }

    protected function __wakeup() {}
    protected function __clone() {}

    public function __get($variable) {
        switch ($variable) {
            case 'items':
                return $this->getItems();
                break;
        }
        return null;
    }

    public function __set($variable, $value) {
        switch ($variable) {
            case 'items':
                return $this->setItems($value);
                break;
        }

        return null;
    }

    public function checkItems() {
        $session = static::getSession();

        if (!isset($session['BASKET'][$this->siteId][$this->userId])) {
            $session['BASKET'][$this->siteId][$this->userId] = [];
        }
    }

    public function getItems() :array {
        $session = static::getSession();
        $this->checkItems();
        return $session['BASKET'][$this->siteId][$this->userId];
    }

    public function setItems($arItems = []) {
        $session = static::getSession();
        $this->checkItems();

        $arItems = is_array($arItems) ? $arItems : [];
        $session['BASKET'][$this->siteId][$this->userId] = $arItems;
    }

    public function addItem(array $arItem) {
        if (
            $arItem &&
            $arItem['ID']
        ) {
            $session = static::getSession();
            $this->checkItems();

            if (!isset($session['BASKET'][$this->siteId][$this->userId][$arItem['ID']])) {
                $session['BASKET'][$this->siteId][$this->userId][$arItem['ID']] = $arItem;
            }
        }
    }

    public function removeItem($itemId) {
        if ($itemId) {
            $session = static::getSession();
            $this->checkItems();

            unset($session['BASKET'][$this->siteId][$this->userId][$itemId]);
        }
    }

    public function updateItemQuantity($itemId, $quantity) {
        if ($itemId) {
            $session = static::getSession();
            $this->checkItems();
            $session['BASKET'][$this->siteId][$this->userId][$itemId]['QUANTITY'] = $quantity;
        }
    }

    public function clean() {
        $this->items = [];
    }

	public function actualizeItemsData(array &$resultItems, array $hashTable) 
	{
		$skuIBlockID = Solution::getFrontParametrValue('CATALOG_SKU_IBLOCK_ID');
		if (isset($hashTable[$skuIBlockID])) {
			$rsParentItems = \CIBlockElement::GetList(
				[], 
				[
					'IBLOCK_ID' => Solution::getFrontParametrValue('CATALOG_IBLOCK_ID'),
					'PROPERTY_LINK_SKU' => $hashTable[$skuIBlockID]
				], 
				false, false,
				['DETAIL_PAGE_URL', 'PROPERTY_LINK_SKU']
			);
			while ($item = $rsParentItems->GetNext()) {
				$resultItems[$item['PROPERTY_LINK_SKU_VALUE']]['DETAIL_PAGE_URL'] = $item['DETAIL_PAGE_URL'].'?oid='.$item['PROPERTY_LINK_SKU_VALUE'];
			}

			unset($hashTable[$skuIBlockID]);
		}

		foreach ($hashTable as $iblockID => $items) {
			$rsItems = \CIBlockElement::GetList([], ['ID' => $items, 'IBLOCK_ID' => $iblockID], false, false, ['DETAIL_PAGE_URL']);

			while ($item = $rsItems->GetNext()) {
				$resultItems[$item['ID']]['DETAIL_PAGE_URL'] = $item['DETAIL_PAGE_URL'];
			}
		}
	}
}