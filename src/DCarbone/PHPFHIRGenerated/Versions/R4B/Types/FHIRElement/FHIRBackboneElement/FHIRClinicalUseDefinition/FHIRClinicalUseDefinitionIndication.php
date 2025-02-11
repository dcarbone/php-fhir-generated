<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRClinicalUseDefinition;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 11th, 2025 15:51+0000
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

use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableReference;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRange;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\VersionConstants;

/**
 * A single issue - either an indication, contraindication, interaction or an
 * undesirable effect for a medicinal product, medication, device or procedure.
 */
class FHIRClinicalUseDefinitionIndication extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_CLINICAL_USE_DEFINITION_DOT_INDICATION;

    /* class_default.php:50 */
    public const FIELD_DISEASE_SYMPTOM_PROCEDURE = 'diseaseSymptomProcedure';
    public const FIELD_DISEASE_STATUS = 'diseaseStatus';
    public const FIELD_COMORBIDITY = 'comorbidity';
    public const FIELD_INTENDED_EFFECT = 'intendedEffect';
    public const FIELD_DURATION_RANGE = 'durationRange';
    public const FIELD_DURATION_STRING = 'durationString';
    public const FIELD_DURATION_STRING_EXT = '_durationString';
    public const FIELD_UNDESIRABLE_EFFECT = 'undesirableEffect';
    public const FIELD_OTHER_THERAPY = 'otherTherapy';

    /* class_default.php:69 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [
    ];

    /* class_default.php:91 */
    private array $_valueXMLLocations = [
        self::FIELD_DURATION_STRING => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:107 */
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

    /* constructor.php:61 */
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

    /* class_default.php:139 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:165 */
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
        if (!isset($this->comorbidity)) {
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
        if ([] === $comorbidity) {
            unset($this->comorbidity);
            return $this;
        }
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
     * @return static
     */
    public function setDurationString(null|string|FHIRStringPrimitive|FHIRString $durationString): self
    {
        if (null === $durationString) {
            unset($this->durationString);
            return $this;
        }
        if (!($durationString instanceof FHIRString)) {
            $durationString = new FHIRString(value: $durationString);
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
        if (!isset($this->undesirableEffect)) {
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
        if ([] === $undesirableEffect) {
            unset($this->undesirableEffect);
            return $this;
        }
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
        if (!isset($this->otherTherapy)) {
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
        if ([] === $otherTherapy) {
            unset($this->otherTherapy);
            return $this;
        }
        $this->otherTherapy = $otherTherapy;
        return $this;
    }

    /* class_default.php:192 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRClinicalUseDefinition\FHIRClinicalUseDefinitionIndication $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRClinicalUseDefinition\FHIRClinicalUseDefinitionIndication
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
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
        foreach ($element->children() as $ce) {
            $cen = $ce->getName();
            if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ID === $cen) {
                $va = $ce->attributes()[FHIRStringPrimitive::FIELD_VALUE] ?? null;
                if (null !== $va) {
                    $type->setId((string)$va);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DISEASE_SYMPTOM_PROCEDURE === $cen) {
                $type->setDiseaseSymptomProcedure(FHIRCodeableReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DISEASE_STATUS === $cen) {
                $type->setDiseaseStatus(FHIRCodeableReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_COMORBIDITY === $cen) {
                $type->addComorbidity(FHIRCodeableReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_INTENDED_EFFECT === $cen) {
                $type->setIntendedEffect(FHIRCodeableReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DURATION_RANGE === $cen) {
                $type->setDurationRange(FHIRRange::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DURATION_STRING === $cen) {
                $type->setDurationString(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_UNDESIRABLE_EFFECT === $cen) {
                $type->addUndesirableEffect(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_OTHER_THERAPY === $cen) {
                $type->addOtherTherapy(FHIRClinicalUseDefinitionOtherTherapy::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DURATION_STRING])) {
            if (isset($type->durationString)) {
                $type->durationString->setValue((string)$attributes[self::FIELD_DURATION_STRING]);
            } else {
                $type->setDurationString((string)$attributes[self::FIELD_DURATION_STRING]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DURATION_STRING, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->durationString) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DURATION_STRING]) {
            $xw->writeAttribute(self::FIELD_DURATION_STRING, $this->durationString->_getValueAsString());
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
        if (isset($this->durationString)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DURATION_STRING]
                || $this->durationString->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DURATION_STRING);
            $this->durationString->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DURATION_STRING]);
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
    }

    /**
     * @param \stdClass $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRClinicalUseDefinition\FHIRClinicalUseDefinitionIndication $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRClinicalUseDefinition\FHIRClinicalUseDefinitionIndication
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
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
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json->diseaseSymptomProcedure) || property_exists($json, self::FIELD_DISEASE_SYMPTOM_PROCEDURE)) {
            if (is_array($json->diseaseSymptomProcedure)) {
                $type->setDiseaseSymptomProcedure(FHIRCodeableReference::jsonUnserialize(reset($json->diseaseSymptomProcedure), $config));
            } else {
                $type->setDiseaseSymptomProcedure(FHIRCodeableReference::jsonUnserialize($json->diseaseSymptomProcedure, $config));
            }
        }
        if (isset($json->diseaseStatus) || property_exists($json, self::FIELD_DISEASE_STATUS)) {
            if (is_array($json->diseaseStatus)) {
                $type->setDiseaseStatus(FHIRCodeableReference::jsonUnserialize(reset($json->diseaseStatus), $config));
            } else {
                $type->setDiseaseStatus(FHIRCodeableReference::jsonUnserialize($json->diseaseStatus, $config));
            }
        }
        if (isset($json->comorbidity) || property_exists($json, self::FIELD_COMORBIDITY)) {
            if (is_object($json->comorbidity)) {
                $vals = [$json->comorbidity];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_COMORBIDITY, true);
            } else {
                $vals = $json->comorbidity;
            }
            foreach($vals as $v) {
                $type->addComorbidity(FHIRCodeableReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->intendedEffect) || property_exists($json, self::FIELD_INTENDED_EFFECT)) {
            if (is_array($json->intendedEffect)) {
                $type->setIntendedEffect(FHIRCodeableReference::jsonUnserialize(reset($json->intendedEffect), $config));
            } else {
                $type->setIntendedEffect(FHIRCodeableReference::jsonUnserialize($json->intendedEffect, $config));
            }
        }
        if (isset($json->durationRange) || property_exists($json, self::FIELD_DURATION_RANGE)) {
            if (is_array($json->durationRange)) {
                $type->setDurationRange(FHIRRange::jsonUnserialize(reset($json->durationRange), $config));
            } else {
                $type->setDurationRange(FHIRRange::jsonUnserialize($json->durationRange, $config));
            }
        }
        if (isset($json->durationString)
            || isset($json->_durationString)
            || property_exists($json, self::FIELD_DURATION_STRING)
            || property_exists($json, self::FIELD_DURATION_STRING_EXT)) {
            $v = $json->_durationString ?? new \stdClass();
            $v->value = $json->durationString ?? null;
            $type->setDurationString(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->undesirableEffect) || property_exists($json, self::FIELD_UNDESIRABLE_EFFECT)) {
            if (is_object($json->undesirableEffect)) {
                $vals = [$json->undesirableEffect];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_UNDESIRABLE_EFFECT, true);
            } else {
                $vals = $json->undesirableEffect;
            }
            foreach($vals as $v) {
                $type->addUndesirableEffect(FHIRReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->otherTherapy) || property_exists($json, self::FIELD_OTHER_THERAPY)) {
            if (is_object($json->otherTherapy)) {
                $vals = [$json->otherTherapy];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_OTHER_THERAPY, true);
            } else {
                $vals = $json->otherTherapy;
            }
            foreach($vals as $v) {
                $type->addOtherTherapy(FHIRClinicalUseDefinitionOtherTherapy::jsonUnserialize($v, $config));
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
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_COMORBIDITY) && 1 === count($this->comorbidity)) {
                $out->comorbidity = $this->comorbidity[0];
            } else {
                $out->comorbidity = $this->comorbidity;
            }
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
            if ($this->durationString->_nonValueFieldDefined()) {
                $ext = $this->durationString->jsonSerialize();
                unset($ext->value);
                $out->_durationString = $ext;
            }
        }
        if (isset($this->undesirableEffect) && [] !== $this->undesirableEffect) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_UNDESIRABLE_EFFECT) && 1 === count($this->undesirableEffect)) {
                $out->undesirableEffect = $this->undesirableEffect[0];
            } else {
                $out->undesirableEffect = $this->undesirableEffect;
            }
        }
        if (isset($this->otherTherapy) && [] !== $this->otherTherapy) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_OTHER_THERAPY) && 1 === count($this->otherTherapy)) {
                $out->otherTherapy = $this->otherTherapy[0];
            } else {
                $out->otherTherapy = $this->otherTherapy;
            }
        }
        return $out;
    }
}