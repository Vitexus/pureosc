<?php
/*

  Alternative Administration System
  Version: 0.3
  Created By John Barounis, johnbarounis.com
  Website: http://www.alternative-administration-system.com

 */

defined('AAS') or die;
?>
<script type="text/javascript">
//translation needed by js files
    var translate = {

        button: {

            preview_changes: "<?php echo AAS_DIALOG_BUTTON_PREVIEW_CHANGES; ?>",
            submit_changes: "<?php echo AAS_DIALOG_BUTTON_SUBMIT_CHANGES; ?>",
            submit: "<?php echo AAS_DIALOG_BUTTON_SUBMIT; ?>",
            preview: "<?php echo AAS_DIALOG_BUTTON_PREVIEW; ?>",
            close: "<?php echo AAS_DIALOG_BUTTON_CLOSE; ?>",
            reload: "<?php echo AAS_DIALOG_BUTTON_RELOAD; ?>",
            add_new_attribute: "<?php echo AAS_DIALOG_BUTTON_ADD_NEW_ATTRIBUTE; ?>",
            add: "<?php echo AAS_DIALOG_BUTTON_ADD; ?>",
            yes: "<?php echo AAS_DIALOG_BUTTON_YES; ?>",
            no: "<?php echo AAS_DIALOG_BUTTON_NO ?>",
            apply: "<?php echo AAS_DIALOG_BUTTON_APPLY; ?>",
            export: "<?php echo AAS_DIALOG_BUTTON_EXPORT; ?>",
            save: "<?php echo AAS_DIALOG_BUTTON_SAVE; ?>",
            cancel: "<?php echo AAS_DIALOG_BUTTON_CANCEL; ?>",
            login: "<?php echo AAS_DIALOG_BUTTON_LOGIN; ?>",
            insert: "<?php echo AAS_DIALOG_BUTTON_INSERT; ?>",
            yes_delete_it: "<?php echo AAS_DIALOG_BUTTON_YES_DELETE_IT; ?>",
            delete: "<?php echo AAS_DIALOG_BUTTON_DELETE; ?>",
            enable: "<?php echo AAS_DIALOG_BUTTON_ENABLE; ?>",
            select: "<?php echo AAS_DIALOG_BUTTON_SELECT; ?>",
            save_changes_for_selected_tab: "<?php echo AAS_AAC_DIALOG_BUTTON_SAVE_CHANGES; ?>",
            update: "<?php echo AAS_DIALOG_BUTTON_UPDATE; ?>",
            print: "<?php echo AAS_DIALOG_BUTTON_PRINT; ?>",
            add_available_attributes: "<?php echo AAS_DIALOG_BUTTON_ADD_AVAILABLE_ATTRIBUTES; ?>"

        },

        status_successfully_changed: "<?php echo AAS_ACTION_STATUS_SUCCESSFULLY_CHANGED; ?>",
        status_not_changed: "<?php echo AAS_ACTION_STATUS_NOT_CHANGED; ?>",
        dialog_settings_sort_mustReloadWebPage: "<?php echo AAS_DIALOG_SETTINGS_YOU_MUST_RELOAD_THE_WEB_PAGE; ?>",
        dialog_settings_sort_reloadNow: "<?php echo AAS_DIALOG_SETTINGS_RELOAD_NOW; ?>",
        dialog_settings_somethingWentWrong: "<?php echo AAS_DIALOG_SETTINGS_SOMETHING_WENT_WRONG; ?>",
        dialog_attributes_successfully_submited_attributes_changes: "<?php echo AAS_DIALOG_ATTRIBUTES_SUCCESSFULLY_SUBMITED_ATTRIBUTES_CHANGES; ?>",
        dialog_attributes_there_was_an_error: "<?php echo AAS_DIALOG_ATTRIBUTES_THERE_WAS_AN_ERROR; ?>",
        dialog_delete_products_deleting: "<?php echo AAS_DIALOG_DELETE_PRODUCTS_DELETING; ?>",
        dialog_delete_products_successfully_deleted: "<?php echo AAS_DIALOG_DELETE_PRODUCTS_SUCCESSFULLY_DELETED; ?>",
        dialog_delete_products_something_went_wrong: "<?php echo AAS_DIALOG_DELETE_PRODUCTS_SOMETHING_WENT_WRONG; ?>",
        dialog_attributes_successfully_deleted_attribute: "<?php echo AAS_DIALOG_ATTRIBUTES_SUCCESSFULLY_DELETED_ATTRIBUTE; ?>",
        AAS_TEXT_ARE_YOU_SURE_TO_DELETE_SELECTED_ATTRIBUTES: "<?php echo AAS_TEXT_ARE_YOU_SURE_TO_DELETE_SELECTED_ATTRIBUTES; ?>",
        dialog_attributes_something_went_wrong: "<?php echo AAS_DIALOG_ATTRIBUTES_SOMETHING_WENT_WRONG; ?>",
        dialog_session_timeout_in_order: "<?php echo AAS_DIALOG_SESSION_TIMEOUT_IN_ORDER; ?>",
        dialog_session_timeout_something_went_wrong: "<?php echo AAS_DIALOG_SESSION_TIMEOUT_SOMETHING_WENT_WRONG_CONTACT; ?>",
        cannot_open_dialog: "<?php echo AAS_TEXT_CANNOT_OPEN_DIALOG; ?>",
        cannot_close_dialog: "<?php echo AAS_TEXT_CANNOT_CLOSE_DIALOG; ?>",
        cannot_move_selected_products: "<?php echo AAS_TEXT_CANNOT_MOVE_SELECTED_PRODUCTS; ?>",
        selected_products_moved_to_selected_category: "<?php echo AAS_TEXT_SELECTED_PRODUCTS_HAVE_BEEN_MOVED_TO_SELECTED_CATEGORY; ?>",
        selected_products_not_moved_to_selected_category: "<?php echo AAS_TEXT_SELECTED_PRODUCTS_HAVE_NOT_BEEN_MOVED_TO_SELECTED_CATEGORY; ?>",
        selected_products_copied_to_selected_category: "<?php echo AAS_TEXT_SELECTED_PRODUCTS_HAVE_BEEN_COPIED_TO_SELECTED_CATEGORY; ?>",
        selected_products_not_copied_to_selected_category: "<?php echo AAS_TEXT_SELECTED_PRODUCTS_HAVE_NOT_BEEN_COPIED_TO_SELECTED_CATEGORY; ?>",
        no_products_selected: "<?php echo AAS_TEXT_NO_PRODUCTS_SELECTED; ?>",
        attributes_have_been_deleted: "<?php echo AAS_TEXT_ATTRIBUTES_HAVE_BEEN_DELETED; ?>",
        attributes_have_been_copied: "<?php echo AAS_TEXT_ATTRIBUTES_HAVE_BEEN_COPIED; ?>",
        selected_product_has_not_attributes_to_copy_from: "<?php echo AAS_TEXT_SELECTED_PRODUCT_HAS_NOT_ATTRIBUTES_TO_COPY; ?>",

        AAS_TEXT_NO_PRODUCTS_FOUND_TO_DELETE_THEIR_ATTRIBUTES: "<?php echo AAS_TEXT_NO_PRODUCTS_FOUND_TO_DELETE_THEIR_ATTRIBUTES; ?>",

        not_found_products_to_copy_attributes: "<?php echo AAS_TEXT_NOT_FOUND_PRODUCTS_TO_COPY_ATTRIBUTES; ?>",
        attributes_have_not_been_copied: "<?php echo AAS_TEXT_ATTRIBUTES_HAVE_NOT_BEEN_COPIED; ?>",
        selected_products_successfully_added_to_temp_list: "<?php echo AAS_TEXT_SELECTED_PRODUCTS_SUCCESSFULLY_ADDED_TO_TEMP_LIST; ?>",
        wait_while_updating_values: "<?php echo AAS_TEXT_WAIT_WHILE_UPDATING_VALUES; ?>",
        successfully_updated_values: "<?php echo AAS_TEXT_SUCCESSFULLY_UPDATED_VALUES; ?>",
        values_have_not_been_updated: "<?php echo AAS_TEXT_VALUES_HAVE_NOT_BENN_UPDATED; ?>",
        successfully_changed_setting: "<?php echo AAS_TEXT_SUCCESSFULLY_CHANGED_SETTING; ?>",
        in_order_to_change_setting_reload_page: "<?php echo AAS_TEXT_IN_ORDER_TO_CHANGE_SETTING_RELOAD_PAGE; ?>",
        reload_now: "<?php echo AAS_TEXT_RELOAD_NOW; ?>",
        are_you_sure_to_delete_attribute: "<?php echo AAS_TEXT_ARE_YOU_SURE_TO_DELETE_ATTRIBUTE; ?>",
        successfully_changed_available_date: "<?php echo AAS_TEXT_SUCCESSFULLY_CHANGED_AVAILABLE_DATE; ?>",

        AAS_STATUS_ICON_SET_OUT_OF_STOCK: "<?php echo AAS_STATUS_ICON_SET_OUT_OF_STOCK; ?>",
        AAS_STATUS_ICON_SET_IN_STOCK: "<?php echo AAS_STATUS_ICON_SET_IN_STOCK; ?>",
        AAS_DIALOG_TITLE_PRODUCT_ATTRIBUTES: "<?php echo AAS_DIALOG_TITLE_PRODUCT_ATTRIBUTES; ?>",
        AAS_TEXT_CANNOT_FETCH_PRODUCTS_DESCRIPTION: "<?php echo AAS_TEXT_CANNOT_FETCH_PRODUCTS_DESCRIPTION; ?>",
        AAS_SPECIALS_DIALOG_TEXT_SOMETHING_WENT_WRONG_TRY_AGAIN: "<?php echo AAS_SPECIALS_DIALOG_TEXT_SOMETHING_WENT_WRONG_TRY_AGAIN; ?>",
        AAS_DIALOG_TEXT_WRONG_AMOUNT: "<?php echo AAS_DIALOG_TEXT_WRONG_AMOUNT; ?>",
        AAS_DIALOG_TEXT_APPLY_TO_SELECTION: "<?php echo AAS_DIALOG_TEXT_APPLY_TO_SELECTION; ?>",
        AAS_DIALOG_TEXT_SUCCESSFULLY_ALTERED_OPTION_PRICES: "<?php echo AAS_DIALOG_TEXT_SUCCESSFULLY_ALTERED_OPTION_PRICES; ?>",
        AAS_DIALOG_TEXT_COULD_NOT_ALTER_OPTION_PRICES: "<?php echo AAS_DIALOG_TEXT_COULD_NOT_ALTER_OPTION_PRICES; ?>",
        AAS_DIALOG_TEXT_OPTION_NAME_DONT_HAVE_OPTION_VALUES_ASSIGNED: "<?php echo AAS_DIALOG_TEXT_OPTION_NAME_DONT_HAVE_OPTION_VALUES_ASSIGNED; ?>",
        AAS_DIALOG_TEXT_SOMETHING_WENT_WRONG_TRY_AGAIN: "<?php echo AAS_DIALOG_TEXT_SOMETHING_WENT_WRONG_TRY_AGAIN; ?>",
        AAS_DIALOGS_PHP_SUCCESS_SUBMITED_SUCCESSFULLY: "<?php echo AAS_DIALOGS_PHP_SUCCESS_SUBMITED_SUCCESSFULLY; ?>",
        AAS_DIALOG_TEXT_LINKED_PRODUCT_SUCCESSFULLY_REMOVED: "<?php echo AAS_DIALOG_TEXT_LINKED_PRODUCT_SUCCESSFULLY_REMOVED; ?>",
        AAS_DIALOG_TEXT_LINKED_PRODUCT_NOT_REMOVED: "<?php echo AAS_DIALOG_TEXT_LINKED_PRODUCT_NOT_REMOVED; ?>",
        AAS_TEXT_SELECTED_PRODUCTS_LINKED_SUCCESSFULLY: "<?php echo AAS_TEXT_SELECTED_PRODUCTS_LINKED_SUCCESSFULLY; ?>",
        AAS_TEXT_SELECTED_PRODUCTS_LINKED_FAILED: "<?php echo AAS_TEXT_SELECTED_PRODUCTS_LINKED_FAILED; ?>",
        AAS_TEXT_SELECTED_PRODUCTS_LINKED_ABORTED_NO_PRODUCTS_TO_LINK: "<?php echo AAS_TEXT_SELECTED_PRODUCTS_LINKED_ABORTED_NO_PRODUCTS_TO_LINK; ?>",
        AAS_TEXT_IMPORT_BROWSER_NOT_SUPPORTED: "<?php echo AAS_TEXT_IMPORT_BROWSER_NOT_SUPPORTED; ?>",
        AAS_TEXT_IMPORT_TOO_MANY_FILES: "<?php echo AAS_TEXT_IMPORT_TOO_MANY_FILES; ?>",
        AAS_TEXT_IMPORT_FILE_TOO_LARGE: "<?php echo AAS_TEXT_IMPORT_FILE_TOO_LARGE; ?>",
        AAS_TEXT_IMPORT_FILETYPE_NOT_ALLOWED: "<?php echo AAS_TEXT_IMPORT_FILETYPE_NOT_ALLOWED; ?>",
        AAS_TEXT_IMPORT_FILE_EXTENSION_NOT_ALLOWED: "<?php echo AAS_TEXT_IMPORT_FILE_EXTENSION_NOT_ALLOWED; ?>",
        AAS_DIALOGS_TEXT_SUCCESSFULLY_SET_PRODUCTS_AVAILABLE_DATE_TO_NULL: "<?php echo AAS_DIALOGS_TEXT_SUCCESSFULLY_SET_PRODUCTS_AVAILABLE_DATE_TO_NULL; ?>",
        AAS_DIALOGS_TEXT_COULD_NOT_SET_PRODUCTS_AVAILBALE_TO_NULL: "<?php echo AAS_DIALOGS_TEXT_COULD_NOT_SET_PRODUCTS_AVAILBALE_TO_NULL; ?>",
        AAS_TEXT_NO_CATEGORIES_FOUND: "<?php echo AAS_TEXT_NO_CATEGORIES_FOUND; ?>",
        AAS_TEXT_NO_FOUND: "<?php echo AAS_TEXT_NO_FOUND; ?>",
        AAS_TEXT_NOT_LINKED: "<?php echo AAS_TEXT_NOT_LINKED; ?>",
        AAS_UPLOAD_MODULE_STATUS_INSTALLED_AND_UPDATED: "<?php echo AAS_UPLOAD_MODULE_STATUS_INSTALLED_AND_UPDATED; ?>",
        AAS_UPLOAD_MODULE_STATUS_INSTALLED_BUT_OUTDATED: "<?php echo AAS_UPLOAD_MODULE_STATUS_INSTALLED_BUT_OUTDATED; ?>",
        AAS_UPLOAD_MODULE_TEXT_TO_GET_NEWEST_VERSION: "<?php echo AAS_UPLOAD_MODULE_TEXT_TO_GET_NEWEST_VERSION; ?>",
        AAS_UPLOAD_MODULE_TEXT_HERE: "<?php echo AAS_UPLOAD_MODULE_TEXT_HERE; ?>",
        AAS_UPLOAD_MODULE_TEXT_CLICK: "<?php echo AAS_UPLOAD_MODULE_TEXT_CLICK; ?>",
        AAS_UPLOAD_MODULE_TEXT_TO_INSTALL_IT: "<?php echo AAS_UPLOAD_MODULE_TEXT_TO_INSTALL_IT; ?>",
        AAS_UPLOAD_MODULE_STATUS_NOT_INSTALLED: "<?php echo AAS_UPLOAD_MODULE_STATUS_NOT_INSTALLED; ?>",
        AAS_UPLOAD_MODULE_TEXT_WRONG_VERSION_INSTALLED: "<?php echo AAS_UPLOAD_MODULE_TEXT_WRONG_VERSION_INSTALLED; ?>",
        AAS_DIALOG_AAC_TEXT_UPDATED: "<?php echo AAS_DIALOG_AAC_TEXT_UPDATED; ?>",
        AAS_DIALOG_UPLOAD_MODULE_SUCCESS: "<?php echo AAS_DIALOG_UPLOAD_MODULE_SUCCESS; ?>",
        AAS_DIALOG_UPLOAD_MODULE_ERROR: "<?php echo AAS_DIALOG_UPLOAD_MODULE_ERROR; ?>",
        AAS_AAC_TEXT_ADMIN_OPTIONS_SAVED: "<?php echo AAS_AAC_TEXT_ADMIN_OPTIONS_SAVED; ?>",
        AAS_TEXT_SELECTED_PRODUCTS_LINKED_FAILED_NOCOLUMN_LINKED: "<?php echo AAS_TEXT_SELECTED_PRODUCTS_LINKED_FAILED_NOCOLUMN_LINKED; ?>",
        AAS_DIALOG_ATTRIBUTES_NO_ATTRIBUTES_FOUND: "<?php echo AAS_DIALOG_ATTRIBUTES_NO_ATTRIBUTES_FOUND; ?>",
        AAS_DIALOG_ATTRIBUTES_FOUND_OPTION_NAME_WITHOUT_OPTION_VALUES_ASSIGNED_TO_IT: "<?php echo AAS_DIALOG_ATTRIBUTES_FOUND_OPTION_NAME_WITHOUT_OPTION_VALUES_ASSIGNED_TO_IT; ?>",
        AAS_DIALOG_ATTRIBUTES_COULD_NOT_INSERT_OPTION_NAMES: "<?php echo AAS_DIALOG_ATTRIBUTES_COULD_NOT_INSERT_OPTION_NAMES; ?>",
        AAS_TEXT_EMPTY_FIELDS_FOUND: "<?php echo AAS_TEXT_EMPTY_FIELDS_FOUND; ?>",
        AAS_DIALOG_ATTRIBUTES_SUCCESSFULLY_INSERTED_OPTION_NAMES: "<?php echo AAS_DIALOG_ATTRIBUTES_SUCCESSFULLY_INSERTED_OPTION_NAMES; ?>",
        AAS_DIALOG_ATTRIBUTES_COULD_NOT_UPDATE_OPTION_NAMES: "<?php echo AAS_DIALOG_ATTRIBUTES_COULD_NOT_UPDATE_OPTION_NAMES; ?>",
        AAS_DIALOG_ATTRIBUTES_SUCCESSFULLY_CHANGED_OPTION_NAMES: "<?php echo AAS_DIALOG_ATTRIBUTES_SUCCESSFULLY_CHANGED_OPTION_NAMES; ?>",
        AAS_DIALOG_ATTRIBUTES_SUCCESSFULLY_DELETED_OPTION_NAME: "<?php echo AAS_DIALOG_ATTRIBUTES_SUCCESSFULLY_DELETED_OPTION_NAME; ?>",
        AAS_DIALOG_ATTRIBUTES_COULD_NOT_DELETE_OPTION_NAME: "<?php echo AAS_DIALOG_ATTRIBUTES_COULD_NOT_DELETE_OPTION_NAME; ?>",
        AAS_DIALOG_ATTRIBUTES_COULD_NOT_INSERT_OPTION_VALUES_NAMES: "<?php echo AAS_DIALOG_ATTRIBUTES_COULD_NOT_INSERT_OPTION_VALUES_NAMES; ?>",
        AAS_DIALOG_ATTRIBUTES_SUCCESSFULLY_INSERTED_OPTION_VALUES: "<?php echo AAS_DIALOG_ATTRIBUTES_SUCCESSFULLY_INSERTED_OPTION_VALUES; ?>",
        AAS_DIALOG_ATTRIBUTES_SUCCESSFULLY_DELETED_OPTION_VALUE_NAME: "<?php echo AAS_DIALOG_ATTRIBUTES_SUCCESSFULLY_DELETED_OPTION_VALUE_NAME; ?>",
        AAS_DIALOG_ATTRIBUTES_COULD_NOT_DELETE_OPTION_VALUE_NAME: "<?php echo AAS_DIALOG_ATTRIBUTES_COULD_NOT_DELETE_OPTION_VALUE_NAME; ?>",
        AAS_DIALOG_ATTRIBUTES_SUCCESSFULLY_CHANGED_OPTION_VALUES_NAMES: "<?php echo AAS_DIALOG_ATTRIBUTES_SUCCESSFULLY_CHANGED_OPTION_VALUES_NAMES; ?>",
        AAS_DIALOG_ATTRIBUTES_COULD_NOT_UPDATE_OPTION_VALUES_NAMES: "<?php echo AAS_DIALOG_ATTRIBUTES_COULD_NOT_UPDATE_OPTION_VALUES_NAMES; ?>",
        AAS_CALENDAR_ENTER_EVENT_TITLE: "<?php echo AAS_CALENDAR_ENTER_EVENT_TITLE; ?>",
        AAS_TEXT_ARE_YOU_SURE_TO_LOGOFF: "<?php echo AAS_TEXT_ARE_YOU_SURE_TO_LOGOFF; ?>",
        AAS_TEXT_ADD_LINKED_COLUMN_QUERY_SUCCESS: "<?php echo AAS_TEXT_ADD_LINKED_COLUMN_QUERY_SUCCESS; ?>",
        AAS_TEXT_ADD_LINKED_COLUMN_QUERY_FAIL: "<?php echo AAS_TEXT_ADD_LINKED_COLUMN_QUERY_FAIL; ?>",
        AAS_DIALOG_TITLE_DOWNLOADABLE_ATTRIBUTES_CONTENT_MANAGER_YOU_DID_NOT_SELECT_A_FILE: "<?php echo AAS_DIALOG_TITLE_DOWNLOADABLE_ATTRIBUTES_CONTENT_MANAGER_YOU_DID_NOT_SELECT_A_FILE; ?>",
        AAS_DIALOG_ATTRIBUTES_FOUND_DUPLICATE_ATTRIBUTES_ON_EXISTING_ENTRIES: "<?php echo AAS_DIALOG_ATTRIBUTES_FOUND_DUPLICATE_ATTRIBUTES_ON_EXISTING_ENTRIES; ?>",
        AAS_DIALOG_ATTRIBUTES_FOUND_DUPLICATE_ATTRIBUTES_ON_ABOUT_TO_ADD_ENTRIES: "<?php echo AAS_DIALOG_ATTRIBUTES_FOUND_DUPLICATE_ATTRIBUTES_ON_ABOUT_TO_ADD_ENTRIES; ?>",
        AAS_DIALOG_ATTRIBUTES_FOUND_DUPLICATE_ATTRIBUTES_BETWEEN_EXISTING_AND_ABOUT_TO_ADD_ENTRIES: "<?php echo AAS_DIALOG_ATTRIBUTES_FOUND_DUPLICATE_ATTRIBUTES_BETWEEN_EXISTING_AND_ABOUT_TO_ADD_ENTRIES; ?>",
        AAS_DIALOG_ATTRIBUTES_NO_ATTRIBUTES_FOUND_FOR_SMART_COPY: "<?php echo AAS_DIALOG_ATTRIBUTES_NO_ATTRIBUTES_FOUND_FOR_SMART_COPY; ?>",
        AAS_TEXT_AGO: "<?php echo AAS_TEXT_AGO; ?>",
        AAS_TEXT_A_MOMENT_AGO: "<?php echo AAS_TEXT_A_MOMENT_AGO; ?>",
        AAS_TEXT_YEAR: "<?php echo AAS_TEXT_YEAR; ?>",
        AAS_TEXT_YEARS: "<?php echo AAS_TEXT_YEAR; ?>",
        AAS_TEXT_MONTH: "<?php echo AAS_TEXT_MONTH; ?>",
        AAS_TEXT_MONTHS: "<?php echo AAS_TEXT_MONTHS; ?>",
        AAS_TEXT_WEEK: "<?php echo AAS_TEXT_WEEK; ?>",
        AAS_TEXT_WEEKS: "<?php echo AAS_TEXT_WEEKS; ?>",
        AAS_TEXT_DAY: "<?php echo AAS_TEXT_DAY; ?>",
        AAS_TEXT_DAYS: "<?php echo AAS_TEXT_DAYS; ?>",
        AAS_TEXT_HOUR: "<?php echo AAS_TEXT_HOUR; ?>",
        AAS_TEXT_HOURS: "<?php echo AAS_TEXT_HOURS; ?>",
        AAS_TEXT_MINUTE: "<?php echo AAS_TEXT_MINUTE; ?>",
        AAS_TEXT_MINUTES: "<?php echo AAS_TEXT_MINUTES; ?>",
        AAS_TEXT_SECOND: "<?php echo AAS_TEXT_SECOND; ?>",
        AAS_TEXT_SECONDS: "<?php echo AAS_TEXT_SECONDS; ?>",
        AAS_TEXT_SUBMITTED_WRONG_VALUE: "<?php echo AAS_TEXT_SUBMITTED_WRONG_VALUE; ?>",
        AAS_DIALOG_ATTRIBUTES_NO_SELECTED_ATTRIBUTES_FOUND: "<?php echo AAS_DIALOG_ATTRIBUTES_NO_SELECTED_ATTRIBUTES_FOUND; ?>",
        AAS_DIALOG_ATTRIBUTES_SMART_COPY_SUCCESS_ADD: "<?php echo AAS_DIALOG_ATTRIBUTES_SMART_COPY_SUCCESS_ADD; ?>",
        AAS_SETTINGS_RESET_COLUMNS_ORDER_SUCCESS: "<?php echo AAS_SETTINGS_RESET_COLUMNS_ORDER_SUCCESS; ?>",
        AAS_TEXT_AM_DIALOG_TITLE_EDITING_OPTION_NAME: "<?php echo AAS_TEXT_AM_DIALOG_TITLE_EDITING_OPTION_NAME; ?>",
        AAS_TEXT_AM_DIALOG_TITLE_DELETE_OPTION_NAME: "<?php echo AAS_TEXT_AM_DIALOG_TITLE_DELETE_OPTION_NAME; ?>",
        AAS_TEXT_AM_DIALOG_TITLE_DELETE_OPTION_VALUE: "<?php echo AAS_TEXT_AM_DIALOG_TITLE_DELETE_OPTION_VALUE; ?>"

    },
            fields = {//AKA columns
                products_price:<?php echo $fieldsArray['products_price']['visible']
        ? 1 : 0; ?>,
                products_price_gross:<?php echo $fieldsArray['products_price_gross']['visible']
        ? 1 : 0; ?>,
                products_status:<?php echo $fieldsArray['products_status']['visible']
        ? 1 : 0; ?>,
                attributes:<?php echo $fieldsArray['attributes']['visible'] ? 1
        : 0; ?>,
                sort_order:<?php echo isset($fieldsArray['sort_order']['visible'])
&& $fieldsArray['sort_order']['visible'] && !isset($_GET['search']) ? 1 : 0; ?>,
                special:<?php echo $fieldsArray['special']['visible'] ? 1 : 0; ?>,
                last_modified:<?php echo $fieldsArray['last_modified']['visible']
        ? 1 : 0; ?>,
            },
            config = {
                //Used by iframe when previewing editing product description
                product_info_path: '<?php echo tep_aas_link("front",
    "product_info.php", "products_id="); ?>',
                modules_check_link: 'http://www.alternative-administration-system.com/r/modules_list/',

                url: {
                    aas: '<?php echo FILENAME_AAS; ?>',
                    aas_link: '<?php echo tep_href_link(FILENAME_AAS); ?>',
                    ajax: 'ext/aas/plugins/core/ajax/aas.php',
                    actions: 'ext/aas/plugins/core/actions/aas.php',
                    attributes_actions: 'ext/aas/plugins/attributes_manager/aas.php',
                    reorder: 'ext/aas/plugins/reorder/aas.php',
                    plugins: 'ext/aas/plugins/',
                    modules: 'ext/aas_modules/'
                },

                ajaxToken: '<?php echo AAS_AJAX; ?>',
                sorting: '<?php echo $sorting; ?>',
                language_name: '<?php echo $languages_selected["name"]; ?>',
                language_code: '<?php echo $languages_selected["code"]; ?>',
                language_id: '<?php echo $languages_id; ?>',
                catalog_images: '<?php echo DIR_WS_CATALOG_IMAGES; ?>',
                dir_ws_images: '<?php echo DIR_WS_IMAGES; ?>',
                displayAlertMessages: '1',
                displaySuccessAlertMessages:<?php echo $show_success_alert_messages; ?>,
                displayErrorAlertMessages:<?php echo $show_error_alert_messages; ?>,
                cPathString: '<?php echo $cPathString; ?>',
                categoryId:<?php echo tep_not_null($categoryId) ? $categoryId : 0; ?>,
                page: '<?php echo $currentPage; ?>',
                entriesPerPage: '<?php echo $entriesPerPage; ?>',
                ascDesc: '<?php echo $ascDesc; ?>',
                productsDescriptionEditor: '<?php echo $defaults["productsDescriptionEditor"]; ?>',
                is_searching:<?php echo isset($search) && $search != "" ? 1 : 0 ?>,
                download_enabled:<?php echo DOWNLOAD_ENABLED == 'true' ? 1 : 0 ?>,
                colorEachTableRowDifferently:<?php echo $defaults['colorEachTableRowDifferently']; ?>,
                totalProducts:<?php echo $totalRows; ?>,
                small_mage_width:<?php echo tep_not_null(SMALL_IMAGE_WIDTH) ? SMALL_IMAGE_WIDTH
        : 100 ?>,
                small_image_height:<?php echo tep_not_null(SMALL_IMAGE_HEIGHT) ? SMALL_IMAGE_HEIGHT
        : 100; ?>,
                subcategory_image_width:<?php echo tep_not_null(SUBCATEGORY_IMAGE_WIDTH)
        ? SUBCATEGORY_IMAGE_WIDTH : 150; ?>,
                subcategory_image_height:<?php echo tep_not_null(SUBCATEGORY_IMAGE_HEIGHT)
        ? SUBCATEGORY_IMAGE_HEIGHT : 150; ?>,
                disableSortViaDragnDrop: <?php echo isset($aasAac['fields_disable_action']['sort_order'][$_SESSION['admin']['id']])
        ? 1 : 0 ?>,
                disabled_column_actions: {
                    sort_order:<?php echo (isset($aasAac['fields_disable_action']['sort_order'][$_SESSION['admin']['id']])
&& $aasAac['fields_disable_action']['sort_order'][$_SESSION['admin']['id']] ) ? 1
        : 0 ?>,
                    attributes:<?php echo (isset($aasAac['fields_disable_action']['attributes'][$_SESSION['admin']['id']])
&& $aasAac['fields_disable_action']['attributes'][$_SESSION['admin']['id']] ) ? 1
        : 0 ?>
                },

                defaults: {
                    enableSpecials:<?php echo $defaults['enableSpecials'] ? 1 : 0; ?>,
                    enableTableStickyHeaders:<?php echo $defaults['enableTableStickyHeaders']
        ? 1 : 0; ?>
                }
            }, atts_cache = {}, atts_cache_specific = {}, atts_option_values_cache = {}, atts_all_option_values = '', atts_add_new_attribute = {}, module_loaded = 0, modules_installed = {}, tbl_top = 0,
            editorHtmlContent = '', attsRowsBackgroundColorVariations = {};
</script>
