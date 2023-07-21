# LagoClient\CustomersApi

All URIs are relative to https://api.getlago.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**applyTax()**](CustomersApi.md#applyTax) | **POST** /customers/{external_customer_id}/applied_taxes | Apply a tax |
| [**createCustomer()**](CustomersApi.md#createCustomer) | **POST** /customers | Create a customer |
| [**deleteAppliedCoupon()**](CustomersApi.md#deleteAppliedCoupon) | **DELETE** /customers/{external_customer_id}/applied_coupons/{applied_coupon_id} | Delete an applied coupon |
| [**deleteAppliedTax()**](CustomersApi.md#deleteAppliedTax) | **DELETE** /customers/{external_customer_id}/applied_taxes/{tax_code} | Delete customer&#39;s appplied tax |
| [**destroyCustomer()**](CustomersApi.md#destroyCustomer) | **DELETE** /customers/{external_id} | Delete a customer |
| [**findAllCustomers()**](CustomersApi.md#findAllCustomers) | **GET** /customers | List all customers |
| [**findCustomer()**](CustomersApi.md#findCustomer) | **GET** /customers/{external_id} | Retrieve a customer |
| [**findCustomerCurrentUsage()**](CustomersApi.md#findCustomerCurrentUsage) | **GET** /customers/{external_customer_id}/current_usage | Retrieve customer current usage |
| [**getCustomerPortalUrl()**](CustomersApi.md#getCustomerPortalUrl) | **GET** /customers/{external_customer_id}/portal_url | Get a customer portal URL |


## `applyTax()`

```php
applyTax($external_customer_id, $customer_applied_tax_input): \LagoClient\Model\CustomerAppliedTax
```

Apply a tax

Apply an existing tax to a customer

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
$external_customer_id = 12345; // string | External ID of the customer
$customer_applied_tax_input = new \LagoClient\Model\CustomerAppliedTaxInput(); // \LagoClient\Model\CustomerAppliedTaxInput | Apply tax body

try {
    $result = $apiInstance->applyTax($external_customer_id, $customer_applied_tax_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->applyTax: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **external_customer_id** | **string**| External ID of the customer | |
| **customer_applied_tax_input** | [**\LagoClient\Model\CustomerAppliedTaxInput**](../Model/CustomerAppliedTaxInput.md)| Apply tax body | |

### Return type

[**\LagoClient\Model\CustomerAppliedTax**](../Model/CustomerAppliedTax.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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

Delete an applied coupon

This endpoint is used to delete a specific coupon that has been applied to a customer.

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
$external_customer_id = 5eb02857-a71e-4ea2-bcf9-57d3a41bc6ba; // string | The customer external unique identifier (provided by your own application)
$applied_coupon_id = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique identifier of the applied coupon, created by Lago.

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
| **external_customer_id** | **string**| The customer external unique identifier (provided by your own application) | |
| **applied_coupon_id** | **string**| Unique identifier of the applied coupon, created by Lago. | |

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

## `deleteAppliedTax()`

```php
deleteAppliedTax($external_customer_id, $tax_code): \LagoClient\Model\CustomerAppliedTax
```

Delete customer's appplied tax

Delete customer's appplied tax

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
$external_customer_id = 12345; // string | External ID of the customer
$tax_code = 12345; // string | Code of the applied tax

try {
    $result = $apiInstance->deleteAppliedTax($external_customer_id, $tax_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->deleteAppliedTax: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **external_customer_id** | **string**| External ID of the customer | |
| **tax_code** | **string**| Code of the applied tax | |

### Return type

[**\LagoClient\Model\CustomerAppliedTax**](../Model/CustomerAppliedTax.md)

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
findAllCustomers($page, $per_page): \LagoClient\Model\CustomersPaginated
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
$page = 1; // int | Page number.
$per_page = 20; // int | Number of records per page.

try {
    $result = $apiInstance->findAllCustomers($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->findAllCustomers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number. | [optional] |
| **per_page** | **int**| Number of records per page. | [optional] |

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
