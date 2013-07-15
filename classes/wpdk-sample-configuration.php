<?php
/**
 * Sample configuration class. In this class you define your tree configuration.
 *
 * @class              WPX__WPXGENESI_SHORT_PLUGIN_NAME_CAPITALIZE__Configuration
 * @author             __WPXGENESI_PLUGIN_AUTHOR__
 * @copyright          __WPXGENESI_PLUGIN_COPYRIGHT__
 * @date               __WPXGENESI_TIME_NOW__
 * @version            0.1.2
 */

class WPX__WPXGENESI_SHORT_PLUGIN_NAME_CAPITALIZE__Configuration extends WPDKConfiguration {

    /**
     * The configuration name used on database
     *
     * @brief Configuration name
     *
     * @var string
     */
    const CONFIGURATION_NAME = 'wpx-__WPXGENESI_SHORT_PLUGIN_NAME_LOWERCASE__-configuration';

    /**
     * Your own configuration property
     *
     * @brief Configuration version
     *
     * @var string $version
     */
    public $version = WPX__WPXGENESI_SHORT_PLUGIN_NAME_UPPERCASE___VERSION;

    /**
     * This is the first entry pointer to your own tree configuration
     *
     * @brief Settings
     *
     * @var WPX__WPXGENESI_SHORT_PLUGIN_NAME_CAPITALIZE__SettingsConfiguration $settings
     */
    public $settings;

    /**
     * Return an instance of WPX__WPXGENESI_SHORT_PLUGIN_NAME_CAPITALIZE__Configuration class from the database or onfly.
     *
     * @brief Get the configuration
     *
     * @return WPX__WPXGENESI_SHORT_PLUGIN_NAME_CAPITALIZE__Configuration
     */
    public static function init() {
        $instance = parent::init( self::CONFIGURATION_NAME, __CLASS__ );

        /* Or if the obfly version is different from stored version. */
        if( version_compare( $instance->version, WPX__WPXGENESI_SHORT_PLUGIN_NAME_UPPERCASE___VERSION ) < 0 ) {
            /* For i.e. you would like update the version property. */
            $instance->version = WPX__WPXGENESI_SHORT_PLUGIN_NAME_UPPERCASE___VERSION;
            $instance->update();
        }

        return $instance;
    }

    /**
     * Create an instance of WPX__WPXGENESI_SHORT_PLUGIN_NAME_CAPITALIZE__Configuration class
     *
     * @brief Construct
     *
     * @return WPX__WPXGENESI_SHORT_PLUGIN_NAME_CAPITALIZE__Configuration
     */
    public function __construct() {
        parent::__construct( self::CONFIGURATION_NAME );

        /* Init my tree settings. */
        $this->settings = new WPX__WPXGENESI_SHORT_PLUGIN_NAME_CAPITALIZE__SettingsConfiguration();
    }

}

/**
 * @class WPX__WPXGENESI_SHORT_PLUGIN_NAME_CAPITALIZE__SettingsConfiguration
 *
 * This is a sample of config branch. From main config class you can add a lot of sub class for each section in your
 * configuration tree.
 *
 */
class WPX__WPXGENESI_SHORT_PLUGIN_NAME_CAPITALIZE__SettingsConfiguration {

    /**
     * Pointer to general branch
     *
     * @brief General branch
     *
     * @var WPX__WPXGENESI_SHORT_PLUGIN_NAME_CAPITALIZE__SettingsGeneralConfiguration $general
     */
    public $general;

    /**
     * Pointer to second items branch
     *
     * @brief Second items branch
     *
     * @var WPX__WPXGENESI_SHORT_PLUGIN_NAME_CAPITALIZE__SettingsSecondItemConfiguration $second_items
     */
    public $second_items;

    /**
     * Create an instance of WPX__WPXGENESI_SHORT_PLUGIN_NAME_CAPITALIZE__SettingsConfiguration class
     *
     * @brief Construct
     *
     * @return WPX__WPXGENESI_SHORT_PLUGIN_NAME_CAPITALIZE__SettingsConfiguration
     */
    public function __construct() {
        $this->general      = new WPX__WPXGENESI_SHORT_PLUGIN_NAME_CAPITALIZE__SettingsGeneralConfiguration;
        $this->second_items = new WPX__WPXGENESI_SHORT_PLUGIN_NAME_CAPITALIZE__SettingsSecondItemConfiguration;
    }
}

/**
 * The branch general. Insert here all properties/configuration for general settings
 *
 * @class WPX__WPXGENESI_SHORT_PLUGIN_NAME_CAPITALIZE__SettingsGeneralConfiguration
 *
 */
class WPX__WPXGENESI_SHORT_PLUGIN_NAME_CAPITALIZE__SettingsGeneralConfiguration {

    /* Config properties. */
    public $value_one;
    public $value_two;

    /**
     * Create an instance of WPX__WPXGENESI_SHORT_PLUGIN_NAME_CAPITALIZE__SettingsGeneralConfiguration class.
     * As each branch, the constructor set the default values
     *
     * @brief Construct
     *
     * @return WPX__WPXGENESI_SHORT_PLUGIN_NAME_CAPITALIZE__SettingsGeneralConfiguration
     */
    public function __construct() {
        $this->resetToDefault();
    }

    /**
     * Optional. You can implement this method to reset to default value this sub configuration branch
     *
     * @breif Reset to default values
     */
    public function resetToDefault() {
        $this->value_one = 'Default value one';
        $this->value_two = 'Default value two';
    }
}

/**
 * Second items branch sample
 *
 * @class WPX__WPXGENESI_SHORT_PLUGIN_NAME_CAPITALIZE__SettingsSecondItemConfiguration
 *
 */
class WPX__WPXGENESI_SHORT_PLUGIN_NAME_CAPITALIZE__SettingsSecondItemConfiguration {

    /* Config properties. */
    public $value_one;
    public $value_two;

    /**
     * Create an instance of WPX__WPXGENESI_SHORT_PLUGIN_NAME_CAPITALIZE__SettingsSecondItemConfiguration class.
     * As each branch, the constructor set the default values
     *
     * @brief Construct
     *
     * @return WPX__WPXGENESI_SHORT_PLUGIN_NAME_CAPITALIZE__SettingsSecondItemConfiguration
     */
    public function __construct() {
        $this->resetToDefault();
    }

    /**
     * Optional. You can implement this method to reset to default value this sub configuration branch
     *
     * @breif Reset to default values
     */
    public function resetToDefault() {
        $this->value_one = 'Default value one';
        $this->value_two = 'Default value two';
    }
}
