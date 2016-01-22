/**
 * Created by just on 21.01.16.
 */
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
        a.href = '#';
        a.id = i;
        a.onclick = getItemId;
        a.appendChild(image);
        li.appendChild(a);
        list.appendChild(li);
    }
    container.appendChild(list);
}

function getItemId(event) {
    var itemId = this.id,
        params = {key: itemId};
    event.preventDefault();
    Ajax.makeRequest('GET', 'resource/php/server.php', params, true, callback);
}

var callback = function (xhr) {
    var item = JSON.parse(xhr.responseText);
    document.getElementById('result').innerHTML = '';
    display(document.getElementById('result'), item);
};

Ajax.makeRequest('GET', 'resource/php/server.php', {}, true, callback);