<?php
/**
 * @class           ControlsConfigurationViewController
 * @author          wpXtreme team
 * @copyright       Copyright (C) 2013 wpXtreme Inc. All Rights Reserved.
 * @date            2013-07-15
 * @version         1.0.0
 *
 */
class ControlsConfigurationViewController extends WPDKViewController {

  /**
   * Create an instance of ControlsConfigurationViewController class
   *
   * @brief Construct
   *
   * @return ControlsConfigurationViewController
   */
  public function __construct()  {

    // Build the container, with header title
    parent::__construct( 'controls-view-controller-2', 'Show the main view of plugin with configuration loading and recording' );

    // Create a specialized WPDKView that embeds all WPDK graphic controls and configuration
    $controls_view = new ControlsConfigurationView( 'Graphic Controls View + configuration recording' );

    // Add this specialized WPDKView to this ViewController
    $this->view->addSubview( $controls_view );

  }

}

/**
 * This class is a custom WPDKView that embeds the display of all WPDK available graphic controls, and handling of related configuration
 *
 * @class           ControlsConfigurationView
 * @author          wpXtreme team
 * @copyright       Copyright (C) 2013 wpXtreme Inc. All Rights Reserved.
 * @date            2013-07-15
 * @version         1.0.0
 *
 */
class ControlsConfigurationView extends WPDKConfigurationView {

  /**
   * Create an instance of ControlsConfigurationView class
   *
   * @brief Construct
   *
   * @return ControlsConfigurationView
   */
  public function __construct() {

    /* Get configuration instance. */
//    $configuration = ControlsConfiguration::init();

    parent::__construct( 'General settings', __( 'General settings'), $configuration );

  }

  /**
   * This method generates all the available WPDK graphic controls, according to CLA: a WPDK internal syntax to create and display graphic controls in a view.
   *
   * @brief Construct
   *
   * @return array $fields - The array of graphic controls to show in this view
   */
  function fields() {

    $fields = array(

      'First area' => array(

        'This area contains only a input text box - Insert here a short description of this area, in terms of controls that it owns, or whatever you want',

        array(
          array(
            'type'  => WPDKUIControlType::TEXT,
            'name'  => 'input_text_box_1',
            'label' => 'A text box',
            'title' => 'I am a tooltip for control WPDKUIControlType::TEXT',
            'value' => ''
          ),
        ),

      ),

      'Second Area' => array(
        'This area contains a subset of other <em>WPDK graphic controls</em> - Insert here a short description of this area, in terms of controls that it owns, or whatever you want',
        array(
          array(
            'type'  => WPDKUIControlType::CHECKBOX,
            'name'  => 'checkbox_second_area',
            'id'  => 'checkbox_second_area',
            'label' => 'Check me',
            'value' => 'off'
          )
        ),
        array(
          array(
            'type'    => WPDKUIControlType::SELECT,
            'id'  => 'combo_second_area',
            'label'   => 'Select an item',
            'name'  => 'combo_second_area',
            'options' => array(
              'one'   => 'Rome',
              'two'   => 'Milan',
              'three' => 'Paris'
            ),
            'value'   => 'two'
          ),

        ),

        'This is an <strong>amazing swipe control!</strong>',

        array(
          array(
            'type'  => WPDKUIControlType::SWIPE,
            'id'    => 'swipe-second-area',
            'name'  => 'swipe-second-area',
            'label' => 'Swipe me',
            'title' => 'Swipe me to display an alert',
            'value' => ''
          )
        )
      )
    );

    return $fields;

  }

  // -----------------------------------------------------------------------------------------------------------------
  // Configuration actions
  // -----------------------------------------------------------------------------------------------------------------

  /**
   * Process and set you own post data
   *
   * @brief Update configuration
   *
   * @return bool TRUE to update the configuration and display the standard sucessfully message, or FALSE to avoid
   * the update configuration and do a custom display.
   */
  public function updatePostData() {

    /* Check the post data and return TRUE or FALSE. */
//    WPX__WPXGENESI_SHORT_PLUGIN_NAME_CAPITALIZE__Configuration::init()->settings->general->value_one = esc_attr( $_POST['value_one'] );
//    WPX__WPXGENESI_SHORT_PLUGIN_NAME_CAPITALIZE__Configuration::init()->settings->general->value_two = esc_attr( $_POST['value_two'] );

    return true;
  }

}

/**
 * @class           AboutViewController
 * @author          wpXtreme team
 * @copyright       Copyright (C) 2013 wpXtreme Inc. All Rights Reserved.
 * @date            2013-07-11
 * @version         1.0.0
 *
 */
class AboutViewController extends WPDKViewController {

  /**
   * Create an instance of AboutViewController class
   *
   * @brief Construct
   *
   * @return AboutViewController
   */
  public function __construct() {
    // Build the container, with default header
    parent::__construct( 'my-view-controller-2', 'WPDK Sample Plugin #1 - Output of second view controller' );
  }

  public function display() {
    // show default header of this view controller
    $this->viewHead->display();
    // show custom content
?>
    <h3>View Controller ID: <?php echo $this->id ?></h3>
    <div>This is a generic content of second view controller.</div>
<?php
  }

}
