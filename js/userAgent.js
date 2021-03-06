// JavaScript Document
var ua = navigator.userAgent.toLowerCase();
var ver = navigator.appVersion.toLowerCase();

// IE(11以外)
var isMSIE = (ua.indexOf('msie') > -1) && (ua.indexOf('opera') == -1);
// IE6
var isIE6 = isMSIE && (ver.indexOf('msie 6.') > -1);
// IE7
var isIE7 = isMSIE && (ver.indexOf('msie 7.') > -1);
// IE8
var isIE8 = isMSIE && (ver.indexOf('msie 8.') > -1);
// IE9
var isIE9 = isMSIE && (ver.indexOf('msie 9.') > -1);
// IE10
var isIE10 = isMSIE && (ver.indexOf('msie 10.') > -1);
// IE11
var isIE11 = (ua.indexOf('trident/7') > -1);
// IE
var isIE = isMSIE || isIE11;
// Edge
var isEdge = (ua.indexOf('edge') > -1);
 
// Google Chrome
var isChrome = (ua.indexOf('chrome') > -1) && (ua.indexOf('edge') == -1);
// Firefox
var isFirefox = (ua.indexOf('firefox') > -1);
// Safari
var isSafari = (ua.indexOf('safari') > -1) && (ua.indexOf('chrome') == -1);
// Opera
var isOpera = (ua.indexOf('opera') > -1);
 
$(function() {
  if (isOpera) {
  //オペラならつけるクラス
    $("body").addClass("Opera");
  } else if (isIE) {
  //IEならつけるクラス
    $("body").addClass("Ie");
  } else if (isChrome) {
  //Chromeならつけるクラス
    $("body").addClass("Chrome");
  } else if (isSafari) {
  //Safariならつけるクラス
    $("body").addClass("Safari");
  } else if (isEdge) {
  //Edgeならつけるクラス
    $("body").addClass("Edge");
  } else if (isFirefox) {
  //Firefoxならつけるクラス
    $("body").addClass("Firefox");
  } else {
    return false;
  }
});
 
  //デバイス判定
  var _ua = (function(u){
  return {
    Tablet:(u.indexOf("windows") != -1 && u.indexOf("touch") != -1 && u.indexOf("tablet pc") == -1)
      || u.indexOf("ipad") != -1
      || (u.indexOf("android") != -1 && u.indexOf("mobile") == -1)
      || (u.indexOf("firefox") != -1 && u.indexOf("tablet") != -1)
      || u.indexOf("kindle") != -1
      || u.indexOf("silk") != -1
      || u.indexOf("playbook") != -1,
    Mobile:(u.indexOf("windows") != -1 && u.indexOf("phone") != -1)
      || u.indexOf("iphone") != -1
      || u.indexOf("ipod") != -1
      || (u.indexOf("android") != -1 && u.indexOf("mobile") != -1)
      || (u.indexOf("firefox") != -1 && u.indexOf("mobile") != -1)
      || u.indexOf("blackberry") != -1
  }
})(window.navigator.userAgent.toLowerCase());
 
$(function() {
  if(_ua.Mobile){
  //スマホならつけるクラス
  　$('body').addClass("SP");
  }else if(_ua.Tablet){
  //タブレットならつけるクラス
  　$('body').addClass("tab");
  }else{
  //スマホ・タブレット以外ならつけるクラス
  　$('body').addClass("PC");
  }
});

if(navigator.platform.indexOf("Win") != -1){
//Windowsならつけるクラス  
$('body').addClass('Win');
}else{
//Windows以外ならつけるクラス 
  $('body').addClass('notWin');
}

$(function() {
  var ua = navigator.userAgent;
if( ua.indexOf('iPhone') > 0 ) {
//iPhoneならつけるクラス 
$('body').addClass('iPhone');
} else if( ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0 ) {
//Andoroidのスマホならつけるクラス 
$('body').addClass('Android');
} else if( ua.indexOf('iPad') > 0 ) {
//iPadならつけるクラス 
$('body').addClass('iPad');
} 
});