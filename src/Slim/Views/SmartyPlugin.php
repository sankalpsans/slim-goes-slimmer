<?php
/**
 * Slim - a micro PHP 5 framework
 *
 * @author      Josh Lockhart
 * @author      Andrew Smith
 * @link        http://www.slimframework.com
 * @copyright   2013 Josh Lockhart
 * @version     0.1.3
 * @package     SlimViews
 *
 * MIT LICENSE
 *
 * Permission is hereby granted, free of charge, to any person obtaining
 * a copy of this software and associated documentation files (the
 * "Software"), to deal in the Software without restriction, including
 * without limitation the rights to use, copy, modify, merge, publish,
 * distribute, sublicense, and/or sell copies of the Software, and to
 * permit persons to whom the Software is furnished to do so, subject to
 * the following conditions:
 *
 * The above copyright notice and this permission notice shall be
 * included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
 * MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
 * LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
 * OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
 * WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */
namespace Slim\Views;

/**
 * SmartyPlugin
 *
 * The SmartyPlugin is a custom View class that renders templates using the Smarty
 * template language (http://www.smarty.net).
 *
 * Two fields that you, the developer, will need to change are:
 * - parserDirectory
 * - parserCompileDirectory
 * - parserCacheDirectory
 *
 * @package Slim
 * @author  Rajendra Bera <http://rbera71@gmail.com>
 */
class SmartyPlugin extends \Slim\Views\Smarty {
        
    public function setTemplatesDirectory($directoryArray) {
        if(!is_array($directoryArray)) {
            $directoryArray = array('one' => $directoryArray);
        }
        foreach ($directoryArray as $directory) {
            $this->templatesDirectory[] = rtrim($directory, DIRECTORY_SEPARATOR);
        }
        
    }
}
