<?php /* Smarty version Smarty-3.1.19, created on 2017-12-24 18:37:30
         compiled from "C:\wamp\www\prestashop\modules\smartsupp\views\templates\admin\connect_account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:71605a3fe5da8a6227-54962801%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f036798cfa04c9ca2c2307a0c27b1388dd55e81a' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\modules\\smartsupp\\views\\templates\\admin\\connect_account.tpl',
      1 => 1514137030,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '71605a3fe5da8a6227-54962801',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a3fe5da9b3ae2_75164104',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3fe5da9b3ae2_75164104')) {function content_5a3fe5da9b3ae2_75164104($_smarty_tpl) {?>

<div id="smartsupp_connect_account" class="panel">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
			<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true);?>
views/img/smartsupp_logo.png" alt="Smartsupp" />
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <button id="create_account_btn2" class="btn btn-default pull-right"><?php echo smartyTranslate(array('s'=>'Create free account','mod'=>'smartsupp'),$_smarty_tpl);?>
</button>
		</div>
	</div>
	<hr/>
        <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center">
                        <p>
                                <strong class="heading"><?php echo smartyTranslate(array('s'=>'Connect existing account','mod'=>'smartsupp'),$_smarty_tpl);?>
</strong>
                        </p>
                        <p>
                                <div class="input-group">
                                    <span class="input-group-addon"> <?php echo smartyTranslate(array('s'=>'E-mail','mod'=>'smartsupp'),$_smarty_tpl);?>
</span>
                                    <input id="SMARTSUPP_EMAIL" type="text" size="30" value="" name="SMARTSUPP_EMAIL">
                                </div>
                                <br/>
                                <div class="input-group">
                                    <span class="input-group-addon"> <?php echo smartyTranslate(array('s'=>'Password','mod'=>'smartsupp'),$_smarty_tpl);?>
 </span>
                                    <input id="SMARTSUPP_PASSWORD" type="password" size="30" value="" name="SMARTSUPP_PASSWORD">
                                </div>                                        
                        </p>
                        <div class="center-block">
                                <button id="connect_existing_account_do" class="btn btn-primary btn-lg"><?php echo smartyTranslate(array('s'=>'Connect','mod'=>'smartsupp'),$_smarty_tpl);?>
</button>
                        </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
        </div>
        <br/>
	<hr/>
        <div class="row text-center">
                <p>
                        <strong class="heading"><?php echo smartyTranslate(array('s'=>'Trusted by more that 55 000 companies','mod'=>'smartsupp'),$_smarty_tpl);?>
</strong>
                </p>
                <div class="customers">
                        <a>
                                <img alt="ŠKODA AUTO" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true);?>
views/img/skoda.png">
                        </a>
                        <a>
                                <img alt="Gekko Computer" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true);?>
views/img/gekko_computer.png">
                        </a>
                        <a>
                                <img alt="Lememo" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true);?>
views/img/lememo.png">
                        </a>
                        <a>
                                <img alt="Vinoselección" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true);?>
views/img/vinoseleccion.png">
                        </a>
                        <a>
                                <img alt="Conrad" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true);?>
views/img/conrad.png">
                        </a>
                </div>
        </div>                
</div>
<?php }} ?>
