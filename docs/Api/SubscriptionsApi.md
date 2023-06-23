# LagoClient\SubscriptionsApi

All URIs are relative to https://api.getlago.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createSubscription()**](SubscriptionsApi.md#createSubscription) | **POST** /subscriptions | Assign a plan to a customer |
| [**destroySubscription()**](SubscriptionsApi.md#destroySubscription) | **DELETE** /subscriptions/{external_id} | Terminate a subscription |
| [**findAllSubscriptions()**](SubscriptionsApi.md#findAllSubscriptions) | **GET** /subscriptions | Find subscriptions |
| [**updateSubscription()**](SubscriptionsApi.md#updateSubscription) | **PUT** /subscriptions/{external_id} | Update an existing subscription |


## `createSubscription()`

```php
createSubscription($subscription_create_input): \LagoClient\Model\Subscription
```

Assign a plan to a customer

Assign a plan to a customer

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

Terminate a subscription

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
$external_id = example_id; // string | External ID of the existing subscription

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
findAllSubscriptions($page, $per_page, $external_customer_id, $plan_code): \LagoClient\Model\SubscriptionsPaginated
```

Find subscriptions

Find all suscriptions for certain customer

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
$page = 2; // int | Number of page
$per_page = 20; // int | Number of records per page
$external_customer_id = 12345; // string | External customer ID
$plan_code = example_code; // string | Code of the plan attached to the subscription

try {
    $result = $apiInstance->findAllSubscriptions($page, $per_page, $external_customer_id, $plan_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->findAllSubscriptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Number of page | [optional] |
| **per_page** | **int**| Number of records per page | [optional] |
| **external_customer_id** | **string**| External customer ID | [optional] |
| **plan_code** | **string**| Code of the plan attached to the subscription | [optional] |

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

Update an existing subscription

Update an existing subscription by external ID

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
$external_id = example_id; // string | External ID of the existing subscription
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
