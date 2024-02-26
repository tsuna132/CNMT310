<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> fa7de77a71165085b9122f93dcda41340e89292a
<?php

namespace MyNamespace;

$page = new Page("Page");

print $page->getTopSection();
print "<h1>Page created with Page class</h1>" . PHP_EOL;
print "\t<form method=\"POST\" action=\"action.php\">" . PHP_EOL;
print "\t\t<label for=\"firstName\">First Name:</label>" . PHP_EOL;
print "\t\t<input type=\"text\" name=\"firstName\"><br>" . PHP_EOL;

print "\t\t<label for=\"lastName\">Last Name:</label>" . PHP_EOL;
print "\t\t<input type=\"text\" name=\"lastName\"><br>" . PHP_EOL;

print "\t\t<label for=\"streetAddress\">Street Address:</label>" . PHP_EOL;
print "\t\t<input type=\"text\" name=\"streetAddress\"><br>" . PHP_EOL;

print "\t\t<label for=\"city\">City:</label>" . PHP_EOL;
print "\t\t<input type=\"text\" name=\"city\"><br>" . PHP_EOL;

print "\t\t<label for=\"state\">State:</label>" . PHP_EOL;
print "\t\t<input type=\"text\" name=\"state\"><br>" . PHP_EOL;

print "\t\t<label for=\"zip\">Zip Code:</label><br>" . PHP_EOL;
print "\t\t<input type=\"text\" name=\"zip\">" . PHP_EOL;

print "\t\t<input type=\"submit\" name=\"submit\">" . PHP_EOL;
print "\t</form>" . PHP_EOL;
print $page->getBottomSection();

class Page
{

  protected $_top;
  protected $_bottom;
  protected $_title;
  protected $_lang;
  protected $_headElements = array();
  protected $_bottomElements = array();
  protected $_headSection = "";
  protected $_bodyElement = "<body>";
  private $_topPrepared = false;
  private $_bottomPrepared = false;

  function __construct($title = "Default", $lang = "en")
  {
    $this->_title = $title;
    $this->_lang = $lang;
  }

  /**
   * function addHeadElement($include)
   *
   * Used to add things to the <head> section of an HTML doc.
   * For example, it is typical to add CSS <link> tags
   * and <script> tags in the <head> section.
   *
   * This must be called __before__ prepareTopSection and 
   * will typically be called once for each <link>, <meta", or <script>
   * that will appear in the <head> section.
   *
   * @param string $include  The element to include
   */

  function addHeadElement($include)
  {
    $this->_headElements[] = $include . PHP_EOL;
  } //end function addHeadElement

  function prepareTopSection()
  {
    $returnVal = "";
    $returnVal .= "<!doctype html>" . PHP_EOL;
    $returnVal .= "<html lang=\"" . $this->_lang . "\">" . PHP_EOL;
    $returnVal .= "<head>" . PHP_EOL;
    $returnVal .= "<title>";
    $returnVal .= $this->_title;
    $returnVal .= "</title>" . PHP_EOL;
    foreach ($this->_headElements as $elm) {
      $returnVal .= $elm;
    }
    $returnVal .= $this->_headSection;
    $returnVal .= "</head>" . PHP_EOL;
    $returnVal .= $this->_bodyElement . PHP_EOL;

    $this->_top = $returnVal;
    $this->setTopPrepared(true);
  } //end function prepareTopSection

  /**
   * function addBottomElement($include)
   *
   * Used to add things to the bottom section of an HTML doc.
   * For example, some libraries require JavaScript right 
   * before the closing </body> tag.
   *
   * This must be called __before__ prepareBottomSection and
   * will typically be called once for each <script>
   * that will appear in the section.
   *
   *
   * @param string $include  The element to include
   */

  function addBottomElement($include)
  {
    $this->_bottomElements[] = $include . PHP_EOL;
  } //end function addHeadElement

  function prepareBottomSection()
  {
    $returnVal = "";
    foreach ($this->_bottomElements as $elm) {
      $returnVal .= $elm;
    }
    $returnVal .= "</body>" . PHP_EOL;
    $returnVal .= "</html>" . PHP_EOL;

    $this->_bottom = $returnVal;
    $this->setBottomPrepared(true);
  } //end function prepareBottomSection

  /**
   * function setBodyElement($include)
   *
   * If you need to add an attribute to the body element
   * do that here. Bootstrap sometimes requires this.
   *
   * This must be called __before__ prepareBottomSection and
   * will typically be called once for each <script>
   * that will appear in the section.
   *
   *
   * @param string $attribute  The full attribute=value to include
   */

  function setBodyElement(string $attribute)
  {
    $this->_bodyElement = "<body " . $attribute . ">";
  }

  function getBodyElement()
  {
    return $this->_bodyElement;
  }

  function getTopSection()
  {
    if ($this->getTopPrepared() === false) {
      $this->prepareTopSection();
    }
    return $this->_top;
  }

  function getBottomSection()
  {
    if ($this->getBottomPrepared() === false) {
      $this->prepareBottomSection();
    }
    return $this->_bottom;
  }

  function getTopPrepared()
  {
    return $this->_topPrepared;
  }

  function setTopPrepared(bool $status)
  {
    $this->_topPreparePrepared = $status;
  }

  function getBottomPrepared()
  {
    return $this->_bottomPrepared;
  }

  function setBottomPrepared(bool $status)
  {
    $this->_bottomPrepared = $status;
  }
} // end class
<<<<<<< HEAD
=======
=======
<?php

