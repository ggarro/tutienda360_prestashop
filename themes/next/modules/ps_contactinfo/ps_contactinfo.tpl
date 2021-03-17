{**
* 2007-2018 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License 3.0 (AFL-3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* https://opensource.org/licenses/AFL-3.0
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
* @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
* International Registered Trademark & Property of PrestaShop SA
*}

<div class="block-contact col-md-4 wrapper links">
    <p class="footer-title hidden-sm-down">{l s='Contact Us' d='Shop.Theme.Global'}</p>
    <div class="footer-content footer-content-title"  data-target="#footer_contact_info" data-toggle="collapse">
        <span class="h3 hidden-md-up">{l s='Contact Us' d='Shop.Theme.Global'}</span>
        <span class="float-xs-right hidden-md-up">
            <span class="navbar-toggler collapse-icons">
                <i class="material-icons add">&#xE313;</i>
                <i class="material-icons remove">&#xE316;</i>
            </span>
        </span>
    </div>
    <ul id="footer_contact_info" class="footer-column-content collapse">
        <li class="content address-title">
            <span class="content-title address">Address: </span>
            <span>{$contact_infos.address.formatted nofilter}</span>
        </li>

        {if $contact_infos.phone}

            <li class="content">
                <span class="content-title">

                    {* [1][/1] is for a HTML tag. *}
                    {l s='Phone: [1]%phone%[/1]'
                            sprintf=[
                            '[1]' => '<a href="tel:123456789">',
                            '[/1]' => '</a>',
                            '%phone%' => $contact_infos.phone
                            ]
                            d='Shop.Theme.Global'
                    }
                </span>
            </li>
        {/if}


        {if $contact_infos.fax}

            {* [1][/1] is for a HTML tag. *}
            {l
                    s='Fax: [1]%fax%[/1]'
                    sprintf=[
                    '[1]' => '<span>',
                    '[/1]' => '</span>',
                    '%fax%' => $contact_infos.fax
                    ]
                    d='Shop.Theme.Global'
            }
        {/if}



        {if $contact_infos.email}
            <li class="content email">
                <span class="content-title">

                    {* [1][/1] is for a HTML tag. *}
                    {l
                            s='Email: [1]%email%[/1]'
                            sprintf=[
                            '[1]' => '<a href="#s">',
                            '[/1]' => '</a>',
                            '%email%' => $contact_infos.email
                            ]
                            d='Shop.Theme.Global'
                    }
                </span>
            </li>
        {/if}
    </ul>
    {*    <div class="hidden-md-up">
    <div class="title">
    <a class="h3" href="{$urls.pages.stores}">{l s='Store information' d='Shop.Theme.Global'}</a>
    </div>
    </div>*}
</div>
