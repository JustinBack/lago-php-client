# LagoClient\CouponsApi

All URIs are relative to https://api.getlago.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**applyCoupon()**](CouponsApi.md#applyCoupon) | **POST** /applied_coupons | Apply a coupon to a customer |
| [**createCoupon()**](CouponsApi.md#createCoupon) | **POST** /coupons | Create a new coupon |
| [**destroyCoupon()**](CouponsApi.md#destroyCoupon) | **DELETE** /coupons/{code} | Delete a coupon |
| [**findAllAppliedCoupons()**](CouponsApi.md#findAllAppliedCoupons) | **GET** /applied_coupons | Find Applied Coupons |
| [**findAllCoupons()**](CouponsApi.md#findAllCoupons) | **GET** /coupons | Find Coupons |
| [**findCoupon()**](CouponsApi.md#findCoupon) | **GET** /coupons/{code} | Find coupon by code |
| [**updateCoupon()**](CouponsApi.md#updateCoupon) | **PUT** /coupons/{code} | Update an existing coupon |


## `applyCoupon()`

```php
applyCoupon($applied_coupon_input): \LagoClient\Model\AppliedCoupon
```

Apply a coupon to a customer

Apply a coupon to a customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = LagoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LagoClient\Api\CouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applied_coupon_input = new \LagoClient\Model\AppliedCouponInput(); // \LagoClient\Model\AppliedCouponInput | Apply coupon payload

try {
    $result = $apiInstance->applyCoupon($applied_coupon_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponsApi->applyCoupon: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **applied_coupon_input** | [**\LagoClient\Model\AppliedCouponInput**](../Model/AppliedCouponInput.md)| Apply coupon payload | |

### Return type

[**\LagoClient\Model\AppliedCoupon**](../Model/AppliedCoupon.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCoupon()`

```php
createCoupon($coupon_input): \LagoClient\Model\Coupon
```

Create a new coupon

Create a new coupon

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = LagoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LagoClient\Api\CouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$coupon_input = new \LagoClient\Model\CouponInput(); // \LagoClient\Model\CouponInput | Coupon payload

try {
    $result = $apiInstance->createCoupon($coupon_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponsApi->createCoupon: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **coupon_input** | [**\LagoClient\Model\CouponInput**](../Model/CouponInput.md)| Coupon payload | |

### Return type

[**\LagoClient\Model\Coupon**](../Model/Coupon.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `destroyCoupon()`

```php
destroyCoupon($code): \LagoClient\Model\Coupon
```

Delete a coupon

Delete a coupon

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = LagoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LagoClient\Api\CouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = example_code; // string | Code of the existing coupon

try {
    $result = $apiInstance->destroyCoupon($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponsApi->destroyCoupon: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| Code of the existing coupon | |

### Return type

[**\LagoClient\Model\Coupon**](../Model/Coupon.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findAllAppliedCoupons()`

```php
findAllAppliedCoupons($status, $external_customer_id): \LagoClient\Model\AppliedCouponsPaginated
```

Find Applied Coupons

Find all applied coupons

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = LagoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LagoClient\Api\CouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = 'status_example'; // string | Applied coupon status
$external_customer_id = 12345; // string | External customer ID

try {
    $result = $apiInstance->findAllAppliedCoupons($status, $external_customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponsApi->findAllAppliedCoupons: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **status** | **string**| Applied coupon status | [optional] |
| **external_customer_id** | **string**| External customer ID | [optional] |

### Return type

[**\LagoClient\Model\AppliedCouponsPaginated**](../Model/AppliedCouponsPaginated.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findAllCoupons()`

```php
findAllCoupons(): \LagoClient\Model\CouponsPaginated
```

Find Coupons

Find all coupons in certain organisation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = LagoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LagoClient\Api\CouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->findAllCoupons();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponsApi->findAllCoupons: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\LagoClient\Model\CouponsPaginated**](../Model/CouponsPaginated.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findCoupon()`

```php
findCoupon($code): \LagoClient\Model\Coupon
```

Find coupon by code

Return a single coupon

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = LagoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LagoClient\Api\CouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = example_code; // string | Code of the existing coupon

try {
    $result = $apiInstance->findCoupon($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponsApi->findCoupon: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| Code of the existing coupon | |

### Return type

[**\LagoClient\Model\Coupon**](../Model/Coupon.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCoupon()`

```php
updateCoupon($code, $coupon_input): \LagoClient\Model\Coupon
```

Update an existing coupon

Update an existing coupon by code

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = LagoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LagoClient\Api\CouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = example_code; // string | Code of the existing coupon
$coupon_input = new \LagoClient\Model\CouponInput(); // \LagoClient\Model\CouponInput | Update an existing coupon

try {
    $result = $apiInstance->updateCoupon($code, $coupon_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponsApi->updateCoupon: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| Code of the existing coupon | |
| **coupon_input** | [**\LagoClient\Model\CouponInput**](../Model/CouponInput.md)| Update an existing coupon | |

### Return type

[**\LagoClient\Model\Coupon**](../Model/Coupon.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
