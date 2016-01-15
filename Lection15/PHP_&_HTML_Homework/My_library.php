<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 05.01.16
 * Time: 12:21
 * @param $array
 * @param $key
 * @param null $default
 * @return null
 */

function getValue ($array, $key, $default = null) {
    if (!empty($array[$key])) {
        $value = $array[$key];
} else {
        $value = $default;
    }
     return $value;
}

function validateRequired ($value) {
    if (!is_string($value)) {
        return !empty($value);
    }
    return strlen($value) > 0;
}

function validateStr ($value) {
    return gettype($value) === 'string';
}

function validateLen ($value, $len) {
    if (is_array($value) || is_object($value)) {
        echo 'Wrong input data';
        return false;
    }
    return mb_strlen(strval($value), 'UTF-8') >= $len;
}

function validateNonAlphanumeric($value) {
    if (is_array($value) || is_object($value)) {
        echo 'Wrong input data';
        return false;
    }
    return (bool) preg_match('/[^а-яa-z0-9\s]/i', trim($value));
}

function displayErrors ($errors, $field) {
    $fieldErrors = getValue($errors, $field, []);
    $output = '';
    foreach ($fieldErrors as $value) {
        $output .= sprintf('<p class="errors">%s</p>', htmlentities($value));
    }
    return $output;
}

function options ($data, $selected) {
    $html = '';
    foreach ($data as $key => $value) {
        $html .= sprintf(
            '<option value = "%s" %s>%s</option>',
        $key,
        $key == $selected ? 'selected ="selected"' : '',
        $value
        );
    }
    return $html;
}

function radios ($data, $checked, $name, $type = 'checkbox') {
    $html = '';
    if (!is_array($checked)) {
        $checked = [$checked];
    }

    foreach ($data as $value => $label) {
        $id = $name . '_' . $value;
        $html .= sprintf(
            '<label for="%s"><input type="%s" name="%s" value="%s" id="%1$s">%s</label>',
            $id,
            $type,
            $name,
            $value,
            in_array($value, $checked) ? 'checked="checked"' : '',
            $label
        );
    }

    return $html;
}

function getFieldClass($errors, $field) {
    return !empty($errors[$field]) ? 'error' : '';
}

function numberFromString ($value) {
    preg_match_all('!\d+!', $value, $matches);
return $matches;
}