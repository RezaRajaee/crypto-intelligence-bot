<?php

/**
 * FearGreedConnector
 * این کلاس وظیفه گرفتن شاخص ترس و طمع رو از اي پي آي های معتبر داره
 */

class FearGreedConnector {
    private $apiUrl = "https://api.alternative.me/fng/";

    public function getLatestIndex() {
        // Get data from Server
        $response = file_get_contents($this->apiUrl);
        if ($response === FALSE) {
            return "Error in comunication server";
        }

        $data = json_decode($response, true);
        
        // Extract Index and market staus
        $value = $data['data'][0]['value'];
        $status = $data['data'][0]['value_classification'];

        return [
            'value' => $value,
            'status' => $status,
            'message' => "شاخص ترس و طمع فعلی: $value ($status)"
        ];
    }
}

// for initial test:
// $connector = new FearGreedConnector();
// print_r($connector->getLatestIndex());
