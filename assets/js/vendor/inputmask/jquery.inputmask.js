/*
 Input Mask plugin for jquery
 http://github.com/RobinHerbots/jquery.inputmask
 Copyright (c) 2010 - 2014 Robin Herbots
 Licensed under the MIT license (http://www.opensource.org/licenses/mit-license.php)
 Version: 3.0.44
*/
(function(e){if(void 0===e.fn.inputmask){var R=function(e){var f=document.createElement("input");e="on"+e;var c=e in f;c||(f.setAttribute(e,"return;"),c="function"==typeof f[e]);return c},F=function(b,f,c){return(b=c.aliases[b])?(b.alias&&F(b.alias,void 0,c),e.extend(!0,c,b),e.extend(!0,c,f),!0):!1},H=function(b){function f(c){function e(c,f,b,l){this.matches=[];this.isGroup=c||!1;this.isOptional=f||!1;this.isQuantifier=b||!1;this.isAlternator=l||!1;this.quantifier={min:1,max:1}}function f(c,e,l){var k=
b.definitions[e],K=0==c.matches.length;l=void 0!=l?l:c.matches.length;if(k&&!z){for(var n=k.prevalidator,w=n?n.length:0,u=1;u<k.cardinality;u++){var t=w>=u?n[u-1]:[],s=t.validator,t=t.cardinality;c.matches.splice(l++,0,{fn:s?"string"==typeof s?RegExp(s):new function(){this.test=s}:/./,cardinality:t?t:1,optionality:c.isOptional,newBlockMarker:K,casing:k.casing,def:k.definitionSymbol||e,placeholder:k.placeholder})}c.matches.splice(l++,0,{fn:k.validator?"string"==typeof k.validator?RegExp(k.validator):
new function(){this.test=k.validator}:/./,cardinality:k.cardinality,optionality:c.isOptional,newBlockMarker:K,casing:k.casing,def:k.definitionSymbol||e,placeholder:k.placeholder})}else c.matches.splice(l++,0,{fn:null,cardinality:0,optionality:c.isOptional,newBlockMarker:K,casing:null,def:e,placeholder:void 0}),z=!1}for(var s=/(?:[?*+]|\{[0-9\+\*]+(?:,[0-9\+\*]*)?\})\??|[^.?*+^${[]()|\\]+|./g,z=!1,u=new e,n,t=[],B=[];n=s.exec(c);)switch(n=n[0],n.charAt(0)){case b.optionalmarker.end:case b.groupmarker.end:var l=
t.pop();0<t.length?t[t.length-1].matches.push(l):u.matches.push(l);break;case b.optionalmarker.start:t.push(new e(!1,!0));break;case b.groupmarker.start:t.push(new e(!0));break;case b.quantifiermarker.start:l=new e(!1,!1,!0);n=n.replace(/[{}]/g,"");var y=n.split(",");n=isNaN(y[0])?y[0]:parseInt(y[0]);y=1==y.length?n:isNaN(y[1])?y[1]:parseInt(y[1]);if("*"==y||"+"==y)n="*"==y?0:1;l.quantifier={min:n,max:y};if(0<t.length){y=t[t.length-1].matches;n=y.pop();if(!n.isGroup){var q=new e(!0);q.matches.push(n);
n=q}y.push(n);y.push(l)}else n=u.matches.pop(),n.isGroup||(q=new e(!0),q.matches.push(n),n=q),u.matches.push(n),u.matches.push(l);break;case b.escapeChar:z=!0;break;case b.alternatormarker:break;default:0<t.length?f(t[t.length-1],n):(0<u.matches.length&&(l=u.matches[u.matches.length-1],l.isGroup&&(l.isGroup=!1,f(l,b.groupmarker.start,0),f(l,b.groupmarker.end))),f(u,n))}0<u.matches.length&&(l=u.matches[u.matches.length-1],l.isGroup&&(l.isGroup=!1,f(l,b.groupmarker.start,0),f(l,b.groupmarker.end)),
B.push(u));return B}function c(c,w){if(b.numericInput&&!0!==b.multi){c=c.split("").reverse();for(var k=0;k<c.length;k++)c[k]==b.optionalmarker.start?c[k]=b.optionalmarker.end:c[k]==b.optionalmarker.end?c[k]=b.optionalmarker.start:c[k]==b.groupmarker.start?c[k]=b.groupmarker.end:c[k]==b.groupmarker.end&&(c[k]=b.groupmarker.start);c=c.join("")}if(void 0!=c&&""!=c){if(0<b.repeat||"*"==b.repeat||"+"==b.repeat)c=b.groupmarker.start+c+b.groupmarker.end+b.quantifiermarker.start+("*"==b.repeat?0:"+"==b.repeat?
1:b.repeat)+","+b.repeat+b.quantifiermarker.end;void 0==e.inputmask.masksCache[c]&&(e.inputmask.masksCache[c]={mask:c,maskToken:f(c),validPositions:{},_buffer:void 0,buffer:void 0,tests:{},metadata:w});return e.extend(!0,{},e.inputmask.masksCache[c])}}var z=[];e.isFunction(b.mask)&&(b.mask=b.mask.call(this,b));e.isArray(b.mask)?e.each(b.mask,function(e,f){void 0!=f.mask?z.push(c(f.mask.toString(),f)):z.push(c(f.toString()))}):(1==b.mask.length&&!1==b.greedy&&0!=b.repeat&&(b.placeholder=""),z=void 0!=
b.mask.mask?c(b.mask.mask.toString(),b.mask):c(b.mask.toString()));return z},ha="function"===typeof ScriptEngineMajorVersion?ScriptEngineMajorVersion():10<=(new Function("/*@cc_on return @_jscript_version; @*/"))(),q=navigator.userAgent,ia=null!==q.match(/iphone/i),ja=null!==q.match(/android.*safari.*/i),ka=null!==q.match(/android.*chrome.*/i),la=null!==q.match(/android.*firefox.*/i),ma=/Kindle/i.test(q)||/Silk/i.test(q)||/KFTT/i.test(q)||/KFOT/i.test(q)||/KFJWA/i.test(q)||/KFJWI/i.test(q)||/KFSOWI/i.test(q)||
/KFTHWA/i.test(q)||/KFTHWI/i.test(q)||/KFAPWA/i.test(q)||/KFAPWI/i.test(q),V=R("paste")?"paste":R("input")?"input":"propertychange",E=function(b,f,c){function z(a,g,d){g=g||0;var e=[],p,h=0,b;do{if(!0===a&&f.validPositions[h]){var l=f.validPositions[h];b=l.match;p=l.locator.slice();e.push(null==b.fn?b.def:!0===d?l.input:b.placeholder||c.placeholder.charAt(h%c.placeholder.length))}else p=g>h?t(h,p,h-1)[0]:U(h,p,h-1),b=p.match,p=p.locator.slice(),e.push(null==b.fn?b.def:b.placeholder||c.placeholder.charAt(h%
c.placeholder.length));h++}while((void 0==L||h-1<L)&&null!=b.fn||null==b.fn&&""!=b.def||g>=h);e.pop();return e}function q(a){var c=f;c.buffer=void 0;c.tests={};!0!==a&&(c._buffer=void 0,c.validPositions={},c.p=-1)}function w(a){var g=f,d=-1,I=g.validPositions;if(e.isFunction(c.getLastValidPosition))d=c.getLastValidPosition.call(m,g,a,c);else{void 0==a&&(a=-1);var g=d,b;for(b in I){var h=parseInt(b);if(-1==a||null!=I[h].match.fn)h<a&&(g=h),h>=a&&(d=h)}d=1<a-g||d<a?g:d}return d}function k(a,g,d){if(c.insertMode&&
void 0!=f.validPositions[a]&&void 0==d){d=e.extend(!0,{},f.validPositions);var I=w(),b;for(b=a;b<=I;b++)delete f.validPositions[b];f.validPositions[a]=g;g=!0;for(b=a;b<=I;b++){a=d[b];if(void 0!=a){var h=null==a.match.fn?b+1:D(b);g=n(h,a.match.def)?g&&!1!==E(h,a.input,!0,!0):!1}if(!g)break}if(!g)return f.validPositions=e.extend(!0,{},d),!1}else f.validPositions[a]=g;return!0}function s(a,c){var d,e=a;for(d=a;d<c;d++)delete f.validPositions[d];for(d=c;d<=w();){var b=f.validPositions[d],h=f.validPositions[e];
void 0!=b&&void 0==h?(n(e,b.match.def)&&!1!==E(e,b.input,!0)&&(delete f.validPositions[d],d++),e++):d++}for(d=w();0<d&&(void 0==f.validPositions[d]||null==f.validPositions[d].match.fn);)delete f.validPositions[d],d--;q(!0)}function U(a,g,d){a=t(a,g,d);var e;for(g=0;g<a.length&&(e=a[g],!c.greedy&&(!e.match||!1!==e.match.optionality&&!1!==e.match.newBlockMarker||!0===e.match.optionalQuantifier));g++);return e}function u(a){return f.validPositions[a]?f.validPositions[a].match:t(a)[0].match}function n(a,
c){for(var d=!1,e=t(a),b=0;b<e.length;b++)if(e[b].match&&e[b].match.def==c){d=!0;break}return d}function t(a,g,d){function b(d,g,f,p){function k(f,p,C){if(h==a&&void 0==f.matches)return r.push({match:f,locator:p.reverse()}),!0;if(void 0!=f.matches)if(f.isGroup&&!0!==C){if(f=k(d.matches[m+1],p))return!0}else if(f.isOptional){var n=f;if(f=b(f,g,p,C))f=r[r.length-1].match,(f=0==e.inArray(f,n.matches))&&(l=!0),h=a}else{if(!f.isAlternator)if(f.isQuantifier&&!0!==C)for(n=f,c.greedy=c.greedy&&isFinite(n.quantifier.max),
C=0<g.length&&!0!==C?g.shift():0;C<(isNaN(n.quantifier.max)?C+1:n.quantifier.max)&&h<=a;C++){var q=d.matches[e.inArray(n,d.matches)-1];if(f=k(q,[C].concat(p),!0))if(f=r[r.length-1].match,f.optionalQuantifier=C>n.quantifier.min-1,f=0==e.inArray(f,q.matches))if(C>n.quantifier.min-1){l=!0;h=a;break}else return!0;else return!0}else if(f=b(f,g,p,C))return!0}else h++}for(var m=0<g.length?g.shift():0;m<d.matches.length;m++)if(!0!==d.matches[m].isQuantifier){var C=k(d.matches[m],[m].concat(f),p);if(C&&h==
a)return C;if(h>a)break}}var p=f.maskToken,h=g?d:0;d=g||[0];var r=[],l=!1;if(void 0==g){g=a-1;for(var k;void 0==(k=f.validPositions[g])&&-1<g;)g--;if(void 0!=k&&-1<g)h=g,d=k.locator.slice();else{for(g=a-1;void 0==(k=f.tests[g])&&-1<g;)g--;void 0!=k&&-1<g&&(h=g,d=k[0].locator.slice())}}for(g=d.shift();g<p.length&&!(b(p[g],d,[g])&&h==a||h>a);g++);(0==r.length||l)&&r.push({match:{fn:null,cardinality:0,optionality:!0,casing:null,def:""},locator:[]});return f.tests[a]=r}function B(){void 0==f._buffer&&
(f._buffer=z(!1,1));return f._buffer}function l(){void 0==f.buffer&&(f.buffer=z(!0,w(),!0));return f.buffer}function y(a,g){var d=l().slice();if(!0===a)q(),a=0,g=d.length;else for(var e=a;e<g;e++)delete f.validPositions[e],delete f.tests[e];for(e=a;e<g;e++)d[e]!=c.skipOptionalPartCharacter&&E(e,d[e],!0,!0)}function F(a,c){switch(c.casing){case "upper":a=a.toUpperCase();break;case "lower":a=a.toLowerCase()}return a}function E(a,g,d,b){function p(a,d,g,b){var h=!1;e.each(t(a),function(p,I){var r=I.match,
m=d?1:0,n="";l();for(var t=r.cardinality;t>m;t--)n+=void 0==f.validPositions[a-(t-1)]?S(a-(t-1)):f.validPositions[a-(t-1)].input;d&&(n+=d);h=null!=r.fn?r.fn.test(n,f,a,g,c):d!=r.def&&d!=c.skipOptionalPartCharacter||""==r.def?!1:{c:r.def,pos:a};if(!1!==h){m=void 0!=h.c?h.c:d;m=m==c.skipOptionalPartCharacter&&null===r.fn?r.def:m;n=a;void 0!=h.remove&&s(h.remove,h.remove+1);if(h.refreshFromBuffer){n=h.refreshFromBuffer;g=!0;y(!0===n?n:n.start,n.end);if(void 0==h.pos&&void 0==h.c)return h.pos=w(),!1;
n=void 0!=h.pos?h.pos:a;if(n!=a)return h=e.extend(h,E(n,m,!0)),!1}else if(!0!==h&&void 0!=h.pos&&h.pos!=a&&(n=h.pos,y(a,n),n!=a))return h=e.extend(h,E(n,m,!0)),!1;if(!0!=h&&void 0==h.pos&&void 0==h.c)return!1;0<p&&q(!0);k(n,e.extend({},I,{input:F(m,r)}),b)||(h=!1);return!1}});return h}d=!0===d;for(var h=l(),r=a-1;-1<r&&(!f.validPositions[r]||null!=f.validPositions[r].fn);r--)if((!M(r)||h[r]!=S(r))&&1<t(r).length){p(r,h[r],!0);break}if(a>=O())return!1;h=p(a,g,d,b);if(!d&&!1===h)if((r=f.validPositions[a])&&
null==r.match.fn&&(r.match.def==g||g==c.skipOptionalPartCharacter))h={caret:D(a)};else if((c.insertMode||void 0==f.validPositions[D(a)])&&!M(a))for(var r=a+1,m=D(a);r<=m;r++)if(h=p(r,g,d,b),!1!==h){a=r;break}!0===h&&(h={pos:a});return h}function M(a){a=u(a);return null!=a.fn?a.fn:!1}function O(){var a;L=m.prop("maxLength");-1==L&&(L=void 0);if(!1==c.greedy){var g;g=w();a=f.validPositions[g];var d=void 0!=a?a.locator.slice():void 0;for(g+=1;void 0==a||null!=a.match.fn||null==a.match.fn&&""!=a.match.def;g++)a=
U(g,d,g-1),d=a.locator.slice();a=g}else a=l().length;return void 0==L||a<L?a:L}function D(a){var g=O();if(a>=g)return g;for(;++a<g&&!M(a)&&(!0!==c.nojumps||c.nojumpsThreshold>a););return a}function H(a){if(0>=a)return 0;for(;0<--a&&!M(a););return a}function G(a,c,d){a._valueSet(c.join(""));void 0!=d&&v(a,d)}function S(a,g){g=g||u(a);return g.placeholder||(null==g.fn?g.def:c.placeholder.charAt(a%c.placeholder.length))}function P(a,c,d,b,p){b=void 0!=b?b.slice():ga(a._valueGet()).split("");q();c&&a._valueSet("");
e.each(b,function(c,g){if(!0===p){var b=f.p,b=-1==b?b:H(b),I=-1==b?c:D(b);-1==e.inArray(g,B().slice(b+1,I))&&W.call(a,void 0,!0,g.charCodeAt(0),!1,d,c)}else W.call(a,void 0,!0,g.charCodeAt(0),!1,d,c),d=d||0<c&&c>f.p});c&&G(a,l(),e(a).is(":focus")?D(w(0)):void 0)}function R(a){return e.inputmask.escapeRegex.call(this,a)}function ga(a){return a.replace(RegExp("("+R(B().join(""))+")*$"),"")}function aa(a,g){if(!a.data("_inputmask")||!0!==g&&a.hasClass("hasDatepicker"))return a[0]._valueGet();var d=[],
b=f.validPositions,p;for(p in b)b[p].match&&null!=b[p].match.fn&&d.push(b[p].input);d=(A?d.reverse():d).join("");b=(A?l().reverse():l()).join("");return e.isFunction(c.onUnMask)?c.onUnMask.call(a,b,d,c):d}function N(a){!A||"number"!=typeof a||c.greedy&&""==c.placeholder||(a=l().length-a);return a}function v(a,g,d){a=a.jquery&&0<a.length?a[0]:a;if("number"==typeof g){g=N(g);d=N(d);d="number"==typeof d?d:g;var b=e(a).data("_inputmask")||{};b.caret={begin:g,end:d};e(a).data("_inputmask",b);e(a).is(":visible")&&
(a.scrollLeft=a.scrollWidth,!1==c.insertMode&&g==d&&d++,a.setSelectionRange?(a.selectionStart=g,a.selectionEnd=d):a.createTextRange&&(a=a.createTextRange(),a.collapse(!0),a.moveEnd("character",d),a.moveStart("character",g),a.select()))}else return b=e(a).data("_inputmask"),!e(a).is(":visible")&&b&&void 0!=b.caret?(g=b.caret.begin,d=b.caret.end):a.setSelectionRange?(g=a.selectionStart,d=a.selectionEnd):document.selection&&document.selection.createRange&&(a=document.selection.createRange(),g=0-a.duplicate().moveStart("character",
-1E5),d=g+a.text.length),g=N(g),d=N(d),{begin:g,end:d}}function ba(a){var c=l(),d=c.length,b,p=w(),h={},r=void 0!=f.validPositions[p]?f.validPositions[p].locator.slice():void 0,k;for(b=p+1;b<c.length;b++)k=U(b,r,b-1),r=k.locator.slice(),h[b]=e.extend(!0,{},k);for(b=d-1;b>p;b--)if(k=h[b].match,(k.optionality||k.optionalQuantifier)&&c[b]==S(b,k))d--;else break;return a?{l:d,def:h[d]?h[d].match:void 0}:d}function X(a){var c=l().slice(),d=ba();c.length=d;G(a,c)}function Q(a){if(e.isFunction(c.isComplete))return c.isComplete.call(m,
a,c);if("*"!=c.repeat){var b=!1,d=ba(!0),f=H(d.l);if(w()==f&&(void 0==d.def||d.def.newBlockMarker||d.def.optionalQuantifier))for(b=!0,d=0;d<=f;d++){var p=M(d);if(p&&(void 0==a[d]||a[d]==S(d))||!p&&a[d]!=S(d)){b=!1;break}}return b}}function na(a){a=e._data(a).events;e.each(a,function(a,c){e.each(c,function(a,c){if("inputmask"==c.namespace&&"setvalue"!=c.type){var d=c.handler;c.handler=function(a){if(this.readOnly||this.disabled)a.preventDefault;else return d.apply(this,arguments)}}})})}function oa(a){function c(a){if(void 0==
e.valHooks[a]||!0!=e.valHooks[a].inputmaskpatch){var b=e.valHooks[a]&&e.valHooks[a].get?e.valHooks[a].get:function(a){return a.value},d=e.valHooks[a]&&e.valHooks[a].set?e.valHooks[a].set:function(a,c){a.value=c;return a};e.valHooks[a]={get:function(a){var c=e(a);if(c.data("_inputmask")){if(c.data("_inputmask").opts.autoUnmask)return c.inputmask("unmaskedvalue");a=b(a);c=(c=c.data("_inputmask").maskset._buffer)?c.join(""):"";return a!=c?a:""}return b(a)},set:function(a,c){var b=e(a),g=b.data("_inputmask");
g?(g=d(a,e.isFunction(g.opts.onBeforeMask)?g.opts.onBeforeMask.call(x,c,g.opts):c),b.triggerHandler("setvalue.inputmask")):g=d(a,c);return g},inputmaskpatch:!0}}}var d;Object.getOwnPropertyDescriptor&&(d=Object.getOwnPropertyDescriptor(a,"value"));if(d&&d.get){if(!a._valueGet){var b=d.get,f=d.set;a._valueGet=function(){return A?b.call(this).split("").reverse().join(""):b.call(this)};a._valueSet=function(a){f.call(this,A?a.split("").reverse().join(""):a)};Object.defineProperty(a,"value",{get:function(){var a=
e(this),c=e(this).data("_inputmask");return c?c.opts.autoUnmask?a.inputmask("unmaskedvalue"):b.call(this)!=B().join("")?b.call(this):"":b.call(this)},set:function(a){var c=e(this).data("_inputmask");c?(f.call(this,e.isFunction(c.opts.onBeforeMask)?c.opts.onBeforeMask.call(x,a,c.opts):a),e(this).triggerHandler("setvalue.inputmask")):f.call(this,a)}})}}else document.__lookupGetter__&&a.__lookupGetter__("value")?a._valueGet||(b=a.__lookupGetter__("value"),f=a.__lookupSetter__("value"),a._valueGet=function(){return A?
b.call(this).split("").reverse().join(""):b.call(this)},a._valueSet=function(a){f.call(this,A?a.split("").reverse().join(""):a)},a.__defineGetter__("value",function(){var a=e(this),c=e(this).data("_inputmask");return c?c.opts.autoUnmask?a.inputmask("unmaskedvalue"):b.call(this)!=B().join("")?b.call(this):"":b.call(this)}),a.__defineSetter__("value",function(a){var c=e(this).data("_inputmask");c?(f.call(this,e.isFunction(c.opts.onBeforeMask)?c.opts.onBeforeMask.call(x,a,c.opts):a),e(this).triggerHandler("setvalue.inputmask")):
f.call(this,a)})):(a._valueGet||(a._valueGet=function(){return A?this.value.split("").reverse().join(""):this.value},a._valueSet=function(a){this.value=A?a.split("").reverse().join(""):a}),c(a.type))}function ca(a,b,d){if(c.numericInput||A){switch(b){case c.keyCode.BACKSPACE:b=c.keyCode.DELETE;break;case c.keyCode.DELETE:b=c.keyCode.BACKSPACE}A&&(a=d.end,d.end=d.begin,d.begin=a)}d.begin==d.end?b==c.keyCode.BACKSPACE?d.begin=H(d.begin):b==c.keyCode.DELETE&&d.end++:1!=d.end-d.begin||c.insertMode||b==
c.keyCode.BACKSPACE&&d.begin--;s(d.begin,d.end);b=D(-1);w()<b?f.p=b:f.p=d.begin}function Y(a,c,b){if(c&&c.refreshFromBuffer){var e=c.refreshFromBuffer;y(!0===e?e:e.start,e.end);q(!0);G(a,l());v(a,c.caret||b.begin,c.caret||b.end)}}function da(a){Z=!1;var b=this,d=e(b),k=a.keyCode,p=v(b);k==c.keyCode.BACKSPACE||k==c.keyCode.DELETE||ia&&127==k||a.ctrlKey&&88==k?(a.preventDefault(),88==k&&(J=l().join("")),ca(b,k,p),G(b,l(),f.p),b._valueGet()==B().join("")&&d.trigger("cleared"),c.showTooltip&&d.prop("title",
f.mask)):k==c.keyCode.END||k==c.keyCode.PAGE_DOWN?setTimeout(function(){var d=D(w());c.insertMode||d!=O()||a.shiftKey||d--;v(b,a.shiftKey?p.begin:d,d)},0):k==c.keyCode.HOME&&!a.shiftKey||k==c.keyCode.PAGE_UP?v(b,0,a.shiftKey?p.begin:0):k==c.keyCode.ESCAPE||90==k&&a.ctrlKey?(P(b,!0,!1,J.split("")),d.click()):k!=c.keyCode.INSERT||a.shiftKey||a.ctrlKey?!1!=c.insertMode||a.shiftKey||(k==c.keyCode.RIGHT?setTimeout(function(){var a=v(b);v(b,a.begin)},0):k==c.keyCode.LEFT&&setTimeout(function(){var a=v(b);
v(b,A?a.begin+1:a.begin-1)},0)):(c.insertMode=!c.insertMode,v(b,c.insertMode||p.begin!=O()?p.begin:p.begin-1));var d=v(b),h=c.onKeyDown.call(this,a,l(),c);Y(b,h,d);ea=-1!=e.inArray(k,c.ignorables)}function W(a,b,d,m,p,h){if(void 0==d&&Z)return!1;Z=!0;var n=e(this);a=a||window.event;d=b?d:a.which||a.charCode||a.keyCode;if(!(!0===b||a.ctrlKey&&a.altKey)&&(a.ctrlKey||a.metaKey||ea))return!0;if(d){!0!==b&&46==d&&!1==a.shiftKey&&","==c.radixPoint&&(d=44);var t;d=String.fromCharCode(d);b?(h=p?h:w()+1,h=
{begin:h,end:h}):h=v(this);var u=A?1<h.begin-h.end||1==h.begin-h.end&&c.insertMode:1<h.end-h.begin||1==h.end-h.begin&&c.insertMode;u&&(f.undoPositions=e.extend(!0,{},f.validPositions),ca(this,c.keyCode.DELETE,h),c.insertMode||(c.insertMode=!c.insertMode,k(h.begin,p),c.insertMode=!c.insertMode),u=!c.multi);f.writeOutBuffer=!0;var s=A&&!u?h.end:h.begin,z=E(s,d,p);!1!==z&&(!0!==z&&(s=void 0!=z.pos?z.pos:s,d=void 0!=z.c?z.c:d),q(!0),void 0!=z.caret?t=z.caret:(p=f.validPositions,t=void 0!=p[s+1]&&U(h+
1,p[s].locator.slice(),s).match.def!=p[s+1].match.def?s+1:D(s)),f.p=t);if(!1!==m){var y=this;setTimeout(function(){c.onKeyValidation.call(y,z,c)},0);if(f.writeOutBuffer&&!1!==z){var x=l();G(this,x,b?void 0:c.numericInput?H(t):t);!0!==b&&setTimeout(function(){!0===Q(x)&&n.trigger("complete");T=!0;n.trigger("input")},0)}else u&&(f.buffer=void 0,f.validPositions=f.undoPositions)}else u&&(f.buffer=void 0,f.validPositions=f.undoPositions);c.showTooltip&&n.prop("title",f.mask);a&&!0!=b&&(a.preventDefault?
a.preventDefault():a.returnValue=!1,b=v(this),a=c.onKeyPress.call(this,a,l(),c),Y(this,a,b));for(var B in f.validPositions);}}function pa(a){var b=e(this),d=a.keyCode,f=l(),k=v(this);a=c.onKeyUp.call(this,a,f,c);Y(this,a,k);d==c.keyCode.TAB&&c.showMaskOnFocus&&(b.hasClass("focus.inputmask")&&0==this._valueGet().length?(q(),f=l(),G(this,f),v(this,0),J=l().join("")):(G(this,f),v(this,N(0),N(O()))))}function fa(a){if(!0===T&&"input"==a.type)return T=!1,!0;var b=e(this),d=this._valueGet();if("propertychange"==
a.type&&this._valueGet().length<=O())return!0;"paste"==a.type&&(window.clipboardData&&window.clipboardData.getData?d=window.clipboardData.getData("Text"):a.originalEvent&&a.originalEvent.clipboardData&&a.originalEvent.clipboardData.getData&&(d=a.originalEvent.clipboardData.getData("text/plain")));a=e.isFunction(c.onBeforePaste)?c.onBeforePaste.call(this,d,c):d;P(this,!0,!1,a.split(""),!0);b.click();!0===Q(l())&&b.trigger("complete");return!1}function qa(a){if(!0===T&&"input"==a.type)return T=!1,!0;
var b=v(this),d=this._valueGet(),d=d.replace(RegExp("("+R(B().join(""))+")*"),"");b.begin>d.length&&(v(this,d.length),b=v(this));1!=l().length-d.length||d.charAt(b.begin)==l()[b.begin]||d.charAt(b.begin+1)==l()[b.begin]||M(b.begin)||(a.keyCode=c.keyCode.BACKSPACE,da.call(this,a));a.preventDefault()}function ra(a){m=e(a);if(m.is(":input")&&"number"!=m.attr("type")){m.data("_inputmask",{maskset:f,opts:c,isRTL:!1});c.showTooltip&&m.prop("title",f.mask);oa(a);("rtl"==a.dir||c.rightAlign)&&m.css("text-align",
"right");if("rtl"==a.dir||c.numericInput){a.dir="ltr";m.removeAttr("dir");var b=m.data("_inputmask");b.isRTL=!0;m.data("_inputmask",b);A=!0}m.unbind(".inputmask");m.removeClass("focus.inputmask");m.closest("form").bind("submit",function(){J!=l().join("")&&m.change()}).bind("reset",function(){setTimeout(function(){m.trigger("setvalue")},0)});m.bind("mouseenter.inputmask",function(){!e(this).hasClass("focus.inputmask")&&c.showMaskOnHover&&this._valueGet()!=l().join("")&&G(this,l())}).bind("blur.inputmask",
function(){var a=e(this);if(a.data("_inputmask")){var b=this._valueGet(),d=l();a.removeClass("focus.inputmask");J!=l().join("")&&a.change();c.clearMaskOnLostFocus&&""!=b&&(b==B().join("")?this._valueSet(""):X(this));!1===Q(d)&&(a.trigger("incomplete"),c.clearIncomplete&&(q(),c.clearMaskOnLostFocus?this._valueSet(""):(d=B().slice(),G(this,d))))}}).bind("focus.inputmask",function(){var a=e(this),b=this._valueGet();c.showMaskOnFocus&&!a.hasClass("focus.inputmask")&&(!c.showMaskOnHover||c.showMaskOnHover&&
""==b)&&this._valueGet()!=l().join("")&&G(this,l(),D(w()));a.addClass("focus.inputmask");J=l().join("")}).bind("mouseleave.inputmask",function(){var a=e(this);c.clearMaskOnLostFocus&&(a.hasClass("focus.inputmask")||this._valueGet()==a.attr("placeholder")||(this._valueGet()==B().join("")||""==this._valueGet()?this._valueSet(""):X(this)))}).bind("click.inputmask",function(){var a=this;setTimeout(function(){var c=v(a);l();if(c.begin==c.end){var c=A?N(c.begin):c.begin,b=w(c),b=D(b);c<b?M(c)?v(a,c):v(a,
D(c)):v(a,b)}},0)}).bind("dblclick.inputmask",function(){var a=this;setTimeout(function(){v(a,0,D(w()))},0)}).bind(V+".inputmask dragdrop.inputmask drop.inputmask",fa).bind("setvalue.inputmask",function(){P(this,!0);J=l().join("");this._valueGet()==B().join("")&&this._valueSet("")}).bind("complete.inputmask",c.oncomplete).bind("incomplete.inputmask",c.onincomplete).bind("cleared.inputmask",c.oncleared);m.bind("keydown.inputmask",da).bind("keypress.inputmask",W).bind("keyup.inputmask",pa);if(ja||la||
ka||ma)"input"==V&&m.unbind(V+".inputmask"),m.bind("input.inputmask",qa);ha&&m.bind("input.inputmask",fa);b=e.isFunction(c.onBeforeMask)?c.onBeforeMask.call(a,a._valueGet(),c):a._valueGet();P(a,!0,!1,b.split(""),!0);J=l().join("");var d;try{d=document.activeElement}catch(k){}d===a?(m.addClass("focus.inputmask"),v(a,D(w()))):(!1===Q(l())&&c.clearIncomplete&&q(),c.clearMaskOnLostFocus?l().join("")==B().join("")?a._valueSet(""):X(a):G(a,l()));na(a)}}var A=!1,J,m,Z=!1,T=!1,ea=!1,L;if(void 0!=b)switch(b.action){case "isComplete":return m=
e(b.el),f=m.data("_inputmask").maskset,c=m.data("_inputmask").opts,Q(b.buffer);case "unmaskedvalue":return m=b.$input,f=m.data("_inputmask").maskset,c=m.data("_inputmask").opts,A=b.$input.data("_inputmask").isRTL,aa(b.$input,b.skipDatepickerCheck);case "mask":J=l().join("");ra(b.el);break;case "format":return m=e({}),m.data("_inputmask",{maskset:f,opts:c,isRTL:c.numericInput}),c.numericInput&&(A=!0),b=b.value.split(""),P(m,!1,!1,A?b.reverse():b,!0),A?l().reverse().join(""):l().join("");case "isValid":return m=
e({}),m.data("_inputmask",{maskset:f,opts:c,isRTL:c.numericInput}),c.numericInput&&(A=!0),b=b.value.split(""),P(m,!1,!0,A?b.reverse():b),Q(l());case "getemptymask":return m=e(b.el),f=m.data("_inputmask").maskset,c=m.data("_inputmask").opts,B();case "remove":var x=b.el;m=e(x);f=m.data("_inputmask").maskset;c=m.data("_inputmask").opts;x._valueSet(aa(m));m.unbind(".inputmask");m.removeClass("focus.inputmask");m.removeData("_inputmask");var $;Object.getOwnPropertyDescriptor&&($=Object.getOwnPropertyDescriptor(x,
"value"));$&&$.get?x._valueGet&&Object.defineProperty(x,"value",{get:x._valueGet,set:x._valueSet}):document.__lookupGetter__&&x.__lookupGetter__("value")&&x._valueGet&&(x.__defineGetter__("value",x._valueGet),x.__defineSetter__("value",x._valueSet));try{delete x._valueGet,delete x._valueSet}catch(sa){x._valueGet=void 0,x._valueSet=void 0}}};e.inputmask={defaults:{placeholder:"_",optionalmarker:{start:"[",end:"]"},quantifiermarker:{start:"{",end:"}"},groupmarker:{start:"(",end:")"},alternatormarker:"|",
escapeChar:"\\",mask:null,oncomplete:e.noop,onincomplete:e.noop,oncleared:e.noop,repeat:0,greedy:!0,autoUnmask:!1,clearMaskOnLostFocus:!0,insertMode:!0,clearIncomplete:!1,aliases:{},alias:null,onKeyUp:e.noop,onKeyPress:e.noop,onKeyDown:e.noop,onBeforeMask:void 0,onBeforePaste:void 0,onUnMask:void 0,showMaskOnFocus:!0,showMaskOnHover:!0,onKeyValidation:e.noop,skipOptionalPartCharacter:" ",showTooltip:!1,numericInput:!1,getLastValidPosition:void 0,rightAlign:!1,radixPoint:"",nojumps:!1,nojumpsThreshold:0,
definitions:{9:{validator:"[0-9]",cardinality:1,definitionSymbol:"*"},a:{validator:"[A-Za-z\u0410-\u044f\u0401\u0451]",cardinality:1,definitionSymbol:"*"},"*":{validator:"[A-Za-z\u0410-\u044f\u0401\u04510-9]",cardinality:1}},keyCode:{ALT:18,BACKSPACE:8,CAPS_LOCK:20,COMMA:188,COMMAND:91,COMMAND_LEFT:91,COMMAND_RIGHT:93,CONTROL:17,DELETE:46,DOWN:40,END:35,ENTER:13,ESCAPE:27,HOME:36,INSERT:45,LEFT:37,MENU:93,NUMPAD_ADD:107,NUMPAD_DECIMAL:110,NUMPAD_DIVIDE:111,NUMPAD_ENTER:108,NUMPAD_MULTIPLY:106,NUMPAD_SUBTRACT:109,
PAGE_DOWN:34,PAGE_UP:33,PERIOD:190,RIGHT:39,SHIFT:16,SPACE:32,TAB:9,UP:38,WINDOWS:91},ignorables:[8,9,13,19,27,33,34,35,36,37,38,39,40,45,46,93,112,113,114,115,116,117,118,119,120,121,122,123],isComplete:void 0},masksCache:{},escapeRegex:function(b){return b.replace(RegExp("(\\/|\\.|\\*|\\+|\\?|\\||\\(|\\)|\\[|\\]|\\{|\\}|\\\\)","gim"),"\\$1")},format:function(b,f){var c=e.extend(!0,{},e.inputmask.defaults,f);F(c.alias,f,c);return E({action:"format",value:b},H(c),c)},isValid:function(b,f){var c=e.extend(!0,
{},e.inputmask.defaults,f);F(c.alias,f,c);return E({action:"isValid",value:b},H(c),c)}};e.fn.inputmask=function(b,f,c,q,K){function w(c,b){var f=e(c),k;for(k in b){var q=f.data("inputmask-"+k.toLowerCase());void 0!=q&&(b[k]=q)}return b}c=c||E;q=q||"_inputmask";var k=e.extend(!0,{},e.inputmask.defaults,f),s;if("string"===typeof b)switch(b){case "mask":return F(k.alias,f,k),s=H(k),0==s.length?this:this.each(function(){c({action:"mask",el:this},e.extend(!0,{},e.isArray(s)&&c===E?s[0]:s),w(this,k))});
case "unmaskedvalue":return b=e(this),b.data(q)?c({action:"unmaskedvalue",$input:b}):b.val();case "remove":return this.each(function(){e(this).data(q)&&c({action:"remove",el:this})});case "getemptymask":return this.data(q)?c({action:"getemptymask",el:this}):"";case "hasMaskedValue":return this.data(q)?!this.data(q).opts.autoUnmask:!1;case "isComplete":return this.data(q)?c({action:"isComplete",buffer:this[0]._valueGet().split(""),el:this}):!0;case "getmetadata":if(this.data(q))return s=this.data(q).maskset,
s.metadata;break;case "_detectScope":return F(k.alias,f,k),void 0==K||F(K,f,k)||-1!=e.inArray(K,"mask unmaskedvalue remove getemptymask hasMaskedValue isComplete getmetadata _detectScope".split(" "))||(k.mask=K),e.isFunction(k.mask)&&(k.mask=k.mask.call(this,k)),e.isArray(k.mask);default:return F(b,f,k)||(k.mask=b),s=H(k),void 0==s?this:this.each(function(){c({action:"mask",el:this},e.extend(!0,{},e.isArray(s)&&c===E?s[0]:s),w(this,k))})}else{if("object"==typeof b)return k=e.extend(!0,{},e.inputmask.defaults,
b),F(k.alias,b,k),s=H(k),void 0==s?this:this.each(function(){c({action:"mask",el:this},e.extend(!0,{},e.isArray(s)&&c===E?s[0]:s),w(this,k))});if(void 0==b)return this.each(function(){var b=e(this).attr("data-inputmask");if(b&&""!=b)try{var b=b.replace(RegExp("'","g"),'"'),q=e.parseJSON("{"+b+"}");e.extend(!0,q,f);k=e.extend(!0,{},e.inputmask.defaults,q);F(k.alias,q,k);k.alias=void 0;e(this).inputmask("mask",k,c)}catch(n){}})}}}})(jQuery);