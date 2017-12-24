<?php /* Smarty version Smarty-3.1.19, created on 2017-12-24 18:37:30
         compiled from "C:\wamp\www\prestashop\modules\smartsupp\views\templates\admin\configuration.tpl" */ ?>
<?php /*%%SmartyHeaderCode:104495a3fe5dabda7e1-55395353%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f56014f0be7c349a8e6b624c95e2f53d730187f' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\modules\\smartsupp\\views\\templates\\admin\\configuration.tpl',
      1 => 1514137030,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '104495a3fe5dabda7e1-55395353',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'smartsupp_email' => 0,
    'module_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a3fe5dac9dd11_18421128',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3fe5dac9dd11_18421128')) {function content_5a3fe5dac9dd11_18421128($_smarty_tpl) {?>

<div id="smartsupp_configuration" class="panel">
	<div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <p class="email none"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['smartsupp_email']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
                </div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center">
			<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true);?>
views/img/smartsupp_logo.png" alt="Smartsupp" />
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <button id="deactivate_chat_do" class="btn btn-default pull-right"><?php echo smartyTranslate(array('s'=>'Deactivate chat','mod'=>'smartsupp'),$_smarty_tpl);?>
</button>
		</div>
	</div>
        <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4 text-center">
                    <p class="status-information">
                            <?php echo smartyTranslate(array('s'=>'Smartsupp chat is now visible on your website.','mod'=>'smartsupp'),$_smarty_tpl);?>

                            <br/>
                            <?php echo smartyTranslate(array('s'=>'Go to Smartsupp to start chatting with visitors, customize chat box design and access all features.','mod'=>'smartsupp'),$_smarty_tpl);?>

                    </p>
                    <div class="center-block">
                            <form action="https://dashboard.smartsupp.com" target="_blank">
                                    <input type="hidden" name="utm_source" value="Prestashop">
                                    <input type="hidden" name="utm_medium" value="integration">
                                    <input type="hidden" name="utm_campaign" value="link">
                                    <input type="submit" class="btn btn-primary btn-lg" value="<?php echo smartyTranslate(array('s'=>'Go to Smartsupp','mod'=>'smartsupp'),$_smarty_tpl);?>
">
                            </form>                        
                    </div>
                    <p style="padding-top: 5px;">
                            (<?php echo smartyTranslate(array('s'=>'This will open a new browser tab.','mod'=>'smartsupp'),$_smarty_tpl);?>
)
                    </p>
                </div>
                <div class="col-lg-4"></div>
        </div>
 </div><?php }} ?>
