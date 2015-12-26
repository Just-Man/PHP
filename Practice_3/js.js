/**
 * Created by just on 22.12.15.
 */

function getColor (id){
    var color;
    switch (id) {
        case 'btn_1':
            color = 'blue';
            break;
        case 'btn_2':
            color = 'green';
            break;
        case 'btn_3':
            color = 'red';
            break;
        case 'btn_4':
            color = 'black';
            break;
    }
    return color;
}

window.addEventListener('DOMContentLoaded', function (){
    document.getElementById('box').addEventListener('click', function () {
        var box = document.getElementById('box'),
            boxContainer = document.getElementById('boxContainer'),
            color = getColor(event.target.id);
        box.addEventListener('click',function (event){

            if (color == 'red') {
                event.stopPropagation();
            }

            if (color){
                this.style.backgroundColor = color;
            }
        });
    },false);
    boxContainer.addEventListener('click', function (event) {
            var color = getColor(event.target.id);
        if (color) {
            this.style.borderColor = color;
        }
    });
    box.innerHTML =
        '<button id="btn_1" type="button">Button 1</button>' +
        '<button id="btn_2" type="button">Button 2</button>' +
        '<button id="btn_3" type="button">Button 3</button>' +
        '<button id="btn_4" type="button">Button 4</button>'
},false);