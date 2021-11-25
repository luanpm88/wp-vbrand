var AcelleHelper = {
    loadCss: function(url) {
        if (this.css == null) {
            var head  = document.getElementsByTagName('head')[0];
            var link  = document.createElement('link');
            link.rel  = 'stylesheet';
            link.type = 'text/css';
            link.href = url;
            link.media = 'all';
            head.appendChild(link);

            this.css = link;
        }
    },

    loadJs: function(jss, callback) {
        var _this = this;

        if (jss.length > 0) {
            var s = document.createElement("script");
            var url = jss.shift();

            console.log("loading: " + url);

            s.type = "text/javascript";
            s.src = url;
            s.setAttribute('builder-helper', 'true')
            s.onload = function () {
                //
                _this.loadJs(jss, callback);
            };
            window.document.head.appendChild(s);
        } else {
            if (typeof(callback) !== 'undefined') {
                callback();
            }
        }
    },

    autoHeight: function() {
        var body = document.body,
            html = document.documentElement;
        var height = Math.max( body.scrollHeight, body.offsetHeight, 
                                html.clientHeight, html.scrollHeight, html.offsetHeight );

        parent.postMessage({
            height: height
        }, "*");
    }
}

if (parent.length) {
    // include vband.css
    AcelleHelper.loadCss('/vbrand.css');

    // auto height
    setInterval(() => {
        AcelleHelper.autoHeight();
    }, 500);
}