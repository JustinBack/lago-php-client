# LagoClient\OrganizationsApi

All URIs are relative to https://api.getlago.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**updateOrganization()**](OrganizationsApi.md#updateOrganization) | **PUT** /organizations | Update your organization |


## `updateOrganization()`

```php
updateOrganization($organization_update_input): \LagoClient\Model\Organization
```

Update your organization

This endpoint is used to update your own organization's settings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = LagoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LagoClient\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_update_input = new \LagoClient\Model\OrganizationUpdateInput(); // \LagoClient\Model\OrganizationUpdateInput | Update an existing organization

try {
    $result = $apiInstance->updateOrganization($organization_update_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->updateOrganization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_update_input** | [**\LagoClient\Model\OrganizationUpdateInput**](../Model/OrganizationUpdateInput.md)| Update an existing organization | |

### Return type

[**\LagoClient\Model\Organization**](../Model/Organization.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
