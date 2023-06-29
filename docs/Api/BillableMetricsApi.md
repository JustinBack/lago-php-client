# LagoClient\BillableMetricsApi

All URIs are relative to https://api.getlago.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createBillableMetric()**](BillableMetricsApi.md#createBillableMetric) | **POST** /billable_metrics | Create a billable metric |
| [**destroyBillableMetric()**](BillableMetricsApi.md#destroyBillableMetric) | **DELETE** /billable_metrics/{code} | Delete a billable metric |
| [**findAllBillableMetricGroups()**](BillableMetricsApi.md#findAllBillableMetricGroups) | **GET** /billable_metrics/{code}/groups | Find a billable metric&#39;s groups |
| [**findAllBillableMetrics()**](BillableMetricsApi.md#findAllBillableMetrics) | **GET** /billable_metrics | List all billable metrics |
| [**findBillableMetric()**](BillableMetricsApi.md#findBillableMetric) | **GET** /billable_metrics/{code} | Retrieve a billable metric |
| [**updateBillableMetric()**](BillableMetricsApi.md#updateBillableMetric) | **PUT** /billable_metrics/{code} | Update a billable metric |


## `createBillableMetric()`

```php
createBillableMetric($billable_metric_create_input): \LagoClient\Model\BillableMetric
```

Create a billable metric

This endpoint creates a new billable metric representing a pricing component of your application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = LagoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LagoClient\Api\BillableMetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$billable_metric_create_input = new \LagoClient\Model\BillableMetricCreateInput(); // \LagoClient\Model\BillableMetricCreateInput | Billable metric payload

try {
    $result = $apiInstance->createBillableMetric($billable_metric_create_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillableMetricsApi->createBillableMetric: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **billable_metric_create_input** | [**\LagoClient\Model\BillableMetricCreateInput**](../Model/BillableMetricCreateInput.md)| Billable metric payload | |

### Return type

[**\LagoClient\Model\BillableMetric**](../Model/BillableMetric.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `destroyBillableMetric()`

```php
destroyBillableMetric($code): \LagoClient\Model\BillableMetric
```

Delete a billable metric

This endpoint deletes an existing billable metric representing a pricing component of your application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = LagoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LagoClient\Api\BillableMetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = storage; // string | Code of the existing billable metric.

try {
    $result = $apiInstance->destroyBillableMetric($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillableMetricsApi->destroyBillableMetric: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| Code of the existing billable metric. | |

### Return type

[**\LagoClient\Model\BillableMetric**](../Model/BillableMetric.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findAllBillableMetricGroups()`

```php
findAllBillableMetricGroups($code): \LagoClient\Model\GroupsPaginated
```

Find a billable metric's groups

This endpoint retrieves all groups for a billable metric.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = LagoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LagoClient\Api\BillableMetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = example_code; // string | Code of the existing billable metric.

try {
    $result = $apiInstance->findAllBillableMetricGroups($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillableMetricsApi->findAllBillableMetricGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| Code of the existing billable metric. | |

### Return type

[**\LagoClient\Model\GroupsPaginated**](../Model/GroupsPaginated.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findAllBillableMetrics()`

```php
findAllBillableMetrics(): \LagoClient\Model\BillableMetricsPaginated
```

List all billable metrics

This endpoint retrieves all existing billable metrics that represent pricing components of your application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = LagoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LagoClient\Api\BillableMetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->findAllBillableMetrics();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillableMetricsApi->findAllBillableMetrics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\LagoClient\Model\BillableMetricsPaginated**](../Model/BillableMetricsPaginated.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findBillableMetric()`

```php
findBillableMetric($code): \LagoClient\Model\BillableMetric
```

Retrieve a billable metric

This endpoint retrieves an existing billable metric that represents a pricing component of your application. The billable metric is identified by its unique code.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = LagoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LagoClient\Api\BillableMetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = storage; // string | Code of the existing billable metric.

try {
    $result = $apiInstance->findBillableMetric($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillableMetricsApi->findBillableMetric: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| Code of the existing billable metric. | |

### Return type

[**\LagoClient\Model\BillableMetric**](../Model/BillableMetric.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBillableMetric()`

```php
updateBillableMetric($code, $billable_metric_update_input): \LagoClient\Model\BillableMetric
```

Update a billable metric

This endpoint updates an existing billable metric representing a pricing component of your application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = LagoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LagoClient\Api\BillableMetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = storage; // string | Code of the existing billable metric.
$billable_metric_update_input = new \LagoClient\Model\BillableMetricUpdateInput(); // \LagoClient\Model\BillableMetricUpdateInput | Billable metric payload

try {
    $result = $apiInstance->updateBillableMetric($code, $billable_metric_update_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillableMetricsApi->updateBillableMetric: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| Code of the existing billable metric. | |
| **billable_metric_update_input** | [**\LagoClient\Model\BillableMetricUpdateInput**](../Model/BillableMetricUpdateInput.md)| Billable metric payload | |

### Return type

[**\LagoClient\Model\BillableMetric**](../Model/BillableMetric.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
