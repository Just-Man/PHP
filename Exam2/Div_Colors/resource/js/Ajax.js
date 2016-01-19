var Ajax = {
/**
 *
* @returns XMLHttpRequest
*/
        getXHR: function () {
            var request;
            if (typeof XMLHttpRequest !== 'undefined') {
                return new XMLHttpRequest();
            }

            if (typeof ActiveXObject !== 'undefined') {
                return new ActiveXObject('Microsoft.XMLHTTP');
            }

            throw new Error('Your browser does not support AJAX');
        },
        /**
         * 
         * @param method - GET, POST
         * @param url - where we are sending the request
         * @param params - {username: 'ásSA', password: 'dadsdas'} -> username=ásSA&password=dadsdas
         * @param async - true, false, undefined
         * @param callback - function called when request returns
         */
        makeRequest : function (method, url, params, async, callback) {
            var xhr = this.getXHR(),
                paramsAsString;

            async = !async ? false : true;
            if (typeof params !== 'object') {
                params = {};
            }

            if (async) {
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4) {
                        callback(xhr);
                    }
                };
            }

            paramsAsString = this.parseParams(params);
            if (method === 'GET') {
                if (url.indexOf('?') === -1) {
                    url += '?';
                } else {
                    url += '&';
                }

                url += paramsAsString;
            }

            xhr.open(method, url, async);

            if (method === 'POST') {
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                xhr.send(paramsAsString);
            } else {
                xhr.send(null);
            }

            if (async === false) {
                callback(xhr);
            }
        },

        parseParams: function (params) {
            var result = [],
                i,
                pair;
            for (i in params) {
                pair = encodeURIComponent(i) + '=' + encodeURIComponent(params[i]);
                result.push(pair);
            }

            return result.join('&');
        }
    };
function displayEmployees(container, data) {
    var colorArray,
        colors = [],
        i,
        button = document.getElementById('change');
    for (i = 0; i < data.length; i += 1) {
        colorArray = data[i];
        colors.push(colorArray.color);
    }
    button.addEventListener('click', Ajax, false);
    container.style.backgroundColor = colors[0];
    setInterval(function () {
        var len = colors.length;
        for (i = 0; i <= len; i += 1) {
            container.style.backgroundColor =  colors[i];
        }
    }, 500);
}
var callback = function (xhr) {
    var colors = JSON.parse(xhr.responseText);
    displayEmployees(document.getElementById('holder'), colors);
};

Ajax.makeRequest('GET', 'resource/php/server.php', {}, true, callback);