<?php
/**
 * UpdateAccount
 *
 * PHP version 5
 *
 * @category Class
 * @package  ai\thirdwatch
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Thirdwatch API
 *
 * The first version of the Thirdwatch API is an exciting step forward towards making it easier for developers to pass data to Thirdwatch.  Once you've [registered your website/app](https://thirdwatch.ai) it's easy to start sending data to Thirdwatch.  All endpoints are only accessible via https and are located at `api.thirdwatch.ai`. For instance: you can send event at the moment by ```HTTP POST``` Request to the following URL with your API key in ```Header``` and ```JSON``` data in request body. ```   https://api.thirdwatch.ai/event/v1 ``` Every API request must contain ```API Key``` in header value ```X-THIRDWATCH-API-KEY```  Every event must contain your ```_userId``` (if this is not available, you can alternatively provide a ```_sessionId``` value also in ```_userId```).  JavaScript Fingerprinting module for capturing unique devices and tracking user interaction.  This script will identify unique devices with respect to the browser. For e.g., if chrome is opened in normal mode a unique device id is generated and this will be same if chrome is opened in incognito mode or reinstalled.  Paste the below script onto your webpage, just after the opening `<body>` tag. This script should be added to the page which is accessed externally by the user of your website. For e.g., If you want to track three different webpages then paste the below script onto each webpage, just after the opening `<body>` tag. This script should not be added onto internal tools or admin panels. ```   &lt;script id=\"thirdwatch\"     data-session-cookie-name=\"&lt;cookie_name&gt;\"     data-session-id-value=\"&lt;session_id&gt;\"     data-user-id=\"&lt;user_id&gt;\"     data-app-secret=\"&lt;app_secret&gt;\"     data-is-track-pageview=\"true\"&gt; (function() {         var loadDeviceJs = function() {         var element = document.createElement(\"script\");         element.async = 1;         element.src = \"https://cdn.thirdwatch.ai/tw.min.js\";         document.body.appendChild(element);         };         if (window.addEventListener) {              window.addEventListener(\"load\", loadDeviceJs, false);         } else if (window.attachEvent) {         window.attachEvent(\"onload\", loadDeviceJs);         }     })();   &lt;/script&gt; ``` * `data-session-cookie-name` -- The cookie name where you are saving the unique session id. We will pick the session id by reading its value from the cookie name. (Optional) * `data-session-id-value` -- In case you are not passing `data-session-cookie-name` than you can put session id directly in this parameter. In absence of both `data-session-cookie-name` and `data-session-id-value`, our system will generate a session Id. (Optional) * `data-user-id` -- Unique user id at your end. This can be email id or primary key in the database. In case of guest user, you can insert session Id here. * `data-app-secret` -- Unique App secret generated for you by Thirdwatch. * `data-is-track-pageview` -- If this is set to true, then the url on which this script is running will be sent to Thirdwatch, else the url will not be captured.   The Score API is use to get an up to date cutomer trust score after you have sent transaction event and order successful. This API will provide the riskiness score of the order with reasons. Some examples of when you may want to check the score are before:    - Before Shippement of a package   - Finalizing a money transfer   - Giving access to a prearranged vacation rental   - Sending voucher on mail  ```   https://api.thirdwatch.ai/neo/v1/score?api_key=<your api key>&order_id=<Order id> ```  According to Score you can decide to take action Approve or Reject. Orders with score more than 70 will consider as Riskey orders. We'll provide some reasons also in rules section.   ``` {   \"order_id\": \"OCT45671\",   \"user_id\": \"ajay_245\",   \"order_timestamp\": \"2017-05-09T09:40:45.717Z\",   \"score\": 82,   \"flag\": \"red\",     -\"reasons\": [     {         \"name\": \"_numOfFailedTransactions\",         \"display_name\": \"Number of failed transactions\",         \"flag\": \"green\",         \"value\": \"0\",         \"is_display\": true       },       {         \"name\": \"_accountAge\",         \"display_name\": \"Account age\",         \"flag\": \"red\",         \"value\": \"0\",         \"is_display\": true       },       {         \"name\": \"_numOfOrderSameIp\",         \"display_name\": \"Number of orders from same IP\",         \"flag\": \"red\",         \"value\": \"11\",         \"is_display\": true       }     ] } ```
 *
 * OpenAPI spec version: 0.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ai\thirdwatch\Model;

use \ArrayAccess;

/**
 * UpdateAccount Class Doc Comment
 *
 * @category    Class
 * @package     ai\thirdwatch
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UpdateAccount implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'UpdateAccount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        '_user_id' => 'string',
        '_session_id' => 'string',
        '_device_ip' => 'string',
        '_origin_timestamp' => 'string',
        '_user_email' => 'string',
        '_first_name' => 'string',
        '_last_name' => 'string',
        '_phone' => 'string',
        '_age' => 'string',
        '_gender' => 'string',
        '_referral_code' => 'string',
        '_referrer_user_id' => 'string',
        '_billing_address' => '\ai\thirdwatch\Model\BillingAddress',
        '_shipping_address' => '\ai\thirdwatch\Model\ShippingAddress',
        '_payment_methods' => '\ai\thirdwatch\Model\PaymentMethod[]',
        '_promotions' => '\ai\thirdwatch\Model\Promotion[]',
        '_social_sign_on_type' => 'string',
        '_email_confirmed_status' => 'string',
        '_phone_confirmed_status' => 'string',
        '_is_newsletter_subscribed' => 'bool',
        '_account_status' => 'string',
        '_facebook_id' => 'string',
        '_google_id' => 'string',
        '_twitter_id' => 'string',
        '_custom_info' => '\ai\thirdwatch\Model\CustomInfo'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        '_user_id' => null,
        '_session_id' => null,
        '_device_ip' => null,
        '_origin_timestamp' => null,
        '_user_email' => null,
        '_first_name' => null,
        '_last_name' => null,
        '_phone' => null,
        '_age' => null,
        '_gender' => null,
        '_referral_code' => null,
        '_referrer_user_id' => null,
        '_billing_address' => null,
        '_shipping_address' => null,
        '_payment_methods' => null,
        '_promotions' => null,
        '_social_sign_on_type' => null,
        '_email_confirmed_status' => null,
        '_phone_confirmed_status' => null,
        '_is_newsletter_subscribed' => null,
        '_account_status' => null,
        '_facebook_id' => null,
        '_google_id' => null,
        '_twitter_id' => null,
        '_custom_info' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        '_user_id' => '_userId',
        '_session_id' => '_sessionId',
        '_device_ip' => '_deviceIp',
        '_origin_timestamp' => '_originTimestamp',
        '_user_email' => '_userEmail',
        '_first_name' => '_firstName',
        '_last_name' => '_lastName',
        '_phone' => '_phone',
        '_age' => '_age',
        '_gender' => '_gender',
        '_referral_code' => '_referralCode',
        '_referrer_user_id' => '_referrerUserId',
        '_billing_address' => '_billingAddress',
        '_shipping_address' => '_shippingAddress',
        '_payment_methods' => '_paymentMethods',
        '_promotions' => '_promotions',
        '_social_sign_on_type' => '_socialSignOnType',
        '_email_confirmed_status' => '_emailConfirmedStatus',
        '_phone_confirmed_status' => '_phoneConfirmedStatus',
        '_is_newsletter_subscribed' => '_isNewsletterSubscribed',
        '_account_status' => '_accountStatus',
        '_facebook_id' => '_facebookId',
        '_google_id' => '_googleId',
        '_twitter_id' => '_twitterId',
        '_custom_info' => '_customInfo'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        '_user_id' => 'setUserId',
        '_session_id' => 'setSessionId',
        '_device_ip' => 'setDeviceIp',
        '_origin_timestamp' => 'setOriginTimestamp',
        '_user_email' => 'setUserEmail',
        '_first_name' => 'setFirstName',
        '_last_name' => 'setLastName',
        '_phone' => 'setPhone',
        '_age' => 'setAge',
        '_gender' => 'setGender',
        '_referral_code' => 'setReferralCode',
        '_referrer_user_id' => 'setReferrerUserId',
        '_billing_address' => 'setBillingAddress',
        '_shipping_address' => 'setShippingAddress',
        '_payment_methods' => 'setPaymentMethods',
        '_promotions' => 'setPromotions',
        '_social_sign_on_type' => 'setSocialSignOnType',
        '_email_confirmed_status' => 'setEmailConfirmedStatus',
        '_phone_confirmed_status' => 'setPhoneConfirmedStatus',
        '_is_newsletter_subscribed' => 'setIsNewsletterSubscribed',
        '_account_status' => 'setAccountStatus',
        '_facebook_id' => 'setFacebookId',
        '_google_id' => 'setGoogleId',
        '_twitter_id' => 'setTwitterId',
        '_custom_info' => 'setCustomInfo'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        '_user_id' => 'getUserId',
        '_session_id' => 'getSessionId',
        '_device_ip' => 'getDeviceIp',
        '_origin_timestamp' => 'getOriginTimestamp',
        '_user_email' => 'getUserEmail',
        '_first_name' => 'getFirstName',
        '_last_name' => 'getLastName',
        '_phone' => 'getPhone',
        '_age' => 'getAge',
        '_gender' => 'getGender',
        '_referral_code' => 'getReferralCode',
        '_referrer_user_id' => 'getReferrerUserId',
        '_billing_address' => 'getBillingAddress',
        '_shipping_address' => 'getShippingAddress',
        '_payment_methods' => 'getPaymentMethods',
        '_promotions' => 'getPromotions',
        '_social_sign_on_type' => 'getSocialSignOnType',
        '_email_confirmed_status' => 'getEmailConfirmedStatus',
        '_phone_confirmed_status' => 'getPhoneConfirmedStatus',
        '_is_newsletter_subscribed' => 'getIsNewsletterSubscribed',
        '_account_status' => 'getAccountStatus',
        '_facebook_id' => 'getFacebookId',
        '_google_id' => 'getGoogleId',
        '_twitter_id' => 'getTwitterId',
        '_custom_info' => 'getCustomInfo'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['_user_id'] = isset($data['_user_id']) ? $data['_user_id'] : null;
        $this->container['_session_id'] = isset($data['_session_id']) ? $data['_session_id'] : null;
        $this->container['_device_ip'] = isset($data['_device_ip']) ? $data['_device_ip'] : null;
        $this->container['_origin_timestamp'] = isset($data['_origin_timestamp']) ? $data['_origin_timestamp'] : null;
        $this->container['_user_email'] = isset($data['_user_email']) ? $data['_user_email'] : null;
        $this->container['_first_name'] = isset($data['_first_name']) ? $data['_first_name'] : null;
        $this->container['_last_name'] = isset($data['_last_name']) ? $data['_last_name'] : null;
        $this->container['_phone'] = isset($data['_phone']) ? $data['_phone'] : null;
        $this->container['_age'] = isset($data['_age']) ? $data['_age'] : null;
        $this->container['_gender'] = isset($data['_gender']) ? $data['_gender'] : null;
        $this->container['_referral_code'] = isset($data['_referral_code']) ? $data['_referral_code'] : null;
        $this->container['_referrer_user_id'] = isset($data['_referrer_user_id']) ? $data['_referrer_user_id'] : null;
        $this->container['_billing_address'] = isset($data['_billing_address']) ? $data['_billing_address'] : null;
        $this->container['_shipping_address'] = isset($data['_shipping_address']) ? $data['_shipping_address'] : null;
        $this->container['_payment_methods'] = isset($data['_payment_methods']) ? $data['_payment_methods'] : null;
        $this->container['_promotions'] = isset($data['_promotions']) ? $data['_promotions'] : null;
        $this->container['_social_sign_on_type'] = isset($data['_social_sign_on_type']) ? $data['_social_sign_on_type'] : null;
        $this->container['_email_confirmed_status'] = isset($data['_email_confirmed_status']) ? $data['_email_confirmed_status'] : null;
        $this->container['_phone_confirmed_status'] = isset($data['_phone_confirmed_status']) ? $data['_phone_confirmed_status'] : null;
        $this->container['_is_newsletter_subscribed'] = isset($data['_is_newsletter_subscribed']) ? $data['_is_newsletter_subscribed'] : null;
        $this->container['_account_status'] = isset($data['_account_status']) ? $data['_account_status'] : null;
        $this->container['_facebook_id'] = isset($data['_facebook_id']) ? $data['_facebook_id'] : null;
        $this->container['_google_id'] = isset($data['_google_id']) ? $data['_google_id'] : null;
        $this->container['_twitter_id'] = isset($data['_twitter_id']) ? $data['_twitter_id'] : null;
        $this->container['_custom_info'] = isset($data['_custom_info']) ? $data['_custom_info'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets _user_id
     * @return string
     */
    public function getUserId()
    {
        return $this->container['_user_id'];
    }

    /**
     * Sets _user_id
     * @param string $_user_id The user's account ID according to your systems. Note that user IDs are case sensitive.
     * @return $this
     */
    public function setUserId($_user_id)
    {
        $this->container['_user_id'] = $_user_id;

        return $this;
    }

    /**
     * Gets _session_id
     * @return string
     */
    public function getSessionId()
    {
        return $this->container['_session_id'];
    }

    /**
     * Sets _session_id
     * @param string $_session_id The user's current session ID, used to tie a user's action before and after login or account creation. Required if no user_id values is provided.
     * @return $this
     */
    public function setSessionId($_session_id)
    {
        $this->container['_session_id'] = $_session_id;

        return $this;
    }

    /**
     * Gets _device_ip
     * @return string
     */
    public function getDeviceIp()
    {
        return $this->container['_device_ip'];
    }

    /**
     * Sets _device_ip
     * @param string $_device_ip IP address of the request made by the user. Recommended for historical backfills and customers with mobile apps.
     * @return $this
     */
    public function setDeviceIp($_device_ip)
    {
        $this->container['_device_ip'] = $_device_ip;

        return $this;
    }

    /**
     * Gets _origin_timestamp
     * @return string
     */
    public function getOriginTimestamp()
    {
        return $this->container['_origin_timestamp'];
    }

    /**
     * Sets _origin_timestamp
     * @param string $_origin_timestamp Represents the time the event occured in your system. Send as a UNIX timestamp in milliseconds in string.
     * @return $this
     */
    public function setOriginTimestamp($_origin_timestamp)
    {
        $this->container['_origin_timestamp'] = $_origin_timestamp;

        return $this;
    }

    /**
     * Gets _user_email
     * @return string
     */
    public function getUserEmail()
    {
        return $this->container['_user_email'];
    }

    /**
     * Sets _user_email
     * @param string $_user_email Email of the user creating this order. Note - If the user's email is also their account ID in your system, set both the userId and userEmail fields to their email address.
     * @return $this
     */
    public function setUserEmail($_user_email)
    {
        $this->container['_user_email'] = $_user_email;

        return $this;
    }

    /**
     * Gets _first_name
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['_first_name'];
    }

    /**
     * Sets _first_name
     * @param string $_first_name Provide the first name associated with the user here.
     * @return $this
     */
    public function setFirstName($_first_name)
    {
        $this->container['_first_name'] = $_first_name;

        return $this;
    }

    /**
     * Gets _last_name
     * @return string
     */
    public function getLastName()
    {
        return $this->container['_last_name'];
    }

    /**
     * Sets _last_name
     * @param string $_last_name Provide the last name associated with the user here.
     * @return $this
     */
    public function setLastName($_last_name)
    {
        $this->container['_last_name'] = $_last_name;

        return $this;
    }

    /**
     * Gets _phone
     * @return string
     */
    public function getPhone()
    {
        return $this->container['_phone'];
    }

    /**
     * Sets _phone
     * @param string $_phone The primary phone number of the user associated with this account. Provide the phone number as a string.
     * @return $this
     */
    public function setPhone($_phone)
    {
        $this->container['_phone'] = $_phone;

        return $this;
    }

    /**
     * Gets _age
     * @return string
     */
    public function getAge()
    {
        return $this->container['_age'];
    }

    /**
     * Sets _age
     * @param string $_age Age of the user e.g. \"25\"
     * @return $this
     */
    public function setAge($_age)
    {
        $this->container['_age'] = $_age;

        return $this;
    }

    /**
     * Gets _gender
     * @return string
     */
    public function getGender()
    {
        return $this->container['_gender'];
    }

    /**
     * Sets _gender
     * @param string $_gender Gender of the user e.g. \"_male\", \"_female\" or \"_trans\"
     * @return $this
     */
    public function setGender($_gender)
    {
        $this->container['_gender'] = $_gender;

        return $this;
    }

    /**
     * Gets _referral_code
     * @return string
     */
    public function getReferralCode()
    {
        return $this->container['_referral_code'];
    }

    /**
     * Sets _referral_code
     * @param string $_referral_code Code or promotion used by the user while creating account.
     * @return $this
     */
    public function setReferralCode($_referral_code)
    {
        $this->container['_referral_code'] = $_referral_code;

        return $this;
    }

    /**
     * Gets _referrer_user_id
     * @return string
     */
    public function getReferrerUserId()
    {
        return $this->container['_referrer_user_id'];
    }

    /**
     * Sets _referrer_user_id
     * @param string $_referrer_user_id The ID of the user that referred the current user to your business. This field is required for detecting referral fraud.
     * @return $this
     */
    public function setReferrerUserId($_referrer_user_id)
    {
        $this->container['_referrer_user_id'] = $_referrer_user_id;

        return $this;
    }

    /**
     * Gets _billing_address
     * @return \ai\thirdwatch\Model\BillingAddress
     */
    public function getBillingAddress()
    {
        return $this->container['_billing_address'];
    }

    /**
     * Sets _billing_address
     * @param \ai\thirdwatch\Model\BillingAddress $_billing_address
     * @return $this
     */
    public function setBillingAddress($_billing_address)
    {
        $this->container['_billing_address'] = $_billing_address;

        return $this;
    }

    /**
     * Gets _shipping_address
     * @return \ai\thirdwatch\Model\ShippingAddress
     */
    public function getShippingAddress()
    {
        return $this->container['_shipping_address'];
    }

    /**
     * Sets _shipping_address
     * @param \ai\thirdwatch\Model\ShippingAddress $_shipping_address
     * @return $this
     */
    public function setShippingAddress($_shipping_address)
    {
        $this->container['_shipping_address'] = $_shipping_address;

        return $this;
    }

    /**
     * Gets _payment_methods
     * @return \ai\thirdwatch\Model\PaymentMethod[]
     */
    public function getPaymentMethods()
    {
        return $this->container['_payment_methods'];
    }

    /**
     * Sets _payment_methods
     * @param \ai\thirdwatch\Model\PaymentMethod[] $_payment_methods The payment information associated with this account. Represented as an array of nested payment_method objects containing payment type, payment gateway, credit card bin, etc.
     * @return $this
     */
    public function setPaymentMethods($_payment_methods)
    {
        $this->container['_payment_methods'] = $_payment_methods;

        return $this;
    }

    /**
     * Gets _promotions
     * @return \ai\thirdwatch\Model\Promotion[]
     */
    public function getPromotions()
    {
        return $this->container['_promotions'];
    }

    /**
     * Sets _promotions
     * @param \ai\thirdwatch\Model\Promotion[] $_promotions The list of promotions that apply to this account. You can add one or more promotions when creating or updating an order. Represented as a JSON array of promotion objects. You can also separately add promotions to the account via the addPromotion event.
     * @return $this
     */
    public function setPromotions($_promotions)
    {
        $this->container['_promotions'] = $_promotions;

        return $this;
    }

    /**
     * Gets _social_sign_on_type
     * @return string
     */
    public function getSocialSignOnType()
    {
        return $this->container['_social_sign_on_type'];
    }

    /**
     * Sets _social_sign_on_type
     * @param string $_social_sign_on_type If the user logged in with a social identify provider, give the name here. e.g. _google, _facebook, _twitter, _linkedin, _other
     * @return $this
     */
    public function setSocialSignOnType($_social_sign_on_type)
    {
        $this->container['_social_sign_on_type'] = $_social_sign_on_type;

        return $this;
    }

    /**
     * Gets _email_confirmed_status
     * @return string
     */
    public function getEmailConfirmedStatus()
    {
        return $this->container['_email_confirmed_status'];
    }

    /**
     * Sets _email_confirmed_status
     * @param string $_email_confirmed_status Status of email verification. e.g. _success, _failure, _pending
     * @return $this
     */
    public function setEmailConfirmedStatus($_email_confirmed_status)
    {
        $this->container['_email_confirmed_status'] = $_email_confirmed_status;

        return $this;
    }

    /**
     * Gets _phone_confirmed_status
     * @return string
     */
    public function getPhoneConfirmedStatus()
    {
        return $this->container['_phone_confirmed_status'];
    }

    /**
     * Sets _phone_confirmed_status
     * @param string $_phone_confirmed_status Status of phone verification. e.g. _success, _failure, _pending
     * @return $this
     */
    public function setPhoneConfirmedStatus($_phone_confirmed_status)
    {
        $this->container['_phone_confirmed_status'] = $_phone_confirmed_status;

        return $this;
    }

    /**
     * Gets _is_newsletter_subscribed
     * @return bool
     */
    public function getIsNewsletterSubscribed()
    {
        return $this->container['_is_newsletter_subscribed'];
    }

    /**
     * Sets _is_newsletter_subscribed
     * @param bool $_is_newsletter_subscribed Is user subscribed for newsletter. e.g. true, false
     * @return $this
     */
    public function setIsNewsletterSubscribed($_is_newsletter_subscribed)
    {
        $this->container['_is_newsletter_subscribed'] = $_is_newsletter_subscribed;

        return $this;
    }

    /**
     * Gets _account_status
     * @return string
     */
    public function getAccountStatus()
    {
        return $this->container['_account_status'];
    }

    /**
     * Sets _account_status
     * @param string $_account_status Current status of account, e.g. _active, _inactive
     * @return $this
     */
    public function setAccountStatus($_account_status)
    {
        $this->container['_account_status'] = $_account_status;

        return $this;
    }

    /**
     * Gets _facebook_id
     * @return string
     */
    public function getFacebookId()
    {
        return $this->container['_facebook_id'];
    }

    /**
     * Sets _facebook_id
     * @param string $_facebook_id Facebook user id or token of the user. This can help to varify his social identity.
     * @return $this
     */
    public function setFacebookId($_facebook_id)
    {
        $this->container['_facebook_id'] = $_facebook_id;

        return $this;
    }

    /**
     * Gets _google_id
     * @return string
     */
    public function getGoogleId()
    {
        return $this->container['_google_id'];
    }

    /**
     * Sets _google_id
     * @param string $_google_id Google user id or token of the user. This can help to varify his social identity.
     * @return $this
     */
    public function setGoogleId($_google_id)
    {
        $this->container['_google_id'] = $_google_id;

        return $this;
    }

    /**
     * Gets _twitter_id
     * @return string
     */
    public function getTwitterId()
    {
        return $this->container['_twitter_id'];
    }

    /**
     * Sets _twitter_id
     * @param string $_twitter_id Twitter handle or token of the user. This can help to varify his social identity.
     * @return $this
     */
    public function setTwitterId($_twitter_id)
    {
        $this->container['_twitter_id'] = $_twitter_id;

        return $this;
    }

    /**
     * Gets _custom_info
     * @return \ai\thirdwatch\Model\CustomInfo
     */
    public function getCustomInfo()
    {
        return $this->container['_custom_info'];
    }

    /**
     * Sets _custom_info
     * @param \ai\thirdwatch\Model\CustomInfo $_custom_info
     * @return $this
     */
    public function setCustomInfo($_custom_info)
    {
        $this->container['_custom_info'] = $_custom_info;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\ai\thirdwatch\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\ai\thirdwatch\ObjectSerializer::sanitizeForSerialization($this));
    }
}


