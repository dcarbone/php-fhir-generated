<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet;

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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
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
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRDatePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDate;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionConstants;

/**
 * A ValueSet resource instance specifies a set of codes drawn from one or more
 * code systems, intended for use in a particular context. Value sets link between
 * [[[CodeSystem]]] definitions and their use in [coded
 * elements](terminologies.html).
 */
class FHIRValueSetCompose extends FHIRBackboneElement
{    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_VALUE_SET_DOT_COMPOSE;

    /* class_default.php:47 */
    public const FIELD_LOCKED_DATE = 'lockedDate';
    public const FIELD_LOCKED_DATE_EXT = '_lockedDate';
    public const FIELD_INACTIVE = 'inactive';
    public const FIELD_INACTIVE_EXT = '_inactive';
    public const FIELD_INCLUDE = 'include';
    public const FIELD_EXCLUDE = 'exclude';

    /* class_default.php:66 */
    private static array $_validationRules = [
        self::FIELD_INCLUDE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:91 */
    private array $_valueXMLLocations = [
        self::FIELD_LOCKED_DATE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_INACTIVE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:107 */
    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The Locked Date is the effective date that is used to determine the version of
     * all referenced Code Systems and Value Set Definitions included in the compose
     * that are not already tied to a specific version.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDate 
     */
    protected FHIRDate $lockedDate;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether inactive codes - codes that are not approved for current use - are in
     * the value set. If inactive = true, inactive codes are to be included in the
     * expansion, if inactive = false, the inactive codes will not be included in the
     * expansion. If absent, the behavior is determined by the implementation, or by
     * the applicable $expand parameters (but generally, inactive codes would be
     * expected to be included).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $inactive;
    /**
     * A ValueSet resource instance specifies a set of codes drawn from one or more
     * code systems, intended for use in a particular context. Value sets link between
     * [[[CodeSystem]]] definitions and their use in [coded
     * elements](terminologies.html).
     *
     * Include one or more codes from a code system or other value set(s).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude[] 
     */
    protected array $include;
    /**
     * A ValueSet resource instance specifies a set of codes drawn from one or more
     * code systems, intended for use in a particular context. Value sets link between
     * [[[CodeSystem]]] definitions and their use in [coded
     * elements](terminologies.html).
     *
     * Exclude one or more codes from the value set based on code system filters and/or
     * other value sets.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude[] 
     */
    protected array $exclude;

    /* constructor.php:63 */
    /**
     * FHIRValueSetCompose Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDate $lockedDate
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBoolean $inactive
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude[] $include
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude[] $exclude
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $lockedDate = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $inactive = null,
                                null|iterable $include = null,
                                null|iterable $exclude = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $lockedDate) {
            $this->setLockedDate($lockedDate);
        }
        if (null !== $inactive) {
            $this->setInactive($inactive);
        }
        if (null !== $include) {
            $this->setInclude(...$include);
        }
        if (null !== $exclude) {
            $this->setExclude(...$exclude);
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
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The Locked Date is the effective date that is used to determine the version of
     * all referenced Code Systems and Value Set Definitions included in the compose
     * that are not already tied to a specific version.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDate
     */
    public function getLockedDate(): null|FHIRDate
    {
        return $this->lockedDate ?? null;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The Locked Date is the effective date that is used to determine the version of
     * all referenced Code Systems and Value Set Definitions included in the compose
     * that are not already tied to a specific version.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRDate $lockedDate
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setLockedDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $lockedDate,
                                  ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $lockedDate) {
            unset($this->lockedDate);
            return $this;
        }
        if (!($lockedDate instanceof FHIRDate)) {
            $lockedDate = new FHIRDate(value: $lockedDate);
        }
        $this->lockedDate = $lockedDate;
        if ($this->_valueXMLLocations[self::FIELD_LOCKED_DATE] !== $valueXMLLocation) {
            $this->_setLockedDateValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the lockedDate element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getLockedDateValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_LOCKED_DATE];
    }

    /**
     * Set the location the "value" field of the lockedDate element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setLockedDateValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_LOCKED_DATE] = $valueXMLLocation;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether inactive codes - codes that are not approved for current use - are in
     * the value set. If inactive = true, inactive codes are to be included in the
     * expansion, if inactive = false, the inactive codes will not be included in the
     * expansion. If absent, the behavior is determined by the implementation, or by
     * the applicable $expand parameters (but generally, inactive codes would be
     * expected to be included).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBoolean
     */
    public function getInactive(): null|FHIRBoolean
    {
        return $this->inactive ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether inactive codes - codes that are not approved for current use - are in
     * the value set. If inactive = true, inactive codes are to be included in the
     * expansion, if inactive = false, the inactive codes will not be included in the
     * expansion. If absent, the behavior is determined by the implementation, or by
     * the applicable $expand parameters (but generally, inactive codes would be
     * expected to be included).
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBoolean $inactive
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setInactive(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $inactive,
                                ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $inactive) {
            unset($this->inactive);
            return $this;
        }
        if (!($inactive instanceof FHIRBoolean)) {
            $inactive = new FHIRBoolean(value: $inactive);
        }
        $this->inactive = $inactive;
        if ($this->_valueXMLLocations[self::FIELD_INACTIVE] !== $valueXMLLocation) {
            $this->_setInactiveValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the inactive element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getInactiveValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_INACTIVE];
    }

    /**
     * Set the location the "value" field of the inactive element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setInactiveValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_INACTIVE] = $valueXMLLocation;
        return $this;
    }

    /**
     * A ValueSet resource instance specifies a set of codes drawn from one or more
     * code systems, intended for use in a particular context. Value sets link between
     * [[[CodeSystem]]] definitions and their use in [coded
     * elements](terminologies.html).
     *
     * Include one or more codes from a code system or other value set(s).
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude[]
     */
    public function getInclude(): array
    {
        return $this->include ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude>
     */
    public function getIncludeIterator(): iterable
    {
        if (!isset($this->include)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->include);
    }

    /**
     * A ValueSet resource instance specifies a set of codes drawn from one or more
     * code systems, intended for use in a particular context. Value sets link between
     * [[[CodeSystem]]] definitions and their use in [coded
     * elements](terminologies.html).
     *
     * Include one or more codes from a code system or other value set(s).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude $include
     * @return static
     */
    public function addInclude(FHIRValueSetInclude $include): self
    {
        if (!isset($this->include)) {
            $this->include = [];
        }
        $this->include[] = $include;
        return $this;
    }

    /**
     * A ValueSet resource instance specifies a set of codes drawn from one or more
     * code systems, intended for use in a particular context. Value sets link between
     * [[[CodeSystem]]] definitions and their use in [coded
     * elements](terminologies.html).
     *
     * Include one or more codes from a code system or other value set(s).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude ...$include
     * @return static
     */
    public function setInclude(FHIRValueSetInclude ...$include): self
    {
        if ([] === $include) {
            unset($this->include);
            return $this;
        }
        $this->include = $include;
        return $this;
    }

    /**
     * A ValueSet resource instance specifies a set of codes drawn from one or more
     * code systems, intended for use in a particular context. Value sets link between
     * [[[CodeSystem]]] definitions and their use in [coded
     * elements](terminologies.html).
     *
     * Exclude one or more codes from the value set based on code system filters and/or
     * other value sets.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude[]
     */
    public function getExclude(): array
    {
        return $this->exclude ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude>
     */
    public function getExcludeIterator(): iterable
    {
        if (!isset($this->exclude)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->exclude);
    }

    /**
     * A ValueSet resource instance specifies a set of codes drawn from one or more
     * code systems, intended for use in a particular context. Value sets link between
     * [[[CodeSystem]]] definitions and their use in [coded
     * elements](terminologies.html).
     *
     * Exclude one or more codes from the value set based on code system filters and/or
     * other value sets.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude $exclude
     * @return static
     */
    public function addExclude(FHIRValueSetInclude $exclude): self
    {
        if (!isset($this->exclude)) {
            $this->exclude = [];
        }
        $this->exclude[] = $exclude;
        return $this;
    }

    /**
     * A ValueSet resource instance specifies a set of codes drawn from one or more
     * code systems, intended for use in a particular context. Value sets link between
     * [[[CodeSystem]]] definitions and their use in [coded
     * elements](terminologies.html).
     *
     * Exclude one or more codes from the value set based on code system filters and/or
     * other value sets.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude ...$exclude
     * @return static
     */
    public function setExclude(FHIRValueSetInclude ...$exclude): self
    {
        if ([] === $exclude) {
            unset($this->exclude);
            return $this;
        }
        $this->exclude = $exclude;
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
        if ([] !== ($vs = $this->getInclude())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_INCLUDE, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LOCKED_DATE])) {
            $v = $this->getLockedDate();
            foreach($validationRules[self::FIELD_LOCKED_DATE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_LOCKED_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LOCKED_DATE])) {
                        $errs[self::FIELD_LOCKED_DATE] = [];
                    }
                    $errs[self::FIELD_LOCKED_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INACTIVE])) {
            $v = $this->getInactive();
            foreach($validationRules[self::FIELD_INACTIVE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_INACTIVE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INACTIVE])) {
                        $errs[self::FIELD_INACTIVE] = [];
                    }
                    $errs[self::FIELD_INACTIVE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INCLUDE])) {
            $v = $this->getInclude();
            foreach($validationRules[self::FIELD_INCLUDE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_INCLUDE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INCLUDE])) {
                        $errs[self::FIELD_INCLUDE] = [];
                    }
                    $errs[self::FIELD_INCLUDE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXCLUDE])) {
            $v = $this->getExclude();
            foreach($validationRules[self::FIELD_EXCLUDE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXCLUDE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXCLUDE])) {
                        $errs[self::FIELD_EXCLUDE] = [];
                    }
                    $errs[self::FIELD_EXCLUDE][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetCompose $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetCompose
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRValueSetCompose)) {
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
            } else if (self::FIELD_LOCKED_DATE === $cen) {
                $type->setLockedDate(FHIRDate::xmlUnserialize($ce, $config));
            } else if (self::FIELD_INACTIVE === $cen) {
                $type->setInactive(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_INCLUDE === $cen) {
                $type->addInclude(FHIRValueSetInclude::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EXCLUDE === $cen) {
                $type->addExclude(FHIRValueSetInclude::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_LOCKED_DATE])) {
            if (isset($type->lockedDate)) {
                $type->lockedDate->setValue((string)$attributes[self::FIELD_LOCKED_DATE]);
                $type->_setLockedDateValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setLockedDate((string)$attributes[self::FIELD_LOCKED_DATE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_INACTIVE])) {
            if (isset($type->inactive)) {
                $type->inactive->setValue((string)$attributes[self::FIELD_INACTIVE]);
                $type->_setInactiveValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setInactive((string)$attributes[self::FIELD_INACTIVE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->lockedDate) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_LOCKED_DATE]) {
            $xw->writeAttribute(self::FIELD_LOCKED_DATE, $this->lockedDate->_getFormattedValue());
        }
        if (isset($this->inactive) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_INACTIVE]) {
            $xw->writeAttribute(self::FIELD_INACTIVE, $this->inactive->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->lockedDate)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_LOCKED_DATE]
                || $this->lockedDate->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_LOCKED_DATE);
            $this->lockedDate->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_LOCKED_DATE]);
            $xw->endElement();
        }
        if (isset($this->inactive)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_INACTIVE]
                || $this->inactive->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_INACTIVE);
            $this->inactive->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_INACTIVE]);
            $xw->endElement();
        }
        if (isset($this->include)) {
            foreach ($this->include as $v) {
                $xw->startElement(self::FIELD_INCLUDE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->exclude)) {
            foreach ($this->exclude as $v) {
                $xw->startElement(self::FIELD_EXCLUDE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
    }

    /**
     * @param array $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetCompose $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetCompose
     * @throws \Exception
     */
    public static function jsonUnserialize(array $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRValueSetCompose)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json[self::FIELD_LOCKED_DATE])
            || isset($json[self::FIELD_LOCKED_DATE_EXT])
            || array_key_exists(self::FIELD_LOCKED_DATE, $json)
            || array_key_exists(self::FIELD_LOCKED_DATE_EXT, $json)) {
            $value = $json[self::FIELD_LOCKED_DATE] ?? null;
            $type->setLockedDate(FHIRDate::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDate::FIELD_VALUE => $value]) + ($json[self::FIELD_LOCKED_DATE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_INACTIVE])
            || isset($json[self::FIELD_INACTIVE_EXT])
            || array_key_exists(self::FIELD_INACTIVE, $json)
            || array_key_exists(self::FIELD_INACTIVE_EXT, $json)) {
            $value = $json[self::FIELD_INACTIVE] ?? null;
            $type->setInactive(FHIRBoolean::jsonUnserialize(
                (is_array($value) ? $value : [FHIRBoolean::FIELD_VALUE => $value]) + ($json[self::FIELD_INACTIVE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_INCLUDE]) || array_key_exists(self::FIELD_INCLUDE, $json)) {
            $vs = $json[self::FIELD_INCLUDE];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addInclude(FHIRValueSetInclude::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_EXCLUDE]) || array_key_exists(self::FIELD_EXCLUDE, $json)) {
            $vs = $json[self::FIELD_EXCLUDE];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addExclude(FHIRValueSetInclude::jsonUnserialize($v, $config));
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
        if (isset($this->lockedDate)) {
            if (null !== ($val = $this->lockedDate->getValue())) {
                $out->lockedDate = $val;
            }
            if ($this->lockedDate->_nonValueFieldDefined()) {
                $ext = $this->lockedDate->jsonSerialize();
                unset($ext->value);
                $out->_lockedDate = $ext;
            }
        }
        if (isset($this->inactive)) {
            if (null !== ($val = $this->inactive->getValue())) {
                $out->inactive = $val;
            }
            if ($this->inactive->_nonValueFieldDefined()) {
                $ext = $this->inactive->jsonSerialize();
                unset($ext->value);
                $out->_inactive = $ext;
            }
        }
        if (isset($this->include) && [] !== $this->include) {
            $out->include = $this->include;
        }
        if (isset($this->exclude) && [] !== $this->exclude) {
            $out->exclude = $this->exclude;
        }
        return $out;
    }
}