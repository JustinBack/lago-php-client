# LagoClient\SubscriptionsApi

All URIs are relative to https://api.getlago.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createSubscription()**](SubscriptionsApi.md#createSubscription) | **POST** /subscriptions | Assign a plan to a customer |
| [**destroySubscription()**](SubscriptionsApi.md#destroySubscription) | **DELETE** /subscriptions/{external_id} | Terminate a subscription |
| [**findAllSubscriptions()**](SubscriptionsApi.md#findAllSubscriptions) | **GET** /subscriptions | List all subscriptions |
| [**updateSubscription()**](SubscriptionsApi.md#updateSubscription) | **PUT** /subscriptions/{external_id} | Update a subscription |


## `createSubscription()`

```php
createSubscription($subscription_create_input): \LagoClient\Model\Subscription
```

Assign a plan to a customer

This endpoint assigns a plan to a customer, creating or modifying a subscription. Ideal for initial subscriptions or plan changes (upgrades/downgrades).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = LagoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LagoClient\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_create_input = new \LagoClient\Model\SubscriptionCreateInput(); // \LagoClient\Model\SubscriptionCreateInput | Subscription payload

try {
    $result = $apiInstance->createSubscription($subscription_create_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->createSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_create_input** | [**\LagoClient\Model\SubscriptionCreateInput**](../Model/SubscriptionCreateInput.md)| Subscription payload | |

### Return type

[**\LagoClient\Model\Subscription**](../Model/Subscription.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `destroySubscription()`

```php
destroySubscription($external_id): \LagoClient\Model\Subscription
```

Terminate a subscription

This endpoint allows you to terminate a subscription.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = LagoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LagoClient\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_id = 5eb02857-a71e-4ea2-bcf9-57d3a41bc6ba; // string | External ID of the existing subscription

try {
    $result = $apiInstance->destroySubscription($external_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->destroySubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **external_id** | **string**| External ID of the existing subscription | |

### Return type

[**\LagoClient\Model\Subscription**](../Model/Subscription.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findAllSubscriptions()`

```php
findAllSubscriptions($external_customer_id, $plan_code): \LagoClient\Model\SubscriptionsPaginated
```

List all subscriptions

This endpoint retrieves all active subscriptions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = LagoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LagoClient\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_customer_id = 5eb02857-a71e-4ea2-bcf9-57d3a41bc6ba; // string | The customer external unique identifier (provided by your own application)
$plan_code = premium; // string | The unique code representing the plan to be attached to the customer. This code must correspond to the code property of one of the active plans.

try {
    $result = $apiInstance->findAllSubscriptions($external_customer_id, $plan_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->findAllSubscriptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **external_customer_id** | **string**| The customer external unique identifier (provided by your own application) | [optional] |
| **plan_code** | **string**| The unique code representing the plan to be attached to the customer. This code must correspond to the code property of one of the active plans. | [optional] |

### Return type

[**\LagoClient\Model\SubscriptionsPaginated**](../Model/SubscriptionsPaginated.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSubscription()`

```php
updateSubscription($external_id, $subscription_update_input): \LagoClient\Model\Subscription
```

Update a subscription

This endpoint allows you to update a subscription.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = LagoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LagoClient\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_id = 5eb02857-a71e-4ea2-bcf9-57d3a41bc6ba; // string | External ID of the existing subscription
$subscription_update_input = new \LagoClient\Model\SubscriptionUpdateInput(); // \LagoClient\Model\SubscriptionUpdateInput | Update an existing subscription

try {
    $result = $apiInstance->updateSubscription($external_id, $subscription_update_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->updateSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **external_id** | **string**| External ID of the existing subscription | |
| **subscription_update_input** | [**\LagoClient\Model\SubscriptionUpdateInput**](../Model/SubscriptionUpdateInput.md)| Update an existing subscription | |

### Return type

[**\LagoClient\Model\Subscription**](../Model/Subscription.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
