<?php namespace PHPFHIRGenerated\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 20th, 2017
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2017 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * A guidance response is the formal response to a guidance request, including any output parameters returned by the evaluation, as well as the description of any proposed actions to be taken.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRGuidanceResponse extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * The id of the request associated with this response. If an id was given as part of the request, it will be reproduced here to enable the requester to more easily identify the response in a multi-request scenario.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public $requestId = null;

    /**
     * Allows a service to provide a unique, business identifier for the response.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * A reference to the knowledge module that was invoked.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $module = null;

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
     * Allows the context of the guidance response to be provided if available. In a service context, this would likely be unavailable.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $context = null;

    /**
     * Indicates when the guidance response was processed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $occurrenceDateTime = null;

    /**
     * Provides a reference to the device that performed the guidance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $performer = null;

    /**
     * Indicates the reason the request was initiated. This is typically provided as a parameter to the evaluation and echoed by the service, although for some use cases, such as subscription- or event-based scenarios, it may provide an indication of the cause for the response. (choose any one of reason*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $reasonCodeableConcept = null;

    /**
     * Indicates the reason the request was initiated. This is typically provided as a parameter to the evaluation and echoed by the service, although for some use cases, such as subscription- or event-based scenarios, it may provide an indication of the cause for the response. (choose any one of reason*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $reasonReference = null;

    /**
     * Provides a mechanism to communicate additional information about the response.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    public $note = array();

    /**
     * Messages resulting from the evaluation of the artifact or artifacts. As part of evaluating the request, the engine may produce informational or warning messages. These messages will be provided by this element.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $evaluationMessage = array();

    /**
     * The output parameters of the evaluation, if any. Many modules will result in the return of specific resources such as procedure or communication requests that are returned as part of the operation result. However, modules may define specific outputs that would be returned as the result of the evaluation, and these would be returned in this element.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $outputParameters = null;

    /**
     * The actions, if any, produced by the evaluation of the artifact.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $result = null;

    /**
     * If the evaluation could not be completed due to lack of information, or additional information would potentially result in a more accurate response, this element will a description of the data required in order to proceed with the evaluation. A subsequent request to the service should include this data.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDataRequirement[]
     */
    public $dataRequirement = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'GuidanceResponse';

    /**
     * The id of the request associated with this response. If an id was given as part of the request, it will be reproduced here to enable the requester to more easily identify the response in a multi-request scenario.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * The id of the request associated with this response. If an id was given as part of the request, it will be reproduced here to enable the requester to more easily identify the response in a multi-request scenario.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRId $requestId
     * @return $this
     */
    public function setRequestId($requestId)
    {
        $this->requestId = $requestId;
        return $this;
    }

    /**
     * Allows a service to provide a unique, business identifier for the response.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Allows a service to provide a unique, business identifier for the response.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * A reference to the knowledge module that was invoked.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getModule()
    {
        return $this->module;
    }

    /**
     * A reference to the knowledge module that was invoked.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $module
     * @return $this
     */
    public function setModule($module)
    {
        $this->module = $module;
        return $this;
    }

    /**
     * The status of the response. If the evaluation is completed successfully, the status will indicate success. However, in order to complete the evaluation, the engine may require more information. In this case, the status will be data-required, and the response will contain a description of the additional required information. If the evaluation completed successfully, but the engine determines that a potentially more accurate response could be provided if more data was available, the status will be data-requested, and the response will contain a description of the additional requested information.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRGuidanceResponseStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of the response. If the evaluation is completed successfully, the status will indicate success. However, in order to complete the evaluation, the engine may require more information. In this case, the status will be data-required, and the response will contain a description of the additional required information. If the evaluation completed successfully, but the engine determines that a potentially more accurate response could be provided if more data was available, the status will be data-requested, and the response will contain a description of the additional requested information.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRGuidanceResponseStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * The patient for which the request was processed.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * The patient for which the request was processed.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $subject
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Allows the context of the guidance response to be provided if available. In a service context, this would likely be unavailable.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Allows the context of the guidance response to be provided if available. In a service context, this would likely be unavailable.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $context
     * @return $this
     */
    public function setContext($context)
    {
        $this->context = $context;
        return $this;
    }

    /**
     * Indicates when the guidance response was processed.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getOccurrenceDateTime()
    {
        return $this->occurrenceDateTime;
    }

    /**
     * Indicates when the guidance response was processed.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $occurrenceDateTime
     * @return $this
     */
    public function setOccurrenceDateTime($occurrenceDateTime)
    {
        $this->occurrenceDateTime = $occurrenceDateTime;
        return $this;
    }

    /**
     * Provides a reference to the device that performed the guidance.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * Provides a reference to the device that performed the guidance.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $performer
     * @return $this
     */
    public function setPerformer($performer)
    {
        $this->performer = $performer;
        return $this;
    }

    /**
     * Indicates the reason the request was initiated. This is typically provided as a parameter to the evaluation and echoed by the service, although for some use cases, such as subscription- or event-based scenarios, it may provide an indication of the cause for the response. (choose any one of reason*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getReasonCodeableConcept()
    {
        return $this->reasonCodeableConcept;
    }

    /**
     * Indicates the reason the request was initiated. This is typically provided as a parameter to the evaluation and echoed by the service, although for some use cases, such as subscription- or event-based scenarios, it may provide an indication of the cause for the response. (choose any one of reason*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $reasonCodeableConcept
     * @return $this
     */
    public function setReasonCodeableConcept($reasonCodeableConcept)
    {
        $this->reasonCodeableConcept = $reasonCodeableConcept;
        return $this;
    }

    /**
     * Indicates the reason the request was initiated. This is typically provided as a parameter to the evaluation and echoed by the service, although for some use cases, such as subscription- or event-based scenarios, it may provide an indication of the cause for the response. (choose any one of reason*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getReasonReference()
    {
        return $this->reasonReference;
    }

    /**
     * Indicates the reason the request was initiated. This is typically provided as a parameter to the evaluation and echoed by the service, although for some use cases, such as subscription- or event-based scenarios, it may provide an indication of the cause for the response. (choose any one of reason*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $reasonReference
     * @return $this
     */
    public function setReasonReference($reasonReference)
    {
        $this->reasonReference = $reasonReference;
        return $this;
    }

    /**
     * Provides a mechanism to communicate additional information about the response.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Provides a mechanism to communicate additional information about the response.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAnnotation $note
     * @return $this
     */
    public function addNote($note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * Messages resulting from the evaluation of the artifact or artifacts. As part of evaluating the request, the engine may produce informational or warning messages. These messages will be provided by this element.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getEvaluationMessage()
    {
        return $this->evaluationMessage;
    }

    /**
     * Messages resulting from the evaluation of the artifact or artifacts. As part of evaluating the request, the engine may produce informational or warning messages. These messages will be provided by this element.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $evaluationMessage
     * @return $this
     */
    public function addEvaluationMessage($evaluationMessage)
    {
        $this->evaluationMessage[] = $evaluationMessage;
        return $this;
    }

    /**
     * The output parameters of the evaluation, if any. Many modules will result in the return of specific resources such as procedure or communication requests that are returned as part of the operation result. However, modules may define specific outputs that would be returned as the result of the evaluation, and these would be returned in this element.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getOutputParameters()
    {
        return $this->outputParameters;
    }

    /**
     * The output parameters of the evaluation, if any. Many modules will result in the return of specific resources such as procedure or communication requests that are returned as part of the operation result. However, modules may define specific outputs that would be returned as the result of the evaluation, and these would be returned in this element.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $outputParameters
     * @return $this
     */
    public function setOutputParameters($outputParameters)
    {
        $this->outputParameters = $outputParameters;
        return $this;
    }

    /**
     * The actions, if any, produced by the evaluation of the artifact.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * The actions, if any, produced by the evaluation of the artifact.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $result
     * @return $this
     */
    public function setResult($result)
    {
        $this->result = $result;
        return $this;
    }

    /**
     * If the evaluation could not be completed due to lack of information, or additional information would potentially result in a more accurate response, this element will a description of the data required in order to proceed with the evaluation. A subsequent request to the service should include this data.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDataRequirement[]
     */
    public function getDataRequirement()
    {
        return $this->dataRequirement;
    }

    /**
     * If the evaluation could not be completed due to lack of information, or additional information would potentially result in a more accurate response, this element will a description of the data required in order to proceed with the evaluation. A subsequent request to the service should include this data.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDataRequirement $dataRequirement
     * @return $this
     */
    public function addDataRequirement($dataRequirement)
    {
        $this->dataRequirement[] = $dataRequirement;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName()
    {
        return $this->_fhirElementName;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $json = parent::jsonSerialize();
        $json['resourceType'] = $this->_fhirElementName;
        if (null !== $this->requestId) $json['requestId'] = json_encode($this->requestId);
        if (null !== $this->identifier) $json['identifier'] = json_encode($this->identifier);
        if (null !== $this->module) $json['module'] = json_encode($this->module);
        if (null !== $this->status) $json['status'] = json_encode($this->status);
        if (null !== $this->subject) $json['subject'] = json_encode($this->subject);
        if (null !== $this->context) $json['context'] = json_encode($this->context);
        if (null !== $this->occurrenceDateTime) $json['occurrenceDateTime'] = json_encode($this->occurrenceDateTime);
        if (null !== $this->performer) $json['performer'] = json_encode($this->performer);
        if (null !== $this->reasonCodeableConcept) $json['reasonCodeableConcept'] = json_encode($this->reasonCodeableConcept);
        if (null !== $this->reasonReference) $json['reasonReference'] = json_encode($this->reasonReference);
        if (0 < count($this->note)) {
            $json['note'] = [];
            foreach($this->note as $note) {
                $json['note'][] = json_encode($note);
            }
        }
        if (0 < count($this->evaluationMessage)) {
            $json['evaluationMessage'] = [];
            foreach($this->evaluationMessage as $evaluationMessage) {
                $json['evaluationMessage'][] = json_encode($evaluationMessage);
            }
        }
        if (null !== $this->outputParameters) $json['outputParameters'] = json_encode($this->outputParameters);
        if (null !== $this->result) $json['result'] = json_encode($this->result);
        if (0 < count($this->dataRequirement)) {
            $json['dataRequirement'] = [];
            foreach($this->dataRequirement as $dataRequirement) {
                $json['dataRequirement'][] = json_encode($dataRequirement);
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<GuidanceResponse xmlns="http://hl7.org/fhir"></GuidanceResponse>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->requestId) $this->requestId->xmlSerialize(true, $sxe->addChild('requestId'));
        if (null !== $this->identifier) $this->identifier->xmlSerialize(true, $sxe->addChild('identifier'));
        if (null !== $this->module) $this->module->xmlSerialize(true, $sxe->addChild('module'));
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->subject) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (null !== $this->context) $this->context->xmlSerialize(true, $sxe->addChild('context'));
        if (null !== $this->occurrenceDateTime) $this->occurrenceDateTime->xmlSerialize(true, $sxe->addChild('occurrenceDateTime'));
        if (null !== $this->performer) $this->performer->xmlSerialize(true, $sxe->addChild('performer'));
        if (null !== $this->reasonCodeableConcept) $this->reasonCodeableConcept->xmlSerialize(true, $sxe->addChild('reasonCodeableConcept'));
        if (null !== $this->reasonReference) $this->reasonReference->xmlSerialize(true, $sxe->addChild('reasonReference'));
        if (0 < count($this->note)) {
            foreach($this->note as $note) {
                $note->xmlSerialize(true, $sxe->addChild('note'));
            }
        }
        if (0 < count($this->evaluationMessage)) {
            foreach($this->evaluationMessage as $evaluationMessage) {
                $evaluationMessage->xmlSerialize(true, $sxe->addChild('evaluationMessage'));
            }
        }
        if (null !== $this->outputParameters) $this->outputParameters->xmlSerialize(true, $sxe->addChild('outputParameters'));
        if (null !== $this->result) $this->result->xmlSerialize(true, $sxe->addChild('result'));
        if (0 < count($this->dataRequirement)) {
            foreach($this->dataRequirement as $dataRequirement) {
                $dataRequirement->xmlSerialize(true, $sxe->addChild('dataRequirement'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}