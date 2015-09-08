<extends:keeper/>

<block:content>

    <div class="head-part">
        <div class="row">
            <div class="col-lg-12">
                <h1>[[User overviews]]</h1>
                <div class="link-block">
                    <button class="brand-btn btn">[[Export]]</button>
                    <button class="brand-btn btn">[[update]]</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Denby flyn</a></li>
                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">subscription</a></li>
                    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">downloads</a></li>
                    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Permissions &amp; tags</a></li>
                </ul>
        </div>
    </div>



    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="home">
            <div class="row">
                <div class="col-lg-6">
                    <div class="content-block">
                        <dl>
                            <dt>[[ID]]</dt>
                            <dd>...</dd>
                            <dt>[[Date Registred]]</dt>
                            <dd>...</dd>
                            <dt>[[Last Visit]]</dt>
                            <dd>...</dd>
                            <dt>[[InsideSales ID]]</dt>
                            <dd>...</dd>
                            <dt>[[Status]]</dt>
                            <dd>Active</dd>
                            <dt>[[Services]]</dt>
                            <dd>...</dd>
                            <dt>[[Downloads]]</dt>
                            <dd>...</dd>
                        </dl>
                    </div>
                    <div class="content-block ">
                        <h3>[[User Company/Group]]</h3>
                        <dl>
                            <dt>[[ID]]</dt>
                            <dd>38848</dd>
                            <dt>[[Name]]</dt>
                            <dd><a href="#">Lockheed Martin Corporation</a></dd>
                            <dt>[[Address]]</dt>
                            <dd>Not Provided<br/>NO Provided, AL 111111 <br/>Unuted States</dd>
                        </dl>
                    </div>
                    <p class="note">This group does not have any represents.</p>

                </div>
                <div class="col-lg-6">
                    <spiral:form>
                        <form:select name="blabla" class="blablabla" placeholder="blabla" label="[[Account Group]]"/>

                        <div class="row">
                            <div class="col-lg-6">
                                <form:input label="[[First name]]" value="Denby"/>
                            </div>
                            <div class="col-lg-6">
                                <form:input label="[[Last name]]" value="Flynn" wrapper-class="success"/>
                            </div>
                        </div>
                        <form:input label="Job title"/>
                        <form:input type="email" label="[[Email address]]"/>
                        <form:input label="Phone number"/>
                        <div class="check-list">
                            <form:checkbox label="[[Change user password]]"/>
                            <form:checkbox label="[[Move user to another group/company]]"/>
                            <form:checkbox label="[[Login as Denby Flynn]]" checked/>
                        </div>
                    </spiral:form>
                </div>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="profile">..2.</div>
        <div role="tabpanel" class="tab-pane" id="messages">.3..</div>
        <div role="tabpanel" class="tab-pane" id="settings">..4.</div>
    </div>




</block:content>