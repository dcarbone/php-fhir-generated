<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRLocation;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 17th, 2019 04:38+0000
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * Details and position information for a physical place where services are
 * provided and resources and participants may be stored, found, contained or
 * accommodated.
 *
 * Class FHIRLocationPosition
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRLocation
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

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Altitude. The value domain and the interpretation are the same as for the text
     * of the altitude element in KML (see notes below).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal
     */
    protected $altitude = null;

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Latitude. The value domain and the interpretation are the same as for the text
     * of the latitude element in KML (see notes below).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal
     */
    protected $latitude = null;

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Longitude. The value domain and the interpretation are the same as for the text
     * of the longitude element in KML (see notes below).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal
     */
    protected $longitude = null;

    /** @var string */
    protected $_xmlns = 'http://hl7.org/fhir';

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
        if (isset($data[self::FIELD_ALTITUDE])) {
            $ext = (isset($data[self::FIELD_ALTITUDE_EXT]) && is_array($data[self::FIELD_ALTITUDE_EXT]))
                ? $data[self::FIELD_ALTITUDE_EXT]
                : null;
            if ($data[self::FIELD_ALTITUDE] instanceof FHIRDecimal) {
                $this->setAltitude($data[self::FIELD_ALTITUDE]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_ALTITUDE])) {
                    $this->setAltitude(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $data[self::FIELD_ALTITUDE]] + $ext));
                } else if (is_array($data[self::FIELD_ALTITUDE])) {
                    $this->setAltitude(new FHIRDecimal(array_merge($ext, $data[self::FIELD_ALTITUDE])));
                }
            } else {
                $this->setAltitude(new FHIRDecimal($data[self::FIELD_ALTITUDE]));
            }
        }
        if (isset($data[self::FIELD_LATITUDE])) {
            $ext = (isset($data[self::FIELD_LATITUDE_EXT]) && is_array($data[self::FIELD_LATITUDE_EXT]))
                ? $data[self::FIELD_LATITUDE_EXT]
                : null;
            if ($data[self::FIELD_LATITUDE] instanceof FHIRDecimal) {
                $this->setLatitude($data[self::FIELD_LATITUDE]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_LATITUDE])) {
                    $this->setLatitude(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $data[self::FIELD_LATITUDE]] + $ext));
                } else if (is_array($data[self::FIELD_LATITUDE])) {
                    $this->setLatitude(new FHIRDecimal(array_merge($ext, $data[self::FIELD_LATITUDE])));
                }
            } else {
                $this->setLatitude(new FHIRDecimal($data[self::FIELD_LATITUDE]));
            }
        }
        if (isset($data[self::FIELD_LONGITUDE])) {
            $ext = (isset($data[self::FIELD_LONGITUDE_EXT]) && is_array($data[self::FIELD_LONGITUDE_EXT]))
                ? $data[self::FIELD_LONGITUDE_EXT]
                : null;
            if ($data[self::FIELD_LONGITUDE] instanceof FHIRDecimal) {
                $this->setLongitude($data[self::FIELD_LONGITUDE]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_LONGITUDE])) {
                    $this->setLongitude(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $data[self::FIELD_LONGITUDE]] + $ext));
                } else if (is_array($data[self::FIELD_LONGITUDE])) {
                    $this->setLongitude(new FHIRDecimal(array_merge($ext, $data[self::FIELD_LONGITUDE])));
                }
            } else {
                $this->setLongitude(new FHIRDecimal($data[self::FIELD_LONGITUDE]));
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
     * @return string|null
     */
    public function _getFHIRXMLNamespace()
    {
        return '' === $this->_xmlns ? null : $this->_xmlns;
    }

    /**
     * @param null|string $xmlNamespace
     * @return static
     */
    public function _setFHIRXMLNamespace($xmlNamespace)
    {
        if (null === $xmlNamespace || is_string($xmlNamespace)) {
            $this->_xmlns = (string)$xmlNamespace;
            return $this;
        }
        throw new \InvalidArgumentException(sprintf(
            '$xmlNamespace must be a null or string value, %s seen.',
            gettype($xmlNamespace)
        ));
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
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Altitude. The value domain and the interpretation are the same as for the text
     * of the altitude element in KML (see notes below).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal
     */
    public function getAltitude()
    {
        return $this->altitude;
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal $altitude
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
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Latitude. The value domain and the interpretation are the same as for the text
     * of the latitude element in KML (see notes below).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal
     */
    public function getLatitude()
    {
        return $this->latitude;
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal $latitude
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
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Longitude. The value domain and the interpretation are the same as for the text
     * of the longitude element in KML (see notes below).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal
     */
    public function getLongitude()
    {
        return $this->longitude;
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal $longitude
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
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationPosition $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationPosition
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
                'FHIRLocationPosition::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationPosition or null, %s seen.',
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
        if (isset($attributes->altitude)) {
            $type->setAltitude((string)$attributes->altitude);
        }
        if (isset($children->altitude)) {
            $type->setAltitude(FHIRDecimal::xmlUnserialize($children->altitude));
        }
        if (isset($attributes->latitude)) {
            $type->setLatitude((string)$attributes->latitude);
        }
        if (isset($children->latitude)) {
            $type->setLatitude(FHIRDecimal::xmlUnserialize($children->latitude));
        }
        if (isset($attributes->longitude)) {
            $type->setLongitude((string)$attributes->longitude);
        }
        if (isset($children->longitude)) {
            $type->setLongitude(FHIRDecimal::xmlUnserialize($children->longitude));
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
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_ALTITUDE] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_ALTITUDE_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_ALTITUDE] = $v;
            }
        }
        if (null !== ($v = $this->getLatitude())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_LATITUDE] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_LATITUDE_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_LATITUDE] = $v;
            }
        }
        if (null !== ($v = $this->getLongitude())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_LONGITUDE] = $val;
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_LONGITUDE_EXT] = $enc;
                }
            } else {
                $a[self::FIELD_LONGITUDE] = $v;
            }
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