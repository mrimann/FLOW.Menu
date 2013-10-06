<?php
namespace KayStrobach\Menu\ViewHelpers\Widget;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Fluid".                 *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU Lesser General Public License, either version 3   *
 * of the License, or (at your option) any later version.                 *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;

class PaginateViewHelper extends \TYPO3\Fluid\Core\Widget\AbstractWidgetViewHelper {

	/**
	 * @Flow\Inject
	 * @var \KayStrobach\Menu\ViewHelpers\Controller\PaginateController
	 */
	protected $controller;

	/**
	 * Render this view helper
	 *
	 * @param string $menu
	 * @return string
	 */
	public function render($menu = 'Default') {
		$response = $this->initiateSubRequest();
		return $response->getContent();
	}
}

?>