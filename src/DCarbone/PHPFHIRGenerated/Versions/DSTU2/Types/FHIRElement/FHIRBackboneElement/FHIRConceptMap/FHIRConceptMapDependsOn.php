<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRConceptMap;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 3rd, 2025 17:37+0000
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
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\VersionConstants;

/**
 * A statement of relationships from one set of concepts to one or more other
 * concepts - either code systems or data elements, or classes in class models.
 */
class FHIRConceptMapDependsOn extends FHIRBackboneElement
{
    use TypeValidationsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_CONCEPT_MAP_DOT_DEPENDS_ON;

    /* class_default.php:47 */
    public const FIELD_ELEMENT = 'element';
    public const FIELD_ELEMENT_EXT = '_element';
    public const FIELD_CODE_SYSTEM = 'codeSystem';
    public const FIELD_CODE_SYSTEM_EXT = '_codeSystem';
    public const FIELD_CODE = 'code';
    public const FIELD_CODE_EXT = '_code';

    /* class_default.php:66 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_ELEMENT => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_CODE_SYSTEM => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_CODE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:95 */
    private array $_valueXMLLocations = [
        self::FIELD_ELEMENT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_CODE_SYSTEM => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_CODE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:111 */
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A reference to a specific concept that holds a coded value. This can be an
     * element in a FHIR resource, or a specific reference to a data element in a
     * different specification (e.g. HL7 v2) or a general reference to a kind of data
     * field, or a reference to a value set with an appropriately narrow definition.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUri 
     */
    protected FHIRUri $element;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URI that identifies the code system of the dependency code (if the
     * source/dependency is a value set that crosses code systems).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUri 
     */
    protected FHIRUri $codeSystem;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identity (code or path) or the element/item/ValueSet that the map depends on /
     * refers to.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $code;

    /* constructor.php:62 */
    /**
     * FHIRConceptMapDependsOn Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUri $element
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUri $codeSystem
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $code
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRIdPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRUriPrimitive|FHIRUri $element = null,
                                null|string|FHIRUriPrimitive|FHIRUri $codeSystem = null,
                                null|string|FHIRStringPrimitive|FHIRString $code = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $element) {
            $this->setElement($element);
        }
        if (null !== $codeSystem) {
            $this->setCodeSystem($codeSystem);
        }
        if (null !== $code) {
            $this->setCode($code);
        }
    }

    /* class_default.php:143 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:169 */
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A reference to a specific concept that holds a coded value. This can be an
     * element in a FHIR resource, or a specific reference to a data element in a
     * different specification (e.g. HL7 v2) or a general reference to a kind of data
     * field, or a reference to a value set with an appropriately narrow definition.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUri
     */
    public function getElement(): null|FHIRUri
    {
        return $this->element ?? null;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A reference to a specific concept that holds a coded value. This can be an
     * element in a FHIR resource, or a specific reference to a data element in a
     * different specification (e.g. HL7 v2) or a general reference to a kind of data
     * field, or a reference to a value set with an appropriately narrow definition.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUri $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setElement(null|string|FHIRUriPrimitive|FHIRUri $element,
                               ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $element) {
            unset($this->element);
            return $this;
        }
        if (!($element instanceof FHIRUri)) {
            $element = new FHIRUri(value: $element);
        }
        $this->element = $element;
        if ($this->_valueXMLLocations[self::FIELD_ELEMENT] !== $valueXMLLocation) {
            $this->_setElementValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the element element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getElementValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_ELEMENT];
    }

    /**
     * Set the location the "value" field of the element element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setElementValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_ELEMENT] = $valueXMLLocation;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URI that identifies the code system of the dependency code (if the
     * source/dependency is a value set that crosses code systems).
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
     * An absolute URI that identifies the code system of the dependency code (if the
     * source/dependency is a value set that crosses code systems).
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
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identity (code or path) or the element/item/ValueSet that the map depends on /
     * refers to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString
     */
    public function getCode(): null|FHIRString
    {
        return $this->code ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identity (code or path) or the element/item/ValueSet that the map depends on /
     * refers to.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $code
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setCode(null|string|FHIRStringPrimitive|FHIRString $code,
                            ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $code) {
            unset($this->code);
            return $this;
        }
        if (!($code instanceof FHIRString)) {
            $code = new FHIRString(value: $code);
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

    /* class_default.php:208 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRConceptMapDependsOn)) {
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
            } else if (self::FIELD_ELEMENT === $cen) {
                $type->setElement(FHIRUri::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CODE_SYSTEM === $cen) {
                $type->setCodeSystem(FHIRUri::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CODE === $cen) {
                $type->setCode(FHIRString::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_ELEMENT])) {
            if (isset($type->element)) {
                $type->element->setValue((string)$attributes[self::FIELD_ELEMENT]);
                $type->_setElementValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setElement((string)$attributes[self::FIELD_ELEMENT], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
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
        return $type;
    }

    /**
     * @param \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param \DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     */
    public function xmlSerialize(XMLWriter $xw,
                                 SerializeConfig $config): void
    {
        if (isset($this->element) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ELEMENT]) {
            $xw->writeAttribute(self::FIELD_ELEMENT, $this->element->_getFormattedValue());
        }
        if (isset($this->codeSystem) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_CODE_SYSTEM]) {
            $xw->writeAttribute(self::FIELD_CODE_SYSTEM, $this->codeSystem->_getFormattedValue());
        }
        if (isset($this->code) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_CODE]) {
            $xw->writeAttribute(self::FIELD_CODE, $this->code->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->element)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ELEMENT]
                || $this->element->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ELEMENT);
            $this->element->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ELEMENT]);
            $xw->endElement();
        }
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
    }

    /**
     * @param array $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn
     * @throws \Exception
     */
    public static function jsonUnserialize(array $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRConceptMapDependsOn)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json[self::FIELD_ELEMENT])
            || isset($json[self::FIELD_ELEMENT_EXT])
            || array_key_exists(self::FIELD_ELEMENT, $json)
            || array_key_exists(self::FIELD_ELEMENT_EXT, $json)) {
            $value = $json[self::FIELD_ELEMENT] ?? null;
            $type->setElement(FHIRUri::jsonUnserialize(
                (is_array($value) ? $value : [FHIRUri::FIELD_VALUE => $value]) + ($json[self::FIELD_ELEMENT_EXT] ?? []),
                $config,
            ));
        }
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
            $type->setCode(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_CODE_EXT] ?? []),
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
        if (isset($this->element)) {
            if (null !== ($val = $this->element->getValue())) {
                $out->element = $val;
            }
            if ($this->element->_nonValueFieldDefined()) {
                $ext = $this->element->jsonSerialize();
                unset($ext->value);
                $out->_element = $ext;
            }
        }
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
        return $out;
    }
}