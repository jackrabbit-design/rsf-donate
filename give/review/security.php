<?php

define ('HMAC_SHA256', 'sha256');
define ('SECRET_KEY', 'f1a40e70f6324c3e8e8c68c08322f29ee62ee61d8a5f41d8891bdacdfeef4b34b26579301426459eb2dc29dfd38d9cdf8a4616eedd8c4e3da793bdfefc7042649ce6ab58a652411f939af70819a337e59489abefb2354d44a2e6866f95a4669c4ce09985c5d64c519e3e176ff4a3750c349b298cb77640eaaf16db602d1dade1');

function sign($params) {
  return signData(buildDataToSign($params), SECRET_KEY);
}

function signData($data, $secretKey) {
    return base64_encode(hash_hmac('sha256', $data, $secretKey, true));
}

function buildDataToSign($params) {
        $signedFieldNames = explode(",",$params["signed_field_names"]);
        foreach ($signedFieldNames as &$field) {
           $dataToSign[] = $field . "=" . $params[$field];
        }
        return commaSeparate($dataToSign);
}

function commaSeparate($dataToSign) {
    return implode(",",$dataToSign);
}

?>
