<?php

//Reference your theme.
//change the last word in the line below to match your theme name
namespace Application\Theme\diabetic;

//reference the core theme class
use Concrete\Core\Page\Theme\Theme;

class PageTheme extends Theme {

  public function registerAssets() {

// Telling Concrete5 to include this jquery because this theme needs it.
//If you still have jquery in your <head> you need to remove it!
    $this->requireAsset('javascript', 'jquery');

    // Telling Concrete5 this theme provides bootstrap css and js files.
    $this->providesAsset('css', 'bootstrap/*');
    $this->providesAsset('javascript', 'bootstrap/*');


    // Telling Concrete5 to include these files because this theme needs it.
    $this->requireAsset('javascript-conditional', 'html5-shiv');
    $this->requireAsset('javascript-conditional', 'respond');
	}

//An example of a theme block class, telling concrete5 to make the class "nav navbar-nav"
//available for editable regions in our theme named "autonav"
  public function getThemeBlockClasses()
  {
      return array(
          'autonav' => array(
              'nav navbar-nav'
          )
      );
  }


}
