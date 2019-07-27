<?php

namespace DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization;

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

use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\PHPFHIRTypeInterface;

/**
 * Describes the event of a patient being administered a vaccine or a record of an
 * immunization as reported by a patient, a clinician or another party.
 *
 * Class FHIRImmunizationEducation
 * @package \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization
 */
class FHIRImmunizationEducation extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_DOT_EDUCATION;

    const FIELD_DOCUMENT_TYPE = 'documentType';
    const FIELD_DOCUMENT_TYPE_EXT = '_documentType';
    const FIELD_PRESENTATION_DATE = 'presentationDate';
    const FIELD_PRESENTATION_DATE_EXT = '_presentationDate';
    const FIELD_PUBLICATION_DATE = 'publicationDate';
    const FIELD_PUBLICATION_DATE_EXT = '_publicationDate';
    const FIELD_REFERENCE = 'reference';
    const FIELD_REFERENCE_EXT = '_reference';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identifier of the material presented to the patient.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $documentType = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Date the educational material was given to the patient.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    private $presentationDate = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Date the educational material was published.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    private $publicationDate = null;

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Reference pointer to the educational material given to the patient if the
     * information was on line.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    private $reference = null;

    /**
     * FHIRImmunizationEducation Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRImmunizationEducation::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_DOCUMENT_TYPE])) {
            $ext = (isset($data[self::FIELD_DOCUMENT_TYPE_EXT]) && is_array($data[self::FIELD_DOCUMENT_TYPE_EXT]))
                ? $data[self::FIELD_DOCUMENT_TYPE_EXT]
                : null;
            if ($data[self::FIELD_DOCUMENT_TYPE] instanceof FHIRString) {
                $this->setDocumentType($data[self::FIELD_DOCUMENT_TYPE]);
            } elseif ($ext && is_scalar($data[self::FIELD_DOCUMENT_TYPE])) {
                $this->setDocumentType(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_DOCUMENT_TYPE]] + $ext));
            } else {
                $this->setDocumentType(new FHIRString($data[self::FIELD_DOCUMENT_TYPE]));
            }
        }
        if (isset($data[self::FIELD_PRESENTATION_DATE])) {
            $ext = (isset($data[self::FIELD_PRESENTATION_DATE_EXT]) && is_array($data[self::FIELD_PRESENTATION_DATE_EXT]))
                ? $data[self::FIELD_PRESENTATION_DATE_EXT]
                : null;
            if ($data[self::FIELD_PRESENTATION_DATE] instanceof FHIRDateTime) {
                $this->setPresentationDate($data[self::FIELD_PRESENTATION_DATE]);
            } elseif ($ext && is_scalar($data[self::FIELD_PRESENTATION_DATE])) {
                $this->setPresentationDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_PRESENTATION_DATE]] + $ext));
            } else {
                $this->setPresentationDate(new FHIRDateTime($data[self::FIELD_PRESENTATION_DATE]));
            }
        }
        if (isset($data[self::FIELD_PUBLICATION_DATE])) {
            $ext = (isset($data[self::FIELD_PUBLICATION_DATE_EXT]) && is_array($data[self::FIELD_PUBLICATION_DATE_EXT]))
                ? $data[self::FIELD_PUBLICATION_DATE_EXT]
                : null;
            if ($data[self::FIELD_PUBLICATION_DATE] instanceof FHIRDateTime) {
                $this->setPublicationDate($data[self::FIELD_PUBLICATION_DATE]);
            } elseif ($ext && is_scalar($data[self::FIELD_PUBLICATION_DATE])) {
                $this->setPublicationDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_PUBLICATION_DATE]] + $ext));
            } else {
                $this->setPublicationDate(new FHIRDateTime($data[self::FIELD_PUBLICATION_DATE]));
            }
        }
        if (isset($data[self::FIELD_REFERENCE])) {
            $ext = (isset($data[self::FIELD_REFERENCE_EXT]) && is_array($data[self::FIELD_REFERENCE_EXT]))
                ? $data[self::FIELD_REFERENCE_EXT]
                : null;
            if ($data[self::FIELD_REFERENCE] instanceof FHIRUri) {
                $this->setReference($data[self::FIELD_REFERENCE]);
            } elseif ($ext && is_scalar($data[self::FIELD_REFERENCE])) {
                $this->setReference(new FHIRUri([FHIRUri::FIELD_VALUE => $data[self::FIELD_REFERENCE]] + $ext));
            } else {
                $this->setReference(new FHIRUri($data[self::FIELD_REFERENCE]));
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
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identifier of the material presented to the patient.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDocumentType()
    {
        return $this->documentType;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identifier of the material presented to the patient.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $documentType
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationEducation
     */
    public function setDocumentType($documentType = null)
    {
        if (null === $documentType) {
            $this->documentType = null;
            return $this;
        }
        if ($documentType instanceof FHIRString) {
            $this->documentType = $documentType;
            return $this;
        }
        $this->documentType = new FHIRString($documentType);
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
     * Date the educational material was given to the patient.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getPresentationDate()
    {
        return $this->presentationDate;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Date the educational material was given to the patient.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime $presentationDate
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationEducation
     */
    public function setPresentationDate($presentationDate = null)
    {
        if (null === $presentationDate) {
            $this->presentationDate = null;
            return $this;
        }
        if ($presentationDate instanceof FHIRDateTime) {
            $this->presentationDate = $presentationDate;
            return $this;
        }
        $this->presentationDate = new FHIRDateTime($presentationDate);
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
     * Date the educational material was published.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getPublicationDate()
    {
        return $this->publicationDate;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Date the educational material was published.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDateTime $publicationDate
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationEducation
     */
    public function setPublicationDate($publicationDate = null)
    {
        if (null === $publicationDate) {
            $this->publicationDate = null;
            return $this;
        }
        if ($publicationDate instanceof FHIRDateTime) {
            $this->publicationDate = $publicationDate;
            return $this;
        }
        $this->publicationDate = new FHIRDateTime($publicationDate);
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Reference pointer to the educational material given to the patient if the
     * information was on line.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Reference pointer to the educational material given to the patient if the
     * information was on line.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRUri $reference
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationEducation
     */
    public function setReference($reference = null)
    {
        if (null === $reference) {
            $this->reference = null;
            return $this;
        }
        if ($reference instanceof FHIRUri) {
            $this->reference = $reference;
            return $this;
        }
        $this->reference = new FHIRUri($reference);
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null \$sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationEducation $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationEducation
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
                throw new \DomainException(sprintf('FHIRImmunizationEducation::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRImmunizationEducation::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize(\$sxe, new FHIRImmunizationEducation);
        } elseif (!is_object($type) || !($type instanceof FHIRImmunizationEducation)) {
            throw new \RuntimeException(sprintf(
                'FHIRImmunizationEducation::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationEducation or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($attributes->documentType)) {
            $type->setDocumentType((string)$attributes->documentType);
        }
        if (isset($children->documentType)) {
            $type->setDocumentType(FHIRString::xmlUnserialize($children->documentType));
        }
        if (isset($attributes->presentationDate)) {
            $type->setPresentationDate((string)$attributes->presentationDate);
        }
        if (isset($children->presentationDate)) {
            $type->setPresentationDate(FHIRDateTime::xmlUnserialize($children->presentationDate));
        }
        if (isset($attributes->publicationDate)) {
            $type->setPublicationDate((string)$attributes->publicationDate);
        }
        if (isset($children->publicationDate)) {
            $type->setPublicationDate(FHIRDateTime::xmlUnserialize($children->publicationDate));
        }
        if (isset($attributes->reference)) {
            $type->setReference((string)$attributes->reference);
        }
        if (isset($children->reference)) {
            $type->setReference(FHIRUri::xmlUnserialize($children->reference));
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
            $sxe = new \SimpleXMLElement('<ImmunizationEducation xmlns="http://hl7.org/fhir"></ImmunizationEducation>');
        }
        if (null !== ($v = $this->getDocumentType())) {
            $sxe->addAttribute(self::FIELD_DOCUMENT_TYPE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_DOCUMENT_TYPE));
            }
        }
        if (null !== ($v = $this->getPresentationDate())) {
            $sxe->addAttribute(self::FIELD_PRESENTATION_DATE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_PRESENTATION_DATE));
            }
        }
        if (null !== ($v = $this->getPublicationDate())) {
            $sxe->addAttribute(self::FIELD_PUBLICATION_DATE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_PUBLICATION_DATE));
            }
        }
        if (null !== ($v = $this->getReference())) {
            $sxe->addAttribute(self::FIELD_REFERENCE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_REFERENCE));
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
        if (null !== ($v = $this->getDocumentType())) {
            $a[self::FIELD_DOCUMENT_TYPE] = (string)$v;
            $a[self::FIELD_DOCUMENT_TYPE_EXT] = $v;
        }
        if (null !== ($v = $this->getPresentationDate())) {
            $a[self::FIELD_PRESENTATION_DATE] = (string)$v;
            $a[self::FIELD_PRESENTATION_DATE_EXT] = $v;
        }
        if (null !== ($v = $this->getPublicationDate())) {
            $a[self::FIELD_PUBLICATION_DATE] = (string)$v;
            $a[self::FIELD_PUBLICATION_DATE_EXT] = $v;
        }
        if (null !== ($v = $this->getReference())) {
            $a[self::FIELD_REFERENCE] = (string)$v;
            $a[self::FIELD_REFERENCE_EXT] = $v;
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