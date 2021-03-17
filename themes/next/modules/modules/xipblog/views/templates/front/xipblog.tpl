<div class="home_blog_post_area {$xipbdp_designlayout} {$hookName} blog-section">
    <div class="blogpost-block">
        <div class="home_blog_post blog-section-inner">
            <div class="page_title_area blog-section-title">
                {if isset($xipbdp_title)}
                    <h2>
                        <span class="title">{$xipbdp_title}</span>
                        <span class="heading_carousel_arrow"></span>
                    </h2>
                {/if}
                {if isset($xipbdp_subtext)}
                    <p class="page_subtitle">{$xipbdp_subtext}</p>
                {/if}
                <div class="heading-line d_none"><span></span></div>
            </div>
            <div class="row home_blog_post_inner carousel">
                {if (isset($xipblogposts) && !empty($xipblogposts))}
                    {foreach from=$xipblogposts item=xipblgpst}
                        <article class="blog_post col-xs-12 col-sm-4">
                            <div class="blog_post_content">
                                <div class="blog_post_content_top">
                                    <div class="post_thumbnail">
                                        {if $xipblgpst.post_format == 'video'}
                                            {assign var="postvideos" value=','|explode:$xipblgpst.video}
                                            {if $postvideos|@count > 1 }
                                                {include file="module:xipblog/views/templates/front/post-video.tpl" videos=$postvideos width='570' height="316" class="carousel"}
                                            {else}
                                                {include file="module:xipblog/views/templates/front/post-video.tpl" videos=$postvideos width='570' height="316" class=""}
                                            {/if}
                                        {elseif $xipblgpst.post_format == 'audio'}
                                            {assign var="postaudio" value=','|explode:$xipblgpst.audio}
                                            {if $postaudio|@count > 1 }
                                                {include file="module:xipblog/views/templates/front/post-audio.tpl" audios=$postaudio width='570' height="316" class="carousel"}
                                            {else}
                                                {include file="module:xipblog/views/templates/front/post-audio.tpl" audios=$postaudio width='570' height="316" class=""}
                                            {/if}
                                        {elseif $xipblgpst.post_format == 'gallery'}
                                            {if $xipblgpst.gallery_lists|@count > 1 }
                                                {include file="module:xipblog/views/templates/front/post-gallery.tpl" gallery=$xipblgpst.gallery_lists imagesize="home_default" class="carousel"}
                                            {else}
                                                {include file="module:xipblog/views/templates/front/post-gallery.tpl" gallery=$xipblgpst.gallery_lists imagesize="home_default" class=""}
                                            {/if}
                                        {else}
                                            <img class="xipblog_img img-responsive" src="{$xipblgpst.post_img_home_default}" alt="{$xipblgpst.post_title}">
                                            <div class="meta_date post-date">
                                                {* <i class="icon-calendar"></i> *}
                                                <p class="post-day">{$xipblgpst.post_date|date_format:"%d"}</p>
                                                <p class="post-month">{$xipblgpst.post_date|date_format:"%b"}</p>
                                            </div>
                                            <div class="blog_mask">
                                                <div class="blog_mask_content">
                                                    <a class="thumbnail_lightbox" href="{$xipblgpst.post_img_large}">
                                                        <i class="icon_plus"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="view-link">
                                                <a href="{$xipblgpst.link}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            </div>

                                        {/if}
                                    </div>
                                </div>
                                <div class="blog_post_content_bottom blog-content">
                                    <h3 class="post_title"><a href="{$xipblgpst.link}">{$xipblgpst.post_title}</a></h3>
                                    <div class="post_meta clearfix">
                                        <p class="meta_author">
                                            {* <i class="icon-user"></i> *}
                                            {l s='By' mod='xipblog'}
                                            <span>{$xipblgpst.post_author_arr.firstname} {$xipblgpst.post_author_arr.lastname}</span>
                                        </p>
                                        <p class="meta_category">
                                            {* <i class="icon-tag"></i> *}
                                            {l s='IN' mod='xipblog'}
                                            <a href="{$xipblgpst.category_default_arr.link}">{$xipblgpst.category_default_arr.name}</a>
                                        </p>
                                    </div>
                                    <div class="post_content">
                                        {if isset($xipblgpst.post_excerpt) && !empty($xipblgpst.post_excerpt)}
                                            <p>{$xipblgpst.post_excerpt|truncate:100:' ...'|escape:'html':'UTF-8'}</p>
                                        {else}
                                            <p>{$xipblgpst.post_content|truncate:100:' ...'|escape:'html':'UTF-8'}</p>
                                        {/if}
                                    </div>
                                    <div class="content_more">
                                        <a class="read_more" href="{$xipblgpst.link}">{l s='Read more...' mod='xipblog'}</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    {/foreach}
                {else}
                    <p>{l s='No Blog Post Found' mod='xipblog'}</p>
                {/if}
            </div>
        </div>
    </div>
</div>