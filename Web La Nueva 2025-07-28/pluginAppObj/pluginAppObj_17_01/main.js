function fb_pluginAppObj_17_01() {
    
    x5engine.boot.push(function(){ 
        
        $("#pluginAppObj_17_01").addClass("pageplugin")
        
        var pluginAppObj_17_01_timeout = null;
    
        var isMobileDevice = function () {
            if ( x5engine.settings.breakPoints.length < 3 ) {
                return false;
            }
            var preFluidBreakpoint = x5engine.settings.breakPoints[x5engine.settings.breakPoints.length - 2];
            return $(window).width() <= preFluidBreakpoint.start && Modernizr.touchevents;
        };
        if("pageplugin" == "pageplugin" && isMobileDevice()){
            $('#pluginAppObj_17_01 .fb-page').attr('data-width', parseInt(Math.floor($('#pluginAppObj_17_01').parent().width())));
        }

        //FACEBOOK JDK INCLUSION. ONLY ONCE PER PAGE
        if($("#fb-jdk-container").length == 0){
            var lang = 'es_CO';
            var script = $("<script />", {
                html: "(function(d, s, id) {  var js, fjs = d.getElementsByTagName(s)[0];  if (d.getElementById(id)) return;  js = d.createElement(s); js.id = id;  js.src = \"//connect.facebook.net/" + lang + "/sdk.js#xfbml=1&version=v3.0\";  fjs.parentNode.insertBefore(js, fjs);}(document, \"script\", \"facebook-jssdk\"))"
                });
            var fb_sdk_inclusion = "<div id=\"fb-jdk-container\"><div id=\"fb-root\"></div>" + script.prop('outerHTML') + "</div>";
            $("body").prepend(fb_sdk_inclusion);
        }

        $("#imContent").on("breakpointChangedOrFluid", function (e, breakpoint) {
            if(pluginAppObj_17_01_timeout === null) {
                pluginAppObj_17_01_timeout = window.setTimeout(function() {
                    pluginAppObj_17_01_timeout = null;
                    $('#pluginAppObj_17_01 .fb-page').removeClass('fb_iframe_widget fb_iframe_widget_fluid');  
                    FB.XFBML.parse();
                }, 300);
            }
        });
      
        
    });
}
