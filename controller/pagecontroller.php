<?php

/**
 * ownCloud - Files Licencewizard app
 *
 * @author Valentin GRIMAUD
 *
 * @copyright 2013 Valentin GRIMAUD <valentin@grimaud.me>
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE
 * License as published by the Free Software Foundation; either
 * version 3 of the License, or any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU AFFERO GENERAL PUBLIC LICENSE for more details.
 *
 * You should have received a copy of the GNU Affero General Public
 * License along with this library.  If not, see <http://www.gnu.org/licenses/>.
 *
 */


namespace OCA\Files_Licencewizard\Controller;

use \OCA\AppFramework\Controller\Controller;
use \OCA\AppFramework\Core\API;
use \OCA\AppFramework\Http\Request;


class PageController extends Controller {


	public function __construct(API $api, Request $request){
		parent::__construct($api, $request);
	}


	/**
	 * ATTENTION!!!
	 * The following comment turns off security checks
	 * Please look up their meaning in the documentation!
	 *
	 * @IsAdminExemption
	 * @IsSubAdminExemption
	 * @CSRFExemption
	 */
	public function index() {
		return $this->render('main');
	}


}
