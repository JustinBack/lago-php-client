# LagoClient\EventsApi

All URIs are relative to https://api.getlago.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createBatchEvents()**](EventsApi.md#createBatchEvents) | **POST** /events/batch | Batch multiple events |
| [**createEvent()**](EventsApi.md#createEvent) | **POST** /events | Send usage events |
| [**eventEstimateFees()**](EventsApi.md#eventEstimateFees) | **POST** /events/estimate_fees | Estimate fees for a pay in advance charge |
| [**findEvent()**](EventsApi.md#findEvent) | **GET** /events/{transaction_id} | Retrieve a specific event |


## `createBatchEvents()`

```php
createBatchEvents($event_batch_input)
```

Batch multiple events

This endpoint is used for transmitting a batch of usage measurement events to multiple subscriptions for a single customer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = LagoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LagoClient\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_batch_input = new \LagoClient\Model\EventBatchInput(); // \LagoClient\Model\EventBatchInput | Batch events payload

try {
    $apiInstance->createBatchEvents($event_batch_input);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->createBatchEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_batch_input** | [**\LagoClient\Model\EventBatchInput**](../Model/EventBatchInput.md)| Batch events payload | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createEvent()`

```php
createEvent($event_input)
```

Send usage events

This endpoint is used for transmitting usage measurement events to either a designated customer or a specific subscription.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = LagoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LagoClient\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_input = new \LagoClient\Model\EventInput(); // \LagoClient\Model\EventInput | Event payload

try {
    $apiInstance->createEvent($event_input);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->createEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_input** | [**\LagoClient\Model\EventInput**](../Model/EventInput.md)| Event payload | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `eventEstimateFees()`

```php
eventEstimateFees($event_estimate_fees_input): \LagoClient\Model\Fees
```

Estimate fees for a pay in advance charge

Estimate the fees that would be created after reception of an event for a billable metric attached to one or multiple pay in advance charges

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = LagoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LagoClient\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_estimate_fees_input = new \LagoClient\Model\EventEstimateFeesInput(); // \LagoClient\Model\EventEstimateFeesInput | Event estimate payload

try {
    $result = $apiInstance->eventEstimateFees($event_estimate_fees_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->eventEstimateFees: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_estimate_fees_input** | [**\LagoClient\Model\EventEstimateFeesInput**](../Model/EventEstimateFeesInput.md)| Event estimate payload | |

### Return type

[**\LagoClient\Model\Fees**](../Model/Fees.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findEvent()`

```php
findEvent($transaction_id): \LagoClient\Model\Event
```

Retrieve a specific event

This endpoint is used for retrieving a specific usage measurement event that has been sent to a customer or a subscription.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = LagoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LagoClient\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_id = transaction_1234567890; // string | This field represents the unique identifier sent for this specific event.

try {
    $result = $apiInstance->findEvent($transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->findEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transaction_id** | **string**| This field represents the unique identifier sent for this specific event. | |

### Return type

[**\LagoClient\Model\Event**](../Model/Event.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
