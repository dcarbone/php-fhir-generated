<?php

namespace PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

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
use PHPFHIRGenerated\FHIRElement\FHIRCanonical;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRDataRequirement;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRGuidanceResponseStatus;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRUri;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * A guidance response is the formal response to a guidance request, including any output parameters returned by the evaluation, as well as the description of any proposed actions to be taken.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRGuidanceResponse
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRGuidanceResponse extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'GuidanceResponse';

    /**
     * Allows the context of the guidance response to be provided if available. In a service context, this would likely be unavailable.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $context = null;

    /**
     * If the evaluation could not be completed due to lack of information, or additional information would potentially result in a more accurate response, this element will a description of the data required in order to proceed with the evaluation. A subsequent request to the service should include this data.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDataRequirement
     */
    public $dataRequirement = null;

    /**
     * Messages resulting from the evaluation of the artifact or artifacts. As part of evaluating the request, the engine may produce informational or warning messages. These messages will be provided by this element.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $evaluationMessage = null;

    /**
     * Allows a service to provide  unique, business identifiers for the response.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * An identifier, CodeableConcept or canonical reference to the guidance that was requested.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public $moduleCanonical = null;

    /**
     * An identifier, CodeableConcept or canonical reference to the guidance that was requested.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $moduleCodeableConcept = null;

    /**
     * An identifier, CodeableConcept or canonical reference to the guidance that was requested.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $moduleUri = null;

    /**
     * Provides a mechanism to communicate additional information about the response.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public $note = null;

    /**
     * Indicates when the guidance response was processed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $occurrenceDateTime = null;

    /**
     * The output parameters of the evaluation, if any. Many modules will result in the return of specific resources such as procedure or communication requests that are returned as part of the operation result. However, modules may define specific outputs that would be returned as the result of the evaluation, and these would be returned in this element.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $outputParameters = null;

    /**
     * Provides a reference to the device that performed the guidance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $performer = null;

    /**
     * Describes the reason for the guidance response in coded or textual form.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $reasonCode = null;

    /**
     * Indicates the reason the request was initiated. This is typically provided as a parameter to the evaluation and echoed by the service, although for some use cases, such as subscription- or event-based scenarios, it may provide an indication of the cause for the response.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $reasonReference = null;

    /**
     * The identifier of the request associated with this response. If an identifier was given as part of the request, it will be reproduced here to enable the requester to more easily identify the response in a multi-request scenario.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $requestIdentifier = null;

    /**
     * The actions, if any, produced by the evaluation of the artifact.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $result = null;

    /**
     * The status of the response. If the evaluation is completed successfully, the status will indicate success. However, in order to complete the evaluation, the engine may require more information. In this case, the status will be data-required, and the response will contain a description of the additional required information. If the evaluation completed successfully, but the engine determines that a potentially more accurate response could be provided if more data was available, the status will be data-requested, and the response will contain a description of the additional requested information.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRGuidanceResponseStatus
     */
    public $status = null;

    /**
     * The patient for which the request was processed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * FHIRGuidanceResponse Constructor
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
            if (isset($data['dataRequirement'])) {
                $this->setDataRequirement($data['dataRequirement']);
            }
            if (isset($data['evaluationMessage'])) {
                $this->setEvaluationMessage($data['evaluationMessage']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['moduleCanonical'])) {
                $this->setModuleCanonical($data['moduleCanonical']);
            }
            if (isset($data['moduleCodeableConcept'])) {
                $this->setModuleCodeableConcept($data['moduleCodeableConcept']);
            }
            if (isset($data['moduleUri'])) {
                $this->setModuleUri($data['moduleUri']);
            }
            if (isset($data['note'])) {
                $this->setNote($data['note']);
            }
            if (isset($data['occurrenceDateTime'])) {
                $this->setOccurrenceDateTime($data['occurrenceDateTime']);
            }
            if (isset($data['outputParameters'])) {
                $this->setOutputParameters($data['outputParameters']);
            }
            if (isset($data['performer'])) {
                $this->setPerformer($data['performer']);
            }
            if (isset($data['reasonCode'])) {
                $this->setReasonCode($data['reasonCode']);
            }
            if (isset($data['reasonReference'])) {
                $this->setReasonReference($data['reasonReference']);
            }
            if (isset($data['requestIdentifier'])) {
                $this->setRequestIdentifier($data['requestIdentifier']);
            }
            if (isset($data['result'])) {
                $this->setResult($data['result']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['subject'])) {
                $this->setSubject($data['subject']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRGuidanceResponse::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Allows the context of the guidance response to be provided if available. In a service context, this would likely be unavailable.
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
     * Allows the context of the guidance response to be provided if available. In a service context, this would likely be unavailable.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getContext()
    {
        return $this->context;
    }


    /**
     * If the evaluation could not be completed due to lack of information, or additional information would potentially result in a more accurate response, this element will a description of the data required in order to proceed with the evaluation. A subsequent request to the service should include this data.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement
     * @return $this
     */
    public function setDataRequirement(FHIRDataRequirement $dataRequirement = null)
    {
        if (null === $dataRequirement) {
            return $this; 
        }
        $this->dataRequirement = $dataRequirement;
        return $this;
    }

    /**
     * If the evaluation could not be completed due to lack of information, or additional information would potentially result in a more accurate response, this element will a description of the data required in order to proceed with the evaluation. A subsequent request to the service should include this data.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDataRequirement
     */
    public function getDataRequirement()
    {
        return $this->dataRequirement;
    }


    /**
     * Messages resulting from the evaluation of the artifact or artifacts. As part of evaluating the request, the engine may produce informational or warning messages. These messages will be provided by this element.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setEvaluationMessage(FHIRReference $evaluationMessage = null)
    {
        if (null === $evaluationMessage) {
            return $this; 
        }
        $this->evaluationMessage = $evaluationMessage;
        return $this;
    }

    /**
     * Messages resulting from the evaluation of the artifact or artifacts. As part of evaluating the request, the engine may produce informational or warning messages. These messages will be provided by this element.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getEvaluationMessage()
    {
        return $this->evaluationMessage;
    }


    /**
     * Allows a service to provide  unique, business identifiers for the response.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     * @return $this
     */
    public function setIdentifier(FHIRIdentifier $identifier = null)
    {
        if (null === $identifier) {
            return $this; 
        }
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Allows a service to provide  unique, business identifiers for the response.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * An identifier, CodeableConcept or canonical reference to the guidance that was requested.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     * @return $this
     */
    public function setModuleCanonical($moduleCanonical)
    {
        if (null === $moduleCanonical) {
            return $this; 
        }
        if (is_scalar($moduleCanonical)) {
            $moduleCanonical = new FHIRCanonical($moduleCanonical);
        }
        if (!($moduleCanonical instanceof FHIRCanonical)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRGuidanceResponse::setModuleCanonical - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCanonical or appropriate scalar value, %s seen.',
                gettype($moduleCanonical)
            ));
        }
        $this->moduleCanonical = $moduleCanonical;
        return $this;
    }

    /**
     * An identifier, CodeableConcept or canonical reference to the guidance that was requested.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public function getModuleCanonical()
    {
        return $this->moduleCanonical;
    }


    /**
     * An identifier, CodeableConcept or canonical reference to the guidance that was requested.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setModuleCodeableConcept(FHIRCodeableConcept $moduleCodeableConcept = null)
    {
        if (null === $moduleCodeableConcept) {
            return $this; 
        }
        $this->moduleCodeableConcept = $moduleCodeableConcept;
        return $this;
    }

    /**
     * An identifier, CodeableConcept or canonical reference to the guidance that was requested.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getModuleCodeableConcept()
    {
        return $this->moduleCodeableConcept;
    }


    /**
     * An identifier, CodeableConcept or canonical reference to the guidance that was requested.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     * @return $this
     */
    public function setModuleUri($moduleUri)
    {
        if (null === $moduleUri) {
            return $this; 
        }
        if (is_scalar($moduleUri)) {
            $moduleUri = new FHIRUri($moduleUri);
        }
        if (!($moduleUri instanceof FHIRUri)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRGuidanceResponse::setModuleUri - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($moduleUri)
            ));
        }
        $this->moduleUri = $moduleUri;
        return $this;
    }

    /**
     * An identifier, CodeableConcept or canonical reference to the guidance that was requested.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getModuleUri()
    {
        return $this->moduleUri;
    }


    /**
     * Provides a mechanism to communicate additional information about the response.
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
     * Provides a mechanism to communicate additional information about the response.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public function getNote()
    {
        return $this->note;
    }


    /**
     * Indicates when the guidance response was processed.
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
                'FHIRGuidanceResponse::setOccurrenceDateTime - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($occurrenceDateTime)
            ));
        }
        $this->occurrenceDateTime = $occurrenceDateTime;
        return $this;
    }

    /**
     * Indicates when the guidance response was processed.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getOccurrenceDateTime()
    {
        return $this->occurrenceDateTime;
    }


    /**
     * The output parameters of the evaluation, if any. Many modules will result in the return of specific resources such as procedure or communication requests that are returned as part of the operation result. However, modules may define specific outputs that would be returned as the result of the evaluation, and these would be returned in this element.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setOutputParameters(FHIRReference $outputParameters = null)
    {
        if (null === $outputParameters) {
            return $this; 
        }
        $this->outputParameters = $outputParameters;
        return $this;
    }

    /**
     * The output parameters of the evaluation, if any. Many modules will result in the return of specific resources such as procedure or communication requests that are returned as part of the operation result. However, modules may define specific outputs that would be returned as the result of the evaluation, and these would be returned in this element.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getOutputParameters()
    {
        return $this->outputParameters;
    }


    /**
     * Provides a reference to the device that performed the guidance.
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
     * Provides a reference to the device that performed the guidance.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPerformer()
    {
        return $this->performer;
    }


    /**
     * Describes the reason for the guidance response in coded or textual form.
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
     * Describes the reason for the guidance response in coded or textual form.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getReasonCode()
    {
        return $this->reasonCode;
    }


    /**
     * Indicates the reason the request was initiated. This is typically provided as a parameter to the evaluation and echoed by the service, although for some use cases, such as subscription- or event-based scenarios, it may provide an indication of the cause for the response.
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
     * Indicates the reason the request was initiated. This is typically provided as a parameter to the evaluation and echoed by the service, although for some use cases, such as subscription- or event-based scenarios, it may provide an indication of the cause for the response.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getReasonReference()
    {
        return $this->reasonReference;
    }


    /**
     * The identifier of the request associated with this response. If an identifier was given as part of the request, it will be reproduced here to enable the requester to more easily identify the response in a multi-request scenario.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     * @return $this
     */
    public function setRequestIdentifier(FHIRIdentifier $requestIdentifier = null)
    {
        if (null === $requestIdentifier) {
            return $this; 
        }
        $this->requestIdentifier = $requestIdentifier;
        return $this;
    }

    /**
     * The identifier of the request associated with this response. If an identifier was given as part of the request, it will be reproduced here to enable the requester to more easily identify the response in a multi-request scenario.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getRequestIdentifier()
    {
        return $this->requestIdentifier;
    }


    /**
     * The actions, if any, produced by the evaluation of the artifact.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setResult(FHIRReference $result = null)
    {
        if (null === $result) {
            return $this; 
        }
        $this->result = $result;
        return $this;
    }

    /**
     * The actions, if any, produced by the evaluation of the artifact.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getResult()
    {
        return $this->result;
    }


    /**
     * The status of the response. If the evaluation is completed successfully, the status will indicate success. However, in order to complete the evaluation, the engine may require more information. In this case, the status will be data-required, and the response will contain a description of the additional required information. If the evaluation completed successfully, but the engine determines that a potentially more accurate response could be provided if more data was available, the status will be data-requested, and the response will contain a description of the additional requested information.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRGuidanceResponseStatus
     * @return $this
     */
    public function setStatus($status)
    {
        if (null === $status) {
            return $this; 
        }
        if (is_scalar($status)) {
            $status = new FHIRGuidanceResponseStatus($status);
        }
        if (!($status instanceof FHIRGuidanceResponseStatus)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRGuidanceResponse::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRGuidanceResponseStatus or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * The status of the response. If the evaluation is completed successfully, the status will indicate success. However, in order to complete the evaluation, the engine may require more information. In this case, the status will be data-required, and the response will contain a description of the additional required information. If the evaluation completed successfully, but the engine determines that a potentially more accurate response could be provided if more data was available, the status will be data-requested, and the response will contain a description of the additional requested information.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRGuidanceResponseStatus
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * The patient for which the request was processed.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setSubject(FHIRReference $subject = null)
    {
        if (null === $subject) {
            return $this; 
        }
        $this->subject = $subject;
        return $this;
    }

    /**
     * The patient for which the request was processed.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
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
        $a['resourceType'] = self::FHIR_TYPE_NAME;
        if (null !== ($v = $this->getContext())) {
            $a['context'] = $v;
        }
        if (null !== ($v = $this->getDataRequirement())) {
            $a['dataRequirement'] = $v;
        }
        if (null !== ($v = $this->getEvaluationMessage())) {
            $a['evaluationMessage'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getModuleCanonical())) {
            $a['moduleCanonical'] = $v;
        }
        if (null !== ($v = $this->getModuleCodeableConcept())) {
            $a['moduleCodeableConcept'] = $v;
        }
        if (null !== ($v = $this->getModuleUri())) {
            $a['moduleUri'] = $v;
        }
        if (null !== ($v = $this->getNote())) {
            $a['note'] = $v;
        }
        if (null !== ($v = $this->getOccurrenceDateTime())) {
            $a['occurrenceDateTime'] = $v;
        }
        if (null !== ($v = $this->getOutputParameters())) {
            $a['outputParameters'] = $v;
        }
        if (null !== ($v = $this->getPerformer())) {
            $a['performer'] = $v;
        }
        if (null !== ($v = $this->getReasonCode())) {
            $a['reasonCode'] = $v;
        }
        if (null !== ($v = $this->getReasonReference())) {
            $a['reasonReference'] = $v;
        }
        if (null !== ($v = $this->getRequestIdentifier())) {
            $a['requestIdentifier'] = $v;
        }
        if (null !== ($v = $this->getResult())) {
            $a['result'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
        }
        if (null !== ($v = $this->getSubject())) {
            $a['subject'] = $v;
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
            $sxe = new \SimpleXMLElement('<GuidanceResponse xmlns="http://hl7.org/fhir"></GuidanceResponse>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}