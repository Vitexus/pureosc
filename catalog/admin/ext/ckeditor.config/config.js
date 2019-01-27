/**
 * @license Copyright (c) 2003-2014, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.html or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function(config) {
    // Define changes to default configuration here.
    // For the complete reference:
    // http://docs.ckeditor.com/#!/api/CKEDITOR.config

    // The toolbar groups arrangement, optimized for two toolbar rows.
    config.toolbarGroups = [
        {name: 'basicstyles', groups: ['basicstyles', 'cleanup']},
        {name: 'editing', groups: ['find', 'selection']},
        {name: 'links'},
        {name: 'document', groups: ['mode', 'document', 'doctools']},
        {name: 'others'},
        {name: 'tools'},
        {name: 'styles'},

        
        {name: 'paragraph', groups: ['list', 'indent', 'blocks']}
    ];

    // Remove some buttons, provided by the standard plugins, which we don't
    // need to have in the Standard(s) toolbar.
    config.removeButtons = 'Underline,Subscript,Superscript';

    // Se the most common block elements.
    config.format_tags = 'p;h1;h2;h3;pre';

    // Make dialogs simpler.
//    config.removeDialogTabs = 'image:advanced;link:advanced';

    //stop translate utf8 chars to entities
    config.entities = false;

    //kcfinder
    config.filebrowserBrowseUrl = './ext/kcfinder/browse.php?opener=ckeditor&type=files';
    config.filebrowserImageBrowseUrl = './ext/kcfinder/browse.php?opener=ckeditor&type=images';
    config.filebrowserFlashBrowseUrl = './ext/kcfinder/browse.php?opener=ckeditor&type=flash';
    config.filebrowserUploadUrl = './ext/kcfinder/upload.php?opener=ckeditor&type=files';
    config.filebrowserImageUploadUrl = './ext/kcfinder/upload.php?opener=ckeditor&type=images';
    config.filebrowserFlashUploadUrl = './ext/kcfinder/upload.php?opener=ckeditor&type=flash';
    //allow custom css
    config.allowedContent = true;
config.format_tags = 'p;h1;h2;h3;pre;div';
};