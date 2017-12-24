<?php
/**
 * Carts Guru
 *
 * @author    LINKT IT
 * @copyright Copyright (c) LINKT IT 2016
 * @license   Commercial license
 */

class CartsGuruCartrecoverModuleFrontController extends ModuleFrontController
{
    public function display()
    {
        //Get query values
        $id =  (int) Tools::getValue('cart_id');
        $token = Tools::getValue('cart_token');
        $discount = Tools::getValue('cart_discount');

        //Build new query
        $queryParams = $this->getOtherParams();
        $queryParams[] = 'recover_cart=' . $id;
        $queryParams[] = 'token_cart=' . $token;

        //We need remove other discount if new one must be applied.
        if (CartsGuruHelper::isCartRuleSupported() && $discount && $discount != '' && $token == md5(_COOKIE_KEY_.'recover_cart_'.$id)) {
            $queryParams[] = 'submitAddDiscount=1';
            $queryParams[] = 'discount_name=' . $discount;

            //Get cart object
            $cart = new Cart((int) $id);
            if (Validate::isLoadedObject($cart)) {
                $cartRuleId = (int)CartRule::getIdByCode($discount);
                $cartRules = $cart->getCartRules();

                if (count($cartRules)) {
                    foreach ($cartRules as $cartRule) {
                        //Don't remove the one we want add
                        if ($cartRule['id_cart_rule'] != $cartRuleId) {
                            $cart->removeCartRule($cartRule['id_cart_rule']);
                        }
                    }
                }
            }
        }

        $url = $this->context->link->getPageLink(
            Configuration::get('PS_ORDER_PROCESS_TYPE') ? 'order-opc' : 'order',
            true,
            null,
            implode('&', $queryParams)
        );
        
        //$url will look like
        //http://prestashop-1-6.carts.guru/index.php?controller=order&recover_cart=66&token_cart=af96f8f0b8845a351a15bbvvv4b8ba52557&submitAddDiscount=1&discount_name=62DQR
        Tools::redirect($url);
    }

    private function getOtherParams()
    {
        $queryParams = array();
        $excluded_keys = array('cart_id', 'cart_token', 'cart_discount', 'fc', 'module', 'controller');
        $url = parse_url($_SERVER['REQUEST_URI']);
        $query = (isset($url['query'])) ? $url['query'] : '';
        parse_str($query, $params);

        foreach ($params as $key => $value) {
            //Keep params except $excluded
            if (in_array($key, $excluded_keys)) {
                continue;
            }
            $queryParams[] = $key . '=' . $value;
        }

        return $queryParams;
    }
}
