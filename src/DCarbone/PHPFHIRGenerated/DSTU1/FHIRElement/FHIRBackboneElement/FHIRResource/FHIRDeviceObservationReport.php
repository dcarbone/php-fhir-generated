<?php

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 6th, 2019 09:03+0000
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

use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDeviceObservationReport\FHIRDeviceObservationReportVirtualDevice;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInstant;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRTypeInterface;

/**
 * Describes the data produced by a device at a point in time.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRDeviceObservationReport
 * @package \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource
 */
class FHIRDeviceObservationReport extends FHIRResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_DEVICE_OBSERVATION_REPORT;

    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_INSTANT = 'instant';
    const FIELD_INSTANT_EXT = '_instant';
    const FIELD_SOURCE = 'source';
    const FIELD_SUBJECT = 'subject';
    const FIELD_VIRTUAL_DEVICE = 'virtualDevice';

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An identifier assigned to this observation bu the source device that made the
     * observation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier
     */
    private $identifier = null;
    /**
     * An instant in time - known at least to the second
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The point in time that the values are reported.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInstant
     */
    private $instant = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identification information for the device that is the source of the data.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    private $source = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The subject of the measurement.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    private $subject = null;
    /**
     * Describes the data produced by a device at a point in time.
     *
     * A medical-related subsystem of a medical device.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDeviceObservationReport\FHIRDeviceObservationReportVirtualDevice[]
     */
    private $virtualDevice = [];

    /**
     * FHIRDeviceObservationReport Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDeviceObservationReport::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_IDENTIFIER])) {
            if ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->setIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_INSTANT])) {
            $ext = (isset($data[self::FIELD_INSTANT_EXT]) && is_array($data[self::FIELD_INSTANT_EXT]))
                ? $data[self::FIELD_INSTANT_EXT]
                : null;
            if ($data[self::FIELD_INSTANT] instanceof FHIRInstant) {
                $this->setInstant($data[self::FIELD_INSTANT]);
            } elseif ($ext && is_scalar($data[self::FIELD_INSTANT])) {
                $this->setInstant(new FHIRInstant([FHIRInstant::FIELD_VALUE => $data[self::FIELD_INSTANT]] + $ext));
            } else {
                $this->setInstant(new FHIRInstant($data[self::FIELD_INSTANT]));
            }
        }
        if (isset($data[self::FIELD_SOURCE])) {
            if ($data[self::FIELD_SOURCE] instanceof FHIRResourceReference) {
                $this->setSource($data[self::FIELD_SOURCE]);
            } else {
                $this->setSource(new FHIRResourceReference($data[self::FIELD_SOURCE]));
            }
        }
        if (isset($data[self::FIELD_SUBJECT])) {
            if ($data[self::FIELD_SUBJECT] instanceof FHIRResourceReference) {
                $this->setSubject($data[self::FIELD_SUBJECT]);
            } else {
                $this->setSubject(new FHIRResourceReference($data[self::FIELD_SUBJECT]));
            }
        }
        if (isset($data[self::FIELD_VIRTUAL_DEVICE])) {
            if (is_array($data[self::FIELD_VIRTUAL_DEVICE])) {
                foreach($data[self::FIELD_VIRTUAL_DEVICE] as $v) {
                    if ($v instanceof FHIRDeviceObservationReportVirtualDevice) {
                        $this->addVirtualDevice($v);
                    } else {
                        $this->addVirtualDevice(new FHIRDeviceObservationReportVirtualDevice($v));
                    }
                }
            } else if ($data[self::FIELD_VIRTUAL_DEVICE] instanceof FHIRDeviceObservationReportVirtualDevice) {
                $this->addVirtualDevice($data[self::FIELD_VIRTUAL_DEVICE]);
            } else {
                $this->addVirtualDevice(new FHIRDeviceObservationReportVirtualDevice($data[self::FIELD_VIRTUAL_DEVICE]));
            }
        }
    }

    /**
     * @return string
     */
    public function getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An identifier assigned to this observation bu the source device that made the
     * observation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * An identifier assigned to this observation bu the source device that made the
     * observation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier $identifier
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDeviceObservationReport
     */
    public function setIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * An instant in time - known at least to the second
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The point in time that the values are reported.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInstant
     */
    public function getInstant()
    {
        return $this->instant;
    }

    /**
     * An instant in time - known at least to the second
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The point in time that the values are reported.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInstant $instant
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDeviceObservationReport
     */
    public function setInstant($instant = null)
    {
        if (null === $instant) {
            $this->instant = null;
            return $this;
        }
        if ($instant instanceof FHIRInstant) {
            $this->instant = $instant;
            return $this;
        }
        $this->instant = new FHIRInstant($instant);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identification information for the device that is the source of the data.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identification information for the device that is the source of the data.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $source
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDeviceObservationReport
     */
    public function setSource(FHIRResourceReference $source = null)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The subject of the measurement.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The subject of the measurement.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $subject
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDeviceObservationReport
     */
    public function setSubject(FHIRResourceReference $subject = null)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Describes the data produced by a device at a point in time.
     *
     * A medical-related subsystem of a medical device.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDeviceObservationReport\FHIRDeviceObservationReportVirtualDevice[]
     */
    public function getVirtualDevice()
    {
        return $this->virtualDevice;
    }

    /**
     * Describes the data produced by a device at a point in time.
     *
     * A medical-related subsystem of a medical device.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDeviceObservationReport\FHIRDeviceObservationReportVirtualDevice $virtualDevice
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDeviceObservationReport
     */
    public function addVirtualDevice(FHIRDeviceObservationReportVirtualDevice $virtualDevice = null)
    {
        $this->virtualDevice[] = $virtualDevice;
        return $this;
    }

    /**
     * Describes the data produced by a device at a point in time.
     *
     * A medical-related subsystem of a medical device.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDeviceObservationReport\FHIRDeviceObservationReportVirtualDevice[] $virtualDevice
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDeviceObservationReport
     */
    public function setVirtualDevice(array $virtualDevice = [])
    {
        $this->virtualDevice = [];
        if ([] === $virtualDevice) {
            return $this;
        }
        foreach($virtualDevice as $v) {
            if ($v instanceof FHIRDeviceObservationReportVirtualDevice) {
                $this->addVirtualDevice($v);
            } else {
                $this->addVirtualDevice(new FHIRDeviceObservationReportVirtualDevice($v));
            }
        }
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDeviceObservationReport $type
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDeviceObservationReport
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRDeviceObservationReport::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRDeviceObservationReport::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRResource::xmlUnserialize($sxe, new FHIRDeviceObservationReport);
        } elseif (!is_object($type) || !($type instanceof FHIRDeviceObservationReport)) {
            throw new \RuntimeException(sprintf(
                'FHIRDeviceObservationReport::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDeviceObservationReport or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->identifier)) {
            $type->setIdentifier(FHIRIdentifier::xmlUnserialize($children->identifier));
        }
        if (isset($attributes->instant)) {
            $type->setInstant((string)$attributes->instant);
        }
        if (isset($children->instant)) {
            $type->setInstant(FHIRInstant::xmlUnserialize($children->instant));
        }
        if (isset($children->source)) {
            $type->setSource(FHIRResourceReference::xmlUnserialize($children->source));
        }
        if (isset($children->subject)) {
            $type->setSubject(FHIRResourceReference::xmlUnserialize($children->subject));
        }
        if (isset($children->virtualDevice)) {
            foreach($children->virtualDevice as $child) {
                $type->addVirtualDevice(FHIRDeviceObservationReportVirtualDevice::xmlUnserialize($child));
            }
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<DeviceObservationReport xmlns="http://hl7.org/fhir"></DeviceObservationReport>');
        }
        parent::xmlSerialize($sxe);

        if (null !== ($v = $this->getIdentifier())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER));
        }
        if (null !== ($v = $this->getInstant())) {
            $sxe->addAttribute(self::FIELD_INSTANT, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_INSTANT));
            }
        }

        if (null !== ($v = $this->getSource())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SOURCE));
        }

        if (null !== ($v = $this->getSubject())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUBJECT));
        }

        if ([] !== ($vs = $this->getVirtualDevice())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_VIRTUAL_DEVICE));
            }
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $v;
        }
        if (null !== ($v = $this->getInstant())) {
            $a[self::FIELD_INSTANT] = (string)$v;
            $a[self::FIELD_INSTANT_EXT] = $v;
        }
        if (null !== ($v = $this->getSource())) {
            $a[self::FIELD_SOURCE] = $v;
        }
        if (null !== ($v = $this->getSubject())) {
            $a[self::FIELD_SUBJECT] = $v;
        }
        if ([] !== ($vs = $this->getVirtualDevice())) {
            $a[self::FIELD_VIRTUAL_DEVICE] = $vs;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => self::FHIR_TYPE_NAME] + $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}