<?php

namespace DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 7th, 2019 20:23+0000
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

use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceEntity;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRInstant;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRSignature;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\PHPFHIRTypeInterface;

/**
 * Provenance of a resource is a record that describes entities and processes
 * involved in producing and delivering or otherwise influencing that resource.
 * Provenance provides a critical foundation for assessing authenticity, enabling
 * trust, and allowing reproducibility. Provenance assertions are a form of
 * contextual metadata and can themselves become important records with their own
 * provenance. Provenance statement indicates clinical significance in terms of
 * confidence in authenticity, reliability, and trustworthiness, integrity, and
 * stage in lifecycle (e.g. Document Completion - has the artifact been legally
 * authenticated), all of which may impact security, privacy, and trust policies.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRProvenance
 * @package \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRProvenance extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_PROVENANCE;

    const FIELD_ACTIVITY = 'activity';
    const FIELD_AGENT = 'agent';
    const FIELD_ENTITY = 'entity';
    const FIELD_LOCATION = 'location';
    const FIELD_OCCURRED_DATE_TIME = 'occurredDateTime';
    const FIELD_OCCURRED_DATE_TIME_EXT = '_occurredDateTime';
    const FIELD_OCCURRED_PERIOD = 'occurredPeriod';
    const FIELD_POLICY = 'policy';
    const FIELD_POLICY_EXT = '_policy';
    const FIELD_REASON = 'reason';
    const FIELD_RECORDED = 'recorded';
    const FIELD_RECORDED_EXT = '_recorded';
    const FIELD_SIGNATURE = 'signature';
    const FIELD_TARGET = 'target';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An activity is something that occurs over a period of time and acts upon or with
     * entities; it may include consuming, processing, transforming, modifying,
     * relocating, using, or generating entities.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $activity = null;

    /**
     * Provenance of a resource is a record that describes entities and processes
     * involved in producing and delivering or otherwise influencing that resource.
     * Provenance provides a critical foundation for assessing authenticity, enabling
     * trust, and allowing reproducibility. Provenance assertions are a form of
     * contextual metadata and can themselves become important records with their own
     * provenance. Provenance statement indicates clinical significance in terms of
     * confidence in authenticity, reliability, and trustworthiness, integrity, and
     * stage in lifecycle (e.g. Document Completion - has the artifact been legally
     * authenticated), all of which may impact security, privacy, and trust policies.
     *
     * An actor taking a role in an activity for which it can be assigned some degree
     * of responsibility for the activity taking place.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent[]
     */
    private $agent = [];

    /**
     * Provenance of a resource is a record that describes entities and processes
     * involved in producing and delivering or otherwise influencing that resource.
     * Provenance provides a critical foundation for assessing authenticity, enabling
     * trust, and allowing reproducibility. Provenance assertions are a form of
     * contextual metadata and can themselves become important records with their own
     * provenance. Provenance statement indicates clinical significance in terms of
     * confidence in authenticity, reliability, and trustworthiness, integrity, and
     * stage in lifecycle (e.g. Document Completion - has the artifact been legally
     * authenticated), all of which may impact security, privacy, and trust policies.
     *
     * An entity used in this activity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceEntity[]
     */
    private $entity = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Where the activity occurred, if relevant.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $location = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The period during which the activity occurred. (choose any one of occurred*, but
     * only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    private $occurredDateTime = null;

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The period during which the activity occurred. (choose any one of occurred*, but
     * only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    private $occurredPeriod = null;

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Policy or plan the activity was defined by. Typically, a single activity may
     * have multiple applicable policy documents, such as patient consent, guarantor
     * funding, etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUri[]
     */
    private $policy = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The reason that the activity was taking place.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    private $reason = [];

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. Time zone is always required
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The instant of time at which the activity was recorded.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    private $recorded = null;

    /**
     * A signature along with supporting context. The signature may be a digital
     * signature that is cryptographic in nature, or some other signature acceptable to
     * the domain. This other signature may be as simple as a graphical image
     * representing a hand-written signature, or a signature ceremony Different
     * signature approaches have different utilities.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A digital signature on the target Reference(s). The signer should match a
     * Provenance.agent. The purpose of the signature is indicated.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRSignature[]
     */
    private $signature = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The Reference(s) that were generated or updated by the activity described in
     * this resource. A provenance can point to more than one target if multiple
     * resources were created/updated by the same activity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    private $target = [];

    /**
     * FHIRProvenance Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRProvenance::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ACTIVITY])) {
            if ($data[self::FIELD_ACTIVITY] instanceof FHIRCodeableConcept) {
                $this->setActivity($data[self::FIELD_ACTIVITY]);
            } else {
                $this->setActivity(new FHIRCodeableConcept($data[self::FIELD_ACTIVITY]));
            }
        }
        if (isset($data[self::FIELD_AGENT])) {
            if (is_array($data[self::FIELD_AGENT])) {
                foreach($data[self::FIELD_AGENT] as $v) {
                    if ($v instanceof FHIRProvenanceAgent) {
                        $this->addAgent($v);
                    } else {
                        $this->addAgent(new FHIRProvenanceAgent($v));
                    }
                }
            } else if ($data[self::FIELD_AGENT] instanceof FHIRProvenanceAgent) {
                $this->addAgent($data[self::FIELD_AGENT]);
            } else {
                $this->addAgent(new FHIRProvenanceAgent($data[self::FIELD_AGENT]));
            }
        }
        if (isset($data[self::FIELD_ENTITY])) {
            if (is_array($data[self::FIELD_ENTITY])) {
                foreach($data[self::FIELD_ENTITY] as $v) {
                    if ($v instanceof FHIRProvenanceEntity) {
                        $this->addEntity($v);
                    } else {
                        $this->addEntity(new FHIRProvenanceEntity($v));
                    }
                }
            } else if ($data[self::FIELD_ENTITY] instanceof FHIRProvenanceEntity) {
                $this->addEntity($data[self::FIELD_ENTITY]);
            } else {
                $this->addEntity(new FHIRProvenanceEntity($data[self::FIELD_ENTITY]));
            }
        }
        if (isset($data[self::FIELD_LOCATION])) {
            if ($data[self::FIELD_LOCATION] instanceof FHIRReference) {
                $this->setLocation($data[self::FIELD_LOCATION]);
            } else {
                $this->setLocation(new FHIRReference($data[self::FIELD_LOCATION]));
            }
        }
        if (isset($data[self::FIELD_OCCURRED_DATE_TIME])) {
            $ext = (isset($data[self::FIELD_OCCURRED_DATE_TIME_EXT]) && is_array($data[self::FIELD_OCCURRED_DATE_TIME_EXT]))
                ? $data[self::FIELD_OCCURRED_DATE_TIME_EXT]
                : null;
            if ($data[self::FIELD_OCCURRED_DATE_TIME] instanceof FHIRDateTime) {
                $this->setOccurredDateTime($data[self::FIELD_OCCURRED_DATE_TIME]);
            } elseif ($ext && is_scalar($data[self::FIELD_OCCURRED_DATE_TIME])) {
                $this->setOccurredDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_OCCURRED_DATE_TIME]] + $ext));
            } else {
                $this->setOccurredDateTime(new FHIRDateTime($data[self::FIELD_OCCURRED_DATE_TIME]));
            }
        }
        if (isset($data[self::FIELD_OCCURRED_PERIOD])) {
            if ($data[self::FIELD_OCCURRED_PERIOD] instanceof FHIRPeriod) {
                $this->setOccurredPeriod($data[self::FIELD_OCCURRED_PERIOD]);
            } else {
                $this->setOccurredPeriod(new FHIRPeriod($data[self::FIELD_OCCURRED_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_POLICY])) {
            $ext = (isset($data[self::FIELD_POLICY_EXT]) && is_array($data[self::FIELD_POLICY_EXT]))
                ? $data[self::FIELD_POLICY_EXT]
                : null;
            if (is_array($data[self::FIELD_POLICY])) {
                foreach($data[self::FIELD_POLICY] as $i => $v) {
                    if ($v instanceof FHIRUri) {
                        $this->addPolicy($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addPolicy(new FHIRUri([FHIRUri::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addPolicy(new FHIRUri($v));
                    }
                }
            } elseif ($data[self::FIELD_POLICY] instanceof FHIRUri) {
                $this->addPolicy($data[self::FIELD_POLICY]);
            } elseif ($ext && is_scalar($data[self::FIELD_POLICY])) {
                $this->addPolicy(new FHIRUri([FHIRUri::FIELD_VALUE => $data[self::FIELD_POLICY]] + $ext));
            } else {
                $this->addPolicy(new FHIRUri($data[self::FIELD_POLICY]));
            }
        }
        if (isset($data[self::FIELD_REASON])) {
            if (is_array($data[self::FIELD_REASON])) {
                foreach($data[self::FIELD_REASON] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addReason($v);
                    } else {
                        $this->addReason(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_REASON] instanceof FHIRCodeableConcept) {
                $this->addReason($data[self::FIELD_REASON]);
            } else {
                $this->addReason(new FHIRCodeableConcept($data[self::FIELD_REASON]));
            }
        }
        if (isset($data[self::FIELD_RECORDED])) {
            $ext = (isset($data[self::FIELD_RECORDED_EXT]) && is_array($data[self::FIELD_RECORDED_EXT]))
                ? $data[self::FIELD_RECORDED_EXT]
                : null;
            if ($data[self::FIELD_RECORDED] instanceof FHIRInstant) {
                $this->setRecorded($data[self::FIELD_RECORDED]);
            } elseif ($ext && is_scalar($data[self::FIELD_RECORDED])) {
                $this->setRecorded(new FHIRInstant([FHIRInstant::FIELD_VALUE => $data[self::FIELD_RECORDED]] + $ext));
            } else {
                $this->setRecorded(new FHIRInstant($data[self::FIELD_RECORDED]));
            }
        }
        if (isset($data[self::FIELD_SIGNATURE])) {
            if (is_array($data[self::FIELD_SIGNATURE])) {
                foreach($data[self::FIELD_SIGNATURE] as $v) {
                    if ($v instanceof FHIRSignature) {
                        $this->addSignature($v);
                    } else {
                        $this->addSignature(new FHIRSignature($v));
                    }
                }
            } else if ($data[self::FIELD_SIGNATURE] instanceof FHIRSignature) {
                $this->addSignature($data[self::FIELD_SIGNATURE]);
            } else {
                $this->addSignature(new FHIRSignature($data[self::FIELD_SIGNATURE]));
            }
        }
        if (isset($data[self::FIELD_TARGET])) {
            if (is_array($data[self::FIELD_TARGET])) {
                foreach($data[self::FIELD_TARGET] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addTarget($v);
                    } else {
                        $this->addTarget(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_TARGET] instanceof FHIRReference) {
                $this->addTarget($data[self::FIELD_TARGET]);
            } else {
                $this->addTarget(new FHIRReference($data[self::FIELD_TARGET]));
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An activity is something that occurs over a period of time and acts upon or with
     * entities; it may include consuming, processing, transforming, modifying,
     * relocating, using, or generating entities.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getActivity()
    {
        return $this->activity;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An activity is something that occurs over a period of time and acts upon or with
     * entities; it may include consuming, processing, transforming, modifying,
     * relocating, using, or generating entities.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $activity
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProvenance
     */
    public function setActivity(FHIRCodeableConcept $activity = null)
    {
        $this->activity = $activity;
        return $this;
    }

    /**
     * Provenance of a resource is a record that describes entities and processes
     * involved in producing and delivering or otherwise influencing that resource.
     * Provenance provides a critical foundation for assessing authenticity, enabling
     * trust, and allowing reproducibility. Provenance assertions are a form of
     * contextual metadata and can themselves become important records with their own
     * provenance. Provenance statement indicates clinical significance in terms of
     * confidence in authenticity, reliability, and trustworthiness, integrity, and
     * stage in lifecycle (e.g. Document Completion - has the artifact been legally
     * authenticated), all of which may impact security, privacy, and trust policies.
     *
     * An actor taking a role in an activity for which it can be assigned some degree
     * of responsibility for the activity taking place.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent[]
     */
    public function getAgent()
    {
        return $this->agent;
    }

    /**
     * Provenance of a resource is a record that describes entities and processes
     * involved in producing and delivering or otherwise influencing that resource.
     * Provenance provides a critical foundation for assessing authenticity, enabling
     * trust, and allowing reproducibility. Provenance assertions are a form of
     * contextual metadata and can themselves become important records with their own
     * provenance. Provenance statement indicates clinical significance in terms of
     * confidence in authenticity, reliability, and trustworthiness, integrity, and
     * stage in lifecycle (e.g. Document Completion - has the artifact been legally
     * authenticated), all of which may impact security, privacy, and trust policies.
     *
     * An actor taking a role in an activity for which it can be assigned some degree
     * of responsibility for the activity taking place.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent $agent
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProvenance
     */
    public function addAgent(FHIRProvenanceAgent $agent = null)
    {
        $this->agent[] = $agent;
        return $this;
    }

    /**
     * Provenance of a resource is a record that describes entities and processes
     * involved in producing and delivering or otherwise influencing that resource.
     * Provenance provides a critical foundation for assessing authenticity, enabling
     * trust, and allowing reproducibility. Provenance assertions are a form of
     * contextual metadata and can themselves become important records with their own
     * provenance. Provenance statement indicates clinical significance in terms of
     * confidence in authenticity, reliability, and trustworthiness, integrity, and
     * stage in lifecycle (e.g. Document Completion - has the artifact been legally
     * authenticated), all of which may impact security, privacy, and trust policies.
     *
     * An actor taking a role in an activity for which it can be assigned some degree
     * of responsibility for the activity taking place.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent[] $agent
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProvenance
     */
    public function setAgent(array $agent = [])
    {
        $this->agent = [];
        if ([] === $agent) {
            return $this;
        }
        foreach($agent as $v) {
            if ($v instanceof FHIRProvenanceAgent) {
                $this->addAgent($v);
            } else {
                $this->addAgent(new FHIRProvenanceAgent($v));
            }
        }
        return $this;
    }

    /**
     * Provenance of a resource is a record that describes entities and processes
     * involved in producing and delivering or otherwise influencing that resource.
     * Provenance provides a critical foundation for assessing authenticity, enabling
     * trust, and allowing reproducibility. Provenance assertions are a form of
     * contextual metadata and can themselves become important records with their own
     * provenance. Provenance statement indicates clinical significance in terms of
     * confidence in authenticity, reliability, and trustworthiness, integrity, and
     * stage in lifecycle (e.g. Document Completion - has the artifact been legally
     * authenticated), all of which may impact security, privacy, and trust policies.
     *
     * An entity used in this activity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceEntity[]
     */
    public function getEntity()
    {
        return $this->entity;
    }

    /**
     * Provenance of a resource is a record that describes entities and processes
     * involved in producing and delivering or otherwise influencing that resource.
     * Provenance provides a critical foundation for assessing authenticity, enabling
     * trust, and allowing reproducibility. Provenance assertions are a form of
     * contextual metadata and can themselves become important records with their own
     * provenance. Provenance statement indicates clinical significance in terms of
     * confidence in authenticity, reliability, and trustworthiness, integrity, and
     * stage in lifecycle (e.g. Document Completion - has the artifact been legally
     * authenticated), all of which may impact security, privacy, and trust policies.
     *
     * An entity used in this activity.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceEntity $entity
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProvenance
     */
    public function addEntity(FHIRProvenanceEntity $entity = null)
    {
        $this->entity[] = $entity;
        return $this;
    }

    /**
     * Provenance of a resource is a record that describes entities and processes
     * involved in producing and delivering or otherwise influencing that resource.
     * Provenance provides a critical foundation for assessing authenticity, enabling
     * trust, and allowing reproducibility. Provenance assertions are a form of
     * contextual metadata and can themselves become important records with their own
     * provenance. Provenance statement indicates clinical significance in terms of
     * confidence in authenticity, reliability, and trustworthiness, integrity, and
     * stage in lifecycle (e.g. Document Completion - has the artifact been legally
     * authenticated), all of which may impact security, privacy, and trust policies.
     *
     * An entity used in this activity.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceEntity[] $entity
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProvenance
     */
    public function setEntity(array $entity = [])
    {
        $this->entity = [];
        if ([] === $entity) {
            return $this;
        }
        foreach($entity as $v) {
            if ($v instanceof FHIRProvenanceEntity) {
                $this->addEntity($v);
            } else {
                $this->addEntity(new FHIRProvenanceEntity($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Where the activity occurred, if relevant.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Where the activity occurred, if relevant.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $location
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProvenance
     */
    public function setLocation(FHIRReference $location = null)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The period during which the activity occurred. (choose any one of occurred*, but
     * only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getOccurredDateTime()
    {
        return $this->occurredDateTime;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The period during which the activity occurred. (choose any one of occurred*, but
     * only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime $occurredDateTime
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProvenance
     */
    public function setOccurredDateTime($occurredDateTime = null)
    {
        if (null === $occurredDateTime) {
            $this->occurredDateTime = null;
            return $this;
        }
        if ($occurredDateTime instanceof FHIRDateTime) {
            $this->occurredDateTime = $occurredDateTime;
            return $this;
        }
        $this->occurredDateTime = new FHIRDateTime($occurredDateTime);
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The period during which the activity occurred. (choose any one of occurred*, but
     * only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getOccurredPeriod()
    {
        return $this->occurredPeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The period during which the activity occurred. (choose any one of occurred*, but
     * only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPeriod $occurredPeriod
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProvenance
     */
    public function setOccurredPeriod(FHIRPeriod $occurredPeriod = null)
    {
        $this->occurredPeriod = $occurredPeriod;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Policy or plan the activity was defined by. Typically, a single activity may
     * have multiple applicable policy documents, such as patient consent, guarantor
     * funding, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUri[]
     */
    public function getPolicy()
    {
        return $this->policy;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Policy or plan the activity was defined by. Typically, a single activity may
     * have multiple applicable policy documents, such as patient consent, guarantor
     * funding, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUri $policy
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProvenance
     */
    public function addPolicy($policy = null)
    {
        if (null === $policy) {
            $this->policy = null;
            return $this;
        }
        if ($policy instanceof FHIRUri) {
            $this->policy = $policy;
            return $this;
        }
        $this->policy = new FHIRUri($policy);
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Policy or plan the activity was defined by. Typically, a single activity may
     * have multiple applicable policy documents, such as patient consent, guarantor
     * funding, etc.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUri[] $policy
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProvenance
     */
    public function setPolicy(array $policy = [])
    {
        $this->policy = [];
        if ([] === $policy) {
            return $this;
        }
        foreach($policy as $v) {
            if ($v instanceof FHIRUri) {
                $this->addPolicy($v);
            } else {
                $this->addPolicy(new FHIRUri($v));
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
     * The reason that the activity was taking place.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The reason that the activity was taking place.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $reason
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProvenance
     */
    public function addReason(FHIRCodeableConcept $reason = null)
    {
        $this->reason[] = $reason;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The reason that the activity was taking place.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[] $reason
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProvenance
     */
    public function setReason(array $reason = [])
    {
        $this->reason = [];
        if ([] === $reason) {
            return $this;
        }
        foreach($reason as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addReason($v);
            } else {
                $this->addReason(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. Time zone is always required
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The instant of time at which the activity was recorded.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getRecorded()
    {
        return $this->recorded;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. Time zone is always required
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The instant of time at which the activity was recorded.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRInstant $recorded
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProvenance
     */
    public function setRecorded($recorded = null)
    {
        if (null === $recorded) {
            $this->recorded = null;
            return $this;
        }
        if ($recorded instanceof FHIRInstant) {
            $this->recorded = $recorded;
            return $this;
        }
        $this->recorded = new FHIRInstant($recorded);
        return $this;
    }

    /**
     * A signature along with supporting context. The signature may be a digital
     * signature that is cryptographic in nature, or some other signature acceptable to
     * the domain. This other signature may be as simple as a graphical image
     * representing a hand-written signature, or a signature ceremony Different
     * signature approaches have different utilities.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A digital signature on the target Reference(s). The signer should match a
     * Provenance.agent. The purpose of the signature is indicated.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRSignature[]
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * A signature along with supporting context. The signature may be a digital
     * signature that is cryptographic in nature, or some other signature acceptable to
     * the domain. This other signature may be as simple as a graphical image
     * representing a hand-written signature, or a signature ceremony Different
     * signature approaches have different utilities.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A digital signature on the target Reference(s). The signer should match a
     * Provenance.agent. The purpose of the signature is indicated.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRSignature $signature
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProvenance
     */
    public function addSignature(FHIRSignature $signature = null)
    {
        $this->signature[] = $signature;
        return $this;
    }

    /**
     * A signature along with supporting context. The signature may be a digital
     * signature that is cryptographic in nature, or some other signature acceptable to
     * the domain. This other signature may be as simple as a graphical image
     * representing a hand-written signature, or a signature ceremony Different
     * signature approaches have different utilities.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A digital signature on the target Reference(s). The signer should match a
     * Provenance.agent. The purpose of the signature is indicated.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRSignature[] $signature
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProvenance
     */
    public function setSignature(array $signature = [])
    {
        $this->signature = [];
        if ([] === $signature) {
            return $this;
        }
        foreach($signature as $v) {
            if ($v instanceof FHIRSignature) {
                $this->addSignature($v);
            } else {
                $this->addSignature(new FHIRSignature($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The Reference(s) that were generated or updated by the activity described in
     * this resource. A provenance can point to more than one target if multiple
     * resources were created/updated by the same activity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The Reference(s) that were generated or updated by the activity described in
     * this resource. A provenance can point to more than one target if multiple
     * resources were created/updated by the same activity.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $target
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProvenance
     */
    public function addTarget(FHIRReference $target = null)
    {
        $this->target[] = $target;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The Reference(s) that were generated or updated by the activity described in
     * this resource. A provenance can point to more than one target if multiple
     * resources were created/updated by the same activity.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[] $target
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProvenance
     */
    public function setTarget(array $target = [])
    {
        $this->target = [];
        if ([] === $target) {
            return $this;
        }
        foreach($target as $v) {
            if ($v instanceof FHIRReference) {
                $this->addTarget($v);
            } else {
                $this->addTarget(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProvenance $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProvenance
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
                throw new \DomainException(sprintf('FHIRProvenance::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRProvenance::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRDomainResource::xmlUnserialize($sxe, new FHIRProvenance);
        } elseif (!is_object($type) || !($type instanceof FHIRProvenance)) {
            throw new \RuntimeException(sprintf(
                'FHIRProvenance::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProvenance or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->activity)) {
            $type->setActivity(FHIRCodeableConcept::xmlUnserialize($children->activity));
        }
        if (isset($children->agent)) {
            foreach($children->agent as $child) {
                $type->addAgent(FHIRProvenanceAgent::xmlUnserialize($child));
            }
        }
        if (isset($children->entity)) {
            foreach($children->entity as $child) {
                $type->addEntity(FHIRProvenanceEntity::xmlUnserialize($child));
            }
        }
        if (isset($children->location)) {
            $type->setLocation(FHIRReference::xmlUnserialize($children->location));
        }
        if (isset($attributes->occurredDateTime)) {
            $type->setOccurredDateTime((string)$attributes->occurredDateTime);
        }
        if (isset($children->occurredDateTime)) {
            $type->setOccurredDateTime(FHIRDateTime::xmlUnserialize($children->occurredDateTime));
        }
        if (isset($children->occurredPeriod)) {
            $type->setOccurredPeriod(FHIRPeriod::xmlUnserialize($children->occurredPeriod));
        }
        if (isset($attributes->policy)) {
            $type->addPolicy((string)$attributes->policy);
        }
        if (isset($children->policy)) {
            foreach($children->policy as $child) {
                $type->addPolicy(FHIRUri::xmlUnserialize($child));
            }
        }
        if (isset($children->reason)) {
            foreach($children->reason as $child) {
                $type->addReason(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($attributes->recorded)) {
            $type->setRecorded((string)$attributes->recorded);
        }
        if (isset($children->recorded)) {
            $type->setRecorded(FHIRInstant::xmlUnserialize($children->recorded));
        }
        if (isset($children->signature)) {
            foreach($children->signature as $child) {
                $type->addSignature(FHIRSignature::xmlUnserialize($child));
            }
        }
        if (isset($children->target)) {
            foreach($children->target as $child) {
                $type->addTarget(FHIRReference::xmlUnserialize($child));
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
            $sxe = new \SimpleXMLElement('<Provenance xmlns="http://hl7.org/fhir"></Provenance>');
        }
        if (null !== ($v = $this->getActivity())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ACTIVITY));
        }
        if ([] !== ($vs = $this->getAgent())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_AGENT));
            }
        }
        if ([] !== ($vs = $this->getEntity())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ENTITY));
            }
        }
        if (null !== ($v = $this->getLocation())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LOCATION));
        }
        if (null !== ($v = $this->getOccurredDateTime())) {
            $sxe->addAttribute(self::FIELD_OCCURRED_DATE_TIME, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_OCCURRED_DATE_TIME));
            }
        }
        if (null !== ($v = $this->getOccurredPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_OCCURRED_PERIOD));
        }
        if ([] !== ($vs = $this->getPolicy())) {
            $first = true;
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                if ($first) {
                    $sxe->addAttribute(self::FIELD_POLICY, (string)$v);
                    if (null !== $v->getId() || [] !== $v->getExtension()) {
                        $v->xmlSerialize($sxe->addChild(self::FIELD_POLICY));
                    }
                    $first = false;
                } else {
                    $v->xmlSerialize($sxe->addChild(self::FIELD_POLICY));
                }
            }
        }
        if ([] !== ($vs = $this->getReason())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REASON));
            }
        }
        if (null !== ($v = $this->getRecorded())) {
            $sxe->addAttribute(self::FIELD_RECORDED, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_RECORDED));
            }
        }
        if ([] !== ($vs = $this->getSignature())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SIGNATURE));
            }
        }
        if ([] !== ($vs = $this->getTarget())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_TARGET));
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
        if (null !== ($v = $this->getActivity())) {
            $a[self::FIELD_ACTIVITY] = $v;
        }
        if ([] !== ($vs = $this->getAgent())) {
            $a[self::FIELD_AGENT] = $vs;
        }
        if ([] !== ($vs = $this->getEntity())) {
            $a[self::FIELD_ENTITY] = $vs;
        }
        if (null !== ($v = $this->getLocation())) {
            $a[self::FIELD_LOCATION] = $v;
        }
        if (null !== ($v = $this->getOccurredDateTime())) {
            $a[self::FIELD_OCCURRED_DATE_TIME] = (string)$v;
            $a[self::FIELD_OCCURRED_DATE_TIME_EXT] = $v;
        }
        if (null !== ($v = $this->getOccurredPeriod())) {
            $a[self::FIELD_OCCURRED_PERIOD] = $v;
        }
        if ([] !== ($vs = $this->getPolicy())) {
            $a[self::FIELD_POLICY] = [];
            $a[self::FIELD_POLICY_EXT] = [];
            foreach ($vs as $v) {
                $a[self::FIELD_POLICY][] = (string)$v;
                $a[self::FIELD_POLICY_EXT][] = $v;
            }
        }
        if ([] !== ($vs = $this->getReason())) {
            $a[self::FIELD_REASON] = $vs;
        }
        if (null !== ($v = $this->getRecorded())) {
            $a[self::FIELD_RECORDED] = (string)$v;
            $a[self::FIELD_RECORDED_EXT] = $v;
        }
        if ([] !== ($vs = $this->getSignature())) {
            $a[self::FIELD_SIGNATURE] = $vs;
        }
        if ([] !== ($vs = $this->getTarget())) {
            $a[self::FIELD_TARGET] = $vs;
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