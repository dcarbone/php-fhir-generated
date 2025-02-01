<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 1st, 2025 22:01+0000
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
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
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
{    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_ERROR;

    /* class_default.php:47 */
    public const FIELD_SEQUENCE_LINK_ID = 'sequenceLinkId';
    public const FIELD_SEQUENCE_LINK_ID_EXT = '_sequenceLinkId';
    public const FIELD_DETAIL_SEQUENCE_LINK_ID = 'detailSequenceLinkId';
    public const FIELD_DETAIL_SEQUENCE_LINK_ID_EXT = '_detailSequenceLinkId';
    public const FIELD_SUBDETAIL_SEQUENCE_LINK_ID = 'subdetailSequenceLinkId';
    public const FIELD_SUBDETAIL_SEQUENCE_LINK_ID_EXT = '_subdetailSequenceLinkId';
    public const FIELD_CODE = 'code';

    /* class_default.php:66 */
    private static array $_validationRules = [
        self::FIELD_CODE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:91 */
    private array $_valueXMLLocations = [
        self::FIELD_SEQUENCE_LINK_ID => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DETAIL_SEQUENCE_LINK_ID => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_SUBDETAIL_SEQUENCE_LINK_ID => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:107 */
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

    /* constructor.php:63 */
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

    /* class_default.php:136 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:162 */
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setSequenceLinkId(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $sequenceLinkId,
                                      ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $sequenceLinkId) {
            unset($this->sequenceLinkId);
            return $this;
        }
        if (!($sequenceLinkId instanceof FHIRPositiveInt)) {
            $sequenceLinkId = new FHIRPositiveInt(value: $sequenceLinkId);
        }
        $this->sequenceLinkId = $sequenceLinkId;
        if ($this->_valueXMLLocations[self::FIELD_SEQUENCE_LINK_ID] !== $valueXMLLocation) {
            $this->_setSequenceLinkIdValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the sequenceLinkId element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getSequenceLinkIdValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_SEQUENCE_LINK_ID];
    }

    /**
     * Set the location the "value" field of the sequenceLinkId element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setSequenceLinkIdValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_SEQUENCE_LINK_ID] = $valueXMLLocation;
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDetailSequenceLinkId(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $detailSequenceLinkId,
                                            ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $detailSequenceLinkId) {
            unset($this->detailSequenceLinkId);
            return $this;
        }
        if (!($detailSequenceLinkId instanceof FHIRPositiveInt)) {
            $detailSequenceLinkId = new FHIRPositiveInt(value: $detailSequenceLinkId);
        }
        $this->detailSequenceLinkId = $detailSequenceLinkId;
        if ($this->_valueXMLLocations[self::FIELD_DETAIL_SEQUENCE_LINK_ID] !== $valueXMLLocation) {
            $this->_setDetailSequenceLinkIdValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the detailSequenceLinkId element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getDetailSequenceLinkIdValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_DETAIL_SEQUENCE_LINK_ID];
    }

    /**
     * Set the location the "value" field of the detailSequenceLinkId element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setDetailSequenceLinkIdValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_DETAIL_SEQUENCE_LINK_ID] = $valueXMLLocation;
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setSubdetailSequenceLinkId(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $subdetailSequenceLinkId,
                                               ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $subdetailSequenceLinkId) {
            unset($this->subdetailSequenceLinkId);
            return $this;
        }
        if (!($subdetailSequenceLinkId instanceof FHIRPositiveInt)) {
            $subdetailSequenceLinkId = new FHIRPositiveInt(value: $subdetailSequenceLinkId);
        }
        $this->subdetailSequenceLinkId = $subdetailSequenceLinkId;
        if ($this->_valueXMLLocations[self::FIELD_SUBDETAIL_SEQUENCE_LINK_ID] !== $valueXMLLocation) {
            $this->_setSubdetailSequenceLinkIdValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the subdetailSequenceLinkId element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getSubdetailSequenceLinkIdValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_SUBDETAIL_SEQUENCE_LINK_ID];
    }

    /**
     * Set the location the "value" field of the subdetailSequenceLinkId element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setSubdetailSequenceLinkIdValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_SUBDETAIL_SEQUENCE_LINK_ID] = $valueXMLLocation;
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

    /* class_default.php:188 */
    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::$_validationRules;
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

    /* class_default.php:211 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseError $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseError
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
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
        foreach ($element->children() as $ce) {
            $cen = $ce->getName();
            if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ID === $cen) {
                $va = $ce->attributes()[FHIRStringPrimitive::FIELD_VALUE] ?? null;
                if (null !== $va) {
                    $type->setId((string)$va, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SEQUENCE_LINK_ID === $cen) {
                $type->setSequenceLinkId(FHIRPositiveInt::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DETAIL_SEQUENCE_LINK_ID === $cen) {
                $type->setDetailSequenceLinkId(FHIRPositiveInt::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SUBDETAIL_SEQUENCE_LINK_ID === $cen) {
                $type->setSubdetailSequenceLinkId(FHIRPositiveInt::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CODE === $cen) {
                $type->setCode(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_SEQUENCE_LINK_ID])) {
            if (isset($type->sequenceLinkId)) {
                $type->sequenceLinkId->setValue((string)$attributes[self::FIELD_SEQUENCE_LINK_ID]);
                $type->_setSequenceLinkIdValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setSequenceLinkId((string)$attributes[self::FIELD_SEQUENCE_LINK_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DETAIL_SEQUENCE_LINK_ID])) {
            if (isset($type->detailSequenceLinkId)) {
                $type->detailSequenceLinkId->setValue((string)$attributes[self::FIELD_DETAIL_SEQUENCE_LINK_ID]);
                $type->_setDetailSequenceLinkIdValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDetailSequenceLinkId((string)$attributes[self::FIELD_DETAIL_SEQUENCE_LINK_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_SUBDETAIL_SEQUENCE_LINK_ID])) {
            if (isset($type->subdetailSequenceLinkId)) {
                $type->subdetailSequenceLinkId->setValue((string)$attributes[self::FIELD_SUBDETAIL_SEQUENCE_LINK_ID]);
                $type->_setSubdetailSequenceLinkIdValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setSubdetailSequenceLinkId((string)$attributes[self::FIELD_SUBDETAIL_SEQUENCE_LINK_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param \DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     */
    public function xmlSerialize(XMLWriter $xw,
                                 SerializeConfig $config): void
    {
        if (isset($this->sequenceLinkId) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_SEQUENCE_LINK_ID]) {
            $xw->writeAttribute(self::FIELD_SEQUENCE_LINK_ID, $this->sequenceLinkId->_getFormattedValue());
        }
        if (isset($this->detailSequenceLinkId) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DETAIL_SEQUENCE_LINK_ID]) {
            $xw->writeAttribute(self::FIELD_DETAIL_SEQUENCE_LINK_ID, $this->detailSequenceLinkId->_getFormattedValue());
        }
        if (isset($this->subdetailSequenceLinkId) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_SUBDETAIL_SEQUENCE_LINK_ID]) {
            $xw->writeAttribute(self::FIELD_SUBDETAIL_SEQUENCE_LINK_ID, $this->subdetailSequenceLinkId->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->sequenceLinkId)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_SEQUENCE_LINK_ID]
                || $this->sequenceLinkId->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_SEQUENCE_LINK_ID);
            $this->sequenceLinkId->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_SEQUENCE_LINK_ID]);
            $xw->endElement();
        }
        if (isset($this->detailSequenceLinkId)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DETAIL_SEQUENCE_LINK_ID]
                || $this->detailSequenceLinkId->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DETAIL_SEQUENCE_LINK_ID);
            $this->detailSequenceLinkId->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DETAIL_SEQUENCE_LINK_ID]);
            $xw->endElement();
        }
        if (isset($this->subdetailSequenceLinkId)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_SUBDETAIL_SEQUENCE_LINK_ID]
                || $this->subdetailSequenceLinkId->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_SUBDETAIL_SEQUENCE_LINK_ID);
            $this->subdetailSequenceLinkId->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_SUBDETAIL_SEQUENCE_LINK_ID]);
            $xw->endElement();
        }
        if (isset($this->code)) {
            $xw->startElement(self::FIELD_CODE);
            $this->code->xmlSerialize($xw, $config);
            $xw->endElement();
        }
    }

    /**
     * @param array $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseError $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseError
     * @throws \Exception
     */
    public static function jsonUnserialize(array $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
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
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json[self::FIELD_SEQUENCE_LINK_ID])
            || isset($json[self::FIELD_SEQUENCE_LINK_ID_EXT])
            || array_key_exists(self::FIELD_SEQUENCE_LINK_ID, $json)
            || array_key_exists(self::FIELD_SEQUENCE_LINK_ID_EXT, $json)) {
            $value = $json[self::FIELD_SEQUENCE_LINK_ID] ?? null;
            $type->setSequenceLinkId(FHIRPositiveInt::jsonUnserialize(
                (is_array($value) ? $value : [FHIRPositiveInt::FIELD_VALUE => $value]) + ($json[self::FIELD_SEQUENCE_LINK_ID_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_DETAIL_SEQUENCE_LINK_ID])
            || isset($json[self::FIELD_DETAIL_SEQUENCE_LINK_ID_EXT])
            || array_key_exists(self::FIELD_DETAIL_SEQUENCE_LINK_ID, $json)
            || array_key_exists(self::FIELD_DETAIL_SEQUENCE_LINK_ID_EXT, $json)) {
            $value = $json[self::FIELD_DETAIL_SEQUENCE_LINK_ID] ?? null;
            $type->setDetailSequenceLinkId(FHIRPositiveInt::jsonUnserialize(
                (is_array($value) ? $value : [FHIRPositiveInt::FIELD_VALUE => $value]) + ($json[self::FIELD_DETAIL_SEQUENCE_LINK_ID_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_SUBDETAIL_SEQUENCE_LINK_ID])
            || isset($json[self::FIELD_SUBDETAIL_SEQUENCE_LINK_ID_EXT])
            || array_key_exists(self::FIELD_SUBDETAIL_SEQUENCE_LINK_ID, $json)
            || array_key_exists(self::FIELD_SUBDETAIL_SEQUENCE_LINK_ID_EXT, $json)) {
            $value = $json[self::FIELD_SUBDETAIL_SEQUENCE_LINK_ID] ?? null;
            $type->setSubdetailSequenceLinkId(FHIRPositiveInt::jsonUnserialize(
                (is_array($value) ? $value : [FHIRPositiveInt::FIELD_VALUE => $value]) + ($json[self::FIELD_SUBDETAIL_SEQUENCE_LINK_ID_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_CODE]) || array_key_exists(self::FIELD_CODE, $json)) {
            $type->setCode(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_CODE], $config));
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
            if ($this->sequenceLinkId->_nonValueFieldDefined()) {
                $ext = $this->sequenceLinkId->jsonSerialize();
                unset($ext->value);
                $out->_sequenceLinkId = $ext;
            }
        }
        if (isset($this->detailSequenceLinkId)) {
            if (null !== ($val = $this->detailSequenceLinkId->getValue())) {
                $out->detailSequenceLinkId = $val;
            }
            if ($this->detailSequenceLinkId->_nonValueFieldDefined()) {
                $ext = $this->detailSequenceLinkId->jsonSerialize();
                unset($ext->value);
                $out->_detailSequenceLinkId = $ext;
            }
        }
        if (isset($this->subdetailSequenceLinkId)) {
            if (null !== ($val = $this->subdetailSequenceLinkId->getValue())) {
                $out->subdetailSequenceLinkId = $val;
            }
            if ($this->subdetailSequenceLinkId->_nonValueFieldDefined()) {
                $ext = $this->subdetailSequenceLinkId->jsonSerialize();
                unset($ext->value);
                $out->_subdetailSequenceLinkId = $ext;
            }
        }
        if (isset($this->code)) {
            $out->code = $this->code;
        }
        return $out;
    }
}