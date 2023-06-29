# LagoClient\AddOnsApi

All URIs are relative to https://api.getlago.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**applyAddOn()**](AddOnsApi.md#applyAddOn) | **POST** /applied_add_ons | Apply an add-on to a customer |
| [**createAddOn()**](AddOnsApi.md#createAddOn) | **POST** /add_ons | Create a new add-on |
| [**destroyAddOn()**](AddOnsApi.md#destroyAddOn) | **DELETE** /add_ons/{code} | Delete an add-on |
| [**findAddOn()**](AddOnsApi.md#findAddOn) | **GET** /add_ons/{code} | Find add-on by code |
| [**findAllAddOns()**](AddOnsApi.md#findAllAddOns) | **GET** /add_ons | Find add-ons |
| [**updateAddOn()**](AddOnsApi.md#updateAddOn) | **PUT** /add_ons/{code} | Update an existing add-on |


## `applyAddOn()`

```php
applyAddOn($applied_add_on_input): \LagoClient\Model\AppliedAddOn
```

Apply an add-on to a customer

Apply an add-on to a customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = LagoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LagoClient\Api\AddOnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applied_add_on_input = new \LagoClient\Model\AppliedAddOnInput(); // \LagoClient\Model\AppliedAddOnInput | Apply add-on payload

try {
    $result = $apiInstance->applyAddOn($applied_add_on_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddOnsApi->applyAddOn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **applied_add_on_input** | [**\LagoClient\Model\AppliedAddOnInput**](../Model/AppliedAddOnInput.md)| Apply add-on payload | |

### Return type

[**\LagoClient\Model\AppliedAddOn**](../Model/AppliedAddOn.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAddOn()`

```php
createAddOn($add_on_input): \LagoClient\Model\AddOn
```

Create a new add-on

Create a new add-on

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = LagoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LagoClient\Api\AddOnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$add_on_input = new \LagoClient\Model\AddOnInput(); // \LagoClient\Model\AddOnInput | Add-on payload

try {
    $result = $apiInstance->createAddOn($add_on_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddOnsApi->createAddOn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **add_on_input** | [**\LagoClient\Model\AddOnInput**](../Model/AddOnInput.md)| Add-on payload | |

### Return type

[**\LagoClient\Model\AddOn**](../Model/AddOn.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `destroyAddOn()`

```php
destroyAddOn($code): \LagoClient\Model\AddOn
```

Delete an add-on

Delete an add-on

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = LagoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LagoClient\Api\AddOnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = example_code; // string | Code of the existing add-on

try {
    $result = $apiInstance->destroyAddOn($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddOnsApi->destroyAddOn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| Code of the existing add-on | |

### Return type

[**\LagoClient\Model\AddOn**](../Model/AddOn.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findAddOn()`

```php
findAddOn($code): \LagoClient\Model\AddOn
```

Find add-on by code

Return a single add-on

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = LagoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LagoClient\Api\AddOnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = example_code; // string | Code of the existing add-on

try {
    $result = $apiInstance->findAddOn($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddOnsApi->findAddOn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| Code of the existing add-on | |

### Return type

[**\LagoClient\Model\AddOn**](../Model/AddOn.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findAllAddOns()`

```php
findAllAddOns(): \LagoClient\Model\AddOnsPaginated
```

Find add-ons

Find all add-ons in certain organisation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = LagoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LagoClient\Api\AddOnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->findAllAddOns();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddOnsApi->findAllAddOns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\LagoClient\Model\AddOnsPaginated**](../Model/AddOnsPaginated.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAddOn()`

```php
updateAddOn($code, $add_on_input): \LagoClient\Model\AddOn
```

Update an existing add-on

Update an existing add-on by code

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = LagoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LagoClient\Api\AddOnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = example_code; // string | Code of the existing add-on
$add_on_input = new \LagoClient\Model\AddOnInput(); // \LagoClient\Model\AddOnInput | Update an existing add-on

try {
    $result = $apiInstance->updateAddOn($code, $add_on_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddOnsApi->updateAddOn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| Code of the existing add-on | |
| **add_on_input** | [**\LagoClient\Model\AddOnInput**](../Model/AddOnInput.md)| Update an existing add-on | |

### Return type

[**\LagoClient\Model\AddOn**](../Model/AddOn.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
