<?php

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRLocation;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:43+0000
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
 *   Copyright (c) 2011-2013, HL7, Inc.
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
 *   Generated on Tue, Sep 30, 2014 18:08+1000 for FHIR v0.0.82
 */

use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRTypeInterface;

/**
 * Details and position information for a physical place where services are
 * provided and resources and participants may be stored, found, contained or
 * accommodated.
 *
 * Class FHIRLocationPosition
 * @package \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRLocation
 */
class FHIRLocationPosition extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_LOCATION_DOT_POSITION;
    const FIELD_ALTITUDE = 'altitude';
    const FIELD_ALTITUDE_EXT = '_altitude';
    const FIELD_LATITUDE = 'latitude';
    const FIELD_LATITUDE_EXT = '_latitude';
    const FIELD_LONGITUDE = 'longitude';
    const FIELD_LONGITUDE_EXT = '_longitude';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A rational number with implicit precision
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Altitude. The value domain and the interpretation are the same as for the text
     * of the altitude element in KML (see notes below).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDecimal
     */
    protected $altitude = null;

    /**
     * A rational number with implicit precision
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Latitude. The value domain and the interpretation are the same as for the text
     * of the latitude element in KML (see notes below).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDecimal
     */
    protected $latitude = null;

    /**
     * A rational number with implicit precision
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Longitude. The value domain and the interpretation are the same as for the text
     * of the longitude element in KML (see notes below).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDecimal
     */
    protected $longitude = null;

    /**
     * Validation map for fields in type Location.Position
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRLocationPosition Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRLocationPosition::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ALTITUDE]) || isset($data[self::FIELD_ALTITUDE_EXT])) {
            if (isset($data[self::FIELD_ALTITUDE])) {
                $value = $data[self::FIELD_ALTITUDE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_ALTITUDE_EXT]) && is_array($data[self::FIELD_ALTITUDE_EXT])) {
                $ext = $data[self::FIELD_ALTITUDE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setAltitude($value);
                } else if (is_array($value)) {
                    $this->setAltitude(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setAltitude(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setAltitude(new FHIRDecimal($ext));
            }
        }
        if (isset($data[self::FIELD_LATITUDE]) || isset($data[self::FIELD_LATITUDE_EXT])) {
            if (isset($data[self::FIELD_LATITUDE])) {
                $value = $data[self::FIELD_LATITUDE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_LATITUDE_EXT]) && is_array($data[self::FIELD_LATITUDE_EXT])) {
                $ext = $data[self::FIELD_LATITUDE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setLatitude($value);
                } else if (is_array($value)) {
                    $this->setLatitude(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setLatitude(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setLatitude(new FHIRDecimal($ext));
            }
        }
        if (isset($data[self::FIELD_LONGITUDE]) || isset($data[self::FIELD_LONGITUDE_EXT])) {
            if (isset($data[self::FIELD_LONGITUDE])) {
                $value = $data[self::FIELD_LONGITUDE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_LONGITUDE_EXT]) && is_array($data[self::FIELD_LONGITUDE_EXT])) {
                $ext = $data[self::FIELD_LONGITUDE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setLongitude($value);
                } else if (is_array($value)) {
                    $this->setLongitude(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setLongitude(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setLongitude(new FHIRDecimal($ext));
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
        return "<LocationPosition{$xmlns}></LocationPosition>";
    }

    /**
     * A rational number with implicit precision
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Altitude. The value domain and the interpretation are the same as for the text
     * of the altitude element in KML (see notes below).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDecimal
     */
    public function getAltitude()
    {
        return $this->altitude;
    }

    /**
     * A rational number with implicit precision
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Altitude. The value domain and the interpretation are the same as for the text
     * of the altitude element in KML (see notes below).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDecimal $altitude
     * @return static
     */
    public function setAltitude($altitude = null)
    {
        if (null === $altitude) {
            $this->altitude = null;
            return $this;
        }
        if ($altitude instanceof FHIRDecimal) {
            $this->altitude = $altitude;
            return $this;
        }
        $this->altitude = new FHIRDecimal($altitude);
        return $this;
    }

    /**
     * A rational number with implicit precision
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Latitude. The value domain and the interpretation are the same as for the text
     * of the latitude element in KML (see notes below).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDecimal
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * A rational number with implicit precision
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Latitude. The value domain and the interpretation are the same as for the text
     * of the latitude element in KML (see notes below).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDecimal $latitude
     * @return static
     */
    public function setLatitude($latitude = null)
    {
        if (null === $latitude) {
            $this->latitude = null;
            return $this;
        }
        if ($latitude instanceof FHIRDecimal) {
            $this->latitude = $latitude;
            return $this;
        }
        $this->latitude = new FHIRDecimal($latitude);
        return $this;
    }

    /**
     * A rational number with implicit precision
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Longitude. The value domain and the interpretation are the same as for the text
     * of the longitude element in KML (see notes below).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDecimal
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * A rational number with implicit precision
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Longitude. The value domain and the interpretation are the same as for the text
     * of the longitude element in KML (see notes below).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDecimal $longitude
     * @return static
     */
    public function setLongitude($longitude = null)
    {
        if (null === $longitude) {
            $this->longitude = null;
            return $this;
        }
        if ($longitude instanceof FHIRDecimal) {
            $this->longitude = $longitude;
            return $this;
        }
        $this->longitude = new FHIRDecimal($longitude);
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
        if (null !== ($v = $this->getAltitude())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ALTITUDE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getLatitude())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LATITUDE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getLongitude())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LONGITUDE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_ALTITUDE])) {
            $v = $this->getAltitude();
            foreach($validationRules[self::FIELD_ALTITUDE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_LOCATION_DOT_POSITION, self::FIELD_ALTITUDE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ALTITUDE])) {
                        $errs[self::FIELD_ALTITUDE] = [];
                    }
                    $errs[self::FIELD_ALTITUDE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LATITUDE])) {
            $v = $this->getLatitude();
            foreach($validationRules[self::FIELD_LATITUDE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_LOCATION_DOT_POSITION, self::FIELD_LATITUDE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LATITUDE])) {
                        $errs[self::FIELD_LATITUDE] = [];
                    }
                    $errs[self::FIELD_LATITUDE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LONGITUDE])) {
            $v = $this->getLongitude();
            foreach($validationRules[self::FIELD_LONGITUDE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_LOCATION_DOT_POSITION, self::FIELD_LONGITUDE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LONGITUDE])) {
                        $errs[self::FIELD_LONGITUDE] = [];
                    }
                    $errs[self::FIELD_LONGITUDE][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationPosition $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationPosition
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
                throw new \DomainException(sprintf('FHIRLocationPosition::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRLocationPosition::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRLocationPosition;
        } elseif (!is_object($type) || !($type instanceof FHIRLocationPosition)) {
            throw new \RuntimeException(sprintf(
                'FHIRLocationPosition::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationPosition or null, %s seen.',
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
        if (isset($children->altitude)) {
            $type->setAltitude(FHIRDecimal::xmlUnserialize($children->altitude));
        }
        if (isset($attributes->altitude)) {
            $pt = $type->getAltitude();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->altitude);
            } else {
                $type->setAltitude((string)$attributes->altitude);
            }
        }
        if (isset($children->latitude)) {
            $type->setLatitude(FHIRDecimal::xmlUnserialize($children->latitude));
        }
        if (isset($attributes->latitude)) {
            $pt = $type->getLatitude();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->latitude);
            } else {
                $type->setLatitude((string)$attributes->latitude);
            }
        }
        if (isset($children->longitude)) {
            $type->setLongitude(FHIRDecimal::xmlUnserialize($children->longitude));
        }
        if (isset($attributes->longitude)) {
            $pt = $type->getLongitude();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->longitude);
            } else {
                $type->setLongitude((string)$attributes->longitude);
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
        if (null !== ($v = $this->getAltitude())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ALTITUDE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getLatitude())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LATITUDE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getLongitude())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LONGITUDE, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getAltitude())) {
            $a[self::FIELD_ALTITUDE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDecimal::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDecimal::FIELD_VALUE]);
                $a[self::FIELD_ALTITUDE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getLatitude())) {
            $a[self::FIELD_LATITUDE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDecimal::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDecimal::FIELD_VALUE]);
                $a[self::FIELD_LATITUDE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getLongitude())) {
            $a[self::FIELD_LONGITUDE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDecimal::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDecimal::FIELD_VALUE]);
                $a[self::FIELD_LONGITUDE_EXT] = $enc;
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