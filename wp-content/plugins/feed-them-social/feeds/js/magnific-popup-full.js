/*! Magnific Popup - v1.1.0 - 2016-02-20
 * http://dimsemenov.com/plugins/magnific-popup/
 * Copyright (c) 2016 Dmitry Semenov; */
!function(a){"function"==typeof define&&define.amd?define(["jquery"],a):a("object"==typeof exports?require("jquery"):window.jQuery||window.Zepto)}(function(a){var b,c,d,e,f,g,h="Close",i="BeforeClose",j="AfterClose",k="BeforeAppend",l="MarkupParse",m="Open",n="Change",o="mfp",p="."+o,q="mfp-ready",r="mfp-removing",s="mfp-prevent-close",t=function(){},u=!!window.jQuery,v=a(window),w=function(a,c){b.ev.on(o+a+p,c)},x=function(b,c,d,e){var f=document.createElement("div");return f.className="mfp-"+b,d&&(f.innerHTML=d),e?c&&c.appendChild(f):(f=a(f),c&&f.appendTo(c)),f},y=function(c,d){b.ev.triggerHandler(o+c,d),b.st.callbacks&&(c=c.charAt(0).toLowerCase()+c.slice(1),b.st.callbacks[c]&&b.st.callbacks[c].apply(b,a.isArray(d)?d:[d]))},z=function(c){return c===g&&b.currTemplate.closeBtn||(b.currTemplate.closeBtn=a(b.st.closeMarkup.replace("%title%",b.st.tClose)),g=c),b.currTemplate.closeBtn},A=function(){a.magnificPopup.instance||(b=new t,b.init(),a.magnificPopup.instance=b)},B=function(){var a=document.createElement("p").style,b=["ms","O","Moz","Webkit"];if(void 0!==a.transition)return!0;for(;b.length;)if(b.pop()+"Transition"in a)return!0;return!1};t.prototype={constructor:t,init:function(){var c=navigator.appVersion;b.isLowIE=b.isIE8=document.all&&!document.addEventListener,b.isAndroid=/android/gi.test(c),b.isIOS=/iphone|ipad|ipod/gi.test(c),b.supportsTransition=B(),b.probablyMobile=b.isAndroid||b.isIOS||/(Opera Mini)|Kindle|webOS|BlackBerry|(Opera Mobi)|(Windows Phone)|IEMobile/i.test(navigator.userAgent),d=a(document),b.popupsCache={}},open:function(c){var e;if(c.isObj===!1){b.items=c.items.toArray(),b.index=0;var g,h=c.items;for(e=0;e<h.length;e++)if(g=h[e],g.parsed&&(g=g.el[0]),g===c.el[0]){b.index=e;break}}else b.items=a.isArray(c.items)?c.items:[c.items],b.index=c.index||0;if(b.isOpen)return void b.updateItemHTML();b.types=[],f="",c.mainEl&&c.mainEl.length?b.ev=c.mainEl.eq(0):b.ev=d,c.key?(b.popupsCache[c.key]||(b.popupsCache[c.key]={}),b.currTemplate=b.popupsCache[c.key]):b.currTemplate={},b.st=a.extend(!0,{},a.magnificPopup.defaults,c),b.fixedContentPos="auto"===b.st.fixedContentPos?!b.probablyMobile:b.st.fixedContentPos,b.st.modal&&(b.st.closeOnContentClick=!1,b.st.closeOnBgClick=!1,b.st.showCloseBtn=!1,b.st.enableEscapeKey=!1),b.bgOverlay||(b.bgOverlay=x("bg").on("click"+p,function(){b.close()}),b.wrap=x("wrap").attr("tabindex",-1).on("click"+p,function(a){b._checkIfClose(a.target)&&b.close()}),b.container=x("container",b.wrap)),b.contentContainer=x("content"),b.st.preloader&&(b.preloader=x("preloader",b.container,b.st.tLoading));var i=a.magnificPopup.modules;for(e=0;e<i.length;e++){var j=i[e];j=j.charAt(0).toUpperCase()+j.slice(1),b["init"+j].call(b)}y("BeforeOpen"),b.st.showCloseBtn&&(b.st.closeBtnInside?(w(l,function(a,b,c,d){c.close_replaceWith=z(d.type)}),f+=" mfp-close-btn-in"):b.wrap.append(z())),b.st.alignTop&&(f+=" mfp-align-top"),b.fixedContentPos?b.wrap.css({overflow:b.st.overflowY,overflowX:"hidden",overflowY:b.st.overflowY}):b.wrap.css({top:v.scrollTop(),position:"absolute"}),(b.st.fixedBgPos===!1||"auto"===b.st.fixedBgPos&&!b.fixedContentPos)&&b.bgOverlay.css({height:d.height(),position:"absolute"}),b.st.enableEscapeKey&&d.on("keyup"+p,function(a){27===a.keyCode&&b.close()}),v.on("resize"+p,function(){b.updateSize()}),b.st.closeOnContentClick||(f+=" mfp-auto-cursor"),f&&b.wrap.addClass(f);var k=b.wH=v.height(),n={};if(b.fixedContentPos&&b._hasScrollBar(k)){var o=b._getScrollbarSize();o&&(n.marginRight=o)}b.fixedContentPos&&(b.isIE7?a("body, html").css("overflow","hidden"):n.overflow="hidden");var r=b.st.mainClass;return b.isIE7&&(r+=" mfp-ie7"),r&&b._addClassToMFP(r),b.updateItemHTML(),y("BuildControls"),a("html").css(n),b.bgOverlay.add(b.wrap).prependTo(b.st.prependTo||a(document.body)),b._lastFocusedEl=document.activeElement,setTimeout(function(){b.content?(b._addClassToMFP(q),b._setFocus()):b.bgOverlay.addClass(q),d.on("focusin"+p,b._onFocusIn)},16),b.isOpen=!0,b.updateSize(k),y(m),c},close:function(){b.isOpen&&(y(i),b.isOpen=!1,b.st.removalDelay&&!b.isLowIE&&b.supportsTransition?(b._addClassToMFP(r),setTimeout(function(){b._close()},b.st.removalDelay)):b._close())},_close:function(){y(h);var c=r+" "+q+" ";if(b.bgOverlay.detach(),b.wrap.detach(),b.container.empty(),b.st.mainClass&&(c+=b.st.mainClass+" "),b._removeClassFromMFP(c),b.fixedContentPos){var e={marginRight:""};b.isIE7?a("body, html").css("overflow",""):e.overflow="",a("html").css(e)}d.off("keyup"+p+" focusin"+p),b.ev.off(p),b.wrap.attr("class","mfp-wrap").removeAttr("style"),b.bgOverlay.attr("class","mfp-bg"),b.container.attr("class","mfp-container"),!b.st.showCloseBtn||b.st.closeBtnInside&&b.currTemplate[b.currItem.type]!==!0||b.currTemplate.closeBtn&&b.currTemplate.closeBtn.detach(),b.st.autoFocusLast&&b._lastFocusedEl&&a(b._lastFocusedEl).focus(),b.currItem=null,b.content=null,b.currTemplate=null,b.prevHeight=0,y(j)},updateSize:function(a){if(b.isIOS){var c=document.documentElement.clientWidth/window.innerWidth,d=window.innerHeight*c;b.wrap.css("height",d),b.wH=d}else b.wH=a||v.height();b.fixedContentPos||b.wrap.css("height",b.wH),y("Resize")},updateItemHTML:function(){var c=b.items[b.index];b.contentContainer.detach(),b.content&&b.content.detach(),c.parsed||(c=b.parseEl(b.index));var d=c.type;if(y("BeforeChange",[b.currItem?b.currItem.type:"",d]),b.currItem=c,!b.currTemplate[d]){var f=b.st[d]?b.st[d].markup:!1;y("FirstMarkupParse",f),f?b.currTemplate[d]=a(f):b.currTemplate[d]=!0}e&&e!==c.type&&b.container.removeClass("mfp-"+e+"-holder");var g=b["get"+d.charAt(0).toUpperCase()+d.slice(1)](c,b.currTemplate[d]);b.appendContent(g,d),c.preloaded=!0,y(n,c),e=c.type,b.container.prepend(b.contentContainer),y("AfterChange")},appendContent:function(a,c){b.content=a,a?b.st.showCloseBtn&&b.st.closeBtnInside&&b.currTemplate[c]===!0?b.content.find(".mfp-close").length||b.content.append(z()):b.content=a:b.content="",y(k),b.container.addClass("mfp-"+c+"-holder"),b.contentContainer.append(b.content)},parseEl:function(c){var d,e=b.items[c];if(e.tagName?e={el:a(e)}:(d=e.type,e={data:e,src:e.src}),e.el){for(var f=b.types,g=0;g<f.length;g++)if(e.el.hasClass("mfp-"+f[g])){d=f[g];break}e.src=e.el.attr("data-mfp-src"),e.src||(e.src=e.el.attr("href"))}return e.type=d||b.st.type||"inline",e.index=c,e.parsed=!0,b.items[c]=e,y("ElementParse",e),b.items[c]},addGroup:function(a,c){var d=function(d){d.mfpEl=this,b._openClick(d,a,c)};c||(c={});var e="click.magnificPopup";c.mainEl=a,c.items?(c.isObj=!0,a.off(e).on(e,d)):(c.isObj=!1,c.delegate?a.off(e).on(e,c.delegate,d):(c.items=a,a.off(e).on(e,d)))},_openClick:function(c,d,e){var f=void 0!==e.midClick?e.midClick:a.magnificPopup.defaults.midClick;if(f||!(2===c.which||c.ctrlKey||c.metaKey||c.altKey||c.shiftKey)){var g=void 0!==e.disableOn?e.disableOn:a.magnificPopup.defaults.disableOn;if(g)if(a.isFunction(g)){if(!g.call(b))return!0}else if(v.width()<g)return!0;c.type&&(c.preventDefault(),b.isOpen&&c.stopPropagation()),e.el=a(c.mfpEl),e.delegate&&(e.items=d.find(e.delegate)),b.open(e)}},updateStatus:function(a,d){if(b.preloader){c!==a&&b.container.removeClass("mfp-s-"+c),d||"loading"!==a||(d=b.st.tLoading);var e={status:a,text:d};y("UpdateStatus",e),a=e.status,d=e.text,b.preloader.html(d),b.preloader.find("a").on("click",function(a){a.stopImmediatePropagation()}),b.container.addClass("mfp-s-"+a),c=a}},_checkIfClose:function(c){if(!a(c).hasClass(s)){var d=b.st.closeOnContentClick,e=b.st.closeOnBgClick;if(d&&e)return!0;if(!b.content||a(c).hasClass("mfp-close")||b.preloader&&c===b.preloader[0])return!0;if(c===b.content[0]||a.contains(b.content[0],c)){if(d)return!0}else if(e&&a.contains(document,c))return!0;return!1}},_addClassToMFP:function(a){b.bgOverlay.addClass(a),b.wrap.addClass(a)},_removeClassFromMFP:function(a){this.bgOverlay.removeClass(a),b.wrap.removeClass(a)},_hasScrollBar:function(a){return(b.isIE7?d.height():document.body.scrollHeight)>(a||v.height())},_setFocus:function(){(b.st.focus?b.content.find(b.st.focus).eq(0):b.wrap).focus()},_onFocusIn:function(c){return c.target===b.wrap[0]||a.contains(b.wrap[0],c.target)?void 0:(b._setFocus(),!1)},_parseMarkup:function(b,c,d){var e;d.data&&(c=a.extend(d.data,c)),y(l,[b,c,d]),a.each(c,function(c,d){if(void 0===d||d===!1)return!0;if(e=c.split("_"),e.length>1){var f=b.find(p+"-"+e[0]);if(f.length>0){var g=e[1];"replaceWith"===g?f[0]!==d[0]&&f.replaceWith(d):"img"===g?f.is("img")?f.attr("src",d):f.replaceWith(a("<img>").attr("src",d).attr("class",f.attr("class"))):f.attr(e[1],d)}}else b.find(p+"-"+c).html(d)})},_getScrollbarSize:function(){if(void 0===b.scrollbarSize){var a=document.createElement("div");a.style.cssText="width: 99px; height: 99px; overflow: scroll; position: absolute; top: -9999px;",document.body.appendChild(a),b.scrollbarSize=a.offsetWidth-a.clientWidth,document.body.removeChild(a)}return b.scrollbarSize}},a.magnificPopup={instance:null,proto:t.prototype,modules:[],open:function(b,c){return A(),b=b?a.extend(!0,{},b):{},b.isObj=!0,b.index=c||0,this.instance.open(b)},close:function(){return a.magnificPopup.instance&&a.magnificPopup.instance.close()},registerModule:function(b,c){c.options&&(a.magnificPopup.defaults[b]=c.options),a.extend(this.proto,c.proto),this.modules.push(b)},defaults:{disableOn:0,key:null,midClick:!1,mainClass:"",preloader:!0,focus:"",closeOnContentClick:!1,closeOnBgClick:!0,closeBtnInside:!0,showCloseBtn:!0,enableEscapeKey:!0,modal:!1,alignTop:!1,removalDelay:0,prependTo:null,fixedContentPos:"auto",fixedBgPos:"auto",overflowY:"auto",closeMarkup:'<button title="%title%" type="button" class="mfp-close">&#215;</button>',tClose:"Close (Esc)",tLoading:"Loading...",autoFocusLast:!0}},a.fn.magnificPopup=function(c){A();var d=a(this);if("string"==typeof c)if("open"===c){var e,f=u?d.data("magnificPopup"):d[0].magnificPopup,g=parseInt(arguments[1],10)||0;f.items?e=f.items[g]:(e=d,f.delegate&&(e=e.find(f.delegate)),e=e.eq(g)),b._openClick({mfpEl:e},d,f)}else b.isOpen&&b[c].apply(b,Array.prototype.slice.call(arguments,1));else c=a.extend(!0,{},c),u?d.data("magnificPopup",c):d[0].magnificPopup=c,b.addGroup(d,c);return d};var C,D,E,F="inline",G=function(){E&&(D.after(E.addClass(C)).detach(),E=null)};a.magnificPopup.registerModule(F,{options:{hiddenClass:"hide",markup:"",tNotFound:"Content not found"},proto:{initInline:function(){b.types.push(F),w(h+"."+F,function(){G()})},getInline:function(c,d){if(G(),c.src){var e=b.st.inline,f=a(c.src);if(f.length){var g=f[0].parentNode;g&&g.tagName&&(D||(C=e.hiddenClass,D=x(C),C="mfp-"+C),E=f.after(D).detach().removeClass(C)),b.updateStatus("ready")}else b.updateStatus("error",e.tNotFound),f=a("<div>");return c.inlineElement=f,f}return b.updateStatus("ready"),b._parseMarkup(d,{},c),d}}});var H,I="ajax",J=function(){H&&a(document.body).removeClass(H)},K=function(){J(),b.req&&b.req.abort()};a.magnificPopup.registerModule(I,{options:{settings:null,cursor:"mfp-ajax-cur",tError:'<a href="%url%">The content</a> could not be loaded.'},proto:{initAjax:function(){b.types.push(I),H=b.st.ajax.cursor,w(h+"."+I,K),w("BeforeChange."+I,K)},getAjax:function(c){H&&a(document.body).addClass(H),b.updateStatus("loading");var d=a.extend({url:c.src,success:function(d,e,f){var g={data:d,xhr:f};y("ParseAjax",g),b.appendContent(a(g.data),I),c.finished=!0,J(),b._setFocus(),setTimeout(function(){b.wrap.addClass(q)},16),b.updateStatus("ready"),y("AjaxContentAdded")},error:function(){J(),c.finished=c.loadError=!0,b.updateStatus("error",b.st.ajax.tError.replace("%url%",c.src))}},b.st.ajax.settings);return b.req=a.ajax(d),""}}});var L,M=function(c){if(c.data&&void 0!==c.data.title)return c.data.title;var d=b.st.image.titleSrc;if(d){if(a.isFunction(d))return d.call(b,c);if(c.el)return c.el.attr(d)||""}return""};a.magnificPopup.registerModule("image",{options:{markup:'<div class="mfp-figure"><div class="mfp-close"></div><figure><div class="mfp-img"></div><figcaption><div class="mfp-bottom-bar"><div class="mfp-title"></div><div class="mfp-counter"></div></div></figcaption></figure></div>',cursor:"mfp-zoom-out-cur",titleSrc:"title",verticalFit:!0,tError:'<a href="%url%">The image</a> could not be loaded.'},proto:{initImage:function(){var c=b.st.image,d=".image";b.types.push("image"),w(m+d,function(){"image"===b.currItem.type&&c.cursor&&a(document.body).addClass(c.cursor)}),w(h+d,function(){c.cursor&&a(document.body).removeClass(c.cursor),v.off("resize"+p)}),w("Resize"+d,b.resizeImage),b.isLowIE&&w("AfterChange",b.resizeImage)},resizeImage:function(){var a=b.currItem;if(a&&a.img&&b.st.image.verticalFit){var c=0;b.isLowIE&&(c=parseInt(a.img.css("padding-top"),10)+parseInt(a.img.css("padding-bottom"),10)),a.img.css("max-height",b.wH-c)}},_onImageHasSize:function(a){a.img&&(a.hasSize=!0,L&&clearInterval(L),a.isCheckingImgSize=!1,y("ImageHasSize",a),a.imgHidden&&(b.content&&b.content.removeClass("mfp-loading"),a.imgHidden=!1))},findImageSize:function(a){var c=0,d=a.img[0],e=function(f){L&&clearInterval(L),L=setInterval(function(){return d.naturalWidth>0?void b._onImageHasSize(a):(c>200&&clearInterval(L),c++,void(3===c?e(10):40===c?e(50):100===c&&e(500)))},f)};e(1)},getImage:function(c,d){var e=0,f=function(){c&&(c.img[0].complete?(c.img.off(".mfploader"),c===b.currItem&&(b._onImageHasSize(c),b.updateStatus("ready")),c.hasSize=!0,c.loaded=!0,y("ImageLoadComplete")):(e++,200>e?setTimeout(f,100):g()))},g=function(){c&&(c.img.off(".mfploader"),c===b.currItem&&(b._onImageHasSize(c),b.updateStatus("error",h.tError.replace("%url%",c.src))),c.hasSize=!0,c.loaded=!0,c.loadError=!0)},h=b.st.image,i=d.find(".mfp-img");if(i.length){var j=document.createElement("img");j.className="mfp-img",c.el&&c.el.find("img").length&&(j.alt=c.el.find("img").attr("alt")),c.img=a(j).on("load.mfploader",f).on("error.mfploader",g),j.src=c.src,i.is("img")&&(c.img=c.img.clone()),j=c.img[0],j.naturalWidth>0?c.hasSize=!0:j.width||(c.hasSize=!1)}return b._parseMarkup(d,{title:M(c),img_replaceWith:c.img},c),b.resizeImage(),c.hasSize?(L&&clearInterval(L),c.loadError?(d.addClass("mfp-loading"),b.updateStatus("error",h.tError.replace("%url%",c.src))):(d.removeClass("mfp-loading"),b.updateStatus("ready")),d):(b.updateStatus("loading"),c.loading=!0,c.hasSize||(c.imgHidden=!0,d.addClass("mfp-loading"),b.findImageSize(c)),d)}}});var N,O=function(){return void 0===N&&(N=void 0!==document.createElement("p").style.MozTransform),N};a.magnificPopup.registerModule("zoom",{options:{enabled:!1,easing:"ease-in-out",duration:300,opener:function(a){return a.is("img")?a:a.find("img")}},proto:{initZoom:function(){var a,c=b.st.zoom,d=".zoom";if(c.enabled&&b.supportsTransition){var e,f,g=c.duration,j=function(a){var b=a.clone().removeAttr("style").removeAttr("class").addClass("mfp-animated-image"),d="all "+c.duration/1e3+"s "+c.easing,e={position:"fixed",zIndex:9999,left:0,top:0,"-webkit-backface-visibility":"hidden"},f="transition";return e["-webkit-"+f]=e["-moz-"+f]=e["-o-"+f]=e[f]=d,b.css(e),b},k=function(){b.content.css("visibility","visible")};w("BuildControls"+d,function(){if(b._allowZoom()){if(clearTimeout(e),b.content.css("visibility","hidden"),a=b._getItemToZoom(),!a)return void k();f=j(a),f.css(b._getOffset()),b.wrap.append(f),e=setTimeout(function(){f.css(b._getOffset(!0)),e=setTimeout(function(){k(),setTimeout(function(){f.remove(),a=f=null,y("ZoomAnimationEnded")},16)},g)},16)}}),w(i+d,function(){if(b._allowZoom()){if(clearTimeout(e),b.st.removalDelay=g,!a){if(a=b._getItemToZoom(),!a)return;f=j(a)}f.css(b._getOffset(!0)),b.wrap.append(f),b.content.css("visibility","hidden"),setTimeout(function(){f.css(b._getOffset())},16)}}),w(h+d,function(){b._allowZoom()&&(k(),f&&f.remove(),a=null)})}},_allowZoom:function(){return"image"===b.currItem.type},_getItemToZoom:function(){return b.currItem.hasSize?b.currItem.img:!1},_getOffset:function(c){var d;d=c?b.currItem.img:b.st.zoom.opener(b.currItem.el||b.currItem);var e=d.offset(),f=parseInt(d.css("padding-top"),10),g=parseInt(d.css("padding-bottom"),10);e.top-=a(window).scrollTop()-f;var h={width:d.width(),height:(u?d.innerHeight():d[0].offsetHeight)-g-f};return O()?h["-moz-transform"]=h.transform="translate("+e.left+"px,"+e.top+"px)":(h.left=e.left,h.top=e.top),h}}});var P="iframe",Q="//about:blank",R=function(a){if(b.currTemplate[P]){var c=b.currTemplate[P].find("iframe");c.length&&(a||(c[0].src=Q),b.isIE8&&c.css("display",a?"block":"none"))}};a.magnificPopup.registerModule(P,{options:{markup:'<div class="mfp-iframe-scaler"><div class="mfp-close"></div><iframe class="mfp-iframe" src="//about:blank" frameborder="0" allowfullscreen></iframe></div>',srcAction:"iframe_src",patterns:{youtube:{index:"youtube.com",id:"v=",src:"//www.youtube.com/embed/%id%?autoplay=1"},vimeo:{index:"vimeo.com/",id:"/",src:"//player.vimeo.com/video/%id%?autoplay=1"},gmaps:{index:"//maps.google.",src:"%id%&output=embed"}}},proto:{initIframe:function(){b.types.push(P),w("BeforeChange",function(a,b,c){b!==c&&(b===P?R():c===P&&R(!0))}),w(h+"."+P,function(){R()})},getIframe:function(c,d){var e=c.src,f=b.st.iframe;a.each(f.patterns,function(){return e.indexOf(this.index)>-1?(this.id&&(e="string"==typeof this.id?e.substr(e.lastIndexOf(this.id)+this.id.length,e.length):this.id.call(this,e)),e=this.src.replace("%id%",e),!1):void 0});var g={};return f.srcAction&&(g[f.srcAction]=e),b._parseMarkup(d,g,c),b.updateStatus("ready"),d}}});var S=function(a){var c=b.items.length;return a>c-1?a-c:0>a?c+a:a},T=function(a,b,c){return a.replace(/%curr%/gi,b+1).replace(/%total%/gi,c)};a.magnificPopup.registerModule("gallery",{options:{enabled:!1,arrowMarkup:'<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>',preload:[0,2],navigateByImgClick:!0,arrows:!0,tPrev:"Previous (Left arrow key)",tNext:"Next (Right arrow key)",tCounter:"%curr% of %total%"},proto:{initGallery:function(){var c=b.st.gallery,e=".mfp-gallery";return b.direction=!0,c&&c.enabled?(f+=" mfp-gallery",w(m+e,function(){c.navigateByImgClick&&b.wrap.on("click"+e,".mfp-img",function(){return b.items.length>1?(b.next(),!1):void 0}),d.on("keydown"+e,function(a){37===a.keyCode?b.prev():39===a.keyCode&&b.next()})}),w("UpdateStatus"+e,function(a,c){c.text&&(c.text=T(c.text,b.currItem.index,b.items.length))}),w(l+e,function(a,d,e,f){var g=b.items.length;e.counter=g>1?T(c.tCounter,f.index,g):""}),w("BuildControls"+e,function(){if(b.items.length>1&&c.arrows&&!b.arrowLeft){var d=c.arrowMarkup,e=b.arrowLeft=a(d.replace(/%title%/gi,c.tPrev).replace(/%dir%/gi,"left")).addClass(s),f=b.arrowRight=a(d.replace(/%title%/gi,c.tNext).replace(/%dir%/gi,"right")).addClass(s);e.click(function(){b.prev()}),f.click(function(){b.next()}),b.container.append(e.add(f))}}),w(n+e,function(){b._preloadTimeout&&clearTimeout(b._preloadTimeout),b._preloadTimeout=setTimeout(function(){b.preloadNearbyImages(),b._preloadTimeout=null},16)}),void w(h+e,function(){d.off(e),b.wrap.off("click"+e),b.arrowRight=b.arrowLeft=null})):!1},next:function(){b.direction=!0,b.index=S(b.index+1),b.updateItemHTML()},prev:function(){b.direction=!1,b.index=S(b.index-1),b.updateItemHTML()},goTo:function(a){b.direction=a>=b.index,b.index=a,b.updateItemHTML()},preloadNearbyImages:function(){var a,c=b.st.gallery.preload,d=Math.min(c[0],b.items.length),e=Math.min(c[1],b.items.length);for(a=1;a<=(b.direction?e:d);a++)b._preloadItem(b.index+a);for(a=1;a<=(b.direction?d:e);a++)b._preloadItem(b.index-a)},_preloadItem:function(c){if(c=S(c),!b.items[c].preloaded){var d=b.items[c];d.parsed||(d=b.parseEl(c)),y("LazyLoad",d),"image"===d.type&&(d.img=a('<img class="mfp-img" />').on("load.mfploader",function(){d.hasSize=!0}).on("error.mfploader",function(){d.hasSize=!0,d.loadError=!0,y("LazyLoadError",d)}).attr("src",d.src)),d.preloaded=!0}}}});var U="retina";a.magnificPopup.registerModule(U,{options:{replaceSrc:function(a){return a.src.replace(/\.\w+$/,function(a){return"@2x"+a})},ratio:1},proto:{initRetina:function(){if(window.devicePixelRatio>1){var a=b.st.retina,c=a.ratio;c=isNaN(c)?c():c,c>1&&(w("ImageHasSize."+U,function(a,b){b.img.css({"max-width":b.img[0].naturalWidth/c,width:"100%"})}),w("ElementParse."+U,function(b,d){d.src=a.replaceSrc(d,c)}))}}}}),A()});

