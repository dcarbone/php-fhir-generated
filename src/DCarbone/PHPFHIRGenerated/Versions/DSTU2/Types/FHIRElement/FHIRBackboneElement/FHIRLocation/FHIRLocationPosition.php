<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRLocation;

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
use DCarbone\PHPFHIRGenerated\Encoding\XMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDecimalPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Version;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\VersionConstants;

/**
 * Details and position information for a physical place where services are
 * provided and resources and participants may be stored, found, contained or
 * accommodated.
 */
class FHIRLocationPosition extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_LOCATION_DOT_POSITION;


    public const FIELD_LONGITUDE = 'longitude';
    public const FIELD_LONGITUDE_EXT = '_longitude';
    public const FIELD_LATITUDE = 'latitude';
    public const FIELD_LATITUDE_EXT = '_latitude';
    public const FIELD_ALTITUDE = 'altitude';
    public const FIELD_ALTITUDE_EXT = '_altitude';

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Longitude. The value domain and the interpretation are the same as for the text
     * of the longitude element in KML (see notes below).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal 
     */
    protected FHIRDecimal $longitude;
    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Latitude. The value domain and the interpretation are the same as for the text
     * of the latitude element in KML (see notes below).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal 
     */
    protected FHIRDecimal $latitude;
    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Altitude. The value domain and the interpretation are the same as for the text
     * of the altitude element in KML (see notes below).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal 
     */
    protected FHIRDecimal $altitude;

    /** Default validation map for fields in type Location.Position */
    private const _DEFAULT_VALIDATION_RULES = [
        self::FIELD_ID => [
            Constants::VALIDATE_PATTERN => '/^[A-Za-z0-9\\-\\.]{1,64}$/',
        ],
        self::FIELD_LONGITUDE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_LATITUDE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRLocationPosition Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal $longitude
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal $latitude
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal $altitude
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRIdPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $longitude = null,
                                null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $latitude = null,
                                null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $altitude = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $longitude) {
            $this->setLongitude($longitude);
        }
        if (null !== $latitude) {
            $this->setLatitude($latitude);
        }
        if (null !== $altitude) {
            $this->setAltitude($altitude);
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
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Longitude. The value domain and the interpretation are the same as for the text
     * of the longitude element in KML (see notes below).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal
     */
    public function getLongitude(): null|FHIRDecimal
    {
        return $this->longitude ?? null;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Longitude. The value domain and the interpretation are the same as for the text
     * of the longitude element in KML (see notes below).
     *
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal $longitude
     * @return static
     */
    public function setLongitude(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $longitude): self
    {
        if (null === $longitude) {
            unset($this->longitude);
            return $this;
        }
        if (!($longitude instanceof FHIRDecimal)) {
            $longitude = new FHIRDecimal(value: $longitude);
        }
        $this->longitude = $longitude;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Latitude. The value domain and the interpretation are the same as for the text
     * of the latitude element in KML (see notes below).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal
     */
    public function getLatitude(): null|FHIRDecimal
    {
        return $this->latitude ?? null;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Latitude. The value domain and the interpretation are the same as for the text
     * of the latitude element in KML (see notes below).
     *
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal $latitude
     * @return static
     */
    public function setLatitude(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $latitude): self
    {
        if (null === $latitude) {
            unset($this->latitude);
            return $this;
        }
        if (!($latitude instanceof FHIRDecimal)) {
            $latitude = new FHIRDecimal(value: $latitude);
        }
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Altitude. The value domain and the interpretation are the same as for the text
     * of the altitude element in KML (see notes below).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal
     */
    public function getAltitude(): null|FHIRDecimal
    {
        return $this->altitude ?? null;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Altitude. The value domain and the interpretation are the same as for the text
     * of the altitude element in KML (see notes below).
     *
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal $altitude
     * @return static
     */
    public function setAltitude(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $altitude): self
    {
        if (null === $altitude) {
            unset($this->altitude);
            return $this;
        }
        if (!($altitude instanceof FHIRDecimal)) {
            $altitude = new FHIRDecimal(value: $altitude);
        }
        $this->altitude = $altitude;
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
        if (null !== ($v = $this->getLongitude())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LONGITUDE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getLatitude())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LATITUDE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_LONGITUDE])) {
            $v = $this->getLongitude();
            foreach($validationRules[self::FIELD_LONGITUDE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_LONGITUDE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LONGITUDE])) {
                        $errs[self::FIELD_LONGITUDE] = [];
                    }
                    $errs[self::FIELD_LONGITUDE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LATITUDE])) {
            $v = $this->getLatitude();
            foreach($validationRules[self::FIELD_LATITUDE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_LATITUDE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LATITUDE])) {
                        $errs[self::FIELD_LATITUDE] = [];
                    }
                    $errs[self::FIELD_LATITUDE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ALTITUDE])) {
            $v = $this->getAltitude();
            foreach($validationRules[self::FIELD_ALTITUDE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ALTITUDE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ALTITUDE])) {
                        $errs[self::FIELD_ALTITUDE] = [];
                    }
                    $errs[self::FIELD_ALTITUDE][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationPosition $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationPosition
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRLocationPosition)) {
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
                $v = new FHIRIdPrimitive(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setId(FHIRIdPrimitive::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_LONGITUDE === $childName) {
                $v = new FHIRDecimal(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setLongitude(FHIRDecimal::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_LATITUDE === $childName) {
                $v = new FHIRDecimal(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setLatitude(FHIRDecimal::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ALTITUDE === $childName) {
                $v = new FHIRDecimal(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setAltitude(FHIRDecimal::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRIdPrimitive(
                    value: (string)$attributes[self::FIELD_ID],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_LONGITUDE])) {
            $pt = $type->getLongitude();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_LONGITUDE]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setLongitude(new FHIRDecimal(
                    value: (string)$attributes[self::FIELD_LONGITUDE],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_LATITUDE])) {
            $pt = $type->getLatitude();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_LATITUDE]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setLatitude(new FHIRDecimal(
                    value: (string)$attributes[self::FIELD_LATITUDE],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_ALTITUDE])) {
            $pt = $type->getAltitude();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ALTITUDE]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setAltitude(new FHIRDecimal(
                    value: (string)$attributes[self::FIELD_ALTITUDE],
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
            $xw->openRootNode('LocationPosition', $this->_getSourceXMLNS());
        }
        if (isset($this->longitude) && $this->longitude->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_LONGITUDE, $this->longitude->getValue()?->getFormattedValue());
        }
        if (isset($this->latitude) && $this->latitude->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_LATITUDE, $this->latitude->getValue()?->getFormattedValue());
        }
        if (isset($this->altitude) && $this->altitude->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_ALTITUDE, $this->altitude->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->longitude) && $this->longitude->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_LONGITUDE);
            $this->longitude->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->latitude) && $this->latitude->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_LATITUDE);
            $this->latitude->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->altitude) && $this->altitude->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_ALTITUDE);
            $this->altitude->xmlSerialize($xw, $config);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationPosition $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationPosition
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRLocationPosition)) {
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
        if (isset($json[self::FIELD_LONGITUDE]) || isset($json[self::FIELD_LONGITUDE_EXT]) || array_key_exists(self::FIELD_LONGITUDE, $json) || array_key_exists(self::FIELD_LONGITUDE_EXT, $json)) {
            $value = $json[self::FIELD_LONGITUDE] ?? null;
            $ext = (isset($json[self::FIELD_LONGITUDE_EXT]) && is_array($json[self::FIELD_LONGITUDE_EXT])) ? $json[self::FIELD_LONGITUDE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $type->setLongitude($value);
                } else if (is_array($value)) {
                    $type->setLongitude(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $type->setLongitude(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setLongitude(new FHIRDecimal($ext));
            } else {
                $type->setLongitude(new FHIRDecimal(null));
            }
        }
        if (isset($json[self::FIELD_LATITUDE]) || isset($json[self::FIELD_LATITUDE_EXT]) || array_key_exists(self::FIELD_LATITUDE, $json) || array_key_exists(self::FIELD_LATITUDE_EXT, $json)) {
            $value = $json[self::FIELD_LATITUDE] ?? null;
            $ext = (isset($json[self::FIELD_LATITUDE_EXT]) && is_array($json[self::FIELD_LATITUDE_EXT])) ? $json[self::FIELD_LATITUDE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $type->setLatitude($value);
                } else if (is_array($value)) {
                    $type->setLatitude(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $type->setLatitude(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setLatitude(new FHIRDecimal($ext));
            } else {
                $type->setLatitude(new FHIRDecimal(null));
            }
        }
        if (isset($json[self::FIELD_ALTITUDE]) || isset($json[self::FIELD_ALTITUDE_EXT]) || array_key_exists(self::FIELD_ALTITUDE, $json) || array_key_exists(self::FIELD_ALTITUDE_EXT, $json)) {
            $value = $json[self::FIELD_ALTITUDE] ?? null;
            $ext = (isset($json[self::FIELD_ALTITUDE_EXT]) && is_array($json[self::FIELD_ALTITUDE_EXT])) ? $json[self::FIELD_ALTITUDE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $type->setAltitude($value);
                } else if (is_array($value)) {
                    $type->setAltitude(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $type->setAltitude(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setAltitude(new FHIRDecimal($ext));
            } else {
                $type->setAltitude(new FHIRDecimal(null));
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
        if (isset($this->longitude)) {
            if (null !== ($val = $this->longitude->getValue())) {
                $out->longitude = $val;
            }
            $ext = $this->longitude->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_longitude = $ext;
            }
        }
        if (isset($this->latitude)) {
            if (null !== ($val = $this->latitude->getValue())) {
                $out->latitude = $val;
            }
            $ext = $this->latitude->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_latitude = $ext;
            }
        }
        if (isset($this->altitude)) {
            if (null !== ($val = $this->altitude->getValue())) {
                $out->altitude = $val;
            }
            $ext = $this->altitude->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_altitude = $ext;
            }
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