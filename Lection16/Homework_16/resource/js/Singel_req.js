/**
 * Created by just on 21.01.16.
 */
var itemId;

function displaySingle(container, data) {
    sessionStorage.setItem("Person", JSON.stringify(data[0]));
    var item = JSON.parse(sessionStorage.getItem("Person")),
        list = document.getElementById('more'),
        li,
        val;
    list.innerHTML = '';
    for (val in item) {
        li  = document.createElement('li');
        li.innerHTML = val;
        list.appendChild(li);
        li  = document.createElement('li');
        li.innerHTML = item[val];
        list.appendChild(li);
    }
    container.appendChild(list);
    setTimeout(function () {
        list.innerHTML = '';
        sessionStorage.removeItem("Person");
    }, 30000);
}

function callbackSingle(xhr) {
    var item = JSON.parse(xhr.responseText);
    displaySingle(document.getElementById(itemId), item);
}

function getItemId(event) {
    itemId = this.id;
    var params = {key: itemId};
    event.preventDefault();
    Ajax.makeRequest('GET', 'resource/php/server.php', params, true, callbackSingle);
}

function display(container, data) {
    var list = document.createElement('ul'),
        i,
        li,
        a,
        image,
        item,
        left = 0,
        len = data.length;
    for (i = 0; i < len; i += 1) {
        a  = document.createElement('a');
        image = document.createElement('img');
        li  = document.createElement('li');
        li.style.left = left + 'px';
        left += 140;
        item = data[i];
        image.src = item.pic;
        a.innerHTML = item.username;
        a.href = '#';
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

Ajax.makeRequest('GET', 'resource/php/server.php', {}, true, callback);