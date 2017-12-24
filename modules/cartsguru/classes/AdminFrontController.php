<?php
/**
 * Carts Guru
 *
 * @author    LINKT IT
 * @copyright Copyright (c) LINKT IT 2016
 * @license   Commercial license
 */

class CartsGuruAdminFrontController
{
    public static function toggleFeatures($data)
    {
        if (!is_array($data)) {
            return;
        }

        // Enable facebook
        if ($data['facebook'] && $data['catalogId'] && $data['pixel']) {
            Configuration::updateValue('CARTSG_FEATURE_FB', true);
            Configuration::updateValue('CARTSG_FB_PIXEL', $data['pixel']);
            Configuration::updateValue('CARTSG_FB_CATALOGID', $data['catalogId']);

            $catalogUrl = version_compare(_PS_VERSION_, '1.5.0', '<') ?
                _PS_BASE_URL_.__PS_BASE_URI__ . 'modules/cartsguru/controllers14/catalog.php':
                Context::getContext()->link->getModuleLink('cartsguru', 'catalog');
            return array('catalogUrl' => $catalogUrl);
        } elseif ($data['facebook'] == false) {
            Configuration::updateValue('CARTSG_FEATURE_FB', false);
            return array('CARTSG_FEATURE_FB' => false);
        }
    }

    public static function getConfig()
    {
        $curl_version = null;
        try {
            $info = curl_version();
            $curl_version = $info["version"];
        } catch (Exception $e) {
            $curl_version  = 'No curl';
        }

        return array(
            'CARTSG_API_SUCCESS' => Configuration::get('CARTSG_API_SUCCESS'),
            'CARTSG_SITE_ID' => Configuration::get('CARTSG_SITE_ID'),
            'CARTSG_IMAGE_TYPE' => Configuration::get('CARTSG_IMAGE_TYPE'),
            'CARTSG_FEATURE_FB' => Configuration::get('CARTSG_FEATURE_FB'),
            'CARTSG_FB_PIXEL' => Configuration::get('CARTSG_FB_PIXEL'),
            'CARTSG_FB_CATALOGID' => Configuration::get('CARTSG_FB_CATALOGID'),
            'PLUGIN_VERSION'=> _CARTSGURU_VERSION_,
            'CURL_VERSION' => $curl_version
        );
    }
}
