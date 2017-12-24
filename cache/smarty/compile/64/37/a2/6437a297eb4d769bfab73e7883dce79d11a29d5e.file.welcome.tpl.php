<?php /* Smarty version Smarty-3.1.19, created on 2017-12-24 18:39:15
         compiled from "C:\wamp\www\prestashop\modules\cartsguru\views\templates\admin\welcome.tpl" */ ?>
<?php /*%%SmartyHeaderCode:180615a3fe643ea88a0-47220394%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6437a297eb4d769bfab73e7883dce79d11a29d5e' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\modules\\cartsguru\\views\\templates\\admin\\welcome.tpl',
      1 => 1514137142,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '180615a3fe643ea88a0-47220394',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'activeView' => 0,
    'imagesUrl' => 0,
    'formUrl' => 0,
    'firstname' => 0,
    'lastname' => 0,
    'phoneNumber' => 0,
    'email' => 0,
    'countries' => 0,
    'id_country' => 0,
    'country' => 0,
    'countryName' => 0,
    'website' => 0,
    'siteid' => 0,
    'authkey' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a3fe6445ea5a6_05384736',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3fe6445ea5a6_05384736')) {function content_5a3fe6445ea5a6_05384736($_smarty_tpl) {?>

<div id="cartsguru-welcome" class="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['activeView']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
    <div class="header">
        <div class="inner-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <img class="logo" src="<?php echo str_replace("%2F", "/", rawurlencode($_smarty_tpl->tpl_vars['imagesUrl']->value));?>
logo_black.png" />
                    </div>
                </div>
                <div class="success-message text-center">
                    <img src="<?php echo str_replace("%2F", "/", rawurlencode($_smarty_tpl->tpl_vars['imagesUrl']->value));?>
success.png" />
                    <h1><?php echo smartyTranslate(array('s'=>'You successfuly installed Carts Guru','mod'=>'cartsguru'),$_smarty_tpl);?>
</h1>
                </div>
                <div class="no-selected-store-message text-center">
                    <h1><?php echo smartyTranslate(array('s'=>'The multistore option is enabled. If you want configure the module, please select store.','mod'=>'cartsguru'),$_smarty_tpl);?>
</h1>
                </div>
                <form id="cg-register-form" action="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['formUrl']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" method="post" class="view-try-it-form form form-big-padding">
                    <div class="form-title text-center"><?php echo smartyTranslate(array('s'=>'You are one step away from your free-trial','mod'=>'cartsguru'),$_smarty_tpl);?>
</div>
                    <button type="button" class="close-form-btn back-btn" onclick="cg_switchView()">
                        &lt; <?php echo smartyTranslate(array('s'=>'Back','mod'=>'cartsguru'),$_smarty_tpl);?>

                    </button>
                    <div class="row">
                        <div class="col-md-6">
                            <input class="input full-width" name="firstname" placeholder="<?php echo smartyTranslate(array('s'=>'First name','mod'=>'cartsguru'),$_smarty_tpl);?>
" required value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['firstname']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
                        </div>
                        <div class="col-md-6">
                            <input class="input full-width" name="lastname" placeholder="<?php echo smartyTranslate(array('s'=>'Last name','mod'=>'cartsguru'),$_smarty_tpl);?>
" required value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['lastname']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <input class="input full-width" name="phoneNumber" placeholder="<?php echo smartyTranslate(array('s'=>'Phone number','mod'=>'cartsguru'),$_smarty_tpl);?>
" required value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['phoneNumber']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
                        </div>
                        <div class="col-md-6">
                            <input class="input full-width" type="email" name="email" placeholder="<?php echo smartyTranslate(array('s'=>'Email adress','mod'=>'cartsguru'),$_smarty_tpl);?>
" required value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['email']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <select class="input full-width" name="country" required placeholder="<?php echo smartyTranslate(array('s'=>'Country','mod'=>'cartsguru'),$_smarty_tpl);?>
">
                                <?php  $_smarty_tpl->tpl_vars['countryName'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['countryName']->_loop = false;
 $_smarty_tpl->tpl_vars['id_country'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['countryName']->key => $_smarty_tpl->tpl_vars['countryName']->value) {
$_smarty_tpl->tpl_vars['countryName']->_loop = true;
 $_smarty_tpl->tpl_vars['id_country']->value = $_smarty_tpl->tpl_vars['countryName']->key;
?>
                                <option value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['id_country']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['id_country']->value==$_smarty_tpl->tpl_vars['country']->value) {?>selected="selected"<?php }?>><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['countryName']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <input class="input full-width" id="password" type="password" name="password" placeholder="<?php echo smartyTranslate(array('s'=>'Password','mod'=>'cartsguru'),$_smarty_tpl);?>
" required />
                            <div id="passwordErrorLabel" style="display: none; text-align: left;color: #e97171;margin-top: 10px;">
                              <span><?php echo smartyTranslate(array('s'=>'The password should contain from 7 to 64 symbols, at least one digit and at least one letter','mod'=>'cartsguru'),$_smarty_tpl);?>
</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <input class="input full-width"  name="website" placeholder="<?php echo smartyTranslate(array('s'=>'Website Url','mod'=>'cartsguru'),$_smarty_tpl);?>
" required value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['website']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <button class="btn-full"  name="submitSubscribe"><?php echo smartyTranslate(array('s'=>'Connect it now','mod'=>'cartsguru'),$_smarty_tpl);?>
</button>
                        </div>
                    </div>
                </form>
                <div class="row header-text">
                    <div class="col-lg-12">
                        <h1><?php echo smartyTranslate(array('s'=>'The best way to recover your abandoned carts','mod'=>'cartsguru'),$_smarty_tpl);?>
</h1>
                        <h2><?php echo smartyTranslate(array('s'=>'Carts Guru is the all-in-one solution to recover your abandoned carts and turn them into sales. Use Emails, SMS, Automatic Calls, Facebook & Instagram to convert more than 20% of your lost customers into sales.','mod'=>'cartsguru'),$_smarty_tpl);?>
 </h2>
                    </div>
                </div>
                <form action="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['formUrl']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" method="post" class="have-account-form form">
                    <div class="form-title"><?php echo smartyTranslate(array('s'=>'Plug Carts Guru into your PrestaShop store','mod'=>'cartsguru'),$_smarty_tpl);?>
</div>
                    <button type="button" class="close-form-btn" onclick="cg_switchView()">
                        X
                    </button>
                    <div class="row">
                        <div class="col-md-4">
                            <input class="input full-width" name="siteid" placeholder="<?php echo smartyTranslate(array('s'=>'Site ID','mod'=>'cartsguru'),$_smarty_tpl);?>
" required value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['siteid']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"/>
                        </div>
                        <div class="col-md-4">
                            <input class="input full-width" name="authkey" placeholder="<?php echo smartyTranslate(array('s'=>'Auth Key','mod'=>'cartsguru'),$_smarty_tpl);?>
" required value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['authkey']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"/>
                        </div>
                        <div class="col-md-4">
                            <button class="btn-full full-width" name="submitConnect"><?php echo smartyTranslate(array('s'=>'Connect it now','mod'=>'cartsguru'),$_smarty_tpl);?>
</button>
                        </div>
                    </div>
                    <div class="sub-text row">
                        <div class="col-sm-12">
                            <span><?php echo smartyTranslate(array('s'=>'Don t know this information?','mod'=>'cartsguru'),$_smarty_tpl);?>
</span>
                            <a class="link" target="_blank" href="https://my.carts.guru"><?php echo smartyTranslate(array('s'=>'Access it here','mod'=>'cartsguru'),$_smarty_tpl);?>
</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="triangle-slice"></div>
    <div class="footer">
        <div class="inner-section">
            <div class="container-fluid">

                 <div class="success-buttons">
                    <button class="btn-not-full" onclick="cg_switchView('view-have-account', 'view-success')"><?php echo smartyTranslate(array('s'=>'Edit my settings','mod'=>'cartsguru'),$_smarty_tpl);?>
</button>
                    <button class="btn-full" onclick="location.href='https://my.carts.guru?authid=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['siteid']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&authkey=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['authkey']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
'"><?php echo smartyTranslate(array('s'=>'Access to Carts Guru platform','mod'=>'cartsguru'),$_smarty_tpl);?>
</button>
                </div>

                <div class="try-buttons">
                    <div class="button-title"><?php echo smartyTranslate(array('s'=>'Enjoy all features during your 14-Days / $5,000 Revenue Free Trial','mod'=>'cartsguru'),$_smarty_tpl);?>
</div>
                    <button class="btn-not-full" onclick="cg_switchView('view-have-account')"><?php echo smartyTranslate(array('s'=>'I have an account','mod'=>'cartsguru'),$_smarty_tpl);?>
</button>
                    <form action="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['formUrl']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="form-inline" method="post">
                        <button class="btn-full" name="submitHasNoAccount"><?php echo smartyTranslate(array('s'=>'Try it now for free','mod'=>'cartsguru'),$_smarty_tpl);?>
</button>
                    </form>

                </div>

                <div class="row">
                    <div class="list">
                        <div class="col-lg-6">
                            <div class="list-item">
                                <img src="<?php echo str_replace("%2F", "/", rawurlencode($_smarty_tpl->tpl_vars['imagesUrl']->value));?>
checkmark.png" />
                                <span><?php echo smartyTranslate(array('s'=>'Performance-based pricing.','mod'=>'cartsguru'),$_smarty_tpl);?>
</span>
                                (<a class="link" target="_blank" href="https://carts.guru?platform=prestashop"><?php echo smartyTranslate(array('s'=>'see details here','mod'=>'cartsguru'),$_smarty_tpl);?>
</a>)
                            </div>
                            <div class="list-item">
                                <img src="<?php echo str_replace("%2F", "/", rawurlencode($_smarty_tpl->tpl_vars['imagesUrl']->value));?>
checkmark.png" />
                                <span><?php echo smartyTranslate(array('s'=>'Easy-to-use, incredibly intuitive solution','mod'=>'cartsguru'),$_smarty_tpl);?>
</span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="list-item">
                                <img src="<?php echo str_replace("%2F", "/", rawurlencode($_smarty_tpl->tpl_vars['imagesUrl']->value));?>
checkmark.png" />
                                <span><?php echo smartyTranslate(array('s'=>'Run unlimited campaigns, with unlimited actions','mod'=>'cartsguru'),$_smarty_tpl);?>
</span>
                            </div>
                            <div class="list-item">
                                <img src="<?php echo str_replace("%2F", "/", rawurlencode($_smarty_tpl->tpl_vars['imagesUrl']->value));?>
checkmark.png" />
                                <span><?php echo smartyTranslate(array('s'=>'Risk Free. No credit cards required. Cancel any time','mod'=>'cartsguru'),$_smarty_tpl);?>
</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 text-center text-bold features-title"><?php echo smartyTranslate(array('s'=>'Features','mod'=>'cartsguru'),$_smarty_tpl);?>
</div>
                </div>
                <div class="row">
                    <div clas="col-sm-12">
                        <div class="channel-block-list text-center">
                            <article class="channel-block">
                                <div class="channel-title"><?php echo smartyTranslate(array('s'=>'Email retargeting','mod'=>'cartsguru'),$_smarty_tpl);?>
</div>
                                <div class="channel-picture email"></div>
                                <div class="channel-link"><?php echo smartyTranslate(array('s'=>'Learn more','mod'=>'cartsguru'),$_smarty_tpl);?>
</div>
                                <div class="channel-info">
                                    <div class="channel-block-info-triangle"></div>
                                    <p class="no-margin"><?php echo smartyTranslate(array('s'=>'Customize campaigns with your brand. Launch them at the perfect moment with automation.','mod'=>'cartsguru'),$_smarty_tpl);?>
</p>
                                    <div class="col-xs-6 channel-ef-el">
                                        <div class="channel-ef">52%</div>
                                        <div class="channel-ef-t"><?php echo smartyTranslate(array('s'=>'Open rate','mod'=>'cartsguru'),$_smarty_tpl);?>
</div>
                                    </div>
                                    <div class="col-xs-6 channel-ef-el">
                                        <div class="channel-ef">14%</div>
                                        <div class="channel-ef-t"><?php echo smartyTranslate(array('s'=>'Click rate','mod'=>'cartsguru'),$_smarty_tpl);?>
</div>
                                    </div>
                                </div>
                            </article>
                            <article class="channel-block">
                                <div class="channel-title"><?php echo smartyTranslate(array('s'=>'SMS retargeting','mod'=>'cartsguru'),$_smarty_tpl);?>
</div>
                                <div class="channel-picture sms"></div>
                                <div class="channel-link"><?php echo smartyTranslate(array('s'=>'Learn more','mod'=>'cartsguru'),$_smarty_tpl);?>
</div>
                                <div class="channel-info">
                                    <div class="channel-block-info-triangle"></div>
                                    <p class="no-margin"><?php echo smartyTranslate(array('s'=>'With an outstanding 97% open rate. Add SMS Marketing to your mix.','mod'=>'cartsguru'),$_smarty_tpl);?>
</p>
                                    <div class="col-xs-6 channel-ef-el">
                                        <div class="channel-ef">20%</div>
                                        <div class="channel-ef-t"><?php echo smartyTranslate(array('s'=>'Conversion rate','mod'=>'cartsguru'),$_smarty_tpl);?>
</div>
                                    </div>
                                    <div class="col-xs-6 channel-ef-el">
                                        <div class="channel-ef">1%</div>
                                        <div class="channel-ef-t"><?php echo smartyTranslate(array('s'=>'Unsubscription','mod'=>'cartsguru'),$_smarty_tpl);?>
</div>
                                    </div>
                                </div>
                            </article>
                            <article class="channel-block">
                                <div class="channel-title"><?php echo smartyTranslate(array('s'=>'Automatic calls','mod'=>'cartsguru'),$_smarty_tpl);?>
</div>
                                <div class="channel-picture call"></div>
                                <div class="channel-link"><?php echo smartyTranslate(array('s'=>'Learn more','mod'=>'cartsguru'),$_smarty_tpl);?>
</div>
                                <div class="channel-info">
                                    <div class="channel-block-info-triangle"></div>
                                    <p class="no-margin"><?php echo smartyTranslate(array('s'=>'Save this for your most important products and customers. Contact your customer automatically.','mod'=>'cartsguru'),$_smarty_tpl);?>
</p>
                                    <div class="col-xs-6 channel-ef-el">
                                        <div class="channel-ef">45%</div>
                                        <div class="channel-ef-t"><?php echo smartyTranslate(array('s'=>'Conversion rate','mod'=>'cartsguru'),$_smarty_tpl);?>
</div>
                                    </div>
                                    <div class="col-xs-6 channel-ef-el">
                                        <div class="channel-ef">+20%</div>
                                        <div class="channel-ef-t"><?php echo smartyTranslate(array('s'=>'Average cart value','mod'=>'cartsguru'),$_smarty_tpl);?>
</div>
                                    </div>
                                </div>
                            </article>
                            <article class="channel-block">
                                <div class="channel-title"><?php echo smartyTranslate(array('s'=>'Facebook & Instagram','mod'=>'cartsguru'),$_smarty_tpl);?>
</div>
                                <div class="channel-picture fb"></div>
                                <div class="channel-link"><?php echo smartyTranslate(array('s'=>'Learn more','mod'=>'cartsguru'),$_smarty_tpl);?>
</div>
                                <div class="channel-info">
                                    <div class="channel-block-info-triangle"></div>
                                    <p class="no-margin"><?php echo smartyTranslate(array('s'=>'Reach your buyers where they are! Use dynamic retargeting to recover buyers with CPC ads.','mod'=>'cartsguru'),$_smarty_tpl);?>
</p>
                                    <div class="col-xs-6 channel-ef-el">
                                        <div class="channel-ef">+34%</div>
                                        <div class="channel-ef-t"><?php echo smartyTranslate(array('s'=>'Click through rate','mod'=>'cartsguru'),$_smarty_tpl);?>
</div>
                                    </div>
                                    <div class="col-xs-6 channel-ef-el">
                                        <div class="channel-ef">+70%</div>
                                        <div class="channel-ef-t"><?php echo smartyTranslate(array('s'=>'Prone to convert','mod'=>'cartsguru'),$_smarty_tpl);?>
</div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <a class="text-bold features-title" target="_blank" href="https://carts.guru?platform=prestashop">
                            <?php echo smartyTranslate(array('s'=>'Access Carts Guru website','mod'=>'cartsguru'),$_smarty_tpl);?>

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }} ?>
