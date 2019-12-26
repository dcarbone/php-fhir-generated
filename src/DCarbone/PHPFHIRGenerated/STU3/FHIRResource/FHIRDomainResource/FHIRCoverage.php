<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:43+0000
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageGrouping;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRFinancialResourceStatusCodes;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPositiveInt;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * Financial instrument which may be used to reimburse or pay for health care
 * products and services.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRCoverage
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource
 */
class FHIRCoverage extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_COVERAGE;
    const FIELD_BENEFICIARY = 'beneficiary';
    const FIELD_CONTRACT = 'contract';
    const FIELD_DEPENDENT = 'dependent';
    const FIELD_DEPENDENT_EXT = '_dependent';
    const FIELD_GROUPING = 'grouping';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_NETWORK = 'network';
    const FIELD_NETWORK_EXT = '_network';
    const FIELD_ORDER = 'order';
    const FIELD_ORDER_EXT = '_order';
    const FIELD_PAYOR = 'payor';
    const FIELD_PERIOD = 'period';
    const FIELD_POLICY_HOLDER = 'policyHolder';
    const FIELD_RELATIONSHIP = 'relationship';
    const FIELD_SEQUENCE = 'sequence';
    const FIELD_SEQUENCE_EXT = '_sequence';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_SUBSCRIBER = 'subscriber';
    const FIELD_SUBSCRIBER_ID = 'subscriberId';
    const FIELD_SUBSCRIBER_ID_EXT = '_subscriberId';
    const FIELD_TYPE = 'type';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The party who benefits from the insurance coverage., the patient when services
     * are provided.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $beneficiary = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The policy(s) which constitute this insurance coverage.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    protected $contract = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A unique identifier for a dependent under the coverage.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $dependent = null;

    /**
     * Financial instrument which may be used to reimburse or pay for health care
     * products and services.
     *
     * A suite of underwrite specific classifiers, for example may be used to identify
     * a class of coverage or employer group, Policy, Plan.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageGrouping
     */
    protected $grouping = null;

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The main (and possibly only) identifier for the coverage - often referred to as
     * a Member Id, Certificate number, Personal Health Number or Case ID. May be
     * constructed as the concatination of the Coverage.SubscriberID and the
     * Coverage.dependant.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier[]
     */
    protected $identifier = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The insurer-specific identifier for the insurer-defined network of providers to
     * which the beneficiary may seek treatment which will be covered at the
     * 'in-network' rate, otherwise 'out of network' terms and conditions apply.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $network = null;

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The order of applicability of this coverage relative to other coverages which
     * are currently inforce. Note, there may be gaps in the numbering and this does
     * not imply primary, secondard etc. as the specific positioning of coverages
     * depends upon the episode of care.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPositiveInt
     */
    protected $order = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The program or plan underwriter or payor including both insurance and
     * non-insurance agreements, such as patient-pay agreements. May provide multiple
     * identifiers such as insurance company identifier or business identifier (BIN
     * number).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    protected $payor = [];

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Time period during which the coverage is in force. A missing start date
     * indicates the start date isn't known, a missing end date means the coverage is
     * continuing to be in force.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod
     */
    protected $period = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The party who 'owns' the insurance policy, may be an individual, corporation or
     * the subscriber's employer.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $policyHolder = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The relationship of beneficiary (patient) to the subscriber.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    protected $relationship = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An optional counter for a particular instance of the identified coverage which
     * increments upon each renewal.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $sequence = null;

    /**
     * A code specifying the state of the resource instance.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the resource instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRFinancialResourceStatusCodes
     */
    protected $status = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The party who has signed-up for or 'owns' the contractual relationship to the
     * policy or to whom the benefit of the policy for services rendered to them or
     * their family is due.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $subscriber = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The insurer assigned ID for the Subscriber.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $subscriberId = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of coverage: social program, medical plan, accident coverage (workers
     * compensation, auto), group health or payment by an individual or organization.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    protected $type = null;

    /**
     * Validation map for fields in type Coverage
     * @var array
     */
    private static $_validationRules = [    ];

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
        if (isset($data[self::FIELD_CONTRACT])) {
            if (is_array($data[self::FIELD_CONTRACT])) {
                foreach($data[self::FIELD_CONTRACT] as $v) {
                    if (null === $v) {
                        continue;
                    }
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
        if (isset($data[self::FIELD_DEPENDENT]) || isset($data[self::FIELD_DEPENDENT_EXT])) {
            if (isset($data[self::FIELD_DEPENDENT])) {
                $value = $data[self::FIELD_DEPENDENT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DEPENDENT_EXT]) && is_array($data[self::FIELD_DEPENDENT_EXT])) {
                $ext = $data[self::FIELD_DEPENDENT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setDependent($value);
                } else if (is_array($value)) {
                    $this->setDependent(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setDependent(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDependent(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_GROUPING])) {
            if ($data[self::FIELD_GROUPING] instanceof FHIRCoverageGrouping) {
                $this->setGrouping($data[self::FIELD_GROUPING]);
            } else {
                $this->setGrouping(new FHIRCoverageGrouping($data[self::FIELD_GROUPING]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $v) {
                    if (null === $v) {
                        continue;
                    }
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
        if (isset($data[self::FIELD_NETWORK]) || isset($data[self::FIELD_NETWORK_EXT])) {
            if (isset($data[self::FIELD_NETWORK])) {
                $value = $data[self::FIELD_NETWORK];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_NETWORK_EXT]) && is_array($data[self::FIELD_NETWORK_EXT])) {
                $ext = $data[self::FIELD_NETWORK_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setNetwork($value);
                } else if (is_array($value)) {
                    $this->setNetwork(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setNetwork(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setNetwork(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_ORDER]) || isset($data[self::FIELD_ORDER_EXT])) {
            if (isset($data[self::FIELD_ORDER])) {
                $value = $data[self::FIELD_ORDER];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_ORDER_EXT]) && is_array($data[self::FIELD_ORDER_EXT])) {
                $ext = $data[self::FIELD_ORDER_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->setOrder($value);
                } else if (is_array($value)) {
                    $this->setOrder(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->setOrder(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setOrder(new FHIRPositiveInt($ext));
            }
        }
        if (isset($data[self::FIELD_PAYOR])) {
            if (is_array($data[self::FIELD_PAYOR])) {
                foreach($data[self::FIELD_PAYOR] as $v) {
                    if (null === $v) {
                        continue;
                    }
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
        if (isset($data[self::FIELD_SEQUENCE]) || isset($data[self::FIELD_SEQUENCE_EXT])) {
            if (isset($data[self::FIELD_SEQUENCE])) {
                $value = $data[self::FIELD_SEQUENCE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_SEQUENCE_EXT]) && is_array($data[self::FIELD_SEQUENCE_EXT])) {
                $ext = $data[self::FIELD_SEQUENCE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setSequence($value);
                } else if (is_array($value)) {
                    $this->setSequence(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setSequence(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setSequence(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_STATUS]) || isset($data[self::FIELD_STATUS_EXT])) {
            if (isset($data[self::FIELD_STATUS])) {
                $value = $data[self::FIELD_STATUS];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])) {
                $ext = $data[self::FIELD_STATUS_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRFinancialResourceStatusCodes) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIRFinancialResourceStatusCodes(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIRFinancialResourceStatusCodes([FHIRFinancialResourceStatusCodes::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setStatus(new FHIRFinancialResourceStatusCodes($ext));
            }
        }
        if (isset($data[self::FIELD_SUBSCRIBER])) {
            if ($data[self::FIELD_SUBSCRIBER] instanceof FHIRReference) {
                $this->setSubscriber($data[self::FIELD_SUBSCRIBER]);
            } else {
                $this->setSubscriber(new FHIRReference($data[self::FIELD_SUBSCRIBER]));
            }
        }
        if (isset($data[self::FIELD_SUBSCRIBER_ID]) || isset($data[self::FIELD_SUBSCRIBER_ID_EXT])) {
            if (isset($data[self::FIELD_SUBSCRIBER_ID])) {
                $value = $data[self::FIELD_SUBSCRIBER_ID];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_SUBSCRIBER_ID_EXT]) && is_array($data[self::FIELD_SUBSCRIBER_ID_EXT])) {
                $ext = $data[self::FIELD_SUBSCRIBER_ID_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setSubscriberId($value);
                } else if (is_array($value)) {
                    $this->setSubscriberId(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setSubscriberId(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setSubscriberId(new FHIRString($ext));
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The party who benefits from the insurance coverage., the patient when services
     * are provided.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getBeneficiary()
    {
        return $this->beneficiary;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The party who benefits from the insurance coverage., the patient when services
     * are provided.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $beneficiary
     * @return static
     */
    public function setBeneficiary(FHIRReference $beneficiary = null)
    {
        $this->beneficiary = $beneficiary;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The policy(s) which constitute this insurance coverage.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    public function getContract()
    {
        return $this->contract;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The policy(s) which constitute this insurance coverage.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $contract
     * @return static
     */
    public function addContract(FHIRReference $contract = null)
    {
        $this->contract[] = $contract;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The policy(s) which constitute this insurance coverage.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[] $contract
     * @return static
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
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A unique identifier for a dependent under the coverage.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getDependent()
    {
        return $this->dependent;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A unique identifier for a dependent under the coverage.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $dependent
     * @return static
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
     * Financial instrument which may be used to reimburse or pay for health care
     * products and services.
     *
     * A suite of underwrite specific classifiers, for example may be used to identify
     * a class of coverage or employer group, Policy, Plan.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageGrouping
     */
    public function getGrouping()
    {
        return $this->grouping;
    }

    /**
     * Financial instrument which may be used to reimburse or pay for health care
     * products and services.
     *
     * A suite of underwrite specific classifiers, for example may be used to identify
     * a class of coverage or employer group, Policy, Plan.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageGrouping $grouping
     * @return static
     */
    public function setGrouping(FHIRCoverageGrouping $grouping = null)
    {
        $this->grouping = $grouping;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The main (and possibly only) identifier for the coverage - often referred to as
     * a Member Id, Certificate number, Personal Health Number or Case ID. May be
     * constructed as the concatination of the Coverage.SubscriberID and the
     * Coverage.dependant.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The main (and possibly only) identifier for the coverage - often referred to as
     * a Member Id, Certificate number, Personal Health Number or Case ID. May be
     * constructed as the concatination of the Coverage.SubscriberID and the
     * Coverage.dependant.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The main (and possibly only) identifier for the coverage - often referred to as
     * a Member Id, Certificate number, Personal Health Number or Case ID. May be
     * constructed as the concatination of the Coverage.SubscriberID and the
     * Coverage.dependant.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier[] $identifier
     * @return static
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
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The insurer-specific identifier for the insurer-defined network of providers to
     * which the beneficiary may seek treatment which will be covered at the
     * 'in-network' rate, otherwise 'out of network' terms and conditions apply.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The insurer-specific identifier for the insurer-defined network of providers to
     * which the beneficiary may seek treatment which will be covered at the
     * 'in-network' rate, otherwise 'out of network' terms and conditions apply.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $network
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The order of applicability of this coverage relative to other coverages which
     * are currently inforce. Note, there may be gaps in the numbering and this does
     * not imply primary, secondard etc. as the specific positioning of coverages
     * depends upon the episode of care.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPositiveInt
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The order of applicability of this coverage relative to other coverages which
     * are currently inforce. Note, there may be gaps in the numbering and this does
     * not imply primary, secondard etc. as the specific positioning of coverages
     * depends upon the episode of care.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPositiveInt $order
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The program or plan underwriter or payor including both insurance and
     * non-insurance agreements, such as patient-pay agreements. May provide multiple
     * identifiers such as insurance company identifier or business identifier (BIN
     * number).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[]
     */
    public function getPayor()
    {
        return $this->payor;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The program or plan underwriter or payor including both insurance and
     * non-insurance agreements, such as patient-pay agreements. May provide multiple
     * identifiers such as insurance company identifier or business identifier (BIN
     * number).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $payor
     * @return static
     */
    public function addPayor(FHIRReference $payor = null)
    {
        $this->payor[] = $payor;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The program or plan underwriter or payor including both insurance and
     * non-insurance agreements, such as patient-pay agreements. May provide multiple
     * identifiers such as insurance company identifier or business identifier (BIN
     * number).
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference[] $payor
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Time period during which the coverage is in force. A missing start date
     * indicates the start date isn't known, a missing end date means the coverage is
     * continuing to be in force.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Time period during which the coverage is in force. A missing start date
     * indicates the start date isn't known, a missing end date means the coverage is
     * continuing to be in force.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod $period
     * @return static
     */
    public function setPeriod(FHIRPeriod $period = null)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The party who 'owns' the insurance policy, may be an individual, corporation or
     * the subscriber's employer.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getPolicyHolder()
    {
        return $this->policyHolder;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The party who 'owns' the insurance policy, may be an individual, corporation or
     * the subscriber's employer.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $policyHolder
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The relationship of beneficiary (patient) to the subscriber.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getRelationship()
    {
        return $this->relationship;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The relationship of beneficiary (patient) to the subscriber.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $relationship
     * @return static
     */
    public function setRelationship(FHIRCodeableConcept $relationship = null)
    {
        $this->relationship = $relationship;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An optional counter for a particular instance of the identified coverage which
     * increments upon each renewal.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An optional counter for a particular instance of the identified coverage which
     * increments upon each renewal.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $sequence
     * @return static
     */
    public function setSequence($sequence = null)
    {
        if (null === $sequence) {
            $this->sequence = null;
            return $this;
        }
        if ($sequence instanceof FHIRString) {
            $this->sequence = $sequence;
            return $this;
        }
        $this->sequence = new FHIRString($sequence);
        return $this;
    }

    /**
     * A code specifying the state of the resource instance.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the resource instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRFinancialResourceStatusCodes
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * A code specifying the state of the resource instance.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the resource instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRFinancialResourceStatusCodes $status
     * @return static
     */
    public function setStatus(FHIRFinancialResourceStatusCodes $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The party who has signed-up for or 'owns' the contractual relationship to the
     * policy or to whom the benefit of the policy for services rendered to them or
     * their family is due.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getSubscriber()
    {
        return $this->subscriber;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The party who has signed-up for or 'owns' the contractual relationship to the
     * policy or to whom the benefit of the policy for services rendered to them or
     * their family is due.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $subscriber
     * @return static
     */
    public function setSubscriber(FHIRReference $subscriber = null)
    {
        $this->subscriber = $subscriber;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The insurer assigned ID for the Subscriber.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getSubscriberId()
    {
        return $this->subscriberId;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The insurer assigned ID for the Subscriber.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $subscriberId
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of coverage: social program, medical plan, accident coverage (workers
     * compensation, auto), group health or payment by an individual or organization.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of coverage: social program, medical plan, accident coverage (workers
     * compensation, auto), group health or payment by an individual or organization.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $type
     * @return static
     */
    public function setType(FHIRCodeableConcept $type = null)
    {
        $this->type = $type;
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
        if (null !== ($v = $this->getBeneficiary())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_BENEFICIARY] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getContract())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CONTRACT, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getDependent())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEPENDENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getGrouping())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_GROUPING] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getNetwork())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NETWORK] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOrder())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ORDER] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getPayor())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PAYOR, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getPeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PERIOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPolicyHolder())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_POLICY_HOLDER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRelationship())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RELATIONSHIP] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSequence())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SEQUENCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSubscriber())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBSCRIBER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSubscriberId())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBSCRIBER_ID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_BENEFICIARY])) {
            $v = $this->getBeneficiary();
            foreach($validationRules[self::FIELD_BENEFICIARY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE, self::FIELD_BENEFICIARY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BENEFICIARY])) {
                        $errs[self::FIELD_BENEFICIARY] = [];
                    }
                    $errs[self::FIELD_BENEFICIARY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTRACT])) {
            $v = $this->getContract();
            foreach($validationRules[self::FIELD_CONTRACT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE, self::FIELD_CONTRACT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTRACT])) {
                        $errs[self::FIELD_CONTRACT] = [];
                    }
                    $errs[self::FIELD_CONTRACT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEPENDENT])) {
            $v = $this->getDependent();
            foreach($validationRules[self::FIELD_DEPENDENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE, self::FIELD_DEPENDENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEPENDENT])) {
                        $errs[self::FIELD_DEPENDENT] = [];
                    }
                    $errs[self::FIELD_DEPENDENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_GROUPING])) {
            $v = $this->getGrouping();
            foreach($validationRules[self::FIELD_GROUPING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE, self::FIELD_GROUPING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_GROUPING])) {
                        $errs[self::FIELD_GROUPING] = [];
                    }
                    $errs[self::FIELD_GROUPING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NETWORK])) {
            $v = $this->getNetwork();
            foreach($validationRules[self::FIELD_NETWORK] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE, self::FIELD_NETWORK, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NETWORK])) {
                        $errs[self::FIELD_NETWORK] = [];
                    }
                    $errs[self::FIELD_NETWORK][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ORDER])) {
            $v = $this->getOrder();
            foreach($validationRules[self::FIELD_ORDER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE, self::FIELD_ORDER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ORDER])) {
                        $errs[self::FIELD_ORDER] = [];
                    }
                    $errs[self::FIELD_ORDER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PAYOR])) {
            $v = $this->getPayor();
            foreach($validationRules[self::FIELD_PAYOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE, self::FIELD_PAYOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PAYOR])) {
                        $errs[self::FIELD_PAYOR] = [];
                    }
                    $errs[self::FIELD_PAYOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PERIOD])) {
            $v = $this->getPeriod();
            foreach($validationRules[self::FIELD_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE, self::FIELD_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERIOD])) {
                        $errs[self::FIELD_PERIOD] = [];
                    }
                    $errs[self::FIELD_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_POLICY_HOLDER])) {
            $v = $this->getPolicyHolder();
            foreach($validationRules[self::FIELD_POLICY_HOLDER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE, self::FIELD_POLICY_HOLDER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_POLICY_HOLDER])) {
                        $errs[self::FIELD_POLICY_HOLDER] = [];
                    }
                    $errs[self::FIELD_POLICY_HOLDER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RELATIONSHIP])) {
            $v = $this->getRelationship();
            foreach($validationRules[self::FIELD_RELATIONSHIP] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE, self::FIELD_RELATIONSHIP, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RELATIONSHIP])) {
                        $errs[self::FIELD_RELATIONSHIP] = [];
                    }
                    $errs[self::FIELD_RELATIONSHIP][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SEQUENCE])) {
            $v = $this->getSequence();
            foreach($validationRules[self::FIELD_SEQUENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE, self::FIELD_SEQUENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SEQUENCE])) {
                        $errs[self::FIELD_SEQUENCE] = [];
                    }
                    $errs[self::FIELD_SEQUENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBSCRIBER])) {
            $v = $this->getSubscriber();
            foreach($validationRules[self::FIELD_SUBSCRIBER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE, self::FIELD_SUBSCRIBER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBSCRIBER])) {
                        $errs[self::FIELD_SUBSCRIBER] = [];
                    }
                    $errs[self::FIELD_SUBSCRIBER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBSCRIBER_ID])) {
            $v = $this->getSubscriberId();
            foreach($validationRules[self::FIELD_SUBSCRIBER_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE, self::FIELD_SUBSCRIBER_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBSCRIBER_ID])) {
                        $errs[self::FIELD_SUBSCRIBER_ID] = [];
                    }
                    $errs[self::FIELD_SUBSCRIBER_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCoverage $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCoverage
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
                'FHIRCoverage::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCoverage or null, %s seen.',
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
        if (isset($children->contract)) {
            foreach($children->contract as $child) {
                $type->addContract(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->dependent)) {
            $type->setDependent(FHIRString::xmlUnserialize($children->dependent));
        }
        if (isset($attributes->dependent)) {
            $pt = $type->getDependent();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->dependent);
            } else {
                $type->setDependent((string)$attributes->dependent);
            }
        }
        if (isset($children->grouping)) {
            $type->setGrouping(FHIRCoverageGrouping::xmlUnserialize($children->grouping));
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->network)) {
            $type->setNetwork(FHIRString::xmlUnserialize($children->network));
        }
        if (isset($attributes->network)) {
            $pt = $type->getNetwork();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->network);
            } else {
                $type->setNetwork((string)$attributes->network);
            }
        }
        if (isset($children->order)) {
            $type->setOrder(FHIRPositiveInt::xmlUnserialize($children->order));
        }
        if (isset($attributes->order)) {
            $pt = $type->getOrder();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->order);
            } else {
                $type->setOrder((string)$attributes->order);
            }
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
        if (isset($children->sequence)) {
            $type->setSequence(FHIRString::xmlUnserialize($children->sequence));
        }
        if (isset($attributes->sequence)) {
            $pt = $type->getSequence();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->sequence);
            } else {
                $type->setSequence((string)$attributes->sequence);
            }
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRFinancialResourceStatusCodes::xmlUnserialize($children->status));
        }
        if (isset($children->subscriber)) {
            $type->setSubscriber(FHIRReference::xmlUnserialize($children->subscriber));
        }
        if (isset($children->subscriberId)) {
            $type->setSubscriberId(FHIRString::xmlUnserialize($children->subscriberId));
        }
        if (isset($attributes->subscriberId)) {
            $pt = $type->getSubscriberId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->subscriberId);
            } else {
                $type->setSubscriberId((string)$attributes->subscriberId);
            }
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
        if ([] !== ($vs = $this->getContract())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CONTRACT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getDependent())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DEPENDENT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getGrouping())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_GROUPING, null, $v->_getFHIRXMLNamespace()));
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
        if (null !== ($v = $this->getSequence())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SEQUENCE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS, null, $v->_getFHIRXMLNamespace()));
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
        if ([] !== ($vs = $this->getContract())) {
            $a[self::FIELD_CONTRACT] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_CONTRACT][] = $v;
            }
        }
        if (null !== ($v = $this->getDependent())) {
            $a[self::FIELD_DEPENDENT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_DEPENDENT_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getGrouping())) {
            $a[self::FIELD_GROUPING] = $v;
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_IDENTIFIER][] = $v;
            }
        }
        if (null !== ($v = $this->getNetwork())) {
            $a[self::FIELD_NETWORK] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_NETWORK_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getOrder())) {
            $a[self::FIELD_ORDER] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRPositiveInt::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRPositiveInt::FIELD_VALUE]);
                $a[self::FIELD_ORDER_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getPayor())) {
            $a[self::FIELD_PAYOR] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PAYOR][] = $v;
            }
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
        if (null !== ($v = $this->getSequence())) {
            $a[self::FIELD_SEQUENCE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_SEQUENCE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRFinancialResourceStatusCodes::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRFinancialResourceStatusCodes::FIELD_VALUE]);
                $a[self::FIELD_STATUS_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getSubscriber())) {
            $a[self::FIELD_SUBSCRIBER] = $v;
        }
        if (null !== ($v = $this->getSubscriberId())) {
            $a[self::FIELD_SUBSCRIBER_ID] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_SUBSCRIBER_ID_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v;
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