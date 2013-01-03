<?php
$styles = array('contacts.css');
$root = $_SERVER['DOCUMENT_ROOT'];
include($root . '/../AssetLoader.php');
AssetLoader::load(TEMPLATE, 'head');
AssetLoader::load(HELPER, 'contactHelpers');
?>

<body>
  <div id="bodyContainer">
    <?php AssetLoader::load(TEMPLATE, 'header'); ?>

    <div id="bodybox">
      <div id="content">
        <h1>Site Locations</h1>

        <?php
        $sites = array();
        $sites[] = array(
          'title' => "Cleveland's Westside",
          'name' => 'Dr. Isam A. Diab',
          'suffix' => 'M.D.',
          'description' => 'Conveniently located just minutes from Cleveland Hopkins International Airport.',
          'phone' => 4408260742,
          'fax' => 4408911576,
          'address' => "18660 Bagley Road\nPhase 11, Suite102B\nMiddleburg Heights, OH 44130",
        );
        $sites[] = array(
          'title' => "Cleveland's Eastside",
          'name' => 'Dr. Anne M. Carrol',
          'suffix' => 'M.D.',
          'description' => 'Located in beautiful Beachwood, Ohio with ample access to the best restaurants, hotels and shopping.',
          'phone' => 2165048888,
          'fax' => 2165048887,
          'address' => "23250 Chagrin Boulevard\nCommerce Park Five, Suite 201\nBeachwood, OH 44122",
        );
        AssetLoader::load(TEMPLATE, 'locationPanes');
        ?>
      </div>
    </div>

    <?php AssetLoader::load(TEMPLATE, 'footer'); ?>
  </div>
</body>
</html>
