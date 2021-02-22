<?php
namespace FedEx\UploadDocumentServicev17\ComplexType;

use FedEx\AbstractComplexType;

/**
 * DeletionDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 *
 * @property \FedEx\UploadDocumentServicev17\SimpleType\DeleteRecordedShipmentRequestServiceLevel|string $DeleteStatus

 */
class DeletionDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'DeletionDetail';

    /**
     * Set DeleteStatus
     *
     * @param \FedEx\UploadDocumentServicev17\SimpleType\DeleteRecordedShipmentRequestServiceLevel|string $deleteStatus
     * @return $this
     */
    public function setDeleteStatus($deleteStatus)
    {
        $this->values['DeleteStatus'] = $deleteStatus;
        return $this;
    }
}