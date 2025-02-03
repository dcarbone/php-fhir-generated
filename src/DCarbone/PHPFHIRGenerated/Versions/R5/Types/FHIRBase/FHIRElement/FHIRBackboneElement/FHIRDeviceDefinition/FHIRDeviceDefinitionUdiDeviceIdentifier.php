<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition;

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
 *  * #%L
 *  * org.hl7.fhir.r5
 *  * %%
 *  * Copyright (C) 2014 - 2019 Health Level 7
 *  * %%
 *  * Licensed under the Apache License, Version 2.0 (the "License");
 *  * you may not use this file except in compliance with the License.
 *  * You may obtain a copy of the License at
 *  *
 *  *      http://www.apache.org/licenses/LICENSE-2.0
 *  *
 *  * Unless required by applicable law or agreed to in writing, software
 *  * distributed under the License is distributed on an "AS IS" BASIS,
 *  * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  * See the License for the specific language governing permissions and
 *  * limitations under the License.
 *  * #L%
 *  
 * 
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
 *   Generated on Sun, Mar 26, 2023 15:21+1100 for FHIR v5.0.0
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
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * The characteristics, operational status and capabilities of a medical-related
 * component of a medical device.
 */
class FHIRDeviceDefinitionUdiDeviceIdentifier extends FHIRBackboneElement
{
    use TypeValidationsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_DEVICE_DEFINITION_DOT_UDI_DEVICE_IDENTIFIER;

    /* class_default.php:47 */
    public const FIELD_DEVICE_IDENTIFIER = 'deviceIdentifier';
    public const FIELD_DEVICE_IDENTIFIER_EXT = '_deviceIdentifier';
    public const FIELD_ISSUER = 'issuer';
    public const FIELD_ISSUER_EXT = '_issuer';
    public const FIELD_JURISDICTION = 'jurisdiction';
    public const FIELD_JURISDICTION_EXT = '_jurisdiction';
    public const FIELD_MARKET_DISTRIBUTION = 'marketDistribution';