//SLICKREMIX START OUR CUSTOM POPUPS
jQuery(document).ready(function() {

    // Twitter Posts
    jQuery('.popup-gallery-twitter').each(function() { // the containers for all your galleries
        jQuery(this).magnificPopup({
            delegate: 'a.fts-twitter-link-image',
            type: 'image',
            tLoading: 'Loading image #%curr%...',
            mainClass: 'fts-instagram-img-mobile',
            // Delay in milliseconds before popup is removed
            removalDelay: 100,

            // Class that is added to popup wrapper and background
            // make it unique to apply your CSS animations just to this exact popup
            mainClass: 'fts-instagram-fade',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0,1] // Will preload 0 - before current, and 1 after the current image
            },
            image: {
                tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
                titleSrc: function(item) {
                    return item.el.parents('.fts-tweeter-wrap, .fts-feed-type-twitter').find('.fts-twitter-text, .fts-mashup-description-wrap').html();
                }
            }
        });
    });

    // Twitter Posts
    jQuery('.fts-master-youtube-wrap').each(function() { // the containers for all your galleries
        jQuery(this).magnificPopup({
            delegate: 'a.fts-yt-popup-open',
            type: 'image',
            tLoading: 'Loading image #%curr%...',
            mainClass: 'fts-instagram-img-mobile',
            // Delay in milliseconds before popup is removed
            removalDelay: 100,

            // Class that is added to popup wrapper and background
            // make it unique to apply your CSS animations just to this exact popup
            mainClass: 'fts-instagram-fade',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0,1] // Will preload 0 - before current, and 1 after the current image
            },
            image: {
                tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
                titleSrc: function(item) {
                    return item.el.parents('.fts-master-youtube-wrap .slicker-instagram-placeholder').find('.entriestitle').html();
                }
            }
        });
    });

    var magnificPopup = jQuery.magnificPopup.instance;

    // SLICKREMIX: MUST HAVE THIS IN PLACE TO ADJUST THE HEIGHT OF THE POPUP
    // When clicked on, it will only adjust the height of the popup based on if the image is higher than the last, otherwise we just leave it and hoz. and vert. align the image.

    jQuery('body').on('click', '#fts-photo-prev', function() {
        magnificPopup.prev();
        if(jQuery(".fts-popup-image-position, .fts-popup-second-half .mfp-bottom-bar" ).height() < jQuery( ".mfp-img" ).height()){
            jQuery( ".fts-popup-image-position, .fts-popup-second-half .mfp-bottom-bar" ).css("height", jQuery( ".mfp-img" ).height());
            // alert('ok don\'t change');
        }
        else {
            jQuery( ".fts-popup-second-half .mfp-bottom-bar" ).css("height", jQuery( ".fts-popup-image-position" ).height());
            //  alert('change');
        }
        // alert('change');
    });

    jQuery('body').on('click', '#fts-photo-next', function() {
        magnificPopup.next();
        if(jQuery(".fts-popup-image-position, .fts-popup-second-half .mfp-bottom-bar" ).height() < jQuery( ".mfp-img" ).height()){
            jQuery( ".fts-popup-image-position, .fts-popup-second-half .mfp-bottom-bar" ).css("height", jQuery( ".mfp-img" ).height());
            //  alert('ok don\'t change');
        }
        else {
            jQuery( ".fts-popup-second-half .mfp-bottom-bar" ).css("height", jQuery( ".fts-popup-image-position" ).height());
            //  alert('change');
        }
    });

    jQuery('body').on('click', '.fts-facebook-popup .mfp-image-holder .fts-popup-image-position', function() {
        magnificPopup.next();
        if(jQuery(".fts-popup-image-position, .fts-popup-second-half .mfp-bottom-bar" ).height() < jQuery( ".mfp-img" ).height()){
            jQuery( ".fts-popup-image-position, .fts-popup-second-half .mfp-bottom-bar" ).css("height", jQuery( ".mfp-img" ).height());
            //  alert('ok don\'t change');
        }
        else {
            jQuery( ".fts-popup-second-half .mfp-bottom-bar" ).css("height", jQuery( ".fts-popup-image-position" ).height());
            //  alert('change');
        }
    });

    // SLICKREMIX: MUST HAVE THIS IN PLACE TO BE ABLE TO CHECK WHAT KIND OF VIDEOS ARE BEING CLICKED ON
    jQuery('body').on('click', '#fts-photo-prev, #fts-photo-next, .fts-facebook-popup .mfp-image-holder .fts-popup-image-position', function(e) {
        // alert('test');
        jQuery("body").addClass("fts-using-arrows");

        setTimeout(function(){

            // Reload the share each funcion otherwise you can't open share option.
            jQuery.fn.ftsShare();

            if (/fbcdn.net/i.test(jQuery(".fts-iframe-popup-element").attr("src")) || /scontent.cdninstagram.com/i.test(jQuery(".fts-iframe-popup-element").attr("src"))) {

                // alert(jQuery(".fts-iframe-popup-element").attr("src"));
                jQuery("body").addClass("fts-video-iframe-choice");
                jQuery(".fts-video-popup-element").show();
                jQuery(".fts-iframe-popup-element").attr("src", "").hide();

            }
            else {
                //  alert('wtf');
                jQuery("body").removeClass("fts-video-iframe-choice, .fts-using-arrows");
                jQuery(".fts-video-popup-element").attr("src", "").hide();
                jQuery(".fts-iframe-popup-element").show();
            }
        }, 10);
    });
    // CLOSE SLICKREMIX


