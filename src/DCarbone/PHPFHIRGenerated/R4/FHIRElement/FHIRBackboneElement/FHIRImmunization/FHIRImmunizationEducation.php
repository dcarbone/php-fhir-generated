<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImmunization;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:44+0000
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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * Describes the event of a patient being administered a vaccine or a record of an
 * immunization as reported by a patient, a clinician or another party.
 *
 * Class FHIRImmunizationEducation
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImmunization
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

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifier of the material presented to the patient.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $documentType = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date the educational material was given to the patient.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    protected $presentationDate = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date the educational material was published.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    protected $publicationDate = null;

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Reference pointer to the educational material given to the patient if the
     * information was on line.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri
     */
    protected $reference = null;

    /**
     * Validation map for fields in type Immunization.Education
     * @var array
     */
    private static $_validationRules = [    ];

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
        if (isset($data[self::FIELD_DOCUMENT_TYPE]) || isset($data[self::FIELD_DOCUMENT_TYPE_EXT])) {
            if (isset($data[self::FIELD_DOCUMENT_TYPE])) {
                $value = $data[self::FIELD_DOCUMENT_TYPE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DOCUMENT_TYPE_EXT]) && is_array($data[self::FIELD_DOCUMENT_TYPE_EXT])) {
                $ext = $data[self::FIELD_DOCUMENT_TYPE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setDocumentType($value);
                } else if (is_array($value)) {
                    $this->setDocumentType(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setDocumentType(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDocumentType(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_PRESENTATION_DATE]) || isset($data[self::FIELD_PRESENTATION_DATE_EXT])) {
            if (isset($data[self::FIELD_PRESENTATION_DATE])) {
                $value = $data[self::FIELD_PRESENTATION_DATE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PRESENTATION_DATE_EXT]) && is_array($data[self::FIELD_PRESENTATION_DATE_EXT])) {
                $ext = $data[self::FIELD_PRESENTATION_DATE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setPresentationDate($value);
                } else if (is_array($value)) {
                    $this->setPresentationDate(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setPresentationDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setPresentationDate(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_PUBLICATION_DATE]) || isset($data[self::FIELD_PUBLICATION_DATE_EXT])) {
            if (isset($data[self::FIELD_PUBLICATION_DATE])) {
                $value = $data[self::FIELD_PUBLICATION_DATE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PUBLICATION_DATE_EXT]) && is_array($data[self::FIELD_PUBLICATION_DATE_EXT])) {
                $ext = $data[self::FIELD_PUBLICATION_DATE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setPublicationDate($value);
                } else if (is_array($value)) {
                    $this->setPublicationDate(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setPublicationDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setPublicationDate(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_REFERENCE]) || isset($data[self::FIELD_REFERENCE_EXT])) {
            if (isset($data[self::FIELD_REFERENCE])) {
                $value = $data[self::FIELD_REFERENCE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_REFERENCE_EXT]) && is_array($data[self::FIELD_REFERENCE_EXT])) {
                $ext = $data[self::FIELD_REFERENCE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setReference($value);
                } else if (is_array($value)) {
                    $this->setReference(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setReference(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setReference(new FHIRUri($ext));
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
        return "<ImmunizationEducation{$xmlns}></ImmunizationEducation>";
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifier of the material presented to the patient.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getDocumentType()
    {
        return $this->documentType;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifier of the material presented to the patient.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $documentType
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date the educational material was given to the patient.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date the educational material was given to the patient.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $presentationDate
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date the educational material was published.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date the educational material was published.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $publicationDate
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Reference pointer to the educational material given to the patient if the
     * information was on line.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Reference pointer to the educational material given to the patient if the
     * information was on line.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri $reference
     * @return static
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
        if (null !== ($v = $this->getDocumentType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DOCUMENT_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPresentationDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PRESENTATION_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPublicationDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PUBLICATION_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REFERENCE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_DOCUMENT_TYPE])) {
            $v = $this->getDocumentType();
            foreach($validationRules[self::FIELD_DOCUMENT_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_DOT_EDUCATION, self::FIELD_DOCUMENT_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOCUMENT_TYPE])) {
                        $errs[self::FIELD_DOCUMENT_TYPE] = [];
                    }
                    $errs[self::FIELD_DOCUMENT_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRESENTATION_DATE])) {
            $v = $this->getPresentationDate();
            foreach($validationRules[self::FIELD_PRESENTATION_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_DOT_EDUCATION, self::FIELD_PRESENTATION_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRESENTATION_DATE])) {
                        $errs[self::FIELD_PRESENTATION_DATE] = [];
                    }
                    $errs[self::FIELD_PRESENTATION_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PUBLICATION_DATE])) {
            $v = $this->getPublicationDate();
            foreach($validationRules[self::FIELD_PUBLICATION_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_DOT_EDUCATION, self::FIELD_PUBLICATION_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PUBLICATION_DATE])) {
                        $errs[self::FIELD_PUBLICATION_DATE] = [];
                    }
                    $errs[self::FIELD_PUBLICATION_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REFERENCE])) {
            $v = $this->getReference();
            foreach($validationRules[self::FIELD_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_DOT_EDUCATION, self::FIELD_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REFERENCE])) {
                        $errs[self::FIELD_REFERENCE] = [];
                    }
                    $errs[self::FIELD_REFERENCE][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationEducation $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationEducation
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
                throw new \DomainException(sprintf('FHIRImmunizationEducation::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRImmunizationEducation::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRImmunizationEducation;
        } elseif (!is_object($type) || !($type instanceof FHIRImmunizationEducation)) {
            throw new \RuntimeException(sprintf(
                'FHIRImmunizationEducation::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationEducation or null, %s seen.',
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
        if (isset($children->documentType)) {
            $type->setDocumentType(FHIRString::xmlUnserialize($children->documentType));
        }
        if (isset($attributes->documentType)) {
            $pt = $type->getDocumentType();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->documentType);
            } else {
                $type->setDocumentType((string)$attributes->documentType);
            }
        }
        if (isset($children->presentationDate)) {
            $type->setPresentationDate(FHIRDateTime::xmlUnserialize($children->presentationDate));
        }
        if (isset($attributes->presentationDate)) {
            $pt = $type->getPresentationDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->presentationDate);
            } else {
                $type->setPresentationDate((string)$attributes->presentationDate);
            }
        }
        if (isset($children->publicationDate)) {
            $type->setPublicationDate(FHIRDateTime::xmlUnserialize($children->publicationDate));
        }
        if (isset($attributes->publicationDate)) {
            $pt = $type->getPublicationDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->publicationDate);
            } else {
                $type->setPublicationDate((string)$attributes->publicationDate);
            }
        }
        if (isset($children->reference)) {
            $type->setReference(FHIRUri::xmlUnserialize($children->reference));
        }
        if (isset($attributes->reference)) {
            $pt = $type->getReference();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->reference);
            } else {
                $type->setReference((string)$attributes->reference);
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
        if (null !== ($v = $this->getDocumentType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DOCUMENT_TYPE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPresentationDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PRESENTATION_DATE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPublicationDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PUBLICATION_DATE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getReference())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REFERENCE, null, $v->_getFHIRXMLNamespace()));
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
            $a[self::FIELD_DOCUMENT_TYPE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_DOCUMENT_TYPE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getPresentationDate())) {
            $a[self::FIELD_PRESENTATION_DATE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_PRESENTATION_DATE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getPublicationDate())) {
            $a[self::FIELD_PUBLICATION_DATE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_PUBLICATION_DATE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getReference())) {
            $a[self::FIELD_REFERENCE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRUri::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRUri::FIELD_VALUE]);
                $a[self::FIELD_REFERENCE_EXT] = $enc;
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