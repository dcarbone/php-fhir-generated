<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource;

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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIREligibilityResponse\FHIREligibilityResponseError;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIREligibilityResponse\FHIREligibilityResponseInsurance;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRFinancialResourceStatusCodes;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * This resource provides eligibility and plan details from the processing of an
 * Eligibility resource.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIREligibilityResponse
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource
 */
class FHIREligibilityResponse extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_ELIGIBILITY_RESPONSE;

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_CREATED = 'created';
    const FIELD_CREATED_EXT = '_created';
    const FIELD_DISPOSITION = 'disposition';
    const FIELD_DISPOSITION_EXT = '_disposition';
    const FIELD_ERROR = 'error';
    const FIELD_FORM = 'form';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_IDENTIFIER_EXT = '_identifier';
    const FIELD_INFORCE = 'inforce';
    const FIELD_INFORCE_EXT = '_inforce';
    const FIELD_INSURANCE = 'insurance';
    const FIELD_INSURER = 'insurer';
    const FIELD_OUTCOME = 'outcome';
    const FIELD_REQUEST = 'request';
    const FIELD_REQUEST_ORGANIZATION = 'requestOrganization';
    const FIELD_REQUEST_PROVIDER = 'requestProvider';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';

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
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    private $created = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A description of the status of the adjudication.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    private $disposition = null;
    /**
     * This resource provides eligibility and plan details from the processing of an
     * Eligibility resource.
     *
     * Mutually exclusive with Services Provided (Item).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIREligibilityResponse\FHIREligibilityResponseError[]
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
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    private $form = null;
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The Response business identifier.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier[]
     */
    private $identifier = [];
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Flag indicating if the coverage provided is inforce currently if no service
     * date(s) specified or for the whole duration of the service dates.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    private $inforce = null;
    /**
     * This resource provides eligibility and plan details from the processing of an
     * Eligibility resource.
     *
     * The insurer may provide both the details for the requested coverage as well as
     * details for additional coverages known to the insurer.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIREligibilityResponse\FHIREligibilityResponseInsurance[]
     */
    private $insurance = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The Insurer who produced this adjudicated response.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    private $insurer = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Transaction status: error, complete.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    private $outcome = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Original request resource reference.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    private $request = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The organization which is responsible for the services rendered to the patient.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    private $requestOrganization = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The practitioner who is responsible for the services rendered to the patient.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    private $requestProvider = null;
    /**
     * A code specifying the state of the resource instance.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The status of the resource instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRFinancialResourceStatusCodes
     */
    private $status = null;

    /**
     * FHIREligibilityResponse Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIREligibilityResponse::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
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
                    if ($v instanceof FHIREligibilityResponseError) {
                        $this->addError($v);
                    } else {
                        $this->addError(new FHIREligibilityResponseError($v));
                    }
                }
            } else if ($data[self::FIELD_ERROR] instanceof FHIREligibilityResponseError) {
                $this->addError($data[self::FIELD_ERROR]);
            } else {
                $this->addError(new FHIREligibilityResponseError($data[self::FIELD_ERROR]));
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
        if (isset($data[self::FIELD_INFORCE])) {
            $ext = (isset($data[self::FIELD_INFORCE_EXT]) && is_array($data[self::FIELD_INFORCE_EXT]))
                ? $data[self::FIELD_INFORCE_EXT]
                : null;
            if ($data[self::FIELD_INFORCE] instanceof FHIRBoolean) {
                $this->setInforce($data[self::FIELD_INFORCE]);
            } elseif ($ext && is_scalar($data[self::FIELD_INFORCE])) {
                $this->setInforce(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_INFORCE]] + $ext));
            } else {
                $this->setInforce(new FHIRBoolean($data[self::FIELD_INFORCE]));
            }
        }
        if (isset($data[self::FIELD_INSURANCE])) {
            if (is_array($data[self::FIELD_INSURANCE])) {
                foreach($data[self::FIELD_INSURANCE] as $v) {
                    if ($v instanceof FHIREligibilityResponseInsurance) {
                        $this->addInsurance($v);
                    } else {
                        $this->addInsurance(new FHIREligibilityResponseInsurance($v));
                    }
                }
            } else if ($data[self::FIELD_INSURANCE] instanceof FHIREligibilityResponseInsurance) {
                $this->addInsurance($data[self::FIELD_INSURANCE]);
            } else {
                $this->addInsurance(new FHIREligibilityResponseInsurance($data[self::FIELD_INSURANCE]));
            }
        }
        if (isset($data[self::FIELD_INSURER])) {
            if ($data[self::FIELD_INSURER] instanceof FHIRReference) {
                $this->setInsurer($data[self::FIELD_INSURER]);
            } else {
                $this->setInsurer(new FHIRReference($data[self::FIELD_INSURER]));
            }
        }
        if (isset($data[self::FIELD_OUTCOME])) {
            if ($data[self::FIELD_OUTCOME] instanceof FHIRCodeableConcept) {
                $this->setOutcome($data[self::FIELD_OUTCOME]);
            } else {
                $this->setOutcome(new FHIRCodeableConcept($data[self::FIELD_OUTCOME]));
            }
        }
        if (isset($data[self::FIELD_REQUEST])) {
            if ($data[self::FIELD_REQUEST] instanceof FHIRReference) {
                $this->setRequest($data[self::FIELD_REQUEST]);
            } else {
                $this->setRequest(new FHIRReference($data[self::FIELD_REQUEST]));
            }
        }
        if (isset($data[self::FIELD_REQUEST_ORGANIZATION])) {
            if ($data[self::FIELD_REQUEST_ORGANIZATION] instanceof FHIRReference) {
                $this->setRequestOrganization($data[self::FIELD_REQUEST_ORGANIZATION]);
            } else {
                $this->setRequestOrganization(new FHIRReference($data[self::FIELD_REQUEST_ORGANIZATION]));
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
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIREligibilityResponse
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
        return "<EligibilityResponse{$xmlns}></EligibilityResponse>";
    }

    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
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
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime $created
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIREligibilityResponse
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
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A description of the status of the adjudication.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getDisposition()
    {
        return $this->disposition;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A description of the status of the adjudication.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $disposition
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIREligibilityResponse
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
     * This resource provides eligibility and plan details from the processing of an
     * Eligibility resource.
     *
     * Mutually exclusive with Services Provided (Item).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIREligibilityResponse\FHIREligibilityResponseError[]
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * This resource provides eligibility and plan details from the processing of an
     * Eligibility resource.
     *
     * Mutually exclusive with Services Provided (Item).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIREligibilityResponse\FHIREligibilityResponseError $error
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIREligibilityResponse
     */
    public function addError(FHIREligibilityResponseError $error = null)
    {
        $this->error[] = $error;
        return $this;
    }

    /**
     * This resource provides eligibility and plan details from the processing of an
     * Eligibility resource.
     *
     * Mutually exclusive with Services Provided (Item).
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIREligibilityResponse\FHIREligibilityResponseError[] $error
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIREligibilityResponse
     */
    public function setError(array $error = [])
    {
        $this->error = [];
        if ([] === $error) {
            return $this;
        }
        foreach($error as $v) {
            if ($v instanceof FHIREligibilityResponseError) {
                $this->addError($v);
            } else {
                $this->addError(new FHIREligibilityResponseError($v));
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
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $form
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIREligibilityResponse
     */
    public function setForm(FHIRCodeableConcept $form = null)
    {
        $this->form = $form;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The Response business identifier.
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The Response business identifier.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier $identifier
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIREligibilityResponse
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
     * The Response business identifier.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier[] $identifier
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIREligibilityResponse
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
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Flag indicating if the coverage provided is inforce currently if no service
     * date(s) specified or for the whole duration of the service dates.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    public function getInforce()
    {
        return $this->inforce;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Flag indicating if the coverage provided is inforce currently if no service
     * date(s) specified or for the whole duration of the service dates.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean $inforce
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIREligibilityResponse
     */
    public function setInforce($inforce = null)
    {
        if (null === $inforce) {
            $this->inforce = null;
            return $this;
        }
        if ($inforce instanceof FHIRBoolean) {
            $this->inforce = $inforce;
            return $this;
        }
        $this->inforce = new FHIRBoolean($inforce);
        return $this;
    }

    /**
     * This resource provides eligibility and plan details from the processing of an
     * Eligibility resource.
     *
     * The insurer may provide both the details for the requested coverage as well as
     * details for additional coverages known to the insurer.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIREligibilityResponse\FHIREligibilityResponseInsurance[]
     */
    public function getInsurance()
    {
        return $this->insurance;
    }

    /**
     * This resource provides eligibility and plan details from the processing of an
     * Eligibility resource.
     *
     * The insurer may provide both the details for the requested coverage as well as
     * details for additional coverages known to the insurer.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIREligibilityResponse\FHIREligibilityResponseInsurance $insurance
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIREligibilityResponse
     */
    public function addInsurance(FHIREligibilityResponseInsurance $insurance = null)
    {
        $this->insurance[] = $insurance;
        return $this;
    }

    /**
     * This resource provides eligibility and plan details from the processing of an
     * Eligibility resource.
     *
     * The insurer may provide both the details for the requested coverage as well as
     * details for additional coverages known to the insurer.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIREligibilityResponse\FHIREligibilityResponseInsurance[] $insurance
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIREligibilityResponse
     */
    public function setInsurance(array $insurance = [])
    {
        $this->insurance = [];
        if ([] === $insurance) {
            return $this;
        }
        foreach($insurance as $v) {
            if ($v instanceof FHIREligibilityResponseInsurance) {
                $this->addInsurance($v);
            } else {
                $this->addInsurance(new FHIREligibilityResponseInsurance($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The Insurer who produced this adjudicated response.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getInsurer()
    {
        return $this->insurer;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The Insurer who produced this adjudicated response.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $insurer
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIREligibilityResponse
     */
    public function setInsurer(FHIRReference $insurer = null)
    {
        $this->insurer = $insurer;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Transaction status: error, complete.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getOutcome()
    {
        return $this->outcome;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Transaction status: error, complete.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $outcome
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIREligibilityResponse
     */
    public function setOutcome(FHIRCodeableConcept $outcome = null)
    {
        $this->outcome = $outcome;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Original request resource reference.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $request
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIREligibilityResponse
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
     * The organization which is responsible for the services rendered to the patient.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getRequestOrganization()
    {
        return $this->requestOrganization;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The organization which is responsible for the services rendered to the patient.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $requestOrganization
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIREligibilityResponse
     */
    public function setRequestOrganization(FHIRReference $requestOrganization = null)
    {
        $this->requestOrganization = $requestOrganization;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The practitioner who is responsible for the services rendered to the patient.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $requestProvider
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIREligibilityResponse
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
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRFinancialResourceStatusCodes
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRFinancialResourceStatusCodes $status
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIREligibilityResponse
     */
    public function setStatus(FHIRFinancialResourceStatusCodes $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIREligibilityResponse $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIREligibilityResponse
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
                throw new \DomainException(sprintf('FHIREligibilityResponse::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIREligibilityResponse::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIREligibilityResponse;
        } elseif (!is_object($type) || !($type instanceof FHIREligibilityResponse)) {
            throw new \RuntimeException(sprintf(
                'FHIREligibilityResponse::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIREligibilityResponse or null, %s seen.',
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
                $type->addError(FHIREligibilityResponseError::xmlUnserialize($child));
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
        if (isset($attributes->inforce)) {
            $type->setInforce((string)$attributes->inforce);
        }
        if (isset($children->inforce)) {
            $type->setInforce(FHIRBoolean::xmlUnserialize($children->inforce));
        }
        if (isset($children->insurance)) {
            foreach($children->insurance as $child) {
                $type->addInsurance(FHIREligibilityResponseInsurance::xmlUnserialize($child));
            }
        }
        if (isset($children->insurer)) {
            $type->setInsurer(FHIRReference::xmlUnserialize($children->insurer));
        }
        if (isset($children->outcome)) {
            $type->setOutcome(FHIRCodeableConcept::xmlUnserialize($children->outcome));
        }
        if (isset($children->request)) {
            $type->setRequest(FHIRReference::xmlUnserialize($children->request));
        }
        if (isset($children->requestOrganization)) {
            $type->setRequestOrganization(FHIRReference::xmlUnserialize($children->requestOrganization));
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
        if (null !== ($v = $this->getCreated())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CREATED, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDisposition())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DISPOSITION, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getError())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ERROR, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getForm())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FORM, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getInforce())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_INFORCE, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getInsurance())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_INSURANCE, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getInsurer())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_INSURER, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getOutcome())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_OUTCOME, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getRequest())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REQUEST, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getRequestOrganization())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REQUEST_ORGANIZATION, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getRequestProvider())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REQUEST_PROVIDER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getCreated())) {
            $a[self::FIELD_CREATED] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_CREATED_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getDisposition())) {
            $a[self::FIELD_DISPOSITION] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_DISPOSITION_EXT] = $v;
            }
        }
        if ([] !== ($vs = $this->getError())) {
            $a[self::FIELD_ERROR] = $vs;
        }
        if (null !== ($v = $this->getForm())) {
            $a[self::FIELD_FORM] = $v;
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
        if (null !== ($v = $this->getInforce())) {
            $a[self::FIELD_INFORCE] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_INFORCE_EXT] = $v;
            }
        }
        if ([] !== ($vs = $this->getInsurance())) {
            $a[self::FIELD_INSURANCE] = $vs;
        }
        if (null !== ($v = $this->getInsurer())) {
            $a[self::FIELD_INSURER] = $v;
        }
        if (null !== ($v = $this->getOutcome())) {
            $a[self::FIELD_OUTCOME] = $v;
        }
        if (null !== ($v = $this->getRequest())) {
            $a[self::FIELD_REQUEST] = $v;
        }
        if (null !== ($v = $this->getRequestOrganization())) {
            $a[self::FIELD_REQUEST_ORGANIZATION] = $v;
        }
        if (null !== ($v = $this->getRequestProvider())) {
            $a[self::FIELD_REQUEST_PROVIDER] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_STATUS_EXT] = $v;
            }
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