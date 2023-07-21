<?php
/**
 * CustomerBillingConfiguration
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  LagoClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Lago API documentation
 *
 * Lago API allows your application to push customer information and metrics (events) from your application to the billing application.
 *
 * The version of the OpenAPI document: 0.40.0-beta
 * Contact: tech@getlago.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace LagoClient\Model;

use \ArrayAccess;
use \LagoClient\ObjectSerializer;

/**
 * CustomerBillingConfiguration Class Doc Comment
 *
 * @category Class
 * @description Configuration specific to the payment provider, utilized for billing the customer. This object contains settings and parameters necessary for processing payments and invoicing the customer.
 * @package  LagoClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CustomerBillingConfiguration implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CustomerBillingConfiguration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'invoice_grace_period' => 'int',
        'payment_provider' => 'string',
        'provider_customer_id' => 'string',
        'sync' => 'bool',
        'sync_with_provider' => 'bool',
        'document_locale' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'invoice_grace_period' => null,
        'payment_provider' => null,
        'provider_customer_id' => null,
        'sync' => null,
        'sync_with_provider' => null,
        'document_locale' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'invoice_grace_period' => false,
		'payment_provider' => false,
		'provider_customer_id' => false,
		'sync' => false,
		'sync_with_provider' => false,
		'document_locale' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'invoice_grace_period' => 'invoice_grace_period',
        'payment_provider' => 'payment_provider',
        'provider_customer_id' => 'provider_customer_id',
        'sync' => 'sync',
        'sync_with_provider' => 'sync_with_provider',
        'document_locale' => 'document_locale'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'invoice_grace_period' => 'setInvoiceGracePeriod',
        'payment_provider' => 'setPaymentProvider',
        'provider_customer_id' => 'setProviderCustomerId',
        'sync' => 'setSync',
        'sync_with_provider' => 'setSyncWithProvider',
        'document_locale' => 'setDocumentLocale'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'invoice_grace_period' => 'getInvoiceGracePeriod',
        'payment_provider' => 'getPaymentProvider',
        'provider_customer_id' => 'getProviderCustomerId',
        'sync' => 'getSync',
        'sync_with_provider' => 'getSyncWithProvider',
        'document_locale' => 'getDocumentLocale'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    public const PAYMENT_PROVIDER_STRIPE = 'stripe';
    public const PAYMENT_PROVIDER_ADYEN = 'adyen';
    public const PAYMENT_PROVIDER_GOCARDLESS = 'gocardless';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPaymentProviderAllowableValues()
    {
        return [
            self::PAYMENT_PROVIDER_STRIPE,
            self::PAYMENT_PROVIDER_ADYEN,
            self::PAYMENT_PROVIDER_GOCARDLESS,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('invoice_grace_period', $data ?? [], null);
        $this->setIfExists('payment_provider', $data ?? [], null);
        $this->setIfExists('provider_customer_id', $data ?? [], null);
        $this->setIfExists('sync', $data ?? [], null);
        $this->setIfExists('sync_with_provider', $data ?? [], null);
        $this->setIfExists('document_locale', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getPaymentProviderAllowableValues();
        if (!is_null($this->container['payment_provider']) && !in_array($this->container['payment_provider'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'payment_provider', must be one of '%s'",
                $this->container['payment_provider'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets invoice_grace_period
     *
     * @return int|null
     */
    public function getInvoiceGracePeriod()
    {
        return $this->container['invoice_grace_period'];
    }

    /**
     * Sets invoice_grace_period
     *
     * @param int|null $invoice_grace_period The grace period, expressed in days, for the invoice. This period refers to the additional time granted to the customer beyond the invoice due date to adjust usage and line items
     *
     * @return self
     */
    public function setInvoiceGracePeriod($invoice_grace_period)
    {
        if (is_null($invoice_grace_period)) {
            throw new \InvalidArgumentException('non-nullable invoice_grace_period cannot be null');
        }
        $this->container['invoice_grace_period'] = $invoice_grace_period;

        return $this;
    }

    /**
     * Gets payment_provider
     *
     * @return string|null
     */
    public function getPaymentProvider()
    {
        return $this->container['payment_provider'];
    }

    /**
     * Sets payment_provider
     *
     * @param string|null $payment_provider The payment provider utilized to initiate payments for invoices issued by Lago. Accepted values: `stripe`, `adyen`, `gocardless` or null. This field is required if you intend to assign a `provider_customer_id`.
     *
     * @return self
     */
    public function setPaymentProvider($payment_provider)
    {
        if (is_null($payment_provider)) {
            throw new \InvalidArgumentException('non-nullable payment_provider cannot be null');
        }
        $allowedValues = $this->getPaymentProviderAllowableValues();
        if (!in_array($payment_provider, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'payment_provider', must be one of '%s'",
                    $payment_provider,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['payment_provider'] = $payment_provider;

        return $this;
    }

    /**
     * Gets provider_customer_id
     *
     * @return string|null
     */
    public function getProviderCustomerId()
    {
        return $this->container['provider_customer_id'];
    }

    /**
     * Sets provider_customer_id
     *
     * @param string|null $provider_customer_id The customer ID within the payment provider's system. If this field is not provided, Lago has the option to create a new customer record within the payment provider's system on behalf of the customer
     *
     * @return self
     */
    public function setProviderCustomerId($provider_customer_id)
    {
        if (is_null($provider_customer_id)) {
            throw new \InvalidArgumentException('non-nullable provider_customer_id cannot be null');
        }
        $this->container['provider_customer_id'] = $provider_customer_id;

        return $this;
    }

    /**
     * Gets sync
     *
     * @return bool|null
     */
    public function getSync()
    {
        return $this->container['sync'];
    }

    /**
     * Sets sync
     *
     * @param bool|null $sync Set this field to `true` if you want to create the customer in the payment provider synchronously with the customer creation process in Lago. This option is applicable only when the `provider_customer_id` is `null` and the customer is automatically created in the payment provider through Lago. By default, the value is set to `false`
     *
     * @return self
     */
    public function setSync($sync)
    {
        if (is_null($sync)) {
            throw new \InvalidArgumentException('non-nullable sync cannot be null');
        }
        $this->container['sync'] = $sync;

        return $this;
    }

    /**
     * Gets sync_with_provider
     *
     * @return bool|null
     */
    public function getSyncWithProvider()
    {
        return $this->container['sync_with_provider'];
    }

    /**
     * Sets sync_with_provider
     *
     * @param bool|null $sync_with_provider Set this field to `true` if you want to create a customer record in the payment provider's system. This option is applicable only when the `provider_customer_id` is null and the `sync_with_provider` field is set to `true`. By default, the value is set to `false`
     *
     * @return self
     */
    public function setSyncWithProvider($sync_with_provider)
    {
        if (is_null($sync_with_provider)) {
            throw new \InvalidArgumentException('non-nullable sync_with_provider cannot be null');
        }
        $this->container['sync_with_provider'] = $sync_with_provider;

        return $this;
    }

    /**
     * Gets document_locale
     *
     * @return string|null
     */
    public function getDocumentLocale()
    {
        return $this->container['document_locale'];
    }

    /**
     * Sets document_locale
     *
     * @param string|null $document_locale The document locale, specified in the ISO 639-1 format. This field represents the language or locale used for the documents issued by Lago
     *
     * @return self
     */
    public function setDocumentLocale($document_locale)
    {
        if (is_null($document_locale)) {
            throw new \InvalidArgumentException('non-nullable document_locale cannot be null');
        }
        $this->container['document_locale'] = $document_locale;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


