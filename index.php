<?php

function debugToConsole($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}

$arr = [
    [
        "internal_history_id" => "208998",
        "external_id" => "8599",
        "external_commission" => "0.0600"
    ], [
        "internal_history_id" => "208998",
        "external_id" => "8599",
        "external_commission" => "0.0600"
    ], [
        "internal_history_id" => "208998",
        "external_id" => "8599",
        "external_commission" => "0.0600"
    ], [
        "internal_history_id" => "208998",
        "external_id" => "8599",
        "external_commission" => "0.0600"
    ], [
        "internal_history_id" => "208998",
        "external_id" => "8599",
        "external_commission" => "0.0600"
    ], [
        "internal_history_id" => "208998",
        "external_id" => "8599",
        "external_commission" => "0.0600"
    ], [
        "internal_history_id" => "208998",
        "external_id" => "8599",
        "external_commission" => "0.0600"
    ], [
        "internal_history_id" => "208998",
        "external_id" => "8599",
        "external_commission" => "0.0600"
    ], [
        "internal_history_id" => "208998",
        "external_id" => "8599",
        "external_commission" => "0.0600"
    ], [
        "internal_history_id" => "208998",
        "external_id" => "8599",
        "external_commission" => "0.0600"
    ]
];


