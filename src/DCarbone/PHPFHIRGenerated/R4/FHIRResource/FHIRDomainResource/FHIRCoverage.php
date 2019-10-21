<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 21st, 2019 04:05+0000
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

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageClass;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageCostToBeneficiary;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRFinancialResourceStatusCodes;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * Financial instrument which may be used to reimburse or pay for health care
 * products and services. Includes both insurance and self-payment.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRCoverage
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource
 */
class FHIRCoverage extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_COVERAGE;

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_BENEFICIARY = 'beneficiary';
    const FIELD_CLASS = 'class';
    const FIELD_CLASS_EXT = '_class';
    const FIELD_CONTRACT = 'contract';
    const FIELD_COST_TO_BENEFICIARY = 'costToBeneficiary';
    const FIELD_DEPENDENT = 'dependent';
    const FIELD_DEPENDENT_EXT = '_dependent';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_IDENTIFIER_EXT = '_identifier';
    const FIELD_NETWORK = 'network';
    const FIELD_NETWORK_EXT = '_network';
    const FIELD_ORDER = 'order';
    const FIELD_ORDER_EXT = '_order';
    const FIELD_PAYOR = 'payor';
    const FIELD_PERIOD = 'period';
    const FIELD_POLICY_HOLDER = 'policyHolder';
    const FIELD_RELATIONSHIP = 'relationship';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_SUBROGATION = 'subrogation';
    const FIELD_SUBROGATION_EXT = '_subrogation';
    const FIELD_SUBSCRIBER = 'subscriber';
    const FIELD_SUBSCRIBER_ID = 'subscriberId';
    const FIELD_SUBSCRIBER_ID_EXT = '_subscriberId';
    const FIELD_TYPE = 'type';

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The party who benefits from the insurance coverage; the patient when products
     * and/or services are provided.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    private $beneficiary = null;
    /**
     * Financial instrument which may be used to reimburse or pay for health care
     * products and services. Includes both insurance and self-payment.
     *
     * A suite of underwriter specific classifiers.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageClass[]
     */
    private $class = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The policy(s) which constitute this insurance coverage.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    private $contract = [];
    /**
     * Financial instrument which may be used to reimburse or pay for health care
     * products and services. Includes both insurance and self-payment.
     *
     * A suite of codes indicating the cost category and associated amount which have
     * been detailed in the policy and may have been included on the health card.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageCostToBeneficiary[]
     */
    private $costToBeneficiary = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A unique identifier for a dependent under the coverage.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    private $dependent = null;
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A unique identifier assigned to this coverage.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    private $identifier = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The insurer-specific identifier for the insurer-defined network of providers to
     * which the beneficiary may seek treatment which will be covered at the
     * 'in-network' rate, otherwise 'out of network' terms and conditions apply.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    private $network = null;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The order of applicability of this coverage relative to other coverages which
     * are currently in force. Note, there may be gaps in the numbering and this does
     * not imply primary, secondary etc. as the specific positioning of coverages
     * depends upon the episode of care.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt
     */
    private $order = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The program or plan underwriter or payor including both insurance and
     * non-insurance agreements, such as patient-pay agreements.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    private $payor = [];
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Time period during which the coverage is in force. A missing start date
     * indicates the start date isn't known, a missing end date means the coverage is
     * continuing to be in force.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
     */
    private $period = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The party who 'owns' the insurance policy.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    private $policyHolder = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The relationship of beneficiary (patient) to the subscriber.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    private $relationship = null;
    /**
     * A code specifying the state of the resource instance.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The status of the resource instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRFinancialResourceStatusCodes
     */
    private $status = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * When 'subrogation=true' this insurance instance has been included not for
     * adjudication but to provide insurers with the details to recover costs.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    private $subrogation = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The party who has signed-up for or 'owns' the contractual relationship to the
     * policy or to whom the benefit of the policy for services rendered to them or
     * their family is due.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    private $subscriber = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The insurer assigned ID for the Subscriber.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    private $subscriberId = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The type of coverage: social program, medical plan, accident coverage (workers
     * compensation, auto), group health or payment by an individual or organization.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    private $type = null;

    /**
     * FHIRCoverage Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCoverage::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_BENEFICIARY])) {
            if ($data[self::FIELD_BENEFICIARY] instanceof FHIRReference) {
                $this->setBeneficiary($data[self::FIELD_BENEFICIARY]);
            } else {
                $this->setBeneficiary(new FHIRReference($data[self::FIELD_BENEFICIARY]));
            }
        }
        if (isset($data[self::FIELD_CLASS])) {
            $ext = (isset($data[self::FIELD_CLASS_EXT]) && is_array($data[self::FIELD_CLASS_EXT]))
                ? $data[self::FIELD_CLASS_EXT]
                : null;
            if (is_array($data[self::FIELD_CLASS])) {
                foreach($data[self::FIELD_CLASS] as $i => $v) {
                    if ($v instanceof FHIRCoverageClass) {
                        $this->addClass($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addClass(new FHIRCoverageClass([FHIRCoverageClass::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addClass(new FHIRCoverageClass($v));
                    }
                }
            } elseif ($data[self::FIELD_CLASS] instanceof FHIRCoverageClass) {
                $this->addClass($data[self::FIELD_CLASS]);
            } elseif ($ext && is_scalar($data[self::FIELD_CLASS])) {
                $this->addClass(new FHIRCoverageClass([FHIRCoverageClass::FIELD_VALUE => $data[self::FIELD_CLASS]] + $ext));
            } else {
                $this->addClass(new FHIRCoverageClass($data[self::FIELD_CLASS]));
            }
        }
        if (isset($data[self::FIELD_CONTRACT])) {
            if (is_array($data[self::FIELD_CONTRACT])) {
                foreach($data[self::FIELD_CONTRACT] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addContract($v);
                    } else {
                        $this->addContract(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_CONTRACT] instanceof FHIRReference) {
                $this->addContract($data[self::FIELD_CONTRACT]);
            } else {
                $this->addContract(new FHIRReference($data[self::FIELD_CONTRACT]));
            }
        }
        if (isset($data[self::FIELD_COST_TO_BENEFICIARY])) {
            if (is_array($data[self::FIELD_COST_TO_BENEFICIARY])) {
                foreach($data[self::FIELD_COST_TO_BENEFICIARY] as $v) {
                    if ($v instanceof FHIRCoverageCostToBeneficiary) {
                        $this->addCostToBeneficiary($v);
                    } else {
                        $this->addCostToBeneficiary(new FHIRCoverageCostToBeneficiary($v));
                    }
                }
            } else if ($data[self::FIELD_COST_TO_BENEFICIARY] instanceof FHIRCoverageCostToBeneficiary) {
                $this->addCostToBeneficiary($data[self::FIELD_COST_TO_BENEFICIARY]);
            } else {
                $this->addCostToBeneficiary(new FHIRCoverageCostToBeneficiary($data[self::FIELD_COST_TO_BENEFICIARY]));
            }
        }
        if (isset($data[self::FIELD_DEPENDENT])) {
            $ext = (isset($data[self::FIELD_DEPENDENT_EXT]) && is_array($data[self::FIELD_DEPENDENT_EXT]))
                ? $data[self::FIELD_DEPENDENT_EXT]
                : null;
            if ($data[self::FIELD_DEPENDENT] instanceof FHIRString) {
                $this->setDependent($data[self::FIELD_DEPENDENT]);
            } elseif ($ext && is_scalar($data[self::FIELD_DEPENDENT])) {
                $this->setDependent(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_DEPENDENT]] + $ext));
            } else {
                $this->setDependent(new FHIRString($data[self::FIELD_DEPENDENT]));
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
        if (isset($data[self::FIELD_NETWORK])) {
            $ext = (isset($data[self::FIELD_NETWORK_EXT]) && is_array($data[self::FIELD_NETWORK_EXT]))
                ? $data[self::FIELD_NETWORK_EXT]
                : null;
            if ($data[self::FIELD_NETWORK] instanceof FHIRString) {
                $this->setNetwork($data[self::FIELD_NETWORK]);
            } elseif ($ext && is_scalar($data[self::FIELD_NETWORK])) {
                $this->setNetwork(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_NETWORK]] + $ext));
            } else {
                $this->setNetwork(new FHIRString($data[self::FIELD_NETWORK]));
            }
        }
        if (isset($data[self::FIELD_ORDER])) {
            $ext = (isset($data[self::FIELD_ORDER_EXT]) && is_array($data[self::FIELD_ORDER_EXT]))
                ? $data[self::FIELD_ORDER_EXT]
                : null;
            if ($data[self::FIELD_ORDER] instanceof FHIRPositiveInt) {
                $this->setOrder($data[self::FIELD_ORDER]);
            } elseif ($ext && is_scalar($data[self::FIELD_ORDER])) {
                $this->setOrder(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $data[self::FIELD_ORDER]] + $ext));
            } else {
                $this->setOrder(new FHIRPositiveInt($data[self::FIELD_ORDER]));
            }
        }
        if (isset($data[self::FIELD_PAYOR])) {
            if (is_array($data[self::FIELD_PAYOR])) {
                foreach($data[self::FIELD_PAYOR] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addPayor($v);
                    } else {
                        $this->addPayor(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_PAYOR] instanceof FHIRReference) {
                $this->addPayor($data[self::FIELD_PAYOR]);
            } else {
                $this->addPayor(new FHIRReference($data[self::FIELD_PAYOR]));
            }
        }
        if (isset($data[self::FIELD_PERIOD])) {
            if ($data[self::FIELD_PERIOD] instanceof FHIRPeriod) {
                $this->setPeriod($data[self::FIELD_PERIOD]);
            } else {
                $this->setPeriod(new FHIRPeriod($data[self::FIELD_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_POLICY_HOLDER])) {
            if ($data[self::FIELD_POLICY_HOLDER] instanceof FHIRReference) {
                $this->setPolicyHolder($data[self::FIELD_POLICY_HOLDER]);
            } else {
                $this->setPolicyHolder(new FHIRReference($data[self::FIELD_POLICY_HOLDER]));
            }
        }
        if (isset($data[self::FIELD_RELATIONSHIP])) {
            if ($data[self::FIELD_RELATIONSHIP] instanceof FHIRCodeableConcept) {
                $this->setRelationship($data[self::FIELD_RELATIONSHIP]);
            } else {
                $this->setRelationship(new FHIRCodeableConcept($data[self::FIELD_RELATIONSHIP]));
            }
        }
        if (isset($data[self::FIELD_STATUS])) {
            $ext = (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT]))
                ? $data[self::FIELD_STATUS_EXT]
                : null;
            if ($data[self::FIELD_STATUS] instanceof FHIRFinancialResourceStatusCodes) {
                $this->setStatus($data[self::FIELD_STATUS]);
            } elseif ($ext && is_scalar($data[self::FIELD_STATUS])) {
                $this->setStatus(new FHIRFinancialResourceStatusCodes([FHIRFinancialResourceStatusCodes::FIELD_VALUE => $data[self::FIELD_STATUS]] + $ext));
            } else {
                $this->setStatus(new FHIRFinancialResourceStatusCodes($data[self::FIELD_STATUS]));
            }
        }
        if (isset($data[self::FIELD_SUBROGATION])) {
            $ext = (isset($data[self::FIELD_SUBROGATION_EXT]) && is_array($data[self::FIELD_SUBROGATION_EXT]))
                ? $data[self::FIELD_SUBROGATION_EXT]
                : null;
            if ($data[self::FIELD_SUBROGATION] instanceof FHIRBoolean) {
                $this->setSubrogation($data[self::FIELD_SUBROGATION]);
            } elseif ($ext && is_scalar($data[self::FIELD_SUBROGATION])) {
                $this->setSubrogation(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_SUBROGATION]] + $ext));
            } else {
                $this->setSubrogation(new FHIRBoolean($data[self::FIELD_SUBROGATION]));
            }
        }
        if (isset($data[self::FIELD_SUBSCRIBER])) {
            if ($data[self::FIELD_SUBSCRIBER] instanceof FHIRReference) {
                $this->setSubscriber($data[self::FIELD_SUBSCRIBER]);
            } else {
                $this->setSubscriber(new FHIRReference($data[self::FIELD_SUBSCRIBER]));
            }
        }
        if (isset($data[self::FIELD_SUBSCRIBER_ID])) {
            $ext = (isset($data[self::FIELD_SUBSCRIBER_ID_EXT]) && is_array($data[self::FIELD_SUBSCRIBER_ID_EXT]))
                ? $data[self::FIELD_SUBSCRIBER_ID_EXT]
                : null;
            if ($data[self::FIELD_SUBSCRIBER_ID] instanceof FHIRString) {
                $this->setSubscriberId($data[self::FIELD_SUBSCRIBER_ID]);
            } elseif ($ext && is_scalar($data[self::FIELD_SUBSCRIBER_ID])) {
                $this->setSubscriberId(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_SUBSCRIBER_ID]] + $ext));
            } else {
                $this->setSubscriberId(new FHIRString($data[self::FIELD_SUBSCRIBER_ID]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
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
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCoverage
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
        return "<Coverage{$xmlns}></Coverage>";
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
     * The party who benefits from the insurance coverage; the patient when products
     * and/or services are provided.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getBeneficiary()
    {
        return $this->beneficiary;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The party who benefits from the insurance coverage; the patient when products
     * and/or services are provided.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $beneficiary
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCoverage
     */
    public function setBeneficiary(FHIRReference $beneficiary = null)
    {
        $this->beneficiary = $beneficiary;
        return $this;
    }

    /**
     * Financial instrument which may be used to reimburse or pay for health care
     * products and services. Includes both insurance and self-payment.
     *
     * A suite of underwriter specific classifiers.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageClass[]
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Financial instrument which may be used to reimburse or pay for health care
     * products and services. Includes both insurance and self-payment.
     *
     * A suite of underwriter specific classifiers.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageClass $class
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCoverage
     */
    public function addClass(FHIRCoverageClass $class = null)
    {
        $this->class[] = $class;
        return $this;
    }

    /**
     * Financial instrument which may be used to reimburse or pay for health care
     * products and services. Includes both insurance and self-payment.
     *
     * A suite of underwriter specific classifiers.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageClass[] $class
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCoverage
     */
    public function setClass(array $class = [])
    {
        $this->class = [];
        if ([] === $class) {
            return $this;
        }
        foreach($class as $v) {
            if ($v instanceof FHIRCoverageClass) {
                $this->addClass($v);
            } else {
                $this->addClass(new FHIRCoverageClass($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The policy(s) which constitute this insurance coverage.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getContract()
    {
        return $this->contract;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The policy(s) which constitute this insurance coverage.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $contract
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCoverage
     */
    public function addContract(FHIRReference $contract = null)
    {
        $this->contract[] = $contract;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The policy(s) which constitute this insurance coverage.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $contract
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCoverage
     */
    public function setContract(array $contract = [])
    {
        $this->contract = [];
        if ([] === $contract) {
            return $this;
        }
        foreach($contract as $v) {
            if ($v instanceof FHIRReference) {
                $this->addContract($v);
            } else {
                $this->addContract(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * Financial instrument which may be used to reimburse or pay for health care
     * products and services. Includes both insurance and self-payment.
     *
     * A suite of codes indicating the cost category and associated amount which have
     * been detailed in the policy and may have been included on the health card.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageCostToBeneficiary[]
     */
    public function getCostToBeneficiary()
    {
        return $this->costToBeneficiary;
    }

    /**
     * Financial instrument which may be used to reimburse or pay for health care
     * products and services. Includes both insurance and self-payment.
     *
     * A suite of codes indicating the cost category and associated amount which have
     * been detailed in the policy and may have been included on the health card.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageCostToBeneficiary $costToBeneficiary
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCoverage
     */
    public function addCostToBeneficiary(FHIRCoverageCostToBeneficiary $costToBeneficiary = null)
    {
        $this->costToBeneficiary[] = $costToBeneficiary;
        return $this;
    }

    /**
     * Financial instrument which may be used to reimburse or pay for health care
     * products and services. Includes both insurance and self-payment.
     *
     * A suite of codes indicating the cost category and associated amount which have
     * been detailed in the policy and may have been included on the health card.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageCostToBeneficiary[] $costToBeneficiary
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCoverage
     */
    public function setCostToBeneficiary(array $costToBeneficiary = [])
    {
        $this->costToBeneficiary = [];
        if ([] === $costToBeneficiary) {
            return $this;
        }
        foreach($costToBeneficiary as $v) {
            if ($v instanceof FHIRCoverageCostToBeneficiary) {
                $this->addCostToBeneficiary($v);
            } else {
                $this->addCostToBeneficiary(new FHIRCoverageCostToBeneficiary($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A unique identifier for a dependent under the coverage.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getDependent()
    {
        return $this->dependent;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A unique identifier for a dependent under the coverage.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $dependent
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCoverage
     */
    public function setDependent($dependent = null)
    {
        if (null === $dependent) {
            $this->dependent = null;
            return $this;
        }
        if ($dependent instanceof FHIRString) {
            $this->dependent = $dependent;
            return $this;
        }
        $this->dependent = new FHIRString($dependent);
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A unique identifier assigned to this coverage.
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
     * A unique identifier assigned to this coverage.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier $identifier
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCoverage
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
     * A unique identifier assigned to this coverage.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[] $identifier
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCoverage
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
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The insurer-specific identifier for the insurer-defined network of providers to
     * which the beneficiary may seek treatment which will be covered at the
     * 'in-network' rate, otherwise 'out of network' terms and conditions apply.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The insurer-specific identifier for the insurer-defined network of providers to
     * which the beneficiary may seek treatment which will be covered at the
     * 'in-network' rate, otherwise 'out of network' terms and conditions apply.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $network
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCoverage
     */
    public function setNetwork($network = null)
    {
        if (null === $network) {
            $this->network = null;
            return $this;
        }
        if ($network instanceof FHIRString) {
            $this->network = $network;
            return $this;
        }
        $this->network = new FHIRString($network);
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The order of applicability of this coverage relative to other coverages which
     * are currently in force. Note, there may be gaps in the numbering and this does
     * not imply primary, secondary etc. as the specific positioning of coverages
     * depends upon the episode of care.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The order of applicability of this coverage relative to other coverages which
     * are currently in force. Note, there may be gaps in the numbering and this does
     * not imply primary, secondary etc. as the specific positioning of coverages
     * depends upon the episode of care.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPositiveInt $order
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCoverage
     */
    public function setOrder($order = null)
    {
        if (null === $order) {
            $this->order = null;
            return $this;
        }
        if ($order instanceof FHIRPositiveInt) {
            $this->order = $order;
            return $this;
        }
        $this->order = new FHIRPositiveInt($order);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The program or plan underwriter or payor including both insurance and
     * non-insurance agreements, such as patient-pay agreements.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getPayor()
    {
        return $this->payor;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The program or plan underwriter or payor including both insurance and
     * non-insurance agreements, such as patient-pay agreements.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $payor
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCoverage
     */
    public function addPayor(FHIRReference $payor = null)
    {
        $this->payor[] = $payor;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The program or plan underwriter or payor including both insurance and
     * non-insurance agreements, such as patient-pay agreements.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $payor
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCoverage
     */
    public function setPayor(array $payor = [])
    {
        $this->payor = [];
        if ([] === $payor) {
            return $this;
        }
        foreach($payor as $v) {
            if ($v instanceof FHIRReference) {
                $this->addPayor($v);
            } else {
                $this->addPayor(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Time period during which the coverage is in force. A missing start date
     * indicates the start date isn't known, a missing end date means the coverage is
     * continuing to be in force.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod
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
     * Time period during which the coverage is in force. A missing start date
     * indicates the start date isn't known, a missing end date means the coverage is
     * continuing to be in force.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRPeriod $period
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCoverage
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
     * The party who 'owns' the insurance policy.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getPolicyHolder()
    {
        return $this->policyHolder;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The party who 'owns' the insurance policy.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $policyHolder
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCoverage
     */
    public function setPolicyHolder(FHIRReference $policyHolder = null)
    {
        $this->policyHolder = $policyHolder;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The relationship of beneficiary (patient) to the subscriber.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getRelationship()
    {
        return $this->relationship;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The relationship of beneficiary (patient) to the subscriber.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $relationship
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCoverage
     */
    public function setRelationship(FHIRCodeableConcept $relationship = null)
    {
        $this->relationship = $relationship;
        return $this;
    }

    /**
     * A code specifying the state of the resource instance.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The status of the resource instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRFinancialResourceStatusCodes
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * A code specifying the state of the resource instance.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The status of the resource instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRFinancialResourceStatusCodes $status
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCoverage
     */
    public function setStatus(FHIRFinancialResourceStatusCodes $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * When 'subrogation=true' this insurance instance has been included not for
     * adjudication but to provide insurers with the details to recover costs.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    public function getSubrogation()
    {
        return $this->subrogation;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * When 'subrogation=true' this insurance instance has been included not for
     * adjudication but to provide insurers with the details to recover costs.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean $subrogation
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCoverage
     */
    public function setSubrogation($subrogation = null)
    {
        if (null === $subrogation) {
            $this->subrogation = null;
            return $this;
        }
        if ($subrogation instanceof FHIRBoolean) {
            $this->subrogation = $subrogation;
            return $this;
        }
        $this->subrogation = new FHIRBoolean($subrogation);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The party who has signed-up for or 'owns' the contractual relationship to the
     * policy or to whom the benefit of the policy for services rendered to them or
     * their family is due.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getSubscriber()
    {
        return $this->subscriber;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The party who has signed-up for or 'owns' the contractual relationship to the
     * policy or to whom the benefit of the policy for services rendered to them or
     * their family is due.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $subscriber
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCoverage
     */
    public function setSubscriber(FHIRReference $subscriber = null)
    {
        $this->subscriber = $subscriber;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The insurer assigned ID for the Subscriber.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getSubscriberId()
    {
        return $this->subscriberId;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The insurer assigned ID for the Subscriber.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $subscriberId
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCoverage
     */
    public function setSubscriberId($subscriberId = null)
    {
        if (null === $subscriberId) {
            $this->subscriberId = null;
            return $this;
        }
        if ($subscriberId instanceof FHIRString) {
            $this->subscriberId = $subscriberId;
            return $this;
        }
        $this->subscriberId = new FHIRString($subscriberId);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The type of coverage: social program, medical plan, accident coverage (workers
     * compensation, auto), group health or payment by an individual or organization.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
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
     * The type of coverage: social program, medical plan, accident coverage (workers
     * compensation, auto), group health or payment by an individual or organization.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $type
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCoverage
     */
    public function setType(FHIRCodeableConcept $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCoverage $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCoverage
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
                throw new \DomainException(sprintf('FHIRCoverage::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRCoverage::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRCoverage;
        } elseif (!is_object($type) || !($type instanceof FHIRCoverage)) {
            throw new \RuntimeException(sprintf(
                'FHIRCoverage::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRCoverage or null, %s seen.',
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
        if (isset($children->beneficiary)) {
            $type->setBeneficiary(FHIRReference::xmlUnserialize($children->beneficiary));
        }
        if (isset($children->class)) {
            foreach($children->class as $child) {
                $type->addClass(FHIRCoverageClass::xmlUnserialize($child));
            }
        }
        if (isset($children->contract)) {
            foreach($children->contract as $child) {
                $type->addContract(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->costToBeneficiary)) {
            foreach($children->costToBeneficiary as $child) {
                $type->addCostToBeneficiary(FHIRCoverageCostToBeneficiary::xmlUnserialize($child));
            }
        }
        if (isset($attributes->dependent)) {
            $type->setDependent((string)$attributes->dependent);
        }
        if (isset($children->dependent)) {
            $type->setDependent(FHIRString::xmlUnserialize($children->dependent));
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($attributes->network)) {
            $type->setNetwork((string)$attributes->network);
        }
        if (isset($children->network)) {
            $type->setNetwork(FHIRString::xmlUnserialize($children->network));
        }
        if (isset($attributes->order)) {
            $type->setOrder((string)$attributes->order);
        }
        if (isset($children->order)) {
            $type->setOrder(FHIRPositiveInt::xmlUnserialize($children->order));
        }
        if (isset($children->payor)) {
            foreach($children->payor as $child) {
                $type->addPayor(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->period)) {
            $type->setPeriod(FHIRPeriod::xmlUnserialize($children->period));
        }
        if (isset($children->policyHolder)) {
            $type->setPolicyHolder(FHIRReference::xmlUnserialize($children->policyHolder));
        }
        if (isset($children->relationship)) {
            $type->setRelationship(FHIRCodeableConcept::xmlUnserialize($children->relationship));
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRFinancialResourceStatusCodes::xmlUnserialize($children->status));
        }
        if (isset($attributes->subrogation)) {
            $type->setSubrogation((string)$attributes->subrogation);
        }
        if (isset($children->subrogation)) {
            $type->setSubrogation(FHIRBoolean::xmlUnserialize($children->subrogation));
        }
        if (isset($children->subscriber)) {
            $type->setSubscriber(FHIRReference::xmlUnserialize($children->subscriber));
        }
        if (isset($attributes->subscriberId)) {
            $type->setSubscriberId((string)$attributes->subscriberId);
        }
        if (isset($children->subscriberId)) {
            $type->setSubscriberId(FHIRString::xmlUnserialize($children->subscriberId));
        }
        if (isset($children->type)) {
            $type->setType(FHIRCodeableConcept::xmlUnserialize($children->type));
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

        if (null !== ($v = $this->getBeneficiary())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_BENEFICIARY, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getClass())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CLASS, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getContract())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CONTRACT, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getCostToBeneficiary())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_COST_TO_BENEFICIARY, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getDependent())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEPENDENT, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getNetwork())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NETWORK, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getOrder())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ORDER, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getPayor())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PAYOR, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PERIOD, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getPolicyHolder())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_POLICY_HOLDER, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getRelationship())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RELATIONSHIP, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSubrogation())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUBROGATION, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getSubscriber())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUBSCRIBER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSubscriberId())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUBSCRIBER_ID, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getBeneficiary())) {
            $a[self::FIELD_BENEFICIARY] = $v;
        }
        if ([] !== ($vs = $this->getClass())) {
            $a[self::FIELD_CLASS] = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_CLASS][] = $v->getValue();
                if ($v->_hasNonValueFieldsDefined()) {
                    if (!isset($a[self::FIELD_CLASS_EXT])) {
                        $a[self::FIELD_CLASS_EXT] = [];
                    }
                    $a[self::FIELD_CLASS_EXT][] = $v;
                }
            }
        }
        if ([] !== ($vs = $this->getContract())) {
            $a[self::FIELD_CONTRACT] = $vs;
        }
        if ([] !== ($vs = $this->getCostToBeneficiary())) {
            $a[self::FIELD_COST_TO_BENEFICIARY] = $vs;
        }
        if (null !== ($v = $this->getDependent())) {
            $a[self::FIELD_DEPENDENT] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_DEPENDENT_EXT] = $v;
            }
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
        if (null !== ($v = $this->getNetwork())) {
            $a[self::FIELD_NETWORK] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_NETWORK_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getOrder())) {
            $a[self::FIELD_ORDER] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_ORDER_EXT] = $v;
            }
        }
        if ([] !== ($vs = $this->getPayor())) {
            $a[self::FIELD_PAYOR] = $vs;
        }
        if (null !== ($v = $this->getPeriod())) {
            $a[self::FIELD_PERIOD] = $v;
        }
        if (null !== ($v = $this->getPolicyHolder())) {
            $a[self::FIELD_POLICY_HOLDER] = $v;
        }
        if (null !== ($v = $this->getRelationship())) {
            $a[self::FIELD_RELATIONSHIP] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_STATUS_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getSubrogation())) {
            $a[self::FIELD_SUBROGATION] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_SUBROGATION_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getSubscriber())) {
            $a[self::FIELD_SUBSCRIBER] = $v;
        }
        if (null !== ($v = $this->getSubscriberId())) {
            $a[self::FIELD_SUBSCRIBER_ID] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_SUBSCRIBER_ID_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v;
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