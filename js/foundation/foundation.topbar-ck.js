/*jslint unparam: true, browser: true, indent: 2 */(function(e,t,n,r){"use strict";Foundation.libs.topbar={name:"topbar",version:"4.3.2",settings:{index:0,stickyClass:"sticky",custom_back_text:!0,back_text:"Back",is_hover:!0,mobile_show_parent_link:!1,scrolltop:!0,init:!1},init:function(n,r,i){Foundation.inherit(this,"data_options addCustomRule");var s=this;typeof r=="object"?e.extend(!0,this.settings,r):typeof i!="undefined"&&e.extend(!0,this.settings,i);if(typeof r!="string"){e(".top-bar, [data-topbar]").each(function(){e.extend(!0,s.settings,s.data_options(e(this)));s.settings.$w=e(t);s.settings.$topbar=e(this);s.settings.$section=s.settings.$topbar.find("section");s.settings.$titlebar=s.settings.$topbar.children("ul").first();s.settings.$topbar.data("index",0);var n=s.settings.$topbar.parent();if(n.hasClass("fixed")||n.hasClass(s.settings.stickyClass)){s.settings.$topbar.data("height",s.outerHeight(n));s.settings.$topbar.data("stickyoffset",n.offset().top)}else s.settings.$topbar.data("height",s.outerHeight(s.settings.$topbar));var r=e("<div class='top-bar-js-breakpoint'/>").insertAfter(s.settings.$topbar);s.settings.breakPoint=r.width();r.remove();s.assemble();s.settings.is_hover&&s.settings.$topbar.find(".has-dropdown").addClass("not-click");s.addCustomRule(".f-topbar-fixed { padding-top: "+s.settings.$topbar.data("height")+"px }");s.settings.$topbar.parent().hasClass("fixed")&&e("body").addClass("f-topbar-fixed")});s.settings.init||this.events();return this.settings.init}return this[r].call(this,i)},toggle:function(){var n=this,r=e(".top-bar, [data-topbar]"),i=r.find("section, .section");if(n.breakpoint()){if(!n.rtl){i.css({left:"0%"});i.find(">.name").css({left:"100%"})}else{i.css({right:"0%"});i.find(">.name").css({right:"100%"})}i.find("li.moved").removeClass("moved");r.data("index",0);r.toggleClass("expanded").css("height","")}if(n.settings.scrolltop){if(!r.hasClass("expanded")){if(r.hasClass("fixed")){r.parent().addClass("fixed");r.removeClass("fixed");e("body").addClass("f-topbar-fixed")}}else if(r.parent().hasClass("fixed"))if(n.settings.scrolltop){r.parent().removeClass("fixed");r.addClass("fixed");e("body").removeClass("f-topbar-fixed");t.scrollTo(0,0)}else r.parent().removeClass("expanded")}else{r.parent().hasClass(n.settings.stickyClass)&&r.parent().addClass("fixed");if(r.parent().hasClass("fixed"))if(!r.hasClass("expanded")){r.removeClass("fixed");r.parent().removeClass("expanded");n.updateStickyPositioning()}else{r.addClass("fixed");r.parent().addClass("expanded")}}},timer:null,events:function(){var r=this;e(this.scope).off(".fndtn.topbar").on("click.fndtn.topbar",".top-bar .toggle-topbar, [data-topbar] .toggle-topbar",function(e){e.preventDefault();r.toggle()}).on("click.fndtn.topbar",".top-bar li.has-dropdown",function(t){var n=e(this),i=e(t.target),s=n.closest("[data-topbar], .top-bar"),o=s.data("topbar");if(i.data("revealId")){r.toggle();return}if(r.breakpoint())return;if(r.settings.is_hover&&!Modernizr.touch)return;t.stopImmediatePropagation();i[0].nodeName==="A"&&i.parent().hasClass("has-dropdown")&&t.preventDefault();if(n.hasClass("hover")){n.removeClass("hover").find("li").removeClass("hover");n.parents("li.hover").removeClass("hover")}else n.addClass("hover")}).on("click.fndtn.topbar",".top-bar .has-dropdown>a, [data-topbar] .has-dropdown>a",function(n){if(r.breakpoint()&&e(t).width()!=r.settings.breakPoint){n.preventDefault();var i=e(this),s=i.closest(".top-bar, [data-topbar]"),o=s.find("section, .section"),u=i.next(".dropdown").outerHeight(),a=i.closest("li");s.data("index",s.data("index")+1);a.addClass("moved");if(!r.rtl){o.css({left:-(100*s.data("index"))+"%"});o.find(">.name").css({left:100*s.data("index")+"%"})}else{o.css({right:-(100*s.data("index"))+"%"});o.find(">.name").css({right:100*s.data("index")+"%"})}s.css("height",r.outerHeight(i.siblings("ul"),!0)+r.settings.$topbar.data("height"))}});e(t).on("resize.fndtn.topbar",function(){if(typeof r.settings.$topbar=="undefined")return;var t=r.settings.$topbar.parent("."+this.settings.stickyClass),i;if(!r.breakpoint()){var s=r.settings.$topbar.hasClass("expanded");e(".top-bar, [data-topbar]").css("height","").removeClass("expanded").find("li").removeClass("hover");s&&r.toggle()}if(t.length>0)if(t.hasClass("fixed")){t.removeClass("fixed");i=t.offset().top;e(n.body).hasClass("f-topbar-fixed")&&(i-=r.settings.$topbar.data("height"));r.settings.$topbar.data("stickyoffset",i);t.addClass("fixed")}else{i=t.offset().top;r.settings.$topbar.data("stickyoffset",i)}}.bind(this));e("body").on("click.fndtn.topbar",function(t){var n=e(t.target).closest("li").closest("li.hover");if(n.length>0)return;e(".top-bar li, [data-topbar] li").removeClass("hover")});e(this.scope).on("click.fndtn",".top-bar .has-dropdown .back, [data-topbar] .has-dropdown .back",function(t){t.preventDefault();var n=e(this),i=n.closest(".top-bar, [data-topbar]"),s=i.find("section, .section"),o=n.closest("li.moved"),u=o.parent();i.data("index",i.data("index")-1);if(!r.rtl){s.css({left:-(100*i.data("index"))+"%"});s.find(">.name").css({left:100*i.data("index")+"%"})}else{s.css({right:-(100*i.data("index"))+"%"});s.find(">.name").css({right:100*i.data("index")+"%"})}i.data("index")===0?i.css("height",""):i.css("height",r.outerHeight(u,!0)+r.settings.$topbar.data("height"));setTimeout(function(){o.removeClass("moved")},300)})},breakpoint:function(){return e(n).width()<=this.settings.breakPoint||e("html").hasClass("lt-ie9")},assemble:function(){var t=this;this.settings.$section.detach();this.settings.$section.find(".has-dropdown>a").each(function(){var n=e(this),r=n.siblings(".dropdown"),i=n.attr("href");if(t.settings.mobile_show_parent_link&&i&&i.length>1)var s=e('<li class="title back js-generated"><h5><a href="#"></a></h5></li><li><a class="parent-link js-generated" href="'+i+'">'+n.text()+"</a></li>");else var s=e('<li class="title back js-generated"><h5><a href="#"></a></h5></li>');t.settings.custom_back_text==1?s.find("h5>a").html(t.settings.back_text):s.find("h5>a").html("&laquo; "+n.html());r.prepend(s)});this.settings.$section.appendTo(this.settings.$topbar);this.sticky()},height:function(t){var n=0,r=this;t.find("> li").each(function(){n+=r.outerHeight(e(this),!0)});return n},sticky:function(){var n=e(t),r=this;n.scroll(function(){r.updateStickyPositioning()})},updateStickyPositioning:function(){var n="."+this.settings.stickyClass,r=e(t);if(e(n).length>0){var i=this.settings.$topbar.data("stickyoffset");if(!e(n).hasClass("expanded"))if(r.scrollTop()>i){if(!e(n).hasClass("fixed")){e(n).addClass("fixed");e("body").addClass("f-topbar-fixed")}}else if(r.scrollTop()<=i&&e(n).hasClass("fixed")){e(n).removeClass("fixed");e("body").removeClass("f-topbar-fixed")}}},off:function(){e(this.scope).off(".fndtn.topbar");e(t).off(".fndtn.topbar")},reflow:function(){}}})(Foundation.zj,this,this.document);