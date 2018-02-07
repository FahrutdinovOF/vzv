<?
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\ModuleManager;
use Bitrix\Main\Config\Option;
use Bitrix\Main\EventManager;
use Bitrix\Main\Application;
use Bitrix\Main\IO\Directory;

Loc::loadMessages(__FILE__);

class vzv_block extends CModule{

	public function __construct(){

		if(file_exists(__DIR__."/version.php")){

			$arModuleVersion = array();

			include_once(__DIR__."/version.php");

			$this->MODULE_ID 		   = str_replace("_", ".", get_class($this));
			$this->MODULE_VERSION 	   = $arModuleVersion["VERSION"];
			$this->MODULE_VERSION_DATE = $arModuleVersion["VERSION_DATE"];
			$this->MODULE_NAME 		   = Loc::getMessage("MODULE_NAME");
			$this->MODULE_DESCRIPTION  = Loc::getMessage("MODULE_DESCRIPTION");
		}

		return false;
	}

	public function DoInstall(){

		global $APPLICATION;
		
		if (!IsModuleInstalled($this->MODULE_ID)) {
			//$this->InstallDB();
			//$this->InstallEvents();
			//$this->InstallFiles();

			ModuleManager::registerModule($this->MODULE_ID);
			echo CAdminMessage::ShowNote(GetMessage("INSTALL_COMPLETE"));
		}
	}
	
	function InstallDB() {
		$GLOBALS['DB']->RunSQLBatch(__DIR__.'/db/'.$GLOBALS['DBType'].'/install.sql');
		return true;
	}
	
	function UnInstallDB() {
		$GLOBALS['DB']->RunSQLBatch(__DIR__.'/db/'.$GLOBALS['DBType'].'/uninstall.sql');
		return true;
	}

	public function DoUninstall(){

		global $APPLICATION;

		//$this->UnInstallFiles();
		//$this->UnInstallDB();
		//$this->UnInstallEvents();

		ModuleManager::unRegisterModule($this->MODULE_ID);
	}
}