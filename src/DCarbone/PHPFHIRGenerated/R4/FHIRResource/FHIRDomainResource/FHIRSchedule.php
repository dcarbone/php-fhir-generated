<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 6th, 2019 09:04+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2019 Daniel Carbone (daniel.p.carbone@gmail.com)
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *        http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 *
 * FHIR Copyright Notice:
 *
 *   Copyright (c) 2011+, HL7, Inc.
 *   All rights reserved.
 * 
 *   Redistribution and use in source and binary forms, with or without modification,
 *   are permitted provided that the following conditions are met:
 * 
 *    * Redistributions of source code must retain the above copyright notice, this
 *      list of conditions and the following disclaimer.
 *    * Redistributions in binary form must reproduce the above copyright notice,
 *      this list of conditions and the following disclaimer in the documentation
 *      and/or other materials provided with the distribution.
 *    * Neither the name of HL7 nor the names of its contributors may be used to
 *      endorse or promote products derived from this software without specific
 *      prior written permission.
 * 
 *   THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 *   ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 *   WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
 *   IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT,
 *   INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT
 *   NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
 *   PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY,
 *   WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 *   ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 *   POSSIBILITY OF SUCH DAMAGE.
 * 
 * 
 *   Generated on Thu, Dec 27, 2018 22:37+1100 for FHIR v4.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * A container for slots of time that may be available for booking appointments.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRSchedule
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource
 */
