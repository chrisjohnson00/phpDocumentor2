<?php
/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright 2010-2015 Mike van Riel<mike@phpdoc.org>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Application\Commands;

use phpDocumentor\Documentation;

final class Render
{
    /** @var Documentation */
    private $documentation;

    /** @var string */
    private $target;

    /** @var string[] */
    private $templates;

    /**
     * @param Documentation $documentation
     * @param string $target
     * @param string[] $templates array of templates to render.
     */
    public function __construct(Documentation $documentation, $target, array $templates)
    {
        $this->documentation = $documentation;
        $this->target    = $target;
        $this->templates = $templates;
    }

    /**
     * @return Documentation
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * @return string
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * @return string[]
     */
    public function getTemplates()
    {
        return $this->templates;
    }
}