    /* class_default.php:66 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_DEVICE_IDENTIFIER => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_ISSUER => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_JURISDICTION => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:95 */
    private array $_valueXMLLocations = [
        self::FIELD_DEVICE_IDENTIFIER => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ISSUER => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_JURISDICTION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:111 */
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identifier that is to be associated with every Device that references this
     * DeviceDefintiion for the issuer and jurisdiction provided in the
     * DeviceDefinition.udiDeviceIdentifier.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $deviceIdentifier;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The organization that assigns the identifier algorithm.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri 
     */
    protected FHIRUri $issuer;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The jurisdiction to which the deviceIdentifier applies.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri 
     */
    protected FHIRUri $jurisdiction;
    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     *
     * Indicates where and when the device is available on the market.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionMarketDistribution[] 
     */
    protected array $marketDistribution;

    /* constructor.php:62 */
    /**
     * FHIRDeviceDefinitionUdiDeviceIdentifier Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $deviceIdentifier
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri $issuer
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri $jurisdiction
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionMarketDistribution[] $marketDistribution
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRStringPrimitive|FHIRString $deviceIdentifier = null,
                                null|string|FHIRUriPrimitive|FHIRUri $issuer = null,
                                null|string|FHIRUriPrimitive|FHIRUri $jurisdiction = null,
                                null|iterable $marketDistribution = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $deviceIdentifier) {
            $this->setDeviceIdentifier($deviceIdentifier);
        }
        if (null !== $issuer) {
            $this->setIssuer($issuer);
        }
        if (null !== $jurisdiction) {
            $this->setJurisdiction($jurisdiction);
        }
        if (null !== $marketDistribution) {
            $this->setMarketDistribution(...$marketDistribution);
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
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identifier that is to be associated with every Device that references this
     * DeviceDefintiion for the issuer and jurisdiction provided in the
     * DeviceDefinition.udiDeviceIdentifier.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getDeviceIdentifier(): null|FHIRString
    {
        return $this->deviceIdentifier ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identifier that is to be associated with every Device that references this
     * DeviceDefintiion for the issuer and jurisdiction provided in the
     * DeviceDefinition.udiDeviceIdentifier.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $deviceIdentifier
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDeviceIdentifier(null|string|FHIRStringPrimitive|FHIRString $deviceIdentifier,
                                        ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $deviceIdentifier) {
            unset($this->deviceIdentifier);
            return $this;
        }
        if (!($deviceIdentifier instanceof FHIRString)) {
            $deviceIdentifier = new FHIRString(value: $deviceIdentifier);
        }
        $this->deviceIdentifier = $deviceIdentifier;
        if ($this->_valueXMLLocations[self::FIELD_DEVICE_IDENTIFIER] !== $valueXMLLocation) {
            $this->_setDeviceIdentifierValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the deviceIdentifier element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getDeviceIdentifierValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_DEVICE_IDENTIFIER];
    }

    /**
     * Set the location the "value" field of the deviceIdentifier element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setDeviceIdentifierValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_DEVICE_IDENTIFIER] = $valueXMLLocation;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The organization that assigns the identifier algorithm.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri
     */
    public function getIssuer(): null|FHIRUri
    {
        return $this->issuer ?? null;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The organization that assigns the identifier algorithm.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri $issuer
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setIssuer(null|string|FHIRUriPrimitive|FHIRUri $issuer,
                              ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $issuer) {
            unset($this->issuer);
            return $this;
        }
        if (!($issuer instanceof FHIRUri)) {
            $issuer = new FHIRUri(value: $issuer);
        }
        $this->issuer = $issuer;
        if ($this->_valueXMLLocations[self::FIELD_ISSUER] !== $valueXMLLocation) {
            $this->_setIssuerValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the issuer element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getIssuerValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_ISSUER];
    }

    /**
     * Set the location the "value" field of the issuer element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setIssuerValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_ISSUER] = $valueXMLLocation;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The jurisdiction to which the deviceIdentifier applies.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri
     */
    public function getJurisdiction(): null|FHIRUri
    {
        return $this->jurisdiction ?? null;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The jurisdiction to which the deviceIdentifier applies.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri $jurisdiction
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setJurisdiction(null|string|FHIRUriPrimitive|FHIRUri $jurisdiction,
                                    ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $jurisdiction) {
            unset($this->jurisdiction);
            return $this;
        }
        if (!($jurisdiction instanceof FHIRUri)) {
            $jurisdiction = new FHIRUri(value: $jurisdiction);
        }
        $this->jurisdiction = $jurisdiction;
        if ($this->_valueXMLLocations[self::FIELD_JURISDICTION] !== $valueXMLLocation) {
            $this->_setJurisdictionValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the jurisdiction element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getJurisdictionValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_JURISDICTION];
    }

    /**
     * Set the location the "value" field of the jurisdiction element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setJurisdictionValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_JURISDICTION] = $valueXMLLocation;
        return $this;
    }

    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     *
     * Indicates where and when the device is available on the market.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionMarketDistribution[]
     */
    public function getMarketDistribution(): array
    {
        return $this->marketDistribution ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionMarketDistribution>
     */
    public function getMarketDistributionIterator(): iterable
    {
        if (!isset($this->marketDistribution)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->marketDistribution);
    }

    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     *
     * Indicates where and when the device is available on the market.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionMarketDistribution $marketDistribution
     * @return static
     */
    public function addMarketDistribution(FHIRDeviceDefinitionMarketDistribution $marketDistribution): self
    {
        if (!isset($this->marketDistribution)) {
            $this->marketDistribution = [];
        }
        $this->marketDistribution[] = $marketDistribution;
        return $this;
    }

    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     *
     * Indicates where and when the device is available on the market.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionMarketDistribution ...$marketDistribution
     * @return static
     */
    public function setMarketDistribution(FHIRDeviceDefinitionMarketDistribution ...$marketDistribution): self
    {
        if ([] === $marketDistribution) {
            unset($this->marketDistribution);
            return $this;
        }
        $this->marketDistribution = $marketDistribution;
        return $this;
    }

    /* class_default.php:208 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionUdiDeviceIdentifier $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionUdiDeviceIdentifier
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRDeviceDefinitionUdiDeviceIdentifier)) {
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
            } else if (self::FIELD_DEVICE_IDENTIFIER === $cen) {
                $type->setDeviceIdentifier(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ISSUER === $cen) {
                $type->setIssuer(FHIRUri::xmlUnserialize($ce, $config));
            } else if (self::FIELD_JURISDICTION === $cen) {
                $type->setJurisdiction(FHIRUri::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MARKET_DISTRIBUTION === $cen) {
                $type->addMarketDistribution(FHIRDeviceDefinitionMarketDistribution::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DEVICE_IDENTIFIER])) {
            if (isset($type->deviceIdentifier)) {
                $type->deviceIdentifier->setValue((string)$attributes[self::FIELD_DEVICE_IDENTIFIER]);
                $type->_setDeviceIdentifierValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDeviceIdentifier((string)$attributes[self::FIELD_DEVICE_IDENTIFIER], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ISSUER])) {
            if (isset($type->issuer)) {
                $type->issuer->setValue((string)$attributes[self::FIELD_ISSUER]);
                $type->_setIssuerValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setIssuer((string)$attributes[self::FIELD_ISSUER], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_JURISDICTION])) {
            if (isset($type->jurisdiction)) {
                $type->jurisdiction->setValue((string)$attributes[self::FIELD_JURISDICTION]);
                $type->_setJurisdictionValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setJurisdiction((string)$attributes[self::FIELD_JURISDICTION], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->deviceIdentifier) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DEVICE_IDENTIFIER]) {
            $xw->writeAttribute(self::FIELD_DEVICE_IDENTIFIER, $this->deviceIdentifier->_getFormattedValue());
        }
        if (isset($this->issuer) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ISSUER]) {
            $xw->writeAttribute(self::FIELD_ISSUER, $this->issuer->_getFormattedValue());
        }
        if (isset($this->jurisdiction) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_JURISDICTION]) {
            $xw->writeAttribute(self::FIELD_JURISDICTION, $this->jurisdiction->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->deviceIdentifier)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DEVICE_IDENTIFIER]
                || $this->deviceIdentifier->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DEVICE_IDENTIFIER);
            $this->deviceIdentifier->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DEVICE_IDENTIFIER]);
            $xw->endElement();
        }
        if (isset($this->issuer)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ISSUER]
                || $this->issuer->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ISSUER);
            $this->issuer->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ISSUER]);
            $xw->endElement();
        }
        if (isset($this->jurisdiction)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_JURISDICTION]
                || $this->jurisdiction->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_JURISDICTION);
            $this->jurisdiction->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_JURISDICTION]);
            $xw->endElement();
        }
        if (isset($this->marketDistribution)) {
            foreach ($this->marketDistribution as $v) {
                $xw->startElement(self::FIELD_MARKET_DISTRIBUTION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
    }

    /**
     * @param array $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionUdiDeviceIdentifier $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionUdiDeviceIdentifier
     * @throws \Exception
     */
    public static function jsonUnserialize(array $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRDeviceDefinitionUdiDeviceIdentifier)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json[self::FIELD_DEVICE_IDENTIFIER])
            || isset($json[self::FIELD_DEVICE_IDENTIFIER_EXT])
            || array_key_exists(self::FIELD_DEVICE_IDENTIFIER, $json)
            || array_key_exists(self::FIELD_DEVICE_IDENTIFIER_EXT, $json)) {
            $value = $json[self::FIELD_DEVICE_IDENTIFIER] ?? null;
            $type->setDeviceIdentifier(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_DEVICE_IDENTIFIER_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_ISSUER])
            || isset($json[self::FIELD_ISSUER_EXT])
            || array_key_exists(self::FIELD_ISSUER, $json)
            || array_key_exists(self::FIELD_ISSUER_EXT, $json)) {
            $value = $json[self::FIELD_ISSUER] ?? null;
            $type->setIssuer(FHIRUri::jsonUnserialize(
                (is_array($value) ? $value : [FHIRUri::FIELD_VALUE => $value]) + ($json[self::FIELD_ISSUER_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_JURISDICTION])
            || isset($json[self::FIELD_JURISDICTION_EXT])
            || array_key_exists(self::FIELD_JURISDICTION, $json)
            || array_key_exists(self::FIELD_JURISDICTION_EXT, $json)) {
            $value = $json[self::FIELD_JURISDICTION] ?? null;
            $type->setJurisdiction(FHIRUri::jsonUnserialize(
                (is_array($value) ? $value : [FHIRUri::FIELD_VALUE => $value]) + ($json[self::FIELD_JURISDICTION_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_MARKET_DISTRIBUTION]) || array_key_exists(self::FIELD_MARKET_DISTRIBUTION, $json)) {
            $vs = $json[self::FIELD_MARKET_DISTRIBUTION];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addMarketDistribution(FHIRDeviceDefinitionMarketDistribution::jsonUnserialize($v, $config));
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
        if (isset($this->deviceIdentifier)) {
            if (null !== ($val = $this->deviceIdentifier->getValue())) {
                $out->deviceIdentifier = $val;
            }
            if ($this->deviceIdentifier->_nonValueFieldDefined()) {
                $ext = $this->deviceIdentifier->jsonSerialize();
                unset($ext->value);
                $out->_deviceIdentifier = $ext;
            }
        }
        if (isset($this->issuer)) {
            if (null !== ($val = $this->issuer->getValue())) {
                $out->issuer = $val;
            }
            if ($this->issuer->_nonValueFieldDefined()) {
                $ext = $this->issuer->jsonSerialize();
                unset($ext->value);
                $out->_issuer = $ext;
            }
        }
        if (isset($this->jurisdiction)) {
            if (null !== ($val = $this->jurisdiction->getValue())) {
                $out->jurisdiction = $val;
            }
            if ($this->jurisdiction->_nonValueFieldDefined()) {
                $ext = $this->jurisdiction->jsonSerialize();
                unset($ext->value);
                $out->_jurisdiction = $ext;
            }
        }
        if (isset($this->marketDistribution) && [] !== $this->marketDistribution) {
            $out->marketDistribution = $this->marketDistribution;
        }
        return $out;
    }
}