class FHIRSchedule extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SCHEDULE;

    const FIELD_ACTIVE = 'active';
    const FIELD_ACTIVE_EXT = '_active';
    const FIELD_ACTOR = 'actor';
    const FIELD_COMMENT = 'comment';
    const FIELD_COMMENT_EXT = '_comment';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_PLANNING_HORIZON = 'planningHorizon';
    const FIELD_SERVICE_CATEGORY = 'serviceCategory';
    const FIELD_SERVICE_TYPE = 'serviceType';
    const FIELD_SPECIALTY = 'specialty';

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Whether this schedule record is in active use or should not be used (such as was
     * entered in error).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    private $active = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Slots that reference this schedule resource provide the availability details to
     * these referenced resource(s).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    private $actor = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Comments on the availability to describe any extended information. Such as
     * custom constraints on the slots that may be associated.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    private $comment = null;
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * External Ids for this item.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    private $identifier = [];
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The period of time that the slots that reference this Schedule resource cover
     * (even if none exist). These cover the amount of time that an organization's
     * planning horizon; the interval for which they are currently accepting
     * appointments. This does not define a "template" for planning outside these
     * dates.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
     */
    private $planningHorizon = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A broad categorization of the service that is to be performed during this
     * appointment.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    private $serviceCategory = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The specific service that is to be performed during this appointment.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    private $serviceType = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The specialty of a practitioner that would be required to perform the service
     * requested in this appointment.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    private $specialty = [];

    /**
     * FHIRSchedule Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSchedule::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ACTIVE])) {
            $ext = (isset($data[self::FIELD_ACTIVE_EXT]) && is_array($data[self::FIELD_ACTIVE_EXT]))
                ? $data[self::FIELD_ACTIVE_EXT]
                : null;
            if ($data[self::FIELD_ACTIVE] instanceof FHIRBoolean) {
                $this->setActive($data[self::FIELD_ACTIVE]);
            } elseif ($ext && is_scalar($data[self::FIELD_ACTIVE])) {
                $this->setActive(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_ACTIVE]] + $ext));
            } else {
                $this->setActive(new FHIRBoolean($data[self::FIELD_ACTIVE]));
            }
        }
        if (isset($data[self::FIELD_ACTOR])) {
            if (is_array($data[self::FIELD_ACTOR])) {
                foreach($data[self::FIELD_ACTOR] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addActor($v);
                    } else {
                        $this->addActor(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_ACTOR] instanceof FHIRReference) {
                $this->addActor($data[self::FIELD_ACTOR]);
            } else {
                $this->addActor(new FHIRReference($data[self::FIELD_ACTOR]));
            }
        }
        if (isset($data[self::FIELD_COMMENT])) {
            $ext = (isset($data[self::FIELD_COMMENT_EXT]) && is_array($data[self::FIELD_COMMENT_EXT]))
                ? $data[self::FIELD_COMMENT_EXT]
                : null;
            if ($data[self::FIELD_COMMENT] instanceof FHIRString) {
                $this->setComment($data[self::FIELD_COMMENT]);
            } elseif ($ext && is_scalar($data[self::FIELD_COMMENT])) {
                $this->setComment(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_COMMENT]] + $ext));
            } else {
                $this->setComment(new FHIRString($data[self::FIELD_COMMENT]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $v) {
                    if ($v instanceof FHIRIdentifier) {
                        $this->addIdentifier($v);
                    } else {
                        $this->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } else if ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->addIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->addIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_PLANNING_HORIZON])) {
            if ($data[self::FIELD_PLANNING_HORIZON] instanceof FHIRPeriod) {
                $this->setPlanningHorizon($data[self::FIELD_PLANNING_HORIZON]);
            } else {
                $this->setPlanningHorizon(new FHIRPeriod($data[self::FIELD_PLANNING_HORIZON]));
            }
        }
        if (isset($data[self::FIELD_SERVICE_CATEGORY])) {
            if (is_array($data[self::FIELD_SERVICE_CATEGORY])) {
                foreach($data[self::FIELD_SERVICE_CATEGORY] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addServiceCategory($v);
                    } else {
                        $this->addServiceCategory(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_SERVICE_CATEGORY] instanceof FHIRCodeableConcept) {
                $this->addServiceCategory($data[self::FIELD_SERVICE_CATEGORY]);
            } else {
                $this->addServiceCategory(new FHIRCodeableConcept($data[self::FIELD_SERVICE_CATEGORY]));
            }
        }
        if (isset($data[self::FIELD_SERVICE_TYPE])) {
            if (is_array($data[self::FIELD_SERVICE_TYPE])) {
                foreach($data[self::FIELD_SERVICE_TYPE] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addServiceType($v);
                    } else {
                        $this->addServiceType(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_SERVICE_TYPE] instanceof FHIRCodeableConcept) {
                $this->addServiceType($data[self::FIELD_SERVICE_TYPE]);
            } else {
                $this->addServiceType(new FHIRCodeableConcept($data[self::FIELD_SERVICE_TYPE]));
            }
        }
        if (isset($data[self::FIELD_SPECIALTY])) {
            if (is_array($data[self::FIELD_SPECIALTY])) {
                foreach($data[self::FIELD_SPECIALTY] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addSpecialty($v);
                    } else {
                        $this->addSpecialty(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_SPECIALTY] instanceof FHIRCodeableConcept) {
                $this->addSpecialty($data[self::FIELD_SPECIALTY]);
            } else {
                $this->addSpecialty(new FHIRCodeableConcept($data[self::FIELD_SPECIALTY]));
            }
        }
    }

    /**
     * @return string
     */
    public function getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Whether this schedule record is in active use or should not be used (such as was
     * entered in error).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Whether this schedule record is in active use or should not be used (such as was
     * entered in error).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean $active
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSchedule
     */
    public function setActive($active = null)
    {
        if (null === $active) {
            $this->active = null;
            return $this;
        }
        if ($active instanceof FHIRBoolean) {
            $this->active = $active;
            return $this;
        }
        $this->active = new FHIRBoolean($active);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Slots that reference this schedule resource provide the availability details to
     * these referenced resource(s).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getActor()
    {
        return $this->actor;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Slots that reference this schedule resource provide the availability details to
     * these referenced resource(s).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $actor
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSchedule
     */
    public function addActor(FHIRReference $actor = null)
    {
        $this->actor[] = $actor;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Slots that reference this schedule resource provide the availability details to
     * these referenced resource(s).
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $actor
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSchedule
     */
    public function setActor(array $actor = [])
    {
        $this->actor = [];
        if ([] === $actor) {
            return $this;
        }
        foreach($actor as $v) {
            if ($v instanceof FHIRReference) {
                $this->addActor($v);
            } else {
                $this->addActor(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Comments on the availability to describe any extended information. Such as
     * custom constraints on the slots that may be associated.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Comments on the availability to describe any extended information. Such as
     * custom constraints on the slots that may be associated.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $comment
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSchedule
     */
    public function setComment($comment = null)
    {
        if (null === $comment) {
            $this->comment = null;
            return $this;
        }
        if ($comment instanceof FHIRString) {
            $this->comment = $comment;
            return $this;
        }
        $this->comment = new FHIRString($comment);
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * External Ids for this item.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * External Ids for this item.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier $identifier
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSchedule
     */
    public function addIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * External Ids for this item.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[] $identifier
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSchedule
     */
    public function setIdentifier(array $identifier = [])
    {
        $this->identifier = [];
        if ([] === $identifier) {
            return $this;
        }
        foreach($identifier as $v) {
            if ($v instanceof FHIRIdentifier) {
                $this->addIdentifier($v);
            } else {
                $this->addIdentifier(new FHIRIdentifier($v));
            }
        }
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The period of time that the slots that reference this Schedule resource cover
     * (even if none exist). These cover the amount of time that an organization's
     * planning horizon; the interval for which they are currently accepting
     * appointments. This does not define a "template" for planning outside these
     * dates.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
     */
    public function getPlanningHorizon()
    {
        return $this->planningHorizon;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The period of time that the slots that reference this Schedule resource cover
     * (even if none exist). These cover the amount of time that an organization's
     * planning horizon; the interval for which they are currently accepting
     * appointments. This does not define a "template" for planning outside these
     * dates.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod $planningHorizon
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSchedule
     */
    public function setPlanningHorizon(FHIRPeriod $planningHorizon = null)
    {
        $this->planningHorizon = $planningHorizon;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A broad categorization of the service that is to be performed during this
     * appointment.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getServiceCategory()
    {
        return $this->serviceCategory;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A broad categorization of the service that is to be performed during this
     * appointment.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $serviceCategory
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSchedule
     */
    public function addServiceCategory(FHIRCodeableConcept $serviceCategory = null)
    {
        $this->serviceCategory[] = $serviceCategory;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A broad categorization of the service that is to be performed during this
     * appointment.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $serviceCategory
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSchedule
     */
    public function setServiceCategory(array $serviceCategory = [])
    {
        $this->serviceCategory = [];
        if ([] === $serviceCategory) {
            return $this;
        }
        foreach($serviceCategory as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addServiceCategory($v);
            } else {
                $this->addServiceCategory(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The specific service that is to be performed during this appointment.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getServiceType()
    {
        return $this->serviceType;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The specific service that is to be performed during this appointment.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $serviceType
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSchedule
     */
    public function addServiceType(FHIRCodeableConcept $serviceType = null)
    {
        $this->serviceType[] = $serviceType;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The specific service that is to be performed during this appointment.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $serviceType
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSchedule
     */
    public function setServiceType(array $serviceType = [])
    {
        $this->serviceType = [];
        if ([] === $serviceType) {
            return $this;
        }
        foreach($serviceType as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addServiceType($v);
            } else {
                $this->addServiceType(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The specialty of a practitioner that would be required to perform the service
     * requested in this appointment.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getSpecialty()
    {
        return $this->specialty;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The specialty of a practitioner that would be required to perform the service
     * requested in this appointment.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $specialty
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSchedule
     */
    public function addSpecialty(FHIRCodeableConcept $specialty = null)
    {
        $this->specialty[] = $specialty;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The specialty of a practitioner that would be required to perform the service
     * requested in this appointment.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $specialty
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSchedule
     */
    public function setSpecialty(array $specialty = [])
    {
        $this->specialty = [];
        if ([] === $specialty) {
            return $this;
        }
        foreach($specialty as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addSpecialty($v);
            } else {
                $this->addSpecialty(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSchedule $type
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSchedule
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRSchedule::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRSchedule::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRDomainResource::xmlUnserialize($sxe, new FHIRSchedule);
        } elseif (!is_object($type) || !($type instanceof FHIRSchedule)) {
            throw new \RuntimeException(sprintf(
                'FHIRSchedule::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSchedule or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($attributes->active)) {
            $type->setActive((string)$attributes->active);
        }
        if (isset($children->active)) {
            $type->setActive(FHIRBoolean::xmlUnserialize($children->active));
        }
        if (isset($children->actor)) {
            foreach($children->actor as $child) {
                $type->addActor(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($attributes->comment)) {
            $type->setComment((string)$attributes->comment);
        }
        if (isset($children->comment)) {
            $type->setComment(FHIRString::xmlUnserialize($children->comment));
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->planningHorizon)) {
            $type->setPlanningHorizon(FHIRPeriod::xmlUnserialize($children->planningHorizon));
        }
        if (isset($children->serviceCategory)) {
            foreach($children->serviceCategory as $child) {
                $type->addServiceCategory(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->serviceType)) {
            foreach($children->serviceType as $child) {
                $type->addServiceType(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->specialty)) {
            foreach($children->specialty as $child) {
                $type->addSpecialty(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<Schedule xmlns="http://hl7.org/fhir"></Schedule>');
        }
        parent::xmlSerialize($sxe);
        if (null !== ($v = $this->getActive())) {
            $sxe->addAttribute(self::FIELD_ACTIVE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_ACTIVE));
            }
        }

        if ([] !== ($vs = $this->getActor())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ACTOR));
            }
        }
        if (null !== ($v = $this->getComment())) {
            $sxe->addAttribute(self::FIELD_COMMENT, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_COMMENT));
            }
        }

        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER));
            }
        }

        if (null !== ($v = $this->getPlanningHorizon())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PLANNING_HORIZON));
        }

        if ([] !== ($vs = $this->getServiceCategory())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SERVICE_CATEGORY));
            }
        }

        if ([] !== ($vs = $this->getServiceType())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SERVICE_TYPE));
            }
        }

        if ([] !== ($vs = $this->getSpecialty())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SPECIALTY));
            }
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getActive())) {
            $a[self::FIELD_ACTIVE] = (string)$v;
            $a[self::FIELD_ACTIVE_EXT] = $v;
        }
        if ([] !== ($vs = $this->getActor())) {
            $a[self::FIELD_ACTOR] = $vs;
        }
        if (null !== ($v = $this->getComment())) {
            $a[self::FIELD_COMMENT] = (string)$v;
            $a[self::FIELD_COMMENT_EXT] = $v;
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $vs;
        }
        if (null !== ($v = $this->getPlanningHorizon())) {
            $a[self::FIELD_PLANNING_HORIZON] = $v;
        }
        if ([] !== ($vs = $this->getServiceCategory())) {
            $a[self::FIELD_SERVICE_CATEGORY] = $vs;
        }
        if ([] !== ($vs = $this->getServiceType())) {
            $a[self::FIELD_SERVICE_TYPE] = $vs;
        }
        if ([] !== ($vs = $this->getSpecialty())) {
            $a[self::FIELD_SPECIALTY] = $vs;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => self::FHIR_TYPE_NAME] + $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}