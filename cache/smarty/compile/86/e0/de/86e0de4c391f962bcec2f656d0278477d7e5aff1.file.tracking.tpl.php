<?php /* Smarty version Smarty-3.1.19, created on 2017-12-24 19:27:49
         compiled from "C:\wamp\www\prestashop\modules\cartsguru\views\templates\hook\tracking.tpl" */ ?>
<?php /*%%SmartyHeaderCode:325265a3ff1a5f05838-09832143%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86e0de4c391f962bcec2f656d0278477d7e5aff1' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\modules\\cartsguru\\views\\templates\\hook\\tracking.tpl',
      1 => 1514137142,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '325265a3ff1a5f05838-09832143',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'trackingUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a3ff1a605b9e1_35537415',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3ff1a605b9e1_35537415')) {function content_5a3ff1a605b9e1_35537415($_smarty_tpl) {?>

<script>
    cg_onJQueryReady(function (){
        jQuery(document).ready(function() {
            if (!Array.isArray) {
                Array.isArray = function(arg) {
                    return Object.prototype.toString.call(arg) === '[object Array]';
                };
            }

            var fieldNames = {
                email: ['guest_email', 'email'],
                homePhoneNumber: ['phone'],
                mobilePhoneNumber: ['phone_mobile'],
                firstname: ['firstname', 'customer_firstname'],
                lastname: ['lastname', 'customer_lastname'],
                countryCode: ['id_country']
            };

            var fields = {
                    email: [],
                    homePhoneNumber: [],
                    mobilePhoneNumber: [],
                    firstname: [],
                    lastname: [],
                    countryCode: []
            };

            function setupTracking () {
                for (var item in fieldNames) {
                    if (fieldNames.hasOwnProperty(item)) {
                        for (var i = 0; i < fieldNames[item].length; i++) {
                            //Get by name
                            var els = document.getElementsByName(fieldNames[item][i]);
                            for (var j = 0; j < els.length; j++) {
                                fields[item].push(els[j]);
                            }

                            //Get by ID
                            var el = document.getElementById(fieldNames[item][i]);
                            if (el &&  el.name !== fieldNames[item][i]){
                                fields[item].push(el);
                            }
                        }
                    }
                }
                if (fields.email.length > 0 && fields.firstname.length > 0) {
                    for (var item in fields) {
                        if (fields.hasOwnProperty(item)) {
                            for (var i = 0; i < fields[item].length; i++) {
                                jQuery(fields[item][i]).bind('blur', trackData);
                            }

                        }
                    }
                }
            }

            function collectData () {
                var data = {};
                for (var item in fields) {
                    if (fields.hasOwnProperty(item)) {
                        for (var i = 0; i < fields[item].length; i++) {
                            data[item] =  jQuery(fields[item][i]).val();
                            if (data[item] && data[item].trim){
                                data[item].trim();
                            }
                            if (data[item] !== ''){
                                break;
                            }
                        }
                    }
                }
                return data;
            }

            function trackData () {
                var data = collectData();
                if (data.email) {
                    jQuery.ajax({
                        url: "<?php echo strtr($_smarty_tpl->tpl_vars['trackingUrl']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
                        type: "POST",
                        data: data
                    });
                }
            }

            setupTracking();
        });
    });
</script>
<?php }} ?>
