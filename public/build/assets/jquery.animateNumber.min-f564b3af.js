(function(r){var s=function(t){return t.split("").reverse().join("")},v={numberStep:function(t,e){var o=Math.floor(t);r(e.elem).text(o)}},S=function(t){var e=t.elem;e.nodeType&&e.parentNode&&(e=e._animateNumberSetter,e||(e=v.numberStep),e(t.now,t))};r.Tween&&r.Tween.propHooks?r.Tween.propHooks.number={set:S}:r.fx.step.number=S,r.animateNumber={numberStepFactories:{append:function(t){return function(e,o){var u=Math.floor(e);r(o.elem).prop("number",e).text(u+t)}},separator:function(t,e,o){return t=t||" ",e=e||3,o=o||"",function(u,i){var p=0>u,n=Math.floor((p?-1:1)*u).toString(),f=r(i.elem);if(n.length>e){for(var a=n,m=e,b=a.split("").reverse(),n=[],l,h,c,g=0,N=Math.ceil(a.length/m);g<N;g++){for(l="",c=0;c<m&&(h=g*m+c,h!==a.length);c++)l+=b[h];n.push(l)}a=n.length-1,m=s(n[a]),n[a]=s(parseInt(m,10).toString()),n=n.join(t),n=s(n)}f.prop("number",u).text((p?"-":"")+n+o)}}}},r.fn.animateNumber=function(){for(var t=arguments[0],e=r.extend({},v,t),o=r(this),u=[e],i=1,p=arguments.length;i<p;i++)u.push(arguments[i]);if(t.numberStep){var n=this.each(function(){this._animateNumberSetter=t.numberStep}),f=e.complete;e.complete=function(){n.each(function(){delete this._animateNumberSetter}),f&&f.apply(this,arguments)}}return o.animate.apply(o,u)}})(jQuery);
