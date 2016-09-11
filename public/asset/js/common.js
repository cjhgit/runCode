

var previewInTime = false;
$('#preview-in-time').on('click', function () {
    if ($(this).is(':checked')) {
        eui.msg('已开启实时预览');
        previewInTime = true;
    } else {
        eui.msg('已关闭实时预览');
    }

});

// Define an extended mixed-mode that understands vbscript and
// leaves mustache/handlebars embedded templates in html mode
var mixedMode = {
    name: "htmlmixed",
    scriptTypes: [{
        matches: /\/x-handlebars-template|\/x-mustache/i,
        mode: null
    },
        {
            matches: /(text|application)\/(x-)?vb(a|script)/i,
            mode: "vbscript"
        }]
};

var htmlEditor = CodeMirror.fromTextArea(document.getElementById("html"), {
    mode: 'text/html',
    selectionPointer: true,
    lineNumbers: true,
    matchBrackets: true,
    indentUnit: 4,
    indentWithTabs: true
});
htmlEditor.on('change', function() {
    //htmlEditor.showHint();  //满足自动触发自动联想功能
    if (previewInTime) {
        submitTryit();
    }
});
var javascriptEditor = CodeMirror.fromTextArea(document.getElementById("javascript"), {
    mode: 'text/javascript',
    selectionPointer: true,
    lineNumbers: true,
    matchBrackets: true,
    indentUnit: 4,
    indentWithTabs: true,

});
javascriptEditor.on('change', function() {
    //javascriptEditor.showHint();  //满足自动触发自动联想功能
    if (previewInTime) {
        submitTryit();
    }
});
var cssEditor = CodeMirror.fromTextArea(document.getElementById("css"), {
    mode: 'text/css', /* text/css, text/x-scss (demo), text/x-less (demo). */
    selectionPointer: true,
    lineNumbers: true,
    matchBrackets: true,
    indentUnit: 4,
    indentWithTabs: true
});
cssEditor.on('change', function() {
    //cssEditor.showHint();  //满足自动触发自动联想功能
    if (previewInTime) {
        submitTryit();
    }
});
function submitTryit() {
    var html = htmlEditor.getValue();
    var css = cssEditor.getValue();
    var javascript = javascriptEditor.getValue();
    var patternBody = /<body[^>]*>((.|[\n\r])*)<\/body>/im;
    var array_matches_body = patternBody.exec(html);
    //alert(typeof array_matches_body);

    var result = '<html><head><style>' + css + '</style></head><body>'
        + html + '<script>' + javascript + '<\/script>'
        + '</body></html>';

    setOutputValue(result);
}
function setOutputValue(val) {
    var ifr = document.createElement("iframe");
    ifr.setAttribute("frameborder", "0");
    ifr.setAttribute("id", "iframeResult");
    document.getElementById("iframewrapper").innerHTML = "";
    document.getElementById("iframewrapper").appendChild(ifr);

    var ifrw = (ifr.contentWindow) ? ifr.contentWindow : (ifr.contentDocument.document) ? ifr.contentDocument.document : ifr.contentDocument;
    ifrw.document.open();
    ifrw.document.write(val);
    ifrw.document.close();
}
submitTryit();
document.getElementById('run').onclick = function(e) {
    e.preventDefault();

    submitTryit();
};
document.onkeydown = function(e) {
    if (e.ctrlKey && e.which == 13) {
        alert(1);
    }
}
document.getElementById('clear').onclick = clear;
function clear(e) {
    e.preventDefault();

    htmlEditor.setValue('');
    cssEditor.setValue('');
    javascriptEditor.setValue('');
    setOutputValue('');
}

document.getElementById('html-tag').onclick = function(e) {
    var el = document.getElementById('html-box');
    el.style.position = 'fixed';
    el.style.top = '0';
    el.style.left = '0';
    el.style.bottom = '0';
    el.style.height = '100%';
    el.style.right = '0';
    el.style.zIndex = 10000;

    alert(el.getAttribute('class'));
};