<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 28th, 2019 20:54+0000
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

use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAdverseEventCausality;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * Actual or potential/avoided event causing unintended physical injury resulting
 * from or contributed to by medical care, a research study or other healthcare
 * setting factors that requires additional monitoring, treatment, or
 * hospitalization, or that results in death.
 *
 * Class FHIRAdverseEventSuspectEntity
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent
 */
class FHIRAdverseEventSuspectEntity extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT_DOT_SUSPECT_ENTITY;

    /** @var string */
    protected $_xmlns = 'http://hl7.org/fhir';

    const FIELD_CAUSALITY = 'causality';
    const FIELD_CAUSALITY_EXT = '_causality';
    const FIELD_CAUSALITY_ASSESSMENT = 'causalityAssessment';
    const FIELD_CAUSALITY_AUTHOR = 'causalityAuthor';
    const FIELD_CAUSALITY_METHOD = 'causalityMethod';
    const FIELD_CAUSALITY_PRODUCT_RELATEDNESS = 'causalityProductRelatedness';
    const FIELD_CAUSALITY_PRODUCT_RELATEDNESS_EXT = '_causalityProductRelatedness';
    const FIELD_CAUSALITY_RESULT = 'causalityResult';
    const FIELD_INSTANCE = 'instance';

    /**
     * TODO
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * causality1 | causality2.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAdverseEventCausality
     */
    protected $causality = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * assess1 | assess2.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    protected $causalityAssessment = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * AdverseEvent.suspectEntity.causalityAuthor.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $causalityAuthor = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * method1 | method2.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    protected $causalityMethod = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * AdverseEvent.suspectEntity.causalityProductRelatedness.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $causalityProductRelatedness = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * result1 | result2.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    protected $causalityResult = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the actual instance of what caused the adverse event. May be a
     * substance, medication, medication administration, medication statement or a
     * device.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $instance = null;

    /**
     * FHIRAdverseEventSuspectEntity Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAdverseEventSuspectEntity::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CAUSALITY])) {
            $ext = (isset($data[self::FIELD_CAUSALITY_EXT]) && is_array($data[self::FIELD_CAUSALITY_EXT]))
                ? $data[self::FIELD_CAUSALITY_EXT]
                : null;
            if ($data[self::FIELD_CAUSALITY] instanceof FHIRAdverseEventCausality) {
                $this->setCausality($data[self::FIELD_CAUSALITY]);
            } elseif ($ext && is_scalar($data[self::FIELD_CAUSALITY])) {
                $this->setCausality(new FHIRAdverseEventCausality([FHIRAdverseEventCausality::FIELD_VALUE => $data[self::FIELD_CAUSALITY]] + $ext));
            } else {
                $this->setCausality(new FHIRAdverseEventCausality($data[self::FIELD_CAUSALITY]));
            }
        }
        if (isset($data[self::FIELD_CAUSALITY_ASSESSMENT])) {
            if ($data[self::FIELD_CAUSALITY_ASSESSMENT] instanceof FHIRCodeableConcept) {
                $this->setCausalityAssessment($data[self::FIELD_CAUSALITY_ASSESSMENT]);
            } else {
                $this->setCausalityAssessment(new FHIRCodeableConcept($data[self::FIELD_CAUSALITY_ASSESSMENT]));
            }
        }
        if (isset($data[self::FIELD_CAUSALITY_AUTHOR])) {
            if ($data[self::FIELD_CAUSALITY_AUTHOR] instanceof FHIRReference) {
                $this->setCausalityAuthor($data[self::FIELD_CAUSALITY_AUTHOR]);
            } else {
                $this->setCausalityAuthor(new FHIRReference($data[self::FIELD_CAUSALITY_AUTHOR]));
            }
        }
        if (isset($data[self::FIELD_CAUSALITY_METHOD])) {
            if ($data[self::FIELD_CAUSALITY_METHOD] instanceof FHIRCodeableConcept) {
                $this->setCausalityMethod($data[self::FIELD_CAUSALITY_METHOD]);
            } else {
                $this->setCausalityMethod(new FHIRCodeableConcept($data[self::FIELD_CAUSALITY_METHOD]));
            }
        }
        if (isset($data[self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS])) {
            $ext = (isset($data[self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS_EXT]) && is_array($data[self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS_EXT]))
                ? $data[self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS_EXT]
                : null;
            if ($data[self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS] instanceof FHIRString) {
                $this->setCausalityProductRelatedness($data[self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS]);
            } elseif ($ext && is_scalar($data[self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS])) {
                $this->setCausalityProductRelatedness(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS]] + $ext));
            } else {
                $this->setCausalityProductRelatedness(new FHIRString($data[self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS]));
            }
        }
        if (isset($data[self::FIELD_CAUSALITY_RESULT])) {
            if ($data[self::FIELD_CAUSALITY_RESULT] instanceof FHIRCodeableConcept) {
                $this->setCausalityResult($data[self::FIELD_CAUSALITY_RESULT]);
            } else {
                $this->setCausalityResult(new FHIRCodeableConcept($data[self::FIELD_CAUSALITY_RESULT]));
            }
        }
        if (isset($data[self::FIELD_INSTANCE])) {
            if ($data[self::FIELD_INSTANCE] instanceof FHIRReference) {
                $this->setInstance($data[self::FIELD_INSTANCE]);
            } else {
                $this->setInstance(new FHIRReference($data[self::FIELD_INSTANCE]));
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
        return "<AdverseEventSuspectEntity{$xmlns}></AdverseEventSuspectEntity>";
    }


    /**
     * TODO
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * causality1 | causality2.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAdverseEventCausality
     */
    public function getCausality()
    {
        return $this->causality;
    }

    /**
     * TODO
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * causality1 | causality2.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAdverseEventCausality $causality
     * @return static
     */
    public function setCausality(FHIRAdverseEventCausality $causality = null)
    {
        $this->causality = $causality;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * assess1 | assess2.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getCausalityAssessment()
    {
        return $this->causalityAssessment;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * assess1 | assess2.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $causalityAssessment
     * @return static
     */
    public function setCausalityAssessment(FHIRCodeableConcept $causalityAssessment = null)
    {
        $this->causalityAssessment = $causalityAssessment;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * AdverseEvent.suspectEntity.causalityAuthor.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getCausalityAuthor()
    {
        return $this->causalityAuthor;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * AdverseEvent.suspectEntity.causalityAuthor.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $causalityAuthor
     * @return static
     */
    public function setCausalityAuthor(FHIRReference $causalityAuthor = null)
    {
        $this->causalityAuthor = $causalityAuthor;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * method1 | method2.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getCausalityMethod()
    {
        return $this->causalityMethod;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * method1 | method2.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $causalityMethod
     * @return static
     */
    public function setCausalityMethod(FHIRCodeableConcept $causalityMethod = null)
    {
        $this->causalityMethod = $causalityMethod;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * AdverseEvent.suspectEntity.causalityProductRelatedness.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getCausalityProductRelatedness()
    {
        return $this->causalityProductRelatedness;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * AdverseEvent.suspectEntity.causalityProductRelatedness.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $causalityProductRelatedness
     * @return static
     */
    public function setCausalityProductRelatedness($causalityProductRelatedness = null)
    {
        if (null === $causalityProductRelatedness) {
            $this->causalityProductRelatedness = null;
            return $this;
        }
        if ($causalityProductRelatedness instanceof FHIRString) {
            $this->causalityProductRelatedness = $causalityProductRelatedness;
            return $this;
        }
        $this->causalityProductRelatedness = new FHIRString($causalityProductRelatedness);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * result1 | result2.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getCausalityResult()
    {
        return $this->causalityResult;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * result1 | result2.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $causalityResult
     * @return static
     */
    public function setCausalityResult(FHIRCodeableConcept $causalityResult = null)
    {
        $this->causalityResult = $causalityResult;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the actual instance of what caused the adverse event. May be a
     * substance, medication, medication administration, medication statement or a
     * device.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the actual instance of what caused the adverse event. May be a
     * substance, medication, medication administration, medication statement or a
     * device.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $instance
     * @return static
     */
    public function setInstance(FHIRReference $instance = null)
    {
        $this->instance = $instance;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventSuspectEntity $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventSuspectEntity
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
                throw new \DomainException(sprintf('FHIRAdverseEventSuspectEntity::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRAdverseEventSuspectEntity::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRAdverseEventSuspectEntity;
        } elseif (!is_object($type) || !($type instanceof FHIRAdverseEventSuspectEntity)) {
            throw new \RuntimeException(sprintf(
                'FHIRAdverseEventSuspectEntity::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventSuspectEntity or null, %s seen.',
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
        if (isset($children->causality)) {
            $type->setCausality(FHIRAdverseEventCausality::xmlUnserialize($children->causality));
        }
        if (isset($children->causalityAssessment)) {
            $type->setCausalityAssessment(FHIRCodeableConcept::xmlUnserialize($children->causalityAssessment));
        }
        if (isset($children->causalityAuthor)) {
            $type->setCausalityAuthor(FHIRReference::xmlUnserialize($children->causalityAuthor));
        }
        if (isset($children->causalityMethod)) {
            $type->setCausalityMethod(FHIRCodeableConcept::xmlUnserialize($children->causalityMethod));
        }
        if (isset($attributes->causalityProductRelatedness)) {
            $type->setCausalityProductRelatedness((string)$attributes->causalityProductRelatedness);
        }
        if (isset($children->causalityProductRelatedness)) {
            $type->setCausalityProductRelatedness(FHIRString::xmlUnserialize($children->causalityProductRelatedness));
        }
        if (isset($children->causalityResult)) {
            $type->setCausalityResult(FHIRCodeableConcept::xmlUnserialize($children->causalityResult));
        }
        if (isset($children->instance)) {
            $type->setInstance(FHIRReference::xmlUnserialize($children->instance));
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

        if (null !== ($v = $this->getCausality())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CAUSALITY, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getCausalityAssessment())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CAUSALITY_ASSESSMENT, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getCausalityAuthor())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CAUSALITY_AUTHOR, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getCausalityMethod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CAUSALITY_METHOD, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getCausalityProductRelatedness())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getCausalityResult())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CAUSALITY_RESULT, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getInstance())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_INSTANCE, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getCausality())) {
            $a[self::FIELD_CAUSALITY] = $v;
        }
        if (null !== ($v = $this->getCausalityAssessment())) {
            $a[self::FIELD_CAUSALITY_ASSESSMENT] = $v;
        }
        if (null !== ($v = $this->getCausalityAuthor())) {
            $a[self::FIELD_CAUSALITY_AUTHOR] = $v;
        }
        if (null !== ($v = $this->getCausalityMethod())) {
            $a[self::FIELD_CAUSALITY_METHOD] = $v;
        }
        if (null !== ($v = $this->getCausalityProductRelatedness())) {
            $a[self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS] = $v->getValue();
            $a[self::FIELD_CAUSALITY_PRODUCT_RELATEDNESS_EXT] = $v;
        }
        if (null !== ($v = $this->getCausalityResult())) {
            $a[self::FIELD_CAUSALITY_RESULT] = $v;
        }
        if (null !== ($v = $this->getInstance())) {
            $a[self::FIELD_INSTANCE] = $v;
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