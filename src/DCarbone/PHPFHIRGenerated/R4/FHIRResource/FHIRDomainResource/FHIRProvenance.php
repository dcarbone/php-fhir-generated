<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:44+0000
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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceEntity;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInstant;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSignature;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

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
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRProvenance
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource
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

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An activity is something that occurs over a period of time and acts upon or with
     * entities; it may include consuming, processing, transforming, modifying,
     * relocating, using, or generating entities.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $activity = null;

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
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent[]
     */
    protected $agent = [];

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
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceEntity[]
     */
    protected $entity = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where the activity occurred, if relevant.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $location = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The period during which the activity occurred. (choose any one of occurred*, but
     * only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    protected $occurredDateTime = null;

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period during which the activity occurred. (choose any one of occurred*, but
     * only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
     */
    protected $occurredPeriod = null;

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Policy or plan the activity was defined by. Typically, a single activity may
     * have multiple applicable policy documents, such as patient consent, guarantor
     * funding, etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri[]
     */
    protected $policy = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reason that the activity was taking place.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected $reason = [];

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. Time zone is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The instant of time at which the activity was recorded.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInstant
     */
    protected $recorded = null;

    /**
     * A signature along with supporting context. The signature may be a digital
     * signature that is cryptographic in nature, or some other signature acceptable to
     * the domain. This other signature may be as simple as a graphical image
     * representing a hand-written signature, or a signature ceremony Different
     * signature approaches have different utilities.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A digital signature on the target Reference(s). The signer should match a
     * Provenance.agent. The purpose of the signature is indicated.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSignature[]
     */
    protected $signature = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The Reference(s) that were generated or updated by the activity described in
     * this resource. A provenance can point to more than one target if multiple
     * resources were created/updated by the same activity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $target = [];

    /**
     * Validation map for fields in type Provenance
     * @var array
     */
    private static $_validationRules = [
        self::FIELD_AGENT => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],

        self::FIELD_TARGET => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

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
                    if (null === $v) {
                        continue;
                    }
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
                    if (null === $v) {
                        continue;
                    }
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
        if (isset($data[self::FIELD_OCCURRED_DATE_TIME]) || isset($data[self::FIELD_OCCURRED_DATE_TIME_EXT])) {
            if (isset($data[self::FIELD_OCCURRED_DATE_TIME])) {
                $value = $data[self::FIELD_OCCURRED_DATE_TIME];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_OCCURRED_DATE_TIME_EXT]) && is_array($data[self::FIELD_OCCURRED_DATE_TIME_EXT])) {
                $ext = $data[self::FIELD_OCCURRED_DATE_TIME_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setOccurredDateTime($value);
                } else if (is_array($value)) {
                    $this->setOccurredDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setOccurredDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setOccurredDateTime(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_OCCURRED_PERIOD])) {
            if ($data[self::FIELD_OCCURRED_PERIOD] instanceof FHIRPeriod) {
                $this->setOccurredPeriod($data[self::FIELD_OCCURRED_PERIOD]);
            } else {
                $this->setOccurredPeriod(new FHIRPeriod($data[self::FIELD_OCCURRED_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_POLICY]) || isset($data[self::FIELD_POLICY_EXT])) {
            if (isset($data[self::FIELD_POLICY])) {
                $value = $data[self::FIELD_POLICY];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_POLICY_EXT]) && is_array($data[self::FIELD_POLICY_EXT])) {
                $ext = $data[self::FIELD_POLICY_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->addPolicy($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRUri) {
                            $this->addPolicy($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addPolicy(new FHIRUri(array_merge($v, $iext)));
                            } else {
                                $this->addPolicy(new FHIRUri([FHIRUri::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addPolicy(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->addPolicy(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addPolicy(new FHIRUri($iext));
                }
            }
        }
        if (isset($data[self::FIELD_REASON])) {
            if (is_array($data[self::FIELD_REASON])) {
                foreach($data[self::FIELD_REASON] as $v) {
                    if (null === $v) {
                        continue;
                    }
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
        if (isset($data[self::FIELD_RECORDED]) || isset($data[self::FIELD_RECORDED_EXT])) {
            if (isset($data[self::FIELD_RECORDED])) {
                $value = $data[self::FIELD_RECORDED];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_RECORDED_EXT]) && is_array($data[self::FIELD_RECORDED_EXT])) {
                $ext = $data[self::FIELD_RECORDED_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRInstant) {
                    $this->setRecorded($value);
                } else if (is_array($value)) {
                    $this->setRecorded(new FHIRInstant(array_merge($ext, $value)));
                } else {
                    $this->setRecorded(new FHIRInstant([FHIRInstant::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setRecorded(new FHIRInstant($ext));
            }
        }
        if (isset($data[self::FIELD_SIGNATURE])) {
            if (is_array($data[self::FIELD_SIGNATURE])) {
                foreach($data[self::FIELD_SIGNATURE] as $v) {
                    if (null === $v) {
                        continue;
                    }
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
                    if (null === $v) {
                        continue;
                    }
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
    public function _getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return string
     */
    public function _getFHIRXMLElementDefinition()
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<Provenance{$xmlns}></Provenance>";
    }
    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An activity is something that occurs over a period of time and acts upon or with
     * entities; it may include consuming, processing, transforming, modifying,
     * relocating, using, or generating entities.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getActivity()
    {
        return $this->activity;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An activity is something that occurs over a period of time and acts upon or with
     * entities; it may include consuming, processing, transforming, modifying,
     * relocating, using, or generating entities.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $activity
     * @return static
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent $agent
     * @return static
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent[] $agent
     * @return static
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceEntity[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceEntity $entity
     * @return static
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceEntity[] $entity
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where the activity occurred, if relevant.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where the activity occurred, if relevant.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $location
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The period during which the activity occurred. (choose any one of occurred*, but
     * only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The period during which the activity occurred. (choose any one of occurred*, but
     * only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $occurredDateTime
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period during which the activity occurred. (choose any one of occurred*, but
     * only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
     */
    public function getOccurredPeriod()
    {
        return $this->occurredPeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period during which the activity occurred. (choose any one of occurred*, but
     * only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod $occurredPeriod
     * @return static
     */
    public function setOccurredPeriod(FHIRPeriod $occurredPeriod = null)
    {
        $this->occurredPeriod = $occurredPeriod;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Policy or plan the activity was defined by. Typically, a single activity may
     * have multiple applicable policy documents, such as patient consent, guarantor
     * funding, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri[]
     */
    public function getPolicy()
    {
        return $this->policy;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Policy or plan the activity was defined by. Typically, a single activity may
     * have multiple applicable policy documents, such as patient consent, guarantor
     * funding, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri $policy
     * @return static
     */
    public function addPolicy($policy = null)
    {
        if (null === $policy) {
            $this->policy = [];
            return $this;
        }
        if ($policy instanceof FHIRUri) {
            $this->policy[] = $policy;
            return $this;
        }
        $this->policy[] = new FHIRUri($policy);
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Policy or plan the activity was defined by. Typically, a single activity may
     * have multiple applicable policy documents, such as patient consent, guarantor
     * funding, etc.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri[] $policy
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reason that the activity was taking place.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reason that the activity was taking place.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $reason
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reason that the activity was taking place.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $reason
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The instant of time at which the activity was recorded.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInstant
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The instant of time at which the activity was recorded.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInstant $recorded
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A digital signature on the target Reference(s). The signer should match a
     * Provenance.agent. The purpose of the signature is indicated.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSignature[]
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A digital signature on the target Reference(s). The signer should match a
     * Provenance.agent. The purpose of the signature is indicated.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSignature $signature
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A digital signature on the target Reference(s). The signer should match a
     * Provenance.agent. The purpose of the signature is indicated.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRSignature[] $signature
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The Reference(s) that were generated or updated by the activity described in
     * this resource. A provenance can point to more than one target if multiple
     * resources were created/updated by the same activity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The Reference(s) that were generated or updated by the activity described in
     * this resource. A provenance can point to more than one target if multiple
     * resources were created/updated by the same activity.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $target
     * @return static
     */
    public function addTarget(FHIRReference $target = null)
    {
        $this->target[] = $target;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The Reference(s) that were generated or updated by the activity described in
     * this resource. A provenance can point to more than one target if multiple
     * resources were created/updated by the same activity.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $target
     * @return static
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
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules()
    {
        return self::$_validationRules;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors()
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getActivity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ACTIVITY] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getAgent())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_AGENT, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getEntity())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ENTITY, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getLocation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LOCATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOccurredDateTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OCCURRED_DATE_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOccurredPeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OCCURRED_PERIOD] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getPolicy())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_POLICY, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getReason())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REASON, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getRecorded())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RECORDED] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getSignature())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SIGNATURE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getTarget())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_TARGET, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ACTIVITY])) {
            $v = $this->getActivity();
            foreach($validationRules[self::FIELD_ACTIVITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROVENANCE, self::FIELD_ACTIVITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ACTIVITY])) {
                        $errs[self::FIELD_ACTIVITY] = [];
                    }
                    $errs[self::FIELD_ACTIVITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AGENT])) {
            $v = $this->getAgent();
            foreach($validationRules[self::FIELD_AGENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROVENANCE, self::FIELD_AGENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AGENT])) {
                        $errs[self::FIELD_AGENT] = [];
                    }
                    $errs[self::FIELD_AGENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ENTITY])) {
            $v = $this->getEntity();
            foreach($validationRules[self::FIELD_ENTITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROVENANCE, self::FIELD_ENTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ENTITY])) {
                        $errs[self::FIELD_ENTITY] = [];
                    }
                    $errs[self::FIELD_ENTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LOCATION])) {
            $v = $this->getLocation();
            foreach($validationRules[self::FIELD_LOCATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROVENANCE, self::FIELD_LOCATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LOCATION])) {
                        $errs[self::FIELD_LOCATION] = [];
                    }
                    $errs[self::FIELD_LOCATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OCCURRED_DATE_TIME])) {
            $v = $this->getOccurredDateTime();
            foreach($validationRules[self::FIELD_OCCURRED_DATE_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROVENANCE, self::FIELD_OCCURRED_DATE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OCCURRED_DATE_TIME])) {
                        $errs[self::FIELD_OCCURRED_DATE_TIME] = [];
                    }
                    $errs[self::FIELD_OCCURRED_DATE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OCCURRED_PERIOD])) {
            $v = $this->getOccurredPeriod();
            foreach($validationRules[self::FIELD_OCCURRED_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROVENANCE, self::FIELD_OCCURRED_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OCCURRED_PERIOD])) {
                        $errs[self::FIELD_OCCURRED_PERIOD] = [];
                    }
                    $errs[self::FIELD_OCCURRED_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_POLICY])) {
            $v = $this->getPolicy();
            foreach($validationRules[self::FIELD_POLICY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROVENANCE, self::FIELD_POLICY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_POLICY])) {
                        $errs[self::FIELD_POLICY] = [];
                    }
                    $errs[self::FIELD_POLICY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REASON])) {
            $v = $this->getReason();
            foreach($validationRules[self::FIELD_REASON] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROVENANCE, self::FIELD_REASON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REASON])) {
                        $errs[self::FIELD_REASON] = [];
                    }
                    $errs[self::FIELD_REASON][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RECORDED])) {
            $v = $this->getRecorded();
            foreach($validationRules[self::FIELD_RECORDED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROVENANCE, self::FIELD_RECORDED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RECORDED])) {
                        $errs[self::FIELD_RECORDED] = [];
                    }
                    $errs[self::FIELD_RECORDED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SIGNATURE])) {
            $v = $this->getSignature();
            foreach($validationRules[self::FIELD_SIGNATURE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROVENANCE, self::FIELD_SIGNATURE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SIGNATURE])) {
                        $errs[self::FIELD_SIGNATURE] = [];
                    }
                    $errs[self::FIELD_SIGNATURE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TARGET])) {
            $v = $this->getTarget();
            foreach($validationRules[self::FIELD_TARGET] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROVENANCE, self::FIELD_TARGET, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TARGET])) {
                        $errs[self::FIELD_TARGET] = [];
                    }
                    $errs[self::FIELD_TARGET][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTAINED])) {
            $v = $this->getContained();
            foreach($validationRules[self::FIELD_CONTAINED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_CONTAINED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTAINED])) {
                        $errs[self::FIELD_CONTAINED] = [];
                    }
                    $errs[self::FIELD_CONTAINED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IMPLICIT_RULES])) {
            $v = $this->getImplicitRules();
            foreach($validationRules[self::FIELD_IMPLICIT_RULES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_IMPLICIT_RULES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IMPLICIT_RULES])) {
                        $errs[self::FIELD_IMPLICIT_RULES] = [];
                    }
                    $errs[self::FIELD_IMPLICIT_RULES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LANGUAGE])) {
            $v = $this->getLanguage();
            foreach($validationRules[self::FIELD_LANGUAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_LANGUAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LANGUAGE])) {
                        $errs[self::FIELD_LANGUAGE] = [];
                    }
                    $errs[self::FIELD_LANGUAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_META])) {
            $v = $this->getMeta();
            foreach($validationRules[self::FIELD_META] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_META, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_META])) {
                        $errs[self::FIELD_META] = [];
                    }
                    $errs[self::FIELD_META][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRProvenance $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRProvenance
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe, $libxmlOpts, false);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRProvenance::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRProvenance::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRProvenance;
        } elseif (!is_object($type) || !($type instanceof FHIRProvenance)) {
            throw new \RuntimeException(sprintf(
                'FHIRProvenance::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRProvenance or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRDomainResource::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
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
        if (isset($children->occurredDateTime)) {
            $type->setOccurredDateTime(FHIRDateTime::xmlUnserialize($children->occurredDateTime));
        }
        if (isset($attributes->occurredDateTime)) {
            $pt = $type->getOccurredDateTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->occurredDateTime);
            } else {
                $type->setOccurredDateTime((string)$attributes->occurredDateTime);
            }
        }
        if (isset($children->occurredPeriod)) {
            $type->setOccurredPeriod(FHIRPeriod::xmlUnserialize($children->occurredPeriod));
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
        if (isset($children->recorded)) {
            $type->setRecorded(FHIRInstant::xmlUnserialize($children->recorded));
        }
        if (isset($attributes->recorded)) {
            $pt = $type->getRecorded();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->recorded);
            } else {
                $type->setRecorded((string)$attributes->recorded);
            }
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
     * @param null|int $libxmlOpts
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement($this->_getFHIRXMLElementDefinition(), $libxmlOpts, false);
        }
        parent::xmlSerialize($sxe);
        if (null !== ($v = $this->getActivity())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ACTIVITY, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getAgent())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_AGENT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getEntity())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ENTITY, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getLocation())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LOCATION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getOccurredDateTime())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_OCCURRED_DATE_TIME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getOccurredPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_OCCURRED_PERIOD, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getPolicy())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_POLICY, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getReason())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REASON, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getRecorded())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RECORDED, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getSignature())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SIGNATURE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getTarget())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_TARGET, null, $v->_getFHIRXMLNamespace()));
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
            $a[self::FIELD_AGENT] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_AGENT][] = $v;
            }
        }
        if ([] !== ($vs = $this->getEntity())) {
            $a[self::FIELD_ENTITY] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_ENTITY][] = $v;
            }
        }
        if (null !== ($v = $this->getLocation())) {
            $a[self::FIELD_LOCATION] = $v;
        }
        if (null !== ($v = $this->getOccurredDateTime())) {
            $a[self::FIELD_OCCURRED_DATE_TIME] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_OCCURRED_DATE_TIME_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getOccurredPeriod())) {
            $a[self::FIELD_OCCURRED_PERIOD] = $v;
        }
        if ([] !== ($vs = $this->getPolicy())) {
            $a[self::FIELD_POLICY] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_POLICY][] = $v->getValue();
                $enc = $v->jsonSerialize();
                $cnt = count($enc);
                if (0 === $cnt || (1 === $cnt && (isset($enc[FHIRUri::FIELD_VALUE]) || array_key_exists(FHIRUri::FIELD_VALUE, $enc)))) {
                    $encs[] = null;
                } else {
                    unset($enc[FHIRUri::FIELD_VALUE]);
                    $encs[] = $enc;
                    $encValued = true;
                }
            }
            if ($encValued) {
                $a[self::FIELD_POLICY_EXT] = $encs;
            }
        }
        if ([] !== ($vs = $this->getReason())) {
            $a[self::FIELD_REASON] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_REASON][] = $v;
            }
        }
        if (null !== ($v = $this->getRecorded())) {
            $a[self::FIELD_RECORDED] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRInstant::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRInstant::FIELD_VALUE]);
                $a[self::FIELD_RECORDED_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getSignature())) {
            $a[self::FIELD_SIGNATURE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_SIGNATURE][] = $v;
            }
        }
        if ([] !== ($vs = $this->getTarget())) {
            $a[self::FIELD_TARGET] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_TARGET][] = $v;
            }
        }
        if ([] !== ($vs = $this->_getFHIRComments())) {
            $a[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS] = $vs;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => $this->_getResourceType()] + $a;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}