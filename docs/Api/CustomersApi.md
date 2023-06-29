# LagoClient\CustomersApi

All URIs are relative to https://api.getlago.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCustomer()**](CustomersApi.md#createCustomer) | **POST** /customers | Create a customer |
| [**deleteAppliedCoupon()**](CustomersApi.md#deleteAppliedCoupon) | **DELETE** /customers/{external_customer_id}/applied_coupons/{applied_coupon_id} | Delete customer&#39;s appplied coupon |
| [**destroyCustomer()**](CustomersApi.md#destroyCustomer) | **DELETE** /customers/{external_id} | Delete a customer |
| [**findAllCustomers()**](CustomersApi.md#findAllCustomers) | **GET** /customers | List all customers |
| [**findCustomer()**](CustomersApi.md#findCustomer) | **GET** /customers/{external_id} | Retrieve a customer |
| [**findCustomerCurrentUsage()**](CustomersApi.md#findCustomerCurrentUsage) | **GET** /customers/{external_customer_id}/current_usage | Retrieve customer current usage |
| [**getCustomerPortalUrl()**](CustomersApi.md#getCustomerPortalUrl) | **GET** /customers/{external_customer_id}/portal_url | Get a customer portal URL |


## `createCustomer()`

```php
createCustomer($customer_create_input): \LagoClient\Model\Customer
```

Create a customer

This endpoint creates a new customer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = LagoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LagoClient\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_create_input = new \LagoClient\Model\CustomerCreateInput(); // \LagoClient\Model\CustomerCreateInput | Customer payload

try {
    $result = $apiInstance->createCustomer($customer_create_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->createCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_create_input** | [**\LagoClient\Model\CustomerCreateInput**](../Model/CustomerCreateInput.md)| Customer payload | |

### Return type

[**\LagoClient\Model\Customer**](../Model/Customer.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAppliedCoupon()`

```php
deleteAppliedCoupon($external_customer_id, $applied_coupon_id): \LagoClient\Model\AppliedCoupon
```

Delete customer's appplied coupon

Delete customer's appplied coupon

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = LagoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LagoClient\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_customer_id = 12345; // string | External ID of the existing customer
$applied_coupon_id = 54321; // string | Applied Coupon Lago ID

try {
    $result = $apiInstance->deleteAppliedCoupon($external_customer_id, $applied_coupon_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->deleteAppliedCoupon: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **external_customer_id** | **string**| External ID of the existing customer | |
| **applied_coupon_id** | **string**| Applied Coupon Lago ID | |

### Return type

[**\LagoClient\Model\AppliedCoupon**](../Model/AppliedCoupon.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `destroyCustomer()`

```php
destroyCustomer($external_id): \LagoClient\Model\Customer
```

Delete a customer

This endpoint deletes an existing customer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = LagoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LagoClient\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_id = 5eb02857-a71e-4ea2-bcf9-57d3a41bc6ba; // string | External ID of the existing customer

try {
    $result = $apiInstance->destroyCustomer($external_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->destroyCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **external_id** | **string**| External ID of the existing customer | |

### Return type

[**\LagoClient\Model\Customer**](../Model/Customer.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findAllCustomers()`

```php
findAllCustomers(): \LagoClient\Model\CustomersPaginated
```

List all customers

This endpoint retrieves all existing customers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = LagoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LagoClient\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->findAllCustomers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->findAllCustomers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\LagoClient\Model\CustomersPaginated**](../Model/CustomersPaginated.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findCustomer()`

```php
findCustomer($external_id): \LagoClient\Model\Customer
```

Retrieve a customer

This endpoint retrieves an existing customer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = LagoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LagoClient\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_id = 5eb02857-a71e-4ea2-bcf9-57d3a41bc6ba; // string | External ID of the existing customer

try {
    $result = $apiInstance->findCustomer($external_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->findCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **external_id** | **string**| External ID of the existing customer | |

### Return type

[**\LagoClient\Model\Customer**](../Model/Customer.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findCustomerCurrentUsage()`

```php
findCustomerCurrentUsage($external_customer_id, $external_subscription_id): \LagoClient\Model\CustomerUsage
```

Retrieve customer current usage

This endpoint enables the retrieval of the usage-based billing data for a customer within the current period.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = LagoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LagoClient\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_customer_id = 5eb02857-a71e-4ea2-bcf9-57d3a41bc6ba; // string | The customer external unique identifier (provided by your own application).
$external_subscription_id = sub_1234567890; // string | The unique identifier of the subscription within your application.

try {
    $result = $apiInstance->findCustomerCurrentUsage($external_customer_id, $external_subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->findCustomerCurrentUsage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **external_customer_id** | **string**| The customer external unique identifier (provided by your own application). | |
| **external_subscription_id** | **string**| The unique identifier of the subscription within your application. | |

### Return type

[**\LagoClient\Model\CustomerUsage**](../Model/CustomerUsage.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomerPortalUrl()`

```php
getCustomerPortalUrl($external_customer_id): \LagoClient\Model\GetCustomerPortalUrl200Response
```

Get a customer portal URL

Retrieves an embeddable link for displaying a customer portal.  This endpoint allows you to fetch the URL that can be embedded to provide customers access to a dedicated portal

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = LagoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LagoClient\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_customer_id = 5eb02857-a71e-4ea2-bcf9-57d3a41bc6ba; // string | External ID of the existing customer

try {
    $result = $apiInstance->getCustomerPortalUrl($external_customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getCustomerPortalUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **external_customer_id** | **string**| External ID of the existing customer | |

### Return type

[**\LagoClient\Model\GetCustomerPortalUrl200Response**](../Model/GetCustomerPortalUrl200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
