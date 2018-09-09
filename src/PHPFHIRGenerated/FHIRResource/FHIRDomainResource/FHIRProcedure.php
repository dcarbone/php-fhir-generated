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
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedureFocalDevice;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedurePerformer;
use PHPFHIRGenerated\FHIRElement\FHIRCanonical;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIREventStatus;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge;
use PHPFHIRGenerated\FHIRElement\FHIRRange;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRUri;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * An action that is or was performed on or for a patient. This can be a physical intervention like an operation, or less invasive like long term services, counseling, or hypnotherapy.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRProcedure
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRProcedure extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Procedure';

    /**
     * Individual who is making the procedure statement.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $asserter = null;

    /**
     * A reference to a resource that contains details of the request for this procedure.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $basedOn = null;

    /**
     * Detailed and structured anatomical location information. Multiple locations are allowed - e.g. multiple punch biopsies of a lesion.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $bodySite = null;

    /**
     * A code that classifies the procedure for searching, sorting and display purposes (e.g. "Surgical Procedure").
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $category = null;

    /**
     * The specific procedure that is performed. Use text if the exact nature of the procedure cannot be coded (e.g. "Laparoscopic Appendectomy").
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

    /**
     * Any complications that occurred during the procedure, or in the immediate post-performance period. These are generally tracked separately from the notes, which will typically describe the procedure itself rather than any 'post procedure' issues.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $complication = null;

    /**
     * Any complications that occurred during the procedure, or in the immediate post-performance period.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $complicationDetail = null;

    /**
     * The encounter during which the procedure was performed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $context = null;

    /**
     * A device that is implanted, removed or otherwise manipulated (calibration, battery replacement, fitting a prosthesis, attaching a wound-vac, etc.) as a focal portion of the Procedure.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedureFocalDevice
     */
    public $focalDevice = null;

    /**
     * If the procedure required specific follow up - e.g. removal of sutures. The followup may be represented as a simple note, or could potentially be more complex in which case the CarePlan resource can be used.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $followUp = null;

    /**
     * Business identifiers assigned to this procedure by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * The URL pointing to a FHIR-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this Procedure.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public $instantiatesCanonical = null;

    /**
     * The URL pointing to an externally maintained protocol, guideline, orderset or other definition that is adhered to in whole or in part by this Procedure.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $instantiatesUri = null;

    /**
     * The location where the procedure actually happened.  E.g. a newborn at home, a tracheostomy at a restaurant.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $location = null;

    /**
     * Any other notes and comments about the procedure.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public $note = null;

    /**
     * The outcome of the procedure - did it resolve reasons for the procedure being performed?
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $outcome = null;

    /**
     * A larger event of which this particular procedure is a component or step.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $partOf = null;

    /**
     * Estimated or actual date, date-time, period, or age when the procedure was performed.  Allows a period to support complex procedures that span more than one date, and also allows for the length of the procedure to be captured.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public $performedAge = null;

    /**
     * Estimated or actual date, date-time, period, or age when the procedure was performed.  Allows a period to support complex procedures that span more than one date, and also allows for the length of the procedure to be captured.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $performedDateTime = null;

    /**
     * Estimated or actual date, date-time, period, or age when the procedure was performed.  Allows a period to support complex procedures that span more than one date, and also allows for the length of the procedure to be captured.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $performedPeriod = null;

    /**
     * Estimated or actual date, date-time, period, or age when the procedure was performed.  Allows a period to support complex procedures that span more than one date, and also allows for the length of the procedure to be captured.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $performedRange = null;

    /**
     * Estimated or actual date, date-time, period, or age when the procedure was performed.  Allows a period to support complex procedures that span more than one date, and also allows for the length of the procedure to be captured.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $performedString = null;

    /**
     * Limited to 'real' people rather than equipment.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedurePerformer
     */
    public $performer = null;

    /**
     * The coded reason why the procedure was performed. This may be coded entity of some type, or may simply be present as text.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $reasonCode = null;

    /**
     * The justification of why the procedure was performed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $reasonReference = null;

    /**
     * Individual who recorded the record and takes responsibility for its content.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $recorder = null;

    /**
     * This could be a histology result, pathology report, surgical report, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $report = null;

    /**
     * A code specifying the state of the procedure. Generally this will be in-progress or completed state.
     * @var \PHPFHIRGenerated\FHIRElement\FHIREventStatus
     */
    public $status = null;

    /**
     * Captures the reason for the current state of the procedure.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $statusReason = null;

    /**
     * The person, animal or group on which the procedure was performed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * Identifies coded items that were used as part of the procedure.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $usedCode = null;

    /**
     * Identifies medications, devices and any other substance used as part of the procedure.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $usedReference = null;

    /**
     * FHIRProcedure Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['asserter'])) {
                $this->setAsserter($data['asserter']);
            }
            if (isset($data['basedOn'])) {
                $this->setBasedOn($data['basedOn']);
            }
            if (isset($data['bodySite'])) {
                $this->setBodySite($data['bodySite']);
            }
            if (isset($data['category'])) {
                $this->setCategory($data['category']);
            }
            if (isset($data['code'])) {
                $this->setCode($data['code']);
            }
            if (isset($data['complication'])) {
                $this->setComplication($data['complication']);
            }
            if (isset($data['complicationDetail'])) {
                $this->setComplicationDetail($data['complicationDetail']);
            }
            if (isset($data['context'])) {
                $this->setContext($data['context']);
            }
            if (isset($data['focalDevice'])) {
                $this->setFocalDevice($data['focalDevice']);
            }
            if (isset($data['followUp'])) {
                $this->setFollowUp($data['followUp']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['instantiatesCanonical'])) {
                $this->setInstantiatesCanonical($data['instantiatesCanonical']);
            }
            if (isset($data['instantiatesUri'])) {
                $this->setInstantiatesUri($data['instantiatesUri']);
            }
            if (isset($data['location'])) {
                $this->setLocation($data['location']);
            }
            if (isset($data['note'])) {
                $this->setNote($data['note']);
            }
            if (isset($data['outcome'])) {
                $this->setOutcome($data['outcome']);
            }
            if (isset($data['partOf'])) {
                $this->setPartOf($data['partOf']);
            }
            if (isset($data['performedAge'])) {
                $this->setPerformedAge($data['performedAge']);
            }
            if (isset($data['performedDateTime'])) {
                $this->setPerformedDateTime($data['performedDateTime']);
            }
            if (isset($data['performedPeriod'])) {
                $this->setPerformedPeriod($data['performedPeriod']);
            }
            if (isset($data['performedRange'])) {
                $this->setPerformedRange($data['performedRange']);
            }
            if (isset($data['performedString'])) {
                $this->setPerformedString($data['performedString']);
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
            if (isset($data['recorder'])) {
                $this->setRecorder($data['recorder']);
            }
            if (isset($data['report'])) {
                $this->setReport($data['report']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['statusReason'])) {
                $this->setStatusReason($data['statusReason']);
            }
            if (isset($data['subject'])) {
                $this->setSubject($data['subject']);
            }
            if (isset($data['usedCode'])) {
                $this->setUsedCode($data['usedCode']);
            }
            if (isset($data['usedReference'])) {
                $this->setUsedReference($data['usedReference']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRProcedure::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Individual who is making the procedure statement.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setAsserter(FHIRReference $asserter = null)
    {
        if (null === $asserter) {
            return $this; 
        }
        $this->asserter = $asserter;
        return $this;
    }

    /**
     * Individual who is making the procedure statement.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getAsserter()
    {
        return $this->asserter;
    }


    /**
     * A reference to a resource that contains details of the request for this procedure.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setBasedOn(FHIRReference $basedOn = null)
    {
        if (null === $basedOn) {
            return $this; 
        }
        $this->basedOn = $basedOn;
        return $this;
    }

    /**
     * A reference to a resource that contains details of the request for this procedure.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getBasedOn()
    {
        return $this->basedOn;
    }


    /**
     * Detailed and structured anatomical location information. Multiple locations are allowed - e.g. multiple punch biopsies of a lesion.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setBodySite(FHIRCodeableConcept $bodySite = null)
    {
        if (null === $bodySite) {
            return $this; 
        }
        $this->bodySite = $bodySite;
        return $this;
    }

    /**
     * Detailed and structured anatomical location information. Multiple locations are allowed - e.g. multiple punch biopsies of a lesion.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getBodySite()
    {
        return $this->bodySite;
    }


    /**
     * A code that classifies the procedure for searching, sorting and display purposes (e.g. "Surgical Procedure").
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setCategory(FHIRCodeableConcept $category = null)
    {
        if (null === $category) {
            return $this; 
        }
        $this->category = $category;
        return $this;
    }

    /**
     * A code that classifies the procedure for searching, sorting and display purposes (e.g. "Surgical Procedure").
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCategory()
    {
        return $this->category;
    }


    /**
     * The specific procedure that is performed. Use text if the exact nature of the procedure cannot be coded (e.g. "Laparoscopic Appendectomy").
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setCode(FHIRCodeableConcept $code = null)
    {
        if (null === $code) {
            return $this; 
        }
        $this->code = $code;
        return $this;
    }

    /**
     * The specific procedure that is performed. Use text if the exact nature of the procedure cannot be coded (e.g. "Laparoscopic Appendectomy").
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }


    /**
     * Any complications that occurred during the procedure, or in the immediate post-performance period. These are generally tracked separately from the notes, which will typically describe the procedure itself rather than any 'post procedure' issues.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setComplication(FHIRCodeableConcept $complication = null)
    {
        if (null === $complication) {
            return $this; 
        }
        $this->complication = $complication;
        return $this;
    }

    /**
     * Any complications that occurred during the procedure, or in the immediate post-performance period. These are generally tracked separately from the notes, which will typically describe the procedure itself rather than any 'post procedure' issues.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getComplication()
    {
        return $this->complication;
    }


    /**
     * Any complications that occurred during the procedure, or in the immediate post-performance period.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setComplicationDetail(FHIRReference $complicationDetail = null)
    {
        if (null === $complicationDetail) {
            return $this; 
        }
        $this->complicationDetail = $complicationDetail;
        return $this;
    }

    /**
     * Any complications that occurred during the procedure, or in the immediate post-performance period.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getComplicationDetail()
    {
        return $this->complicationDetail;
    }


    /**
     * The encounter during which the procedure was performed.
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
     * The encounter during which the procedure was performed.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getContext()
    {
        return $this->context;
    }


    /**
     * A device that is implanted, removed or otherwise manipulated (calibration, battery replacement, fitting a prosthesis, attaching a wound-vac, etc.) as a focal portion of the Procedure.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedureFocalDevice
     * @return $this
     */
    public function setFocalDevice(FHIRProcedureFocalDevice $focalDevice = null)
    {
        if (null === $focalDevice) {
            return $this; 
        }
        $this->focalDevice = $focalDevice;
        return $this;
    }

    /**
     * A device that is implanted, removed or otherwise manipulated (calibration, battery replacement, fitting a prosthesis, attaching a wound-vac, etc.) as a focal portion of the Procedure.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedureFocalDevice
     */
    public function getFocalDevice()
    {
        return $this->focalDevice;
    }


    /**
     * If the procedure required specific follow up - e.g. removal of sutures. The followup may be represented as a simple note, or could potentially be more complex in which case the CarePlan resource can be used.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setFollowUp(FHIRCodeableConcept $followUp = null)
    {
        if (null === $followUp) {
            return $this; 
        }
        $this->followUp = $followUp;
        return $this;
    }

    /**
     * If the procedure required specific follow up - e.g. removal of sutures. The followup may be represented as a simple note, or could potentially be more complex in which case the CarePlan resource can be used.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getFollowUp()
    {
        return $this->followUp;
    }


    /**
     * Business identifiers assigned to this procedure by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
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
     * Business identifiers assigned to this procedure by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }


    /**
     * The URL pointing to a FHIR-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this Procedure.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     * @return $this
     */
    public function setInstantiatesCanonical($instantiatesCanonical)
    {
        if (null === $instantiatesCanonical) {
            return $this; 
        }
        if (is_scalar($instantiatesCanonical)) {
            $instantiatesCanonical = new FHIRCanonical($instantiatesCanonical);
        }
        if (!($instantiatesCanonical instanceof FHIRCanonical)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRProcedure::setInstantiatesCanonical - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCanonical or appropriate scalar value, %s seen.',
                gettype($instantiatesCanonical)
            ));
        }
        $this->instantiatesCanonical = $instantiatesCanonical;
        return $this;
    }

    /**
     * The URL pointing to a FHIR-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this Procedure.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public function getInstantiatesCanonical()
    {
        return $this->instantiatesCanonical;
    }


    /**
     * The URL pointing to an externally maintained protocol, guideline, orderset or other definition that is adhered to in whole or in part by this Procedure.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     * @return $this
     */
    public function setInstantiatesUri($instantiatesUri)
    {
        if (null === $instantiatesUri) {
            return $this; 
        }
        if (is_scalar($instantiatesUri)) {
            $instantiatesUri = new FHIRUri($instantiatesUri);
        }
        if (!($instantiatesUri instanceof FHIRUri)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRProcedure::setInstantiatesUri - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($instantiatesUri)
            ));
        }
        $this->instantiatesUri = $instantiatesUri;
        return $this;
    }

    /**
     * The URL pointing to an externally maintained protocol, guideline, orderset or other definition that is adhered to in whole or in part by this Procedure.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getInstantiatesUri()
    {
        return $this->instantiatesUri;
    }


    /**
     * The location where the procedure actually happened.  E.g. a newborn at home, a tracheostomy at a restaurant.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setLocation(FHIRReference $location = null)
    {
        if (null === $location) {
            return $this; 
        }
        $this->location = $location;
        return $this;
    }

    /**
     * The location where the procedure actually happened.  E.g. a newborn at home, a tracheostomy at a restaurant.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getLocation()
    {
        return $this->location;
    }


    /**
     * Any other notes and comments about the procedure.
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
     * Any other notes and comments about the procedure.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public function getNote()
    {
        return $this->note;
    }


    /**
     * The outcome of the procedure - did it resolve reasons for the procedure being performed?
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setOutcome(FHIRCodeableConcept $outcome = null)
    {
        if (null === $outcome) {
            return $this; 
        }
        $this->outcome = $outcome;
        return $this;
    }

    /**
     * The outcome of the procedure - did it resolve reasons for the procedure being performed?
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getOutcome()
    {
        return $this->outcome;
    }


    /**
     * A larger event of which this particular procedure is a component or step.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setPartOf(FHIRReference $partOf = null)
    {
        if (null === $partOf) {
            return $this; 
        }
        $this->partOf = $partOf;
        return $this;
    }

    /**
     * A larger event of which this particular procedure is a component or step.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPartOf()
    {
        return $this->partOf;
    }


    /**
     * Estimated or actual date, date-time, period, or age when the procedure was performed.  Allows a period to support complex procedures that span more than one date, and also allows for the length of the procedure to be captured.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     * @return $this
     */
    public function setPerformedAge(FHIRAge $performedAge = null)
    {
        if (null === $performedAge) {
            return $this; 
        }
        $this->performedAge = $performedAge;
        return $this;
    }

    /**
     * Estimated or actual date, date-time, period, or age when the procedure was performed.  Allows a period to support complex procedures that span more than one date, and also allows for the length of the procedure to be captured.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getPerformedAge()
    {
        return $this->performedAge;
    }


    /**
     * Estimated or actual date, date-time, period, or age when the procedure was performed.  Allows a period to support complex procedures that span more than one date, and also allows for the length of the procedure to be captured.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setPerformedDateTime($performedDateTime)
    {
        if (null === $performedDateTime) {
            return $this; 
        }
        if (is_scalar($performedDateTime)) {
            $performedDateTime = new FHIRDateTime($performedDateTime);
        }
        if (!($performedDateTime instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRProcedure::setPerformedDateTime - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($performedDateTime)
            ));
        }
        $this->performedDateTime = $performedDateTime;
        return $this;
    }

    /**
     * Estimated or actual date, date-time, period, or age when the procedure was performed.  Allows a period to support complex procedures that span more than one date, and also allows for the length of the procedure to be captured.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getPerformedDateTime()
    {
        return $this->performedDateTime;
    }


    /**
     * Estimated or actual date, date-time, period, or age when the procedure was performed.  Allows a period to support complex procedures that span more than one date, and also allows for the length of the procedure to be captured.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     * @return $this
     */
    public function setPerformedPeriod(FHIRPeriod $performedPeriod = null)
    {
        if (null === $performedPeriod) {
            return $this; 
        }
        $this->performedPeriod = $performedPeriod;
        return $this;
    }

    /**
     * Estimated or actual date, date-time, period, or age when the procedure was performed.  Allows a period to support complex procedures that span more than one date, and also allows for the length of the procedure to be captured.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getPerformedPeriod()
    {
        return $this->performedPeriod;
    }


    /**
     * Estimated or actual date, date-time, period, or age when the procedure was performed.  Allows a period to support complex procedures that span more than one date, and also allows for the length of the procedure to be captured.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     * @return $this
     */
    public function setPerformedRange(FHIRRange $performedRange = null)
    {
        if (null === $performedRange) {
            return $this; 
        }
        $this->performedRange = $performedRange;
        return $this;
    }

    /**
     * Estimated or actual date, date-time, period, or age when the procedure was performed.  Allows a period to support complex procedures that span more than one date, and also allows for the length of the procedure to be captured.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getPerformedRange()
    {
        return $this->performedRange;
    }


    /**
     * Estimated or actual date, date-time, period, or age when the procedure was performed.  Allows a period to support complex procedures that span more than one date, and also allows for the length of the procedure to be captured.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setPerformedString($performedString)
    {
        if (null === $performedString) {
            return $this; 
        }
        if (is_scalar($performedString)) {
            $performedString = new FHIRString($performedString);
        }
        if (!($performedString instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRProcedure::setPerformedString - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($performedString)
            ));
        }
        $this->performedString = $performedString;
        return $this;
    }

    /**
     * Estimated or actual date, date-time, period, or age when the procedure was performed.  Allows a period to support complex procedures that span more than one date, and also allows for the length of the procedure to be captured.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPerformedString()
    {
        return $this->performedString;
    }


    /**
     * Limited to 'real' people rather than equipment.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedurePerformer
     * @return $this
     */
    public function setPerformer(FHIRProcedurePerformer $performer = null)
    {
        if (null === $performer) {
            return $this; 
        }
        $this->performer = $performer;
        return $this;
    }

    /**
     * Limited to 'real' people rather than equipment.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedurePerformer
     */
    public function getPerformer()
    {
        return $this->performer;
    }


    /**
     * The coded reason why the procedure was performed. This may be coded entity of some type, or may simply be present as text.
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
     * The coded reason why the procedure was performed. This may be coded entity of some type, or may simply be present as text.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getReasonCode()
    {
        return $this->reasonCode;
    }


    /**
     * The justification of why the procedure was performed.
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
     * The justification of why the procedure was performed.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getReasonReference()
    {
        return $this->reasonReference;
    }


    /**
     * Individual who recorded the record and takes responsibility for its content.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setRecorder(FHIRReference $recorder = null)
    {
        if (null === $recorder) {
            return $this; 
        }
        $this->recorder = $recorder;
        return $this;
    }

    /**
     * Individual who recorded the record and takes responsibility for its content.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getRecorder()
    {
        return $this->recorder;
    }


    /**
     * This could be a histology result, pathology report, surgical report, etc.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setReport(FHIRReference $report = null)
    {
        if (null === $report) {
            return $this; 
        }
        $this->report = $report;
        return $this;
    }

    /**
     * This could be a histology result, pathology report, surgical report, etc.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getReport()
    {
        return $this->report;
    }


    /**
     * A code specifying the state of the procedure. Generally this will be in-progress or completed state.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIREventStatus
     * @return $this
     */
    public function setStatus($status)
    {
        if (null === $status) {
            return $this; 
        }
        if (is_scalar($status)) {
            $status = new FHIREventStatus($status);
        }
        if (!($status instanceof FHIREventStatus)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRProcedure::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIREventStatus or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * A code specifying the state of the procedure. Generally this will be in-progress or completed state.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIREventStatus
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * Captures the reason for the current state of the procedure.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setStatusReason(FHIRCodeableConcept $statusReason = null)
    {
        if (null === $statusReason) {
            return $this; 
        }
        $this->statusReason = $statusReason;
        return $this;
    }

    /**
     * Captures the reason for the current state of the procedure.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getStatusReason()
    {
        return $this->statusReason;
    }


    /**
     * The person, animal or group on which the procedure was performed.
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
     * The person, animal or group on which the procedure was performed.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }


    /**
     * Identifies coded items that were used as part of the procedure.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setUsedCode(FHIRCodeableConcept $usedCode = null)
    {
        if (null === $usedCode) {
            return $this; 
        }
        $this->usedCode = $usedCode;
        return $this;
    }

    /**
     * Identifies coded items that were used as part of the procedure.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getUsedCode()
    {
        return $this->usedCode;
    }


    /**
     * Identifies medications, devices and any other substance used as part of the procedure.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setUsedReference(FHIRReference $usedReference = null)
    {
        if (null === $usedReference) {
            return $this; 
        }
        $this->usedReference = $usedReference;
        return $this;
    }

    /**
     * Identifies medications, devices and any other substance used as part of the procedure.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getUsedReference()
    {
        return $this->usedReference;
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
        if (null !== ($v = $this->getAsserter())) {
            $a['asserter'] = $v;
        }
        if (null !== ($v = $this->getBasedOn())) {
            $a['basedOn'] = $v;
        }
        if (null !== ($v = $this->getBodySite())) {
            $a['bodySite'] = $v;
        }
        if (null !== ($v = $this->getCategory())) {
            $a['category'] = $v;
        }
        if (null !== ($v = $this->getCode())) {
            $a['code'] = $v;
        }
        if (null !== ($v = $this->getComplication())) {
            $a['complication'] = $v;
        }
        if (null !== ($v = $this->getComplicationDetail())) {
            $a['complicationDetail'] = $v;
        }
        if (null !== ($v = $this->getContext())) {
            $a['context'] = $v;
        }
        if (null !== ($v = $this->getFocalDevice())) {
            $a['focalDevice'] = $v;
        }
        if (null !== ($v = $this->getFollowUp())) {
            $a['followUp'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getInstantiatesCanonical())) {
            $a['instantiatesCanonical'] = $v;
        }
        if (null !== ($v = $this->getInstantiatesUri())) {
            $a['instantiatesUri'] = $v;
        }
        if (null !== ($v = $this->getLocation())) {
            $a['location'] = $v;
        }
        if (null !== ($v = $this->getNote())) {
            $a['note'] = $v;
        }
        if (null !== ($v = $this->getOutcome())) {
            $a['outcome'] = $v;
        }
        if (null !== ($v = $this->getPartOf())) {
            $a['partOf'] = $v;
        }
        if (null !== ($v = $this->getPerformedAge())) {
            $a['performedAge'] = $v;
        }
        if (null !== ($v = $this->getPerformedDateTime())) {
            $a['performedDateTime'] = $v;
        }
        if (null !== ($v = $this->getPerformedPeriod())) {
            $a['performedPeriod'] = $v;
        }
        if (null !== ($v = $this->getPerformedRange())) {
            $a['performedRange'] = $v;
        }
        if (null !== ($v = $this->getPerformedString())) {
            $a['performedString'] = $v;
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
        if (null !== ($v = $this->getRecorder())) {
            $a['recorder'] = $v;
        }
        if (null !== ($v = $this->getReport())) {
            $a['report'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
        }
        if (null !== ($v = $this->getStatusReason())) {
            $a['statusReason'] = $v;
        }
        if (null !== ($v = $this->getSubject())) {
            $a['subject'] = $v;
        }
        if (null !== ($v = $this->getUsedCode())) {
            $a['usedCode'] = $v;
        }
        if (null !== ($v = $this->getUsedReference())) {
            $a['usedReference'] = $v;
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
            $sxe = new \SimpleXMLElement('<Procedure xmlns="http://hl7.org/fhir"></Procedure>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}