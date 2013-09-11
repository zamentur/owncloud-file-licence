
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


describe('MainController', function() {

	var controller;

	// use the FilesLicencewizard container
	beforeEach(module('Files_Licencewizard'));

	beforeEach(inject(function ($controller, $rootScope) {
		controller = $controller('MainController', {
			$scope: $rootScope.$new()
		});
	}));


	it('should work', function () {
		expect(2+2).toBe(4);
	});


});
