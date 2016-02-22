<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class BiddingStrategyReturnValue extends \Google\AdsApi\AdWords\v201601\cm\ListReturnValue
{

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\SharedBiddingStrategy[] $value
     */
    protected $value = null;

    /**
     * @param string $ListReturnValueType
     * @param \Google\AdsApi\AdWords\v201601\cm\SharedBiddingStrategy[] $value
     */
    public function __construct($ListReturnValueType = null, array $value = null)
    {
      parent::__construct($ListReturnValueType);
      $this->value = $value;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\SharedBiddingStrategy[]
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\SharedBiddingStrategy[] $value
     * @return \Google\AdsApi\AdWords\v201601\cm\BiddingStrategyReturnValue
     */
    public function setValue(array $value)
    {
      $this->value = $value;
      return $this;
    }

}