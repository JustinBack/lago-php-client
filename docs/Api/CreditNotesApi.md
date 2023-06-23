# LagoClient\CreditNotesApi

All URIs are relative to https://api.getlago.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCreditNote()**](CreditNotesApi.md#createCreditNote) | **POST** /credit_notes | Create a new Credit note |
| [**downloadCreditNote()**](CreditNotesApi.md#downloadCreditNote) | **POST** /credit_notes/{id}/download | Download an existing credit note |
| [**findAllCreditNotes()**](CreditNotesApi.md#findAllCreditNotes) | **GET** /credit_notes | Find Credit notes |
| [**findCreditNote()**](CreditNotesApi.md#findCreditNote) | **GET** /credit_notes/{id} | Find credit note |
| [**updateCreditNote()**](CreditNotesApi.md#updateCreditNote) | **PUT** /credit_notes/{id} | Update an existing credit note |
| [**voidCreditNote()**](CreditNotesApi.md#voidCreditNote) | **PUT** /credit_notes/{id}/void | Void existing credit note |


## `createCreditNote()`

```php
createCreditNote($credit_note_input): \LagoClient\Model\CreditNote
```

Create a new Credit note

Create a new credit note

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = LagoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LagoClient\Api\CreditNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_note_input = new \LagoClient\Model\CreditNoteInput(); // \LagoClient\Model\CreditNoteInput | Credit note payload

try {
    $result = $apiInstance->createCreditNote($credit_note_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditNotesApi->createCreditNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **credit_note_input** | [**\LagoClient\Model\CreditNoteInput**](../Model/CreditNoteInput.md)| Credit note payload | |

### Return type

[**\LagoClient\Model\CreditNote**](../Model/CreditNote.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadCreditNote()`

```php
downloadCreditNote($id): \LagoClient\Model\CreditNote
```

Download an existing credit note

Download an existing credit note

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = LagoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LagoClient\Api\CreditNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | ID of the existing Lago Credit note

try {
    $result = $apiInstance->downloadCreditNote($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditNotesApi->downloadCreditNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID of the existing Lago Credit note | |

### Return type

[**\LagoClient\Model\CreditNote**](../Model/CreditNote.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findAllCreditNotes()`

```php
findAllCreditNotes($page, $per_page, $external_customer_id): \LagoClient\Model\CreditNotes
```

Find Credit notes

Find all credit notes in certain organisation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = LagoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LagoClient\Api\CreditNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 2; // int | Number of page
$per_page = 20; // int | Number of records per page
$external_customer_id = 12345; // string | External customer ID

try {
    $result = $apiInstance->findAllCreditNotes($page, $per_page, $external_customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditNotesApi->findAllCreditNotes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Number of page | [optional] |
| **per_page** | **int**| Number of records per page | [optional] |
| **external_customer_id** | **string**| External customer ID | [optional] |

### Return type

[**\LagoClient\Model\CreditNotes**](../Model/CreditNotes.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findCreditNote()`

```php
findCreditNote($id): \LagoClient\Model\CreditNote
```

Find credit note

Return a single credit note

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = LagoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LagoClient\Api\CreditNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 12345; // string | Id of the existing credit note

try {
    $result = $apiInstance->findCreditNote($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditNotesApi->findCreditNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Id of the existing credit note | |

### Return type

[**\LagoClient\Model\CreditNote**](../Model/CreditNote.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCreditNote()`

```php
updateCreditNote($id, $credit_note_update_input): \LagoClient\Model\CreditNote
```

Update an existing credit note

Update an existing credit note

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = LagoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LagoClient\Api\CreditNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 12345; // string | Id of the existing credit note
$credit_note_update_input = new \LagoClient\Model\CreditNoteUpdateInput(); // \LagoClient\Model\CreditNoteUpdateInput | Update an existing credit note

try {
    $result = $apiInstance->updateCreditNote($id, $credit_note_update_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditNotesApi->updateCreditNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Id of the existing credit note | |
| **credit_note_update_input** | [**\LagoClient\Model\CreditNoteUpdateInput**](../Model/CreditNoteUpdateInput.md)| Update an existing credit note | |

### Return type

[**\LagoClient\Model\CreditNote**](../Model/CreditNote.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `voidCreditNote()`

```php
voidCreditNote($id): \LagoClient\Model\CreditNote
```

Void existing credit note

Void an existing credit note

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = LagoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LagoClient\Api\CreditNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | ID of the existing Lago Credit note

try {
    $result = $apiInstance->voidCreditNote($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditNotesApi->voidCreditNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID of the existing Lago Credit note | |

### Return type

[**\LagoClient\Model\CreditNote**](../Model/CreditNote.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
