<?php

define ('HMAC_SHA256', 'sha256');
define ('SECRET_KEY', 'a3b520e1d3ba49519ab0f7d1586e894f00b4cea6540c48fd82ecbd0ab182fc8130b5962887394f17b18168113396a803ad2d963a7ed14b0baeb603f4a93798e5a7936df1da6a4528841205949013f53a7109ba80e66f4bc58dd34c08161c06ab4a58d0780a7c4bcebe5eecf819281a682c6f6a5e645e466f94c8afb93dfe5b63');

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