// Facebook Posts
    jQuery.fn.slickFacebookPopUpFunction = function() {

        jQuery('.popup-gallery-fb-posts, .popup-gallery-fb, .popup-video-gallery-fb').each(function () {
            var $container = jQuery(this);
            var $imageLinks = $container.find('a.fts-facebook-link-target, a.fts-fb-large-photo, a.fts-view-album-photos-large, a.fts-view-fb-videos-large, a.fts-view-fb-videos-btn');

            var items = [];
            $imageLinks.each(function () {
                var $item = jQuery(this);
                var type = 'image';
                if ($item.hasClass('fts-jal-fb-vid-image')) {
                    type = 'iframe';
                }
                var magItem = {
                    src: $item.attr('href'),
                    type: type,
                };

                // SLICKREMIX: THIS ADDS THE LIKES, COMMENTS, DESCRIPTION, DATES ETC TO THE POPUP
                magItem.title = jQuery(this).parents('.fts-fb-photo-post-wrap, .fts-events-list-wrap, .fts-jal-single-fb-post').find('.fts-jal-fb-top-wrap').html() + jQuery(this).parents('.fts-fb-photo-post-wrap, .fts-events-list-wrap, .fts-jal-single-fb-post').find('.fts-likes-shares-etc-wrap').html() + jQuery(this).parents('.fts-fb-photo-post-wrap, .fts-events-list-wrap, .fts-jal-single-fb-post').find('.fts-fb-comments-wrap').html();

                items.push(magItem);
            });

            $imageLinks.magnificPopup({
                mainClass: 'fts-facebook-popup fts-facebook-styles-popup',
                items: items,
                removalDelay: 150,
                preloader: false,
                closeOnContentClick: false,
                closeOnBgClick: true,
                closeBtnInside: true,
                showCloseBtn: false,
                enableEscapeKey: true,
                autoFocusLast: false,
                gallery:{
                    enabled: true,
                    navigateByImgClick: false,
                    tCounter: '<span class="mfp-counter">%curr% of %total%</span>', // markup of counter
                    preload: [0,1], // Will preload 0 - before current, and 1 after the current
                    arrowMarkup: '', // markup of an arrow button (slickremix = leave blank so we can show our custom buttons inside the framework)
                },
                type: 'image',
                callbacks: {
                    beforeOpen: function() {
                        var index = $imageLinks.index(this.st.el);
                        if (-1 !== index) {
                            this.goTo(index);
                        }
                    },
                    open: function() {
                        console.log('Popup is opened');

                        // Reload the share each funcion otherwise you can't open share option.
                        jQuery.fn.ftsShare();

                        if(jQuery(".fts-popup-half .mfp-iframe-scaler")[0]){
                            jQuery( ".fts-popup-image-position" ).css("height", '591px');
                        }
                        jQuery(window).resize(function() {

                            jQuery( ".fts-popup-second-half .mfp-bottom-bar" ).css("height", jQuery( ".fts-popup-image-position" ).height());

                            jQuery( ".fts-popup-image-position, .fts-popup-second-half .mfp-bottom-bar" ).css("height", jQuery( ".mfp-img" ).height());
                        });
                        jQuery(window).trigger('resize');

                        // slickremix trick to get the poster url from a tag we are clicking and pass it to the video player.
                        // We only want to load the poster if the size is mobile because tablets and desktops can/will play video automatically on popup
                        if (matchMedia('only screen and (max-device-width: 736px)').matches) {
                            var atagvideo = event.target.id;
                            var videoposter = jQuery('#'+atagvideo).data('poster');
                            var video = jQuery('.fts-fb-vid-popup video');
                            video.attr('poster', videoposter);
                            //	alert(videoposter);
                            console.log(videoposter);
                        }
                        // SLICKREMIX: MUST HAVE THIS IN PLACE TO BE ABLE TO ADD THE CLASS TO BODY SO WE CAN DO ACTIONS ON OUR CUSTOM PREV AND NEXT BUTTONS
                        // alert('added fts-using-arrows class on popup open')
                        jQuery("body").addClass("fts-using-arrows");


                    },
                    change: function() {


                        // Reload the share each funcion otherwise you can't open share option.
                        jQuery.fn.ftsShare();

                        console.log('Content changed');
                        console.log(this.content); // Direct reference to your popup element
                        if(jQuery("body").hasClass("fts-using-arrows")) {


                            if(jQuery(".fts-popup-half .mfp-iframe-scaler")[0]){
                                jQuery( ".fts-popup-image-position" ).css("height", '591px');
                                //  alert('iframe-scaler');
                            }
                            else{
                                if(jQuery(".fts-popup-image-position" ).css("height") == "auto"){
                                    jQuery( ".fts-popup-image-position, .fts-popup-second-half .mfp-bottom-bar" ).css("height", jQuery( ".mfp-img" ).height());
                                    alert('image');

                                }
                            }


                        }

                    },

                    imageLoadComplete: function() {
                        // fires when image in current popup finished loading
                        // avaiable since v0.9.0


                        if(jQuery(".fts-popup-image-position, .fts-popup-second-half .mfp-bottom-bar" ).height() < jQuery( ".mfp-img" ).height()){
                            jQuery( ".fts-popup-image-position, .fts-popup-second-half .mfp-bottom-bar" ).css("height", jQuery( ".mfp-img" ).height());
                            // alert('image');

                        }
                        else {
                            jQuery( ".fts-popup-second-half .mfp-bottom-bar" ).css("height", jQuery( ".fts-popup-image-position" ).height());
                            //  alert('change');
                        }

                    },
                    markupParse: function(template, values, item) {
                        // Triggers each time when content of popup changes 
                        console.log('Parsing:', template, values, item);



                        // SLICKREMIX: MUST HAVE THIS IN PLACE TO BE ABLE TO CHECK WHAT KIND OF VIDEOS ARE BEING CLICKED ON
                        if(!jQuery("body").hasClass("fts-using-arrows")) {

                            var ftsLinkCheck = item.src;

                            if (/fbcdn.net/i.test(ftsLinkCheck) && item.type !== 'image') {
                                // alert('FB Video Change photo Trigger from MP');
                                jQuery("body").addClass("fts-video-iframe-choice");
                            }
                            else if (!jQuery("body").hasClass("fts-using-arrows")) {
                                //  alert('Not using arrows open photo Trigger from MP');
                                jQuery("body").removeClass("fts-video-iframe-choice");
                            }

                        }
                        // CLOSE SLICKREMIX

                    },
                    afterClose: function() {
                        jQuery("body").removeClass("fts-using-arrows");
                        console.log('Popup is completely closed');
                    },
                },
                image: {
                    markup: '' +
                    '<div class="mfp-figure"><div class="mfp-close">X</div>'+
                    '<div class="fts-popup-wrap">' +
                    '    <div class="fts-popup-half ">' +
                    '               <button title="previous" type="button" id="fts-photo-prev" class="mfp-arrow mfp-arrow-left mfp-prevent-close"></button>' +
                    '           <div class="fts-popup-image-position" style="height:591px;">' +
                    '                   <span class="fts-position-helper"></span><div class="mfp-img"></div>' +
                    '       </div>' +
                    '               <button title="next" type="button" id="fts-photo-next" class="mfp-arrow mfp-arrow-right mfp-prevent-close"></button>' +
                    '    </div>'+
                    '<div class="fts-popup-second-half">' +
                    '<div class="mfp-bottom-bar">'+
                    '<div class="mfp-title"></div>' +
                    '<a class="fts-powered-by-text" href="https://slickremix.com" target="_blank">Powered by Feed Them Social</a>'+
                    '<div class="mfp-counter"></div>'+
                    '</div>' +
                    '</div>' +
                    '</div>'+
                    '</div>', // Popup HTML markup. `.mfp-img` div will be replaced with img tag, `.mfp-close` by close button

                    tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',

                },
                iframe: {
                    markup: '' +
                    '<div class="mfp-figure"><div class="mfp-close">X</div>'+
                    '<div class="fts-popup-wrap">' +
                    '    <div class="fts-popup-half ">' +
                    '               <button title="previous" type="button" id="fts-photo-prev" class="mfp-arrow mfp-arrow-left mfp-prevent-close"></button>' +
                    '           <div class="fts-popup-image-position">' +
                    '                           <div class="mfp-iframe-scaler"><iframe class="mfp-iframe fts-iframe-popup-element" frameborder="0" allowfullscreen></iframe><video class="mfp-iframe fts-video-popup-element" allowfullscreen autoplay controls></video>' +
                    '                           </div>' +
                    '               <button title="next" type="button" id="fts-photo-next" class="mfp-arrow mfp-arrow-right mfp-prevent-close"></button>' +
                    '<script>' +
                    // SLICKREMIX: MUST HAVE THIS IN PLACE TO BE ABLE TO CHECK WHAT KIND OF VIDEOS ARE BEING CLICKED ON WHEN FIRST LOADED, AFTER THEY ARE LOADED REFER TO THE CLICK FUNCTION FOR THE ERRORS ABOVE
                    'if(jQuery("body").hasClass("fts-video-iframe-choice")){jQuery(".fts-iframe-popup-element").attr("src", "").hide(); } else if(!jQuery("body").hasClass("fts-using-arrows")){jQuery(".fts-video-popup-element").attr("src", "").hide(); };  jQuery(".fts-facebook-popup video").click(function(){jQuery(this).trigger(this.paused ? this.paused ? "play" : "play" : "pause")}); </script>' +
                    '       </div>' +
                    '    </div>'+
                    '<div class="fts-popup-second-half">' +
                    '<div class="mfp-bottom-bar">'+
                    '<div class="mfp-title"></div>' +
                    '<a class="fts-powered-by-text" href="https://slickremix.com" target="_blank">Powered by Feed Them Social</a>'+
                    '<div class="mfp-counter"></div>'+
                    '</div>' +
                    '</div>' +
                    '</div>'+
                    '</div>', // Popup HTML markup. `.mfp-img` div will be replaced with img tag, `.mfp-close` by close button

                    srcAction: 'iframe_src', // Templating object key. First part defines CSS selector, second attribute. "iframe_src" means: find "iframe" and set attribute "src".  
                }
            });

        });
    }
