<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2010 osCommerce

  Released under the GNU General Public License
*/

  if (!isset($process)) $process = false;
?>

  <div class="contentText">

<?php
  if (ACCOUNT_GENDER == 'true') {
    if (isset($gender)) {
      $male = ($gender == 'm') ? true : false;
      $female = ($gender == 'f') ? true : false;
    } else {
      $male = false;
      $female = false;
    }
?>

    <div class="form-group">
      <label class="control-label col-sm-3"><?php echo ENTRY_GENDER; ?></label>
      <div class="col-sm-9">
        <label class="radio-inline">
          <?php echo tep_draw_radio_field('gender', 'm', $male, 'required aria-required="true" aria-describedby="atGender"') . ' ' . MALE; ?>
        </label>
        <label class="radio-inline">
          <?php echo tep_draw_radio_field('gender', 'f', $female) . ' ' . FEMALE; ?>
        </label>
        <?php if (tep_not_null(ENTRY_GENDER_TEXT)) echo '<span id="atGender" class="help-block">' . ENTRY_GENDER_TEXT . '</span>'; ?>
      </div>
    </div>

<?php
  }
?>

    <div class="form-group">
      <label for="inputFirstName" class="control-label col-sm-3"><?php echo ENTRY_FIRST_NAME; ?></label>
      <div class="col-sm-9">
        <?php
        echo tep_draw_input_field('firstname', NULL, 'id="inputFirstName" aria-describedby="atFirstName" placeholder="' . ENTRY_FIRST_NAME . '"');
        if (tep_not_null(ENTRY_FIRST_NAME_TEXT)) echo '<span id="atFirstName" class="help-block">' . ENTRY_FIRST_NAME_TEXT . '</span>';
        ?>
      </div>
    </div>
    <div class="form-group">
      <label for="inputLastName" class="control-label col-sm-3"><?php echo ENTRY_LAST_NAME; ?></label>
      <div class="col-sm-9">
        <?php
        echo tep_draw_input_field('lastname', NULL, 'id="inputLastName" aria-describedby="atLastName" placeholder="' . ENTRY_LAST_NAME . '"');
        if (tep_not_null(ENTRY_LAST_NAME_TEXT)) echo '<span id="atLastName" class="help-block">' . ENTRY_LAST_NAME_TEXT . '</span>';
        ?>
      </div>
    </div>

<?php
  if (ACCOUNT_COMPANY == 'true') {
?>

    <div class="form-group">
      <label for="inputCompany" class="control-label col-sm-3"><?php echo ENTRY_COMPANY; ?></label>
      <div class="col-sm-9">
        <?php
        echo tep_draw_input_field('company', NULL, 'id="inputCompany" aria-describedby="atCompany" placeholder="' . ENTRY_COMPANY . '"');
        if (tep_not_null(ENTRY_COMPANY_TEXT)) echo '<span id="atCompany" class="help-block">' . ENTRY_COMPANY_TEXT . '</span>';
        ?>
      </div>

      <label for="inputVatnumber" class="control-label col-sm-3"><?php echo ENTRY_VAT_NUMBER; ?></label>
      <div class="col-sm-9">
        <?php
        echo tep_draw_input_field('vat_number', NULL, 'id="inputVatnumber" aria-describedby="atVatnumber" placeholder="' . ENTRY_VAT_NUMBER . '"');
        if (tep_not_null(ENTRY_VAT_NUMBER_TEXT_2)) echo '<span id="atVatnumber" class="help-block">' . ENTRY_VAT_NUMBER_TEXT_2 . '</span>';
        ?>
      </div>
      <label for="inputVatnumber" class="control-label col-sm-3"><?php echo ENTRY_COMPANY_NUMBER; ?></label>
      <div class="col-sm-9">
        <?php
        echo tep_draw_input_field('company_number', NULL, 'id="inputVatnumber" aria-describedby="atVatnumber" placeholder="' . ENTRY_COMPANY_NUMBER . '"');
        if (tep_not_null(ENTRY_COMPANY_NUMBER_TEXT_2)) echo '<span id="atVatnumber" class="help-block">' . ENTRY_COMPANY_NUMBER_TEXT_2 . '</span>';
        ?>
      </div>


    </div>

<?php
  }
