<?php

/**
 * 2007-2018 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2018 PrestaShop SA
 * @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 *  International Registered Trademark & Property of PrestaShop SA
 */
class SampleBlocks {

    public function initData($base_url) {
        $content_block1 = '<div id="testimonial-section" class="testimonial-section">
<div class="container">
<div class="testimonial-wrapper">
<div class="row">
<div class="testimonial-inner">
<div class="owl-carousel owl-theme testimonial-slider">
<div class="testimonial-content">
<div class="inner-content">
<div class="testimonial-detail">
<div class="testimonial-img"><img src="img/cms/client.jpg" alt="testimonial1" /></div>
<div class="testimonial-desc">
<p>Lorem ipsum dolor sit amet,It is a long established fact that a reader long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
</div>
<div class="profile">
<h4>Wed Censtoriya</h4>
<p>- (Sr. Service Manager)</p>
</div>
</div>
</div>
</div>
<div class="testimonial-content">
<div class="inner-content">
<div class="testimonial-detail">
<div class="testimonial-img"><img src="img/cms/client.jpg" alt="testimonial1" /></div>
<div class="testimonial-desc">
<p>Lorem ipsum dolor sit amet,It is a long established fact that a reader long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
</div>
<div class="profile">
<h4>Wed Censtoriya</h4>
<p>- (Sr. Service Manager)</p>
</div>
</div>
</div>
</div>
<div class="testimonial-content">
<div class="inner-content">
<div class="testimonial-detail">
<div class="testimonial-img"><img src="img/cms/client.jpg" alt="testimonial1" /></div>
<div class="testimonial-desc">
<p>Lorem ipsum dolor sit amet,It is a long established fact that a reader long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
</div>
<div class="profile">
<h4>Wed Censtoriya</h4>
<p>- (Sr. Service Manager)</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
';
        $content_block2 = '<div class="ht-promotion-section">
<div class="container">
<div class="promotion-block-bottom">
<div class="promotion-wrapper left">
<div class="promotion-img-block">
<div class="top-block img-block"><a href="#"> <img src="img/cms/add-4.jpg" alt="add-4" /> </a></div>
</div>
</div>
<div class="promotion-wrapper right">
<div class="promotion-img-block">
<div class="top-block img-block"><a href="#"> <img src="img/cms/add-5.jpg" alt="add-5" /> </a></div>
</div>
</div>
</div>
</div>
</div>
';

                                $content_block3 = '<ul class="footer-payment-icon">
	<li><a href="#"><i class="fa fa-cc-visa" aria-hidden="true"></i></a></li>
	<li><a href="#"><i class="fa fa-cc-paypal" aria-hidden="true"></i></a></li>
	<li><a href="#"><i class="fa fa-cc-discover" aria-hidden="true"></i></a></li>
	<li><a href="#"><i class="fa fa-cc-amex" aria-hidden="true"></i></a></li>
	<li><a href="#"><i class="fa fa-cc-mastercard" aria-hidden="true"></i></a></li>
</ul>
';

        $displayHome = Hook::getIdByName('displayHome');
        $displayFooter = Hook::getIdByName('displayFooter');
        $displayNav1 = Hook::getIdByName('displayNav1');
        $displayHomeTop1 = Hook::getIdByName('displayHomeTop1');
        $displayHomeTop2 = Hook::getIdByName('displayHomeTop2');
        $displayHomeTop3 = Hook::getIdByName('displayHomeTop3');
        $displayHomeBottom1 = Hook::getIdByName('displayHomeBottom1');
        $displayHomeBottom2 = Hook::getIdByName('displayHomeBottom2');
        $displayHomeBottom3 = Hook::getIdByName('displayHomeBottom3');
        $displayFooterPaymentBlock = Hook::getIdByName('displayFooterPaymentBlock');
        $id_shop = Configuration::get('PS_SHOP_DEFAULT');

        /* install static Block */
        $result = true;
        $result &= Db::getInstance()->Execute('INSERT INTO `' . _DB_PREFIX_ . 'ht_staticblocks` (`id_ht_staticblocks`, `hook`, `active`) 
			VALUES
			(1, "displayHomeBottom2", 1),
                        (2, "displayHomeTop3", 1 ),
                        (3, "displayFooterPaymentBlock", 1)
			;');

        $result &= Db::getInstance()->Execute('INSERT INTO `' . _DB_PREFIX_ . 'ht_staticblocks_shop` (`id_ht_staticblocks`, `id_shop`,`active`) 
			VALUES 
			(1,' . $id_shop . ', 1),
			(2,' . $id_shop . ', 1),
			(3,' . $id_shop . ', 1)
			;');

        foreach (Language::getLanguages(false) as $lang) {
            $result &= Db::getInstance()->Execute('INSERT INTO `' . _DB_PREFIX_ . 'ht_staticblocks_lang` (`id_ht_staticblocks`, `id_shop`, `id_lang`, `title`, `content`) 
			VALUES 
			("1", "' . $id_shop . '","' . $lang['id_lang'] . '","Home Testimonial Block", \'' . $content_block1 . '\'),
			("2", "' . $id_shop . '","' . $lang['id_lang'] . '","Home Promotion Block bottom", \'' . $content_block2 . '\'),
                        ("3", "' . $id_shop . '","' . $lang['id_lang'] . '","Footer Payment Block", \'' . $content_block3 . '\')
                ;');
        }
        return $result;
    }

}
