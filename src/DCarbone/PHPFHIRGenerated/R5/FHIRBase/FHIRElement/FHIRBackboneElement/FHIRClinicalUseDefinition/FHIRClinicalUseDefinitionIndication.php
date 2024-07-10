<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClinicalUseDefinition;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: July 10th, 2024 03:24+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2024 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExpression;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRange;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter;

/**
 * A single issue - either an indication, contraindication, interaction or an
 * undesirable effect for a medicinal product, medication, device or procedure.
 *
 * Class FHIRClinicalUseDefinitionIndication
 * @package \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClinicalUseDefinition
 */
class FHIRClinicalUseDefinitionIndication extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CLINICAL_USE_DEFINITION_DOT_INDICATION;

    const FIELD_DISEASE_SYMPTOM_PROCEDURE = 'diseaseSymptomProcedure';
    const FIELD_DISEASE_STATUS = 'diseaseStatus';
    const FIELD_COMORBIDITY = 'comorbidity';
    const FIELD_INTENDED_EFFECT = 'intendedEffect';
    const FIELD_DURATION_RANGE = 'durationRange';
    const FIELD_DURATION_STRING = 'durationString';
    const FIELD_DURATION_STRING_EXT = '_durationString';
    const FIELD_UNDESIRABLE_EFFECT = 'undesirableEffect';
    const FIELD_APPLICABILITY = 'applicability';
    const FIELD_OTHER_THERAPY = 'otherTherapy';

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The situation that is being documented as an indicaton for this item.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference
     */
    protected null|FHIRCodeableReference $diseaseSymptomProcedure = null;
    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The status of the disease or symptom for the indication, for example "chronic"
     * or "metastatic".
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference
     */
    protected null|FHIRCodeableReference $diseaseStatus = null;
    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A comorbidity (concurrent condition) or coinfection as part of the indication.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference[]
     */
    protected null|array $comorbidity = [];
    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The intended effect, aim or strategy to be achieved.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference
     */
    protected null|FHIRCodeableReference $intendedEffect = null;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Timing or duration information, that may be associated with use with the
     * indicated condition e.g. Adult patients suffering from myocardial infarction
     * (from a few days until less than 35 days), ischaemic stroke (from 7 days until
     * less than 6 months).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRange
     */
    protected null|FHIRRange $durationRange = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Timing or duration information, that may be associated with use with the
     * indicated condition e.g. Adult patients suffering from myocardial infarction
     * (from a few days until less than 35 days), ischaemic stroke (from 7 days until
     * less than 6 months).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $durationString = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An unwanted side effect or negative outcome that may happen if you use the drug
     * (or other subject of this resource) for this indication.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    protected null|array $undesirableEffect = [];
    /**
     * A expression that is evaluated in a specified context and returns a value. The
     * context of use of the expression must specify the context in which the
     * expression is evaluated, and how the result of the expression is used.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An expression that returns true or false, indicating whether the indication is
     * applicable or not, after having applied its other elements.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExpression
     */
    protected null|FHIRExpression $applicability = null;
    /**
     * A single issue - either an indication, contraindication, interaction or an
     * undesirable effect for a medicinal product, medication, device or procedure.
     *
     * Information about the use of the medicinal product in relation to other
     * therapies described as part of the indication.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClinicalUseDefinition\FHIRClinicalUseDefinitionOtherTherapy[]
     */
    protected null|array $otherTherapy = [];

    /**
     * Validation map for fields in type ClinicalUseDefinition.Indication
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /** @var array */
    private array $_primitiveXmlLocations = [];

    /**
     * FHIRClinicalUseDefinitionIndication Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_DISEASE_SYMPTOM_PROCEDURE, $data)) {
            if ($data[self::FIELD_DISEASE_SYMPTOM_PROCEDURE] instanceof FHIRCodeableReference) {
                $this->setDiseaseSymptomProcedure($data[self::FIELD_DISEASE_SYMPTOM_PROCEDURE]);
            } else {
                $this->setDiseaseSymptomProcedure(new FHIRCodeableReference($data[self::FIELD_DISEASE_SYMPTOM_PROCEDURE]));
            }
        }
        if (array_key_exists(self::FIELD_DISEASE_STATUS, $data)) {
            if ($data[self::FIELD_DISEASE_STATUS] instanceof FHIRCodeableReference) {
                $this->setDiseaseStatus($data[self::FIELD_DISEASE_STATUS]);
            } else {
                $this->setDiseaseStatus(new FHIRCodeableReference($data[self::FIELD_DISEASE_STATUS]));
            }
        }
        if (array_key_exists(self::FIELD_COMORBIDITY, $data)) {
            if (is_array($data[self::FIELD_COMORBIDITY])) {
                foreach($data[self::FIELD_COMORBIDITY] as $v) {
                    if ($v instanceof FHIRCodeableReference) {
                        $this->addComorbidity($v);
                    } else {
                        $this->addComorbidity(new FHIRCodeableReference($v));
                    }
                }
            } elseif ($data[self::FIELD_COMORBIDITY] instanceof FHIRCodeableReference) {
                $this->addComorbidity($data[self::FIELD_COMORBIDITY]);
            } else {
                $this->addComorbidity(new FHIRCodeableReference($data[self::FIELD_COMORBIDITY]));
            }
        }
        if (array_key_exists(self::FIELD_INTENDED_EFFECT, $data)) {
            if ($data[self::FIELD_INTENDED_EFFECT] instanceof FHIRCodeableReference) {
                $this->setIntendedEffect($data[self::FIELD_INTENDED_EFFECT]);
            } else {
                $this->setIntendedEffect(new FHIRCodeableReference($data[self::FIELD_INTENDED_EFFECT]));
            }
        }
        if (array_key_exists(self::FIELD_DURATION_RANGE, $data)) {
            if ($data[self::FIELD_DURATION_RANGE] instanceof FHIRRange) {
                $this->setDurationRange($data[self::FIELD_DURATION_RANGE]);
            } else {
                $this->setDurationRange(new FHIRRange($data[self::FIELD_DURATION_RANGE]));
            }
        }
        if (array_key_exists(self::FIELD_DURATION_STRING, $data) || array_key_exists(self::FIELD_DURATION_STRING_EXT, $data)) {
            $value = $data[self::FIELD_DURATION_STRING] ?? null;
            $ext = (isset($data[self::FIELD_DURATION_STRING_EXT]) && is_array($data[self::FIELD_DURATION_STRING_EXT])) ? $data[self::FIELD_DURATION_STRING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setDurationString($value);
                } else if (is_array($value)) {
                    $this->setDurationString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setDurationString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDurationString(new FHIRString($ext));
            } else {
                $this->setDurationString(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_UNDESIRABLE_EFFECT, $data)) {
            if (is_array($data[self::FIELD_UNDESIRABLE_EFFECT])) {
                foreach($data[self::FIELD_UNDESIRABLE_EFFECT] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addUndesirableEffect($v);
                    } else {
                        $this->addUndesirableEffect(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_UNDESIRABLE_EFFECT] instanceof FHIRReference) {
                $this->addUndesirableEffect($data[self::FIELD_UNDESIRABLE_EFFECT]);
            } else {
                $this->addUndesirableEffect(new FHIRReference($data[self::FIELD_UNDESIRABLE_EFFECT]));
            }
        }
        if (array_key_exists(self::FIELD_APPLICABILITY, $data)) {
            if ($data[self::FIELD_APPLICABILITY] instanceof FHIRExpression) {
                $this->setApplicability($data[self::FIELD_APPLICABILITY]);
            } else {
                $this->setApplicability(new FHIRExpression($data[self::FIELD_APPLICABILITY]));
            }
        }
        if (array_key_exists(self::FIELD_OTHER_THERAPY, $data)) {
            if (is_array($data[self::FIELD_OTHER_THERAPY])) {
                foreach($data[self::FIELD_OTHER_THERAPY] as $v) {
                    if ($v instanceof FHIRClinicalUseDefinitionOtherTherapy) {
                        $this->addOtherTherapy($v);
                    } else {
                        $this->addOtherTherapy(new FHIRClinicalUseDefinitionOtherTherapy($v));
                    }
                }
            } elseif ($data[self::FIELD_OTHER_THERAPY] instanceof FHIRClinicalUseDefinitionOtherTherapy) {
                $this->addOtherTherapy($data[self::FIELD_OTHER_THERAPY]);
            } else {
                $this->addOtherTherapy(new FHIRClinicalUseDefinitionOtherTherapy($data[self::FIELD_OTHER_THERAPY]));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFhirTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The situation that is being documented as an indicaton for this item.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference
     */
    public function getDiseaseSymptomProcedure(): null|FHIRCodeableReference
    {
        return $this->diseaseSymptomProcedure;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The situation that is being documented as an indicaton for this item.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference $diseaseSymptomProcedure
     * @return static
     */
    public function setDiseaseSymptomProcedure(null|FHIRCodeableReference $diseaseSymptomProcedure = null): self
    {
        if (null === $diseaseSymptomProcedure) {
            $diseaseSymptomProcedure = new FHIRCodeableReference();
        }
        $this->_trackValueSet($this->diseaseSymptomProcedure, $diseaseSymptomProcedure);
        $this->diseaseSymptomProcedure = $diseaseSymptomProcedure;
        return $this;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The status of the disease or symptom for the indication, for example "chronic"
     * or "metastatic".
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference
     */
    public function getDiseaseStatus(): null|FHIRCodeableReference
    {
        return $this->diseaseStatus;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The status of the disease or symptom for the indication, for example "chronic"
     * or "metastatic".
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference $diseaseStatus
     * @return static
     */
    public function setDiseaseStatus(null|FHIRCodeableReference $diseaseStatus = null): self
    {
        if (null === $diseaseStatus) {
            $diseaseStatus = new FHIRCodeableReference();
        }
        $this->_trackValueSet($this->diseaseStatus, $diseaseStatus);
        $this->diseaseStatus = $diseaseStatus;
        return $this;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A comorbidity (concurrent condition) or coinfection as part of the indication.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference[]
     */
    public function getComorbidity(): null|array
    {
        return $this->comorbidity;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A comorbidity (concurrent condition) or coinfection as part of the indication.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference $comorbidity
     * @return static
     */
    public function addComorbidity(null|FHIRCodeableReference $comorbidity = null): self
    {
        if (null === $comorbidity) {
            $comorbidity = new FHIRCodeableReference();
        }
        $this->_trackValueAdded();
        $this->comorbidity[] = $comorbidity;
        return $this;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The intended effect, aim or strategy to be achieved.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference
     */
    public function getIntendedEffect(): null|FHIRCodeableReference
    {
        return $this->intendedEffect;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The intended effect, aim or strategy to be achieved.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableReference $intendedEffect
     * @return static
     */
    public function setIntendedEffect(null|FHIRCodeableReference $intendedEffect = null): self
    {
        if (null === $intendedEffect) {
            $intendedEffect = new FHIRCodeableReference();
        }
        $this->_trackValueSet($this->intendedEffect, $intendedEffect);
        $this->intendedEffect = $intendedEffect;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Timing or duration information, that may be associated with use with the
     * indicated condition e.g. Adult patients suffering from myocardial infarction
     * (from a few days until less than 35 days), ischaemic stroke (from 7 days until
     * less than 6 months).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRange
     */
    public function getDurationRange(): null|FHIRRange
    {
        return $this->durationRange;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Timing or duration information, that may be associated with use with the
     * indicated condition e.g. Adult patients suffering from myocardial infarction
     * (from a few days until less than 35 days), ischaemic stroke (from 7 days until
     * less than 6 months).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRRange $durationRange
     * @return static
     */
    public function setDurationRange(null|FHIRRange $durationRange = null): self
    {
        if (null === $durationRange) {
            $durationRange = new FHIRRange();
        }
        $this->_trackValueSet($this->durationRange, $durationRange);
        $this->durationRange = $durationRange;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Timing or duration information, that may be associated with use with the
     * indicated condition e.g. Adult patients suffering from myocardial infarction
     * (from a few days until less than 35 days), ischaemic stroke (from 7 days until
     * less than 6 months).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getDurationString(): null|FHIRString
    {
        return $this->durationString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Timing or duration information, that may be associated with use with the
     * indicated condition e.g. Adult patients suffering from myocardial infarction
     * (from a few days until less than 35 days), ischaemic stroke (from 7 days until
     * less than 6 months).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString $durationString
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDurationString(null|string|FHIRStringPrimitive|FHIRString $durationString = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $durationString && !($durationString instanceof FHIRString)) {
            $durationString = new FHIRString($durationString);
        }
        $this->_trackValueSet($this->durationString, $durationString);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DURATION_STRING])) {
            $this->_primitiveXmlLocations[self::FIELD_DURATION_STRING] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DURATION_STRING][0] = $xmlLocation;
        $this->durationString = $durationString;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An unwanted side effect or negative outcome that may happen if you use the drug
     * (or other subject of this resource) for this indication.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getUndesirableEffect(): null|array
    {
        return $this->undesirableEffect;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An unwanted side effect or negative outcome that may happen if you use the drug
     * (or other subject of this resource) for this indication.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $undesirableEffect
     * @return static
     */
    public function addUndesirableEffect(null|FHIRReference $undesirableEffect = null): self
    {
        if (null === $undesirableEffect) {
            $undesirableEffect = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->undesirableEffect[] = $undesirableEffect;
        return $this;
    }

    /**
     * A expression that is evaluated in a specified context and returns a value. The
     * context of use of the expression must specify the context in which the
     * expression is evaluated, and how the result of the expression is used.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An expression that returns true or false, indicating whether the indication is
     * applicable or not, after having applied its other elements.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExpression
     */
    public function getApplicability(): null|FHIRExpression
    {
        return $this->applicability;
    }

    /**
     * A expression that is evaluated in a specified context and returns a value. The
     * context of use of the expression must specify the context in which the
     * expression is evaluated, and how the result of the expression is used.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An expression that returns true or false, indicating whether the indication is
     * applicable or not, after having applied its other elements.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExpression $applicability
     * @return static
     */
    public function setApplicability(null|FHIRExpression $applicability = null): self
    {
        if (null === $applicability) {
            $applicability = new FHIRExpression();
        }
        $this->_trackValueSet($this->applicability, $applicability);
        $this->applicability = $applicability;
        return $this;
    }

    /**
     * A single issue - either an indication, contraindication, interaction or an
     * undesirable effect for a medicinal product, medication, device or procedure.
     *
     * Information about the use of the medicinal product in relation to other
     * therapies described as part of the indication.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClinicalUseDefinition\FHIRClinicalUseDefinitionOtherTherapy[]
     */
    public function getOtherTherapy(): null|array
    {
        return $this->otherTherapy;
    }

    /**
     * A single issue - either an indication, contraindication, interaction or an
     * undesirable effect for a medicinal product, medication, device or procedure.
     *
     * Information about the use of the medicinal product in relation to other
     * therapies described as part of the indication.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClinicalUseDefinition\FHIRClinicalUseDefinitionOtherTherapy $otherTherapy
     * @return static
     */
    public function addOtherTherapy(null|FHIRClinicalUseDefinitionOtherTherapy $otherTherapy = null): self
    {
        if (null === $otherTherapy) {
            $otherTherapy = new FHIRClinicalUseDefinitionOtherTherapy();
        }
        $this->_trackValueAdded();
        $this->otherTherapy[] = $otherTherapy;
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
        return self::_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getDiseaseSymptomProcedure())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DISEASE_SYMPTOM_PROCEDURE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDiseaseStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DISEASE_STATUS] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getComorbidity())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_COMORBIDITY, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getIntendedEffect())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INTENDED_EFFECT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDurationRange())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DURATION_RANGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDurationString())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DURATION_STRING] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getUndesirableEffect())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_UNDESIRABLE_EFFECT, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getApplicability())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_APPLICABILITY] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getOtherTherapy())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_OTHER_THERAPY, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DISEASE_SYMPTOM_PROCEDURE])) {
            $v = $this->getDiseaseSymptomProcedure();
            foreach($validationRules[self::FIELD_DISEASE_SYMPTOM_PROCEDURE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLINICAL_USE_DEFINITION_DOT_INDICATION, self::FIELD_DISEASE_SYMPTOM_PROCEDURE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DISEASE_SYMPTOM_PROCEDURE])) {
                        $errs[self::FIELD_DISEASE_SYMPTOM_PROCEDURE] = [];
                    }
                    $errs[self::FIELD_DISEASE_SYMPTOM_PROCEDURE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DISEASE_STATUS])) {
            $v = $this->getDiseaseStatus();
            foreach($validationRules[self::FIELD_DISEASE_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLINICAL_USE_DEFINITION_DOT_INDICATION, self::FIELD_DISEASE_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DISEASE_STATUS])) {
                        $errs[self::FIELD_DISEASE_STATUS] = [];
                    }
                    $errs[self::FIELD_DISEASE_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COMORBIDITY])) {
            $v = $this->getComorbidity();
            foreach($validationRules[self::FIELD_COMORBIDITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLINICAL_USE_DEFINITION_DOT_INDICATION, self::FIELD_COMORBIDITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COMORBIDITY])) {
                        $errs[self::FIELD_COMORBIDITY] = [];
                    }
                    $errs[self::FIELD_COMORBIDITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INTENDED_EFFECT])) {
            $v = $this->getIntendedEffect();
            foreach($validationRules[self::FIELD_INTENDED_EFFECT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLINICAL_USE_DEFINITION_DOT_INDICATION, self::FIELD_INTENDED_EFFECT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INTENDED_EFFECT])) {
                        $errs[self::FIELD_INTENDED_EFFECT] = [];
                    }
                    $errs[self::FIELD_INTENDED_EFFECT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DURATION_RANGE])) {
            $v = $this->getDurationRange();
            foreach($validationRules[self::FIELD_DURATION_RANGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLINICAL_USE_DEFINITION_DOT_INDICATION, self::FIELD_DURATION_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DURATION_RANGE])) {
                        $errs[self::FIELD_DURATION_RANGE] = [];
                    }
                    $errs[self::FIELD_DURATION_RANGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DURATION_STRING])) {
            $v = $this->getDurationString();
            foreach($validationRules[self::FIELD_DURATION_STRING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLINICAL_USE_DEFINITION_DOT_INDICATION, self::FIELD_DURATION_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DURATION_STRING])) {
                        $errs[self::FIELD_DURATION_STRING] = [];
                    }
                    $errs[self::FIELD_DURATION_STRING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_UNDESIRABLE_EFFECT])) {
            $v = $this->getUndesirableEffect();
            foreach($validationRules[self::FIELD_UNDESIRABLE_EFFECT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLINICAL_USE_DEFINITION_DOT_INDICATION, self::FIELD_UNDESIRABLE_EFFECT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_UNDESIRABLE_EFFECT])) {
                        $errs[self::FIELD_UNDESIRABLE_EFFECT] = [];
                    }
                    $errs[self::FIELD_UNDESIRABLE_EFFECT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_APPLICABILITY])) {
            $v = $this->getApplicability();
            foreach($validationRules[self::FIELD_APPLICABILITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLINICAL_USE_DEFINITION_DOT_INDICATION, self::FIELD_APPLICABILITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_APPLICABILITY])) {
                        $errs[self::FIELD_APPLICABILITY] = [];
                    }
                    $errs[self::FIELD_APPLICABILITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OTHER_THERAPY])) {
            $v = $this->getOtherTherapy();
            foreach($validationRules[self::FIELD_OTHER_THERAPY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLINICAL_USE_DEFINITION_DOT_INDICATION, self::FIELD_OTHER_THERAPY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OTHER_THERAPY])) {
                        $errs[self::FIELD_OTHER_THERAPY] = [];
                    }
                    $errs[self::FIELD_OTHER_THERAPY][$rule] = $err;
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
     * @param null|string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClinicalUseDefinition\FHIRClinicalUseDefinitionIndication $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRClinicalUseDefinition\FHIRClinicalUseDefinitionIndication
     */
    public static function xmlUnserialize(null|string|\SimpleXMLElement $element, null|PHPFHIRTypeInterface $type = null, null|int|PHPFHIRConfig $config = null): null|self
    {
        if (null === $element) {
            return null;
        }
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null === $type) {
            $type = new static(null);
        } else if (!($type instanceof FHIRClinicalUseDefinitionIndication)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXmlns((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_DISEASE_SYMPTOM_PROCEDURE === $childName) {
                $type->setDiseaseSymptomProcedure(FHIRCodeableReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DISEASE_STATUS === $childName) {
                $type->setDiseaseStatus(FHIRCodeableReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_COMORBIDITY === $childName) {
                $type->addComorbidity(FHIRCodeableReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_INTENDED_EFFECT === $childName) {
                $type->setIntendedEffect(FHIRCodeableReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DURATION_RANGE === $childName) {
                $type->setDurationRange(FHIRRange::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DURATION_STRING === $childName) {
                $type->setDurationString(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_UNDESIRABLE_EFFECT === $childName) {
                $type->addUndesirableEffect(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_APPLICABILITY === $childName) {
                $type->setApplicability(FHIRExpression::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_OTHER_THERAPY === $childName) {
                $type->addOtherTherapy(FHIRClinicalUseDefinitionOtherTherapy::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_DURATION_STRING])) {
            $pt = $type->getDurationString();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DURATION_STRING], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDurationString((string)$attributes[self::FIELD_DURATION_STRING], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter
     */
    public function xmlSerialize(null|PHPFHIRXmlWriter $xw = null, null|int|PHPFHIRConfig $config = null): PHPFHIRXmlWriter
    {
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (null === $xw) {
            $xw = new PHPFHIRXmlWriter();
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $openedRoot = true;
            $xw->openRootNode($config, 'ClinicalUseDefinitionIndication', $this->_getSourceXmlns());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DURATION_STRING] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDurationString())) {
            $xw->writeAttribute(self::FIELD_DURATION_STRING, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (null !== ($v = $this->getDiseaseSymptomProcedure())) {
            $xw->startElement(self::FIELD_DISEASE_SYMPTOM_PROCEDURE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDiseaseStatus())) {
            $xw->startElement(self::FIELD_DISEASE_STATUS);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getComorbidity() as $v) {
            $xw->startElement(self::FIELD_COMORBIDITY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getIntendedEffect())) {
            $xw->startElement(self::FIELD_INTENDED_EFFECT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDurationRange())) {
            $xw->startElement(self::FIELD_DURATION_RANGE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DURATION_STRING] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDurationString())) {
            $xw->startElement(self::FIELD_DURATION_STRING);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getUndesirableEffect() as $v) {
            $xw->startElement(self::FIELD_UNDESIRABLE_EFFECT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getApplicability())) {
            $xw->startElement(self::FIELD_APPLICABILITY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getOtherTherapy() as $v) {
            $xw->startElement(self::FIELD_OTHER_THERAPY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($openedRoot) && $openedRoot) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (null !== ($v = $this->getDiseaseSymptomProcedure())) {
            $out->{self::FIELD_DISEASE_SYMPTOM_PROCEDURE} = $v;
        }
        if (null !== ($v = $this->getDiseaseStatus())) {
            $out->{self::FIELD_DISEASE_STATUS} = $v;
        }
        if ([] !== ($vs = $this->getComorbidity())) {
            $out->{self::FIELD_COMORBIDITY} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_COMORBIDITY}[] = $v;
            }
        }
        if (null !== ($v = $this->getIntendedEffect())) {
            $out->{self::FIELD_INTENDED_EFFECT} = $v;
        }
        if (null !== ($v = $this->getDurationRange())) {
            $out->{self::FIELD_DURATION_RANGE} = $v;
        }
        if (null !== ($v = $this->getDurationString())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DURATION_STRING} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DURATION_STRING_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getUndesirableEffect())) {
            $out->{self::FIELD_UNDESIRABLE_EFFECT} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_UNDESIRABLE_EFFECT}[] = $v;
            }
        }
        if (null !== ($v = $this->getApplicability())) {
            $out->{self::FIELD_APPLICABILITY} = $v;
        }
        if ([] !== ($vs = $this->getOtherTherapy())) {
            $out->{self::FIELD_OTHER_THERAPY} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_OTHER_THERAPY}[] = $v;
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