?>

    <div class="form-group">
      <label for="inputStreet" class="control-label col-sm-3"><?php echo ENTRY_STREET_ADDRESS; ?></label>
      <div class="col-sm-9">
        <?php
        echo tep_draw_input_field('street_address', NULL, 'id="inputStreet" aria-describedby="atStreetAddress" placeholder="' . ENTRY_STREET_ADDRESS . '"');
        if (tep_not_null(ENTRY_STREET_ADDRESS_TEXT)) echo '<span id="atStreetAddress" class="help-block">' . ENTRY_STREET_ADDRESS_TEXT . '</span>';
        ?>
      </div>
    </div>

<?php
  if (ACCOUNT_SUBURB == 'true') {
?>

    <div class="form-group">
      <label for="inputSuburb" class="control-label col-sm-3"><?php echo ENTRY_SUBURB; ?></label>
      <div class="col-sm-9">
        <?php
        echo tep_draw_input_field('suburb', NULL, 'id="inputSuburb" aria-describedby="atSuburb" placeholder="' . ENTRY_SUBURB . '"');
        if (tep_not_null(ENTRY_SUBURB_TEXT)) echo '<span id="atSuburb" class="help-block">' . ENTRY_SUBURB_TEXT . '</span>';
        ?>
      </div>
    </div>

<?php
  }
?>

    <div class="form-group">
      <label for="inputCity" class="control-label col-sm-3"><?php echo ENTRY_CITY; ?></label>
      <div class="col-sm-9">
        <?php
        echo tep_draw_input_field('city', NULL, 'id="inputCity" aria-describedby="atCity" placeholder="' . ENTRY_CITY. '"');
        if (tep_not_null(ENTRY_CITY_TEXT)) echo '<span id="atCity" class="help-block">' . ENTRY_CITY_TEXT . '</span>';
        ?>
      </div>
    </div>
    <div class="form-group">
      <label for="inputZip" class="control-label col-sm-3"><?php echo ENTRY_POST_CODE; ?></label>
      <div class="col-sm-9">
        <?php
        echo tep_draw_input_field('postcode', NULL, 'id="inputZip" aria-describedby="atZip" placeholder="' . ENTRY_POST_CODE . '"');
        if (tep_not_null(ENTRY_POST_CODE_TEXT)) echo '<span id="atZip" class="help-block">' . ENTRY_POST_CODE_TEXT . '</span>';
        ?>
      </div>
    </div>

<?php
  if (ACCOUNT_STATE == 'true') {
?>

    <div class="form-group">
      <label for="inputState" class="control-label col-sm-3"><?php echo ENTRY_STATE; ?></label>
      <div class="col-sm-9">
        <?php
        if ($process == true) {
          if ($entry_state_has_zones == true) {
            $zones_array = array();
            $zones_query = tep_db_query("select zone_name from " . TABLE_ZONES . " where zone_country_id = '" . (int)$country . "' order by zone_name");
            while ($zones_values = tep_db_fetch_array($zones_query)) {
              $zones_array[] = array('id' => $zones_values['zone_name'], 'text' => $zones_values['zone_name']);
            }
            echo tep_draw_pull_down_menu('state', $zones_array, 0, 'id="inputState" aria-describedby="atState"');
          } else {
            echo tep_draw_input_field('state', NULL, 'id="inputState" aria-describedby="atState" placeholder="' . ENTRY_STATE . '"');
          }
        } else {
          echo tep_draw_input_field('state', NULL, 'id="inputState" aria-describedby="atState" placeholder="' . ENTRY_STATE . '"');
        }
        if (tep_not_null(ENTRY_STATE_TEXT)) echo '<span id="atState" class="help-block">' . ENTRY_STATE_TEXT . '</span>';
        ?>
      </div>
    </div>

<?php
  }
?>
    <div class="form-group">
      <label for="inputCountry" class="control-label col-sm-3"><?php echo ENTRY_COUNTRY; ?></label>
      <div class="col-sm-9">
        <?php
        echo tep_get_country_list('country', STORE_COUNTRY, 0, 'id="inputCountry" aria-describedby="atCountry"');
        if (tep_not_null(ENTRY_COUNTRY_TEXT)) echo '<span id="atCountry" class="help-block">' . ENTRY_COUNTRY_TEXT . '</span>';
        ?>
      </div>
    </div>
</div>
