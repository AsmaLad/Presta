<?php /* Smarty version Smarty-3.1.19, created on 2017-12-24 19:27:49
         compiled from "C:\wamp\www\prestashop\modules\cartsguru\views\templates\hook\jQuery.tpl" */ ?>
<?php /*%%SmartyHeaderCode:84575a3ff1a5e61718-13226886%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4f28c3cca8964df9a51ab3cff14467b8cc207d3' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\modules\\cartsguru\\views\\templates\\hook\\jQuery.tpl',
      1 => 1514137142,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '84575a3ff1a5e61718-13226886',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a3ff1a5e849a2_39159413',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3ff1a5e849a2_39159413')) {function content_5a3ff1a5e849a2_39159413($_smarty_tpl) {?>
<script>
  window.cg_waitingJQuery = [];
  function cg_onJQueryReady(fn){
    if (window.jQuery){
      fn();
    }
    else {
      window.cg_waitingJQuery.push(fn);
    }
  }

  function cg_onJQueryLoaded(){
    while (window.cg_waitingJQuery.length > 0) {
      var fn = window.cg_waitingJQuery.shift();
      fn();
    }
  }

  if(window.jQuery) {
     cg_onJQueryLoaded();
  }
  else{
    var script = document.createElement('script');
    document.head.appendChild(script);
    script.type = 'text/javascript';
    script.src = "//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js";
    script.onload = cg_onJQueryLoaded;
  }
</script>
<?php }} ?>
