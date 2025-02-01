<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRConceptMap;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 1st, 2025 16:35+0000
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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
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
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Version;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\VersionConstants;

/**
 * A statement of relationships from one set of concepts to one or more other
 * concepts - either code systems or data elements, or classes in class models.
 */
class FHIRConceptMapTarget extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_CONCEPT_MAP_DOT_TARGET;

    /* class_default.php:47 */
    public const FIELD_CODE_SYSTEM = 'codeSystem';
    public const FIELD_CODE_SYSTEM_EXT = '_codeSystem';
    public const FIELD_CODE = 'code';
    public const FIELD_CODE_EXT = '_code';
    public const FIELD_EQUIVALENCE = 'equivalence';
    public const FIELD_EQUIVALENCE_EXT = '_equivalence';
    public const FIELD_COMMENTS = 'comments';
    public const FIELD_COMMENTS_EXT = '_comments';
    public const FIELD_DEPENDS_ON = 'dependsOn';
    public const FIELD_PRODUCT = 'product';

    /* class_default.php:66 */
    private static array $_validationRules = [
        self::FIELD_ID => [
            Constants::VALIDATE_PATTERN => '/^[A-Za-z0-9\\-\\.]{1,64}$/',
        ],
        self::FIELD_EQUIVALENCE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:91 */
    private array $_valueXMLLocations = [
        self::FIELD_CODE_SYSTEM => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_CODE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_EQUIVALENCE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_COMMENTS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:107 */
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URI that identifies the code system of the target code (if the
     * target is a value set that cross code systems).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUri 
     */
    protected FHIRUri $codeSystem;
    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Identity (code or path) or the element/item that the map refers to.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCode 
     */
    protected FHIRCode $code;
    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The equivalence between the source and target concepts (counting for the
     * dependencies and products). The equivalence is read from target to source (e.g.
     * the target is 'wider' than the source).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCode 
     */
    protected FHIRCode $equivalence;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A description of status/issues in mapping that conveys additional information
     * not represented in the structured data.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $comments;
    /**
     * A statement of relationships from one set of concepts to one or more other
     * concepts - either code systems or data elements, or classes in class models.
     *
     * A set of additional dependencies for this mapping to hold. This mapping is only
     * applicable if the specified element can be resolved, and it has the specified
     * value.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn[] 
     */
    protected array $dependsOn;
    /**
     * A statement of relationships from one set of concepts to one or more other
     * concepts - either code systems or data elements, or classes in class models.
     *
     * A set of additional outcomes from this mapping to other elements. To properly
     * execute this mapping, the specified element must be mapped to some data element
     * or source that is in context. The mapping may still be useful without a place
     * for the additional data elements, but the equivalence cannot be relied on.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn[] 
     */
    protected array $product;

    /* constructor.php:63 */
    /**
     * FHIRConceptMapTarget Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUri $codeSystem
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCode $code
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCode $equivalence
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $comments
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn[] $dependsOn
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn[] $product
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRIdPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRUriPrimitive|FHIRUri $codeSystem = null,
                                null|string|FHIRCodePrimitive|FHIRCode $code = null,
                                null|string|FHIRCodePrimitive|FHIRCode $equivalence = null,
                                null|string|FHIRStringPrimitive|FHIRString $comments = null,
                                null|iterable $dependsOn = null,
                                null|iterable $product = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $codeSystem) {
            $this->setCodeSystem($codeSystem);
        }
        if (null !== $code) {
            $this->setCode($code);
        }
        if (null !== $equivalence) {
            $this->setEquivalence($equivalence);
        }
        if (null !== $comments) {
            $this->setComments($comments);
        }
        if (null !== $dependsOn) {
            $this->setDependsOn(...$dependsOn);
        }
        if (null !== $product) {
            $this->setProduct(...$product);
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
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URI that identifies the code system of the target code (if the
     * target is a value set that cross code systems).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUri
     */
    public function getCodeSystem(): null|FHIRUri
    {
        return $this->codeSystem ?? null;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URI that identifies the code system of the target code (if the
     * target is a value set that cross code systems).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUri $codeSystem
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setCodeSystem(null|string|FHIRUriPrimitive|FHIRUri $codeSystem,
                                  ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $codeSystem) {
            unset($this->codeSystem);
            return $this;
        }
        if (!($codeSystem instanceof FHIRUri)) {
            $codeSystem = new FHIRUri(value: $codeSystem);
        }
        $this->codeSystem = $codeSystem;
        if ($this->_valueXMLLocations[self::FIELD_CODE_SYSTEM] !== $valueXMLLocation) {
            $this->_setCodeSystemValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the codeSystem element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getCodeSystemValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_CODE_SYSTEM];
    }

    /**
     * Set the location the "value" field of the codeSystem element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setCodeSystemValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_CODE_SYSTEM] = $valueXMLLocation;
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Identity (code or path) or the element/item that the map refers to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCode
     */
    public function getCode(): null|FHIRCode
    {
        return $this->code ?? null;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Identity (code or path) or the element/item that the map refers to.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCode $code
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setCode(null|string|FHIRCodePrimitive|FHIRCode $code,
                            ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $code) {
            unset($this->code);
            return $this;
        }
        if (!($code instanceof FHIRCode)) {
            $code = new FHIRCode(value: $code);
        }
        $this->code = $code;
        if ($this->_valueXMLLocations[self::FIELD_CODE] !== $valueXMLLocation) {
            $this->_setCodeValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the code element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getCodeValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_CODE];
    }

    /**
     * Set the location the "value" field of the code element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setCodeValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_CODE] = $valueXMLLocation;
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The equivalence between the source and target concepts (counting for the
     * dependencies and products). The equivalence is read from target to source (e.g.
     * the target is 'wider' than the source).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCode
     */
    public function getEquivalence(): null|FHIRCode
    {
        return $this->equivalence ?? null;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The equivalence between the source and target concepts (counting for the
     * dependencies and products). The equivalence is read from target to source (e.g.
     * the target is 'wider' than the source).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCode $equivalence
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setEquivalence(null|string|FHIRCodePrimitive|FHIRCode $equivalence,
                                   ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $equivalence) {
            unset($this->equivalence);
            return $this;
        }
        if (!($equivalence instanceof FHIRCode)) {
            $equivalence = new FHIRCode(value: $equivalence);
        }
        $this->equivalence = $equivalence;
        if ($this->_valueXMLLocations[self::FIELD_EQUIVALENCE] !== $valueXMLLocation) {
            $this->_setEquivalenceValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the equivalence element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getEquivalenceValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_EQUIVALENCE];
    }

    /**
     * Set the location the "value" field of the equivalence element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setEquivalenceValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_EQUIVALENCE] = $valueXMLLocation;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A description of status/issues in mapping that conveys additional information
     * not represented in the structured data.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString
     */
    public function getComments(): null|FHIRString
    {
        return $this->comments ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A description of status/issues in mapping that conveys additional information
     * not represented in the structured data.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $comments
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setComments(null|string|FHIRStringPrimitive|FHIRString $comments,
                                ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $comments) {
            unset($this->comments);
            return $this;
        }
        if (!($comments instanceof FHIRString)) {
            $comments = new FHIRString(value: $comments);
        }
        $this->comments = $comments;
        if ($this->_valueXMLLocations[self::FIELD_COMMENTS] !== $valueXMLLocation) {
            $this->_setCommentsValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the comments element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getCommentsValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_COMMENTS];
    }

    /**
     * Set the location the "value" field of the comments element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setCommentsValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_COMMENTS] = $valueXMLLocation;
        return $this;
    }

    /**
     * A statement of relationships from one set of concepts to one or more other
     * concepts - either code systems or data elements, or classes in class models.
     *
     * A set of additional dependencies for this mapping to hold. This mapping is only
     * applicable if the specified element can be resolved, and it has the specified
     * value.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn[]
     */
    public function getDependsOn(): array
    {
        return $this->dependsOn ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn>
     */
    public function getDependsOnIterator(): iterable
    {
        if (!isset($this->dependsOn)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->dependsOn);
    }

    /**
     * A statement of relationships from one set of concepts to one or more other
     * concepts - either code systems or data elements, or classes in class models.
     *
     * A set of additional dependencies for this mapping to hold. This mapping is only
     * applicable if the specified element can be resolved, and it has the specified
     * value.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn $dependsOn
     * @return static
     */
    public function addDependsOn(FHIRConceptMapDependsOn $dependsOn): self
    {
        if (!isset($this->dependsOn)) {
            $this->dependsOn = [];
        }
        $this->dependsOn[] = $dependsOn;
        return $this;
    }

    /**
     * A statement of relationships from one set of concepts to one or more other
     * concepts - either code systems or data elements, or classes in class models.
     *
     * A set of additional dependencies for this mapping to hold. This mapping is only
     * applicable if the specified element can be resolved, and it has the specified
     * value.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn ...$dependsOn
     * @return static
     */
    public function setDependsOn(FHIRConceptMapDependsOn ...$dependsOn): self
    {
        if ([] === $dependsOn) {
            unset($this->dependsOn);
            return $this;
        }
        $this->dependsOn = $dependsOn;
        return $this;
    }

    /**
     * A statement of relationships from one set of concepts to one or more other
     * concepts - either code systems or data elements, or classes in class models.
     *
     * A set of additional outcomes from this mapping to other elements. To properly
     * execute this mapping, the specified element must be mapped to some data element
     * or source that is in context. The mapping may still be useful without a place
     * for the additional data elements, but the equivalence cannot be relied on.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn[]
     */
    public function getProduct(): array
    {
        return $this->product ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn>
     */
    public function getProductIterator(): iterable
    {
        if (!isset($this->product)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->product);
    }

    /**
     * A statement of relationships from one set of concepts to one or more other
     * concepts - either code systems or data elements, or classes in class models.
     *
     * A set of additional outcomes from this mapping to other elements. To properly
     * execute this mapping, the specified element must be mapped to some data element
     * or source that is in context. The mapping may still be useful without a place
     * for the additional data elements, but the equivalence cannot be relied on.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn $product
     * @return static
     */
    public function addProduct(FHIRConceptMapDependsOn $product): self
    {
        if (!isset($this->product)) {
            $this->product = [];
        }
        $this->product[] = $product;
        return $this;
    }

    /**
     * A statement of relationships from one set of concepts to one or more other
     * concepts - either code systems or data elements, or classes in class models.
     *
     * A set of additional outcomes from this mapping to other elements. To properly
     * execute this mapping, the specified element must be mapped to some data element
     * or source that is in context. The mapping may still be useful without a place
     * for the additional data elements, but the equivalence cannot be relied on.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn ...$product
     * @return static
     */
    public function setProduct(FHIRConceptMapDependsOn ...$product): self
    {
        if ([] === $product) {
            unset($this->product);
            return $this;
        }
        $this->product = $product;
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
        if (null !== ($v = $this->getEquivalence())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EQUIVALENCE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_CODE_SYSTEM])) {
            $v = $this->getCodeSystem();
            foreach($validationRules[self::FIELD_CODE_SYSTEM] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CODE_SYSTEM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CODE_SYSTEM])) {
                        $errs[self::FIELD_CODE_SYSTEM] = [];
                    }
                    $errs[self::FIELD_CODE_SYSTEM][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_EQUIVALENCE])) {
            $v = $this->getEquivalence();
            foreach($validationRules[self::FIELD_EQUIVALENCE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EQUIVALENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EQUIVALENCE])) {
                        $errs[self::FIELD_EQUIVALENCE] = [];
                    }
                    $errs[self::FIELD_EQUIVALENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COMMENTS])) {
            $v = $this->getComments();
            foreach($validationRules[self::FIELD_COMMENTS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_COMMENTS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COMMENTS])) {
                        $errs[self::FIELD_COMMENTS] = [];
                    }
                    $errs[self::FIELD_COMMENTS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEPENDS_ON])) {
            $v = $this->getDependsOn();
            foreach($validationRules[self::FIELD_DEPENDS_ON] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DEPENDS_ON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEPENDS_ON])) {
                        $errs[self::FIELD_DEPENDS_ON] = [];
                    }
                    $errs[self::FIELD_DEPENDS_ON][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRODUCT])) {
            $v = $this->getProduct();
            foreach($validationRules[self::FIELD_PRODUCT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PRODUCT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRODUCT])) {
                        $errs[self::FIELD_PRODUCT] = [];
                    }
                    $errs[self::FIELD_PRODUCT][$rule] = $err;
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

    /* class_default.php:212 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapTarget $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapTarget
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRConceptMapTarget)) {
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
                $va = $ce->attributes()[FHIRIdPrimitive::FIELD_VALUE] ?? null;
                if (null !== $va) {
                    $type->setId((string)$va, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CODE_SYSTEM === $cen) {
                $type->setCodeSystem(FHIRUri::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CODE === $cen) {
                $type->setCode(FHIRCode::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EQUIVALENCE === $cen) {
                $type->setEquivalence(FHIRCode::xmlUnserialize($ce, $config));
            } else if (self::FIELD_COMMENTS === $cen) {
                $type->setComments(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEPENDS_ON === $cen) {
                $type->addDependsOn(FHIRConceptMapDependsOn::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PRODUCT === $cen) {
                $type->addProduct(FHIRConceptMapDependsOn::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_CODE_SYSTEM])) {
            if (isset($type->codeSystem)) {
                $type->codeSystem->setValue((string)$attributes[self::FIELD_CODE_SYSTEM]);
                $type->_setCodeSystemValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setCodeSystem((string)$attributes[self::FIELD_CODE_SYSTEM], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_CODE])) {
            if (isset($type->code)) {
                $type->code->setValue((string)$attributes[self::FIELD_CODE]);
                $type->_setCodeValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setCode((string)$attributes[self::FIELD_CODE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_EQUIVALENCE])) {
            if (isset($type->equivalence)) {
                $type->equivalence->setValue((string)$attributes[self::FIELD_EQUIVALENCE]);
                $type->_setEquivalenceValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setEquivalence((string)$attributes[self::FIELD_EQUIVALENCE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_COMMENTS])) {
            if (isset($type->comments)) {
                $type->comments->setValue((string)$attributes[self::FIELD_COMMENTS]);
                $type->_setCommentsValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setComments((string)$attributes[self::FIELD_COMMENTS], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->codeSystem) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_CODE_SYSTEM]) {
            $xw->writeAttribute(self::FIELD_CODE_SYSTEM, $this->codeSystem->_getFormattedValue());
        }
        if (isset($this->code) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_CODE]) {
            $xw->writeAttribute(self::FIELD_CODE, $this->code->_getFormattedValue());
        }
        if (isset($this->equivalence) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_EQUIVALENCE]) {
            $xw->writeAttribute(self::FIELD_EQUIVALENCE, $this->equivalence->_getFormattedValue());
        }
        if (isset($this->comments) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_COMMENTS]) {
            $xw->writeAttribute(self::FIELD_COMMENTS, $this->comments->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->codeSystem)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_CODE_SYSTEM]
                || $this->codeSystem->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_CODE_SYSTEM);
            $this->codeSystem->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_CODE_SYSTEM]);
            $xw->endElement();
        }
        if (isset($this->code)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_CODE]
                || $this->code->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_CODE);
            $this->code->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_CODE]);
            $xw->endElement();
        }
        if (isset($this->equivalence)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_EQUIVALENCE]
                || $this->equivalence->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_EQUIVALENCE);
            $this->equivalence->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_EQUIVALENCE]);
            $xw->endElement();
        }
        if (isset($this->comments)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_COMMENTS]
                || $this->comments->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_COMMENTS);
            $this->comments->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_COMMENTS]);
            $xw->endElement();
        }
        if (isset($this->dependsOn)) {
            foreach ($this->dependsOn as $v) {
                $xw->startElement(self::FIELD_DEPENDS_ON);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->product)) {
            foreach ($this->product as $v) {
                $xw->startElement(self::FIELD_PRODUCT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
    }

    /**
     * @param array $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapTarget $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapTarget
     * @throws \Exception
     */
    public static function jsonUnserialize(array $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRConceptMapTarget)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json[self::FIELD_CODE_SYSTEM])
            || isset($json[self::FIELD_CODE_SYSTEM_EXT])
            || array_key_exists(self::FIELD_CODE_SYSTEM, $json)
            || array_key_exists(self::FIELD_CODE_SYSTEM_EXT, $json)) {
            $value = $json[self::FIELD_CODE_SYSTEM] ?? null;
            $type->setCodeSystem(FHIRUri::jsonUnserialize(
                (is_array($value) ? $value : [FHIRUri::FIELD_VALUE => $value]) + ($json[self::FIELD_CODE_SYSTEM_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_CODE])
            || isset($json[self::FIELD_CODE_EXT])
            || array_key_exists(self::FIELD_CODE, $json)
            || array_key_exists(self::FIELD_CODE_EXT, $json)) {
            $value = $json[self::FIELD_CODE] ?? null;
            $type->setCode(FHIRCode::jsonUnserialize(
                (is_array($value) ? $value : [FHIRCode::FIELD_VALUE => $value]) + ($json[self::FIELD_CODE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_EQUIVALENCE])
            || isset($json[self::FIELD_EQUIVALENCE_EXT])
            || array_key_exists(self::FIELD_EQUIVALENCE, $json)
            || array_key_exists(self::FIELD_EQUIVALENCE_EXT, $json)) {
            $value = $json[self::FIELD_EQUIVALENCE] ?? null;
            $type->setEquivalence(FHIRCode::jsonUnserialize(
                (is_array($value) ? $value : [FHIRCode::FIELD_VALUE => $value]) + ($json[self::FIELD_EQUIVALENCE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_COMMENTS])
            || isset($json[self::FIELD_COMMENTS_EXT])
            || array_key_exists(self::FIELD_COMMENTS, $json)
            || array_key_exists(self::FIELD_COMMENTS_EXT, $json)) {
            $value = $json[self::FIELD_COMMENTS] ?? null;
            $type->setComments(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_COMMENTS_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_DEPENDS_ON]) || array_key_exists(self::FIELD_DEPENDS_ON, $json)) {
            $vs = $json[self::FIELD_DEPENDS_ON];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addDependsOn(FHIRConceptMapDependsOn::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_PRODUCT]) || array_key_exists(self::FIELD_PRODUCT, $json)) {
            $vs = $json[self::FIELD_PRODUCT];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addProduct(FHIRConceptMapDependsOn::jsonUnserialize($v, $config));
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
        if (isset($this->codeSystem)) {
            if (null !== ($val = $this->codeSystem->getValue())) {
                $out->codeSystem = $val;
            }
            if ($this->codeSystem->_nonValueFieldDefined()) {
                $ext = $this->codeSystem->jsonSerialize();
                unset($ext->value);
                $out->_codeSystem = $ext;
            }
        }
        if (isset($this->code)) {
            if (null !== ($val = $this->code->getValue())) {
                $out->code = $val;
            }
            if ($this->code->_nonValueFieldDefined()) {
                $ext = $this->code->jsonSerialize();
                unset($ext->value);
                $out->_code = $ext;
            }
        }
        if (isset($this->equivalence)) {
            if (null !== ($val = $this->equivalence->getValue())) {
                $out->equivalence = $val;
            }
            if ($this->equivalence->_nonValueFieldDefined()) {
                $ext = $this->equivalence->jsonSerialize();
                unset($ext->value);
                $out->_equivalence = $ext;
            }
        }
        if (isset($this->comments)) {
            if (null !== ($val = $this->comments->getValue())) {
                $out->comments = $val;
            }
            if ($this->comments->_nonValueFieldDefined()) {
                $ext = $this->comments->jsonSerialize();
                unset($ext->value);
                $out->_comments = $ext;
            }
        }
        if (isset($this->dependsOn) && [] !== $this->dependsOn) {
            $out->dependsOn = $this->dependsOn;
        }
        if (isset($this->product) && [] !== $this->product) {
            $out->product = $this->product;
        }
        return $out;
    }
}