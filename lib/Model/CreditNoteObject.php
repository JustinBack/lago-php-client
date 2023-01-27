<?php
/**
 * CreditNoteObject
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Lago API documentation
 *
 * Lago API allows your application to push customer information and metrics (events) from your application to the billing application.
 *
 * The version of the OpenAPI document: 0.21.0-beta
 * Contact: tech@getlago.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * CreditNoteObject Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CreditNoteObject implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreditNoteObject';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'lago_id' => 'string',
        'sequential_id' => 'int',
        'number' => 'string',
        'lago_invoice_id' => 'string',
        'invoice_number' => 'string',
        'issuing_date' => 'string',
        'credit_status' => 'string',
        'refund_status' => 'string',
        'reason' => 'string',
        'description' => 'string',
        'total_amount_cents' => 'int',
        'total_amount_currency' => 'string',
        'vat_amount_cents' => 'int',
        'vat_amount_currency' => 'string',
        'sub_total_vat_excluded_amount_cents' => 'int',
        'sub_total_vat_excluded_amount_currency' => 'string',
        'balance_amount_cents' => 'int',
        'balance_amount_currency' => 'string',
        'credit_amount_cents' => 'int',
        'credit_amount_currency' => 'string',
        'refund_amount_cents' => 'int',
        'refund_amount_currency' => 'string',
        'created_at' => 'string',
        'updated_at' => 'string',
        'file_url' => 'string',
        'customer' => '\OpenAPI\Client\Model\CustomerObject',
        'items' => '\OpenAPI\Client\Model\CreditNoteItemObject[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'lago_id' => null,
        'sequential_id' => null,
        'number' => null,
        'lago_invoice_id' => null,
        'invoice_number' => null,
        'issuing_date' => null,
        'credit_status' => null,
        'refund_status' => null,
        'reason' => null,
        'description' => null,
        'total_amount_cents' => null,
        'total_amount_currency' => null,
        'vat_amount_cents' => null,
        'vat_amount_currency' => null,
        'sub_total_vat_excluded_amount_cents' => null,
        'sub_total_vat_excluded_amount_currency' => null,
        'balance_amount_cents' => null,
        'balance_amount_currency' => null,
        'credit_amount_cents' => null,
        'credit_amount_currency' => null,
        'refund_amount_cents' => null,
        'refund_amount_currency' => null,
        'created_at' => null,
        'updated_at' => null,
        'file_url' => null,
        'customer' => null,
        'items' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'lago_id' => false,
		'sequential_id' => false,
		'number' => false,
		'lago_invoice_id' => false,
		'invoice_number' => false,
		'issuing_date' => false,
		'credit_status' => false,
		'refund_status' => false,
		'reason' => false,
		'description' => false,
		'total_amount_cents' => false,
		'total_amount_currency' => false,
		'vat_amount_cents' => false,
		'vat_amount_currency' => false,
		'sub_total_vat_excluded_amount_cents' => false,
		'sub_total_vat_excluded_amount_currency' => false,
		'balance_amount_cents' => false,
		'balance_amount_currency' => false,
		'credit_amount_cents' => false,
		'credit_amount_currency' => false,
		'refund_amount_cents' => false,
		'refund_amount_currency' => false,
		'created_at' => false,
		'updated_at' => false,
		'file_url' => false,
		'customer' => false,
		'items' => false
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
        'lago_id' => 'lago_id',
        'sequential_id' => 'sequential_id',
        'number' => 'number',
        'lago_invoice_id' => 'lago_invoice_id',
        'invoice_number' => 'invoice_number',
        'issuing_date' => 'issuing_date',
        'credit_status' => 'credit_status',
        'refund_status' => 'refund_status',
        'reason' => 'reason',
        'description' => 'description',
        'total_amount_cents' => 'total_amount_cents',
        'total_amount_currency' => 'total_amount_currency',
        'vat_amount_cents' => 'vat_amount_cents',
        'vat_amount_currency' => 'vat_amount_currency',
        'sub_total_vat_excluded_amount_cents' => 'sub_total_vat_excluded_amount_cents',
        'sub_total_vat_excluded_amount_currency' => 'sub_total_vat_excluded_amount_currency',
        'balance_amount_cents' => 'balance_amount_cents',
        'balance_amount_currency' => 'balance_amount_currency',
        'credit_amount_cents' => 'credit_amount_cents',
        'credit_amount_currency' => 'credit_amount_currency',
        'refund_amount_cents' => 'refund_amount_cents',
        'refund_amount_currency' => 'refund_amount_currency',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'file_url' => 'file_url',
        'customer' => 'customer',
        'items' => 'items'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'lago_id' => 'setLagoId',
        'sequential_id' => 'setSequentialId',
        'number' => 'setNumber',
        'lago_invoice_id' => 'setLagoInvoiceId',
        'invoice_number' => 'setInvoiceNumber',
        'issuing_date' => 'setIssuingDate',
        'credit_status' => 'setCreditStatus',
        'refund_status' => 'setRefundStatus',
        'reason' => 'setReason',
        'description' => 'setDescription',
        'total_amount_cents' => 'setTotalAmountCents',
        'total_amount_currency' => 'setTotalAmountCurrency',
        'vat_amount_cents' => 'setVatAmountCents',
        'vat_amount_currency' => 'setVatAmountCurrency',
        'sub_total_vat_excluded_amount_cents' => 'setSubTotalVatExcludedAmountCents',
        'sub_total_vat_excluded_amount_currency' => 'setSubTotalVatExcludedAmountCurrency',
        'balance_amount_cents' => 'setBalanceAmountCents',
        'balance_amount_currency' => 'setBalanceAmountCurrency',
        'credit_amount_cents' => 'setCreditAmountCents',
        'credit_amount_currency' => 'setCreditAmountCurrency',
        'refund_amount_cents' => 'setRefundAmountCents',
        'refund_amount_currency' => 'setRefundAmountCurrency',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'file_url' => 'setFileUrl',
        'customer' => 'setCustomer',
        'items' => 'setItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'lago_id' => 'getLagoId',
        'sequential_id' => 'getSequentialId',
        'number' => 'getNumber',
        'lago_invoice_id' => 'getLagoInvoiceId',
        'invoice_number' => 'getInvoiceNumber',
        'issuing_date' => 'getIssuingDate',
        'credit_status' => 'getCreditStatus',
        'refund_status' => 'getRefundStatus',
        'reason' => 'getReason',
        'description' => 'getDescription',
        'total_amount_cents' => 'getTotalAmountCents',
        'total_amount_currency' => 'getTotalAmountCurrency',
        'vat_amount_cents' => 'getVatAmountCents',
        'vat_amount_currency' => 'getVatAmountCurrency',
        'sub_total_vat_excluded_amount_cents' => 'getSubTotalVatExcludedAmountCents',
        'sub_total_vat_excluded_amount_currency' => 'getSubTotalVatExcludedAmountCurrency',
        'balance_amount_cents' => 'getBalanceAmountCents',
        'balance_amount_currency' => 'getBalanceAmountCurrency',
        'credit_amount_cents' => 'getCreditAmountCents',
        'credit_amount_currency' => 'getCreditAmountCurrency',
        'refund_amount_cents' => 'getRefundAmountCents',
        'refund_amount_currency' => 'getRefundAmountCurrency',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'file_url' => 'getFileUrl',
        'customer' => 'getCustomer',
        'items' => 'getItems'
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

    public const CREDIT_STATUS_AVAILABLE = 'available';
    public const CREDIT_STATUS_CONSUMED = 'consumed';
    public const CREDIT_STATUS_VOIDED = 'voided';
    public const REFUND_STATUS_PENDING = 'pending';
    public const REFUND_STATUS_SUCCEEDED = 'succeeded';
    public const REFUND_STATUS_FAILED = 'failed';
    public const REASON_DUPLICATED_CHARGE = 'duplicated_charge';
    public const REASON_PRODUCT_UNSATISFACTORY = 'product_unsatisfactory';
    public const REASON_ORDER_CHANGE = 'order_change';
    public const REASON_ORDER_CANCELLATION = 'order_cancellation';
    public const REASON_FRAUDULENT_CHARGE = 'fraudulent_charge';
    public const REASON_OTHER = 'other';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCreditStatusAllowableValues()
    {
        return [
            self::CREDIT_STATUS_AVAILABLE,
            self::CREDIT_STATUS_CONSUMED,
            self::CREDIT_STATUS_VOIDED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRefundStatusAllowableValues()
    {
        return [
            self::REFUND_STATUS_PENDING,
            self::REFUND_STATUS_SUCCEEDED,
            self::REFUND_STATUS_FAILED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getReasonAllowableValues()
    {
        return [
            self::REASON_DUPLICATED_CHARGE,
            self::REASON_PRODUCT_UNSATISFACTORY,
            self::REASON_ORDER_CHANGE,
            self::REASON_ORDER_CANCELLATION,
            self::REASON_FRAUDULENT_CHARGE,
            self::REASON_OTHER,
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
        $this->setIfExists('lago_id', $data ?? [], null);
        $this->setIfExists('sequential_id', $data ?? [], null);
        $this->setIfExists('number', $data ?? [], null);
        $this->setIfExists('lago_invoice_id', $data ?? [], null);
        $this->setIfExists('invoice_number', $data ?? [], null);
        $this->setIfExists('issuing_date', $data ?? [], null);
        $this->setIfExists('credit_status', $data ?? [], null);
        $this->setIfExists('refund_status', $data ?? [], null);
        $this->setIfExists('reason', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('total_amount_cents', $data ?? [], null);
        $this->setIfExists('total_amount_currency', $data ?? [], null);
        $this->setIfExists('vat_amount_cents', $data ?? [], null);
        $this->setIfExists('vat_amount_currency', $data ?? [], null);
        $this->setIfExists('sub_total_vat_excluded_amount_cents', $data ?? [], null);
        $this->setIfExists('sub_total_vat_excluded_amount_currency', $data ?? [], null);
        $this->setIfExists('balance_amount_cents', $data ?? [], null);
        $this->setIfExists('balance_amount_currency', $data ?? [], null);
        $this->setIfExists('credit_amount_cents', $data ?? [], null);
        $this->setIfExists('credit_amount_currency', $data ?? [], null);
        $this->setIfExists('refund_amount_cents', $data ?? [], null);
        $this->setIfExists('refund_amount_currency', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('file_url', $data ?? [], null);
        $this->setIfExists('customer', $data ?? [], null);
        $this->setIfExists('items', $data ?? [], null);
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

        $allowedValues = $this->getCreditStatusAllowableValues();
        if (!is_null($this->container['credit_status']) && !in_array($this->container['credit_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'credit_status', must be one of '%s'",
                $this->container['credit_status'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getRefundStatusAllowableValues();
        if (!is_null($this->container['refund_status']) && !in_array($this->container['refund_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'refund_status', must be one of '%s'",
                $this->container['refund_status'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getReasonAllowableValues();
        if (!is_null($this->container['reason']) && !in_array($this->container['reason'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'reason', must be one of '%s'",
                $this->container['reason'],
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
     * Gets lago_id
     *
     * @return string|null
     */
    public function getLagoId()
    {
        return $this->container['lago_id'];
    }

    /**
     * Sets lago_id
     *
     * @param string|null $lago_id lago_id
     *
     * @return self
     */
    public function setLagoId($lago_id)
    {
        if (is_null($lago_id)) {
            throw new \InvalidArgumentException('non-nullable lago_id cannot be null');
        }
        $this->container['lago_id'] = $lago_id;

        return $this;
    }

    /**
     * Gets sequential_id
     *
     * @return int|null
     */
    public function getSequentialId()
    {
        return $this->container['sequential_id'];
    }

    /**
     * Sets sequential_id
     *
     * @param int|null $sequential_id sequential_id
     *
     * @return self
     */
    public function setSequentialId($sequential_id)
    {
        if (is_null($sequential_id)) {
            throw new \InvalidArgumentException('non-nullable sequential_id cannot be null');
        }
        $this->container['sequential_id'] = $sequential_id;

        return $this;
    }

    /**
     * Gets number
     *
     * @return string|null
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string|null $number number
     *
     * @return self
     */
    public function setNumber($number)
    {
        if (is_null($number)) {
            throw new \InvalidArgumentException('non-nullable number cannot be null');
        }
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets lago_invoice_id
     *
     * @return string|null
     */
    public function getLagoInvoiceId()
    {
        return $this->container['lago_invoice_id'];
    }

    /**
     * Sets lago_invoice_id
     *
     * @param string|null $lago_invoice_id lago_invoice_id
     *
     * @return self
     */
    public function setLagoInvoiceId($lago_invoice_id)
    {
        if (is_null($lago_invoice_id)) {
            throw new \InvalidArgumentException('non-nullable lago_invoice_id cannot be null');
        }
        $this->container['lago_invoice_id'] = $lago_invoice_id;

        return $this;
    }

    /**
     * Gets invoice_number
     *
     * @return string|null
     */
    public function getInvoiceNumber()
    {
        return $this->container['invoice_number'];
    }

    /**
     * Sets invoice_number
     *
     * @param string|null $invoice_number invoice_number
     *
     * @return self
     */
    public function setInvoiceNumber($invoice_number)
    {
        if (is_null($invoice_number)) {
            throw new \InvalidArgumentException('non-nullable invoice_number cannot be null');
        }
        $this->container['invoice_number'] = $invoice_number;

        return $this;
    }

    /**
     * Gets issuing_date
     *
     * @return string|null
     */
    public function getIssuingDate()
    {
        return $this->container['issuing_date'];
    }

    /**
     * Sets issuing_date
     *
     * @param string|null $issuing_date issuing_date
     *
     * @return self
     */
    public function setIssuingDate($issuing_date)
    {
        if (is_null($issuing_date)) {
            throw new \InvalidArgumentException('non-nullable issuing_date cannot be null');
        }
        $this->container['issuing_date'] = $issuing_date;

        return $this;
    }

    /**
     * Gets credit_status
     *
     * @return string|null
     */
    public function getCreditStatus()
    {
        return $this->container['credit_status'];
    }

    /**
     * Sets credit_status
     *
     * @param string|null $credit_status Credit status
     *
     * @return self
     */
    public function setCreditStatus($credit_status)
    {
        if (is_null($credit_status)) {
            throw new \InvalidArgumentException('non-nullable credit_status cannot be null');
        }
        $allowedValues = $this->getCreditStatusAllowableValues();
        if (!in_array($credit_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'credit_status', must be one of '%s'",
                    $credit_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['credit_status'] = $credit_status;

        return $this;
    }

    /**
     * Gets refund_status
     *
     * @return string|null
     */
    public function getRefundStatus()
    {
        return $this->container['refund_status'];
    }

    /**
     * Sets refund_status
     *
     * @param string|null $refund_status Refund status
     *
     * @return self
     */
    public function setRefundStatus($refund_status)
    {
        if (is_null($refund_status)) {
            throw new \InvalidArgumentException('non-nullable refund_status cannot be null');
        }
        $allowedValues = $this->getRefundStatusAllowableValues();
        if (!in_array($refund_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'refund_status', must be one of '%s'",
                    $refund_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['refund_status'] = $refund_status;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return string|null
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param string|null $reason Reason
     *
     * @return self
     */
    public function setReason($reason)
    {
        if (is_null($reason)) {
            throw new \InvalidArgumentException('non-nullable reason cannot be null');
        }
        $allowedValues = $this->getReasonAllowableValues();
        if (!in_array($reason, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'reason', must be one of '%s'",
                    $reason,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['reason'] = $reason;

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
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets total_amount_cents
     *
     * @return int|null
     */
    public function getTotalAmountCents()
    {
        return $this->container['total_amount_cents'];
    }

    /**
     * Sets total_amount_cents
     *
     * @param int|null $total_amount_cents total_amount_cents
     *
     * @return self
     */
    public function setTotalAmountCents($total_amount_cents)
    {
        if (is_null($total_amount_cents)) {
            throw new \InvalidArgumentException('non-nullable total_amount_cents cannot be null');
        }
        $this->container['total_amount_cents'] = $total_amount_cents;

        return $this;
    }

    /**
     * Gets total_amount_currency
     *
     * @return string|null
     */
    public function getTotalAmountCurrency()
    {
        return $this->container['total_amount_currency'];
    }

    /**
     * Sets total_amount_currency
     *
     * @param string|null $total_amount_currency total_amount_currency
     *
     * @return self
     */
    public function setTotalAmountCurrency($total_amount_currency)
    {
        if (is_null($total_amount_currency)) {
            throw new \InvalidArgumentException('non-nullable total_amount_currency cannot be null');
        }
        $this->container['total_amount_currency'] = $total_amount_currency;

        return $this;
    }

    /**
     * Gets vat_amount_cents
     *
     * @return int|null
     */
    public function getVatAmountCents()
    {
        return $this->container['vat_amount_cents'];
    }

    /**
     * Sets vat_amount_cents
     *
     * @param int|null $vat_amount_cents vat_amount_cents
     *
     * @return self
     */
    public function setVatAmountCents($vat_amount_cents)
    {
        if (is_null($vat_amount_cents)) {
            throw new \InvalidArgumentException('non-nullable vat_amount_cents cannot be null');
        }
        $this->container['vat_amount_cents'] = $vat_amount_cents;

        return $this;
    }

    /**
     * Gets vat_amount_currency
     *
     * @return string|null
     */
    public function getVatAmountCurrency()
    {
        return $this->container['vat_amount_currency'];
    }

    /**
     * Sets vat_amount_currency
     *
     * @param string|null $vat_amount_currency vat_amount_currency
     *
     * @return self
     */
    public function setVatAmountCurrency($vat_amount_currency)
    {
        if (is_null($vat_amount_currency)) {
            throw new \InvalidArgumentException('non-nullable vat_amount_currency cannot be null');
        }
        $this->container['vat_amount_currency'] = $vat_amount_currency;

        return $this;
    }

    /**
     * Gets sub_total_vat_excluded_amount_cents
     *
     * @return int|null
     */
    public function getSubTotalVatExcludedAmountCents()
    {
        return $this->container['sub_total_vat_excluded_amount_cents'];
    }

    /**
     * Sets sub_total_vat_excluded_amount_cents
     *
     * @param int|null $sub_total_vat_excluded_amount_cents sub_total_vat_excluded_amount_cents
     *
     * @return self
     */
    public function setSubTotalVatExcludedAmountCents($sub_total_vat_excluded_amount_cents)
    {
        if (is_null($sub_total_vat_excluded_amount_cents)) {
            throw new \InvalidArgumentException('non-nullable sub_total_vat_excluded_amount_cents cannot be null');
        }
        $this->container['sub_total_vat_excluded_amount_cents'] = $sub_total_vat_excluded_amount_cents;

        return $this;
    }

    /**
     * Gets sub_total_vat_excluded_amount_currency
     *
     * @return string|null
     */
    public function getSubTotalVatExcludedAmountCurrency()
    {
        return $this->container['sub_total_vat_excluded_amount_currency'];
    }

    /**
     * Sets sub_total_vat_excluded_amount_currency
     *
     * @param string|null $sub_total_vat_excluded_amount_currency sub_total_vat_excluded_amount_currency
     *
     * @return self
     */
    public function setSubTotalVatExcludedAmountCurrency($sub_total_vat_excluded_amount_currency)
    {
        if (is_null($sub_total_vat_excluded_amount_currency)) {
            throw new \InvalidArgumentException('non-nullable sub_total_vat_excluded_amount_currency cannot be null');
        }
        $this->container['sub_total_vat_excluded_amount_currency'] = $sub_total_vat_excluded_amount_currency;

        return $this;
    }

    /**
     * Gets balance_amount_cents
     *
     * @return int|null
     */
    public function getBalanceAmountCents()
    {
        return $this->container['balance_amount_cents'];
    }

    /**
     * Sets balance_amount_cents
     *
     * @param int|null $balance_amount_cents balance_amount_cents
     *
     * @return self
     */
    public function setBalanceAmountCents($balance_amount_cents)
    {
        if (is_null($balance_amount_cents)) {
            throw new \InvalidArgumentException('non-nullable balance_amount_cents cannot be null');
        }
        $this->container['balance_amount_cents'] = $balance_amount_cents;

        return $this;
    }

    /**
     * Gets balance_amount_currency
     *
     * @return string|null
     */
    public function getBalanceAmountCurrency()
    {
        return $this->container['balance_amount_currency'];
    }

    /**
     * Sets balance_amount_currency
     *
     * @param string|null $balance_amount_currency balance_amount_currency
     *
     * @return self
     */
    public function setBalanceAmountCurrency($balance_amount_currency)
    {
        if (is_null($balance_amount_currency)) {
            throw new \InvalidArgumentException('non-nullable balance_amount_currency cannot be null');
        }
        $this->container['balance_amount_currency'] = $balance_amount_currency;

        return $this;
    }

    /**
     * Gets credit_amount_cents
     *
     * @return int|null
     */
    public function getCreditAmountCents()
    {
        return $this->container['credit_amount_cents'];
    }

    /**
     * Sets credit_amount_cents
     *
     * @param int|null $credit_amount_cents credit_amount_cents
     *
     * @return self
     */
    public function setCreditAmountCents($credit_amount_cents)
    {
        if (is_null($credit_amount_cents)) {
            throw new \InvalidArgumentException('non-nullable credit_amount_cents cannot be null');
        }
        $this->container['credit_amount_cents'] = $credit_amount_cents;

        return $this;
    }

    /**
     * Gets credit_amount_currency
     *
     * @return string|null
     */
    public function getCreditAmountCurrency()
    {
        return $this->container['credit_amount_currency'];
    }

    /**
     * Sets credit_amount_currency
     *
     * @param string|null $credit_amount_currency credit_amount_currency
     *
     * @return self
     */
    public function setCreditAmountCurrency($credit_amount_currency)
    {
        if (is_null($credit_amount_currency)) {
            throw new \InvalidArgumentException('non-nullable credit_amount_currency cannot be null');
        }
        $this->container['credit_amount_currency'] = $credit_amount_currency;

        return $this;
    }

    /**
     * Gets refund_amount_cents
     *
     * @return int|null
     */
    public function getRefundAmountCents()
    {
        return $this->container['refund_amount_cents'];
    }

    /**
     * Sets refund_amount_cents
     *
     * @param int|null $refund_amount_cents refund_amount_cents
     *
     * @return self
     */
    public function setRefundAmountCents($refund_amount_cents)
    {
        if (is_null($refund_amount_cents)) {
            throw new \InvalidArgumentException('non-nullable refund_amount_cents cannot be null');
        }
        $this->container['refund_amount_cents'] = $refund_amount_cents;

        return $this;
    }

    /**
     * Gets refund_amount_currency
     *
     * @return string|null
     */
    public function getRefundAmountCurrency()
    {
        return $this->container['refund_amount_currency'];
    }

    /**
     * Sets refund_amount_currency
     *
     * @param string|null $refund_amount_currency refund_amount_currency
     *
     * @return self
     */
    public function setRefundAmountCurrency($refund_amount_currency)
    {
        if (is_null($refund_amount_currency)) {
            throw new \InvalidArgumentException('non-nullable refund_amount_currency cannot be null');
        }
        $this->container['refund_amount_currency'] = $refund_amount_currency;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string|null $created_at created_at
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return string|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param string|null $updated_at updated_at
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        if (is_null($updated_at)) {
            throw new \InvalidArgumentException('non-nullable updated_at cannot be null');
        }
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets file_url
     *
     * @return string|null
     */
    public function getFileUrl()
    {
        return $this->container['file_url'];
    }

    /**
     * Sets file_url
     *
     * @param string|null $file_url file_url
     *
     * @return self
     */
    public function setFileUrl($file_url)
    {
        if (is_null($file_url)) {
            throw new \InvalidArgumentException('non-nullable file_url cannot be null');
        }
        $this->container['file_url'] = $file_url;

        return $this;
    }

    /**
     * Gets customer
     *
     * @return \OpenAPI\Client\Model\CustomerObject|null
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param \OpenAPI\Client\Model\CustomerObject|null $customer customer
     *
     * @return self
     */
    public function setCustomer($customer)
    {
        if (is_null($customer)) {
            throw new \InvalidArgumentException('non-nullable customer cannot be null');
        }
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \OpenAPI\Client\Model\CreditNoteItemObject[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \OpenAPI\Client\Model\CreditNoteItemObject[]|null $items items
     *
     * @return self
     */
    public function setItems($items)
    {
        if (is_null($items)) {
            throw new \InvalidArgumentException('non-nullable items cannot be null');
        }
        $this->container['items'] = $items;

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

