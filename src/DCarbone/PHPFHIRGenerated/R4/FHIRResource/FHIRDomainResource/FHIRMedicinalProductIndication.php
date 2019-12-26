<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:44+0000
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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIndication\FHIRMedicinalProductIndicationOtherTherapy;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRPopulation;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * Indication for the Medicinal Product.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRMedicinalProductIndication
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource
 */
class FHIRMedicinalProductIndication extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_INDICATION;
    const FIELD_COMORBIDITY = 'comorbidity';
    const FIELD_DISEASE_STATUS = 'diseaseStatus';
    const FIELD_DISEASE_SYMPTOM_PROCEDURE = 'diseaseSymptomProcedure';
    const FIELD_DURATION = 'duration';
    const FIELD_INTENDED_EFFECT = 'intendedEffect';
    const FIELD_OTHER_THERAPY = 'otherTherapy';
    const FIELD_POPULATION = 'population';
    const FIELD_SUBJECT = 'subject';
    const FIELD_UNDESIRABLE_EFFECT = 'undesirableEffect';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Comorbidity (concurrent condition) or co-infection as part of the indication.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected $comorbidity = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The status of the disease or symptom for which the indication applies.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $diseaseStatus = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The disease, symptom or procedure that is the indication for treatment.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $diseaseSymptomProcedure = null;

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Timing or duration information as part of the indication.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    protected $duration = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The intended effect, aim or strategy to be achieved by the indication.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $intendedEffect = null;

    /**
     * Indication for the Medicinal Product.
     *
     * Information about the use of the medicinal product in relation to other
     * therapies described as part of the indication.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIndication\FHIRMedicinalProductIndicationOtherTherapy[]
     */
    protected $otherTherapy = [];

    /**
     * A populatioof people with some set of grouping criteria.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The population group to which this applies.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRPopulation[]
     */
    protected $population = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The medication for which this is an indication.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $subject = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describe the undesirable effects of the medicinal product.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $undesirableEffect = [];

    /**
     * Validation map for fields in type MedicinalProductIndication
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRMedicinalProductIndication Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedicinalProductIndication::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_COMORBIDITY])) {
            if (is_array($data[self::FIELD_COMORBIDITY])) {
                foreach($data[self::FIELD_COMORBIDITY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addComorbidity($v);
                    } else {
                        $this->addComorbidity(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_COMORBIDITY] instanceof FHIRCodeableConcept) {
                $this->addComorbidity($data[self::FIELD_COMORBIDITY]);
            } else {
                $this->addComorbidity(new FHIRCodeableConcept($data[self::FIELD_COMORBIDITY]));
            }
        }
        if (isset($data[self::FIELD_DISEASE_STATUS])) {
            if ($data[self::FIELD_DISEASE_STATUS] instanceof FHIRCodeableConcept) {
                $this->setDiseaseStatus($data[self::FIELD_DISEASE_STATUS]);
            } else {
                $this->setDiseaseStatus(new FHIRCodeableConcept($data[self::FIELD_DISEASE_STATUS]));
            }
        }
        if (isset($data[self::FIELD_DISEASE_SYMPTOM_PROCEDURE])) {
            if ($data[self::FIELD_DISEASE_SYMPTOM_PROCEDURE] instanceof FHIRCodeableConcept) {
                $this->setDiseaseSymptomProcedure($data[self::FIELD_DISEASE_SYMPTOM_PROCEDURE]);
            } else {
                $this->setDiseaseSymptomProcedure(new FHIRCodeableConcept($data[self::FIELD_DISEASE_SYMPTOM_PROCEDURE]));
            }
        }
        if (isset($data[self::FIELD_DURATION])) {
            if ($data[self::FIELD_DURATION] instanceof FHIRQuantity) {
                $this->setDuration($data[self::FIELD_DURATION]);
            } else {
                $this->setDuration(new FHIRQuantity($data[self::FIELD_DURATION]));
            }
        }
        if (isset($data[self::FIELD_INTENDED_EFFECT])) {
            if ($data[self::FIELD_INTENDED_EFFECT] instanceof FHIRCodeableConcept) {
                $this->setIntendedEffect($data[self::FIELD_INTENDED_EFFECT]);
            } else {
                $this->setIntendedEffect(new FHIRCodeableConcept($data[self::FIELD_INTENDED_EFFECT]));
            }
        }
        if (isset($data[self::FIELD_OTHER_THERAPY])) {
            if (is_array($data[self::FIELD_OTHER_THERAPY])) {
                foreach($data[self::FIELD_OTHER_THERAPY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRMedicinalProductIndicationOtherTherapy) {
                        $this->addOtherTherapy($v);
                    } else {
                        $this->addOtherTherapy(new FHIRMedicinalProductIndicationOtherTherapy($v));
                    }
                }
            } else if ($data[self::FIELD_OTHER_THERAPY] instanceof FHIRMedicinalProductIndicationOtherTherapy) {
                $this->addOtherTherapy($data[self::FIELD_OTHER_THERAPY]);
            } else {
                $this->addOtherTherapy(new FHIRMedicinalProductIndicationOtherTherapy($data[self::FIELD_OTHER_THERAPY]));
            }
        }
        if (isset($data[self::FIELD_POPULATION])) {
            if (is_array($data[self::FIELD_POPULATION])) {
                foreach($data[self::FIELD_POPULATION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRPopulation) {
                        $this->addPopulation($v);
                    } else {
                        $this->addPopulation(new FHIRPopulation($v));
                    }
                }
            } else if ($data[self::FIELD_POPULATION] instanceof FHIRPopulation) {
                $this->addPopulation($data[self::FIELD_POPULATION]);
            } else {
                $this->addPopulation(new FHIRPopulation($data[self::FIELD_POPULATION]));
            }
        }
        if (isset($data[self::FIELD_SUBJECT])) {
            if (is_array($data[self::FIELD_SUBJECT])) {
                foreach($data[self::FIELD_SUBJECT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addSubject($v);
                    } else {
                        $this->addSubject(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_SUBJECT] instanceof FHIRReference) {
                $this->addSubject($data[self::FIELD_SUBJECT]);
            } else {
                $this->addSubject(new FHIRReference($data[self::FIELD_SUBJECT]));
            }
        }
        if (isset($data[self::FIELD_UNDESIRABLE_EFFECT])) {
            if (is_array($data[self::FIELD_UNDESIRABLE_EFFECT])) {
                foreach($data[self::FIELD_UNDESIRABLE_EFFECT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addUndesirableEffect($v);
                    } else {
                        $this->addUndesirableEffect(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_UNDESIRABLE_EFFECT] instanceof FHIRReference) {
                $this->addUndesirableEffect($data[self::FIELD_UNDESIRABLE_EFFECT]);
            } else {
                $this->addUndesirableEffect(new FHIRReference($data[self::FIELD_UNDESIRABLE_EFFECT]));
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
        return "<MedicinalProductIndication{$xmlns}></MedicinalProductIndication>";
    }
    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Comorbidity (concurrent condition) or co-infection as part of the indication.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getComorbidity()
    {
        return $this->comorbidity;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Comorbidity (concurrent condition) or co-infection as part of the indication.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $comorbidity
     * @return static
     */
    public function addComorbidity(FHIRCodeableConcept $comorbidity = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $comorbidity
     * @return static
     */
    public function setComorbidity(array $comorbidity = [])
    {
        $this->comorbidity = [];
        if ([] === $comorbidity) {
            return $this;
        }
        foreach($comorbidity as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addComorbidity($v);
            } else {
                $this->addComorbidity(new FHIRCodeableConcept($v));
            }
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getDiseaseStatus()
    {
        return $this->diseaseStatus;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The status of the disease or symptom for which the indication applies.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $diseaseStatus
     * @return static
     */
    public function setDiseaseStatus(FHIRCodeableConcept $diseaseStatus = null)
    {
        $this->diseaseStatus = $diseaseStatus;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getDiseaseSymptomProcedure()
    {
        return $this->diseaseSymptomProcedure;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The disease, symptom or procedure that is the indication for treatment.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $diseaseSymptomProcedure
     * @return static
     */
    public function setDiseaseSymptomProcedure(FHIRCodeableConcept $diseaseSymptomProcedure = null)
    {
        $this->diseaseSymptomProcedure = $diseaseSymptomProcedure;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    public function getDuration()
    {
        return $this->duration;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity $duration
     * @return static
     */
    public function setDuration(FHIRQuantity $duration = null)
    {
        $this->duration = $duration;
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getIntendedEffect()
    {
        return $this->intendedEffect;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The intended effect, aim or strategy to be achieved by the indication.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $intendedEffect
     * @return static
     */
    public function setIntendedEffect(FHIRCodeableConcept $intendedEffect = null)
    {
        $this->intendedEffect = $intendedEffect;
        return $this;
    }

    /**
     * Indication for the Medicinal Product.
     *
     * Information about the use of the medicinal product in relation to other
     * therapies described as part of the indication.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIndication\FHIRMedicinalProductIndicationOtherTherapy[]
     */
    public function getOtherTherapy()
    {
        return $this->otherTherapy;
    }

    /**
     * Indication for the Medicinal Product.
     *
     * Information about the use of the medicinal product in relation to other
     * therapies described as part of the indication.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIndication\FHIRMedicinalProductIndicationOtherTherapy $otherTherapy
     * @return static
     */
    public function addOtherTherapy(FHIRMedicinalProductIndicationOtherTherapy $otherTherapy = null)
    {
        $this->otherTherapy[] = $otherTherapy;
        return $this;
    }

    /**
     * Indication for the Medicinal Product.
     *
     * Information about the use of the medicinal product in relation to other
     * therapies described as part of the indication.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductIndication\FHIRMedicinalProductIndicationOtherTherapy[] $otherTherapy
     * @return static
     */
    public function setOtherTherapy(array $otherTherapy = [])
    {
        $this->otherTherapy = [];
        if ([] === $otherTherapy) {
            return $this;
        }
        foreach($otherTherapy as $v) {
            if ($v instanceof FHIRMedicinalProductIndicationOtherTherapy) {
                $this->addOtherTherapy($v);
            } else {
                $this->addOtherTherapy(new FHIRMedicinalProductIndicationOtherTherapy($v));
            }
        }
        return $this;
    }

    /**
     * A populatioof people with some set of grouping criteria.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The population group to which this applies.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRPopulation[]
     */
    public function getPopulation()
    {
        return $this->population;
    }

    /**
     * A populatioof people with some set of grouping criteria.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The population group to which this applies.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRPopulation $population
     * @return static
     */
    public function addPopulation(FHIRPopulation $population = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRPopulation[] $population
     * @return static
     */
    public function setPopulation(array $population = [])
    {
        $this->population = [];
        if ([] === $population) {
            return $this;
        }
        foreach($population as $v) {
            if ($v instanceof FHIRPopulation) {
                $this->addPopulation($v);
            } else {
                $this->addPopulation(new FHIRPopulation($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The medication for which this is an indication.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The medication for which this is an indication.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $subject
     * @return static
     */
    public function addSubject(FHIRReference $subject = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $subject
     * @return static
     */
    public function setSubject(array $subject = [])
    {
        $this->subject = [];
        if ([] === $subject) {
            return $this;
        }
        foreach($subject as $v) {
            if ($v instanceof FHIRReference) {
                $this->addSubject($v);
            } else {
                $this->addSubject(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describe the undesirable effects of the medicinal product.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getUndesirableEffect()
    {
        return $this->undesirableEffect;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describe the undesirable effects of the medicinal product.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $undesirableEffect
     * @return static
     */
    public function addUndesirableEffect(FHIRReference $undesirableEffect = null)
    {
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $undesirableEffect
     * @return static
     */
    public function setUndesirableEffect(array $undesirableEffect = [])
    {
        $this->undesirableEffect = [];
        if ([] === $undesirableEffect) {
            return $this;
        }
        foreach($undesirableEffect as $v) {
            if ($v instanceof FHIRReference) {
                $this->addUndesirableEffect($v);
            } else {
                $this->addUndesirableEffect(new FHIRReference($v));
            }
        }
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
        if ([] !== ($vs = $this->getComorbidity())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_COMORBIDITY, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getDiseaseStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DISEASE_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDiseaseSymptomProcedure())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DISEASE_SYMPTOM_PROCEDURE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDuration())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DURATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getIntendedEffect())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INTENDED_EFFECT] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getOtherTherapy())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_OTHER_THERAPY, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getPopulation())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_POPULATION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getSubject())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SUBJECT, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getUndesirableEffect())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_UNDESIRABLE_EFFECT, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COMORBIDITY])) {
            $v = $this->getComorbidity();
            foreach($validationRules[self::FIELD_COMORBIDITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_INDICATION, self::FIELD_COMORBIDITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COMORBIDITY])) {
                        $errs[self::FIELD_COMORBIDITY] = [];
                    }
                    $errs[self::FIELD_COMORBIDITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DISEASE_STATUS])) {
            $v = $this->getDiseaseStatus();
            foreach($validationRules[self::FIELD_DISEASE_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_INDICATION, self::FIELD_DISEASE_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DISEASE_STATUS])) {
                        $errs[self::FIELD_DISEASE_STATUS] = [];
                    }
                    $errs[self::FIELD_DISEASE_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DISEASE_SYMPTOM_PROCEDURE])) {
            $v = $this->getDiseaseSymptomProcedure();
            foreach($validationRules[self::FIELD_DISEASE_SYMPTOM_PROCEDURE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_INDICATION, self::FIELD_DISEASE_SYMPTOM_PROCEDURE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DISEASE_SYMPTOM_PROCEDURE])) {
                        $errs[self::FIELD_DISEASE_SYMPTOM_PROCEDURE] = [];
                    }
                    $errs[self::FIELD_DISEASE_SYMPTOM_PROCEDURE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DURATION])) {
            $v = $this->getDuration();
            foreach($validationRules[self::FIELD_DURATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_INDICATION, self::FIELD_DURATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DURATION])) {
                        $errs[self::FIELD_DURATION] = [];
                    }
                    $errs[self::FIELD_DURATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INTENDED_EFFECT])) {
            $v = $this->getIntendedEffect();
            foreach($validationRules[self::FIELD_INTENDED_EFFECT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_INDICATION, self::FIELD_INTENDED_EFFECT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INTENDED_EFFECT])) {
                        $errs[self::FIELD_INTENDED_EFFECT] = [];
                    }
                    $errs[self::FIELD_INTENDED_EFFECT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OTHER_THERAPY])) {
            $v = $this->getOtherTherapy();
            foreach($validationRules[self::FIELD_OTHER_THERAPY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_INDICATION, self::FIELD_OTHER_THERAPY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OTHER_THERAPY])) {
                        $errs[self::FIELD_OTHER_THERAPY] = [];
                    }
                    $errs[self::FIELD_OTHER_THERAPY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_POPULATION])) {
            $v = $this->getPopulation();
            foreach($validationRules[self::FIELD_POPULATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_INDICATION, self::FIELD_POPULATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_POPULATION])) {
                        $errs[self::FIELD_POPULATION] = [];
                    }
                    $errs[self::FIELD_POPULATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBJECT])) {
            $v = $this->getSubject();
            foreach($validationRules[self::FIELD_SUBJECT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_INDICATION, self::FIELD_SUBJECT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBJECT])) {
                        $errs[self::FIELD_SUBJECT] = [];
                    }
                    $errs[self::FIELD_SUBJECT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_UNDESIRABLE_EFFECT])) {
            $v = $this->getUndesirableEffect();
            foreach($validationRules[self::FIELD_UNDESIRABLE_EFFECT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_INDICATION, self::FIELD_UNDESIRABLE_EFFECT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_UNDESIRABLE_EFFECT])) {
                        $errs[self::FIELD_UNDESIRABLE_EFFECT] = [];
                    }
                    $errs[self::FIELD_UNDESIRABLE_EFFECT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTAINED])) {
            $v = $this->getContained();
            foreach($validationRules[self::FIELD_CONTAINED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_CONTAINED, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_EXTENSION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IMPLICIT_RULES])) {
            $v = $this->getImplicitRules();
            foreach($validationRules[self::FIELD_IMPLICIT_RULES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_IMPLICIT_RULES, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_LANGUAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LANGUAGE])) {
                        $errs[self::FIELD_LANGUAGE] = [];
                    }
                    $errs[self::FIELD_LANGUAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_META])) {
            $v = $this->getMeta();
            foreach($validationRules[self::FIELD_META] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_META, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_META])) {
                        $errs[self::FIELD_META] = [];
                    }
                    $errs[self::FIELD_META][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductIndication $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductIndication
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
                throw new \DomainException(sprintf('FHIRMedicinalProductIndication::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRMedicinalProductIndication::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRMedicinalProductIndication;
        } elseif (!is_object($type) || !($type instanceof FHIRMedicinalProductIndication)) {
            throw new \RuntimeException(sprintf(
                'FHIRMedicinalProductIndication::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductIndication or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRDomainResource::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->comorbidity)) {
            foreach($children->comorbidity as $child) {
                $type->addComorbidity(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->diseaseStatus)) {
            $type->setDiseaseStatus(FHIRCodeableConcept::xmlUnserialize($children->diseaseStatus));
        }
        if (isset($children->diseaseSymptomProcedure)) {
            $type->setDiseaseSymptomProcedure(FHIRCodeableConcept::xmlUnserialize($children->diseaseSymptomProcedure));
        }
        if (isset($children->duration)) {
            $type->setDuration(FHIRQuantity::xmlUnserialize($children->duration));
        }
        if (isset($children->intendedEffect)) {
            $type->setIntendedEffect(FHIRCodeableConcept::xmlUnserialize($children->intendedEffect));
        }
        if (isset($children->otherTherapy)) {
            foreach($children->otherTherapy as $child) {
                $type->addOtherTherapy(FHIRMedicinalProductIndicationOtherTherapy::xmlUnserialize($child));
            }
        }
        if (isset($children->population)) {
            foreach($children->population as $child) {
                $type->addPopulation(FHIRPopulation::xmlUnserialize($child));
            }
        }
        if (isset($children->subject)) {
            foreach($children->subject as $child) {
                $type->addSubject(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->undesirableEffect)) {
            foreach($children->undesirableEffect as $child) {
                $type->addUndesirableEffect(FHIRReference::xmlUnserialize($child));
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
        if ([] !== ($vs = $this->getComorbidity())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_COMORBIDITY, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getDiseaseStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DISEASE_STATUS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDiseaseSymptomProcedure())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DISEASE_SYMPTOM_PROCEDURE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDuration())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DURATION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getIntendedEffect())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_INTENDED_EFFECT, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getOtherTherapy())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_OTHER_THERAPY, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getPopulation())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_POPULATION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getSubject())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SUBJECT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getUndesirableEffect())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_UNDESIRABLE_EFFECT, null, $v->_getFHIRXMLNamespace()));
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
        if ([] !== ($vs = $this->getComorbidity())) {
            $a[self::FIELD_COMORBIDITY] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_COMORBIDITY][] = $v;
            }
        }
        if (null !== ($v = $this->getDiseaseStatus())) {
            $a[self::FIELD_DISEASE_STATUS] = $v;
        }
        if (null !== ($v = $this->getDiseaseSymptomProcedure())) {
            $a[self::FIELD_DISEASE_SYMPTOM_PROCEDURE] = $v;
        }
        if (null !== ($v = $this->getDuration())) {
            $a[self::FIELD_DURATION] = $v;
        }
        if (null !== ($v = $this->getIntendedEffect())) {
            $a[self::FIELD_INTENDED_EFFECT] = $v;
        }
        if ([] !== ($vs = $this->getOtherTherapy())) {
            $a[self::FIELD_OTHER_THERAPY] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_OTHER_THERAPY][] = $v;
            }
        }
        if ([] !== ($vs = $this->getPopulation())) {
            $a[self::FIELD_POPULATION] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_POPULATION][] = $v;
            }
        }
        if ([] !== ($vs = $this->getSubject())) {
            $a[self::FIELD_SUBJECT] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_SUBJECT][] = $v;
            }
        }
        if ([] !== ($vs = $this->getUndesirableEffect())) {
            $a[self::FIELD_UNDESIRABLE_EFFECT] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_UNDESIRABLE_EFFECT][] = $v;
            }
        }
        if ([] !== ($vs = $this->_getFHIRComments())) {
            $a[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS] = $vs;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => $this->_getResourceType()] + $a;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}