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

function getItemId(event) {
    var itemId = this.id,
        params = {key: itemId};
    event.preventDefault();
    return params;
}
function display(container, data) {
    var list = document.createElement('ul'),
        i,
        li,
        a,
        image,
        item;
    for (i = 0; i < data.length; i += 1) {
        a  = document.createElement('a');
        image = document.createElement('img');
        li  = document.createElement('li');
        item = data[i];
        image.src = item.pic;
        a.innerHTML = item.username;
        a.href = item.username;
        a.id = i;
        a.onclick = getItemId;
        a.appendChild(image);
        li.appendChild(a);
        list.appendChild(li);
    }
    container.appendChild(list);
}
var callback = function (xhr) {
    var item = JSON.parse(xhr.responseText);
    document.getElementById('result').innerHTML = '';
    display(document.getElementById('result'), item);
};

Ajax.makeRequest('GET', 'resource/php/server.php', getItemId(), true, callback);