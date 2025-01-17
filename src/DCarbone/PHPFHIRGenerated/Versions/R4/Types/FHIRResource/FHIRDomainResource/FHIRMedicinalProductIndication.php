<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource;

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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
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
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIndication\FHIRMedicinalProductIndicationOtherTherapy;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRPopulation;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRMeta;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResourceContainer;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionConstants;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionTypeMap;

/**
 * Indication for the Medicinal Product.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
class FHIRMedicinalProductIndication extends FHIRDomainResource implements VersionContainedTypeInterface
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_MEDICINAL_PRODUCT_INDICATION;


    public const FIELD_SUBJECT = 'subject';
    public const FIELD_DISEASE_SYMPTOM_PROCEDURE = 'diseaseSymptomProcedure';
    public const FIELD_DISEASE_STATUS = 'diseaseStatus';
    public const FIELD_COMORBIDITY = 'comorbidity';
    public const FIELD_INTENDED_EFFECT = 'intendedEffect';
    public const FIELD_DURATION = 'duration';
    public const FIELD_OTHER_THERAPY = 'otherTherapy';
    public const FIELD_UNDESIRABLE_EFFECT = 'undesirableEffect';
    public const FIELD_POPULATION = 'population';

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The medication for which this is an indication.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference[] 
     */
    protected array $subject;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The disease, symptom or procedure that is the indication for treatment.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $diseaseSymptomProcedure;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The status of the disease or symptom for which the indication applies.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $diseaseStatus;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Comorbidity (concurrent condition) or co-infection as part of the indication.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $comorbidity;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The intended effect, aim or strategy to be achieved by the indication.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $intendedEffect;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Timing or duration information as part of the indication.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity 
     */
    protected FHIRQuantity $duration;
    /**
     * Indication for the Medicinal Product.
     *
     * Information about the use of the medicinal product in relation to other
     * therapies described as part of the indication.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIndication\FHIRMedicinalProductIndicationOtherTherapy[] 
     */
    protected array $otherTherapy;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describe the undesirable effects of the medicinal product.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference[] 
     */
    protected array $undesirableEffect;
    /**
     * A populatioof people with some set of grouping criteria.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The population group to which this applies.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRPopulation[] 
     */
    protected array $population;

    /** Default validation map for fields in type MedicinalProductIndication */
    private const _DEFAULT_VALIDATION_RULES = [];

    /**
     * FHIRMedicinalProductIndication Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRMeta $meta
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUri $implicitRules
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRNarrative $text
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResourceContainer[]|\DCarbone\PHPFHIRGenerated\Versions\R4\VersionContainedTypeInterface[] $contained
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference[] $subject
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $diseaseSymptomProcedure
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $diseaseStatus
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept[] $comorbidity
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $intendedEffect
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity $duration
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIndication\FHIRMedicinalProductIndicationOtherTherapy[] $otherTherapy
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference[] $undesirableEffect
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRPopulation[] $population
     * @param null|string[] $fhirComments
     */
    public function __construct(null|string|FHIRIdPrimitive|FHIRId $id = null,
                                null|FHIRMeta $meta = null,
                                null|string|FHIRUriPrimitive|FHIRUri $implicitRules = null,
                                null|string|FHIRCodePrimitive|FHIRCode $language = null,
                                null|FHIRNarrative $text = null,
                                null|iterable $contained = null,
                                null|iterable $extension = null,
                                null|iterable $modifierExtension = null,
                                null|iterable $subject = null,
                                null|FHIRCodeableConcept $diseaseSymptomProcedure = null,
                                null|FHIRCodeableConcept $diseaseStatus = null,
                                null|iterable $comorbidity = null,
                                null|FHIRCodeableConcept $intendedEffect = null,
                                null|FHIRQuantity $duration = null,
                                null|iterable $otherTherapy = null,
                                null|iterable $undesirableEffect = null,
                                null|iterable $population = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(id: $id,
                            meta: $meta,
                            implicitRules: $implicitRules,
                            language: $language,
                            text: $text,
                            contained: $contained,
                            extension: $extension,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $subject) {
            $this->setSubject(...$subject);
        }
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
        if (null !== $duration) {
            $this->setDuration($duration);
        }
        if (null !== $otherTherapy) {
            $this->setOtherTherapy(...$otherTherapy);
        }
        if (null !== $undesirableEffect) {
            $this->setUndesirableEffect(...$undesirableEffect);
        }
        if (null !== $population) {
            $this->setPopulation(...$population);
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
     * @return string
     */
    public function _getResourceType(): string
    {
        return static::FHIR_TYPE_NAME;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The medication for which this is an indication.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference[]
     */
    public function getSubject(): array
    {
        return $this->subject ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference>
     */
    public function getSubjectIterator(): iterable
    {
        if (!isset($this->subject) || [] === $this->subject) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->subject);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The medication for which this is an indication.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $subject
     * @return static
     */
    public function addSubject(FHIRReference $subject): self
    {
        if (!isset($this->subject)) {
            $this->subject = [];
        }
        $this->subject[] = $subject;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The medication for which this is an indication.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference ...$subject
     * @return static
     */
    public function setSubject(FHIRReference ...$subject): self
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The disease, symptom or procedure that is the indication for treatment.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getDiseaseSymptomProcedure(): null|FHIRCodeableConcept
    {
        return $this->diseaseSymptomProcedure ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The disease, symptom or procedure that is the indication for treatment.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $diseaseSymptomProcedure
     * @return static
     */
    public function setDiseaseSymptomProcedure(null|FHIRCodeableConcept $diseaseSymptomProcedure): self
    {
        if (null === $diseaseSymptomProcedure) {
            unset($this->diseaseSymptomProcedure);
            return $this;
        }
        $this->diseaseSymptomProcedure = $diseaseSymptomProcedure;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The status of the disease or symptom for which the indication applies.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getDiseaseStatus(): null|FHIRCodeableConcept
    {
        return $this->diseaseStatus ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The status of the disease or symptom for which the indication applies.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $diseaseStatus
     * @return static
     */
    public function setDiseaseStatus(null|FHIRCodeableConcept $diseaseStatus): self
    {
        if (null === $diseaseStatus) {
            unset($this->diseaseStatus);
            return $this;
        }
        $this->diseaseStatus = $diseaseStatus;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Comorbidity (concurrent condition) or co-infection as part of the indication.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getComorbidity(): array
    {
        return $this->comorbidity ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getComorbidityIterator(): iterable
    {
        if (!isset($this->comorbidity) || [] === $this->comorbidity) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->comorbidity);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Comorbidity (concurrent condition) or co-infection as part of the indication.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $comorbidity
     * @return static
     */
    public function addComorbidity(FHIRCodeableConcept $comorbidity): self
    {
        if (!isset($this->comorbidity)) {
            $this->comorbidity = [];
        }
        $this->comorbidity[] = $comorbidity;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Comorbidity (concurrent condition) or co-infection as part of the indication.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept ...$comorbidity
     * @return static
     */
    public function setComorbidity(FHIRCodeableConcept ...$comorbidity): self
    {
        $this->comorbidity = $comorbidity;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The intended effect, aim or strategy to be achieved by the indication.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getIntendedEffect(): null|FHIRCodeableConcept
    {
        return $this->intendedEffect ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The intended effect, aim or strategy to be achieved by the indication.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $intendedEffect
     * @return static
     */
    public function setIntendedEffect(null|FHIRCodeableConcept $intendedEffect): self
    {
        if (null === $intendedEffect) {
            unset($this->intendedEffect);
            return $this;
        }
        $this->intendedEffect = $intendedEffect;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Timing or duration information as part of the indication.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity
     */
    public function getDuration(): null|FHIRQuantity
    {
        return $this->duration ?? null;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Timing or duration information as part of the indication.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity $duration
     * @return static
     */
    public function setDuration(null|FHIRQuantity $duration): self
    {
        if (null === $duration) {
            unset($this->duration);
            return $this;
        }
        $this->duration = $duration;
        return $this;
    }

    /**
     * Indication for the Medicinal Product.
     *
     * Information about the use of the medicinal product in relation to other
     * therapies described as part of the indication.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIndication\FHIRMedicinalProductIndicationOtherTherapy[]
     */
    public function getOtherTherapy(): array
    {
        return $this->otherTherapy ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIndication\FHIRMedicinalProductIndicationOtherTherapy>
     */
    public function getOtherTherapyIterator(): iterable
    {
        if (!isset($this->otherTherapy) || [] === $this->otherTherapy) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->otherTherapy);
    }

    /**
     * Indication for the Medicinal Product.
     *
     * Information about the use of the medicinal product in relation to other
     * therapies described as part of the indication.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIndication\FHIRMedicinalProductIndicationOtherTherapy $otherTherapy
     * @return static
     */
    public function addOtherTherapy(FHIRMedicinalProductIndicationOtherTherapy $otherTherapy): self
    {
        if (!isset($this->otherTherapy)) {
            $this->otherTherapy = [];
        }
        $this->otherTherapy[] = $otherTherapy;
        return $this;
    }

    /**
     * Indication for the Medicinal Product.
     *
     * Information about the use of the medicinal product in relation to other
     * therapies described as part of the indication.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIndication\FHIRMedicinalProductIndicationOtherTherapy ...$otherTherapy
     * @return static
     */
    public function setOtherTherapy(FHIRMedicinalProductIndicationOtherTherapy ...$otherTherapy): self
    {
        $this->otherTherapy = $otherTherapy;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describe the undesirable effects of the medicinal product.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference[]
     */
    public function getUndesirableEffect(): array
    {
        return $this->undesirableEffect ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference>
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
     * Describe the undesirable effects of the medicinal product.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference $undesirableEffect
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
     * Describe the undesirable effects of the medicinal product.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRReference ...$undesirableEffect
     * @return static
     */
    public function setUndesirableEffect(FHIRReference ...$undesirableEffect): self
    {
        $this->undesirableEffect = $undesirableEffect;
        return $this;
    }

    /**
     * A populatioof people with some set of grouping criteria.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The population group to which this applies.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRPopulation[]
     */
    public function getPopulation(): array
    {
        return $this->population ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRPopulation>
     */
    public function getPopulationIterator(): iterable
    {
        if (!isset($this->population) || [] === $this->population) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->population);
    }

    /**
     * A populatioof people with some set of grouping criteria.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The population group to which this applies.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRPopulation $population
     * @return static
     */
    public function addPopulation(FHIRPopulation $population): self
    {
        if (!isset($this->population)) {
            $this->population = [];
        }
        $this->population[] = $population;
        return $this;
    }

    /**
     * A populatioof people with some set of grouping criteria.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The population group to which this applies.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRPopulation ...$population
     * @return static
     */
    public function setPopulation(FHIRPopulation ...$population): self
    {
        $this->population = $population;
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
        if (isset($validationRules[self::FIELD_SUBJECT])) {
            $v = $this->getSubject();
            foreach($validationRules[self::FIELD_SUBJECT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SUBJECT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBJECT])) {
                        $errs[self::FIELD_SUBJECT] = [];
                    }
                    $errs[self::FIELD_SUBJECT][$rule] = $err;
                }
            }
        }
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
        if (isset($validationRules[self::FIELD_DURATION])) {
            $v = $this->getDuration();
            foreach($validationRules[self::FIELD_DURATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DURATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DURATION])) {
                        $errs[self::FIELD_DURATION] = [];
                    }
                    $errs[self::FIELD_DURATION][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_POPULATION])) {
            $v = $this->getPopulation();
            foreach($validationRules[self::FIELD_POPULATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_POPULATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_POPULATION])) {
                        $errs[self::FIELD_POPULATION] = [];
                    }
                    $errs[self::FIELD_POPULATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTAINED])) {
            $v = $this->getContained();
            foreach($validationRules[self::FIELD_CONTAINED] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CONTAINED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTAINED])) {
                        $errs[self::FIELD_CONTAINED] = [];
                    }
                    $errs[self::FIELD_CONTAINED][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_META])) {
            $v = $this->getMeta();
            foreach($validationRules[self::FIELD_META] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_META, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_META])) {
                        $errs[self::FIELD_META] = [];
                    }
                    $errs[self::FIELD_META][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IMPLICIT_RULES])) {
            $v = $this->getImplicitRules();
            foreach($validationRules[self::FIELD_IMPLICIT_RULES] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_IMPLICIT_RULES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IMPLICIT_RULES])) {
                        $errs[self::FIELD_IMPLICIT_RULES] = [];
                    }
                    $errs[self::FIELD_IMPLICIT_RULES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LANGUAGE])) {
            $v = $this->getLanguage();
            foreach($validationRules[self::FIELD_LANGUAGE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_LANGUAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LANGUAGE])) {
                        $errs[self::FIELD_LANGUAGE] = [];
                    }
                    $errs[self::FIELD_LANGUAGE][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRMedicinalProductIndication $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRMedicinalProductIndication
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMedicinalProductIndication)) {
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
            if (self::FIELD_ID === $childName) {
                $v = new FHIRId(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setId(FHIRId::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_META === $childName) {
                $v = new FHIRMeta();
                $type->setMeta(FHIRMeta::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_IMPLICIT_RULES === $childName) {
                $v = new FHIRUri(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setImplicitRules(FHIRUri::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_LANGUAGE === $childName) {
                $v = new FHIRCode(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setLanguage(FHIRCode::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TEXT === $childName) {
                $v = new FHIRNarrative();
                $type->setText(FHIRNarrative::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CONTAINED === $childName) {
                foreach ($n->children() as $nn) {
                    /** @var \DCarbone\PHPFHIRGenerated\Versions\R4\VersionContainedTypeInterface $cn */
                    $cn = VersionTypeMap::getContainedTypeClassNameFromXML($nn);
                    $type->addContained($cn::xmlUnserialize($nn, null, $config));
                }
            } else if (self::FIELD_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SUBJECT === $childName) {
                $v = new FHIRReference();
                $type->addSubject(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DISEASE_SYMPTOM_PROCEDURE === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setDiseaseSymptomProcedure(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DISEASE_STATUS === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setDiseaseStatus(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_COMORBIDITY === $childName) {
                $v = new FHIRCodeableConcept();
                $type->addComorbidity(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_INTENDED_EFFECT === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setIntendedEffect(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DURATION === $childName) {
                $v = new FHIRQuantity();
                $type->setDuration(FHIRQuantity::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_OTHER_THERAPY === $childName) {
                $v = new FHIRMedicinalProductIndicationOtherTherapy();
                $type->addOtherTherapy(FHIRMedicinalProductIndicationOtherTherapy::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_UNDESIRABLE_EFFECT === $childName) {
                $v = new FHIRReference();
                $type->addUndesirableEffect(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_POPULATION === $childName) {
                $v = new FHIRPopulation();
                $type->addPopulation(FHIRPopulation::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRId(
                    value: (string)$attributes[self::FIELD_ID],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_IMPLICIT_RULES])) {
            $pt = $type->getImplicitRules();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_IMPLICIT_RULES]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setImplicitRules(new FHIRUri(
                    value: (string)$attributes[self::FIELD_IMPLICIT_RULES],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_LANGUAGE])) {
            $pt = $type->getLanguage();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_LANGUAGE]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setLanguage(new FHIRCode(
                    value: (string)$attributes[self::FIELD_LANGUAGE],
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
            $xw->openRootNode('MedicinalProductIndication', $this->_getSourceXMLNS());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->subject)) {
            foreach ($this->subject as $v) {
                $xw->startElement(self::FIELD_SUBJECT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
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
        if (isset($this->duration)) {
            $xw->startElement(self::FIELD_DURATION);
            $this->duration->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->otherTherapy)) {
            foreach ($this->otherTherapy as $v) {
                $xw->startElement(self::FIELD_OTHER_THERAPY);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->undesirableEffect)) {
            foreach ($this->undesirableEffect as $v) {
                $xw->startElement(self::FIELD_UNDESIRABLE_EFFECT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->population)) {
            foreach ($this->population as $v) {
                $xw->startElement(self::FIELD_POPULATION);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRMedicinalProductIndication $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRMedicinalProductIndication
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMedicinalProductIndication)) {
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
        if (isset($json[self::FIELD_SUBJECT]) || array_key_exists(self::FIELD_SUBJECT, $json)) {
            if (is_array($json[self::FIELD_SUBJECT])) {
                foreach($json[self::FIELD_SUBJECT] as $v) {
                    if ($v instanceof FHIRReference) {
                        $type->addSubject($v);
                    } else {
                        $type->addSubject(new FHIRReference($v));
                    }
                }
            } elseif ($json[self::FIELD_SUBJECT] instanceof FHIRReference) {
                $type->addSubject($json[self::FIELD_SUBJECT]);
            } else {
                $type->addSubject(new FHIRReference($json[self::FIELD_SUBJECT]));
            }
        }
        if (isset($json[self::FIELD_DISEASE_SYMPTOM_PROCEDURE]) || array_key_exists(self::FIELD_DISEASE_SYMPTOM_PROCEDURE, $json)) {
            if ($json[self::FIELD_DISEASE_SYMPTOM_PROCEDURE] instanceof FHIRCodeableConcept) {
                $type->setDiseaseSymptomProcedure($json[self::FIELD_DISEASE_SYMPTOM_PROCEDURE]);
            } else {
                $type->setDiseaseSymptomProcedure(new FHIRCodeableConcept($json[self::FIELD_DISEASE_SYMPTOM_PROCEDURE]));
            }
        }
        if (isset($json[self::FIELD_DISEASE_STATUS]) || array_key_exists(self::FIELD_DISEASE_STATUS, $json)) {
            if ($json[self::FIELD_DISEASE_STATUS] instanceof FHIRCodeableConcept) {
                $type->setDiseaseStatus($json[self::FIELD_DISEASE_STATUS]);
            } else {
                $type->setDiseaseStatus(new FHIRCodeableConcept($json[self::FIELD_DISEASE_STATUS]));
            }
        }
        if (isset($json[self::FIELD_COMORBIDITY]) || array_key_exists(self::FIELD_COMORBIDITY, $json)) {
            if (is_array($json[self::FIELD_COMORBIDITY])) {
                foreach($json[self::FIELD_COMORBIDITY] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $type->addComorbidity($v);
                    } else {
                        $type->addComorbidity(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($json[self::FIELD_COMORBIDITY] instanceof FHIRCodeableConcept) {
                $type->addComorbidity($json[self::FIELD_COMORBIDITY]);
            } else {
                $type->addComorbidity(new FHIRCodeableConcept($json[self::FIELD_COMORBIDITY]));
            }
        }
        if (isset($json[self::FIELD_INTENDED_EFFECT]) || array_key_exists(self::FIELD_INTENDED_EFFECT, $json)) {
            if ($json[self::FIELD_INTENDED_EFFECT] instanceof FHIRCodeableConcept) {
                $type->setIntendedEffect($json[self::FIELD_INTENDED_EFFECT]);
            } else {
                $type->setIntendedEffect(new FHIRCodeableConcept($json[self::FIELD_INTENDED_EFFECT]));
            }
        }
        if (isset($json[self::FIELD_DURATION]) || array_key_exists(self::FIELD_DURATION, $json)) {
            if ($json[self::FIELD_DURATION] instanceof FHIRQuantity) {
                $type->setDuration($json[self::FIELD_DURATION]);
            } else {
                $type->setDuration(new FHIRQuantity($json[self::FIELD_DURATION]));
            }
        }
        if (isset($json[self::FIELD_OTHER_THERAPY]) || array_key_exists(self::FIELD_OTHER_THERAPY, $json)) {
            if (is_array($json[self::FIELD_OTHER_THERAPY])) {
                foreach($json[self::FIELD_OTHER_THERAPY] as $v) {
                    if ($v instanceof FHIRMedicinalProductIndicationOtherTherapy) {
                        $type->addOtherTherapy($v);
                    } else {
                        $type->addOtherTherapy(new FHIRMedicinalProductIndicationOtherTherapy($v));
                    }
                }
            } elseif ($json[self::FIELD_OTHER_THERAPY] instanceof FHIRMedicinalProductIndicationOtherTherapy) {
                $type->addOtherTherapy($json[self::FIELD_OTHER_THERAPY]);
            } else {
                $type->addOtherTherapy(new FHIRMedicinalProductIndicationOtherTherapy($json[self::FIELD_OTHER_THERAPY]));
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
        if (isset($json[self::FIELD_POPULATION]) || array_key_exists(self::FIELD_POPULATION, $json)) {
            if (is_array($json[self::FIELD_POPULATION])) {
                foreach($json[self::FIELD_POPULATION] as $v) {
                    if ($v instanceof FHIRPopulation) {
                        $type->addPopulation($v);
                    } else {
                        $type->addPopulation(new FHIRPopulation($v));
                    }
                }
            } elseif ($json[self::FIELD_POPULATION] instanceof FHIRPopulation) {
                $type->addPopulation($json[self::FIELD_POPULATION]);
            } else {
                $type->addPopulation(new FHIRPopulation($json[self::FIELD_POPULATION]));
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
        if (isset($this->subject) && [] !== $this->subject) {
            $out->subject = $this->subject;
        }
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
        if (isset($this->duration)) {
            $out->duration = $this->duration;
        }
        if (isset($this->otherTherapy) && [] !== $this->otherTherapy) {
            $out->otherTherapy = $this->otherTherapy;
        }
        if (isset($this->undesirableEffect) && [] !== $this->undesirableEffect) {
            $out->undesirableEffect = $this->undesirableEffect;
        }
        if (isset($this->population) && [] !== $this->population) {
            $out->population = $this->population;
        }
        $out->resourceType = $this->_getResourceType();
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