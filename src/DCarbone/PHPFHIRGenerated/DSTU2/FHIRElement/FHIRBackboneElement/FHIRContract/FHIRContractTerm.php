<?php

namespace DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRContract;

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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;

/**
 * A formal agreement between parties regarding the conduct of business, exchange
 * of information or other matters.
 *
 * Class FHIRContractTerm
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRContract
 */
class FHIRContractTerm extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_TERM;
    const FIELD_ACTION = 'action';
    const FIELD_ACTION_REASON = 'actionReason';
    const FIELD_ACTOR = 'actor';
    const FIELD_APPLIES = 'applies';
    const FIELD_GROUP = 'group';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_ISSUED = 'issued';
    const FIELD_ISSUED_EXT = '_issued';
    const FIELD_SUB_TYPE = 'subType';
    const FIELD_SUBJECT = 'subject';
    const FIELD_TEXT = 'text';
    const FIELD_TEXT_EXT = '_text';
    const FIELD_TYPE = 'type';
    const FIELD_VALUED_ITEM = 'valuedItem';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Action stipulated by this Contract Provision.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    protected $action = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reason or purpose for the action stipulated by this Contract Provision.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    protected $actionReason = [];

    /**
     * A formal agreement between parties regarding the conduct of business, exchange
     * of information or other matters.
     *
     * List of actors participating in this Contract Provision.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractActor1[]
     */
    protected $actor = [];

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Relevant time or time-period when this Contract Provision is applicable.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPeriod
     */
    protected $applies = null;

    /**
     * A formal agreement between parties regarding the conduct of business, exchange
     * of information or other matters.
     *
     * Nested group of Contract Provisions.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractTerm[]
     */
    protected $group = [];

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique identifier for this particular Contract Provision.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier
     */
    protected $identifier = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When this Contract Provision was issued.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime
     */
    protected $issued = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Subtype of this Contract Provision, e.g. life time maximum payment for a
     * contract term for specific valued item, e.g. disability payment.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    protected $subType = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who or what this Contract Provision is about.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected $subject = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Human readable form of this Contract Provision.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $text = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Type of Contract Provision such as specific requirements, purposes for actions,
     * obligations, prohibitions, e.g. life time maximum benefit.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    protected $type = null;

    /**
     * A formal agreement between parties regarding the conduct of business, exchange
     * of information or other matters.
     *
     * Contract Provision Valued Item List.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractValuedItem1[]
     */
    protected $valuedItem = [];

    /**
     * Validation map for fields in type Contract.Term
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRContractTerm Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRContractTerm::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ACTION])) {
            if (is_array($data[self::FIELD_ACTION])) {
                foreach($data[self::FIELD_ACTION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addAction($v);
                    } else {
                        $this->addAction(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_ACTION] instanceof FHIRCodeableConcept) {
                $this->addAction($data[self::FIELD_ACTION]);
            } else {
                $this->addAction(new FHIRCodeableConcept($data[self::FIELD_ACTION]));
            }
        }
        if (isset($data[self::FIELD_ACTION_REASON])) {
            if (is_array($data[self::FIELD_ACTION_REASON])) {
                foreach($data[self::FIELD_ACTION_REASON] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addActionReason($v);
                    } else {
                        $this->addActionReason(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_ACTION_REASON] instanceof FHIRCodeableConcept) {
                $this->addActionReason($data[self::FIELD_ACTION_REASON]);
            } else {
                $this->addActionReason(new FHIRCodeableConcept($data[self::FIELD_ACTION_REASON]));
            }
        }
        if (isset($data[self::FIELD_ACTOR])) {
            if (is_array($data[self::FIELD_ACTOR])) {
                foreach($data[self::FIELD_ACTOR] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRContractActor1) {
                        $this->addActor($v);
                    } else {
                        $this->addActor(new FHIRContractActor1($v));
                    }
                }
            } else if ($data[self::FIELD_ACTOR] instanceof FHIRContractActor1) {
                $this->addActor($data[self::FIELD_ACTOR]);
            } else {
                $this->addActor(new FHIRContractActor1($data[self::FIELD_ACTOR]));
            }
        }
        if (isset($data[self::FIELD_APPLIES])) {
            if ($data[self::FIELD_APPLIES] instanceof FHIRPeriod) {
                $this->setApplies($data[self::FIELD_APPLIES]);
            } else {
                $this->setApplies(new FHIRPeriod($data[self::FIELD_APPLIES]));
            }
        }
        if (isset($data[self::FIELD_GROUP])) {
            if (is_array($data[self::FIELD_GROUP])) {
                foreach($data[self::FIELD_GROUP] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRContractTerm) {
                        $this->addGroup($v);
                    } else {
                        $this->addGroup(new FHIRContractTerm($v));
                    }
                }
            } else if ($data[self::FIELD_GROUP] instanceof FHIRContractTerm) {
                $this->addGroup($data[self::FIELD_GROUP]);
            } else {
                $this->addGroup(new FHIRContractTerm($data[self::FIELD_GROUP]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            if ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->setIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_ISSUED]) || isset($data[self::FIELD_ISSUED_EXT])) {
            if (isset($data[self::FIELD_ISSUED])) {
                $value = $data[self::FIELD_ISSUED];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_ISSUED_EXT]) && is_array($data[self::FIELD_ISSUED_EXT])) {
                $ext = $data[self::FIELD_ISSUED_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setIssued($value);
                } else if (is_array($value)) {
                    $this->setIssued(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setIssued(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setIssued(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_SUB_TYPE])) {
            if ($data[self::FIELD_SUB_TYPE] instanceof FHIRCodeableConcept) {
                $this->setSubType($data[self::FIELD_SUB_TYPE]);
            } else {
                $this->setSubType(new FHIRCodeableConcept($data[self::FIELD_SUB_TYPE]));
            }
        }
        if (isset($data[self::FIELD_SUBJECT])) {
            if ($data[self::FIELD_SUBJECT] instanceof FHIRReference) {
                $this->setSubject($data[self::FIELD_SUBJECT]);
            } else {
                $this->setSubject(new FHIRReference($data[self::FIELD_SUBJECT]));
            }
        }
        if (isset($data[self::FIELD_TEXT]) || isset($data[self::FIELD_TEXT_EXT])) {
            if (isset($data[self::FIELD_TEXT])) {
                $value = $data[self::FIELD_TEXT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_TEXT_EXT]) && is_array($data[self::FIELD_TEXT_EXT])) {
                $ext = $data[self::FIELD_TEXT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setText($value);
                } else if (is_array($value)) {
                    $this->setText(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setText(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setText(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
            }
        }
        if (isset($data[self::FIELD_VALUED_ITEM])) {
            if (is_array($data[self::FIELD_VALUED_ITEM])) {
                foreach($data[self::FIELD_VALUED_ITEM] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRContractValuedItem1) {
                        $this->addValuedItem($v);
                    } else {
                        $this->addValuedItem(new FHIRContractValuedItem1($v));
                    }
                }
            } else if ($data[self::FIELD_VALUED_ITEM] instanceof FHIRContractValuedItem1) {
                $this->addValuedItem($data[self::FIELD_VALUED_ITEM]);
            } else {
                $this->addValuedItem(new FHIRContractValuedItem1($data[self::FIELD_VALUED_ITEM]));
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
        return "<ContractTerm{$xmlns}></ContractTerm>";
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Action stipulated by this Contract Provision.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Action stipulated by this Contract Provision.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $action
     * @return static
     */
    public function addAction(FHIRCodeableConcept $action = null)
    {
        $this->action[] = $action;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Action stipulated by this Contract Provision.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[] $action
     * @return static
     */
    public function setAction(array $action = [])
    {
        $this->action = [];
        if ([] === $action) {
            return $this;
        }
        foreach($action as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addAction($v);
            } else {
                $this->addAction(new FHIRCodeableConcept($v));
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
     * Reason or purpose for the action stipulated by this Contract Provision.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    public function getActionReason()
    {
        return $this->actionReason;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reason or purpose for the action stipulated by this Contract Provision.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $actionReason
     * @return static
     */
    public function addActionReason(FHIRCodeableConcept $actionReason = null)
    {
        $this->actionReason[] = $actionReason;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reason or purpose for the action stipulated by this Contract Provision.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[] $actionReason
     * @return static
     */
    public function setActionReason(array $actionReason = [])
    {
        $this->actionReason = [];
        if ([] === $actionReason) {
            return $this;
        }
        foreach($actionReason as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addActionReason($v);
            } else {
                $this->addActionReason(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A formal agreement between parties regarding the conduct of business, exchange
     * of information or other matters.
     *
     * List of actors participating in this Contract Provision.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractActor1[]
     */
    public function getActor()
    {
        return $this->actor;
    }

    /**
     * A formal agreement between parties regarding the conduct of business, exchange
     * of information or other matters.
     *
     * List of actors participating in this Contract Provision.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractActor1 $actor
     * @return static
     */
    public function addActor(FHIRContractActor1 $actor = null)
    {
        $this->actor[] = $actor;
        return $this;
    }

    /**
     * A formal agreement between parties regarding the conduct of business, exchange
     * of information or other matters.
     *
     * List of actors participating in this Contract Provision.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractActor1[] $actor
     * @return static
     */
    public function setActor(array $actor = [])
    {
        $this->actor = [];
        if ([] === $actor) {
            return $this;
        }
        foreach($actor as $v) {
            if ($v instanceof FHIRContractActor1) {
                $this->addActor($v);
            } else {
                $this->addActor(new FHIRContractActor1($v));
            }
        }
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Relevant time or time-period when this Contract Provision is applicable.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPeriod
     */
    public function getApplies()
    {
        return $this->applies;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Relevant time or time-period when this Contract Provision is applicable.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPeriod $applies
     * @return static
     */
    public function setApplies(FHIRPeriod $applies = null)
    {
        $this->applies = $applies;
        return $this;
    }

    /**
     * A formal agreement between parties regarding the conduct of business, exchange
     * of information or other matters.
     *
     * Nested group of Contract Provisions.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractTerm[]
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * A formal agreement between parties regarding the conduct of business, exchange
     * of information or other matters.
     *
     * Nested group of Contract Provisions.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractTerm $group
     * @return static
     */
    public function addGroup(FHIRContractTerm $group = null)
    {
        $this->group[] = $group;
        return $this;
    }

    /**
     * A formal agreement between parties regarding the conduct of business, exchange
     * of information or other matters.
     *
     * Nested group of Contract Provisions.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractTerm[] $group
     * @return static
     */
    public function setGroup(array $group = [])
    {
        $this->group = [];
        if ([] === $group) {
            return $this;
        }
        foreach($group as $v) {
            if ($v instanceof FHIRContractTerm) {
                $this->addGroup($v);
            } else {
                $this->addGroup(new FHIRContractTerm($v));
            }
        }
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique identifier for this particular Contract Provision.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier
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
     * Unique identifier for this particular Contract Provision.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function setIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier = $identifier;
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
     * When this Contract Provision was issued.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime
     */
    public function getIssued()
    {
        return $this->issued;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When this Contract Provision was issued.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime $issued
     * @return static
     */
    public function setIssued($issued = null)
    {
        if (null === $issued) {
            $this->issued = null;
            return $this;
        }
        if ($issued instanceof FHIRDateTime) {
            $this->issued = $issued;
            return $this;
        }
        $this->issued = new FHIRDateTime($issued);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Subtype of this Contract Provision, e.g. life time maximum payment for a
     * contract term for specific valued item, e.g. disability payment.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getSubType()
    {
        return $this->subType;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Subtype of this Contract Provision, e.g. life time maximum payment for a
     * contract term for specific valued item, e.g. disability payment.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $subType
     * @return static
     */
    public function setSubType(FHIRCodeableConcept $subType = null)
    {
        $this->subType = $subType;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who or what this Contract Provision is about.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who or what this Contract Provision is about.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $subject
     * @return static
     */
    public function setSubject(FHIRReference $subject = null)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Human readable form of this Contract Provision.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Human readable form of this Contract Provision.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $text
     * @return static
     */
    public function setText($text = null)
    {
        if (null === $text) {
            $this->text = null;
            return $this;
        }
        if ($text instanceof FHIRString) {
            $this->text = $text;
            return $this;
        }
        $this->text = new FHIRString($text);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Type of Contract Provision such as specific requirements, purposes for actions,
     * obligations, prohibitions, e.g. life time maximum benefit.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
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
     * Type of Contract Provision such as specific requirements, purposes for actions,
     * obligations, prohibitions, e.g. life time maximum benefit.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $type
     * @return static
     */
    public function setType(FHIRCodeableConcept $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * A formal agreement between parties regarding the conduct of business, exchange
     * of information or other matters.
     *
     * Contract Provision Valued Item List.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractValuedItem1[]
     */
    public function getValuedItem()
    {
        return $this->valuedItem;
    }

    /**
     * A formal agreement between parties regarding the conduct of business, exchange
     * of information or other matters.
     *
     * Contract Provision Valued Item List.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractValuedItem1 $valuedItem
     * @return static
     */
    public function addValuedItem(FHIRContractValuedItem1 $valuedItem = null)
    {
        $this->valuedItem[] = $valuedItem;
        return $this;
    }

    /**
     * A formal agreement between parties regarding the conduct of business, exchange
     * of information or other matters.
     *
     * Contract Provision Valued Item List.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractValuedItem1[] $valuedItem
     * @return static
     */
    public function setValuedItem(array $valuedItem = [])
    {
        $this->valuedItem = [];
        if ([] === $valuedItem) {
            return $this;
        }
        foreach($valuedItem as $v) {
            if ($v instanceof FHIRContractValuedItem1) {
                $this->addValuedItem($v);
            } else {
                $this->addValuedItem(new FHIRContractValuedItem1($v));
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
        if ([] !== ($vs = $this->getAction())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ACTION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getActionReason())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ACTION_REASON, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getActor())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ACTOR, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getApplies())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_APPLIES] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getGroup())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_GROUP, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getIdentifier())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_IDENTIFIER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getIssued())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ISSUED] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSubType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUB_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSubject())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBJECT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getText())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TEXT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getValuedItem())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_VALUED_ITEM, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ACTION])) {
            $v = $this->getAction();
            foreach($validationRules[self::FIELD_ACTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_TERM, self::FIELD_ACTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ACTION])) {
                        $errs[self::FIELD_ACTION] = [];
                    }
                    $errs[self::FIELD_ACTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ACTION_REASON])) {
            $v = $this->getActionReason();
            foreach($validationRules[self::FIELD_ACTION_REASON] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_TERM, self::FIELD_ACTION_REASON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ACTION_REASON])) {
                        $errs[self::FIELD_ACTION_REASON] = [];
                    }
                    $errs[self::FIELD_ACTION_REASON][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ACTOR])) {
            $v = $this->getActor();
            foreach($validationRules[self::FIELD_ACTOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_TERM, self::FIELD_ACTOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ACTOR])) {
                        $errs[self::FIELD_ACTOR] = [];
                    }
                    $errs[self::FIELD_ACTOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_APPLIES])) {
            $v = $this->getApplies();
            foreach($validationRules[self::FIELD_APPLIES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_TERM, self::FIELD_APPLIES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_APPLIES])) {
                        $errs[self::FIELD_APPLIES] = [];
                    }
                    $errs[self::FIELD_APPLIES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_GROUP])) {
            $v = $this->getGroup();
            foreach($validationRules[self::FIELD_GROUP] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_TERM, self::FIELD_GROUP, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_GROUP])) {
                        $errs[self::FIELD_GROUP] = [];
                    }
                    $errs[self::FIELD_GROUP][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_TERM, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ISSUED])) {
            $v = $this->getIssued();
            foreach($validationRules[self::FIELD_ISSUED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_TERM, self::FIELD_ISSUED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ISSUED])) {
                        $errs[self::FIELD_ISSUED] = [];
                    }
                    $errs[self::FIELD_ISSUED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUB_TYPE])) {
            $v = $this->getSubType();
            foreach($validationRules[self::FIELD_SUB_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_TERM, self::FIELD_SUB_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUB_TYPE])) {
                        $errs[self::FIELD_SUB_TYPE] = [];
                    }
                    $errs[self::FIELD_SUB_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBJECT])) {
            $v = $this->getSubject();
            foreach($validationRules[self::FIELD_SUBJECT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_TERM, self::FIELD_SUBJECT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBJECT])) {
                        $errs[self::FIELD_SUBJECT] = [];
                    }
                    $errs[self::FIELD_SUBJECT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_TERM, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_TERM, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUED_ITEM])) {
            $v = $this->getValuedItem();
            foreach($validationRules[self::FIELD_VALUED_ITEM] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_TERM, self::FIELD_VALUED_ITEM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUED_ITEM])) {
                        $errs[self::FIELD_VALUED_ITEM] = [];
                    }
                    $errs[self::FIELD_VALUED_ITEM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BACKBONE_ELEMENT, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractTerm $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractTerm
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
                throw new \DomainException(sprintf('FHIRContractTerm::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRContractTerm::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRContractTerm;
        } elseif (!is_object($type) || !($type instanceof FHIRContractTerm)) {
            throw new \RuntimeException(sprintf(
                'FHIRContractTerm::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractTerm or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRBackboneElement::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->action)) {
            foreach($children->action as $child) {
                $type->addAction(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->actionReason)) {
            foreach($children->actionReason as $child) {
                $type->addActionReason(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->actor)) {
            foreach($children->actor as $child) {
                $type->addActor(FHIRContractActor1::xmlUnserialize($child));
            }
        }
        if (isset($children->applies)) {
            $type->setApplies(FHIRPeriod::xmlUnserialize($children->applies));
        }
        if (isset($children->group)) {
            foreach($children->group as $child) {
                $type->addGroup(FHIRContractTerm::xmlUnserialize($child));
            }
        }
        if (isset($children->identifier)) {
            $type->setIdentifier(FHIRIdentifier::xmlUnserialize($children->identifier));
        }
        if (isset($children->issued)) {
            $type->setIssued(FHIRDateTime::xmlUnserialize($children->issued));
        }
        if (isset($attributes->issued)) {
            $pt = $type->getIssued();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->issued);
            } else {
                $type->setIssued((string)$attributes->issued);
            }
        }
        if (isset($children->subType)) {
            $type->setSubType(FHIRCodeableConcept::xmlUnserialize($children->subType));
        }
        if (isset($children->subject)) {
            $type->setSubject(FHIRReference::xmlUnserialize($children->subject));
        }
        if (isset($children->text)) {
            $type->setText(FHIRString::xmlUnserialize($children->text));
        }
        if (isset($attributes->text)) {
            $pt = $type->getText();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->text);
            } else {
                $type->setText((string)$attributes->text);
            }
        }
        if (isset($children->type)) {
            $type->setType(FHIRCodeableConcept::xmlUnserialize($children->type));
        }
        if (isset($children->valuedItem)) {
            foreach($children->valuedItem as $child) {
                $type->addValuedItem(FHIRContractValuedItem1::xmlUnserialize($child));
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
        if ([] !== ($vs = $this->getAction())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ACTION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getActionReason())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ACTION_REASON, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getActor())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ACTOR, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getApplies())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_APPLIES, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getGroup())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_GROUP, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getIdentifier())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getIssued())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ISSUED, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSubType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUB_TYPE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSubject())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUBJECT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getText())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TEXT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getValuedItem())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_VALUED_ITEM, null, $v->_getFHIRXMLNamespace()));
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
        if ([] !== ($vs = $this->getAction())) {
            $a[self::FIELD_ACTION] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_ACTION][] = $v;
            }
        }
        if ([] !== ($vs = $this->getActionReason())) {
            $a[self::FIELD_ACTION_REASON] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_ACTION_REASON][] = $v;
            }
        }
        if ([] !== ($vs = $this->getActor())) {
            $a[self::FIELD_ACTOR] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_ACTOR][] = $v;
            }
        }
        if (null !== ($v = $this->getApplies())) {
            $a[self::FIELD_APPLIES] = $v;
        }
        if ([] !== ($vs = $this->getGroup())) {
            $a[self::FIELD_GROUP] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_GROUP][] = $v;
            }
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $v;
        }
        if (null !== ($v = $this->getIssued())) {
            $a[self::FIELD_ISSUED] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_ISSUED_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getSubType())) {
            $a[self::FIELD_SUB_TYPE] = $v;
        }
        if (null !== ($v = $this->getSubject())) {
            $a[self::FIELD_SUBJECT] = $v;
        }
        if (null !== ($v = $this->getText())) {
            $a[self::FIELD_TEXT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_TEXT_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v;
        }
        if ([] !== ($vs = $this->getValuedItem())) {
            $a[self::FIELD_VALUED_ITEM] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_VALUED_ITEM][] = $v;
            }
        }
        if ([] !== ($vs = $this->_getFHIRComments())) {
            $a[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS] = $vs;
        }
        return $a;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}