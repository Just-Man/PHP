/**
 * Created by just on 28.01.16.
 */

(function ($) {
    var data = [
        {
            brand : 'VW',
            model : 'Passat',
            year : 1991,
            km : 263459
        },
        {
            brand : 'Seat',
            model : 'Toledo',
            year : 1991,
            km: 280387
        },
        {
            brand : 'VW',
            model : 'Polo',
            year : 1993,
            km : 163459
        }
    ];

    function printData() {
        "use strict";
        if (!data.length) {
            $('#tableContent')
                .append('<tr>' +
                    '   <td colspan="5" id="noData">No data</td>' +
                    '</tr>');
            return;
        }
        data.forEach(singleCarTable);
    }

    function edit(event) {
        $('#tableContent').empty();
        $('table').toggle();
        $('#addForm').toggle();

        var id = event.currentTarget.id.match(/\d+/),
            currentCar;
        if (id) {
            currentCar = data[id];
            currentCar.id = id;
        } else {
            currentCar = {};
        }
        createForm(currentCar);
    }

    function addData(event) {
        var keysNames = Object.keys(data[0]),
            newCar = {},
            inputs = $('.carData'),
            len = inputs.length,
            i,
            id = $('#carId')[0] ? $('#carId')[0].value : "",
            errors = [],
            p = $('.error');
        for (i = 0; i < len; i += 1) {
            p[i].style.display = 'none';
            if (inputs[i].value < 2) {
                errors[i] = 'field is required<br>';
            }
            if (i === 2 || i === 3) {
                if (!(Math.floor(inputs[i].value) === inputs[i].value)) {
                    if (errors[i] !== undefined) {
                        errors[i] += 'number must be integer';
                    } else {
                        errors[i] = 'number must be integer';
                    }
                }
            }
            newCar[keysNames[i]] = inputs[i].value;
        }
        if (!errors.length) {
            if (id) {
                data[id] = newCar;
            } else {
                data.push(newCar);
            }
            $('#addForm').toggle();
            $('table').toggle();
            event.preventDefault();
            printData();
        } else {
            for (i in errors) {
                p[i].style.display = 'block';
                p[i].innerHTML = errors[i];
            }
            return false;
        }
    }

    function remove(event) {
        "use strict";
        $('#tableContent').empty();
        var id = event.currentTarget.id.match(/\d+/),
            confirms = window.confirm('do you really wont to delete');
        if (confirms) {
            data.splice(id, 1);
        }
        printData();
    }

    function singleCarTable(car, index) {
        var val;
        $('<tr></tr>').appendTo('#tableContent').attr('id', index)
            .append('<td>' +
                (index + 1) +
                '</td>');
        for (val in car) {
            $('#tableContent tr:last-child')
                .append('<td>' + car[val] + '</td>');
        }
        $('#tableContent tr:last-child')
            .append('<td>' +
                '   <button type="button" id="edit' + index + '" class="btn edit">' +
                '      <i class="fa fa-pencil"></i>' +
                '   </button>' +
                '   <button type="button" id="remove' + index + '" class="btn remove">' +
                '      <i class="fa fa-times"></i>' +
                '   </button> ' +
                '</td>');
        $('#edit' + index).on('click', edit);
        $('#remove' + index).on('click', remove);
    }

    function createForm(currentCar) {
        var elements = Object.keys(data[0]),
            len = elements.length,
            i,
            form = $('#addForm'),
            item;

        form.empty();
        if (!($.isEmptyObject(currentCar))) {
            for (item in currentCar) {
                if (item === 'id') {
                    form
                        .append('<label for="id"></label>' +
                            '       <input type="hidden" id="carId" value="' + currentCar[item] + '">');
                } else {
                    form
                        .append('<label for="' + item + '">' + item + '   </label>' +
                            '<input type="text" id="' + item + '" class="carData" value="' + currentCar[item] + '">' +
                            '<br>' +
                            '<p class="error"></p> ');
                }
            }
        } else {
            for (i = 0; i < len; i += 1) {
                form
                    .append('<label for="' + i + '">' + elements[i] + '</label>')
                    .append('<input type="text" id="' + i + '" class="carData" >' +
                        '<br>' +
                        '<p class="error"></p>');
            }
        }
        form
            .append('<button type="submit" id="submit">Add</button>');
    }

    $(function () {
        printData();
        $('#list').on('click', function () {
            "use strict";
            $('#addForm').hide();
            $('table').show();
            printData();
        });
        $('#addBtn').on('click', edit);
        $('#addForm').on('submit', addData);
    });
}(jQuery));