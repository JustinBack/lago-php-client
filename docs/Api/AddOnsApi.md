# LagoClient\AddOnsApi

All URIs are relative to https://api.getlago.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**applyAddOn()**](AddOnsApi.md#applyAddOn) | **POST** /applied_add_ons | Apply an add-on to a customer |
| [**createAddOn()**](AddOnsApi.md#createAddOn) | **POST** /add_ons | Create an add-on |
| [**destroyAddOn()**](AddOnsApi.md#destroyAddOn) | **DELETE** /add_ons/{code} | Delete an add-on |
| [**findAddOn()**](AddOnsApi.md#findAddOn) | **GET** /add_ons/{code} | Retrieve an add-on |
| [**findAllAddOns()**](AddOnsApi.md#findAllAddOns) | **GET** /add_ons | List all add-ons |
| [**updateAddOn()**](AddOnsApi.md#updateAddOn) | **PUT** /add_ons/{code} | Update an add-on |


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
createAddOn($add_on_create_input): \LagoClient\Model\AddOn
```

Create an add-on

This endpoint is used to create an add-on that can be then attached to a one-off invoice.

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
$add_on_create_input = new \LagoClient\Model\AddOnCreateInput(); // \LagoClient\Model\AddOnCreateInput | Add-on payload

try {
    $result = $apiInstance->createAddOn($add_on_create_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddOnsApi->createAddOn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **add_on_create_input** | [**\LagoClient\Model\AddOnCreateInput**](../Model/AddOnCreateInput.md)| Add-on payload | |

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

This endpoint is used to delete an existing add-on.

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
$code = setup_fee; // string | Unique code used to identify the add-on.

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
| **code** | **string**| Unique code used to identify the add-on. | |

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

Retrieve an add-on

This endpoint is used to retrieve a specific add-on.

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
$code = setup_fee; // string | Unique code used to identify the add-on.

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
| **code** | **string**| Unique code used to identify the add-on. | |

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
findAllAddOns($page, $per_page): \LagoClient\Model\AddOnsPaginated
```

List all add-ons

This endpoint is used to list all existing add-ons.

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
$page = 1; // int | Page number.
$per_page = 20; // int | Number of records per page.

try {
    $result = $apiInstance->findAllAddOns($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddOnsApi->findAllAddOns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number. | [optional] |
| **per_page** | **int**| Number of records per page. | [optional] |

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
updateAddOn($code, $add_on_update_input): \LagoClient\Model\AddOn
```

Update an add-on

This endpoint is used to update an existing add-on.

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
$code = setup_fee; // string | Unique code used to identify the add-on.
$add_on_update_input = new \LagoClient\Model\AddOnUpdateInput(); // \LagoClient\Model\AddOnUpdateInput | Add-on payload

try {
    $result = $apiInstance->updateAddOn($code, $add_on_update_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddOnsApi->updateAddOn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| Unique code used to identify the add-on. | |
| **add_on_update_input** | [**\LagoClient\Model\AddOnUpdateInput**](../Model/AddOnUpdateInput.md)| Add-on payload | |

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
