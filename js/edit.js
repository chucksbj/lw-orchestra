//Ready
$(document).ready(function() {
function pwStart () {
    document.body.insertBefore(loadp, btn.parentNode);

    timeStart = (new Date()).getTime();
    pw.init(pwInit);
	pw.events.add('imageSave', saveHandler);
  };

  // Function called when the PaintWeb application fires the "appInit" event.
  function pwInit (ev) {
    var initTime = (new Date()).getTime() - timeStart,
        str = 'Demo: Yay, PaintWeb loaded in ' + initTime + ' ms! ' +
              pw.toString();

    document.body.removeChild(loadp);

    if (ev.state === PaintWeb.INIT_ERROR) {
      alert('Demo: PaintWeb initialization failed.');
      return;

    } else if (ev.state === PaintWeb.INIT_DONE) {
      if (window.console && console.log) {
        console.log(str);
      } else if (window.opera) {
        opera.postError(str);
      }

    } else {
      alert('Demo: Unrecognized PaintWeb initialization state ' + ev.state);

      return;
    }

    img.style.display = 'none';
    btn.style.display = 'none';
  };

  var img    = document.getElementById('editableImage'),
      btn    = document.getElementById('buttonEditImage'),
      target = document.getElementById('PaintWebTarget'),
      loadp  = document.createElement('p'),
      timeStart = null,

      // Create a PaintWeb instance.
      pw = new PaintWeb();

  pw.config.guiPlaceholder = target;
  pw.config.imageLoad      = img;
  pw.config.configFile     = 'paintweb-config.json';
  loadp.appendChild(document.createTextNode('Loading, please wait...'));

  if (btn.addEventListener) {
    btn.addEventListener('click', pwStart, false);
  } else if (btn.attachEvent) {
    btn.attachEvent('onclick', pwStart);
  } else {
    btn.onclick = pwStart;
  }
  
  pwStart();

  
// The imageSave event handler.
function saveHandler (ev) {
  // Cancel the default action of the event.
  ev.preventDefault();
  var dbname = $("input[name='dbname']").val();
  var letter = $("input[name='letter']").val();
  var title = $("input[name='title']").val();
  var handlerURL = 'edit_save.php';
      send       = 'dataURL=' + encodeURIComponent(ev.dataURL) + '&dbname=' + encodeURIComponent(dbname) + '&letter=' + encodeURIComponent(letter) + '&title=' + encodeURIComponent(title);
      headers    = {'Content-Type': 'application/x-www-form-urlencoded'};

  // Send the data URL to a server-side script which stores the image.
  pwlib.xhrLoad(handlerURL, saveReady, 'POST', send, headers);
  
};

// The XMLHttpRequest onreadystatechange event handler.
function saveReady (xhr) {
  if (!xhr || xhr.readyState !== 4) {
    return;
  }

  if ((xhr.status !== 304 && xhr.status !== 200) ||
      !xhr.responseText || xhr.responseText !== 'OK') {
    // Image save failed.
    pw.events.dispatch(new pwlib.appEvent.imageSaveResult(false));
    return;
  }

  // Image save was successful.
  pw.events.dispatch(new pwlib.appEvent.imageSaveResult(true));
};
});