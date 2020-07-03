<?php
/**
 * DokuWiki Plugin nestedsections (Renderer Component)
 *
 * @license GPL 2 http://www.gnu.org/licenses/gpl-2.0.html
 * @author  Rongcui Dong <rongcuid@outlook.com>
 */

// must be run within Dokuwiki
if (!defined('DOKU_INC')) {
    die();
}

class renderer_plugin_nestedsections extends Doku_Renderer_xhtml
{

    /**
     * Make available as XHTML replacement renderer
     
     * @param string $format requested format
     */
    public function canRender($format)
    {
        if ($format == 'xhtml') {
            return true;
        }
        return false;
    }

    // FIXME override any methods of Doku_Renderer_xhtml here
}

