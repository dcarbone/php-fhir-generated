<?php

namespace DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: July 27th, 2019 15:22+0000
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
 *   Generated on Thu, Dec 27, 2018 22:37+1100 for FHIR v4.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\PHPFHIRTypeInterface;

/**
 * Information about a medication that is used to support knowledge.
 *
 * Class FHIRMedicationKnowledgeRegulatory
 * @package \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge
 */
class FHIRMedicationKnowledgeRegulatory extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MEDICATION_KNOWLEDGE_DOT_REGULATORY;

    const FIELD_MAX_DISPENSE = 'maxDispense';
    const FIELD_REGULATORY_AUTHORITY = 'regulatoryAuthority';
    const FIELD_SCHEDULE = 'schedule';
    const FIELD_SUBSTITUTION = 'substitution';

    /**
     * Information about a medication that is used to support knowledge.
     *
     * The maximum number of units of the medication that can be dispensed in a period.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMaxDispense
     */
    private $maxDispense = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The authority that is specifying the regulations.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $regulatoryAuthority = null;

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Specifies the schedule of a medication in jurisdiction.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeSchedule[]
     */
    private $schedule = [];

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Specifies if changes are allowed when dispensing a medication from a regulatory
     * perspective.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeSubstitution[]
     */
    private $substitution = [];

    /**
     * FHIRMedicationKnowledgeRegulatory Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedicationKnowledgeRegulatory::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_MAX_DISPENSE])) {
            if ($data[self::FIELD_MAX_DISPENSE] instanceof FHIRMedicationKnowledgeMaxDispense) {
                $this->setMaxDispense($data[self::FIELD_MAX_DISPENSE]);
            } else {
                $this->setMaxDispense(new FHIRMedicationKnowledgeMaxDispense($data[self::FIELD_MAX_DISPENSE]));
            }
        }
        if (isset($data[self::FIELD_REGULATORY_AUTHORITY])) {
            if ($data[self::FIELD_REGULATORY_AUTHORITY] instanceof FHIRReference) {
                $this->setRegulatoryAuthority($data[self::FIELD_REGULATORY_AUTHORITY]);
            } else {
                $this->setRegulatoryAuthority(new FHIRReference($data[self::FIELD_REGULATORY_AUTHORITY]));
            }
        }
        if (isset($data[self::FIELD_SCHEDULE])) {
            if (is_array($data[self::FIELD_SCHEDULE])) {
                foreach($data[self::FIELD_SCHEDULE] as $v) {
                    if ($v instanceof FHIRMedicationKnowledgeSchedule) {
                        $this->addSchedule($v);
                    } else {
                        $this->addSchedule(new FHIRMedicationKnowledgeSchedule($v));
                    }
                }
            } else if ($data[self::FIELD_SCHEDULE] instanceof FHIRMedicationKnowledgeSchedule) {
                $this->addSchedule($data[self::FIELD_SCHEDULE]);
            } else {
                $this->addSchedule(new FHIRMedicationKnowledgeSchedule($data[self::FIELD_SCHEDULE]));
            }
        }
        if (isset($data[self::FIELD_SUBSTITUTION])) {
            if (is_array($data[self::FIELD_SUBSTITUTION])) {
                foreach($data[self::FIELD_SUBSTITUTION] as $v) {
                    if ($v instanceof FHIRMedicationKnowledgeSubstitution) {
                        $this->addSubstitution($v);
                    } else {
                        $this->addSubstitution(new FHIRMedicationKnowledgeSubstitution($v));
                    }
                }
            } else if ($data[self::FIELD_SUBSTITUTION] instanceof FHIRMedicationKnowledgeSubstitution) {
                $this->addSubstitution($data[self::FIELD_SUBSTITUTION]);
            } else {
                $this->addSubstitution(new FHIRMedicationKnowledgeSubstitution($data[self::FIELD_SUBSTITUTION]));
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
     * Information about a medication that is used to support knowledge.
     *
     * The maximum number of units of the medication that can be dispensed in a period.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMaxDispense
     */
    public function getMaxDispense()
    {
        return $this->maxDispense;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * The maximum number of units of the medication that can be dispensed in a period.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMaxDispense $maxDispense
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRegulatory
     */
    public function setMaxDispense(FHIRMedicationKnowledgeMaxDispense $maxDispense = null)
    {
        $this->maxDispense = $maxDispense;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The authority that is specifying the regulations.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getRegulatoryAuthority()
    {
        return $this->regulatoryAuthority;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The authority that is specifying the regulations.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $regulatoryAuthority
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRegulatory
     */
    public function setRegulatoryAuthority(FHIRReference $regulatoryAuthority = null)
    {
        $this->regulatoryAuthority = $regulatoryAuthority;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Specifies the schedule of a medication in jurisdiction.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeSchedule[]
     */
    public function getSchedule()
    {
        return $this->schedule;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Specifies the schedule of a medication in jurisdiction.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeSchedule $schedule
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRegulatory
     */
    public function addSchedule(FHIRMedicationKnowledgeSchedule $schedule = null)
    {
        $this->schedule[] = $schedule;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Specifies the schedule of a medication in jurisdiction.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeSchedule[] $schedule
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRegulatory
     */
    public function setSchedule(array $schedule = [])
    {
        $this->schedule = [];
        if ([] === $schedule) {
            return $this;
        }
        foreach($schedule as $v) {
            if ($v instanceof FHIRMedicationKnowledgeSchedule) {
                $this->addSchedule($v);
            } else {
                $this->addSchedule(new FHIRMedicationKnowledgeSchedule($v));
            }
        }
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Specifies if changes are allowed when dispensing a medication from a regulatory
     * perspective.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeSubstitution[]
     */
    public function getSubstitution()
    {
        return $this->substitution;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Specifies if changes are allowed when dispensing a medication from a regulatory
     * perspective.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeSubstitution $substitution
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRegulatory
     */
    public function addSubstitution(FHIRMedicationKnowledgeSubstitution $substitution = null)
    {
        $this->substitution[] = $substitution;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Specifies if changes are allowed when dispensing a medication from a regulatory
     * perspective.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeSubstitution[] $substitution
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRegulatory
     */
    public function setSubstitution(array $substitution = [])
    {
        $this->substitution = [];
        if ([] === $substitution) {
            return $this;
        }
        foreach($substitution as $v) {
            if ($v instanceof FHIRMedicationKnowledgeSubstitution) {
                $this->addSubstitution($v);
            } else {
                $this->addSubstitution(new FHIRMedicationKnowledgeSubstitution($v));
            }
        }
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null \$sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRegulatory $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRegulatory
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
                throw new \DomainException(sprintf('FHIRMedicationKnowledgeRegulatory::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRMedicationKnowledgeRegulatory::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize(\$sxe, new FHIRMedicationKnowledgeRegulatory);
        } elseif (!is_object($type) || !($type instanceof FHIRMedicationKnowledgeRegulatory)) {
            throw new \RuntimeException(sprintf(
                'FHIRMedicationKnowledgeRegulatory::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRegulatory or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->maxDispense)) {
            $type->setMaxDispense(FHIRMedicationKnowledgeMaxDispense::xmlUnserialize($children->maxDispense));
        }
        if (isset($children->regulatoryAuthority)) {
            $type->setRegulatoryAuthority(FHIRReference::xmlUnserialize($children->regulatoryAuthority));
        }
        if (isset($children->schedule)) {
            foreach($children->schedule as $child) {
                $type->addSchedule(FHIRMedicationKnowledgeSchedule::xmlUnserialize($child));
            }
        }
        if (isset($children->substitution)) {
            foreach($children->substitution as $child) {
                $type->addSubstitution(FHIRMedicationKnowledgeSubstitution::xmlUnserialize($child));
            }
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement \$sxe
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<MedicationKnowledgeRegulatory xmlns="http://hl7.org/fhir"></MedicationKnowledgeRegulatory>');
        }
        if (null !== ($v = $this->getMaxDispense())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MAX_DISPENSE));
        }
        if (null !== ($v = $this->getRegulatoryAuthority())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REGULATORY_AUTHORITY));
        }
        if ([] !== ($vs = $this->getSchedule())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SCHEDULE));
            }
        }
        if ([] !== ($vs = $this->getSubstitution())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SUBSTITUTION));
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
        if (null !== ($v = $this->getMaxDispense())) {
            $a[self::FIELD_MAX_DISPENSE] = $v;
        }
        if (null !== ($v = $this->getRegulatoryAuthority())) {
            $a[self::FIELD_REGULATORY_AUTHORITY] = $v;
        }
        if ([] !== ($vs = $this->getSchedule())) {
            $a[self::FIELD_SCHEDULE] = $vs;
        }
        if ([] !== ($vs = $this->getSubstitution())) {
            $a[self::FIELD_SUBSTITUTION] = $vs;
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