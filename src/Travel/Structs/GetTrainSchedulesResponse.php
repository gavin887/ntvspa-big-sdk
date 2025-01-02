<?php

declare(strict_types=1);

namespace Ntvspa\Big\Travel\Structs;

use AllowDynamicProperties;
use Travel\Arrays\ArrayOfScheduleJourney;

/**
 * This class stands for GetTrainSchedulesResponse Structs
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: q16:GetTrainSchedulesResponse | tns:GetTrainSchedulesResponse
 *
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class GetTrainSchedulesResponse extends ResponseBase
{
    /**
     * The ScheduleJourneys
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Ntvspa\Big\Travel\Arrays\ArrayOfScheduleJourney|null
     */
    protected ?ArrayOfScheduleJourney $ScheduleJourneys = null;

    /**
     * Constructor method for GetTrainSchedulesResponse
     *
     * @param \Ntvspa\Big\Travel\Arrays\ArrayOfScheduleJourney $scheduleJourneys
     *
     * @uses GetTrainSchedulesResponse::setScheduleJourneys()
     */
    public function __construct(?ArrayOfScheduleJourney $scheduleJourneys = null)
    {
        $this
            ->setScheduleJourneys($scheduleJourneys);
    }

    /**
     * Get ScheduleJourneys value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Ntvspa\Big\Travel\Arrays\ArrayOfScheduleJourney|null
     */
    public function getScheduleJourneys(): ?ArrayOfScheduleJourney
    {
        return $this->ScheduleJourneys ?? null;
    }

    /**
     * Set ScheduleJourneys value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Ntvspa\Big\Travel\Arrays\ArrayOfScheduleJourney $scheduleJourneys
     *
     * @return GetTrainSchedulesResponse
     */
    public function setScheduleJourneys(?ArrayOfScheduleJourney $scheduleJourneys = null): self
    {
        if (is_null($scheduleJourneys) || (is_array($scheduleJourneys) && empty($scheduleJourneys))) {
            unset($this->ScheduleJourneys);
        } else {
            $this->ScheduleJourneys = $scheduleJourneys;
        }

        return $this;
    }
}
