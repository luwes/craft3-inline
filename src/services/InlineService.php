<?php
/**
 * Inline plugin for Craft CMS 3.x
 *
 * Inline the contents of a file in a twig template.
 *
 * @link      https://wesleyluyten.com
 * @copyright Copyright (c) 2017 Wesley Luyten
 */

namespace luwes\inline\services;

use luwes\inline\Inline;

use Craft;
use craft\base\Component;
use craft\helpers\Template;

/**
 * InlineService Service
 *
 * All of your plugin’s business logic should go in services, including saving data,
 * retrieving data, etc. They provide APIs that your controllers, template variables,
 * and other plugins can interact with.
 *
 * https://craftcms.com/docs/plugins/services
 *
 * @author    Wesley Luyten
 * @package   Inline
 * @since     1.0.0
 */
class InlineService extends Component
{
    // Public Methods
    // =========================================================================

    /**
     * This function can literally be anything you want, and you can have as many service
     * functions as you want
     *
     * From any other plugin file, call it like this:
     *
     *     Inline::$plugin->inlineService->exampleService()
     *
     * @return mixed
     */
    public function get($uri = null)
    {
        $file = @file_get_contents($uri);
        return Template::raw($file);
    }
}
