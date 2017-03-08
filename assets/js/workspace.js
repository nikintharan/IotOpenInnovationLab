$(document).ready(function(){

   firebase.initializeApp({
         apiKey: 'AIzaSyAT-MtTOD0YQ0sn5Zve_kQ-MODPGAd0KGY',
         databaseURL: 'https://iot-open-innovation-lab.firebaseio.com'
     });
     var firepadRef_1 = firebase.database().ref('/workspace_form_data/1' + '/answer_1/');
     var firepadRef_2 = firebase.database().ref('/workspace_form_data/2' + '/answer_2/');
     var firepadRef_3 = firebase.database().ref('/workspace_form_data/3' + '/answer_3/');
     var firepadRef_4 = firebase.database().ref('/workspace_form_data/4' + '/answer_4/');
     var firepadRef_5 = firebase.database().ref('/workspace_form_data/5' + '/answer_5/');
     var firepadRef_6 = firebase.database().ref('/workspace_form_data/6' + '/answer_6/');
     var firepadRef_7 = firebase.database().ref('/workspace_form_data/7' + '/answer_7/');
     var firepadRef_8 = firebase.database().ref('/workspace_form_data/8' + '/answer_8/');
     var firepadRef_9 = firebase.database().ref('/workspace_form_data/9' + '/answer_9/');
     var firepadRef_10 = firebase.database().ref('/workspace_form_data/10' + '/answer_10/');
     var firepadRef_11 = firebase.database().ref('/workspace_form_data/11' + '/answer_11/');
     var firepadRef_12 = firebase.database().ref('/workspace_form_data/12' + '/answer_12/');
     var firepadRef_13 = firebase.database().ref('/workspace_form_data/13' + '/answer_13/');
     var firepadRef_14 = firebase.database().ref('/workspace_form_data/14' + '/answer_14/');
     var codeMirror_1 = CodeMirror(document.getElementById('answer_1'), { lineWrapping: true });
     var codeMirror_2 = CodeMirror(document.getElementById('answer_2'), { lineWrapping: true });
     var codeMirror_3 = CodeMirror(document.getElementById('answer_3'), { lineWrapping: true });
     var codeMirror_4 = CodeMirror(document.getElementById('answer_4'), { lineWrapping: true });
     var codeMirror_5 = CodeMirror(document.getElementById('answer_5'), { lineWrapping: true });
     var codeMirror_6 = CodeMirror(document.getElementById('answer_6'), { lineWrapping: true });
     var codeMirror_7 = CodeMirror(document.getElementById('answer_7'), { lineWrapping: true });
     var codeMirror_8 = CodeMirror(document.getElementById('answer_8'), { lineWrapping: true });
     var codeMirror_9 = CodeMirror(document.getElementById('answer_9'), { lineWrapping: true });
     var codeMirror_10 = CodeMirror(document.getElementById('answer_10'), { lineWrapping: true });
     var codeMirror_11 = CodeMirror(document.getElementById('answer_11'), { lineWrapping: true });
     var codeMirror_12 = CodeMirror(document.getElementById('answer_12'), { lineWrapping: true });
     var codeMirror_13 = CodeMirror(document.getElementById('answer_13'), { lineWrapping: true });
     var codeMirror_14 = CodeMirror(document.getElementById('answer_14'), { lineWrapping: true });
     var answer_1 = Firepad.fromCodeMirror(firepadRef_1, codeMirror_1, { richTextShortcuts: false, richTextToolbar: false, defaultText: 'Answer' });
     var answer_2 = Firepad.fromCodeMirror(firepadRef_2, codeMirror_2, { richTextShortcuts: false, richTextToolbar: false, defaultText: 'Answer' });
     var answer_3 = Firepad.fromCodeMirror(firepadRef_3, codeMirror_3, { richTextShortcuts: false, richTextToolbar: false, defaultText: 'Answer' });
     var answer_4 = Firepad.fromCodeMirror(firepadRef_4, codeMirror_4, { richTextShortcuts: false, richTextToolbar: false, defaultText: 'Answer' });
     var answer_5 = Firepad.fromCodeMirror(firepadRef_5, codeMirror_5, { richTextShortcuts: false, richTextToolbar: false, defaultText: 'Answer' });
     var answer_6 = Firepad.fromCodeMirror(firepadRef_6, codeMirror_6, { richTextShortcuts: false, richTextToolbar: false, defaultText: 'Answer' });
     var answer_7 = Firepad.fromCodeMirror(firepadRef_7, codeMirror_7, { richTextShortcuts: false, richTextToolbar: false, defaultText: 'Answer' });
     var answer_8 = Firepad.fromCodeMirror(firepadRef_8, codeMirror_8, { richTextShortcuts: false, richTextToolbar: false, defaultText: 'Answer' });
     var answer_9 = Firepad.fromCodeMirror(firepadRef_9, codeMirror_9, { richTextShortcuts: false, richTextToolbar: false, defaultText: 'Answer' });
     var answer_10 = Firepad.fromCodeMirror(firepadRef_10, codeMirror_10, { richTextShortcuts: false, richTextToolbar: false, defaultText: 'Answer' });
     var answer_11 = Firepad.fromCodeMirror(firepadRef_11, codeMirror_11, { richTextShortcuts: false, richTextToolbar: false, defaultText: 'Answer' });
     var answer_12 = Firepad.fromCodeMirror(firepadRef_12, codeMirror_12, { richTextShortcuts: false, richTextToolbar: false, defaultText: 'Answer' });
     var answer_13 = Firepad.fromCodeMirror(firepadRef_13, codeMirror_13, { richTextShortcuts: false, richTextToolbar: false, defaultText: 'Answer' });
     var answer_14 = Firepad.fromCodeMirror(firepadRef_14, codeMirror_14, { richTextShortcuts: false, richTextToolbar: false, defaultText: 'Answer' });

});
