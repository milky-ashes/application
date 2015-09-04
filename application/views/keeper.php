<extends:spiral:basic/>

<block:resources>
    <yield:resources/>
    <resource:style href="resources/styles/keeper/keeper.css"/>
    <resource:javascript group="website" href="resources/scripts/library/jquery-1.11.3.min.js"/>
    <resource:javascript group="website" href="resources/scripts/keeper/bootstrap.js"/>
    <resource:javascript group="website" href="resources/scripts/keeper/keeper.js"/>
</block:resources>

<block:body>
    <header class="header">
        <block:header>
            <div class="logo-block brand-color">
                <a href="#"><img src="/resources/images/spiral.svg" alt="Spiral"></a>
            </div>
            <div class="top-panel">
                <div class="navigation-block">
                    <a href="#" class="active"><i class="icon icon-dashboard"></i>[[Dashboard]]</a>
                    <a href="#"><i class="icon icon-folder"></i>[[Templates Library]]</a>
                    <a href="#"><i class="icon icon-user"></i>[[Members Portal]]</a>
                </div>
                <div class="user-block">
                    <a href="#" class="user-link js-user-link">Anton Titov</a>
                    <span class="user-mail">wolfy.jd@gmail.com</span>
                    <div class="user-menu js-user-menu">
                        <div class="hide-links">
                            <a href="#">[[My Account]]</a>
                            <a href="#">[[Log Out]]</a>
                        </div>
                    </div>

                </div>
            </div>
        </block:header>
    </header>
    <nav class="navigation">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <i class="icon icon-activity"></i> [[Activity]]
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                        <div class="menu-list">
                            <a href="#">[[Transaction]]</a>
                            <a href="#">[[Discount Code]]</a>
                            <a href="#">[[Subscription]]</a>
                            <a href="#">[[Manage Plans]]</a>
                            <a href="#">[[Sub Pages]]</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel">
                <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                           <i class="icon icon-list"></i>[[CMS Management]]
                        </a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
                        <div class="menu-list">
                            <a href="#">[[Transaction]]</a>
                            <a href="#">[[Discount Code]]</a>
                            <a href="#">[[Subscription]]</a>
                            <a href="#">[[Manage Plans]]</a>
                            <a href="#">[[Sub Pages]]</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel">
                <div class="panel-heading" role="tab" id="heading3">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false" aria-controls="collapseTwo">
                            <i class="icon icon-basket"></i>[[e-Commerce]]
                        </a>
                    </h4>
                </div>
                <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                    <div class="panel-body">
                        <div class="menu-list">
                            <a href="#">[[Transaction]]</a>
                            <a href="#">[[Discount Code]]</a>
                            <a href="#">[[Subscription]]</a>
                            <a href="#">[[Manage Plans]]</a>
                            <a href="#">[[Sub Pages]]</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel">
                <div class="panel-heading" role="tab" id="heading4">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" aria-controls="collapseTwo">
                            <i class="icon icon-men"></i>[[Accounts]]
                        </a>
                    </h4>
                </div>
                <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                    <div class="panel-body">
                        <div class="menu-list">
                            <a href="#">[[Transaction]]</a>
                            <a href="#">[[Discount Code]]</a>
                            <a href="#">[[Subscription]]</a>
                            <a href="#">[[Manage Plans]]</a>
                            <a href="#">[[Sub Pages]]</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel">
                <div class="panel-heading" role="tab" id="heading5">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="false" aria-controls="collapseTwo">
                            <i class="icon icon-mail"></i>[[Emails]]
                        </a>
                    </h4>
                </div>
                <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
                    <div class="panel-body">
                        <div class="menu-list">
                            <a href="#">[[Transaction]]</a>
                            <a href="#">[[Discount Code]]</a>
                            <a href="#">[[Subscription]]</a>
                            <a href="#">[[Manage Plans]]</a>
                            <a href="#">[[Sub Pages]]</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel">
                <div class="panel-heading" role="tab" id="heading6">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="false" aria-controls="collapseTwo">
                            <i class="icon icon-tool"></i>[[Brother Settings]]
                        </a>
                    </h4>
                </div>
                <div id="collapse6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading6">
                    <div class="panel-body">
                        <div class="menu-list">
                            <a href="#">[[Transaction]]</a>
                            <a href="#">[[Discount Code]]</a>
                            <a href="#">[[Subscription]]</a>
                            <a href="#">[[Manage Plans]]</a>
                            <a href="#">[[Sub Pages]]</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel">
                <div class="panel-heading" role="tab" id="heading7">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-expanded="false" aria-controls="collapseTwo">
                            <i class="icon icon-paint"></i>[[Templates Library]]
                        </a>
                    </h4>
                </div>
                <div id="collapse7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading7">
                    <div class="panel-body">
                        <div class="menu-list">
                            <a href="#">[[Transaction]]</a>
                            <a href="#">[[Discount Code]]</a>
                            <a href="#">[[Subscription]]</a>
                            <a href="#">[[Manage Plans]]</a>
                            <a href="#">[[Sub Pages]]</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel">
                <div class="panel-heading" role="tab" id="heading8">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse8" aria-expanded="false" aria-controls="collapseTwo">
                            <i class="icon icon-flag"></i>[[Reports]]
                        </a>
                    </h4>
                </div>
                <div id="collapse8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading8">
                    <div class="panel-body">
                        <div class="menu-list">
                            <a href="#">[[Transaction]]</a>
                            <a href="#">[[Discount Code]]</a>
                            <a href="#">[[Subscription]]</a>
                            <a href="#">[[Manage Plans]]</a>
                            <a href="#">[[Sub Pages]]</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel">
                <div class="panel-heading" role="tab" id="heading9">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse9" aria-expanded="false" aria-controls="collapseTwo">
                            <i class="icon icon-plug"></i>[[Spiral Framework]]
                        </a>
                    </h4>
                </div>
                <div id="collapse9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading">
                    <div class="panel-body">
                        <div class="menu-list">
                            <a href="#">[[Transaction]]</a>
                            <a href="#">[[Discount Code]]</a>
                            <a href="#">[[Subscription]]</a>
                            <a href="#">[[Manage Plans]]</a>
                            <a href="#">[[Sub Pages]]</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </nav>
    <main class="${content-class}">
        <div class="container">
            <yield:content/>
        </div>
    </main>
    <a href="#" class="narrow-page-link js-page-menu"><i class="icon icon-triangle"></i></a>
</block:body>