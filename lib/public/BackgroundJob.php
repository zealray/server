<?php
declare(strict_types=1);
/**
 * @copyright Copyright (c) 2016, ownCloud, Inc.
 *
 * @author Bart Visscher <bartv@thisnet.nl>
 * @author Felix Moeller <mail@felixmoeller.de>
 * @author Jakob Sack <mail@jakobsack.de>
 * @author Jörn Friedrich Dreyer <jfd@butonic.de>
 * @author Morris Jobke <hey@morrisjobke.de>
 * @author Robin Appelman <robin@icewind.nl>
 *
 * @license AGPL-3.0
 *
 * This code is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License, version 3,
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License, version 3,
 * along with this program.  If not, see <http://www.gnu.org/licenses/>
 *
 */

namespace OCP;

/**
 * @since 4.5.0
 * @deprecated 14.0.0
 */
class BackgroundJob {
	/**
	 * @since 5.0.0
	 * @deprecated 14.0.0
	 */
	public static function getExecutionType() {
		return '';
	}

	/**
	 * @since 5.0.0
	 * @deprecated 14.0.0
	 */
	public static function setExecutionType($type) {
	}
}
