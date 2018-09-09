<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 9th, 2018
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2018 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Sun, Sep 9, 2018 00:54+0000 for FHIR v3.5.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRAnnotation;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming;
use PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt;

/**
 * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a policy or agreement.
 *
 * Class FHIRContractAction
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract
 */
class FHIRContractAction extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Contract.Action';

    /**
     * Encounter or Episode with primary association to specified term activity.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $context = null;

    /**
     * Id [identifier??] of the clause or question text related to the requester of this action in the referenced form or QuestionnaireResponse.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $contextLinkId = null;

    /**
     * True if the term prohibits the  action.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $doNotPerform = null;

    /**
     * Reason or purpose for the action stipulated by this Contract Provision.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $intent = null;

    /**
     * Id [identifier??] of the clause or question text related to this action in the referenced form or QuestionnaireResponse.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $linkId = null;

    /**
     * Comments made about the term action made by the requester, performer, subject or other participants.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public $note = null;

    /**
     * When action happens.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $occurrenceDateTime = null;

    /**
     * When action happens.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $occurrencePeriod = null;

    /**
     * When action happens.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    public $occurrenceTiming = null;

    /**
     * Indicates who or what is being asked to perform (or not perform) the ction.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $performer = null;

    /**
     * Id [identifier??] of the clause or question text related to the reason type or reference of this  action in the referenced form or QuestionnaireResponse.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $performerLinkId = null;

    /**
     * The type of role or competency of an individual desired or required to perform or not perform the action.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $performerRole = null;

    /**
     * The type of individual that is desired or required to perform or not perform the action.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $performerType = null;

    /**
     * Describes why the action is to be performed or not performed in textual form.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $reason = null;

    /**
     * Rationale for the action to be performed or not performed. Describes why the action is permitted or prohibited.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $reasonCode = null;

    /**
     * Id [identifier??] of the clause or question text related to the reason type or reference of this  action in the referenced form or QuestionnaireResponse.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $reasonLinkId = null;

    /**
     * Indicates another resource whose existence justifies permitting or not permitting this action.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $reasonReference = null;

    /**
     * Who or what initiated the action and has responsibility for its activation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $requester = null;

    /**
     * Id [identifier??] of the clause or question text related to the requester of this action in the referenced form or QuestionnaireResponse.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $requesterLinkId = null;

    /**
     * Security labels that protects the action.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public $securityLabelNumber = null;

    /**
     * Current state of the term action.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $status = null;

    /**
     * Entity of the action.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractSubject
     */
    public $subject = null;

    /**
     * Activity or service obligation to be done or not done, performed or not performed, effectuated or not by this Contract term.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * FHIRContractAction Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['context'])) {
                $this->setContext($data['context']);
            }
            if (isset($data['contextLinkId'])) {
                $this->setContextLinkId($data['contextLinkId']);
            }
            if (isset($data['doNotPerform'])) {
                $this->setDoNotPerform($data['doNotPerform']);
            }
            if (isset($data['intent'])) {
                $this->setIntent($data['intent']);
            }
            if (isset($data['linkId'])) {
                $this->setLinkId($data['linkId']);
            }
            if (isset($data['note'])) {
                $this->setNote($data['note']);
            }
            if (isset($data['occurrenceDateTime'])) {
                $this->setOccurrenceDateTime($data['occurrenceDateTime']);
            }
            if (isset($data['occurrencePeriod'])) {
                $this->setOccurrencePeriod($data['occurrencePeriod']);
            }
            if (isset($data['occurrenceTiming'])) {
                $this->setOccurrenceTiming($data['occurrenceTiming']);
            }
            if (isset($data['performer'])) {
                $this->setPerformer($data['performer']);
            }
            if (isset($data['performerLinkId'])) {
                $this->setPerformerLinkId($data['performerLinkId']);
            }
            if (isset($data['performerRole'])) {
                $this->setPerformerRole($data['performerRole']);
            }
            if (isset($data['performerType'])) {
                $this->setPerformerType($data['performerType']);
            }
            if (isset($data['reason'])) {
                $this->setReason($data['reason']);
            }
            if (isset($data['reasonCode'])) {
                $this->setReasonCode($data['reasonCode']);
            }
            if (isset($data['reasonLinkId'])) {
                $this->setReasonLinkId($data['reasonLinkId']);
            }
            if (isset($data['reasonReference'])) {
                $this->setReasonReference($data['reasonReference']);
            }
            if (isset($data['requester'])) {
                $this->setRequester($data['requester']);
            }
            if (isset($data['requesterLinkId'])) {
                $this->setRequesterLinkId($data['requesterLinkId']);
            }
            if (isset($data['securityLabelNumber'])) {
                $this->setSecurityLabelNumber($data['securityLabelNumber']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['subject'])) {
                $this->setSubject($data['subject']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractAction::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Encounter or Episode with primary association to specified term activity.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setContext(FHIRReference $context = null)
    {
        if (null === $context) {
            return $this; 
        }
        $this->context = $context;
        return $this;
    }

    /**
     * Encounter or Episode with primary association to specified term activity.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getContext()
    {
        return $this->context;
    }


    /**
     * Id [identifier??] of the clause or question text related to the requester of this action in the referenced form or QuestionnaireResponse.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setContextLinkId($contextLinkId)
    {
        if (null === $contextLinkId) {
            return $this; 
        }
        if (is_scalar($contextLinkId)) {
            $contextLinkId = new FHIRString($contextLinkId);
        }
        if (!($contextLinkId instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRContractAction::setContextLinkId - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($contextLinkId)
            ));
        }
        $this->contextLinkId = $contextLinkId;
        return $this;
    }

    /**
     * Id [identifier??] of the clause or question text related to the requester of this action in the referenced form or QuestionnaireResponse.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getContextLinkId()
    {
        return $this->contextLinkId;
    }


    /**
     * True if the term prohibits the  action.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setDoNotPerform($doNotPerform)
    {
        if (null === $doNotPerform) {
            return $this; 
        }
        if (is_scalar($doNotPerform)) {
            $doNotPerform = new FHIRBoolean($doNotPerform);
        }
        if (!($doNotPerform instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRContractAction::setDoNotPerform - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($doNotPerform)
            ));
        }
        $this->doNotPerform = $doNotPerform;
        return $this;
    }

    /**
     * True if the term prohibits the  action.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getDoNotPerform()
    {
        return $this->doNotPerform;
    }


    /**
     * Reason or purpose for the action stipulated by this Contract Provision.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setIntent(FHIRCodeableConcept $intent = null)
    {
        if (null === $intent) {
            return $this; 
        }
        $this->intent = $intent;
        return $this;
    }

    /**
     * Reason or purpose for the action stipulated by this Contract Provision.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getIntent()
    {
        return $this->intent;
    }


    /**
     * Id [identifier??] of the clause or question text related to this action in the referenced form or QuestionnaireResponse.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setLinkId($linkId)
    {
        if (null === $linkId) {
            return $this; 
        }
        if (is_scalar($linkId)) {
            $linkId = new FHIRString($linkId);
        }
        if (!($linkId instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRContractAction::setLinkId - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($linkId)
            ));
        }
        $this->linkId = $linkId;
        return $this;
    }

    /**
     * Id [identifier??] of the clause or question text related to this action in the referenced form or QuestionnaireResponse.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getLinkId()
    {
        return $this->linkId;
    }


    /**
     * Comments made about the term action made by the requester, performer, subject or other participants.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     * @return $this
     */
    public function setNote(FHIRAnnotation $note = null)
    {
        if (null === $note) {
            return $this; 
        }
        $this->note = $note;
        return $this;
    }

    /**
     * Comments made about the term action made by the requester, performer, subject or other participants.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public function getNote()
    {
        return $this->note;
    }


    /**
     * When action happens.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setOccurrenceDateTime($occurrenceDateTime)
    {
        if (null === $occurrenceDateTime) {
            return $this; 
        }
        if (is_scalar($occurrenceDateTime)) {
            $occurrenceDateTime = new FHIRDateTime($occurrenceDateTime);
        }
        if (!($occurrenceDateTime instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRContractAction::setOccurrenceDateTime - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($occurrenceDateTime)
            ));
        }
        $this->occurrenceDateTime = $occurrenceDateTime;
        return $this;
    }

    /**
     * When action happens.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getOccurrenceDateTime()
    {
        return $this->occurrenceDateTime;
    }


    /**
     * When action happens.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     * @return $this
     */
    public function setOccurrencePeriod(FHIRPeriod $occurrencePeriod = null)
    {
        if (null === $occurrencePeriod) {
            return $this; 
        }
        $this->occurrencePeriod = $occurrencePeriod;
        return $this;
    }

    /**
     * When action happens.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getOccurrencePeriod()
    {
        return $this->occurrencePeriod;
    }


    /**
     * When action happens.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming
     * @return $this
     */
    public function setOccurrenceTiming(FHIRTiming $occurrenceTiming = null)
    {
        if (null === $occurrenceTiming) {
            return $this; 
        }
        $this->occurrenceTiming = $occurrenceTiming;
        return $this;
    }

    /**
     * When action happens.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    public function getOccurrenceTiming()
    {
        return $this->occurrenceTiming;
    }


    /**
     * Indicates who or what is being asked to perform (or not perform) the ction.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setPerformer(FHIRReference $performer = null)
    {
        if (null === $performer) {
            return $this; 
        }
        $this->performer = $performer;
        return $this;
    }

    /**
     * Indicates who or what is being asked to perform (or not perform) the ction.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPerformer()
    {
        return $this->performer;
    }


    /**
     * Id [identifier??] of the clause or question text related to the reason type or reference of this  action in the referenced form or QuestionnaireResponse.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setPerformerLinkId($performerLinkId)
    {
        if (null === $performerLinkId) {
            return $this; 
        }
        if (is_scalar($performerLinkId)) {
            $performerLinkId = new FHIRString($performerLinkId);
        }
        if (!($performerLinkId instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRContractAction::setPerformerLinkId - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($performerLinkId)
            ));
        }
        $this->performerLinkId = $performerLinkId;
        return $this;
    }

    /**
     * Id [identifier??] of the clause or question text related to the reason type or reference of this  action in the referenced form or QuestionnaireResponse.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPerformerLinkId()
    {
        return $this->performerLinkId;
    }


    /**
     * The type of role or competency of an individual desired or required to perform or not perform the action.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setPerformerRole(FHIRCodeableConcept $performerRole = null)
    {
        if (null === $performerRole) {
            return $this; 
        }
        $this->performerRole = $performerRole;
        return $this;
    }

    /**
     * The type of role or competency of an individual desired or required to perform or not perform the action.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getPerformerRole()
    {
        return $this->performerRole;
    }


    /**
     * The type of individual that is desired or required to perform or not perform the action.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setPerformerType(FHIRCodeableConcept $performerType = null)
    {
        if (null === $performerType) {
            return $this; 
        }
        $this->performerType = $performerType;
        return $this;
    }

    /**
     * The type of individual that is desired or required to perform or not perform the action.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getPerformerType()
    {
        return $this->performerType;
    }


    /**
     * Describes why the action is to be performed or not performed in textual form.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setReason($reason)
    {
        if (null === $reason) {
            return $this; 
        }
        if (is_scalar($reason)) {
            $reason = new FHIRString($reason);
        }
        if (!($reason instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRContractAction::setReason - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($reason)
            ));
        }
        $this->reason = $reason;
        return $this;
    }

    /**
     * Describes why the action is to be performed or not performed in textual form.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getReason()
    {
        return $this->reason;
    }


    /**
     * Rationale for the action to be performed or not performed. Describes why the action is permitted or prohibited.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setReasonCode(FHIRCodeableConcept $reasonCode = null)
    {
        if (null === $reasonCode) {
            return $this; 
        }
        $this->reasonCode = $reasonCode;
        return $this;
    }

    /**
     * Rationale for the action to be performed or not performed. Describes why the action is permitted or prohibited.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getReasonCode()
    {
        return $this->reasonCode;
    }


    /**
     * Id [identifier??] of the clause or question text related to the reason type or reference of this  action in the referenced form or QuestionnaireResponse.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setReasonLinkId($reasonLinkId)
    {
        if (null === $reasonLinkId) {
            return $this; 
        }
        if (is_scalar($reasonLinkId)) {
            $reasonLinkId = new FHIRString($reasonLinkId);
        }
        if (!($reasonLinkId instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRContractAction::setReasonLinkId - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($reasonLinkId)
            ));
        }
        $this->reasonLinkId = $reasonLinkId;
        return $this;
    }

    /**
     * Id [identifier??] of the clause or question text related to the reason type or reference of this  action in the referenced form or QuestionnaireResponse.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getReasonLinkId()
    {
        return $this->reasonLinkId;
    }


    /**
     * Indicates another resource whose existence justifies permitting or not permitting this action.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setReasonReference(FHIRReference $reasonReference = null)
    {
        if (null === $reasonReference) {
            return $this; 
        }
        $this->reasonReference = $reasonReference;
        return $this;
    }

    /**
     * Indicates another resource whose existence justifies permitting or not permitting this action.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getReasonReference()
    {
        return $this->reasonReference;
    }


    /**
     * Who or what initiated the action and has responsibility for its activation.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setRequester(FHIRReference $requester = null)
    {
        if (null === $requester) {
            return $this; 
        }
        $this->requester = $requester;
        return $this;
    }

    /**
     * Who or what initiated the action and has responsibility for its activation.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getRequester()
    {
        return $this->requester;
    }


    /**
     * Id [identifier??] of the clause or question text related to the requester of this action in the referenced form or QuestionnaireResponse.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setRequesterLinkId($requesterLinkId)
    {
        if (null === $requesterLinkId) {
            return $this; 
        }
        if (is_scalar($requesterLinkId)) {
            $requesterLinkId = new FHIRString($requesterLinkId);
        }
        if (!($requesterLinkId instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRContractAction::setRequesterLinkId - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($requesterLinkId)
            ));
        }
        $this->requesterLinkId = $requesterLinkId;
        return $this;
    }

    /**
     * Id [identifier??] of the clause or question text related to the requester of this action in the referenced form or QuestionnaireResponse.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getRequesterLinkId()
    {
        return $this->requesterLinkId;
    }


    /**
     * Security labels that protects the action.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     * @return $this
     */
    public function setSecurityLabelNumber($securityLabelNumber)
    {
        if (null === $securityLabelNumber) {
            return $this; 
        }
        if (is_scalar($securityLabelNumber)) {
            $securityLabelNumber = new FHIRUnsignedInt($securityLabelNumber);
        }
        if (!($securityLabelNumber instanceof FHIRUnsignedInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRContractAction::setSecurityLabelNumber - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt or appropriate scalar value, %s seen.',
                gettype($securityLabelNumber)
            ));
        }
        $this->securityLabelNumber = $securityLabelNumber;
        return $this;
    }

    /**
     * Security labels that protects the action.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getSecurityLabelNumber()
    {
        return $this->securityLabelNumber;
    }


    /**
     * Current state of the term action.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setStatus(FHIRCodeableConcept $status = null)
    {
        if (null === $status) {
            return $this; 
        }
        $this->status = $status;
        return $this;
    }

    /**
     * Current state of the term action.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * Entity of the action.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractSubject
     * @return $this
     */
    public function setSubject(FHIRContractSubject $subject = null)
    {
        if (null === $subject) {
            return $this; 
        }
        $this->subject = $subject;
        return $this;
    }

    /**
     * Entity of the action.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractSubject
     */
    public function getSubject()
    {
        return $this->subject;
    }


    /**
     * Activity or service obligation to be done or not done, performed or not performed, effectuated or not by this Contract term.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setType(FHIRCodeableConcept $type = null)
    {
        if (null === $type) {
            return $this; 
        }
        $this->type = $type;
        return $this;
    }

    /**
     * Activity or service obligation to be done or not done, performed or not performed, effectuated or not by this Contract term.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return (string)self::FHIR_TYPE_NAME;
    }

    /**
     * @return mixed
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getContext())) {
            $a['context'] = $v;
        }
        if (null !== ($v = $this->getContextLinkId())) {
            $a['contextLinkId'] = $v;
        }
        if (null !== ($v = $this->getDoNotPerform())) {
            $a['doNotPerform'] = $v;
        }
        if (null !== ($v = $this->getIntent())) {
            $a['intent'] = $v;
        }
        if (null !== ($v = $this->getLinkId())) {
            $a['linkId'] = $v;
        }
        if (null !== ($v = $this->getNote())) {
            $a['note'] = $v;
        }
        if (null !== ($v = $this->getOccurrenceDateTime())) {
            $a['occurrenceDateTime'] = $v;
        }
        if (null !== ($v = $this->getOccurrencePeriod())) {
            $a['occurrencePeriod'] = $v;
        }
        if (null !== ($v = $this->getOccurrenceTiming())) {
            $a['occurrenceTiming'] = $v;
        }
        if (null !== ($v = $this->getPerformer())) {
            $a['performer'] = $v;
        }
        if (null !== ($v = $this->getPerformerLinkId())) {
            $a['performerLinkId'] = $v;
        }
        if (null !== ($v = $this->getPerformerRole())) {
            $a['performerRole'] = $v;
        }
        if (null !== ($v = $this->getPerformerType())) {
            $a['performerType'] = $v;
        }
        if (null !== ($v = $this->getReason())) {
            $a['reason'] = $v;
        }
        if (null !== ($v = $this->getReasonCode())) {
            $a['reasonCode'] = $v;
        }
        if (null !== ($v = $this->getReasonLinkId())) {
            $a['reasonLinkId'] = $v;
        }
        if (null !== ($v = $this->getReasonReference())) {
            $a['reasonReference'] = $v;
        }
        if (null !== ($v = $this->getRequester())) {
            $a['requester'] = $v;
        }
        if (null !== ($v = $this->getRequesterLinkId())) {
            $a['requesterLinkId'] = $v;
        }
        if (null !== ($v = $this->getSecurityLabelNumber())) {
            $a['securityLabelNumber'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
        }
        if (null !== ($v = $this->getSubject())) {
            $a['subject'] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a['type'] = $v;
        }
        return $a;
    }

    /**
     * @param bool $returnSXE
     * @param null|\SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, \SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<ContractAction xmlns="http://hl7.org/fhir"></ContractAction>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}