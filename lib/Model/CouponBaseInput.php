<?php
/**
 * CouponBaseInput
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
 * CouponBaseInput Class Doc Comment
 *
 * @category Class
 * @package  LagoClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CouponBaseInput implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CouponBaseInput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'code' => 'string',
        'description' => 'string',
        'coupon_type' => 'string',
        'amount_cents' => 'int',
        'amount_currency' => 'Currency',
        'reusable' => 'bool',
        'percentage_rate' => 'string',
        'frequency' => 'string',
        'frequency_duration' => 'int',
        'expiration' => 'string',
        'expiration_at' => '\DateTime',
        'applies_to' => '\LagoClient\Model\CouponBaseInputAppliesTo'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'code' => null,
        'description' => null,
        'coupon_type' => null,
        'amount_cents' => null,
        'amount_currency' => null,
        'reusable' => null,
        'percentage_rate' => '^[0-9]+.?[0-9]*$',
        'frequency' => null,
        'frequency_duration' => null,
        'expiration' => null,
        'expiration_at' => 'date-time',
        'applies_to' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
		'code' => false,
		'description' => true,
		'coupon_type' => false,
		'amount_cents' => true,
		'amount_currency' => false,
		'reusable' => false,
		'percentage_rate' => true,
		'frequency' => false,
		'frequency_duration' => true,
		'expiration' => false,
		'expiration_at' => true,
		'applies_to' => true
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
        'name' => 'name',
        'code' => 'code',
        'description' => 'description',
        'coupon_type' => 'coupon_type',
        'amount_cents' => 'amount_cents',
        'amount_currency' => 'amount_currency',
        'reusable' => 'reusable',
        'percentage_rate' => 'percentage_rate',
        'frequency' => 'frequency',
        'frequency_duration' => 'frequency_duration',
        'expiration' => 'expiration',
        'expiration_at' => 'expiration_at',
        'applies_to' => 'applies_to'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'code' => 'setCode',
        'description' => 'setDescription',
        'coupon_type' => 'setCouponType',
        'amount_cents' => 'setAmountCents',
        'amount_currency' => 'setAmountCurrency',
        'reusable' => 'setReusable',
        'percentage_rate' => 'setPercentageRate',
        'frequency' => 'setFrequency',
        'frequency_duration' => 'setFrequencyDuration',
        'expiration' => 'setExpiration',
        'expiration_at' => 'setExpirationAt',
        'applies_to' => 'setAppliesTo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'code' => 'getCode',
        'description' => 'getDescription',
        'coupon_type' => 'getCouponType',
        'amount_cents' => 'getAmountCents',
        'amount_currency' => 'getAmountCurrency',
        'reusable' => 'getReusable',
        'percentage_rate' => 'getPercentageRate',
        'frequency' => 'getFrequency',
        'frequency_duration' => 'getFrequencyDuration',
        'expiration' => 'getExpiration',
        'expiration_at' => 'getExpirationAt',
        'applies_to' => 'getAppliesTo'
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

    public const COUPON_TYPE_FIXED_AMOUNT = 'fixed_amount';
    public const COUPON_TYPE_PERCENTAGE = 'percentage';
    public const FREQUENCY_ONCE = 'once';
    public const FREQUENCY_RECURRING = 'recurring';
    public const EXPIRATION_NO_EXPIRATION = 'no_expiration';
    public const EXPIRATION_TIME_LIMIT = 'time_limit';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCouponTypeAllowableValues()
    {
        return [
            self::COUPON_TYPE_FIXED_AMOUNT,
            self::COUPON_TYPE_PERCENTAGE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFrequencyAllowableValues()
    {
        return [
            self::FREQUENCY_ONCE,
            self::FREQUENCY_RECURRING,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getExpirationAllowableValues()
    {
        return [
            self::EXPIRATION_NO_EXPIRATION,
            self::EXPIRATION_TIME_LIMIT,
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('code', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('coupon_type', $data ?? [], null);
        $this->setIfExists('amount_cents', $data ?? [], null);
        $this->setIfExists('amount_currency', $data ?? [], null);
        $this->setIfExists('reusable', $data ?? [], null);
        $this->setIfExists('percentage_rate', $data ?? [], null);
        $this->setIfExists('frequency', $data ?? [], null);
        $this->setIfExists('frequency_duration', $data ?? [], null);
        $this->setIfExists('expiration', $data ?? [], null);
        $this->setIfExists('expiration_at', $data ?? [], null);
        $this->setIfExists('applies_to', $data ?? [], null);
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

        $allowedValues = $this->getCouponTypeAllowableValues();
        if (!is_null($this->container['coupon_type']) && !in_array($this->container['coupon_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'coupon_type', must be one of '%s'",
                $this->container['coupon_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getFrequencyAllowableValues();
        if (!is_null($this->container['frequency']) && !in_array($this->container['frequency'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'frequency', must be one of '%s'",
                $this->container['frequency'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getExpirationAllowableValues();
        if (!is_null($this->container['expiration']) && !in_array($this->container['expiration'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'expiration', must be one of '%s'",
                $this->container['expiration'],
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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name The name of the coupon.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets code
     *
     * @return string|null
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string|null $code Unique code used to identify the coupon.
     *
     * @return self
     */
    public function setCode($code)
    {
        if (is_null($code)) {
            throw new \InvalidArgumentException('non-nullable code cannot be null');
        }
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Description of the coupon.
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            array_push($this->openAPINullablesSetToNull, 'description');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('description', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets coupon_type
     *
     * @return string|null
     */
    public function getCouponType()
    {
        return $this->container['coupon_type'];
    }

    /**
     * Sets coupon_type
     *
     * @param string|null $coupon_type The type of the coupon. It can have two possible values: `fixed_amount` or `percentage`.  - If set to `fixed_amount`, the coupon represents a fixed amount discount. - If set to `percentage`, the coupon represents a percentage-based discount.
     *
     * @return self
     */
    public function setCouponType($coupon_type)
    {
        if (is_null($coupon_type)) {
            throw new \InvalidArgumentException('non-nullable coupon_type cannot be null');
        }
        $allowedValues = $this->getCouponTypeAllowableValues();
        if (!in_array($coupon_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'coupon_type', must be one of '%s'",
                    $coupon_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['coupon_type'] = $coupon_type;

        return $this;
    }

    /**
     * Gets amount_cents
     *
     * @return int|null
     */
    public function getAmountCents()
    {
        return $this->container['amount_cents'];
    }

    /**
     * Sets amount_cents
     *
     * @param int|null $amount_cents The amount of the coupon in cents. This field is required only for coupon with `fixed_amount` type.
     *
     * @return self
     */
    public function setAmountCents($amount_cents)
    {
        if (is_null($amount_cents)) {
            array_push($this->openAPINullablesSetToNull, 'amount_cents');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('amount_cents', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['amount_cents'] = $amount_cents;

        return $this;
    }

    /**
     * Gets amount_currency
     *
     * @return Currency|null
     */
    public function getAmountCurrency()
    {
        return $this->container['amount_currency'];
    }

    /**
     * Sets amount_currency
     *
     * @param Currency|null $amount_currency amount_currency
     *
     * @return self
     */
    public function setAmountCurrency($amount_currency)
    {
        if (is_null($amount_currency)) {
            throw new \InvalidArgumentException('non-nullable amount_currency cannot be null');
        }
        $this->container['amount_currency'] = $amount_currency;

        return $this;
    }

    /**
     * Gets reusable
     *
     * @return bool|null
     */
    public function getReusable()
    {
        return $this->container['reusable'];
    }

    /**
     * Sets reusable
     *
     * @param bool|null $reusable Indicates whether the coupon can be reused or not. If set to `true`, the coupon is reusable, meaning it can be applied multiple times to the same customer. If set to `false`, the coupon can only be used once and is not reusable. If not specified, this field is set to `true` by default.
     *
     * @return self
     */
    public function setReusable($reusable)
    {
        if (is_null($reusable)) {
            throw new \InvalidArgumentException('non-nullable reusable cannot be null');
        }
        $this->container['reusable'] = $reusable;

        return $this;
    }

    /**
     * Gets percentage_rate
     *
     * @return string|null
     */
    public function getPercentageRate()
    {
        return $this->container['percentage_rate'];
    }

    /**
     * Sets percentage_rate
     *
     * @param string|null $percentage_rate The percentage rate of the coupon. This field is required only for coupons with a `percentage` coupon type.
     *
     * @return self
     */
    public function setPercentageRate($percentage_rate)
    {
        if (is_null($percentage_rate)) {
            array_push($this->openAPINullablesSetToNull, 'percentage_rate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('percentage_rate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['percentage_rate'] = $percentage_rate;

        return $this;
    }

    /**
     * Gets frequency
     *
     * @return string|null
     */
    public function getFrequency()
    {
        return $this->container['frequency'];
    }

    /**
     * Sets frequency
     *
     * @param string|null $frequency The type of frequency for the coupon. It can have three possible values: `once`, `recurring` or `forever`.  - If set to `once`, the coupon is applicable only for a single use. - If set to `recurring`, the coupon can be used multiple times for recurring billing periods. - If set to `forever`, the coupon has unlimited usage and can be applied indefinitely.
     *
     * @return self
     */
    public function setFrequency($frequency)
    {
        if (is_null($frequency)) {
            throw new \InvalidArgumentException('non-nullable frequency cannot be null');
        }
        $allowedValues = $this->getFrequencyAllowableValues();
        if (!in_array($frequency, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'frequency', must be one of '%s'",
                    $frequency,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['frequency'] = $frequency;

        return $this;
    }

    /**
     * Gets frequency_duration
     *
     * @return int|null
     */
    public function getFrequencyDuration()
    {
        return $this->container['frequency_duration'];
    }

    /**
     * Sets frequency_duration
     *
     * @param int|null $frequency_duration Specifies the number of billing periods to which the coupon applies. This field is required only for coupons with a `recurring` frequency type
     *
     * @return self
     */
    public function setFrequencyDuration($frequency_duration)
    {
        if (is_null($frequency_duration)) {
            array_push($this->openAPINullablesSetToNull, 'frequency_duration');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('frequency_duration', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['frequency_duration'] = $frequency_duration;

        return $this;
    }

    /**
     * Gets expiration
     *
     * @return string|null
     */
    public function getExpiration()
    {
        return $this->container['expiration'];
    }

    /**
     * Sets expiration
     *
     * @param string|null $expiration Specifies the type of expiration for the coupon. It can have two possible values: `time_limit` or `no_expiration`.  - If set to `time_limit`, the coupon has an expiration based on a specified time limit. - If set to `no_expiration`, the coupon does not have an expiration date and remains valid indefinitely.
     *
     * @return self
     */
    public function setExpiration($expiration)
    {
        if (is_null($expiration)) {
            throw new \InvalidArgumentException('non-nullable expiration cannot be null');
        }
        $allowedValues = $this->getExpirationAllowableValues();
        if (!in_array($expiration, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'expiration', must be one of '%s'",
                    $expiration,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['expiration'] = $expiration;

        return $this;
    }

    /**
     * Gets expiration_at
     *
     * @return \DateTime|null
     */
    public function getExpirationAt()
    {
        return $this->container['expiration_at'];
    }

    /**
     * Sets expiration_at
     *
     * @param \DateTime|null $expiration_at The expiration date and time of the coupon. This field is required only for coupons with `expiration` set to `time_limit`. The expiration date and time should be specified in UTC format according to the ISO 8601 datetime standard. It indicates the exact moment when the coupon will expire and is no longer valid.
     *
     * @return self
     */
    public function setExpirationAt($expiration_at)
    {
        if (is_null($expiration_at)) {
            array_push($this->openAPINullablesSetToNull, 'expiration_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('expiration_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['expiration_at'] = $expiration_at;

        return $this;
    }

    /**
     * Gets applies_to
     *
     * @return \LagoClient\Model\CouponBaseInputAppliesTo|null
     */
    public function getAppliesTo()
    {
        return $this->container['applies_to'];
    }

    /**
     * Sets applies_to
     *
     * @param \LagoClient\Model\CouponBaseInputAppliesTo|null $applies_to applies_to
     *
     * @return self
     */
    public function setAppliesTo($applies_to)
    {
        if (is_null($applies_to)) {
            array_push($this->openAPINullablesSetToNull, 'applies_to');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('applies_to', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['applies_to'] = $applies_to;

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

