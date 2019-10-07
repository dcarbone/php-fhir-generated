<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 7th, 2019 22:31+0000
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

use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRResearchSubjectStatus;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * A process where a researcher or organization plans and then executes a series of
 * steps intended to increase the field of healthcare-related knowledge. This
 * includes studies of safety, efficacy, comparative effectiveness and other
 * information about medications, devices, therapies and other interventional and
 * investigative techniques. A ResearchStudy involves the gathering of information
 * about human or animal subjects.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRResearchSubject
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource
 */
class FHIRResearchSubject extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_RESEARCH_SUBJECT;

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_ACTUAL_ARM = 'actualArm';
    const FIELD_ACTUAL_ARM_EXT = '_actualArm';
    const FIELD_ASSIGNED_ARM = 'assignedArm';
    const FIELD_ASSIGNED_ARM_EXT = '_assignedArm';
    const FIELD_CONSENT = 'consent';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_INDIVIDUAL = 'individual';
    const FIELD_PERIOD = 'period';
    const FIELD_STATUS = 'status';
    const FIELD_STUDY = 'study';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The name of the arm in the study the subject actually followed as part of this
     * study.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    private $actualArm = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The name of the arm in the study the subject is expected to follow as part of
     * this study.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    private $assignedArm = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A record of the patient's informed agreement to participate in the study.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    private $consent = null;
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifiers assigned to this research study by the sponsor or other systems.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier
     */
    private $identifier = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The record of the person or animal who is involved in the study.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    private $individual = null;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The dates the subject began and ended their participation in the study.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod
     */
    private $period = null;
    /**
     * Indicates the progression of a study subject through a study
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The current state of the subject.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRResearchSubjectStatus
     */
    private $status = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Reference to the study the subject is participating in.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    private $study = null;

    /**
     * FHIRResearchSubject Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRResearchSubject::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ACTUAL_ARM])) {
            $ext = (isset($data[self::FIELD_ACTUAL_ARM_EXT]) && is_array($data[self::FIELD_ACTUAL_ARM_EXT]))
                ? $data[self::FIELD_ACTUAL_ARM_EXT]
                : null;
            if ($data[self::FIELD_ACTUAL_ARM] instanceof FHIRString) {
                $this->setActualArm($data[self::FIELD_ACTUAL_ARM]);
            } elseif ($ext && is_scalar($data[self::FIELD_ACTUAL_ARM])) {
                $this->setActualArm(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_ACTUAL_ARM]] + $ext));
            } else {
                $this->setActualArm(new FHIRString($data[self::FIELD_ACTUAL_ARM]));
            }
        }
        if (isset($data[self::FIELD_ASSIGNED_ARM])) {
            $ext = (isset($data[self::FIELD_ASSIGNED_ARM_EXT]) && is_array($data[self::FIELD_ASSIGNED_ARM_EXT]))
                ? $data[self::FIELD_ASSIGNED_ARM_EXT]
                : null;
            if ($data[self::FIELD_ASSIGNED_ARM] instanceof FHIRString) {
                $this->setAssignedArm($data[self::FIELD_ASSIGNED_ARM]);
            } elseif ($ext && is_scalar($data[self::FIELD_ASSIGNED_ARM])) {
                $this->setAssignedArm(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_ASSIGNED_ARM]] + $ext));
            } else {
                $this->setAssignedArm(new FHIRString($data[self::FIELD_ASSIGNED_ARM]));
            }
        }
        if (isset($data[self::FIELD_CONSENT])) {
            if ($data[self::FIELD_CONSENT] instanceof FHIRReference) {
                $this->setConsent($data[self::FIELD_CONSENT]);
            } else {
                $this->setConsent(new FHIRReference($data[self::FIELD_CONSENT]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            if ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->setIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_INDIVIDUAL])) {
            if ($data[self::FIELD_INDIVIDUAL] instanceof FHIRReference) {
                $this->setIndividual($data[self::FIELD_INDIVIDUAL]);
            } else {
                $this->setIndividual(new FHIRReference($data[self::FIELD_INDIVIDUAL]));
            }
        }
        if (isset($data[self::FIELD_PERIOD])) {
            if ($data[self::FIELD_PERIOD] instanceof FHIRPeriod) {
                $this->setPeriod($data[self::FIELD_PERIOD]);
            } else {
                $this->setPeriod(new FHIRPeriod($data[self::FIELD_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_STATUS])) {
            if ($data[self::FIELD_STATUS] instanceof FHIRResearchSubjectStatus) {
                $this->setStatus($data[self::FIELD_STATUS]);
            } else {
                $this->setStatus(new FHIRResearchSubjectStatus($data[self::FIELD_STATUS]));
            }
        }
        if (isset($data[self::FIELD_STUDY])) {
            if ($data[self::FIELD_STUDY] instanceof FHIRReference) {
                $this->setStudy($data[self::FIELD_STUDY]);
            } else {
                $this->setStudy(new FHIRReference($data[self::FIELD_STUDY]));
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
     * @return string|null
     */
    public function getFHIRXMLNamespace()
    {
        return '' === $this->_xmlns ? null : $this->_xmlns;
    }

    /**
     * @return string
     */
    public function getFHIRXMLElementDefinition()
    {
        $xmlns = $this->getFHIRXMLNamespace();
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<ResearchSubject{$xmlns}></ResearchSubject>";
    }


    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The name of the arm in the study the subject actually followed as part of this
     * study.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getActualArm()
    {
        return $this->actualArm;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The name of the arm in the study the subject actually followed as part of this
     * study.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $actualArm
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRResearchSubject
     */
    public function setActualArm($actualArm = null)
    {
        if (null === $actualArm) {
            $this->actualArm = null;
            return $this;
        }
        if ($actualArm instanceof FHIRString) {
            $this->actualArm = $actualArm;
            return $this;
        }
        $this->actualArm = new FHIRString($actualArm);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The name of the arm in the study the subject is expected to follow as part of
     * this study.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getAssignedArm()
    {
        return $this->assignedArm;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The name of the arm in the study the subject is expected to follow as part of
     * this study.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $assignedArm
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRResearchSubject
     */
    public function setAssignedArm($assignedArm = null)
    {
        if (null === $assignedArm) {
            $this->assignedArm = null;
            return $this;
        }
        if ($assignedArm instanceof FHIRString) {
            $this->assignedArm = $assignedArm;
            return $this;
        }
        $this->assignedArm = new FHIRString($assignedArm);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A record of the patient's informed agreement to participate in the study.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getConsent()
    {
        return $this->consent;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A record of the patient's informed agreement to participate in the study.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $consent
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRResearchSubject
     */
    public function setConsent(FHIRReference $consent = null)
    {
        $this->consent = $consent;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifiers assigned to this research study by the sponsor or other systems.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier
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
     * Identifiers assigned to this research study by the sponsor or other systems.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier $identifier
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRResearchSubject
     */
    public function setIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The record of the person or animal who is involved in the study.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getIndividual()
    {
        return $this->individual;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The record of the person or animal who is involved in the study.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $individual
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRResearchSubject
     */
    public function setIndividual(FHIRReference $individual = null)
    {
        $this->individual = $individual;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The dates the subject began and ended their participation in the study.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The dates the subject began and ended their participation in the study.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod $period
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRResearchSubject
     */
    public function setPeriod(FHIRPeriod $period = null)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Indicates the progression of a study subject through a study
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The current state of the subject.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRResearchSubjectStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Indicates the progression of a study subject through a study
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The current state of the subject.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRResearchSubjectStatus $status
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRResearchSubject
     */
    public function setStatus(FHIRResearchSubjectStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Reference to the study the subject is participating in.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getStudy()
    {
        return $this->study;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Reference to the study the subject is participating in.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $study
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRResearchSubject
     */
    public function setStudy(FHIRReference $study = null)
    {
        $this->study = $study;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRResearchSubject $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRResearchSubject
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
                throw new \DomainException(sprintf('FHIRResearchSubject::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRResearchSubject::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRDomainResource::xmlUnserialize($sxe, new FHIRResearchSubject);
        } elseif (!is_object($type) || !($type instanceof FHIRResearchSubject)) {
            throw new \RuntimeException(sprintf(
                'FHIRResearchSubject::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRResearchSubject or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($attributes->actualArm)) {
            $type->setActualArm((string)$attributes->actualArm);
        }
        if (isset($children->actualArm)) {
            $type->setActualArm(FHIRString::xmlUnserialize($children->actualArm));
        }
        if (isset($attributes->assignedArm)) {
            $type->setAssignedArm((string)$attributes->assignedArm);
        }
        if (isset($children->assignedArm)) {
            $type->setAssignedArm(FHIRString::xmlUnserialize($children->assignedArm));
        }
        if (isset($children->consent)) {
            $type->setConsent(FHIRReference::xmlUnserialize($children->consent));
        }
        if (isset($children->identifier)) {
            $type->setIdentifier(FHIRIdentifier::xmlUnserialize($children->identifier));
        }
        if (isset($children->individual)) {
            $type->setIndividual(FHIRReference::xmlUnserialize($children->individual));
        }
        if (isset($children->period)) {
            $type->setPeriod(FHIRPeriod::xmlUnserialize($children->period));
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRResearchSubjectStatus::xmlUnserialize($children->status));
        }
        if (isset($children->study)) {
            $type->setStudy(FHIRReference::xmlUnserialize($children->study));
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
            $sxe = new \SimpleXMLElement($this->getFHIRXMLElementDefinition(), $libxmlOpts, false);
        }
        parent::xmlSerialize($sxe);
        if (null !== ($v = $this->getActualArm())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ACTUAL_ARM, null, $v->getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getAssignedArm())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ASSIGNED_ARM, null, $v->getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getConsent())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CONSENT, null, $v->getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getIdentifier())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getIndividual())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_INDIVIDUAL, null, $v->getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PERIOD, null, $v->getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS, null, $v->getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getStudy())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STUDY, null, $v->getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getActualArm())) {
            $a[self::FIELD_ACTUAL_ARM] = (string)$v;
            $a[self::FIELD_ACTUAL_ARM_EXT] = $v;
        }
        if (null !== ($v = $this->getAssignedArm())) {
            $a[self::FIELD_ASSIGNED_ARM] = (string)$v;
            $a[self::FIELD_ASSIGNED_ARM_EXT] = $v;
        }
        if (null !== ($v = $this->getConsent())) {
            $a[self::FIELD_CONSENT] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $v;
        }
        if (null !== ($v = $this->getIndividual())) {
            $a[self::FIELD_INDIVIDUAL] = $v;
        }
        if (null !== ($v = $this->getPeriod())) {
            $a[self::FIELD_PERIOD] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v;
        }
        if (null !== ($v = $this->getStudy())) {
            $a[self::FIELD_STUDY] = $v;
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