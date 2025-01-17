<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRClinicalUseDefinition;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 17th, 2025 18:09+0000
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
 *   Generated on Sat, May 28, 2022 12:47+1000 for FHIR v4.3.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableReference;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRange;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4B\VersionConstants;

/**
 * A single issue - either an indication, contraindication, interaction or an
 * undesirable effect for a medicinal product, medication, device or procedure.
 */
class FHIRClinicalUseDefinitionIndication extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_CLINICAL_USE_DEFINITION_DOT_INDICATION;


    public const FIELD_DISEASE_SYMPTOM_PROCEDURE = 'diseaseSymptomProcedure';
    public const FIELD_DISEASE_STATUS = 'diseaseStatus';
    public const FIELD_COMORBIDITY = 'comorbidity';
    public const FIELD_INTENDED_EFFECT = 'intendedEffect';
    public const FIELD_DURATION_RANGE = 'durationRange';
    public const FIELD_DURATION_STRING = 'durationString';
    public const FIELD_DURATION_STRING_EXT = '_durationString';
    public const FIELD_UNDESIRABLE_EFFECT = 'undesirableEffect';
    public const FIELD_OTHER_THERAPY = 'otherTherapy';

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The situation that is being documented as an indicaton for this item.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableReference 
     */
    protected FHIRCodeableReference $diseaseSymptomProcedure;
    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The status of the disease or symptom for the indication, for example "chronic"
     * or "metastatic".
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableReference 
     */
    protected FHIRCodeableReference $diseaseStatus;
    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A comorbidity (concurrent condition) or coinfection as part of the indication.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableReference[] 
     */
    protected array $comorbidity;
    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The intended effect, aim or strategy to be achieved.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableReference 
     */
    protected FHIRCodeableReference $intendedEffect;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRange 
     */
    protected FHIRRange $durationRange;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Timing or duration information, that may be associated with use with the
     * indicated condition e.g. Adult patients suffering from myocardial infarction
     * (from a few days until less than 35 days), ischaemic stroke (from 7 days until
     * less than 6 months).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $durationString;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An unwanted side effect or negative outcome that may happen if you use the drug
     * (or other subject of this resource) for this indication.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference[] 
     */
    protected array $undesirableEffect;
    /**
     * A single issue - either an indication, contraindication, interaction or an
     * undesirable effect for a medicinal product, medication, device or procedure.
     *
     * Information about the use of the medicinal product in relation to other
     * therapies described as part of the indication.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRClinicalUseDefinition\FHIRClinicalUseDefinitionOtherTherapy[] 
     */
    protected array $otherTherapy;

    /** Default validation map for fields in type ClinicalUseDefinition.Indication */
    private const _DEFAULT_VALIDATION_RULES = [];

    /**
     * FHIRClinicalUseDefinitionIndication Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableReference $diseaseSymptomProcedure
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableReference $diseaseStatus
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableReference[] $comorbidity
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableReference $intendedEffect
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRange $durationRange
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $durationString
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference[] $undesirableEffect
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRClinicalUseDefinition\FHIRClinicalUseDefinitionOtherTherapy[] $otherTherapy
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRCodeableReference $diseaseSymptomProcedure = null,
                                null|FHIRCodeableReference $diseaseStatus = null,
                                null|iterable $comorbidity = null,
                                null|FHIRCodeableReference $intendedEffect = null,
                                null|FHIRRange $durationRange = null,
                                null|string|FHIRStringPrimitive|FHIRString $durationString = null,
                                null|iterable $undesirableEffect = null,
                                null|iterable $otherTherapy = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $diseaseSymptomProcedure) {
            $this->setDiseaseSymptomProcedure($diseaseSymptomProcedure);
        }
        if (null !== $diseaseStatus) {
            $this->setDiseaseStatus($diseaseStatus);
        }
        if (null !== $comorbidity) {
            $this->setComorbidity(...$comorbidity);
        }
        if (null !== $intendedEffect) {
            $this->setIntendedEffect($intendedEffect);
        }
        if (null !== $durationRange) {
            $this->setDurationRange($durationRange);
        }
        if (null !== $durationString) {
            $this->setDurationString($durationString);
        }
        if (null !== $undesirableEffect) {
            $this->setUndesirableEffect(...$undesirableEffect);
        }
        if (null !== $otherTherapy) {
            $this->setOtherTherapy(...$otherTherapy);
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
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The situation that is being documented as an indicaton for this item.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableReference
     */
    public function getDiseaseSymptomProcedure(): null|FHIRCodeableReference
    {
        return $this->diseaseSymptomProcedure ?? null;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The situation that is being documented as an indicaton for this item.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableReference $diseaseSymptomProcedure
     * @return static
     */
    public function setDiseaseSymptomProcedure(null|FHIRCodeableReference $diseaseSymptomProcedure): self
    {
        if (null === $diseaseSymptomProcedure) {
            unset($this->diseaseSymptomProcedure);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableReference
     */
    public function getDiseaseStatus(): null|FHIRCodeableReference
    {
        return $this->diseaseStatus ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableReference $diseaseStatus
     * @return static
     */
    public function setDiseaseStatus(null|FHIRCodeableReference $diseaseStatus): self
    {
        if (null === $diseaseStatus) {
            unset($this->diseaseStatus);
            return $this;
        }
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableReference[]
     */
    public function getComorbidity(): array
    {
        return $this->comorbidity ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableReference>
     */
    public function getComorbidityIterator(): iterable
    {
        if (!isset($this->comorbidity) || [] === $this->comorbidity) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->comorbidity);
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A comorbidity (concurrent condition) or coinfection as part of the indication.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableReference $comorbidity
     * @return static
     */
    public function addComorbidity(FHIRCodeableReference $comorbidity): self
    {
        if (!isset($this->comorbidity)) {
            $this->comorbidity = [];
        }
        $this->comorbidity[] = $comorbidity;
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableReference ...$comorbidity
     * @return static
     */
    public function setComorbidity(FHIRCodeableReference ...$comorbidity): self
    {
        $this->comorbidity = $comorbidity;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableReference
     */
    public function getIntendedEffect(): null|FHIRCodeableReference
    {
        return $this->intendedEffect ?? null;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The intended effect, aim or strategy to be achieved.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableReference $intendedEffect
     * @return static
     */
    public function setIntendedEffect(null|FHIRCodeableReference $intendedEffect): self
    {
        if (null === $intendedEffect) {
            unset($this->intendedEffect);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRange
     */
    public function getDurationRange(): null|FHIRRange
    {
        return $this->durationRange ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRange $durationRange
     * @return static
     */
    public function setDurationRange(null|FHIRRange $durationRange): self
    {
        if (null === $durationRange) {
            unset($this->durationRange);
            return $this;
        }
        $this->durationRange = $durationRange;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Timing or duration information, that may be associated with use with the
     * indicated condition e.g. Adult patients suffering from myocardial infarction
     * (from a few days until less than 35 days), ischaemic stroke (from 7 days until
     * less than 6 months).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString
     */
    public function getDurationString(): null|FHIRString
    {
        return $this->durationString ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Timing or duration information, that may be associated with use with the
     * indicated condition e.g. Adult patients suffering from myocardial infarction
     * (from a few days until less than 35 days), ischaemic stroke (from 7 days until
     * less than 6 months).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $durationString
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDurationString(null|string|FHIRStringPrimitive|FHIRString $durationString,
                                      null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $durationString) {
            unset($this->durationString);
            return $this;
        }
        if (!($durationString instanceof FHIRString)) {
            $durationString = new FHIRString(value: $durationString);
        }
        if (null !== $valueXMLLocation) {
            $durationString->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $durationString->_getValueXMLLocation()) {
            $durationString->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference[]
     */
    public function getUndesirableEffect(): array
    {
        return $this->undesirableEffect ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference>
     */
    public function getUndesirableEffectIterator(): iterable
    {
        if (!isset($this->undesirableEffect) || [] === $this->undesirableEffect) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->undesirableEffect);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An unwanted side effect or negative outcome that may happen if you use the drug
     * (or other subject of this resource) for this indication.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $undesirableEffect
     * @return static
     */
    public function addUndesirableEffect(FHIRReference $undesirableEffect): self
    {
        if (!isset($this->undesirableEffect)) {
            $this->undesirableEffect = [];
        }
        $this->undesirableEffect[] = $undesirableEffect;
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference ...$undesirableEffect
     * @return static
     */
    public function setUndesirableEffect(FHIRReference ...$undesirableEffect): self
    {
        $this->undesirableEffect = $undesirableEffect;
        return $this;
    }

    /**
     * A single issue - either an indication, contraindication, interaction or an
     * undesirable effect for a medicinal product, medication, device or procedure.
     *
     * Information about the use of the medicinal product in relation to other
     * therapies described as part of the indication.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRClinicalUseDefinition\FHIRClinicalUseDefinitionOtherTherapy[]
     */
    public function getOtherTherapy(): array
    {
        return $this->otherTherapy ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRClinicalUseDefinition\FHIRClinicalUseDefinitionOtherTherapy>
     */
    public function getOtherTherapyIterator(): iterable
    {
        if (!isset($this->otherTherapy) || [] === $this->otherTherapy) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->otherTherapy);
    }

    /**
     * A single issue - either an indication, contraindication, interaction or an
     * undesirable effect for a medicinal product, medication, device or procedure.
     *
     * Information about the use of the medicinal product in relation to other
     * therapies described as part of the indication.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRClinicalUseDefinition\FHIRClinicalUseDefinitionOtherTherapy $otherTherapy
     * @return static
     */
    public function addOtherTherapy(FHIRClinicalUseDefinitionOtherTherapy $otherTherapy): self
    {
        if (!isset($this->otherTherapy)) {
            $this->otherTherapy = [];
        }
        $this->otherTherapy[] = $otherTherapy;
        return $this;
    }

    /**
     * A single issue - either an indication, contraindication, interaction or an
     * undesirable effect for a medicinal product, medication, device or procedure.
     *
     * Information about the use of the medicinal product in relation to other
     * therapies described as part of the indication.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRClinicalUseDefinition\FHIRClinicalUseDefinitionOtherTherapy ...$otherTherapy
     * @return static
     */
    public function setOtherTherapy(FHIRClinicalUseDefinitionOtherTherapy ...$otherTherapy): self
    {
        $this->otherTherapy = $otherTherapy;
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
        if (isset($validationRules[self::FIELD_DISEASE_SYMPTOM_PROCEDURE])) {
            $v = $this->getDiseaseSymptomProcedure();
            foreach($validationRules[self::FIELD_DISEASE_SYMPTOM_PROCEDURE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DISEASE_SYMPTOM_PROCEDURE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DISEASE_STATUS, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_COMORBIDITY, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_INTENDED_EFFECT, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DURATION_RANGE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DURATION_STRING, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_UNDESIRABLE_EFFECT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_UNDESIRABLE_EFFECT])) {
                        $errs[self::FIELD_UNDESIRABLE_EFFECT] = [];
                    }
                    $errs[self::FIELD_UNDESIRABLE_EFFECT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OTHER_THERAPY])) {
            $v = $this->getOtherTherapy();
            foreach($validationRules[self::FIELD_OTHER_THERAPY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_OTHER_THERAPY, $rule, $constraint, $v);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRClinicalUseDefinition\FHIRClinicalUseDefinitionIndication $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRClinicalUseDefinition\FHIRClinicalUseDefinitionIndication
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRClinicalUseDefinitionIndication)) {
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
                $valueAttr = $n->attributes()[FHIRStringPrimitive::FIELD_VALUE] ?? null;
                 if (null !== $valueAttr) {
                    $value = (string)$valueAttr;
                } else if ($n->hasChildren()) {
                    $value = $n->saveXML();
                } else {
                    $value = (string)$n;
                }
                $type->setId($value, ValueXMLLocationEnum::ELEMENT);
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DISEASE_SYMPTOM_PROCEDURE === $childName) {
                $v = new FHIRCodeableReference();
                $type->setDiseaseSymptomProcedure(FHIRCodeableReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DISEASE_STATUS === $childName) {
                $v = new FHIRCodeableReference();
                $type->setDiseaseStatus(FHIRCodeableReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_COMORBIDITY === $childName) {
                $v = new FHIRCodeableReference();
                $type->addComorbidity(FHIRCodeableReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_INTENDED_EFFECT === $childName) {
                $v = new FHIRCodeableReference();
                $type->setIntendedEffect(FHIRCodeableReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DURATION_RANGE === $childName) {
                $v = new FHIRRange();
                $type->setDurationRange(FHIRRange::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DURATION_STRING === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setDurationString(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_UNDESIRABLE_EFFECT === $childName) {
                $v = new FHIRReference();
                $type->addUndesirableEffect(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_OTHER_THERAPY === $childName) {
                $v = new FHIRClinicalUseDefinitionOtherTherapy();
                $type->addOtherTherapy(FHIRClinicalUseDefinitionOtherTherapy::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_ID]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRStringPrimitive(
                    value: (string)$attributes[self::FIELD_ID],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DURATION_STRING])) {
            $pt = $type->getDurationString();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_DURATION_STRING]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDurationString(new FHIRString(
                    value: (string)$attributes[self::FIELD_DURATION_STRING],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
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
            $xw->openRootNode('ClinicalUseDefinitionIndication', $this->_getSourceXMLNS());
        }
        if (isset($this->durationString) && $this->durationString->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DURATION_STRING, $this->durationString->getValue()?->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->diseaseSymptomProcedure)) {
            $xw->startElement(self::FIELD_DISEASE_SYMPTOM_PROCEDURE);
            $this->diseaseSymptomProcedure->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->diseaseStatus)) {
            $xw->startElement(self::FIELD_DISEASE_STATUS);
            $this->diseaseStatus->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->comorbidity)) {
            foreach ($this->comorbidity as $v) {
                $xw->startElement(self::FIELD_COMORBIDITY);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->intendedEffect)) {
            $xw->startElement(self::FIELD_INTENDED_EFFECT);
            $this->intendedEffect->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->durationRange)) {
            $xw->startElement(self::FIELD_DURATION_RANGE);
            $this->durationRange->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->durationString) && $this->durationString->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DURATION_STRING);
            $this->durationString->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->undesirableEffect)) {
            foreach ($this->undesirableEffect as $v) {
                $xw->startElement(self::FIELD_UNDESIRABLE_EFFECT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->otherTherapy)) {
            foreach ($this->otherTherapy as $v) {
                $xw->startElement(self::FIELD_OTHER_THERAPY);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRClinicalUseDefinition\FHIRClinicalUseDefinitionIndication $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRClinicalUseDefinition\FHIRClinicalUseDefinitionIndication
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRClinicalUseDefinitionIndication)) {
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
        if (isset($json[self::FIELD_DISEASE_SYMPTOM_PROCEDURE]) || array_key_exists(self::FIELD_DISEASE_SYMPTOM_PROCEDURE, $json)) {
            if ($json[self::FIELD_DISEASE_SYMPTOM_PROCEDURE] instanceof FHIRCodeableReference) {
                $type->setDiseaseSymptomProcedure($json[self::FIELD_DISEASE_SYMPTOM_PROCEDURE]);
            } else {
                $type->setDiseaseSymptomProcedure(new FHIRCodeableReference($json[self::FIELD_DISEASE_SYMPTOM_PROCEDURE]));
            }
        }
        if (isset($json[self::FIELD_DISEASE_STATUS]) || array_key_exists(self::FIELD_DISEASE_STATUS, $json)) {
            if ($json[self::FIELD_DISEASE_STATUS] instanceof FHIRCodeableReference) {
                $type->setDiseaseStatus($json[self::FIELD_DISEASE_STATUS]);
            } else {
                $type->setDiseaseStatus(new FHIRCodeableReference($json[self::FIELD_DISEASE_STATUS]));
            }
        }
        if (isset($json[self::FIELD_COMORBIDITY]) || array_key_exists(self::FIELD_COMORBIDITY, $json)) {
            if (is_array($json[self::FIELD_COMORBIDITY])) {
                foreach($json[self::FIELD_COMORBIDITY] as $v) {
                    if ($v instanceof FHIRCodeableReference) {
                        $type->addComorbidity($v);
                    } else {
                        $type->addComorbidity(new FHIRCodeableReference($v));
                    }
                }
            } elseif ($json[self::FIELD_COMORBIDITY] instanceof FHIRCodeableReference) {
                $type->addComorbidity($json[self::FIELD_COMORBIDITY]);
            } else {
                $type->addComorbidity(new FHIRCodeableReference($json[self::FIELD_COMORBIDITY]));
            }
        }
        if (isset($json[self::FIELD_INTENDED_EFFECT]) || array_key_exists(self::FIELD_INTENDED_EFFECT, $json)) {
            if ($json[self::FIELD_INTENDED_EFFECT] instanceof FHIRCodeableReference) {
                $type->setIntendedEffect($json[self::FIELD_INTENDED_EFFECT]);
            } else {
                $type->setIntendedEffect(new FHIRCodeableReference($json[self::FIELD_INTENDED_EFFECT]));
            }
        }
        if (isset($json[self::FIELD_DURATION_RANGE]) || array_key_exists(self::FIELD_DURATION_RANGE, $json)) {
            if ($json[self::FIELD_DURATION_RANGE] instanceof FHIRRange) {
                $type->setDurationRange($json[self::FIELD_DURATION_RANGE]);
            } else {
                $type->setDurationRange(new FHIRRange($json[self::FIELD_DURATION_RANGE]));
            }
        }
        if (isset($json[self::FIELD_DURATION_STRING]) || isset($json[self::FIELD_DURATION_STRING_EXT]) || array_key_exists(self::FIELD_DURATION_STRING, $json) || array_key_exists(self::FIELD_DURATION_STRING_EXT, $json)) {
            $value = $json[self::FIELD_DURATION_STRING] ?? null;
            $ext = (isset($json[self::FIELD_DURATION_STRING_EXT]) && is_array($json[self::FIELD_DURATION_STRING_EXT])) ? $json[self::FIELD_DURATION_STRING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setDurationString($value);
                } else if (is_array($value)) {
                    $type->setDurationString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setDurationString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDurationString(new FHIRString($ext));
            } else {
                $type->setDurationString(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_UNDESIRABLE_EFFECT]) || array_key_exists(self::FIELD_UNDESIRABLE_EFFECT, $json)) {
            if (is_array($json[self::FIELD_UNDESIRABLE_EFFECT])) {
                foreach($json[self::FIELD_UNDESIRABLE_EFFECT] as $v) {
                    if ($v instanceof FHIRReference) {
                        $type->addUndesirableEffect($v);
                    } else {
                        $type->addUndesirableEffect(new FHIRReference($v));
                    }
                }
            } elseif ($json[self::FIELD_UNDESIRABLE_EFFECT] instanceof FHIRReference) {
                $type->addUndesirableEffect($json[self::FIELD_UNDESIRABLE_EFFECT]);
            } else {
                $type->addUndesirableEffect(new FHIRReference($json[self::FIELD_UNDESIRABLE_EFFECT]));
            }
        }
        if (isset($json[self::FIELD_OTHER_THERAPY]) || array_key_exists(self::FIELD_OTHER_THERAPY, $json)) {
            if (is_array($json[self::FIELD_OTHER_THERAPY])) {
                foreach($json[self::FIELD_OTHER_THERAPY] as $v) {
                    if ($v instanceof FHIRClinicalUseDefinitionOtherTherapy) {
                        $type->addOtherTherapy($v);
                    } else {
                        $type->addOtherTherapy(new FHIRClinicalUseDefinitionOtherTherapy($v));
                    }
                }
            } elseif ($json[self::FIELD_OTHER_THERAPY] instanceof FHIRClinicalUseDefinitionOtherTherapy) {
                $type->addOtherTherapy($json[self::FIELD_OTHER_THERAPY]);
            } else {
                $type->addOtherTherapy(new FHIRClinicalUseDefinitionOtherTherapy($json[self::FIELD_OTHER_THERAPY]));
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
        if (isset($this->diseaseSymptomProcedure)) {
            $out->diseaseSymptomProcedure = $this->diseaseSymptomProcedure;
        }
        if (isset($this->diseaseStatus)) {
            $out->diseaseStatus = $this->diseaseStatus;
        }
        if (isset($this->comorbidity) && [] !== $this->comorbidity) {
            $out->comorbidity = $this->comorbidity;
        }
        if (isset($this->intendedEffect)) {
            $out->intendedEffect = $this->intendedEffect;
        }
        if (isset($this->durationRange)) {
            $out->durationRange = $this->durationRange;
        }
        if (isset($this->durationString)) {
            if (null !== ($val = $this->durationString->getValue())) {
                $out->durationString = $val;
            }
            $ext = $this->durationString->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_durationString = $ext;
            }
        }
        if (isset($this->undesirableEffect) && [] !== $this->undesirableEffect) {
            $out->undesirableEffect = $this->undesirableEffect;
        }
        if (isset($this->otherTherapy) && [] !== $this->otherTherapy) {
            $out->otherTherapy = $this->otherTherapy;
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