<?php
namespace FedEx\UploadDocumentServicev17\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * CustomsRoleType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class CustomsRoleType extends AbstractSimpleType
{
    const _EXPORTER = 'EXPORTER';
    const _IMPORTER = 'IMPORTER';
    const _LEGAL_AGENT = 'LEGAL_AGENT';
    const _PRODUCER = 'PRODUCER';
}
