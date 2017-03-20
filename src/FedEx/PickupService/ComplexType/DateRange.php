<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * DateRange
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 *
 * @property string $Begins
 * @property string $Ends

 */
class DateRange extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'DateRange';

    /**
     * The beginning date in a date range.
     *
     * @param string $begins
     * @return $this
     */
    public function setBegins($begins)
    {
        $this->values['Begins'] = $begins;
        return $this;
    }

    /**
     * The end date in a date range.
     *
     * @param string $ends
     * @return $this
     */
    public function setEnds($ends)
    {
        $this->values['Ends'] = $ends;
        return $this;
    }

    
}
