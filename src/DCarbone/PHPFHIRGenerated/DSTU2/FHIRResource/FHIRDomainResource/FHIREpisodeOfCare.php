<?php

namespace DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 21st, 2019 04:04+0000
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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIREpisodeOfCare\FHIREpisodeOfCareCareTeam;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIREpisodeOfCare\FHIREpisodeOfCareStatusHistory;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIREpisodeOfCareStatus;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;

/**
 * An association between a patient and an organization / healthcare provider(s)
 * during which time encounters may occur. The managing organization assumes a
 * level of responsibility for the patient during this time.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIREpisodeOfCare
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource
 */
class FHIREpisodeOfCare extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_EPISODE_OF_CARE;

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_CARE_MANAGER = 'careManager';
    const FIELD_CARE_TEAM = 'careTeam';
    const FIELD_CONDITION = 'condition';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_IDENTIFIER_EXT = '_identifier';
    const FIELD_MANAGING_ORGANIZATION = 'managingOrganization';
    const FIELD_PATIENT = 'patient';
    const FIELD_PERIOD = 'period';
    const FIELD_REFERRAL_REQUEST = 'referralRequest';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_STATUS_HISTORY = 'statusHistory';
    const FIELD_TYPE = 'type';

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The practitioner that is the care manager/care co-ordinator for this patient.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    private $careManager = null;
    /**
     * An association between a patient and an organization / healthcare provider(s)
     * during which time encounters may occur. The managing organization assumes a
     * level of responsibility for the patient during this time.
     *
     * The list of practitioners that may be facilitating this episode of care for
     * specific purposes.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIREpisodeOfCare\FHIREpisodeOfCareCareTeam[]
     */
    private $careTeam = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A list of conditions/problems/diagnoses that this episode of care is intended to
     * be providing care for.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[]
     */
    private $condition = [];
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifier(s) by which this EpisodeOfCare is known.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier[]
     */
    private $identifier = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The organization that has assumed the specific responsibilities for the
     * specified duration.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    private $managingOrganization = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The patient that this EpisodeOfCare applies to.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    private $patient = null;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The interval during which the managing organization assumes the defined
     * responsibility.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPeriod
     */
    private $period = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Referral Request(s) that are fulfilled by this EpisodeOfCare, incoming
     * referrals.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[]
     */
    private $referralRequest = [];
    /**
     * The status of the encounter.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * planned | waitlist | active | onhold | finished | cancelled.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIREpisodeOfCareStatus
     */
    private $status = null;
    /**
     * An association between a patient and an organization / healthcare provider(s)
     * during which time encounters may occur. The managing organization assumes a
     * level of responsibility for the patient during this time.
     *
     * The history of statuses that the EpisodeOfCare has been through (without
     * requiring processing the history of the resource).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIREpisodeOfCare\FHIREpisodeOfCareStatusHistory[]
     */
    private $statusHistory = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A classification of the type of encounter; e.g. specialist referral, disease
     * management, type of funded care.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    private $type = [];

    /**
     * FHIREpisodeOfCare Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIREpisodeOfCare::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CARE_MANAGER])) {
            if ($data[self::FIELD_CARE_MANAGER] instanceof FHIRReference) {
                $this->setCareManager($data[self::FIELD_CARE_MANAGER]);
            } else {
                $this->setCareManager(new FHIRReference($data[self::FIELD_CARE_MANAGER]));
            }
        }
        if (isset($data[self::FIELD_CARE_TEAM])) {
            if (is_array($data[self::FIELD_CARE_TEAM])) {
                foreach($data[self::FIELD_CARE_TEAM] as $v) {
                    if ($v instanceof FHIREpisodeOfCareCareTeam) {
                        $this->addCareTeam($v);
                    } else {
                        $this->addCareTeam(new FHIREpisodeOfCareCareTeam($v));
                    }
                }
            } else if ($data[self::FIELD_CARE_TEAM] instanceof FHIREpisodeOfCareCareTeam) {
                $this->addCareTeam($data[self::FIELD_CARE_TEAM]);
            } else {
                $this->addCareTeam(new FHIREpisodeOfCareCareTeam($data[self::FIELD_CARE_TEAM]));
            }
        }
        if (isset($data[self::FIELD_CONDITION])) {
            if (is_array($data[self::FIELD_CONDITION])) {
                foreach($data[self::FIELD_CONDITION] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addCondition($v);
                    } else {
                        $this->addCondition(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_CONDITION] instanceof FHIRReference) {
                $this->addCondition($data[self::FIELD_CONDITION]);
            } else {
                $this->addCondition(new FHIRReference($data[self::FIELD_CONDITION]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            $ext = (isset($data[self::FIELD_IDENTIFIER_EXT]) && is_array($data[self::FIELD_IDENTIFIER_EXT]))
                ? $data[self::FIELD_IDENTIFIER_EXT]
                : null;
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $i => $v) {
                    if ($v instanceof FHIRIdentifier) {
                        $this->addIdentifier($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addIdentifier(new FHIRIdentifier([FHIRIdentifier::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } elseif ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->addIdentifier($data[self::FIELD_IDENTIFIER]);
            } elseif ($ext && is_scalar($data[self::FIELD_IDENTIFIER])) {
                $this->addIdentifier(new FHIRIdentifier([FHIRIdentifier::FIELD_VALUE => $data[self::FIELD_IDENTIFIER]] + $ext));
            } else {
                $this->addIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_MANAGING_ORGANIZATION])) {
            if ($data[self::FIELD_MANAGING_ORGANIZATION] instanceof FHIRReference) {
                $this->setManagingOrganization($data[self::FIELD_MANAGING_ORGANIZATION]);
            } else {
                $this->setManagingOrganization(new FHIRReference($data[self::FIELD_MANAGING_ORGANIZATION]));
            }
        }
        if (isset($data[self::FIELD_PATIENT])) {
            if ($data[self::FIELD_PATIENT] instanceof FHIRReference) {
                $this->setPatient($data[self::FIELD_PATIENT]);
            } else {
                $this->setPatient(new FHIRReference($data[self::FIELD_PATIENT]));
            }
        }
        if (isset($data[self::FIELD_PERIOD])) {
            if ($data[self::FIELD_PERIOD] instanceof FHIRPeriod) {
                $this->setPeriod($data[self::FIELD_PERIOD]);
            } else {
                $this->setPeriod(new FHIRPeriod($data[self::FIELD_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_REFERRAL_REQUEST])) {
            if (is_array($data[self::FIELD_REFERRAL_REQUEST])) {
                foreach($data[self::FIELD_REFERRAL_REQUEST] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addReferralRequest($v);
                    } else {
                        $this->addReferralRequest(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_REFERRAL_REQUEST] instanceof FHIRReference) {
                $this->addReferralRequest($data[self::FIELD_REFERRAL_REQUEST]);
            } else {
                $this->addReferralRequest(new FHIRReference($data[self::FIELD_REFERRAL_REQUEST]));
            }
        }
        if (isset($data[self::FIELD_STATUS])) {
            $ext = (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT]))
                ? $data[self::FIELD_STATUS_EXT]
                : null;
            if ($data[self::FIELD_STATUS] instanceof FHIREpisodeOfCareStatus) {
                $this->setStatus($data[self::FIELD_STATUS]);
            } elseif ($ext && is_scalar($data[self::FIELD_STATUS])) {
                $this->setStatus(new FHIREpisodeOfCareStatus([FHIREpisodeOfCareStatus::FIELD_VALUE => $data[self::FIELD_STATUS]] + $ext));
            } else {
                $this->setStatus(new FHIREpisodeOfCareStatus($data[self::FIELD_STATUS]));
            }
        }
        if (isset($data[self::FIELD_STATUS_HISTORY])) {
            if (is_array($data[self::FIELD_STATUS_HISTORY])) {
                foreach($data[self::FIELD_STATUS_HISTORY] as $v) {
                    if ($v instanceof FHIREpisodeOfCareStatusHistory) {
                        $this->addStatusHistory($v);
                    } else {
                        $this->addStatusHistory(new FHIREpisodeOfCareStatusHistory($v));
                    }
                }
            } else if ($data[self::FIELD_STATUS_HISTORY] instanceof FHIREpisodeOfCareStatusHistory) {
                $this->addStatusHistory($data[self::FIELD_STATUS_HISTORY]);
            } else {
                $this->addStatusHistory(new FHIREpisodeOfCareStatusHistory($data[self::FIELD_STATUS_HISTORY]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if (is_array($data[self::FIELD_TYPE])) {
                foreach($data[self::FIELD_TYPE] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addType($v);
                    } else {
                        $this->addType(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->addType($data[self::FIELD_TYPE]);
            } else {
                $this->addType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
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
     * @return string|null
     */
    public function _getFHIRXMLNamespace()
    {
        return '' === $this->_xmlns ? null : $this->_xmlns;
    }

    /**
     * @param null|string $xmlNamespace
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIREpisodeOfCare
     */
    public function _setFHIRXMLNamespace($xmlNamespace)
    {
        if (null === $xmlNamespace || is_string($xmlNamespace)) {
            $this->_xmlns = (string)$xmlNamespace;
            return $this;
        }
        throw new \InvalidArgumentException(sprintf(
            '$xmlNamespace must be a null or string value, %s seen.',
            gettype($xmlNamespace)
        ));
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
        return "<EpisodeOfCare{$xmlns}></EpisodeOfCare>";
    }

    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The practitioner that is the care manager/care co-ordinator for this patient.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getCareManager()
    {
        return $this->careManager;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The practitioner that is the care manager/care co-ordinator for this patient.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $careManager
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIREpisodeOfCare
     */
    public function setCareManager(FHIRReference $careManager = null)
    {
        $this->careManager = $careManager;
        return $this;
    }

    /**
     * An association between a patient and an organization / healthcare provider(s)
     * during which time encounters may occur. The managing organization assumes a
     * level of responsibility for the patient during this time.
     *
     * The list of practitioners that may be facilitating this episode of care for
     * specific purposes.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIREpisodeOfCare\FHIREpisodeOfCareCareTeam[]
     */
    public function getCareTeam()
    {
        return $this->careTeam;
    }

    /**
     * An association between a patient and an organization / healthcare provider(s)
     * during which time encounters may occur. The managing organization assumes a
     * level of responsibility for the patient during this time.
     *
     * The list of practitioners that may be facilitating this episode of care for
     * specific purposes.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIREpisodeOfCare\FHIREpisodeOfCareCareTeam $careTeam
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIREpisodeOfCare
     */
    public function addCareTeam(FHIREpisodeOfCareCareTeam $careTeam = null)
    {
        $this->careTeam[] = $careTeam;
        return $this;
    }

    /**
     * An association between a patient and an organization / healthcare provider(s)
     * during which time encounters may occur. The managing organization assumes a
     * level of responsibility for the patient during this time.
     *
     * The list of practitioners that may be facilitating this episode of care for
     * specific purposes.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIREpisodeOfCare\FHIREpisodeOfCareCareTeam[] $careTeam
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIREpisodeOfCare
     */
    public function setCareTeam(array $careTeam = [])
    {
        $this->careTeam = [];
        if ([] === $careTeam) {
            return $this;
        }
        foreach($careTeam as $v) {
            if ($v instanceof FHIREpisodeOfCareCareTeam) {
                $this->addCareTeam($v);
            } else {
                $this->addCareTeam(new FHIREpisodeOfCareCareTeam($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A list of conditions/problems/diagnoses that this episode of care is intended to
     * be providing care for.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[]
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A list of conditions/problems/diagnoses that this episode of care is intended to
     * be providing care for.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $condition
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIREpisodeOfCare
     */
    public function addCondition(FHIRReference $condition = null)
    {
        $this->condition[] = $condition;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A list of conditions/problems/diagnoses that this episode of care is intended to
     * be providing care for.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[] $condition
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIREpisodeOfCare
     */
    public function setCondition(array $condition = [])
    {
        $this->condition = [];
        if ([] === $condition) {
            return $this;
        }
        foreach($condition as $v) {
            if ($v instanceof FHIRReference) {
                $this->addCondition($v);
            } else {
                $this->addCondition(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifier(s) by which this EpisodeOfCare is known.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifier(s) by which this EpisodeOfCare is known.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier $identifier
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIREpisodeOfCare
     */
    public function addIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifier(s) by which this EpisodeOfCare is known.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier[] $identifier
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIREpisodeOfCare
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The organization that has assumed the specific responsibilities for the
     * specified duration.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getManagingOrganization()
    {
        return $this->managingOrganization;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The organization that has assumed the specific responsibilities for the
     * specified duration.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $managingOrganization
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIREpisodeOfCare
     */
    public function setManagingOrganization(FHIRReference $managingOrganization = null)
    {
        $this->managingOrganization = $managingOrganization;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The patient that this EpisodeOfCare applies to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The patient that this EpisodeOfCare applies to.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $patient
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIREpisodeOfCare
     */
    public function setPatient(FHIRReference $patient = null)
    {
        $this->patient = $patient;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The interval during which the managing organization assumes the defined
     * responsibility.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The interval during which the managing organization assumes the defined
     * responsibility.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPeriod $period
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIREpisodeOfCare
     */
    public function setPeriod(FHIRPeriod $period = null)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Referral Request(s) that are fulfilled by this EpisodeOfCare, incoming
     * referrals.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[]
     */
    public function getReferralRequest()
    {
        return $this->referralRequest;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Referral Request(s) that are fulfilled by this EpisodeOfCare, incoming
     * referrals.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $referralRequest
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIREpisodeOfCare
     */
    public function addReferralRequest(FHIRReference $referralRequest = null)
    {
        $this->referralRequest[] = $referralRequest;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Referral Request(s) that are fulfilled by this EpisodeOfCare, incoming
     * referrals.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference[] $referralRequest
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIREpisodeOfCare
     */
    public function setReferralRequest(array $referralRequest = [])
    {
        $this->referralRequest = [];
        if ([] === $referralRequest) {
            return $this;
        }
        foreach($referralRequest as $v) {
            if ($v instanceof FHIRReference) {
                $this->addReferralRequest($v);
            } else {
                $this->addReferralRequest(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * The status of the encounter.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * planned | waitlist | active | onhold | finished | cancelled.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIREpisodeOfCareStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of the encounter.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * planned | waitlist | active | onhold | finished | cancelled.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIREpisodeOfCareStatus $status
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIREpisodeOfCare
     */
    public function setStatus(FHIREpisodeOfCareStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * An association between a patient and an organization / healthcare provider(s)
     * during which time encounters may occur. The managing organization assumes a
     * level of responsibility for the patient during this time.
     *
     * The history of statuses that the EpisodeOfCare has been through (without
     * requiring processing the history of the resource).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIREpisodeOfCare\FHIREpisodeOfCareStatusHistory[]
     */
    public function getStatusHistory()
    {
        return $this->statusHistory;
    }

    /**
     * An association between a patient and an organization / healthcare provider(s)
     * during which time encounters may occur. The managing organization assumes a
     * level of responsibility for the patient during this time.
     *
     * The history of statuses that the EpisodeOfCare has been through (without
     * requiring processing the history of the resource).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIREpisodeOfCare\FHIREpisodeOfCareStatusHistory $statusHistory
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIREpisodeOfCare
     */
    public function addStatusHistory(FHIREpisodeOfCareStatusHistory $statusHistory = null)
    {
        $this->statusHistory[] = $statusHistory;
        return $this;
    }

    /**
     * An association between a patient and an organization / healthcare provider(s)
     * during which time encounters may occur. The managing organization assumes a
     * level of responsibility for the patient during this time.
     *
     * The history of statuses that the EpisodeOfCare has been through (without
     * requiring processing the history of the resource).
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIREpisodeOfCare\FHIREpisodeOfCareStatusHistory[] $statusHistory
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIREpisodeOfCare
     */
    public function setStatusHistory(array $statusHistory = [])
    {
        $this->statusHistory = [];
        if ([] === $statusHistory) {
            return $this;
        }
        foreach($statusHistory as $v) {
            if ($v instanceof FHIREpisodeOfCareStatusHistory) {
                $this->addStatusHistory($v);
            } else {
                $this->addStatusHistory(new FHIREpisodeOfCareStatusHistory($v));
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
     * A classification of the type of encounter; e.g. specialist referral, disease
     * management, type of funded care.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A classification of the type of encounter; e.g. specialist referral, disease
     * management, type of funded care.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $type
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIREpisodeOfCare
     */
    public function addType(FHIRCodeableConcept $type = null)
    {
        $this->type[] = $type;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A classification of the type of encounter; e.g. specialist referral, disease
     * management, type of funded care.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[] $type
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIREpisodeOfCare
     */
    public function setType(array $type = [])
    {
        $this->type = [];
        if ([] === $type) {
            return $this;
        }
        foreach($type as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addType($v);
            } else {
                $this->addType(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIREpisodeOfCare $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIREpisodeOfCare
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
                throw new \DomainException(sprintf('FHIREpisodeOfCare::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIREpisodeOfCare::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIREpisodeOfCare;
        } elseif (!is_object($type) || !($type instanceof FHIREpisodeOfCare)) {
            throw new \RuntimeException(sprintf(
                'FHIREpisodeOfCare::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIREpisodeOfCare or null, %s seen.',
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
        if (isset($children->careManager)) {
            $type->setCareManager(FHIRReference::xmlUnserialize($children->careManager));
        }
        if (isset($children->careTeam)) {
            foreach($children->careTeam as $child) {
                $type->addCareTeam(FHIREpisodeOfCareCareTeam::xmlUnserialize($child));
            }
        }
        if (isset($children->condition)) {
            foreach($children->condition as $child) {
                $type->addCondition(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->managingOrganization)) {
            $type->setManagingOrganization(FHIRReference::xmlUnserialize($children->managingOrganization));
        }
        if (isset($children->patient)) {
            $type->setPatient(FHIRReference::xmlUnserialize($children->patient));
        }
        if (isset($children->period)) {
            $type->setPeriod(FHIRPeriod::xmlUnserialize($children->period));
        }
        if (isset($children->referralRequest)) {
            foreach($children->referralRequest as $child) {
                $type->addReferralRequest(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->status)) {
            $type->setStatus(FHIREpisodeOfCareStatus::xmlUnserialize($children->status));
        }
        if (isset($children->statusHistory)) {
            foreach($children->statusHistory as $child) {
                $type->addStatusHistory(FHIREpisodeOfCareStatusHistory::xmlUnserialize($child));
            }
        }
        if (isset($children->type)) {
            foreach($children->type as $child) {
                $type->addType(FHIRCodeableConcept::xmlUnserialize($child));
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

        if (null !== ($v = $this->getCareManager())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CARE_MANAGER, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getCareTeam())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CARE_TEAM, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getCondition())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CONDITION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getManagingOrganization())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MANAGING_ORGANIZATION, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getPatient())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATIENT, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PERIOD, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getReferralRequest())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REFERRAL_REQUEST, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getStatusHistory())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS_HISTORY, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getType())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE, null, $v->_getFHIRXMLNamespace()));
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
        if (null !== ($v = $this->getCareManager())) {
            $a[self::FIELD_CARE_MANAGER] = $v;
        }
        if ([] !== ($vs = $this->getCareTeam())) {
            $a[self::FIELD_CARE_TEAM] = $vs;
        }
        if ([] !== ($vs = $this->getCondition())) {
            $a[self::FIELD_CONDITION] = $vs;
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_IDENTIFIER][] = $v->getValue();
                if ($v->_hasNonValueFieldsDefined()) {
                    if (!isset($a[self::FIELD_IDENTIFIER_EXT])) {
                        $a[self::FIELD_IDENTIFIER_EXT] = [];
                    }
                    $a[self::FIELD_IDENTIFIER_EXT][] = $v;
                }
            }
        }
        if (null !== ($v = $this->getManagingOrganization())) {
            $a[self::FIELD_MANAGING_ORGANIZATION] = $v;
        }
        if (null !== ($v = $this->getPatient())) {
            $a[self::FIELD_PATIENT] = $v;
        }
        if (null !== ($v = $this->getPeriod())) {
            $a[self::FIELD_PERIOD] = $v;
        }
        if ([] !== ($vs = $this->getReferralRequest())) {
            $a[self::FIELD_REFERRAL_REQUEST] = $vs;
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_STATUS_EXT] = $v;
            }
        }
        if ([] !== ($vs = $this->getStatusHistory())) {
            $a[self::FIELD_STATUS_HISTORY] = $vs;
        }
        if ([] !== ($vs = $this->getType())) {
            $a[self::FIELD_TYPE] = $vs;
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