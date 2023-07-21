# LagoClient\CreditNotesApi

All URIs are relative to https://api.getlago.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCreditNote()**](CreditNotesApi.md#createCreditNote) | **POST** /credit_notes | Create a credit note |
| [**downloadCreditNote()**](CreditNotesApi.md#downloadCreditNote) | **POST** /credit_notes/{lago_id}/download | Download a credit note PDF |
| [**findAllCreditNotes()**](CreditNotesApi.md#findAllCreditNotes) | **GET** /credit_notes | List all credit notes |
| [**findCreditNote()**](CreditNotesApi.md#findCreditNote) | **GET** /credit_notes/{lago_id} | Retrieve a credit note |
| [**updateCreditNote()**](CreditNotesApi.md#updateCreditNote) | **PUT** /credit_notes/{lago_id} | Update a credit note |
| [**voidCreditNote()**](CreditNotesApi.md#voidCreditNote) | **PUT** /credit_notes/{lago_id}/void | Void a credit note |


## `createCreditNote()`

```php
createCreditNote($credit_note_create_input): \LagoClient\Model\CreditNote
```

Create a credit note

This endpoint creates a new credit note.

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
$credit_note_create_input = new \LagoClient\Model\CreditNoteCreateInput(); // \LagoClient\Model\CreditNoteCreateInput | Credit note payload

try {
    $result = $apiInstance->createCreditNote($credit_note_create_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditNotesApi->createCreditNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **credit_note_create_input** | [**\LagoClient\Model\CreditNoteCreateInput**](../Model/CreditNoteCreateInput.md)| Credit note payload | |

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
downloadCreditNote($lago_id): \LagoClient\Model\CreditNote
```

Download a credit note PDF

This endpoint downloads the PDF of an existing credit note.

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
$lago_id = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | The credit note unique identifier, created by Lago.

try {
    $result = $apiInstance->downloadCreditNote($lago_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditNotesApi->downloadCreditNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lago_id** | **string**| The credit note unique identifier, created by Lago. | |

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

List all credit notes

This endpoint list all existing credit notes.

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
$page = 1; // int | Page number.
$per_page = 20; // int | Number of records per page.
$external_customer_id = 5eb02857-a71e-4ea2-bcf9-57d3a41bc6ba; // string | Unique identifier assigned to the customer in your application.

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
| **page** | **int**| Page number. | [optional] |
| **per_page** | **int**| Number of records per page. | [optional] |
| **external_customer_id** | **string**| Unique identifier assigned to the customer in your application. | [optional] |

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
findCreditNote($lago_id): \LagoClient\Model\CreditNote
```

Retrieve a credit note

This endpoint retrieves an existing credit note.

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
$lago_id = 12345; // string | The credit note unique identifier, created by Lago.

try {
    $result = $apiInstance->findCreditNote($lago_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditNotesApi->findCreditNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lago_id** | **string**| The credit note unique identifier, created by Lago. | |

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
updateCreditNote($lago_id, $credit_note_update_input): \LagoClient\Model\CreditNote
```

Update a credit note

This endpoint updates an existing credit note.

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
$lago_id = 12345; // string | The credit note unique identifier, created by Lago.
$credit_note_update_input = new \LagoClient\Model\CreditNoteUpdateInput(); // \LagoClient\Model\CreditNoteUpdateInput | Credit note update payload

try {
    $result = $apiInstance->updateCreditNote($lago_id, $credit_note_update_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditNotesApi->updateCreditNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lago_id** | **string**| The credit note unique identifier, created by Lago. | |
| **credit_note_update_input** | [**\LagoClient\Model\CreditNoteUpdateInput**](../Model/CreditNoteUpdateInput.md)| Credit note update payload | |

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
voidCreditNote($lago_id): \LagoClient\Model\CreditNote
```

Void a credit note

This endpoint voids an existing credit note.

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
$lago_id = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | The credit note unique identifier, created by Lago.

try {
    $result = $apiInstance->voidCreditNote($lago_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditNotesApi->voidCreditNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lago_id** | **string**| The credit note unique identifier, created by Lago. | |

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
