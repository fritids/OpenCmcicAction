<?php
/**
 * This file is part of the OpenCmcicAction package.
 *
 * (c) Simon Leblanc <contact@leblanc-simon.eu>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace OpenCmcicAction\Exception;


/**
 * Recouvrement Exception class
 *
 * @package     OpenCmcicAction\Exception
 * @version     1.0.0
 * @license     http://opensource.org/licenses/MIT  MIT
 * @author      Simon Leblanc <contact@leblanc-simon.eu>
 */
class Recouvrement extends Response
{
    public function __construct($message = '', $code = 3, \Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}