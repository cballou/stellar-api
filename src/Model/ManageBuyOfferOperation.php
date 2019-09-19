<?php


namespace ZuluCrypto\StellarSdk\Model;


/**
 * See: https://www.stellar.org/developers/horizon/reference/resources/operation.html#create-passive-offer
 */
class ManageBuyOfferOperation extends ManageOfferOperation
{
    /**
     * @param $id
     * @param $type
     */
    public function __construct($id, $type = Operation::TYPE_MANAGE_BUY_OFFER)
    {
        parent::__construct($id, $type);
    }
}