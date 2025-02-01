<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide;

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
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCanonicalPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCanonical;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUrl;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRUrlPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionConstants;

/**
 * A set of rules of how a particular interoperability or standards problem is
 * solved - typically through the use of FHIR resources. This resource is used to
 * gather all the parts of an implementation guide into a logical whole and to
 * publish a computable definition of all the parts.
 */
class FHIRImplementationGuideResource1 extends FHIRBackboneElement
{    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_RESOURCE_1;

    /* class_default.php:47 */
    public const FIELD_REFERENCE = 'reference';
    public const FIELD_EXAMPLE_BOOLEAN = 'exampleBoolean';
    public const FIELD_EXAMPLE_BOOLEAN_EXT = '_exampleBoolean';
    public const FIELD_EXAMPLE_CANONICAL = 'exampleCanonical';
    public const FIELD_EXAMPLE_CANONICAL_EXT = '_exampleCanonical';
    public const FIELD_RELATIVE_PATH = 'relativePath';
    public const FIELD_RELATIVE_PATH_EXT = '_relativePath';

    /* class_default.php:66 */
    private static array $_validationRules = [
        self::FIELD_REFERENCE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:91 */
    private array $_valueXMLLocations = [
        self::FIELD_EXAMPLE_BOOLEAN => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_EXAMPLE_CANONICAL => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_RELATIVE_PATH => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:107 */
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where this resource is found.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $reference;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true or a reference, indicates the resource is an example instance. If a
     * reference is present, indicates that the example is an example of the specified
     * profile.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $exampleBoolean;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * If true or a reference, indicates the resource is an example instance. If a
     * reference is present, indicates that the example is an example of the specified
     * profile.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCanonical 
     */
    protected FHIRCanonical $exampleCanonical;
    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The relative path for primary page for this resource within the IG.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUrl 
     */
    protected FHIRUrl $relativePath;

    /* constructor.php:63 */
    /**
     * FHIRImplementationGuideResource1 Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $reference
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBoolean $exampleBoolean
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCanonical $exampleCanonical
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRUrlPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUrl $relativePath
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRReference $reference = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $exampleBoolean = null,
                                null|string|FHIRCanonicalPrimitive|FHIRCanonical $exampleCanonical = null,
                                null|string|FHIRUrlPrimitive|FHIRUrl $relativePath = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $reference) {
            $this->setReference($reference);
        }
        if (null !== $exampleBoolean) {
            $this->setExampleBoolean($exampleBoolean);
        }
        if (null !== $exampleCanonical) {
            $this->setExampleCanonical($exampleCanonical);
        }
        if (null !== $relativePath) {
            $this->setRelativePath($relativePath);
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where this resource is found.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference
     */
    public function getReference(): null|FHIRReference
    {
        return $this->reference ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where this resource is found.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $reference
     * @return static
     */
    public function setReference(null|FHIRReference $reference): self
    {
        if (null === $reference) {
            unset($this->reference);
            return $this;
        }
        $this->reference = $reference;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true or a reference, indicates the resource is an example instance. If a
     * reference is present, indicates that the example is an example of the specified
     * profile.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBoolean
     */
    public function getExampleBoolean(): null|FHIRBoolean
    {
        return $this->exampleBoolean ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true or a reference, indicates the resource is an example instance. If a
     * reference is present, indicates that the example is an example of the specified
     * profile.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBoolean $exampleBoolean
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setExampleBoolean(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $exampleBoolean,
                                      ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $exampleBoolean) {
            unset($this->exampleBoolean);
            return $this;
        }
        if (!($exampleBoolean instanceof FHIRBoolean)) {
            $exampleBoolean = new FHIRBoolean(value: $exampleBoolean);
        }
        $this->exampleBoolean = $exampleBoolean;
        if ($this->_valueXMLLocations[self::FIELD_EXAMPLE_BOOLEAN] !== $valueXMLLocation) {
            $this->_setExampleBooleanValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the exampleBoolean element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getExampleBooleanValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_EXAMPLE_BOOLEAN];
    }

    /**
     * Set the location the "value" field of the exampleBoolean element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setExampleBooleanValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_EXAMPLE_BOOLEAN] = $valueXMLLocation;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * If true or a reference, indicates the resource is an example instance. If a
     * reference is present, indicates that the example is an example of the specified
     * profile.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCanonical
     */
    public function getExampleCanonical(): null|FHIRCanonical
    {
        return $this->exampleCanonical ?? null;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * If true or a reference, indicates the resource is an example instance. If a
     * reference is present, indicates that the example is an example of the specified
     * profile.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCanonical $exampleCanonical
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setExampleCanonical(null|string|FHIRCanonicalPrimitive|FHIRCanonical $exampleCanonical,
                                        ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $exampleCanonical) {
            unset($this->exampleCanonical);
            return $this;
        }
        if (!($exampleCanonical instanceof FHIRCanonical)) {
            $exampleCanonical = new FHIRCanonical(value: $exampleCanonical);
        }
        $this->exampleCanonical = $exampleCanonical;
        if ($this->_valueXMLLocations[self::FIELD_EXAMPLE_CANONICAL] !== $valueXMLLocation) {
            $this->_setExampleCanonicalValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the exampleCanonical element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getExampleCanonicalValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_EXAMPLE_CANONICAL];
    }

    /**
     * Set the location the "value" field of the exampleCanonical element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setExampleCanonicalValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_EXAMPLE_CANONICAL] = $valueXMLLocation;
        return $this;
    }

    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The relative path for primary page for this resource within the IG.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUrl
     */
    public function getRelativePath(): null|FHIRUrl
    {
        return $this->relativePath ?? null;
    }

    /**
     * A URI that is a literal reference
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The relative path for primary page for this resource within the IG.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRUrlPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUrl $relativePath
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setRelativePath(null|string|FHIRUrlPrimitive|FHIRUrl $relativePath,
                                    ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $relativePath) {
            unset($this->relativePath);
            return $this;
        }
        if (!($relativePath instanceof FHIRUrl)) {
            $relativePath = new FHIRUrl(value: $relativePath);
        }
        $this->relativePath = $relativePath;
        if ($this->_valueXMLLocations[self::FIELD_RELATIVE_PATH] !== $valueXMLLocation) {
            $this->_setRelativePathValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the relativePath element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getRelativePathValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_RELATIVE_PATH];
    }

    /**
     * Set the location the "value" field of the relativePath element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setRelativePathValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_RELATIVE_PATH] = $valueXMLLocation;
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
        if (null !== ($v = $this->getReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REFERENCE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_REFERENCE])) {
            $v = $this->getReference();
            foreach($validationRules[self::FIELD_REFERENCE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REFERENCE])) {
                        $errs[self::FIELD_REFERENCE] = [];
                    }
                    $errs[self::FIELD_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXAMPLE_BOOLEAN])) {
            $v = $this->getExampleBoolean();
            foreach($validationRules[self::FIELD_EXAMPLE_BOOLEAN] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXAMPLE_BOOLEAN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXAMPLE_BOOLEAN])) {
                        $errs[self::FIELD_EXAMPLE_BOOLEAN] = [];
                    }
                    $errs[self::FIELD_EXAMPLE_BOOLEAN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXAMPLE_CANONICAL])) {
            $v = $this->getExampleCanonical();
            foreach($validationRules[self::FIELD_EXAMPLE_CANONICAL] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXAMPLE_CANONICAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXAMPLE_CANONICAL])) {
                        $errs[self::FIELD_EXAMPLE_CANONICAL] = [];
                    }
                    $errs[self::FIELD_EXAMPLE_CANONICAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RELATIVE_PATH])) {
            $v = $this->getRelativePath();
            foreach($validationRules[self::FIELD_RELATIVE_PATH] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_RELATIVE_PATH, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RELATIVE_PATH])) {
                        $errs[self::FIELD_RELATIVE_PATH] = [];
                    }
                    $errs[self::FIELD_RELATIVE_PATH][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideResource1 $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideResource1
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRImplementationGuideResource1)) {
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
            } else if (self::FIELD_REFERENCE === $cen) {
                $type->setReference(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EXAMPLE_BOOLEAN === $cen) {
                $type->setExampleBoolean(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EXAMPLE_CANONICAL === $cen) {
                $type->setExampleCanonical(FHIRCanonical::xmlUnserialize($ce, $config));
            } else if (self::FIELD_RELATIVE_PATH === $cen) {
                $type->setRelativePath(FHIRUrl::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_EXAMPLE_BOOLEAN])) {
            if (isset($type->exampleBoolean)) {
                $type->exampleBoolean->setValue((string)$attributes[self::FIELD_EXAMPLE_BOOLEAN]);
                $type->_setExampleBooleanValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setExampleBoolean((string)$attributes[self::FIELD_EXAMPLE_BOOLEAN], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_EXAMPLE_CANONICAL])) {
            if (isset($type->exampleCanonical)) {
                $type->exampleCanonical->setValue((string)$attributes[self::FIELD_EXAMPLE_CANONICAL]);
                $type->_setExampleCanonicalValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setExampleCanonical((string)$attributes[self::FIELD_EXAMPLE_CANONICAL], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_RELATIVE_PATH])) {
            if (isset($type->relativePath)) {
                $type->relativePath->setValue((string)$attributes[self::FIELD_RELATIVE_PATH]);
                $type->_setRelativePathValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setRelativePath((string)$attributes[self::FIELD_RELATIVE_PATH], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->exampleBoolean) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_EXAMPLE_BOOLEAN]) {
            $xw->writeAttribute(self::FIELD_EXAMPLE_BOOLEAN, $this->exampleBoolean->_getFormattedValue());
        }
        if (isset($this->exampleCanonical) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_EXAMPLE_CANONICAL]) {
            $xw->writeAttribute(self::FIELD_EXAMPLE_CANONICAL, $this->exampleCanonical->_getFormattedValue());
        }
        if (isset($this->relativePath) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_RELATIVE_PATH]) {
            $xw->writeAttribute(self::FIELD_RELATIVE_PATH, $this->relativePath->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->reference)) {
            $xw->startElement(self::FIELD_REFERENCE);
            $this->reference->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->exampleBoolean)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_EXAMPLE_BOOLEAN]
                || $this->exampleBoolean->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_EXAMPLE_BOOLEAN);
            $this->exampleBoolean->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_EXAMPLE_BOOLEAN]);
            $xw->endElement();
        }
        if (isset($this->exampleCanonical)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_EXAMPLE_CANONICAL]
                || $this->exampleCanonical->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_EXAMPLE_CANONICAL);
            $this->exampleCanonical->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_EXAMPLE_CANONICAL]);
            $xw->endElement();
        }
        if (isset($this->relativePath)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_RELATIVE_PATH]
                || $this->relativePath->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_RELATIVE_PATH);
            $this->relativePath->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_RELATIVE_PATH]);
            $xw->endElement();
        }
    }

    /**
     * @param array $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideResource1 $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideResource1
     * @throws \Exception
     */
    public static function jsonUnserialize(array $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRImplementationGuideResource1)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json[self::FIELD_REFERENCE]) || array_key_exists(self::FIELD_REFERENCE, $json)) {
            $type->setReference(FHIRReference::jsonUnserialize($json[self::FIELD_REFERENCE], $config));
        }
        if (isset($json[self::FIELD_EXAMPLE_BOOLEAN])
            || isset($json[self::FIELD_EXAMPLE_BOOLEAN_EXT])
            || array_key_exists(self::FIELD_EXAMPLE_BOOLEAN, $json)
            || array_key_exists(self::FIELD_EXAMPLE_BOOLEAN_EXT, $json)) {
            $value = $json[self::FIELD_EXAMPLE_BOOLEAN] ?? null;
            $type->setExampleBoolean(FHIRBoolean::jsonUnserialize(
                (is_array($value) ? $value : [FHIRBoolean::FIELD_VALUE => $value]) + ($json[self::FIELD_EXAMPLE_BOOLEAN_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_EXAMPLE_CANONICAL])
            || isset($json[self::FIELD_EXAMPLE_CANONICAL_EXT])
            || array_key_exists(self::FIELD_EXAMPLE_CANONICAL, $json)
            || array_key_exists(self::FIELD_EXAMPLE_CANONICAL_EXT, $json)) {
            $value = $json[self::FIELD_EXAMPLE_CANONICAL] ?? null;
            $type->setExampleCanonical(FHIRCanonical::jsonUnserialize(
                (is_array($value) ? $value : [FHIRCanonical::FIELD_VALUE => $value]) + ($json[self::FIELD_EXAMPLE_CANONICAL_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_RELATIVE_PATH])
            || isset($json[self::FIELD_RELATIVE_PATH_EXT])
            || array_key_exists(self::FIELD_RELATIVE_PATH, $json)
            || array_key_exists(self::FIELD_RELATIVE_PATH_EXT, $json)) {
            $value = $json[self::FIELD_RELATIVE_PATH] ?? null;
            $type->setRelativePath(FHIRUrl::jsonUnserialize(
                (is_array($value) ? $value : [FHIRUrl::FIELD_VALUE => $value]) + ($json[self::FIELD_RELATIVE_PATH_EXT] ?? []),
                $config,
            ));
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->reference)) {
            $out->reference = $this->reference;
        }
        if (isset($this->exampleBoolean)) {
            if (null !== ($val = $this->exampleBoolean->getValue())) {
                $out->exampleBoolean = $val;
            }
            if ($this->exampleBoolean->_nonValueFieldDefined()) {
                $ext = $this->exampleBoolean->jsonSerialize();
                unset($ext->value);
                $out->_exampleBoolean = $ext;
            }
        }
        if (isset($this->exampleCanonical)) {
            if (null !== ($val = $this->exampleCanonical->getValue())) {
                $out->exampleCanonical = $val;
            }
            if ($this->exampleCanonical->_nonValueFieldDefined()) {
                $ext = $this->exampleCanonical->jsonSerialize();
                unset($ext->value);
                $out->_exampleCanonical = $ext;
            }
        }
        if (isset($this->relativePath)) {
            if (null !== ($val = $this->relativePath->getValue())) {
                $out->relativePath = $val;
            }
            if ($this->relativePath->_nonValueFieldDefined()) {
                $ext = $this->relativePath->jsonSerialize();
                unset($ext->value);
                $out->_relativePath = $ext;
            }
        }
        return $out;
    }
}