namespace MyNamespace;

$page = new Page("Page");

print $page->getTopSection();
print "<h1>Page created with Page class</h1>" . PHP_EOL;
print "\t<form method=\"POST\" action=\"action.php\">" . PHP_EOL;
print "\t\t<label for=\"firstName\">First Name:</label>" . PHP_EOL;
print "\t\t<input type=\"text\" name=\"firstName\"><br>" . PHP_EOL;

print "\t\t<label for=\"lastName\">Last Name:</label>" . PHP_EOL;
print "\t\t<input type=\"text\" name=\"lastName\"><br>" . PHP_EOL;

print "\t\t<label for=\"streetAddress\">Street Address:</label>" . PHP_EOL;
print "\t\t<input type=\"text\" name=\"streetAddress\"><br>" . PHP_EOL;

print "\t\t<label for=\"city\">City:</label>" . PHP_EOL;
print "\t\t<input type=\"text\" name=\"city\"><br>" . PHP_EOL;

print "\t\t<label for=\"state\">State:</label>" . PHP_EOL;
print "\t\t<input type=\"text\" name=\"state\"><br>" . PHP_EOL;

print "\t\t<label for=\"zip\">Zip Code:</label><br>" . PHP_EOL;
print "\t\t<input type=\"text\" name=\"zip\">" . PHP_EOL;

print "\t\t<input type=\"submit\" name=\"submit\">" . PHP_EOL;
print "\t</form>" . PHP_EOL;
print $page->getBottomSection();

class Page
{

  protected $_top;
  protected $_bottom;
  protected $_title;
  protected $_lang;
  protected $_headElements = array();
  protected $_bottomElements = array();
  protected $_headSection = "";
  protected $_bodyElement = "<body>";
  private $_topPrepared = false;
  private $_bottomPrepared = false;

  function __construct($title = "Default", $lang = "en")
  {
    $this->_title = $title;
    $this->_lang = $lang;
  }

  /**
   * function addHeadElement($include)
   *
   * Used to add things to the <head> section of an HTML doc.
   * For example, it is typical to add CSS <link> tags
   * and <script> tags in the <head> section.
   *
   * This must be called __before__ prepareTopSection and 
   * will typically be called once for each <link>, <meta", or <script>
   * that will appear in the <head> section.
   *
   * @param string $include  The element to include
   */

  function addHeadElement($include)
  {
    $this->_headElements[] = $include . PHP_EOL;
  } //end function addHeadElement

  function prepareTopSection()
  {
    $returnVal = "";
    $returnVal .= "<!doctype html>" . PHP_EOL;
    $returnVal .= "<html lang=\"" . $this->_lang . "\">" . PHP_EOL;
    $returnVal .= "<head>" . PHP_EOL;
    $returnVal .= "<title>";
    $returnVal .= $this->_title;
    $returnVal .= "</title>" . PHP_EOL;
    foreach ($this->_headElements as $elm) {
      $returnVal .= $elm;
    }
    $returnVal .= $this->_headSection;
    $returnVal .= "</head>" . PHP_EOL;
    $returnVal .= $this->_bodyElement . PHP_EOL;

    $this->_top = $returnVal;
    $this->setTopPrepared(true);
  } //end function prepareTopSection

  /**
   * function addBottomElement($include)
   *
   * Used to add things to the bottom section of an HTML doc.
   * For example, some libraries require JavaScript right 
   * before the closing </body> tag.
   *
   * This must be called __before__ prepareBottomSection and
   * will typically be called once for each <script>
   * that will appear in the section.
   *
   *
   * @param string $include  The element to include
   */

  function addBottomElement($include)
  {
    $this->_bottomElements[] = $include . PHP_EOL;
  } //end function addHeadElement

  function prepareBottomSection()
  {
    $returnVal = "";
    foreach ($this->_bottomElements as $elm) {
      $returnVal .= $elm;
    }
    $returnVal .= "</body>" . PHP_EOL;
    $returnVal .= "</html>" . PHP_EOL;

    $this->_bottom = $returnVal;
    $this->setBottomPrepared(true);
  } //end function prepareBottomSection

  /**
   * function setBodyElement($include)
   *
   * If you need to add an attribute to the body element
   * do that here. Bootstrap sometimes requires this.
   *
   * This must be called __before__ prepareBottomSection and
   * will typically be called once for each <script>
   * that will appear in the section.
   *
   *
   * @param string $attribute  The full attribute=value to include
   */

  function setBodyElement(string $attribute)
  {
    $this->_bodyElement = "<body " . $attribute . ">";
  }

  function getBodyElement()
  {
    return $this->_bodyElement;
  }

  function getTopSection()
  {
    if ($this->getTopPrepared() === false) {
      $this->prepareTopSection();
    }
    return $this->_top;
  }

  function getBottomSection()
  {
    if ($this->getBottomPrepared() === false) {
      $this->prepareBottomSection();
    }
    return $this->_bottom;
  }

  function getTopPrepared()
  {
    return $this->_topPrepared;
  }

  function setTopPrepared(bool $status)
  {
    $this->_topPreparePrepared = $status;
  }

  function getBottomPrepared()
  {
    return $this->_bottomPrepared;
  }

  function setBottomPrepared(bool $status)
  {
    $this->_bottomPrepared = $status;
  }
} // end class
>>>>>>> 911b502eef771394ee1c730ec657a5e729e3d0be
>>>>>>> fa7de77a71165085b9122f93dcda41340e89292a
