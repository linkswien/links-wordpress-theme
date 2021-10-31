/**
 * File helpers.js.
 *
 * Various helpers such as:
 * Tries to gather which Bezirk to add in case there's a hidden Bezirk field in a form
 * Hide events block on bezirkssites if no events exist
 *
 */
(function () {

    var bezirke = [
        {plz: '1010', name: 'innere-stadt'},
        {plz: '1020', name: 'leopoldstadt'},
        {plz: '1030', name: 'landstrasse'},
        {plz: '1040', name: 'wieden'},
        {plz: '1050', name: 'margareten'},
        {plz: '1060', name: 'mariahilf'},
        {plz: '1070', name: 'neubau'},
        {plz: '1080', name: 'josefstadt'},
        {plz: '1090', name: 'alsergrund'},
        {plz: '1100', name: 'favoriten'},
        {plz: '1110', name: 'simmering'},
        {plz: '1120', name: 'meidling'},
        {plz: '1130', name: 'hietzing'},
        {plz: '1140', name: 'penzing'},
        {plz: '1150', name: 'rudolfsheim-fuenfhaus'},
        {plz: '1160', name: 'ottakring'},
        {plz: '1170', name: 'hernals'},
        {plz: '1180', name: 'waehring'},
        {plz: '1190', name: 'doebling'},
        {plz: '1200', name: 'brigittenau'},
        {plz: '1210', name: 'floridsdorf'},
        {plz: '1220', name: 'donaustadt'},
        {plz: '1230', name: 'liesing'},
    ]

    // find hidden Bezirk field
    var bezirk_hidden_field = document.querySelector('#mauticform_input_newslettermitname_bezirk')

    if (bezirk_hidden_field != null) {
        bezirke.forEach(function (bezirk) {
            if (String(window.location).toLowerCase().indexOf(bezirk.name) > -1) {
                bezirk_hidden_field.value = bezirk.plz
            }
        });
    }

    // Hide events block on bezirkssites if no events exist
    const events_container = document.querySelector('.bg-events-container');
    if (events_container != null && events_container.childElementCount === 0) {
        events_container.closest('.wp-block-group').classList.add('bg-events-hidden');
    }
})();

/** This section is only needed once per page if manually copying **/
if (typeof MauticSDKLoaded == 'undefined') {
    var MauticSDKLoaded = true;
    var head            = document.getElementsByTagName('head')[0];
    var script          = document.createElement('script');
    script.type         = 'text/javascript';
    script.src          = 'https://mautic.links-wien.at/media/js/mautic-form.js';
    script.onload       = function() {
        MauticSDK.onLoad();
    };
    head.appendChild(script);
    var MauticDomain = 'https://mautic.links-wien.at';
    var MauticLang   = {
        'submittingMessage': "Please wait..."
    }
}else if (typeof MauticSDK != 'undefined') {
    MauticSDK.onLoad();
}
