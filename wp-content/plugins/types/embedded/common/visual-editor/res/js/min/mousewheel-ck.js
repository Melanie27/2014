!function(e){function t(t){var n=t||window.event,l=[].slice.call(arguments,1),i=0,s=!0,h=0,o=0;return t=e.event.fix(n),t.type="mousewheel",t.wheelDelta&&(i=t.wheelDelta/120),t.detail&&(i=-t.detail/3),o=i,void 0!==n.axis&&n.axis===n.HORIZONTAL_AXIS&&(o=0,h=-1*i),void 0!==n.wheelDeltaY&&(o=n.wheelDeltaY/120),void 0!==n.wheelDeltaX&&(h=-1*n.wheelDeltaX/120),l.unshift(t,i,h,o),e.event.handle.apply(this,l)}var n=["DOMMouseScroll","mousewheel"];e.event.special.mousewheel={setup:function(){if(this.addEventListener)for(var e=n.length;e;)this.addEventListener(n[--e],t,!1);else this.onmousewheel=t},teardown:function(){if(this.removeEventListener)for(var e=n.length;e;)this.removeEventListener(n[--e],t,!1);else this.onmousewheel=null}},e.fn.extend({mousewheel:function(e){return e?this.bind("mousewheel",e):this.trigger("mousewheel")},unmousewheel:function(e){return this.unbind("mousewheel",e)}})}(jQuery);