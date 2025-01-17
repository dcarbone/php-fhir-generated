<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 17th, 2025 00:27+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2025 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\XMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPositiveInt;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRPositiveIntPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Version;
use DCarbone\PHPFHIRGenerated\Versions\STU3\VersionConstants;

/**
 * This resource provides the adjudication details from the processing of a Claim
 * resource.
 */
class FHIRClaimResponseError extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_ERROR;


    public const FIELD_SEQUENCE_LINK_ID = 'sequenceLinkId';
    public const FIELD_SEQUENCE_LINK_ID_EXT = '_sequenceLinkId';
    public const FIELD_DETAIL_SEQUENCE_LINK_ID = 'detailSequenceLinkId';
    public const FIELD_DETAIL_SEQUENCE_LINK_ID_EXT = '_detailSequenceLinkId';
    public const FIELD_SUBDETAIL_SEQUENCE_LINK_ID = 'subdetailSequenceLinkId';
    public const FIELD_SUBDETAIL_SEQUENCE_LINK_ID_EXT = '_subdetailSequenceLinkId';
    public const FIELD_CODE = 'code';

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The sequence number of the line item submitted which contains the error. This
     * value is omitted when the error is elsewhere.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPositiveInt 
     */
    protected FHIRPositiveInt $sequenceLinkId;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The sequence number of the addition within the line item submitted which
     * contains the error. This value is omitted when the error is not related to an
     * Addition.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPositiveInt 
     */
    protected FHIRPositiveInt $detailSequenceLinkId;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The sequence number of the addition within the line item submitted which
     * contains the error. This value is omitted when the error is not related to an
     * Addition.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPositiveInt 
     */
    protected FHIRPositiveInt $subdetailSequenceLinkId;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An error code,from a specified code system, which details why the claim could
     * not be adjudicated.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $code;

    /** Default validation map for fields in type ClaimResponse.Error */
    private const _DEFAULT_VALIDATION_RULES = [
        self::FIELD_CODE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRClaimResponseError Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPositiveInt $sequenceLinkId
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPositiveInt $detailSequenceLinkId
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPositiveInt $subdetailSequenceLinkId
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $code
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $sequenceLinkId = null,
                                null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $detailSequenceLinkId = null,
                                null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $subdetailSequenceLinkId = null,
                                null|FHIRCodeableConcept $code = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $sequenceLinkId) {
            $this->setSequenceLinkId($sequenceLinkId);
        }
        if (null !== $detailSequenceLinkId) {
            $this->setDetailSequenceLinkId($detailSequenceLinkId);
        }
        if (null !== $subdetailSequenceLinkId) {
            $this->setSubdetailSequenceLinkId($subdetailSequenceLinkId);
        }
        if (null !== $code) {
            $this->setCode($code);
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The sequence number of the line item submitted which contains the error. This
     * value is omitted when the error is elsewhere.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPositiveInt
     */
    public function getSequenceLinkId(): null|FHIRPositiveInt
    {
        return $this->sequenceLinkId ?? null;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The sequence number of the line item submitted which contains the error. This
     * value is omitted when the error is elsewhere.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPositiveInt $sequenceLinkId
     * @return static
     */
    public function setSequenceLinkId(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $sequenceLinkId): self
    {
        if (null === $sequenceLinkId) {
            unset($this->sequenceLinkId);
            return $this;
        }
        if (!($sequenceLinkId instanceof FHIRPositiveInt)) {
            $sequenceLinkId = new FHIRPositiveInt(value: $sequenceLinkId);
        }
        $this->sequenceLinkId = $sequenceLinkId;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The sequence number of the addition within the line item submitted which
     * contains the error. This value is omitted when the error is not related to an
     * Addition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPositiveInt
     */
    public function getDetailSequenceLinkId(): null|FHIRPositiveInt
    {
        return $this->detailSequenceLinkId ?? null;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The sequence number of the addition within the line item submitted which
     * contains the error. This value is omitted when the error is not related to an
     * Addition.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPositiveInt $detailSequenceLinkId
     * @return static
     */
    public function setDetailSequenceLinkId(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $detailSequenceLinkId): self
    {
        if (null === $detailSequenceLinkId) {
            unset($this->detailSequenceLinkId);
            return $this;
        }
        if (!($detailSequenceLinkId instanceof FHIRPositiveInt)) {
            $detailSequenceLinkId = new FHIRPositiveInt(value: $detailSequenceLinkId);
        }
        $this->detailSequenceLinkId = $detailSequenceLinkId;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The sequence number of the addition within the line item submitted which
     * contains the error. This value is omitted when the error is not related to an
     * Addition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPositiveInt
     */
    public function getSubdetailSequenceLinkId(): null|FHIRPositiveInt
    {
        return $this->subdetailSequenceLinkId ?? null;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The sequence number of the addition within the line item submitted which
     * contains the error. This value is omitted when the error is not related to an
     * Addition.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPositiveInt $subdetailSequenceLinkId
     * @return static
     */
    public function setSubdetailSequenceLinkId(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $subdetailSequenceLinkId): self
    {
        if (null === $subdetailSequenceLinkId) {
            unset($this->subdetailSequenceLinkId);
            return $this;
        }
        if (!($subdetailSequenceLinkId instanceof FHIRPositiveInt)) {
            $subdetailSequenceLinkId = new FHIRPositiveInt(value: $subdetailSequenceLinkId);
        }
        $this->subdetailSequenceLinkId = $subdetailSequenceLinkId;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An error code,from a specified code system, which details why the claim could
     * not be adjudicated.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getCode(): null|FHIRCodeableConcept
    {
        return $this->code ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An error code,from a specified code system, which details why the claim could
     * not be adjudicated.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $code
     * @return static
     */
    public function setCode(null|FHIRCodeableConcept $code): self
    {
        if (null === $code) {
            unset($this->code);
            return $this;
        }
        $this->code = $code;
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::_DEFAULT_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by the FHIR specification this type
     * was generated from.
     *
     * An empty array indicates no validation errors occurred.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getCode())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CODE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_SEQUENCE_LINK_ID])) {
            $v = $this->getSequenceLinkId();
            foreach($validationRules[self::FIELD_SEQUENCE_LINK_ID] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SEQUENCE_LINK_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SEQUENCE_LINK_ID])) {
                        $errs[self::FIELD_SEQUENCE_LINK_ID] = [];
                    }
                    $errs[self::FIELD_SEQUENCE_LINK_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DETAIL_SEQUENCE_LINK_ID])) {
            $v = $this->getDetailSequenceLinkId();
            foreach($validationRules[self::FIELD_DETAIL_SEQUENCE_LINK_ID] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DETAIL_SEQUENCE_LINK_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DETAIL_SEQUENCE_LINK_ID])) {
                        $errs[self::FIELD_DETAIL_SEQUENCE_LINK_ID] = [];
                    }
                    $errs[self::FIELD_DETAIL_SEQUENCE_LINK_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBDETAIL_SEQUENCE_LINK_ID])) {
            $v = $this->getSubdetailSequenceLinkId();
            foreach($validationRules[self::FIELD_SUBDETAIL_SEQUENCE_LINK_ID] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SUBDETAIL_SEQUENCE_LINK_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBDETAIL_SEQUENCE_LINK_ID])) {
                        $errs[self::FIELD_SUBDETAIL_SEQUENCE_LINK_ID] = [];
                    }
                    $errs[self::FIELD_SUBDETAIL_SEQUENCE_LINK_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CODE])) {
            $v = $this->getCode();
            foreach($validationRules[self::FIELD_CODE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CODE])) {
                        $errs[self::FIELD_CODE] = [];
                    }
                    $errs[self::FIELD_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXTENSION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ID, $rule, $constraint, $v);
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
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseError $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseError
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRClaimResponseError)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXMLNS((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ID === $childName) {
                $v = new FHIRStringPrimitive(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SEQUENCE_LINK_ID === $childName) {
                $v = new FHIRPositiveInt(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setSequenceLinkId(FHIRPositiveInt::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DETAIL_SEQUENCE_LINK_ID === $childName) {
                $v = new FHIRPositiveInt(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setDetailSequenceLinkId(FHIRPositiveInt::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SUBDETAIL_SEQUENCE_LINK_ID === $childName) {
                $v = new FHIRPositiveInt(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setSubdetailSequenceLinkId(FHIRPositiveInt::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CODE === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setCode(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRStringPrimitive(
                    value: (string)$attributes[self::FIELD_ID],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_SEQUENCE_LINK_ID])) {
            $pt = $type->getSequenceLinkId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_SEQUENCE_LINK_ID]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setSequenceLinkId(new FHIRPositiveInt(
                    value: (string)$attributes[self::FIELD_SEQUENCE_LINK_ID],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DETAIL_SEQUENCE_LINK_ID])) {
            $pt = $type->getDetailSequenceLinkId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DETAIL_SEQUENCE_LINK_ID]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDetailSequenceLinkId(new FHIRPositiveInt(
                    value: (string)$attributes[self::FIELD_DETAIL_SEQUENCE_LINK_ID],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_SUBDETAIL_SEQUENCE_LINK_ID])) {
            $pt = $type->getSubdetailSequenceLinkId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_SUBDETAIL_SEQUENCE_LINK_ID]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setSubdetailSequenceLinkId(new FHIRPositiveInt(
                    value: (string)$attributes[self::FIELD_SUBDETAIL_SEQUENCE_LINK_ID],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter
     */
    public function xmlSerialize(null|XMLWriter $xw = null, null|SerializeConfig $config = null): XMLWriter
    {
        if (null === $config) {
            $config = (new Version())->getConfig()->getSerializeConfig();
        }
        if (null === $xw) {
            $xw = new XMLWriter($config);
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $rootOpened = true;
            $xw->openRootNode('ClaimResponseError', $this->_getSourceXMLNS());
        }
        if (isset($this->sequenceLinkId) && $this->sequenceLinkId->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_SEQUENCE_LINK_ID, $this->sequenceLinkId->getValue()?->getFormattedValue());
        }
        if (isset($this->detailSequenceLinkId) && $this->detailSequenceLinkId->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DETAIL_SEQUENCE_LINK_ID, $this->detailSequenceLinkId->getValue()?->getFormattedValue());
        }
        if (isset($this->subdetailSequenceLinkId) && $this->subdetailSequenceLinkId->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_SUBDETAIL_SEQUENCE_LINK_ID, $this->subdetailSequenceLinkId->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->sequenceLinkId) && $this->sequenceLinkId->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_SEQUENCE_LINK_ID);
            $this->sequenceLinkId->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->detailSequenceLinkId) && $this->detailSequenceLinkId->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DETAIL_SEQUENCE_LINK_ID);
            $this->detailSequenceLinkId->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->subdetailSequenceLinkId) && $this->subdetailSequenceLinkId->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_SUBDETAIL_SEQUENCE_LINK_ID);
            $this->subdetailSequenceLinkId->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->code)) {
            $xw->startElement(self::FIELD_CODE);
            $this->code->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($rootOpened) && $rootOpened) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @param string|array|\stdClass $json
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseError $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseError
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRClaimResponseError)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($json)) {
            $json = json_decode(json: $json, associative: true, depth: $config->getJSONDecodeMaxDepth());
        } else if (is_object($json)) {
            $json = (array)$json;
        }
        parent::jsonUnserialize($json, $type, $config);
        if (isset($json[self::FIELD_SEQUENCE_LINK_ID]) || isset($json[self::FIELD_SEQUENCE_LINK_ID_EXT]) || array_key_exists(self::FIELD_SEQUENCE_LINK_ID, $json) || array_key_exists(self::FIELD_SEQUENCE_LINK_ID_EXT, $json)) {
            $value = $json[self::FIELD_SEQUENCE_LINK_ID] ?? null;
            $ext = (isset($json[self::FIELD_SEQUENCE_LINK_ID_EXT]) && is_array($json[self::FIELD_SEQUENCE_LINK_ID_EXT])) ? $json[self::FIELD_SEQUENCE_LINK_ID_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $type->setSequenceLinkId($value);
                } else if (is_array($value)) {
                    $type->setSequenceLinkId(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $type->setSequenceLinkId(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setSequenceLinkId(new FHIRPositiveInt($ext));
            } else {
                $type->setSequenceLinkId(new FHIRPositiveInt(null));
            }
        }
        if (isset($json[self::FIELD_DETAIL_SEQUENCE_LINK_ID]) || isset($json[self::FIELD_DETAIL_SEQUENCE_LINK_ID_EXT]) || array_key_exists(self::FIELD_DETAIL_SEQUENCE_LINK_ID, $json) || array_key_exists(self::FIELD_DETAIL_SEQUENCE_LINK_ID_EXT, $json)) {
            $value = $json[self::FIELD_DETAIL_SEQUENCE_LINK_ID] ?? null;
            $ext = (isset($json[self::FIELD_DETAIL_SEQUENCE_LINK_ID_EXT]) && is_array($json[self::FIELD_DETAIL_SEQUENCE_LINK_ID_EXT])) ? $json[self::FIELD_DETAIL_SEQUENCE_LINK_ID_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $type->setDetailSequenceLinkId($value);
                } else if (is_array($value)) {
                    $type->setDetailSequenceLinkId(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $type->setDetailSequenceLinkId(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDetailSequenceLinkId(new FHIRPositiveInt($ext));
            } else {
                $type->setDetailSequenceLinkId(new FHIRPositiveInt(null));
            }
        }
        if (isset($json[self::FIELD_SUBDETAIL_SEQUENCE_LINK_ID]) || isset($json[self::FIELD_SUBDETAIL_SEQUENCE_LINK_ID_EXT]) || array_key_exists(self::FIELD_SUBDETAIL_SEQUENCE_LINK_ID, $json) || array_key_exists(self::FIELD_SUBDETAIL_SEQUENCE_LINK_ID_EXT, $json)) {
            $value = $json[self::FIELD_SUBDETAIL_SEQUENCE_LINK_ID] ?? null;
            $ext = (isset($json[self::FIELD_SUBDETAIL_SEQUENCE_LINK_ID_EXT]) && is_array($json[self::FIELD_SUBDETAIL_SEQUENCE_LINK_ID_EXT])) ? $json[self::FIELD_SUBDETAIL_SEQUENCE_LINK_ID_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $type->setSubdetailSequenceLinkId($value);
                } else if (is_array($value)) {
                    $type->setSubdetailSequenceLinkId(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $type->setSubdetailSequenceLinkId(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setSubdetailSequenceLinkId(new FHIRPositiveInt($ext));
            } else {
                $type->setSubdetailSequenceLinkId(new FHIRPositiveInt(null));
            }
        }
        if (isset($json[self::FIELD_CODE]) || array_key_exists(self::FIELD_CODE, $json)) {
            if ($json[self::FIELD_CODE] instanceof FHIRCodeableConcept) {
                $type->setCode($json[self::FIELD_CODE]);
            } else {
                $type->setCode(new FHIRCodeableConcept($json[self::FIELD_CODE]));
            }
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->sequenceLinkId)) {
            if (null !== ($val = $this->sequenceLinkId->getValue())) {
                $out->sequenceLinkId = $val;
            }
            $ext = $this->sequenceLinkId->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_sequenceLinkId = $ext;
            }
        }
        if (isset($this->detailSequenceLinkId)) {
            if (null !== ($val = $this->detailSequenceLinkId->getValue())) {
                $out->detailSequenceLinkId = $val;
            }
            $ext = $this->detailSequenceLinkId->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_detailSequenceLinkId = $ext;
            }
        }
        if (isset($this->subdetailSequenceLinkId)) {
            if (null !== ($val = $this->subdetailSequenceLinkId->getValue())) {
                $out->subdetailSequenceLinkId = $val;
            }
            $ext = $this->subdetailSequenceLinkId->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_subdetailSequenceLinkId = $ext;
            }
        }
        if (isset($this->code)) {
            $out->code = $this->code;
        }
        return $out;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}