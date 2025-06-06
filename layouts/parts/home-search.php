<section id="home-intro" style="background-image:url('<?php echo $this->asset('img/home-background-tja.png', false); ?>');  background-size: cover;" class="js-page-menu-item home-entity clearfix">
   
<div class="box">
        <div style="margin:auto; width:250px;"></div>
        <!-- <div style="margin:auto; width:250px;"><img width='250px' src='<?php echo $this->asset('img/map-white-logo.png', false); ?>' /></div>-->
    </div>

    <?php $this->applyTemplateHook('home-search', 'begin'); ?>

    <div class="box" style="background-color: rgba(8,94,85, 0.7);">
        <h1><?php echo $app->view->renderMarkdown($this->dict('home: title', false)); ?></h1>
        <p><?php echo $app->view->renderMarkdown($this->dict('home: welcome', false)); ?></p>
        <form id="home-search-form" class="clearfix" ng-non-bindable>
            <input tabindex="1" id="campo-de-busca" class="search-field" type="text" name="campo-de-busca" placeholder="<?php \MapasCulturais\i::esc_attr_e("Digite uma palavra-chave"); ?>" />
            <div id="home-search-filter" class="dropdown" data-searh-url-template="<?php echo $app->createUrl('site', 'search'); ?>##(global:(enabled:({{entity}}:!t),filterEntity:{{entity}}),{{entity}}:(keyword:'{{keyword}}'))">
                <div class="placeholder"><span class="icon icon-search"></span><?php \MapasCulturais\i::_e("Buscar"); ?></div>
                <div class="submenu-dropdown">
                    <ul>
                        <?php if ($app->isEnabled('events')) : ?>
                            <li tabindex="2" id="events-filter" data-entity="event"><span class="icon icon-event"></span> <?php \MapasCulturais\i::_e("Eventos"); ?></li>
                        <?php endif; ?>

                        <?php if ($app->isEnabled('agents')) : ?>
                            <li tabindex="3" id="agents-filter" data-entity="agent"><span class="icon icon-agent"></span> <?php \MapasCulturais\i::_e("Agentes"); ?></li>
                        <?php endif; ?>

                        <?php if ($app->isEnabled('spaces')) : ?>
                            <li tabindex="4" id="spaces-filter" data-entity="space"><span class="icon icon-space"></span> <?php $this->dict('entities: Spaces') ?></li>
                        <?php endif; ?>

                        <?php if ($app->isEnabled('projects')) : ?>
                            <li tabindex="5" id="projects-filter" data-entity="project" data-searh-url-template="<?php echo $app->createUrl('site', 'search'); ?>##(global:(enabled:({{entity}}:!t),filterEntity:{{entity}},viewMode:list),{{entity}}:(keyword:'{{keyword}}'))"><span class="icon icon-project"></span> <?php \MapasCulturais\i::_e("Projetos"); ?></li>
                        <?php endif; ?>

                        <?php if ($app->isEnabled('opportunities')) : ?>
                            <li tabindex="5" id="opportunities-filter" data-entity="opportunity" data-searh-url-template="<?php echo $app->createUrl('site', 'search'); ?>##(global:(enabled:({{entity}}:!t),filterEntity:{{entity}},viewMode:list),{{entity}}:(keyword:'{{keyword}}'))"><span class="icon icon-opportunity"></span> <?php \MapasCulturais\i::_e("Oportunidades"); ?></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </form>
        <a class="btn btn-accent btn-large" href="<?php echo $app->createUrl('panel') ?>"><?php $this->dict('home: colabore') ?></a>
    </div>

    <?php $this->applyTemplateHook('home-search', 'end'); ?>
    <div class="view-more"><a class="hltip icon icon-select-arrow" href="#home-events" title="<?php \MapasCulturais\i::esc_attr_e("Saiba mais"); ?>"></a></div>
    <!-- <div>
        <img src="<?php echo $this->asset('img/map-white-logo-ceara.png', false); ?>" />
    </div> -->
    <div style="text-align:right; width:100%; margin-top:20px;"><img width='320px' src='<?php echo $this->asset('img/map-white-logo-ceara.png', false); ?>' /></div>
</section>