//Return the function right away
    jQuery.fn.slickFacebookPopUpFunction();

    // TEST POPUP WITH ALERTS FOR DEBUGGIN
    // 'if(jQuery("body").hasClass("fts-video-iframe-choice")){alert("fts-video-choice not using arrows"); jQuery(".fts-iframe-popup-element").attr("src", "").hide(); } else if(!jQuery("body").hasClass("fts-using-arrows")){alert("fts-iframe-choice not using arrows"); jQuery(".fts-video-popup-element").attr("src", "").hide(); };  jQuery(".fts-facebook-popup video").click(function(){jQuery(this).trigger(this.paused ? this.paused ? "play" : "play" : "pause")});</script>' +






































    // Facebook Posts
    jQuery.fn.slickInstagramPopUpFunction = function() {

        jQuery('.popup-gallery').each(function () {
            var $container = jQuery(this);
            var $imageLinks = $container.find('.fts-instagram-link-target');

            var items = [];
            $imageLinks.each(function () {
                var $item = jQuery(this);
                var type = 'image';
                if ($item.hasClass('fts-instagram-video-link')) {
                    type = 'iframe';
                }
                var magItem = {
                    src: $item.attr('href'),
                    type: type,
                };
                // SLICKREMIX: THIS ADDS THE LIKES, COMMENTS, DESCRIPTION, DATES ETC TO THE POPUP
                magItem.title = jQuery(this).parents('.fts-instagram-wrapper').find('.fts-instagram-popup-profile-wrap').html() + jQuery(this).parents('.fts-instagram-wrapper').find('.slicker-date').html()  + jQuery(this).parents('.fts-instagram-wrapper').find('.fts-insta-likes-comments-grab-popup').html() + jQuery(this).parents('.fts-instagram-wrapper').find('.fts-instagram-caption').html();

                items.push(magItem);
            });

            $imageLinks.magnificPopup({
                mainClass: 'fts-facebook-popup fts-instagram-styles-popup',
                items: items,
                removalDelay: 150,
                preloader: false,
                closeOnContentClick: false,
                closeOnBgClick: true,
                closeBtnInside: true,
                showCloseBtn: false,
                enableEscapeKey: true,
                autoFocusLast: false,
                gallery:{
                    enabled: true,
                    navigateByImgClick: false,
                    tCounter: '<span class="mfp-counter">%curr% of %total%</span>', // markup of counter
                    preload: [0,1], // Will preload 0 - before current, and 1 after the current
                    arrowMarkup: '', // markup of an arrow button (slickremix = leave blank so we can show our custom buttons inside the framework)

                },
                type: 'image',
                callbacks: {
                    beforeOpen: function() {
                        var index = $imageLinks.index(this.st.el);
                        if (-1 !== index) {
                            this.goTo(index);
                        }
                    },
                    open: function() {
                        console.log('Popup is opened');

                        // Reload the share each funcion otherwise you can't open share option.
                        jQuery.fn.ftsShare();

                        //   if(jQuery(".fts-popup-half .mfp-iframe-scaler")[0]){
                        //       jQuery( ".fts-popup-image-position" ).css("height", '471px');
                        //   }
                        jQuery(window).resize(function() {

                            jQuery( ".fts-popup-second-half .mfp-bottom-bar" ).css("height", jQuery( ".fts-popup-image-position" ).height());

                            // jQuery( ".fts-popup-image-position, .fts-popup-second-half .mfp-bottom-bar" ).css("height", jQuery( ".mfp-img" ).height());
                        });
                        jQuery(window).trigger('resize');


                        // slickremix trick to get the poster url from a tag we are clicking and pass it to the video player.
                        // We only want to load the poster if the size is mobile because tablets and desktops can/will play video automatically on popup
                        if (matchMedia('only screen and (max-device-width: 736px)').matches) {
                            var atagvideo = event.target.id;
                            var videoposter = jQuery('#'+atagvideo).data('poster');
                            var video = jQuery('.fts-fb-vid-popup video');
                            video.attr('poster', videoposter);
                            //	alert(videoposter);
                            console.log(videoposter);
                        }
                        // SLICKREMIX: MUST HAVE THIS IN PLACE TO BE ABLE TO ADD THE CLASS TO BODY SO WE CAN DO ACTIONS ON OUR CUSTOM PREV AND NEXT BUTTONS
                        // alert('added fts-using-arrows class on popup open')
                        jQuery("body").addClass("fts-using-arrows");


                    },
                    change: function() {
                        console.log('Content changed');
                        console.log(this.content); // Direct reference to your popup element


                        // Reload the share each funcion otherwise you can't open share option.
                        jQuery.fn.ftsShare();


                        if(jQuery("body").hasClass("fts-using-arrows")) {

                        }

                    },

                    imageLoadComplete: function() {
                        // fires when image in current popup finished loading
                        // avaiable since v0.9.0

                        // Reload the share each funcion otherwise you can't open share option.
                        jQuery.fn.ftsShare();

                        if(jQuery(".fts-popup-image-position, .fts-popup-second-half .mfp-bottom-bar" ).height() < jQuery( ".mfp-img" ).height()){
                            jQuery( ".fts-popup-image-position, .fts-popup-second-half .mfp-bottom-bar" ).css("height", jQuery( ".mfp-img" ).height());
                            // alert('image');

                        }
                        else {
                            jQuery( ".fts-popup-second-half .mfp-bottom-bar" ).css("height", jQuery( ".fts-popup-image-position" ).height());
                            //  alert('change');
                        }

                    },
                    markupParse: function(template, values, item) {
                        // Triggers each time when content of popup changes 
                        console.log('Parsing:', template, values, item);

                        // SLICKREMIX: MUST HAVE THIS IN PLACE TO BE ABLE TO CHECK WHAT KIND OF VIDEOS ARE BEING CLICKED ON
                        if(!jQuery("body").hasClass("fts-using-arrows")) {

                            var ftsLinkCheck = item.src;

                            if (/fbcdn.net/i.test(ftsLinkCheck) && item.type !== 'image') {
                                // alert('FB Video Change photo Trigger from MP');
                                jQuery("body").addClass("fts-video-iframe-choice");
                            }
                            else if (!jQuery("body").hasClass("fts-using-arrows")) {
                                //  alert('Not using arrows open photo Trigger from MP');
                                jQuery("body").removeClass("fts-video-iframe-choice");
                            }

                        }
                        // CLOSE SLICKREMIX

                    },
                    afterClose: function() {
                        jQuery("body").removeClass("fts-using-arrows");
                        console.log('Popup is completely closed');
                    },
                },
                image: {
                    markup: '' +
                    '<div class="mfp-figure"><div class="mfp-close">X</div>'+
                    '<div class="fts-popup-wrap">' +
                    '    <div class="fts-popup-half fts-instagram-popup-half">' +
                    '               <button title="previous" type="button" id="fts-photo-prev" class="mfp-arrow mfp-arrow-left mfp-prevent-close"></button>' +
                    '           <div class="fts-popup-image-position">' +
                    '                   <span class="fts-position-helper"></span><div class="mfp-img"></div>' +
                    '       </div>' +
                    '               <button title="next" type="button" id="fts-photo-next" class="mfp-arrow mfp-arrow-right mfp-prevent-close"></button>' +
                    '    </div>'+
                    '<div class="fts-popup-second-half fts-instagram-popup-second-half">' +
                    '<div class="mfp-bottom-bar">'+
                    '<div class="mfp-title"></div>' +
                    '<a class="fts-powered-by-text" href="http://feedthemsocial.com" target="_blank">Powered by Feed Them Social</a>'+
                    '<div class="mfp-counter"></div>'+
                    '</div>' +
                    '</div>' +
                    '</div>'+
                    '</div>', // Popup HTML markup. `.mfp-img` div will be replaced with img tag, `.mfp-close` by close button

                    tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',

                },
                iframe: {
                    markup: '' +
                    '<div class="mfp-figure"><div class="mfp-close">X</div>'+
                    '<div class="fts-popup-wrap">' +
                    '    <div class="fts-popup-half fts-instagram-popup-half">' +
                    '               <button title="previous" type="button" id="fts-photo-prev" class="mfp-arrow mfp-arrow-left mfp-prevent-close"></button>' +
                    '           <div class="fts-popup-image-position">' +
                    '                           <div class="mfp-iframe-scaler"><iframe class="mfp-iframe fts-iframe-popup-element" frameborder="0" allowfullscreen></iframe><video class="mfp-iframe fts-video-popup-element" allowfullscreen autoplay controls></video>' +
                    '                           </div>' +
                    '               <button title="next" type="button" id="fts-photo-next" class="mfp-arrow mfp-arrow-right mfp-prevent-close"></button>' +
                    '<script>' +
                    // SLICKREMIX: MUST HAVE THIS IN PLACE TO BE ABLE TO CHECK WHAT KIND OF VIDEOS ARE BEING CLICKED ON WHEN FIRST LOADED, AFTER THEY ARE LOADED REFER TO THE CLICK FUNCTION FOR THE ERRORS ABOVE
                    'if(jQuery("body").hasClass("fts-video-iframe-choice")){jQuery(".fts-iframe-popup-element").attr("src", "").hide(); } else if(!jQuery("body").hasClass("fts-using-arrows")){jQuery(".fts-video-popup-element").attr("src", "").hide(); };  jQuery(".fts-facebook-popup video").click(function(){jQuery(this).trigger(this.paused ? this.paused ? "play" : "play" : "pause")});</script>' +
                    '       </div>' +
                    '    </div>'+
                    '<div class="fts-popup-second-half fts-instagram-popup-second-half">' +
                    '<div class="mfp-bottom-bar">'+
                    '<div class="mfp-title"></div>' +
                    '<a class="fts-powered-by-text" href="http://feedthemsocial.com" target="_blank">Powered by Feed Them Social</a>'+
                    '<div class="mfp-counter"></div>'+
                    '</div>' +
                    '</div>' +
                    '</div>'+
                    '</div>', // Popup HTML markup. `.mfp-img` div will be replaced with img tag, `.mfp-close` by close button

                    srcAction: 'iframe_src', // Templating object key. First part defines CSS selector, second attribute. "iframe_src" means: find "iframe" and set attribute "src".  
                }
            });

        });
    }
//Return the function right away
    jQuery.fn.slickInstagramPopUpFunction();

// Vine Videos
    jQuery('.fts-vine-wrapper').each(function() { // the containers for all your galleries
        jQuery(this).magnificPopup({
            delegate: 'a.fts-vine-thumbnail',
            tLoading: 'Loading image #%curr%...',
            mainClass: 'fts-vine-vid-popup',
            type:'inline',
            removalDelay: 100,
            midClick: true, // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0,1] // Will preload 0 - before current, and 1 after the current image
            }
        });
    });
});