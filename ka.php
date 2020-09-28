<script type="text/javascript">
    var a = Math.ceil(Math.random() * 10);
    var b = Math.ceil(Math.random() * 10);       
    var c = a + b
    function DrawBotBoot()
    {
        document.write("What is "+ a + " + " + b +"? ");
        document.write("<input id='BotBootInput' type='text' maxlength='2' size='2'/>");
    }    
    function ValidBotBoot(){
        var d = document.getElementById('BotBootInput').value;
        if (d == c) return true;        
        return false;
        
    }
    /** This section is only needed once per page if manually copying **/
    if (typeof MauticSDKLoaded == 'undefined') {
        var MauticSDKLoaded = true;
        var head            = document.getElementsByTagName('head')[0];
        var script          = document.createElement('script');
        script.type         = 'text/javascript';
        script.src          = 'https://mautic.antonioperreca.it/media/js/mautic-form.js';
        script.onload       = function() {
            MauticSDK.onLoad();
        };
        head.appendChild(script);
        var MauticDomain = 'https://mautic.antonioperreca.it';
        var MauticLang   = {
            'submittingMessage': "Please wait..."
        }
    }
</script>



<style type="text/css" scoped>
    .mauticform_wrapper { max-width: 600px; margin: 10px auto; }
    .mauticform-innerform {}
    .mauticform-post-success {}
    .mauticform-name { font-weight: bold; font-size: 1.5em; margin-bottom: 3px; }
    .mauticform-description { margin-top: 2px; margin-bottom: 10px; }
    .mauticform-error { margin-bottom: 10px; color: red; }
    .mauticform-message { margin-bottom: 10px;color: green; }
    .mauticform-row { display: block; margin-bottom: 20px; }
    .mauticform-label { font-size: 1.1em; display: block; font-weight: bold; margin-bottom: 5px; }
    .mauticform-row.mauticform-required .mauticform-label:after { color: #e32; content: " *"; display: inline; }
    .mauticform-helpmessage { display: block; font-size: 0.9em; margin-bottom: 3px; }
    .mauticform-errormsg { display: block; color: red; margin-top: 2px; }
    .mauticform-selectbox, .mauticform-input, .mauticform-textarea { width: 100%; padding: 0.5em 0.5em; border: 1px solid #CCC; background: #fff; box-shadow: 0px 0px 0px #fff inset; border-radius: 4px; box-sizing: border-box; }
    .mauticform-checkboxgrp-row {}
    .mauticform-checkboxgrp-label { font-weight: normal; }
    .mauticform-checkboxgrp-checkbox {}
    .mauticform-radiogrp-row {}
    .mauticform-radiogrp-label { font-weight: normal; }
    .mauticform-radiogrp-radio {}
    .mauticform-button-wrapper .mauticform-button.btn-default, .mauticform-pagebreak-wrapper .mauticform-pagebreak.btn-default { color: #5d6c7c;background-color: #ffffff;border-color: #dddddd;}
    .mauticform-button-wrapper .mauticform-button, .mauticform-pagebreak-wrapper .mauticform-pagebreak { display: inline-block;margin-bottom: 0;font-weight: 600;text-align: center;vertical-align: middle;cursor: pointer;background-image: none;border: 1px solid transparent;white-space: nowrap;padding: 6px 12px;font-size: 13px;line-height: 1.3856;border-radius: 3px;-webkit-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;}
    .mauticform-button-wrapper .mauticform-button.btn-default[disabled], .mauticform-pagebreak-wrapper .mauticform-pagebreak.btn-default[disabled] { background-color: #ffffff; border-color: #dddddd; opacity: 0.75; cursor: not-allowed; }
    .mauticform-pagebreak-wrapper .mauticform-button-wrapper {  display: inline; }
</style>
<div id="mauticform_wrapper_apnewsletterin1modulodiiscrizione" class="mauticform_wrapper">
    <form autocomplete="false" role="form" method="post" action="https://mautic.antonioperreca.it/form/submit?formId=13" id="mauticform_apnewsletterin1modulodiiscrizione" data-mautic-form="apnewsletterin1modulodiiscrizione" enctype="multipart/form-data">
        <div class="mauticform-error" id="mauticform_apnewsletterin1modulodiiscrizione_error"></div>
        <div class="mauticform-message" id="mauticform_apnewsletterin1modulodiiscrizione_message"></div>
        <div class="mauticform-innerform">

            
          <div class="mauticform-page-wrapper mauticform-page-1" data-mautic-form-page="1">

            <div id="mauticform_apnewsletterin1modulodiiscrizione_youremail" data-validate="youremail" data-validation-type="email" class="mauticform-row mauticform-email mauticform-field-1 mauticform-required">
                <label id="mauticform_label_apnewsletterin1modulodiiscrizione_youremail" for="mauticform_input_apnewsletterin1modulodiiscrizione_youremail" class="mauticform-label">E-mail</label>
                <input id="mauticform_input_apnewsletterin1modulodiiscrizione_youremail" name="mauticform[youremail]" value="" class="mauticform-input" type="email">
                <span class="mauticform-errormsg" style="display: none;">This is required.</span>
            </div>

            <div id="mauticform_apnewsletterin1modulodiiscrizione_email2" style="display:none" class="mauticform-row mauticform-text mauticform-field-2">
                <label id="mauticform_label_apnewsletterin1modulodiiscrizione_email2" for="mauticform_input_apnewsletterin1modulodiiscrizione_email2" class="mauticform-label">email2</label>
                <input id="mauticform_input_apnewsletterin1modulodiiscrizione_email2" name="mauticform[email2]" value="" class="mauticform-input" type="text">
                <span class="mauticform-errormsg" style="display: none;"></span>
            </div>

            <div id="mauticform_apnewsletterin1modulodiiscrizione_descrizione" class="mauticform-row mauticform-freetext mauticform-field-3">
                <div id="mauticform_input_apnewsletterin1modulodiiscrizione_descrizione" name="mauticform[descrizione]" value="" class="mauticform-freetexts">
                    Autorizzo il trattamento come da <a fr-original-style="user-select: auto;" href="https://www.iubenda.com/privacy-policy/38392432" style="user-select: auto; background: transparent; box-sizing: border-box; color: rgb(78, 93, 157); text-decoration: none;" target="_blank">privacy policy</a> per l'invio della newsletter
                </div>
            </div>

            <div id="mauticform_apnewsletterin1modulodiiscrizione_consenso" data-validate="consenso" data-validation-type="checkboxgrp" class="mauticform-row mauticform-checkboxgrp mauticform-field-4 mauticform-required">
                <label class="mauticform-label" for="mauticform_checkboxgrp_checkbox_consenso_Autorizzo1">Consenso</label>
                <div class="mauticform-checkboxgrp-row">
                    <label id="mauticform_checkboxgrp_label_consenso_10" for="mauticform_checkboxgrp_checkbox_consenso_10" class="mauticform-checkboxgrp-labels">
                        <input class="mauticform-checkboxgrp-checkboxs" name="mauticform[consenso][]" id="mauticform_checkboxgrp_checkbox_consenso_10" type="checkbox" value="1">
                        Autorizzo
                    </label>
                </div>
                <span class="mauticform-errormsg" style="display: none;">This is required.</span>
            </div>

            <div id="mauticform_apnewsletterin1modulodiiscrizione_hidden" style="display:none" class="mauticform-row mauticform-freehtml mauticform-field-5">
                <div id="mauticform_input_apnewsletterin1modulodiiscrizione_hidden" name="mauticform[hidden]" value="" class="mauticform-freehtml">
                    
                </div>
            </div>

            <div id="mauticform_apnewsletterin1modulodiiscrizione_submit" class="mauticform-row mauticform-button-wrapper mauticform-field-6">

                <script type="text/javascript">DrawBotBoot()</script>

                <button type="submit" id="Button1" name="mauticform[submit]" id="mauticform_input_apnewsletterin1modulodiiscrizione_submit"  class="mauticform-button btn btn-defaultss " value="Check" onclick="alert(ValidBotBoot());">Invio</button>
            </div>
            </div>
        </div>

        <input type="hidden" name="mauticform[formId]" id="mauticform_apnewsletterin1modulodiiscrizione_id" value="13">
        <input type="hidden" name="mauticform[return]" id="mauticform_apnewsletterin1modulodiiscrizione_return" value="">
        <input type="hidden" name="mauticform[formName]" id="mauticform_apnewsletterin1modulodiiscrizione_name" value="apnewsletterin1modulodiiscrizione">

        </form>
</div>


