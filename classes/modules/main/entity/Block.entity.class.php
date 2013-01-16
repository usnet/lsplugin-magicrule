<?php
/*-------------------------------------------------------
*
*   LiveStreet Engine Social Networking
*   Copyright © 2008 Mzhelskiy Maxim
*
*--------------------------------------------------------
*
*   Official site: www.livestreet.ru
*   Contact e-mail: rus.engine@gmail.com
*
*   GNU General Public License, version 2:
*   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*
---------------------------------------------------------
*/

/**
 * Сущность
 *
 */
class PluginMagicrule_ModuleMain_EntityBlock extends EntityORM {

	protected function beforeSave() {
		if ($this->_isNew()) {
			$this->setDateCreate(date("Y-m-d H:i:s"));
		}
		return true;
	}
}
?>