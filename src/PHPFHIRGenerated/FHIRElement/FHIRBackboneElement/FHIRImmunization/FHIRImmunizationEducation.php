<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization;

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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRUri;

/**
 * Describes the event of a patient being administered a vaccine or a record of an immunization as reported by a patient, a clinician or another party.
 *
 * Class FHIRImmunizationEducation
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization
 */
class FHIRImmunizationEducation extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Immunization.Education';

    /**
     * Identifier of the material presented to the patient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $documentType = null;

    /**
     * Date the educational material was given to the patient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $presentationDate = null;

    /**
     * Date the educational material was published.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $publicationDate = null;

    /**
     * Reference pointer to the educational material given to the patient if the information was on line.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $reference = null;

    /**
     * FHIRImmunizationEducation Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['documentType'])) {
                $this->setDocumentType($data['documentType']);
            }
            if (isset($data['presentationDate'])) {
                $this->setPresentationDate($data['presentationDate']);
            }
            if (isset($data['publicationDate'])) {
                $this->setPublicationDate($data['publicationDate']);
            }
            if (isset($data['reference'])) {
                $this->setReference($data['reference']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationEducation::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Identifier of the material presented to the patient.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setDocumentType($documentType)
    {
        if (null === $documentType) {
            return $this; 
        }
        if (is_scalar($documentType)) {
            $documentType = new FHIRString($documentType);
        }
        if (!($documentType instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRImmunizationEducation::setDocumentType - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($documentType)
            ));
        }
        $this->documentType = $documentType;
        return $this;
    }

    /**
     * Identifier of the material presented to the patient.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDocumentType()
    {
        return $this->documentType;
    }


    /**
     * Date the educational material was given to the patient.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setPresentationDate($presentationDate)
    {
        if (null === $presentationDate) {
            return $this; 
        }
        if (is_scalar($presentationDate)) {
            $presentationDate = new FHIRDateTime($presentationDate);
        }
        if (!($presentationDate instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRImmunizationEducation::setPresentationDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($presentationDate)
            ));
        }
        $this->presentationDate = $presentationDate;
        return $this;
    }

    /**
     * Date the educational material was given to the patient.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getPresentationDate()
    {
        return $this->presentationDate;
    }


    /**
     * Date the educational material was published.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setPublicationDate($publicationDate)
    {
        if (null === $publicationDate) {
            return $this; 
        }
        if (is_scalar($publicationDate)) {
            $publicationDate = new FHIRDateTime($publicationDate);
        }
        if (!($publicationDate instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRImmunizationEducation::setPublicationDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($publicationDate)
            ));
        }
        $this->publicationDate = $publicationDate;
        return $this;
    }

    /**
     * Date the educational material was published.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getPublicationDate()
    {
        return $this->publicationDate;
    }


    /**
     * Reference pointer to the educational material given to the patient if the information was on line.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     * @return $this
     */
    public function setReference($reference)
    {
        if (null === $reference) {
            return $this; 
        }
        if (is_scalar($reference)) {
            $reference = new FHIRUri($reference);
        }
        if (!($reference instanceof FHIRUri)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRImmunizationEducation::setReference - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($reference)
            ));
        }
        $this->reference = $reference;
        return $this;
    }

    /**
     * Reference pointer to the educational material given to the patient if the information was on line.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getReference()
    {
        return $this->reference;
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
        if (null !== ($v = $this->getDocumentType())) {
            $a['documentType'] = $v;
        }
        if (null !== ($v = $this->getPresentationDate())) {
            $a['presentationDate'] = $v;
        }
        if (null !== ($v = $this->getPublicationDate())) {
            $a['publicationDate'] = $v;
        }
        if (null !== ($v = $this->getReference())) {
            $a['reference'] = $v;
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
            $sxe = new \SimpleXMLElement('<ImmunizationEducation xmlns="http://hl7.org/fhir"></ImmunizationEducation>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}