<?php

namespace DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: July 27th, 2019 15:22+0000
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

use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProcessResponse\FHIRProcessResponseProcessNote;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRFinancialResourceStatusCodes;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRProcessOutcomeCodes;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\PHPFHIRTypeInterface;

/**
 * This resource provides processing status, errors and notes from the processing
 * of a resource.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRProcessResponse
 * @package \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRProcessResponse extends FHIRDomainResource
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_PROCESS_RESPONSE;

    const FIELD_COMMUNICATION_REQUEST = 'communicationRequest';
    const FIELD_CREATED = 'created';
    const FIELD_CREATED_EXT = '_created';
    const FIELD_DISPOSITION = 'disposition';
    const FIELD_DISPOSITION_EXT = '_disposition';
    const FIELD_ERROR = 'error';
    const FIELD_FORM = 'form';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_ORGANIZATION = 'organization';
    const FIELD_OUTCOME = 'outcome';
    const FIELD_PROCESS_NOTE = 'processNote';
    const FIELD_REQUEST = 'request';
    const FIELD_REQUEST_PROVIDER = 'requestProvider';
    const FIELD_STATUS = 'status';

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Request for additional supporting or authorizing information, such as:
     * documents, images or resources.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    private $communicationRequest = [];

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date when the enclosed suite of services were performed or completed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    private $created = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A description of the status of the adjudication or processing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $disposition = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Processing errors.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    private $error = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The form to be used for printing the content.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $form = null;

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The Response business identifier.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    private $identifier = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The organization who produced this adjudicated response.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $organization = null;

    /**
     * Local status of outcome codes.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Transaction status: error, complete, held.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRProcessOutcomeCodes
     */
    private $outcome = null;

    /**
     * This resource provides processing status, errors and notes from the processing
     * of a resource.
     *
     * Suite of processing notes or additional requirements if the processing has been
     * held.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProcessResponse\FHIRProcessResponseProcessNote[]
     */
    private $processNote = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Original request resource reference.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $request = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The practitioner who is responsible for the services rendered to the patient.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $requestProvider = null;

    /**
     * A code specifying the state of the resource instance.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The status of the resource instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRFinancialResourceStatusCodes
     */
    private $status = null;

    /**
     * FHIRProcessResponse Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRProcessResponse::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_COMMUNICATION_REQUEST])) {
            if (is_array($data[self::FIELD_COMMUNICATION_REQUEST])) {
                foreach($data[self::FIELD_COMMUNICATION_REQUEST] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addCommunicationRequest($v);
                    } else {
                        $this->addCommunicationRequest(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_COMMUNICATION_REQUEST] instanceof FHIRReference) {
                $this->addCommunicationRequest($data[self::FIELD_COMMUNICATION_REQUEST]);
            } else {
                $this->addCommunicationRequest(new FHIRReference($data[self::FIELD_COMMUNICATION_REQUEST]));
            }
        }
        if (isset($data[self::FIELD_CREATED])) {
            $ext = (isset($data[self::FIELD_CREATED_EXT]) && is_array($data[self::FIELD_CREATED_EXT]))
                ? $data[self::FIELD_CREATED_EXT]
                : null;
            if ($data[self::FIELD_CREATED] instanceof FHIRDateTime) {
                $this->setCreated($data[self::FIELD_CREATED]);
            } elseif ($ext && is_scalar($data[self::FIELD_CREATED])) {
                $this->setCreated(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_CREATED]] + $ext));
            } else {
                $this->setCreated(new FHIRDateTime($data[self::FIELD_CREATED]));
            }
        }
        if (isset($data[self::FIELD_DISPOSITION])) {
            $ext = (isset($data[self::FIELD_DISPOSITION_EXT]) && is_array($data[self::FIELD_DISPOSITION_EXT]))
                ? $data[self::FIELD_DISPOSITION_EXT]
                : null;
            if ($data[self::FIELD_DISPOSITION] instanceof FHIRString) {
                $this->setDisposition($data[self::FIELD_DISPOSITION]);
            } elseif ($ext && is_scalar($data[self::FIELD_DISPOSITION])) {
                $this->setDisposition(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_DISPOSITION]] + $ext));
            } else {
                $this->setDisposition(new FHIRString($data[self::FIELD_DISPOSITION]));
            }
        }
        if (isset($data[self::FIELD_ERROR])) {
            if (is_array($data[self::FIELD_ERROR])) {
                foreach($data[self::FIELD_ERROR] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addError($v);
                    } else {
                        $this->addError(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_ERROR] instanceof FHIRCodeableConcept) {
                $this->addError($data[self::FIELD_ERROR]);
            } else {
                $this->addError(new FHIRCodeableConcept($data[self::FIELD_ERROR]));
            }
        }
        if (isset($data[self::FIELD_FORM])) {
            if ($data[self::FIELD_FORM] instanceof FHIRCodeableConcept) {
                $this->setForm($data[self::FIELD_FORM]);
            } else {
                $this->setForm(new FHIRCodeableConcept($data[self::FIELD_FORM]));
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
        if (isset($data[self::FIELD_ORGANIZATION])) {
            if ($data[self::FIELD_ORGANIZATION] instanceof FHIRReference) {
                $this->setOrganization($data[self::FIELD_ORGANIZATION]);
            } else {
                $this->setOrganization(new FHIRReference($data[self::FIELD_ORGANIZATION]));
            }
        }
        if (isset($data[self::FIELD_OUTCOME])) {
            if ($data[self::FIELD_OUTCOME] instanceof FHIRProcessOutcomeCodes) {
                $this->setOutcome($data[self::FIELD_OUTCOME]);
            } else {
                $this->setOutcome(new FHIRProcessOutcomeCodes($data[self::FIELD_OUTCOME]));
            }
        }
        if (isset($data[self::FIELD_PROCESS_NOTE])) {
            if (is_array($data[self::FIELD_PROCESS_NOTE])) {
                foreach($data[self::FIELD_PROCESS_NOTE] as $v) {
                    if ($v instanceof FHIRProcessResponseProcessNote) {
                        $this->addProcessNote($v);
                    } else {
                        $this->addProcessNote(new FHIRProcessResponseProcessNote($v));
                    }
                }
            } else if ($data[self::FIELD_PROCESS_NOTE] instanceof FHIRProcessResponseProcessNote) {
                $this->addProcessNote($data[self::FIELD_PROCESS_NOTE]);
            } else {
                $this->addProcessNote(new FHIRProcessResponseProcessNote($data[self::FIELD_PROCESS_NOTE]));
            }
        }
        if (isset($data[self::FIELD_REQUEST])) {
            if ($data[self::FIELD_REQUEST] instanceof FHIRReference) {
                $this->setRequest($data[self::FIELD_REQUEST]);
            } else {
                $this->setRequest(new FHIRReference($data[self::FIELD_REQUEST]));
            }
        }
        if (isset($data[self::FIELD_REQUEST_PROVIDER])) {
            if ($data[self::FIELD_REQUEST_PROVIDER] instanceof FHIRReference) {
                $this->setRequestProvider($data[self::FIELD_REQUEST_PROVIDER]);
            } else {
                $this->setRequestProvider(new FHIRReference($data[self::FIELD_REQUEST_PROVIDER]));
            }
        }
        if (isset($data[self::FIELD_STATUS])) {
            if ($data[self::FIELD_STATUS] instanceof FHIRFinancialResourceStatusCodes) {
                $this->setStatus($data[self::FIELD_STATUS]);
            } else {
                $this->setStatus(new FHIRFinancialResourceStatusCodes($data[self::FIELD_STATUS]));
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Request for additional supporting or authorizing information, such as:
     * documents, images or resources.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getCommunicationRequest()
    {
        return $this->communicationRequest;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Request for additional supporting or authorizing information, such as:
     * documents, images or resources.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $communicationRequest
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProcessResponse
     */
    public function addCommunicationRequest(FHIRReference $communicationRequest = null)
    {
        $this->communicationRequest[] = $communicationRequest;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Request for additional supporting or authorizing information, such as:
     * documents, images or resources.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference[] $communicationRequest
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProcessResponse
     */
    public function setCommunicationRequest(array $communicationRequest = [])
    {
        $this->communicationRequest = [];
        if ([] === $communicationRequest) {
            return $this;
        }
        foreach($communicationRequest as $v) {
            if ($v instanceof FHIRReference) {
                $this->addCommunicationRequest($v);
            } else {
                $this->addCommunicationRequest(new FHIRReference($v));
            }
        }
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
     * The date when the enclosed suite of services were performed or completed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The date when the enclosed suite of services were performed or completed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime $created
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProcessResponse
     */
    public function setCreated($created = null)
    {
        if (null === $created) {
            $this->created = null;
            return $this;
        }
        if ($created instanceof FHIRDateTime) {
            $this->created = $created;
            return $this;
        }
        $this->created = new FHIRDateTime($created);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A description of the status of the adjudication or processing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDisposition()
    {
        return $this->disposition;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A description of the status of the adjudication or processing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $disposition
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProcessResponse
     */
    public function setDisposition($disposition = null)
    {
        if (null === $disposition) {
            $this->disposition = null;
            return $this;
        }
        if ($disposition instanceof FHIRString) {
            $this->disposition = $disposition;
            return $this;
        }
        $this->disposition = new FHIRString($disposition);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Processing errors.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Processing errors.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $error
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProcessResponse
     */
    public function addError(FHIRCodeableConcept $error = null)
    {
        $this->error[] = $error;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Processing errors.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[] $error
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProcessResponse
     */
    public function setError(array $error = [])
    {
        $this->error = [];
        if ([] === $error) {
            return $this;
        }
        foreach($error as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addError($v);
            } else {
                $this->addError(new FHIRCodeableConcept($v));
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
     * The form to be used for printing the content.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getForm()
    {
        return $this->form;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The form to be used for printing the content.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $form
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProcessResponse
     */
    public function setForm(FHIRCodeableConcept $form = null)
    {
        $this->form = $form;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The Response business identifier.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
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
     * The Response business identifier.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProcessResponse
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
     * The Response business identifier.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRIdentifier[] $identifier
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProcessResponse
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
     * The organization who produced this adjudicated response.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The organization who produced this adjudicated response.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $organization
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProcessResponse
     */
    public function setOrganization(FHIRReference $organization = null)
    {
        $this->organization = $organization;
        return $this;
    }

    /**
     * Local status of outcome codes.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Transaction status: error, complete, held.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRProcessOutcomeCodes
     */
    public function getOutcome()
    {
        return $this->outcome;
    }

    /**
     * Local status of outcome codes.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Transaction status: error, complete, held.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRProcessOutcomeCodes $outcome
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProcessResponse
     */
    public function setOutcome(FHIRProcessOutcomeCodes $outcome = null)
    {
        $this->outcome = $outcome;
        return $this;
    }

    /**
     * This resource provides processing status, errors and notes from the processing
     * of a resource.
     *
     * Suite of processing notes or additional requirements if the processing has been
     * held.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProcessResponse\FHIRProcessResponseProcessNote[]
     */
    public function getProcessNote()
    {
        return $this->processNote;
    }

    /**
     * This resource provides processing status, errors and notes from the processing
     * of a resource.
     *
     * Suite of processing notes or additional requirements if the processing has been
     * held.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProcessResponse\FHIRProcessResponseProcessNote $processNote
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProcessResponse
     */
    public function addProcessNote(FHIRProcessResponseProcessNote $processNote = null)
    {
        $this->processNote[] = $processNote;
        return $this;
    }

    /**
     * This resource provides processing status, errors and notes from the processing
     * of a resource.
     *
     * Suite of processing notes or additional requirements if the processing has been
     * held.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProcessResponse\FHIRProcessResponseProcessNote[] $processNote
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProcessResponse
     */
    public function setProcessNote(array $processNote = [])
    {
        $this->processNote = [];
        if ([] === $processNote) {
            return $this;
        }
        foreach($processNote as $v) {
            if ($v instanceof FHIRProcessResponseProcessNote) {
                $this->addProcessNote($v);
            } else {
                $this->addProcessNote(new FHIRProcessResponseProcessNote($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Original request resource reference.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Original request resource reference.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $request
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProcessResponse
     */
    public function setRequest(FHIRReference $request = null)
    {
        $this->request = $request;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The practitioner who is responsible for the services rendered to the patient.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getRequestProvider()
    {
        return $this->requestProvider;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The practitioner who is responsible for the services rendered to the patient.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $requestProvider
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProcessResponse
     */
    public function setRequestProvider(FHIRReference $requestProvider = null)
    {
        $this->requestProvider = $requestProvider;
        return $this;
    }

    /**
     * A code specifying the state of the resource instance.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The status of the resource instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRFinancialResourceStatusCodes
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
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRFinancialResourceStatusCodes $status
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProcessResponse
     */
    public function setStatus(FHIRFinancialResourceStatusCodes $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null \$sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProcessResponse $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProcessResponse
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
                throw new \DomainException(sprintf('FHIRProcessResponse::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRProcessResponse::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRDomainResource::xmlUnserialize(\$sxe, new FHIRProcessResponse);
        } elseif (!is_object($type) || !($type instanceof FHIRProcessResponse)) {
            throw new \RuntimeException(sprintf(
                'FHIRProcessResponse::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProcessResponse or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->communicationRequest)) {
            foreach($children->communicationRequest as $child) {
                $type->addCommunicationRequest(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($attributes->created)) {
            $type->setCreated((string)$attributes->created);
        }
        if (isset($children->created)) {
            $type->setCreated(FHIRDateTime::xmlUnserialize($children->created));
        }
        if (isset($attributes->disposition)) {
            $type->setDisposition((string)$attributes->disposition);
        }
        if (isset($children->disposition)) {
            $type->setDisposition(FHIRString::xmlUnserialize($children->disposition));
        }
        if (isset($children->error)) {
            foreach($children->error as $child) {
                $type->addError(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->form)) {
            $type->setForm(FHIRCodeableConcept::xmlUnserialize($children->form));
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->organization)) {
            $type->setOrganization(FHIRReference::xmlUnserialize($children->organization));
        }
        if (isset($children->outcome)) {
            $type->setOutcome(FHIRProcessOutcomeCodes::xmlUnserialize($children->outcome));
        }
        if (isset($children->processNote)) {
            foreach($children->processNote as $child) {
                $type->addProcessNote(FHIRProcessResponseProcessNote::xmlUnserialize($child));
            }
        }
        if (isset($children->request)) {
            $type->setRequest(FHIRReference::xmlUnserialize($children->request));
        }
        if (isset($children->requestProvider)) {
            $type->setRequestProvider(FHIRReference::xmlUnserialize($children->requestProvider));
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRFinancialResourceStatusCodes::xmlUnserialize($children->status));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement \$sxe
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<ProcessResponse xmlns="http://hl7.org/fhir"></ProcessResponse>');
        }
        if ([] !== ($vs = $this->getCommunicationRequest())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_COMMUNICATION_REQUEST));
            }
        }
        if (null !== ($v = $this->getCreated())) {
            $sxe->addAttribute(self::FIELD_CREATED, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_CREATED));
            }
        }
        if (null !== ($v = $this->getDisposition())) {
            $sxe->addAttribute(self::FIELD_DISPOSITION, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_DISPOSITION));
            }
        }
        if ([] !== ($vs = $this->getError())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ERROR));
            }
        }
        if (null !== ($v = $this->getForm())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FORM));
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER));
            }
        }
        if (null !== ($v = $this->getOrganization())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ORGANIZATION));
        }
        if (null !== ($v = $this->getOutcome())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_OUTCOME));
        }
        if ([] !== ($vs = $this->getProcessNote())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PROCESS_NOTE));
            }
        }
        if (null !== ($v = $this->getRequest())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REQUEST));
        }
        if (null !== ($v = $this->getRequestProvider())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REQUEST_PROVIDER));
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if ([] !== ($vs = $this->getCommunicationRequest())) {
            $a[self::FIELD_COMMUNICATION_REQUEST] = $vs;
        }
        if (null !== ($v = $this->getCreated())) {
            $a[self::FIELD_CREATED] = (string)$v;
            $a[self::FIELD_CREATED_EXT] = $v;
        }
        if (null !== ($v = $this->getDisposition())) {
            $a[self::FIELD_DISPOSITION] = (string)$v;
            $a[self::FIELD_DISPOSITION_EXT] = $v;
        }
        if ([] !== ($vs = $this->getError())) {
            $a[self::FIELD_ERROR] = $vs;
        }
        if (null !== ($v = $this->getForm())) {
            $a[self::FIELD_FORM] = $v;
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $vs;
        }
        if (null !== ($v = $this->getOrganization())) {
            $a[self::FIELD_ORGANIZATION] = $v;
        }
        if (null !== ($v = $this->getOutcome())) {
            $a[self::FIELD_OUTCOME] = $v;
        }
        if ([] !== ($vs = $this->getProcessNote())) {
            $a[self::FIELD_PROCESS_NOTE] = $vs;
        }
        if (null !== ($v = $this->getRequest())) {
            $a[self::FIELD_REQUEST] = $v;
        }
        if (null !== ($v = $this->getRequestProvider())) {
            $a[self::FIELD_REQUEST_PROVIDER] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v;
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