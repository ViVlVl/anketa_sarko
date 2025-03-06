<?php

namespace App\Services;

use Google_Client;
use Google_Service_Sheets;

class GoogleSheetsService
{
    protected $client;
    protected $service;

    public function __construct()
    {
        // Настройка клиента Google API
        $this->client = new Google_Client();  // Исправлено на Google_Client
        $this->client->setApplicationName('Laravel Google Sheets Integration');
        $this->client->setScopes([Google_Service_Sheets::SPREADSHEETS_READONLY]);
        $this->client->setAuthConfig(storage_path('app/google/credentials.json'));
        $this->client->setAccessType('offline');

        $this->service = new Google_Service_Sheets($this->client);
    }

    // Метод для получения данных из таблицы
    public function getSpreadsheetData($spreadsheetId, $range)
    {
        try {
            $response = $this->service->spreadsheets_values->get($spreadsheetId, $range);
            return $response->getValues();
        } catch (\Exception $e) {
            throw new \Exception('Error fetching data from Google Sheets: ' . $e->getMessage());
        }
    }
}
