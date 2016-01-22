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
                xhr.onreadystatechange = function () {
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
