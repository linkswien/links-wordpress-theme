/**
 * File form-hidden-bezirk.js.
 *
 * Tries to gather which Bezirk to add in case there's a hidden Bezirk field in a form
 *
 */
( function() {

  var bezirke = [
    { plz: '1010', name: 'innere-stadt' },
    { plz: '1020', name: 'leopoldstadt' },
    { plz: '1030', name: 'landstrasse' },
    { plz: '1040', name: 'wieden' },
    { plz: '1050', name: 'margareten' },
    { plz: '1060', name: 'mariahilf' },
    { plz: '1070', name: 'neubau' },
    { plz: '1080', name: 'josefstadt' },
    { plz: '1090', name: 'alsergrund' },
    { plz: '1100', name: 'favoriten' },
    { plz: '1110', name: 'simmering' },
    { plz: '1120', name: 'meidling' },
    { plz: '1130', name: 'hietzing' },
    { plz: '1140', name: 'penzing' },
    { plz: '1150', name: 'rudolfsheim-fuenfhaus' },
    { plz: '1160', name: 'ottakring' },
    { plz: '1170', name: 'hernals' },
    { plz: '1180', name: 'waehring' },
    { plz: '1190', name: 'doebling' },
    { plz: '1200', name: 'brigittenau' },
    { plz: '1210', name: 'floridsdorf' },
    { plz: '1220', name: 'donaustadt' },
    { plz: '1230', name: 'liesing' },
  ]

  // find hidden Bezirk field
  var bezirk_hidden_field = document.querySelector('#mauticform_input_newslettermitname_bezirk')

  bezirke.forEach(function(bezirk) {
    if (String(window.location).toLowerCase().indexOf(bezirk.name) > -1) {
        bezirk_hidden_field.value = bezirk.plz
    }
  })
} )();
