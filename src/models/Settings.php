<?php
/**
 * Brandfetch plugin for Craft CMS 3.x
 *
 * asdfasdf
 *
 * @link      https://milkshake.studio
 * @copyright Copyright (c) 2020 Milkshake Studio
 */

namespace milkshakestudio\brandfetch\models;

use milkshakestudio\brandfetch\Brandfetch;

use Craft;
use craft\base\Model;

/**
 * Brandfetch Settings Model
 *
 * This is a model used to define the plugin's settings.
 *
 * Models are containers for data. Just about every time information is passed
 * between services, controllers, and templates in Craft, it’s passed via a model.
 *
 * https://craftcms.com/docs/plugins/models
 *
 * @author    Milkshake Studio
 * @package   Brandfetch
 * @since     0.0.1
 */
class Settings extends Model
{
    // Public Properties
    // =========================================================================

    /**
     * Some field model attribute
     *
     * @var string
     */
    public $destination;
    public $folder;
    public $brandfetch_api_key;


    // Public Methods
    // =========================================================================
    
    /**
     * Returns the validation rules for attributes.
     *
     * Validation rules are used by [[validate()]] to check if attribute values are valid.
     * Child classes may override this method to declare different validation rules.
     *
     * More info: http://www.yiiframework.com/doc-2.0/guide-input-validation.html
     *
     * @return array
     */
    public function rules()
    {
        return [
            ['destination', 'required'],
            ['destination', 'string'],
            ['destination', 'default', 'value' => ''],
            ['brandfetch_api_key', 'required'],
            ['brandfetch_api_key', 'string'],
        ];
    }
}