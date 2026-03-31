<?php
/**	op-skeleton-2030:/asset/config/app.php
 *
 * @created    2019-02-20
 * @license    Apache-2.0
 * @package    op-skeleton-2030
 * @copyright  Tomoaki Nagahara
 */

/**	Declare strict
 *
 */
declare(strict_types=1);

/**	namespace
 *
 */
namespace OP;

/**	Return config array.
 *
 * @created   2019-12-12
 * @return    array        $config
 */
return [
	'title'     => 'uqunie',
	'copyright' => "Copyright (C) uqunie.com All Rights Reserved.",
	'app.phtml' =>  OP::isAdmin() ? true: false,
];
